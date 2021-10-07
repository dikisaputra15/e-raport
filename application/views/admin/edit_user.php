<div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit User</h4>
                                <form action="" method="POST">
                                    <div class="form-body">
                                        <div class="row">
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="id_user" value="<?= $user['id_user']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Username</label><br>
                                                    <input type="text" class="form-control" name="username" value="<?= $user['username']; ?>" placeholder="username">
                                                </div>
                                            </div> 
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Password</label><br>
                                                    <input type="password" class="form-control" name="password" value="<?= $user['password']; ?>" placeholder="password">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                <label>Nama Lengkap</label><br>
                                                    <input type="text" class="form-control" name="nama" value="<?= $user['nama']; ?>" placeholder="nama lengkap">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
							                     <label>Level</label><br>
							                     <input type="radio" name="level" id="level" value="admin" <?php if($user['level']=='admin'){echo 'checked';} ?> />admin
                                                <input type="radio" name="level" id="level" value="guru" <?php if($user['level']=='guru'){echo 'checked';} ?> />guru
                                                <input type="radio" name="level" id="level" value="walimurid" <?php if($user['level']=='walimurid'){echo 'checked';} ?> />walimurid
                                                <input type="radio" name="level" id="level" value="kepala sekolah" <?php if($user['level']=='kepala sekolah'){echo 'checked';} ?> />kepala sekolah
                                                <input type="radio" name="level" id="level" value="siswa" <?php if($user['level']=='siswa'){echo 'checked';} ?> />siswa
                                                <input type="radio" name="level" id="level" value="walikelas" <?php if($user['level']=='walikelas'){echo 'checked';} ?> />siswa
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