<!DOCTYPE html>
<html>
<head>
     <title>Real Estate </title>
     <link rel="stylesheet" href="css/bootstrap.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
     <script src="js/bootstrap.min.js"></script>
     <style>
     h2 {
       color:black;

       hover:

     }
     .ml1 {
       text-align: center;
       font-weight: 900;
       font-size: 3.5em;
       background-color: #67c56d;
       color:#fec100;

     }

     .ml1 .letter {
       display: inline-block;
       line-height: 1em;

     }

     .ml1 .text-wrapper {
       position: relative;
       display: inline-block;
       padding-top: 0.1em;
       padding-right: 0.05em;
       padding-bottom: 0.15em;
     }
     /* Facebook */
.fa-facebook {
  background: #3B5998;
  color: white;
}

/* Insragram */
.fa-instagram {
  background: #55ACEE;
  color: white;
}

/* LinkedIn*/
.fa-linkedin {
  background: #007bb5;
  color: white;
}
.footer {
  padding: 10px;
  font-weight: normal;
  font-style: italic;
   font-size: 15px;
  background: #67c56d;
  display:flex;
}
footer > div{
  flex:3;
}
     </style>

     <h1 class="ml1" >
               <span class="text-wrapper">
         <span class="letters">FIND A NEW HOME HERE</span>
   </span>
 </h1>

 <script>
 // Wrap every letter in a span
 var textWrapper = document.querySelector('.ml1 .letters');
 textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

 anime.timeline({loop: true})
   .add({
     targets: '.ml1 .letter',
     scale: [0.3,1],
     opacity: [0,1],
     translateZ: 0,
     easing: "easeOutExpo",
     duration: 600,
     delay: (el, i) => 70 * (i+1)
   }).add({
     targets: '.ml1 .line',
     scaleX: [0,1],
     opacity: [0.5,1],
     easing: "easeOutExpo",
     duration: 700,
     offset: '-=875',
     delay: (el, i, l) => 80 * (l - i)
   }).add({
     targets: '.ml1',
     opacity: 0,
     duration: 1000,
     easing: "easeOutExpo",
     delay: 1000
   });

 </script>
 </head>

     <body>

   <div class="container" style="margin-top:30px">
           <div class="row">
             <div class="col-sm-8">
                    <h2>Website Images<h2>
                          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                        <div class="carousel-item active">
                                          <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\register1.png" alt="First slide" width="400" height="400" >
                                          <p>This is the slide showing register page</p>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\login1.png" alt="Second slide" width="400" height="400">
                                            <p>This is the slide showing login page</p>
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\index1.png" alt="Third slide" width="400" height="400">
                                          <p>This is the slide showing index page</p>
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\upload.png" alt="Fourth slide" width="400" height="400">
                                          <p>This is the slide showing upload page</p>
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\ff.png" alt="Fifth slide" width="400" height="400">
                                          <p>This is the slide showing feedback form</p>
                                        </div>
                                        <div class="carousel-item">
                                          <img class="d-block w-100" src="http://localhost:80\project\bootstrap-4.4.1-dist\pics\fflist.png" alt="Sixth slide" width="400" height="400">
                                          <p>This is the slide showing feedback list </p>
                                        </div>
                              </div>
                               <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev" >
                                 <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Previous</span>
                               </a>
                               <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                 <span class="sr-only">Next</span>
                               </a>
                          </div>
                  </div>
              <div>
               <hr class="d-sm-none">
             </div>
             <div class="col-sm-4">
               <h2>ABOUT</h2>
               <h5>Some functionalities of this website:</h5>
                <p>A.Easy access to all available real estates.</p>
                <p>2.Secure and relaible due to user authoriaztion.</p>
                <p>3.No worries of brokers interfering.</p>
                <p>4.Direct contact and details of both buyer and seller.</p>
                <p>5.Choose from wide variety of choices for house,land,apartments,etc</p>
                       <div style="text-align:center;">
                      <button class="btn btn-warning" type="submit" ><a href="register.php">Sign up</a></button>
                    <button class="btn btn-warning" type="submit"><a href="login.php">Login</a></button>
                 </div>
         </div>
           </div>
         </div>

     <div class="footer">

                <div  class="container">
                  <p >© Copyright 2020 ,All Rights Reserved</p>
                  <p> <a href="feedback.php">Feedback</a></p>
                </div>
                <div class="container">
                <p > Developed By:</p>
                 <p >Sandesh kafle <a href="https://www.facebook.com/kafle.sandesh" class="fa fa-facebook"></a><a href="https://www.instagram.com/kafle.sandesh/" class="fa fa-instagram"></a> <a href="https://www.linkedin.com/in/sandesh-kafle-6b9580181/" class="fa fa-linkedin"></a> </p>
                <p> Rijwan Ahmed <a href="https://www.facebook.com/rijwan.akhan.54966" class="fa fa-facebook"></a><a href="https://www.instagram.com/rijwankhan_786/" class="fa fa-instagram"></a> <a href="https://www.linkedin.com/in/sandesh-kafle-6b9580181/" class="fa fa-linkedin"></a></p>
               </div>

           </div>

    </body>
</head>
</html>
