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
	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');
		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('PartnershipModel');
		$this->load->model('ProfileModel');

	}

	function deletePartnershipRecord(){
		$response = array();
		$response['result'] = $this->PartnershipModel->deleteRequest($this->input->post('ID'));

		echo json_encode($response);
	}

	public function index()
	{
		$User_Session = $this->session->userdata('User_Session');
		$profileID = $this->ProfileModel->getProfileID($User_Session['ID']);

		$data['isEnabled'] = $this->PartnershipModel->isEnabled($profileID[0]->company_profile_id);
		$data['profileID'] = $profileID[0]->company_profile_id;
		$data['title'] = "Partnerships | CareerUp";
		$data['page'] = "Backend/Employer/manage_partnerships";
		$data['nav'] = "partnerships";
		$this->load->view('Backend/Template/template', $data);
	}

	public function updateStatus(){
		$response = array();
		$result = $this->PartnershipModel->updateStatus($this->input->post('id'), $this->input->post('status'));

		if($result){
			$response['status'] = 200;
			$response['message'] = 'Status updated!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	public function updateReadStatus(){
		$response = array();

		$result = $this->PartnershipModel->getUserID($this->input->post('ID'));

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


	public function getAllCompanies(){
		$response = array();

		$result = $this->PartnershipModel->getAllCompanies();

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'Status updated!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'Operation failed!';
		}

		echo json_encode($response);
	}

	public function getAllCompaniesByCities(){
		$response = array();

		$result = $this->PartnershipModel->getAllCompaniesByCities($this->input->post('cityName'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'data available!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'no data available!';
		}

		echo json_encode($response);
	}


	public function getAllCompaniesByCategories(){
		$response = array();

		$result = $this->PartnershipModel->getAllCompaniesByCategories($this->input->post('category'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'data available!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'no data available!';
		}

		echo json_encode($response);
	}

	public function getAllCompaniesByKeyword(){
		$response = array();

		$result = $this->PartnershipModel->getAllCompaniesByKeyword($this->input->post('value'));

		if($result){
			$response['status'] = 200;
			$response['data'] = $result;
			$response['message'] = 'data available!';
		}else{
			$response['status'] = 500;
			$response['message'] = 'no data available!';
		}

		echo json_encode($response);
	}

	public function sendRequest(){

		$response = array();
		$data = array();

		$User_Session = $this->session->userdata('User_Session');
		$pID = null;
		$profileType = null;
		$profileName = null;
		$profileEmail = null;
		$profileContact = null;
		$profileRating = null;

		if($User_Session['User_Job'] == "Candidate"){

			$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);
			$pID = $profile['candidate_profile_id'];
			$profileType = 'Candidate';
			$profileName = $profile['candidate_full_name'];
			$profileContact = $profile['candidate_phone_no'];
			$profileEmail = $profile['candidate_email'];
			$profileRating = $profile['candidate_rating'];
		}else{

			$profile = $this->ProfileModel->getProfile($User_Session['ID']);

			$pID = $profile['company_profile_id'];
			$profileType = 'Employer';
			$profileName = $profile['company_name'];
			$profileContact = $profile['company_phone'];
			$profileEmail = $profile['company_email'];
			$profileRating = $profile['company_rating'];
		}


		if($this->PartnershipModel->isRequestExist($this->input->post('profileID'), $this->input->post('userID'), $User_Session['ID'], $pID)){

			$data['company_id'] = $this->input->post('profileID');
			$data['campany_user_id'] = $this->input->post('userID');
			$data['sender_user_id'] = $User_Session['ID'];
			$data['sender_profile_id'] = $pID;
			$data['profile_type'] = $profileType;
			$data['sender_name'] = $profileName;
			$data['sender_email'] = $profileEmail;
			$data['sender_contact_no'] = '+94'.$profileContact;
			$data['sender_rating'] = $profileRating;

			$result = $this->PartnershipModel->saveRequest($data);

			if($result){
				$response['status'] = 200;
				$response['message'] = 'Request has been sent successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Request has not been sent successfully!';
			}

		}else{
			$response['status'] = 500;
			$response['message'] = 'Your request already sent!';
		}

		echo json_encode($response);

	}

	function getAllPartnershipRequestsForTable(){

		header("Content-type:application/json");

		ini_set('max_execution_time', 0);
		ini_set('memory_limit','2048M');

		$User_Session = $this->session->userdata('User_Session');
		$profileID = $this->ProfileModel->getProfileID($User_Session['ID']);

		$param['draw'] = $this->input->get('draw');
		$param['length'] = $this->input->get('length');
		$param['start'] = $this->input->get('start');
		$param['columns'] = $this->input->get('columns');
		$param['search'] = $this->input->get('search[value]');
		$param['order'] = $this->input->get('order');
		$param['user_id'] = $User_Session['ID'];
		$param['profile_id'] = $profileID[0]->company_profile_id;

		echo json_encode($this->PartnershipModel->getAllPartnershipRequestsForTable($param));


	}
}
