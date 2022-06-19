@extends('pages.profile_page')

<x-titles.users_title></x-titles.users_title>
@section('content')



<div class="dashboard-div-form container">

@if(session()->has('success-user-deleted'))
<div class="alert alert-success">
{{ session()->get('success-user-deleted') }}
</div>
@endif

<form method="post" action="{{url('multipleusersdelete')}}">
    {{ csrf_field() }}
    <br>
   
    <table class="table-bordered table-striped" width="50%">
        <thead>
            
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>

                @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                <th class="text-center"> <input type="checkbox" id="checkAll"></th>                    
                @endif

            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            foreach ($users as $key => $value) {
                $name = $users[$key]->name;
                $email = $users[$key]->email;
                ?>
                <tr>
                    <td class="text-center">{{$i}}</td>
                    <td class="text-center"><a href="{{route('users.show2', $user->id)}}">{{$name}}</a></td>
                    <td class="text-center">{{$email}}</td>
                    
                    @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                    <td class="text-center"><input name='id[]' type="checkbox" id="checkItem" 
                    value="<?php echo $users[$key]->id; ?>">                        
                    @endif


                    </tr>
                    <?php $i++; }?>
                </tbody>
            </table>
            <br>
            @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
            <input 
            class="btn btn-success" 
            type="submit" 
            name="submit" 
            value="Delete"/>              
            @endif
        </form>

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </script>
    <script language="javascript">
        $("#checkAll").click(function () {
            $('input:checkbox').not(this).prop('checked', this.checked);
        });
    </script>



</div>


    
@endsection



















{{-- @section('content')




<div 
class="container" 
style="margin-top: 130px">






    <table class="table">
        <thead>
            <tr class="text-primary" >
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
    
                @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                <td style="text-align: center">
                    {!! Form::open(['method' => 'DELETE', 'action' => ['App\Http\Controllers\UserController@destroy', $user->id]]) !!}
    
                    <div 
                    style="margin-top: 15px"
                    class="text-primary">
       
                       {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
       
                    </div>
                    
                    {!! Form::close() !!}
                </td>

                @else
                <td><small>No permission </small><i class="fas fa-hand-paper"></i></td>
                @endif
    
    
            </tr>

    
            @endforeach
    
    

        </tbody>

    </table>
    {{$users->links('pagination::bootstrap-4')}}
</div> 


@endsection --}}