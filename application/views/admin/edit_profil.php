<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Profil Sekolah</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_profil" value="<?= $profil['id_profil']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nama Sekolah</label><br>
                                                    <input type="text" class="form-control" name="nama_sekolah" value="<?= $profil['nama_sekolah']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Alamat</label><br>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $profil['alamat']; ?>">
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Kepala Sekolah</label><br>
                                                    <input type="text" class="form-control" name="kepala_sekolah" value="<?= $profil['kepala_sekolah']; ?>">
                                                </div>
                                            </div>
                                           <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>NIP</label><br>
                                                    <input type="text" class="form-control" name="nip" value="<?= $profil['nip']; ?>">
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