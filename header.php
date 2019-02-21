<!--All pages are not responsive yet-->

<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/header.css">
  </head>
  <body>
    <header>
      <div class="logo">LOGO </div>
      <nav>
        <ul>
          <li><a href="home.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li class="sub-menu"><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Profile </a>
             <ul>
               <li><a href="view-profile.php">View Profile</a></li>
               <li><a href="editProfile.php">Edit Profile</a></li>
               <li><a href="friends.php">Friends</a></li>
               <li><a href="inbox.php">Messages</a></li>
               <li><a href="includes/logout.inc.php">Logout</a></li>
             </ul>
          </li>
          <li><a href="#"><i class="fa fa-info" aria-hidden="true"></i> About Us</a></li>
          <li><a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i> Contact Us</a></li>
        </ul>
      </nav>
      <div class="menu-toggle">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
      $(document).ready(
        function() {
          $('.menu-toggle').click(function() {
            $('nav').toggleClass('active')
          })

          $('ul li').click(function() {
            $(this).siblings().removeClass('active');
            $(this).toggleClass('active');
          })
        }
      )
    </script>
  </body>
</html>
