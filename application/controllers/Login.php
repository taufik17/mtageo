<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index()
	{
		$Email = $this->session->userdata('Email');
		$EmailDosen = $this->session->userdata('EmailDosen');
		$EmailKoor = $this->session->userdata('EmailKoor');
		$options = array(
			'img_path'=>'./captcha/', #folder captcha yg sudah dibuat tadi
			'img_url'=>base_url('captcha'), #ini arahnya juga ke folder captcha
			'img_width'=>'150', #lebar image captcha
			'img_height'=>'45', #tinggi image captcha
			'expiration'=>7200, #waktu expired
			'word_length' => 4,
			'pool' => '0123456789', #tipe captcha (angka/huruf, atau kombinasi dari keduanya)
			# atur warna captcha-nya di sini ya.. gunakan kode RGB
			'colors' => array(
				'background' => array(242, 242, 242),
				'border' => array(255, 255, 255),
				'text' => array(0, 0, 0),
				'grid' => array(255, 40, 40))
		);

		$cap = create_captcha($options);
		$data['image'] = $cap['image'];
		$this->session->set_userdata('mycaptcha', $cap['word']);
		$data['word'] = $this->session->userdata('mycaptcha');
		$data['title'] = "MtaGeo | Masuk";
		if(!empty($Email))
		{
			redirect('BerandaMhs');
		}
		if(!empty($EmailDosen)){
			redirect('BerandaDosen');
		}
		if(!empty($EmailKoor)){
			redirect('BerandaKoor');
		} else {
			$this->load->view('tampilan_login', $data);
		}
	}

	public function getlogin()
	{
		$captcha = $this->input->post('captcha_code'); #mengambil value inputan pengguna
		$word = $this->session->userdata('mycaptcha'); #mengambil value captcha
		$u = $this->input->post('Email');
		$p = $this->input->post('password');
		if (isset($captcha)) { #cek variabel $captcha kosong/tidak
		   if (strtoupper($captcha)==strtoupper($word)) { #proses pencocokan captcha
		        #terserah kalian mau diisi apa di sini
										$this->load->model('model_login');
										$this->model_login->getlogin($u,$p);
		   }
					else {
						$this->session->set_flashdata('info',
								'<div class="alert alert-danger alert-dismissible">
																								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																								<h4><i class="icon fa fa-ban"></i> Alert!</h4>
																								Captcha Salah
																						</div>');
						redirect('login');
					}
		 }
	}

}
