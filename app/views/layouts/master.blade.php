<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Jaunt</title>

	<script type="text/javascript" src="http://fast.fonts.net/jsapi/da2c106c-9f9a-494a-abdf-d7e557bd0cfc.js"></script>

	<link rel="stylesheet" href="{{ URL::asset('assets/alerts/sweetalert.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/sirtrevorjs/sir-trevor.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/sirtrevorjs/sir-trevor-icons.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/line-icons/css/simple-line-icons.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/gumby.css'); }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/pikaday.css?v=1'); }}">
	<link rel="stylesheet" href="{{ URL::asset('style.css?v=1.3'); }}">


	<script src="{{ URL::asset('assets/js/libs/modernizr-2.6.2.min.js'); }}"></script>
	<script data-require="jquery@*" data-semver="1.9.1" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.4.4/underscore-min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/eventable/1.0.0/eventable.min.js"></script>
	<script src="{{ URL::asset('assets/sirtrevorjs/sir-trevor.js'); }}"></script>


	@yield('css')

</head>

<body>

	@yield('content')

	@yield('fullwidth-footer')

	<div class="side-menu">

		<div class="logo">
			<a href="/"><img src="/assets/img/logo-text.png"/></a>
		</div>

		<ul class="navigation">

			<li><a href="/ads" class="ttip" data-tooltip="Premium Ads"><i class="icon-wallet icons"></i></a></li>

			<li class="fix-bottom"><a href="/logout" class="ttip" data-tooltip="Logout"><i class="icon-power icons"></i></a></li>

		</ul>

	</div>



	@include('includes.notification')

	@yield('scripts')

	<script>
	function schedule()
	{
		$( "div.date-picker" ).toggleClass( "date-picker-checked" )
	}
	</script>
	<script type="text/javascript">
		$('.alert').click(function() {
		    $('.alert').fadeOut();
		});
	</script>

	<script type="text/javascript">

		// When ready...
		window.addEventListener("load",function() {
			// Set a timeout...
			setTimeout(function(){
				// Hide the address bar!
				window.scrollTo(0, 1);
			}, 0);
		});

	</script>

	<script src="{{ URL::asset('assets/js/pikaday.js'); }}"></script>
	<script src="{{ URL::asset('assets/js/pikatime.js'); }}"></script>
    <script>

	    var startPicker = new Pikaday(
	    {
	        numberOfMonths: 1,
	        field: document.getElementById('startPicker'),
	        firstDay: 1,
	        onSelect: function() {
		        endPicker.setMinDate(this.getDate());
		    }
	    });

	    var endPicker = new Pikaday(
	    {
	        numberOfMonths: 1,
	        field: document.getElementById('endPicker'),
	        firstDay: 1,
	        onSelect: function() {
		        startPicker.setMaxDate(this.getDate());
		    }
	    });

		</script>

	<script src="{{ URL::asset('assets/js/moment.js') }}"></script>
	<script src="{{ URL::asset('assets/vue/vue.js') }}"></script>
	<script src="{{ URL::asset('assets/vue/vue-resource.js') }}"></script>
	<script src="{{ URL::asset('assets/vue/vue-moment.js') }}"></script>
	<script src="{{ URL::asset('assets/js/notes.js') }}"></script>



	<script src="{{ URL::asset('assets/js/gumby.min.js'); }}"></script>
	<script gumby-touch="assets/js/libs" src="{{ URL::asset('assets/js/libs/gumby.js'); }}"></script>
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


	<script src="{{ URL::asset('assets/alerts/sweetalert.min.js'); }}"></script>

	</body>
</html>
