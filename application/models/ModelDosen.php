<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ModelDosen extends CI_model {

	public function datadosen() {
		$email_login = $this->session->userdata('EmailDosen');
		$data = $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		return $data;
	}

	public function data_ta() {
		$email_login = $this->session->userdata('EmailDosen');
		$data = $this->db->query("SELECT * FROM tugas_akhir WHERE EmailDosen='$email_login'");
		return $data;
	}

	public function permohonan_ta() {
		$email_login = $this->session->userdata('EmailDosen');
		$data = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE EmailDosen='$email_login' AND status_ta = 2 ")->num_rows();
		return $data;
	}

	public function mahasiswa_yg_revisi() {
		$email_login = $this->session->userdata('EmailDosen');
		$data = $this->db->query("SELECT id_ta FROM `tugas_akhir`
																																																		WHERE `status_ta` = 1
																																																		AND `st_judul` != 0
																																																		AND `st_kp` != 0
																																																		AND `st_d1` != 0
																																																		AND `st_d2` != 0
																																																		AND `st_d3` != 0
																																																		AND `st_cv` != 0
																																																		AND `st_transkrip` != 0
																																																		AND `st_proposal` != 0")->num_rows();
 return $data;
	}

	public function mahasiswa_yg_dibimbing() {
		$email_login = $this->session->userdata('EmailDosen');
		$data = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE EmailDosen='$email_login' AND status_ta >= 3 ")->num_rows();
		return $data;
	}
}
