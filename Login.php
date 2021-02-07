<?php 

if(isset($_COOKIE['new_login']) && !empty($_COOKIE['new_login']))
{
header("location:Dashboard.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
 /*body {background-image: url(https://thumbs.dreamstime.com/b/iot-internet-things-information-communication-network-artificial-intelligence-website-banner-datacenter-background-iot-internet-149953728.jpg);
        background-repeat: no-repeat;
        background-size:  100%;} */
  h1 {
       color : ##1F618D ;
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
      width: 40%;
      height: 350px;
      border-radius: 20px;
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
      color: #fff;
      font-size: 20px;
      margin:0 0 10px 0;
      text-align:left;
  }
  .inputfield {
      padding: 20px 0 0 0;
  }
  .images {
            display: flex;
            align-items: center;
            justify-content: space-around;
        }
        .images img {
            width: 300px;
            height: 300px;
            border-radius: 15px;
            border: 3px solid #ff523b;
            cursor: pointer;
            transition: all 05s;}
</style>
</head>

<body style="background color:#ffd6d6";>

<div class="Register">
<h1><marquee behavior="scroll" direction="left">Register if new candidate</marquee></h1>
<h1>
<a href="register.php"></a></h1>
 
<div class="welcome">
                
<h1 id="heading"><marquee behavior="scroll" direction="left">Welcome to My Website</marquee> </h1><br>
<h1>Login</h1>
<div class="loginform">

<form method="POST" > 
<div class="inputfield">
<label>Username</label>
<input type="text" required name="fullname"  placeholder="Fullname" >
</div>
<div class="inputfield">
<label>Email</label>
<input type="text" required name="email"  placeholder="Email" >
</div>
<!-- <div class="inputfield">
<label>Password</label>
<input type="text" required name="email"  placeholder="Password">
</div> -->

<input type="submit" name="submit" value="Submit" class="btn">

</div>
</form>
</div>
    
 
</h1>
<?php
if(isset($_POST['submit']))
{ 
$email=$_POST['email'];

$email=filter_var($email,FILTER_SANITIZE_EMAIL);
if(filter_var($email,FILTER_VALIDATE_EMAIL))

{
    setcookie("new_login",$email,time()+3600,"/");
    header("location:Dashboard.php");
}
else 
{
    echo "WRONG EMAIL";
}
}
?>


</body>
</html>

