<html>
<head>
<title>ENQUIRY SITE</title>
<style>
h1{
color:rgb(7,63,248);
font-family:monospace;
font-size:70px;
text-align:center;
}
nav{
background-color:rgb(28,44,68);
text-align:right; 
padding:7px;
width:100%;
}

nav a{
color:white;
background-color:rgb(28,44,68);
}
.image{
display:flex;  /*to provide correct position based on structure*/
align-items:center;
}
.text{
margin-right:20px;
}
marquee{
height:35;
font-size:25;  
margin:0;
padding:0;
background-color:rgb(28,44,68);
color:white;
}
h2{
background-color:rgb(249,236,212);
color:darkred;
margin:0;
padding:20px;
}

footer{
padding:10px;
background-color:lightblue;
margin-top: auto; 
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
    border-radius: 30px;
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
</style>
</head>

<body>
  <nav>
    <select style="background-color:rgb(28,44,68);color:white;" onchange="location=this.value;">
        <option value="" disabled selected>ACADEMICS</option>  
        <option value="ug.php">UG</option>
        <option value="pg.php">PG</option>
    </select>
    <select style="background-color:rgb(28,44,68);color:white;" onchange="location=this.value;">
        <option value="" disabled selected>LOGIN</option>  
        <option value="admin/adminlog.php">Admin</option>
        <option value="hod/hodlog.php">HOD</option>
        <option value="student/studentlog.php">Student</option>
    </select>

</nav>
<?php
include "config.php";
$sql="SELECT news FROM tbl_news ORDER BY time DESC LIMIT 1";
$result=mysqli_query($conn,$sql);
$marqueeContent='';
if(mysqli_num_rows($result) > 0){
  while($row=mysqli_fetch_assoc($result)){
    $marqueeContent=$row['news'];
  }
}
else{
  $marqueeContent="No marquee content available";
}
?>
<script>
  window.onload=function() {
    //Rest LOGIN dropdown to default "LOGIN" option on page load
    document.getElementById('loginDropdown').selectedIndex=0;
  };
  </script>
<div class="image">
<div class="text">
<img style="width:200px;"src="bvm.png"></div>
<h1>BISHOP VAYALIL MEMORIAL HOLY CROSS COLLEGE CHERPUNKAL</h1></div>
<marquee behaviour="scroll" direction="left">News Updates: <?php echo htmlspecialchars($marqueeContent);?></marquee>
<h2>UG</h2>
</body>
</html>
<?php
include "config.php";
$sql="SELECT * FROM tbl_pg";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error:".$sql."<br>".mysqli_error($conn);
}
else{
    echo "<br>";
    echo "<table align='center' cellspacing='2' cellpadding='8'width='40%' height='30%' border='1' bordercolor='blue'style='text-align: center;'>";
    echo "<tr><th>SI NO</th><th>NAME</th><th>HOD</th><th>MAIL</th><th>PHONE</th></tr>";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>". $row['id']."</td>";
            echo "<td>". $row['title']."</td>";
            echo "<td>". $row['hod']."</td>";
            echo "<td>". $row['email']."</td>";
            echo "<td>". $row['ph']."</td>";
        }
        echo "</table>";
    }

}
?>