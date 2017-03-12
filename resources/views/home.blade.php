@extends('layouts.master')

@section('content')
<div class="container">

      <div class="row">

        <div class="col-sm-8 app-main">

          <div class="broadcast-space">
            <h4 class="broadcast-space-title">Space Location Name</h2>
            <p class="broadcast-space-meta">January 1, 2014 @ 4:40pm by <a href="#">User</a></p>
          </div><!-- /.broadcast-space -->

          <div class="broadcast-space">
            <h4 class="broadcast-space-title">Space Location Name</h2>
            <p class="broadcast-space-meta">January 1, 2014 by <a href="#">User</a></p>
          </div><!-- /.broadcast-space -->

        </div><!-- /.app-main -->

        @include('partials.home-sidebar')

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection
