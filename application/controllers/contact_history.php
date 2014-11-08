<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class contact_history extends CI_Controller {

		function __construct()
	{
		parent::__construct();
	
		$this->load->helper(array('form', 'url'));
		$this->load->model('read_model');

	}


	public function index()
	{
		$data["results"] = $this->read_model->get_records_grouped_by_date();

		$this->load->view('inc/header');
		$this->load->view('contacted', $data);
		$this->load->view('inc/footer');
	}

	public function today()
	{
		$data["results"] = $this->read_model->get_todays_contact_history();

		$this->load->view('inc/header');
		$this->load->view('contacted', $data);
		$this->load->view('inc/footer');
	}


}

/* End of file contacted_Records.php */
/* Location: ./application/controllers/contacted_Records.php */