<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meeting extends CI_Controller {

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
	    
	    $this->load->model('Mscheduling');	    
	}

	public function index($sort='')
	{
		if ($sort == 'asc') {
			$data['get'] = $this->Mscheduling->get_asc()->result();				
		}elseif ($sort == 'desc') {
			$data['get'] = $this->Mscheduling->get_desc()->result();					
		}else{
			$data['get'] = $this->Mscheduling->get()->result();		
		}
		$data['content'] = 'meeting';
		$this->load->view('index', $data);					
	}

	public function sign($id)
	{
		$data['get'] =  $this->Mscheduling->get_id($id)->row();
		$data['content'] = 'sign';
		$data['id'] = $id;
		$this->load->view('index', $data);						
	}

	public function signpp($id)
	{
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['pp'] =  $this->db->get_where('meeting_pp', array('scheduling_id'=> $id))->row();	
		$data['id'] = $id;
		$data['att'] = $this->Mscheduling->get_att($id)->result();		
		$data['content'] = 'f_pp';		
		$this->load->view('index', $data);	
	}

	public function signpl($id)
	{
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['pl'] =  $this->db->get_where('meeting_pl', array('scheduling_id'=> $id))->row();	
		$data['pl2'] =  $this->db->get_where('meeting_pl2', array('scheduling_id'=> $id))->row();	
		$data['id'] = $id;
		$data['att'] = $this->Mscheduling->get_att($id)->result();		
		$data['content'] = 'f_pl';		
		$this->load->view('index', $data);		
	}

	public function signmast($id)
	{
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['mast'] =  $this->db->get_where('meeting_mast', array('scheduling_id'=> $id))->row();			
		$data['id'] = $id;
		$data['att'] = $this->Mscheduling->get_att($id)->result();		
		$data['content'] = 'f_mast';		
		$this->load->view('index', $data);	
	}

	public function mastglobal($id)
	{
		$cek = $this->db->get_where('mast_global', array('scheduling_id' => $id))->num_rows();
		if (empty($cek)) {
			$this->db->insert('mast_global', array('scheduling_id' => $id));
		}
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['global'] = $this->db->get_where('mast_global', array('scheduling_id' => $id))->row();		
		$data['content'] = '_new/mast_global';	
		$data['att'] = $this->Mscheduling->get_att($id)->result();				
		$this->load->view('index', $data);	
	}

	public function mastglobal_add_cfabric($id)
	{
		$this->db->insert('mast_cbf', array(
			'scheduling_id' => $id,
			'color' => $this->input->post('color'),
			'color_code' => $this->input->post('color_code'),
			'units' => $this->input->post('units'),
		));

		echo json_encode(array('status' => true));
	}

	public function mastglobal_getcbf($id)
	{
		$data = $this->db->get_where('mast_cbf',array('scheduling_id' => $id))->result();
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
		$this->db->insert('mast_cbt', array(
			'scheduling_id' => $id,
			'trims' => $this->input->post('trims'),
			'color' => $this->input->post('color'),
			'color_code' => $this->input->post('color_code'),
			'units' => $this->input->post('units'),
		));

		echo json_encode(array('status' => true));
	}

	public function mastglobal_getcbt($id)
	{
		$data = $this->db->get_where('mast_cbt',array('scheduling_id' => $id))->result();
		echo json_encode($data);
	}

	public function mastglobal_delcbt()
	{
		$this->db->where('id', $this->input->post('id'));
		$this->db->delete('mast_cbt');
		echo json_encode(array('status' => true));		
	}

	public function mastglobal_saveall($id)
	{
		$this->db->where('scheduling_id', $id);
		$this->db->update('mast_global', array(
			'pi_date1' => $this->input->post('pi_date1'),
			'pi_date2' => $this->input->post('pi_date2'),
			'pi_input1' => $this->input->post('pi_input1'),
			'pi_input2' => $this->input->post('pi_input2'),
			'pi_input3' => $this->input->post('pi_input3'),
			'pi_input4' => $this->input->post('pi_input4'),
			'pi_radio1' => $this->input->post('pi_radio1'),
			'pi_radio2' => $this->input->post('pi_radio2'),
			'pi_radio3' => $this->input->post('pi_radio3'),
			'pi_textarea1' => $this->input->post('pi_textarea1'),
			'mc_date1' => $this->input->post('mc_date1'),
			'mc_date2' => $this->input->post('mc_date2'),
			'mc_date3' => $this->input->post('mc_date3'),
			'mc_date4' => $this->input->post('mc_date4'),
			'mc_date5' => $this->input->post('mc_date5'),
			'mc_date6' => $this->input->post('mc_date6'),
			'mc_input1' => $this->input->post('mc_input1'),
			'mc_input2' => $this->input->post('mc_input2'),
			'mc_input3' => $this->input->post('mc_input3'),
			'mc_input4' => $this->input->post('mc_input4'),
			'mc_input5' => $this->input->post('mc_input5'),
			'mc_input6' => $this->input->post('mc_input6'),
			'mc_input7' => $this->input->post('mc_input7'),
			'mc_input8' => $this->input->post('mc_input8'),
			'mc_input9' => $this->input->post('mc_input9'),
			'mc_input10' => $this->input->post('mc_input10'),
			'mc_input11' => $this->input->post('mc_input11'),
			'mc_textarea1' => $this->input->post('mc_textarea1'),
			'mc_textarea2' => $this->input->post('mc_textarea2'),
			'mc_radio1' => $this->input->post('mc_radio1'),			
			'mc_select1' => $this->input->post('mc_select1'),		
			'hg_input1' => $this->input->post('hg_input1'),		
			'hg_textarea1' => $this->input->post('hg_textarea1'),		
			'hg_radio1' => $this->input->post('hg_radio1'),		
			'hg_radio2' => $this->input->post('hg_radio2'),		
			'tc_input1' => $this->input->post('tc_input1'),
			'tc_input2' => $this->input->post('tc_input2'),
			'tc_input3' => $this->input->post('tc_input3'),
			'tc_input4' => $this->input->post('tc_input4'),
			'tc_input5' => $this->input->post('tc_input5'),
			'tc_input6' => $this->input->post('tc_input6'),
			'tc_input7' => $this->input->post('tc_input7'),
			'tc_input8' => $this->input->post('tc_input8'),
			'tc_input9' => $this->input->post('tc_input9'),
			'tc_input10' => $this->input->post('tc_input10'),
			'tc_input11' => $this->input->post('tc_input11'),
			'tc_input12' => $this->input->post('tc_input12'),
			'tc_input13' => $this->input->post('tc_input13'),
			'tc_input14' => $this->input->post('tc_input14'),
			'tc_input15' => $this->input->post('tc_input15'),
			'tc_input16' => $this->input->post('tc_input16'),
			'tc_input17' => $this->input->post('tc_input17'),
			'tc_input18' => $this->input->post('tc_input18'),
			'tc_input19' => $this->input->post('tc_input19'),
			'tc_input20' => $this->input->post('tc_input20'),
			'tc_input21' => $this->input->post('tc_input21'),
			'tc_input22' => $this->input->post('tc_input22'),
			'tc_input23' => $this->input->post('tc_input23'),
			'tc_input24' => $this->input->post('tc_input24'),
			'tc_input25' => $this->input->post('tc_input25'),
			'tc_input26' => $this->input->post('tc_input26'),
			'tc_input27' => $this->input->post('tc_input27'),
			'tc_input28' => $this->input->post('tc_input28'),
			'tc_radio1' => $this->input->post('tc_radio1'),
			'tc_radio2' => $this->input->post('tc_radio2'),
			'tc_radio3' => $this->input->post('tc_radio3'),
			'tc_radio4' => $this->input->post('tc_radio4'),
			'tc_radio5' => $this->input->post('tc_radio5'),
			'tc_textarea1' => $this->input->post('tc_textarea1'),
			'tc_textarea2' => $this->input->post('tc_textarea2'),
			'tc_textarea3' => $this->input->post('tc_textarea3'),
			'tc_textarea4' => $this->input->post('tc_textarea4'),
			'qa_radio1' => $this->input->post('qa_radio1'),
			'qa_radio2' => $this->input->post('qa_radio2'),
			'qa_radio3' => $this->input->post('qa_radio3'),
			'qa_radio4' => $this->input->post('qa_radio4'),
			'qa_radio5' => $this->input->post('qa_radio5'),
			'qa_radio6' => $this->input->post('qa_radio6'),
			'qa_radio7' => $this->input->post('qa_radio7'),
			'qa_radio8' => $this->input->post('qa_radio8'),
			'qa_radio9' => $this->input->post('qa_radio9'),
			'qa_input1' => $this->input->post('qa_input1'),
			'qa_input2' => $this->input->post('qa_input2'),
			'qa_input3' => $this->input->post('qa_input3'),
			'qa_input4' => $this->input->post('qa_input4'),
			'qa_input5' => $this->input->post('qa_input5'),
			'qa_input6' => $this->input->post('qa_input6'),
			'qa_input7' => $this->input->post('qa_input7'),
			'qa_input8' => $this->input->post('qa_input8'),
			'qa_input9' => $this->input->post('qa_input9'),
			'qa_input10' => $this->input->post('qa_input10'),
			'qa_input11' => $this->input->post('qa_input11'),
			'qa_input12' => $this->input->post('qa_input12'),
			'qa_input13' => $this->input->post('qa_input13'),
			'qa_input14' => $this->input->post('qa_input14'),
			'qa_input15' => $this->input->post('qa_input15'),
			'qa_input16' => $this->input->post('qa_input16'),
			'qa_input17' => $this->input->post('qa_input17'),
			'qa_input18' => $this->input->post('qa_input18'),
			'qa_input19' => $this->input->post('qa_input19'),
			'qa_input20' => $this->input->post('qa_input20'),
			'qa_input21' => $this->input->post('qa_input21'),
			'qa_input22' => $this->input->post('qa_input22'),
			'qa_input23' => $this->input->post('qa_input23'),
			'qa_input24' => $this->input->post('qa_input24'),
			'qa_input25' => $this->input->post('qa_input25'),
			'qa_input26' => $this->input->post('qa_input26'),
			'qa_input27' => $this->input->post('qa_input27'),
			'qa_input28' => $this->input->post('qa_input28'),
			'qa_input29' => $this->input->post('qa_input29'),
			'qa_input30' => $this->input->post('qa_input30'),
			'qa_input31' => $this->input->post('qa_input31'),
			'qa_input32' => $this->input->post('qa_input32'),
			'qa_input33' => $this->input->post('qa_input33'),
			'qa_input34' => $this->input->post('qa_input34'),
			'qa_input35' => $this->input->post('qa_input35'),
			'qa_input36' => $this->input->post('qa_input36'),
			'qa_input37' => $this->input->post('qa_input37'),
			'qa_input38' => $this->input->post('qa_input38'),
			'qa_input39' => $this->input->post('qa_input39'),
			'qa_input40' => $this->input->post('qa_input40'),
			'qa_input41' => $this->input->post('qa_input41'),
			'qa_input42' => $this->input->post('qa_input42'),
			'qa_input43' => $this->input->post('qa_input43'),
			'qa_input44' => $this->input->post('qa_input44'),
			'qa_input45' => $this->input->post('qa_input45'),
			'qa_input46' => $this->input->post('qa_input46'),
			'qa_input47' => $this->input->post('qa_input47'),
			'qa_input48' => $this->input->post('qa_input48'),
			'qa_input49' => $this->input->post('qa_input49'),
			'qa_input50' => $this->input->post('qa_input50'),
			'qa_input51' => $this->input->post('qa_input51'),
			'qa_input52' => $this->input->post('qa_input52'),
			'qa_input53' => $this->input->post('qa_input53'),
			'qa_input54' => $this->input->post('qa_input54'),
			'qa_input55' => $this->input->post('qa_input55'),
			'qa_input56' => $this->input->post('qa_input56'),
			'qa_input57' => $this->input->post('qa_input57'),
			'qa_input58' => $this->input->post('qa_input58'),
			'qa_input59' => $this->input->post('qa_input59'),
			'qa_input60' => $this->input->post('qa_input60'),
			'qa_input61' => $this->input->post('qa_input61'),
			'qa_input62' => $this->input->post('qa_input62'),
			'qa_input63' => $this->input->post('qa_input63'),
			'qa_input64' => $this->input->post('qa_input64'),
			'qa_input65' => $this->input->post('qa_input65'),
			'qa_input66' => $this->input->post('qa_input66'),
			'qa_input67' => $this->input->post('qa_input67'),
			'qa_input68' => $this->input->post('qa_input68'),
			'qa_input69' => $this->input->post('qa_input69'),
			'qa_input70' => $this->input->post('qa_input70'),
			'qa_input71' => $this->input->post('qa_input71'),
			'qa_input72' => $this->input->post('qa_input72'),
			'qa_input73' => $this->input->post('qa_input73'),
			'qa_input74' => $this->input->post('qa_input74'),
			'qa_input75' => $this->input->post('qa_input75'),
			'qa_input76' => $this->input->post('qa_input76'),
			'qa_input77' => $this->input->post('qa_input77'),
			'qa_input78' => $this->input->post('qa_input78'),
			'qa_input79' => $this->input->post('qa_input79'),
			'qa_input80' => $this->input->post('qa_input80'),
			'qa_input81' => $this->input->post('qa_input81'),
			'qa_input82' => $this->input->post('qa_input82'),
			'qa_input83' => $this->input->post('qa_input83'),
			'qa_input84' => $this->input->post('qa_input84'),
			'qa_input85' => $this->input->post('qa_input85'),
			'qa_input86' => $this->input->post('qa_input86'),
			'qa_input87' => $this->input->post('qa_input87'),
			'qa_textarea1' => $this->input->post('qa_textarea1'),
			'qa_textarea2' => $this->input->post('qa_textarea2'),
			'qa_textarea3' => $this->input->post('qa_textarea3'),
			'qa_textarea4' => $this->input->post('qa_textarea4'),
			'qa_textarea5' => $this->input->post('qa_textarea5'),
			'qa_textarea6' => $this->input->post('qa_textarea6'),
			'qa_textarea7' => $this->input->post('qa_textarea7'),
			'md_input1' => $this->input->post('md_input1'),
			'md_input2' => $this->input->post('md_input2'),
			'md_input3' => $this->input->post('md_input3'),
			'md_input4' => $this->input->post('md_input4'),
			'md_input5' => $this->input->post('md_input5'),
			'md_input6' => $this->input->post('md_input6'),
			'md_input7' => $this->input->post('md_input7'),
			'md_input8' => $this->input->post('md_input8'),
			'md_input9' => $this->input->post('md_input9'),
			'md_input10' => $this->input->post('md_input10'),
			'md_input11' => $this->input->post('md_input11'),
			'md_input12' => $this->input->post('md_input12'),
			'md_input13' => $this->input->post('md_input13'),
			'md_input14' => $this->input->post('md_input14'),
			'md_date1' => $this->input->post('md_date1'),
			'md_textarea1' => $this->input->post('md_textarea1'),
			'md_textarea2' => $this->input->post('md_textarea2'),
			'md_textarea3' => $this->input->post('md_textarea3'),
			'md_textarea4' => $this->input->post('md_textarea4'),
			'md_textarea5' => $this->input->post('md_textarea5'),
			'md_textarea6' => $this->input->post('md_textarea6'),
			'md_textarea7' => $this->input->post('md_textarea7'),
			'md_textarea8' => $this->input->post('md_textarea8'),
			'md_textarea9' => $this->input->post('md_textarea9'),
			'md_textarea10' => $this->input->post('md_textarea10')			
		));
		redirect('meeting/mastglobal/'.$id,'refresh');
	}


	public function enter($form,$id)
	{
		$data['id'] = $id;
		$cek = $this->db->get_where('meeting_pp', array('scheduling_id' => $id))->num_rows();
		if (empty($cek)) {
			$this->_insert_new($id);
		}
		$data['pp'] = $this->db->get_where('meeting_pp', array('scheduling_id' => $id))->row();
		$data['pl'] = $this->db->get_where('meeting_pl', array('scheduling_id' => $id))->row();
		$data['pl2'] = $this->db->get_where('meeting_pl2', array('scheduling_id' => $id))->row();
		$data['mast'] = $this->db->get_where('meeting_mast', array('scheduling_id' => $id))->row();
		$data['content'] = $form;
		$this->load->view('index', $data);
	}

	public function _insert_new($id)
	{
		$this->db->insert('meeting_pp', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl', array('scheduling_id' => $id));
		$this->db->insert('meeting_pl2', array('scheduling_id' => $id));
		$this->db->insert('meeting_mast', array('scheduling_id' => $id));
	}

	public function subform_pp($id)
	{
		$this->db->where('scheduling_id', $id);
		$this->db->update('meeting_pp', array(
		  'date_pp' => $this->input->post('date_pp'),
		  'pp_m2_1' => $this->input->post('pp_m2_1'),
		  'pp_m2_2' => $this->input->post('pp_m2_2'),
		  'pp_m2_3' => $this->input->post('pp_m2_3'),
		  'pp_m2_4' => $this->input->post('pp_m2_4'),
		  'pp_m3_1' => $this->input->post('pp_m3_1'),
		  'pp_m3_2' => $this->input->post('pp_m3_2'),
		  'pp_m3_3' => $this->input->post('pp_m3_3'),
		  'pp_m4_1' => $this->input->post('pp_m4_1'),
		  'pp_m4_2' => $this->input->post('pp_m4_2'),
		  'pp_m4_3' => $this->input->post('pp_m4_3'),
		  'pp_m4_4' => $this->input->post('pp_m4_4'),
		  'pp_m4_5' => $this->input->post('pp_m4_5'),
		  'pp_m4_6' => $this->input->post('pp_m4_6'),
		  'pp_m4_7' => $this->input->post('pp_m4_7'),
		  'pp_m4_8' => $this->input->post('pp_m4_8'),
		  'pp_m4_9' => $this->input->post('pp_m4_9'),
		  'pp_m5_1' => $this->input->post('pp_m5_1'),
		  'pp_m5_2' => $this->input->post('pp_m5_2'),
		  'pp_m5_3' => $this->input->post('pp_m5_3'),
		  'pp_m5_4' => $this->input->post('pp_m5_4'),
		  'pp_m6_1' => $this->input->post('pp_m6_1'),
		  'pp_m6_2' => $this->input->post('pp_m6_2'),
		  'pp_m6_3' => $this->input->post('pp_m6_3'),
		  'pp_m6_4' => $this->input->post('pp_m6_4'),
		  'pp_m6_5' => $this->input->post('pp_m6_5'),
		  'pp_m6_6' => $this->input->post('pp_m6_6'),
		  'pp_m6_7' => $this->input->post('pp_m6_7'),
		  'pp_m6_8' => $this->input->post('pp_m6_8'),
		  'pp_m6_9' => $this->input->post('pp_m6_9'),
		  'pp_m6_10' => $this->input->post('pp_m6_10'),
		  'pp_m6_11' => $this->input->post('pp_m6_11'),
		  'pp_m6_12' => $this->input->post('pp_m6_12'),
		  'pp_m6_13' => $this->input->post('pp_m6_13'),
		  'pp_m6_14' => $this->input->post('pp_m6_14'),
		  'pp_m6_15' => $this->input->post('pp_m6_15'),
		  'pp_m6_16' => $this->input->post('pp_m6_16'),
		  'pp_m7_1' => $this->input->post('pp_m7_1'),
		  'pp_f1_1' => $this->input->post('pp_f1_1'),
		  'pp_f1_2' => $this->input->post('pp_f1_2'),
		  'pp_f1_3' => $this->input->post('pp_f1_3'),
		  'pp_f1_4' => $this->input->post('pp_f1_4'),
		  'pp_f2_1' => $this->input->post('pp_f2_1'),
		  'pp_f2_2' => $this->input->post('pp_f2_2'),
		  'pp_f2_3' => $this->input->post('pp_f2_3'),
		  'pp_f2_4' => $this->input->post('pp_f2_4'),
		  'pp_f3_1' => $this->input->post('pp_f3_1'),
		  'pp_f3_2' => $this->input->post('pp_f3_2'),
		  'pp_f3_3' => $this->input->post('pp_f3_3'),
		  'pp_f3_4' => $this->input->post('pp_f3_4'),
		  'pp_f3_5' => $this->input->post('pp_f3_5'),
		  'pp_f3_6' => $this->input->post('pp_f3_6'),
		  'pp_f3_7' => $this->input->post('pp_f3_7'),
		  'pp_f3_8' => $this->input->post('pp_f3_8'),
		  'pp_f3_9' => $this->input->post('pp_f3_9'),
		  'pp_f3_10' => $this->input->post('pp_f3_10'),
		  'pp_f4_1' => $this->input->post('pp_f4_1'),
		  'pp_f5_1' => $this->input->post('pp_f5_1'),
		  'pp_f5_2' => $this->input->post('pp_f5_2'),
		  'pp_f5_3' => $this->input->post('pp_f5_3'),
		  'pp_f6_1' => $this->input->post('pp_f6_1'),
		  'pp_f6_2' => $this->input->post('pp_f6_2'),
		  'pp_f6_3' => $this->input->post('pp_f6_3'),
		  'pp_f6_4' => $this->input->post('pp_f6_4'),
		  'pp_f6_5' => $this->input->post('pp_f6_5'),
		  'pp_f6_6' => $this->input->post('pp_f6_6'),
		  'pp_f7_1' => $this->input->post('pp_f7_1'),
		  'pp_f7_2' => $this->input->post('pp_f7_2'),
		  'pp_f7_3' => $this->input->post('pp_f7_3'),
		  'pp_f7_4' => $this->input->post('pp_f7_4'),
		  'pp_f8_1' => $this->input->post('pp_f8_1'),
		  'pp_f8_2' => $this->input->post('pp_f8_2'),
		  'pp_f8_3' => $this->input->post('pp_f8_3'),
		  'pp_f8_4' => $this->input->post('pp_f8_4'),
		  'pp_f8_5' => $this->input->post('pp_f8_5'),
		  'pp_f8_6' => $this->input->post('pp_f8_6'),
		  'pp_f8_7' => $this->input->post('pp_f8_7'),
		  'pp_f8_8' => $this->input->post('pp_f8_8'),
		  'pp_f8_9' => $this->input->post('pp_f8_9'),
		  'pp_f8_10' => $this->input->post('pp_f8_10'),
		  'pp_f8_11' => $this->input->post('pp_f8_11'),
		  'pp_f8_12' => $this->input->post('pp_f8_12'),
		  'pp_f9_1' => $this->input->post('pp_f9_1'),
		  'pp_f9_2' => $this->input->post('pp_f9_2'),
		  'pp_f9_3' => $this->input->post('pp_f9_3'),
		  'pp_f9_4' => $this->input->post('pp_f9_4'),
		  'pp_f10_1' => $this->input->post('pp_f10_1'),
		  'pp_f10_2' => $this->input->post('pp_f10_2'),
		  'pp_f10_3' => $this->input->post('pp_f10_3'),
		  'pp_f10_4' => $this->input->post('pp_f10_4'),
		  'pp_f10_5' => $this->input->post('pp_f10_5'),
		  'pp_f10_6' => $this->input->post('pp_f10_6'),
		  'pp_f10_7' => $this->input->post('pp_f10_7'),
		  'pp_f11_1' => $this->input->post('pp_f11_1'),
		  'pp_f11_2' => $this->input->post('pp_f11_2'),
		  'pp_f11_3' => $this->input->post('pp_f11_3'),
		  'pp_f11_4' => $this->input->post('pp_f11_4'),
		  'pp_f12_1' => $this->input->post('pp_f12_1'),
		  'pp_f12_2' => $this->input->post('pp_f12_2'),
		  'pp_f12_3' => $this->input->post('pp_f12_3'),
		  'pp_f13_1' => $this->input->post('pp_f13_1'),
		  'pp_ct2_1' => $this->input->post('pp_ct2_1'),
		  'pp_ct2_2' => $this->input->post('pp_ct2_2'),
		  'pp_ct2_3' => $this->input->post('pp_ct2_3'),
		  'pp_ct2_4' => $this->input->post('pp_ct2_4'),
		  'pp_ct2_5' => $this->input->post('pp_ct2_5'),
		  'pp_ct3_1' => $this->input->post('pp_ct3_1'),
		  'pp_ct4_1' => $this->input->post('pp_ct4_1'),
		  'pp_ct4_2' => $this->input->post('pp_ct4_2'),
		  'pp_ct4_3' => $this->input->post('pp_ct4_3'),
		  'pp_ct4_4' => $this->input->post('pp_ct4_4'),
		  'pp_ct4_5' => $this->input->post('pp_ct4_5'),
		  'pp_ct4_6' => $this->input->post('pp_ct4_6'),
		  'pp_ct5_1' => $this->input->post('pp_ct5_1'),
		  'pp_ct6_1' => $this->input->post('pp_ct6_1'),
		  'pp_ct7_1' => $this->input->post('pp_ct7_1'),
		  'pp_ct7_2' => $this->input->post('pp_ct7_2'),
		  'pp_ct7_3' => $this->input->post('pp_ct7_3'),
		  'pp_ct7_4' => $this->input->post('pp_ct7_4'),
		  'pp_ct8_1' => $this->input->post('pp_ct8_1'),
		  'pp_ct8_2' => $this->input->post('pp_ct8_2'),
		  'pp_ct8_3' => $this->input->post('pp_ct8_3'),
		  'pp_ct8_4' => $this->input->post('pp_ct8_4'),
		  'pp_ct8_5' => $this->input->post('pp_ct8_5'),
		  'pp_ct8_6' => $this->input->post('pp_ct8_6'),
		  'pp_ct9_1' => $this->input->post('pp_ct9_1'),
		  'pp_ct9_2' => $this->input->post('pp_ct9_2'),
		  'pp_ct9_3' => $this->input->post('pp_ct9_3'),
		  'pp_ct9_4' => $this->input->post('pp_ct9_4'),
		  'pp_ct9_5' => $this->input->post('pp_ct9_5'),
		  'pp_ct9_6' => $this->input->post('pp_ct9_6'),
		  'pp_ct9_7' => $this->input->post('pp_ct9_7'),
		  'pp_ct9_8' => $this->input->post('pp_ct9_8'),
		  'pp_ct9_9' => $this->input->post('pp_ct9_9'),
		  'pp_ct10_1' => $this->input->post('pp_ct10_1'),
		  'pp_ct11_1' => $this->input->post('pp_ct11_1'),
		  'pp_ct11_2' => $this->input->post('pp_ct11_2'),
		  'pp_ct11_3' => $this->input->post('pp_ct11_3'),
		  'pp_ct11_4' => $this->input->post('pp_ct11_4'),
		  'pp_ct11_5' => $this->input->post('pp_ct11_5'),
		  'pp_ct11_6' => $this->input->post('pp_ct11_6'),
		  'pp_ct11_7' => $this->input->post('pp_ct11_7'),
		  'pp_ct11_8' => $this->input->post('pp_ct11_8'),
		  'pp_ct11_9' => $this->input->post('pp_ct11_9'),
		  'pp_ct11_10' => $this->input->post('pp_ct11_10'),
		  'pp_ct11_11' => $this->input->post('pp_ct11_11'),
		  'pp_ct11_12' => $this->input->post('pp_ct11_12'),
		  'pp_ct11_13' => $this->input->post('pp_ct11_13'),
		  'pp_ct11_14' => $this->input->post('pp_ct11_14'),
		  'pp_ct11_15' => $this->input->post('pp_ct11_15'),
		  'pp_ct11_16' => $this->input->post('pp_ct11_16'),
		  'pp_ct12_1' => $this->input->post('pp_ct12_1'),
		  'pp_ct12_2' => $this->input->post('pp_ct12_2'),
		  'pp_ct12_3' => $this->input->post('pp_ct12_3'),
		  'pp_ct12_4' => $this->input->post('pp_ct12_4'),
		  'pp_ct12_5' => $this->input->post('pp_ct12_5'),
		  'pp_ct12_6' => $this->input->post('pp_ct12_6'),
		  'pp_ct12_7' => $this->input->post('pp_ct12_7'),
		  'pp_ct12_8' => $this->input->post('pp_ct12_8'),
		  'pp_ct12_9' => $this->input->post('pp_ct12_9'),
		  'pp_ct12_10' => $this->input->post('pp_ct12_10'),
		  'pp_ct12_11' => $this->input->post('pp_ct12_11'),
		  'pp_ct12_12' => $this->input->post('pp_ct12_12'),
		  'pp_ct12_13' => $this->input->post('pp_ct12_13'),
		  'pp_ct13_1' => $this->input->post('pp_ct13_1'),
		  'pp_ct13_2' => $this->input->post('pp_ct13_2'),
		  'pp_ct13_3' => $this->input->post('pp_ct13_3'),
		  'pp_ct13_4' => $this->input->post('pp_ct13_4'),
		  'pp_ct13_5' => $this->input->post('pp_ct13_5'),
		  'pp_ct13_6' => $this->input->post('pp_ct13_6'),
		  'pp_ct13_7' => $this->input->post('pp_ct13_7'),
		  'pp_ct13_8' => $this->input->post('pp_ct13_8'),
		  'pp_ct13_9' => $this->input->post('pp_ct13_9'),
		  'pp_ct13_10' => $this->input->post('pp_ct13_10'),
		  'pp_ct13_11' => $this->input->post('pp_ct13_11'),
		  'pp_ct13_12' => $this->input->post('pp_ct13_12'),
		  'pp_ct13_13' => $this->input->post('pp_ct13_13'),
		  'pp_ct13_14' => $this->input->post('pp_ct13_14'),
		  'pp_ct14_1' => $this->input->post('pp_ct14_1'),
		  'pp_ct14_2' => $this->input->post('pp_ct14_2'),
		  'pp_ct15_1' => $this->input->post('pp_ct15_1'),
		  'pp_ct15_2' => $this->input->post('pp_ct15_2'),
		  'pp_ct15_3' => $this->input->post('pp_ct15_3'),
		  'pp_mo_1' => $this->input->post('pp_mo_1'),
		  'pp_mo_2' => $this->input->post('pp_mo_2'),
		  'pp_mo_3' => $this->input->post('pp_mo_3'),
		  'pp_mo_4' => $this->input->post('pp_mo_4'),
		  'pp_mo_5' => $this->input->post('pp_mo_5'),
		  'pp_mo_6' => $this->input->post('pp_mo_6'),
		  'pp_mo_7' => $this->input->post('pp_mo_7'),
		  'pp_mo_8' => $this->input->post('pp_mo_8'),
		  'pp_mo_9' => $this->input->post('pp_mo_9'),
		  'pp_mo_10' => $this->input->post('pp_mo_10'),
		  'pp_c1_1' => $this->input->post('pp_c1_1'),
		  'pp_c1_2' => $this->input->post('pp_c1_2'),
		  'pp_c1_3' => $this->input->post('pp_c1_3'),
		  'pp_c2_1' => $this->input->post('pp_c2_1'),
		  'pp_c2_2' => $this->input->post('pp_c2_2'),
		  'pp_c2_3' => $this->input->post('pp_c2_3'),
		  'pp_c3_1' => $this->input->post('pp_c3_1'),
		  'pp_pc1_1' => $this->input->post('pp_pc1_1'),
		  'pp_pc1_2' => $this->input->post('pp_pc1_2'),
		  'pp_pc2_1' => $this->input->post('pp_pc2_1'),
		  'pp_pc2_2' => $this->input->post('pp_pc2_2'),
		  'pp_pc3' => $this->input->post('pp_pc3'),
		  'pp_pc4_1' => $this->input->post('pp_pc4_1'),
		  'pp_pc4_2' => $this->input->post('pp_pc4_2'),
		  'pp_pc5_1' => $this->input->post('pp_pc5_1'),
		  'pp_pc5_2' => $this->input->post('pp_pc5_2'),
		  'pp_pc6' => $this->input->post('pp_pc6')			
		));
		
		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});
    		");
		redirect('meeting/sign/'.$id,'refresh');
	}

	public function subform_pl($id)
	{
		$this->db->where('scheduling_id', $id);
		$this->db->update('meeting_pl', array(
		  'date_pl' => $this->input->post('date_pl'),
		  'pl_mp1_1' => $this->input->post('pl_mp1_1'),
		  'pl_mp1_2' => $this->input->post('pl_mp1_2'),
		  'pl_mp1_3' => $this->input->post('pl_mp1_3'),
		  'pl_mp1_4' => $this->input->post('pl_mp1_4'),
		  'pl_mp1_5' => $this->input->post('pl_mp1_5'),
		  'pl_mp1_6' => $this->input->post('pl_mp1_6'),
		  'pl_mp1_7' => $this->input->post('pl_mp1_7'),
		  'pl_mp1_8' => $this->input->post('pl_mp1_8'),
		  'pl_mp1_9' => $this->input->post('pl_mp1_9'),
		  'pl_mp1_10' => $this->input->post('pl_mp1_10'),
		  'pl_mp1_11' => $this->input->post('pl_mp1_11'),
		  'pl_mp1_12' => $this->input->post('pl_mp1_12'),
		  'pl_mp2_1' => $this->input->post('pl_mp2_1'),
		  'pl_mp2_2' => $this->input->post('pl_mp2_2'),
		  'pl_mp2_3' => $this->input->post('pl_mp2_3'),
		  'pl_mp3_1' => $this->input->post('pl_mp3_1'),
		  'pl_mp3_2' => $this->input->post('pl_mp3_2'),
		  'pl_mp3_3' => $this->input->post('pl_mp3_3'),
		  'pl_mp3_4' => $this->input->post('pl_mp3_4'),
		  'pl_mp4_1' => $this->input->post('pl_mp4_1'),
		  'pl_mp4_2' => $this->input->post('pl_mp4_2'),
		  'pl_mp5_1' => $this->input->post('pl_mp5_1'),
		  'pl_mp5_2' => $this->input->post('pl_mp5_2'),
		  'pl_mp5_3' => $this->input->post('pl_mp5_3'),
		  'pl_mp5_4' => $this->input->post('pl_mp5_4'),
		  'pl_mp5_5' => $this->input->post('pl_mp5_5'),
		  'pl_mp5_6' => $this->input->post('pl_mp5_6'),
		  'pl_mp6_1' => $this->input->post('pl_mp6_1'),
		  'pl_mp6_2' => $this->input->post('pl_mp6_2'),
		  'pl_mp7_1' => $this->input->post('pl_mp7_1'),
		  'pl_mp7_2' => $this->input->post('pl_mp7_2'),
		  'pl_mp7_3' => $this->input->post('pl_mp7_3'),
		  'pl_mp7_4' => $this->input->post('pl_mp7_4'),
		  'pl_mp8_1' => $this->input->post('pl_mp8_1'),
		  'pl_mp8_2' => $this->input->post('pl_mp8_2'),
		  'pl_mp8_3' => $this->input->post('pl_mp8_3'),
		  'pl_mp8_4' => $this->input->post('pl_mp8_4'),
		  'pl_mp9_1' => $this->input->post('pl_mp9_1'),
		  'pl_mp9_2' => $this->input->post('pl_mp9_2'),
		  'pl_mp9_3' => $this->input->post('pl_mp9_3'),
		  'pl_mp9_4' => $this->input->post('pl_mp9_4'),
		  'pl_mp9_5' => $this->input->post('pl_mp9_5'),
		  'pl_mp9_6' => $this->input->post('pl_mp9_6'),
		  'pl_mp9_7' => $this->input->post('pl_mp9_7'),
		  'pl_mp9_8' => $this->input->post('pl_mp9_8'),
		  'pl_mp9_9' => $this->input->post('pl_mp9_9'),
		  'pl_mp9_10' => $this->input->post('pl_mp9_10'),
		  'pl_mp10_1' => $this->input->post('pl_mp10_1'),
		  'pl_me1_1' => $this->input->post('pl_me1_1'),
		  'pl_me1_2' => $this->input->post('pl_me1_2'),
		  'pl_me1_3' => $this->input->post('pl_me1_3'),
		  'pl_me1_4' => $this->input->post('pl_me1_4'),
		  'pl_me1_5' => $this->input->post('pl_me1_5'),
		  'pl_me1_6' => $this->input->post('pl_me1_6'),
		  'pl_me1_7' => $this->input->post('pl_me1_7'),
		  'pl_me1_8' => $this->input->post('pl_me1_8'),
		  'pl_me1_9' => $this->input->post('pl_me1_9'),
		  'pl_me1_10' => $this->input->post('pl_me1_10'),
		  'pl_me1_11' => $this->input->post('pl_me1_11'),
		  'pl_me1_12' => $this->input->post('pl_me1_12'),
		  'pl_me2_1' => $this->input->post('pl_me2_1'),
		  'pl_me2_2' => $this->input->post('pl_me2_2'),
		  'pl_me2_3' => $this->input->post('pl_me2_3'),
		  'pl_me3_1' => $this->input->post('pl_me3_1'),
		  'pl_me3_2' => $this->input->post('pl_me3_2'),
		  'pl_me3_3' => $this->input->post('pl_me3_3'),
		  'pl_me3_4' => $this->input->post('pl_me3_4'),
		  'pl_me3_5' => $this->input->post('pl_me3_5'),
		  'pl_me3_6' => $this->input->post('pl_me3_6'),
		  'pl_me3_7' => $this->input->post('pl_me3_7'),
		  'pl_me3_8' => $this->input->post('pl_me3_8'),
		  'pl_me3_9' => $this->input->post('pl_me3_9'),
		  'pl_me3_10' => $this->input->post('pl_me3_10'),
		  'pl_me3_11' => $this->input->post('pl_me3_11'),
		  'pl_me3_12' => $this->input->post('pl_me3_12'),
		  'pl_me4_1' => $this->input->post('pl_me4_1'),
		  'pl_me4_2' => $this->input->post('pl_me4_2'),
		  'pl_me4_3' => $this->input->post('pl_me4_3'),
		  'pl_me4_4' => $this->input->post('pl_me4_4'),
		  'pl_me4_5' => $this->input->post('pl_me4_5'),
		  'pl_me4_6' => $this->input->post('pl_me4_6'),
		  'pl_me4_7' => $this->input->post('pl_me4_7'),
		  'pl_me4_8' => $this->input->post('pl_me4_8'),
		  'pl_me4_9' => $this->input->post('pl_me4_9'),
		  'pl_me5_1' => $this->input->post('pl_me5_1'),
		  'pl_ma1_1' => $this->input->post('pl_ma1_1'),
		  'pl_ma1_2' => $this->input->post('pl_ma1_2'),
		  'pl_ma1_3' => $this->input->post('pl_ma1_3'),
		  'pl_ma1_4' => $this->input->post('pl_ma1_4'),
		  'pl_ma1_5' => $this->input->post('pl_ma1_5'),
		  'pl_ma1_6' => $this->input->post('pl_ma1_6'),
		  'pl_ma1_7' => $this->input->post('pl_ma1_7'),
		  'pl_ma1_8' => $this->input->post('pl_ma1_8'),
		  'pl_ma1_9' => $this->input->post('pl_ma1_9'),
		  'pl_ma2_1' => $this->input->post('pl_ma2_1'),
		  'pl_ma2_2' => $this->input->post('pl_ma2_2'),
		  'pl_ma2_3' => $this->input->post('pl_ma2_3'),
		  'pl_ma2_4' => $this->input->post('pl_ma2_4'),
		  'pl_ma2_5' => $this->input->post('pl_ma2_5'),
		  'pl_ma2_6' => $this->input->post('pl_ma2_6'),
		  'pl_ma2_7' => $this->input->post('pl_ma2_7'),
		  'pl_ma2_8' => $this->input->post('pl_ma2_8'),
		  'pl_ma2_9' => $this->input->post('pl_ma2_9'),
		  'pl_ma2_10' => $this->input->post('pl_ma2_10'),
		  'pl_ma2_11' => $this->input->post('pl_ma2_11'),
		  'pl_ma2_12' => $this->input->post('pl_ma2_12'),
		  'pl_ma2_13' => $this->input->post('pl_ma2_13'),
		  'pl_ma2_14' => $this->input->post('pl_ma2_14'),
		  'pl_ma2_15' => $this->input->post('pl_ma2_15'),
		  'pl_ma2_16' => $this->input->post('pl_ma2_16'),
		  'pl_ma2_17' => $this->input->post('pl_ma2_17'),
		  'pl_ma2_18' => $this->input->post('pl_ma2_18'),
		  'pl_ma2_19' => $this->input->post('pl_ma2_19'),
		  'pl_ma2_20' => $this->input->post('pl_ma2_20'),
		  'pl_ma3_1' => $this->input->post('pl_ma3_1'),
		  'pl_ma3_2' => $this->input->post('pl_ma3_2'),
		  'pl_ma4_1' => $this->input->post('pl_ma4_1'),
		  'pl_ma4_2' => $this->input->post('pl_ma4_2'),
		  'pl_ma4_3' => $this->input->post('pl_ma4_3'),
		  'pl_ma5_1' => $this->input->post('pl_ma5_1'),
		  'pl_mu1_1' => $this->input->post('pl_mu1_1'),
		  'pl_mu1_2' => $this->input->post('pl_mu1_2'),
		  'pl_mu1_3' => $this->input->post('pl_mu1_3'),
		  'pl_mu1_4' => $this->input->post('pl_mu1_4'),
		  'pl_mu1_5' => $this->input->post('pl_mu1_5'),
		  'pl_mu1_6' => $this->input->post('pl_mu1_6'),
		  'pl_mu1_7' => $this->input->post('pl_mu1_7'),
		  'pl_mu1_8' => $this->input->post('pl_mu1_8'),
		  'pl_mu1_9' => $this->input->post('pl_mu1_9'),
		  'pl_mu1_10' => $this->input->post('pl_mu1_10'),
		  'pl_mu1_11' => $this->input->post('pl_mu1_11'),
		  'pl_mu1_12' => $this->input->post('pl_mu1_12'),
		  'pl_mu2_1' => $this->input->post('pl_mu2_1'),
		  'pl_mu2_2' => $this->input->post('pl_mu2_2'),
		  'pl_mu2_3' => $this->input->post('pl_mu2_3'),
		  'pl_mu2_4' => $this->input->post('pl_mu2_4'),
		  'pl_mu2_5' => $this->input->post('pl_mu2_5'),
		  'pl_mu3_1' => $this->input->post('pl_mu3_1'),
		  'pl_mu4_1' => $this->input->post('pl_mu4_1'),
		  'pl_mu4_2' => $this->input->post('pl_mu4_2'),
		  'pl_mu4_3' => $this->input->post('pl_mu4_3'),
		  'pl_mu4_4' => $this->input->post('pl_mu4_4'),
		  'pl_mu4_5' => $this->input->post('pl_mu4_5'),
		  'pl_mu4_6' => $this->input->post('pl_mu4_6'),
		  'pl_mu5_1' => $this->input->post('pl_mu5_1'),
		  'pl_mu5_2' => $this->input->post('pl_mu5_2'),
		  'pl_mu5_3' => $this->input->post('pl_mu5_3'),
		  'pl_mu5_4' => $this->input->post('pl_mu5_4'),
		  'pl_mu5_5' => $this->input->post('pl_mu5_5'),
		  'pl_mu5_6' => $this->input->post('pl_mu5_6'),
		  'pl_mu5_7' => $this->input->post('pl_mu5_7'),
		  'pl_mu5_8' => $this->input->post('pl_mu5_8'),
		  'pl_mu6_1' => $this->input->post('pl_mu6_1'),
		  'pl_mu6_2' => $this->input->post('pl_mu6_2'),
		  'pl_mu6_3' => $this->input->post('pl_mu6_3'),
		  'pl_mu6_4' => $this->input->post('pl_mu6_4'),
		  'pl_mu6_5' => $this->input->post('pl_mu6_5'),
		  'pl_mu6_6' => $this->input->post('pl_mu6_6')			
		));

		$this->db->where('scheduling_id', $id);
		$this->db->update('meeting_pl2', array(
		  'pl_ga1_1' => $this->input->post('pl_ga1_1'),
		  'pl_ga1_2' => $this->input->post('pl_ga1_2'),
		  'pl_ga1_3' => $this->input->post('pl_ga1_3'),
		  'pl_ga1_4' => $this->input->post('pl_ga1_4'),
		  'pl_ga1_5' => $this->input->post('pl_ga1_5'),
		  'pl_ga1_6' => $this->input->post('pl_ga1_6'),
		  'pl_ga1_7' => $this->input->post('pl_ga1_7'),
		  'pl_ga1_8' => $this->input->post('pl_ga1_8'),
		  'pl_ga1_9' => $this->input->post('pl_ga1_9'),
		  'pl_ga1_10' => $this->input->post('pl_ga1_10'),
		  'pl_ga1_11' => $this->input->post('pl_ga1_11'),
		  'pl_ga1_12' => $this->input->post('pl_ga1_12'),
		  'pl_ga1_13' => $this->input->post('pl_ga1_13'),
		  'pl_ga1_14' => $this->input->post('pl_ga1_14'),
		  'pl_ga1_15' => $this->input->post('pl_ga1_15'),
		  'pl_ga1_16' => $this->input->post('pl_ga1_16'),
		  'pl_ga1_17' => $this->input->post('pl_ga1_17'),
		  'pl_ga1_18' => $this->input->post('pl_ga1_18'),
		  'pl_ga1_19' => $this->input->post('pl_ga1_19'),
		  'pl_ga1_20' => $this->input->post('pl_ga1_20'),
		  'pl_ga1_21' => $this->input->post('pl_ga1_21'),
		  'pl_ga2_1' => $this->input->post('pl_ga2_1'),
		  'pl_ga2_2' => $this->input->post('pl_ga2_2'),
		  'pl_ga2_3' => $this->input->post('pl_ga2_3'),
		  'pl_ga2_4' => $this->input->post('pl_ga2_4'),
		  'pl_ga3_1' => $this->input->post('pl_ga3_1'),
		  'pl_ga3_2' => $this->input->post('pl_ga3_2'),
		  'pl_ga4_1' => $this->input->post('pl_ga4_1'),
		  'pl_ga4_2' => $this->input->post('pl_ga4_2'),
		  'pl_ga4_3' => $this->input->post('pl_ga4_3'),
		  'pl_ga4_4' => $this->input->post('pl_ga4_4'),
		  'pl_ga4_5' => $this->input->post('pl_ga4_5'),
		  'pl_ga4_6' => $this->input->post('pl_ga4_6'),
		  'pl_ga4_7' => $this->input->post('pl_ga4_7'),
		  'pl_ga4_8' => $this->input->post('pl_ga4_8'),
		  'pl_ga4_9' => $this->input->post('pl_ga4_9'),
		  'pl_ga4_10' => $this->input->post('pl_ga4_10'),
		  'pl_ga4_11' => $this->input->post('pl_ga4_11'),
		  'pl_ga4_12' => $this->input->post('pl_ga4_12'),
		  'pl_ga4_13' => $this->input->post('pl_ga4_13'),
		  'pl_ga4_14' => $this->input->post('pl_ga4_14'),
		  'pl_ga4_15' => $this->input->post('pl_ga4_15'),
		  'pl_ga4_16' => $this->input->post('pl_ga4_16'),
		  'pl_ga4_17' => $this->input->post('pl_ga4_17'),
		  'pl_ga4_18' => $this->input->post('pl_ga4_18'),
		  'pl_ga4_19' => $this->input->post('pl_ga4_19'),
		  'pl_ga4_20' => $this->input->post('pl_ga4_20'),
		  'pl_ga5_1' => $this->input->post('pl_ga5_1'),
		  'pl_ga6_1' => $this->input->post('pl_ga6_1'),
		  'pl_cu1_1' => $this->input->post('pl_cu1_1'),
		  'pl_cu1_2' => $this->input->post('pl_cu1_2'),
		  'pl_cu1_3' => $this->input->post('pl_cu1_3'),
		  'pl_cu1_4' => $this->input->post('pl_cu1_4'),
		  'pl_cu1_5' => $this->input->post('pl_cu1_5'),
		  'pl_cu1_6' => $this->input->post('pl_cu1_6'),
		  'pl_cu1_7' => $this->input->post('pl_cu1_7'),
		  'pl_cu1_8' => $this->input->post('pl_cu1_8'),
		  'pl_cu1_9' => $this->input->post('pl_cu1_9'),
		  'pl_cu2_1' => $this->input->post('pl_cu2_1'),
		  'pl_cu2_2' => $this->input->post('pl_cu2_2'),
		  'pl_cu2_3' => $this->input->post('pl_cu2_3'),
		  'pl_cu2_4' => $this->input->post('pl_cu2_4'),
		  'pl_cu2_5' => $this->input->post('pl_cu2_5'),
		  'pl_cu2_6' => $this->input->post('pl_cu2_6'),
		  'pl_cu3_1' => $this->input->post('pl_cu3_1'),
		  'pl_cu3_2' => $this->input->post('pl_cu3_2'),
		  'pl_cu3_3' => $this->input->post('pl_cu3_3'),
		  'pl_cu3_4' => $this->input->post('pl_cu3_4'),
		  'pl_cu4_1' => $this->input->post('pl_cu4_1'),
		  'pl_cu4_2' => $this->input->post('pl_cu4_2'),
		  'pl_cu4_3' => $this->input->post('pl_cu4_3'),
		  'pl_cu4_4' => $this->input->post('pl_cu4_4'),
		  'pl_cu5_1' => $this->input->post('pl_cu5_1'),
		  'pl_cu5_2' => $this->input->post('pl_cu5_2'),
		  'pl_cu5_3' => $this->input->post('pl_cu5_3'),
		  'pl_cu5_4' => $this->input->post('pl_cu5_4'),
		  'pl_cu5_5' => $this->input->post('pl_cu5_5'),
		  'pl_cu5_6' => $this->input->post('pl_cu5_6'),
		  'pl_cu5_7' => $this->input->post('pl_cu5_7'),
		  'pl_cu5_8' => $this->input->post('pl_cu5_8'),
		  'pl_cu6_1' => $this->input->post('pl_cu6_1'),
		  'pl_cu6_2' => $this->input->post('pl_cu6_2'),
		  'pl_cu6_3' => $this->input->post('pl_cu6_3'),
		  'pl_cu6_4' => $this->input->post('pl_cu6_4'),
		  'pl_cu6_5' => $this->input->post('pl_cu6_5'),
		  'pl_cu6_6' => $this->input->post('pl_cu6_6'),
		  'pl_cu6_7' => $this->input->post('pl_cu6_7'),
		  'pl_cu6_8' => $this->input->post('pl_cu6_8'),
		  'pl_cu6_9' => $this->input->post('pl_cu6_9'),
		  'pl_cu7_1' => $this->input->post('pl_cu7_1'),
		  'pl_cu7_2' => $this->input->post('pl_cu7_2'),
		  'pl_cu7_3' => $this->input->post('pl_cu7_3'),
		  'pl_cu7_4' => $this->input->post('pl_cu7_4'),
		  'pl_cu7_5' => $this->input->post('pl_cu7_5'),
		  'pl_cu8_1' => $this->input->post('pl_cu8_1'),
		  'pl_cu8_2' => $this->input->post('pl_cu8_2'),
		  'pl_cu9_1' => $this->input->post('pl_cu9_1'),
		  'pl_cu10_1' => $this->input->post('pl_cu10_1'),
		  'pl_cu11_1' => $this->input->post('pl_cu11_1'),
		  'pl_cu11_2' => $this->input->post('pl_cu11_2'),
		  'pl_cu11_3' => $this->input->post('pl_cu11_3'),
		  'pl_cu11_4' => $this->input->post('pl_cu11_4'),
		  'pl_cu12_1' => $this->input->post('pl_cu12_1'),
		  'pl_cu12_2' => $this->input->post('pl_cu12_2'),
		  'pl_cu12_3' => $this->input->post('pl_cu12_3'),
		  'pl_mo1_1' => $this->input->post('pl_mo1_1'),
		  'pl_mo1_2' => $this->input->post('pl_mo1_2'),
		  'pl_mo1_3' => $this->input->post('pl_mo1_3'),
		  'pl_mo1_4' => $this->input->post('pl_mo1_4'),
		  'pl_mo1_5' => $this->input->post('pl_mo1_5'),
		  'pl_mo1_6' => $this->input->post('pl_mo1_6'),
		  'pl_mo1_7' => $this->input->post('pl_mo1_7'),
		  'pl_mo1_8' => $this->input->post('pl_mo1_8'),
		  'pl_mo1_9' => $this->input->post('pl_mo1_9'),
		  'pl_mo2_1' => $this->input->post('pl_mo2_1'),
		  'pl_mo2_2' => $this->input->post('pl_mo2_2'),
		  'pl_mo2_3' => $this->input->post('pl_mo2_3'),
		  'pl_mo2_4' => $this->input->post('pl_mo2_4'),
		  'pl_mo2_5' => $this->input->post('pl_mo2_5'),
		  'pl_mo2_6' => $this->input->post('pl_mo2_6'),
		  'pl_mo2_7' => $this->input->post('pl_mo2_7'),
		  'pl_mo2_8' => $this->input->post('pl_mo2_8'),
		  'pl_mo2_9' => $this->input->post('pl_mo2_9'),
		  'pl_mo2_10' => $this->input->post('pl_mo2_10'),
		  'pl_mo2_11' => $this->input->post('pl_mo2_11'),
		  'pl_mo2_12' => $this->input->post('pl_mo2_12'),
		  'pl_ws1_1' => $this->input->post('pl_ws1_1'),
		  'pl_ws1_2' => $this->input->post('pl_ws1_2'),
		  'pl_ws1_3' => $this->input->post('pl_ws1_3'),
		  'pl_ws1_4' => $this->input->post('pl_ws1_4'),
		  'pl_ws1_5' => $this->input->post('pl_ws1_5'),
		  'pl_ws1_6' => $this->input->post('pl_ws1_6'),
		  'pl_ws2_1' => $this->input->post('pl_ws2_1'),
		  'pl_ws2_2' => $this->input->post('pl_ws2_2'),
		  'pl_ws3_1' => $this->input->post('pl_ws3_1'),
		  'pl_ws4_1' => $this->input->post('pl_ws4_1'),
		  'pl_ws5_1' => $this->input->post('pl_ws5_1'),
		  'pl_ws6_1' => $this->input->post('pl_ws6_1'),
		  'pl_ws7_1' => $this->input->post('pl_ws7_1'),
		  'pl_qa1_1' => $this->input->post('pl_qa1_1'),
		  'pl_qa1_2' => $this->input->post('pl_qa1_2'),
		  'pl_qa1_3' => $this->input->post('pl_qa1_3'),
		  'pl_qa1_4' => $this->input->post('pl_qa1_4'),
		  'pl_qa1_5' => $this->input->post('pl_qa1_5'),
		  'pl_qa2_1' => $this->input->post('pl_qa2_1'),
		  'pl_qa2_2' => $this->input->post('pl_qa2_2'),
		  'pl_qa2_3' => $this->input->post('pl_qa2_3'),
		  'pl_qa2_4' => $this->input->post('pl_qa2_4'),
		  'pl_pc1_1' => $this->input->post('pl_pc1_1'),
		  'pl_pc1_2' => $this->input->post('pl_pc1_2'),
		  'pl_pc1_3' => $this->input->post('pl_pc1_3'),
		  'pl_pc1_4' => $this->input->post('pl_pc1_4'),
		  'pl_pc1_5' => $this->input->post('pl_pc1_5'),
		  'pl_pc1_6' => $this->input->post('pl_pc1_6'),
		  'pl_pc1_7' => $this->input->post('pl_pc1_7'),
		  'pl_pc1_8' => $this->input->post('pl_pc1_8'),
		  'pl_pc1_9' => $this->input->post('pl_pc1_9'),
		  'pl_pc1_10' => $this->input->post('pl_pc1_10'),
		  'pl_pc1_11' => $this->input->post('pl_pc1_11'),
		  'pl_pc1_12' => $this->input->post('pl_pc1_12'),
		  'pl_pc2_1' => $this->input->post('pl_pc2_1'),
		  'pl_pc2_2' => $this->input->post('pl_pc2_2'),
		  'pl_pc2_3' => $this->input->post('pl_pc2_3'),
		  'pl_pc2_4' => $this->input->post('pl_pc2_4'),
		  'pl_pc2_5' => $this->input->post('pl_pc2_5'),
		  'pl_pc2_6' => $this->input->post('pl_pc2_6'),
		  'pl_pc2_7' => $this->input->post('pl_pc2_7'),
		  'pl_pc2_8' => $this->input->post('pl_pc2_8'),
		  'pl_pc2_9' => $this->input->post('pl_pc2_9'),
		  'pl_pc3_1' => $this->input->post('pl_pc3_1'),
		  'pl_pc3_2' => $this->input->post('pl_pc3_2'),
		  'pl_pc3_3' => $this->input->post('pl_pc3_3'),
		  'pl_pc3_4' => $this->input->post('pl_pc3_4'),
		  'pl_pc3_5' => $this->input->post('pl_pc3_5'),
		  'pl_pc3_6' => $this->input->post('pl_pc3_6'),
		  'pl_pc3_7' => $this->input->post('pl_pc3_7'),
		  'pl_pc3_8' => $this->input->post('pl_pc3_8'),
		  'pl_pc3_9' => $this->input->post('pl_pc3_9'),
		  'pl_pc3_10' => $this->input->post('pl_pc3_10'),
		  'pl_pc3_11' => $this->input->post('pl_pc3_11'),
		  'pl_pc3_12' => $this->input->post('pl_pc3_12'),
		  'pl_cb1' => $this->input->post('pl_cb1'),
		  'pl_cb2' => $this->input->post('pl_cb2'),
		  'pl_cb3' => $this->input->post('pl_cb3'),
		  'pl_cb4' => $this->input->post('pl_cb4'),
		  'pl_cb5' => $this->input->post('pl_cb5'),
		  'pl_cb6' => $this->input->post('pl_cb6'),
		  'pl_cb7' => $this->input->post('pl_cb7'),
		  'pl_cb8' => $this->input->post('pl_cb8')			
		));

		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});
    		");
		redirect('meeting/sign/'.$id,'refresh');

	}

	public function subform_mast($id)
	{
		$config['upload_path']          = './assets/photos/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|PNG|JPEG';
        $config['max_size']             = 2048;
        $config['max_width']            = 3000;
        $config['max_height']           = 3000;
        $config['encrypt_name'] 		= true;         

        $this->load->library('upload', $config);

        if (!empty($_FILES['m_file_1']['name'])) {
	        if ( ! $this->upload->do_upload('m_file_1')){
	            $error = array('error' => $this->upload->display_errors());	         
				echo  $error['error'];   	            
	        }else{	            
	            $this->db->where('scheduling_id', $id);
	            $this->db->update('meeting_mast', array(
	            	'm_file_1' => $this->upload->file_name
	            ));
	        }
	    }

	    if (!empty($_FILES['m_file_2']['name'])) {
	        if ( ! $this->upload->do_upload('m_file_2')){
	            $error = array('error' => $this->upload->display_errors());	         
				echo  $error['error'];   	            
	        }else{	            
	            $this->db->where('scheduling_id', $id);
	            $this->db->update('meeting_mast', array(
	            	'm_file_2' => $this->upload->file_name
	            ));
	        }
	    }

		$this->db->where('scheduling_id', $id);	
		$this->db->update('meeting_mast', array(
			  'meet_date' => $this->input->post('meet_date'),
			  'cpo' => $this->input->post('cpo'),
			  'qty' => $this->input->post('qty'),
			  'gac' => $this->input->post('gac'),
			  'pro_desc' => $this->input->post('pro_desc'),
			  'fabric_desc' => $this->input->post('fabric_desc'),
			  'm_a1_1' => $this->input->post('m_a1_1'),
			  'm_a1_2' => $this->input->post('m_a1_2'),
			  'm_a1_3' => $this->input->post('m_a1_3'),
			  'm_a2_1' => $this->input->post('m_a2_1'),
			  'm_a2_2' => $this->input->post('m_a2_2'),
			  'm_a2_3' => $this->input->post('m_a2_3'),
			  'm_a3_1' => $this->input->post('m_a3_1'),
			  'm_a3_2' => $this->input->post('m_a3_2'),
			  'm_a3_3' => $this->input->post('m_a3_3'),			  
			  'm_b1_1_1' => $this->input->post('m_b1_1_1'),
			  'm_b1_1_2' => $this->input->post('m_b1_1_2'),
			  'm_b1_1_3' => $this->input->post('m_b1_1_3'),
			  'm_b1_1_4' => $this->input->post('m_b1_1_4'),
			  'm_b1_2_1' => $this->input->post('m_b1_2_1'),
			  'm_b1_2_2' => $this->input->post('m_b1_2_2'),
			  'm_b1_2_3' => $this->input->post('m_b1_2_3'),
			  'm_b1_2_4' => $this->input->post('m_b1_2_4'),
			  'm_b1_3_1' => $this->input->post('m_b1_3_1'),
			  'm_b1_3_2' => $this->input->post('m_b1_3_2'),
			  'm_b1_3_3' => $this->input->post('m_b1_3_3'),
			  'm_b1_3_4' => $this->input->post('m_b1_3_4'),
			  'm_b2_1_1' => $this->input->post('m_b2_1_1'),
			  'm_b2_1_2' => $this->input->post('m_b2_1_2'),
			  'm_b2_1_3' => $this->input->post('m_b2_1_3'),
			  'm_b2_1_4' => $this->input->post('m_b2_1_4'),
			  'm_b2_1_5' => $this->input->post('m_b2_1_5'),
			  'm_b2_2_1' => $this->input->post('m_b2_2_1'),
			  'm_b2_2_2' => $this->input->post('m_b2_2_2'),
			  'm_b2_2_3' => $this->input->post('m_b2_2_3'),
			  'm_b2_2_4' => $this->input->post('m_b2_2_4'),
			  'm_b2_2_5' => $this->input->post('m_b2_2_5'),
			  'm_b2_3_1' => $this->input->post('m_b2_3_1'),
			  'm_b2_3_2' => $this->input->post('m_b2_3_2'),
			  'm_b2_3_3' => $this->input->post('m_b2_3_3'),
			  'm_b2_3_4' => $this->input->post('m_b2_3_4'),
			  'm_b2_3_5' => $this->input->post('m_b2_3_5'),
			  'm_b3_1_1' => $this->input->post('m_b3_1_1'),
			  'm_b3_1_2' => $this->input->post('m_b3_1_2'),
			  'm_b3_1_3' => $this->input->post('m_b3_1_3'),
			  'm_b3_1_4' => $this->input->post('m_b3_1_4'),
			  'm_b3_1_5' => $this->input->post('m_b3_1_5'),
			  'm_b3_2_1' => $this->input->post('m_b3_2_1'),
			  'm_b3_2_2' => $this->input->post('m_b3_2_2'),
			  'm_b3_2_3' => $this->input->post('m_b3_2_3'),
			  'm_b3_2_4' => $this->input->post('m_b3_2_4'),
			  'm_b3_2_5' => $this->input->post('m_b3_2_5'),
			  'm_b4_1' => $this->input->post('m_b4_1'),
			  'm_b4_2' => $this->input->post('m_b4_2'),
			  'm_b4_3' => $this->input->post('m_b4_3'),
			  'm_b5_1_1' => $this->input->post('m_b5_1_1'),
			  'm_b5_1_2' => $this->input->post('m_b5_1_2'),
			  'm_b5_1_3' => $this->input->post('m_b5_1_3'),
			  'm_b5_1_4' => $this->input->post('m_b5_1_4'),
			  'm_b5_1_5' => $this->input->post('m_b5_1_5'),
			  'm_b5_1_6' => $this->input->post('m_b5_1_6'),
			  'm_c1_1' => $this->input->post('m_c1_1'),
			  'm_c1_2' => $this->input->post('m_c1_2'),
			  'm_c1_3' => $this->input->post('m_c1_3'),
			  'm_c1_4' => $this->input->post('m_c1_4'),
			  'm_c1_5' => $this->input->post('m_c1_5'),
			  'm_c1_6' => $this->input->post('m_c1_6'),
			  'm_c2_1' => $this->input->post('m_c2_1'),
			  'm_c2_2' => $this->input->post('m_c2_2'),
			  'm_c2_3' => $this->input->post('m_c2_3'),
			  'm_c2_4' => $this->input->post('m_c2_4'),
			  'm_c3_1' => $this->input->post('m_c3_1'),
			  'm_c3_2' => $this->input->post('m_c3_2'),
			  'm_c3_3' => $this->input->post('m_c3_3'),
			  'm_c3_4' => $this->input->post('m_c3_4'),
			  'm_c4_1_1' => $this->input->post('m_c4_1_1'),
			  'm_c4_1_2' => $this->input->post('m_c4_1_2'),
			  'm_c4_1_3' => $this->input->post('m_c4_1_3'),
			  'm_c4_2_1' => $this->input->post('m_c4_2_1'),
			  'm_c4_2_2' => $this->input->post('m_c4_2_2'),
			  'm_c4_2_3' => $this->input->post('m_c4_2_3'),
			  'm_c4_3_1' => $this->input->post('m_c4_3_1'),
			  'm_c4_3_2' => $this->input->post('m_c4_3_2'),
			  'm_c4_3_3' => $this->input->post('m_c4_3_3'),
			  'm_c5_1' => $this->input->post('m_c5_1'),
			  'm_c5_2' => $this->input->post('m_c5_2'),
			  'm_c5_3' => $this->input->post('m_c5_3'),
			  'm_c5_4' => $this->input->post('m_c5_4'),
			  'm_d1_1' => $this->input->post('m_d1_1'),
			  'm_d1_2' => $this->input->post('m_d1_2'),
			  'm_d1_3' => $this->input->post('m_d1_3'),
			  'm_d1_4' => $this->input->post('m_d1_4'),
			  'm_d2_1_1' => $this->input->post('m_d2_1_1'),
			  'm_d2_1_2' => $this->input->post('m_d2_1_2'),
			  'm_d2_1_3' => $this->input->post('m_d2_1_3'),
			  'm_d2_1_4' => $this->input->post('m_d2_1_4'),
			  'm_d2_2_1' => $this->input->post('m_d2_2_1'),
			  'm_d2_2_2' => $this->input->post('m_d2_2_2'),
			  'm_d2_2_3' => $this->input->post('m_d2_2_3'),
			  'm_d2_2_4' => $this->input->post('m_d2_2_4'),
			  'm_d3_1' => $this->input->post('m_d3_1'),
			  'm_d3_2' => $this->input->post('m_d3_2'),
			  'm_d3_3' => $this->input->post('m_d3_3'),
			  'm_d3_4' => $this->input->post('m_d3_4'),
			  'm_d4_1' => $this->input->post('m_d4_1'),
			  'm_d4_2' => $this->input->post('m_d4_2'),
			  'm_d4_3' => $this->input->post('m_d4_3'),
			  'm_d4_4' => $this->input->post('m_d4_4'),
			  'm_d5_1' => $this->input->post('m_d5_1'),
			  'm_d5_2' => $this->input->post('m_d5_2'),
			  'm_d5_3' => $this->input->post('m_d5_3'),
			  'm_d5_4' => $this->input->post('m_d5_4'),
			  'm_d6_1' => $this->input->post('m_d6_1'),
			  'm_d6_2' => $this->input->post('m_d6_2'),
			  'm_d6_3' => $this->input->post('m_d6_3'),
			  'm_d6_4' => $this->input->post('m_d6_4'),
			  'm_d6_5' => $this->input->post('m_d6_5'),
			  'm_d6_6' => $this->input->post('m_d6_6'),
			  'm_d7_1' => $this->input->post('m_d7_1'),
			  'm_d7_2' => $this->input->post('m_d7_2'),
			  'm_d7_3' => $this->input->post('m_d7_3'),
			  'm_d7_4' => $this->input->post('m_d7_4'),
			  'm_e1_1' => $this->input->post('m_e1_1'),
			  'm_e1_2' => $this->input->post('m_e1_2'),
			  'm_e1_3' => $this->input->post('m_e1_3'),
			  'm_e1_4' => $this->input->post('m_e1_4'),
			  'm_e2_1_1' => $this->input->post('m_e2_1_1'),
			  'm_e2_1_2' => $this->input->post('m_e2_1_2'),
			  'm_e2_1_3' => $this->input->post('m_e2_1_3'),
			  'm_e2_1_4' => $this->input->post('m_e2_1_4'),
			  'm_e2_2_1' => $this->input->post('m_e2_2_1'),
			  'm_e2_2_2' => $this->input->post('m_e2_2_2'),
			  'm_e2_2_3' => $this->input->post('m_e2_2_3'),
			  'm_e2_2_4' => $this->input->post('m_e2_2_4'),
			  'm_e3_1' => $this->input->post('m_e3_1'),
			  'm_e3_2' => $this->input->post('m_e3_2'),
			  'm_e3_3' => $this->input->post('m_e3_3'),
			  'm_e3_4' => $this->input->post('m_e3_4'),
			  'm_e4_1' => $this->input->post('m_e4_1'),
			  'm_e4_2' => $this->input->post('m_e4_2'),
			  'm_e4_3' => $this->input->post('m_e4_3'),
			  'm_e4_4' => $this->input->post('m_e4_4'),
			  'm_g1_1' => $this->input->post('m_g1_1'),
			  'm_g1_2' => $this->input->post('m_g1_2'),
			  'm_g1_3' => $this->input->post('m_g1_3'),
			  'm_g1_4' => $this->input->post('m_g1_4'),
			  'm_g2_1_1' => $this->input->post('m_g2_1_1'),
			  'm_g2_1_2' => $this->input->post('m_g2_1_2'),
			  'm_g2_1_3' => $this->input->post('m_g2_1_3'),
			  'm_g2_1_4' => $this->input->post('m_g2_1_4'),
			  'm_g2_2_1' => $this->input->post('m_g2_2_1'),
			  'm_g2_2_2' => $this->input->post('m_g2_2_2'),
			  'm_g2_2_3' => $this->input->post('m_g2_2_3'),
			  'm_g2_2_4' => $this->input->post('m_g2_2_4'),
			  'm_g2_3_1' => $this->input->post('m_g2_3_1'),
			  'm_g2_3_2' => $this->input->post('m_g2_3_2'),
			  'm_g2_3_3' => $this->input->post('m_g2_3_3'),
			  'm_g2_3_4' => $this->input->post('m_g2_3_4'),
			  'm_g2_4_1' => $this->input->post('m_g2_4_1'),
			  'm_g2_4_2' => $this->input->post('m_g2_4_2'),
			  'm_g2_4_3' => $this->input->post('m_g2_4_3'),
			  'm_g2_4_4' => $this->input->post('m_g2_4_4'),
			  'm_h1_1' => $this->input->post('m_h1_1'),
			  'm_h1_2' => $this->input->post('m_h1_2'),
			  'm_h1_3' => $this->input->post('m_h1_3'),
			  'm_h2_1' => $this->input->post('m_h2_1'),
			  'm_h2_2' => $this->input->post('m_h2_2'),
			  'm_h2_3' => $this->input->post('m_h2_3'),
			  'm_h3_1' => $this->input->post('m_h3_1'),
			  'm_h3_2' => $this->input->post('m_h3_2'),
			  'm_h3_3' => $this->input->post('m_h3_3'),
			  'm_h4_1' => $this->input->post('m_h4_1'),
			  'm_h4_2' => $this->input->post('m_h4_2'),
			  'm_h4_3' => $this->input->post('m_h4_3'),
			  'm_h5_1' => $this->input->post('m_h5_1'),
			  'm_h5_2' => $this->input->post('m_h5_2'),
			  'm_h5_3' => $this->input->post('m_h5_3'),
			  'm_h6_1' => $this->input->post('m_h6_1'),
			  'm_h6_2' => $this->input->post('m_h6_2'),
			  'm_h6_3' => $this->input->post('m_h6_3'),
			  'm_h7_1' => $this->input->post('m_h7_1'),
			  'm_h7_2' => $this->input->post('m_h7_2'),
			  'm_h7_3' => $this->input->post('m_h7_3'),
			  'm_h8_1' => $this->input->post('m_h8_1'),
			  'm_h8_2' => $this->input->post('m_h8_2'),
			  'm_h8_3' => $this->input->post('m_h8_3'),
			  'm_h9' => $this->input->post('m_h9'),
			  'm_h10' => $this->input->post('m_h10')
		));
	

		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});
    		");
		redirect('meeting/sign/'.$id,'refresh');
	}	

	public function participants($id)
	{
		$data['part'] = $this->db->get_where('employee', array('employee_status' => '1'))->result();
		$data['list'] = $this->Mscheduling->get_att($id)->result();				
		$data['get'] =  $this->Mscheduling->get_id($id)->row();		
		$data['id'] = $id;		
		$data['content'] = 'participants';
		$this->load->view('index', $data);
	}

	public function sbm_att()
	{
		$cek = $this->db->get_where('attendance_meet', array('employee_id' => $this->input->post('emp_id'), 'scheduling_id' => $this->input->post('id')))->num_rows();

		if (empty($cek)) {
			$dp = $this->db->get('employee', array('employee_id' => $this->input->post('emp_id')))->row();
			$this->db->insert('attendance_meet', array(
				'employee_id' => $this->input->post('emp_id'),
				'scheduling_id' => $this->input->post('id'),
				'department_id' => $dp->department_id
			));
			echo json_encode(array('status' => TRUE));			
		}else{
			echo json_encode(array('status' => FALSE));						
		}
	}

	public function del_att($id,$sch)
	{
		$this->db->where('id', $id);
		$this->db->delete('attendance_meet');

		redirect('meeting/participants/'.$sch,'refresh');
	}

	public function finalize($id)
	{
		$this->db->where('scheduling_id', $id);
		$this->db->update('scheduling', array('final' => '1'));

		$this->session->set_flashdata("msg", "
			$(document).ready(function() {
        		$('#delay-modal').modal('show');        
        		setTimeout(function() {
        			$('#delay-modal').modal('hide');          					
  				}, 2500);
    		});
    	");

    	redirect('meeting','refresh');

	}

	public function pra($id)
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
		$data['content'] = '_new/form_pra';
		$this->load->view('index', $data);

	}

	public function get_risk($id)
	{
		$data = $this->db->get_where('pra_element', array('scheduling_id' => $id))->result();
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
		// echo $_FILES['photo_1']['name'];
		$insertData = [
			'scheduling_id' => $id,
			'field_1' => $this->input->post('field_1'),
			'field_2' => $this->input->post('field_2'),
			'field_3' => $this->input->post('field_3'),
			'field_4' => $this->input->post('field_4'),
			'field_5' => $this->input->post('field_5'),
			'field_6' => $this->input->post('field_6'),			
		];

		if(!empty($_FILES['photo_1']['name'])){
			$uploadData = $this->do_upload_risk('photo_1');
			if($uploadData){
				$insertData['photo_1'] = 'assets/photos/' . $uploadData['file_name'];
			}
		}

		if(!empty($_FILES['photo_2']['name'])){
			$uploadData = $this->do_upload_risk('photo_2');
			if($uploadData){
				$insertData['photo_2'] = 'assets/photos/' . $uploadData['file_name'];
			}
		}		

		$this->db->insert('pra_desc', $insertData);

		redirect('meeting/pra2/'.base64_encode($id),'refresh');
				
	}

	public function submit_risk($id,$sch_id)
	{
		$this->db->where('id', $id);
		$this->db->update('pra2_main', array(
			'pilot' => $this->input->post('add'),
			'conclusion' => $this->input->post('conclusion')
		));
		redirect('meeting/sign/'.$sch_id,'refresh');
	}

	function do_upload_risk($iName)
	{		
        $config['upload_path']          = './assets/photos/';
        $config['allowed_types']        = 'gif|jpg|png';

        $this->upload->initialize($config);

        if ( ! $this->upload->do_upload($iName))
        {
			$this->session->set_flashdata('msg', '
			<div class="alert alert-danger">'. $this->upload->display_errors() .'</div>');
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
}

/* End of file Meeting.php */
/* Location: ./application/controllers/Meeting.php */