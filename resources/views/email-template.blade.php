<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                  <div class="card-body">
                   @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                           {{ __('A fresh mail has been sent to your email address.') }}
                       </div>
                   @endif

                   <center>

                    <div>


                   <h2 style="color: rgb(215, 0, 68)">Author:</h2>

                   <h3>{!! $name !!}</h3>
                   
                   <hr style="width: 30%;margin:auto;">
  
                   <h2 style="color: rgb(215, 0, 68)">Email Address:</h2>

                   <h3>{!! $email !!}</h3>

                   <hr style="width: 40%;margin:auto;">
            
                   <h2 style="color: rgb(215, 0, 68)">Subject:</h2>
               
                   <h3>{!! $subject !!}</h3>

                   <hr style="width: 40%;margin:auto;">
              
                   <h2 style="color: rgb(215, 0, 68)">Message:</h2>

                   <h3>{!! $content !!}</h3>


                    </div>


                   </center>
                  
               </div>
           </div>
       </div>
   </div>
</div>