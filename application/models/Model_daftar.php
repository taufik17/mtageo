<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_daftar extends CI_model {
    public function getdata($key)
    {
        $this->db->where('email',$key);
        $hasil = $this->db->get('mahasiswa');
        return $hasil;
    }
    public function getinsert($data)
    {
        $this->db->where('email');
        $this->db->insert('mahasiswa',$data);
    }
    public function checkEmail($key) {
        if(!filter_var($key, FILTER_VALIDATE_EMAIL))
        {
            // invalid address
            return false;
        }
        else
        {
            // valid address
            return true;
        }
    }

    public function cekitera($key) {
     $emailitera = "@student.itera.ac.id";
     if( strpos( $key, $emailitera ) !== false) {
      return true;
     }
     else {
      return false;
     }
    }

    public function cekmail($key)
    {
        $this->db->where('email',$key);
        $hasil = $this->db->get('mahasiswa');
        if ($hasil->num_rows()>0) {
            # code...
            foreach ($hasil->result() as $row)
            {
                $sess = array('email' => $row->email);
                //$this->session->set_userdata($sess);
                return false;
            }
        }
        else {
            return true;
        }
    }
}
