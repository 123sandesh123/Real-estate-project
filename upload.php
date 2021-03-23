<?php
require_once ('config.php');
if (isset( $_POST ["create"])){
  $pid       = $_POST['pid'];
  $pname     = $_POST['pname'];
  $address   = $_POST['address'];
  $uname     = $_POST['uname'];
  $description     = $_POST['description'];
  $price      = $_POST['price'];
  $bid        = $_POST['bid'];
  $bname      = $_POST['bname'];

  $filename   = $_FILES['avatar']['name'];
  $tempname   = $_FILES['avatar']['tmp_name'];
  $folder     = "\project\bootstrap-4.4.1-dist\pics\filename";
  move_uploaded_file($tempname,$folder);


         $sql = "INSERT INTO products (pid,pname,uname,img,description,price,bid,brand,address) VALUES (?,?,?,?,?,?,?,?,?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$pid,$pname,$uname,$folder,$description,$price,$bid,$bname,$address,]);
        echo 'Successfully saved';
        if ($result){
          header("Location:login.php");
                    }
        else {
                echo 'There were some errors while inserting';
              }
         }



?>
<!DOCTYPE html>
<html>
<head><title>Upload</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
  input[type=text]
  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  }
  body{
    background-color:#25f34d;
  }
  h2{
    color:#ffa444;
    text-align:center;
    text-decoration:underline;
  }
  </style>
</head>
<body>
  <form method="POST" action="upload.php">
    <div class="container">
      <h2>Fill the all data fields for posting your ad</h2>
      <div class="center">
        <p>
          <label for="pid"><b>Product id:</b></label>
          <input class="form-control" type="text" id="pid" name="pid"  placeholder="Enter any id for your product" required></p>

          <p>
              <label for="pname"><b>Product name:</b></label>
              <input class="form-control" type="text" id="pname" name="pname"  placeholder="Enter the  product name" required></p>
          <p>
              <label for="uname"><b>Username:</b></label>
              <input class="form-control" type="text" id="uname" name="uname"  placeholder="Enter your username" required></p>
            <p>
               <label for="address"><b>Address:</b></label>
              <input class="form-control" type="text" id="address" name="address"  placeholder="Enter the address of your product" required></p>
          <p>
                <label for="desc"><b>Description:</b></label>
                <input class="form-control" type="text" id="description" name="description"  placeholder="Enter the description of your product" ></p>
          <p>
                  <label for="price"><b>Price:</b></label>
                  <input class="form-control" type="text" id="price" name="price"  placeholder="Enter the product amount" required></p>
          <p>
                    <label for="bid"><b>Brand id:</b></label>
                    <input class="form-control" type="text" id="bid" name="bid"  placeholder="Enter the brand id for your product" required></p>
          <p>
                      <label for="brand"><b>Brand:</b></label>
                      <input class="form-control" type="text" id="bname" name="bname"  placeholder="Enter the brand of your product" required></p>

        <p><label for="img"><b>Choose an image:<b></label>
            <input type="file"
       id="avatar" name="avatar"
       accept="image/png, image/jpeg"></p>
           <pre>                <input class="btn btn-primary" type="submit" name="create" id="enter" value="Post the ad"></pre>

      </div>
    </div>
  </form>
</body>
</html>
