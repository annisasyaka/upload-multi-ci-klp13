<!DOCTYPE html>
<html>
<head>
	<title>Upload Sukses</title>
</head>
<body>
<center>
	<ul>
		<?php foreach ($upload_data as $item => $value); ?>
			<li><?php echo $item;?> : <?php echo $value; ?></li>
	</ul>
</center>
</body>
</html>