<?php
include "config.php";
if(isset($_POST['submit']))
{
    $enquiry=$_POST['enquiry'];
    $answer=$_POST['answer'];
    $id = $_POST['id']; 
    $sql="UPDATE tbl_admenq SET enquiry='$enquiry',answer='$answer'WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('Response submitted');
        window.location='admetable.php';</script>";
        }
        else{
            echo "Error".$sql."<br>". mysqli_error($conn);
        }  
}
if(isset($_POST['id']))
{
    $id =  $_POST['id'];
    $sql="SELECT * FROM tbl_admenq WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
    }
}
?>

<html>
<head>
<title>Response Form</title>
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
<h2 class="heading">PROVIDE RESPONSE</h2>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

Enquiry:<br>
<textarea name="enquiry" id="enquiry" cols="40" rows="5" required><?php echo $row['enquiry'];?></textarea><br><br>

Answer:<br>
<textarea name="answer" id="answer" cols="40" rows="5" required><?php echo $row['answer'];?></textarea><br><br>

<button type="submit" name="submit">Submit</button>
</form>
</div>
</body>
</html>