<?php 

class M_data extends CI_Model{
	//untuk mengambil tabeldari database kita harus mamnggilnya di model dengan class M_data
	//function ambil_data akan mengambil tabel user yang ada di database
	function ambil_data(){
		return $this->db->get('user');
	}
}