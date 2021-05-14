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
		$this->load->model('ProfileModel');

	}

	public function index()
	{
		$User_Session = $this->session->userdata('User_Session');
		$profile_id = $this->ProfileModel->getProfileID($User_Session['ID']);

		$data['title'] = "Manage Jobs | CareerUp";
		$data['page'] = "Backend/Employer/manage_job";
		$data['nav'] = "manage";
		$data['profile_ID'] = $profile_id[0]->company_profile_id;
		$this->load->view('Backend/Template/template', $data);
	}

	public function deletePost(){
		$response = array();
		$response['result'] = $this->JobPostModel->deletePost($this->input->post('ID'));

		echo json_encode($response);
	}

	public function editJobPost(){

		$response = array();
		$data = array();

		$data['job_post_title'] = $this->input->post('txtJobTitle');
		$data['job_post_description'] = $this->input->post('txtJobDescription');
		$data['job_post_deadline'] = $this->input->post('txtJobDeadlineDate');
		$data['job_post_knowledge_level'] = $this->input->post('cmbJobKnowledgeLevel');
		$data['job_post_experience_level'] = $this->input->post('cmbJobExperienceLevel');
		$data['job_post_gender'] = $this->input->post('cmbGender');
		$data['job_post_qualification_level'] = $this->input->post('cmbJobQualificationLevel');

		$result = $this->JobPostModel->updateJobPost($this->input->post('txtJobID'), $data);
		if($result){
			$response['status'] = 200;
			$response['message'] = 'Job post has updated successfully!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Something went wrong, Please try again later!';
		}

		echo json_encode($response);
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
		$param['id'] = $this->input->post('ID');



		echo json_encode($this->JobPostModel->getAllPostsForTable($param));
	}

	public function getSelectedPostDetails(){

		$response = array();

		$result = $this->JobPostModel->selectedPostDetails($this->input->post('ID'));
		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Data exists';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No data exists';
		}

		echo json_encode($response);

	}
}
