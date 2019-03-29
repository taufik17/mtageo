<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validasi_ta extends CI_Controller {
	public function index()
	{
		$isi['konten'] = 'Dosen/validasi_ta';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Validasi TA';
		$isi['sub_judul'] = 'Validasi TA';
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}
}
