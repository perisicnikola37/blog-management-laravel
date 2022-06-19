<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Contact me | Edwin's Blog</title>
        <link rel="icon" type="image/x-icon" href="https://media.istockphoto.com/photos/silhouette-of-profile-guy-in-shirt-with-white-button-in-aqua-menthe-picture-id1206439390?k=20&m=1206439390&s=170667a&w=0&h=wDX4xov95UOzjOgOkTqRurDiTepjhqAA7Q2iFofrO5c=" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset('css/util.css')}}">
     	<link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}">
        

        {{-- TinyMCE --}}
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
        <header class="masthead" style="background-image: url('assets/img/contact-bg-2.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="page-heading">
                            <h1>Contact Me</h1>
                            <span class="subheading">Have questions? I have answers.</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">

                        <center>
                            <p>
                                Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!
                            </p>
                        </center>

                        <div class="my-5">
                    

  <center>
    
    <form action="{{ route('send.email') }}" class="contact100-form validate-form" method="post">
        @csrf

 

            @if(session()->has('message'))
               <div class="alert alert-success">
               {{ session()->get('message') }}
               </div>
            @endif

<div class="wrap-input100 validate-input" data-validate = "Name is required">
<input class="input100" type="text" name="name" placeholder="Name">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-user" aria-hidden="true"></i>
            </span>
       
        </div>



<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
<input class="input100" type="text" name="email" placeholder="Email address">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
</span>
            </div>
            <div class="wrap-input100 validate-input" data-validate = "Subject is required">
<input class="input100" type="text" name="subject" placeholder="Subject">
<span class="focus-input100"></span>
<span class="symbol-input100">
<i class="fa fa-envelope" aria-hidden="true"></i>
                </span>
               
            </div>


<div class="wrap-input100 validate-input" data-validate = "Message is required">
    
<textarea class="input100" name="content" placeholder="Message"></textarea>
        <span class="focus-input100"></span>
        </div>

@if (count($errors) > 0)

<div id="error-div">
@error('name')
<span>{{$message}}</span>
@enderror
<br>
@error('email')
<span>{{$message}}</span>
@enderror
<br>
@error('subject')
<span>{{$message}}</span>
@enderror
<br>
@error('content')
<span>{{$message}}</span>
@enderror
</div>
    
@endif

<div class="container-contact100-form-btn">
<button type="submit" class="contact100-form-btn">
Send
</button>
</div>
</form>
</div>
</div>
</div>
  </center>


<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/tilt/tilt.jquery.min.js"></script>
<script >
$('.js-tilt').tilt({
    scale: 1.1
})
</script>
<!--===============================================================================================-->
<script src="{{asset('js/main.js')}}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-23581568-13');
</script>


                        </div>
                    </div>
                </div>
            </div>
        </main>

        <!-- Footer-->
        <x-footer></x-footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
