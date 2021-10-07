<h2><center>Raport Siswa</center></h2>
<hr/>
<table>
    <tr>
            <td>Nama Siswa</td>
        	<td>:</td>
           	<td><?= $siswa['nama_siswa']; ?></td>
    </tr>
    <tr>
            <td>Nisn</td>
        	<td>:</td>
           	<td><?= $siswa['nisn']; ?></td>
    </tr>
    <tr>
            <td>Kelas</td>
          	<td>:</td>
   			<td><?= $siswa['kelas']; ?></td>
    </tr>
</table>
<h3>Nilai Pengetahuan</h3>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		 <th>No</th>
         <th>Mata Pelajaran</th>
  		 <th>Nilai</th>
	</tr>
	<?php 
	$no = 1;
	foreach($raport as $data)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['mapel']; ?></td>
			<td><?php echo $data['nilai']; ?></td>
		</tr>
		<?php
	}
	?>
</table>

<h3>Nilai Keterampilan</h3>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		 <th>No</th>
         <th>Mata Pelajaran</th>
  		 <th>Nilai</th>
	</tr>
	<?php 
	$no = 1;
	foreach($keterampilan as $data)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['mapel']; ?></td>
			<td><?php echo $data['nilai']; ?></td>
		</tr>
		<?php
	}
	?>
</table>

<h3>Nilai sikap</h3>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		 <th>No</th>
  		 <th>Nilai Spiritual</th>
  		 <th>Nilai Sosial</th>
	</tr>
	<?php 
	$no = 1;
	foreach($sikap as $data)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nilai_spiritual']; ?></td>
			<td><?php echo $data['nilai_sosial']; ?></td>
		</tr>
		<?php
	}
	?>
</table><br><br>

<table width="100%" style="text-align:center;">
<tr>
	<td>Mengetahui Kepala Sekolah </td>
</tr>
<tr>
	<td>MTS Al-Jauharotunnaqiyah</td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<tr>
	<td></td>
</tr>
<?php 
	foreach($profil as $data){
?>
<tr>
	<td><?php echo $data['kepala_sekolah']; ?></td>
</tr>
<?php } ?>
</table>