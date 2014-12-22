<!doctype html>
<!-- Font Awesome -->
<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
<!-- Obligatory jQuery -->
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>-->

	<html>
	<head>
		<title><?php echo $this->template->title->default("FroSoCo"); ?> | FroSoCo</title>

		<!-- css -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,900|Source+Sans+Pro:300|Crimson+Text:400' rel='stylesheet' type='text/css'>
		<link href="/assets/css/bootstrap.css" type="text/css" rel="stylesheet"/>
		<link href="/assets/css/fsc.css" type="text/css" rel="stylesheet"/>
		<?php echo $this->template->stylesheet; ?>

		<!-- js -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<!--<script type="text/javascript" src="/js/jquery-ui.js"></script>
		<script type="text/javascript" src="/assets/js/setup.js"></script>-->
		<script type="text/javascript" src="/assets/js/menu.js"></script>
		<!--<script type="text/javascript" src="/assets/js/backbone.js"></script>-->
	<!--<script type="text/javascript" src="/assets/js/plupload.full.js"></script>
	<script type="text/javascript" src="/assets/js/jquery.plupload.queue.js"></script>-->
		<?php echo $this->template->javascript; ?>

	<link rel="icon" href="http://frosoco.stanford.edu/assets/img/common/favicon.ico"/>
</head>

<body>
	<div id="outer">
		<div id="page">
			<? if ($this->session->userdata('id')) {
				$user = new User($this->session->userdata('id'));
			} ?>

			<div id="header"> 
				<a href="/"><img src="/assets/images/flat_logo_filled.png" id="header-logo"/></a> 
				<div class='menu'>
					<ul class='nav'>
						<li ><a href="#" >Discover</a>
							<ul class='submenu'>
								<li>
									<a  href='/home/housing' >
										Housing
									</a>
								</li>

								<li>
									<a href="/home/dining">
										Dining
									</a>
								</li>

								<li>
									<a  href='/home/faq' >
										FAQ
									</a>
								</li>
							</ul>
						</li><!--About-->

						<li ><a href="#">Meet</a>
							<ul class='submenu'>
								<li>
									<a  href='/home/seniorstaff' >
										Senior Staff
									</a>
								</li>
								<li>
									<a  href='/home/staff' >
										Student Staff
									</a>
								</li>
								<? if ($this->session->userdata('id')) { ?>
								<li>
									<a  href='/users/' >
										Residents
									</a>
								</li>
								<? } ?>
							</ul>
						</li><!--Meet-->

						<li ><a href="#" >Do</a>
							<ul class='submenu'>
								<li>
									<a href="/home/events/" >Events</a>
								</li>

								<? if ($this->session->userdata('id')) { ?>
								<li>
									<a href="https://docs.google.com/a/stanford.edu/forms/d/1fvJt8WsocJ0_vD6hUh3uFmUYw-Jlbwktvj4aTJY6sHQ/viewform" >
										Kudos
									</a>
								</li>

								<li>
									<a href='/quotes'>Quotes</a>
								</li>
								<? }?>
							</ul>
						</li><!--Do-->

						<li ><a>Help</a>
							<ul class='submenu'>
								<li>
									<a href='/home/ad' >Academic Director</a>
								</li>

								<li>
									<a href='/home/hfd' >Housing Front Desk</a>
								</li>
							</ul>
						</li><!--Help-->
					</ul><!--nav--> 

					<div class="login">
						<? if ($this->session->userdata('id')) { ?>
						<img src="<? echo $user->getPhoto(); ?>" class="profile-img img-circle" />
						<span><? echo $user->getName(); ?></span>
						<a href="/auth/logout">Logout</a>
						<? } else { ?>
						<img src="/assets/images/shield.png" class="profile-img img-circle" />
						<span>Welcome, Guest!</span>
						<a href="/login">Login</a>
						<? } ?>
					</div>
				</div><!--menu-->
			</div><!--header-->


			<div id="main">
				<div id="stanford-seal"></div>
				<div class="content">
					<?php echo $this->template->content; ?>
				</div>
			</div><!--main-->

			<div id="bg-footer"></div>
		</div><!--page-->
	</div><!--outer-->
</body>
</html>