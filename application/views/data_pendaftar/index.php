

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
        <h6 class="m-0 font-weight-bold text-primary">Data Pendaftaran
        <a href="pendaftaran/tambah" class="btn btn-primary"><b>Add</b></a></h6></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">No.KTP/No.KK</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Status Sekolah</th>
                <th class="text-center">Status Pekerjaan</th>
                <th class="text-center">Telepon</th>
                <th class="text-center">Usia</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">status</th>
                
                <th class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>




              <?php
              $no= 1;

              foreach ($pendaftar as $pe)

              {

              ?>

              <tr>
                <td><?= $no;?></td>
                <td><?= $pe['nama'];?></td>
                <td><?= $pe['no_identitas'];?></td>
                <td><?= $pe['alamat'];?></td>
                <td><?= $pe['status_sekolah'];?></td>
                <td><?= $pe['status_pekerjaan'];?></td>
                <td><?= $pe['telepon'];?></td>
                <td><?= $pe['usia'];?></td>
                <td><?= $pe['tanggal'];?></td>
                <td><?= $pe['status'];?></td>


                <td>

                  <a href="<?= base_url(); ?>pendaftaran/detail/<?= $pe['id_pendaftar']; ?>" class="badge badge-primary">detail
                  </a>

                  <a href="<?= base_url(); ?>pendaftaran/ubah/<?= $pe['id_pendaftar']; ?>" class="badge badge-success float-right ">ubah
                  </a>

                  <a href="<?= base_url(); ?>pendaftaran/hapus/<?= $pe['id_pendaftar']; ?>" class="badge badge-danger ">hapus
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

  <!-- /.container-fluid -->
