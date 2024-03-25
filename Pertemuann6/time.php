<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <!--Heading 3-->
    <h3> Time </h3>
    <?php
        // zona waktu yang digunakan adalah asia/jakarta
        date_default_timezone_set("asia/jakarta");
        // menampilkan waktu dalam bentuk jam:menit:detik menggunakan AM/PM juga
        echo date("h:i:sa");
    ?>
</body>
</html>