<?php
	include_once("..\__header.php");
?>

		<p>Pertemuan 4</p>
		<div class="row">
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-variabel">
					<div class="card-header">Latihan 7.3 | Variabel</div>
					<div class="card-body">
						<?php
							$nilai1 = 10;
							$nilai2 = 3;
							$nilai3 = 2 * $nilai1 + 8 * $nilai2;
						?>
						<ul class="list-group">
							<li class="list-group-item list-group-item-action">
								<?php
									echo "Nilai = ", $nilai3;
								?>
							</li>
							<li class="list-group-item list-group-item-action">
								<?php
									$jumlah = $nilai1 + $nilai2;
									echo "Nilai dari $nilai1 + $nilai2 adalah: $jumlah";
								?>
							</li>
							<li class="list-group-item list-group-item-action">
								Nama: Muhammad Chairul Umam
							</li>
							<li class="list-group-item list-group-item-action">
								NIM: 2170233001
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-array">
					<div class="card-header">Latihan 7.3 | Array</div>
					<div class="card-body">
						<?php
							$nama[] = "Agung Teguh";
							$nama[] = "Wibowo";
							$nama[] = "Almais";

							echo $nama[1] . $nama[2] . $nama[0] . "</br>";
							echo "Jumlah elemen Array = " . count($nama);
						?>
					</div>
				</div>
				<div class="card card-square mt-2">
					<div class="card-header">Latihan 7.3 | Tanggalan</div>
					<div class="card-body">
						<?php echo date("m-F-Y, g:i:s a"); ?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-conversion">
					<div class="card-header">Latihan 7.3 | Konversi Tipe</div>
					<div class="card-body">
						<?php
							$a = 300.4;

							echo $a;
							echo "</br>";
							echo "tipe double = " . doubleval($a);
							echo "</br>";
							echo "tipe integer = " . intval($a);
							echo "</br>";
							echo "tipe string = " . strval($a);
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-date">
					<div class="card-header">Redirect</div>
					<div class="card-body">
					<div class="list-group">
                            <a class="list-group-item list-group-item-action" href=".\redirect.php" target="_blank">Mulai</a>
                        </div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-square">
					<div class="card-header">Latihan 7.4 | Luas Persegi Panjang</div>
					<div class="card-body">
						<?php
							$length = 20;
							$width = 18;
							$result = $length * $width;

							echo "Luas = Panjang x Lebar = $length x $width = $result";
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card card-square">
					<div class="card-header">Cookies</div>
					<div class="card-body">
						<?php
							if ( isset($_COOKIE["cookieMessage"]) ) {
								echo "<p>" . $_COOKIE["cookieMessage"] . "</p>";
							} else {
								echo "<p>Cookie belum diterapkan</p>";
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<form class="card card-date" method="POST" action="">
					<div class="card-header">Modul 8 | $_POST</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm-8">
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputNama"])) {
										echo "<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"inputNama\" name=\"inputNama\" value=\"" . $_POST["inputNama"] . "\">";
									} else {
										echo "<input type=\"text\" class=\"form-control\" id=\"inputNama\" name=\"inputNama\">";
									}
								?>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
							<div class="col-sm-8">
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["inputEmail"])) {
										echo "<input type=\"email\" readonly class=\"form-control-plaintext\" id=\"inputEmail\" name=\"inputEmail\" value=\"" . $_POST["inputEmail"] . "\">";
									} else {
										echo "<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"inputEmail\">";
									}
								?>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="reset" class="btn btn-warning">Reset</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<form class="card card-date" method="GET" action="">
					<div class="card-header">Modul 8 | $_GET dan $_REQUEST</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm-8">
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["inputNama"])) {
										echo "<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"inputNama\" name=\"inputNama\" value=\"" . $_GET["inputNama"] . "\">";
									} else {
										echo "<input type=\"text\" class=\"form-control\" id=\"inputNama\" name=\"inputNama\">";
									}
								?>
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
							<div class="col-sm-8">
								<?php
									if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_REQUEST["inputEmail"])) {
										echo "<input type=\"email\" readonly class=\"form-control-plaintext\" id=\"inputEmail\" name=\"inputEmail\" value=\"" . $_REQUEST["inputEmail"] . "\">";
									} else {
										echo "<input type=\"email\" class=\"form-control\" id=\"inputEmail\" name=\"inputEmail\">";
									}
								?>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="reset" class="btn btn-warning">Reset</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<form class="card card-date" method="POST" action="action.php">
					<div class="card-header">Modul 8 | Redirect</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputNama" name="inputNama">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail" name="inputEmail">
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button type="reset" class="btn btn-warning">Reset</button>
						<button type="submit" class="btn btn-primary">Login</button>
					</div>
				</form>
			</div>
		</div>

<?php
	include_once("..\__footer.php")
?>