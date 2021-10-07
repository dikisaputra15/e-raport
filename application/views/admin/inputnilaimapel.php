
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Mata Pelajaran</h4></center>
                                <div class="table-responsive">
                                <table>
                                	 <tr>
                                          <td>Nama Murid</td>
                                          <td>:</td>
                                          <td><?= $murid['nama_murid']; ?></td>
                                      </tr>
                                      <tr>
                                          <td>Kelas</td>
                                          <td>:</td>
                                          <td><?= $murid['kelas']; ?></td>
                                      </tr>
                                 </table>
                                </div>

                                <div class="table-responsive">
                             
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Mata Pelajaran</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($inputnilai as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['mapel']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/inputnilai/nilainilai/') . $dat['id_mapel'] .'/'. $murid['id_murid']; ?>" class="btn btn-primary">Input Nilai</a>
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
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Mata Pelajaran" name="mapel" id="mapel" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Hari" name="hari" id="hari" required>
                  </div>
                  <select name="id_guru" id="id_guru" class="form-control form-control-sm mb-3">
                        <option value="">Guru</option>
                        <?php foreach ($guru as $kt) : ?>
                           <option value="<?= $kt['id_guru'] ?>"><?= $kt['nama_guru'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tahun" name="tahun" id="tahun" required>
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