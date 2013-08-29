<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	/**
	 * Main route for events page
	 *
	 * Route: /events
	 */
	public function index() 
	{

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
