<?php

class login_model extends CI_Model{

  public function cek_log($table,$where){
    return $this->db->get_where($table,$where);
  }


}
