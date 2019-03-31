<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Seminar_Hasil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_seminar_hasil';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Seminar Hasil';
		$isi['sub_judul'] = 'Pendaftaran Seminar Hasil';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
