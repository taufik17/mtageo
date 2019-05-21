<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Mahasiswa_yg_dibimbing extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_mahasiswa_yg_dibimbing';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Mahasiswa yang Dibimbing';
		$isi['sub_judul'] = 'Mahasiswa yang Dibimbing';
		$isi['title'] = "SITA | Dashboard Dosen";
		$isi['menu'] = "Dosen/menu/menu_nonaktif";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$isi['nama_dosen'] = $this->db->query("SELECT Nama FROM dosen");
		$isi['daftar_ta'] = $this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE EmailDosen='$email_login' ;");
		$isi['daftar_bimbingan_ta'] = $this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE tugas_akhir.status_ta >= 3 AND tugas_akhir.EmailDosen = '$email_login'");

		$this->load->view('Dosen/tampilan_beranda',$isi);

	}

}
