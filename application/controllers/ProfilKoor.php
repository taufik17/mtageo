<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfilDosen extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanankoor();
		$email_login = $this->session->userdata('EmailKoor');
		$isi['konten'] = 'Dosen/konten_profil';
		$isi['judul'] = 'Profil';
		$isi['Welcome'] = 'Profil Koor';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Koor/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Koor";
		$isi['data']		= $this->db->query("SELECT * FROM koor WHERE EmailKoor='$email_login'");
		$this->load->view('dosen/tampilan_beranda',$isi);
	}

	function updatedata(){
		$this->model_keamanan->getkeamanandosen();
		$config['upload_path'] = './assets/foto_profil_dosen/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
				$NIP_NRK=strip_tags($this->input->post('NIP_NRK'));
				$Nama=strip_tags($this->input->post('Nama'));
				$bidang_ilmu=strip_tags($this->input->post('bidang_ilmu'));
				$this->M_upload->simpan_update_profil_dosen($NIP_NRK,$Nama,$bidang_ilmu,$gambar);
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Info</h4>
                Data Telah Diubah
              </div>');
				redirect('ProfilDosen');
			}
			else
			{
				echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
			}
		}
		else
		{
			$gambar=$this->input->post('oldfile'); //Mengambil file name dari gambar yang diupload
			$NIP_NRK=strip_tags($this->input->post('NIP_NRK'));
			$Nama=strip_tags($this->input->post('Nama'));
			$bidang_ilmu=strip_tags($this->input->post('bidang_ilmu'));
			$this->M_upload->simpan_update_profil_dosen($NIP_NRK,$Nama,$bidang_ilmu,$gambar);
			$this->session->set_flashdata('info',
					'<div class="alert alert-success alert-dismissible">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
															<h4><i class="icon fa fa-check"></i> Info</h4>
															Data Telah Diubah
													</div>');
			redirect('ProfilDosen');
		}
	}

	function ubahsandidosen() {
		$email_login = $this->session->userdata('EmailDosen');
		$sandi_lama = $this->input->post('OldPassword');
		$sandi_baru = $this->input->post('NewPassword');
		$konfirmasi = $this->input->post('AgainNewPassword');
		$this->load->model('model_login');
		$this->model_login->updatesandidosen($email_login,$sandi_lama,$sandi_baru,$konfirmasi);
		echo "<script>window.alert('Sandi Berhasil diubah Silahkan login kembali dengan sandi baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/BerandaDosen/logout'>";
	}

	public function ubahsandi()
	{
		$this->model_keamanan->getkeamanandosen();
		$email_login = $this->session->userdata('EmailDosen');
		$isi['konten'] = 'Dosen/konten_profil_ubahpass';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil Dosen';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Dosen/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Dosen";
		$isi['data']		= $this->db->query("SELECT * FROM dosen WHERE EmailDosen='$email_login'");
		$this->load->view('dosen/tampilan_beranda',$isi);
	}

}
