<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:33
 */

class BEPartnerships extends CI_Controller
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
		$data['title'] = "Partnerships | CareerUp";
		$data['page'] = "Backend/Employer/manage_partnerships";
		$data['nav'] = "partnerships";
		$this->load->view('Backend/Template/template', $data);
	}
}
