<?php echo form_open('mahasiswa/input_simpan');?>
<table>
	<tr>
		<td>NIM</td>
		<td><?php echo form_input('NIM', '',array('placeholder'=>'NIM Mahasiswa')); ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><?php echo form_input('nama', '',array('placeholder'=>'Nama Mahasiswa')); ?></td>
	</tr>
	<tr>
		<td>Jurusan</td>
		<td>
			<select name="jurusan">
				<option value="">Jurusan</option>
				<option value="Teknik Inforatika">Teknik Inforatika</option>
				<option value="Manajemen Informatika">Manajemen Informatika</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Angkatan</td>
		<td>
			<select name="angkatan">
				 <option value="">Tahun</option>
                        <?php
                        $thn_skr = date('Y');
                        for ($x = $thn_skr; $x >= 2013; $x--) {
                        ?>
                            <option value="<?php echo $x ?>"><?php echo $x ?></option>
                        <?php
                        }
                        ?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Hp</td>
		<td><?php echo form_input('hp', '',array('placeholder'=>'No Hp Mahasiswa')); ?></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><?php echo form_input('email', '',array('placeholder'=>'Email Mahasiswa')); ?></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><?php echo form_input('alamatrumah', '',array('placeholder'=>'Alamat Mahasiswa')); ?></td>
	</tr>
	<tr>
		<td>Status</td>
		<td>
			<select name="statusadmin">
				<option value="">Status</option>
				<option value="Oke">Oke</option>
				<option value="Bermasalah">Bermasalah</option>
			</select>
		</td>
	</tr>
	<tr>
		<td>Keterangan</td>
		<td><?php echo form_input('keterangan', '',array('placeholder'=>'Keterangan')); ?></td>
	</tr>
    	<td colspan="2">
        <?php echo form_submit('SUBMIT','SIMPAN DATA');?>
        <?php echo anchor('mahasiswa','KEMBALI');?>
        </td>
    </tr>
</table>
<?php echo form_close();?>