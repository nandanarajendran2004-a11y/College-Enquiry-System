<?php
include "config.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $title=$_POST['title'];
    $hod=$_POST['hod'];
    $email=$_POST['email'];
    $ph=$_POST['ph'];
    $sql="INSERT INTO tbl_pg (id,title,hod,email,ph) VALUES('$id','$title','$hod','$email','$ph')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('New course added');window.location='pgtable.php';</script>";
        }
        else{
        echo "Error";
        }
}
?>
<html>
<head>
<title>ADD COURSE</title>
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
<h1 class="heading">ADD COURSE</h1>
<div class="login-container">
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

Name:<br>
<input type="text" name="title" id="title" required><br><br>

HOD:<br>
<input type="text" name="hod" id="hod" required><br><br>

Email:<br>
<input type="text" name="email" id="email" required><br><br>

Phone number:<br>
<input type="text" name="ph" id="ph" minlength=10 maxlength=10 required><br><br>

<button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>