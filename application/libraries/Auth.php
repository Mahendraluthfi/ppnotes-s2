<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth
{
	var $ci = NULL;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	function is_logged_in(){
      $cek = $this->ci->db->get_where('employee', array('employee_id' => $this->ci->session->userdata('employee_id'), 'token' => $this->ci->session->userdata('token')))->num_rows();
      if($this->ci->session->userdata('employee_id') == '' && $this->ci->session->userdata('level') == '' && $this->ci->session->userdata('token') == ''){
         return false;
      }elseif(empty($cek)){         
         return false;                  
      }      
      return true;
   }
      
   function restrict(){
      if($this->is_logged_in() == false){
         redirect(base_url());
      }
   }
   
  

}

/* End of file Auth.php */
/* Location: ./application/libraries/Auth.php */
