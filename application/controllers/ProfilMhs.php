<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfilMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_profil';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil Mahasiswa';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Mahasiswa/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Mahasiswa";
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
