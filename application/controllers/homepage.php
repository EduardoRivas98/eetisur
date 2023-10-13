<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homepage extends CI_Controller {

	public function __construct() {
        parent::__construct();
       //Load Models/librarys
    }

	public function index()
	{
		
		$this->load->view('vw-header');
		$this->load->view('login');
		$this->load->view('vw-footer');
	}
}
