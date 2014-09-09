<!doctype html>
<head>
	<meta name="robots" content="noindex">
	<title><?php echo $this->template->title->default("FroSoCo"); ?> | FroSoCo</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
	<!-- FSC theme -->
	<link rel="stylesheet" href="/assets/css/fsc.css">
	<?php echo $this->template->stylesheet; ?>
	<!-- Obligatory jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<?php echo $this->template->javascript; ?>
</head>
<body>
	<div class="row">
		<div class="sidebar col-xs-2">
			<div class="sidebar-content">
				<? if ($this->session->userdata('id')) {
					$user = new User($this->session->userdata('id'));
				} ?>
				<div class="sidebar-image">
					<? if ($this->session->userdata('id')) { ?>
						<a href="/">
							<img src="<? echo $user->getPhoto(); ?>" class="img-circle" />
						</a>
					<? } else { ?>
						<a href="/">
							<img src="/assets/images/shield.png" class="img-circle" />
						</a>
					<? } ?>
				</div>
				<div class="sidebar-profile">
					<? if ($this->session->userdata('id')) { ?>
					<div class="sidebar-name"><? echo $user->getName(); ?></div>
					<div class="sidebar-edit">
						<!-- <span><a href="/create/post">Create</a></span> | -->
						<span><a href="/auth/logout">Logout</a></span>
					</div>
					<? } else { ?>
					<div class="sidebar-name">Visitor</div>
					<div class="sidebar-edit">
						<span><a href="/login">Login</a></span>
					</div>			
					<? } ?>
				</div>
				<div class="sidebar-menu">
					<ul>
						<? if ($this->session->userdata('id')) { ?>
						<a href="/users/"><li>Directory</li></a>
						<? } ?>
						<a href="/events"><li>Events</li></a>
						<a href="/home/staff"><li>Staff</li></a>
						<a href="/home/seniorstaff"><li>Senior Staff</li></a>
						<a href="/home/dining"><li>Dining</li></a>
						<!-- <a href="/posts"><li>Posts</li></a> -->
						<a href="/quotes"><li>Quotes</li></a>
						<? if ($this->session->userdata('id')) { ?>
						<a href="/marketplace"><li>Marketplace</li></a>
						<? } ?>
						<!-- <a href="/nexus"><li>Nexus</li></a> -->
					</ul>
				</div>
				<div class="sidebar-logo">
					<a href="/"><img src="/assets/images/logo.png" /></a>
				</div>
			</div>
		</div>
		<div class="content col-xs-10">
			<?php echo $this->template->content; ?>
		</div>
	</div>
</body>
</html>