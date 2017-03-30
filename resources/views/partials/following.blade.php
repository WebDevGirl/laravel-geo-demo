<h4>Following</h4>
@if(isset($following) && count($following))
<ol class="list-unstyled small">
	@foreach($following as $user)
	  <li><a href="{{route('profile', ['id' => $user->id])}}">
	      {{ $user->name }}
	      <span class="badge badge-default badge-pill ml-2" id='following-list-alerts-{{$user->id}}'>0</span>
	  </a></li>
	@endforeach
@else 
	<div class="alert alert-warning" role="alert">
	Not following any user.
	</div>
@endif
</ol>