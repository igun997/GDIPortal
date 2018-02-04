<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    $this->load->model("donatur");
    $this->load->model("event");
  }

  function index()
  {
    $resCSS = $this->config->item("css");
    $resJS = $this->config->item("js");
    //Data Donatur
    $data = $this->donatur->find();
    //Data galeri
    $galeri = $this->config->item("galeri");
    //Get Event Donasi
    $eventdonasi = $this->event->eventdonasi();
    $totalDonasi = 0;
    foreach ($eventdonasi->result() as $key => $value) {
      $totalDonasi = $totalDonasi + $value->total_donasi;
    }
    //Get List Event
    $event = $this->event->find();
    //Passing Event ke View
    $eventpass = $this->event;
    //Get Event Selanjutnya
    $nowdate = date("Y-m-d H:i:s");
    $eventselanjutnya = $this->event->find(array("mulai_acara >="=>$nowdate));

    array_push($resJS,base_url("assets/js/home.js"));

		$this->template->setTemplate("public/home",array("judul"=>"Beranda","event_upcoming"=>$eventselanjutnya->result(),"total_donatur"=>$data->num_rows(),"event_list"=>$event->result(),"total_donasi"=>$totalDonasi,"eventpass"=>$eventpass),"themepublic/header","themepublic/footer",$resCSS,$resJS);
  }

}
