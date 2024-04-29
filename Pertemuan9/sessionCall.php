<?php
    // Memulai sesi PHP
    session_start();
?>

<!DOCTYPE html>
<html>

<body>
    <?php
        // Menampilkan nilai dari variabel $_SESSION["favcolor"] dan $_SESSION["favanimal"]
        echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>"; // Menampilkan warna favorit
        echo "Favorite animal is " . $_SESSION["favanimal"] . "."; // Menampilkan hewan favorit
    ?>
</body>

</html>
