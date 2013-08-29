<?

class User extends DataMapper {
	
	var $has_many = array('event');

	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */
