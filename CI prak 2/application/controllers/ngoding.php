<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// controller untuk membuat libraries sendiri
class Ngoding extends CI_Controller {
	
	function index(){
		$this->load->library('malasngoding');// kita memanggil library yang sudah kita buat di libraries
		$this->malasngoding->nama_saya();// ketika index di panggil akan meng nampilkan library nama_saya
                echo "<br/>";
                $this->malasngoding->nama_kamu("Diiiinda");//dan juga akan menampilkan library nama_kamu dengan nama Diiiinda
	}//  codeigneter menyediakan library untuk kita  agara membatuy kita dalam mengerjakan web menggunakan codeigniter

}