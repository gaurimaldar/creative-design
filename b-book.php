<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "creativedesign";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Taking values from the form data(input)
$name = $_REQUEST['name'];
$phone = $_REQUEST['phone'];
$attendees = $_REQUEST['attendees'];
$event_date = $_REQUEST['date'];
$event_time = date('H:i:s', strtotime($_REQUEST['time'])); // Convert the time to the correct format
$message = $_REQUEST['message'];

// Prepare the SQL statement
$stmt = $conn->prepare("INSERT INTO bookings (name, phone, attendees, event_date, event_time, message) VALUES (?, ?, ?, ?, ?, ?)");

// Bind the parameters
$stmt->bind_param("ssssss", $name, $phone, $attendees, $event_date, $event_time, $message);

// Execute the statement
if ($stmt->execute()) {
    echo "<script>
    alert('Order Placed Successfully');
    window.location.href = 'dashbord.php';
  </script>";

    exit(); // Stop further script execution
} else {
    echo "ERROR: Hush! Sorry " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();


?>