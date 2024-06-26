<?php
// Start output buffering
ob_start();

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



// Escape user inputs for security
$username = mysqli_real_escape_string($conn, $_POST['username']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

// Protect the password: (ideally use password_hash) 
// $hashed_password = password_hash($password, PASSWORD_DEFAULT);


// Check if the username already exists
$sql_username_check = "SELECT * FROM users WHERE username='$username'";
if (mysqli_query($conn, $sql_username_check)) {
    $result = mysqli_query($conn, $sql_username_check);
    // $result = mysqli_query($conn, $sql_username_check);

    if (mysqli_num_rows($result) > 0) {
        echo "Username already exists";
    } else {
        // If username is unique, insert data 
        $sql = "INSERT INTO users (username, email, password) 
            VALUES ('$username', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            $registrationSuccessful = true;



        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);

if (isset($registrationSuccessful) && $registrationSuccessful) {
    echo "<script>
            alert('Account Created Successfully');
            window.location.href = 'login.php';
          </script>";
}
