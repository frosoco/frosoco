<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $this->template->title->default("FroSoCo"); ?></title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
		<link href="/assets/css/fsc.css" rel="stylesheet">
	    <?php echo $this->template->stylesheet; ?>
	    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				    <span class="sr-only">Toggle navigation</span>
				    <span class="icon-bar"></span>
				    <span class="icon-bar"></span>
		    		<span class="icon-bar"></span>
				    </button>
				    <a class="navbar-brand" href="/">FroSoCo</a>
			  	</div>
		  	  	<div class="collapse navbar-collapse navbar-ex1-collapse">
    				<ul class="nav navbar-nav navbar-right">
    					<li><a href="/home/location">Location</a></li>
    					<li><a href="/events">Events</a></li>
       					<li><a href="/home/photos">Photos</a></li>
    					<li class="dropdown">
    						<a class="dropdown-toggle" data-toggle="dropdown" href="#">People</a>
    						<ul class="dropdown-menu">
		      					<? if ($this->session->userdata('id')) { ?>
		      					<li><a href="/users">Residents</a></li>
		      					<? } ?>
		      					<li><a href="/home/staff">Staff</a></li>
		      					<li><a href="/home/seniorstaff">Senior Staff</a></li>
		      				</ul>
						</li>
      					<? if ($this->session->userdata('id')) { ?>
      					<li class="dropdown">
	      					<a class="dropdown-toggle" data-toggle="dropdown" href="#"><? echo $this->session->userdata('first_name'); ?></a>
	      					<ul class="dropdown-menu">
	      						<li><a href="/users/view/<? echo $this->session->userdata('id'); ?>">Profile</a></li>
	      						<li><a href="/auth/logout">Logout</a></li>
	      					</ul>
	      				</div>
      					<? } else { ?>
      					<li><a href="/login">Login</a></li>
      					<? } ?>
      				</ul>
			  	</div>
			  </div>
		</nav>
		<div class="container" id="content">
		<?php echo $this->template->content; ?>
		</div>
	</body>
</html>