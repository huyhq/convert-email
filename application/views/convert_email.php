<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Convert CSV to Database</title>
	<link href="<?=site_url()?>assets/css/bootstrap.min.css" rel="stylesheet"  crossorigin="anonymous">
	
</head>
<body>

<div id="container" class="container">
	<div class="form-error">
		<?php echo validation_errors();?>
	</div>

	<h1>Convert CSV to Database</h1>
	<div class="col-md-12">
		<form method="post" action="">
		<div class="col-md-12">
			<label class="col-md-3">Chọn plaftform</label>
			<select id="pf" name="pf" class="col-md-9">
				<option>...</option>
				<option value="tc">Teechip</option>
				<option value="vr">Viralstyle</option>
			</select>
		</div>
		<div class="col-md-12">
			<label class="col-md-3">Nhập đường dẫn</label>	
			<input class="col-md-9" type="text" name="link-folder" id="link-folder" size="140" />
		</div>
		<div class="col-md-12">
			<label class="col-md-3">Tên file:</label>	
			<input class="col-md-9" type="text" name="file-name" id="file-name" size="140" />
		</div>
		<div class="col-md-12">
			<div>Số lượng file</div>
			<label>Từ
				<input type="text" name="from-file" id="from-file" />
			</label>
			<label>Đến
				<input type="text" name="end-file" id="end-file" />
			</label>
		</div>
		<div class="col-md-12">
			<input name="submit" type="submit" value="Submit" />
		</div>
		</form>		
	</div>
</div>

</body>
</html>