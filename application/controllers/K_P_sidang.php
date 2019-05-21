<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_P_sidang extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_permohonan_sidang';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Permohonan Sidang';
		$isi['sub_judul'] = 'Permohonan Sidang';
		$isi['title'] = "SITA | Permohonan Sidang";
		$isi['menu'] = "Koor/menu/menu_nonaktif";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
  $isi['daftar_permohonan_sidang'] = $this->db->query("SELECT * FROM sidang
																																																			INNER JOIN mahasiswa ON mahasiswa.Email = sidang.Email
																																																			INNER JOIN tugas_akhir ON tugas_akhir.Email = sidang.Email
																																																			WHERE sidang.status_ta = 10 OR sidang.status_ta = 11 ");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

}
