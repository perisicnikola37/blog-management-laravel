@extends('pages.profile_page')


@section('content')
    
 </ul>



<div id="box-izmijeni-profil">
    @if(session()->has('success-profile'))
    <div class="alert alert-success">
    {{ session()->get('success-profile') }}
    </div>
@endif

    <div class="container"> 
  
        {!! Form::model($user, ['method' => 'PATCH', 'action' =>    ['App\Http\Controllers\UserController@update', $user->id], 'files' => true]) !!}
 
        <div class="col-sm-3">
 
        <img 
        style="border-radius: 5px 5px"
        height="150"
        src="{{$user->picture ? $user->picture : 'https://thumbs.dreamstime.com/b/    no-image-available-icon-flat-vector-no-image-available-icon-flat-vector-illustration-132482953.jpg'}}" alt="">
 




        </div>
 
        <div class="col-sm-3">
 
         <div class="form-group">
 
             {!! Form::label('name', 'Name:', ['class' => 'mb-2']) !!}
             {!! Form::text('name', null, ['class' => 'form-control']) !!}
             
         </div>
 
         <div class="form-group">
 
             {!! Form::label('email', 'Email address:', ['class' => 'mb-2']) !!}
             {!! Form::text('email', null, ['class' => 'form-control']) !!}
 
         </div>
 
        </div>
 
        <div class="col-sm-3">
 


         <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::password('password',['class' => 'form-control']) !!}
        </div>


        {!! Form::label('picture', 'Picture:', ['class' => 'mb-2']) !!}
        {!! Form::file('picture', null, ['class' => 'form-control']) !!}


    
        </div>
     
 
         <div class="col-sm-3">
 
            <div class="form-group">
 
    
            </div>

             <div class="form-group" style="margin-top: 20px">
                 {!! Form::submit('Save', ['class' => 'btn btn-primary button-hover']) !!}
             </div> 
 
         </div>
         
         {!! Form::close() !!}
 
 </div>
    
</div>


@endsection