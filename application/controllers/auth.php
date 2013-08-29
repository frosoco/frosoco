<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /auth
	 */
	public function index()
	{
		print_r($this->session->all_userdata());
		print_r($this->session->userdata('user'));
	}

	/**
	 * Function for logging into the system
	 *
	 * URL: /auth/login
	 */
	public function login()
	{
		session_start();
		// Punts to a directory for WebAuth to do its thing
		header('Location: /login');
	}

	/**
	 * Manages success. 
	 *
	 * URL: /auth/success
	 */
	public function success()
	{

		// We're going to leverage native sessions
		session_start();

		// Check if the database has the user
		$user = new User();
		$user->where('sunet', $_SESSION['WEBAUTH_USER']);
		$user->get();

		// If it doesn't have the user, create a new entry for them
		if (!$user->exists()) {
			//header('Location: /');
			//$user->sunet = $_SESSION['WEBAUTH_USER'];
			//$user->save();
		}

		// Keep the user in our session
		$this->session->set_userdata('id', $user->id);
		$this->session->set_userdata('first_name', $user->first_name);
		$this->session->set_userdata('role', $user->role);

		// Now redirect somewhere useful
		header('Location: /');

	}

	/**
	 * Function for logging out of the system
	 *
	 * URL: /auth/logout
	 */
	public function logout()
	{
		$this->session->sess_destroy();
		include_once("stanford.authorization.php");
		StanfordAuthorization::force_webauth_logout();
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
?>