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
		$pwkoor = md5($p);
		$this->db->where('EmailKoor', $u);
		$this->db->where('password', $pwkoor);
		$query3 = $this->db->get('koordinator');
		if($query3->num_rows()>0)
		{
			foreach ($query3->result() as $row)
			{
				$sess = array('EmailKoor'	=> $row->EmailKoor,
							  'password'	=> $row->password);
				$this->session->set_userdata($sess);
				redirect('BerandaKoor');
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

	public function updatesandi($email_login,$sandi_lama,$sandi_baru,$konfirmasi) {
		$pwd = md5($sandi_lama);
		$this->db->where('Email',$email_login);
		$this->db->where('Password',$pwd);
		$query = $this->db->get('mahasiswa');
		if($query->num_rows()>0)
		{
				if ($sandi_lama == $sandi_baru) {
					$this->session->set_flashdata('info',
							'<div class="alert alert-danger alert-dismissible">
							                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
							                Sandi tidak boleh sama
							              </div>');
					redirect('ProfilMhs/ubahsandi');
				}
				else {
					if ($sandi_baru != $konfirmasi) {
						$this->session->set_flashdata('info',
								'<div class="alert alert-danger alert-dismissible">
								                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
								                Konfirmasi Salah
								              </div>');
						redirect('ProfilMhs/ubahsandi');
					}
					else {
						$hasil=$this->db->query("UPDATE `mahasiswa` SET `Password` = MD5('$sandi_baru') WHERE `mahasiswa`.`Email` = '$email_login'");
						return $hasil;
					}
				}
		}
		else {
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Sandi Lama Salah
					              </div>');
			redirect('ProfilMhs/ubahsandi');
		}
	}

	public function updatesandidosen($email_login,$sandi_lama,$sandi_baru,$konfirmasi) {
		$pwd = md5($sandi_lama);
		$this->db->where('EmailDosen',$email_login);
		$this->db->where('Password',$pwd);
		$query = $this->db->get('dosen');
		if($query->num_rows()>0)
		{
				if ($sandi_lama == $sandi_baru) {
					$this->session->set_flashdata('info',
							'<div class="alert alert-danger alert-dismissible">
							                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
							                Sandi tidak boleh sama
							              </div>');
					redirect('ProfilDosen/ubahsandi');
				}
				else {
					if ($sandi_baru != $konfirmasi) {
						$this->session->set_flashdata('info',
								'<div class="alert alert-danger alert-dismissible">
								                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
								                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
								                Konfirmasi Salah
								              </div>');
						redirect('ProfilDosen/ubahsandi');
					}
					else {
						$hasil=$this->db->query("UPDATE `dosen` SET `Password` = MD5('$sandi_baru') WHERE `dosen`.`EmailDosen` = '$email_login'");
						return $hasil;
					}
				}
		}
		else {
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
					                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
					                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
					                Sandi Lama Salah
					              </div>');
			redirect('ProfilDosen/ubahsandi');
		}
	}

}
