<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdashboard extends CI_Model {

	public function upcoming()
	{
		$this->db->select('scheduling.scheduling_id, styles.style_no, scheduling.planned_date, datediff(scheduling.planned_date, current_date()) as selisih, (SELECT COUNT(*) FROM attendance_meet WHERE attendance_meet.scheduling_id = scheduling.scheduling_id) as total');		
		$this->db->from('scheduling');
		$this->db->join('styles', 'scheduling.styles_id = styles.id');
		$this->db->where('datediff(scheduling.planned_date, current_date()) > ', 0);
		$this->db->order_by('selisih', 'asc');
		$this->db->limit(4);
		$db = $this->db->get();
		return $db;
	}	

}

/* End of file Mdashboard.php */
/* Location: ./application/models/Mdashboard.php */