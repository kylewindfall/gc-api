@extends('layouts.master')

	@section ('content')

		<div class="row lineafter">

			<div class="six columns">

				<h2><i class="icon-plus icons"></i> Viewing Ad for {{ $ad->business }}</h2>

			</div>

			<div class="six columns nav-pills">
				<div class="medium btn pill-left default"><a href="/ads/{{$ad->id}}/edit">Edit Ad</a></div>
				<div class="medium squared btn default"><a href="/ads">All Premium Ads</a></div>
				@if($ad->approved)

					@if($ad->active == '1')
						<div class="medium btn pill-right default"><a href="/ads/{{ $ad->id }}/deactivate">Deactivate</a></div>
					@else
						<div class="medium btn pill-right default"><a href="/ads/{{ $ad->id }}/activate">Activate</a></div>
					@endif

				@endif
			</div>

		</div>


		<div class="row page-wrap">
			<div class="twelve columns wide-form">

				<h1>{{ $ad->business }}</h1>

				<div class="row">
					<div class="ten columns">
						<h2>{{ $ad->headline }}</h2>
					</div>

					<div class="two columns">
						@if( $ad->active == 1 )
							<p class="good">Active</p>
						@else
							<p class="bad">Inactive</p>
						@endif
					</div>
				</div>

				<p>{{ $ad->copy }}</p>

				<p><strong>CTA:</strong></p>

				<p>{{ $ad->cta }}</p>


				<p><strong>Link:</strong></p>

				<p>{{ $ad->link }} <a href="{{ $ad->link }}" target="_blank">View it</a></p>

				<p><strong>Logo:</strong></p>

				@if($ad->logo)
					<img src="{{ $ad->logo}}">
				@else
					<p>No Logo</p>
				@endif

				<p><strong>Image:</strong></p>

				@if($ad->image)
					<img src="{{ $ad->image}}">
				@else
					<p>No Image</p>
				@endif

				@if( $ad->homepage == 1 )
					<p>Shows on homepage <a href="http://glaciermt.com?ad={{ $ad->id}}" target="_blank">View it</a></p>
				@endif

				@if( $ad->inside == 1 )
					<p>Shows on secondary pages <a href="http://glaciermt.com/do.php?ad={{ $ad->id}}" target="_blank">View it</a></p>
				@endif
				@if( $ad->scheduled == 1 )
					<p>This ad is scheduled from {{$start}}  until {{$end}}</p>
				@endif

				<p>
					<strong>Impressions:</strong> {{ $ad->impressions }}<br>
					<strong>Clicks:</strong> {{ $ad->clicks }}
				</p>

			</div>
		</div>


	@stop
