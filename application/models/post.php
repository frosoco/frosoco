<?

class Post extends DataMapper {

	var $has_one = array("user");
	
	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	function getPreview() {
		return substr($this->text, 0, 100);
	}

}

/* End of file post.php */
/* Location: ./application/models/post.php */
