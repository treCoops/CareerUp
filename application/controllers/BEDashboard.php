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
	public function index()
	{
		$data['title'] = "Employer Dashboard | CareerUp";
		$data['page'] = "Backend/Employer/dashboard";
		$data['nav'] = "dashboard";
		$this->load->view('Backend/Template/template', $data);
	}
}
