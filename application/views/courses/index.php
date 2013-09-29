<div class="panel view-content">
	<input type="text" name="q" id="query" />
</div>
<script>
	$('#query').autocomplete({
		serviceUrl: '/courses/search', 
		paramName: 'q',
		onSelect: function(suggestion) {
			alert('selected' + suggestion.value);
		}
	});
</script>