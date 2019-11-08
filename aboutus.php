<Doctype html>
  <html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="icon" href="images/Versatile.png" type="image/png" sizes="16x16">
     <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name="Viewport" content=width="device - width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="index.css">
   <!--costom JavaScript-->
   <link rel="stylesheet" type="text/css" href="index.js">
    <style>
      *{
        margin: 0;
        padding: 0;
        font-family: sans-serif;
        box-sizing: border-box;
      }

      .team-section{
        overflow: hidden;
        text-align: center;
        background: white;
        padding: 60px;
      }

      .team-section h1{
        text-transform: uppercase;
        margin-bottom: 60px;
        color: Black;
        font-size: 40px;
      }

      .border{
        display: block;
        margin: auto;
        width: 160px;
        height: 3px;
        background: #3498db;
        margin-bottom: 40px;
      }

      .ps{
        margin-bottom: 40px;
      }

      .ps a{
        display: inline-block;
        margin: -20 30px;
        width:200px;
        height:200px;
        overflow: hidden;
        border-radius: 50%;
      }



      .section{
        width: 600px;
        margin: auto;
        font-size: 30px;
        color: black;
        text-align: justify;
        height: 0;
        overflow: hidden;
      }

      .section:target{
        height: auto;
      }
      .name{
        display: block;
        margin-bottom: 30px;
        text-align: center;
        text-transform: uppercase;
        font-size: 22px;
      }
      .new1
      {
      font-size:20px;
      font-family:helvetica;
      color: black;
      font-size: 30px;
      background: white;
      width: 100%;
      }
      .new1 h1{
        text-transform: uppercase;
        margin-bottom: 60px;
        color: black;
        font-size: 40px;
      }

      .new1:target{
        height: auto;
      }

      body{
        background: #f1f1f1;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .contact-info{
        margin-left: 0px;
        margin-top:100px;
        margin-bottom: 20px;
        display: flex;
        width: 100%;
        max-width: 1200px;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
      }

      .card{
        background: #1c2833;
        padding-bottom:  0 20px;
        margin: 0 10px;
        width: calc(40% - 20px);
        height: 100px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        color: white;
        cursor: pointer;

      }
      .card-icon{
        font-size: 28px;
        background: #ff6348;
        width: 60px;
        height: 60px;
        text-align: center;
        line-height: 60px ;
        border-radius: 1000px;
        transition: 0.3s linear;

      }


      .card:hover .card-icon{
        background: none;
        color: #ff6848;
        transform: scale(1.6);

      }
      .card:hover p{
        max-height: 50px;
        opacity:1;
      }

      @media screen and (max-width: 800px){
        .contact-info{
          flex-direction: column;
        }
        .card{
          width: 100%;
          max-width: 300px;
          margin: 10px 0;
        }
      }

      .contact-section{
        background: lightgreen;
        text-align: center;
        padding: 80px 0;
        margin-top: 27%;

      }
      .inner-width{
        max-width: 600px;
        margin: auto;
        padding: 0 20px;
      }

      .contact-section h1{
        font-size: 30px;
        color: black;
        margin-bottom: 40px;
        text-transform: uppercase;
        letter-spacing: 4px;
        font-weight: 400;

      }
      .name1,.Email,.Message{
        background: none;
        border: none;
        outline: none;
        border-bottom: 1px solid;
        color: black;
        padding: 30px 10px;
        font-size: 20px;
        margin-bottom: 40px;
      }
      .name1{
        float: left;
        width: 270px;

      }
      .Email{
        float: right;
        width: 270px;

      }
      .Message{
        min-width: 100%;
        max-width: 100%;
      }
      .contact-section button{
        background: none;
        color: black;
        border: 1px solid black;
        padding: 12px 60px;
        border-radius: 8px;
        text-transform: uppercase;
        font-size: 14px;
        transition: 0.4s linear;
        cursor: pointer;

      }
      .contact-section button:hover{
        background: black;
        color: #fff;
      }
      .division {
        content: "";
        clear: both;
        display: block;
        margin-left: 12%;
        background-color: white;
        width: 100%;
      }
      .column {
        float: left;
        width: 50%;
        padding: 10px;
      }
      .para1 {
        font-family: serif;
        font-size: 30px;
        color: #9E9992;
        te
      }

</style>
</head>

<body onload="startSlide2()">

                <!-- Navigation Bar Started-->
  <div style="background-color: black">
     h
   </div>
         <nav class="navbar fixed-top navbar-expand-sm navbar-light bg-white">
           <a href="index.php">
             <img src="images/Versatile.png" class="logo">
           </a>
</nav>

  <div class="team-section">
    <h1> About Us </h1>
    <span class="border"></span>
    <div class="ps">
      <a href="#p1"><img src="images/p3.jpg"   alt=""></a>
      <a href="#p2"><img src="images/pd.jpeg" alt=""></a>
      <a href="#p3"><img src="images/p2.jpg" alt=""></a>
      </div>

      <div class="section"  id="p1">
        <span class="Name"> Srikrishna </span>
        <span class="border"></span>
        <p>
          Hi my name is Srikrishna and I'm from Lpu.Currently i am studying B.tech 3rd year in lovely professional university.
          I am doing a short role in our team is to build a styling website to our page.The main things are performed by Mr.Prabakar and Mr.Sourabh.
           </p>
           </div>


           <div class="section"  id="p2">
             <span class="Name"> Prabhakar </span>
             <span class="border"></span>
             <p>
               Hi my name is Prabhakar and I'm from Lpu.Currently i am studying B.tech 3rd year in lovely professional university.
          I am doing a short role in our team is to build a styling website to our page.The main things are performed by Mr.Prabakar and Mr.Sourabh.
                </p>
                </div>

                <div class="section"  id="p3">
                  <span class="Name"> Saurabh </span>
                  <span class="border"></span>
                  <p>
                   Hi my name is Saurabh and I'm from Lpu.Currently i am studying B.tech 3rd year in lovely professional university.
          I am doing a short role in our team is to build a styling website to our page.The main things are performed by Mr.Prabakar and Mr.Sourabh.
                     </p>
                     </div>
                   </div>
              <!--BRIEF-->
               <div class="container">
                <h1><center> Discription </center></h1>
                 <div class="row">

                  <div class="col-md-6">
                    <p class="text-capitalize p-3">
                          Versatile is one of the best technical community.It provides best training for the students who are in their initial stage.
                          Versatile conducts the training in offline mode. And the aim of this is to provide training in village areas where the others
                          Workshop is not reachable and student of that section due to one or other reason is deprived of education we along with our
                          highly dedicated team will try our best to spread the education around the world and make you technical journey more comfotable
                          and cosy.We can solve anytype of software issue and We can build projects for the colleges and universities.
                          We have a wide range of varaities in solving issues.We have a team for solving issues.
                          The first thing If u want a project then we are for you to a solve a problem. Just ypu need to do is you should tell what type of
                          project u need and the specifications must be recommended.We have our team to build your project.
                        </p>
                  </div>

                  <div class="col-md-6">
                     <img class="slideshow2 img-thumbnail" src="images/l1.jpg" id="img2" width="600px" height="500px">

                          <script>
                              var id2;
                              var j=1;
                              const imagePath2=['images/l1.jpg', 'images/l3.jpg' , 'images/l4.jpg' , 'images/l6.jpg'];
                              function changeImage2(){
                                  document.getElementById("img2").src=imagePath2[j];

                                  if(j<imagePath2.length-1)
                                  {
                                      j++;
                                  }
                                  else
                                  {
                                      j=0;
                                  }
                              }

                              function startSlide2()
                              {
                                  id2=setInterval(changeImage2,3000)
                              }
                          </script>
                  </div>                   
                 </div>
               </div>

                    <div class="contact-section" style="margin-top: 10px">
                      <div class="inner-width">
                        <h1> Get in Touch with Us </h1>
                        <input type="text" class="name1" placeholder="Your name">
                        <input type="Email" class="Email" placeholder="Your Email">
                        <textarea rows="1" placeholder="Message" class="Message"></textarea>
                        <button> Get in Touch </button>

                        <script>
                        function validate()
                        {
                        if(document.contact-section.name1.value=="")
                        {
                        alert("Please provide your name");
                        return false;
                        }
                        else if(document.contact-section.Email.value=="")
                        {
                        alert("Please provide your email");
                        return false;
                        }
                        else if(document.contact-section.Message.value=="")
                        {
                        alert("Please enter a Message");
                        return false;
                        }
                        else
                        {
                        alert("Successfully recieved your feedback");
                        return (true);
                        }
                        }
                        </script>
                      </div>
                    </div>


                    <div class="contact-info">
                      <div class="card">
                        <i class="card-icon fas fa-envelope"></i>
                        <a href="index.php"><p> versatile.onlineplatform@gmail.com </p></a>
                      </div>

                     <div class="card">
                       <i class="card-icon far fas fa-phone"></i>
                       <p>+91 1234642389 </p>
                     </div>

                     <div class="card">
                       <i class="card-icon far fas fa-map-marker-alt"></i>
                       <p> Punjab,India </p>
                     </div>
                   </div>


                     </body>
                     </html>
