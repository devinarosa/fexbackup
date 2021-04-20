<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_View extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function random($length)
    {
        $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
        $chars_length = strlen($chars);
        $result = "";
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[rand(0, $chars_length - 1)];
        }
        return $result;
    }

    public function generateCode($length)
    {
        $chars = "0123456789";
        $chars_length = strlen($chars);
        $result = "";
        for ($i = 0; $i < $length; $i++) {
            $result .= $chars[rand(0, $chars_length - 1)];
        }
        return $result;
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

    public function cek_google($id, $email)
    {
        $query = "SELECT * FROM generalAccount g JOIN userAccount u ON g.user_id = u.user_id WHERE g.email = '$email' AND u.google_id = '$id'";
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

    public function getRegisteredUser()
    {
    	$query = "SELECT * FROM userAccount";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function getDisplayAll()
    {
        $query = "SELECT * FROM displaySetting";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function updateDT1($i,$a)
    {
        $query = "UPDATE displaySetting SET link = '$a' where id = $i";
        $hasil = $this->db->query($query);
    }

    public function updateDT2($i,$a)
    {
        $query = "UPDATE displaySetting SET filename = '$a' where id = $i";
        $hasil = $this->db->query($query);
    }

    public function updateDT3($i,$a)
    {
        $query = "UPDATE displaySetting SET filename = '$a' where id = $i";
        $hasil = $this->db->query($query);
    }

    public function updateDT4($i,$a)
    {
        $query = "UPDATE displaySetting SET filename = '$a' where id = $i";
        $hasil = $this->db->query($query);
    }

    public function updateDT5($i,$a)
    {
        $query = "UPDATE displaySetting SET link = '$a' where id = $i";
        $hasil = $this->db->query($query);
    }

    public function updateCategoryFile($id,$file)
    {
        $query = "UPDATE categoryType SET icon = '$file' where id = $id";
        $hasil = $this->db->query($query);
    }

    public function getRegisteredUserAll()
    {
        $query = "SELECT a.id, a.user_id, a.fullname, a.date_birth, a.address, b.email, b.phone_number FROM userAccount a left join generalAccount b on a.user_id = b.user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function insertCategory($category, $namafile)
    {
        $query = "INSERT into categoryType (name, flag, icon) VALUES ('$category', 'Y', '$namafile')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT * from categoryType where name = '$category'";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function insertSubCategory($id_category,$k)
    {
        $query = "INSERT into subCategoryType (id_category, flag, name) VALUES ('$id_category', 'Y', '$k')";
        $hasil = $this->db->query($query);
    }

    public function getDataByDay($i,$month)
    {
        $query = "SELECT COALESCE(COUNT(a.user_id), 0) as num from generalAccount a where day(a.creation_date) = $i and month(a.creation_date) = $month";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getRegisteredAll()
    {
        $query = "SELECT * FROM generalAccount";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function getGraphicCategory()
    {   
        $query = "SELECT name, (COUNT(a.user_id) + COUNT(b.user_id)) as qty from categoryType c left join tenantAccount a on a.id_category = c.id left join vendorAccount b on b.id_category = c.id group by c.id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getLoggedToday($day)
    {

        $query = "SELECT count(a.id_act) counted, b.username from logActivity a left join generalAccount b on a.user_id = b.user_id where a.creation_date LIKE '$day%' and a.routes LIKE '%Auth%' group by a.user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getLoggedCounter($day)
    {

        $query = "SELECT count(a.id_act) counted from logActivity a left join generalAccount b on a.user_id = b.user_id where a.creation_date LIKE '2021-03-31%' and a.routes LIKE '%Auth%'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function UpdateStream($live)
    {
        $query = "UPDATE displaySetting SET link = '$live' WHERE page = 'Livestream'";
        $hasil = $this->db->query($query);
    }

    public function getDataCategory()
    {
    	$query = "SELECT * FROM categoryType WHERE flag = 'Y' ORDER BY id ASC";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataFotoVendor($user_id)
    {
    	$query = "SELECT * FROM fotoArchieve WHERE user_id = '$user_id' ORDER BY order_num ASC";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataFasilitasVendor($user_id)
    {
    	$query = "SELECT * FROM fasilitasArchieve WHERE user_id = '$user_id' ORDER BY order_num ASC";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataVendorByCategory()
    {
    	$query = "SELECT 
                    a.*, 
                    b.filename, 
                    c.css 
                        FROM vendorAccount a 
                        left join fotoArchieve b on a.user_id = b.user_id 
                        left join boothColor c on c.id = a.color_id 
                        WHERE b.order_num = 1 and a.active_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataTenantByCategory()
    {
    	$query = "SELECT 
                    a.*, 
                    b.filename, 
                    c.css 
                        FROM tenantAccount a 
                        left join fotoArchieve b on a.user_id = b.user_id 
                        left join boothColor c on c.id = a.color_id 
                        WHERE b.order_num = 1 and a.active_flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function statVendor($check,$user_id)
    {
        $query = "UPDATE vendorAccount SET active_flag ='$check' where id = '$user_id'";
        // echo $query;exit();
        $hasil = $this->db->query($query);
    }

    public function getDataSubCategory($id)
    {
    	$query = "SELECT * FROM subCategoryType WHERE flag = 'Y' AND id_category = $id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataSubCategoryAll()
    {
    	$query = "SELECT * FROM subCategoryType WHERE flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataTenantByKey($q) {
        // $query = "SELECT * FROM tenantaccount WHERE 
        // fullname LIKE '%$q%'OR 
        // alamat LIKE '%$q%' 
        // ";
        $query = "SELECT * FROM tenantAccount t LEFT JOIN fotoArchieve f ON t.user_id = f.user_id WHERE (t.fullname LIKE '%$q%'OR t.alamat LIKE '%$q%') AND f.order_num = 1 ";
        $hasil = $this->db->query($query);

        return $hasil->result_array();
    }

    public function getDataVendorByKey($q) {
        // $query = "SELECT * FROM vendoraccount WHERE 
        // fullname LIKE '%$q%'OR 
        // alamat LIKE '%$q%' 
        // ";
        $query = "SELECT * FROM vendorAccount t LEFT JOIN fotoArchieve f ON t.user_id = f.user_id WHERE (t.fullname LIKE '%$q%'OR t.alamat LIKE '%$q%') AND f.order_num = 1 ";
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
				d.id_category,
				d.id_subcategory,
				d.id as vendor_id,
				d.active_flag
				from generalAccount a
				left join vendorAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 2 and d.active_flag = 'Y'";
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
				d.id_category,
				d.id_subcategory,
				d.id as tenant_id,
				d.active_flag
				from generalAccount a
				left join tenantAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 3 and d.active_flag = 'Y'";
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
				d.active_flag
				from generalAccount a
				left join adminAccount d on a.user_id = d.user_id
				where a.user_type_id = 1 and d.active_flag = 'Y'";
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
				d.id_category,
				d.id_subcategory,
				d.id as vendor_id,
				d.active_flag,
				d.logo,
				d.alamat,
				d.url,
				d.fitur,
				d.color_id,
				d.deskripsi,
				d.color_id
				from generalAccount a
				left join vendorAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 2 and d.active_flag = 'Y' and a.user_id = $user_id";
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
				d.id_category,
				d.id_subcategory,
				d.id as vendor_id,
				d.active_flag,
				d.logo,
				d.alamat,
				d.url,
				d.fitur,
				d.color_id,
				d.deskripsi,
				d.color_id
				from generalAccount a
				left join tenantAccount d on a.user_id = d.user_id
				left join subCategoryType c on d.id_subcategory = c.id
				left join categoryType b on d.id_category = b.id
				where a.user_type_id = 3 and d.active_flag = 'Y' and a.user_id = $user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataUserByID($user_id)
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
				d.id as id_account,
				d.active_flag,
				d.photo as logo,
				d.address,
				d.date_birth,
				d.phone_verified,
				d.email_verified
				from generalAccount a
				left join userAccount d on a.user_id = d.user_id
				where a.user_type_id = 4 and d.active_flag = 'Y' and a.user_id = $user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataAdminByID($user_id)
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
				d.photo as logo,
				d.active_flag
				from generalAccount a
				left join adminAccount d on a.user_id = d.user_id
				where a.user_type_id = 1 and d.active_flag = 'Y' and a.user_id = $user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getLinkLS()
    {
    	$query = "SELECT link FROM displaySetting WHERE page = 'Livestream' and flag= 'Y'";
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

    public function addingGeneralAccountUser($username,$email,$password,$res_password,$fullname,$phone,$userTypeID,$creation_date)
    {
    	$query = "INSERT INTO generalAccount (username, email, password, res_password, fullname, phone_number, user_type_id, creation_date) VALUES ('$username', '$email', '$password', '$res_password', '$fullname', '$phone', '$userTypeID','$creation_date')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT user_id FROM generalAccount WHERE password = '$password' LIMIT 1";
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

    public function checkingUniqueValuePhone($phone)
    {
    	$query = "SELECT * FROM generalAccount WHERE phone_number = '$phone'";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function checkingUniqueValueEmail($email)
    {
    	$query = "SELECT * FROM generalAccount WHERE email = '$email'";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function checkingUniqueValueUsername($username)
    {
    	$query = "SELECT * FROM generalAccount WHERE username = '$username'";
        $hasil = $this->db->query($query);
        return $hasil->num_rows();
    }

    public function addingUserAccount($user_id,$fullname,$photo,$creation_date,$google_id)
    {
    	$query = "INSERT INTO userAccount (user_id,fullname,photo,creation_date) VALUES ('$user_id', '$fullname','$photo', '$creation_date')";
        if (isset($google_id)) {
            $query = "INSERT INTO userAccount (user_id,google_id,fullname,photo,creation_date) VALUES ('$user_id', '$google_id', '$fullname', '$photo', '$creation_date')";
        }
        $hasil = $this->db->query($query);
    }

    public function addingVendorAccount($user_id,$fullname,$creation_date,$category,$subcategory)
    {
    	$query = "INSERT INTO vendorAccount (user_id,fullname,creation_date,id_category,id_subcategory) VALUES ('$user_id', '$fullname', '$creation_date', '$category', '$subcategory')";
        $hasil = $this->db->query($query);
    }

    public function addingTenantAccount($user_id,$fullname,$creation_date,$category,$subcategory)
    {
    	$query = "INSERT INTO tenantAccount (user_id,fullname,creation_date,id_category,id_subcategory) VALUES ('$user_id', '$fullname', '$creation_date', '$category', '$subcategory')";
        $hasil = $this->db->query($query);
    }

    public function addingAdminAccount($user_id,$fullname,$creation_date)
    {
    	$query = "INSERT INTO adminAccount (user_id,fullname,creation_date) VALUES ('$user_id', '$fullname', 'creation_date')";
        $hasil = $this->db->query($query);
    }

    public function getListCategory()
    {
        $query = "SELECT a.id, a.name, a.icon,
                            GROUP_CONCAT(b.name) as sub, 
                            GROUP_CONCAT(b.id) as id_sub
                    FROM categoryType a JOIN subCategoryType b ON (a.id = b.id_category)
                    WHERE b.flag = 'Y' AND a.flag = 'Y'
                    GROUP BY a.id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function SoftDeleteSub($id)
    {
        $query = "UPDATE subCategoryType SET flag = 'N' where id = $id";
        $hasil = $this->db->query($query);
    }

    public function editSub($id,$name)
    {
        $query = "UPDATE subCategoryType SET name = '$name' where id = $id";
        $hasil = $this->db->query($query);
    }

    public function SoftDeleteCat($id)
    {
        $query = "UPDATE categoryType SET flag = 'N' where id = $id";
        $hasil = $this->db->query($query);
    }

    public function editCat($id,$name)
    {
        $query = "UPDATE categoryType SET name = '$name' where id = $id";
        $hasil = $this->db->query($query);
    }

    public function updateVendor($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon)
    {
    	$query = "UPDATE vendorAccount SET 
    				fullname = '$nama',
    				logo = '$namafile',
    				id_category = '$category',
    				id_subcategory = '$imp_subs',
    				deskripsi = '$deskripsi',
    				color_id = '$color',
    				alamat = '$alamat',
    				url = '$url',
    				fitur = '$fitur',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil = $this->db->query($query);
        $query2 = "UPDATE generalAccount SET 
        			fullname = '$nama',
    				email = '$email',
    				phone_number = '$telpon',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil2 = $this->db->query($query2);
    }

    public function updateTenant($user_id,$nama,$namafile,$category,$imp_subs,$deskripsi,$color,$alamat,$url,$fitur,$updated_date,$email,$telpon)
    {
    	$query = "UPDATE tenantAccount SET 
    				fullname = '$nama',
    				logo = '$namafile',
    				id_category = '$category',
    				id_subcategory = '$imp_subs',
    				deskripsi = '$deskripsi',
    				color_id = '$color',
    				alamat = '$alamat',
    				url = '$url',
    				fitur = '$fitur',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil = $this->db->query($query);
        $query2 = "UPDATE generalAccount SET 
        			fullname = '$nama',
    				email = '$email',
    				phone_number = '$telpon',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil2 = $this->db->query($query2);
    }

    public function updateUser($user_id,$nama,$dob,$alamat,$telpon,$email,$file_namaupdate,$updated_date)
    {
    	$query = "UPDATE userAccount SET 
    				fullname = '$nama',
    				photo = '$file_namaupdate',
    				address = '$alamat',
    				date_birth = '$dob',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil = $this->db->query($query);
        $query2 = "UPDATE generalAccount SET 
        			fullname = '$nama',
    				email = '$email',
    				phone_number = '$telpon',
    				update_date = '$updated_date'
    			where user_id = '$user_id'";
        $hasil2 = $this->db->query($query2);
    }

    public function insertFotoVendor($user_id,$updated_date,$namafilefoto,$a)
    {
    	$query = "INSERT into fotoArchieve (user_id,order_num,filename,creation_date) VALUES ('$user_id', '$a', '$namafilefoto', '$updated_date')";
        $hasil = $this->db->query($query);
    }

    public function insertFotoTenant($user_id,$updated_date,$namafilefoto,$a)
    {
    	$query = "INSERT into fotoArchieve (user_id,order_num,filename,creation_date) VALUES ('$user_id', '$a', '$namafilefoto', '$updated_date')";
        $hasil = $this->db->query($query);
    }

    public function getFotoForUpdate($user_id,$s)
    {
    	$query = "SELECT filename FROM fotoArchieve WHERE user_id = '$user_id' AND order_num = '$s'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getFotoVendorForUpdate($user_id)
    {
    	$query = "SELECT logo FROM vendorAccount WHERE user_id = '$user_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getFotoTenantForUpdate($user_id)
    {
    	$query = "SELECT logo FROM tenantAccount WHERE user_id = '$user_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function updateFotoVendor($user_id,$updated_date,$namaupdate,$s)
    {
    	$query = "UPDATE fotoArchieve SET filename = '$namaupdate', update_date = '$updated_date' WHERE user_id = '$user_id' AND order_num = '$s'";
        $hasil = $this->db->query($query);
    } 

    public function updateFotoTenant($user_id,$updated_date,$namaupdate,$s)
    {
    	$query = "UPDATE fotoArchieve SET filename = '$namaupdate', update_date = '$updated_date' WHERE user_id = '$user_id' AND order_num = '$s'";
        $hasil = $this->db->query($query);
    } 

    public function insertFasilitasVendor($user_id,$updated_date,$namafilefasilitas,$arr_keterangan_tambahan,$b)
    {
    	$query = "INSERT into fasilitasArchieve (user_id,order_num,filename,note,creation_date) VALUES ('$user_id', '$b', '$namafilefasilitas', '$arr_keterangan_tambahan', '$updated_date')";
        $hasil = $this->db->query($query);
    }

    public function insertFasilitasTenant($user_id,$updated_date,$namafilefasilitas,$arr_keterangan_tambahan,$b)
    {
    	$query = "INSERT into fasilitasArchieve (user_id,order_num,filename,note,creation_date) VALUES ('$user_id', '$b', '$namafilefasilitas', '$arr_keterangan_tambahan', '$updated_date')";
        $hasil = $this->db->query($query);
    }

    public function getFasilitasForUpdate($user_id,$s)
    {
    	$query = "SELECT filename FROM fasilitasArchieve WHERE user_id = '$user_id' AND order_num = '$s'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function updateFasilitasVendor($user_id,$updated_date,$namaupdate,$t,$note)
    {
    	$query = "UPDATE fasilitasArchieve SET filename = '$namaupdate', update_date = '$updated_date', note= '$note' WHERE user_id = '$user_id' AND order_num = '$t'";
        $hasil = $this->db->query($query);
    } 

    public function updateFasilitasTenant($user_id,$updated_date,$namaupdate,$t,$note)
    {
    	$query = "UPDATE fasilitasArchieve SET filename = '$namaupdate', update_date = '$updated_date', note= '$note' WHERE user_id = '$user_id' AND order_num = '$t'";
        $hasil = $this->db->query($query);
    } 

    public function renewAccountVendor($user_id,$password)
    {
    	$query = "UPDATE generalAccount SET password = '$password' WHERE user_id = '$user_id'";
        $hasil = $this->db->query($query);
    }

    public function getDataPostMessage($user_id)
    {
    	$query = "SELECT a.id_msg, a.user_id, a.msg, a.creation_date, a.deleted_flag, a.deleted_date, a.edited_flag, a.edited_date, a.filename, a.flag, a.id_category, a.id_subcategory, b.fullname, b.email, b.phone_number FROM postMessage a left join generalAccount b ON a.user_id = b.user_id WHERE a.user_id = '$user_id' AND a.flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getPostFotoForUpdate($id_post)
    {
    	$query = "SELECT filename FROM postMessage WHERE id_msg = '$id_post' AND flag = 'Y'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getPostFotoUserForUpdate($user_id)
    {
    	$query = "SELECT photo FROM userAccount WHERE user_id = '$user_id'";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function insertPost($msg,$id_category,$id_subcategory,$namafile,$creation_date,$user_id)
    {
    	$query = "INSERT into postMessage (user_id, msg, creation_date, filename, id_category, id_subcategory)
    				VALUES ('$user_id', '$msg', '$creation_date', '$namafile', '$id_category', '$id_subcategory')";
        $hasil = $this->db->query($query);
        $query2 = "SELECT DISTINCT id_msg FROM postMessage WHERE creation_date = '$creation_date' and flag = 'Y'";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function updatePost($msg,$id_category,$id_subcategory,$namaupdate,$creation_date,$user_id,$id_post)
    {
    	$query = "UPDATE 
    				postMessage 
    				SET 
    				msg = '$msg',
    				edited_date = '$creation_date', 
    				edited_flag = 'Y',
    				filename = '$namaupdate', 
    				id_category = '$id_category', 
    				id_subcategory = '$id_subcategory'
    				WHERE user_id = '$user_id'
    				AND id_msg = '$id_post'";
        $hasil = $this->db->query($query);
        $query2 = "SELECT id FROM postLogs WHERE id_msg = '$id_post'";
        $hasil2 = $this->db->query($query2);
        return $hasil2->result_array();
    }

    public function softDeletePost($id_msg,$creation_date)
    {
    	$query = "UPDATE 
    				postMessage 
    				SET 
    				deleted_date = '$creation_date', 
    				deleted_flag = 'Y',
    				flag = 'N'
    				WHERE id_msg = '$id_msg'";
        $hasil = $this->db->query($query);
    }

    public function softDeletePostLogs($id)
    {
    	$query = "UPDATE 
    				postLogs
    				SET 
    				flag = 'N'
    				WHERE id_msg = '$id'";
        $hasil = $this->db->query($query);
    }

    public function getDataPostLogsBySub($id_subcategory)
    {
    	$query = "SELECT GROUP_CONCAT(id_msg) as pattern FROM postLogs WHERE id_subcategory IN ($id_subcategory) and flag = 'Y' GROUP BY id_msg";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getDataPostMsgByID($pattern)
    {
    	$query = "SELECT 
    				a.id_msg, 
    				a.user_id, 
    				b.username, 
    				b.email, 
    				b.phone_number, 
    				b.fullname,
                    c.address,
                    c.date_birth,
    				a.msg, 
    				a.creation_date, 
    				a.filename, 
    				a.id_category, 
    				a.id_subcategory 
    				FROM postMessage a 
    				LEFT JOIN generalAccount b 
    				ON a.user_id = b.user_id 
                    LEFT JOIN userAccount c
                    ON a.user_id = c.user_id
    				WHERE a.flag = 'Y' 
    				AND a.id_msg IN ($pattern)";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function insertPostLogs($id_msg,$id_category,$value,$creation_date,$user_id)
    {
    	$query = "INSERT into postLogs (id_msg, id_category, id_subcategory, creation_date, user_id) VALUES ('$id_msg', '$id_category', '$value', '$creation_date', '$user_id')";
        $hasil = $this->db->query($query);
    }

    public function updatePostLogs($posting,$id_category,$value)
    {
    	$query = "UPDATE postLogs SET id_category = '$id_category', id_subcategory = '$value' FROM postLogs WHERE id = '$posting'";
        $hasil = $this->db->query($query);
    }

    public function getTop3()
    {
    	$query = "SELECT routes, count(id_act) as reach from logActivity WHERE routes LIKE '%/Profile/%' group by routes order by reach desc LIMIT 3";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getGeneralAccount3Besar($join)
    {
        $query = "SELECT * from generalAccount where user_id IN ($join) ORDER BY user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getPhoto3Besar($join)
    {
        $query = "SELECT * from fotoArchieve where user_id IN ($join) and order_num = 1 ORDER BY user_id";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getTop10()
    {
    	$query = "SELECT routes, count(id_act) as reach from logActivity WHERE routes LIKE '%/Profile/%' group by routes order by reach desc LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function getLast15()
    {
    	$query = "SELECT routes, count(id_act) as reach from logActivity WHERE routes LIKE '%/Profile/%' group by routes order by reach desc LIMIT 5";
        $hasil = $this->db->query($query);
        return $hasil->result_array();
    }

    public function checkPhoneVerify($id)
    {
        $query = "SELECT phone_verified FROM userAccount WHERE user_id = $id LIMIT 1";
        $result = $this->db->query($query)->row();
        if ($result->phone_verified == 'Y') {
            return true;
        } else {
            return false;
        }
    }

    public function checkEmailVerify($id)
    {
        $query = "SELECT email_verified FROM userAccount WHERE user_id = $id LIMIT 1";
        $result = $this->db->query($query)->row();
        return ($result->email_verified == 'Y');
    }

    public function getVerificationToken($id)
    {
        $query = "SELECT * FROM emailVerification WHERE user_id = $id LIMIT 1";
        $cek = $this->db->query($query)->row();
        $code = $this->generateCode(6);
        $token = md5($this->random(32)).md5(uniqid().time().rand(0, 64));

        if (!$cek) {
            $this->db->query("INSERT INTO emailVerification (`user_id`, `code`, `token`) VALUES ($id, '$code', '$token')");
        } else {
            $this->db->query("UPDATE emailVerification SET `code` = '$code', `token` = '$token' WHERE user_id = $id");
        }

        return ['code' => $code, 'token' => $token];
    }

    public function verifyEmail($id, $code, $token) {
        //=============== KODE ERROR ===============//
        // 1 = VERIFIKASI SUKSES
        // 2 = KODE OTP TIDAK VALID
        // 3 = TERJADI KESALAHAN SISTEM
        //==========================================//

        $result = $this->db->query("SELECT * FROM emailVerification WHERE `user_id` = $id AND `token` = '$token' AND verified_at IS NULL LIMIT 1")->row();

        if (!$result) return 3;
        if ($result->code !== $code) return 2;

        $data_id = $result->id;
        $timestamp = date('Y-m-d H:i:s', time());
        $this->db->query("UPDATE emailVerification SET `verified_at` = '$timestamp' WHERE `id` = $data_id");
        $this->db->query("UPDATE userAccount SET `email_verified` = 'Y' WHERE `user_id` = $id");
        return 1;
    }

    public function resetPassword($email) {
        $user = $this->db->query("SELECT * FROM generalAccount WHERE `email` = '$email' LIMIT 1")->row();
        if (!$user) return false;

        $user_id = $user->user_id;
        $token = md5($this->random(32)).md5(uniqid().time().rand(0, 64));
        $cek = $this->db->query("SELECT * FROM resetPassword WHERE `user_id` = $user_id AND `used_at` IS NULL LIMIT 1")->row();

        if ($cek) {
            $data_id = $cek->id;
            $this->db->query("UPDATE resetPassword SET `token` = '$token' WHERE `id` = $data_id");
        } else {
            $this->db->query("INSERT INTO resetPassword (`user_id`, `token`) VALUES ($user_id, '$token')");
        }
        
        return ['name' => $user->fullname, 'email' => $user->email, 'token' => $token];
    }
    
}
