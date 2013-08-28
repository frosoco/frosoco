<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /auth
	 */
	public function index()
	{
		echo 'hi';
	}

	/**
	 * Function for logging into the system
	 *
	 * URL: /auth/login
	 */
	public function login()
	{
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
		session_start();
		$this->session->set_userdata('sunet',$_SESSION['WEBAUTH_USER']);
		session_destroy();
		print_r($this->session->all_userdata());
	}

	/**
	 * Function for logging out of the system
	 *
	 * URL: /auth/logout
	 */
	public function logout()
	{
		include_once("stanford.authorization.php");
		StanfordAuthorization::force_webauth_logout();
	}

}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */
?>