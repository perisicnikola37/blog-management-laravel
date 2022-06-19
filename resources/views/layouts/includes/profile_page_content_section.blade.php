@extends('pages.profile_page')

@section('content')

<div class="dashboard-div">
    <h3>Welcome back {{auth()->user()->name}}!</h3>
 </div>

 <div class="dashboard-div-second">
 <h5>Photo of the day:</h4>
 <img 
 style="border-radius: 10px"
 width="450"
 src="https://source.unsplash.com/random" 
 alt="">
</div>
    
@endsection