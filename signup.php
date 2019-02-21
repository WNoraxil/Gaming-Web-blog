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
  <link rel="stylesheet" href="css/signup.css">
  <title></title>
</head>
<body>
  <div class="wrapper">
    <div class="header">
      <h2 class="signHeader">Please Register...</h2>
    </div>
    <?php
     if (isset($_GET['error'])) {
       echo '<div class="errorbox">';
       if ($_GET['error'] == "emptyfields") {
         echo '<p class="errormsg">Fill in all the fields</p>';
       } elseif ($_GET['error'] == "invalidemail"){
          echo '<p class="errormsg">Not a valid Email</p>';
        } elseif ($_GET['error'] == "invalidusername"){
           echo '<p class="errormsg">Your Username is incorrect</p>';
          } elseif ($_GET['error'] == "invalidfirstname"){
              echo '<p class="errormsg">Your Firstname contains incorrect characters</p>';
             } elseif ($_GET['error'] == "invalidlastname"){
                echo '<p class="errormsg">Your Firstname contains incorrect characters</p>';
              } elseif ($_GET['error'] == "invalidnumber"){
                    echo '<p class="errormsg">Your phone number only contains numbers</p>';
                }
        echo '</div>';
     }
    ?>
    <form class="signup-form" id="form" method="post" action="includes/signup.inc.php">
      <div>
        <input id="userName" name="username" type="text" required>
        <label for="uid">Your Username</label>
      </div>
       <div>
         <input id="name" name="firstname" type="text" required>
         <label for="firstname">Your First Name</label>
       </div>
       <div>
         <input id="lastName" name="lastname" type="text" required>
         <label for="lastName">Your last Name</label>
       </div>
       <div>
         <input id="email" name="email" type="email" required>
         <label for="email">Your E-mail</label>
       </div>
       <div>
         <input id="number" name="phone" type="phone" required>
         <label for="phone">Primary Phone</label>
       </div>
       <div>
         <input id="date" name="date" type="date" required>
         <label for="date">Your Date of Birth</label>
       </div>
         <span class="gender">Gender:</span>
         <input type="radio" name="gender" value="m" checked/><span >Male</span>
         <input type="radio" name="gender" value="f"/><span >Female</span>
       <div>
         <input type="file" id="real-file" hidden="hidden" name="avatar"/>
         <button type="button" id="custom-button">Upload Avatar</button>
         <span id="custom-text">No avatar chosen, yet.</span><br><br>
       </div>
       <button type="submit" name="signup-submit" class="registerBtn">Register Now</button>
    </form>
   <div>
     <h4 class="signFooter">By clicking the 'Register Now' button, you agree to our <br>
		<a href="#"><font color="#ee2e24">Terms & Conditions</font></a>, and <a href="#"><font color="#ee2e24">Privacy Policy.</font></a></h4>
   </div>
  </div>
  <script src="js/signup.js" charset="utf-8"></script>
</body>
</html>
