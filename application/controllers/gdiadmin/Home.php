<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    //Render Page
    $this->template->setTemplate("admin/home",array("judul"=>"Halaman Admin"),"themeadmin/header","themeadmin/footer",$css,$js);
  }

}
