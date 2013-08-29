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
		$data['users'] = $users;

        $this->template->title = 'Users';
 		$this->template->content->view('users/index', $data);
		$this->template->publish();

	}

	/**
	 * View a user
	 *
	 * Route: /users/view/{id}
	 */
	public function view($id)
	{

		$user = new User($id);
		$data['user'] = $user;

        $this->template->title = $user->first_name . ' ' . $user->last_name;
 		$this->template->content->view('users/view', $data);
		$this->template->publish();

	}

	private function authorized() {
		if (!$this->session->userdata('id')) {
			return false;
		} return true;
	}

}
