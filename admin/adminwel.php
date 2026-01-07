<?php
include "config.php";
session_start();
if(!isset($_SESSION['userid'])){
    header("Location:/miniproject/admin/adminlog.php");
    exit();
}
$userid=$_SESSION['userid'];
?>
<html>
<head>
<title>Admin Welcome Page</title>
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

h1{
color:rgb(28,44,68);
font-family:monospace;
font-size:70px;
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
    <a href="/miniproject/admin/genetable.php">GENERAL ENQUIRY</a>
    <a href="/miniproject/admin/admetable.php">ADMISSION ENQUIRY</a>
    <a href="/miniproject/admin/feedtable.php">FEEDBACK</a>
    <a href="/miniproject/logout.php">LOGOUT</a>
</nav><br>
<h1>WELCOME TO ADMIN PAGE</h1><br><br>
<div style="text-align:center;">
    <h2>Click here to edit HOD list</h2>
    <button onclick="window.location.href='edithodtable.php'" style="padding: 5px 10px;background-color:rgb(28,44,68);color:white;">Edit</button>
</div>
<div style="text-align:center;">
    <h2>Click here to edit student list</h2>
    <button onclick="window.location.href='studenttable.php'" style="padding: 5px 10px;background-color:rgb(28,44,68);color:white;">Edit</button>
</div>
</body>
</html>