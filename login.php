<?php

if(isset($_SESSION['userlogin'])){
  header ("Location: index.php");
}
 ?>


<!DOCTPYE html>
<html>
<head>
  <title>Login page</title>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">


</head>
<body>
   <div class="container h-100">
     <div class="d-flex justify-content-center h-100">
             <div class="user-card">
                  <div class="d-flex justify-content-center form_container">
                         <form>

                              <div class="input-group mb-3">
                                           <div class="input-group-append">
                                                    <span class="input-group-text"><i class="fas fa-user"</i></span>
                                           </div>
                                          <input type="text" name="uname" id="uname"  placeholder="Enter your username" class="form-control input_user" required >
                              </div>
                              <div class="input-group mb-2">
                                          <div class="input-group-append">
                                                       <span class="input-group-text"><i class="fas fa-key"></i></span>
                                          </div>
                                         <input type="password" name="pass" id="pass" placeholder="Enter your password" class="form-control input_pass" required >
                               </div>
                               <div class="form-group">
                                       <div class="custom-control custom-checkbox">
                                                <input type="checkbox" name="rememberme" class="custom-control-input" id="customControlInline">
                                                 <label class="custom-control-label" for="customControlInline">Remember me</label>
                                       </div>
                               </div>

                  </div>
                 <div class="d-flex justify-content-center mt-3 login-container">
                             <button type="button" name="button" id="login" class="btn login_btn">Login as buyer</button>
                  </div>
                  <div class="d-flex justify-content-center mt-3 login-container">
                              <button type="button" name="button" id="login1" class="btn login_btn">Login as seller</button>
                   </div>
                    </form>
                   <div classs="mt-4">
                          <div class="d-flex justify-content-center links">Don't have an account?<a href="register.php" class="ml-2">Sign up</a>
                           </div>
                        
                   </div>
        </div>
      </div>
    </div>
    <script
          src="https://code.jquery.com/jquery-3.5.1.min.js"
          integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
     <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <script>
           $(function(){
             $('#login').click(function(e){

               var valid = this.form.checkValidity();

               if(valid){
                  var username = $('#uname').val();
                  var password = $('#pass').val();

                }
               e.preventDefault();

               $.ajax({
                 type: 'POST',
                 url:  'jslogin.php',
                 data: {username: username, password: password},
                success: function(data){
                  alert(data);
                  if($.trim(data) === "Welcome to our website"){
                      setTimeout(' window.location.href = "index.php", 2000');
                }
              },
                error: function(data){
                  alert('there was some error');
                }
              });

             });
              });
       </script>
       <script>
            $(function(){
              $('#login1').click(function(e){

                var valid = this.form.checkValidity();

                if(valid){
                   var username = $('#uname').val();
                   var password = $('#pass').val();

                 }
                e.preventDefault();

                $.ajax({
                  type: 'POST',
                  url:  'jslogin1.php',
                  data: {username: username, password: password},
                 success: function(data){
                   alert(data);
                   if($.trim(data) === "Welcome to our website.You can add ur advertisement  here."){
                       setTimeout(' window.location.href = "upload.php", 2000');
                 }
               },
                 error: function(data){
                   alert('there was some error');
                 }
               });

              });
               });
        </script>
</body>
</html>
