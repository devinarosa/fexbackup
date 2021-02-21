<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Action extends CI_CONTROLLER {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('M_Action');
            $this->load->helper('download');
            $this->load->helper(array('form', 'url'));
            $this->load->helper(array('url', 'form'));
            date_default_timezone_set('Asia/Jakarta');

        } 
}
