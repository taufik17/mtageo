<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Sidang extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_daftar_sidang';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Sidang';
		$isi['sub_judul'] = 'Pendaftaran Sidang';
		$isi['title'] = "SITA | Daftar Sidang";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_sidang";
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
