<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Style extends CI_Controller {

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

	    $this->load->model('Mstyles');
	}

	public function index()
	{
		$data['customer'] = $this->db->get_where('customers', array('status' => 1))->result();
		$data['get'] = $this->Mstyles->get()->result();
		$data['content'] = 'styles';
		$this->load->view('index', $data);	
	}	

	public function save()
	{
		// $name = $this->input->post('item');
		$this->db->insert('styles', array(
			'style_no' => $this->input->post('nomorstyle'),
			'customer_id' => $this->input->post('customer'),
			'style_item' => $this->input->post('item'),
			'remarks' => $this->input->post('remarks')
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
		$this->db->where('id', $id);
		$this->db->update('styles', array(
			'style_no' => $this->input->post('nomorstyle'),
			'customer_id' => $this->input->post('customer'),
			'style_item' => $this->input->post('item'),
			'remarks' => $this->input->post('remarks')			
		));
		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2000);
    		});

    		");		
		echo json_encode(array('status' => TRUE));		
	}

	public function get($id)
	{
		$data = $this->Mstyles->get_id($id)->row();		
		echo json_encode($data);
	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->update('styles', array(
			'status' => 0			
		));

		echo json_encode(array('status' => TRUE));		
	}
}

/* End of file Styles.php */
/* Location: ./application/controllers/Styles.php */