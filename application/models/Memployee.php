<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Memployee extends CI_Model {

	public function get()
	{
		$this->db->from('employee');
		$this->db->join('department', 'employee.department_id = department.department_id');
		$db = $this->db->get();
		return $db;
	}

	public function get_id($id)
	{
		$this->db->from('employee');
		$this->db->join('department', 'employee.department_id = department.department_id');
		$this->db->where('employee_id', $id);
		$db = $this->db->get();
		return $db;
	}

}

/* End of file Memployee.php */
/* Location: ./application/models/Memployee.php */