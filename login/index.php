<?

	// Leverage native PHP session
	session_start();

	// Get the current WebAuth user
	$_SESSION['WEBAUTH_USER'] = $_ENV['WEBAUTH_USER'];

	// Redirect to a page to actually do something
	header('Location: /auth/success');

?>
