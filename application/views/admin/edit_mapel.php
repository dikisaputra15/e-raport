<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Mata Pelajaran</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_mapel" value="<?= $mapel['id_mapel']; ?>">
                                                </div>
                                            </div>

                                 <div class="col-md-12">
                                    <div class="form-group">
                                    <label>Guru</label><br>     
                                   <select name="nip_guru" id="nip_guru" class="form-control form-control-sm mb-3">
                                        <!-- <option value="">Guru</option> -->
                                        <?php foreach ($guru as $kt) : 

                                            if ($mapel['nip_guru']==$kt['nip_guru']) {
                                             $select="selected";
                                            }else{
                                             $select="";
                                            }

                                         ?>

                                           <option <?= $select; ?> value="<?= $kt['nip_guru']; ?>"><?= $kt['nama_guru']; ?></option>

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

                                            if ($mapel['id_kelas']==$kl['id_kelas']) {
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
                                                    <input type="text" class="form-control" name="mapel" value="<?= $mapel['mapel']; ?>" placeholder="kelas">
                                                </div>
                                    </div> 
                                    
                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Tahun Ajaran</label><br>
                                                    <input type="text" class="form-control" name="tahun_ajaran" value="<?= $mapel['tahun_ajaran']; ?>" placeholder="kelas">
                                                </div>
                                    </div>   

                                     <div class="col-md-12">
                                                <div class="form-group">
                                                <label>KKM</label><br>
                                                    <input type="text" class="form-control" name="kkm" value="<?= $mapel['kkm']; ?>" placeholder="kelas">
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