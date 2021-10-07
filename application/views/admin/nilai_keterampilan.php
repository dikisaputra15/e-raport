<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Nilai Keterampilan</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Siswa</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($siswa as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nama_siswa']; ?></td>
						                           <td>
						                               <a href="<?= base_url('admin/nilai_keterampilan/detail_keterampilan/') . $dat['nisn'] ?>" class="btn btn-primary">Detail</a>
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
               <h5 class="modal-title" id="exampleModalLabel">input nilai keterampilan</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/nilai_keterampilan/input_nilai') ?>" method="POST">
                 
                  <div class="form-group">
                     <select class="form-control" name="nisn">
                       <option>-Nama Siswa-</option>
                        <?php foreach ($siswa as $data) : ?>
                           <option value="<?= $data['nisn'] ?>"><?= $data['nama_siswa'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                   <div class="form-group">
                     <select class="form-control" name="id_mapel">
                       <option>-Pilih Mata Pelajaran-</option>
                        <?php foreach ($mapel as $data) : ?>
                           <option value="<?= $data['id_mapel'] ?>"><?= $data['mapel'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                   <div class="form-group">
                     <select class="form-control" name="id_kelas">
                       <option>-Pilih Kelas-</option>
                        <?php foreach ($kelas as $data) : ?>
                           <option value="<?= $data['id_kelas'] ?>"><?= $data['kelas'] ?></option>
                        <?php endforeach; ?>
                     </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Masukkan Nilai" name="nilai" id="nilai" required>
                  </div>
                  
                  <div class="form-group">
                     <input type="radio" name="semester" id="semester" value="1">semester 1
                     <input type="radio" name="semester" id="semester" value="2">semester 2
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