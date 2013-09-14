<div class="container">
	<div class="posts">
		<? foreach ($posts as $post) { ?>
		<a href="/posts/view/<? echo $post->id; ?>">
		<div class="post-card">
			<div class="post-card-title"><? echo $post->title; ?></div>
			<div class="post-card-author"><? echo $post->user->get()->getName(); ?></div>
		</div>
		</a>
		<? } ?>
	</div>
</div>