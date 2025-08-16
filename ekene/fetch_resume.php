<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "portfolio");
if ($conn->connect_error) {
    echo json_encode(["error" => "DB connection failed"]);
    exit;

}

$sql = "SELECT * FROM resumes ORDER BY upload_date DESC LIMIT 1";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    echo json_encode($result->fetch_assoc());
} else {
    echo json_encode(["error" => "No resume found"]);
}

$conn->close();
?>


