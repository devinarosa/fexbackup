<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_View extends CI_CONTROLLER {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('M_View');
            $this->load->helper('download');
            $this->load->helper(array('form', 'url'));
            $this->load->helper(array('url', 'form'));
            date_default_timezone_set('Asia/Jakarta');

        }

    public function Auth(){

        // echo "<pre>";
        // print_r($_POST);

        $username = $this->input->post('txtUsernameFex');
        $password = $this->input->post('txtPasswordFex');

        if ($username == '' && $password == '') {
            // redirect(base_url("Error"));
            echo "Belum Ada Tampilan Errornya";
            // echo "error1";

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
            echo "Belum Ada Tampilan Errornya";
            // redirect(base_url("Error"));
            // echo "error2";
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
                'access_name' => $access,
                'access_id' => $access_id,
                'user_id' => $user_id,
                'fullname' => $fullname,
                'key' => $key,
                'time' => $date,
                'status' => "login"
                );
 
            $this->session->set_userdata($data_session);
 
            redirect("Dashboard");
                      
        }else{

            echo "Belum Ada Tampilan Errornya";

            }
        }
    }

    public function Error()
    {
        $this->load->view('main/V_Error');
    }

    public function index(){
        $this->setVisitor();
        $this->load->view('main/V_Login');
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

        $this->load->view('Main/V_Dashboard', $data);
    }

    public function DashboardAdmin(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

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
    public function AddVendor(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Admin | Add Vendor';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $data['category'] = $this->M_View->getDataCategory();
        $data['hastag'] = $this->M_View->getDataHastag();
        $data['vendor'] = $this->M_View->getAllVendor();

        $searchFirst = $this->M_View->getRegisteredVendor();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10) {
            $username = 'VE-000'.$cek_number;
        } elseif ($cek_number < 100) {
            $username = 'VE-00'.$cek_number;
        } elseif ($cek_number < 1000) {
            $username = 'VE-0'.$cek_number;
        } elseif ($cek_number < 10000) {
            $username = 'VE-'.$cek_number;
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

        $fullname = $this->input->post('txtNamaVendor');
        $email = $this->input->post('txtEmailVendor');
        $phone = $this->input->post('txtPhoneVendor');
        $category = $this->input->post('txtCategoryVendor');
        $preSubCategory = $this->input->post('txtSubVendor');
        $subcategory = '';
        $arr_tags =  $this->input->post('slcHastags[]');
        $tags = implode('#', $arr_tags);

        $userTypeID = '2';
        $creation_date = date('Y-m-d H:i:s');

        if ($category == 3 && $preSubCategory == 14){
            $newSub = $this->input->post('txtOther');
            $addingNewCategory = $this->M_View->addingNewCategory($newSub,$category);
            $subcategory = $addingNewCategory[0]['id'];
        }else if ($category !== 3 && $preSubCategory !== 14){
            $subcategory = $this->input->post('txtSubVendor');
        }

        $addingGeneralAccount = $this->M_View->addingGeneralAccountVendor($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingVendorAccount = $this->M_View->addingVendorAccount($user_id,$fullname,$creation_date,$category,$subcategory,$tags);

        redirect('AddVendor');
    }

    public function AddTenant(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Admin | Add Tenant';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-active';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-passive';
        $data['active7'] = 'menu-passive';

        $data['category'] = $this->M_View->getDataCategory();
        $data['hastag'] = $this->M_View->getDataHastag();
        $data['tenant'] = $this->M_View->getAllTenant();

        $searchFirst = $this->M_View->getRegisteredTenant();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10) {
            $username = 'TE-000'.$cek_number;
        } elseif ($cek_number < 100) {
            $username = 'TE-00'.$cek_number;
        } elseif ($cek_number < 1000) {
            $username = 'TE-0'.$cek_number;
        } elseif ($cek_number < 10000) {
            $username = 'TE-'.$cek_number;
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

        $fullname = $this->input->post('txtNamaTenant');
        $email = $this->input->post('txtEmailTenant');
        $phone = $this->input->post('txtPhoneTenant');
        $category = $this->input->post('txtCategoryTenant');
        $preSubCategory = $this->input->post('txtSubTenant');
        $subcategory = '';
        $arr_tags =  $this->input->post('slcHastags[]');
        $tags = implode('#', $arr_tags);

        $userTypeID = '3';
        $creation_date = date('Y-m-d H:i:s');

        if ($category == 3 && $preSubCategory == 14){
            $newSub = $this->input->post('txtOther');
            $addingNewCategory = $this->M_View->addingNewCategory($newSub,$category);
            $subcategory = $addingNewCategory[0]['id'];
        }else if ($category !== 3 && $preSubCategory !== 14){
            $subcategory = $this->input->post('txtSubTenant');
        }

        $addingGeneralAccount = $this->M_View->addingGeneralAccountTenant($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date);
        $user_id = $addingGeneralAccount[0]['user_id'];
        $addingVendorAccount = $this->M_View->addingTenantAccount($user_id,$fullname,$creation_date,$category,$subcategory,$tags);

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
        $data['hastag'] = $this->M_View->getDataHastag();
        $data['admin'] = $this->M_View->getAllAdmin();

        $searchFirst = $this->M_View->getRegisteredAdmin();
        $cek_number = $searchFirst + 1;

        $username = '';
        if ($cek_number < 10) {
            $username = 'ADM-000'.$cek_number;
        } elseif ($cek_number < 100) {
            $username = 'ADM-00'.$cek_number;
        } elseif ($cek_number < 1000) {
            $username = 'ADM-0'.$cek_number;
        } elseif ($cek_number < 10000) {
            $username = 'ADM-'.$cek_number;
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

        $fullname = $this->input->post('txtNamaAdmin');
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

        $data['title'] = 'Admin | Menu Setup';
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

    public function MenuSetup(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Admin | Menu Setup';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';
        $data['active4'] = 'menu-passive';
        $data['active5'] = 'menu-passive';
        $data['active6'] = 'menu-active';
        $data['active7'] = 'menu-passive';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_MenuSetup', $data);
    }

    public function ExportImport(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

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

    public function DashboardVendor(){
        $this->cek();
        $data['diri'] = $this->session->all_userdata();
        $user_id = $data['diri']['user_id'];
        $access_id = $data['diri']['access_id'];
        $this->setLog($user_id,$access_id);

        $data['title'] = 'Vendor | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';

        if ($access_id == 2){
            $data['org'] = $this->M_View->getDataVendorByID($user_id);
        }else if ($access_id == 3){
            $data['org'] = $this->M_View->getDataTenantByID($user_id);
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

        if ($access_id == 2){
            $data['org'] = $this->M_View->getDataVendorByID($user_id);
        }else if ($access_id == 3){
            $data['org'] = $this->M_View->getDataTenantByID($user_id);
        }else{
            redirect("Dashboard");
        }

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_EditProfileVendor', $data);
    }
    public function EditProfile(){
        $this->load->view('Main/V_EditProfile');
    }
    public function Explore(){
        $this->load->view('Main/V_Explore');
    }
    public function Livestream(){
        $this->load->view('Main/V_LiveStream');
    }
    public function LoginTenant(){
        $this->load->view('Main/V_LoginTenant');
    }
    public function Main(){
        $this->load->view('Main/V_Mainpage');
    }
    public function PostMessage(){
        $this->load->view('Main/V_PostMessage');
    }
    public function Register(){
        $this->load->view('Main/V_Registration');
    }
    public function ResetPassword(){
        $this->load->view('Main/V_ResetPassword');
    }
    public function Profile(){
        $this->load->view('Main/V_SchoolProfile');
    }
    public function Search(){
        $this->load->view('Main/V_SearchPage');
    }

    public function setLog($user_id,$access_id)
    {
        if ($user_id  !== '' && $access_id !== '')
        {
            $routes = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
            $date = date('Y-m-d H:i:s');
            $insertLog = $this->M_View->insertLog($user_id,$access_id,$date,$routes);
        }else{}
    }

    public function setVisitor()
    {
        $routes = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $date = date('Y-m-d H:i:s');
        $insertLog = $this->M_View->insertVisitor($date,$routes);
    }

    public function Logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('Login'));
    }
}
