
	<div class="page-header">
	    <h1>Events</h1>
	</div>
	<div class="row row-eq-height" >
		<?	foreach ($user_responses as $sunet => $user_response) { ?>
		<? $user = $user_response['userData'];
		$response_data = $user_response['responseData'];
		$hall = $user->house[0] . strval($user->room)[0];
		?>
		<div class="people-card col-xs-4 <? echo $hall ?>" style="width: 200px;">
			<a href="/users/view/<? echo $user->id; ?>"><img style="width:150px;" src="<? echo $user->getPhoto(); ?>" /></a>
			<div class="people-grid-info">
				<? $display_name = '';
				if ($user->isStaff())  {
					$display_name = $user->getName() . ' (' . $user->title . ')';
				} else {
					$display_name = $user->getName();
				}
				?>
				<div class="attendants-display-name"><? echo $display_name; ?></div>
				<div class="attendants-display-name"><? echo $user->getEmail(); ?></div>
				<div class="attendants-display-name"><? echo $user->getYear(); ?></div>
				<div class="attendants-display-name"><? echo $user->getLocation(); ?></div>
				<? if ($response_data) { ?>
					<?	foreach ($response_data as $key => $val) { ?>
						<?  if ($key != 'date' and $key != 'username') { ?>
							<div class="attendants-display-name"><b><? echo $key; ?></b> <? echo ': '; echo $val; ?></div>
						<? } ?>
						<? if ($key == 'date') { ?>
							<div class="attendants-display-name"> <b>date:</b> <? echo $val->format('m/d g:ia'); ?> </div>
						<? } ?>
					<? } ?>
				<? } ?>
			</div>
		</div>
		<? } ?>
	</div>
	<div>
    <h1>Events</h1>
	</div>

