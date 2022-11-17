<?php
	include_once("__header.php");

    setcookie("cookieMessage", "Ini adalah value yang disimpan ke cookie", time() + (86400 * 30), "/");
?>
        <div class="row">
			<div class="col-lg-4 col-md-6 card-parent">
                <div class="card">
                    <div class="card-header">Praktikum Pemrograman Web - G1</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action" href=".\pertemuan-1.php" target="_blank">Pertemuan 1</a>
                            <div class="list-group-item list-group-item-action" onclick="alert('Tidak ada latihan');">Pertemuan 2</div>
                            <a class="list-group-item list-group-item-action" href=".\pertemuan-3.php" target="_blank">Pertemuan 3</a>
                            <a class="list-group-item list-group-item-action" href=".\pertemuan-4.php" target="_blank">Pertemuan 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include_once("__footer.php")
?>