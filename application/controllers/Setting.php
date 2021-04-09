<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }
	}

	public function index()
	{
		$data['content'] = 'setting';
		$this->load->view('index', $data);
	}

	public function submit()
	{
		$cek = $this->db->get_where('employee', array('employee_id' => $this->session->userdata('employee_id'), 'password' => md5($this->input->post('cp'))))->num_rows();
		if (empty($cek)) {
			$this->session->set_flashdata("msg", "new Noty({
				type: 'error',
				layout: 'topRight',
				text: 'Current Password is Wrong !',
				progressBar: true,
				timeout: 2000,
				animation: {
					open: 'animated bounceInRight', // Animate.css class names
					close: 'animated bounceOutRight' // Animate.css class names
				}
				}).show()");
			redirect('setting','refresh');
		}elseif($this->input->post('np') !== $this->input->post('cnp')){
			$this->session->set_flashdata("msg", "new Noty({
				type: 'error',
				layout: 'topRight',
				text: 'New Password did not match !',
				progressBar: true,
				timeout: 2000,
				animation: {
					open: 'animated bounceInRight', // Animate.css class names
					close: 'animated bounceOutRight' // Animate.css class names
				}
				}).show()");
			redirect('setting','refresh');
		}else{
			$this->db->where('employee_id', $this->session->userdata('employee_id'));
			$this->db->update('employee', array('password' => md5($this->input->post('np'))));
			$this->session->set_flashdata("msg", "new Noty({
				type: 'success',
				layout: 'topRight',
				text: 'Change Password Done !',
				progressBar: true,
				timeout: 2000,
				animation: {
					open: 'animated bounceInRight', // Animate.css class names
					close: 'animated bounceOutRight' // Animate.css class names
				}
				}).show()");
			redirect('setting','refresh');
		}
	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */