<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Captcha extends CI_Controller {
	private $bil1;
	private $bil2;
	private $operator;

	public function initial()
	{
					$listoperator = array('+', '-', 'x');
					$this->bil1 = rand(0, 20);
					$this->bil2 = rand(0, 20);
					$this->operator = $listoperator[rand(0, 2)];
	}

	public function generatekode()
	{
					$this->initial();

					if ($this->operator == '+') $hasil = $this->bil1 + $this->bil2;
					else if ($this->operator == '-') $hasil = $this->bil1 - $this->bil2;
					else if ($this->operator == 'x') $hasil = $this->bil1 * $this->bil2;
					$_SESSION['kode'] = $hasil;
	}

	public function showcaptcha()
	{
					echo "Berapa hasil dari ".$this->bil1." ".$this->operator." ".$this->bil2." ? ";
	}

	public function resultcaptcha()
	{
					return $_SESSION['kode'];
	}
	
}
