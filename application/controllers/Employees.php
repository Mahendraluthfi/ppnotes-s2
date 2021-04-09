<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employees extends CI_Controller {

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

	    $this->load->model('Memployee');
	}

	public function index()
	{
		$data['dept'] = $this->db->get_where('department', array('status' => 1))->result();
		$data['get'] = $this->Memployee->get()->result();
		$data['content'] = 'employees';
		$this->load->view('index', $data);	
	}	

	public function generate()
	{
		$db = $this->db->get('employee')->result();
		foreach ($db as $key) {
			$this->db->where('employee_id', $key->employee_id);
			$this->db->update('employee', array('password' => md5($key->employee_id)));
		}
	}

	public function save()
	{
		if ($this->db->get_where('employee', array('employee_id' => $this->input->post('id')))->num_rows() > 0) {
			$this->session->set_flashdata("msg", "new Noty({
				type: 'error',
				layout: 'topRight',
				text: 'ID Number is not Available !',
				progressBar: true,
				timeout: 2500,
				animation: {
					open: 'animated bounceInRight', // Animate.css class names
					close: 'animated bounceOutRight' // Animate.css class names
				}
				}).show()");
				echo json_encode(array('status' => TRUE));
		}else{	
			$this->db->insert('employee', array(
				'employee_id' => $this->input->post('id'),
				'department_id' => $this->input->post('department'),
				'employee_name' => $this->input->post('name'),
				'employee_level' => $this->input->post('level'),
				'employee_respon' => $this->input->post('respon'),
				'password' => md5($this->input->post('id'))
			));

			$this->session->set_flashdata("msg", "
			$(document).ready(function() {
	    		$('#delay-modal').modal('show');        
	    		setTimeout(function() {
	    			$('#delay-modal').modal('hide');          					
					}, 2500);
			});");		

			echo json_encode(array('status' => TRUE));
		}
	}

	public function edit($id)
	{
		$this->db->where('employee_id', $id);
		$this->db->update('employee', array(			
			'department_id' => $this->input->post('department'),
			'employee_name' => $this->input->post('name'),
			'employee_level' => $this->input->post('level'),			
			'employee_respon' => $this->input->post('respon')			
		));
		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
	    		$('#delay-modal').modal('show');        
	    		setTimeout(function() {
	    			$('#delay-modal').modal('hide');          					
					}, 2500);
			});");
		echo json_encode(array('status' => TRUE));		
	}

	public function get($id)
	{
		$data = $this->Memployee->get_id($id)->row();
		echo json_encode($data);
	}

	public function delete($id)
	{
		$this->db->where('employee_id', $id);
		$this->db->delete('employee');

		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
	    		$('#delay-modal').modal('show');        
	    		setTimeout(function() {
	    			$('#delay-modal').modal('hide');          					
					}, 2500);
			});");

		echo json_encode(array('status' => TRUE));		
	}


}

/* End of file Employees.php */
/* Location: ./application/controllers/Employees.php */