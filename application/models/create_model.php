<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Create_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }


function add_company_info(){

    	$data = array(
		'company'=>$this->input->post('company'),
		'company_email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
        'website'=>$this->input->post('website'), 
		'street'=>$this->input->post('street'),
		'plz'=>$this->input->post('plz'),
		'city'=>$this->input->post('city'),
    		);

    	$this->db->insert('company_info', $data); 

		if ($data) {
				return true; 
			} else {			
				return false;
		}
	
	}

function add_employer_info(){

    	$data = array(
    	'company_id'=>$this->input->post('company_id'),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'position'=>$this->input->post('position'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
        'linkedin'=>$this->input->post('linkedin'),
        'xing'=>$this->input->post('xing'),
        'phone'=>$this->input->post('phone'),
    		);

    	$this->db->insert('employee_info', $data); 

		if ($data) {
				return true; 
			} else {			
				return false;
		}
	
	}

function add_date_time(){

 		$date = date('Y-m-d', strtotime($this->input->post('date')));
    	$data = array(
    	'company_id'=>$this->input->post('company_id'),
    	'employee_id'=>$this->input->post('employee_id'),
		'date'=>$date,
		'time'=>$this->input->post('time'),
		'notes'=>$this->input->post('notes'),
    		);

    	$this->db->insert('contact_records', $data); 

		if ($data) {
				return true; 
			} else {			
				return false;
		}
    }


    function add_contact_record(){
    	$date = date('Y-m-d', strtotime($this->input->post('date')));



        $data = array(
    		'company_id' => $this->input->post('company_id'),
    		'employee_id' => $this->input->post('employee_id'),
    		'date' => $date,
    		'time' => $this->input->post('time'),
    		'notes' => $this->input->post('notes'),
    		'method_of_contact' => $this->input->post('method_of_contact'),

    		 );

    	$this->db->insert('contact_records', $data);
		
		if ($data) {
				return true; 
			} else {			
				return false;
		}


    }




}

/* End of file createModel.php */
/* Location: ./application/models/createModel.php */