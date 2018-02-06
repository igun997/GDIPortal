<?php

defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/simple_html_dom.php';

/**
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array
 *
 * @package         CodeIgniter
 * @subpackage      Rest Server
 * @category        Controller
 * @author          Phil Sturgeon, Chris Kacerguis
 * @license         MIT
 * @link            https://github.com/chriskacerguis/codeigniter-restserver
 */
class Data extends REST_Controller {

    function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
    function _restrictPengguna()
    {
      if($this->session->penggunaLogin == null){
        $this->response(array("status"=>false,"msg"=>"Anda Belum Login"),200);
        exit();
      }

    }
    function index_post()
    {
      $this->response(array("status"=>false,"msg"=>"No Request Detected"),404);
    }
    function index_get()
    {
      $this->response(array("status"=>false,"msg"=>"No Request Detected"),404);
    }
    function index_put()
    {
      $this->response(array("status"=>false,"msg"=>"No Request Detected"),404);
    }
    function index_delete()
    {
      $this->response(array("status"=>false,"msg"=>"No Request Detected"),404);
    }
    function sendmail_get()
    {
      $this->load->model("extender/sendmail");
      $a = $this->sendmail->send_justmail("Test","Lala","indra.gunanda@gmail.com");
      $this->response($a);
    }
    function berasrate_get()
    {
      $url = 'https://ews.kemendag.go.id/harganasional/index.aspx';

    //init curl
    $ch = curl_init();

    //Set the URL to work with
    curl_setopt($ch, CURLOPT_URL, $url);

    // ENABLE HTTP POST
    curl_setopt($ch, CURLOPT_POST, 1);

    //Set the post parameters
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'v=0');

    //Handle cookies for the login
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookie.txt');

    //Setting CURLOPT_RETURNTRANSFER variable to 1 will force cURL
    //not to print out the results of its query.
    //Instead, it will return the results as a string return value
    //from curl_exec() instead of the usual true/false.
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    //execute the request (the login)
    $store = curl_exec($ch);
    libxml_use_internal_errors(true);
		if($store != null){
			$DOM = new DOMDocument();
			$DOM->loadHTML($store);

			$Header = $DOM->getElementsByTagName('th');
			$Detail = $DOM->getElementsByTagName('td');

				//#Get header name of the table
			foreach($Header as $NodeHeader)
			{
				$aDataTableHeaderHTML[] = trim($NodeHeader->textContent);
			}
			//print_r($aDataTableHeaderHTML); die();

			//#Get row data/detail table without header name as key
			$i = 0;
			$j = 0;
			foreach($Detail as $sNodeDetail)
			{
				$aDataTableDetailHTML[$j][] = trim($sNodeDetail->textContent);
				$i = $i + 1;
				$j = $i % count($aDataTableHeaderHTML) == 0 ? $j + 1 : $j;
			}
			//print_r($aDataTableDetailHTML); die();

			//#Get row data/detail table with header name as key and outer array index as row number
			for($i = 0; $i < count($aDataTableDetailHTML); $i++)
			{
        $x = 0;
				for($j = 0; $j < count($aDataTableHeaderHTML); $j++)
				{
					$aTempData[$i][$x++] = $aDataTableDetailHTML[$i][$j];
				}
			}
			$aDataTableDetailHTML = $aTempData; unset($aTempData);
      $this->response(array("status"=>true,"data"=>$aDataTableDetailHTML));
    }else{
      $this->response(array("status"=>false));
    }
    }
    function cekevent_post()
    {
      $this->load->model("event");
      $data = $this->input->post(null,true);
      $dataEvent = $this->event->find($data);
      $datenow = strtotime(date("Y-m-d H:i:s"));
      $mulai = strtotime($dataEvent->row()->mulai_donasi);
      $selesai = strtotime($dataEvent->row()->selesai_donasi);
      if($datenow >= $mulai){
        if($datenow <= $selesai){
          $this->response(array("status"=>true,"msg"=>"Masa Donasi Sedang Dimulai"));
        }else{
          $this->response(array("status"=>false,"msg"=>"Masa Donasi  Telah Berakhir"));
        }
      }else{
        $this->response(array("status"=>false,"msg"=>"Masa Donasi Belum Di Mulai"));
      }
    }
    public function donasikan_post()
    {
      $this->load->model("event");
      $this->_restrictPengguna();
      $data = $this->input->post(null,true);
      $data["id_donatur"] = $this->session->id_donatur;
      $status = $this->event->donasikan($data);
      if($status){
        $this->response(array("status"=>$status,"msg"=>"Donasi anda telah di simpan silahkan transfer nominal yang di donasikan ke nomor rekening ".$this->config->item("rekening")." dan upload bukti donasi di halaman konfirmasi donasi"));
      }else{
        $this->response(array("status"=>false,"msg"=>"Sepertinya Ada Kesalahan Di Server Kami"));
      }
    }
    function ceklogin_get()
    {
      if($this->session->penggunaLogin != null){
        $nama = explode(" ",$this->session->nama_donatur);
        $this->response(array("status"=>true,"msg"=>"Login Detected","username"=>$this->session->username,"nama_depan"=>$nama[0],"nama_belakang"=>(isset($nama[1]))?$nama[1]:"","nomor_tlp"=>$this->session->nomor_tlp),200);
      }else{
        $this->response(array("status"=>false,"msg"=>"Login Undetected"),200);
      }
    }
    function login_post(){
      $this->load->model("donatur");
      $data = $this->input->post(null,true);
      $temp = $this->donatur->find(array("username"=>$data["username"],"password"=>md5($data["password"]),"status"=>1));
      if($temp->num_rows() > 0){
        $array = array(
          'penggunaLogin' => true,
          'username'=>$temp->row()->username,
          'id_donatur'=>$temp->row()->id_donatur,
          'nomor_tlp'=>$temp->row()->nomor_tlp,
          'nama_donatur'=>$temp->row()->nama_donatur
        );
        $this->session->set_userdata($array);
        $this->response(array("status"=>true,"msg"=>"Login Berhasil"));
      }else{
        $this->response(array("status"=>false,"msg"=>"User dan Password Salah / Akun Belum Di Aktivasi"));
      }
    }
    function register_post()
    {
      $this->load->model("donatur");
      $data = $this->input->post(null,true);
      unset($data["tanggal_lhr_submit"]);
      if($data["password_1"] == $data["password_2"]){
        $data["nama_donatur"] = $data["nama"];
        $data["password"] = md5($data["password_1"]);
        unset($data["password_1"]);
        unset($data["nama"]);
        unset($data["password_2"]);
        $status = $this->donatur->insert($data);
        if($status){
          $this->response(array("status"=>true,"msg"=>"Registrasi Berhasil"),200);
        }else{
          $this->response(array("status"=>true,"msg"=>"Registrasi Berhasil"),200);
        }
      }else{
        $this->response(array("status"=>false,"msg"=>"Registrasi Gagal"),404);
      }
    }
    function goldrate_get(){

    /*#############################
    * Developer: Mohammad Sharaf Ali
    * Designation: Web Developer
    * Version: 1.0
    */#############################
    $RATES_API_URL = 'http://goldprice.org/NewCharts/gold/images/goldsilverpricesforcalculators.txt';
    /*
     * since the api returns text response so file_get_contents() will suffice
     * else use curl get request
     */
    $fileContent = file_get_contents($RATES_API_URL);
    $silverFileContent = explode('!', $fileContent);
    $goldFileContent = explode('@', $silverFileContent[1]);
    $currAndRateCollection = array();
    /*
     * calculating gold and silver rates in different for each loops
     * as the currencies return may vary across both
     */
    #gold rates calculation
    $currAndRates = explode(';', $goldFileContent[0]);
    foreach ($currAndRates as $currAndRate) {
        if (!empty($currAndRate)) {
            $split = explode(',', $currAndRate);
            $currAndRateCollection['gold_rates'][] = array('Currency' => str_replace('XAU_', '', $split[0]),
                                                           'Price' => $split[1]);
        }
    }
    #silver rates calculation
    $currAndRates = explode(';', $silverFileContent[2]);
    foreach ($currAndRates as $currAndRate) {
        if (!empty($currAndRate)) {
            $split = explode(',', $currAndRate);
            $currAndRateCollection['silver_rates'][] = array('Currency' => str_replace('XAG_', '', $split[0]),
                                                             'Price' => $split[1]);
        }
    }
    $this->response($currAndRateCollection,200);
  }


}
