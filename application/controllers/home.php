<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	// Static pages
class Home extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /
	 */
	public function index()
	{
		$this->under_construction();

		// $post = new Post();
		// $post->limit(10);
		// $post->get();

		// $this->template->title = 'Home';
		// $this->template->javascript->add('assets/js/masonry.min.js');
		// $this->template->content->view('static/home');
		// $this->template->publish();	
	}

	// URL: /home/temp_home
	public function temp_home()
	{
		$this->template->title = 'Home';
		$this->template->content->view('static/temp_home');
		$this->template->publish();	
	}

	// page with calendar of events
	// URL: /home/staff
	public function events()
	{
		$this->template->title = 'Events';
		$this->template->content->view('static/events');
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
	 * Housing information.
	 *
	 * URL: /home/housing
	 */
	public function housing()
	{
		$this->template->title = 'Housing';
		$this->template->content->view('static/housing');
		$this->template->publish();
	}

	/**
	 * Housing front desk info.
	 *
	 * URL: /home/hfd
	 */
	public function hfd()
	{
		$this->template->title = 'HFD';
		$this->template->content->view('static/hfd');
		$this->template->publish();
	}

	/**
	 * Location information.
	 *
	 * URL: /home/dining
	 */
	public function dining()
	{
		$this->template->title = 'Dining';
		$this->template->content->view('static/dining');
		$this->template->publish();
	}

	/**
	 * Staff information
	 *
	 * URL: /home/staff
	 */
	public function staff()
	{
		$staff_members = new User();
		$staff_members->where('role = "staff"');
		foreach ($staff_members as $staff) {
			echo $staff->first_name;
		}
		$staff_members->order_by("last_name", "asc");
		$staff_members->order_by("first_name", "asc");
		$staff_members->get();
		$data['staff_members'] = $staff_members;

		$this->template->title = 'Student Staff';
		$this->template->content->view('static/staff', $data);
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

	public function dormgov()
	{
		$this->template->title = 'Dorm Gov Elections';
		$this->template->content->view('static/dormgov');
		$this->template->publish();	
	}

	public function preassignment()
	{
		$this->template->title = 'Preassignment';
		$this->template->content->view('static/preassignment');
		$this->template->publish();
	}

	public function faq()
	{
		$this->template->title = 'FAQ';
		$this->template->content->view('static/faq');
		$this->template->publish();
	}


	/**
	 * Info on 2014-2015 in house draw
	 *
	 * URL: /home/inhousedraw
	 */
	public function inhousedraw()
	{
		// authenticate first
		if (!$this->authorized()) {
			header('Location: /auth/login');
		}

		$this->template->title = 'In-House Draw';
		$this->template->content->view('static/ihd');
		$this->template->publish();
	}
	

	/**
	 * Checks to see if a user is authorized based on session storage
	 */
	private function authorized() {
		if (!$this->session->userdata('id')) {
			return false;
		} return true;
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
