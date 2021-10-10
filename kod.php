<?php

function olustur () {
 $sifre = substr(md5(rand(0,999999999999)),-6);
 if ($sifre) {
  session_start();
  $_SESSION["guv"] = $sifre;
  $width  = 90;
  $height =  16;
  $resim  = ImageCreate($width,$height);
  $beyaz  = ImageColorAllocate($resim, 255, 255, 255);
  $rand   = ImageColorAllocate($resim, rand(0,255), rand(0,255), rand(0,255));
  ImageFill($resim, 0, 0, $rand);
  ImageString($resim, 5, 18, 0, $_SESSION["guv"], $beyaz);
  header("Content,type: image/png");
  ImagePng($resim);
  ImageDestroy($resim);
 }
}

olustur();

?>