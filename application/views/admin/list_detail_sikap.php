<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">List Nilai Sikap</h4></center>
                                <div class="table-responsive">
                                	<table>
                                		<tr>
                                			<td>Nama Siswa</td>
                                			<td>:</td>
                                			<td><?= $siswa['nama_siswa']; ?></td>
                                		</tr>
                                		<tr>
                                			<td>Kelas</td>
                                			<td>:</td>
                                			<td><?= $siswa['kelas']; ?></td>
                                		</tr>
                                	</table>
                                    <table class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nilai Spiritual</th>
                                                <th>Nilai Sosial</th>
                                                <th>Semester</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($sikap as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nilai_spiritual']; ?></td>
						                           <td><?= $dat['nilai_sosial']; ?></td>
						                           <td><?= $dat['semester']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/nilai_sikap/edit_sikap/') . $dat['id_nilai_sikap'] ?>" class="btn btn-primary">Edit</a>
						                           </td>
						                        </tr>

						                     <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
       