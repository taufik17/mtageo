<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Validasi_ta extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_validasi_ta';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Validasi TA';
		$isi['sub_judul'] = 'Validasi TA';
		$isi['title'] = "SITA | Validasi TA";
		$isi['menu'] = "Dosen/menu/menu_validasi_ta";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$isi['nama_dosen'] = $this->db->query("SELECT Nama FROM dosen");
		$isi['daftar_ta'] = $this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE EmailDosen='$email_login';");
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}

	public function Terima() {
		$status_ta = 3;
		$key = $this->uri->segment(3);
		$this->M_upload->terima_ta($status_ta,$key);
		redirect('Validasi_ta');
	}

	public function Tolak() {
		$status_ta = -1;
		$key = $this->uri->segment(3);
		$this->M_upload->tolak_ta($status_ta,$key);
		redirect('BerandaDosen');
	}
}
