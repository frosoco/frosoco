<div class="container">
<div class="profile">
<div class="row">
	<div class="col-md-4">
		<div class="profile-properties">
			<? if ($profile_pic == null) { ?>
			<img id="profile-picture" width="100%" src="/assets/images/default.jpg" />
			<? } else { ?>
			<img id="profile-picture" height="350px" width="350px" src="<? echo $profile_pic; ?>" />
			<? } ?>
			<h2><b><? echo $user->first_name; ?></b> <? echo $user->last_name; ?></h2>
			<h4><? echo $user->sunet;?>@stanford.edu</h4>
		</div>
		<? if ($user->id == $this->session->userdata('id') || $user->role == 'staff') { ?>
		<div class="profile-modifications">

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