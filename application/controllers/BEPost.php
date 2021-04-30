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
}
