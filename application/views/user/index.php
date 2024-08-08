

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
        <h6 class="m-0 font-weight-bold text-primary">Data User
        <a href="user/tambah" class="btn btn-primary"><b>Add</b></a></h6></h6>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="text-center">No</th>
                <th class="text-center">Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">role_id</th>
                <th class="text-center">is_active</th>

                <th class="text-center">Aksi</th>
              </tr>
            </thead>

            <tbody>




              <?php
              $no = 1;


              foreach ($user as $u)
              {
                ?>
              <tr>
                <td><?= $no;?></td>
                <td><?= $u['name'];?></td>
                <td><?= $u['email'];?></td>
                <td><?= $u['role_id'];?></td>
                <td><?= $u['is_active'];?></td>



                <td>

                  <a href="<?= base_url(); ?>user/ubah/<?= $u['id']; ?>" class="badge badge-success">ubah
                  </a>

                  <a href="<?= base_url(); ?>user/hapus/<?= $u['id']; ?>" class="badge badge-danger">hapus
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
