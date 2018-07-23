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
    $attributes = array('name' => 'form1', 'id'=>'form1');
    //open form with codeigniter to included CSRF
    echo form_open('demo/add_kereta', $attributes);
?>

  Jenis Kereta:<br>
  <input type="text" name="jenis_kereta">
  <br>
  Jenama Kereta:<br>
  <input type="text" name="jenama_kereta">
  <br>
  Warna Kereta:<br>
  <input type="text" name="warna_kereta">
  <br><br>
  <input type="submit" value="Submit">
  <a href="<?=site_url('demo')?>">Main Page</a>

<?php 
	echo form_close();
?>