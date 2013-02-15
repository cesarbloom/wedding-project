<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//include_once(APPPATH.'controllers/welcome.php');
//echo APPPATH;
class Bridegroom extends CI_Controller {

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
		
		
	}
	public function novios($slug=false){
		if($this->uri->segment(1)===FALSE){
			echo "No hay nada, se va al admin";
			$con = new Welcome();
			$con->index();
		}else{
			echo "x slos novios->".$this->uri->segment(1)." , slug->".$slug;
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */