@extends('pages.profile_page')

<x-titles.posts_title></x-titles.posts_title>

@section('content')

@if(session()->has('success-edit'))
<div 
style="margin-top: 30px;"
class="alert alert-success">
{{ session()->get('success-edit') }}
</div>
@endif


@if(session()->has('delete-post'))
<div 
style="margin-top: 30px;"
class="alert alert-danger">
{{ session()->get('delete-post') }}
</div>
@endif


@if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')


<div class="container">


@if (count($posts) > 0)

@foreach ($posts as $post)

              <div class="col-xs-12 col-md-3">
                  <div class="color-block-wrapper">
                      <div class="color-block color-block-lblue">
    
                              {{$post->title}}
                     
                          <div class="color-block-text">
                               {{$post->short_description}}
                          </div>
            
                          <img 
            style="border-radius: 10px;margin-top: 5px"
            height="140"
            width="100"
            
            @if ($post->picture == '/storage/images/no-picture')

            src="{{$post->random}}" 
                

            @else 

            src="{{$post->picture}}" 

            @endif

            alt="Not Available"
            title="Not Available">
        
                      </div>
                      
              <div class="color-block-bottom">

              <a href="{{route('post-index',$post->slug)}}" class="btn btn-transparent-lblue">Show this post
              </a>

              <a 
              style="margin-top: 10px" 
              href="{{route('posts.edit', $post->slug)}}" 
              class="btn btn-primary2">Edit this post
            </a>

              </div>
    

                  </div>
              </div>

@endforeach

@else 

<div class="dashboard-div">
    <h3>There are no posts right now at the moment.</h3>
</div>
    
@endif

@else 


@if(count($auth_user->posts) > 0)

@foreach ($auth_user->posts as $post)


<div class="col-xs-12 col-md-3">
    <div class="color-block-wrapper">
        <div class="color-block color-block-lblue">

                {{$post->title}}
       
            <div class="color-block-text">
                 {{$post->short_description}}
            </div>

            <img 
            style="border-radius: 10px;margin-top: 5px"
            height="140"
            width="100"
            
            @if ($post->picture == '/storage/images/no-picture')

            src="{{$post->random}}" 
                

            @else 

            src="{{$post->picture}}" 

            @endif

            alt="Not Available"
            title="Not Available">
          
        </div>
        
<div class="color-block-bottom">

<a href="{{route('post-index',$post->slug)}}" class="btn btn-transparent-lblue">Show this post
</a>

<a 
style="margin-top: 10px" 
href="{{route('posts.edit', $post->slug)}}" 
class="btn btn-primary2">Edit this post
</a>

</div>


    </div>
</div>
   

    @endforeach


@else

<div class="dashboard-div">
    <h3>You don't have any posts at the moment...</h3>
</div>

@endif

</div> 


@endif



@endsection




@section('pagination')

<div class="row">
    <center>{{$posts->links('pagination::bootstrap-4')}}</center>
</div> 
    
@endsection

