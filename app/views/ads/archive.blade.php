@extends('layouts.master')

	@section ('content')


			<div class="row lineafter">

				<div class="six columns">

					<h2><i class="icon-magic-wand icons"></i> Archived Premium Ads</h2>

				</div>

				<div class="six columns nav-pills">
					<!-- <div class="medium btn pill-left default"><a href="#">Pill Left</a></div> -->
					<div class="medium squared btn default"><a href="/ads">All Premium Ads</a></div>
					<!-- <div class="medium btn pill-right default"><a href="#">Pill Right</a></div> -->
				</div>

			</div>

			@include('includes.ads-header')
			@foreach($ads as $ad)
				@include('includes.ads')
			@endforeach

	@stop
