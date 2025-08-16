<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Upload folder
$targetDir = "uploads/";
if (!file_exists($targetDir)) {
    mkdir($targetDir, 0777, true);
}

// Handle file upload
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["resume"])) {
    $file = $_FILES["resume"];
    $title = $_POST["title"];
    $description = $_POST["description"];
    $tags = $_POST["tags"];

    if ($file["error"] === 0) {
        $fileName = basename($file["name"]);
        $fileSizeMB = round($file["size"] / 1024 / 1024, 2);
        $targetFilePath = $targetDir . $fileName;

        if (move_uploaded_file($file["tmp_name"], $targetFilePath)) {
            $stmt = $conn->prepare("INSERT INTO resumes (filename, title, description, tags, size) VALUES (?, ?, ?, ?, ?)");
            $sizeFormatted = $fileSizeMB . " MB";
            $stmt->bind_param("sssss", $fileName, $title, $description, $tags, $sizeFormatted);

            if ($stmt->execute()) {
                header("Location: viewresume.php"); // 👈 this sends user to view page
                exit();
            } else {
                echo "❌ Database insert failed: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "❌ Failed to move uploaded file.";
        }
    } else {
        echo "❌ File upload error.";
    }
} else {
    echo "❌ Invalid request. No file found.";
}

$conn->close();
?>
