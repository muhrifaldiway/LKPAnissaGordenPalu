<div class="container bg-gradient-warning">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-lg-5">

            <div class=" card bg-gradient-light o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class=" text-light-900 mb-4"><b>Login</b></h1>
                                </div>

                                <?= $this->session->flashdata('message'); ?>

                                <form class="user" method="post" action="<?= base_url('Login'); ?>">
                                  <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Enter Email Address..." value="<?= set_value('email'); ?>">

                                     <?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>


                                  </div>
                                  <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">

                                     <?= form_error('password','<small class="text-danger pl-4">','</small>'); ?>

                                  </div>
                                    <button type="submit" class="btn btn-dark btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Login/register') ?>">Buat akun anda!</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Home') ?>">Kembali Ke Beranda</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
