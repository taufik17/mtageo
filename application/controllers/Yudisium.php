<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Yudisium extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_yudisium';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Yudisium';
		$isi['sub_judul'] = 'Pendaftaran Yudisium';
		$isi['title'] = "SITA | Daftar Yudisium";
		$isi['menu'] = "Mahasiswa/menu/menu_yudisium";
		$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa
																																				INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
																																				INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																				INNER JOIN yudisium ON yudisium.Email = mahasiswa.Email
																																				WHERE mahasiswa.Email='$email_login'");
		$isi['status_daftar_yudisium'] = $this->db->query("SELECT id_yudisium FROM yudisium WHERE Email = '$email_login'")->num_rows();
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function upload_data_yudisium() {
		$config['upload_path'] = './assets/DataYudisium/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['transkrip']['name']))
		{
			if ($this->upload->do_upload('transkrip'))
			{
				$dta 										= $this->upload->data();
				$transkrip					= $dta['file_name']; //Mengambil file name dari gambar yang diupload

				$this->upload->do_upload('ijazah');
				$ijz 										= $this->upload->data();
				$ijazah 							= $ijz['file_name'];

				$this->upload->do_upload('akta');
				$akt 										= $this->upload->data();
				$akta 									= $akt['file_name'];

				$this->upload->do_upload('pasfoto');
				$pasft 								= $this->upload->data();
				$pasfoto 						= $pasft['file_name'];

				$this->upload->do_upload('bebas_ukt');
				$b_ukt 								= $this->upload->data();
				$bebas_ukt					= $b_ukt['file_name'];

				$this->upload->do_upload('bebas_lab');
				$b_lab 								= $this->upload->data();
				$bebas_lab					= $b_lab['file_name'];

				$this->upload->do_upload('toefl');
				$tfl 										= $this->upload->data();
				$toefl									= $tfl['file_name'];

				$Email 								= $this->session->userdata('Email');
				$status_ta = 14;
				$this->M_upload->simpan_yudisium($Email,$transkrip,$ijazah,$akta,$pasfoto,$bebas_ukt,$bebas_lab,$toefl,$status_ta);
				redirect('Yudisium');
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
		$status_ta = 13;
		$Email 				= $this->session->userdata('Email');
		$this->M_upload->p_ulang_yudisium($status_ta,$Email);
		redirect('Yudisium');
	}

	public function update_data_yudisium() {
		$config['upload_path'] = './assets/DataYudisium/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['transkrip']['name'])) {
			$this->upload->do_upload('transkrip');
			$dta 						= $this->upload->data();
			$transkrip						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
		}
		else {
			$transkrip = $this->input->post('transkrip');
		}
		if(!empty($_FILES['ijazah']['name'])) {
			$this->upload->do_upload('ijazah');
			$ijz 										= $this->upload->data();
			$ijazah 							= $ijz['file_name'];
		}
		else {
			$transkrip = $this->input->post('ijazah');
		}
		if(!empty($_FILES['akta']['name'])) {
			$this->upload->do_upload('akta');
			$akt 										= $this->upload->data();
			$akta 									= $akt['file_name'];
		}
		else {
			$akta = $this->input->post('akta');
		}
		if(!empty($_FILES['pasfoto']['name'])) {
			$this->upload->do_upload('pasfoto');
			$pasft 								= $this->upload->data();
			$pasfoto 						= $pasft['file_name'];
		}
		else {
			$pasfoto = $this->input->post('pasfoto');
		}
		if(!empty($_FILES['bebas_ukt']['name'])) {
			$this->upload->do_upload('bebas_ukt');
			$b_ukt 								= $this->upload->data();
			$bebas_ukt					= $b_ukt['file_name'];
		}
		else {
			$bebas_ukt = $this->input->post('bebas_ukt');
		}
		if(!empty($_FILES['bebas_lab']['name'])) {
			$this->upload->do_upload('bebas_lab');
			$b_lab 								= $this->upload->data();
			$bebas_lab					= $b_lab['file_name'];
		}
		else {
			$bebas_lab = $this->input->post('bebas_lab');
		}
		if(!empty($_FILES['toefl']['name'])) {
			$this->upload->do_upload('toefl');
			$tfl 										= $this->upload->data();
			$toefl									= $tfl['file_name'];
		}
		else {
			$toefl = $this->input->post('toefl');
		}
		$Email 				= $this->session->userdata('Email');
		$st_transkrip				= $this->input->post('st_transkrip');
		$st_ijazah		= $this->input->post('st_ijazah');
		$st_akta	= $this->input->post('st_akta');
		$st_pasfoto	= $this->input->post('st_pasfoto');
		$st_skukt		= $this->input->post('st_skukt');
		$st_sklab	= $this->input->post('st_sklab');
		$st_toefl	= $this->input->post('st_toefl');
		$status_ta =14;
		$this->M_upload->simpan_update_yudisium($Email,$transkrip,$ijazah,$akta,$pasfoto,$bebas_ukt,$bebas_lab,$toefl,$status_ta,$st_transkrip,$st_ijazah,$st_akta,$st_pasfoto,$st_skukt,$st_sklab,$st_toefl);
		redirect('Yudisium');
	}

}
