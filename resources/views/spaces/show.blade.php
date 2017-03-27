@extends('layouts.master')

@section('content')
	<div class="app-header">
      <div class="container">
        <h1 class="app-title">{{ $space->title }}</h1>
      </div>
    </div>

    @if (session('status'))
    <div class="alert alert-warning" role="alert">
      {{ session('status') }}
    </div>
    @endif

	<div class="col-sm-12 app-main">
    @foreach($markers as $marker) 
      {{$marker->long}}<br>
    @endforeach
	</div><!-- /.app-main -->

@endsection
