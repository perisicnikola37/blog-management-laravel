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
                <th class="text-center" width="80px">@sortablelink('id')</th>
                <th class="text-center">@sortablelink('name')</th>
                <th class="text-center">@sortablelink('email')</th>

                @if (auth()->user()->admin == 'true' || auth()->user()->admin == 'TRUE')
                <th class="text-center"> <input type="checkbox" id="checkAll"></th>                    
                @endif

            </tr>
        </thead>
        <tbody>
            <?php
            $i=1;
            foreach ($users as $key => $value) {
                $id = $users[$key]->id;
                $name = $users[$key]->name;
                $email = $users[$key]->email;
                ?>
                <tr>
                    <td class="text-center">{{$id}}</td>
                    <td class="text-center"><a href="{{route('custom.show', $user)}}">{{$name}}</a></td>
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
            class="btn btn-primary button-hover" 
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

















