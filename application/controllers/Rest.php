<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mscheduling');
	}

		public function get_att($id)
	{
		$sch_id = base64_decode($id);
		$data = $this->db->get_where('atteendees_pra', array('scheduling_id' => $sch_id))->result();		
		echo json_encode($data);
	}

	public function del_att()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('atteendees_pra');
		echo json_encode(array('status' => TRUE));
	}

	public function add_att()
	{
		$id = base64_decode($this->input->post('scheduling_id'));
		$name = $this->input->post('name');
		$this->db->insert('atteendees_pra', array(
			'scheduling_id' => $id,
			'name' => $name
		));
		echo json_encode(array('status' => TRUE));
	}
	

}

/* End of file Rest.php */
/* Location: ./application/controllers/Rest.php */