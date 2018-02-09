<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->adminLogin == null){
      redirect(base_url("gdiadmin/login"));
    }
  }

  function index()
  {
    $this->load->model("post");
    $dataPost = $this->post->find(array("id_admin"=>$this->session->id_admin));
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    array_push($js,base_url("assets/backend/js/post.js"));
    //Render Page
    $this->template->setTemplate("admin/post",array("judul"=>"Admin - Post Manajer","artikel"=>$dataPost),"themeadmin/header","themeadmin/footer",$css,$js);
  }
  function tambah($tipe = "")
  {
    if($tipe != null){
      if($tipe == "artikel"){
        $msg = null;
        $css = $this->config->item("cssadmin");
        $js = $this->config->item("jsadmin");
        array_push($js,base_url("assets/backend/js/post.js"));
        if(isset($_POST["simpan"])){
          $dataPost = $this->input->post(null,true);
          unset($dataPost["simpan"]);

          $config["detect_mime"] = true;
          $config["encrypt_name"] = true;
          $config["mod_mime_fix"] = true;
          $config['upload_path'] = realpath(APPPATH . '../_upload/');
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = 1000;
          $this->load->library('upload', $config);
          if($this->upload->do_upload('bukti')){

          }

        }
        //Render Page
        $this->template->setTemplate("admin/post_artikel",array("judul"=>"Posting Artikel","msg"=>$msg),"themeadmin/header","themeadmin/footer",$css,$js);
      }elseif ($tipe="berita") {

      }elseif ($tipe="halaman") {

      }
    }else{
      redirect(base_url("notfound"));
    }
  }

}
