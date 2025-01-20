<?php
     session_start();
     $connect = mysqli_connect('localhost','root','');

     mysqli_select_db($connect,'notion_lite_db');

     $username = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password']; //This comes from the input field, name propertly 

     $sql = "SELECT * FROM user_credentials WHERE email = '$email'";

     $result = mysqli_query($connect,$sql);

     $num = mysqli_num_rows($result); //This function returns the number of rows in the result set.

     if ($num == 1) {
      header("Location: SignIn.php");
             }

     else {
        $register = "INSERT into user_credentials(email,password,username) values ('$email','$password','$username')";
        mysqli_query($connect,$register);
        echo file_get_contents("SignIn.php");

     }
  ?>
