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

    public function index(){
        $this->load->view('Main/V_Mainpage');
    }
    public function Login(){
        $this->load->view('Main/V_Login');
    }
    public function Dashboard(){
        $this->load->view('Main/V_Dashboard');
    }
    public function DashboardAdmin(){
        $data['title'] = 'Admin | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-passive';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_DashboardAdmin', $data);
    }
    public function AdminUserManagement(){
        $data['title'] = 'Admin | User Management';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';
        $data['active3'] = 'menu-passive';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_DashboardAdminUM', $data);
    }
    public function AdminMenuManagement(){
        $data['title'] = 'Admin | Menu Management';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-passive';
        $data['active3'] = 'menu-active';

        $this->load->view('Main/V_AdminSidemenu', $data);
        $this->load->view('Main/V_DashboardAdminMM', $data);
    }
    public function DashboardVendor(){
        $data['title'] = 'Vendor | Dashboard';
        $data['active1'] = 'menu-active';
        $data['active2'] = 'menu-passive';

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_DashboardVendor', $data);
    }
    public function VendorEditProfile(){
        $data['title'] = 'Vendor | Edit Profile';
        $data['active1'] = 'menu-passive';
        $data['active2'] = 'menu-active';

        $this->load->view('Main/V_VendorSidemenu', $data);
        $this->load->view('Main/V_DashboardVendor2', $data);
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
    public function Logout()
    {
        $this->load->view('Main/V_Mainpage');
    }
}
