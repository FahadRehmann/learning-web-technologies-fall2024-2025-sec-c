<?php
$conn = new mysqli('localhost', 'root', '', 'l_f_db');

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}
if (isset($_GET['action']) && $_GET['action'] == 'searchSuggestionsByName') {
    $name = $_GET['name'];
    $sql = "SELECT * FROM users WHERE empName LIKE '%$name%' LIMIT 5";
    $result = $conn->query($sql);

    $suggestions = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $suggestions[] = [
            'empName' => $row['empName'],
            'companyName' => $row['companyName'],
            'contactNo' => $row['contactNo'],
            'userName' => $row['userName']
            ];
        }
    }

echo json_encode($suggestions);
}

$conn->close();
?>
