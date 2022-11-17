<?php
	include_once("..\__header.php");
?>

		<div class="row">
            <div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
							<label for="inputName" class="col-sm-4 col-form-label">Nama</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputName">
							</div>
						</div>
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
                        <div class="mb-3 row">
							<label for="inputName" class="col-sm-4 col-form-label">Alamat</label>
							<div class="col-sm-8">
								<input type="text" class="form-control" id="inputName">
							</div>
						</div>
                        <div class="mb-3 row">
							<label for="inputPassword" class="col-sm-4 col-form-label">Negara</label>
							<div class="col-sm-8">
                                <select name="dropdownInterested" id="dropdownInterested">
									<option value="id" selected>Indonesia</option>
									<option value="my">Malaysia</option>
									<option value="sg">Singapura</option>
									<option value="th">Thailand</option>
								</select>
							</div>
						</div>
                        <div class="mb-3 row">
							<label for="inputEmail" class="col-sm-4 col-form-label">Email</label>
							<div class="col-sm-8">
								<input type="email" class="form-control" id="inputEmail">
							</div>
						</div>
                        <div class="mb-3 row">
                            <label for="formFile" class="col-sm-4 col-form-label">Photo</label>
                            <div class="col-sm-8">
                                <input class="form-control" type="file" id="formFile">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="textareaComment" class="col-sm-4 col-form-label">Comment</label>
							<div class="col-sm-8">
								<textarea class="form-control" id="textareaComment" rows="4" name="textareaComment"></textarea>
							</div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-6 offset-6 text-end">
                                <button class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include_once("..\__footer.php")
?>