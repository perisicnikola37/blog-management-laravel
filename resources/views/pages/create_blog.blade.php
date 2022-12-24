<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Create Blog | Edwin's Blog</title>
        <link rel="icon" type="image/x-icon" href="https://media.istockphoto.com/photos/silhouette-of-profile-guy-in-shirt-with-white-button-in-aqua-menthe-picture-id1206439390?k=20&m=1206439390&s=170667a&w=0&h=wDX4xov95UOzjOgOkTqRurDiTepjhqAA7Q2iFofrO5c=" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <x-head.tinymce-config/>

    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">

                {{-- Component for navbar brand --}}
                <x-navbar_brand></x-navbar_brand>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    
                     {{-- Component for navbar menu --}}
                     <x-navbar_menu></x-navbar_menu>

                </div>
            </div>
        </nav>
        <!-- Page Header-->
        <header class="masthead" style="background-image: url({{'assets/img/home-bg.jpg'}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Edwin's Blog</h1>
                            <span class="subheading">by <a href="https://github.com/perisicnikola37" target="_blank">Nikola Perišić</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

 <div class="container"> 

<center>
    <h4>Create Blog</h4>
</center>

        <div class="row mt-4">

            <div class="col-sm-12">
                
        {!! Form::open(['method' => 'POST', 'action' => 'App\Http\Controllers\PostController@store', 'files' => true]) !!} 

        <div class="form-group">
            {!! Form::label('title', 'Title:', ['class' => 'mb-2']) !!}
            @error('title')
            <span style="color: red">*required</span>
            @enderror
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
       
            <br>

            {!! Form::label('content', 'Content:', ['class' => 'mb-2']) !!}
            @error('content')
            <span style="color: red">*required</span>
            @enderror
            {{   Form::textarea('My text', null, ['class'      => 'form-control',
                'rows'       => 1, 
                'name'       => 'content',
                'id'         => 'myeditorinstance',
            ]) }}

            <br>
    
            {!! Form::label('short_description', 'Short Description:', ['class' => 'mb-2']) !!}
            @error('short_description')
            <span style="color: red">*required</span>
            @enderror
            {!! Form::text('short_description', null, ['class' => 'form-control']) !!}
 
            <br>

            {!! Form::label('picture', 'Picture:', ['class' => 'mb-2']) !!}
            <br>
            {!! Form::file('picture', null, ['class' => 'form-control']) !!}

            <br><br>

            {!! Form::label('published_at', 'Published at:', ['class' => 'mb-2']) !!}
            {{ Form::date('published_at', \Carbon\Carbon::now()->format('Y-m-d'),['class' => 'form-control']) }}
            
        </div>

        <br>

        <div class="row align-right mt-2">
            <div class="form-group" style="margin-top: 20px">
                {!! Form::submit('Post', ['class' => 'btn btn-primary button-hover']) !!}
            </div> 

            {!! Form::close() !!}
        </div>
                   
            </div>
        </div>
        <br>      <br> 
        <!-- Footer-->
        <x-footer></x-footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
