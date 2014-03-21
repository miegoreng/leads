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
        $query = $this->db->query(' SELECT * FROM contacts where DATE(`date`) = DATE(NOW())');
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



    public function get_contact_detail(){

        $limit = 1;
      //  $this->db->get('contacts');
      //  $this->db->get('contact_records');
       // $query = $this->db->get_where('contacts', array('id' => $this->uri->segment(3)), $limit);

       /* $query = $this->db->select(*)
            ->from('contacts')
            ->from('contact_records')
            ->where(array('id' => $this->uri->segment(3)))
            ->where('contact_records.contacts_id', $this->uri->segment(3));
*/      //$id = $this->uri->segment(3, 0)

        $query = $this->db->query("SELECT  `contacts`. * ,  `contact_records`. * FROM contacts, contact_records WHERE contacts.id =22 AND contact_records.contacts_id =22");
/*
        $this->db->select("*");
        $this->db->from("contacts");
        $this->db->join("contact_records", "contacts_id.id=contacts_records.contacts_id");
        $this->db->where($this->uri->segment(3, 0));
        $query = $this->db->get();
        return $query->result();
*/


        var_dump($query);


        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }           
            return $data;
        } 
        return false;

    }



}




/* End of file show_records.php */
/* Location: ./application/models/show_records.php */