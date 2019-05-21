<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class BerandaKoor extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_beranda';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Beranda';
		$isi['sub_judul'] = '';
		$isi['title'] = "SITA | Dashboard Koordinator";
		$isi['menu'] = "Koor/menu/menu_beranda";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
		$isi['mahasiswa_yg_dibimbing'] = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE status_ta >= 3 ")->num_rows();
		$isi['permohonan_seminar_ta'] = $this->db->query("SELECT id_seminar_ta FROM seminar_ta WHERE status_ta = 5 OR seminar_ta.status_ta = 4 ")->num_rows();
		$isi['permohonan_seminar_hasil'] = $this->db->query("SELECT id_seminar_hasil FROM seminar_hasil WHERE status_ta = 8 ")->num_rows();
		$isi['permohonan_sidang'] = $this->db->query("SELECT id_sidang FROM sidang WHERE status_ta = 11 ")->num_rows();
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
}
