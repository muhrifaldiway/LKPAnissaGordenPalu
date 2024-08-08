<div class="container">
    <div class="row mt-8">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">

                    Tambah Data Usaha
                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('usaha/tambah') ?>" method="post">

                        <div class="form-group">

                            <input type="number" name="id" class="form-control" id="id" hidden>

                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6"
                            <label for="nama">Nama Usaha</label>
                            <input type="text" name="nama" class="form-control" id="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>

                        <div class="form-group col-md-6">
                          <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" class="form-control" id="alamat">
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group col-md-6"
                          <label for="nama_anggota">Nama Anggota</label>
                          <input type="text" name="nama_anggota" class="form-control" id="nama_anggota">
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('nama_anggota'); ?></small>
                      </div>

                      <div class="form-group col-md-3">
                        <label class="form-label" name="tanggal" for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" name="tanggal" id="tanggal" />
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                      </div>

                      <div class="form-group col-md-6"
                        <label for="omset">Omset</label>
                        <input type="text" name="omset" class="form-control" id="omset">
                        <small id="emailHelp" class="form-text text-danger"><?= form_error('omset'); ?></small>
                    </div>

                    <div class="form-group">
                      <label class="form-label" name="foto" for="foto">Foto</label>
                      <input type="file" class="form-control" id="foto" name="foto"/>
                      <small id="emailHelp" class="form-text text-danger"><?= form_error('foto'); ?></small>
                    </div>


</div>
                        <input type="submit" value="simpan" class="btn btn-primary
  					            "></input>

                        <a href="<?php echo base_url('pendaftaran'); ?>" class="btn btn-dark">Kembali</a>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
</div>
