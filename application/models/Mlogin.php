<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	public function cek($id,$pass)
	{
		$this->db->from('employee');
		$this->db->join('department', 'employee.department_id = department.department_id');
		$this->db->where('employee.employee_id', $id);
		$this->db->where('employee.password', $pass);
		$db = $this->db->get();
		return $db;
	}

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */