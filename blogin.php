
<?php
session_start();
include('config.php');

if (isset($_POST['email'])) {
    // $email = $_GET['email'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    // $username = mysqli_real_escape_string($conn, $_POST['username']);

    // Fetch user data
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);

    // **Check if query execution was successful** (consider error handling)
    if (mysqli_query($conn, $sql)) {
        $num_rows = mysqli_num_rows($result);

        // Check if a user with the provided email exists
        if ($num_rows > 0) {
            // Proceed with password verification (and further steps)
            $row = mysqli_fetch_assoc($result);

            // **Password Verification:** Replace this with your password hashing mechanism
            if ($password == $row['password']) {
                // session_start();
                $_SESSION["username"] = $row['username'];
                $_SESSION["loggedin"] = true;
                header("location: Dashbord.php");


            } else {
                echo "Invalid password";
            }
        } else {
            echo "Email not found >" .$_SESSION['email'] = $email;
        }
    } else {
        echo "Error1: " . mysqli_error($conn); // Handle query errors
    }
    
} else {
    // Handle cases where the login form hasn't been submitted
    echo "Error2: " . mysqli_error($conn); // Handle query
}
?>