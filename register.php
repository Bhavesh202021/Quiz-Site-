<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav>
    
    <a href="login.php">Login</a><br>
    <a href="register.php">Register</a><br>
    <a href="index.php">Homepage</a><br>
   
    </nav>

    <div style>
<style>
    h1 {
       color : Blue ;
  } 
  .loginform {
    background-color: #ffd6d6;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
  }
  .loginform form {
      background-color: aqua;
      width: 30%;
      height: 600px;
      border-radius: 25px;
  }
  .loginform input {
    border: 1px solid #eee;
    padding: 10px 10px;
    width: 90%;
    margin: 10px 15px;
    border-radius: 15px;
    height: 30px;
    font-size: 18px;
    
  }
  .loginform .btn {
    width: 95%;
    margin: 10px 10px;
    border: 1px solid #eee;
    padding: 15px 10px;
    font-size: 20px;
    line-height: 20px;
    height: 50px;
    margin-top:30px;
  }
  .Register {
      background-color: #ffd6d6;
      text-align: left;
      height: 100vh;}
  .welcome {
      background-color: #ffd6d6;
      text-align: center;
      height: 100vh;
  }
  .welcome h1 {
      margin:0;
  }
  .loginform label {
      color: black;
      font-size: 20px;
      margin:0 0 10px 0;
      text-align:left;
  }
  .inputfield {
      padding: 20px 0 0 0;
  }
  nav{
    background-color: #ffd6d6;
    width:100%;  
}
</style>
    <div class="welcome">
<h1 id="heading"> Registration</h1><br>

<div class="loginform">
<form action="" method="post">
<div class="inputfield">
<label for="fname">First Name :</label><input type="text" required name="f_name" id="f_name"><br>
</div>
<div class="inputfield">
<label for="lname">Last Name :</label><input type="text" required name="l_name" id="l_name"><br>
</div>
<div class="inputfield">
<label for="email">Email :</label><input type="email" required name="email" id="email"><br>
</div>
<div class="inputfield">
<label for="password">Password :</label><input type="password" required name="password" id="password"><br>
</div>
<div class="inputfield">
<label for="password">Confirm Password :</label><input type="password" required name="con_password" id="con_password"><br>
</div>
<div class="inputfield">
<input type="submit" name="submit" value="Register">
</div>
</form>
</div>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
include("dbconnect.php");
$fname=$_POST['f_name'];
$lname=$_POST['l_name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$conpass=$_POST['con_password'];

if($pass==$conpass)
{
    $password=sha1($pass);
    if(filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $query="INSERT INTO `students`(`f_name`, `l_name`, `email`, `password`) VALUES ('$fname','$lname','$email','$password') ";
        if(mysqli_query($conn,$query))
        {
            echo "Registration Successfull";
        }
        else {
            echo "an Error Occured";
        }
    }
    else {
        echo "Invalid Email";
    }
}
else{
    echo "Password and Confirm Password Doesnt Match";
}


}

?>