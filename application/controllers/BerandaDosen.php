<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaDosen extends CI_Controller {
	public function index()
	{
		$isi['konten'] = 'Dosen/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "SITA | Dashboard Dosen";
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}

}
