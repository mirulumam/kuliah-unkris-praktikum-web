<?php
	include_once("..\__header.php");
?>

		<div class="row">
            <div class="col-lg-8 col">
                <div class="row">
                    <div class="col-md-6 card-parent">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-start active">Persegi Panjang</li>
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <?php
                                        $panjang = 20;
                                        $lebar = 12;
                                        $luas = $panjang * $lebar;
                                    ?>
                                    <?php echo "Luas = panjang x lebar = $panjang x $lebar"; ?>
                                    <div class="fw-bold"><?php echo $luas ?></div>
                                </div>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-start active">Format Tanggal</li>
                            <?php
                                $data = [
                                    "m-F-Y, g:i:s a",
                                    "Y-m-d h:i:s",
                                    "D, d-M-Y"
                                ];

                                foreach($data as $d) {
                            ?>
                                <li class="list-group-item d-flex justify-content-between align-items-start">
                                    <div class="ms-2 me-auto">
                                        <div class="fw-bold"><?php echo $d ?></div>
                                        <?php echo date($d); ?>
                                    </div>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-6 card-parent">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-start active">Bio Data</li>
                            <?php
                                $people = [
                                    [
                                        "name" => "Jane Doe",
                                        "dob" => "1988-11-23",
                                        "address" => "Vancouver",
                                        "gender" => "M"
                                    ], [
                                        "name" => "Rudy Jermaine",
                                        "dob" => "1975-04-01",
                                        "address" => "Amsterdam",
                                        "gender" => "M"
                                    ], [
                                        "name" => "Veronica Stars",
                                        "dob" => "1990-05-18",
                                        "address" => "London",
                                        "gender" => "F"
                                    ], [
                                        "name" => "Abigail Duff",
                                        "dob" => "2000-07-30",
                                        "address" => "Dublin",
                                        "gender" => "F"
                                    ]
                                ];

                                foreach($people as $p) {
                            ?>
                                <li class="list-group-item list-group-item-action">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1"><?php echo $p["name"]; ?></h5>
                                        <small><?php echo $p["gender"]; ?></small>
                                    </div>
                                    <p class="mb-1"><?php echo $p["address"]; ?></p>
                                    <small><?php echo $p["dob"] ?></small>
                                </li>
                            <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="col-md-6 card-parent">
                        <form class="card card-date" method="POST" action="">
                            <div class="card-header">Login | $_POST</div>
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
                    <div class="col-md-6 card-parent">
                        <form class="card card-date" method="GET" action="">
                            <div class="card-header">Login | $_GET</div>
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
                </div>
            </div>
            <?php
                $name = "";
                $email = "";
                $date = date("h:i:s, d F Y");
                if ( $_SERVER["REQUEST_METHOD"] == "POST" ) {
                    $name = $_POST["inputNama"];
                    $email = $_POST["inputEmail"];
                } else {
                    if ( isset($_GET["inputNama"]) && isset($_GET["inputEmail"]) ) {
                        $name = $_GET["inputNama"];
                        $email = $_GET["inputEmail"];
                    }
                }

                if ( ! empty($name) && ! empty($email) ) {
            ?>
                <div class="col-lg-4 col card-parent">
				    <div class="card">
                        <div class="card-body">
                            <div class="mb-3 row">
							    <label for="inputNama" class="col-sm-4 col-form-label">Nama</label>
							    <div class="col-sm-8">
                                <?php
                                    echo "<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"inputNama\" name=\"inputNama\" value=\"$name\">";
                                ?>
                                </div>
						    </div>
                            <div class="mb-3 row">
							    <label for="inputEmail" class="col-sm-4 col-form-label">Nama</label>
							    <div class="col-sm-8">
                                <?php
                                    echo "<input type=\"email\" readonly class=\"form-control-plaintext\" id=\"inputEmail\" name=\"inputEmail\" value=\"$email\">";
                                ?>
                                </div>
						    </div>
                            <div class="mb-3 row">
							    <label for="inputDate" class="col-sm-4 col-form-label">Waktu</label>
							    <div class="col-sm-8">
                                <?php
                                    echo "<input type=\"text\" readonly class=\"form-control-plaintext\" id=\"inputDate\" name=\"inputDate\" value=\"$date\">";
                                ?>
                                </div>
						    </div>
                        </div>
                    </div>
                </div>
            <?php
                }
            ?>
        </div>

<?php
	include_once("..\__footer.php")
?>