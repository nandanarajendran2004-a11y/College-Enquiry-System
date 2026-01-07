<?php
include "config.php"; // Ensure your database connection is correct

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the feedback from the button clicked
    $response = $_POST['response'];

    // Insert feedback into the database
    $sql = "INSERT INTO tbl_feedback (response) VALUES ('$response')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you for your feedback!');window.location='/miniproject/home.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Feedback Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #F5F5F5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .feedback-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .feedback-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .feedback-container button {
            font-size: 16px;
            padding: 10px 20px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .feedback-container .yes {
            background-color: #28a745;
            color: white;
        }

        .feedback-container .yes:hover {
            background-color: #218838;
        }

        .feedback-container .no {
            background-color: #dc3545;
            color: white;
        }

        .feedback-container .no:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="feedback-container">
        <h2>Was the response provided useful?</h2>
        <form method="POST">
            <button type="submit" name="response" value="yes" class="yes">Yes</button>
            <button type="submit" name="response" value="no" class="no">No</button>
        </form>
    </div>
</body>
</html>
