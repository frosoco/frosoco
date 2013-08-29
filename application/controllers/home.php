<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index page for this controller. 
	 *
	 * URL: /
	 */
	public function index()
	{
		$this->template->title = 'Under Construction';
        $this->template->stylesheet->add('assets/css/construction.css');
		$this->template->content->view('maintenence/under_construction');
		$this->template->publish();
	}

	/**
	 * Function for testing things
	 *
	 * URL: /home/test
	 */
	public function test()
	{
		include_once("stanford.authorization.php");
		$auth = new StanfordAuthorization();
		try {
			$auth->require_webauth();
		} catch (Exception $e) {
			echo $e;
		}
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */