<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	/**
	 * Main route for events page
	 *
	 * Route: /events
	 */
	public function index() 
	{

		/*
		// Load all of the available events
		$current_event = new Event();
		$current_event->get();
		$data['current'] = $current_event;

		// Get future events
		$future_event = new Event();
		$future_event->get();
		$data['future'] = $future_event;
		*/

		$event = new Event();
		$event->get();
		$data['events'] = $event;

		// Create the view
		$this->template->title = 'Events';
		$this->template->content->view('events/index', $data);
		$this->template->publish();

	}

	/**
	 * View an event
	 *
	 * Route: /events/view/{id}
	 */
	public function view($id)
	{
		echo $id;
	}


	/**
	 * Create a new event
	 *
	 * Route: /events/add
	 */
	public function add()
	{

	}

}
