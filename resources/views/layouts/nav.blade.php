<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar-brand" href="#">
  	<img src='{{ asset('images/logo.png')}}' width="30" height="30" class="d-inline-block align-top" alt="Logo"> 
  	{{ config('app.name', 'Title') }}
  </a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home</a>
      </li>
    </ul>
  </div>
</nav>