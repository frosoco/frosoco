<div class="container">
	<form action="/posts/add" method="post">
	<div class="row post-container">
		<div class="col-md-6 post-editor">
			<input name="post-title" type="text" placeholder="Title" />
			<div>
				<textarea name="post-body" id="text-input" oninput="this.editor.update()" rows="20" cols="70">Type **Markdown** here.</textarea>
			</div>
		</div>
		<div class="col-md-6 post-preview">
			<div id="preview"> </div>
		</div>
		<script>
			function Editor(input, preview) {
				this.update = function() {
					preview.innerHTML = markdown.toHTML(input.value);
				};
				input.editor = this;
				this.update();
			}
			var $ = function(id) { return document.getElementById(id); };
			new Editor($("text-input"), $("preview"));
		</script>
	</div>
	<div class="post-actions row">
		<div class="col-md-2 col-md-offset-10">
			<button id="post-save" type="submit" class="btn btn-success">Save</button>
			<button id="post-cancel" type="button" class="btn btn-default">Cancel</button>
		</div>
	</div>
</div>
