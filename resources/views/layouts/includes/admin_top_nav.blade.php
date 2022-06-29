<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    
    <a style="margin-left: 5px;" class="navbar-brand" href="{{route('homepage')}}">
        <img height="30" src="https://media.istockphoto.com/photos/silhouette-of-profile-guy-in-shirt-with-white-button-in-aqua-menthe-picture-id1206439390?k=20&m=1206439390&s=170667a&w=0&h=wDX4xov95UOzjOgOkTqRurDiTepjhqAA7Q2iFofrO5c=" alt="">
    </a>
    
</div>
<!-- /.navbar-header -->



{{-- TOP NAVIGATION --}}
<ul class="nav navbar-top-links navbar-right">


    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            
            <i class="fa fa-user fa-fw"></i>

            <span> {{Auth::user()->name}}</span>

            
            <i class="fa fa-caret-down ml-5"></i>
            
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li><a href="{{route('users.show', $user->id)}}"><i class="fa fa-user fa-fw"></i> Profile</a>
            </li>
            <li><a href="{{route('user.settings')}}"><i class="fa fa-gear fa-fw"></i> Settings</a>
            </li>
            <li class="divider"></li>
            <li><a href="{{url('/logout')}}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
            </li>
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->


    
</ul>
