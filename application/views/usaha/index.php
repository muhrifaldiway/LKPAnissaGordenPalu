

<!-- Begin Page Content -->
<div class="container-fluid">

  <?php if($this->session->flashdata('flash') ) : ?>

  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di tambahkan
              <?php $this->session->flashdata('flash');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>

  <?php elseif($this->session->flashdata('hapus') ) : ?>
  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di Hapus
              <?php $this->session->flashdata('hapus');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>


  <?php elseif($this->session->flashdata('ubah') ) : ?>
  <div class="row-mt-3">
      <div class="col-md6">
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              Data<strong> Berhasil</strong> di Ubah
              <?php $this->session->flashdata('ubah');?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
      </div>
  </div>

  <?php endif;?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Usaha
        <a href="usaha/tambah" class="btn btn-primary"><b>Add</b></a></h6></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>

                <th class="text-center">No</th>
                <th class="text-center">Nama Usaha</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Nama Anggota</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Omset</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>




              <?php

                $no = 1;

              foreach ($usaha as $u)
              {

              ?>

              <tr>
                <td><?= $no;?></td>
                <td><?= $u['nama'];?></td>
                <td><?= $u['alamat'];?></td>
                <td><?= $u['nama_anggota'];?></td>
                <td><?= $u['tanggal'];?></td>
                <td><?= $u['omset'];?></td>


                <td>

                  <a href="<?= base_url(); ?>usaha/detail/<?= $u['id']; ?>" class="badge badge-primary">detail
                  </a>

                  <a href="<?= base_url(); ?>usaha/ubah/<?= $u['id']; ?>" class="badge badge-success">ubah
                  </a>

                  <a href="<?= base_url(); ?>usaha/hapus/<?= $u['id']; ?>" class="badge badge-danger">hapus
                  </a>

                </td>




              </tr>

                <?php

                  $no++;
                }
                 ?>

            </tbody>







          </table>

        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
