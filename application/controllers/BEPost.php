<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:50
 */

class BEPost extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Post a Job | CareerUp";
		$data['page'] = "Backend/Employer/post_job";
		$data['nav'] = "post";
		$this->load->view('Backend/Template/template', $data);
	}
}
