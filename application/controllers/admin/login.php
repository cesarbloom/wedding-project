<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
include_once(APPPATH.'controllers/classes/page_controller.php');
class Login extends Page_Controller {

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
		$this->login2();
	}
	public function login2()
	{
		$this->load->helper('url');
	
		$css_dir = base_url()."/css";
		
		$this->display();
		echo "login user".$this->css_dir;
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */