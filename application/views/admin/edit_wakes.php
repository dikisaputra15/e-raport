<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Wali Kelas</h4><br>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_wali_kelas" value="<?= $wakes['id_wali_kelas']; ?>">
                                                </div>
                                            </div>
                                            
                                            
				                   <select name="nip_guru" id="nip_guru" class="form-control form-control-sm mb-3">
				                        <!-- <option value="">Guru</option> -->
				                        <?php foreach ($guru as $kt) : 

				                        	if ($wakes['nip_guru']==$kt['nip_guru']) {
									         $select="selected";
									        }else{
									         $select="";
									        }

									     ?>

				                           <option <?= $select; ?> value="<?= $kt['nip_guru']; ?>"><?= $kt['nama_guru']; ?></option>

				                        <?php endforeach; ?>

				                  </select>
				                 
				                  <select name="id_kelas" id="id_kelas" class="form-control form-control-sm mb-3">
				                        <!-- <option value="">Kelas</option> -->
				                        <?php foreach ($kelas as $kl) : 

				                        	if ($wakes['id_kelas']==$kl['id_kelas']) {
									         $select="selected";
									        }else{
									         $select="";
									        }

				                        ?>

				                            <option <?= $select; ?> value="<?= $kl['id_kelas']; ?>"><?= $kl['kelas']; ?></option>

				                        <?php endforeach; ?>

				                  </select>
                                            
                                           
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