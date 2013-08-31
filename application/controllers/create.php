<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create extends CI_Controller {

	/**
	 * Main route for creating things
	 *
	 * Route: /create
	 */
	public function index() 
	{

		// Create the view
		$this->template->title = 'Create';
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

		// Create the view
		$this->template->title = 'Create Event';
        $this->template->stylesheet->add('assets/css/bootstrap-datetimepicker.min.css');
        $this->template->javascript->add('assets/js/bootstrap-datetimepicker.min.js');
		$this->template->content->view('create/event');
		$this->template->publish();		

	}

	public function post()
	{

		// Create the view
		$this->template->title = 'Create Post';
		$this->template->content->view('create/post');
		$this->template->publish();		

	}

}
