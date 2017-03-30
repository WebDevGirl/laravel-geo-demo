<div class="panel panel-default panel-broadcast-space">
  <div class="panel-heading">{{$broadcast->space->title}}</div>
  <div class="panel-body">
    <p class="broadcast-space-meta"><a href="#">{{$broadcast->created_at->diffForHumans() }}</a> by <a href="{{route('profile', ['id' => $broadcast->user->id])}}">{{$broadcast->user->name}}</a></p>
  </div>
</div> <!-- /.broadcast-space -->
