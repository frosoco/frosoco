<div class="container">
<div class="page-header">
	<h1>Events</h1>
</div>
<div class="events">
<table class="table">
<tr>
	<th>Name</th>
	<th>Creator</th>
	<th>Start</th>
	<th>End</th>
	<th>View</th>
</tr>
<? foreach ($events as $event)  { ?>
<tr>
	<td><? echo $event->name; ?></td>
	<td><? echo $event->user->first_name . ' ' . $event->user->last_name; ?></td>
	<td><? echo $event->start; ?></td>
	<td><? echo $event->end; ?></td>
	<td><a href="/events/view/<? echo $event->id; ?>">View</a></td>
<? } ?>
</table>
</div>
</div>