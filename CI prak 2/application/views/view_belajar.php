<!DOCTYPE html>
<!--Belajar Membuat View pada CodeIgniter-->
<html>
<head>
<!--Menambahkan judul pada tampilan bisa diletakkan di bagian head-->
	<title>Cara Membuat View Pada CodeIgniter | MalasNgoding.com</title>
</head>
<body>
<!--Menambahkan content bisa diletakkan di bagian body -->
	<h1>Cara Membuat View Pada CodeIgniter</h1>
	<h2>Ini adalah view view_belajar.php</h2>
	<h3>Ini adalah view yang di tampilkan pada controller belajar, method halo</h3>
	
	<!--kode php untuk menampilkan data parsing dari controller-->
	<h1><?php echo $nama_web; ?></h1>
<?php 
	//menambahikan heading
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",1);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",2);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",3);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",4);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",5);
	echo heading("Helper HTML CodeIgniter | MalasNgoding.com",6);
	?>

	<!--Untuk menampilkan view yang kita buat kita mebutuhkan controller untuk memanggilnya
	kita kan menbuat controller belajar.php-->
</body>
</html>