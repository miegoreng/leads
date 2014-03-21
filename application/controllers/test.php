<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		echo date('Y-m-d', strtotime('now'))."<br>";
		
	}

}

/* End of file test.php */
/* Location: ./application/controllers/test.php */