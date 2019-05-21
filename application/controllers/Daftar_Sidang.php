<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Sidang extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_daftar_sidang';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Sidang';
		$isi['sub_judul'] = 'Pendaftaran Sidang';
		$isi['title'] = "SITA | Daftar Sidang";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_sidang";
		$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa
																																				INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
																																				INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																				INNER JOIN sidang ON sidang.Email = mahasiswa.Email
																																				WHERE mahasiswa.Email='$email_login'");
		$isi['status_daftar_sidang'] = $this->db->query("SELECT id_sidang FROM sidang WHERE Email = '$email_login'")->num_rows();
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function upload_data_sidang() {
		$config['upload_path'] = './assets/DataSidang/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['draft_ta_final']['name']))
		{
			if ($this->upload->do_upload('draft_ta_final'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$this->upload->do_upload('transkrip');
				$tkp 						= $this->upload->data();
				$transkrip = $tkp['file_name'];
				$penguji1			= $this->input->post('penguji1');
				$penguji2			= $this->input->post('penguji2');
				$tgl_sidang				= $this->input->post('tgl_sidang');
				$wkt_sidang				= $this->input->post('wkt_sidang');
				$ruangan				= $this->input->post('ruangan');
				$Email 				= $this->session->userdata('Email');
				$status_ta =11;
				$this->M_upload->simpan_sidang($Email,$status_ta,$penguji1,$penguji2,$tgl_sidang,$wkt_sidang,$ruangan,$data,$transkrip);
				redirect('Daftar_Sidang');
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
		$status_ta = 10;
		$Email 				= $this->session->userdata('Email');
		$this->M_upload->p_ulang_sidang($status_ta,$Email);
		redirect('Daftar_Sidang');
	}

	public function update_data_sidang() {
		$config['upload_path'] = './assets/DataSidang/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['draft_ta_final']['name'])) {
			$this->upload->do_upload('draft_ta_final');
			$dta 						= $this->upload->data();
			$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
		}
		else {
			$data = $this->input->post('draft_ta_final');
		}
		if(!empty($_FILES['transkrip']['name'])) {
			$this->upload->do_upload('transkrip');
			$tkp 						= $this->upload->data();
			$transkrip = $tkp['file_name'];
		}
		else {
			$transkrip = $this->input->post('transkrip');
		}
		$penguji1			= $this->input->post('penguji1');
		$penguji2			= $this->input->post('penguji2');
		$tgl_sidang				= $this->input->post('tgl_sidang');
		$wkt_sidang				= $this->input->post('wkt_sidang');
		$ruangan				= $this->input->post('ruangan');
		$Email 				= $this->session->userdata('Email');
		$st_waktu				= $this->input->post('st_waktu');
		$st_tanggal		= $this->input->post('st_tanggal');
		$st_penguji1	= $this->input->post('st_penguji1');
		$st_penguji2	= $this->input->post('st_penguji2');
		$st_ruangan		= $this->input->post('st_ruangan');
		$st_draft_ta_final	= $this->input->post('st_draft_ta_final');
		$status_ta =11;
		$this->M_upload->simpan_update_sidang($Email,$status_ta,$penguji1,$penguji2,$tgl_sidang,$wkt_sidang,$ruangan,$data,$transkrip,$st_waktu,$st_tanggal,$st_penguji1,$st_penguji2,$st_ruangan,$st_draft_ta_final);
		redirect('Daftar_Sidang');
	}

}
