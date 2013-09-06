<div class="container">
<div class="profile">
<div class="row">
	<div class="col-md-4">
		<? if ($pic == null) { ?>
		<img width="100%" src="/assets/images/default-event.jpg" />
		<? } else { ?>
		<img height="350px" width="350px" src="<? echo $image; ?>" />
		<? } ?>
		<h2>Title</h2>
		<h4>Subtitle</h4>
		<!-- <form method="post" action="/users/upload_profile" enctype="multipart/form-data" />
			<input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" />
		</form> -->
	</div>
	<div class="col-md-8">
		Attendees
	</div>
</div>
</div>
</div>