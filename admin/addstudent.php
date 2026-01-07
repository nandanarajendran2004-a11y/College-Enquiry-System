<?php
include "config.php";
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $pwd=$_POST['pwd'];
    $dept=$_POST['dept'];
    $userid=$_POST['userid'];
    $adm_no=$_POST['adm_no'];
    $sql="INSERT INTO tbl_student (name,pwd,dept,userid,adm_no) VALUES('$name','$pwd','$dept','$userid','$adm_no')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('New student profile created');window.location='studenttable.php';</script>";
        }
        else{
        echo "Error";
        }
}
?>
<html>
<head>
<title>ADD STUDENT</title>
<style>
    
body {
    margin: 0;
    font-family: Arial, sans-serif;
    background-color:#F5F5F5;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-image:url('htdocs/miniproject/bg.jpg');
    background-size:cover;
    background-repeat:no-repeat;
    background-position:center;
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
<h1 class="heading">STUDENT PROFILE</h1>
<div class="login-container">
<form method="POST">

Full Name:<br>
<input type="text" name="name" id="name" required><br><br>

Password:<br>
<input type="password" name="pwd" id="pwd" required><br><br>

User id:<br>
<input type="text" name="userid" id="userid" required><br><br>

Admission number:<br>
<input type="text" name="adm_no" id="adm_no" required><br><br>

Department:<br>
    <select name="dept">
    <option value=""></option>  
    <option value="Computer Science">Computer Science</option>
    <option value="Commerce">Commerce</option>
    <option value="Social Work">Social Work</option>
    <option value="Mathematics">Mathematics</option>
    </select><br><br>
<button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>