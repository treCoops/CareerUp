<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:34
 */

class BCResume extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Resume | CareerUp";
		$data['page'] = "Backend/Candidate/resume";
		$data['nav'] = "resume_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
