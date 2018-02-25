@extends('layouts.master')

	@section ('content')

		<div class="row lineafter">

			<div class="six columns">

				<h2><i class="icon-plus icons"></i> Edit Ad for {{ $ad->business }}</h2>

			</div>

			<div class="six columns nav-pills">
				@if($ad->approved)

					@if($ad->active == '1')
						<div class="medium btn pill-left default""><a href="/ads/{{ $ad->id }}/deactivate">Deactivate</a></div>
					@else
						<div class="medium btn pill-left default""><a href="/ads/{{ $ad->id }}/activate">Activate</a></div>
					@endif

				@endif

				<div class="medium squared btn default"><a href="/ads">All Premium Ads</a></div>

				@if($ad->archive == '1')
					<div class="medium btn pill-right default"><a href="/ads/{{ $ad->id }}/restore">Restore</a></div>
				@else
					<div class="medium btn pill-right default"><a href="/ads/{{ $ad->id }}/archive">Archive</a></div>
				@endif
			</div>

		</div>


		<div class="row">
			<div class="twelve columns wide-form">

				<form method="PUT" action="/ads/{{ $ad->id }}/update">
					<input type="text" name="business" placeholder="Business Name" value="{{ $ad->business }}">
					<input type="text" name="headline" placeholder="Headline" value="{{ $ad->headline }}">
					<textarea name="copy" placeholder="Your Copy">{{ $ad->copy }}</textarea>
					<input type="text" name="cta" placeholder="Call to action" value="{{ $ad->cta }}">
					<input type="text" name="link" placeholder="Link" value="{{ $ad->link }}">
					<input type="text" name="image" placeholder="Image Path" value="{{ $ad->image }}">
					<input type="text" name="logo" placeholder="Logo Path" value="{{ $ad->logo }}">


					<div class="row">
						<div class="four columns">
							<div class="row">
								<div class="one column">
									<input type="checkbox" class="check" value="1" name="homepage" @if( $ad->homepage == 1 )checked="checked"@endif>
								</div>
								<div class="eleven columns">
									<p class="white">Show on Homepage</p>
								</div>
							</div>

							<div class="row">
								<div class="one column">
									<input type="checkbox" class="check" value="1" name="inside" @if( $ad->inside == 1 )checked="checked"@endif>
								</div>
								<div class="eleven columns">
									<p class="white">Show on Inside Pages</p>
								</div>
							</div>
						</div>
						<div class="eight columns schedule">
									<input type="checkbox" name="scheduled" value="1" onclick="schedule();" @if( $ad->scheduled == 1 )checked="checked"@endif>
									<p class="white">This is a scheduled event</p>
								<div @if( $ad->scheduled == 1) class="row date-picker-checked" @else class="row date-picker" @endif id="date-picker">
									<div class="six columns">
										<?php echo Form::text('start_date', $start, array( 'placeholder' => $start,  'class' => 'form-field', 'name' => 'start_time', 'id' => 'startPicker')) ?>
									</div>
									<div class="six columns">
										<?php echo Form::text('start_date', $end, array( 'placeholder' => $end,  'class' => 'form-field', 'name' => 'end_time', 'id' => 'endPicker')) ?>
									</div>
								</div>
						</div>
					</div>


					<input type="submit" value="Save Ad">

				</form>

			</div>
		</div>


	@stop
