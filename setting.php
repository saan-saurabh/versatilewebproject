<?php
error_reporting(0);
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
     <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
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

  .margin
  {
    margin-left:"300px";
  }
</style>

<link rel="icon" href="images/Versatile.png" type="image/png" sizes="16x16">
<title>SETTING</title>
</head>

  <body >
   <!-- Navigation Bar Started-->
   <div style="background-color: black">
     h
   </div>
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="afterLogin.php" target="_blank">
             <img src="images/Versatile.png" class="logo">
           </a>

           <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#mymenu">
             <span class="navbar-toggler-icon"></span>
           </button>


           <div class="collapse navbar-collapse" id="mymenu">
             <ul class="navbar-nav ml-auto font-weight-bold"> 
             <li class="nav-item"><a href="logout_script.php" class="nav-link text-dark mr-5 ">LOGOUT</a></li>

       
           </ul>
           </div>
         </nav>        <div class="container-fluid" id="content">
            <div class="row" style="margin-top:120px; margin-left:150px;">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="setting_script.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary h-50 w-100">Change</button>
 <?php
                       
 echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                    ?>
    
</form>
</div>

</body>
</html>