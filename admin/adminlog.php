<?php
include "config.php";
session_start();
if(isset($_POST['submit']))
{
    $userid=$_POST['userid'];
    $pwd=$_POST['pwd'];
    $sql="SELECT * FROM tbl_admin WHERE userid='$userid'";
    $result=mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
     $row=mysqli_fetch_assoc($result);
     if($pwd==$row['pwd']){
      $_SESSION["userid"] = $userid;
      header("Location:adminwel.php");
    }
      else{
      echo "<script>alert('Invalid login credentials.');</script>";
  }
}
echo "<script>alert('Invalid login credentials.');</script>";
}
?>

<html>
<head>
<title>Login Form</title>
<style>
  body {
background-color:#f3f0d7;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
  }

  .heading {
    font-size: 28px;
    color: #333;
    margin-bottom: 20px;
    text-align: center;
  }

  .login-container {
    background-color: white;
    padding: 50px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 100%;
    max-width: 400px;
  }

  .login-container input[type="text"],
  .login-container input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border:1px solid #ccc ;
    border-radius: 4px;
    font-size: 14px;
  }

  .login-container button {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    color: white;
    background-color: #007BFF;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }
</style>
</head>
<body>
    <div class="login-container">
<h2 class="heading">Admin Login</h2>
<form method="POST">

Userid:<br>
<input type="text" name="userid" id="userid" required><br><br>

Password:<br>
<input type="password" name="pwd" id="pwd" required><br><br>


<button type="submit" name="submit">Login</button>
</form>
</div>
</body>
</html>