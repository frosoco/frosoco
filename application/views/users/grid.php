<div class="container">
	<div class="people">
	<div class="alert alert-info">Not your cup of tea? <a href="/users/index/list">Return to the list view</a></div>
	<div class="people-grid">
<? foreach ($users as $user) { ?> 
<div class="people-grid-person">
	<a href="/users/views/<? echo $user->id; ?>"><img src="<? echo $user->getPhoto(); ?>" /></a>
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
	var container = document.querySelector('.people-grid');
	var msnry = new Masonry(container, {
		itemSelector: '.people-grid-person',
		gutter: 15
	});
</script>