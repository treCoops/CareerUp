<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:59
 */

class BEManageJobs extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Manage Jobs | CareerUp";
		$data['page'] = "Backend/Employer/manage_job";
		$data['nav'] = "manage";
		$this->load->view('Backend/Template/template', $data);
	}
}
