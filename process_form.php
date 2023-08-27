<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize name
    if (empty($_POST["name"])) {
        $errors['name'] = "Name is required.";
    } else {
        $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $errors['name'] = "Only letters and spaces allowed.";
        }
    }
    
    // Validate and sanitize email
    if (empty($_POST["email"])) {
        $errors['email'] = "Email is required.";
    } else {
        $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invalid email format.";
        }
    }
    
    // Sanitize message (HTML tags are removed)
    $message = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    // Display error messages or process the form
    if (count($errors) > 0) {
        include('Contact.html'); // Display form with errors
    } else {
        // Process the form, e.g., send email or save to database
        echo "Form submitted successfully!";
    }
} else {
    // Redirect to the form if accessed directly
    header("Location: Contact.html");
    exit();
}
?>
