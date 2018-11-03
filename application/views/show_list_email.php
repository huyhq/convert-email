<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Convert CSV to Database</title>
	<link href="<?=site_url()?>assets/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>

<div id="container" class="container">
	<div class="form-error">
		<?php echo validation_errors();?>
	</div>

	<h1>List Emails</h1>
	<div class="col-md-12">
		<form method="post" action="">
		
		<div class="col-md-12">
			<div>Số lượng email</div>
			<label>Từ
				<input type="text" name="from-file" id="from-file" />
			</label>
			<label>Đến
				<input type="text" name="end-file" id="end-file" />
			</label>
		</div>
		<div class="col-md-12">
			<input name="submit" type="submit" value="Save" />
		</div>
		</form>		
		<div class="row">
			<div class="col-md-3 mb-3">First Name</div>
			<div class="col-md-3 mb-3">Last Name</div>
			<div class="col-md-3 mb-3">Email</div>
			<div class="col-md-3 mb-3">Platform</div>
		</div>
		<?php foreach($list_emails as $row):?>
		<div class="row">
			<div class="col-md-3"><?=$row->first_name?></div>
			<div class="col-md-3"><?=$row->last_name?></div>
			<div class="col-md-3"><?=$row->email?></div>
			<div class="col-md-3"><?=$row->platform?></div>
		</div>
		<?php endforeach?>
	</div>
</div>

</body>
</html>