<?php
$conn = new mysqli("localhost", "root", "", "tiktok_clone");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $video_name = basename($_FILES["video"]["name"]);
    $target_file = $target_dir . $video_name;

    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        $username = "test_user";
        $caption = "Awesome video!";
        $sql = "INSERT INTO videos (username, video_url, caption) VALUES ('$username', '$target_file', '$caption')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Video uploaded successfully!";
        } else {
            echo "Error: " . $conn->error;
        }
    } else {
        echo "Error uploading video.";
    }
}
?>