

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Today extends CI_Controller {

public function __construct() {

        parent:: __construct();
        $this->load->helper("url");
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->model("show_records_model");
        $this->load->model("data_model");
        $this->load->library("pagination");
        $this->load->library('form_validation');

    }
 
    public function index() {

        $config = array();
        $config["base_url"] = base_url() . "/today";
        $config["total_rows"] = $this->show_records_model->record_count();
        $config["per_page"] = 10;
        $config["uri_segment"] = 2;
        $config['full_tag_open'] = '<div class="pagination"> ';
        $config['full_tag_close'] = '</div>';
        $config['display_pages'] = 1;
        $config['first_link'] = '&laquo; First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';           
        $config['last_link'] = 'Last &raquo;';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next &rarr;';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&larr; Previous';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
 
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        $data["results"] = $this->show_records_model->get_today($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('inc/header');
        $this->load->view('today', $data);
                $this->load->view('inc/footer');

    }

    function delete_contact() {

        echo "Contact Deleted";

        $this->show_records_model->delete_contact();
        $this->index();
        echo "Contact Deleted";

    }


    function update_contact_status(){
      //  $test = $this->uri->segment(3);
      //  echo $test;
    $this->show_records_model->update_contact_status();
    $this->index();

    echo '<div class="alert alert-success">
          <strong>Well done!</strong> Status updated.
        </div>';

    }


    //if client/lead needs to be contacted again
    function add_contact_record(){
/*
    $this->form_validation->set_rules('date', 'date', 'trim|required|xss_clean');
    $this->form_validation->set_rules('time', 'time', 'trim|required|xss_clean');
    $this->form_validation->set_rules('notes', 'notes', 'trim|required|xss_clean');
   
        if($this->form_validation->run() == FALSE) {
            
            $this->index();
        
        } else {
*/        
            //insert data
        $this->data_model->add_contact_record();
        }

   // }

}








/* End of file show_records.php */
/* Location: ./application/controllers/show_records.php */