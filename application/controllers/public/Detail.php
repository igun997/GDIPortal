<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function page($slug = "")
  {
    if($slug != ""){
      $this->template->setTemplate("public/deskripsi",array("judul"=>"Contoh"),"themepublic/header","themepublic/footer");
    }else{
      redirect(base_url("notfound"));
    }
  }

}
