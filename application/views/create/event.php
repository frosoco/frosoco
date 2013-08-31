<div class="container">
	<div class="page-header">
		<h1>Create Event</h1>
	</div>
	<form class="form-horizontal" role="form">
		<div class="form-group">
			<label for="name" class="col-lg-2 control-label">Event name</label>
			<div class="col-lg-3">
				<input type="text" class="form-control" id="name" placeholder="Name">
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-lg-2 control-label">Start time</label>
			<div class="col-lg-3 input-group settime">
				<input data-format="MM/dd/yyyy HH:mm:ss PP" class="form-control" type="text">
				<span class="crevent-timepicker input-group-addon add-on glyphicon glyphicon-calendar"></span>
			</div>
		</div>
		<div class="form-group">
			<label for="name" class="col-lg-2 control-label">End time</label>
			<div class="col-lg-3 input-group settime">
				<input data-format="MM/dd/yyyy HH:mm:ss PP" class="form-control" type="text">
				<span class="crevent-timepicker input-group-addon add-on glyphicon glyphicon-calendar"></span>
			</div>
		</div>
		<div class="form-group">
			<label for="description" class="col-lg-2 control-label">Description</label>
			<div class="col-lg-10">
				<textarea class="form-control" rows="5" placeholder="Description"></textarea>
			</div>
		</div>
		<div class="form-group">
			<div class="col-lg-offset-2 col-lg-10">
				<button type="submit" class="btn btn-default">Add</button>
			</div>
		</div>
	</form>
</div>
<script>
	$('.settime').datetimepicker({
		format: 'MM/dd/yyyy hh:mm:ss',
		language: 'en',
		pick12HourFormat: true
	});
</script>