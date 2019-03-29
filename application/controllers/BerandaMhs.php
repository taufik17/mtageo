<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
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
}
