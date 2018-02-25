<?php $notification = Session::get('message'); ?>

@if(Session::has('success'))

	<script>
		$(function() {
			sweetAlert("Great job!", "{!! Session::get('success') !!}", "success");
		});

	</script>

@endif

@if(Session::has('error'))

	<script>
		$(function() {
			sweetAlert("Uh Oh!", "{!! Session::get('error') !!}", "error");
		});

	</script>

@endif

