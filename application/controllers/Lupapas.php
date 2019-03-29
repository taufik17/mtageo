<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Lupapas extends CI_Controller {
	public function index()
	{
		$this->load->view('Mahasiswa/tampilan_lupapas');
	}
}
