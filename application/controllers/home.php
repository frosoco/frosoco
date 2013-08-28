<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * Maps to the following URL
	 * 		http://frosoco.stanford.edu/
	 */
	public function index()
	{
		$this->load->view('home/under_construction');
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */