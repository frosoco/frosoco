<div class="content-cards">
<? foreach ($quotes as $quote) { ?>
<div class="content-card content-quote">
	<div class="content-body"><? echo $quote->text; ?></div>
	<div class="content-info">
		<span class="content-author"><? echo $quote->author; ?></span>
		<span class="content-heart">
			<i class="icon-heart"></i> 0
		</span>
	</div>
</div>
<? } ?>
</div>
<script>
	var container = document.querySelector('.content-cards');
	var msnry = new Masonry(container, {
		itemSelector: '.content-card'
	});
</script>