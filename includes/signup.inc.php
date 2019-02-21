<?php
// If statement used to see if user clicked submit button
if (isset($_POST['signup-submit'])) {
  require 'dbh.inc.php';

  // Fetching the infomation from the form.
  $username = $_POST['username'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $num = $_POST['phone'];
  $birthDate = $_POST['date'];
  $gen = $_POST['gender'];
  $avatar = $_POST['avatar'];

  // Check if any input fields are empty.
  if (!isset($username) || !isset($firstname) || !isset($lastname) || !isset($email) || !isset($num) || !isset($birthDate) || !isset($birthDate) || !isset($gen)) {
    header ("Location: ../signup.php?error=emptyfields");
    die();
  } // Check for a valid email address.
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      // Check for valid email.
      header("Location: ../signup.php?error=invalidemail&uid=".$username);
      exit();
    } // Check for valid input.
      elseif (!preg_match("/^[a-zA-Z]*$/", $username)) {
       header("Location: ../signup.php?error=invalidusername&email=".$email);
       exit();
     } elseif (!preg_match("/^[a-zA-Z]*$/", $firstname)) {
         header("Location: ../signup.php?error=invalidfirstname&email=".$email);
         exit();
       } elseif (!preg_match("/^[a-zA-Z]*$/", $lastname)) {
          header("Location: ../signup.php?error=invalidlastname&email=".$email);
          exit();
        } elseif (!preg_match("/^[a-zA-Z@!=_.-]*$/", $email)) {
            header("Location: ../signup.php?error=invalidemail");
            exit();
          } elseif (!preg_match("/^[0-9+]*$/", $num)) {
              header("Location: ../signup.php?error=invalidnumber");
              exit();
            }
             else {
               $target_path = "../images/";
               $target_path = $target_path.basename($_FILES['avatar']['name']);
               if (move_uploaded_file($_FILES['avatar']['tmp_name'], $target_path)) {
                 $sql = "Insert into users('u_avatar') values('$target_path')";
               }
               $selectEmail = "SELECT u_email FROM users WHERE u_email=? Limit 1";
               $selectUsername= "SELECT u_username FROM users WHERE u_username=? Limit 1";
               $INSERT = "INSERT INTO users (u_username, u_pwd, u_firstname, u_lastname, u_email, u_date, u_num, u_gen) VALUES(?, ?, ?, ?, ?, ?, ?, ?)";

               $stmt = $conn->prepare($selectUsername);
               $stmt-> bind_param("s", $username);
               $stmt-> execute();
               $stmt->bind_result($username);
               $stmt->store_result();
               $unum = $stmt->num_rows;

               $stmt = $conn->prepare($selectEmail);
               $stmt-> bind_param("s", $email);
               $stmt-> execute();
               $stmt->bind_result($email);
               $stmt->store_result();
               $enum = $stmt->num_rows;

               if ($unum!==0) {
                 header ("Location: ../signup.php?error=usernametaken");
               } elseif ($enum==0) {
                 require "password.inc.php";
                  $stmt->close();
                  $stmt = $conn->prepare($INSERT);
                  $stmt-> bind_param("ssssssis", $username, $hashedPwd, $firstname, $lastname, $email, $birthDate, $num, $gen);
                  $stmt-> execute();

                } else {
                   header ("Location: ../signup.php?error=emailtaken");
                  }
            }

} else {
  header ("Location: ../signup.php");
 }
