<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:36
 */

class Home extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Home | CareerUp";
		$data['page'] = "Frontend/home";
		$this->load->view('Frontend/Template/template', $data);
	}
}
