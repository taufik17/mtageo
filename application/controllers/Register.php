<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('Mahasiswa/tampilan_register');
	}

    public function simpan()
    {
        $key = $this->input->post('email');
        $email = $this->input->post('email');
        $data['email']	= $this->input->post('email');
        $saltid   = md5($this->input->post('Email'));
        $data['Nama_mhs']	= $this->input->post('name');
        $data['Password']	= md5($this->input->post('password'));

        $this->load->model('model_daftar');
        $query = $this->model_daftar->getdata($key);
        $cek1=$this->model_daftar->checkEmail($key);
        $cek2=$this->model_daftar->cekmail($key);
        if($cek1 == false)
        {
            echo "<script>window.alert('Email anda invalid')</script>";
            echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
        }
        else
        {
            if ($cek2 == false) {
                echo "<script>window.alert('Email Sudah Terdaftar')</script>";
                echo "<meta http-equiv='refresh' content='0;url=https://localhost/mtageo/Register'>";
                # code...
            }
            else
            {
                $this->model_daftar->getinsert($data);
                $this->sendemail($email, $saltid);
                echo "<meta http-equiv='refresh' content='0;url=https://localhost/mtageo/Berhasil_daftar/'>";
            }
        }
    }
    function sendemail($email,$saltid){
        // configure the email setting
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'smtp.gmail.com'; //smtp host name
        $config['smtp_port'] = '465'; //smtp port number
        $config['smtp_user'] = 'emailsimta@gmail.com';
        $config['smtp_pass'] = 'emaildummy'; //$from_email password
        $config['mailtype'] = 'html';
        $config['charset'] = 'iso-8859-1';
        $config['wordwrap'] = TRUE;
        $config['newline'] = "\r\n"; //use double quotes
        $this->email->initialize($config);
        $url = base_url()."daftar/confirmation/".$saltid;
        $this->email->from('emailsimta@gmail.com', 'VERIFIKASI COMPTECH');
        $this->email->to($email);
        $this->email->subject('Verifikasi Email');
        $message = "<html><head><head></head><body><p>Hi,</p><p>Terimakasih telah mendaftar.</p><p>ikuti tautan berikut untuk konfirmasi email.</p><a href=".$url."><b>VERIFIKASI</b></a><br/><p>Hormat,</p><p>Administrator SITA</p></body></html>";
        $this->email->message($message);
        return $this->email->send();
    }

}
