<?php
  require_once ('config.php');
  $sql = "SELECT * FROM products WHERE bid = 1";
  $bid = $db->query($sql);
  $sql1 = "SELECT * FROM products WHERE bid = 2";
  $bid1 = $db->query($sql1);
  $sql2 = "SELECT * FROM products WHERE bid = 3";
  $bid2 = $db->query($sql2);


session_start();

if(!isset($_SESSION['userlogin'])){
  header ("Location: index.php");
}

if(isset($_GET['logout'])){

  session_destroy();

  unset($_SESSION);

  header("Location :home.php");
}

?>
<?php include 'details-modal-house1.php' ;
      include 'details-modal-house2.php';
      include 'details-modal-house5.php';
      include 'details-modal-apartment1.php';
      include 'details-modal-apartment2.php';
      include 'details-modal-house4.php';
      include 'details-modal-apartment3.php';
      include 'details-modal-land1.php';
      include 'details-modal-land2.php';
     ?>


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
        color:red;
        font-style:italic;
        text-decoration: underline;
      }


        .input-group{
          position:absolute;


          left:1200px;


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
   #h1{
     text-align:center;
     font-style:oblique;
     color:blue;
   }

   .open-button {
  background-color: #555;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  right: 28px;
  width: 280px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid #f1f1f1;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}

/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
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
  <script type="text/javascript">
    function details()
    {
      alert ("hi");
    }

  </script>
  <script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

</script>
  </head>

      <body>



              <div class="input-group ">
                <span><div class="input-group-append">

                      <button class="btn btn-primary" class="open-button" onclick="openForm()">Filters</button></span>
                      <div class="form-popup" id="myForm">
<form action="search.php" method="post" class="form-container">
  <h1>Filters</h1>

  <label for="type"><b>Type</b></label>
  <input type="text"  name="type" >

  <label for="address"><b>Address</b></label>
  <input type="text"  name="address" >

  <label for="price"><b>Price(in Rs)</b></label>
  <input type="text" name="price" >

  <button type="submit" class="btn btn-success"  onclick="location.href = 'search.php';" value="submit">Search</button>
</form>
</div>
                      <span><a href="home.php" class="btn btn-warning" role="button">LOGOUT</a></span>
              </div>
        </div>
        <h2 id="h1">Featured items</h2>
 <div class="col-md-3"></div>
    <div class="col-md-10">
      <h2>Houses</h2>
       <div class="card-deck">
           <?php while($products = $bid->fetch(PDO::FETCH_ASSOC)) : ?>
              <div class="col-md-4">
                <h4 class="card-title"><?=$products ['pname']; ?></h4>
                <img src= "<?=$products ['img']; ?>"  alt="img1"  width="250" height="200"/>
                <p class="card-text">Address:<?=$products ['address']; ?></p>
                <p class="card-text">Price:<?=$products ['price']; ?></p>
                <?php
                if ($products ['pname'] == 'House1'): ?>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">Details</button>
               <?php
              elseif ($products ['pname'] == 'House2'): ?>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-2">Details</button>
                <?php
              elseif ($products ['pname'] == 'House4'): ?>
                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-3">Details</button>
              <?php
            else: ?>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-4">Details</button>
          <?php endif; ?>
                </div>
            <?php endwhile; ?>
          </div>
        </div>
      </div>
      <div class="col-md-3"></div>
     <div class="col-md-10">
       <br />
      <h2>Apartments</h2>
      <div class="card-deck">
        <?php while($products = $bid1->fetch(PDO::FETCH_ASSOC)) : ?>
           <div class="col-md-4">
             <h4 class="card-title"><?=$products ['pname']; ?></h5>
             <img src= "<?=$products ['img']; ?>"  alt="img1"  />
             <p class="card-text">Address:<?=$products ['address']; ?></p>
             <p class="card-text">Price:<?=$products ['price']; ?></p>
             <?php
             if ($products ['pname'] == 'Apartment1'): ?>
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-5">Details</button>
            <?php
           elseif ($products ['pname'] == 'Apartment2'): ?>
             <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-6">Details</button>
             <?php
         else: ?>
         <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-7">Details</button>
       <?php endif; ?>
             </div>
         <?php endwhile; ?>


           </div>
         </div>
       </div>
      <br />
      <div class="col-md-3"></div>
     <div class="col-md-10">
       <h2>Land and properties</h2>
       <div class="card-deck">
         <?php while($products = $bid2->fetch(PDO::FETCH_ASSOC)) : ?>
            <div class="col-md-4">
              <h4 class="card-title"><?=$products ['pname']; ?></h5>
              <img src= "<?=$products ['img']; ?>"  alt="img1"  />
              <p class="card-text">Address:<?=$products ['address']; ?></p>
              <p class="card-text">Price:<?=$products ['price']; ?></p>
              <?php
              if ($products ['pname'] == 'Land1'): ?>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-8">Details</button>
             <?php
            else : ?>
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-9">Details</button>
        <?php endif; ?>
              </div>
          <?php endwhile; ?>
            </div>
          </div>
        </div>
</div>
</div>
<br />
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
