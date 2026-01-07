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
<p>BVM Holy Cross College is a pioneering self-financing college affiliated to Mahatma Gandhi University, Kottayam. The college belongs to Roman Catholic Syrian Christian Community. It was founded in 1995 by the Holy Cross Forane Church,
  Cherpunkal of Diocese of Palai under the patronage of Palai Diocese. Situated in the renowned Infant Jesus pilgrimage centre alongside an idyllic ambience.B.V.M Holy Cross College is a pioneering self-financing college affiliated
  to Mahatma Gandhi University, Kottayam. The college belongs to Roman Catholic Syrian Christian Community. It was founded in 1995 by the Holy Cross Forane Church, Cherpunkal of Diocese of Palai under the patronage of Palai Diocese. 
  Situated in the renowned Infant Jesus pilgrimage centre alongside an idyllic ambience on the banks of Meenachil river, the college is enveloped in an aura that facilitates overall development of a student.Ideally located at the serene
  and holy environment of Cherpunkal, BVM provides an extraordinary environment for learning and self-development.The college owes its name to the late Mar Sebastian Vayalil, the first Bishop of Pala and the great visionary who established
  and nurtured several reputed institutions for University Education in this part of the state. It is owned and administered by the Mar Sleeva Forane Parish of the Roman Catholic Syrian Christian diocese of Pala. H.E. the Bishop of Pala is 
  the Patron and Very Rev. Fr. Vicar, Holy Cross Forane Church is the ex-officio Manager of the College. The college is under the jurisdiction of Holy Cross Forane Church Educational Trust. It is an unaided College affiliated to Mahatma Gandhi 
  University, Kottayam, Kerala.Presently there are 6 UG courses and 2 PG courses with 1000 students and 55 Teaching Staff.

Management<br>
The College is managed by Holy Cross Forane Church Educational and Charitable Trust. The objectives of the trust are to render educational service to the students irrespective of caste, creed, religion and language. Bishop of Pala is the Ex-officio 
patron of the Trust and the Vicar of Holy Cross Forane Church is the Ex-offficio president of the Trust and the Manager of the College.<br>

Mar Sebastian Vayalil 1906-1986 The First Bishop of Palai
Mar Sebastian Vayalil, to whose revered memory this college is dedicated,was an illustrious son of Pala. As the first Bishop of the diocese of Pala, he made Pala an educational hub with three great institutions like,St.Thomas College, Alphonsa College and
St.Thomas Training College way back in 1950’s. With his inspiration hundreds of schools, training institutes and professional colleges sprouted in the whole of Pala and Meenachil region. To perpetuate his divine memories and acknowledge his great 
contributions in the knowledge world, Mar Sleeva Parish Cherpunkal established BishopVayalil Memorial Holy Cross College in Cherpunkal.</p>

<h2>CONTACT US : </h2>
<h3>For General Enquiries:</h3>
<p>BVM Holy Cross College<br>
Cherpunkal P.O.,Pala, Kottayam Dt.<br>
Kerala - 686 584<br>
04822 - 268343 , 9446640157</p>
<button><a href="user/geneform.php">Enquiry</a></button>

<h3>For Admission Enquiries:</h3>
<p>BVM Holy Cross College<br>
Cherpunkal P.O.,Pala, Kottayam Dt.<br>
Kerala - 686 584<br>
04822 - 268343 , 9446640157</p>
<button><a href="user/admeform.php">Enquiry</a></button>

<h3>For Department Enquiries:</h3>
<p>Click here!</p>
<button><a href="student/studentlog.php">Enquiry</a></button><br><br>

<footer>&copy;2024 BVM Holy Cross College All right reserved.</footer>
</body>
</html>

