<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$header_title?></title>

	<link href="<?=base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">
		/* Show it is fixed to the top */
		body {
		  min-height: 75rem;
		  padding-top: 4.5rem;
		}
	</style>
</head>
<body>
<?=$navbar?>
<main role="main" class="container">
  <div class="jumbotron">
    <h1><?=$header_title?></h1>
    <?=$content?>
  </div>
</main>
<!--<div id="container">
	<h1></h1>

	<div id="body">
		<?=$content?>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>-->


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

<script language="javascript" type="text/javascript" src="<?=base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>