<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mstyles extends CI_Model {

	public function get()
	{
		$this->db->from('styles');
		$this->db->join('customers', 'customers.customer_id = styles.customer_id');
		$this->db->where('styles.status', 1);
		$db = $this->db->get();
		return $db;
	}	

	public function get_id($id)
	{
		$this->db->from('styles');
		$this->db->join('customers', 'customers.customer_id = styles.customer_id');
		$this->db->where('styles.id', $id);
		$db = $this->db->get();
		return $db;
	}
	
}

/* End of file Mstyles.php */
/* Location: ./application/models/Mstyles.php */