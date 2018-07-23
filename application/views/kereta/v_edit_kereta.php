<style type="text/css">
	.red {
		color: red;
	}
  .green {
    color: green;
  }
</style>
<?php echo validation_errors(); ?>

<?php
  if(isset($_SESSION['msg'])) {
    echo '<span class="green"><b>'.$_SESSION['msg'].'</b></span>';
  } 
?>

<?php
  if(isset($_SESSION['msg2'])) {
    echo '<span class="red"><b>'.$_SESSION['msg2'].'</b></span>';
  } 
?>

<?php 
    $attributes = array('name' => 'form2', 'id'=>'form2');
    //open form with codeigniter to included CSRF
    echo form_open('demo/save_edit_kereta', $attributes);
?>
  <input type="hidden" name="id_kereta" value="<?=$id_encrypt?>">
  Jenis Kereta:<br>
  <input type="text" name="jenis_kereta" value="<?=$car_detail->jenis_kereta?>">
  <br>
  Jenama Kereta:<br>
  <input type="text" name="jenama_kereta" value="<?=$car_detail->jenama_kereta?>">
  <br>
  Warna Kereta:<br>
  <input type="text" name="warna_kereta" value="<?=$car_detail->warna_kereta?>">
  <br><br>
  <input type="submit" value="Submit">
  <a href="<?=site_url('demo')?>">Main Page</a>

<?php 
	echo form_close();
?>