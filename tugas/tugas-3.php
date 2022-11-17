<?php
	include_once("..\__header.php");
?>

		<div class="row">
            <div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
							<label for="inputScore" class="col-4 col-form-label">Input (0 - 100)</label>
							<div class="col-6">
								<input type="number" class="form-control" id="inputScore" oninput="task3ShowResult(value)">
							</div>
                            <div class="col-2 text-right">
                                <p id="pResult"></p>
                            </div>
						</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 card-parent">
				<div class="card">
                    <div class="card-body">
                        <div class="mb-3 row">
                            <div class="col-5">
								<input type="number" class="form-control" id="inputValue1">
							</div>
							<div class="col-5">
								<input type="number" class="form-control" id="inputValue2">
							</div>
                            <div class="col-2 text-right">
                                <p id="pResultCalculate"></p>
                            </div>
						</div>
                        <div class="mb-3 row">
                            <div class="col-md-5 col offset-md-5">
                                <button class="btn btn-primary mt-2" onclick="task3Calculate('+')">+</button>
                                <button class="btn btn-primary mt-2" onclick="task3Calculate('-')">-</button>
                                <button class="btn btn-primary mt-2" onclick="task3Calculate('x')">x</button>
                                <button class="btn btn-primary mt-2" onclick="task3Calculate('/')">/</button>
                            </div>
                            <div class="col-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php
	include_once("..\__footer.php")
?>