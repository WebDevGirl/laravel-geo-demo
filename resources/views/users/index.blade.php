@extends('layouts.master')

@section('content')
	<div class="app-header">
		<h2>User List</h2>
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
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				</thead>
				<tbody>
				@foreach($users as $index=>$user)
				<tr>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						<a class="btn btn-sm btn-info" href="{{ route('profile',['id' => $user->id]) }}" role="button">View</a>
						@if (in_array($user->id, $following))
							<a class="btn btn-sm btn-warning" href="{{ route('unfollow',['id' => $user->id]) }}" role="button">Unfollow</a>
						@else
							<a class="btn btn-sm btn-success" href="{{ route('follow',['id' => $user->id]) }}" role="button">Follow</a>
						@endif
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
			</div>
		
	</div><!-- /.app-main -->

@endsection
