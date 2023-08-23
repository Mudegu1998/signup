<?php
include('db.php');
if (isset($_POST['signup'])) {
    //Variable declaration
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];


//Validate input and perform necessary security checks
    $username=mysqli_escape_string($mysqli, $_POST['username']);
    $email=mysqli_escape_string($mysqli,$_POST['email'] );
    $password=mysqli_escape_string($msqli,$_POST['password']);

     // Validate email using filter_var
     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is valid!";
    } else {
        echo "Invalid email format!";
    }

    ####Password protection###
    // User's input password during login
$inputPassword = "user_input_password";

// Hashed password retrieved from the database
$storedHashedPassword = "hashed_password_from_database";

// Verify the password using password_verify
if (password_verify($inputPassword, $storedHashedPassword)) {
    echo "Login successful. Welcome, $username!";
} else {
    echo "Incorrect password. Please try again.";
}

    
 // SQL query to insert user information into the database
 $sql = "INSERT INTO users (username, email, hashed_password)
 VALUES ('$username', '$email', '$hashedPassword')";

if ($conn->query($sql) === TRUE) {
echo "Sign up successful! Welcome, $username!";
} else {
echo "Error: " . $sql . "<br>" . $conn->error();
}
}
?>
