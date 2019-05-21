<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('Mahasiswa/tampilan_register');
	}

	public function simpan()
	{
		$key = $this->input->post('email');

		$data['email']	= $this->input->post('email');
		$data['Nama_mhs']	= $this->input->post('name');
		$data['Password']	= md5($this->input->post('password'));
		$sandi1 = md5($this->input->post('password'));
		$sandi2 = md5($this->input->post('rpassword'));
		$this->load->model('model_daftar');

		$cektera=$this->model_daftar->cekitera($key);
		$cek1=$this->model_daftar->checkEmail($key);
		$cek2=$this->model_daftar->cekmail($key);

		if ($sandi1 != $sandi2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info',
					'<div class="alert alert-danger alert-dismissible">
																					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																					<h4><i class="icon fa fa-ban"></i> Alert!</h4>
																					sandi tidak sama
																			</div>');
			redirect('Register');
		}
		else {
			if($cektera == false) {
				echo "<script>window.alert('Gunakan Email ITERA')</script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
			}
			else {
				if($cek1 == false)
				{
					echo "<script>window.alert('Email anda invalid')</script>";
					echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
				}
				else
				{
					if ($cek2 == false) {
						echo "<script>window.alert('Email Sudah Terdaftar')</script>";
						echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
					}
					else
					{

						$this->model_daftar->getinsert($data);
						$this->session->set_flashdata('info',
								'<div class="alert alert-success alert-dismissible">
																								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																								<h4><i class="icon fa fa-check"></i> Alert!</h4>
																								Pendaftaran Berhasil
																						</div>');
						redirect('login');
					}
				}
			}
		}
	}


}
