<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Latihan HTML dan JavaScript</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<link rel="stylesheet" href=".\assets/style.css">
	<script src=".\assets\main.js"></script>
	<style>
        .list-group:nth-child(even) {
            background: #eee;
        }
    </style>
</head>

<body>

	<div class="container my-4 latihan-html">

        <p>Praktikum Pemrograman Web - G1</p>

<?php
    setcookie("cookieMessage", "Ini adalah value yang disimpan ke cookie", time() + (86400 * 30), "/");
?>
        <div class="row">
			<div class="col-lg-4 col-md-6 card-parent">
                <div class="card">
                    <div class="card-header">Latihan</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action" href=".\latihan\pertemuan-1.php" target="_blank">Pertemuan 1</a>
                            <div class="list-group-item list-group-item-action" onclick="alert('Tidak ada latihan');">Pertemuan 2</div>
                            <a class="list-group-item list-group-item-action" href=".\latihan\pertemuan-3.php" target="_blank">Pertemuan 3</a>
                            <a class="list-group-item list-group-item-action" href=".\latihan\pertemuan-4.php" target="_blank">Pertemuan 4</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 card-parent">
                <div class="card">
                    <div class="card-header">Tugas</div>
                    <div class="card-body">
                        <div class="list-group">
                            <a class="list-group-item list-group-item-action" href=".\tugas\tugas-1.php" target="_blank">Pertemuan 1</a>
                            <a class="list-group-item list-group-item-action" href=".\tugas\tugas-2.php" target="_blank">Pertemuan 2</a>
                            <a class="list-group-item list-group-item-action" href=".\tugas\tugas-3.php" target="_blank">Pertemuan 3</a>
                            <a class="list-group-item list-group-item-action" href=".\tugas\tugas-4.php" target="_blank">Pertemuan 4</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include_once("__footer.php")
?>