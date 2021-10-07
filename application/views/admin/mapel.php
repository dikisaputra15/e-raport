<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Mata Pelajaran</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Guru</th>
                                                <th>Kelas</th>
                                                <th>Mata Pelajaran </th>
                                                <th>Tahun Ajaran</th>
                                                <th>KKM</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($mapel as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nama_guru']; ?></td>
						                           <td><?= $dat['kelas']; ?></td>
                                       <td><?= $dat['mapel']; ?></td>
                                       <td><?= $dat['tahun_ajaran']; ?></td>
						                           <td><?= $dat['kkm']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/mapel/hapusmapel/') . $dat['id_mapel'] ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus" title="hapus"><i class="fas fa-trash"></i></a>
						                              <a href="<?= base_url('admin/mapel/editmapel/') . $dat['id_mapel'] ?>" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fas fa-edit"></i></a>
						                           </td>
						                        </tr>

						                     <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
                 <!-- modal tambah kategori -->
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Tambah Mata Pelajaran</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/mapel/tambahmapel') ?>" method="POST">
                  
                  <select name="nip_guru" id="nip_guru" class="form-control form-control-sm mb-3">
                        <option value="">Guru</option>
                        <?php foreach ($guru as $kt) : ?>
                           <option value="<?= $kt['nip_guru'] ?>"><?= $kt['nama_guru'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  <select name="id_kelas" id="id_kelas" class="form-control form-control-sm mb-3">
                        <option value="">Kelas</option>
                        <?php foreach ($kelas as $kl) : ?>
                           <option value="<?= $kl['id_kelas'] ?>"><?= $kl['kelas'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Mata Pelajaran" name="mapel" id="mapel" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tahun Ajaran" name="tahun" id="tahun" required>
                  </div> 
                 <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="KKM" name="kkm" id="kkm" required>
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