<?



include "cnfg123-web/db.php";



$id=htmlspecialchars($_GET['id']);



$sayfa_al = @mysql_query("SELECT icerik FROM kayitlar WHERE id = '$id' ");

$sayfa = @mysql_result($sayfa_al,0,0);



echo $sayfa;



?>