<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Encrip extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->library('encrypt');

		$msg = 'admindemo';
	
		$encrypted_string = $this->encrypt->encode($msg);
		
		echo "Mensaje codificado : ".$encrypted_string.", len->".strlen($encrypted_string);
		
		echo "<br>Mensaje Decodificado : ".$this->encrypt->decode($encrypted_string);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */