<html>
<head>
<title>General Enquiries</title>
<style>
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
h1{
    text-align:center;
}
</style>
</head>
<body>
    <nav>
    <a href="/miniproject/home.php">HOME</a>
    <a href="/miniproject/admin/newstable.php">NEWS</a>
    <a href="/miniproject/admin/ugtable.php">UG</a>
    <a href="/miniproject/admin/pgtable.php">PG</a>  
    <a href="/miniproject/admin/admetable.php">ADMISSION ENQUIRY</a>
    <a href="/miniproject/admin/feedtable.php">FEEDBACK</a>
    <a href="/miniproject/logout.php">LOGOUT</a>
</nav>
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
$sql="SELECT * FROM tbl_general";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo " ";
}
if(mysqli_num_rows($result)>0)
{
    echo "<h1>GENERAL ENQUIRIES</h1>";
    echo "<table align='center' cellspacing='2' cellpadding='8' height='55%' border='1' bordercolor='blue'";
    echo "<tr>
    <th>SI NO</th>
    <th>Name</th>
    <th>Place</th>
    <th>Phone</th>
    <th>Enquiry</th>
    <th>Response</th></tr>";
    {
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['place']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['enquiry']."</td>";
            echo "<td>".$row['answer']."</td>";
            echo "<td>
                <form action='generesponse.php' method='post'>
                    <input type='hidden' name='id' value='".$row['id']."'>
                    <button type='submit'
                    style=' cursor: pointer;'>Provide Response</button></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?> 