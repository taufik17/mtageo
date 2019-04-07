<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Seminar_Hasil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_seminar_hasil';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Seminar Hasil';
		$isi['sub_judul'] = 'Pendaftaran Seminar Hasil';
		$isi['title'] = "SITA | Daftar Seminar Hasil";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_seminar_hasil";
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
