<?php
$servername = "localhost";
$username = "root";
$password = "9528176114";
$dbname = "project";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$full_name = $_POST['full-name'];
$email = $_POST['email'];
$service = $_POST['service'];
$message = $_POST['message'];

$sql = "INSERT INTO contacts (full_name, email, service, message) VALUES ('$full_name', '$email', '$service', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "Form data submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
