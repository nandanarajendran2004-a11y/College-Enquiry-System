<?php
include "config.php";
session_start();
if(!isset($_SESSION['userid'])){
  echo "<script>alert('Please log in first');
  window.location='studentlog.php';</script>";
  exit;
  }
  $name=$_SESSION['name'];
  $adm_no=$_SESSION['adm_no'];
if(isset($_POST['submit']))
{
    $enquiry=$_POST['enquiry'];
    $sql="INSERT INTO tbl_bcom (name,adm_no,enquiry) VALUES('$name','$adm_no','$enquiry')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Enquiry Inserted Successfully');</script>";
        }
        else{
        echo "Error";
        }
}
?>
<html>
<head>
<title>Department Enquiry Form</title>
<style>
     nav {
    background-color: rgb(28, 44, 68); /* Background color for the nav bar */
    width: 100%; /* Ensures full width */
    padding: 7px; /* Adds spacing inside the nav */
    box-sizing: border-box; /* Includes padding in the total width */
    text-align:right;
    position: fixed; 
    top: 0; /* Aligns it to the top of the page */
    left: 0; /* Ensures it starts from the left edge */
    height:50px;
}

nav a {
    color: white; /* Text color */
    margin-left: 15px; /* Adds space between links */
    font-size: 20px; /* Adjusts font size */
    line-height: 1.5; /* Improves spacing */
    text-decoration:none;
}
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
<nav>
  <a href="/miniproject/student/forms/bcomview.php">ViewResponse</a>
  <a href="/miniproject/home.php">Logout</a>
</nav>
<h1 class="heading">DEPARTMENT ENQUIRY FORM</h1>
<div class="login-container">
<form method="POST">

Full Name:<br>
<input type="text" name="name" id="name" value="<?php echo $name;?>" required readonly><br><br>

Admission Number:<br>
<input type="text" name="adm_no" id="adm_no" value="<?php echo $adm_no;?>" required readonly><br><br>

Enquiry:<br>
<textarea name="enquiry" id="enquiry" cols="40" rows="5" required></textarea><br><br>
<button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>