<?php
require 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $sql = "INSERT INTO portfolioquery (email, subject, message) VALUES ('$email', '$subject', '$message')";

    if ($conn->query($sql) === TRUE) {

        echo '
<script>alert("Data inserted successfully");</script>';

        header("Location:index.php");
    } else {

        echo '
<script>alert("Error: ' . $conn->error . '");</script>';
    }

}

$conn->close();
?>