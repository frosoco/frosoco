<div class="container">
	<div class="create-quote">
		<div class="row">
			<div class="col-md-1"><i class="icon-quote-left"></i></div>
			<div class="col-md-9"><textarea name="quote" placeholder="Quote here"></textarea></div>
		</div>
		<div class="row">
			<div class="col-md-2 col-md-offset-10"><input name="author" type="text" placeholder="Author" /></div>
		</div>
	</div>
	<script>
	$("textarea").keyup(function(e) {
	    while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + parseFloat($(this).css("borderBottomWidth"))) {
	        $(this).height($(this).height()+1);
	    };
	});
	</script>
</div>