<div class="container">
  <div class="card shadow mb-4">
    <div class="card-header py-3">
    <h6 class="text-center text-primary"><b>Silahkan</b> menunggu untuk konfirmasi data <b>status</b> anda<br>
                                          jika status anda sudah dikonfirmasi menjadi <b> Diterima ! </b> Silahkan melihat jadwal pembelajaran</br>
                                        yang sudah kami sediakan</h6>


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

      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Alamat</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Status</th>
                <th class="text-center">Keterangan</th>
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

                <td><?= $pe['alamat'];?></td>

              
                <td><?= $pe['tanggal'];?></td>
                <td><?= $pe['status'];?></td>
                <td><?= $pe['keterangan'];?></td>






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
</div>
</div>


  <!-- /.container-fluid -->
