<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:01
 */

class BCJobAlerts extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Candidate Job Alerts | CareerUp";
		$data['page'] = "Backend/Candidate/job_alerts";
		$data['nav'] = "job_alert_c";
		$this->load->view('Backend/Template/template', $data);
	}
}
