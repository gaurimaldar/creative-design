<?php
// setup.php

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creativedesign";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Read the SQL script from the file
$sql = file_get_contents('create_tables.sql');

// Execute the SQL script
if (mysqli_multi_query($conn, $sql)) {
    // echo "Table(s) created successfully";
    $connectionSuccessful = true;

} else {
    echo "Error creating table(s): " . mysqli_error($conn);
}

// Close the connection
$conn->close();

if (isset($connectionSuccessful) && $connectionSuccessful) {
    echo "<script>
            alert('Database Connection Successful 🚀 !!');
            window.location.href = 'index.php';
          </script>";
}