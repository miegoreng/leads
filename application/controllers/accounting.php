<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Accounting extends CI_Controller {
	

	function __construct()
		{
			parent::__construct();
			$this->load->library('form_validation');
			$this->load->helper(array('form', 'url'));
			$this->load->model('create_model');
			$this->load->model('read_model');
		}

	public function index()
	{

		$this->load->view('inc/header');
		$this->load->view('add_receipt');
		$this->load->view('inc/footer');

	}

}

/* End of file accounting.php */
/* Location: ./application/controllers/accounting.php */