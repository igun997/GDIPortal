<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    //JS CSS Initialize
    $css = array(
      base_url("assets/backend/").'css/materialize.min.css',
      base_url("assets/backend/").'css/style.min.css',
      base_url("assets/backend/").'css/custom/custom-style.css',
      base_url("assets/backend/").'css/layouts/page-center.css',
      base_url("assets/backend/").'js/plugins/prism/prism.css',
      base_url("assets/backend/").'js/plugins/perfect-scrollbar/perfect-scrollbar.css'
    );
    $js = array(
      base_url("assets/backend/").'js/plugins/jquery-1.11.2.min.js',
      base_url("assets/backend/").'js/materialize.min.js',
      base_url("assets/backend/").'js/plugins/prism/prism.js',
      base_url("assets/backend/").'js/plugins/perfect-scrollbar/perfect-scrollbar.min.js',
      base_url("assets/backend/").'js/plugins.min.js',
      base_url("assets/backend/").'js/custom-script.js'
    );

    //Render Page
    $this->template->setTemplate("user/login",array("judul"=>"Halaman Masuk"),"","",$css,$js);
  }

}
