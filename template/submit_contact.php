<?php
// Include database connection
include "../config/koneksi.php";

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $subject = mysqli_real_escape_string($koneksi, $_POST['subject']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    // Insert data into database
    $query = "INSERT INTO contacts (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
    if (mysqli_query($koneksi, $query)) {
        // Redirect to contact page with success message
        header("Location: contact.php?success=true");
        exit;
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }
}
?>
