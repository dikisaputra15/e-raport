<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Kepala Sekolah</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nip" value="<?= $kepsek['nip']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Kepala Sekolah</label><br>
                                                    <input type="text" class="form-control" name="nama_kepsek" value="<?= $kepsek['nama_kepsek']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Alamat</label><br>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $kepsek['alamat']; ?>">
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>No Telepon</label><br>
                                                    <input type="text" class="form-control" name="no_telp" value="<?= $kepsek['no_telp']; ?>">
                                                </div>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-sm btn-light shadow-sm ml-2" name="ubah"><i class="fas fa-edit"></i> Ubah Data</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>