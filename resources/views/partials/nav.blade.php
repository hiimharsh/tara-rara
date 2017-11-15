<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand">Laravel Basics</a>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active">
          <a href="{{ route('blogs.index') }}">Blogs</a>
        </li>
        <li>
          <a href="{{ route('blogs.create') }}">Create</a>
        </li>
      </ul>

      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
          <li><a>Welcome {{ Auth::user()->name }}</a></li>
          <li><a href="{{ route('logout') }}">Logout</a></li>
        @else
          <li><a href="{{ route('register') }}">Sign up</a></li>
          <li><a href="{{ route('login') }}">Login</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>