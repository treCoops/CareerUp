<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:07
 */

class BEResumes extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Shortlisted Resumes | CareerUp";
		$data['page'] = "Backend/Employer/resumes";
		$data['nav'] = "resumes";
		$this->load->view('Backend/Template/template', $data);
	}
}
