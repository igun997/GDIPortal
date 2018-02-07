<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->penggunaLogin == null){
      redirect(base_url("pengguna/login"));
    }
  }

  function index()
  {
    $this->load->model("zakat_model");
    $css = $this->config->item("cssuser");
    $js = $this->config->item("jsuser");
    array_push($js,base_url("assets/backend/js/zakat.js"));
    //Zakat fitrah
    $zafit = $this->zakat_model->find(array("jenis_zakat"=>"zakat_fitri","id_donatur"=>$this->session->id_donatur));

    //Render Page
    $this->template->setTemplate("user/zakat",array("judul"=>"ZISWAF - Zakat","zafit"=>$zafit),"themeuser/header","themeuser/footer",$css,$js);
  }
  function uploadbukti($id="")
  {
    if($id != ""){
      $this->load->model("zakat_model");
      $cek = $this->zakat_model->find(array("bukti"=>0,"status_bayar"=>0,"id_zakat"=>$id,"id_donatur"=>$this->session->id_donatur));
      if($cek->num_rows() > 0){
        $msg = null;
        $css = $this->config->item("cssuser");
        $js = $this->config->item("jsuser");
        array_push($js,base_url("assets/backend/js/zakat.js"));
        //Upload File
        if(isset($_FILES["bukti"]["tmp_name"])){
          $config["detect_mime"] = true;
          $config["encrypt_name"] = true;
          $config["mod_mime_fix"] = true;
          $config['upload_path'] = realpath(APPPATH . '../_upload/');
          $config['allowed_types'] = 'jpg|jpeg|png|gif';
          $config['max_size'] = 1000;
          $this->load->library('upload', $config);
          if($this->upload->do_upload('bukti')){
            $data_upload = $this->upload->data();
            $up = $this->zakat_model->update(array("bukti"=>$data_upload["file_name"]),array("id_zakat"=>$id));
            if($up){
              $msg = "Data Berhasil Di Simpan";
            }else {
              $msg = "Data Gagal Di Simpan";
            }
          }else{
            $msg = $this->upload->display_errors();
          }
        }
        //Render Page
        $this->template->setTemplate("user/zakat_upload",array("judul"=>"ZISWAF - Upload Bukti Zakat","datazakat"=>$cek->row(),"msg"=>$msg),"themeuser/header","themeuser/footer",$css,$js);
      }else{
        redirect(base_url("notfound"));
      }
    }else{
      redirect(base_url("notfound"));
    }


  }

}
