<?

class User extends DataMapper {
	
	var $has_many = array('event', 'upload', 'signup');

	function __construct($id = NULL)
	{
		parent::__construct($id);
	}

	function getPhoto() {
		$pic = new Upload($this->photo_id);
		if ($pic->exists()) {
			return $pic->url;
		} else {
			return '/assets/images/default.jpg';
		}
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */
