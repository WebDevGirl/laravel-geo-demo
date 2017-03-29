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
				@foreach($broadcasts as $broadcast) 
					@include('partials.broadcast-space')
				@endforeach
			</div>
			<div class="col-md-4">
				<h4>Spaces</h4>
				@foreach($spaces as $space) 
					<a href="{{ route('space', ['id'=>$space->id])}}">{{ $space->title }}</a><br>
				@endforeach
			</div>
		</div>
	</div><!-- /.app-main -->
@endsection
