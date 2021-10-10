<?php
session_start();
include "../ust.php";

$site = htmlspecialchars(trim($_POST['site']));
$hacker = htmlspecialchars(trim($_POST['hacker']));
$sunucu = $_POST['sunucu'];

if($_POST['gkodumuz'] == "123456" && $_POST['zgkod'] == "123456"){ // güvenlik kontrol

if( empty($site) OR empty($hacker) ){

echo "<center>Lütfen boþ alan býrakmayýnýz<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

} elseif( strlen($hacker) < 4 ) {

echo "<center>Nickiniz 4 karakterden kýsa olamaz!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

} elseif( strlen($hacker) > 20 ) {

echo "<center>Nickiniz 3 karakterden kýsa olamaz!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

} elseif( ereg("[<>]",$hacker) ) {

echo "<center>Nickinizde < veya > kullanmayýnýz!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

} elseif( substr($site, 0, 7) != "http://")  {

echo "<center>Deface Siteniz http:// ile baþlamalý!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

}  elseif( (!strstr($site,"."))){
echo '<script>alert("Url de . koymayý Dene");history.back(1);</script>';
die();
}  else {

  //Güvenlik Kodunu Temizle
  unset($_SESSION['guv']);



// KAYIT KONTROL

if ( strstr($site, "www") ){


$ilk = strpos($site, ".");
$orta = substr($site, $ilk+1);
$ilkson = strpos($orta, "/");
$orta = substr($site, $ilk+1, $ilkson+1);

$uzunluk = strlen($orta);
$son = substr($orta, $uzunluk-1);

if ($son == "/"){
$ara = substr($orta, 0, $uzunluk-1);
} else {
//$ara = $orta;
$ara = $site."/";
}

} else { // www yoksa


$orta = substr($site, 7);
$ilkson = strpos($orta, "/");
$orta = substr($orta, 0, $ilkson+1);

$uzunluk = strlen($orta);
$son = substr($orta, $uzunluk-1);

if ($son == "/"){
$ara = substr($orta, 0, $uzunluk-1);
} else {
$ara = $site."/";
}

} // www var mý kontrol
$altiay = 60 * 60  * 60 * 24 * 30 * 6;
$simdi = time();
$kontrol_yap = mysql_query("SELECT * FROM kayitlar WHERE url LIKE '%$ara%' AND $simdi - tarih < $altiay");
$kontrol = mysql_num_rows($kontrol_yap);

if($kontrol > 0){ // eskiden var mý kontrol

echo "<center>Bu adres zaten kayýtlý!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

} else { // Eskiden yoksa

///site aç veya yanlýþ adresi göster ////

$crl = curl_init();

curl_setopt($crl, CURLOPT_TIMEOUT, "30");
curl_setopt($crl, CURLOPT_URL, "$site");
curl_setopt($crl, CURLOPT_HEADER, 0);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);

$icerik = addslashes(curl_exec($crl));

curl_close($crl);

if ($icerik == "") echo '<center>Girdiðiniz Adres\'in doðru olduðuna emin olunuz!<br /><br /><a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';
else {

/// EKLEME ////

$tarih = time();
$hacker = addslashes($hacker);
$special="0";
if ((strstr($site,".gov")) or (strstr($site,".edu")) or (strstr($site,".mil")) or (strstr($site,".gob"))){
$special="1";
}
$ekle = @mysql_query("INSERT INTO kayitlar (id, hacker, url, icerik, tarih, onay, tur)
VALUES('', '$hacker', '$site', '$icerik', '$tarih', '0','$special') ");

$kayit_bak = mysql_query("SELECT * FROM hackerlar WHERE hacker = '$hacker'");
$kayit_sayisi = mysql_num_rows($kayit_bak);

if ($kayit_sayisi > 0){ // daha önce kayýdý varsa

$ekle2 = mysql_query("UPDATE hackerlar SET onaysiz = onaysiz + 1, deface = deface + 1 WHERE hacker = '$hacker'");

} else { // daha önce kayýdý yoksa

$ekle2 = mysql_query("INSERT INTO hackerlar (id, hacker, onaysiz, onayli, deface) VALUES('', '$hacker', '1', '0', '1') ");

} // daha önce kayýt kontrol kapa

if ($ekle && $ekle2){

if ( $special=="1" ){
echo '<script>alert("Siteniz onholddadýr.\nÝncelenince SPECIAL deface listesine eklenecektir!"); document.location="/onhold"; </script>';
}
else{
echo '<script>alert("Siteniz onholddadýr.\nÝncelenince deface listesine eklenecektir!"); document.location="/onhold"; </script>';
}
} else {

echo "<center>Siteniz eklenirken bir hata oluþtu..!<br /><br />";
echo '<a href="">Geri dönmek için týklayýn</a></center>';

} // ekle kontrol

} // Adres doðruluðu kontrol

} // Eskiden var mý kontrol

} // empty kontrol

} else { // submit kontrol

echo "<center>Lütfen doðru adresten kayýt yaptýrýnýz!<br/><br/>";
echo '<a href="javascript:history.back(1)">Geri dönmek için týklayýn</a></center>';

}

?>

<?php include "../alt.php"; ?>
