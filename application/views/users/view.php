<div class="container">
<div class="profile">
<div class="row">
	<div class="col-md-4">
		<div class="profile-properties">
			<img id="profile-picture" width="350px" height="350px" src="<? echo $user->getPhoto(); ?>" />
			<h2><b><? echo $user->first_name; ?></b> <? echo $user->last_name; ?></h2>
			<h4><? echo $user->sunet;?>@stanford.edu</h4>
		</div>
		<? if ($user->id == $this->session->userdata('id') || $this->session->userdata('role') == 'staff') { ?>
		<div class="profile-modifications">
			<form enctype="multipart/form-data" action="/users/upload_profile" method="post">
				<input type="file" name="userfile" />
				<input type="hidden" name="userid" value="<? echo $user->id; ?>" />
				<input type="submit" value="upload" />
			</form>
		</div>
		<? } ?>
	</div>
	<div class="col-md-8">
		Feed here
	</div>
</div>
</div>
</div>
<script>
	$('#profile-picture').click(function() {

	});
</script>