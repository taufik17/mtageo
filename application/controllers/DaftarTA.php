<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DaftarTA extends CI_Controller {

	public function index()
	{
		$isi['konten'] = 'Mahasiswa/konten_daftarTA';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran TA';
		$isi['sub_judul'] = 'Pendaftaran TA';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
