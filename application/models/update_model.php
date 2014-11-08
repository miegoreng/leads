<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_model extends CI_Model {

	function __construct() {
        parent::__construct();
    }

public function get_all(){
	$query = $this->db->get('company_info');

		foreach ($query->result_array() as $row) {
                $data[] = $row;
            }
        return $data;
	}



	public function update_company_info(){

		$id = $this->input->post('company_id');

		$data = array(
		'company'=>$this->input->post('company'),
		'company_email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
        'website'=>$this->input->post('website'), 
		'street'=>$this->input->post('street'),
		'plz'=>$this->input->post('plz'),
		'city'=>$this->input->post('city'),
        );
		var_dump($data);

        $this->db->where('company_info.company_id', $id);
		$this->db->update('company_info', $data);

		echo "record updated";
	}	


public function update_employee_info(){

		$id = $this->input->post('employee_id');
    	$data = array(
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'position'=>$this->input->post('position'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
        'linkedin'=>$this->input->post('linkedin'),
        'xing'=>$this->input->post('xing'),
        'phone'=>$this->input->post('phone'),
    		);


        $this->db->where('employee_info.employee_id', $id);
		$this->db->update('employee_info', $data);

		echo "record updated";
	}	

}

/* End of file createModel.php */
/* Location: ./application/models/createModel.php */