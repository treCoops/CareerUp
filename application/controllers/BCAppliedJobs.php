<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:45
 */

class BCAppliedJobs extends CI_Controller
{
	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');
		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('ProfileModel');
		$this->load->model('UserModel');
		$this->load->model('JobModel');
	}

	public function index()
	{
		$data['title'] = "Candidate Applied Jobs | CareerUp";
		$data['page'] = "Backend/Candidate/applied_jobs";
		$data['nav'] = "applied_c";
		$this->load->view('Backend/Template/template', $data);
	}

	public function getAllAppliedJobs(){
		header("Content-type:application/json");

		ini_set('max_execution_time', 0);
		ini_set('memory_limit','2048M');

		$User_Session = $this->session->userdata('User_Session');
		$profileID = $this->ProfileModel->getCandidateProfileID($User_Session['ID']);

		$param['draw'] = $this->input->get('draw');
		$param['length'] = $this->input->get('length');
		$param['start'] = $this->input->get('start');
		$param['columns'] = $this->input->get('columns');
		$param['search'] = $this->input->get('search[value]');
		$param['order'] = $this->input->get('order');
		$param['profile_id'] = $profileID[0]->candidate_profile_id;
		$param['user_id'] = $User_Session['ID'];

		echo json_encode($this->JobModel->getAllJobRequestsForTable($param));
	}

	function updateReadStatus(){

		$response = array();

		$result = $this->JobModel->getIDs($this->input->post('ID'));

		if($result){
			$response['status'] = 200;
			$response['message'] = 'Status updated!';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function deleteRequestRecord(){
		$response = array();
		$response['result'] = $this->JobModel->deleteRequest($this->input->post('ID'));

		echo json_encode($response);
	}
}
