<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $log_id=$_POST['log_id'];
    $dept=$_POST['dept'];
    $sql="SELECT * FROM tbl_hodid WHERE name='$name' && log_id='$log_id'";
    $result=mysqli_query($conn,$sql);
    if ($result && mysqli_num_rows($result) > 0) {
    $row=mysqli_fetch_array($result);

        if ($row["dept"] == "Computer Science") {
          $_SESSION["name"] = $name;
            header("Location: departments/BCA.php");
            exit;}
        elseif ($row["dept"] == "Mathematics") {
          $_SESSION["name"] = $name;
            header("Location: departments/MATH.php");
            exit;}
        elseif ($row["dept"] == "Social Work") {
          $_SESSION["name"] = $name;
            header("Location: departments/BSW.php");
            exit;}
        elseif ($row["dept"] == "Commerce") {
          $_SESSION["name"] = $name;
            header("Location: departments/BCOM.php");
            exit;}
         }
         else {
        echo "<script>alert('Invalid login credentials.');</script>";
    }
        
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
<h2 class="heading">LOGIN </h2>
<form method="POST">

Name:<br>
<input type="text" name="name" id="name" required><br><br>

Log Id:<br>
<input type="password" name="log_id" id="log_id" required><br><br>

Department:<br>
<select name="dept">
<option value=""></option>  
<option value="Computer Science">Computer Science</option>
<option value="Commerce">Commerce</option>
<option value="Social Work">Social Work</option>
<option value="Mathematics">Mathematics</option>
</select><br><br>

<button type="submit" name="submit">Login</button>
</form>
</div>
</body>
</html>