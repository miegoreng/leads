

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Show_records extends CI_Controller {

public function __construct() {

        parent:: __construct();
        $this->load->helper("url");
        $this->load->helper('html'); 
        $this->load->model("read_model");
         $this->load->model('delete_model');
         $this->load->model('update_model');

        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");

    }
 
    public function index() {
        $config = array();
        $config["base_url"] = base_url() . "/show_records";
        $config["total_rows"] = $this->read_model->record_count();
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
        $data["results"] = $this->read_model->get_contacts($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();
        $this->load->view('inc/header');
        $this->load->view('show_records', $data);
        $this->load->view('inc/footer');
    }


    public function record_detail(){
        
        $data['query'] = $this->read_model->get_contact_detail();
        $this->load->view('inc/header');
        $this->load->view('show_record_detail', $data);
        $this->load->view('inc/footer');

    }


    public function delete_company(){
        $this->delete_model->delete_company();
        echo "company deleted";
    }

    public function delete_employee(){
        $this->delete_model->delete_employee();
        echo "employee deleted";
    }


    public function edit_record(){

        $data['results'] = $this->read_model->get_contact_detail();
        $this->load->view('inc/header');
        $this->load->view('edit_record', $data);
        $this->load->view('inc/footer');

    }


    public function update_company(){

         $this->update_model->update_company_info();
   
    }
  public function update_employee(){

         $this->update_model->update_employee_info();
   
    }
}








/* End of file show_records.php */
/* Location: ./application/controllers/show_records.php */