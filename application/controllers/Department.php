<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    if ($this->session->userdata('level') !== 'ADMIN') {
	    	redirect('login');
	    }
	}

	public function index()
	{
		$data['get'] = $this->db->get_where('department', array('status' => 1))->result();
		$data['content'] = 'department';
		$this->load->view('index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('department', array('department_id' => $id))->row();
		echo json_encode($data);
	}

	public function save()
	{
		$this->db->insert('department', array(
			'department_name' => $this->input->post('department_name')
		));
		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});

    		");
		echo json_encode(array('status' => TRUE));
	}

	public function edit($id)
	{
		$this->db->where('department_id', $id);
		$this->db->update('department', array(
			'department_name' => $this->input->post('department_name')			
		));
		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});

    		");
		echo json_encode(array('status' => TRUE));
	}

	public function delete($id)
	{
		$this->db->where('department_id', $id);
		$this->db->update('department', array(
			'status' => 0			
		));

		echo json_encode(array('status' => TRUE));		
	}

}

/* End of file Department.php */
/* Location: ./application/controllers/Department.php */