<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Register Page</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<style>
body{
background-color:#25f34d ;
/*#67c56d*/
}
h2{
  color:#ffa444;
  text-decoration: underline;

}
.center{
  text-align:left;
}
.form-control{
  width:40%;
  float:justify;
}
</style>
</head>
<body>
  <div >
     <?php
     $type=null;
        if (isset( $_POST ["create"])){
          $name      = $_POST['name'];
          $lname     = $_POST['lname'];
          $address   = $_POST['address'];
          $type      = implode(",",$_POST['chkl1']);
          $gender    = implode(",",$_POST['chkl']);
          $cno       = $_POST['cno'];
          $uname     = $_POST['uname'];
          $email     = $_POST['email'];
          $pass      = $_POST['pass'];
          $cpass     = $_POST['cpass'];

          if ( $type == "Buyer" ) {

                 $sql = "INSERT INTO buyer (name,lname,address,cno,uname,email,pass,cpass,gender) VALUES (?,?,?,?,?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$name,$lname,$address,$cno,$uname,$email,$pass,$cpass,$gender]);
                echo 'Successfully saved';
                if ($result){
                  header("Location:login.php");
                            }
                else {
                        echo 'There were some errors while inserting';
                      }
                 }
       else if ($type == "Seller")
                {

         try{
         $sql = "INSERT INTO seller (name,lname,address,cno,uname,email,pass,cpass,gender) VALUES (?,?,?,?,?,?,?,?,?)";
         $stmtinsert = $db->prepare($sql);
         $result = $stmtinsert->execute([$name,$lname,$address,$cno,$uname,$email,$pass,$cpass,$gender]);
       }
       catch (Exception $e) { echo "Error while inserting into database";
            }


         if ($result){
        header("Location:login.php");
        }
        else {
         echo 'There were some errors while inserting';
        }

}
        }

      ?>
  </div>

<div >
    <form action="register.php" method="post">
      <div class="container">
            <h2 style="text-align:center;">Please fill in this form  completely to create an account</h2>
              <div class="center">
              <p>
                <label for="name"><b>Name:</b></label>
                <input class="form-control" type="text" id="name" name="name"  placeholder="Enter your name" required></p>
                <p>
                  <label for="lname"><b>LNAME:</b></label>
                  <input class="form-control" type="text" id="lname" name="lname" placeholder="Enter your last name" required></p>
                <p>
                  <label for="address"><b>ADDRESS:</b></label>
                  <input class="form-control" type="text" id="address" name="address"  placeholder="Enter your address" required></p>
                <p>
                  <label for="cno"><b>CONTACT NO:</b></label>
                  <input class="form-control" type="text" id="cno" name="cno" placeholder="Enter your number" required></p>
                 <p>
                  <label for="gender"><b>GENDER:</b></label>
                  <input type="checkbox" name="chkl[]" value="Male">Male
                  <input type="checkbox" name="chkl[]" value="Female">Female
                  <input type="checkbox" name="chkl[]" value="Others">Others<br />
                </p>
                <p>
                 <label for="type"><b>Type:</b></label>
                 <input type="checkbox" name="chkl1[ ]" value="Buyer"> Buyer
                 <input type="checkbox" name="chkl1[ ]" value="Seller">Seller<br />

               </p>
                <p>
                  <label for="uname"><b>USERNAME:</b></label>
                  <input class="form-control" type="text" id="uname" name="uname"  placeholder="Enter your username" required></p>
                <p>
                  <label for="email"><b>EMAIL ID:</b></label>
                  <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required ></p>
                <p> <label for="pass"><b>PASSWORD:</b></label>
                  <input class="form-control" type="password" id="pass" name="pass" placeholder="Enter your password" required></p>
                  <p> <label for="cpass"><b>CONFIRM PASSWORD:</b></label>
                    <input class="form-control" type="password"  id="cpass" name="cpass" placeholder="Confirm your password" required></p>
          <pre>                <input class="btn btn-primary" type="submit" name="create" id="register" value="Sign up" onclick="chkpassword()"></pre>
          </div>
        </div>
      </div>
    </form>
  </div>
<script type="text/javascript">
 function chkpassword()
 {
   var init = document.getElementById("pass");
   var sec = document.getElementById("cpass");
   if (init.value != sec.value){
     alert("The password is not matching.\nPlease re-enter the password");
     setTimeout(' window.location.href = "register.php", 2000');
   }
 }
document.getElementById("form").onregister = chkpassword;
</script>

 </body>
</html>
