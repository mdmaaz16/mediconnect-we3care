<?php
session_start();
$name = $_SESSION['fname'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $app_id = $_POST['app_id'];
    $doctor_id = $_POST['doctor_id'];
    $patient_id = $name;
    $rating = $_POST['rating'];
    $review = $_POST['review'];
    $review_time = date("H:i:s");
    $review_date = date("Y-m-d");

    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "healthcare";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO review (app_id, doctor_id, patient_id, rating, review, review_time, review_date)
            VALUES ('$app_id','$doctor_id', '$patient_id', '$rating', '$review', '$review_time', '$review_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    // Redirect back to the page after submission
    header("Location: user1.php");
    exit();
}
?>
