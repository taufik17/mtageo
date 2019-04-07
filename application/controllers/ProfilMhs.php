<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfilMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_profil';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil Mahasiswa';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Mahasiswa/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Mahasiswa";
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
