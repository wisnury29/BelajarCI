<?php echo $judul; ?> 
<?php echo anchor('mahasiswa/input','INPUT DATA MAHASISWA');?>
<hr>
 
<table border="1">
    <tr><th>NIM</th>
    <th>NAMA</th>
    <th>JURUSAN</th>
    <th>ANGKATAN</th>
    <th>HP</th>
    <th>EMAIL</th>
    <th>ALAMAT</th>
    <th>STATUS</th>
    <th>KETERANGAN</th>
    <th colspan="2"></th></tr>
    <?php
    foreach ($tbmhs as $b){
        echo "<tr>
            <td>$b->NIM</td>
            <td>$b->nama</td>
            <td>$b->jurusan</td>
            <td>$b->angkatan</td>
            <td>$b->hp</td>
            <td>$b->email</td>
            <td>$b->alamatrumah</td>
            <td>$b->statusadmin</td>
            <td>$b->keterangan</td>
            <td>".anchor('mahasiswa/edit/'.$b->NIM,'EDIT')."</td>
            <td>".anchor('mahasiswa/delete/'.$b->NIM,'DELETE   ')."</td></tr>";
    }
    ?>
</table>
<?php echo anchor('','KEMBALI');?>