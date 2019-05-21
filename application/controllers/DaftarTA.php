<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DaftarTA extends CI_Controller {

	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_daftarTA';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran TA1';
		$isi['sub_judul'] = 'Pendaftaran TA1';
		$isi['title'] = "SITA | Daftar TA1";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_ta1";
		$isi['nama_dosen'] = $this->db->query("SELECT EmailDosen, Nama FROM dosen");
		$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen WHERE mahasiswa.Email='$email_login'");
		$isi['status_daftar_ta'] = $this->db->query("SELECT id_ta FROM tugas_akhir WHERE Email = '$email_login'")->num_rows();
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	function upload_data_ta(){
		$config['upload_path'] = './assets/DataTA/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['proposal']['name']))
		{
			if ($this->upload->do_upload('proposal'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$this->upload->do_upload('transkrip');
				$tkp 						= $this->upload->data();
				$transkrip = $tkp['file_name'];
				$this->upload->do_upload('cv');
				$cv 				= $this->upload->data();
				$ceve 					= $cv['file_name'];
				$JudulTA			= $this->input->post('JudulTA');
				$JudulKP			= $this->input->post('JudulKP');
				$Dosen1				= $this->input->post('Dosen1');
				$Dosen2				= $this->input->post('Dosen2');
				$Dosen3				= $this->input->post('Dosen3');
				$Email 				= $this->session->userdata('Email');
				$status_ta = 2;
				$this->M_upload->simpan_ta($Email,$status_ta,$JudulTA,$JudulKP,$Dosen1,$Dosen2,$Dosen3,$data,$transkrip,$ceve);
				redirect('DaftarTA');
			}
			else
			{
				echo "File Gagal Upload. File harus bertipe docx|pdf|xlsx";
			}
		}
		else
		{
			echo "Gagal, File belum di pilih";
		}
	}

	public function PermohonanUlang() {
		$status_ta = 1;
		$Email 				= $this->session->userdata('Email');
		$this->M_upload->p_ulang($status_ta,$Email);
		redirect('DaftarTA');
	}

	public function update_data_ta() {
		$config['upload_path'] = './assets/DataTA/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['proposal']['name'])) {
			$this->upload->do_upload('proposal');
			$dta 						= $this->upload->data();
			$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
		}
		else {
			$data = $this->input->post('proposal');
		}
		if(!empty($_FILES['transkrip']['name'])) {
			$this->upload->do_upload('transkrip');
			$tkp 						= $this->upload->data();
			$transkrip = $tkp['file_name'];
		}
		else {
			$transkrip = $this->input->post('transkrip');
		}
		if(!empty($_FILES['cv']['name'])) {
			$this->upload->do_upload('cv');
			$cv 							= $this->upload->data();
			$ceve 					= $cv['file_name'];
		}
		else {
			$this->input->post('cv');
		}
		$JudulTA			= $this->input->post('JudulTA');
		$JudulKP			= $this->input->post('JudulKP');
		$Dosen1				= $this->input->post('Dosen1');
		$Dosen2				= $this->input->post('Dosen2');
		$Dosen3				= $this->input->post('Dosen3');
		$Email 				= $this->session->userdata('Email');
		$st_judul		= $this->input->post('st_judul');
		$st_kp					= $this->input->post('st_kp');
		$st_d1					= $this->input->post('st_d1');
		$st_d2					= $this->input->post('st_d2');
		$st_d3					= $this->input->post('st_d3');
		$st_proposal	= $this->input->post('st_proposal');
		$st_transkrip	= $this->input->post('st_transkrip');
		$st_cv					= $this->input->post('st_cv');
		$status_ta = 2;
		$this->M_upload->update_ta($Email,$status_ta,$JudulTA,$JudulKP,$Dosen1,$Dosen2,$Dosen3,$data,$transkrip,$ceve,$st_judul,$st_kp,$st_d1,$st_d2,$st_d3,$st_proposal,$st_transkrip,$st_cv);
		redirect('DaftarTA');
	}
}
