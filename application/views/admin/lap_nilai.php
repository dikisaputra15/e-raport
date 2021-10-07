<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Form Pencarian Nilai</h4>
                                <form action="<?= base_url('admin/raport_siswa') ?>" method="POST" target="__blank">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-8">
                                                 <select name="nisn" id="nisn" class="form-control form-control-sm mb-3">
								                        <!-- <option>Nama Siswa</option> -->
								                        <?php foreach ($siswa as $data) : ?>
								                           <option value="<?= $data['nisn']; ?>"><?= $data['nama_siswa']; ?></option>
								                        <?php endforeach; ?>
								                  </select>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <input type="submit" name="lihat" value="Lihat" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>