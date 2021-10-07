
<div class="col-12"> 
    <div class="card">
        <div class="card-body">       
            <h4 class="card-title">Input Nilai</h4>
               <form action="<?= base_url('admin/inputnilai/tambahnilai') ?>" method="POST">
               <div class="form-body">
                <div class="row">
                 <div class="col-md-12" hidden>
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" name="id_mapel" value="<?= $mapel['id_mapel']; ?>">
                  </div>
                  </div>
                <div class="col-md-12">
                  <select name="id_guru" id="id_guru" class="form-control form-control-sm mb-3">
                        <option value="">Guru</option>
                        <?php foreach ($guru as $kt) : ?>
                           <option value="<?= $kt['id_guru'] ?>"><?= $kt['nama_guru'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  </div> 
                  <div class="col-md-12">
                  <select name="id_murid" id="id_murid" class="form-control form-control-sm mb-3">
                        <option value="">Murid</option>
                        <?php foreach ($murid as $km) : ?>
                           <option value="<?= $km['id_murid'] ?>"><?= $km['nama_murid'] ?></option>
                        <?php endforeach; ?>
                  </select>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Tahun" name="tahun" id="tahun" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                   <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai Tugas" name="nilaitugas" id="nilaitugas" required>
                  </div> 
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai Harian" name="nilaiquiz" id="nilaiquiz" required>
                  </div>
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai UTS" name="nilaiuts" id="nilaiuts" required>
                  </div>  
                  </div>
                  <div class="col-md-12">
                  <div class="form-group">
                     <input class="form-control form-control-sm mb-3" type="text" placeholder="Nilai UAS" name="nilaiuas" id="nilaiuas" required>
                  </div>
                  </div>
    
            <div class="modal-footer">
              <input type="submit" name="input" value="INPUT" class="btn btn-primary">
            </div>
            </div>
            </div>
            </form>
      </div>  
  </div>
</div>    