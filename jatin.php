<?php
// Database connection
$servername = ''; // Replace with your aws endpoint
$username = 'admin'; // Replace with your database username
$password = ''; // Replace with your database password
$dbname = 'college_registration'; // Replace with your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connection active<br>";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prepare and bind parameters
    $sql = "INSERT INTO student_details (roll_number, full_name, email, mobileno, major) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if (!$stmt) {
        die("Error in preparing statement: " . mysqli_error($conn));
    }

    // Bind parameters
    mysqli_stmt_bind_param($stmt, "issss", $roll_number, $full_name, $email, $mobileno, $major);

    // Set parameters and execute
    $roll_number = $_POST['roll_number'];
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $mobileno = $_POST['mobileno'];
    $major = $_POST['major'];

    // Execute the statement
    if (!mysqli_stmt_execute($stmt)) {
        die("Error in executing statement: " . mysqli_stmt_error($stmt));
    }

    echo "Record inserted successfully";
    
    // Close statement
    mysqli_stmt_close($stmt);
}

// Close connection
mysqli_close($conn);
?>
