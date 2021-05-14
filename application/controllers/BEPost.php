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
		$data['title'] = "Post a Job | CareerUp";
		$data['page'] = "Backend/Employer/post_job";
		$data['nav'] = "post";
		$this->load->view('Backend/Template/template', $data);
	}

	public function createJobPost(){

		$data = array();
		$response = array();

		$User_Session = $this->session->userdata('User_Session');
		$profileID = $this->ProfileModel->getProfileID($User_Session['ID']);

		if($profileID != null){

			$data['job_post_profile_id'] = $profileID[0]->company_profile_id;
			$data['job_post_title'] = $this->input->post('txtJobTitle');
			$data['job_post_description'] = $this->input->post('txtJobDescription');
			$data['job_post_deadline'] = $this->input->post('txtJobDeadlineDate');
			$data['job_post_knowledge_level'] = $this->input->post('cmbJobKnowledgeLevel');
			$data['job_post_experience_level'] = $this->input->post('cmbJobExperienceLevel');
			$data['job_post_gender'] = $this->input->post('cmbGender');
			$data['job_post_qualification_level'] = $this->input->post('cmbJobQualificationLevel');
			$data['job_post_visibility'] = 1;

			if($this->JobPostModel->isJobPostExist($data)){
				$result = $this->JobPostModel->createJobPost($data);
				if($result){
					$response['status'] = 200;
					$response['message'] = 'Job post has posted successfully!';
				}else{
					$response['status'] = 500;
					$response['message'] = 'Something went wrong, Please try again later!';
				}
			}else{
				$response['status'] = 500;
				$response['message'] = 'Job post already exists!';
			}

		}else{
			$response['status'] = 500;
			$response['message'] = 'No profile found. Please create your profile before post a job!';
		}

		echo json_encode($response);
	}


	function getAllJobs(){
		$response = array();

		$result = $this->JobPostModel->getAllJobs();

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getAllJobsByCities(){
		$response = array();

		$result = $this->JobPostModel->getAllJobsByCities($this->input->post('cityName'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getAllJobsByExperienceWise(){
		$response = array();

		$result = $this->JobPostModel->getAllJobsByExperience($this->input->post('ex'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getAllJobsByKnowledge(){
		$response = array();

		$result = $this->JobPostModel->getAllJobsByKnowledge($this->input->post('kw'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getAllJobsByGenderWise(){
		$response = array();

		$result = $this->JobPostModel->getAllJobsByGenderWise($this->input->post('gender'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getAllJobsByKeyword(){
		$response = array();

		$result = $this->JobPostModel->getAllJobsByKeyword($this->input->post('value'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	function getJobDetails(){

		$response = array();

		$result = $this->JobPostModel->getJobByID($this->input->post('job_id'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Data have!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);

	}

	function applyJob(){

		$response = array();
		$data = array();

		$User_Session = $this->session->userdata('User_Session');

		$candidate = $this->ProfileModel->getCandidateProfile($User_Session['ID']);
		$company = $this->ProfileModel->getProfileID($this->input->post('company_id'));

		$data['company_user_id'] = $this->input->post('company_id');
		$data['company_profile_id'] = $company[0]->company_profile_id;
		$data['job_id'] = $this->input->post('job_id');
		$data['candidate_user_id'] = $candidate['user_id'];
		$data['candidate_profile_id'] = $candidate['candidate_profile_id'];
		$data['candidate_name'] = $candidate['candidate_full_name'];
		$data['candidate_email'] = $candidate['candidate_email'];
		$data['candidate_contact_no'] = $candidate['candidate_phone_no'];
		$data['candidate_rating'] = $candidate['candidate_rating'];

		if($this->JobPostModel->isAlreadyApplied($this->input->post('company_id'), $this->input->post('job_id'), $candidate['user_id'])){
			$result = $this->JobPostModel->createJobApplyRequest($data);
			if($result){
				$response['status'] = 200;
				$response['message'] = 'You request has been sent!';
			}else{
				$response['status'] = 200;
				$response['message'] = 'You request has not been sent!';
			}

		}else{
			$response['status'] = 500;
			$response['message'] = 'Your request already sent!';
		}

		echo json_encode($response);


	}

}
