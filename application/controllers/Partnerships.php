<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-10
 * Time: 10:26
 */

class Partnerships extends CI_Controller
{

	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');
		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

	}


	public function index()
	{

		$data['nav'] = '';
		$data['title'] = "Partnerships | CareerUp";
		$data['page'] = "Frontend/partnerships";
		$this->load->view('Frontend/Template/template', $data);
	}

}
