<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Nilai Keterampilan</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_keterampilan" value="<?= $keterampilan['id_keterampilan']; ?>">
                                                </div>
                                            </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Nama Siswa</label><br>     
                                   <select name="nisn" id="nisn" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Guru</option> -->
                                        <?php foreach ($siswa as $dat) : 

                                            if ($keterampilan['nisn']==$dat['nisn']) {
                                             $select="selected";
                                            }else{
                                             $select="";
                                            }

                                         ?>

                                           <option <?= $select; ?> value="<?= $dat['nisn']; ?>"><?= $dat['nama_siswa']; ?></option>

                                        <?php endforeach; ?>

                                  </select>
                                  </div>
                                  </div>
                                 
                                <div class="col-md-12">
                                <div class="form-group">
                                 <label>Kelas</label><br>
                                  <select name="id_kelas" id="id_kelas" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Kelas</option> -->
                                        <?php foreach ($kelas as $kl) : 

                                            if ($keterampilan['id_kelas']==$kl['id_kelas']) {
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
                                 <label>Mata Pelajaran</label><br>
                                  <select name="id_mapel" id="id_mapel" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Kelas</option> -->
                                        <?php foreach ($mapel as $dat) : 

                                            if ($keterampilan['id_mapel']==$dat['id_mapel']) {
                                             $select="selected";
                                            }else{
                                             $select="";
                                            }

                                        ?>

                                            <option <?= $select; ?> value="<?= $dat['id_mapel']; ?>"><?= $dat['mapel']; ?></option>

                                        <?php endforeach; ?>

                                  </select>
                                  </div>
                                  </div>
                                    
                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nilai</label><br>
                                                    <input type="text" class="form-control" name="nilai" value="<?= $keterampilan['nilai']; ?>" placeholder="nilai">
                                                </div>
                                    </div>   

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Semester</label><br>
                                                 <input type="radio" name="semester" id="semester" value="1" <?php if($keterampilan['semester']=='1'){echo 'checked';} ?> />Semester 1
                                                <input type="radio" name="semester" id="semester" value="2" <?php if($keterampilan['semester']=='2'){echo 'checked';} ?> />Semester 2
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