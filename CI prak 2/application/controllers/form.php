<?php 
// Dalammembuat suatu formuntuk menginputkan data kita memerlukan inputan tertentu atau mungkin kita harus menentukan form mana saja yang wajib diisi maka kita mebutuhkan validation
class Form extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation');// untuk membuat form validation kita harus memnggil terlebih dahulu library from_validation
	}

	function index(){
		//padafunctin index kita memanggil view v_form untuk ditampilkan di browser
		$this->load->view('v_form');
	}

	function aksi(){
		// untuyk mekaukan form validasi kita harus menentukan form mana sajakanh yang akan diberi validasi
		$this->form_validation->set_rules('nama','Nama','required');// berikut penulisan validasi ,set rules untuk menetapkan peraturan pada form,tersebut
		// parameter pertama untuk form yang akan kita validasi
		//parameter kedua berikan kata untuk kata yang pertama kali munculsaat validasi
		// parameter yang ketiga adalah peraturan yang dibnerikan pada formtersebut, requied perintah untuktidak boleh kosong
		$this->form_validation->set_rules('email','Email','required');// berikut penulisan validasi ,set rules untuk menetapkan peraturan pada form,tersebut
		// parameter pertama untuk form yang akan kita validasi
		//parameter kedua berikan kata untuk kata yang pertama kali munculsaat validasi
		// parameter yang ketiga adalah peraturan yang dibnerikan pada formtersebut, requied perintah untuktidak boleh kosong
		$this->form_validation->set_rules('konfir_email','Konfirmasi Email','required');// berikut penulisan validasi ,set rules untuk menetapkan peraturan pada form,tersebut
		// parameter pertama untuk form yang akan kita validasi
		//parameter kedua berikan kata untuk kata yang pertama kali munculsaat validasi
		// parameter yang ketiga adalah peraturan yang dibnerikan pada formtersebut, requied perintah untuktidak boleh kosong

		
		//berikut adalah kondisi dari validasi tersebut,apbila aksi from_validation berjalan maka tampilkan From falidation oke
		if($this->form_validation->run() != false){
			echo "Form validation oke";
		}else{
			$this->load->view('v_form');// jika tidak maka ulang view dari v_form 
		}
	}
}

}