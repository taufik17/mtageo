<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Daftar_Seminar_TA1 extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_daftar_seminarTA1';
		$isi['judul'] = 'Beranda';
		$isi['Welcome'] = 'Pendaftaran Seminar TA1';
		$isi['sub_judul'] = 'Pendaftaran Seminar TA1';
		$isi['title'] = "SITA | Daftar Seminar TA1";
		$isi['menu'] = "Mahasiswa/menu/menu_daftar_seminar_ta1";
		$isi['untuk_menu'] = $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa
																																				INNER JOIN tugas_akhir ON tugas_akhir.Email = mahasiswa.Email
																																				INNER JOIN dosen ON tugas_akhir.EmailDosen = dosen.EmailDosen
																																				INNER JOIN seminar_ta ON seminar_ta.Email = mahasiswa.Email
																																				WHERE mahasiswa.Email='$email_login'");
		$isi['status_daftar_seminar_ta'] = $this->db->query("SELECT id_seminar_ta FROM seminar_ta WHERE Email = '$email_login'")->num_rows();
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function upload_data_seminar_ta()
	{
		$config['upload_path'] = './assets/DataSeminarTA/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['draftta']['name']))
		{
			if ($this->upload->do_upload('draftta'))
			{
				$dta 						= $this->upload->data();
				$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
				$penguji1			= $this->input->post('penguji1');
				$penguji2			= $this->input->post('penguji2');
				$tgl_seminar				= $this->input->post('tgl_seminar');
				$wkt_seminar				= $this->input->post('wkt_seminar');
				$ruangan				= $this->input->post('ruangan');
				$Email 				= $this->session->userdata('Email');
				$status_ta =5;
				$this->M_upload->simpan_seminar_ta($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data);
				redirect('Daftar_Seminar_TA1');
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
		$status_ta = 4;
		$Email 				= $this->session->userdata('Email');
		$this->M_upload->p_ulang_seminar_ta($status_ta,$Email);
		redirect('Daftar_Seminar_TA1');
	}

	public function update_data_seminar_ta() {
		$config['upload_path'] = './assets/DataSeminarTA/'; //path folder
		$config['allowed_types']='doc|xlsx|XLSX|pdf|docx|PDF';
		$config['max_size'] = 0;
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['draftta']['name'])) {
			$this->upload->do_upload('draftta');
			$dta 						= $this->upload->data();
			$data						= $dta['file_name']; //Mengambil file name dari gambar yang diupload
		}
		else {
			$data = $this->input->post('draftta');
		}
		$penguji1			= $this->input->post('penguji1');
		$penguji2			= $this->input->post('penguji2');
		$tgl_seminar				= $this->input->post('tgl_seminar');
		$wkt_seminar				= $this->input->post('wkt_seminar');
		$ruangan				= $this->input->post('ruangan');
		$Email 				= $this->session->userdata('Email');
		$st_waktu				= $this->input->post('st_waktu');
		$st_tanggal		= $this->input->post('st_tanggal');
		$st_penguji1	= $this->input->post('st_penguji1');
		$st_penguji2	= $this->input->post('st_penguji2');
		$st_ruangan		= $this->input->post('st_ruangan');
		$st_draft_ta	= $this->input->post('st_draft_ta');
		$status_ta =5;
		$this->M_upload->simpan_update_seminar_ta($Email,$status_ta,$penguji1,$penguji2,$tgl_seminar,$wkt_seminar,$ruangan,$data,$st_waktu,$st_tanggal,$st_penguji1,$st_penguji2,$st_ruangan,$st_draft_ta);
		redirect('Daftar_Seminar_TA1');
	}

}
