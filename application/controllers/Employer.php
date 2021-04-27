<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:45
 */

class Employer extends CI_Controller
{
	public function index()
	{
		$data['title'] = "View Employer | CareerUp";
		$data['page'] = "Frontend/single_employer";
		$this->load->view('Frontend/Template/template', $data);
	}
}
