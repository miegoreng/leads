<?php 

class Show_records_model extends CI_Model {
   
    public function __construct() {
        parent::__construct();
      
    }
 
    public function record_count() {
        return $this->db->count_all("contacts");

    }
 
    

    public function get_contacts($limit, $start) {

        $this->db->limit($limit, $start);
        $query = $this->db->get("contacts");
 
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
        $query = $this->db->query('SELECT company_info.company_id, company_info.company, company_info.website , company_info.street, company_info.city, company_info.plz,
                                  employee_info.employee_id, employee_info.first_name, employee_info.last_name, employee_info.position, employee_info.email, 
                                  employee_info.linkedin, employee_info.xing, employee_info.phone      
                                   FROM company_info, employee_info, contact_records 
                                   WHERE DATE(  `date` ) = DATE( NOW( ) )  
                                   AND company_info.company_id = employee_info.company_id');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }           
            return $data;
        } 
        return false;
   }


   function delete_contact() {
    $this->db->where('id', $this->uri->segment(3));
    $this->db->delete('contacts');
   }


    function update_contact_status(){
        $data = array(
               'status' => $this->uri->segment(3),
            );
      //  $this->db->where('id', $this->uri->segment(4));
        $this->db->update('contacts', $data); 

    }



   



}




/* End of file show_records.php */
/* Location: ./application/models/show_records.php */