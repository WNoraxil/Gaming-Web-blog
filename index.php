<!--All pages are not responsive yet-->

<?php
 require "headerLogout.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/index.css">
  <title></title>
</head>
<body>
   <div class="grid">

      <div class="grid-wrapper1">
        <div class="header1">
           <h3>Latest News</h3>
        </div>
        <div class="content-left">
          <h3>Content on the left</h3>
        </div>
      </div>

      <div class="grid-wrapper2">
        <div class="header2">
          <h2>Welcome to your entertainment</h2>
        </div>
        <div class="content-middle">
          <p>Please Login to your profile, to view all content</p>
          <button id="modal-btn" class="button">Login</button>
        </div>
      </div>

      <div class="grid-wrapper3">
        <div class="header3">
          <h3>Latest News</h3>
        </div>
        <div class="content-right">
          <h3>Content on the right</h3>
        </div>
      </div>

   </div>
   <div id="my-modal" class="modal">
    <div class="modal-content">
      <div class="modal-header">
        <span class="close">&times;</span>
        <h2 class="h2">Please Login into your Account...</h2>
      </div>
      <div class="modal-body">
        <form action="includes/login.inc.php" class="go-bottom" method="post">
          <h2>Welcome back to our Community User!</h2>
          <div>
            <input id="email" name="uname-email" type="text" required>
            <label for="mail">Enter Username or Email</label>
          </div>
          <div>
            <input id="password" type="password" name="pass" required>
            <label for="password">Enter your Password...</label>
          </div>
          <button type="submit" name="login" class="loginBtn">Login</button><a href="#" class="forgotPwd" id="forgotPwd">Forgot Password ?</a><br><br>
          <h3>Not part of our Community ?</h3>
          <a href="signup.php" class="sign-up">Sign up here</a>
        </form>
      </div>
      <div class="modal-footer">
        <h3>Modal Footer</h3>
      </div>
    </div>
  </div>

  <div id="forgotModal" class="modal2">
   <div class="modal-content">
     <div class="forgotHeader">
       <span class="closeBtn">&times;</span>
       <h2 class="h2">Reset Your Password</h2>
     </div>
     <div class="modal-body">
       <h4 class="hText">Don't worry, Resetting your password is easy, just tell us the email address you used to register to our entertainment</h4>
       <h5 class="hText">Please enter your email down below!</h5>
       <form class="forgotForm">
         <input type="text" id="mail" name="mail" placeholder="Type your Email...">
         <button type="button" name="button" class="forgotBtn">Send</button>
       </form>
     </div>
     <div class="modal-footer">
       <h3>Modal Footer</h3>
     </div>
  <script src="js/index.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

  </script>
</body>
</html>
