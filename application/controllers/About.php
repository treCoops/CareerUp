<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:12
 */

class About extends CI_Controller
{
	public function index()
	{
		$data['title'] = "About | CareerUp";
		$data['page'] = "Frontend/about";
		$this->load->view('Frontend/Template/template', $data);
	}
}
