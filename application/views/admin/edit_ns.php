<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Nilai Sikap</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_nilai_sikap" value="<?= $sikap['id_nilai_sikap']; ?>">
                                                </div>
                                            </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Nama Siswa</label><br>     
                                   <select name="nisn" id="nisn" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Guru</option> -->
                                        <?php foreach ($siswa as $dat) : 

                                            if ($sikap['nisn']==$dat['nisn']) {
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

                                            if ($sikap['id_kelas']==$kl['id_kelas']) {
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
                                                <label>Nilai Spiritual</label><br>
                                                    <input type="text" class="form-control" name="nilai_spiritual" value="<?= $sikap['nilai_spiritual']; ?>" placeholder="nilai">
                                                </div>
                                    </div>  

                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nilai Sosial</label><br>
                                                    <input type="text" class="form-control" name="nilai_sosial" value="<?= $sikap['nilai_sosial']; ?>" placeholder="nilai">
                                                </div>
                                    </div>   

                                    <div class="col-md-12">
                                                <div class="form-group">
                                                 <label>Semester</label><br>
                                                 <input type="radio" name="semester" id="semester" value="1" <?php if($sikap['semester']=='1'){echo 'checked';} ?> />Semester 1
                                                <input type="radio" name="semester" id="semester" value="2" <?php if($sikap['semester']=='2'){echo 'checked';} ?> />Semester 2
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