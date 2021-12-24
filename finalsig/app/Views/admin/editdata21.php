<?= $this->extend('layout/templateadm'); ?>
<?= $this->section('content1'); ?>


<head>
    <link href="/css/sosmed.css" rel="stylesheet">
</head>


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


<div class="container-fluid">
    <div class="card-body">
        <form action="<?php echo base_url('admin/update/' . $Home['id']); ?>" method="post" enctype="multipart/form-data">
            <?= csrf_field(); ?>
            <div class="row">
                <h1 class="text-center mb-5 mt-3">Masukkan Data Umum</h1>
                <div class="col">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>

                    <div class="mb-3">
                        <label for="jumdesa" class="form-label">Jumlah desa</label>
                        <input type="text" class="form-control" value="<?php echo $Home['jumdesa']; ?>" id="jumdesa" name="jumdesa" autofocus>
                        <small id="jumdesa" class="form-text text-muted">Manual / Automatic</small>
                    </div>


                    <!-- input gambar -->
                    <div class="mb-3">
                        <label for="tpstt" class="form-label">tpstt</label>
                        <input type="text" class="form-control" value="<?php echo $Home['tpstt']; ?>" id="tpstt" name="tpstt">
                        <small id="tpstt" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="tpstd" class="form-label">tpstd</label>
                        <input type="text" class="form-control" value="<?php echo $Home['tpstd']; ?>" id="tpstd" name="tpstd">
                        <small id="tpstd" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="tpsttd" class="form-label">tpsttd</label>
                        <input type="text" class="form-control" value="<?php echo $Home['tpsttd']; ?>" id="tpsttd" name="tpsttd">
                        <small id="tpsttd" class="form-text text-muted">Manual / Automatic</small>
                    </div>



                    <div class="mb-3">
                        <label for="fbabjs" class="form-label">fbabjs</label>
                        <input type="text" class="form-control" value="<?php echo $Home['fbabjs']; ?>" id="fbabjs" name="fbabjs">
                        <small id="fbabjs" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="fbabju" class="form-label">fbabju</label>
                        <input type="text" class="form-control" value="<?php echo $Home['fbabju']; ?>" id="fbabju" name="fbabju">
                        <small id="fbabju" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="fbabbj" class="form-label">fbabbj</label>
                        <input type="text" class="form-control" value="<?php echo $Home['fbabbj']; ?>" id="fbabbj" name="fbabbj">
                        <small id="fbabbj" class="form-text text-muted">Manual / Automatic</small>
                    </div>




                    <div class="mb-3">
                        <label for="patipal" class="form-label">patipal</label>
                        <input type="text" class="form-control" value="<?php echo $Home['patipal']; ?>" id="patipal" name="patipal">
                        <small id="patipal" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="patsawah" class="form-label">patsawah</label>
                        <input type="text" class="form-control" value="<?php echo $Home['patsawah']; ?>" id="patsawah" name="patsawah">
                        <small id="patsawah" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="patlt" class="form-label">patlt</label>
                        <input type="text" class="form-control" value="<?php echo $Home['patlt']; ?>" id="patlt" name="patlt">
                        <small id="patlt" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="patl" class="form-label">patl</label>
                        <input type="text" class="form-control" value="<?php echo $Home['patl']; ?>" id="patl" name="patl">
                        <small id="patl" class="form-text text-muted">Manual / Automatic</small>
                    </div>



                    <div class="mb-3">
                        <label for="splcdl" class="form-label">splcdl</label>
                        <input type="text" class="form-control" value="<?php echo $Home['splcdl']; ?>" id="splcdl" name="splcdl">
                        <small id="splcdl" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="splcrs" class="form-label">splcrs</label>
                        <input type="text" class="form-control" value="<?php echo $Home['splcrs']; ?>" id="splcrs" name="splcrs">
                        <small id="splcrs" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="splcd" class="form-label">splcd</label>
                        <input type="text" class="form-control" value="<?php echo $Home['splcd']; ?>" id="splcd" name="splcd">
                        <small id="splcd" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="splcsi" class="form-label">splcsi</label>
                        <input type="text" class="form-control" value="<?php echo $Home['splcsi']; ?>" id="splcsi" name="splcsi">
                        <small id="splcsi" class="form-text text-muted">Manual / Automatic</small>
                    </div>




                    <div class="mb-3">
                        <label for="sauma" class="form-label">sauma</label>
                        <input type="text" class="form-control" value="<?php echo $Home['sauma']; ?>" id="sauma" name="sauma">
                        <small id="sauma" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saumdm" class="form-label">saumdm</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saumdm']; ?>" id="saumdm" name="saumdm">
                        <small id="saumdm" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saumtm" class="form-label">saumtm</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saumtm']; ?>" id="saumtm" name="saumtm">
                        <small id="saumtm" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saumaiu" class="form-label">saumaiu</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saumaiu']; ?>" id="saumaiu" name="saumaiu">
                        <small id="saumaiu" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saums" class="form-label">saums</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saums']; ?>" id="saums" name="saums">
                        <small id="saums" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saumd" class="form-label">saumd</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saumd']; ?>" id="saumd" name="saumd">
                        <small id="saumd" class="form-text text-muted">Manual / Automatic</small>
                    </div>




                    <div class="mb-3">
                        <label for="saucma" class="form-label">saucma</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saucma']; ?>" id="saucma" name="saucma">
                        <small id="saucma" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saucdm" class="form-label">saucdm</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saucdm']; ?>" id="saucdm" name="saucdm">
                        <small id="saucdm" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="sauctm" class="form-label">sauctm</label>
                        <input type="text" class="form-control" value="<?php echo $Home['sauctm']; ?>" id="sauctm" name="sauctm">
                        <small id="sauctm" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saucaiu" class="form-label">saucaiu</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saucaiu']; ?>" id="saucaiu" name="saucaiu">
                        <small id="saucaiu" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saucs" class="form-label">saucs</label>
                        <input type="text" class="form-control" value="<?php echo $Home['saucs']; ?>" id="saucs" name="saucs">
                        <small id="saucs" class="form-text text-muted">Manual / Automatic</small>
                    </div>
                    <div class="mb-3">
                        <label for="saucd" class="form-label">saucd</label>
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
<?= $this->endSection(); ?>