<?php
session_start();
require_once ('config.php');

$username = $_POST['username'];
$password = $_POST['password'];



 $sql= "SELECT * FROM buyer WHERE uname = ? AND pass = ? LIMIT 1";
 $stmtselect = $db->prepare($sql);
 $result =  $stmtselect->execute([$username, $password]);

 if($result){
    $user = $stmtselect->fetch(PDO::FETCH_ASSOC);
    if($stmtselect->rowCount() > 0){
      $_SESSION['userlogin'] = $user;
      echo 'Welcome to our website';
    }
    else{
      echo 'User not identified.Please sign up';
    }
   }
   else {
   echo 'There were errors while connecting';
   }
 ?>
