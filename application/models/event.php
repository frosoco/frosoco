<?

class Event extends DataMapper {

	var $has_one = array('user');
	var $has_many = array('signup');
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	function getExcerpt()
	{
		if (strlen($this->description) > 300) {
			return substr($this->description, 0, 300) . '...';
		} else {
			return $this->description;
		}
	}

}

/* End of file event.php */
/* Location: ./application/models/event.php */
