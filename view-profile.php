<!--All pages are not responsive yet-->

<?php
require 'profile-header.php';
require 'header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/view-profile.css">
    <title></title>
  </head>
  <body>
    <div class="profile-box">

      <div class="left-box">
        <div class="pfp">
          <img class="pic" src="images/mypic.jpg" alt="Profile Image" width="50px" height="50px">
        </div>
        <div class="content-left">
          <ul>
            <li><label class="info-header">Firstname</label><span class="info-text">Wimpie</span></li>
            <li><label class="info-header">Lastname</label><span class="info-text">Norman</span></li>
            <li><label class="info-header">Email</label><span class="info-text">wimpie.norman@gmail.com</span></li>
            <li><label class="info-header">Phone Number</label><span class="info-text">0824560951</span></li>
          </ul>
        </div>
      </div>

      <div class="right-box">
        <div class="about">
          <h3 class="about-header">About Me</h3>
          <p class="about-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>

    </div>
    <div class="footer">
      <h2>This is a Footer</h2>
    </div>
  </body>
</html>
