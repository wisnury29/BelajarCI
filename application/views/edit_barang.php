<?php echo form_open('barang/edit_simpan'); ?>
<?php echo form_hidden('id',$this->uri->segment(3)); ?>
<table>
    <tr><td>KODE BARANG</td><td><?php echo form_input('kode_barang', $product['kode_barang'],array('placeholder'=>'kode barang')); ?></td></tr>
    <tr><td>NAMA BARANG</td><td><?php echo form_input('nama_barang', $product['nama_barang'],array('placeholder'=>'nama barang')); ?></td></tr>
    <tr><td>HARGA BARANG</td><td><?php echo form_input('harga_barang', $product['harga'],array('placeholder'=>'harga barang')); ?></td></tr>
    <tr><td colspan="2">
        <?php echo form_submit('SUBMIT','SIMPAN DATA');?>
        <?php echo anchor('barang','KEMBALI');?></td></tr>
</table>
<?php echo form_close();?>