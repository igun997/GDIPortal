<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->adminLogin == null){
      redirect(base_url("gdiadmin/login"));
    }
  }

  function index()
  {
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    array_push($js,base_url("assets/backend/js/dashboard.js"));
    //Render Page
    $this->template->setTemplate("admin/home",array("judul"=>"Halaman Admin"),"themeadmin/header","themeadmin/footer",$css,$js);
  }

}
