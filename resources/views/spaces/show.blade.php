@extends('layouts.master')

@section('content')
	<div class="app-header">
      <div class="container">
        <h1 class="app-title">{{ $space->title }}</h1>
        <p class="lead app-description">By {{ $space->user->name }}</p>
      </div>
    </div>

    @if (session('status'))
    <div class="alert alert-warning" role="alert">
      {{ session('status') }}
    </div>
    @endif

	<div class="col-sm-12 app-main">
   {!! $map['html'] !!}
	</div><!-- /.app-main -->

  {!! $map['js'] !!}
@endsection

