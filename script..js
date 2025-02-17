function uploadVideo() {
    let fileInput = document.getElementById('videoUpload');
    let file = fileInput.files[0];
    
    let formData = new FormData();
    formData.append("video", file);
    
    fetch("upload.php", {
        method: "POST",
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        alert("Video Uploaded Successfully!");
        console.log(data);
    })
    .catch(error => console.error("Error:", error));
}