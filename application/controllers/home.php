<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /
	 */
	public function index()
	{
		$this->template->title = 'Under Construction';
        $this->template->stylesheet->add('assets/css/construction.css');
		$this->template->content->view('maintenence/under_construction');
		$this->template->publish();
	}

	/**
	 * Function for testing things
	 *
	 * URL: /home/test
	 */
	public function test()
	{
		$username = $_SERVER['REMOTE_USER'];
		echo $username;
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */