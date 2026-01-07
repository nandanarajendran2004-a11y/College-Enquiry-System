<?php
include "config.php";
if(isset($_GET['pwd'])){
    $pwd=$_GET['pwd'];
    $sql="DELETE FROM tbl_student WHERE pwd='$pwd'";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "<script>alert('Record deleted successfully');
        window.location='studenttable.php';</script>";
    }
    else{
        echo "Error:".$sql."<br>".mysqli_error($conn);
    }
}
?>