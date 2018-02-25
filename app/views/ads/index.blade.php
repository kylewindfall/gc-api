@extends('layouts.master')

	@section ('content')


			<div class="row lineafter">

				<div class="six columns">

					<h2><i class="icon-magic-wand icons"></i> Manage Premium Ads</h2>

				</div>

				<div class="six columns nav-pills">
					<!-- <div class="medium btn pill-left default"><a href="#">Pill Left</a></div> -->
					<div class="medium squared btn default"><a href="/ads/create">New Premium Ad</a></div>
					<div class="medium squared btn default"><a href="/archived">Archived Ads</a></div>
					<!-- <div class="medium btn pill-right default"><a href="#">Pill Right</a></div> -->
				</div>

			</div>

			<div class="row">
				<div class="twelve columns">
					<h2>Active Ads</h2>
				</div>
			</div>
			@include('includes.ads-header')
			@foreach($active as $ad)
				@include('includes.ads')
			@endforeach

			<div class="row">
				<div class="twelve columns">
					<h2>Inactive Ads</h2>
				</div>
			</div>
			@include('includes.ads-header')
			@foreach($inactive as $ad)
				@include('includes.ads')
			@endforeach

	@stop
