@extends('layouts.master')

@section('content')
	<div class="app-header">
		<div class="container">
			<h1 class="app-title">{{ $user->name }}</h1>
			<p class="lead app-description">{{ $user->tagline }}</p>
		</div>
	</div>

	@if (session('status'))
		<div class="alert alert-warning" role="alert">
			{{ session('status') }}
		</div>
	@endif

	<div class="col-sm-12 app-main">

		<div class="row">
			<div class="col-md-8">
				<h3>Broadcast Feed</h3>
					@include('partials.broadcast-space')
					@include('partials.broadcast-space')
					@include('partials.broadcast-space')
					@include('partials.broadcast-space')
					@include('partials.broadcast-space')
			</div>
			<div class="col-md-4">
				<h4>Spaces</h4>				
				<a href="#">Space Title</a><br>				
			</div>
		</div>
	</div><!-- /.app-main -->
@endsection
