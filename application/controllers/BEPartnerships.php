<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:33
 */

class BEPartnerships extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Partnerships | CareerUp";
		$data['page'] = "Backend/Employer/manage_partnerships";
		$data['nav'] = "partnerships";
		$this->load->view('Backend/Template/template', $data);
	}
}
