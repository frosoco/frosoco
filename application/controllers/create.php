<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

	/**
	 * Main route for creating things
	 *
	 * Route: /create
	 */
	public function index() 
	{

		if (!$this->authorized()) {
			header('Location: /login');
		}

		// Create the view
		$this->template->title = 'Create';
        $this->template->javascript->add('assets/js/markdown.js');
		$this->template->content->view('create/index');
		$this->template->publish();

	}

	/**
	 * Form for creating an event
	 *
	 * Route: /create/event
	 */
	public function event()
	{

		if (!$this->authorized()) {
			header('Location: /login');
		}

		// Create the view
		$this->template->title = 'Create Event';
        $this->template->stylesheet->add('assets/css/bootstrap-datetimepicker.min.css');
        $this->template->javascript->add('assets/js/bootstrap-datetimepicker.min.js');
		$this->template->content->view('create/event');
		$this->template->publish();		

	}

	public function post()
	{

		if (!$this->authorized()) {
			header('Location: /login');
		}

		// Create the view
		$this->template->title = 'Create Post';
        $this->template->javascript->add('assets/js/markdown.js');
		$this->template->content->view('create/post');
		$this->template->publish();		

	}

	public function quote()
	{

		if (!$this->authorized()) {
			header('Location: /login');
		}

		// Get all the users
		$u = new User();
		$data['users'] = $u->order_by('first_name', 'asc')->get();

		// Create the view
		$this->template->title = 'Create Quote';
		$this->template->content->view('create/quote', $data);
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
