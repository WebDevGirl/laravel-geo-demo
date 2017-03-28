@extends('layouts.master')

@section('content')
    <div class="app-header">
        <div class="container">
        <h1 class="app-title">Location Test</h1>
        </div>
    </div>

    <div class="col-sm-12 app-main">
        @include('spaces.test.list')
        
        @if(count($spaces)) 
            <h3>Matches Spaces:</h3>
            <ul>
                @foreach($spaces as $space) 
                <li>{{$space->title}}</li>
                @endforeach 
            </ul>
        @endif
        
        {!! $map['html'] !!}
    </div><!-- /.app-main -->

    {!! $map['js'] !!}
@endsection

