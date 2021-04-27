<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:56
 */

class BCCVManager extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate CV Manager | CareerUp";
		$data['page'] = "Backend/Candidate/cv_manager";
		$data['nav'] = "cv_manager_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
