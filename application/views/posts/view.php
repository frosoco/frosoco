<div class="panel view-content">
	<div class="view-content-title"><? echo $title; ?></div>
	<div class="view-content-body"><? echo $post; ?></div>
</div>
<div class="panel view-addendum">
	<div class="view-addendum-author">
		<div class="view-addendum-author-image">
			<img class="img-rounded" src="<? echo $author->getPhoto(); ?>" /> 
		</div>
		<div class="view-addendum-author-name">
			<? echo $author->getName(); ?>
			<div class="view-addendum-author-email">
				<? echo $author->getEmail(); ?>
			</div>
		</div>
	</div>
	<div class="view-addendum-comments">
		Comments are currently closed.
	</div>
</div>