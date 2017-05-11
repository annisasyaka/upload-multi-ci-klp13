<!DOCTYPE html>
<html lang="en">
<head>
  <title>Upload Multi File</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/desainjson.css">
  <script src="assets/jquery/3.2.0/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body background="assets/back.jpg">
<br>
<div class="container">
<div class="kotak">
<h3>Uploader multiple file</h3>
<br>
<h5>upload your files to local folder</h5>
<body>
	<?php echo $error; ?>

	<?php echo form_open_multipart('upload/aksi_upload'); ?>

	<table class="table table-condensed">
   <tr>
     <th>Nomer File</th>
     <th>Aksi Upload</th>
   </tr>

   <tr>
   <td>
     File 1
   </td>
   <td>
      <?php echo form_open_multipart('upload/aksi_upload'); ?>

  <input type="file" name="berkas" size="20" />
   </td>
   </tr>
   <tr>
   <td>
     File 2
   </td>
   <td>
      <?php echo form_open_multipart('upload/aksi_upload'); ?>

  <input type="file" name="berkas" size="20" />
   </td>
   </tr>
   <tr>
   <td>
     File 3
   </td>
   <td>
      <?php echo form_open_multipart('upload/aksi_upload'); ?>

  <input type="file" name="berkas" size="20" />
   </td>
   </tr>
   <tr>
   <td>
     File 4
   </td>
   <td>
      <?php echo form_open_multipart('upload/aksi_upload'); ?>

  <input type="file" name="berkas" size="20" />
   </td>
   </tr>
    <tr>
   <td>
     File 5
   </td>
   <td>
      <?php echo form_open_multipart('upload/aksi_upload'); ?>

  <input type="file" name="berkas" size="20" />
   </td>
   </tr>
  </table>

	<br>

	<input type="submit" value="upload" />

	</form>
</div>
  </div>
</body>
</html>
