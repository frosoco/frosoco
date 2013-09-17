<div class="panel create-editor">
	<div class="create-types">
		<span id="create-post"><a href="/create/post">Post</a></span>
		<span id="create-event" class="create-type-selected">Event</span>
		<span id="create-quote"><a href="/create/quote">Quote</a></span>
	</div>
	<form action="/events/add" method="post">
	<div class="create-text">
		<input type="text" name="event-name" placeholder="Name" />
	</div>
	<div class="create-text">
		<input type="text" name="event-location" placeholder="Location" />
	</div>
	<div class="create-text">
		<input type="text" id="event-dtpicker-start" name="event-start" placeholder="Start time" />
	</div>
	<div class="create-text">
		<input type="text" id="event-dtpicker-end" name="event-end" placeholder="End time" />
	</div>
	<div class="create-body">
		<textarea name="event-description" id="create-body" oninput="this.editor.update()" placeholder="Description (Markdown enabled)"></textarea>
	</div>
	<div class="create-actions">
		<button class="btn btn-default">Submit</button>
	</div>
	</form>
</div>
<div class="panel create-preview">
	<div class="create-preview-title">Preview</div>
	<div id="create-preview" class="create-preview-body"> </div>
</div>
<script>
	$('#event-dtpicker-start').datetimepicker({
		timeFormat: "hh:mm tt"
	});
	$('#event-dtpicker-end').datetimepicker({
		timeFormat: "hh:mm tt"
	});
	function Editor(input, preview) {
		this.update = function() {
			preview.innerHTML = markdown.toHTML(input.value);
		};
		input.editor = this;
		this.update();
	}
	var $ = function(id) { return document.getElementById(id); };
	new Editor($("create-body"), $("create-preview"));
</script>