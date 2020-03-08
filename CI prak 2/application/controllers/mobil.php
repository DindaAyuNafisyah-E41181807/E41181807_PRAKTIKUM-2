<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// membuat URI 
//URI merupakan singkatan dari Uniform Resource Identifier
//URI ytang membantu kita dalam memanggil url dalam codeigniter
//URI dapat disebut dengan segment 1, segment 2 dan seterusnya
class Mobil extends CI_Controller {
	
	public function warna(){		
		echo "Segment 1 adalah = " . $this->uri->segment('1') . "<br/>";// pada function warna kita menampilkan warna pada segment 		
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";// pada function warna kita menampilkan warna pada segment 			
		echo "Segment 2 adalah = " . $this->uri->segment('2') . "<br/>";// pada function warna kita menampilkan warna pada segment 		
		echo "Segment 3 adalah = " . $this->uri->segment('3') . "<br/>";// pada function warna kita menampilkan warna pada segment 		
		echo "Segment 4 adalah = " . $this->uri->segment('4') . "<br/>";// pada function warna kita menampilkan warna pada segment 		
		echo "Segment 5 adalah = " . $this->uri->segment('5') . "<br/>";// pada function warna kita menampilkan warna pada segment 	
	}
}
