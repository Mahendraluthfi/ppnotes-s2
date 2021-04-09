<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mscheduling extends CI_Model {

	public function get()
	{
		$this->db->from('scheduling');
		$this->db->join('styles', 'styles.id = scheduling.styles_id');
		$this->db->order_by('scheduling.scheduling_id', 'desc');
		$db = $this->db->get();
		return $db;
	}

	public function get_desc()
	{
		$this->db->from('scheduling');
		$this->db->join('styles', 'styles.id = scheduling.styles_id');
		$this->db->order_by('scheduling.final', 'desc');
		$db = $this->db->get();
		return $db;
	}

	public function get_asc()
	{
		$this->db->from('scheduling');
		$this->db->join('styles', 'styles.id = scheduling.styles_id');
		$this->db->order_by('scheduling.final', 'asc');		
		$db = $this->db->get();
		return $db;
	}

	public function get_id($id)
	{
		$this->db->from('scheduling');
		$this->db->join('styles', 'styles.id = scheduling.styles_id');
		$this->db->join('customers', 'customers.customer_id = styles.customer_id');
		$this->db->where('scheduling.scheduling_id', $id);
		$db = $this->db->get();
		return $db;
	}

	public function get_list($id,$schid)
	{
		$this->db->select('employee.*, attendance_meet.id');
		$this->db->from('attendance_meet');
		$this->db->join('employee', 'attendance_meet.employee_id = employee.employee_id');
		$this->db->where('employee.department_id', $id);
		$this->db->where('attendance_meet.scheduling_id', $schid);
		$db = $this->db->get();
		return $db;	
	}

	public function list_emp($id,$schid)
	{
		$db = $this->db->query("SELECT * FROM `employee` WHERE department_id = '$id' AND NOT employee_id IN (SELECT employee_id FROM attendance_meet WHERE department_id = '$id' AND scheduling_id = '$schid')");
		// $db = $this->db->get();
		return $db;	
	}

	public function get_att($id)
	{
		$this->db->from('attendance_meet');
		$this->db->join('employee', 'employee.employee_id = attendance_meet.employee_id');
		$this->db->join('department', 'department.department_id = employee.department_id');
		$this->db->where('attendance_meet.scheduling_id', $id);
		$db = $this->db->get();
		return $db;
	}

}

/* End of file Mscheduling.php */
/* Location: ./application/models/Mscheduling.php */