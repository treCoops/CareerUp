<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:13
 */

class BEChangePassword extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Change Password | CareerUp";
		$data['page'] = "Backend/Employer/change_password";
		$data['nav'] = "change_e";
		$this->load->view('Backend/Template/template', $data);
	}
}
