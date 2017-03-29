@extends('layouts.master')

@section('content')
	<div class="app-header">
		<h2>Spaces List <a class="btn btn-sm btn-info" href="{{ route('space-create') }}">Add New</a></h2>
  	</div>

	@if (session('status'))
	<div class="alert alert-warning" role="alert">
		{{ session('status') }}
	</div>
	@endif

	<div class="col-sm-12 app-main">
	<div class="table-responsive">
			<table class="table table-striped">
				<thead>
				<tr>
					<th>Title</th>
					<th>User</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($spaces as $index=>$space)
				<tr>
					<td>{{$space->title}}</td>
					<td>{{$space->user->name}}</td>
					<td>
						<a class="btn btn-sm btn-info" href="{{ route('space',['id' => $space->id]) }}" role="button">View</a>
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
			</div>
		
	</div><!-- /.app-main -->

@endsection
