<?php
$conn = new mysqli("localhost", "root", "", "tiktok_clone");
$result = $conn->query("SELECT * FROM videos ORDER BY uploaded_at DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TikTok Clone</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Latest Videos</h2>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="video-container">
            <video src="<?= $row['video_url'] ?>" controls></video>
            <h3>@<?= $row['username'] ?></h3>
            <p><?= $row['caption'] ?></p>
        </div>
    <?php endwhile; ?>

</body>
</html>