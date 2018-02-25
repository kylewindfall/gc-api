<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login | Jaunt</title>

	<script type="text/javascript" src="http://fast.fonts.net/jsapi/da2c106c-9f9a-494a-abdf-d7e557bd0cfc.js"></script>

	<link rel="stylesheet" href="{{ URL::asset('assets/alerts/sweetalert.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/line-icons/css/simple-line-icons.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/gumby.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('style.css'); }}">
	<script data-require="jquery@*" data-semver="2.0.3" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
	@yield('css')

</head>

<body class="guest-layout">
			
	@yield('content')

	@include('includes.notification')
	
	@yield('scripts')

	<script>

		setTimeout(function(){
		    $(".message").fadeOut("slow");
		},5000)
		
	</script>

	<script src="{{ URL::asset('assets/alerts/sweetalert.min.js'); }}"></script>

	<!-- 
	<script src="{{ URL::asset('assets/js/gumby.min.js'); }}"></script>
	<script gumby-touch="js/libs" src="{{ URL::asset('assets/js/libs/gumby.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.retina.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.fixed.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.skiplink.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.toggleswitch.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.checkbox.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.radiobtn.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.tabs.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/gumby.navbar.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/ui/jquery.validation.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/libs/gumby.init.js'); }}"></script>
	-->

	</body>
</html>
