<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/master.css">
  </head>
  <body>
    <header>
      <nav>
        <a href="/home">Home</a>
        <a href="/create">Create</a>
      </nav>
    </header>
    <br>
    @yield('content')
    <br>
    <footer>
      <p>
        &copy; Demak Alfredo
      </p>
    </footer>
  </body>
</html>
