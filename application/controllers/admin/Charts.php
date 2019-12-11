<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
		$this->load->view("admin/Charts");
	}

}

/* End of file Charts.php */
/* Location: ./application/controllers/admin/Charts.php */ ?>