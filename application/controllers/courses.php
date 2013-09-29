<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function search() 
	{

		$query = $this->input->get('q', TRUE);

		$courses = new Course();
		$courses->limit(10);
		$courses->like('number', $query);
		$courses->get();

		$arr = Array();
		foreach ($courses as $course) {
			$arr_course = Array();
			$arr_course['value'] = $course->number;
			$arr_course['data'] = $course->number;
			array_push($arr, $arr_course);
		}

		$arr_wrapper = Array();
		$arr_wrapper['suggestions'] = $arr;
		echo json_encode($arr_wrapper);

	}

	public function index()
	{

		// Create the view
		$this->template->title = 'Courses';
		$this->template->javascript->add('assets/js/jquery.autocomplete.min.js');
		$this->template->content->view('courses/index');
		$this->template->publish();	

	}

}

?>