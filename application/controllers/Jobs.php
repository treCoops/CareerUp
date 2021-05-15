<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:44
 */

class Jobs extends CI_Controller
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
		$data['title'] = "Jobs | CareerUp";
		$data['page'] = "Frontend/jobs";
		$this->load->view('Frontend/Template/template', $data);
	}
}
