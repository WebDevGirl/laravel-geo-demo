@extends('layouts.master')

@section('content')

	<div class="col-sm-8 app-main">
		<h1>Friend Feed</h1>
		@if(count($feed) == 0) 
			<div class="alert alert-warning" role="alert">
				No Broadcasts
			</div>
		@endif

		@foreach($feed as $broadcast)
			@include('partials.broadcast-space')
		@endforeach
	</div><!-- /.app-main -->

@include('partials.home-sidebar')

@endsection
