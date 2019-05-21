<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamanan()
	{
		$Email = $this->session->userdata('Email');
		if(empty($Email))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}

	public function getkeamanandosen()
	{
		$EmailDosen = $this->session->userdata('EmailDosen');
		if(empty($EmailDosen))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}

	public function getkeamanankoor()
	{
		$EmailKoor = $this->session->userdata('EmailKoor');
		if (empty($EmailKoor))
		{
			$this->session->sess_destroy();
			redirect('login');
		}
	}
}
