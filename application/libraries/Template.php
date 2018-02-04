<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
  public $ci;
  public function __construct()
  {
    $obj =& get_instance();
    $this->ci = $obj;
  }
  function diffdays($date_1 , $date_2 , $differenceFormat = '%a' )
  {
      $datetime1 = date_create($date_1);
      $datetime2 = date_create($date_2);

      $interval = date_diff($datetime1, $datetime2);

      return $interval->format($differenceFormat);

  }
  public function setTemplate($content,$addons="",$header="",$footer="",$js="",$css="")
  {
    $data = array();
    $data["data"] = $addons;
    $galeri = $this->ci->config->item("galeri");
    $data["data"]["galeri"] = $galeri->result();
    $resCSS = $this->ci->config->item("css");
    $resJS = $this->ci->config->item("js");
    if($js == "" && $css == ""){
      $data["css"] =  $resCSS;
      $data["js"] =   $resJS;
    }else{
      $data["css"] = $js;
      $data["js"] = $css;
    }
    if($header == "" && $footer == ""){
      $this->ci->load->view($content,$data);
    }else{
      $this->ci->load->view($header,$data);
      $this->ci->load->view($content,$data);
      $this->ci->load->view($footer,$data);
    }
  }

}
