<div class="container">
<div class="page-header">
	<h1>Events</h1>
</div>
<div class="events">
<? foreach ($events as $event)  { ?>
	<a href="/events/view/<? echo $event->id; ?>">
	<div class="event">
		<img width="100%" src="http://farm8.staticflickr.com/7309/9533422213_6cafb0b578_n.jpg" />
		<div class="event-details">
			<div class="event-header">
				<div class="event-title"><? echo $event->name; ?></div>
				<div class="event-host">Created by <? echo $event->user->first_name . ' ' . $event->user->last_name; ?></div>
			</div>
			<div class="event-description">
				<? echo $event->description; ?>
			</div>
			<div class="event-buttons">
				<a href="#"><button type="button" class="btn btn-default">Sign up</button></a>
			</div>
		</div>
	</div>
	</a>
<? } ?>
</div>
</div>