<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('data_model');

	}

	public function index(){

		$this->load->view('inc/header');
		$this->load->view('add_leads');
		$this->load->view('inc/footer');

	}


	public function add_contact_record()
	{
		 $this->form_validation->set_rules('company', 'Copmany', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('position', 'Position', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('website', 'Website', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('linkedin', 'linkedin', 'trim|xss_clean');
		 $this->form_validation->set_rules('xing', 'xing', 'trim|xss_clean');
		 $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('street', 'Street', 'trim|xss_clean');
		 $this->form_validation->set_rules('city', 'City', 'trim|xss_clean');
		 $this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|xss_clean');
		 $this->form_validation->set_rules('date', 'Date', 'trim|xss_clean');
		 $this->form_validation->set_rules('time', 'Time', 'trim|xss_clean');
		 $this->form_validation->set_rules('notes', 'Notes', 'trim|xss_clean');
		 $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
	
		else 

		{
			//insert data
		$this->data_model->add_data();
		echo "thank you";
    	$date = date('Y-m-d', strtotime($this->input->post('date')));
		echo $date;
		}

	}





}
/* End of file add_data.php */
