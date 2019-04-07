<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class mahasiswa_yg_dibimbing extends CI_Controller {
	public function index()
	{
		$isi['konten'] = 'Dosen/mahasiswa_yg_dibimbing';
		$isi['Welcome'] = 'Mahasiswa yang Dibimbing';
		$isi['judul'] = 'Beranda';
		$isi['sub_judul'] = 'Mahasiswa yang Dibimbing';
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}
}