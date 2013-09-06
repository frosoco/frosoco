<?

class Signup extends DataMapper {

	var $has_one = array("event");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

}

/* End of file signup.php */
/* Location: ./application/models/signup.php */
