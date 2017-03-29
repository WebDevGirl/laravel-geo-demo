@extends('layouts.master')

@section('content')

	<div class="col-sm-8 app-main">
		<h1>Friend Feed</h1>

			<div class="alert alert-warning" role="alert">
				No Broadcasts
			</div>


		@include('partials.broadcast-space')
		@include('partials.broadcast-space')
		@include('partials.broadcast-space')
		
	</div><!-- /.app-main -->

@include('partials.home-sidebar')

@endsection
