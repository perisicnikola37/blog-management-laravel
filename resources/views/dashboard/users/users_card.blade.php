@extends('pages.profile_page')

@section('content')

<div class="container">
<div class="row">

    <div class="cardw3">

        <img 
        style="width:100%"
        src="{{$user->picture ? $user->picture : "https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg"}}" 
        alt="User avatar"
        title="User avatar - {{$user->name}}">
        
        <h1>{{$user->name}}</h1>
        <p class="title">{{$user->username}}</p>
        <a style="color: #000" href="mailto: {{$user->email}}">{{$user->email}}</a>
        <p>

          <button class="buttonw3">
            <a href="{{route('user.settings')}}">Edit profile</a>
          </button>
        </p>
        
      </div>

</div>
</div>

    
@endsection