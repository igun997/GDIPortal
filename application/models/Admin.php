<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  function find($value='')
  {
    if($value != ""){
      return $this->db->get_where("admin",$value);
    }else{
      return $this->db->get("admin");
    }
  }
  function insert($value='')
  {
    return $this->db->insert("admin", $value);
  }
  function update($data, $where)
  {
    $this->db->update('admin',$data, $where);
    return  $this->db->affected_rows() > 0;
  }
  function delete($where)
  {
   $this->db->delete("admin",$where);
   return $this->db->affected_rows() > 0;
  }

}
