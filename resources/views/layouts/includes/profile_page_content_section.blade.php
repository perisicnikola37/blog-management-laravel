@extends('pages.profile_page')

@section('content')

<style>
 
 @media only screen and (max-width: 1200px) {  
    .potd {
    width: 250px;
    height: auto;
  }
}



</style>

<div class="dashboard-div">
    <h3>Welcome back {{auth()->user()->name}}!</h3>
 </div>

 <div class="dashboard-div-second">
 <h5>Photo of the day:</h4>

 <img 
 class="potd"
 style="border-radius: 10px"
 width="450"
 height="300"
 src="https://source.unsplash.com/random" 
 alt="">
 
</div>
    
@endsection