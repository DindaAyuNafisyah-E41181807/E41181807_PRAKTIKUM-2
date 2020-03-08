<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 //cara mengaktifkan helper menggunakan controller
 //fungsi helper sendiri adalah untuk menampilkan gambar dan heading  
class Selamat_datang extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		//berikut syntaxuntuk memanggil helper html
		$this->load->helper('html');
		//peletakkan helper html di construct bertujuan agar tidakperlu berulangkali memanggil helper html pada function lain karena construct sudah merupakan parent
		
	}
 
	public function index(){
		$this->load->view('view_belajar');
		//Dengan memanggil function index maka browser akan meload view_belajar.php, kita bisa membuat heading di view_belajar.php untuyk menampilkannya
	}
}
