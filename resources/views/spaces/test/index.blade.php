@extends('layouts.master')

@section('content')
    <div class="app-header">
        <div class="container">
        <h1 class="app-title">Location Test</h1>
        </div>
    </div>

    <div class="col-sm-12 app-main">
        @include('spaces.test.list')
    </div><!-- /.app-main -->
@endsection

