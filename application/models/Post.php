<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Model{

  public function __construct()
  {
    parent::__construct();
  }
  function find($value='')
  {
    if($value != ""){
      return $this->db->get_where("post",$value);
    }else{
      return $this->db->get("post");
    }
  }
  function insert($value='')
  {
    return $this->db->insert("post", $value);
  }
  function update($data, $where)
  {
    $this->db->update('post',$data, $where);
    return  $this->db->affected_rows() > 0;
  }
  function delete($where)
  {
   $this->db->delete("post",$where);
   return $this->db->affected_rows() > 0;
  }

}
