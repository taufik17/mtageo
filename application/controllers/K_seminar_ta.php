<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_seminar_ta extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_seminar_ta';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Mahasiswa Seminar TA';
		$isi['sub_judul'] = 'Mahasiswa Seminar TA';
		$isi['title'] = "SITA | Mahasiswa Seminar TA";
		$isi['menu'] = "Koor/menu/menu_seminar_ta";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
  $isi['daftar_mhs_seminar_ta'] = $this->db->query("SELECT * FROM seminar_ta
																																																			INNER JOIN mahasiswa ON mahasiswa.Email = seminar_ta.Email
																																																			INNER JOIN tugas_akhir ON tugas_akhir.Email = seminar_ta.Email
																																																			WHERE seminar_ta.status_ta >= 4");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

}
