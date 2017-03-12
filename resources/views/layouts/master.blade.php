
<!DOCTYPE html>
<html class="{{ Request::path() }}" lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('favicon.ico')}}">

    <title>{{ config('app.name', 'Title') }}</title>

    <!-- Bootstrap core CSS -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>

  <body>
    @include('layouts.nav')

    <div class="container">

      @yield('content')

    </div><!-- /.container -->

    @include('layouts.footer')
   

  </body>
</html>
