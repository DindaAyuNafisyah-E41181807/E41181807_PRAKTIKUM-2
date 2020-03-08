<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
		</tr>
		<?php foreach($user as $u){ //menggunakan foreach untuk mengganti nama array hasil pasing dari controller?>
		<tr>
			<td><?php echo $u->nama //sehingga variabelyang dipanggil di view adalah $u bukan $user lagi?></td>
			<td><?php echo $u->alamat //sehingga variabelyang dipanggil di view adalah $u bukan $user lagi?></td>
			<td><?php echo $u->pekerjaan //sehingga variabelyang dipanggil di view adalah $u bukan $user lagi?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
<!--Tinmggalmengakses alamat controler user untuk menampilkan database -->