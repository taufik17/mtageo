<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Permohonan_bimbingan extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_permohonan_bimbingan';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Permohonan Bimbingan';
		$isi['sub_judul'] = 'Permohonan Bimbingan';
		$isi['title'] = "SITA | Permohonan bimbingan";
		$isi['menu'] = "Dosen/menu/menu_nonaktif";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$isi['nama_dosen'] = $this->db->query("SELECT Nama FROM dosen");
		$isi['daftar_ta'] = $this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE EmailDosen='$email_login'" );
		$isi['daftar_permohonan_ta'] = $this->db->query("SELECT * FROM tugas_akhir INNER JOIN mahasiswa ON mahasiswa.Email = tugas_akhir.Email WHERE tugas_akhir.status_ta = 2 AND tugas_akhir.EmailDosen = '$email_login'");
		$this->load->view('Dosen/tampilan_beranda',$isi);
	}
	public function terima()
	{
		$key = $this->uri->segment(3);
		$status_ta = 1;
	 	$this->Model_dosen->getterima($key,$status_ta);
	 	redirect('Permohonan_bimbingan');
}

public function lihat() {
	$this->model_keamanan->getkeamanandosen();
	$key = $this->uri->segment(3);
	$email_login = $this->session->userdata('EmailDosen');
	$is['konten'] = 'Dosen/konten_isi';
	$is['judul'] = 'Beranda';
	$is['Welcome'] = 'Permohonan Bimbingan';
	$is['sub_judul'] = 'Permohonan Bimbingan';
	$is['title'] = "Permohonan | $key";
	$is['menu'] = "Dosen/menu/menu_nonaktif";
	$is['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
	$is['nama_dosen'] = $this->db->query("SELECT Nama FROM dosen");
	$is['data_pilih'] = $this->db->query("SELECT * FROM mahasiswa INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen WHERE mahasiswa.Email='$key'");
	$this->load->view('Dosen/tampilan_beranda',$is);
}

function data_permohonan(){
	$data=$this->M_upload->permohonan_list();
	echo json_encode($data);
}

function get_data(){
	$kobar=$this->input->get('id');
	$data=$this->m_barang->get_barang_by_kode($kobar);
	echo json_encode($data);
}

	public function tolak()
	{
		$key = $this->uri->segment(3);
		$status_ta = 2;
	 	$this->Model_dosen->gettolak($key,$status_ta);
	 	redirect('Permohonan_bimbingan');
}

public function updatestatuspermohonan() {
	$st_judul = $this->input->post('st_judul');
	$st_kp = $this->input->post('st_kp');
	$st_d1 = $this->input->post('st_d1');
	$st_d2 = $this->input->post('st_d2');
	$st_d3 = $this->input->post('st_d3');
	$st_cv = $this->input->post('st_cv');
	$st_transkrip = $this->input->post('st_transkrip');
	$st_proposal = $this->input->post('st_proposal');
	$dataupdate = $this->input->post('dataupdate');
	$catatan = $this->input->post('catatan');
	if ($st_judul == 1 && $st_kp == 1 && $st_d1 == 1 && $st_d2 == 1 && $st_d3 == 1 && $st_cv == 1 && $st_transkrip == 1 && $st_proposal == 1) {
		$status_ta = 3;
		$this->M_upload->updatestatuspermohonan($st_judul,$st_kp,$st_d1,$st_d2,$st_d3,$st_cv,$st_transkrip,$st_proposal,$dataupdate,$catatan,$status_ta);
	}
	else {
		$status_ta = 2;
		$this->M_upload->updatestatuspermohonan($st_judul,$st_kp,$st_d1,$st_d2,$st_d3,$st_cv,$st_transkrip,$st_proposal,$dataupdate,$catatan,$status_ta);
	}
	redirect('Permohonan_bimbingan');
}
}
