<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_login extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = md5($p);
		$this->db->where('email',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('mahasiswa');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('Email'	=> $row->Email,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('BerandaMhs');
			}
		}
		$pwdosen = md5($p);
		$this->db->where('EmailDosen',$u);
		$this->db->where('password',$pwdosen);
		$query2 = $this->db->get('dosen');
		if($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row)
			{
				$sess = array('EmailDosen'	=> $row->EmailDosen,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('BerandaDosen');
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Maaf Email atau Sandi salah
					              </div>');
			redirect('login');
		}
	}
}
