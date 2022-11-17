<?php

    if ( $_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputNama"]) && isset($_POST["inputEmail"]) ) {
        header("Location:landing.php?n=" . $_POST["inputNama"] . "&e=" . $_POST["inputEmail"]);
    } else {
        include_once("..\__header.php");

        echo "<div class=\"row\"><div class=\"col-lg-6 card-parent\"><p>Request tidak valid</p></div></div>";

        include_once("..\__footer.php");
    }

?>