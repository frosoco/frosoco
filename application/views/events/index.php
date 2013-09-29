<div class="content-cards">
<? foreach ($events as $event) { ?>
<a href="/events/view/<? echo $event->id; ?>">
<div class="content-card content-event">
	<div class="content-title"><? echo $event->name; ?></div>
	<div class="content-start"><i class="icon-time"></i><? echo $event->start; ?></div>
	<? if ($this->session->userdata('id')) { ?>
		<div class="content-attending">You're going!</div>
	<? } ?>
	<div class="content-summary"><? echo $event->getExcerpt(); ?></div>
	<div class="content-info">
		<span class="content-author">
			<img class="img-rounded" src="<? echo $event->user->get()->getPhoto(); ?>" /> <? echo $event->user->get()->getName(); ?>
		</span>
		<span class="content-heart">
			<i class="icon-heart"></i> 0
		</span>
	</div>
</div>
</a>
<? } ?>
</div>
<script>
	var container = document.querySelector('.content-cards');
	var msnry = new Masonry(container, {
		itemSelector: '.content-card'
	});
</script>