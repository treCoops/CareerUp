<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:40
 */

class BEProfile extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Employer Profile | CareerUp";
		$data['page'] = "Backend/Employer/profile";
		$data['nav'] = "profile";
		$this->load->view('Backend/Template/template', $data);
	}
}
