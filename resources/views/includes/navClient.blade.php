<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Clients</a>
    </div>

    <ul class="nav navbar-nav">
      <li class="active"><a href="{{route ('addClient')}}">Add</a></li>
      <li><a href="{{route ('clients')}}">Clients</a></li>
      <li><a href="{{route ('trashClient')}}">trashed</a></li>
      @yield('menu')
      @stack('submenu')
    </ul> 
    <ul class="nav navbar-nav navbar-right">
    <li><a href="{{ LaravelLocalization::getLocalizedURL('en')}}">English</a></li>
    <li><a href="{{ LaravelLocalization::getLocalizedURL('ar')}}">العربية</a></li>
    </ul> 
  </div>
</nav>
