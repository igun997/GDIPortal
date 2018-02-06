<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->penggunaLogin == null){
      redirect(base_url("pengguna/login"));
    }
  }

  function index()
  {
    $css = $this->config->item("cssuser");
    $js = $this->config->item("jsuser");
    //Render Page
    $this->template->setTemplate("user/home",array("judul"=>"Halaman Pengguna"),"themeuser/header","themeuser/footer",$css,$js);
  }

}
