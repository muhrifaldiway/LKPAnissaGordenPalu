<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">

                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('pendaftaran/daftar') ?>" method="post">

                    <h5 class="card-title"><?= $pendaftar['id_pendaftar']; ?> </h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pendaftar['nama']; ?></h6>
                    <p class="card-text"><?= $pendaftar['alamat']; ?> </p>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $pendaftar['telepon']; ?></h6>

                    <p class="card-text"><?= $pendaftar['tanggal']; ?> </p>

                    <input type="submit" value="simpan" class="btn btn-info
                    float-right"></input>
                    <a href="<?php echo base_url('pendaftaran'); ?>" class="btn btn-primary">Kembali</a>

<?php echo  json_encode($pendaftar) ;?>

                  </form>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
