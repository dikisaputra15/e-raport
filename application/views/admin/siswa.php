<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Siswa</h4></center>
                                <div class="table-responsive">
                                <button class="btn btn-sm btn-dark mb-3" data-toggle="modal" data-target="#exampleModal">Tambah Data</button>
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nisn</th>
                                                <th>Nama Siswa</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tgl Lahir</th>
                                                <th>Nama Wali</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($siswa as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nisn']; ?></td>
                                       <td><?= $dat['nama_siswa']; ?></td>
						                           <td><?= $dat['jk']; ?></td>
						                           <td><?= $dat['alamat']; ?></td>
						                           <td><?= $dat['tempat_lahir']; ?></td>
                                       <td><?= $dat['tgl_lahir']; ?></td>
						                           <td><?= $dat['nama_ayah']; ?></td>
						                           <td><?= $dat['status']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/siswa/hapussiswa/') . $dat['nisn'] ?>" class="btn btn-danger btn-circle btn-sm tombol-hapus" title="hapus"><i class="fas fa-trash"></i></a>
						                              <a href="<?= base_url('admin/siswa/editsiswa/') . $dat['nisn'] ?>" class="btn btn-primary btn-circle btn-sm" title="edit"><i class="fas fa-edit"></i></a>
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
               <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form action="<?= base_url('admin/siswa/tambahsiswa') ?>" method="POST" enctype="multipart/form-data">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="NISN" name="nisn" id="nisn" required>
                  </div>
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Siswa" name="nama_siswa" id="nama_siswa" required>
                  </div>
                  <div class="form-group">
                    <label>Jenis Kelamin</label><br>
                     <input type="radio" name="jk" id="jk" value="laki-laki">laki-laki
                     <input type="radio" name="jk" id="jk" value="perempuan">perempuan
                  </div>
                  <div class="form-group">
                  
                   <select name="id_kelas" id="id_kelas" class="form-control form-control-sm mb-3">
                        <option value="">Kelas</option>
                        <?php foreach ($kelas as $kl) : ?>
                           <option value="<?= $kl['id_kelas'] ?>"><?= $kl['kelas'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Alamat" name="alamat" id="alamat" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tempat Lahir" name="tempat_lahir" id="tempat_lahir" required>
                  </div> 
                  <div class="form-group">
                  	<label>Tanggal Lahir</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_lahir" id="tgl_lahir">
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Ayah" name="nama_ayah" id="nama_ayah" required>
                  </div> 
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nama Ibu" name="nama_ibu" id="nama_ibu" required>
                  </div> 
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tempat Lahir Ayah" name="tempat_lahir_ayah" id="tempat_lahir_ayah" required>
                  </div>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tempat Lahir Ibu" name="tempat_lahir_ibu" id="tempat_lahir_ibu" required>
                  </div>
                   <div class="form-group">
                    <label>Tanggal Lahir Ayah</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_lahir_ayah" id="tgl_lahir_ayah">
                  </div>
                  <div class="form-group">
                    <label>Tanggal Lahir Ibu</label>
                     <input class="form-control form-control-sm mb-3" type="date" name="tgl_lahir_ibu" id="tgl_lahir_ibu">
                  </div>
                  <div class="form-group">
                      <label>Foto 3X4</label>
                     <input class="form-control form-control-sm mb-3" type="file" name="foto" id="foto">
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