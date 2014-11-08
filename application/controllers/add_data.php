<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('form', 'url'));
		$this->load->model('create_model');
		$this->load->model('read_model');
	}

	public function index(){

		$this->load->view('inc/header');
		$this->load->view('add_company_info');
		$this->load->view('inc/footer');
	}

	public function step2(){

		$data['results'] = $this->read_model->get_last_company_info_record();

		$this->load->view('inc/header');
		$this->load->view('add_employer_info', $data);
		$this->load->view('inc/footer');
	}


	public function step3(){
		
	//	$data['company'] = $this->read_model->get_last_company_info_record();		
		$data['query'] = $this->read_model->get_last_employer_info_record();

		$this->load->view('inc/header');
		$this->load->view('add_date_time', $data);
		$this->load->view('inc/footer');

	}

	public function add_data_confirmation(){

		$this->load->view('inc/header');
		$this->load->view('add_data_confirmation');
		$this->load->view('inc/footer');

	}


	public function add_company_info()
	{
		 $this->form_validation->set_rules('company', 'Copmany', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('email', 'E-mail', 'trim|xss_clean');
		 $this->form_validation->set_rules('website', 'Website', 'trim|required|xss_clean');	
		 $this->form_validation->set_rules('phone', 'Phone', 'trim|required|xss_clean');
		 $this->form_validation->set_rules('street', 'Street', 'trim|xss_clean');
		 $this->form_validation->set_rules('city', 'City', 'trim|xss_clean');
		 $this->form_validation->set_rules('postal_code', 'Postal Code', 'trim|xss_clean');
		 $this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
			
		}
		else 

		{
		$this->create_model->add_company_info();
		redirect('/add_data/step2/', 'refresh');

		}

	}

	public function add_employer_info()
	{
		 
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('position', 'Position', 'trim|xss_clean');
		$this->form_validation->set_rules('linkedin', 'linkedin', 'trim|xss_clean');
		$this->form_validation->set_rules('xing', 'xing', 'trim|xss_clean');
		$this->form_validation->set_rules('phone', 'Phone', 'trim|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">','</div>');

		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else 
		{
		$this->create_model->add_employer_info();
		redirect('/add_data/step3/', 'refresh');

		}

	}


	public function add_date_time()
	{
		 
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
		$this->create_model->add_date_time();
		redirect('/add_data/add_data_confirmation/', 'refresh');

		}

	}


}
/* End of file add_data.php */
