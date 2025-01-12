<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Search</title>
    <style>
        #suggestions {
            border: 1px solid #ccc;
            max-height: 200px;
            overflow-y: auto;
            position: absolute;
            z-index: 10;
            background-color: white;
            width: 200px;
        }
        .suggestion-item {
            padding: 8px;
            cursor: pointer;
        }
        .suggestion-item:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>
<body>
    <h1>Search Employee</h1>

    <label for="empName">Enter Employee Name: </label>
    <input type="text" id="empName" onkeyup="searchEmployeeByName()" placeholder="Start typing" autocomplete="off">
    <div id="suggestions"></div>
    <br><br>
    <label for="companyName">Company Name: </label>
    <input type="text" id="companyName" disabled>
    <br>
    <label for="contactNo">Contact Number: </label>
    <input type="text" id="contactNo" disabled>
    <br>
    <label for="userName">User Name: </label>
    <input type="text" id="userName" disabled>
    <script src="crude.js"></script>
</body>
</html>
