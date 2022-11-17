<?php
	include_once("__header.php");
?>

		<p>Pertemuan 3</p>
		<div class="row">
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Alert</div>
					<div class="card-body">
						<button class="btn btn-primary" onclick="latihanAlert()">Klik</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">document.write</div>
					<div class="card-body">
						<p>
						<script>
							document.write("Selamat mencoba JavaScript<br>");
							document.write("Semoga sukses!");
						</script>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Prompt</div>
					<div class="card-body">
						<p>
							<script>
								let nama = prompt("Siapa nama Anda?", "Masukkan NIM Anda");
								document.write("Hai, " + nama);
							</script>
						</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">On Load</div>
					<div class="card-body">
						<p id="pOnLoad"></p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Dasar Aritmatika</div>
					<div class="card-body" id="divArithmetic">
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showArithmetic(2, 4)">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Operasi Operand</div>
					<div class="card-body" id="divOperand">
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showBasicOperand()">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Operasi Kondisi</div>
					<div class="card-body">
						<p id="divCondition"></p>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showBasicCondition()">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Operasi Switch</div>
					<div class="card-body">
						<p id="divSwitch"></p>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showSwitchCondition()">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Operasi For-loop</div>
					<div class="card-body">
						<p id="divForLoop"></p>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showForLoop()">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Operasi Do-While</div>
					<div class="card-body">
						<p id="divDoWhile"></p>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary" onclick="showDoWhile()">Mulai</button>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Form Input</div>
					<form class="card-body row g-3" name="kirim" method="POST">
						<div class="col-md-6">
							<label for="inputBil">BIL</label>
							<input type="text" class="form-control" id="inputBil" size="20" name="T1">
						</div>
						<div class="col-md-6">
							<label for="inputIsBil">MERUPAKAN BIL</label>
							<input type="text" class="form-control" id="inputIsBil" size="20" name="T2">
						</div>
						<input type="button" value="TEBAK" name="B1" class="btn btn-primary" onclick="testFormInput()">
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent" id="divChangeBgLg">
				<div class="card">
					<div class="card-header">Ubah Warna</div>
					<form class="card-body">
						<input type="button" value="Latar Belakang Hijau" class="btn btn-success" onclick="changeBg('GREEN')">
						<input type="button" value="Latar Belakang MERAH" class="btn btn-danger" onclick="changeBg('RED')">
						<input type="button" value="Teks Biru" class="btn btn-primary" onclick="changeLg('BLUE')">
					</form>
				</div>
			</div>
		</div>

<?php
	include_once("__footer.php")
?>