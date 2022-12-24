<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="#" />
        <meta name="author" content="Nikola Perišić" />
        <title>Edwin's Blog</title>
        <link rel="icon" type="image/x-icon" href="https://media.istockphoto.com/photos/silhouette-of-profile-guy-in-shirt-with-white-button-in-aqua-menthe-picture-id1206439390?k=20&m=1206439390&s=170667a&w=0&h=wDX4xov95UOzjOgOkTqRurDiTepjhqAA7Q2iFofrO5c=" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
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
        <header 
        class="masthead" 
        style="background-image: url({{'assets/img/home-bg.jpg'}})">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>Edwin's Blog</h1>
                            <span>Test account with admin permissions:</span>
                            <br>
                            <span>email: admin@gmail.com</span>
                            <br>
                            <span>password: password</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">

                    @if (Session::has('success'))
    
                    <div class="sessionsuccess">
                        <center>{{session('success')}}</center> 
                    </div> 
                
                    @endif

                    <div class="container sessiondanger">
   
                        @if (Session::has('failure'))
                    
                        <div
                        class="alert">
                            {{session('failure')}}    
                        </div> 
                    
                        @endif
                       
                    </div>
      
                    <center>

                        @if (count($posts) > 0)

                        @foreach ($posts as $post)

                          <!-- Post preview-->
                          <div class="post-preview">
      
                              <a href="{{route('post-index', $post->slug)}}">
                                  <h6 class="post-title">Title: {{$post->title}}</h6>
                              </a>
      
                              <h5 class="post-subtitle">Description: {{$post->short_description}}</h5>
      
                              <p class="post-meta">
                                  Posted by
                                  <a href="#" class="text-danger">{{$post->user->name}}</a>
                              </p>
      
                              {{-- <a href="{{route('post-index', $post->id)}}"> --}}
                                  
                              {{-- <img 
                              width="250"
                              src="{{$post->random}}" 
                              alt=""> --}}
                              
                              <img 
                              width="250"
                              src="{{$post->picture}}" 
                              alt="">
                                  
                              <img 
                              width="250"
                              src="{{$post->random}}" 
                              alt="">

      
                              {{-- </a> --}}

                          

                              
      
                          </div>
                          <!-- Divider-->
                          <hr class="my-4" />

                        @endforeach

                        @else 

                        <h5>There are no blog posts right now...</h5>
                        <br>
                        <img 
                        height="150" 
                        src="assets/img/unique.gif"
                        alt="GIF"
                        title="GIF">
                        <br>
                        <br>
                            
                        @endif

                    </center>
             
                    

                  
                
                        {{$posts->links('pagination::bootstrap-5')}}
                 
                 
             
                   
            </div>
        </div>
        
        <!-- Footer-->
        <x-footer></x-footer>

      

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
