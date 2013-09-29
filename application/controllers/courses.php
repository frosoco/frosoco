<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function search($query) 
	{
		$course = new Course();
		$course->like('number', $query);
		$course->get();
		$course->set_json_content_type();
		echo $course->to_json(array('id','number','title'), TRUE);

	}

	public function index()
	{

		$course = new Course();
		$data['courses'] = $course->get(30, 0);

		// Create the view
		$this->template->title = 'Courses';
		$this->template->content->view('courses/index', $data);
		$this->template->publish();	

	}

}

?>