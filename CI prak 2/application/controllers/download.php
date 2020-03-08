<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Download extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','download'));// untuk memamggil helper download dan url				
	}

	public function index(){		
		$this->load->view('v_download');// untuk menampilkan view view_download
	}

	public function lakukan_download(){				
		force_download('gambar/nan.png',NULL);//ketika browser mencari lakukan download barulah akan menampilkan gambar yang akan di download
	}	

}