<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		if($this->auth->is_logged_in() == false){ 			       
        	$this->load->view('login');
        }else{
            redirect('dashboard','refresh');
        }		
	}


	public function submit()
	{
        $this->load->model('Mlogin');
		$id = $this->input->post('id');
		$password = md5($this->input->post('password'));	

		$cek = $this->Mlogin->cek($id,$password)->num_rows();		
		if (empty($cek)) {
			// echo "No";
			$this->session->set_flashdata("msg", "new Noty({
				type: 'error',
				layout: 'topRight',
				text: 'ID Number or Password is Wrong !',
				progressBar: true,
				timeout: 2500,
				animation: {
					open: 'animated bounceInRight', // Animate.css class names
					close: 'animated bounceOutRight' // Animate.css class names
				}
				}).show()");
			redirect('login','refresh');
		}else{
			$get = $this->Mlogin->cek($id,$password)->row();		
			if ($get->employee_respon == "ADMIN") {
				$level = "ADMIN";
			}else{
				$level = $get->employee_level;
			}
			$session = array(
				'employee_id' => $get->employee_id,
				'employee_name' => '<b>'.$get->employee_name.'</b>',
				'department' => $get->department_name,
				'level' => $level,
				'token' => $get->token
			);			
			$this->session->set_userdata( $session );
			redirect('dashboard','refresh');

		}		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		// $this->session->unset_userdata('employee_id');
		// $this->session->unset_userdata('level');
		redirect('login','refresh');
	}

	public function generate()
	{
		$get = $this->db->get('employee')->result();
		foreach ($get as $data) {
			$this->db->where('employee_id', $data->employee_id);
			$this->db->update('employee', array('token' => $this->_codestring()));
		}
	}

	public function _codestring()
	{
		$this->load->helper('string');
		return random_string('alnum',30);
	}
	
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */