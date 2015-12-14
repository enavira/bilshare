<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Model {


    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }

	public function get_customers()
	{
		$query = "SELECT * FROM customers";
		$this->db->query($query);
		// return $query->result();
	}
}
