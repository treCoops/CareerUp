<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:06
 */

class BCChangePassword extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Change Password | CareerUp";
		$data['page'] = "Backend/Candidate/change_password";
		$data['nav'] = "change_password_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
