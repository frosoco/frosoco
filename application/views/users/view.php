<div class="container">
<div class="profile">
<div class="row">
	<div class="col-md-4">
		<? if ($profile_pic == null) { ?>
		<img width="100%" src="/assets/images/default.jpg" />
		<? } else { ?>
		<img height="350px" width="350px" src="<? echo $profile_pic; ?>" />
		<? } ?>
		<h2><b><? echo $user->first_name; ?></b> <? echo $user->last_name; ?></h2>
		<h4><? echo $user->sunet;?>@stanford.edu</h4>
		<!-- <form method="post" action="/users/upload_profile" enctype="multipart/form-data" />
			<input type="file" name="userfile" size="20" />
			<input type="submit" value="upload" />
		</form> -->
	</div>
	<div class="col-md-8">
		Feed here
	</div>
</div>
</div>
</div>