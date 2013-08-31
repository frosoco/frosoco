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
		$users->order_by("last_name", "asc");
		$users->order_by("first_name", "asc");
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

		if (!$this->authorized()) {
			header('Location: /auth/login');
		}

		$user = new User($id);
		$data['user'] = $user;

		$upload = new Upload($user->photo_id);
		$data['profile_pic'] = $upload->url;

        $this->template->title = $user->first_name . ' ' . $user->last_name;
 		$this->template->content->view('users/view', $data);
		$this->template->publish();

	}

	/**
	 * Used as the action target for a profile picture upload
	 */
	public function upload_profile()
	{
		
		// Set the upload path for the profile pictures
		$config['upload_path'] = './uploads/profiles';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$this->upload->initialize($config);
		
		// Check to see if it is an upload
		if (!$this->upload->do_upload()) 
		{
			echo $this->upload->display_errors();
		}

		else 
		{
			
			$data = $this->upload->data();
			
			$upload = new Upload();
			$upload->url = '/uploads/profiles/' . $data['file_name'];
			$upload->user_id = $this->session->userdata('id');
			$upload_id = $upload->save();

			$user = new User();
			$user->get_by_id($this->session->userdata('id'));
			$user->photo_id = $upload_id;
			$user->save();

			header('Location: /users/view/' . $this->session->userdata('id'));

		}

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
