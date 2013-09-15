<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /
	 */
	public function index()
	{

		$post = new Post();
		$post->limit(10);
		$post->get();

		$this->template->title = 'Home';
		$this->template->javascript->add('assets/js/masonry.min.js');
		$this->template->content->view('static/home');
		$this->template->publish();	
	}

	// Alternate homepage used for under construction times
	private function under_construction()
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

	/**
	 * Arbitrary photos and stuff
	 *
	 * URL: /home/photos
	 */
	public function photos()
	{
		$this->template->title = 'Photos';
		$this->template->content->view('static/photos');
		$this->template->publish();
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */