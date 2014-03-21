<?php 

class Data_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    //add data from add leads form
    function add_data(){

    	$date = date('Y-m-d', strtotime($this->input->post('date')));
    	$data = array(
		'company'=>$this->input->post('company'),
		'first_name'=>$this->input->post('first_name'),
		'last_name'=>$this->input->post('last_name'),
		'position'=>$this->input->post('position'),
		'email'=>$this->input->post('email'),
		'phone'=>$this->input->post('phone'),
        'website'=>$this->input->post('website'),
        'linkedin'=>$this->input->post('linkedin'),
        'xing'=>$this->input->post('xing'),
		'street'=>$this->input->post('street'),
		'city'=>$this->input->post('city'),
		'postal_code'=>$this->input->post('postal_code'),
		'date'=>$date,
		'time'=>$this->input->post('time'),
		'notes'=>$this->input->post('notes'),
    		);

    	$this->db->insert('contacts', $data); 

		if ($data) {
				return true; 
			} else {			
				return false;
		}
    }


    //add data from today (call again)

    function add_contact_record(){
    	$date = date('Y-m-d', strtotime($this->input->post('date')));

        echo $this->input->post('id');
    	
        $data = array(
            'contacts_id' => $this->input->post('id'),
    		'date' => $date,
    		'time' => $this->input->post('time'),
    		'notes' => $this->input->post('notes'),
    		 );
    	$this->db->insert('contact_records', $data);

        if ($data) {
                return true; 
            } else {            
                return false;
        }
        echo "data added";

    }

}