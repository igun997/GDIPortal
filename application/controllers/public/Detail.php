<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("donatur");
    $this->load->model("event");
  }

  function page($slug = "")
  {
    if($slug != ""){
      $resCSS = $this->config->item("css");
      $resJS = $this->config->item("js");
      //Tambah Custom JS
      array_push($resJS,base_url("assets/js/detail.js"));
      //Get Detail Event
      $eventdetail = $this->event->find(array("slug"=>$slug));
      if($eventdetail->num_rows() > 0){
        //Get Event Selanjutnya
        $nowdate = date("Y-m-d H:i:s");
        $eventselanjutnya = $this->event->find(array("mulai_acara >="=>$nowdate));
        $this->template->setTemplate("public/deskripsi",array("judul"=>$eventdetail->row()->judul,"event_upcoming"=>$eventselanjutnya->result(),"slug"=>$slug,"event"=>$eventdetail->row()),"themepublic/header","themepublic/footer",$resCSS,$resJS);
      }else{
        redirect(base_url("notfound"));
      }
    }else{
      redirect(base_url("notfound"));
    }
  }

}
