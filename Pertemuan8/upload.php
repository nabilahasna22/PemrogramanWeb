<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpeg","jpg","png","gif");

    $maxFileSize = 10 * 1024 * 1024; 

    if (in_array($documentFileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "Dokumen berhasil diunggah.";
        } else {
            echo "Gagal mengunggah dokumen.";
        }
    } else {
        echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
