@extends('pages.profile_page')

<x-titles.users_title></x-titles.users_title>

@section('content')

<div 
class="container" 
style="margin-top: 130px">





<form action="/admin/delete/media" method="POST" class="form-inline">

    {{ csrf_field() }}

    {{method_field('delete')}}

<div class="form-group">
    <select name="checkBoxArray" id="" class="form-control">
        <option value="">Delete</option>
    </select>
</div>

<div class="form-group">
    <input type="submit" name="delete_all" class="btn btn-primary">
</div>

</form>




    <table class="table">
        <thead>
            <tr class="text-primary" >
                <th><input type="checkbox" id="options"></th>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Email</th>
                <th style="text-align: center">Picture</th>
                <th style="text-align: center">Delete</th>
            </tr>
        </thead>
        
        <tbody class="align-center">
    
            @foreach ($users as $user)
    
            <tr>
                <td><input class="checkBoxes" type="checkbox" name="checkBoxArray[]" value="{{$user->id}}"></td>
                <td style="text-align: center">{{$user->id}}</td>
                <td style="text-align: center">
                <a 
                href="{{route('users.show2', $user->id)}}" 
                class="text-danger" 
                style="text-decoration: none">{{$user->name}}</a>
                </td>
                <td style="text-align: center">{{$user->email}}</td>

                <td style="text-align: center">
                

                    <img
                    height="70"
                    src="{{"https://thumbs.dreamstime.com/b/image-unavailable-icon-simple-illustration-vector-stock-174927559.jpg"}}" 
                    alt="e">
         
                </td>
    
                <td style="text-align: center">
                    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\UserController@destroy', $user->id]]) !!}
    
                    <div 
                    style="margin-top: 15px"
                    class="text-primary">
       
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
       
                    </div>
                    
                    {!! Form::close() !!}
                </td>
    
    
            </tr>

    
            @endforeach
    
    

        </tbody>

    </table>
    {{$users->links('pagination::bootstrap-4')}}
</div>

<script>

    $(document).ready(function () {

        $('#options').click(function () {

            if (this.checked) {
                
                $('.checkBoxes').each(function () {
                    
                    this.checked = true;

                });

            } else{

                $('.checkBoxes').each(function () {
                    
                    this.checked = false;

                });
               
            }

        });

    });

</script>

@endsection