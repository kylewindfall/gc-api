@extends('layouts.master')

	@section ('content')


			<div class="row">

				<div class="twelve columns lineafter">

					<h2 class="text-center"><i class="icon-wallet icons"></i> Manage Premium Ads</h2>

				</div>

			</div>


			<div class="row">

				<a href="/ads/create" class="six columns bigButton iconned">

					<h3>
						<div>
							<i class="icon-plus icons"></i>
						</div>

						New Ad
					</h3>

				</a>

				<a href="/ads" class="six columns bigButton iconned">

					<h3>
						<div>
							<i class="icon-list icons"></i>
						</div>

						All Ads
					</h3>

				</a>

			</div>

	@stop
