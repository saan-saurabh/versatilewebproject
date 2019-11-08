<?php
require("common.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equive="X-UA-Compatible" content="ie=edge">

    <!--Bootstrap Css-->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"   
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
 
    <!--MDB Css
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">-->
      <!--Jquery CDN-->
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

       <!--Font Awesome-->
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

	   <!--Goggle Font-->
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
	   <!-- end Goggle Font-->
     <!--costom CSS-->
   <link rel="stylesheet" type="text/css" href="index.css">
   <!--costom JavaScript-->
   <link rel="stylesheet" type="text/css" href="index.js">
<title>My Shop</title>

   <style type="text/css">
    
     #first_show,#second_show,#third_show
     {
       display: none;
     }
      ul li a:hover
   {
     background-color:lightgreen;
   }
   </style>

  <script type="text/javascript">
    
      $(document).ready(function(){
          $('#first').click(function(){
             $('#first_show').css("display","inline");
             $('#second_show').css("display","none");
             $('#third_show').css("display","none");
          });

           $('#second').click(function(){
             $('#first_show').css("display","none");
             $('#third_show').css("display","none");
             $('#second_show').css("display","inline");
          });

           $('#third').click(function(){
             $('#first_show').css("display","none");
             $('#second_show').css("display","none");
             $('#third_show').css("display","inline");
          });


            
      });

  </script>

</head>

  <body >
   <!-- Navigation Bar Started-->
  <div style="background-color: black">
     h
   </div>
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="index.php">
             <img src="images/Versatile.png" class="logo">
           </a>
             <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="courseC.php" class="nav-link text-dark mr-5">BACK</a></li>
           </ul>
           </div>
</nav>
<div class="container" style="background-color:black; margin-top:100px; margin-bottom:70px; padding:20px;">
<div class="text-center"><h1 style="color:white;">Learn C</h1>
</div>
<div class="container">
<div class="text-center"><h1 style="color:white;">Explore Videos...</h1><br/></div>
<ul>
<h5 style="color:white;">
<li><div id="first"><a>Introduction to C++ language</a></div></li>
<li><div id="second"><a>Basic structure of C++ language</a></div></li>
<li><div id="third"><a>Data types in C++ language</a></div></li>
</h5>
</div>

<div id="first_show">
<div class="embed-responsive embed-responsive-21by9">
<video controls="controls">
  <source  src="images/videoC++1.mp4" type="video/mp4">
</video>
</div>
</div>

<div id="second_show">
<div class="embed-responsive embed-responsive-21by9">
  <video controls="controls">
  <source  src="images/videoC++2.mp4" type="video/mp4">
</video>
</div>
</div>

<div id="third_show">
<div class="embed-responsive embed-responsive-21by9">
 <video controls="controls">
  <source  src="images/videoC++3.mp4" type="video/mp4">
</video>
</div>
</div>
</div>
        <!-- Footer -->
        <section>
            <footer class="page-footer font-small mdb-color pt-4 bg-dark text-white" id="myfooter">
              <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">
                  <!-- 1st Grid column -->
                  <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Versatile</h6>
                    <p>Creating versatility through Education.</p>
                  </div>
                  <!-- 1st Grid column end -->
                  <hr class="w-100 clearfix d-md-none">
                  <!-- 2nd Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Service</h6>
                    <p>
                      <a href="#!">WebDevelopment</a>
                    </p>
                    <p>
                      <a href="#!">AppDevelopment</a>
                    </p>
                    <p>
                      <a href="#!">DigitalMarketing</a>
                    </p>
                    <p>
                      <a href="#!">SoftwareDevelopment</a>
                    </p>
                  </div>
                  <!-- end Grid column end -->
            
                  <hr class="w-100 clearfix d-md-none">
            
                  <!-- 3rd Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                      <a href="#!">Your Account</a>
                    </p>
                    <p>
                      <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                      <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                      <a href="#!">Help</a>
                    </p>
                  </div>
                <!-- 3rd Grid column -->
                 <hr class="w-100 clearfix d-md-none">

                <!--4th Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                      <i class="fas fa-home mr-3"></i> Jalandhar, J 144411, Insia</p>
                    <p>
                      <i class="fas fa-envelope mr-3"></i> ver@gmail.com</p>
                    <p>
                      <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                      <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                  </div>
                <!--4th Grid column End-->
               </div>
                 <hr>

               <!-- Grid row -->
                  <div class="row d-flex align-items-center">
               <!-- Grid column -->
                      <div class="col-md-7 col-lg-8">
               <!--Copyright-->
                        <p class="text-md-left">© 2018 Copyright:
                           <a href="https://mdbootstrap.com/education/bootstrap/">
                              <strong> Versatile.com</strong>
                         </a>
                      </p>
                  </div>
             <!-- Grid column -->

               <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0">
                <!-- Social buttons -->
                     <div class="text-center text-md-right">
                       <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                 <i class="fab fa-facebook-f"></i>
                             </a>
                         </li>
                           <li class="list-inline-item">
                             <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                  <i class="fab fa-twitter"></i>
                             </a>
                         </li>
                             <li class="list-inline-item">
                               <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                   <i class="fab fa-google-plus-g"></i>
                               </a>
                          </li>
                             <li class="list-inline-item">
                              <a class="btn-floating btn-sm rgba-white-slight mx-1">
                            <i class="fab fa-linkedin-in"></i>
                         </a>
                       </li>
                      </ul>
                    </div>
                 </div>
              <!-- Grid column -->
            </div>
    <!-- Grid row -->
        </div>
  <!-- Footer Links -->
</footer>
</section>
<!-- Footer End-->

</body>
</html>