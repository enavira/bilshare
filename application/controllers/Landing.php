<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {

	
	public function index()
	{
		$this->load->model('Customers');
		print($this->Customers->get_customers());
	}
}
