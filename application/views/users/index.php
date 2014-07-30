
<div class="container">
	<div class="people">
		<input id="user-search" type="text" class="form-control" placeholder="Search" />

		<!-- <div class="alert alert-info">Return to <a class="alert-link" href="/users/index/index">list view</a>.</div> -->

			<div class="people-grid">
				<? foreach ($users as $user) { ?> 
				<div class="people-grid-person">
					<img src="<? echo $user->getPhoto(); ?>" />
					<!-- <a href="/users/view/<? echo $user->id; ?>"><img src="<? echo $user->getPhoto(); ?>" /></a> -->
					<div class="people-grid-info">
						<div class="people-grid-firstname"><? echo $user->first_name; ?></div>
						<div class="people-grid-lastname"><? echo $user->last_name; ?></div>
						<div class="people-grid-email"><? echo $user->getEmail(); ?></div>
						<div class="people-grid-location"><? echo $user->getLocation(); ?></div>
					</div>
				</div>
				<? } ?>
			</div>
		</div>
	</div>
</div>

<script>
	var $container = $('.people-grid');
	$container.isotope({
	  itemSelector: '.people-grid-person',
	  layoutMode: 'fitRows',
	  transitionDuration: 0,
	});

	$('#user-search').keyup(function() {
		var query = $(this).val().toLowerCase();

		$container.isotope({
			filter: function(){
				return ($(this).html().toLowerCase().indexOf(query) >= 0);
			}
		});
	});
</script>
