<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Siswa</h4><br>
                                <?php echo validation_errors(); ?>
                                  <?= form_open_multipart(); ?>
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nisn" value="<?= $siswa['nisn']; ?>">
                                                </div>
                                            </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nama Siswa</label><br>
                                                    <input type="text" class="form-control" name="nama_siswa" value="<?= $siswa['nama_siswa']; ?>">
                                                </div>
                                    </div> 


                                    <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Jenis Kelamin</label><br>
                                                 <input type="radio" name="jk" id="jk" value="laki-laki" <?php if($siswa['jk']=='laki-laki'){echo 'checked';} ?> />laki-laki
                                                <input type="radio" name="jk" id="jk" value="perempuan" <?php if($siswa['jk']=='perempuan'){echo 'checked';} ?> />perempuan
                                            </div>
                                        </div>
                                 
                                <div class="col-md-12">
                                <div class="form-group">
                                 <label>Kelas</label><br>
                                  <select name="kelas" id="kelas" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Kelas</option> -->
                                        <?php foreach ($kelas as $kl) : 

                                            if ($siswa['kelas']==$kl['id_kelas']) {
                                             $select="selected";
                                            }else{
                                             $select="";
                                            }

                                        ?>

                                            <option <?= $select; ?> value="<?= $kl['id_kelas']; ?>"><?= $kl['kelas']; ?></option>

                                        <?php endforeach; ?>

                                  </select>
                                  </div>
                                  </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Alamat</label><br>
                                                    <input type="text" class="form-control" name="alamat" value="<?= $siswa['alamat']; ?>">
                                                </div>
                                    </div>

                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tempat Lahir</label><br>
                                                    <input type="text" class="form-control" name="tempat_lahir" value="<?= $siswa['tempat_lahir']; ?>">
                                                </div>
                                    </div>
                                    
                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tanggal Lahir</label><br>
                                                    <input type="date" class="form-control" name="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>">
                                                </div>
                                    </div>  

                                      <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nama Ayah</label><br>
                                                    <input type="text" class="form-control" name="nama_ayah" value="<?= $siswa['nama_ayah']; ?>">
                                                </div>
                                    </div>   

                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nama ibu</label><br>
                                                    <input type="text" class="form-control" name="nama_ibu" value="<?= $siswa['nama_ibu']; ?>">
                                                </div>
                                    </div>

                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tempat Lahir Ayah</label><br>
                                                    <input type="text" class="form-control" name="tempat_lahir_ayah" value="<?= $siswa['tempat_lahir_ayah']; ?>">
                                                </div>
                                    </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tempat Lahir Ibu</label><br>
                                                    <input type="text" class="form-control" name="tempat_lahir_ibu" value="<?= $siswa['tempat_lahir_ibu']; ?>">
                                                </div>
                                    </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tgl Lahir Ayah</label><br>
                                                    <input type="text" class="form-control" name="tgl_lahir_ayah" value="<?= $siswa['tgl_lahir_ayah']; ?>">
                                                </div>
                                    </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tgl Lahir Ibu</label><br>
                                                    <input type="text" class="form-control" name="tgl_lahir_ibu" value="<?= $siswa['tgl_lahir_ibu']; ?>">
                                                </div>
                                    </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tempat Lahir Ayah</label><br>
                                                    <input type="text" class="form-control" name="tempat_lahir_ayah" value="<?= $siswa['tempat_lahir_ayah']; ?>">
                                                </div>
                                    </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Status</label><br>
                                                 <input type="radio" name="status" id="status" value="aktif" <?php if($siswa['status']=='aktif'){echo 'checked';} ?> />aktif
                                                <input type="radio" name="status" id="status" value="nonaktif" <?php if($siswa['status']=='nonaktif'){echo 'checked';} ?> />nonaktif
                                            </div>
                                        </div>

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Photo 3X4</label><br>
                                                    <input type="file" class="form-control" name="photo">
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