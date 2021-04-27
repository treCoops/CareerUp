<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:36
 */

class Login extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$this->load->view('Frontend/Template/template', $data);
	}
}
