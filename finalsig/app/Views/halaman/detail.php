<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <?php if ($Home['kecamatan'] == 'Lemong') : ?>
                <?php foreach ($Desa1 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Pesisir Utara') : ?>
                <?php foreach ($Desa2 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Pulau Pisang') : ?>
                <?php foreach ($Desa3 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Karya Penggawa') : ?>
                <?php foreach ($Desa4 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Way Krui') : ?>
                <?php foreach ($Desa5 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Pesisir Tengah') : ?>
                <?php foreach ($Desa6 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Krui Selatan') : ?>
                <?php foreach ($Desa7 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Pesisir Selatan') : ?>
                <?php foreach ($Desa8 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Ngambur') : ?>
                <?php foreach ($Desa9 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Ngaras') : ?>
                <?php foreach ($Desa10 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
                <?php ; ?>

            <?php elseif ($Home['kecamatan'] == 'Bangkunat') : ?>
                <?php foreach ($Desa11 as $Desa) : ?>
                    <img src="/img/detail/<?= $Desa['foto']; ?>" class="d-block w-100" alt="Foto">
                <?php endforeach; ?>
            <?php endif; ?>
            <div class="carousel-caption d-none d-md-block">
                <h5></h5>
                <p></p>
            </div>
        </div>
    </div>
</div>



            <div class="container mt-3 bg-white">
                <div class="row">
                    <p class="fs-1 text-center fw-bold text-uppercase">Kecamatan <?= $Home['kecamatan']; ?></p>
                    <p class="fs-5 text-center">Jumlah Desa :<?= $Home['jumdesa']; ?></p>
                    <?php if ($Home['kecamatan'] == 'Lemong') : ?>
                        <?php foreach ($Desa1 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Pesisir Utara') : ?>
                        <?php foreach ($Desa2 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Pulau Pisang') : ?>
                        <?php foreach ($Desa3 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Karya Penggawa') : ?>
                        <?php foreach ($Desa4 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Way Krui') : ?>
                        <?php foreach ($Desa5 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Pesisir Tengah') : ?>
                        <?php foreach ($Desa6 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Krui Selatan') : ?>
                        <?php foreach ($Desa7 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Pesisir Selatan') : ?>
                        <?php foreach ($Desa8 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Ngambur') : ?>
                        <?php foreach ($Desa9 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Ngaras') : ?>
                        <?php foreach ($Desa10 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                        <?php ; ?>

                    <?php elseif ($Home['kecamatan'] == 'Bangkunat') : ?>
                        <?php foreach ($Desa11 as $Desa) : ?>
                            <p class="fs-5 text-center"><?= $Desa['desa1']; ?> <?= $Desa['desa2']; ?> <?= $Desa['desa3']; ?> <?= $Desa['desa4']; ?> <?= $Desa['desa5']; ?> <?= $Desa['desa6']; ?> <?= $Desa['desa7']; ?> <?= $Desa['desa8']; ?> <?= $Desa['desa9']; ?> <?= $Desa['desa10']; ?> <?= $Desa['desa11']; ?> <?= $Desa['desa12']; ?> <?= $Desa['desa13']; ?><?= $Desa['desa14']; ?> <?= $Desa['desa15']; ?></p>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>


            <div class="container bg-white">
                <div class="row">
                    <p class="fs-4 text-center">Data Lengkap Sanitasi</p>
                </div>

                <div class="row">
                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="3">Tempat Pembuangan Sampah Sementara (TPS)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Tidak Tersedia</th>
                                    <th class="text-center" scope="col">Tersedia Digunakan</th>
                                    <th class="text-center" scope="col">Tersedia Tidak Digunakan</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['tpstt']; ?></td>
                                    <td class="text-center"><?= $Home['tpstd']; ?></td>
                                    <td class="text-center"><?= $Home['tpsttd']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="3">Penggunaan Fasilitas Buang Air Besar (Desa)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Jamban Sendiri</th>
                                    <th class="text-center" scope="col">Jamban Umum</th>
                                    <th class="text-center" scope="col">Bukan Jamban</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['fbabjs']; ?></td>
                                    <td class="text-center"><?= $Home['fbabju']; ?></td>
                                    <td class="text-center"><?= $Home['fbabbj']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="4">Tempat Pembuangan Akhir Tinja (Desa)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Tangki Pengelolaan Air Limbah</th>
                                    <th class="text-center" scope="col">Sawah / Kolam / Sungai / Kebun</th>
                                    <th class="text-center" scope="col">Lubang Tanah</th>
                                    <th class="text-center" scope="col">Lainnya</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['patipal']; ?></td>
                                    <td class="text-center"><?= $Home['patsawah']; ?></td>
                                    <td class="text-center"><?= $Home['patlt']; ?></td>
                                    <td class="text-center"><?= $Home['patl']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="4">Tempat Pembuangan Limbah Cair dari Air Mandi (Desa)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Dalam Lubang</th>
                                    <th class="text-center" scope="col">Lubang Resapan</th>
                                    <th class="text-center" scope="col">Drainase(Got/Selokan)</th>
                                    <th class="text-center" scope="col">Sungai / Laut</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['splcdl']; ?></td>
                                    <td class="text-center"><?= $Home['splcrs']; ?></td>
                                    <td class="text-center"><?= $Home['splcd']; ?></td>
                                    <td class="text-center"><?= $Home['splcsi']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="6">Sumber Air Untuk Minum (Desa)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Mata Air</th>
                                    <th class="text-center" scope="col" colspan="2">Ledeng</th>
                                    <th class="text-center" scope="col">Air Isi Ulang</th>
                                    <th class="text-center" scope="col">Sumur</th>
                                    <th class="text-center" scope="col">Sungai / Danau</th>
                                </tr>
                                <tr>
                                    <th colspan="1"> </th>
                                    <th class="text-center" scope="col">Dengan Meteran</th>
                                    <th class="text-center" scope="col">Tanpa Meteran</th>
                                    <th colspan="3"> </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['sauma']; ?></td>
                                    <td class="text-center"><?= $Home['saumdm']; ?></td>
                                    <td class="text-center"><?= $Home['saumtm']; ?></td>
                                    <td class="text-center"><?= $Home['saumaiu']; ?></td>
                                    <td class="text-center"><?= $Home['saums']; ?></td>
                                    <td class="text-center"><?= $Home['saumd']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                    <div class="row">
                        <table class="table table-bordered align-middle">
                            <thead>
                                <tr>

                                    <th class="text-center" scope="col" colspan="6">Sumber Air Untuk Mandi / Cuci (Desa)</th>
                                </tr>
                                <tr>

                                    <th class="text-center" scope="col">Mata Air</th>
                                    <th class="text-center" scope="col" colspan="2">Ledeng</th>
                                    <th class="text-center" scope="col">Air Isi Ulang</th>
                                    <th class="text-center" scope="col">Sumur</th>
                                    <th class="text-center" scope="col">Sungai / Danau</th>
                                </tr>
                                <tr>
                                    <th colspan="1"> </th>
                                    <th class="text-center" scope="col">Dengan Meteran</th>
                                    <th class="text-center" scope="col">Tanpa Meteran</th>
                                    <th colspan="3"> </th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>

                                    <td class="text-center"><?= $Home['saucma']; ?></td>
                                    <td class="text-center"><?= $Home['saucdm']; ?></td>
                                    <td class="text-center"><?= $Home['sauctm']; ?></td>
                                    <td class="text-center"><?= $Home['saucaiu']; ?></td>
                                    <td class="text-center"><?= $Home['saucs']; ?></td>
                                    <td class="text-center"><?= $Home['saucd']; ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>




            </div>
            <?= $this->endSection(); ?>