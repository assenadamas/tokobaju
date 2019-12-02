<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Overview extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        // load view admin/overview.php
		$this->load->view("admin/overview");
	}

}

/* End of file Overview.php */
/* Location: ./application/controllers/admin/Overview.php */ ?>