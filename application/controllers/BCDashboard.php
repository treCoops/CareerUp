<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:23
 */

class BCDashboard extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Dashboard | CareerUp";
		$data['page'] = "Backend/Candidate/dashboard";
		$data['nav'] = "dashboard_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
