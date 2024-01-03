<?php
include "config.php";

$title = $_POST['title'];
$content = $_POST['content'];
$imageUrl = ''; // Define a variable to store the image URL


// Generate a unique filename for the uploaded image
function generateUniqueFileName($originalName)
{
    $extension = pathinfo($originalName, PATHINFO_EXTENSION);
    $timestamp = time();
    $randomString = bin2hex(random_bytes(8)); // Generates a random string of 16 characters

    $uniqueName = $timestamp . '_' . $randomString . '.' . $extension;
    return $uniqueName;
}
// Usage:
$originalFileName = $_FILES["image"]["name"];
$uniqueFileName = generateUniqueFileName($originalFileName);
// Process and upload the image file to a directory on your server
if ($_FILES['image']['size'] > 0) {
    $targetDir = "uploads/"; // Change this to your desired directory
    $targetFile = $targetDir . $uniqueFileName;
    move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);
    $imageUrl = $targetFile;
}

// Insert post data into the database (assuming table name is 'posts')
$sql = "INSERT INTO posts (title, content, image_url) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $title, $content, $imageUrl);

if ($stmt->execute()) {
    echo "New post created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>