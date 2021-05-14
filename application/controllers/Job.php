<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-14
 * Time: 19:33
 */

class Job extends CI_Controller
{

	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');
		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}
		$this->load->model('UserModel');
	}

	public function index()
	{
		$sectorID = $this->UserModel->getUserByUserID($_GET['user_id']);
		$work_type = $this->UserModel->getCompanySector($sectorID[0]->user_job);

		$data['nav'] = '';
		$data['title'] = "View Job | CareerUp";
		$data['page'] = "Frontend/single_job";
		$data['user_id'] = $_GET['user_id'];
		$data['job_id'] = $_GET['job_id'];
		$data['type'] = $work_type[0]->sector_name;
		$this->load->view('Frontend/Template/template', $data);
	}

}
