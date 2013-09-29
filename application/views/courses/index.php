<div class="panel-users">
<table class="table table-hover">
	<tr>
		<th>Number</th>
		<th>Title</th>
	</tr>
	<? foreach ($courses as $course) { ?>
	<tr>
		<td><? echo $course->number; ?></td>
		<td><? echo $course->title; ?></td>		
	</tr>
	<? } ?>
</table>
</div>