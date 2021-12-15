<?php
/*
Mini Shell Page Finder
Hargai Kami:)
*/
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.75, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Shell Page Scanner</title>
  </head>
  <body>
  	
   <div class="container mt-5 p-5">
   	<h3 class="alert alert-primary text-center">Shell Finder Scanner</h3>
   	<form method="post">
   	<input type="text" name="url" class="form-control mb-2" placeholder="Url">
   	<button type="submit" name="scan" class="btn btn-primary">SCAN!</button>
   	</form>
   

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+-965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+-8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+-2+-9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+-MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<?php
if(isset($_POST["scan"])){
	$web = $_POST["url"];
if(!empty($web)){
	echo "<hr>";
	
// Brute Force Started:)
$shell = array(
"/Upload.php",
"/wp-content/plugins/memek/Uploader.php",
"/wp-content/plugins/kontol/id1337.doc",
"/Uploader.php",
"/IndoXploit.php",
"/c99.php",
"/OfficialShell22Xc.php",
"/nai.php","ibu.html",
"mmk.php",
"admin/images/mmk.php"
);
// Sisanya Bisa Tanbahin Sendiri:)

	foreach($shell as $akses){
		$hasil = get_headers("$web$akses");
		if(eregi("200", $hasil[0])){
			echo "[+] Found [+]<br><small>[ <a href='$url$akses'>$url$akses</a> ]</small><br>";
				}
			}
			echo "[-] Not Found [-]";
		}
	}
echo "</div>";
?>
<hr>
	<center>
	<small>Copyright &copy; <?= date("Y"); ?> all right reserved | Codex By Rands & Mr.Boy@22XploiterCrew</small>
	</center>
</body>
</html>
