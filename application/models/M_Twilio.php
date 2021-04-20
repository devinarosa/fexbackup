<?php

defined('BASEPATH') or exit('No direct script access allowed');

require_once 'vendor/autoload.php';

use Twilio\Rest\Client;

class M_Twilio extends CI_Model
{
  protected $id = 'AC932f52faadda5f335d4be630624784dd';
  protected $token = 'fa43f96a14098cb36640c17a00b9dbce';
  protected $service = 'VA53951188dd8e1ff37b54569bab2be1d3';
  protected $twilio;

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->twilio = new Client($this->id, $this->token);
  }

  public function requestOtp($target, $method = 'sms')
  {
    if ($method == 'sms') {
      $phone = '+' . $target;
      if (substr($target, 0, 2) == '08') {
        $phone = '+62' . substr($target, 1);
      }
      return $this->twilio->verify->v2->services($this->service)->verifications->create($phone, $method);
    } else if ($method == 'email') {
      return $this->twilio->verify->v2->services($this->service)->verifications->create($target, $method);
    }
  }

  public function verify($user_id, $target, $code, $method = 'sms')
  {
    if ($method == 'sms') {
      $phone = '+' . $target;
      if (substr($target, 0, 2) == '08') {
        $phone = '+62' . substr($target, 1);
      }
    }
    $verification = $this->twilio->verify->v2->services($this->service)->verificationChecks->create($code, ["to" => $method == 'sms' ? $phone : $target]);

    $column = $method == 'sms' ? 'phone' : 'email';

    if ($verification->valid) {
      // VERIFY OTP BERHASIL
      $query = 'UPDATE userAccount SET ' . $column . '_verified = "Y" WHERE user_id = ' . $user_id;
      $this->db->query($query);
      return true;
    } else {
      // VERIFY OTP GAGAL
      return false;
    }
  }
}
