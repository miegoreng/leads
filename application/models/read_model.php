<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class read_model extends CI_Model {

	public function __construct() {
        parent::__construct();
      
    }


    public function record_count() {
        return $this->db->count_all('company_info');

    }

    

    public function get_contacts($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');
      	$this->db->from('company_info');
      	$this->db->join('employee_info', 'company_info.company_id = employee_info.company_id');
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


   public function get_last_company_info_record(){
   	$this->db->from('company_info');
   	$this->db->order_by("company_id", "desc"); 
   	$this->db->limit(1);
   	$query = $this->db->get();

   	if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

   }

 public function get_last_employer_info_record(){
   	$this->db->from('employee_info');
   	$this->db->order_by("employee_id", "desc"); 
   	$this->db->limit(1);
   	$query = $this->db->get();

   	if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

   }


 public function get_contact_detail(){

        $id = $this->uri->segment(3);
        $this->db->select(' company_info.company_id, company_info.company, company_info.website, company_info.street, company_info.plz, company_info.city, company_info.date_created,
                            employee_info.employee_id, employee_info.first_name, employee_info.last_name, employee_info.position, employee_info.email, employee_info.linkedin, employee_info.xing, employee_info.phone, 
                            contact_records.date, contact_records.time, contact_records.notes, contact_records.method_of_contact
                            '
                            );
        $this->db->from('company_info, employee_info, contact_records');
        $this->db->where('company_info.company_id', $id);
        $this->db->where('employee_info.company_id', $id);
        $this->db->where('employee_info.company_id', $id);
        $this->db->where('contact_records.company_id', $id);
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;

       }
          
    public function get_today($limit, $start) {
        $this->db->limit($limit, $start);
        $this->db->select('*');
        $this->db->from('company_info');
        $this->db->join('employee_info', 'company_info.company_id = employee_info.company_id');
        $this->db->join('contact_records', 'contact_records.company_id = employee_info.company_id');
        
        $array = array('contact_records.date' => date('Y-m-d'), 'contact_records.sales_status' => NULL);
        $this->db->where($array);
        //$this->db->where('contact_records.date', date('Y-m-d'));
        // $this->db->where('contact_records.sales_status');
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function get_records_grouped_by_date(){

    $this->db->select('*');
        $this->db->from('company_info');
        $this->db->join('employee_info', 'company_info.company_id = employee_info.company_id');
        $this->db->join('contact_records', 'contact_records.company_id = employee_info.company_id');
        $this->db->order_by('contact_records.last_contact', "desc"); 
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;

   }




 public function get_todays_contact_history() {
       
        $this->db->select('*');
        $this->db->from('company_info');
        $this->db->join('employee_info', 'company_info.company_id = employee_info.company_id');
        $this->db->join('contact_records', 'contact_records.company_id = employee_info.company_id');
        
        $array = array('contact_records.date' => date('Y-m-d'), 'contact_records.sales_status' =>  !NULL);
        $this->db->where($array);
        //$this->db->where('contact_records.date', date('Y-m-d'));
        // $this->db->where('contact_records.sales_status');
        $query = $this->db->get();
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }


   

}

 


/* End of file createModel.php */
/* Location: ./application/models/createModel.php */