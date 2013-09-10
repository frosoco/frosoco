<div class="container">

<div class="event-si-container">
	<div class="row">
		<div class="col-md-3">
			<div class="event-si-picture">
				<img src="https://sphotos-a-pao.xx.fbcdn.net/hphotos-ash4/310245_436163156480251_114456726_n.jpg" />
			</div>
		</div>
		<div class="col-md-6">
			<div class="event-si-details">
				<div class="event-si-name"><? echo $event->name; ?></div>
				<div class="event-si-time"><span class="glyphicon glyphicon-time"></span><? echo $event->start; ?> to <? echo $event->end; ?></div>
				<div class="event-si-location"><span class="glyphicon glyphicon-globe"></span><? echo $event->location; ?></div>
				<div class="event-si-description"><? echo $event->description; ?></div>
				<div class="event-si-actions">
					<? if ($this->session->userdata('id')) { ?>
					<? if ($signedup) { ?>
						<button type="button" class="btn btn-success" disabled="disabled">Signed up!</button>
					<? } else { ?>
						<button type="button" id="signup" class="btn btn-default">Sign up</button>
					<? } ?>
				 	<? } ?>
					<button type="button" id="contact" class="btn btn-default">Contact organizer</button>
					<i style="display: none;" id="action-spinner" class="icon-spinner icon-spin icon-large"></i>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="event-si-attendees">
	<div class="event-si-attendees-title">Attendees</div>
<? foreach ($signups as $signup) { ?>
<? $attendee = $signup->user->get(); ?>
<a href="/users/view/<? echo $attendee->id; ?>">
<div class="event-si-attendee">
	<img src="<? echo $attendee->getPhoto(); ?>" />
	<div class="event-si-attendee-name"><? echo $attendee->first_name; ?></div>
</div>
</a>
<? } ?>
</div>

<script>
	$('#signup').click(function() {
		$('#action-spinner').show();
		$.post("/events/signup", { event_id: <? echo $event->id; ?>}, function(data) {
			$('#action-spinner').hide();
			$('#signup').removeClass('btn-default').addClass('btn-success').attr('disabled','disabled').text('Signed up!');
		});
	});
</script>

</div>