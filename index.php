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
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
 
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

   <script>
 
  $(document).ready(function(){
        
        //For 1st Course
         $("#show").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#hide").css("display","inline");
         });

          $("#hide").click(function(){
           $(".pera").toggleClass("main");
           $(this).css("display","none");
           $("#show").css("display","inline");
         });

        //2nd First Course
          $("#show2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#hide2").css("display","inline");
         });

          $("#hide2").click(function(){
           $(".pera2").toggleClass("main");
           $(this).css("display","none");
           $("#show2").css("display","inline");
         });

         //3rd First Course
          $("#show3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#hide3").css("display","inline");
         });

          $("#hide3").click(function(){
           $(".pera3").toggleClass("main");
           $(this).css("display","none");
           $("#show3").css("display","inline");
         });

        //4th First Course
          $("#show4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#hide4").css("display","inline");
         });

          $("#hide4").click(function(){
           $(".pera4").toggleClass("main");
           $(this).css("display","none");
           $("#show4").css("display","inline");
         });

         //5th First Course
          $("#show5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#hide5").css("display","inline");
         });

          $("#hide5").click(function(){
           $(".pera5").toggleClass("main");
           $(this).css("display","none");
           $("#show5").css("display","inline");
         });

        
        //6th First Course
          $("#show6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#hide6").css("display","inline");
         });

          $("#hide6").click(function(){
           $(".pera6").toggleClass("main");
           $(this).css("display","none");
           $("#show6").css("display","inline");
         });
});
       
</script>

<style type="text/css">
  .pera
   {
     display: none;
   }
   .pera2
   {
     display: none;
   }
   .pera3
   {
     display: none;
   }
   .pera4
   {
     display: none;
   }
   .pera5
   {
     display: none;
   }
    .pera6
   {
     display: none;
   }
   #hide
   {
     display: none;
   }
   #hide2
   {
     display: none;
   }
   #hide3
   {
     display: none;
   }
   #hide4
   {
     display: none;
   }
   #hide5
   {
     display: none;
   }
   #hide6
   {
     display: none;
   }
 .main
   {
     display: inline;
   }
</style>

<link rel="icon" href="images/Versatile.png" type="image/png" sizes="16x16">
<title>VERSATILE</title>
</head>

  <body >
   <!-- Navigation Bar Started-->
   <div style="background-color: black">
     h
   </div>
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="index.php" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="index.php" class="nav-link text-dark mr-5">HOME</a></li>
             <li class="nav-item"><a href="aboutus.php" class="nav-link text-dark mr-5">ABOUT</a></li>
             <li class="nav-item"><a href="#course" class="nav-link text-dark mr-5">COURSES</a></li>
             <li class="nav-item"><a href="contactus.php" class="nav-link text-dark mr-5">CONTACT</a></li>
             <li class="nav-item"><a href="Model login.php" class="nav-link text-dark mr-5 ">LOGIN</a></li>
             <li class="nav-item"><a href="adminLogin.php" class="nav-link text-dark mr-5 ">ADMIN</a></li>

             <li class="nav-item"><a href="Model signup.php" class="nav-link text-white mr-5 active">Registration</a></li>
           </ul>
           </div>
         </nav>
         
    <!-- Navigation Bar End-->-->

    <!-- Slide Started-->

              <section class="sec1">
                <ol class="carousel-indicators" style="margin-bottom:90px;">
                     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>
                     <li data-target="#myCarousel" data-slide-to="4"></li>
                </ol>   
                <div class="container-fluid">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">              
              <div class="carousel-inner">
          <!-- First Slide-->
                 <div class="carousel-item active sl mb-2">
                      <div class="row">
                        <div class="col-md-4 col-xs-12">
                           <div class="mt-5 text text-center">
                             <p class="p1">WELCOME <br><span>TO</span> <br>VERSATILE</p>
                             <p class="p2">WELCOM TO VERSATILE</p>
                           </div>
                        </div>

                        <div class="col-md-8 col-xs-12">
                          <div class="monitor">
                            <img class="" src="images/sl1.jpg" alt="" >
                            <div class="plate"></div>
                          </div> 
                       </div>
                      </div>     
                 </div>
               <!-- Second Slide-->
                <div class="carousel-item sl"> 
                  <div class="row">

                    <div class="col-md-8 col-xs-12 m-t">
                      <div class="monitor">
                             <img class="img-responsive" src="images/sl2.jpg" alt="">
                             <div class="plate"></div>
                        </div>
                       </div>

                        <div class="col-md-4 col-xs-12 right">

                          <div class="text-right1">
                            <p>Summer Traning<br>For B.tech| BCA |MCA
                               <br>BSC | MSC
                             </p>
                           </div>

                        </div>
                      </div>
               </div>

               <!-- third Slide-->
               <div class="carousel-item  sl mb-5">
                      <div class="row">
                        <div class="col-md-4 col-xs-12 m-t">
                           <div class="text-left">
                            <p>Winter Traning<br>For B.tech| BCA |MCA
                               <br>BSC | MSC
                             </p>
                           </div>
                        </div>

                        <div class="col-md-8 col-xs-12 m-t-2">
                          <div class="monitor">
                            <img class="" src="images/sl3.png" alt="" >
                            <div class="plate"></div>
                          </div> 
                       </div>
                      </div>     
                 </div>
          
            <!-- Fourth Slide-->
             <div class="carousel-item sl"> 
                  <div class="row">

                    <div class="col-md-8 col-xs-12 m-t">
                      <div class="monitor">
                             <img class="img-responsive" src="images/sl2.jpg" alt="">
                             <div class="plate"></div>
                        </div>
                       </div>

                        <div class="col-md-4 col-xs-12 right">

                          <div class="text-right1">
                            <p>Services<br>For WEB & APP 
                               <br>DEVELOPMENT
                             </p>
                           </div>

                        </div>
                      </div>
               </div>

              <!-- Fifth Slide-->
             <div class="carousel-item  sl mb-5">
                      <div class="row">
                        <div class="col-md-4 col-xs-12 m-t">
                           <div class="text-left">
                            <p>Winter Traning<br>For B.tech| BCA |MCA
                               <br>BSC | MSC
                             </p>
                           </div>
                        </div>

                        <div class="col-md-8 col-xs-12 m-t-2">
                          <div class="monitor">
                            <img class="" src="images/sl3.png" alt="" >
                            <div class="plate"></div>
                          </div> 
                       </div>
                      </div>     
                 </div>
                           
         </div>
    </div>
    </section>
    <!-- Slide End-->
             
              <section class="myjumbotron">
                  <a href="contactus.php"><button type="button" class="btn btn-primary btn-lg"><p>GET ENQUiRY</p></button></a>
              </section>    
    <!-- Cousre Section-->

            <section class="jumbotron bg-white">
                <div class="container-fluid">
                  <div class="row row_lrn" id="course">
                     <div class="col-lg-12 text-center">
                       <h1>Learn and Grow!</h1>
                      </div>
                  </div>
                  <div class="row" id="course">

                 <!--First Course -->
                    <div class="col-lg-4">
                          <a href="courseC.php">
                            <div id="ZoomEffect">
                            <img src="images/c.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">C</h1>
                            <p>VERSATILE's team provides real-time and placement oriented C course.VERSATILE’s
                            <span id="show" class="text-primary"><a>read more</a></span>
                            <span class="pera">C training course content is basically designed from basic to advance level. VERSATILE is providing best C Training infrastructure to shape your future.
                            </span>
                            <a id="hide" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Second Course -->
                       <div class="col-lg-4">
                          <a href="courseC++.php">
                            <div id="ZoomEffect">
                            <img src="images/c++.png" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">C++</h1>
                            <p>VERSATILE's team provides real-time and placement oriented C++ to build your skill in Oops. VERSATILE’s 
                            <span id="show2" class="text-primary"><a>read more</a></span>
                            <span class="pera2">C++ training course content is basically designed from basic to advance level. VERSATILE provides you the best C++ Training infrastructure to shape your future.
                            </span>
                            <a id="hide2" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                         <!--Third Course -->
                            <div class="col-lg-4" >
                           <a href="courseJAVA.php">
                             <div id="ZoomEffect">
                            <img src="images/java.png" id="img">
                          </div>
                           </a>
                          <div>
                            <h1 class="text1">JAVA</h1>
                            <p>VERSATILE's team provides real-time and placement oriented JAVA course. VERSATILE’s
                            <span id="show3" class="text-primary"><a>read more</a></span>
                            <span class="pera3">JAVA training course content is basically designed from basic to advance levels. VERSATILE provides you the best JAVA Training infrastructure shape your future.
                            </span>
                            <a id="hide3" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>
                  </div>
 
                    <!--Fourth Course -->
                     <div class="row row_styl">

                    <div class="col-lg-4">
                          <a href="coursePHP.php">
                            <div id="ZoomEffect">
                            <img src="images/php.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">PHP</h1>
                            <p>VERSATILE's team provides real-time and placement oriented Php course to for backend to give your website a realistic touch. VERSATILE’s
                            <span id="show4" class="text-primary"><a>read more</a></span>
                            <span class="pera4">Php training course content is basically designed from basic to advanced levels. VERSATILE provides you the best Php Training infrastructure to shape your future.
                            </span>
                            <a id="hide4" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                      <!--Fifth Course -->
                       <div class="col-lg-4">
                          <a href="courseFRONTEND.php">
                            <div id="ZoomEffect">
                            <img src="images/web.jpg" id="img">
                          </div>
                          </a>
                          <div>
                            <h1 class="text1">FrontEnd</h1>
                            <p>VERSATILE's team provides real-time and placement oriented Front-end courses like HTML5, bootstrap, angular. VERSATILE’s
                            <span id="show5" class="text-primary"><a>read more</a></span>
                            <span class="pera5">Front-end training course content is basically designed from basic to advance levels. VERSATILE provides you the best Front-end Training infrastructure to build your career in web development.
                            </span>
                            <a id="hide5" class="text-primary">Read less</a>
                            </p>
                          </div>
                         </div>

                          <!--sixth Course -->
                           <div class="col-lg-4">
                          <a href="coursePYTHON.php">
                            <div id="ZoomEffect">
                            <img src="images/python.png" id="img">
                            </div>
                          </a>
                            <div>
                            <h1 class="text1">PYTHON</h1>
                            <p>VERSATILE's team provides real-time and placement oriented Python course to build basics for Ml and DataScience. VERSATILE’s
                            <span id="show6" class="text-primary"><a>read more</a></span>
                            <span class="pera6">Python training course content is basically designed from basic to advance levels. VERSATILE provides you the best Python Training infrastructure to shape your future.
                            </span>
                            <a id="hide6" class="text-primary">Read less</a>
                            </p>
                             </div>
                          </div>
                     

                  </div>
                </div>
            </section>
    <!-- Course Section End-->
           
           <!-- Team Section start-->
              <section class="team">
                 <div class="mycontainer">
                  <h1>Ready to HELP you!</h1>

                    <div class="card">
                     <div class="box">
                       <img src="images/sb4.jpeg" alt="team img" />
                         <h4>Saurabh</h4>
                         <h5>Team member</h5>
                     </div>
                  </div>

                   <div class="card">
                      <div class="box">
                         <img src="images/pd1.jpg" alt="team img" />
                         <h4>Prabhakar</h4>
                         <h5>Team member</h5>
                         
                     </div>
                 </div>

                   <div class="card">
                       <div class="box">
                           <img src="images/p3.jpg" alt="team img" />
                           <h4>ShriKrishna</h4>
                           <h5>Team member</h5>
                       </div>
                   </div>
                </div>
           </section>

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

	<!--JQuery Proper Bootsttrep-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script type="text/javascript">
	$(document).ready(function(){	
$('#validateForm').bootstrapValidator({
feedbackIcons: {
	valid: 'glyphicon glyphicon-ok',
	invalid: 'glyphicon glyphicon-remove',
	validating: 'glyphicon glyphicon-refresh'
},
fields: {
	
	email: {
		validators: {
			notEmpty: {
				message: 'Please Enter your email address'
			},
			emailAddress: {
				message: 'Please Enter a valid email address'
			}
		}
	},
	password: {
		validators: {
			notEmpty: {
				message: 'Enter your profile password'
			}
			/*regexp:{
         	regexp: "^(?=.*\d).{4,8}$",
			message:' Password must be at least 4 characters, no more than 8 characters, and must include at least one upper case letter, one lower case letter, and one numeric digit.'
       		}*/
		}
	}
	}
	
});
});
</script>

</body>
</html>