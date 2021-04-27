<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:45
 */

class Candidate extends CI_Controller
{
	public function index()
	{
		$data['title'] = "View Candidate | CareerUp";
		$data['page'] = "Frontend/single_candidate";
		$this->load->view('Frontend/Template/template', $data);
	}
}
