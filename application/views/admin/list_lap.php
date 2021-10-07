<?php if($this->session->flashdata('flash')): ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash') ?>"></div>
<?php endif; ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <center><h4 class="card-title">Data Nilai</h4></center>
                                <div class="table-responsive">
                                    <table id="zero_config" class="table table-striped table-bordered no-wrap">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Murid</th>
                                                <th>Kelas</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
						                  <?php
						                     $i = 1;
						                     foreach ($murid as $dat) : ?>

						                      <tr>
						                           <td><?= $i++; ?></td>
						                           <td><?= $dat['nama_murid']; ?></td>
						                           <td><?= $dat['kelas']; ?></td>
						                           <td>
						                              <a href="<?= base_url('admin/lapnilai/detail/') . $dat['id_murid'] ?>" class="btn btn-primary" target="__blank">Detail</a>
						                           </td>
						                        </tr>

						                     <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
       