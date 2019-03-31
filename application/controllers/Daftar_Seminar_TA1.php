<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Seminar_TA1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$isi['konten'] = 'Mahasiswa/konten_daftar_seminarTA1';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Seminar TA1';
		$isi['sub_judul'] = 'Pendaftaran Seminar TA1';
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
