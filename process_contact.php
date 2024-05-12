<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform server-side validation
    $errors = [];
    if (empty($name)) {
        $errors[] = "Name is required";
    }
    if (empty($email)) {
        $errors[] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format";
    }
    if (empty($message)) {
        $errors[] = "Message is required";
    }

    // If there are validation errors, display them
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    } else {
        // Send email
        $to = "your@example.com";
        $subject = "Contact Form Submission";
        $headers = "From: $name <$email>";
        // Use wordwrap() if lines are longer than 70 characters
        $message = wordwrap($message, 70);
        // Send email
        mail($to, $subject, $message, $headers);
        echo "<p>Message sent successfully!</p>";
    }
}
?>
