<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_View extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function cek_login($usr,$pswd)
    {
    	$query = "SELECT * FROM generalAccount WHERE username = '$usr' and md5(password) = '$pswd'";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function cek_status($usr,$pswd)
    {
    	$query = "SELECT * FROM generalAccount WHERE username = '$usr' and md5(password) = '$pswd'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function insertLog($user_id,$access_id,$date,$route)
    {
    	$query = "INSERT INTO logActivity (user_id,user_type_id,creation_date,routes) VALUES ('$user_id', '$access_id', '$date', '$route')";
        $hasil = $this->db->query($query);
    }

    public function insertVisitor($date,$route)
    {
    	$query = "INSERT INTO logVisitors (creation_date,routes) VALUES ('$date', '$route')";
        $hasil = $this->db->query($query);
    }

    public function getRegisteredVendor()
    {
    	$query = "SELECT * FROM vendorAccount";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function getRegisteredTenant()
    {
    	$query = "SELECT * FROM tenantAccount";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function getRegisteredAdmin()
    {
    	$query = "SELECT * FROM adminAccount";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function getDataCategory()
    {
    	$query = "SELECT * FROM categoryType WHERE flag = 'Y' ORDER BY id ASC";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataHastag()
    {
    	$query = "SELECT * FROM allHastags WHERE flag = 'Y' ORDER BY id DESC";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataSubCategory($id)
    {
    	$query = "SELECT * FROM subCategoryType WHERE flag = 'Y' AND id_category = $id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getAllVendor()
    {
    	$query = "SELECT 
				a.user_id,
				a.username,
				a.email,
				a.password,
				a.res_password,
				a.fullname,
				a.phone_number,
				a.user_type_id,
				a.creation_date,
				b.name as kategori,
				c.name as sub,
				d.tags,
				d.id_category,
				d.id_subcategory,
				d.id as vendor_id,
				d.valid_flag,
				d.active_flag
				from generalAccount a
				left join vendorAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 2 and d.valid_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getAllTenant()
    {
    	$query = "SELECT 
				a.user_id,
				a.username,
				a.email,
				a.password,
				a.res_password,
				a.fullname,
				a.phone_number,
				a.user_type_id,
				a.creation_date,
				b.name as kategori,
				c.name as sub,
				d.tags,
				d.id_category,
				d.id_subcategory,
				d.id as tenant_id,
				d.valid_flag,
				d.active_flag
				from generalAccount a
				left join tenantAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 3 and d.valid_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getAllAdmin()
    {
    	$query = "SELECT 
				a.user_id,
				a.username,
				a.email,
				a.password,
				a.res_password,
				a.fullname,
				a.phone_number,
				a.user_type_id,
				a.creation_date,
				d.id as admin_id,
				d.valid_flag,
				d.active_flag
				from generalAccount a
				left join adminAccount d on a.user_id = d.user_id
				where a.user_type_id = 1 and d.valid_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataVendorByID($user_id)
    {
    	$query = "SELECT 
				a.user_id,
				a.username,
				a.email,
				a.password,
				a.res_password,
				a.fullname,
				a.phone_number,
				a.user_type_id,
				a.creation_date,
				b.name as kategori,
				c.name as sub,
				d.tags,
				d.id_category,
				d.id_subcategory,
				d.id as vendor_id,
				d.valid_flag,
				d.active_flag,
				d.logo,
				d.alamat,
				d.url,
				d.fitur,
				d.color_id,
				d.deskripsi
				from generalAccount a
				left join vendorAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 2 and d.valid_flag = 'Y' and a.user_id = $user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataTenantByID($user_id)
    {
    	$query = "SELECT 
				a.user_id,
				a.username,
				a.email,
				a.password,
				a.res_password,
				a.fullname,
				a.phone_number,
				a.user_type_id,
				a.creation_date,
				b.name as kategori,
				c.name as sub,
				d.tags,
				d.id_category,
				d.id_subcategory,
				d.id as tenant_id,
				d.valid_flag,
				d.active_flag,
				d.logo,
				d.alamat,
				d.url,
				d.fitur,
				d.color_id,
				d.deskripsi
				from generalAccount a
				left join tenantAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 3 and d.valid_flag = 'Y' and a.user_id = $user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function addingNewCategory($newSub,$category)
    {
    	$query = "INSERT INTO subCategoryType (id_category, name, flag) VALUES ('$category', '$newSub', 'Y')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT id FROM subCategoryType ORDER BY id DESC LIMIT 1";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function addingGeneralAccountVendor($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date)
    {
    	$query = "INSERT INTO generalAccount (username, email, password, res_password, fullname, phone_number, user_type_id, vendor_acc_flag, creation_date) VALUES ('$username', '$email', '$password', '$res_password', '$fullname', '$phone', '$userTypeID', 'Y', '$creation_date')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT user_id FROM generalAccount WHERE password = '$password' LIMIT 1";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function addingGeneralAccountTenant($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date)
    {
    	$query = "INSERT INTO generalAccount (username, email, password, res_password, fullname, phone_number, user_type_id, tenant_acc_flag, creation_date) VALUES ('$username', '$email', '$password', '$res_password', '$fullname', '$phone', '$userTypeID', 'Y', '$creation_date')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT user_id FROM generalAccount WHERE password = '$password' LIMIT 1";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function addingGeneralAccountAdmin($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date)
    {
    	$query = "INSERT INTO generalAccount (username, email, password, res_password, fullname, phone_number, user_type_id, admin_acc_flag, creation_date) VALUES ('$username', '$email', '$password', '$res_password', '$fullname', '$phone', '$userTypeID', 'Y', '$creation_date')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT user_id FROM generalAccount WHERE password = '$password' LIMIT 1";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function addingVendorAccount($user_id,$fullname,$creation_date,$category,$subcategory,$tags)
    {
    	$query = "INSERT INTO vendorAccount (user_id,fullname,creation_date,id_category,id_subcategory,tags) VALUES ('$user_id', '$fullname', 'creation_date', '$category', '$subcategory', '$tags')";
        $hasil = $this->db->query($query);
    }

    public function addingTenantAccount($user_id,$fullname,$creation_date,$category,$subcategory,$tags)
    {
    	$query = "INSERT INTO tenantAccount (user_id,fullname,creation_date,id_category,id_subcategory,tags) VALUES ('$user_id', '$fullname', 'creation_date', '$category', '$subcategory', '$tags')";
        $hasil = $this->db->query($query);
    }

    public function addingAdminAccount($user_id,$fullname,$creation_date)
    {
    	$query = "INSERT INTO adminAccount (user_id,fullname,creation_date) VALUES ('$user_id', '$fullname', 'creation_date')";
        $hasil = $this->db->query($query);
    }

    
}
?>
