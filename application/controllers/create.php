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

}
