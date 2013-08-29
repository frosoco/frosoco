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
	 * Location information.
	 *
	 * URL: /home/location
	 */
	public function location()
	{
		$this->template->title = 'Location';
		$this->template->content->view('static/location');
		$this->template->publish();
	}

	/**
	 * Staff information
	 *
	 * URL: /home/staff
	 */
	public function staff()
	{
		$this->template->title = 'Staff';
		$this->template->content->view('static/staff');
		$this->template->publish();
	}

	/**
	 * Senior staff information
	 *
	 * URL: /home/seniorstaff
	 */
	public function seniorstaff()
	{
		$this->template->title = 'Senior Staff';
		$this->template->content->view('static/seniorstaff');
		$this->template->publish();
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */