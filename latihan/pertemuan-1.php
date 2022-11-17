<?php
	include_once("..\__header.php");
?>

		<p>Pertemuan 1</p>
		<div class="row">
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 14</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputName" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputName">
							</div>
						</div>
						<div class="mb-3 row">
							<label for="inputNim" class="col-sm-4 col-form-label">NIM</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputNim">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 15</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
							<div class="col-sm-8">
								<input type="password" class="form-control" id="inputPassword">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 16</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Jenis Kelamin</label>
							<div class="col-sm-8">
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radioGender" id="radioGenderM">
									<label class="form-check-label" for="radioGenderM">Laki-laki</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radioGender" id="radioGenderF">
									<label class="form-check-label" for="radioGenderF">Perempuan</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 17</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Hobi</label>
							<div class="col-sm-8">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="checkboxHobi" id="checkboxHobiWatching">
									<label class="form-check-label" for="checkboxHobiWatching">Menonton</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="checkboxHobi" id="checkboxHobiGaming">
									<label class="form-check-label" for="checkboxHobiGaming">Bermain Game</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="checkboxHobi" id="checkboxHobiShopping">
									<label class="form-check-label" for="checkboxHobiShopping">Belanja</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="checkboxHobi" id="checkboxHobiFishing">
									<label class="form-check-label" for="checkboxHobiFishing">Memancing</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="checkboxHobi" id="checkboxHobiSport">
									<label class="form-check-label" for="checkboxHobiSport">Olahraga</label>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 18</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Buttons</label>
							<div class="col-sm-8">
								<input type="submit" value="Kirim" name="buttonSubmit">
								<input type="reset" value="Ulangi" name="buttonreset">
								<input type="button" value="Batal" name="buttonCancel">
								<input type="image" name="buttonImage" img src="..\assets/genshin.png" width="100%">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 19</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="textareaBio" class="col-sm-4 col-form-label">Deskripsi Diri</label>
							<div class="col-sm-8">
								<textarea class="form-control" id="textareaBio" rows="4" name="deskripsi"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
					<div class="card-header">Latihan 20</div>
					<div class="card-body">
						<div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Minat</label>
							<div class="col-sm-8">
								<select name="dropdownInterested" id="dropdownInterested">
									<option value="dg">Desain Grafis</option>
									<option value="pj">Programmer Java</option>
									<option value="sa">Sistem Analis</option>
									<option value="ds">Dagelan Saja</option>
								</select>
								<select name="dropdownSkill" id="dropdownSkill">
									<option value="dg">Desain Grafis</option>
									<option value="pj">Programmer Java</option>
									<option value="sa">Sistem Analis</option>
									<option value="aj">Ahli Jaringan</option>
									<option value="ti">Trainer IT</option>
									<option value="ds">Dagelan Saja</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>

<?php
	include_once("..\__footer.php")
?>