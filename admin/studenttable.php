<?php
include "config.php";
$sql="SELECT * FROM tbl_student";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error:".$sql."<br>".mysqli_error($conn);
}
else{
    echo "<br>";
    echo "<h1 style='text-align: center;'>STUDENTS</h1>";
    echo "<div style='text-align:center;'>
    <button onclick=\"window.location.href='addstudent.php'\" style=\"padding: 5px 10px;background-color:rgb(28,44,68);color:white;\">Add Student</button>
</div><br>";
    echo "<table align='center' cellspacing='2' cellpadding='8'width='80%' height='55%' border='1' bordercolor='blue'style='text-align: center;'>";
    echo "<tr><th>NAME</th><th>PASSWORD</th><th>DEPARTMENT</th><th>USERID</th><th>ADM_NO</th><th>EDIT</th><th>DELETE</th></tr>";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['pwd']."</td>";
            echo "<td>". $row['dept']."</td>";
            echo "<td>". $row['userid']."</td>";
            echo "<td>". $row['adm_no']."</td>";
            echo "<td>
            <a href='editstudent.php?id=".$row['id']."'><button>Edit</button></a></td>";

               echo"<td> <form action='delstudent.php?pwd=' method='get'>
                        <input type='hidden' name='pwd' value='".$row['pwd']."'>
                        <button type='submit'
                        style=' cursor: pointer;'>Delete</button></form></td>";
            echo "</tr>";
        }
        echo "</table>";
    }

}
?>