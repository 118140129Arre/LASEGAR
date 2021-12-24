<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/cover.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<br>

<div class="container bg-white">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <p class="fs-4 fw-bold">Kabupaten Pesisir Barat</p>
                    <hr>
                    <div class="col-md-6 text-center">
                        <img src="img/ls.jpg" alt="luas" style="width: 350px; height:250px;">

                        <p class="fs-5">Luas Kabupaten Pesisir Barat : 2.541,42 KM<sup>2</p>
                    </div>
                    <div class="col-md-6 text-center">
                        <img src="img/Krui.jpg" alt="luas" style="width: 350px; height:250px;">

                        <p class="fs-5">Ibukota Kabupaten Pesisir Barat yaitu Kota Krui sekaligus menjadi Landmark Kabupaten Pesisir Barat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <br>
                <img src="img/admpesibar.jpg" alt="admpesibar" style="width: 265px; height:350px;">
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col text-center">
                <img src="img/lmng.jpg" alt="Lemong" style="width: 70px; height:70px;">
                <p class="text-center">Lemong</p>
            </div>
            <div class="col text-center">
                <img src="img/pssu.jpg" alt="Pesisir Utara" style="width: 70px; height:70px;">
                <p>Pesisir Barat</p>
            </div>
            <div class="col text-center">
                <img src="img/pp.jpg" alt="Pulau Pisang" style="width: 70px; height:70px;">
                <p>Pulau Pisang</p>
            </div>
            <div class="col text-center">
                <img src="img/krypgw.jpg" alt="Karya Penggawa" style="width: 70px; height:70px;">
                <p>Karya Penggawa</p>
            </div>
            <div class="col text-center">
                <img src="img/wykrui.jpg" alt="Way Krui" style="width: 70px; height:70px;">
                <p>Way Krui</p>
            </div>
            <div class="col text-center">
                <img src="img/psst.jpg" alt="Pesisir Tengah" style="width: 70px; height:70px;">
                <p>Pesisir Tengah</p>
            </div>
            <div class="col text-center">
                <img src="img/kruisltn.jpg" alt="Krui Selatan" style="width: 70px; height:70px;">
                <p>Krui Selatan</p>
            </div>
            <div class="col text-center">
                <img src="img/psss.jpg" alt="Pesisir Selatan" style="width: 70px; height:70px;">
                <p>Pesisir Selatan</p>
            </div>
            <div class="col text-center">
                <img src="img/ngmbr.jpg" alt="Ngambur" style="width: 70px; height:70px;">
                <p>Ngambur</p>
            </div>
            <div class="col text-center">
                <img src="img/ngrs.jpg" alt="Ngaras" style="width: 70px; height:70px;">
                <p>Ngaras</p>
            </div>
            <div class="col text-center">
                <img src="img/bngknt.jpg" alt="Bengkunat" style="width: 70px; height:70px;">
                <p>Bengkunat</p>
            </div>
        </div>
    </div>

    <br><br><br><br>
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
    <script type="text/javascript" src="js/geo/pesisirbarat.js"></script>

    <p class="fs-2 fw-bold text-center">PETA KECAMATAN DI KABUPATEN PESISIR BARAT</p>

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
                            .bindPopup('<b>Kecamatan</b><br />Lemong<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home2 as $n) : ?>
                        var marker = L.marker([-5.034340376713131, 103.80765425506964]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Pesisir Utara<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home3 as $n) : ?>
                        var marker = L.marker([-5.120693821610292, 103.8466341593215]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Pulau Pisang<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home4 as $n) : ?>
                        var marker = L.marker([-5.104534101308811, 103.91019622202055]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Karya Penggawa<br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home5 as $n) : ?>
                        var marker = L.marker([-5.149016585405147, 103.98752689731745]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Way Krui<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home6 as $n) : ?>
                        var marker = L.marker([-5.125387, 103.975836]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Pesisir Tengah<br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                        var marker = L.marker([-5.183716645181644, 103.96663240930148]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Pesisir Tengah<br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>


                    <?php foreach ($Home7 as $n) : ?>
                        var marker = L.marker([-5.224165888562884, 103.95547097687427]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Krui Selatan<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home8 as $n) : ?>
                        var marker = L.marker([-5.260405374150124, 104.09299725616279]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Pesisir Selatan<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home9 as $n) : ?>
                        var marker = L.marker([-5.42553013108295, 104.14898356487166]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Ngambur<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home10 as $n) : ?>
                        var marker = L.marker([-5.485040499269615, 104.25376447227647]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Ngaras<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>

                    <?php foreach ($Home11 as $n) : ?>
                        var marker = L.marker([-5.578004113877908, 104.35403796016895]).addTo(map)
                            .bindPopup('<b>Kecamatan</b><br />Bengkunat<br /><br /><a href="/home/detail/<?= $n['kecamatan']; ?>"><button type="button" class="btn btn-primary">Detail</button></a>').openPopup();
                    <?php endforeach; ?>


                    var popup = L.popup()
                        .setLatLng([-5.224211392718102, 104.00790489100748])
                        .setContent('Kabupaten Pesisir Barat')
                        .openOn(map);


                    var pesisirbarat = L.geoJson(pesisirbarat, {
                        style: function(feature) {
                            return {
                                opacity: 1.0,
                                color: 'black',
                            }
                        },
                    }).addTo(map);
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

</div>
<?= $this->endSection(); ?>