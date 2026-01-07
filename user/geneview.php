<html>
<head>
<title>Admission Enquiry Response</title>
<style>
 nav {
    background-color: rgb(28, 44, 68); /* Background color for the nav bar */
    width: 100%; /* Ensures full width */
    padding: 7px; /* Adds spacing inside the nav */
    box-sizing: border-box; /* Includes padding in the total width */
    text-align:right;
    position: fixed; /* Fixes the nav bar at the top */
    top: 0; /* Aligns it to the top of the page */
    left: 0; /* Ensures it starts from the left edge */
    height:50px;
}

nav a {
    color: white; /* Text color */
    margin-left: 15px; /* Adds space between links */
    font-size: 20px; /* Adjusts font size */
    line-height: 1.5; /* Improves spacing */
}
.heading {
    font-size: 28px;
    color: black;
    margin: 90px 0 50px; /* Adds space below the fixed nav */
    text-align: center;
}
body {
    background-color: #f3f0d7;
    margin: 0;
    font-family: Arial, sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding-top: 50px;
    font-size: 20px;
}
.response {
    width: 80%;
    margin-bottom: 20px;
    background-color: #fff;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
.response h3 {
    margin: 0 0 10px;/*Removes the default margin above the <h3> element (margin: 0) and adds 10 pixels of space below it (margin-bottom: 10px), separating it from other content.*/
    color: #444;
}
.response p {
    margin: 5px 0;/*Adds 5 pixels of vertical spacing above and below each <p> tag, creating consistent spacing between paragraphs.*/
    color: #555;
}
</style>    
</head>
<body>
<nav>
  <a href="/miniproject/user/feedbackform.php">ProvideFeedback</a>
  <a href="/miniproject/home.php">Go Back</a>
</nav>
<h1 class="heading">RESPONSE</h1>

<?php
include "config.php";

$sql = "SELECT id, enquiry, answer FROM tbl_general";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
} else {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='response'>";
            echo "<h3>Question No: " . $row['id'] . "</h3>";
            echo "<p><strong>Enquiry:</strong> " .$row['enquiry']. "</p>";
            echo "<p><strong>Answer:</strong> " .$row['answer']. "</p>";
            echo "</div>";
        }
    } else {
        echo "<p>No responses available.</p>";
    }
}
?>
</body>
</html>
