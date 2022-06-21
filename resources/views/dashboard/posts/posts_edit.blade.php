@extends('pages.profile_page')

@section('content')



    <div 
    class="dashboard-div" 
    style="margin-left: 0;margin-bottom: 20px">
        <h3>Edit Post: {{$post->title}}</h3>
    </div>




    {!! Form::model($post, ['method' => 'PATCH', 'action' => ['App\Http\Controllers\PostController@update', $post->id], 'files' => true]) !!}


    <div class="form-group" style="width: 350px">
        {!! Form::label('title', 'Title:', ['class' => 'mb-2']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group" style="width: 350px">
        {!! Form::label('short_description', 'Short Description:', ['class' => 'mb-2']) !!}
        {!! Form::text('short_description', null, ['class' => 'form-control']) !!}
    </div>

    
    <div style="width: 40%;margin-bottom: 30px">
        {!! Form::label('content', 'Content:') !!}
    {{   Form::textarea('content', null, ['class' => 'form-control',
        'rows'       => 1, 
        'name'       => 'content',
        'id'         => 'myeditorinstance',
    ]) }}
    </div>
</div>

<br><br><br><br>

    <div class="form-group" style="width: 350px">
        {!! Form::label('picture', 'Picture:', ['class' => 'mb-2']) !!}
        {!! Form::file('picture', null, ['class' => 'form-control']) !!}
    </div>
    

    {!! Form::submit('Save', ['class' => 'btn btn-primary button-hover']) !!} 


    {!! Form::close() !!}

        <div style="margin-top: 20px;margin-bottom: 20px">
            {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\PostController@destroy', $post->id]]) !!}

        <div 
        style="margin-top: 15px"
        class="text-primary">

           {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

  
        </div>
        
        {!! Form::close() !!}

        </div>

      


    
@endsection