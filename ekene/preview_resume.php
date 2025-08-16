<?php
// Connect to DB
$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
    die("DB connection failed");
}

// Get latest resume
$sql = "SELECT filename FROM resumes ORDER BY upload_date DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $filePath = __DIR__ . "/uploads/" . $row['filename'];

    if (file_exists($filePath)) {
        // Serve PDF inline
        header("Content-Type: application/pdf");
        header("Content-Disposition: inline; filename=\"" . basename($filePath) . "\"");
        header("Content-Length: " . filesize($filePath));
        readfile($filePath);
        exit;
    } else {
        die("File not found.");
    }
} else {
    die("No resume found.");
}

$conn->close();
?>
