<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function find($value='')
  {
    if($value != ""){
      return $this->db->get_where("galeri",$value);
    }else{
      return $this->db->get("galeri");
    }
  }

}
