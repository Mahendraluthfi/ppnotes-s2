<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }
	    $this->load->model('Mdashboard');
	}

	public function index()
	{	
		if ($this->session->userdata('level') == "ADMIN") {
			$data = array(
				'linkdepartment' => '<a href="'.base_url('department').'">Departments</a>',
				'linkcustomers' => '<a href="'.base_url('customers').'">Customers</a>',
				'linkstyle' => '<a href="'.base_url('style').'">Styles</a>',
				'linkemployees' => '<a href="'.base_url('employees').'">Users</a>',
				'linkcompleted' => '<a href="'.base_url('meeting/index/desc').'">Meetings Completed</a>',
				'linkprocess' => '<a href="'.base_url('meeting/index/asc').'">Meetings in Process</a>'
			);
		}else{
			$data = array(
				'linkdepartment' => '<a href="#">Departments</a>',
				'linkcustomers' => '<a href="#">Customers</a>',
				'linkstyle' => '<a href="#">Styles</a>',
				'linkemployees' => '<a href="#">Users</a>',
				'linkcompleted' => '<a href="#">Meetings Completed</a>',
				'linkprocess' => '<a href="#">Meetings in Process</a>'
			);
		}
		if ($this->Mdashboard->upcoming()->num_rows() > 0) {
			$data['cek'] = '';
		}else{
			$data['cek'] = 'No Data';			
		}
		$data['dept'] = $this->db->get('department')->num_rows();
		$data['customers'] = $this->db->get('customers')->num_rows();
		$data['styles'] = $this->db->get('styles')->num_rows();
		$data['employee'] = $this->db->get('employee')->num_rows();
		$data['final'] = $this->db->get_where('scheduling', array('final' => '1'))->num_rows();
		$data['proses'] = $this->db->get_where('scheduling', array('final' => '0'))->num_rows();
		$data['upcoming'] = $this->Mdashboard->upcoming()->result();
		$data['content'] = 'dashboard';
		$this->load->view('index', $data);		
	}

}

/* End of file Dashboard.php */
/* Location: ./application/controllers/Dashboard.php */