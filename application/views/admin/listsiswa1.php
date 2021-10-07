<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Siswa kelai VII</h4></center>
                                <div class="table-responsive">
                               
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nisn</th>
                                                <th>Nama Siswa</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($siswa1 as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nisn']; ?></td>
                                       <td><?= $dat['nama_siswa']; ?></td>
						                           <td>
						                             <a href="<?= base_url('admin/kelas1/inputnilai/') . $dat['nisn']; ?>" class="btn btn-primary">Input Nilai</a>
                                                     <a href="<?= base_url('admin/kelas1/inputdeskripsi/') . $dat['nisn']; ?>" class="btn btn-primary">Input Deskripsi</a>
						                           </td>
						                        </tr>

						                     <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                
  