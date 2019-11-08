  <?php  

   $host_name='localhost';
   $user_name='root';
   $password='';
   $database='organization';

   $con=new mysqli($host_name,$user_name,$password,$database);
 
   if($con->connect_error)
   {
   	 die("Connection Fail");
   }

 ?>

 <?php
require("common.php");
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="images/Versatile.png" type="image/png" sizes="16x16">
   <title>VERSATILE</title>

    <!--Bootstrap Css-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!--Jquery CDN-->
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="index.css">
   <!--costom JavaScript-->
   <link rel="stylesheet" type="text/css" href="index.js">

  <script type="text/javascript">
  	
  	$(document).ready(function(){
        $("#profile").dblclick(function(){
             $("#card_show").slideDown('slow');
          });

          $("#profile").click(function(){
             $("#card_show").slideDown('slow');
          });

        $('#admincontrol').click(function(){
             $('#show_table').css("display","inline")
        });
        $('#admincontrol').dblclick(function(){
             $('#show_table').css("display","none")
        });
  	});

  </script>

  <style type="text/css">
  	#show_table
  	{
  		display: none;
  	}
  </style>
</head>
<body>
     
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
             
             <div >
             	<li class="nav-item"><a class="nav-link text-dark mr-5" id="admincontrol">DETAILS</a></li>
             </div>

             <li class="nav-item"><a href="logout_script.php" class="nav-link text-dark mr-5 ">LOGOUT</a></li>


           </ul>
           </div>
                  <?php echo $_SESSION['email']; ?>
         </nav>
         <div class="container" style="margin-top:100px" id="show_table">
         <h2>Student Details</h2>
         <p></p>
         <table class="table table-bordered w-50 table-striped">
         	<thead>
         		<tr>
         			<th>Id</th>
         			<th>Name</th>
         			<th>Email</th>
         			<th>Contact</th>
         			<th>City</th>
         			<th>College</th>
         		</tr>
         	</thead>

         	<tbody>
         	    <?php

                     $query="SELECT * FROM users";
                     $result=$con->query($query);
                     if($result->num_rows>0)
                     {
                     	while($row=$result->fetch_assoc())
                     	{
                     	  ?>
                     	  <tr>
                     	  	<td> <?php echo $row['id'] ?> </td>
                     	  	<td> <?php echo $row['name'] ?> </td>
                     	  	<td> <?php echo $row['email'] ?> </td>
                     	  	<td> <?php echo $row['phone'] ?> </td>
                     	  	<td> <?php echo $row['city'] ?> </td>
                     	  	<td> <?php echo $row['collegeName'] ?> </td>
                     	  </tr>	
                     <?php	  
                     	}
                     }
                  
                ?>
         		<tr>
         			<td></td>
         		</tr>
         	</tbody>
         </table>
     </div>

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

</body>
</html>