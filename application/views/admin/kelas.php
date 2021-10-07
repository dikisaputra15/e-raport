<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Kelas</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($kelas as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['kelas']; ?></td>
						                           
						                           <td>
						                              <a href="<?= base_url('admin/kelas/hapuskelas/') . $dat['id_kelas'] ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus" title="hapus"><i class="fas fa-trash"></i></a>
						                              <a href="<?= base_url('admin/kelas/editkelas/') . $dat['id_kelas'] ?>" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fas fa-edit"></i></a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Kelas</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/kelas/tambahkelas') ?>" method="POST">
                <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Kelas" name="kelas" id="kelas" required>
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