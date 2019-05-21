<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_seminar_hasil extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_seminar_hasil';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Mahasiswa Seminar Hasil';
		$isi['sub_judul'] = 'Mahasiswa Seminar Hasil';
		$isi['title'] = "SITA | Mahasiswa Seminar Hasil";
		$isi['menu'] = "Koor/menu/menu_seminar_hasil";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
  $isi['daftar_mhs_seminar_hasil'] = $this->db->query("SELECT * FROM seminar_hasil
																																																			INNER JOIN mahasiswa ON mahasiswa.Email = seminar_hasil.Email
																																																			INNER JOIN tugas_akhir ON tugas_akhir.Email = seminar_hasil.Email
																																																			WHERE seminar_hasil.status_ta >= 8");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

	public function lihat() {
		$this->model_keamanan->getkeamanankoor();
		$key = $this->uri->segment(3);
		$email_login = $this->session->userdata('EmailKoor');
		$is['konten'] = 'Koor/konten_isi_seminar_hasil';
		$is['judul'] = 'Beranda';
		$is['Welcome'] = 'Seminar Hasil';
		$is['sub_judul'] = 'Seminar Hasil';
		$is['title'] = "Permohonan | $key";
		$is['menu'] = "Koor/menu/menu_nonaktif";
		$is['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
		$is['data_pilih'] = $this->db->query("SELECT * FROM mahasiswa
																																								INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
																																								INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																								INNER JOIN seminar_hasil ON seminar_hasil.Email = mahasiswa.Email
																																								WHERE mahasiswa.Email='$key'");
		$this->load->view('Koor/tampilan_beranda',$is);
	}

	public function updatestatuspermohonan() {
		$st_tanggal = $this->input->post('st_tanggal');
		$st_waktu = $this->input->post('st_waktu');
		$st_ruangan = $this->input->post('st_ruangan');
		$st_penguji1 = $this->input->post('st_penguji1');
		$st_penguji2 = $this->input->post('st_penguji2');
		$st_draft_ta2 = $this->input->post('st_draft_ta2');
		$Email = $this->input->post('Email');
		$tgl_seminar = $this->input->post('tgl_seminar');
		$wkt_seminar = $this->input->post('wkt_seminar');
		$ruangan = $this->input->post('ruangan');
		$catatan = $this->input->post('catatan');
		$status_ta = 9;
		$this->M_upload->simpan_update_seminar_hasil_koor($st_tanggal,$st_waktu,$st_ruangan,$st_penguji1,$st_penguji2,$st_draft_ta2,$Email,$tgl_seminar,$wkt_seminar,$ruangan,$status_ta,$catatan);
		redirect('K_seminar_hasil');
	}

}
