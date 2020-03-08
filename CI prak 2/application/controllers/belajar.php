<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');// function ini agar controllerdapat menagkap m_data dari model
	}
	//apabila browser memanggil function index maka yang keluar adalah kalimat "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com"
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}
	//apabila browser memanggil function halo maka yang keluar adalah tampilan dari view belajar tanpa lkita harus mengetik view_belajar.php karena pada function halo ada perintah untuk meloadview dari view_belajar.php.
	//kita juga dapat memparsing data dari controller menuju view menggunakan array di dalam function halo
	public function halo(){
		//memparsing data
		$data['nama_web'] = "MalasNgoding.com";//kemudian tampilkan data nama_web di view_belajar.php untuk menbampilkan
		$this->load->view('view_belajar');
	}

	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();//function ini berfungsi manggil data dari model m_data dfan menjadikannya array
		$this->load->view('v_user.php',$data);//kemudian memparsing array ke view  v_user untuk menampilkan data dari tabel dalam database 
	}

}