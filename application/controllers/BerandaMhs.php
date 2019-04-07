<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "SITA | Dashboard Mahasiswa";
		$isi['menu'] = "Mahasiswa/menu/menu_beranda";
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}

	public function DaftarTA()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_daftarTA';
		$isi['judul'] = 'Pendaftaran TA';
		$isi['sub_judul'] = '';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function ProfilMhs()
	{
		$isi['konten'] = 'Mahasiswa/konten_profilMhs';
		$isi['judul'] = 'Profil';
		$isi['sub_judul'] = 'tes';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
