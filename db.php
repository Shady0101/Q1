<?php
// Retrieve data sent from JavaScript
$name = $_POST["name"];
$age = $_POST["age"];
$salary = $_POST["salary"];
$message = $_POST["message"];

// Connect to your database (replace with your actual database credentials)
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert data into database
$sql = "INSERT INTO your_table_name (name, age, salary, message) VALUES ('$name', '$age', '$salary', '$message')";
if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
