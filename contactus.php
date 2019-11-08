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
<link rel="icon" href="images/Versatile.png" type="image/png" sizes="16x16">
<title>COUNTECT US</title>
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
</nav>
           <!--<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>-->
<div class="container">
<div class="row" style="margin-top:130px;">
                    <div class="col-md-4  col-md-offset-4">
                        <h3 style="color:green;">Contact Us</h3>
                        <form  action="contactus_script.php" method="POST">
<div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true"><? php echo $_GET['m1']; ?>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" row="8" placeholder="Message" name="message" required = "true"></textarea>
                            </div>
<div class="form-group">
<input class="form-control" type="submit" value="Submit" name="submit" style="background-color:blue; color:white;"/></div>
                        </form>
                    </div>
  <div class="col-md-4 col-md-offset-3" style="margin-left:300px; margin-bottom:150px;">
                    <div class="thumbnail">
                                <img src="images/contact.png" alt="">
                                <div class="caption">
                                    <h3 style="color:red;"><br/>Information corner</h3>
                                    <p>Lovely Professional University, Jalandhar Punjab</p>
                                    <p>phone:0022444666<br/></p>
                                    <p>email:info@versatile.com<br/></p>
                                    <p> follow us on social media<br/>fb page: versatile<br/>twitter: @versatile<br/></p>
                                 
                                </div>
                </div>
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
                        <p class="text-center text-md-left">© 2018 Copyright:
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