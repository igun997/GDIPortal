<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Model{
  public $limit = 4;
  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }
  function setLimit($limit){
    $this->limit = $limit;
  }
  function find($value='')
  {
    if($value != ""){
      return $this->db->limit($this->limit,0)->order_by("id_event","desc")->where($value)->get("event");
    }else{
      return $this->db->limit($this->limit,0)->order_by("id_event","desc")->get("event");
    }
  }
  function eventdonasi($value = ""){
    if($value != ""){
      return $this->db->select("*")->from("event a")->join("event_donasi b","a.id_event = b.id_event")->where($value)->get();
    }else{
      return $this->db->select("*")->from("event a")->join("event_donasi b","a.id_event = b.id_event")->get();
    }
  }

}
