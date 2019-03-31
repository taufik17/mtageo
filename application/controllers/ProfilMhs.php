<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfilMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_profil';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Profil';
		$isi['sub_judul'] = 'Proifl';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
