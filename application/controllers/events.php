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

		$data['id'] = $id;

		// Create the view
		$this->template->title = 'Events';
		$this->template->content->view('events/view', $data);
		$this->template->publish();

	}


	/**
	 * Create a new event
	 *
	 * Route: /events/add
	 */
	public function add()
	{

		// Get the POST parameters
		$e = new Event();
		$e->name = $this->input->post('name');
		
		$e->start = date("Y-m-d H:i:s", strtotime($this->input->post('start')));		
		$e->end = date("Y-m-d H:i:s", strtotime($this->input->post('end')));

		$e->user_id = $this->session->userdata('id');
		$e->description = $this->input->post('description');
		$e->save(); 

		// Redirect to page for that event
		header('Location: /events/view/' . $e->id);

	}

}
