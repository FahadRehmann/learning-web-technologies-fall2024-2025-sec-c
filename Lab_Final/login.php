<?php

$conn = new mysqli('localhost', 'root', '', 'l_f_db');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE userName = '$name'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($password == $row['password']) {
        header("location: home.php");
    } else {
        echo "Invalid password!";
    }
} else {
    echo "No user found with that username!";
}

$conn->close();
?>
