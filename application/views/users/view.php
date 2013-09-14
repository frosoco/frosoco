<div class="container">
<div class="profile">
<div class="row">
	<div class="col-md-3">
		<img id="profile-picture" src="<? echo $user->getPhoto(); ?>" />
		<div class="profile-properties">
			<div class="profile-name"><b><? echo $user->first_name; ?></b> <? echo $user->last_name; ?></div>
			<div class="profile-email"><? echo $user->sunet;?>@stanford.edu</div>
			<div class="profile-location"><? echo $user->getLocation(); ?></div>
		</div>
		<? if ($user->id == $this->session->userdata('id') || $this->session->userdata('role') == 'staff') { ?>
		<div class="profile-modifications">
			<!-- <form enctype="multipart/form-data" action="/users/upload_profile" method="post">
				<input type="file" name="userfile" />
				<input type="hidden" name="userid" value="<? echo $user->id; ?>" />
				<input type="submit" value="upload" />
			</form> -->
		</div>
		<? } ?>
	</div>
	<div class="col-md-9">
		<div class="profile-description"><? echo $user->description; ?></div>
		<div class="profile-feed">
			Feed here
		</div>
	</div>
</div>
</div>
</div>
<script>
	$('#profile-picture').click(function() {

	});
</script>