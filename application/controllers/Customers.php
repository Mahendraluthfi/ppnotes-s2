<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customers extends CI_Controller {

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
		$data['get'] = $this->db->get_where('customers', array('status' => 1))->result();
		$data['content'] = 'customers';
		$this->load->view('index', $data);
	}

	public function get($id)
	{
		$data = $this->db->get_where('customers', array('customer_id' => $id))->row();
		echo json_encode($data);
	}

	public function save()
	{
		$this->db->insert('customers', array(
			'customer_name' => $this->input->post('customer_name')
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
		$this->db->where('customer_id', $id);
		$this->db->update('customers', array(
			'customer_name' => $this->input->post('customer_name')			
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
		$this->db->where('customer_id', $id);
		$this->db->update('customers', array(
			'status' => 0			
		));

		echo json_encode(array('status' => TRUE));		
	}

	public function tes()
	{
		echo "string";
	}

}

/* End of file Customers.php */
/* Location: ./application/controllers/Customers.php */