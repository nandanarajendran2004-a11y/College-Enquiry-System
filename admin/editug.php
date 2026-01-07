<?php
include "config.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $title=$_POST['title'];
    $hod=$_POST['hod'];
    $email=$_POST['email'];
    $ph=$_POST['ph'];
    $sql="UPDATE tbl_ug SET title='$title',hod='$hod',email='$email',ph='$ph' WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Edited Course');window.location='ugtable.php';</script>";
        }
        else{
            echo "Error".$sql."<br>". mysqli_error($conn);
        }  
}
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_ug WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
    }
}
?>

<html>
<head>
<title>EDIT COURSE</title>
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
<h2 class="heading">EDIT COURSE</h2>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

Name:<br>
<input type="text" name="title" id="title"value="<?php echo $row['title'];?>" required><br><br>

HOD:<br>
<input type="text" name="hod" id="hod"value="<?php echo $row['hod'];?>" required><br><br>

Email:<br>
<input type="text" name="email" id="email" value="<?php echo $row['email'];?>"required><br><br>

Phone number:<br>
<input type="text" name="ph" id="ph" minlength=10 maxlength=10 value="<?php echo $row['ph'];?>"required><br><br>
<button type="submit" name="submit">Update</button>
</form>
</div>
</body>
</html>