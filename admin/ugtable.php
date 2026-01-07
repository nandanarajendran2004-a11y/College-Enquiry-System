<html>
<head>
<title>NEWS</title>
<style>
    body
    {
        background-color:  #f3f0d7;
    }
     nav {
    background-color: rgb(28, 44, 68); /* Background color for the nav bar */
    width: 100%; /* Ensures full width */
    padding: 7px; /* Adds spacing inside the nav */
    box-sizing: border-box; /* Includes padding in the total width */
    text-align:center;
    top: 0; /* Aligns it to the top of the page */
    left: 0; /* Ensures it starts from the left edge */
    height:50px;
}

nav a {
    color: white; /* Text color */
    margin-left: 15px; /* Adds space between links */
    font-size: 22px; /* Adjusts font size */
    line-height: 1.5; /* Improves spacing */
    text-decoration:none;
}

</style>
<body>
    <nav>
    <a href="/miniproject/home.php">HOME</a>
    <a href="/miniproject/admin/newstable.php">NEWS</a>
    <a href="/miniproject/admin/pgtable.php">PG</a>  
    <a href="/miniproject/admin/genetable.php">GENERAL ENQUIRY</a>
    <a href="/miniproject/admin/admetable.php">ADMISSION ENQUIRY</a>
    <a href="/miniproject/admin/feedtable.php">FEEDBACK</a>
    <a href="/miniproject/logout.php">LOGOUT</a>
</nav><br>
</body>
</html>
<?php
include "config.php";
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:/miniproject/admin/adminlog.php");
    exit();
}
$userid=$_SESSION['userid'];
$sql="SELECT * FROM tbl_ug";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error:".$sql."<br>".mysqli_error($conn);
}
else{
    echo "<br>";
    echo "<h1 style='text-align: center;'>UG DETAILS</h1>";
    echo "<div style='text-align:center;'>
    <button onclick=\"window.location.href='addug.php'\" style=\"padding: 5px 10px;background-color:rgb(28,44,68);color:white;\">Add Course</button>
</div><br>";
    echo "<table align='center' cellspacing='2' cellpadding='8'width='80%' height='55%' border='1' bordercolor='blue'style='text-align: center;'>";
    echo "<tr><th>SI NO</th><th>NAME</th><th>HOD</th><th>MAIL</th><th>PHONE</th><th>ACTION</th></tr>";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>". $row['id']."</td>";
            echo "<td>". $row['title']."</td>";
            echo "<td>". $row['hod']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "<td>". $row['ph']."</td>";
            echo "<td>
            <a href='editug.php?id=".$row['id']."'><button>Edit</button></a></td>";
        echo "</tr>";
        }
        echo "</table>";
    }

}
?>