<ul class="navbar-nav ms-auto py-4 py-lg-0">

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="{{route('homepage')}}">Home</a>
    </li>

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="{{route('about-me')}}">About</a>
    </li>

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="{{route('contact-me')}}">Contact</a>
    </li>

    @if (!auth()->user())

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="/login">Log In</a>
    </li>

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="/register">Register</a>
    </li>
        
    @else
        
    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="{{route('profile-index')}}">Profile</a>
    </li>

    <li class="nav-item">
        <a 
        class="nav-link px-lg-3 py-3 py-lg-4" 
        href="/logout">Logout</a>
    </li>

    @endif

    
  @if (Auth::check())



  <li class="nav-item">
      <a 
      class="nav-link px-lg-3 py-3 py-lg-4" 
      href="{{route('createblog')}}">Create Blog</a>
  </li>


    
  @endif
        


</ul>