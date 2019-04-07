<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class permohonan_bimbingan extends CI_Controller {
	public function index()
	{
		$isi['konten'] = 'Dosen/validasi_ta';
		$isi['Welcome'] = 'Validasi TA';
		$isi['judul'] = 'Beranda';
		$isi['sub_judul'] = 'Validasi TA';
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}
}