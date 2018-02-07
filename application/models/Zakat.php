<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zakat extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function find($value='')
  {
    if($value != ""){
      return $this->db->get_where("zakat",$value);
    }else{
      return $this->db->get("zakat");
    }
  }
  function insert($value='')
  {
    return $this->db->insert("zakat",$value);
  }

}
