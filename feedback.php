<?php
require_once('config.php');
 ?>

<!DOCTYPE html>
<head>
  <title>Feedback</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
  h2{
    text-decoration: underline;
    font-style: italic;

  }
  input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
  textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
  }
  #c1{
    background-color: #25f34d;
    border-color:black;

  }
  #c2{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: #ffa444;
    border-color:black;
  }

  </style>
</head>
  <body>
    <?php
    if (isset( $_POST ["create"])){
      $uname    = $_POST['uname'];
      $type      = $_POST['type'];
      $feedback      = $_POST['fback'];

      $sql = "INSERT INTO feedback (uname,type,feedback) VALUES (?,?,?)";
     $stmtinsert = $db->prepare($sql);
     $result = $stmtinsert->execute([$uname,$type,$feedback]);

    if ($result){
       header("Location:home.php");
                 }
     else {
            echo 'There were some errors while inserting';
          }
        } ?>

   <form method="POST" action="feedback.php" >
     <div class="col-md-10">
       <div class="container" id="c1">

          <h2>Please fill the blank fields and give ur feedback</h2>
             <p>   <label >Name:</label>
               <input type="text" id="uname" name="uname"  placeholder="Enter your name" required></p>
             <p>   <label >Type:</label>
                  <select id="type" name="type">
                      <option value="buyer">Buyer</option>
                      <option value="seller">Seller</option>
                      <option value="none">None</option>
                   </select>
                 </p>
                <p>   <label >Feedback:</label>
                     <textarea id="fback" name="fback" placeholder="Enter the feedback here" ></textarea></p>
          <pre>                                                    <input class="btn btn-primary" type="submit" name="create" id="register" value="Submit"></input></pre>

</div>

</form>
           <div class="container" id="c2">

             <h2> Feedbacks:</h2>
               <?php
$sql = "SELECT * FROM feedback ";
$res = $db->query($sql);
?>
<?php while($feedback = $res->fetch(PDO::FETCH_ASSOC)) : ?>
    <p >Name:<?=$feedback ['uname']; ?></p>
     <p id="c2"><?=$feedback ['feedback']; ?></p>
       <?php endwhile; ?>
</div>
</div>
</body>
</html>
