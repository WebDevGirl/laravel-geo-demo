<nav class="navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <a class="navbar-brand" href="{{ route('home') }}"">
  	<img src='{{ asset('images/logo.png')}}' width="30" height="30" class="d-inline-block align-top" alt="Logo"> 
  	{{ config('app.name', 'Title') }}
  </a>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('home') }}"">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('users') }}"">Users</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('spaces') }}"">Spaces</a>
      </li>

    </ul>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
        @if (Auth::guest())
         <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>

        @else
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <ul class="dropdown-menu" role="menu">
              <li>
                  <a href="{{ route('logout') }}"
                      onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                      Logout
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
              </li>
          </ul>
      </li>
        @endif
    </ul>
  </div>
</nav>