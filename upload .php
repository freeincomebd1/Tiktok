<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["video"]["name"]);

    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file)) {
        echo "Video uploaded successfully!";
    } else {
        echo "Error uploading video.";
    }
}
?>