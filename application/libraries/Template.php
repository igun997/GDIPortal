<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template {
  public $ci;
  public function __construct()
  {
    $obj =& get_instance();
    $this->ci = $obj;
  }
  public function setTemplate($content,$header="",$footer="",$js="",$css="")
  {
    $data = array();
    if($js == "" && $css == ""){
      $data["css"] =   $this->ci->config->item("css");
      $data["js"] =   $this->ci->config->item("js");
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
