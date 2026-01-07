<?php
include "config.php";
if(isset($_POST['submit']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $log_id=$_POST['log_id'];
    $dept=$_POST['dept'];
    $sql="UPDATE tbl_hodid SET name='$name',log_id='$log_id',dept='$dept' WHERE id='$id'";
    if(mysqli_query($conn,$sql)){
        echo "<script>alert('HOD profile updated');window.location='edithodtable.php';</script>";
        }
        else{
            echo "Error".$sql."<br>". mysqli_error($conn);
        }  
}
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $sql="SELECT * FROM tbl_hodid WHERE id='$id'";
    $result=mysqli_query($conn,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
    }
}
?>

<html>
<head>
<title>Edit HOD</title>
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
<h2 class="heading">EDIT HOD</h2>
<form method="POST">
<input type="hidden" name="id" value="<?php echo $row['id'];?>">

Name:<br>
<input type="text" name="name" id="name" value="<?php echo $row['name'];?>" required><br><br>

Log_id:<br>
<input type="text" name="log_id" id="log_id" value="<?php echo $row['log_id'];?>" required><br><br>

Department:<br>
<input type="text" name="dept" id="dept" value="<?php echo $row['dept'];?>"  required>

<button type="submit" name="submit">Update</button>
</form>
</div>
</body>
</html>