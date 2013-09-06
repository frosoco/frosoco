<?

class Event extends DataMapper {

	var $has_one = array("user");
	var $has_many = array("signup");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

}

/* End of file event.php */
/* Location: ./application/models/event.php */
