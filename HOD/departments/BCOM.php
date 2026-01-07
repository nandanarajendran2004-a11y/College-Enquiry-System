<?php
session_start();
include "config.php";
if(!isset($_SESSION['name'])){
    header("Location:/miniproject/HOD/hodlog.php");
    exit();
}
?>
<html>
<head>
<title>Department Enquiries</title>
<style>
     nav {
    background-color: rgb(28, 44, 68); /* Background color for the nav bar */
    width: 100%; /* Ensures full width */
    padding: 7px; /* Adds spacing inside the nav */
    box-sizing: border-box; /* Includes padding in the total width */
    text-align:right;
    top: 0; /* Aligns it to the top of the page */
    left: 0; /* Ensures it starts from the left edge */
    height:40px;
}

nav a {
    color: white; /* Text color */
    margin-left: 15px; /* Adds space between links */
    font-size: 20px; /* Adjusts font size */
    line-height: 1.5; /* Improves spacing */
}
h1{
    text-align:center;
}
.container {
        display: flex;
        justify-content: space-between;
        padding: 20px;
    }

    .table-container {
        flex: 2;
    }

    .profile-container {
        border-right: 2px solid #ccc; /* Separator line */
        padding-left: 20px;
        width:15%;
    }
</style>
</head>
<body>
    <nav>
    <a href="/miniproject/logout.php">Logout</a>
</nav>
<div class="container">
 <!-- HOD Profile Section -->
 <div class="profile-container">
<?php
include "config.php";
$sql="SELECT * FROM tbl_hodprofile WHERE dept='commerce'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo " ";
}
if(mysqli_num_rows($result)>0)
{
    echo "<h1>PROFILE</h1>";
    {
        echo "<img style='width:200px;' src='/miniproject/profile.png'><br><br>";
        while($row=mysqli_fetch_assoc($result)){
            echo $row['name']."<br><br>";
            echo $row['dept']."<br><br>";
            echo $row['mail']."<br><br>";
            echo $row['tr_id']."<br><br>";
            echo $row['ph']."<br><br>";
            echo "<a href='BCOMupdate.php?id=".$row['id']."'><button>Update</button></a></td>";
        }
    }
}
?> 
</div>
        <!-- Table Section -->
<div class="table-container">
<?php
include "config.php";
$sql="SELECT * FROM tbl_bcom";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo " ";
}
if(mysqli_num_rows($result)>0)
{
    echo "<h1>ENQUIRIES</h1>";
    echo "<table align='center' cellspacing='2' cellpadding='8' height='55%' border='1' bordercolor='blue'";
    echo "<tr>
    <th>Name</th>
    <th>Admission No</th>
    <th>Enquiry</th>
    <th>Response</th></tr>";
    {
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>".$row['name']."</td>";
            echo "<td>".$row['adm_no']."</td>";
            echo "<td>".$row['enquiry']."</td>";
            echo "<td>".$row['answer']."</td>";
            echo "<td>
            <a href='bcomresponse.php?id=".$row['id']."'><button>Provide Response</button></a></td>";
        echo "</tr>";
        }
        echo "</table>";
    }
}
?> 
</div>
</div>
</body>
</html>