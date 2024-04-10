<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <!--nomor 1.3-->
    <script>
            function previewImage(event) {
                var file = event.target.files[0];
                var reader = new FileReader();
                reader.onload = function(e) {
                    var previewImage = document.getElementById("preview");
                    previewImage.style.display = "block";
                    previewImage.src = e.target.result;
                }
                reader.readAsDataURL(file);
            }
    </script>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload" onchange="previewImage(event)">
        <img id="preview" src="#" alt="Preview" style="max-width: 200px; max-height: 200px; display: none;">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>
</html>
