<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scheduling_em extends CI_Controller {

	public function __construct()
	{
		parent::__construct();				
		if($this->auth->is_logged_in() == false)
	    {	     
	        redirect('login');
	    }

	    // if ($this->session->userdata('level') !== 'EXECUTIVE') {
	    // 	redirect('login');
	    // }		
	    $this->load->model('Mscheduling');
	}


	public function index()
	{
		$data['get'] = $this->Mscheduling->get()->result();	
		$data['respons'] = $this->db->get_where('employee', array('employee_id' => $this->session->userdata('employee_id')))->row();
					
		$data['content'] = 'EM/scheduling';
		$this->load->view('index', $data);
	}

	public function detail($id)
	{
		$data = $this->Mscheduling->get_id($id)->row();
		echo json_encode($data);
	}	

	public function form($id)
	{	
		$sch_id = base64_decode($id);
		$finalcek = $this->db->get_where('scheduling', array('scheduling_id' => $sch_id, 'final' => '0'))->num_rows();

		if (empty($finalcek)) {
			 
			redirect('scheduling_em','refresh');

		}else{
			$cek = $this->db->get_where('mast_global', array('scheduling_id' => $sch_id))->num_rows();
			if (empty($cek)) {
				$this->db->insert('mast_global', array('scheduling_id' => $sch_id));
			}
			$data['id'] = base64_decode($id);
			$cek = $this->db->get_where('meeting_pp', array('scheduling_id' => $sch_id))->num_rows();
			if (empty($cek)) {
				$this->_insert_new($sch_id);
			}
			$data['get'] =  $this->Mscheduling->get_id($sch_id)->row();					
			$data['pp'] = $this->db->get_where('meeting_pp', array('scheduling_id' => $sch_id))->row();
			$data['pl'] = $this->db->get_where('meeting_pl', array('scheduling_id' => $sch_id))->row();
			$data['pl2'] = $this->db->get_where('meeting_pl2', array('scheduling_id' => $sch_id))->row();
			$data['mast'] = $this->db->get_where('meeting_mast', array('scheduling_id' => $sch_id))->row();
			$data['global'] = $this->db->get_where('mast_global', array('scheduling_id' => $sch_id))->row();					
			
			if ($this->session->userdata('department') == "Technical") {
				$data['content'] = 'EM/f_pp_technical';
			}elseif($this->session->userdata('department') == "Cutting"){
				$data['content'] = 'EM/f_pp_cutting';			
			}elseif($this->session->userdata('department') == "PCU"){
				$data['content'] = 'EM/f_pp_pcu';			
			}elseif($this->session->userdata('department') == "Autonomation"){
				$data['content'] = '';			
			}elseif($this->session->userdata('department') == "Engineering"){
				$data['content'] = 'EM/f_pp_mechanic';			
			}elseif($this->session->userdata('department') == "Industrial Engineering"){
				$data['content'] = 'EM/f_pp_ie';			
			}elseif($this->session->userdata('department') == "Quality Inspection"){
				$data['content'] = 'EM/f_pp_lab';			
			}elseif($this->session->userdata('department') == "Quality Assurance"){
				$data['content'] = 'EM/f_pp_quality';			
			}else{
				$data['content'] = 'EM/f_pp_planning';						
			}

			$this->load->view('index', $data);				
		}
	}

	public function form_pra($id)
	{
		$sch_id = base64_decode($id);
		$cek = $this->db->get_where('pra', array('scheduling_id' => $sch_id))->num_rows();
		if (empty($cek)) {
			$this->db->insert('pra', array(
				'scheduling_id' => $sch_id
			));	
		}
		$data['content'] = 'form_rpa';
		$data['get_pra'] = $this->db->get_where('pra', array('scheduling_id' => $sch_id))->row();
		$data['att'] = $this->db->get_where('atteendees_pra', array('scheduling_id' => $sch_id))->result();
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();
		$this->load->view('index', $data);
	}	

	public function pra2($id)
	{
		$sch_id = base64_decode($id);
		$get = $this->db->get_where('pra2_main', array('scheduling_id' => $sch_id));
		if ($get->num_rows() > 0) {
			$data['pra'] = $get->row();
		}else{
			$this->db->insert('pra2_main', array(
				'scheduling_id' => $sch_id
			));
			$get2 = $this->db->get_where('pra2_main', array('scheduling_id' => $sch_id));			
			$data['pra'] = $get2->row();
		}
		$data['id'] = $sch_id;
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();		
		$data['content'] = '_new/form_pra_unadmin';
		$this->load->view('index', $data);

	}

	public function get_risk($id)
	{
		$data = $this->db->get_where('pra_element', array('scheduling_id' => $id, 'who' => $this->session->userdata('department')))->result();
		echo json_encode($data);	
	}

	public function get_risk_detail($id)
	{
		$data = $this->db->get_where('pra_desc', array('scheduling_id' => $id))->result();
		echo json_encode($data);	
	}

	public function add_risk($id)
	{
		$this->db->insert('pra_element', array(
			'scheduling_id' => $id,
			'risk_element' => $this->input->post('risk_element'),
			'ow_fact' => $this->input->post('ow_fact'),
			'support_mast' => $this->input->post('support_mast'),
			'plan_date' => $this->input->post('plan_date'),
			'actual_date' => $this->input->post('actual_date'),
			'who' => $this->session->userdata('department'),
		));

		echo json_encode(array('status' => TRUE));
	}

	public function delete_risk()
	{
		$id = $this->input->post('id');
		$this->db->where('id', $id);
		$this->db->delete('pra_element');

		echo json_encode(array('status' => TRUE));		
	}

	public function delete_risk_detail()
	{
		$id = $this->input->post('id');
		$get = $this->db->get_where('pra_desc', array('id' => $id))->row();
		if(file_exists($get->photo_1)){
			unlink($get->photo_1);
		}
		if(file_exists($get->photo_2)){
			unlink($get->photo_2);
		}
		$this->db->where('id', $id);
		$this->db->delete('pra_desc');

		echo json_encode(array('status' => TRUE));		
	}


	public function add_detail_risk($id)
	{		

		if(!empty($_FILES['photo_1']['name'])){
			$uploadData = $this->do_upload_risk('photo_1');
			if($uploadData){
				$photo_1 = 'assets/photos/' . $uploadData['file_name'];
			}
		}else{
			$photo_1 = '';
		}

		if(!empty($_FILES['photo_2']['name'])){
			$uploadData = $this->do_upload_risk('photo_2');
			if($uploadData){
				$photo_2 = 'assets/photos/' . $uploadData['file_name'];
			}
		}else{
			$photo_2 = '';
		}
		
		$this->db->insert('pra_desc', array(
			'scheduling_id' => $id,
			'field_1' => $this->input->post('field_1'),
			'field_2' => $this->input->post('field_2'),
			'field_3' => $this->input->post('field_3'),
			'field_4' => $this->input->post('field_4'),
			'field_5' => $this->input->post('field_5'),
			'field_6' => $this->input->post('field_6'),
			'photo_1' => $photo_1,
			'photo_2' => $photo_2
		));
		echo json_encode(array('status' => TRUE));
	}

	public function submit_risk($id,$sch_id)
	{
		$this->db->where('id', $id);
		$this->db->update('pra2_main', array(
			'pilot' => $this->input->post('add')
		));
		redirect('scheduling_em','refresh');
	}

	function do_upload_risk($iName)
	{
		$config['upload_path']="./assets/photos";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload($iName))
        {
			// $this->session->set_flashdata('msg', '
			// <div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
			return false;
        }
        else
        {
            return $this->upload->data();
        }
	}

	public function form_pdra($id)
	{
		$sch_id = base64_decode($id);
		$cek = $this->db->get_where('pdra', array('scheduling_id' => $sch_id))->num_rows();
		if (empty($cek)) {
			$this->db->insert('pdra', array(
				'scheduling_id' => $sch_id
			));				
		}
		$data['get_pdra'] = $this->db->get_where('pdra', array('scheduling_id' => $sch_id))->row();
		$data['pdra_ext'] = $this->db->get_where('pdra_extend', array('scheduling_id' => $sch_id))->result();
		$data['cek'] = $this->db->get_where('pdra_extend', array('scheduling_id' => $sch_id))->num_rows();
		$data['get'] = $this->Mscheduling->get_id($sch_id)->row();
		$data['content'] = 'form_pdra';
		$this->load->view('index', $data);
	}

	public function _insert_new($id)
	{
		$this->db->insert('meeting_pp', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl2', array('scheduling_id' => $id));
		$this->db->insert('meeting_mast', array('scheduling_id' => $id));
	}

	public function mastglobal_add_cfabric($id)
	{
		$sch_id = base64_decode($id);		
		$this->db->insert('mast_cbf', array(
			'scheduling_id' => $sch_id,
			'color' => $this->input->post('color'),
			'color_code' => $this->input->post('color_code'),
			'units' => $this->input->post('units'),
		));

		echo json_encode(array('status' => true));
	}

	public function mastglobal_getcbf($id)
	{

		$sch_id = base64_decode($id);
		$data = $this->db->get_where('mast_cbf',array('scheduling_id' => $sch_id))->result();
		echo json_encode($data);
	}

	public function mastglobal_delcbf()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('mast_cbf');
		echo json_encode(array('status' => true));		
	}

	public function mastglobal_add_ctrims($id)
	{
		$sch_id = base64_decode($id);

		$this->db->insert('mast_cbt', array(
			'scheduling_id' => $sch_id,
			'trims' => $this->input->post('trims'),
			'color' => $this->input->post('color'),
			'color_code' => $this->input->post('color_code'),
			'units' => $this->input->post('units'),
		));

		echo json_encode(array('status' => true));
	}

	public function mastglobal_getcbt($id)
	{
		$sch_id = base64_decode($id);		
		$data = $this->db->get_where('mast_cbt',array('scheduling_id' => $sch_id))->result();
		echo json_encode($data);
	}

	public function mastglobal_delcbt()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('mast_cbt');
		echo json_encode(array('status' => true));		
	}


}

/* End of file Scheduling_em.php */
/* Location: ./application/controllers/Scheduling_em.php */