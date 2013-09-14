<?

class User extends DataMapper {
	
	var $has_many = array('event', 'upload', 'signup', 'post', 'quote');

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

	function getEmail() {
		return $this->sunet . '@stanford.edu';
	}

	function getName() {
		return $this->first_name . ' ' . $this->last_name;
	}

	function getLocation() {
		return ucfirst($this->house . ' ' . $this->room);
	}

}

/* End of file user.php */
/* Location: ./application/models/user.php */
