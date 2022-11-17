<?php
	include_once("..\__header.php");

	echo "<div class=\"row\"><div class=\"col-lg-6 card-parent\">";
	if ( isset($_GET["n"]) && isset($_GET["e"]) ) {
		echo "<p>Data yang dikirim:</p>";
		echo "<label>" . $_GET["n"] . "</label></br>";
		echo "<label>" . $_GET["e"] . "</label>";
	} else {
		echo "<p>Halaman ini telah di-redirect dari halaman " . $_SERVER['HTTP_REFERER'] . "</p>";
	}
	echo "</div></div>";

	include_once("..\__footer.php");
?>