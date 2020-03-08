<?php

class Overview extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        // untuk menamplkan view admin/overview.php
        $this->load->view("admin/overview");
	}
}