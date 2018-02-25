@extends('layouts.master')

	@section ('content')

		<div class="row lineafter">

			<div class="six columns">

				<h2><i class="icon-plus icons"></i> New Premium Ad</h2>

			</div>

			<div class="six columns nav-pills">
				<!-- <div class="medium btn pill-left default"><a href="#">Pill Left</a></div> -->
				<div class="medium squared btn default"><a href="/ads">All Premium Ads</a></div>
				<!-- <div class="medium btn pill-right default"><a href="#">Pill Right</a></div> -->
			</div>

		</div>


		<div class="row">
			<div class="twelve columns wide-form">

				<form method="POST" action="/ads">
					<input type="text" name="business" placeholder="Business Name">
					<input type="text" name="headline" placeholder="Headline">
					<textarea name="copy" placeholder="Your Copy"></textarea>
					<input type="text" name="cta" placeholder="Call to action">
					<input type="text" name="link" placeholder="Link">
					<input type="text" name="image" placeholder="Image Path">
					<input type="text" name="logo" placeholder="Logo Path">

					<div class="row">
						<div class="four columns">
							<div class="row">
								<div class="one column">
									<input type="checkbox" value="1" name="homepage" class="check">
								</div>
								<div class="eleven columns">
									<p class="white">Show on Homepage</p>
								</div>
							</div>

							<div class="row">
								<div class="one column">
									<input type="checkbox" value="1" name="inside" class="check">
								</div>
								<div class="eleven columns">
									<p class="white">Show on Inside Pages</p>
								</div>
							</div>
						</div>
						<div class="eight columns schedule">
								<input type="checkbox" name="scheduled" value="1" onclick="schedule();">
								<p class="white">This is a scheduled event</p>
							<div class="row date-picker" id="date-picker">
								<div class="six columns">
									{{ Form::text('start_date', '', array( 'placeholder' => 'Start Date',  'class' => 'form-field', 'name' => 'start_time', 'id' => 'startPicker')) }}
								</div>
								<div class="six columns">
									{{ Form::text('end_date', '', array( 'placeholder' => 'End Date',  'class' => 'form-field', 'name' => 'end_time', 'id' => 'endPicker')) }}
								</div>
							</div>
						</div>
					</div>


					<input type="submit" value="Save Ad">

				</form>

			</div>
		</div>


	@stop
