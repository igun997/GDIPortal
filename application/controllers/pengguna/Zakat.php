<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $css = $this->config->item("cssuser");
    $js = $this->config->item("jsuser");
    array_push($js,base_url("assets/backend/js/zakat.js"));
    //Render Page
    $this->template->setTemplate("user/zakat",array("judul"=>"ZISWAF - Zakat"),"themeuser/header","themeuser/footer",$css,$js);
  }

}
