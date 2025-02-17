CREATE TABLE videos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(255),
    video_url VARCHAR(255),
    caption TEXT,
    uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);