<div class="container">
    <div class="row mt-6">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">

                    Ubah Data Pendaftar
                </div>
                <div class="card-body">

                  <form action="<?php echo base_url('pendaftaran/ubah') ?>" method="post">

                        <div class="form-group">

                        <input type="hidden" name="id_pendaftar" value="<?= $pendaftar['id_pendaftar'] ;?>">

                        </div>

                        <div class="form-row">
                          <div class="form-group col-md-6"/>
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="<?= $pendaftar['nama']; ?>" id="nama">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="no_identitas">No.KTP/No.KK</label>
                            <input type="number" name="no_identitas" class="form-control" value="<?= $pendaftar['no_identitas']; ?>" id="no_identitas">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('no_identitas'); ?></small>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="<?= $pendaftar['alamat']; ?>" id="alamat">
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('alamat'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="status_sekolah">Status Sekolah</label>
                            <select class="form-control" id="status_sekolah" name="status_sekolah">

                                <option><?= $pendaftar['status_sekolah']; ?></option>
                                <option>Tidak Sekolah</option>
                                <option>Tidak Melanjutkan</option>


                            </select>
                              <small id="emailHelp" class="form-text text-danger"><?= form_error('status_sekolah'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="status_pekerjaan">Status Pekerjaan</label>
                            <select class="form-control" id="status_pekerjaan" name="status_pekerjaan">


                                <option><?= $pendaftar['status_pekerjaan']; ?></option>
                                <option>Pengangguran</option>
                                <option>Tidak Memiliki Pekerjaan Tetap</option>


                            </select>
                              <small id="emailHelp" class="form-text text-danger"><?= form_error('status_pekerjaan'); ?></small>
                        </div>

                        <div class="form-group">
                          <label class="form-label" name="foto" for="foto">Foto 3x4</label>
                          <input type="file" class="form-control"   id="foto" name="foto"/>
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('foto'); ?></small>
                        </div>

                        <div class="form-group">
                          <label class="form-label" name="ijazah" for="ijazah">Ijazah</label>
                          <input type="file" class="form-control"  id="ijazah" name="ijazah"/>
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('ijazah'); ?></small>
                        </div>

                        <div class="form-group">
                          <label class="form-label" name="telepon" for="telepon">Telepon</label>
                          <input type="text" class="form-control" name="telepon" value="<?= $pendaftar['telepon']; ?>" id="telepon" />
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('telepon'); ?></small>
                        </div>

                        <div class="form-group">
                            <label for="usia">Usia 15-25</label>
                            <select class="form-control" id="usia" name="usia">


                                <option><?= $pendaftar['usia']; ?></option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>


                            </select>
                            <small id="emailHelp" class="form-text text-danger"><?= form_error('usia'); ?></small>
                        </div>

                        <div class="form-group col-md-3">
                          <label class="form-label" name="tanggal" for="tanggal">Tanggal</label>
                          <input type="date" class="form-control" name="tanggal" value="<?= $pendaftar['tanggal']; ?>" id="tanggal" />
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('tanggal'); ?></small>
                        </div>

                        <div class="form-group col-md-3">
                          <label for="status">Status</label>
                          <select class="form-control btn-info" id="status" name="status">


                              <option><?= $pendaftar['status']; ?></option>
                              <option>Pending</option>
                              <option>Diterima</option>
                              <option>Ditolak</option>

                          </select>


                        </div>
                        <div class="form-group col-md-6">
                          <label for="keterangan">Keterangan</label>
                          <input type="text" name="keterangan" class="form-control" value="<?= $pendaftar['keterangan']; ?>" id="keterangan">
                          <small id="emailHelp" class="form-text text-danger"><?= form_error('keterangan'); ?></small>
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
