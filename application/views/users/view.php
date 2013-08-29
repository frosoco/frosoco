<div class="profile">
<div class="row">
	<div class="col-md-4">
		<? if ($user->photo == null) { ?>
		<img width="100%" src="/assets/images/default.jpg" />
		<? } else { ?>
		<img src="<? echo $user->photo; ?>" />
		<? } ?>
		<h2><b><? echo $user->first_name; ?></b> <? echo $user->last_name; ?></h2>
		<h4><? echo $user->sunet;?>@stanford.edu</h4>
	</div>
	<div class="col-md-8">Feed here</div>
</div>
</div>