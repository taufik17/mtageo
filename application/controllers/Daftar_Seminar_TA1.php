<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Seminar_TA1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_daftar_seminarTA1';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Seminar TA1';
		$isi['sub_judul'] = 'Pendaftaran Seminar TA1';
		$isi['title'] = "SITA | Daftar Seminar TA1";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_seminar_ta1";
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}
}
