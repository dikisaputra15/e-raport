<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Mapel & Guru Aktif Kelas IX</h4></center>
                                <div class="table-responsive">
                                 <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah MAPEL & Guru</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Guru</th>
                                                <th>Update Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             <?php
                                             $i = 1;
                                             foreach ($mapgu as $dat) : ?>

                                              <tr>
                                                   <td><?= $i++; ?></td>
                                                   <td><?= $dat['mapel']; ?></td>
                                                   <td><?= $dat['nama_guru']; ?></td>
                                                   <td>
                                                      <a href="<?= base_url('admin/kelas3/listnilai3'); ?>" class="btn btn-primary">Update Nilai</a>
                                                   </td>
                                                </tr>

                                             <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
               
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah MAPEL & Guru</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/kelas1/tambahmapgu') ?>" method="POST">
                    <div class="col-md-12">
                      <select name="id_mapel" id="id_mapel" class="form-control form-control-sm mb-3">
                            <option value="">Mata Pelajaran</option>
                            <?php foreach ($mapel as $data) : ?>
                               <option value="<?= $data['id_mapel'] ?>"><?= $data['mapel'] ?></option>
                            <?php endforeach; ?>
                      </select>
                  </div>
                  <div class="col-md-12">
                      <select name="nip_guru" id="nip_guru" class="form-control form-control-sm mb-3">
                            <option value="">Nama Guru</option>
                            <?php foreach ($guru as $data) : ?>
                               <option value="<?= $data['nip_guru'] ?>"><?= $data['nama_guru'] ?></option>
                            <?php endforeach; ?>
                      </select>
                  </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-sm btn-danger" data-dismiss="modal">Batal</button>
               <button type="submit" class="btn btn-sm btn-primary">Tambah</button>
            </div>
            </form>
         </div>
      </div>
   </div>
</div>