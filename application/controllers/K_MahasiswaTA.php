<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_MahasiswaTA extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_mahasiswa_ta';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Mahasiswa TA';
		$isi['sub_judul'] = 'Mahasiswa TA';
		$isi['title'] = "SITA | Mahasiswa TA";
		$isi['menu'] = "Koor/menu/menu_m_ta";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
		$isi['mahasiswa_yg_dibimbing'] = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE status_ta >= 3 ")->num_rows();
		$isi['permohonan_seminar_ta'] = $this->db->query("SELECT id_seminar_ta FROM seminar_ta WHERE status_ta = 5 ")->num_rows();
		$isi['permohonan_seminar_hasil'] = $this->db->query("SELECT id_seminar_hasil FROM seminar_hasil WHERE status_ta = 8 ")->num_rows();
		$isi['permohonan_sidang'] = $this->db->query("SELECT id_sidang FROM sidang WHERE status_ta = 11 ")->num_rows();
		$isi['daftar_bimbingan_ta'] = $this->db->query("SELECT * FROM tugas_akhir
																																																		INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email
																																																		INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																																		WHERE tugas_akhir.status_ta >= 3 ");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
