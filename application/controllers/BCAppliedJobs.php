<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:45
 */

class BCAppliedJobs extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Applied Jobs | CareerUp";
		$data['page'] = "Backend/Candidate/applied_jobs";
		$data['nav'] = "applied_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
