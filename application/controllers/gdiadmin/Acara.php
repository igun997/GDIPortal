<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acara extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->adminLogin == null){
      redirect(base_url("gdiadmin/login"));
    }
    $this->load->model("event");

  }

  function index()
  {
    $this->event->setLimit(9999);
    $dataPost = $this->event->find(array("id_admin"=>$this->session->id_admin));
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    array_push($js,base_url("assets/backend/js/event.js"));
    //Render Page
    $this->template->setTemplate("admin/acara",array("judul"=>"Admin - Event Manajer","acara"=>$dataPost),"themeadmin/header","themeadmin/footer",$css,$js);
  }

}
