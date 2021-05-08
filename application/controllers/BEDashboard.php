<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:22
 */

class BEDashboard extends CI_Controller
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
		$data['title'] = "Employer Dashboard | CareerUp";
		$data['page'] = "Backend/Employer/dashboard";
		$data['nav'] = "dashboard";
		$this->load->view('Backend/Template/template', $data);
	}
}
