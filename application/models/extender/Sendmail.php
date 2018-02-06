<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendmail extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  public function send_justmail($pesan='',$head='',$email='',$recEmail = '')
  {
    if($recEmail == ""){
      $from = "office@grahadhuafa.org";
    }else{
      $from = $recEmail;
    }
    $config = Array(
       'protocol' => 'smtp',
       'smtp_host' => 'ssl://smtp.gmail.com',
       'smtp_port' => 465,
       'smtp_user' => 'systemfive.id@gmail.com',
       'smtp_pass' => '@indra290997',
       'charset'   => 'iso-8859-1',
       'wordwrap' => TRUE
    );
    $this->load->library('email', $config);
    $this->email->set_mailtype("html");
    $this->email->set_newline("\r\n");
    $this->email->from($from, 'YGDI');
    $this->email->to($email);
    $this->email->subject($head);
    $this->email->message($pesan);
    $result = $this->email->send();
    return $result;
  }

}
