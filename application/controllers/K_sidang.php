<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class K_sidang extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Koor/konten_sidang';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Mahasiswa Sidang';
		$isi['sub_judul'] = 'Mahasiswa Sidang';
		$isi['title'] = "SITA | Mahasiswa Sidang";
		$isi['menu'] = "Koor/menu/menu_sidang";
		$isi['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
  $isi['daftar_mhs_sidang'] = $this->db->query("SELECT * FROM sidang
																																																			INNER JOIN mahasiswa ON mahasiswa.Email = sidang.Email
																																																			INNER JOIN tugas_akhir ON tugas_akhir.Email = sidang.Email
																																																			WHERE sidang.status_ta >= 10");
		$this->load->view('Koor/tampilan_beranda',$isi);
	}

	public function lihat() {
		$this->model_keamanan->getkeamanankoor();
		$key = $this->uri->segment(3);
		$email_login = $this->session->userdata('EmailKoor');
		$is['konten'] = 'Koor/konten_isi_sidang';
		$is['judul'] = 'Beranda';
		$is['Welcome'] = 'Sidang';
		$is['sub_judul'] = 'Sidang';
		$is['title'] = "Permohonan | $key";
		$is['menu'] = "Koor/menu/menu_nonaktif";
		$is['data']		= $this->db->query("SELECT * FROM koordinator WHERE EmailKoor='$email_login'");
		$is['data_pilih'] = $this->db->query("SELECT * FROM mahasiswa
																																								INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
																																								INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																								INNER JOIN sidang ON sidang.Email = mahasiswa.Email
																																								WHERE mahasiswa.Email='$key'");
		$this->load->view('Koor/tampilan_beranda',$is);
	}

	public function updatestatuspermohonan() {
		$st_tanggal = $this->input->post('st_tanggal');
		$st_waktu = $this->input->post('st_waktu');
		$st_ruangan = $this->input->post('st_ruangan');
		$st_penguji1 = $this->input->post('st_penguji1');
		$st_penguji2 = $this->input->post('st_penguji2');
		$st_draft_ta_final = $this->input->post('st_draft_ta_final');
		$st_transkrip = $this->input->post('st_transkrip');
		$Email = $this->input->post('Email');
		$tgl_sidang = $this->input->post('tgl_sidang');
		$wkt_sidang = $this->input->post('wkt_sidang');
		$ruangan = $this->input->post('ruangan');
		$catatan = $this->input->post('catatan');
		$status_ta = 12;
		$this->M_upload->simpan_update_sidang_koor($st_tanggal,$st_waktu,$st_ruangan,$st_penguji1,$st_penguji2,$st_draft_ta_final,$Email,$tgl_sidang,$wkt_sidang,$ruangan,$status_ta,$catatan,$st_transkrip);
		redirect('K_sidang');
	}

}
