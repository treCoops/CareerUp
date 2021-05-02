<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:59
 */

class BEManageJobs extends CI_Controller
{
	function __construct() {

		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');

		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('JobPostModel');

	}

	public function index()
	{
		$data['title'] = "Manage Jobs | CareerUp";
		$data['page'] = "Backend/Employer/manage_job";
		$data['nav'] = "manage";
		$this->load->view('Backend/Template/template', $data);
	}

	public function getAllJobPostsForTable(){
		header("Content-type:application/json");

		ini_set('max_execution_time', 0);
		ini_set('memory_limit','2048M');

		$param['draw'] = $this->input->get('draw');
		$param['length'] = $this->input->get('length');
		$param['start'] = $this->input->get('start');
		$param['columns'] = $this->input->get('columns');
		$param['search'] = $this->input->get('search[value]');
		$param['order'] = $this->input->get('order');

		echo json_encode($this->JobPostModel->getAllPostsForTable($param));
	}
}
