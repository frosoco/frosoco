<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Main route for events page
	 *
	 * Route: /users
	 */
	public function index() 
	{
		
		if (!$this->authorized()) {
			header('Location: /auth/login');
		}

		$users = new User();
		$users->get();
		foreach ($users as $user)
		{
			echo $user->first_name . ' ' . $user->last_name . '<br />';
		}
	}

	/**
	 * View a user
	 *
	 * Route: /users/view/{id}
	 */
	public function view($id)
	{
		echo $id;
	}

	private function authorized() {
		if (!$this->session->userdata('id')) {
			return false;
		} return true;
	}

}
