<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Profil Sekolah</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Sekolah</th>
                                                <th>Alamat</th>
                                                <th>Kepala Sekolah</th>
                                                <th>NIP</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($profil as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nama_sekolah']; ?></td>
						                           <td><?= $dat['alamat']; ?></td>
						                           <td><?= $dat['kepala_sekolah']; ?></td>
						                           <td><?= $dat['nip']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/profil/hapusprofil/') . $dat['id_profil'] ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus" title="hapus"><i class="fas fa-trash"></i></a>
						                              <a href="<?= base_url('admin/profil/editprofil/') . $dat['id_profil'] ?>" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fas fa-edit"></i></a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Profil Sekolah</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/profil/tambahprofil') ?>" method="POST">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Sekolah" name="nama_sekolah" id="nama_sekolah" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Alamat" name="alamat" id="alamat" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Kepala Sekolah" name="kepsek" id="kepsek" required>
                  </div> 
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NIP" name="nip" id="nip" required>
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