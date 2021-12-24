<?= $this->include('layout/navbaradm'); ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card-body">
            <form action="<?php echo base_url('admin/update/' . $Home['id']); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row">
                    <h1 class="text-center mb-5 mt-3">Masukkan Data Umum</h1>
                    <div class="col">
                        <div class="mb-3">
                            <label for="jumdesa" class="form-label">Jumlah desa</label>
                            <input type="text" class="form-control" value="<?php echo $Home['jumdesa']; ?>" id="jumdesa" name="jumdesa" autofocus>
                            <small id="jumdesa" class="form-text text-muted">Manual / Automatic</small>
                        </div>


                        <!-- input gambar -->
                        <div class="mb-3">
                            <label for="tpstt" class="form-label">Tidak Tersedia</label>
                            <input type="text" class="form-control" value="<?php echo $Home['tpstt']; ?>" id="tpstt" name="tpstt">
                            <small id="tpstt" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="tpstd" class="form-label">Tersedia Digunakan</label>
                            <input type="text" class="form-control" value="<?php echo $Home['tpstd']; ?>" id="tpstd" name="tpstd">
                            <small id="tpstd" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="tpsttd" class="form-label">Tersedia Tidak Digunakan</label>
                            <input type="text" class="form-control" value="<?php echo $Home['tpsttd']; ?>" id="tpsttd" name="tpsttd">
                            <small id="tpsttd" class="form-text text-muted">Manual / Automatic</small>
                        </div>



                        <div class="mb-3">
                            <label for="fbabjs" class="form-label">Jamban Sendiri</label>
                            <input type="text" class="form-control" value="<?php echo $Home['fbabjs']; ?>" id="fbabjs" name="fbabjs">
                            <small id="fbabjs" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="fbabju" class="form-label">Jamban Umum</label>
                            <input type="text" class="form-control" value="<?php echo $Home['fbabju']; ?>" id="fbabju" name="fbabju">
                            <small id="fbabju" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="fbabbj" class="form-label">Bukan Jamban</label>
                            <input type="text" class="form-control" value="<?php echo $Home['fbabbj']; ?>" id="fbabbj" name="fbabbj">
                            <small id="fbabbj" class="form-text text-muted">Manual / Automatic</small>
                        </div>




                        <div class="mb-3">
                            <label for="patipal" class="form-label">Pengelolaan Air Limbah</label>
                            <input type="text" class="form-control" value="<?php echo $Home['patipal']; ?>" id="patipal" name="patipal">
                            <small id="patipal" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="patsawah" class="form-label">Sawah</label>
                            <input type="text" class="form-control" value="<?php echo $Home['patsawah']; ?>" id="patsawah" name="patsawah">
                            <small id="patsawah" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="patlt" class="form-label">Lubang Tanah</label>
                            <input type="text" class="form-control" value="<?php echo $Home['patlt']; ?>" id="patlt" name="patlt">
                            <small id="patlt" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="patl" class="form-label">Lainnya</label>
                            <input type="text" class="form-control" value="<?php echo $Home['patl']; ?>" id="patl" name="patl">
                            <small id="patl" class="form-text text-muted">Manual / Automatic</small>
                        </div>



                        <div class="mb-3">
                            <label for="splcdl" class="form-label">Dalam Lubang</label>
                            <input type="text" class="form-control" value="<?php echo $Home['splcdl']; ?>" id="splcdl" name="splcdl">
                            <small id="splcdl" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="splcrs" class="form-label">Lubang Resapan</label>
                            <input type="text" class="form-control" value="<?php echo $Home['splcrs']; ?>" id="splcrs" name="splcrs">
                            <small id="splcrs" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="splcd" class="form-label">Drainase</label>
                            <input type="text" class="form-control" value="<?php echo $Home['splcd']; ?>" id="splcd" name="splcd">
                            <small id="splcd" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="splcsi" class="form-label">Sungai</label>
                            <input type="text" class="form-control" value="<?php echo $Home['splcsi']; ?>" id="splcsi" name="splcsi">
                            <small id="splcsi" class="form-text text-muted">Manual / Automatic</small>
                        </div>




                        <div class="mb-3">
                            <label for="sauma" class="form-label">Mata Air</label>
                            <input type="text" class="form-control" value="<?php echo $Home['sauma']; ?>" id="sauma" name="sauma">
                            <small id="sauma" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saumdm" class="form-label">Dengan Meteran</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saumdm']; ?>" id="saumdm" name="saumdm">
                            <small id="saumdm" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saumtm" class="form-label">Tanpa Meteran</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saumtm']; ?>" id="saumtm" name="saumtm">
                            <small id="saumtm" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saumaiu" class="form-label">Air Isi Ulang</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saumaiu']; ?>" id="saumaiu" name="saumaiu">
                            <small id="saumaiu" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saums" class="form-label">Sumur</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saums']; ?>" id="saums" name="saums">
                            <small id="saums" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saumd" class="form-label">Danau</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saumd']; ?>" id="saumd" name="saumd">
                            <small id="saumd" class="form-text text-muted">Manual / Automatic</small>
                        </div>




                        <div class="mb-3">
                            <label for="saucma" class="form-label">Mata Air</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saucma']; ?>" id="saucma" name="saucma">
                            <small id="saucma" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saucdm" class="form-label">Dengan Meteran</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saucdm']; ?>" id="saucdm" name="saucdm">
                            <small id="saucdm" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="sauctm" class="form-label">Tanpa Meteran</label>
                            <input type="text" class="form-control" value="<?php echo $Home['sauctm']; ?>" id="sauctm" name="sauctm">
                            <small id="sauctm" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saucaiu" class="form-label">Air Isi Ulang</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saucaiu']; ?>" id="saucaiu" name="saucaiu">
                            <small id="saucaiu" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saucs" class="form-label">Sumur</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saucs']; ?>" id="saucs" name="saucs">
                            <small id="saucs" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                        <div class="mb-3">
                            <label for="saucd" class="form-label">Danau</label>
                            <input type="text" class="form-control" value="<?php echo $Home['saucd']; ?>" id="saucd" name="saucd">
                            <small id="saucd" class="form-text text-muted">Manual / Automatic</small>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            <br>
        </div>
        <div class="col text-center">
            <a href="<?= base_url('/admin'); ?>"><button type="submit" class="btn btn-primary">Kembali</button></a>
        </div>
        <br>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <footer class="bg-dark" style="text-align: center; padding: 3px; color: white;">

        <p>© 2021 LA SEGAR TEAM</p>

    </footer>
</body>

</html>