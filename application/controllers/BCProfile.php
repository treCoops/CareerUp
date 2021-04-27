<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:31
 */

class BCProfile extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Profile | CareerUp";
		$data['page'] = "Backend/Candidate/profile";
		$data['nav'] = "profile_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
