<?php
    // Memulai sesi PHP
    session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
        // Menyimpan nilai "green" ke dalam variabel sesi $_SESSION["favcolor"]
        $_SESSION["favcolor"] = "green";
        // Menyimpan nilai "cat" ke dalam variabel sesi $_SESSION["favanimal"]
        $_SESSION["favanimal"] = "cat";
        // Menampilkan pesan bahwa variabel sesi telah diatur
        echo "Session variables are set.";
    ?>
</body>

</html>
