<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800">Data Petshop Di Bandar Lampung</h1>
<a href ="<?= base_url(); ?>petshop/tambah" class="btn btn-primary"> Tambah Data Petshop  </a>
<table class="table table-bordered text-center">

<tr>
<td>NO</td>
<td>PETSHOP</td>
<td>KOORDINAT</td>
<td colspan="2">SETTING</td>

</tr>
<?php 
$no = 1;
foreach ($petshop as $mhs) :?>
<tr>

<td><?php echo $no++; ?></td>
<td><?php echo $mhs ['petshop']; ?></td>
<td><?php echo $mhs ['koordinat']; ?></td>
<td> 
<a href="<?php echo base_url() ?>petshop/hapus_data/<?php echo $mhs ['id']; ?>"class="btn btn-danger">hapus</a>
</td>
</tr>
  <?php endforeach ; ?> 
</table>




</div>
</div>