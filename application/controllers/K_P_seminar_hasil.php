<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_P_seminar_hasil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_permohonan_seminar_hasil';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Permohonan Seminar Hasil';
		$isi['sub_judul'] = 'Permohonan Seminar Hasil';
		$isi['title'] = "SITA | Permohonan Seminar Hasil";
		$isi['menu'] = "Koor/menu/menu_nonaktif";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
  $isi['daftar_mhs_seminar_hasil'] = $this->db->query("SELECT * FROM seminar_hasil
																																																			INNER JOIN mahasiswa ON mahasiswa.Email = seminar_hasil.Email
																																																			INNER JOIN tugas_akhir ON tugas_akhir.Email = seminar_hasil.Email
																																																			WHERE seminar_hasil.status_ta = 8 OR seminar_hasil.status_ta =7");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

}
