<style type="text/css">
	
</style>
<?php
  if(isset($_SESSION['msg'])) {
    echo '<span class="green"><b>'.$_SESSION['msg'].'</b></span>';
  } 
?>
<table class="table table-bordered table-hover" style="text-align: center;">
	<thead class="thead-dark">
		<tr>
			<th>No.</th>
			<th>Jenis Kereta</th>
			<th>Jenama</th>
			<th>Warna</th>
			<th></th>
		</tr>
	</thead>
	

	<?php
		$count = 1;
		foreach ($kereta as $krt) {
	?>
		<tr>
			<td><?=$count?></td>
			<td><?=$krt->jenis_kereta?></td>
			<td><?=$krt->jenama_kereta?></td>
			<td><?=$krt->warna_kereta?></td>
			<td>
				<a href="<?=site_url('demo/edit_kereta/'.encryptInUrl($krt->id_kereta))?>">Kemaskini</a> | 
				<a href="<?=site_url('demo/delete_kereta/'.encryptInUrl($krt->id_kereta))?>" onclick="return confirm_delete()">Padam</a>
			</td>
		</tr>

	<?php
		$count++;
		}
	?>
</table>
<br>
<a href="<?=site_url('demo/add_kereta')?>">Tambah</a>

<script type="text/javascript">
	function confirm_delete() {
		return confirm("Anda Pasti?");
	}
</script>