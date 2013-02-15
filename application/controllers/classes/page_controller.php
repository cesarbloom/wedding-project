<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_Controller extends CI_Controller {

	public $css_dir;
	public $js_dir;
	public $template_dir;
	
	public function __construct()
    {
         parent::__construct();
         
    }
	public function init(){
	
		//$this->load->helper('url');
	
		//$css_dir = base_url()."/css";
		//$js_dir = base_url()."/js";
		//$template_dir = base_url()."/js";
	}
	public function index()
	{
		
	}
	public function process(){
		$this->init();
	}
	public function display(){
		echo "esto es displa";
		$this->process();
	}
	/**
	 * Assign template vars related to page content
	 * @see FrontController::initContent()
	 */
	public function init_content(){
	
	}
	public function setMedia()
	{
		
	}
	public function addJS(){
	
	}
	public function addCSS(){
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */