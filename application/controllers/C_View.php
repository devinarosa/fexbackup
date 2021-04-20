<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_View extends CI_CONTROLLER {
    protected $email_config = [
        'protocol' => 'smtp',
        'smtp_host' => 'mail.hmssemarang.com',
        'smtp_user' => 'fex@hmssemarang.com',
        'smtp_pass' => '@dmin2021FEX',
        'smtp_port' => 465,
        'smtp_crypto' => 'ssl',
        'mailtype'  => 'html',
        'charset'   => 'utf-8'
    ];

    public function __construct()
        {
            parent::__construct();
            $this->load->model('M_View');
            $this->load->model('M_Twilio');
            $this->load->helper('download');
            $this->load->helper(array('form', 'url'));
            $this->load->helper(array('url', 'form'));
            date_default_timezone_set('Asia/Jakarta');
        }

    public function Auth(){

        $username = $this->input->post('txtUsernameFex');
        $password = $this->input->post('txtPasswordFex');

        if ($username == '' && $password == '') {
            $this->session->set_flashdata('error', 'Incorrect username or password. Try Again!');
            redirect('Login');
        }else{
        $where = array(
            'username' => $username,
            'password' => md5($password)
            );
        $username = $where['username'];
        $password = $where['password'];
        $cek = $this->M_View->cek_login($username,$password);
        $status = $this->M_View->cek_status($username,$password);

        if (empty($status)) {
            $this->session->set_flashdata('error', 'Incorrect username or password. Try Again!');
            redirect('Login');
        }

        $access_id  = $status[0]['user_type_id'];
        $user_id    = $status[0]['user_id'];
        $fullname   = $status[0]['fullname'];
        $date       = date('Y-m-d H:i:s');

        $access_name = '';
        $key = '';

        if ($access_id == 1){
        $access_name = 'Admin';
        $key = 'Y';
        }elseif ($access_id == 2){
        $access_name = 'Vendor';
        $key = 'Y';
        }elseif ($access_id == 3){
        $access_name = 'Tenant';
        $key = 'Y';
        }else{
        $access_name = 'User';
        $key = 'N';
        }

        $this->setLog($user_id,$access_id);

        if($cek > 0){
 
            $data_session = array(
                'name' => $username,
                'access_name' => $access_name,
                'access_id' => $access_id,
                'user_id' => $user_id,
                'fullname' => $fullname,
                'key' => $key,
                'time' => $date,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
            
            if ($access_id == 1){
            redirect('DashboardAdmin');
            }elseif ($access_id == 2){
            redirect('DashboardVendor');
            }elseif ($access_id == 3){
            redirect('DashboardTenant');
            }else{
            redirect('Dashboard');
            }
            
                      
        }else{

            $this->session->set_flashdata('error', 'Incorrect username or password. Try Again!');
            redirect('Login');

            }
        }
    }

    public function GoogleAuth() {
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $avatar = $this->input->post('avatar');

        $cek = $this->M_View->cek_google($id,$email);

        if (count($cek) == 0) {
            $userTypeID = '4';
            $creation_date = date('Y-m-d H:i:s');

            $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
            $pass = array(); 
            $alphaLength = strlen($alphabet) - 1; 
            for ($i = 0; $i < 6; $i++) {
                $n = rand(0, $alphaLength);
                $pass[] = $alphabet[$n];
            }
            $res_password = implode($pass);
            $username = explode('@', $email)[0];

            $addingGeneralAccount = $this->M_View->addingGeneralAccountUser($username,$email,'',$res_password,$name,'',$userTypeID,$creation_date);
            $user_id = $addingGeneralAccount[0]['user_id'];
            $addingUserAccount = $this->M_View->addingUserAccount($user_id,$name,$avatar,$creation_date,$id);
        }

        $cek = $this->M_View->cek_google($id, $email);
        
        $access_id  = $cek[0]['user_type_id'];
        $user_id    = $cek[0]['user_id'];
        $fullname   = $cek[0]['fullname'];
        $date       = date('Y-m-d H:i:s');

        $access_name = '';
        $key = '';

        if ($access_id == 1){
            $access_name = 'Admin';
            $key = 'Y';
        }elseif ($access_id == 2){
            $access_name = 'Vendor';
            $key = 'Y';
        }elseif ($access_id == 3){
            $access_name = 'Tenant';
            $key = 'Y';
        }else{
            $access_name = 'User';
            $key = 'N';
        }

        $this->setLog($user_id,$access_id);

        $data_session = array(
            'name' => explode('@', $email)[0],
            'access_name' => $access_name,
            'access_id' => $access_id,
            'user_id' => $user_id,
            'fullname' => $fullname,
            'key' => $key,
            'time' => $date,
            'status' => "login",
        );

        $this->session->set_userdata($data_session);

        return redirect('Dashboard');
    }

    public function index(){
        $this->setVisitor();
        $data['subs'] = $this->M_View->getDataSubCategory(1);
        $data['category'] = $this->M_View->getDataCategory();
        $data['vendor'] = $this->M_View->getDataVendorByCategory();
        $data['tenant'] = $this->M_View->getDataTenantByCategory();
        $data['slideshow'] = $this->M_View->getDisplayAll();
        $this->load->view('Main/V_Mainpage', $data);
    }

    public function Login(){
        $this->setVisitor();
        $this->load->view('Main/V_Login');
    }

    public function cek(){
        if($this->session->userdata('status') != "login"){
            redirect(base_url("Login"));
        }
    }
    
    public function Dashboard(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = '';
        if ($access_id == 1){

            $data['org'] = $this->M_View->getDataAdminByID($user_id);

        }else  if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);

        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);

        }else if ($access_id == 4){

            $data['org'] = $this->M_View->getDataUserByID($user_id);

        }

        $data['subs'] = $this->M_View->getDataSubCategory(1);
        $data['category'] = $this->M_View->getDataCategory();
        $data['vendor'] = $this->M_View->getDataVendorByCategory();
        $data['tenant'] = $this->M_View->getDataTenantByCategory();
        $data['slideshow'] = $this->M_View->getDisplayAll();
        
        $this->load->view('Main/V_Dashboard', $data);
    }

    public function doRegister()
    {
        $p = $this->input;
        $username = $p->post('username');
        $idn = $p->post('telepon');
        $phone = '62'.$idn;
        $email = $p->post('email');
        $password = $p->post('password2');
        $fullname = $p->post('fullname');

        $checkingPhone = $this->M_View->checkingUniqueValuePhone($phone);
        $checkingEmail = $this->M_View->checkingUniqueValueEmail($email);
        $checkingUsername = $this->M_View->checkingUniqueValueUsername($username);

        if ($checkingPhone > 0){
            $this->session->set_flashdata('error', 'Phone number had been registered!');
            redirect('Register');
        }else if ($checkingEmail > 0){
            $this->session->set_flashdata('error', 'Email had been registered!');
            redirect('Register');
        }else if ($checkingUsername > 0){
            $this->session->set_flashdata('error', 'Username had been taken!');
            redirect('Register');
        }else{

        $userTypeID = '4';
        $creation_date = date('Y-m-d H:i:s');

        $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $res_password = implode($pass); 


        $addingGeneralAccount = $this->M_View->addingGeneralAccountUser($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingUserAccount = $this->M_View->addingUserAccount($user_id,$fullname,'user.jpg',$creation_date,null);

        $this->session->set_flashdata('msg', 'Account created successfully!');

        redirect('Register');
        }

        
    }

    public function getChangeCategory()
    {
        $id_category = $this->input->post('id_category');
        // echo $id_category;exit();
        $data['subs'] = $this->M_View->getDataSubCategory($id_category);
        $data['vendor'] = $this->M_View->getDataVendorByCategory($id_category);
        $data['tenant'] = $this->M_View->getDataTenantByCategory($id_category);
        // $data['subs'] = $this->M_View->getDataSubCategory(1);
        $data['category'] = $this->M_View->getDataCategory();
        // $data['vendor'] = $this->M_View->getDataVendorByCategory();
        // $data['tenant'] = $this->M_View->getDataTenantByCategory();
        $data['slideshow'] = $this->M_View->getDisplayAll();

        $this->load->view('Main/V_DashboardFiltered', $data);
    }

    public function DashboardAdmin(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);
        $day = date('Y-m-d');

        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        $data['vendor'] = $this->M_View->getRegisteredVendor();
        $data['tenant'] = $this->M_View->getRegisteredTenant();
        $data['user'] = $this->M_View->getRegisteredUser();
        $data['all'] = $this->M_View->getRegisteredAll();
        $data['categoryGrap'] = $this->M_View->getGraphicCategory();
        $data['getLoggedToday'] = $this->M_View->getLoggedToday($day);
        $data['getLoggedCounter'] = $this->M_View->getLoggedCounter($day);
        $data['all_user'] = $this->M_View->getRegisteredUserAll();

        $name = array();
        $qty = array();
        foreach ($data['categoryGrap'] as $k) {
            $name[] = $k['name'];
            $qty[] = $k['qty'];
        }
        $items = array();
        $month = date('m');

        $glt_username = array();
        $glt_qty = array();
        foreach ($data['getLoggedToday'] as $k) {
            $glt_username[] = $k['username'];
            $glt_qty[] = $k['counted'];
        }

        $items = array();
        $month = date('m');
        for ($i=1; $i < 32; $i++) { 
            $bismillah = $this->M_View->getDataByDay($i,$month);
            $items[] = $bismillah[0]['num'];
        }

        $imp_arr = implode(',', $items);
        $imp_name = implode(',', $name);
        $imp_qty = implode(',', $qty);
        $imp_glt_username = implode(',', $glt_username);
        $imp_glt_qty = implode(',', $glt_qty);

        $data['graphic'] = $imp_arr;
        $data['n_cat'] = $imp_name;
        $data['q_cat'] = $imp_qty;
        $data['u_glt'] = $imp_glt_username;
        $data['q_glt'] = $imp_glt_qty;


        if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){
            redirect("DashboardTenant");
        }else if ($access_id == 4){
            redirect("Dashboard");
        }

        $data['title'] = 'Admin | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_DashboardAdmin', $data);
    }

    public function sendStream()
    {
        $url_stream = $this->input->post('url_stream');
        $this->M_View->UpdateStream($url_stream);

        $this->session->set_flashdata('msg', 'Livestream updated successfully!');

        redirect('DashboardAdmin');
    }
    public function AddVendor(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){
            redirect("DashboardTenant");
        }else if ($access_id == 4){
            redirect("Dashboard");
        }

        $data['title'] = 'Admin | Add Vendor';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $data['vendor'] = $this->M_View->getAllVendor();

        $searchFirst = $this->M_View->getRegisteredVendor();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10000) {
            $username = 'VE-'.sprintf('%04d', $cek_number);
        } else {
            $username = 'VE-L'.$cek_number;
        }

        $data['username'] = $username;
        $data['vendor_id'] = $cek_number;

        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $data['password'] = implode($pass); 

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_AddVendor', $data);
    }

    public function getTriggerSub()
    {
        $id_category = $this->input->post('category');
        $sub = $this->M_View->getDataSubCategory($id_category);

        echo json_encode($sub);
    }

    public function SubmitVendor()
    {
        $username = $this->input->post('txtUsernameVendor');
        $password = $this->input->post('txtPasswordVendor');

        $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $res_password = implode($pass); 

        $name = $this->input->post('txtNamaVendor');
        $cek_petik = str_replace("'", " ", $name);
        $fullname = str_replace('"', " ", $cek_petik);
        $email = $this->input->post('txtEmailVendor');
        $phone = $this->input->post('txtPhoneVendor');
        // $category = $this->input->post('txtCategoryVendor');
        // $preSubCategory = $this->input->post('txtSubVendor');
        $subcategory = '';

        $userTypeID = '2';
        $creation_date = date('Y-m-d H:i:s');

        $category = null;
        $subcategory = null;

        // if ($category == 3 && $preSubCategory == 14){
        //     $newSub = $this->input->post('txtOther');
        //     $addingNewCategory = $this->M_View->addingNewCategory($newSub,$category);
        //     $subcategory = $addingNewCategory[0]['id'];
        // }else if ($category !== 3 && $preSubCategory !== 14){
        //     $subcategory = $this->input->post('txtSubVendor');
        // }

        $addingGeneralAccount = $this->M_View->addingGeneralAccountVendor($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingVendorAccount = $this->M_View->addingVendorAccount($user_id,$fullname,$creation_date,$category,$subcategory);

        redirect('AddVendor');
    }

    public function AddTenant(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        $data['title'] = 'Admin | Add Tenant';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-active';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $data['tenant'] = $this->M_View->getAllTenant();

        $searchFirst = $this->M_View->getRegisteredTenant();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10000) {
            $username = 'TE-'.sprintf('%04d', $cek_number);
        } else {
            $username = 'TE-L'.$cek_number;
        }

        $data['username'] = $username;
        $data['tenant_id'] = $cek_number;

        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $data['password'] = implode($pass); 

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_AddTenant', $data);
    }

    public function SubmitTenant()
    {
        $username = $this->input->post('txtUsernameTenant');
        $password = $this->input->post('txtPasswordTenant');

        $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $res_password = implode($pass); 

        $name = $this->input->post('txtNamaTenant');
        $cek_petik = str_replace("'", " ", $name);
        $fullname = str_replace('"', " ", $cek_petik);
        $email = $this->input->post('txtEmailTenant');
        $phone = $this->input->post('txtPhoneTenant');
        // $category = $this->input->post('txtCategoryTenant');
        // $preSubCategory = $this->input->post('txtSubTenant');
        $subcategory = '';

        $userTypeID = '3';
        $creation_date = date('Y-m-d H:i:s');
        
        $category = null;
        $subcategory = null;

        // if ($category == 3 && $preSubCategory == 14){
        //     $newSub = $this->input->post('txtOther');
        //     $addingNewCategory = $this->M_View->addingNewCategory($newSub,$category);
        //     $subcategory = $addingNewCategory[0]['id'];
        // }else if ($category !== 3 && $preSubCategory !== 14){
        //     $subcategory = $this->input->post('txtSubTenant');
        // }

        $addingGeneralAccount = $this->M_View->addingGeneralAccountTenant($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingVendorAccount = $this->M_View->addingTenantAccount($user_id,$fullname,$creation_date,$category,$subcategory);

        redirect('AddTenant');
    }

    public function AddAdmin(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Admin | Add Admin';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-active';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $data['category'] = $this->M_View->getDataCategory();
        $data['admin'] = $this->M_View->getAllAdmin();
        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        $searchFirst = $this->M_View->getRegisteredAdmin();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10000) {
            $username = 'ADM-'.sprintf('%04d', $cek_number);
        } else {
            $username = 'ADM-L'.$cek_number;
        }

        $data['username'] = $username;
        $data['admin_id'] = $cek_number;

        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $data['password'] = implode($pass); 

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_AddAdmin', $data);
    }

    public function SubmitAdmin()
    {
        $username = $this->input->post('txtUsernameAdmin');
        $password = $this->input->post('txtPasswordAdmin');

        $alphabet = "ABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); 
        $alphaLength = strlen($alphabet) - 1; 
        for ($i = 0; $i < 6; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        $res_password = implode($pass); 

        $name = $this->input->post('txtNamaAdmin');
        $cek_petik = str_replace("'", " ", $name);
        $fullname = str_replace('"', " ", $cek_petik);
        $email = $this->input->post('txtEmailAdmin');
        $phone = $this->input->post('txtPhoneAdmin');

        $userTypeID = '1';
        $creation_date = date('Y-m-d H:i:s');

        $addingGeneralAccount = $this->M_View->addingGeneralAccountAdmin($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingVendorAccount = $this->M_View->addingAdminAccount($user_id,$fullname,$creation_date);

        redirect('AddAdmin');
    }

    public function DisplaySetting(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = $this->M_View->getDataAdminByID($user_id);
        $data['display'] = $this->M_View->getDisplayAll();

        $data['title'] = 'Admin | Display Setting';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-active';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_DisplaySetting', $data);
    }

    public function submitDisplay()
    {
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $access_id = $data['diri']['access_id'];

        $satu = $this->input->post('txtLivestream1');
        $this->M_View->updateDT1(1, $satu);
        $lima = $this->input->post('txtDescription5');
        $this->M_View->updateDT5(5, $lima);

        if (!empty($_FILES['car2']['name'])){
            $namafile2 = "[car2]-".md5($_FILES['car2']['name']).".jpg";
            $file_tmp2 = $_FILES['car2']['tmp_name']; 

            move_uploaded_file($file_tmp2, 'assets/img/'.$namafile2);
            $updateDT2 = $this->M_View->updateDT2(2, $namafile2);
        }else{}

        if (!empty($_FILES['car3']['name'])){
            $namafile3 = "[car3]-".md5($_FILES['car3']['name']).".jpg";
            $file_tmp3 = $_FILES['car3']['tmp_name']; 

            move_uploaded_file($file_tmp3, 'assets/img/'.$namafile3);
            $updateDT3 = $this->M_View->updateDT3(3, $namafile3);
        }else{}

        if (!empty($_FILES['car4']['name'])){
            $namafile4 = "[car4]-".md5($_FILES['car4']['name']).".jpg";
            $file_tmp4 = $_FILES['car4']['tmp_name']; 

            move_uploaded_file($file_tmp4, 'assets/img/'.$namafile4);
            $updateDT4 = $this->M_View->updateDT4(4, $namafile4);
        }else{}

        $this->session->set_flashdata('msg', 'Modification is completed');
        redirect("DisplaySetting");
    }

    public function editImgIcon()
    {
        $id = $this->input->post('id');

        if (!empty($_FILES['cek']['name'])){

            $namafile = md5($_FILES['cek']['name']).".jpg";
            $file_tmp = $_FILES['cek']['tmp_name']; 

            move_uploaded_file($file_tmp, 'assets/img/'.$namafile);
            $updateCategoryFile = $this->M_View->updateCategoryFile($id, $namafile);

            $this->session->set_flashdata('msg', 'Modification is completed');
            redirect("MenuSetup");
        }else{

            $this->session->set_flashdata('err', 'Sorry, file is empty');
            redirect("MenuSetup");
        }
    }

    public function submitMenuManagement()
    {

        $category = $this->input->post('txtCat');
        $sub = $this->input->post('txtSubCat[]');

        if (!empty($_FILES['txfIcon']['name'])){

            $namafile = md5($_FILES['txfIcon']['name']).".jpg";
            $file_tmp = $_FILES['txfIcon']['tmp_name']; 

            move_uploaded_file($file_tmp, 'assets/img/'.$namafile);
            $insertCategoryFile = $this->M_View->insertCategory($category, $namafile);
            $id_category = $insertCategoryFile[0]['id'];

            foreach ($sub as $k) {
                $insertSubCategoryFile = $this->M_View->insertSubCategory($id_category,$k);
            }

            $this->session->set_flashdata('msg', 'Modification is completed');
            redirect("MenuSetup");

        }else{

            $this->session->set_flashdata('err', 'Sorry, file is empty');
            redirect("MenuSetup");
        }
    }

    public function MenuSetup(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        $data['title'] = 'Admin | Menu Setup';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-active';
        $data['active7'] = 'menu-passive';

        $data['list'] = $this->M_View->getListCategory();

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_MenuSetup', $data);
    }

    public function deleteSubCategory()
    {
        $id = $this->input->post('id');
        $deleteSub = $this->M_View->SoftDeleteSub($id);
    }

    public function editSubCategory()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('login');
        $editSub = $this->M_View->editSub($id,$name);
    }

    public function deleteCategory()
    {
        $id = $this->input->post('id');
        $deleteSub = $this->M_View->SoftDeleteCat($id);
    }

    public function editCategory()
    {
        $id = $this->input->post('id');
        $name = $this->input->post('login');
        $editSub = $this->M_View->editCat($id,$name);
    }

    public function ExportImport(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = $this->M_View->getDataAdminByID($user_id);

        $data['title'] = 'Admin | Export Import';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-active';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_EksporImpor', $data);
    }

    public function Profile($id,$id2)
    {
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        if ($id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($id2);
            $data['subs'] = $this->M_View->getDataSubCategoryAll();
            $data['category'] = $this->M_View->getDataCategory();
            $data['foto'] = $this->M_View->getDataFotoVendor($id2);
            $data['fasilitas'] = $this->M_View->getDataFasilitasVendor($id2);

        }else if ($id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($id2);
            $data['subs'] = $this->M_View->getDataSubCategoryAll();
            $data['category'] = $this->M_View->getDataCategory();
            $data['foto'] = $this->M_View->getDataFotoVendor($id2);
            $data['fasilitas'] = $this->M_View->getDataFasilitasVendor($id2);

        }else if ($id !== 3 || $id !== 2){

            redirect("Dashboard");
        }

        $this->load->view('Main/V_SchoolProfile', $data);
    }

    public function DashboardVendor(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Vendor | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);
            
            $aa = $data['org'][0]['id_subcategory'];
            if ($aa == ''){
                $cek = $this->M_View->getDataPostLogsBySub(0);
            }else{
                $cek = $this->M_View->getDataPostLogsBySub($aa);
            }
            

            $pattern = 0;
            if (empty($cek)){
                $pattern = 0;
            }else{
                $pattern = $cek[0]['pattern'];
            }
            $data['post'] = $this->M_View->getDataPostMsgByID($pattern);
            
        }else if ($access_id == 3){
            redirect("DashboardVendor");
        }else{
            redirect("Dashboard");
        }

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_DashboardVendor', $data);
    }

    public function VendorEditProfile(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Vendor | Edit Profile';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';
        $data['active3'] = 'menu-passive';

        if ($access_id == 2){
            $data['org'] = $this->M_View->getDataVendorByID($user_id);
        }else if ($access_id == 3){
            redirect("DashboardTenant");
        }else{
            redirect("Dashboard");
        }
        $data['subs'] = $this->M_View->getDataSubCategoryAll();
        $data['category'] = $this->M_View->getDataCategory();
        $data['foto'] = $this->M_View->getDataFotoVendor($user_id);
        $data['fasilitas'] = $this->M_View->getDataFasilitasVendor($user_id);

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_EditProfileVendor', $data);
    }

    public function VendorManageAccount(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Vendor | Manage Account';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-active';

        if ($access_id == 2){
            $data['org'] = $this->M_View->getDataVendorByID($user_id);
        }else if ($access_id == 3){
            redirect("DashboardTenant");
        }else{
            redirect("Dashboard");
        }

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_EditAccountVendor', $data);
    }

    public function EditProfileVendor()
    {

        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $access_id = $data['diri']['access_id'];

        $nama = $this->input->post('txtNama');
        $user_id = $this->input->post('txtUserID');
        $deskripsi = $this->input->post('txaDeskripsi');
        $email = $this->input->post('txtEmail');
        $color = $this->input->post('txcColor');
        $telpon = $this->input->post('txtTelpon');
        $alamat = $this->input->post('txtAlamat');
        $url = $this->input->post('txtURL');
        $fitur = $this->input->post('txaFiturTambahan');
        $arr_keterangan_tambahan = $this->input->post('txtKeteranganFasilitas[]');
        $category = $this->input->post('slcCat');
        $subCategory = $this->input->post('slcSubs[]');
        $imp_subs = implode(', ', $subCategory);
        $updated_date = date('Y-m-d');

        if (!empty($_FILES['txfLogo']['name'])){

            $namafile = "logo-".$user_id."-".md5($_FILES['txfLogo']['name']).".jpg";
            $file_tmp = $_FILES['txfLogo']['tmp_name']; 

            move_uploaded_file($file_tmp, 'assets/img/roles/'.$namafile);
            $updateNonMultiple = $this->M_View->updateVendor($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon);
        }else if (empty($_FILES['txfLogo']['name'])){

            $nama_foto = $this->M_View->getFotoVendorForUpdate($user_id);
            $namafile = $nama_foto[0]['logo'];
            $updateNonMultiple = $this->M_View->updateVendor($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon);
        }

        

        if ($_FILES['txfFoto']['name']){

            $count = count($_FILES['txfFoto']['name']);
        
            for($i=0;$i<$count;$i++){
            
                if(!empty($_FILES['txfFoto']['name'][$i])){
          
                  $namafilefoto[$i] = 'foto-'.$user_id.'-'.md5($_FILES['txfFoto']['name'][$i]).".jpg";
                  $file_tmpfoto[$i] = $_FILES['txfFoto']['tmp_name'][$i]; 

                  move_uploaded_file($file_tmpfoto[$i], 'assets/upload/foto/'.$namafilefoto[$i]);
                  $a = $i+1;
                  $insertFotoVendor = $this->M_View->insertFotoVendor($user_id,$updated_date,$namafilefoto[$i],$a);
                }
            }

        }

        for ($s=1; $s < 4; $s++) { 

                if (!empty($_FILES['txfFoto'.$s]['name'])){

                     $namaupdate = 'foto-'.$user_id.'-'.md5($_FILES['txfFoto'.$s]['name']).".jpg";
                     $file_namaupdate = $_FILES['txfFoto'.$s]['tmp_name']; 

                     $nama_foto = $this->M_View->getFotoForUpdate($user_id,$s);
                     $file = $nama_foto[0]['filename'];

                      if (file_exists("assets/upload/foto/".$file)) 
                        {
                            unlink("assets/upload/foto/".$file);
                            move_uploaded_file($file_namaupdate, 'assets/upload/foto/'.$namaupdate);
                        }

                      $insertFotoVendor = $this->M_View->updateFotoVendor($user_id,$updated_date,$namaupdate,$s);
            }
        }

        if ($_FILES['txfFasilitas']['name']){

            $count = count($_FILES['txfFasilitas']['name']);
        
            for($h=0;$h<$count;$h++){
            
                if(!empty($_FILES['txfFasilitas']['name'][$h])){
          
                  $namafilefasilitas[$h] = 'fasilitas-'.$user_id.'-'.md5($_FILES['txfFasilitas']['name'][$h]).".jpg";
                  $file_tmpfasilitas[$h] = $_FILES['txfFasilitas']['tmp_name'][$h]; 

                  move_uploaded_file($file_tmpfasilitas[$h], 'assets/upload/fasilitas/'.$namafilefasilitas[$h]);
                  $b = $h+1;
                  $insertFasilitasVendor = $this->M_View->insertFasilitasVendor($user_id,$updated_date,$namafilefasilitas[$h],$arr_keterangan_tambahan[$h],$b);
                }
            }

        }

        for ($t=1; $t < 4; $t++) { 

                if (!empty($_FILES['txfFasilitas'.$t]['name'])){

                     $namaupdate2 = 'foto-'.$user_id.'-'.md5($_FILES['txfFasilitas'.$t]['name']).".jpg";
                     $file_namaupdate2 = $_FILES['txfFasilitas'.$t]['tmp_name']; 

                     $nama_foto2 = $this->M_View->getFasilitasForUpdate($user_id,$t);
                     $file2 = $nama_foto2[0]['filename'];

                      if (file_exists("assets/upload/fasilitas/".$file2)) 
                        {
                            unlink("assets/upload/fasilitas/".$file2);
                            move_uploaded_file($file_namaupdate2, 'assets/upload/fasilitas/'.$namaupdate2);
                        }

                     $note = $this->input->post('txtKeteranganFasilitas'.$t);
                     $insertFotoVendor = $this->M_View->updateFasilitasVendor($user_id,$updated_date,$namaupdate2,$t,$note);
            }
        }

        $this->session->set_flashdata('msg', 'Modification is completed');
        redirect("VendorEditProfile");

    }

    public function EditAccountVendor()
    {
        $user_id = $this->input->post('txtUserID');
        $password = $this->input->post('txpPassword');

        $this->M_View->renewAccountVendor($user_id,$password);

        $this->session->set_flashdata('msg', 'Account modified successfully');
        redirect("VendorManageAccount");

    }

    public function DashboardTenant(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Tenant | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';

        if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);
            
            $aa = $data['org'][0]['id_subcategory'];
            if ($aa == ''){
                $cek = $this->M_View->getDataPostLogsBySub(0);
            }else{
                $cek = $this->M_View->getDataPostLogsBySub($aa);
            }

            $pattern = 0;
            if (empty($cek)){
                $pattern = 0;
            }else{
                $pattern = $cek[0]['pattern'];
            }
            $data['post'] = $this->M_View->getDataPostMsgByID($pattern);
        }else{
            redirect("Dashboard");
        }

        $this->load->view('Main/V_TenantSidemenu', $data);
        $this->load->view('Main/V_DashboardTenant', $data);
    }

    public function TenantEditProfile(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Tenant | Edit Profile';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';
        $data['active3'] = 'menu-passive';

        if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){
            $data['org'] = $this->M_View->getDataTenantByID($user_id);
        }else{
            redirect("Dashboard");
        }

        $data['subs'] = $this->M_View->getDataSubCategoryAll();
        $data['category'] = $this->M_View->getDataCategory();
        $data['foto'] = $this->M_View->getDataFotoVendor($user_id);
        $data['fasilitas'] = $this->M_View->getDataFasilitasVendor($user_id);

        $this->load->view('Main/V_TenantSidemenu', $data);
        $this->load->view('Main/V_EditProfileTenant', $data);
    }

    public function activateVendor()
    {

        $check = $this->input->post('check');
        $user_id = $this->input->post('user_id');

        $this->M_View->statVendor($check,$user_id);
    }

    public function disabledVendor()
    {
        $check = $this->input->post('check');
        $user_id = $this->input->post('user_id');

        $this->M_View->statVendor($check,$user_id);
    }

    public function TenantManageAccount(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Tenant | Manage Account';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-active';

        if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){
            $data['org'] = $this->M_View->getDataTenantByID($user_id);
        }else{
            redirect("Dashboard");
        }

        $data['subs'] = $this->M_View->getDataSubCategoryAll();
        $data['category'] = $this->M_View->getDataCategory();
        $data['foto'] = $this->M_View->getDataFotoVendor($user_id);
        $data['fasilitas'] = $this->M_View->getDataFasilitasVendor($user_id);

        $this->load->view('Main/V_TenantSidemenu', $data);
        $this->load->view('Main/V_EditAccountTenant', $data);
    }

    public function EditProfileTenant()
    {

        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $access_id = $data['diri']['access_id'];

        // echo "<pre>";print_r($_POST);
        // echo "<br>";print_r($_FILES);
        // exit();

        $nama = $this->input->post('txtNama');
        $user_id = $this->input->post('txtUserID');
        $deskripsi = $this->input->post('txaDeskripsi');
        $email = $this->input->post('txtEmail');
        $color = $this->input->post('txcColor');
        $telpon = $this->input->post('txtTelpon');
        $alamat = $this->input->post('txtAlamat');
        $url = $this->input->post('txtURL');
        $fitur = $this->input->post('txaFiturTambahan');
        $arr_keterangan_tambahan = $this->input->post('txtKeteranganFasilitas[]');
        $category = $this->input->post('slcCat');
        $subCategory = $this->input->post('slcSubs[]');
        $imp_subs = implode(', ', $subCategory);
        $updated_date = date('Y-m-d');

        if (!empty($_FILES['txfLogo']['name'])){

            $namafile = "logo-".$user_id."-".md5($_FILES['txfLogo']['name']).".jpg";
            $file_tmp = $_FILES['txfLogo']['tmp_name']; 

            move_uploaded_file($file_tmp, 'assets/img/roles/'.$namafile);
            $updateNonMultiple = $this->M_View->updateTenant($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon);
        }else if (empty($_FILES['txfLogo']['name'])){

            $nama_foto = $this->M_View->getFotoTenantForUpdate($user_id);
            $namafile = $nama_foto[0]['logo'];
            $updateNonMultiple = $this->M_View->updateTenant($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon);
        }

        

        if ($_FILES['txfFoto']['name']){

            $count = count($_FILES['txfFoto']['name']);
        
            for($i=0;$i<$count;$i++){
            
                if(!empty($_FILES['txfFoto']['name'][$i])){
          
                  $namafilefoto[$i] = 'foto-'.$user_id.'-'.md5($_FILES['txfFoto']['name'][$i]).".jpg";
                  $file_tmpfoto[$i] = $_FILES['txfFoto']['tmp_name'][$i]; 

                  move_uploaded_file($file_tmpfoto[$i], 'assets/upload/foto/'.$namafilefoto[$i]);
                  $a = $i+1;
                  $insertFotoVendor = $this->M_View->insertFotoTenant($user_id,$updated_date,$namafilefoto[$i],$a);
                }
            }

        }

        for ($s=1; $s < 4; $s++) { 

                if (!empty($_FILES['txfFoto'.$s]['name'])){

                     $namaupdate = 'foto-'.$user_id.'-'.md5($_FILES['txfFoto'.$s]['name']).".jpg";
                     $file_namaupdate = $_FILES['txfFoto'.$s]['tmp_name']; 

                     $nama_foto = $this->M_View->getFotoForUpdate($user_id,$s);
                     $file = $nama_foto[0]['filename'];

                      if (file_exists("assets/upload/foto/".$file)) 
                        {
                            unlink("assets/upload/foto/".$file);
                            move_uploaded_file($file_namaupdate, 'assets/upload/foto/'.$namaupdate);
                        }

                      $insertFotoVendor = $this->M_View->updateFotoTenant($user_id,$updated_date,$namaupdate,$s);
            }
        }

        if ($_FILES['txfFasilitas']['name']){

            $count = count($_FILES['txfFasilitas']['name']);
        
            for($h=0;$h<$count;$h++){
            
                if(!empty($_FILES['txfFasilitas']['name'][$h])){
          
                  $namafilefasilitas[$h] = 'fasilitas-'.$user_id.'-'.md5($_FILES['txfFasilitas']['name'][$h]).".jpg";
                  $file_tmpfasilitas[$h] = $_FILES['txfFasilitas']['tmp_name'][$h]; 

                  move_uploaded_file($file_tmpfasilitas[$h], 'assets/upload/fasilitas/'.$namafilefasilitas[$h]);
                  $b = $h+1;
                  $insertFasilitasVendor = $this->M_View->insertFasilitasTenant($user_id,$updated_date,$namafilefasilitas[$h],$arr_keterangan_tambahan[$h],$b);
                }
            }

        }

        for ($t=1; $t < 4; $t++) { 

                if (!empty($_FILES['txfFasilitas'.$t]['name'])){

                     $namaupdate2 = 'foto-'.$user_id.'-'.md5($_FILES['txfFasilitas'.$t]['name']).".jpg";
                     $file_namaupdate2 = $_FILES['txfFasilitas'.$t]['tmp_name']; 

                     $nama_foto2 = $this->M_View->getFasilitasForUpdate($user_id,$t);
                     $file2 = $nama_foto2[0]['filename'];

                      if (file_exists("assets/upload/fasilitas/".$file2)) 
                        {
                            unlink("assets/upload/fasilitas/".$file2);
                            move_uploaded_file($file_namaupdate2, 'assets/upload/fasilitas/'.$namaupdate2);
                        }

                     $note = $this->input->post('txtKeteranganFasilitas'.$t);
                     $insertFotoVendor = $this->M_View->updateFasilitasTenant($user_id,$updated_date,$namaupdate2,$t,$note);
            }
        }

        $this->session->set_flashdata('msg', 'Modification is completed');
        redirect("TenantEditProfile");

    }

    public function EditAccountTenant()
    {

        $user_id = $this->input->post('txtUserID');
        $password = $this->input->post('txpPassword');

        $this->M_View->renewAccountVendor($user_id,$password);

        $this->session->set_flashdata('msg', 'Account modified successfully');
        redirect("TenantManageAccount");

    }

    public function EditProfile(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        if ($access_id == 1){
            redirect("DashboardAdmin");
        }else if ($access_id == 2){
            redirect("DashboardVendor");
        }else if ($access_id == 3){
            redirect("DashboardTenant");
        }

        $data['usr'] = $this->M_View->getDataUserByID($user_id);
        $username = '';
        if ($data['usr'][0]['id_account'] < 10000) {
            $username = 'USR-'.sprintf('%04d', $data['usr'][0]['id_account']);
        } else {
            $username = 'USR-L'.$data['usr'][0]['id_account'];
        }
        $data['id'] = $username;

        $this->load->view('Main/V_EditProfile', $data);
    }

    public function doEditProfile()
    {
    
        $nama = $this->input->post('txtNama');
        $user_id = $this->input->post('txtUserID');
        $dob = $this->input->post('txdDob');
        $alamat = $this->input->post('txtAlamat');
        $email = $this->input->post('txeEmail');
        $telpon = $this->input->post('txnTelpon');
        $updated_date = date('Y-m-d H:i:s');

        $namaupdate = "userphoto-".$user_id."-".md5($_FILES['txfFotoProfile']['name']).".jpg";
        $file_namaupdate = $_FILES['txfFotoProfile']['tmp_name']; 

        $nama_foto = $this->M_View->getPostFotoUserForUpdate($user_id);
        $file = $nama_foto[0]['photo'];

        if ($file == 'user.jpg'){
            move_uploaded_file($file_namaupdate, 'assets/img/roles/'.$namaupdate);
            $posting = $this->M_View->updateUser($user_id,$nama,$dob,$alamat,$telpon,$email,$namaupdate,$updated_date); 
        }else if ($file !== 'user.jpg'){
            if (file_exists("assets/img/roles/".$file)){
                unlink("assets/img/roles/".$file);
                move_uploaded_file($file_namaupdate, 'assets/img/roles/'.$namaupdate);
            }else{
                move_uploaded_file($file_namaupdate, 'assets/img/roles/'.$namaupdate);
            }
            $posting = $this->M_View->updateUser($user_id,$nama,$dob,$alamat,$telpon,$email,$file_namaupdate,$updated_date);
        }

        $this->session->set_flashdata('msg', 'Your profile edited successfully!');
        redirect("EditProfile");

    }
    public function Explore(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = '';
        if ($access_id == 1){

            $data['org'] = $this->M_View->getDataAdminByID($user_id);

        }else  if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);

        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);

        }else if ($access_id == 4){

            $data['org'] = $this->M_View->getDataUserByID($user_id);

        }

// -----------------

        $vendor3 = array();
        $tenant3 = array();

        $data['top3'] = $this->M_View->getTop3();

if (!empty($data['top3'])){

        foreach ($data['top3'] as $k) {
            $kk = preg_replace("/[^0-9 ]/", '', $k['routes']);
            if ($kk[0] == 2){
                $removed1 = ltrim($kk, $kk[0]);
                $vendor3[] = $removed1;
            }else if ($kk[0] == 3){
                $removed2 = ltrim($kk, $kk[0]);
                $tenant3[] = $removed2;
            }
        }

        $imp_vendor = implode(',', $vendor3);
        $imp_tenant = implode(',', $tenant3);
        $join = $imp_vendor.','.$imp_tenant;
        if ($join[0] == ','){
            $join = ltrim($join, $join[0]);
        }

        $data['info3'] = $this->M_View->getGeneralAccount3Besar($join);
        $data['pict3'] = $this->M_View->getPhoto3Besar($join);

// -----------------


        $vendor10 = array();
        $tenant10 = array();

        $data['top10'] = $this->M_View->getTop10();

        foreach ($data['top10'] as $k) {
            $kk = preg_replace("/[^0-9 ]/", '', $k['routes']);
            if ($kk[0] == 2){
                $removed1 = ltrim($kk, $kk[0]);
                $vendor10[] = $removed1;
            }else if ($kk[0] == 3){
                $removed2 = ltrim($kk, $kk[0]);
                $tenant10[] = $removed2;
            }
        }

        $imp_vendor10 = implode(',', $vendor10);
        $imp_tenant10 = implode(',', $tenant10);

        $join = $imp_vendor10.','.$imp_tenant10;
        if ($join[0] == ','){
            $join = ltrim($join, $join[0]);
        }

        $data['info10'] = $this->M_View->getGeneralAccount3Besar($join);
        $data['pict10'] = $this->M_View->getPhoto3Besar($join);
        
// -----------------

        $vendor15 = array();
        $tenant15 = array();

        $data['last15'] = $this->M_View->getLast15();

        foreach ($data['last15'] as $k) {
            $kk = preg_replace("/[^0-9 ]/", '', $k['routes']);
            if ($kk[0] == 2){
                $removed1 = ltrim($kk, $kk[0]);
                $vendor15[] = $removed1;
            }else if ($kk[0] == 3){
                $removed2 = ltrim($kk, $kk[0]);
                $tenant15[] = $removed2;
            }
        }

        $imp_vendor15 = implode(',', $vendor15);
        $imp_tenant15 = implode(',', $tenant15);
        $join = $imp_vendor15.','.$imp_tenant15;
        if ($join[0] == ','){
            $join = ltrim($join, $join[0]);
        }

        $data['info15'] = $this->M_View->getGeneralAccount3Besar($join);
        $data['pict15'] = $this->M_View->getPhoto3Besar($join);


        // echo"<pre>";print_r($data);exit();

        $this->load->view('Main/V_Explore',$data);
}else{

        $this->load->view('Main/V_Explore2',$data);
}


    }

    public function Livestream(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['org'] = '';
        if ($access_id == 1){

            $data['org'] = $this->M_View->getDataAdminByID($user_id);

        }else  if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);

        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);

        }else if ($access_id == 4){

            $data['org'] = $this->M_View->getDataUserByID($user_id);

        }

        $data['link'] = $this->M_View->getLinkLS();

        $this->load->view('Main/V_LiveStream', $data);
    }

    public function PostMessage()
    {
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);
        
        $data['org'] = '';
        if ($access_id == 1){

            $data['org'] = $this->M_View->getDataAdminByID($user_id);

        }else  if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);

        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);

        }else if ($access_id == 4){

            $data['org'] = $this->M_View->getDataUserByID($user_id);

        }

        $data['category'] = $this->M_View->getDataCategory();
        $data['post'] = $this->M_View->getDataPostMessage($user_id);
        $data['subs'] = $this->M_View->getDataSubCategoryAll();

        $this->load->view('Main/V_PostMessage', $data);
    }

    public function doPost()
    {
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $param = $this->input->post('txtEditFlag');
        $id_post = $this->input->post('txtIDPost');
        $msg = $this->input->post('txaPost');
        $id_category = $this->input->post('slcCategory');
        $arr_id_subcategory = $this->input->post('slcSubCategory[]');
        $id_subcategory = implode(',', $arr_id_subcategory);
        $creation_date = date('Y-m-d H:i:s');

        if (!empty($_FILES['txfPost']['name'])){

            if ($param == 'N' && $id_post == ''){

                $namafile = "post-".$user_id."-".md5($_FILES['txfPost']['name']).".jpg";
                $file_tmp = $_FILES['txfPost']['tmp_name']; 

                move_uploaded_file($file_tmp, 'assets/upload/post/'.$namafile);

                $posting = $this->M_View->insertPost($msg,$id_category,$id_subcategory,$namafile,$creation_date,$user_id);
                $id_msg = $posting[0]['id_msg'];

                foreach ($arr_id_subcategory as $key => $value) {
                    $this->M_View->insertPostLogs($id_msg,$id_category,$value,$creation_date,$user_id);
                }

            }else if ($param == 'Y' && $id_post !== ''){

                $namaupdate = "post-".$user_id."-".md5($_FILES['txfPost']['name']).".jpg";
                $file_namaupdate = $_FILES['txfPost']['tmp_name']; 

                $nama_foto = $this->M_View->getPostFotoForUpdate($id_post);
                $file = $nama_foto[0]['filename'];

                    if (file_exists("assets/upload/post/".$file)){
                        unlink("assets/upload/post/".$file);
                        move_uploaded_file($file_namaupdate, 'assets/upload/post/'.$namaupdate);
                    }else{
                        move_uploaded_file($file_namaupdate, 'assets/upload/post/'.$namaupdate);
                    }
                    

                $posting = $this->M_View->updatePost($msg,$id_category,$id_subcategory,$namaupdate,$creation_date,$user_id,$id_post); 

                foreach ($arr_id_subcategory as $key => $value) {
                    $this->M_View->updatePostLogs($posting[$key],$id_category,$value);
                }
            }
            
        }else if (empty($_FILES['txfPost']['name'])){

            if ($param == 'N' && $id_post == ''){

                $namafile = "";
                $posting = $this->M_View->insertPost($msg,$id_category,$id_subcategory,$namafile,$creation_date,$user_id);
                $id_msg = $posting[0]['id_msg'];

                foreach ($arr_id_subcategory as $key => $value) {
                    $this->M_View->insertPostLogs($id_msg,$id_category,$value,$creation_date,$user_id);
                }

            }else if ($param == 'Y' && $id_post !== ''){

                $nama_foto = $this->M_View->getPostFotoForUpdate($id_post);
                $namaupdate = $nama_foto[0]['filename'];

                $posting = $this->M_View->updatePost($msg,$id_category,$id_subcategory,$namaupdate,$creation_date,$user_id,$id_post); 

                foreach ($arr_id_subcategory as $key => $value) {
                    $this->M_View->updatePostLogs($posting[$key],$id_category,$value);
                }
            }
            
        }

        $this->session->set_flashdata('msg', 'Your post successfully delivered!');
        redirect("PostMessage");
    }

    public function softDeletePost()
    {
        $id_msg = $this->input->post('id_msg');
        $creation_date = date('Y-m-d H:i:s');

        $this->M_View->softDeletePost($id_msg,$creation_date);
        $this->M_View->softDeletePostLogs($id_msg);

        $this->session->set_flashdata('del', 'Your post successfully deleted!');
        redirect("PostMessage");
    }
    public function Register(){
        $this->setVisitor();
        $this->load->view('Main/V_Registration');
    }

    public function ResetPassword(){
        $this->setVisitor();

        if ($this->input->get('token') && $this->input->get('token') != '') {
            $token = $this->input->get('token');
            $user = $this->db->query("SELECT a.* FROM generalAccount a JOIN resetPassword b ON a.user_id = b.user_id WHERE b.token = '$token' AND b.used_at IS NULL LIMIT 1")->row();

            if (!$user) return $this->load->view('Main/V_ResetPassword');

            return $this->load->view('Main/V_ResetPassword', ['token' => $token]);
        }

        if ($this->input->post('token') && $this->input->post('token') != '') {
            $token = $this->input->post('token');
            $password = $this->input->post('password');
            $repassword = $this->input->post('repassword');
            $user = $this->db->query("SELECT a.*, b.id AS 'data_id' FROM generalAccount a JOIN resetPassword b ON a.user_id = b.user_id WHERE b.token = '$token' AND b.used_at IS NULL LIMIT 1")->row();

            if ($password == '' || $repassword == '') {
                $this->session->set_flashdata('del', 'Semua field tidak boleh kosong');
                return redirect("ResetPassword?token=$token");
            } else if ($password !== $repassword) {
                $this->session->set_flashdata('del', 'Kata sandi tidak cocok');
                return redirect("ResetPassword?token=$token");
            } else if (!$user) {
                $this->session->set_flashdata('del', 'Token tidak valid');
                return redirect("ResetPassword");
            }

            $user_id = $user->user_id;
            $data_id = $user->data_id;
            $timestamp = date('Y-m-d H:i:s', time());
            $this->db->query("UPDATE generalAccount SET `password` = '$password' WHERE `user_id` = $user_id");
            $this->db->query("UPDATE resetPassword SET `used_at` = '$timestamp' WHERE `id` = $data_id");

            $this->session->set_flashdata('msg', 'Kata sandi berhasil dirubah');
            return redirect('ResetPassword');
        }

        if ($this->input->post('email') && $this->input->post('email') != '') {
            $email = $this->input->post('email');
            $result = $this->M_View->resetPassword($email);
            if (!$result) {
                $this->session->set_flashdata('del', 'Alamat email tidak ditemukan');
                return $this->load->view('Main/V_ResetPassword');
            }

            $token = $result['token'];
            $name = $result['name'];
            $email = $result['email'];
            $url = "https://fex.hmssemarang.com/ResetPassword?token=$token";
            $this->load->library('email');
            $this->email->initialize($this->email_config);
            $message = "
            <span>Halo, <strong>$name</strong>.</span><br><br>
            <span>Tekan tautan di bawah ini untuk mengatur ulang kata sandi akun <i>Future Education Expo</i> anda.</span><br><br>
            <a href='$url' target='_blank' style='font-size: 1.75rem; background-color: green; border: 0; border-radius: 10px; padding: 8px 20px; color: white; font-weight: bold; text-decoration: none; margin: 10px 0;'>Atur Ulang</a><br><br>
            <span>Apabila tautan tidak dapat diklik, silahkan salin tautan di bawah dan buka melalui browser perangkat anda</span><br>
            <a href='$url' style='text-decoration: none'>$url</a><br><br>
            <span style='font-size: .8rem; color: grey;'>Email ini masuk karena anda meminta untuk mengatur ulang kata sandi anda, apabila anda tidak merasa melakukannya maka abaikan pesan ini.</span><br>
            <span><strong>Future Education Expo - Halmahera Music School Semarang<strong></span>
            ";

            $this->email->from('fex@hmssemarang.com', 'Future Education Expo');
            $this->email->to($email);
            $this->email->subject('Atur Ulang Kata Sandi');
            $this->email->message($message);

            if ($this->email->send()) {
                $this->session->set_flashdata('msg', 'Perintah reset password telah dikirim ke alamat email');
                return $this->load->view('Main/V_ResetPassword');
            } else {
                $this->session->set_flashdata('del', 'Terjadi kesalahan saat mengirimkan email');
                return $this->load->view('Main/V_ResetPassword');
            }
        }

        $this->load->view('Main/V_ResetPassword');
    }

    public function Search(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        if ($access_id == 1){

            $data['org'] = $this->M_View->getDataAdminByID($user_id);

        }else  if ($access_id == 2){

            $data['org'] = $this->M_View->getDataVendorByID($user_id);

        }else if ($access_id == 3){

            $data['org'] = $this->M_View->getDataTenantByID($user_id);

        }else if ($access_id == 4){

            $data['org'] = $this->M_View->getDataUserByID($user_id);

        }

        $q = $this->input->get('q');

        $data['keywordTenant'] = $this->M_View->getDataTenantByKey($q);
        $data['keywordVendor'] = $this->M_View->getDataVendorByKey($q);
        $data['q'] = $q;

        // $data['hasil'] = $this->M_View->getImage($user_id);
        // var_dump($data['keywordTenant']);
        // die;

        $this->load->view('Main/V_SearchPage', $data);
    }

    public function VerifyPhone() {
        $this->cek();

        $userdata = $this->session->all_userdata();
        $user_id = $userdata['user_id'];
        $user = $this->M_View->getDataUserByID($user_id);

        if ($this->M_View->checkPhoneVerify($user_id)) return redirect('EditProfile');
        if ($user[0]['phone_number'] == '') {
            $this->session->set_flashdata('del', 'Anda belum menambahkan nomor HP');
            return redirect('EditProfile');
        }

        if ($this->input->post('code')) {
            // DO VERIFY ACTION
            $code = $this->input->post('code');
            if ($this->M_Twilio->verify($user_id, $user[0]['phone_number'], $code)) {
                $this->session->set_flashdata('msg', 'Verifikasi nomor HP berhasil');
                return redirect('EditProfile');
            } else {
                $this->session->set_flashdata('del', 'Kode verifikasi tidak valid');
                return $this->load->view('Main/V_VerifyPhone');
            }
        } else {
            $data['diri'] = $userdata;
            $data['usr'] = $this->M_View->getDataUserByID($user_id);

            $this->M_Twilio->requestOtp($data['usr'][0]['phone_number']);
            $this->load->view('Main/V_VerifyPhone');
        }
    }

    public function VerifyEmail() {
        $this->cek();

        $userdata = $this->session->all_userdata();
        $user_id = $userdata['user_id'];
        $user = $this->M_View->getDataUserByID($user_id);
        $name = $user[0]['fullname'];
        $email = $user[0]['email'];

        if ($this->M_View->checkEmailVerify($user_id)) return redirect('EditProfile');
        if ($user[0]['email'] == '') {
            $this->session->set_flashdata('del', 'Anda belum menambahkan alamat email');
            return redirect('EditProfile');
        }

        if ($this->input->post('token')) {
            $code = $this->input->post('code');
            $token = $this->input->post('token');
            $result = $this->M_View->verifyEmail($user_id, $code, $token);

            if ($result == 2) {
                $this->session->set_flashdata('del', 'Kode verifikasi tidak valid');
                return $this->load->view('Main/V_VerifyEmail', ['token' => $token]);
            } else if ($result == 1) {
                $this->session->set_flashdata('msg', 'Alamat email berhasil diverifikasi');
                return redirect('EditProfile');
            } else {
                $this->session->set_flashdata('del', 'Terjadi kesalahan saat melakukan verifikasi, coba ulang beberapa saat lagi');
                return redirect('EditProfile');
            }
        } else {
            $data['diri'] = $userdata;
            $data['usr'] = $this->M_View->getDataUserByID($user_id);

            $this->load->library('email');
            $this->email->initialize($this->email_config);

            $verifyData = $this->M_View->getVerificationToken($user_id);
            $code = $verifyData['code'];
            $token = $verifyData['token'];
            $message = "
            <span>Halo, <strong>$name</strong>.</span><br><br>
            <span>Berikut adalah kode verifikasi untuk akun <i>Future Education Expo</i> anda, masukkan kode berikut ke kolom verifikasi pada web FEX.</span><br>
            <span style='font-size: 2.5rem; color: green; font-weight: bold;'>$code</span><br><br>
            <span style='font-size: .8rem; color: grey;'>Email ini masuk karena anda meminta untuk memverifikasi alamat email anda, apabila anda tidak memintanya harap untuk mengabaikan pesan ini</span><br>
            <span><strong>Future Education Expo - Halmahera Music School Semarang<strong></span>
            ";

            $this->email->from('fex@hmssemarang.com', 'Future Education Expo');
            $this->email->to($email);
            $this->email->subject('Verifikasi Alamat Email');
            $this->email->message($message);

            if ($this->email->send()) {
                $this->session->set_flashdata('msg', 'Berhasil mengirim kode verifikasi ke email');
                return $this->load->view('Main/V_VerifyEmail', ['token' => $token]);
            } else {
                $this->session->set_flashdata('del', 'Gagal mengirim kode verifikasi, harap ulangi beberapa saat lagi');
                return redirect('EditProfile');
            }
        }
    }

    public function setLog($user_id,$access_id)
    {
        if ($user_id  !== '' && $access_id !== '')
        {
            $routes = $_SERVER['REQUEST_URI'];
            $date = date('Y-m-d H:i:s');
            $insertLog = $this->M_View->insertLog($user_id,$access_id,$date,$routes);
        }else{}
    }

    public function setVisitor()
    {
        $routes = "index";
        $date = date('Y-m-d H:i:s');
        $insertLog = $this->M_View->insertVisitor($date,$routes);
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        $this->session->flashdata('logout', 'Logout success!');
        redirect(base_url('Login'));
    }
}
