<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Friendly_Dispatcher_Url extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 */
	public function index()
	{
		
	}
	public function analyze_url($page = FALSE , $sub_page = FALSE){
				
		if($page === FALSE){
			
		}else{
			echo "Controlador novios: [".$page."],sub page:[".$sub_page."]";
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */