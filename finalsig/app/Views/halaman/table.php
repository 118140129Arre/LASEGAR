<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="/img/datalengkap-01.jpg" class="d-block w-100" alt="slide1">
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container bg-white">
    <p class="fs-1 fw-bold text-center">Sarana Prasarana Sanitasi dan Air Bersih</p>
    <br><br>
    <p class="fs-4 text-center">Jumlah ketersediaan Tempat Pembuangan Sampah Sementara, Penggunaan fasilitas Buang Air Besar, dan Tempat Pembuangan Akhir Tinja bedasarkan Kecamatan di Kabupaten Pesisir Barat 2019</p><br><br>
    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="3">Tempat Pembuangan Sampah Sementara (TPS)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Tidak Tersedia</th>
                    <th class="text-center" scope="col">Tersedia Digunakan</th>
                    <th class="text-center" scope="col">Tersedia Tidak Digunakan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['tpstt']; ?></td>
                        <td class="text-center"><?= $n['tpstd']; ?></td>
                        <td class="text-center"><?= $n['tpsttd']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="3">Penggunaan Fasilitas Buang Air Besar (Desa)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Jamban Sendiri</th>
                    <th class="text-center" scope="col">Jamban Umum</th>
                    <th class="text-center" scope="col">Bukan Jamban</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['fbabjs']; ?></td>
                        <td class="text-center"><?= $n['fbabju']; ?></td>
                        <td class="text-center"><?= $n['fbabbj']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="4">Tempat Pembuangan Akhir Tinja (Desa)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Tangki Pengelolaan Air Limbah</th>
                    <th class="text-center" scope="col">Sawah / Kolam / Sungai / Kebun</th>
                    <th class="text-center" scope="col">Lubang Tanah</th>
                    <th class="text-center" scope="col">Lainnya</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['patipal']; ?></td>
                        <td class="text-center"><?= $n['patsawah']; ?></td>
                        <td class="text-center"><?= $n['patlt']; ?></td>
                        <td class="text-center"><?= $n['patl']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div><br>
    <hr><br><br>

    <p class="fs-4 text-center">Jumlah ketersediaan Tempat/Saluran Pembuangan Limbah Cair dan air mandi, sumber air untuk minum dan sumber air untuk mandi berdasarkan Kecamatan di Kabupaten Pesisir Barat 2019</p><br><br>
    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="4">Tempat Pembuangan Limbah Cair dari Air Mandi (Desa)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Dalam Lubang</th>
                    <th class="text-center" scope="col">Lubang Resapan</th>
                    <th class="text-center" scope="col">Drainase(Got/Selokan)</th>
                    <th class="text-center" scope="col">Sungai / Laut</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['splcdl']; ?></td>
                        <td class="text-center"><?= $n['splcrs']; ?></td>
                        <td class="text-center"><?= $n['splcd']; ?></td>
                        <td class="text-center"><?= $n['splcsi']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="6">Sumber Air Untuk Minum (Desa)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Mata Air</th>
                    <th class="text-center" scope="col" colspan="2">Ledeng</th>
                    <th class="text-center" scope="col">Air Isi Ulang</th>
                    <th class="text-center" scope="col">Sumur</th>
                    <th class="text-center" scope="col">Sungai / Danau</th>
                </tr>
                <tr>
                    <th colspan="3"> </th>
                    <th class="text-center" scope="col">Dengan Meteran</th>
                    <th class="text-center" scope="col">Tanpa Meteran</th>
                    <th colspan="3"> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['sauma']; ?></td>
                        <td class="text-center"><?= $n['saumdm']; ?></td>
                        <td class="text-center"><?= $n['saumtm']; ?></td>
                        <td class="text-center"><?= $n['saumaiu']; ?></td>
                        <td class="text-center"><?= $n['saums']; ?></td>
                        <td class="text-center"><?= $n['saumd']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="row">
        <table class="table table-bordered align-middle">
            <thead>
                <tr>
                    <th class="text-center" scope="col">Kecamatan</th>
                    <th class="text-center" scope="col">Jumlah Desa</th>
                    <th class="text-center" scope="col" colspan="6">Sumber Air Untuk Mandi / Cuci (Desa)</th>
                </tr>
                <tr>
                    <th colspan="2"> </th>
                    <th class="text-center" scope="col">Mata Air</th>
                    <th class="text-center" scope="col" colspan="2">Ledeng</th>
                    <th class="text-center" scope="col">Air Isi Ulang</th>
                    <th class="text-center" scope="col">Sumur</th>
                    <th class="text-center" scope="col">Sungai / Danau</th>
                </tr>
                <tr>
                    <th colspan="3"> </th>
                    <th class="text-center" scope="col">Dengan Meteran</th>
                    <th class="text-center" scope="col">Tanpa Meteran</th>
                    <th colspan="3"> </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($order as $n) : ?>
                    <tr>
                        <td><?= $n['kecamatan']; ?></td>
                        <td class="text-center"><?= $n['jumdesa']; ?></td>
                        <td class="text-center"><?= $n['saucma']; ?></td>
                        <td class="text-center"><?= $n['saucdm']; ?></td>
                        <td class="text-center"><?= $n['sauctm']; ?></td>
                        <td class="text-center"><?= $n['saucaiu']; ?></td>
                        <td class="text-center"><?= $n['saucs']; ?></td>
                        <td class="text-center"><?= $n['saucd']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>