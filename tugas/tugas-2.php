<?php
	include_once("..\__header.php");
?>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Home</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Pendidikan</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Jadwal</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#activity-tab-pane" type="button" role="tab" aria-controls="activity-tab-pane" aria-selected="false">Aktifitas</button>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="container mt-4">
                    <p>Hai, Saya Muhammad Chairul Umam. Saat ini sedang menempuh pendidikan S1 di Universitas Krisnadwipayana jurusan Teknik Informatika</p>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Universitas Krisnadwipayana</h5>
                                    </div>
                                    <p class="mb-1">Jurusan Teknik Informatika</p>
                                    <small>2021 - ...</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">SMK N 1 Kedungwuni</h5>
                                    </div>
                                    <p class="mb-1">Jurusan Teknik Instalasi Tenaga Listrik</p>
                                    <small>2009 - 2012</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">SMP N 1 Wiradesa</h5>
                                    </div>
                                    <small>2006 - 2009</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">SD N 2 Wiradesa</h5>
                                    </div>
                                    <small>2000 - 2006</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                <div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="list-group">
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Basis Data Lanjutan</h5>
                                        <small>309</small>
                                    </div>
                                    <p class="mb-1">Pak Ali Khumaidi, MKom</p>
                                    <small>20:00 - 22:00</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Pemrograman Web</h5>
                                        <small>309</small>
                                    </div>
                                    <p class="mb-1">Pak Avip Kurniawan, ST, MKom</p>
                                    <small>18:00 - 20:00</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Manajemen Proyek TI</h5>
                                        <small>409</small>
                                    </div>
                                    <p class="mb-1">Pak Harry Dwiyana K, B.InfTech, MTI</p>
                                    <small>20:00 - 22:00</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Sistem Multimedia</h5>
                                        <small>409</small>
                                    </div>
                                    <p class="mb-1">Pak Risanto Darmawan, MM, MKom</p>
                                    <small>08:00 - 20:00</small>
                                </div>
                                <div class="list-group-item list-group-item-action" aria-current="true">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h5 class="mb-1">Wawasan Global dan TIK</h5>
                                        <small>409</small>
                                    </div>
                                    <p class="mb-1">Pak Ali Khumaidi</p>
                                    <small>10:15 - 12:00</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                <div class="container mt-4">
                    <p style="font-size: 64px;">MAIN GAME</p>
                </div>
            </div>
        </div>

<?php
	include_once("..\__footer.php")
?>