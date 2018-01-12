<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Todo List</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  <div class="contanier">
    <div class="navbar-header">
        <button type="button" name="button" class="navbar-toggle collapse" data-toggle="#navbar">
          <span class="sr-sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">SampleApp</a>
    </div>
    <div id="navbar" href="#" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="{{Request::is('/todo') ? 'active' : ''}}"><a href="{{route('todo.index')}}">Home</a></li>
        <li class="{{Request::is('create') ? 'active' : ''}}"><a href="{{route('todo.create')}}">Create Todo</a></li>
        <li class="{{Request::is('contact') ? 'active' : ''}}"><a href="/todo.">Contact</a></li>
      </ul>
    </div>
  </div>
  </nav>

 <div class="container">
   @include('include.messages')
   @yield('content')
 </div>
 <footer id="footer" class="text-center">
   <p>Copyright &copy; 2018 <a href="https://github.com/EmadBrown" target="_blank">Emad Albouni</a></p>
 </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
  </body>
</html>
