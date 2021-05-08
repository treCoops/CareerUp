<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 15:45
 */

class Employer extends CI_Controller
{
	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');
		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('ProfileModel');
		$this->load->model('ReviewModel');
		$this->load->model('UserModel');
	}

	public function index()
	{
		$User_Session = $this->session->userdata('User_Session');

		$work_type = $this->UserModel->getCompanySector($User_Session['Account_Type']);

		$data['nav'] = '';
		$data['title'] = "View Employer | CareerUp";
		$data['page'] = "Frontend/single_employer";
		$data['user_id'] = $_GET['id'];
		$data['type'] = $work_type[0]->sector_name;
		$this->load->view('Frontend/Template/template', $data);
	}

	public function getProfile(){

		$response = array();

		$result = $this->ProfileModel->getProfile($this->input->post('id'));

		if($result){
			$response['status'] = 200;
			$response['message'] = 'Data exist!';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No data exist!';
		}

		echo json_encode($response);
	}

	public function addReview(){

		$response = array();
		$data = array();

		$User_Session = $this->session->userdata('User_Session');

		$reviewer_name = '';
		$image_url = '';

		if($User_Session['User_Job'] == 'Candidate'){
			$profile = $this->ProfileModel->getCandidateName($User_Session['ID']);
			$reviewer_name = $profile[0]->candidate_full_name;
			$image_url = $profile[0]->candidate_profile_image_url;
		}else{
			$profile = $this->ProfileModel->getProfile($User_Session['ID']);
			$reviewer_name = $profile['company_name'];
			$image_url = $profile['company_profile_image_url'];

		}

		$rating = $this->input->post('ratings');

		$data['user_id'] = $this->input->post('txtUserId');
		$data['profile_id'] = $this->input->post('txtProfileId');
		$data['reviewer_id'] = $User_Session['ID'];
		$data['review_rating'] = $rating[1];
		$data['review_title'] = $this->input->post('txtReviewTitle');
		$data['review_content'] = $this->input->post('txtReviewContent');
		$data['image_url'] = $image_url;
		$data['reviewer_name'] = $reviewer_name;


		$result = $this->ReviewModel->addReview($data);

		if($result){
			$response['status'] = 200;
			$response['message'] = 'Review added successfully!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Internal server error!';
		}

		echo json_encode($response);
	}

	function getReviews(){
		$response = array();

		$response['user_id'] = $this->input->post('user_id');
		$profileId = $this->ProfileModel->getProfileID($this->input->post('user_id'));

		$response['profile_id'] =

		$result = $this->ReviewModel->getAllReviews($this->input->post('user_id'), $profileId[0]->company_profile_id);

		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Reviews are available!';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'Reviews are not available!';
		}

		echo json_encode($response);

	}
}
