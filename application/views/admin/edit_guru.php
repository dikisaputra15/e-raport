<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Guru</h4>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nip_guru" value="<?= $guru['nip_guru']; ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>NIP Guru</label><br>
                                                    <input type="text" class="form-control" name="nip" value="<?= $guru['nip_guru']; ?>" placeholder="nip">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Nama Guru</label><br>
                                                    <input type="text" class="form-control" name="nama_guru" value="<?= $guru['nama_guru']; ?>" placeholder="nama guru">
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Alamat</label><br>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $guru['alamat']; ?>" placeholder="alamat">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Tanggal Masuk</label><br>
                                                    <input type="date" name="tgl_masuk" class="form-control" value="<?= $guru['tgl_masuk']; ?>">
                                                </div>
                                            </div>
                                             <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Status</label><br>
                                                 <input type="radio" name="status" id="status" value="aktif" <?php if($guru['status']=='aktif'){echo 'checked';} ?> />aktif
                                                <input type="radio" name="status" id="status" value="nonaktif" <?php if($guru['status']=='nonaktif'){echo 'checked';} ?> />nonaktif
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