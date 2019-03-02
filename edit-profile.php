<?php
require 'header.php';
require 'profile-header.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/edit-profile.css">
  </head>
  <body>
    <div class="profile-box">

      <div class="left-box">
          <div class="pfp">
            <img class="pic" src="images/mypic.jpg" alt="Profile Image" width="50px" height="50px">
          </div>
        <div class="content-left">
          <form action="edit.inc.php" method="post">
          <ul>
            <li><label class="info-header">Firstname</label><br><input class="input-left" type="text" name="fName" placeholder="Firstname..."></li><br><br>
            <li><label class="info-header">Lastname</label><br><input class="input-left" type="text" name="fName" placeholder="Lastname..."></li><br><br>
            <li><label class="info-header">Email</label><br><input class="input-left" type="text" name="fName" placeholder="Email..."></li><br><br>
            <li><label class="info-header">Phone Number</label><br><input class="input-left" type="text" name="fName" placeholder="Phone Number..."></li><br><br>
            <li><label class="info-header">Country</label><br><input class="input-left" type="text" name="fName" placeholder="Country..."></li><br><br>
          </ul>
         </form>
        </div>
      </div>

      <div class="right-box">
        <div class="about">
          <h3 class="about-header">About Me</h3>
          <textarea class="input-about" name="aboutme" rows="10" cols="126"></textarea>
          <h3 class="idea-header">Most Favourite Game</h3>
          <textarea class="input-about" name="aboutgame" rows="10" cols="126"></textarea>
        </div>
        <div class="saveBtnDiv">
          <button type="submit" name="submit-save" class="submit-save">Save Changes</button>
        </div>
      </div>
    </div>
    <div class="footer">
      <h2>This is a Footer</h2>
    </div>
  </body>
</html>
