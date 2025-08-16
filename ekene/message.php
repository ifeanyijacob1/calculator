<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $conn->real_escape_string($_POST["name"]);
    $email = $conn->real_escape_string($_POST["email"]);
    $subject = $conn->real_escape_string($_POST["subject"]);
    $contact_method = $conn->real_escape_string($_POST["contact-method"]);
    $message = $conn->real_escape_string($_POST["message"]);

    $sql = "INSERT INTO messages (name, email, subject, contact_method, message) 
            VALUES ('$name', '$email', '$subject', '$contact_method', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Message sent successfully!'); window.location.href='index.html#contact';</script>";
    } else {
        echo "<script>alert('❌ Error: " . $conn->error . "'); window.location.href='index.html#contact';</script>";
    }
}

$conn->close();
?>
