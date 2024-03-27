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
        $name = $_POST['name'];
        $age = $_POST['age'];
        $salary = $_POST['salary'];

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
