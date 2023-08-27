<?php

require_once 'db_connection.php';

function registerUser($username, $password) {
   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert the new user into the database
    $conn = connectDB();
    $stmt = $conn->prepare("INSERT INTO users (Username, Password) VALUES (:username, :password)");
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashedPassword);

    try {
        $stmt->execute();
        return true;
    } catch (PDOException $e) {
        return false;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validate form data (you can add more validation if needed)

   
    if (registerUser($username, $password)) {
        echo "User registered successfully!";
    } else {
        echo "Failed to register user.";
    }
}
?>