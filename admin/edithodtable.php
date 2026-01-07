<?php
include "config.php";
$sql="SELECT * FROM tbl_hodid";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "error:".$sql."<br>".mysqli_error($conn);
}
else{
    echo "<br><br>";
    echo "<h1 style='text-align: center;'>LIST OF HODs</h1>";
    echo "<br>";
    echo "<table align='center' cellspacing='2' cellpadding='8'width='80%' height='55%' border='1' bordercolor='blue'style='text-align: center;'>";
    echo "<tr><th>NAME</th><th>LOGID</th><th>DEPARTMENT</th><th>Action</th></tr>";
    if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo "<tr>";
            echo "<td>". $row['name']."</td>";
            echo "<td>". $row['log_id']."</td>";
            echo "<td>". $row['dept']."</td>";
            echo "<td>
            <a href='edithod.php?id=".$row['id']."'><button>Edit</button></a></td>";
        echo "</tr>";
        }
        echo "</table>";
    }

}
?>