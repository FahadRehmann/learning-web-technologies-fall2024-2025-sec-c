<?php
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];

    if (empty($name)) {
        echo "Name cannot be empty.";
    } else {
        if (!ctype_alpha($name[0])) {
            echo "Name must start with a letter.";
        }
    }

    if (empty($email)) {
        echo "Email cannot be empty.";
    }

    if (empty($day) || empty($month) || empty($year)) {
        echo "Date of birth cannot be empty.";
    }
}
?>