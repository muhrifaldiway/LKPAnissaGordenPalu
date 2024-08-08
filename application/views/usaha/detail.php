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
                  <img src="<?= base_url('assets/images/services/style9/');?><?= $usaha['foto']; ?>" class="card-img" alt="">
                </div>
                <div class="col-md-8">
                  <div class="card-body">

                        <h5 type="text" name="nama" class="text-muted" value="<?= $usaha['nama']; ?>" id="nama">Nama Usaha :<?= $usaha['nama']; ?> </h5>

                        <p class="card-text" value="<?= $usaha['alamat'] ;?>">Alamat : <?= $usaha['alamat']; ?></p>
                    <p class="card-text" value="<?= $usaha['nama_anggota'] ;?>">Nama Anggota : <?= $usaha['nama_anggota']; ?></p>
                    <p class="card-text" value="<?= $usaha['omset'] ;?>">Omset : <?= $usaha['omset']; ?></p>
                    <p class="card-text" value="<?= $usaha['tanggal'] ;?>"><small class="text-muted"><?= $usaha['tanggal']; ?> </small></p>





                    <a href="<?php echo base_url('usaha'); ?>" class="btn btn-primary">Kembali</a>
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
