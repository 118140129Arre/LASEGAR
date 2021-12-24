<?= $this->extend('layout/templateadm'); ?>
<?= $this->section('content1'); ?>




<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
    </symbol>
    <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
    </symbol>
    <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
    </symbol>
</svg>


<!-- flashdata -->
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill" />
        </svg>
        <div>
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    </div>
<?php endif; ?>
<!-- end flashdata -->

<?php if (!empty(session()->getFlashdata('error'))) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <h4>Periksa Entrian Form</h4>
        </hr />
        <?php echo session()->getFlashdata('error'); ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php endif; ?>





<div class="container mt-3">
    <div class="row">
        <p class="fs-2 fw-bold">Selamat Datang di Halaman Admin</p>
        <p class="fs-5"></p>
    </div>
</div>


<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A==" crossorigin="" />
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js" integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA==" crossorigin=""></script>


<script type="text/javascript" src="js/geo/Bengkunat.js"></script>
<script type="text/javascript" src="js/geo/KaryaPenggawa.js"></script>
<script type="text/javascript" src="js/geo/Lemong.js"></script>
<script type="text/javascript" src="js/geo/Ngambur.js"></script>
<script type="text/javascript" src="js/geo/Ngaras.js"></script>
<script type="text/javascript" src="js/geo/PesisirSelatan.js"></script>
<script type="text/javascript" src="js/geo/PesisirTengah.js"></script>
<script type="text/javascript" src="js/geo/PesisirUtara.js"></script>
<script type="text/javascript" src="js/geo/PulauPisang.js"></script>
<script type="text/javascript" src="js/geo/WayKrui.js"></script>
<script type="text/javascript" src="js/geo/KruiSelatan.js"></script>

<div class="container">
    <span class="border border-5 border-info">
        <center>
            <div id="map" style="width: 1000px; height: 500px;"></div>
            <script>
                var map = L.map('map').setView([-5.246286088788187, 104.00119186434354], 9);

                var tiles = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                    maxZoom: 18,
                    attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
                        'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                    id: 'mapbox/streets-v11',
                    tileSize: 512,
                    zoomOffset: -1
                }).addTo(map);
                <?php foreach ($Home1 as $n) : ?>
                    var marker = L.marker([-4.954623360838084, 103.75357504877245]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Lemong<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home2 as $n) : ?>
                    var marker = L.marker([-5.034340376713131, 103.80765425506964]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Pesisir Utara<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home3 as $n) : ?>
                    var marker = L.marker([-5.120693821610292, 103.8466341593215]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Pulau Pisang<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home4 as $n) : ?>
                    var marker = L.marker([-5.104534101308811, 103.91019622202055]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Karya Penggawa<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home5 as $n) : ?>
                    var marker = L.marker([-5.149016585405147, 103.98752689731745]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Way Krui<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home6 as $n) : ?>
                    var marker = L.marker([-5.183716645181644, 103.96663240930148]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Pesisir Tengah<br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home7 as $n) : ?>
                    var marker = L.marker([-5.224165888562884, 103.95547097687427]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Krui Selatan<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home8 as $n) : ?>
                    var marker = L.marker([-5.260405374150124, 104.09299725616279]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Pesisir Selatan<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home9 as $n) : ?>
                    var marker = L.marker([-5.42553013108295, 104.14898356487166]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Ngambur<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home10 as $n) : ?>
                    var marker = L.marker([-5.485040499269615, 104.25376447227647]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Ngaras<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>

                <?php foreach ($Home11 as $n) : ?>
                    var marker = L.marker([-5.578004113877908, 104.35403796016895]).addTo(map)
                        .bindPopup('<b>Kecamatan</b><br />Bengkunat<br /><br /><a href="/admin/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                <?php endforeach; ?>


                var popup = L.popup()
                    .setLatLng([-5.224211392718102, 104.00790489100748])
                    .setContent('Kabupaten Pesisir Barat')
                    .openOn(map);



                var Lemong = L.geoJson(Lemong, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'red',
                            fillColor: 'red',
                        }
                    },
                }).addTo(map);
                var PesisirUtara = L.geoJson(PesisirUtara, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'yellow',
                            fillColor: 'yellow',
                        }
                    },
                }).addTo(map);
                var PulauPisang = L.geoJson(PulauPisang, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'green',
                            fillColor: 'green',
                        }
                    },
                }).addTo(map);
                var KaryaPenggawa = L.geoJson(KaryaPenggawa, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'blue',
                            fillColor: 'blue',
                        }
                    },
                }).addTo(map);
                var WayKrui = L.geoJson(WayKrui, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'red',
                            fillColor: 'red',
                        }
                    },
                }).addTo(map);
                var PesisirTengah = L.geoJson(PesisirTengah, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'yellow',
                            fillColor: 'yellow',
                        }
                    },
                }).addTo(map);
                var KruiSelatan = L.geoJson(KruiSelatan, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'green',
                            fillColor: 'green',
                        }
                    },
                }).addTo(map);
                var PesisirSelatan = L.geoJson(PesisirSelatan, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'blue',
                            fillColor: 'blue',
                        }
                    },
                }).addTo(map);
                var Ngambur = L.geoJson(Ngambur, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'red',
                            fillColor: 'red',
                        }
                    },
                }).addTo(map);
                var Ngaras = L.geoJson(Ngaras, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'yellow',
                            fillColor: 'yellow',
                        }
                    },
                }).addTo(map);
                var Bengkunat = L.geoJson(Bengkunat, {
                    style: function(feature) {
                        return {
                            opacity: 0.5,
                            color: 'green',
                            fillColor: 'green',
                        }
                    },
                }).addTo(map);




                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent('You clicked the map at ' + e.latlng.toString())
                        .openOn(map);
                }

                map.on('click', onMapClick);
            </script>
        </center>
    </span>
</div>
<?= $this->endSection(); ?>