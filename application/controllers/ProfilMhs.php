<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProfilMhs extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_profil';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil Mahasiswa';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Mahasiswa/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Mahasiswa";
		$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	public function ubahsandi()
	{
		$this->model_keamanan->getkeamanan();
		$email_login = $this->session->userdata('Email');
		$isi['konten'] = 'Mahasiswa/konten_profil_ubahsandi';
		$isi['judul'] = 'Proifl';
		$isi['Welcome'] = 'Profil Mahasiswa';
		$isi['sub_judul'] = '';
		$isi['menu'] = "Mahasiswa/menu/menu_nonaktif";
		$isi['title'] = "SITA | Profil Mahasiswa";
		$isi['untuk_menu']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$isi['data']		= $this->db->query("SELECT * FROM mahasiswa WHERE Email='$email_login'");
		$this->load->view('Mahasiswa/tampilan_beranda',$isi);
	}

	function updatedata(){
		$this->model_keamanan->getkeamanan();
		$config['upload_path'] = './assets/foto_profil/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = FALSE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$gambar=$gbr['file_name']; //Mengambil file name dari gambar yang diupload
				$NIM=strip_tags($this->input->post('NIM'));
				$Nama_mhs=addslashes($this->input->post('Nama_mhs'));
				$JK=strip_tags($this->input->post('JK'));
				$telp=strip_tags($this->input->post('telp'));
				$Alamat=strip_tags($this->input->post('Alamat'));
				$semester=strip_tags($this->input->post('semester'));
				$statusdaftar = 1;
				$this->M_upload->simpan_upload($NIM,$Nama_mhs,$JK,$telp,$Alamat,$semester,$gambar,$statusdaftar);
				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Info</h4>
                Data Telah Diubah
              </div>');
				redirect('ProfilMhs');
			}
			else
			{
				echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
			}
		}
		else
		{
			$gambar=$this->input->post('oldfile'); //Mengambil file name dari gambar yang diupload
			$NIM=strip_tags($this->input->post('NIM'));
			$Nama_mhs=addslashes($this->input->post('Nama_mhs'));
			$JK=strip_tags($this->input->post('JK'));
			$telp=strip_tags($this->input->post('telp'));
			$Alamat=strip_tags($this->input->post('Alamat'));
			$semester=strip_tags($this->input->post('semester'));
			$statusdaftar = 1;
			$this->M_upload->simpan_upload($NIM,$Nama_mhs,$JK,$telp,$Alamat,$semester,$gambar,$statusdaftar);
			$this->session->set_flashdata('info',
					'<div class="alert alert-success alert-dismissible">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
															<h4><i class="icon fa fa-check"></i> Info</h4>
															Data Telah Diubah
													</div>');
			redirect('ProfilMhs');
		}
	}

	function updatesandi() {
		$email_login = $this->session->userdata('Email');
		$sandi_lama = $this->input->post('OldPassword');
		$sandi_baru = $this->input->post('NewPassword');
		$konfirmasi = $this->input->post('AgainNewPassword');
		$this->load->model('model_login');
		$this->model_login->updatesandi($email_login,$sandi_lama,$sandi_baru,$konfirmasi);
		echo "<script>window.alert('Sandi Berhasil diubah Silahkan login kembali dengan sandi baru')</script>";
		echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/BerandaMhs/logout'>";
	}
}
