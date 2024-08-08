<div class="container">
    <div class="row mt-3">

        <div class="col-md-12">
            <div class="card">

          <form action="<?php echo base_url('pendaftaran/detail') ?>" method="post">


                <div class="card-header">
                    LKP Anissa Gorden Palu
                </div>

                <div class="card" style="">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="<?= base_url('assets/images/team/style1/');?><?= $pendaftar['foto']; ?>" class="card-img" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                        <h5 type="text" name="nama" class="text-muted" value="<?= $pendaftar['nama']; ?>" id="nama">Nama :  <?= $pendaftar['nama']; ?> </h5>

                    <p class="card-text" value="<?= $pendaftar['no_identitas'] ;?>">No identitas :  <?= $pendaftar['no_identitas']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['alamat'] ;?>">Alamat : <?= $pendaftar['alamat']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['status_sekolah'] ;?>">Status Sekolah : <?= $pendaftar['status_sekolah']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['status_pekerjaan'] ;?>">Status Pekerjaan : <?= $pendaftar['status_pekerjaan']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['ijazah'] ;?>">Ijazah : <?= $pendaftar['ijazah']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['telepon'] ;?>">Telepon : <?= $pendaftar['telepon']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['usia'] ;?>">Usia : <?= $pendaftar['usia']; ?></p>
                    <p class="card-text" value="<?= $pendaftar['tanggal'] ;?>"><small class="text-muted"><?= $pendaftar['tanggal']; ?> </small></p>





                    <a href="<?php echo base_url('pendaftaran'); ?>" class="btn btn-primary">Kembali</a>
                    </div>


                    <//?php echo json_encode($pendaftar) ?>




                  </form>
                </div>

        </div>
      </div>
      </div>
    </div>

    </div>
</div>
</div>
