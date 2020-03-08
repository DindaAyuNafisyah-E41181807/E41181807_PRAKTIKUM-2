<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // untuk menampilkan view admin/overview.php
        $this->load->view("admin/overview");
	}
}
//Kemudian, membuat sebuah route baru untuk controller Overview di config/routes.php