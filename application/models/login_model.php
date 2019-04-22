<?php

class login_model extends CI_Model{

  public function cek_log($table,$where){
    return $this->db->get_where($table,$where);
  }

  public function register_user($data){
    $this->db->insert('akun', $data);
  }

  public function email_check($email){
    $query = $this->db->query("SELECT * FROM akun where email ='$email'");

    if ($query->num_rows()>0){
      return false;
    } else {
      return true;
    }


  }


}
