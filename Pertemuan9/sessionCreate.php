<?php
session_start();
?>
<!DOCTYPE html>
<body>
    <?php
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session varriables are set.";
    ?>
</body>

</html>