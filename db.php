<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'std_rec';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (!$conn) {
    die('Could not connect: ' . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $age = isset($_POST['age']) ? $_POST['age'] : '';
    $salary = isset($_POST['salary']) ? $_POST['salary'] : '';

    // Sanitize inputs before using them in the SQL query
    $name = mysqli_real_escape_string($conn, $name);
    $age = mysqli_real_escape_string($conn, $age);
    $salary = mysqli_real_escape_string($conn, $salary);

    $sql = "INSERT INTO student_record (name, age, salary) VALUES ('$name', '$age', '$salary')";

    if (mysqli_query($conn, $sql)) {
        echo "Data inserted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Form not submitted";
}
?>
