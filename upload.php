<?php require_once("auth.php"); ?>
<?php
if(!empty($_FILES)){

	//konfigurasi database
	$dbHost = 'localhost';
	$dbUsername = 'root';
	$dbPassword = '';
	$dbName = 'db_users';
	//menghubungkan ke database
	$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
	if($mysqli->connect_errno){
		echo "Gagal terhubung ke MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	
	$targetDir = "upload/";
	$namaFile = $_FILES['file']['name'];
	$targetFile = $targetDir.$namaFile;
	$yang_upload = $_SESSION["user"]["name"];
	if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
		//memasukkan informasi file ke dalam database
		$conn->query("INSERT INTO file (nama_file, diupload, yang_upload) VALUES('".$namaFile."','".date("Y-m-d H:i:s")."','".$yang_upload."')");
	}
	
}
?>