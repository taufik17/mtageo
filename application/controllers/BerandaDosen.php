<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaDosen extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "SITA | Dashboard Dosen";
		$isi['menu'] = "Dosen/menu/menu_beranda";
		$isi['data']		= $this->ModelDosen->datadosen();
		$isi['data_ta'] = $this->ModelDosen->data_ta();
		$isi['permohonan_ta'] = $this->ModelDosen->permohonan_ta();
		$stts = $this->ModelDosen->data_ta();
		$isi['mahasiswa_yg_revisi'] = $this->ModelDosen->mahasiswa_yg_revisi();
		$isi['mahasiswa_yg_dibimbing'] = $this->ModelDosen->mahasiswa_yg_dibimbing();
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
