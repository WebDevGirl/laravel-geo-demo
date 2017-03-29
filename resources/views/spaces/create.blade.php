@extends('layouts.master')

@section('content')
	<div class="app-header">
      <div class="container">
        <h1 class="app-title">Create New Space</h1>
      </div>
    </div>

    @if (session('status'))
    <div class="alert alert-warning" role="alert">
      {{ session('status') }}
    </div>
    @endif

	<div class="col-sm-12 app-main">
        

        {!! Form::open(array('class' => 'form', 'method' => 'POST', 'route' => 'spaces-store')) !!}
            
        <div class="row">
          <div class="col-sm-12">
            <div class="row">
              <div class="col-sm-12">
                {{ Form::label('title', 'Title') }}
                {{ Form::input('text', 'title', '', ['class'=>'form-control'])}}
                <p class="help-block">{{ $errors->first('title') }}</p>
              </div>

              <div class="col-sm-12">
                {{ Form::label('geodata', 'Geo Data') }}
                {{ Form::input('text', 'geodata', '', ['id' => 'geodata', 'class'=>'form-control'])}}
                <p class="help-block">{{ $errors->first('geodata') }}</p>
              </div>
          </div>
        </div>

        <div class="form-footer clearfix">
          <div class="row">
            <div class="col-sm-12">
              <a href="{{ url('geofences') }}" class="btn btn-primary pull-left">Cancel</a>
              {{ Form::submit('Save', ['class'=>'btn btn-primary pull-right']) }}
            </div>
          </div>
        </div>
      </div>
      {!! Form::close() !!}

      <div class="row">
        <div class="col-sm-12">
          <h3>Map</h3>
          {!! $map['html'] !!}
        </div>
      </div>

     

	</div><!-- /.app-main -->

  {!! $map['js'] !!}
@endsection

