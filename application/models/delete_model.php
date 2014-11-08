<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

	public function delete_company(){

		$this->db->where('company_id', $this->uri->segment(3));
		$this->db->delete('company_info');
	}

	public function delete_employee(){
		$this->db->where('employee_id', $this->uri->segment(3));
		$this->db->delete('employee_info');
	}

}

/* End of file createModel.php */
/* Location: ./application/models/createModel.php */