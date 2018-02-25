<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Posting extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    if($this->session->adminLogin == null){
      redirect(base_url("gdiadmin/login"));
    }
    $this->load->model("post");
  }

  function index()
  {
    $dataPost = $this->post->find(array("id_admin"=>$this->session->id_admin));
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    array_push($js,base_url("assets/backend/js/post.js"));
    //Render Page
    $this->template->setTemplate("admin/post",array("judul"=>"Admin - Post Manajer","artikel"=>$dataPost),"themeadmin/header","themeadmin/footer",$css,$js);
  }
  function view($id='')
  {
    $cek = $this->post->find(array("id_post"=>$id));
    $css = $this->config->item("cssadmin");
    $js = $this->config->item("jsadmin");
    array_push($js,base_url("assets/backend/js/post.js"));
    if($cek->num_rows() > 0){
      $this->template->setTemplate("admin/post_view",array("judul"=>$cek->row()->judul,"detilArtikel"=>$cek->row()),"themeadmin/header","themeadmin/footer",$css,$js);
    }else {
      redirect(base_url("404"));
    }
  }
  function edit($id='')
  {
    $cek = $this->post->find(array("id_post"=>$id));
    if($cek->num_rows() > 0){
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
        $files = $_FILES;
        if ($files["gambar"]["size"] > 0) {
          if($this->upload->do_upload('gambar')){
            $d = $this->upload->data();
            $file = $d["file_name"];
            $dataPost["gambar"] = $file;
            unlink(realpath("_upload/".$cek->row()->gambar));
            $status = $this->post->update($dataPost,array("id_post"=>$id));
            if($status){
              $msg = "Data Berhasil Di Simpan";
            }else{
              $msg = "Data Gagal Di Simpan";
              unlink($d["full_path"]);
            }
          }else{
            $msg = $this->upload->display_errors();
          }
        }else {
          $status = $this->post->update($dataPost,array("id_post"=>$id));
          if($status){
            $msg = "Data Berhasil Di Simpan";
          }else{
            $msg = "Data Gagal Di Simpan";
          }
        }

      }
      //Render Page
      $this->template->setTemplate("admin/post_artikel",array("judul"=>"Edit Posting","msg"=>$msg,"dataPost"=>$cek->row()),"themeadmin/header","themeadmin/footer",$css,$js);
    }else{
      redirect(base_url("404"));
    }
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
          if($this->upload->do_upload('gambar')){
            $d = $this->upload->data();
            $file = $d["file_name"];
            $dataPost["gambar"] = $file;
            $dataPost["tipe_post"] = "artikel";
            $dataPost["id_admin"] = $this->session->id_admin;
            $status = $this->post->insert($dataPost);
            if($status){
              $msg = "Data Berhasil Di Simpan";
            }else{
              $msg = "Data Gagal Di Simpan";
              unlink($d["full_path"]);
            }
          }else{
            $msg = $this->upload->display_errors();
          }
        }
        //Render Page
        $this->template->setTemplate("admin/post_artikel",array("judul"=>"Posting Artikel","msg"=>$msg),"themeadmin/header","themeadmin/footer",$css,$js);
      }elseif ($tipe == "berita") {
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
          if($this->upload->do_upload('gambar')){
            $d = $this->upload->data();
            $file = $d["file_name"];
            $dataPost["gambar"] = $file;
            $dataPost["tipe_post"] = "berita";
            $dataPost["id_admin"] = $this->session->id_admin;
            $status = $this->post->insert($dataPost);
            if($status){
              $msg = "Data Berhasil Di Simpan";
            }else{
              $msg = "Data Gagal Di Simpan";
              unlink($d["full_path"]);
            }
          }else{
            $msg = $this->upload->display_errors();
          }
        }
        //Render Page
        $this->template->setTemplate("admin/post_artikel",array("judul"=>"Posting Berita","msg"=>$msg),"themeadmin/header","themeadmin/footer",$css,$js);
      }elseif ($tipe == "halaman") {
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
          if($this->upload->do_upload('gambar')){
            $d = $this->upload->data();
            $file = $d["file_name"];
            $dataPost["gambar"] = $file;
            $dataPost["tipe_post"] = "halaman";
            $dataPost["id_admin"] = $this->session->id_admin;
            $status = $this->post->insert($dataPost);
            if($status){
              $msg = "Data Berhasil Di Simpan";
            }else{
              $msg = "Data Gagal Di Simpan";
              unlink($d["full_path"]);
            }
          }else{
            $msg = $this->upload->display_errors();
          }
        }
        //Render Page
        $this->template->setTemplate("admin/post_artikel",array("judul"=>"Posting Halaman","msg"=>$msg),"themeadmin/header","themeadmin/footer",$css,$js);
      }
    }else{
      redirect(base_url("notfound"));
    }
  }

}
