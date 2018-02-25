@extends('layouts.guest')
	
	@section ('content')

			<style>
				body {padding-top: 0;}
			</style>

			<div class="login-form">
			<div class="login-logo">
				<img src="/assets/img/logo-lg.png"/>
			</div>

				{!! Form::open(array('route' => 'sessions.store')) !!} 

						{!! Form::text('username', Input::old('username'), array('class' => 'lined', 'placeholder' => 'Username')) !!}

						{!! Form::password('password', array('class' => 'lined', 'placeholder' => 'Password')) !!}

					{!! Form::submit('Login', ['class' => 'big-submit']) !!}
				
				{!! Form::close() !!} 

			</div>


        <script type="text/javascript">

        	$(function() {
				$( ".login-form" ).fadeIn( "slow" );
			});

        </script>

	@stop
