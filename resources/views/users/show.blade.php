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
		  @include('partials.broadcast-space')
	    @include('partials.broadcast-space')
	</div><!-- /.app-main -->

@endsection
