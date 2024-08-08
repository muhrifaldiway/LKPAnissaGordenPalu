<div class="container">
    <div class="row mt-6">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">

                    Ubah Data User
                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('user/ubah_aksi') ?>" method="post">

                        <div class="form-group">

                        <input type="hidden" name="id" value="<?= $user['id'] ;?>">

                        </div>

                        <div class="form-group col-md-6 row">

                          <div class="form-group">

                            <input type="text" class="form-control form-control-user" id="name" name="name" placeholder="Full name" value="<?= $user['name']; ?>">

                            <?= form_error('name','<small class="text-danger pl-4">','</small>'); ?>

                          </div>

                          <div class="form-group col-md-6">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email Address"value="<?= $user['email']; ?>"
              >

                          <?= form_error('email','<small class="text-danger pl-4">','</small>'); ?>

                          </div>
                          <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                              <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password" value="<?= $user['password'] ;?>">

                          <?= form_error('password1','<small class="text-danger pl-4">','</small>'); ?>


                            </div>
                            <div class="form-group">
                              <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">

                            </div>
                          </div>

                          <div class="form-group col-md-3">
                              <label for="role_id">role_id</label>
                              <select class="form-control" id="role_id" name="role_id">



                                    <option value="<?= $user['role_id'] ;?>"><?= $user['role_id'] ; ?></option>
                                    <option>2</option>


                              </select>
                                <small id="emailHelp" class="form-text text-danger"><?= form_error('role_id'); ?></small>
                          </div>

                          <div class="form-group">
                              <label for="is_active">is_active</label>
                              <select class="form-control" id="is_active" name="is_active">


                                  <option value="<?= $user['is_active'];?>"><?= $user['is_active'] ;?></option>
                                  <option>1</option>
                                  <option>0</option>


                              </select>
                                <small id="emailHelp" class="form-text text-danger"><?= form_error('is_active'); ?></small>
                          </div>
                        </div>
                        <input type="submit" value="simpan" class="btn btn-primary
  					            "></input>

                        <a href="<?php echo base_url('user'); ?>" class="btn btn-dark">Kembali</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
</div>