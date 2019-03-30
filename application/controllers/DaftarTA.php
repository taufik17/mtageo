<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DaftarTA extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_daftarTA';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran TA1';
		$isi['sub_judul'] = 'Pendaftaran TA1';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
