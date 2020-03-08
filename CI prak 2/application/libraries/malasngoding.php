<?php 
//untuk membuat libraries sendiri kita harus menbyiapkan file libary kita misal ini dibuat library malasngoding.php
//deklarasikan terlebih dahulu clasnya misal Malasngosing
class Malasngoding{
// kemudian buatlah 2 method
	function nama_saya(){
		//method pertama nama_saya yang akan menampilkan nama saya adalah malasngoding
		echo "Nama saya adalah malasngoding !";
	}

	function nama_kamu($nama){
		//metod kedua yang akan menampilkan nama kamu adalah sesuai vaiable $nama
		echo "Nama kamu adalah ". $nama ." !";
	}
}