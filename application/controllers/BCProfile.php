<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:31
 */

class BCProfile extends CI_Controller
{

	function __construct() {

		parent::__construct();

		$this->load->library('session');
		$this->load->helper('url', 'form');

		$User_Session = $this->session->userdata('User_Session');

		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('ProfileModel');

	}

	public function index()
	{
		$data['title'] = "Candidate Profile | CareerUp";
		$data['page'] = "Backend/Candidate/profile";
		$data['nav'] = "profile_c";
		$this->load->view('Backend/Template/template', $data);
	}

	public function getProfile(){
		$response = array();

		$User_Session = $this->session->userdata('User_Session');
		$result = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Success.!';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No data available.!';
		}

		echo json_encode($response);
	}

	function manageProfile(){

		$User_Session = $this->session->userdata('User_Session');

		$rand_name = $this->genRandomString()."_".session_id()."_".time();

		$config['upload_path'] = './assets/images/profile/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 3000;
		$config['max_width'] = 2500;
		$config['max_height'] = 2500;
		$config['file_name'] = $rand_name;

		$this->load->library('upload', $config);

		$data = array();
		$response = array();

		if (!$this->upload->do_upload('imageUpload')) {
			$error = $this->upload->display_errors();
			$data['candidate_profile_image_url'] = null;

			$result = $this->ProfileModel->getCandidateProfile($User_Session['ID']);
			if($result){
				$currentImage = $result['candidate_profile_image_url'];

				if($currentImage != null){
					$data['candidate_profile_image_url'] = $currentImage;
				}else{
					$response['status'] = 500;
					$response['message'] = 'Please upload a profile image.!';
				}
			}
		}else{
			$img = $this->upload->data();

			$result = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

			if($result){
				$currentImage = $result['candidate_profile_image_url'];

				if($currentImage != null){
					unlink('assets/images/profile/'.$currentImage);
				}
			}

			$data['candidate_profile_image_url'] = $img["file_name"];
		}

		$data['user_id'] = $User_Session['ID'];
		$data['candidate_full_name'] = $this->input->post('txtCandidateFullName');
		$data['candidate_job_title'] = $this->input->post('txtCandidateJobTitle');
		$data['candidate_phone_no'] = $this->input->post('txtCandidatePhone');
		$data['candidate_email'] = $this->input->post('txtCandidateEmail');
		$data['candidate_website'] = $this->input->post('txtCandidateWebsite');
		$data['candidate_experience'] = $this->input->post('cmbCandidateExperienceLevel');
		$data['candidate_date_of_birth'] = $this->input->post('txtCandidateDOB');
		$data['candidate_age'] = $this->input->post('txtCandidateAge');
		$data['candidate_education_level'] = $this->input->post('cmbCandidateEducationLevel');
		$data['candidate_disability'] = $this->input->post('cmbCandidateDisability');
		$data['candidate_description'] = $this->input->post('txtCandidateDescription');
		$data['candidate_facebook'] = $this->input->post('txtCandidateFaceBook');
		$data['candidate_twitter'] = $this->input->post('txtCandidateTwitter');
		$data['candidate_linkedIn'] = $this->input->post('txtCandidateLinkedIn');
		$data['candidate_instagram'] = $this->input->post('txtCandidateInstagram');
		$data['candidate_country'] = $this->input->post('cmbCandidateCountry');
		$data['candidate_city'] = $this->input->post('cmbCandidateCity');
		$data['candidate_address'] = $this->input->post('txtCandidateFullAddress');
		$data['candidate_location_latitude'] = $this->input->post('txtLocationLatitude');
		$data['candidate_location_longitude'] = $this->input->post('txtLocationLongitude');
		$data['candidate_location_zoom'] = $this->input->post('txtLocationZoom');
		$data['candidate_gender'] = $this->input->post('cmbCandidateGender');

		$categories = $this->input->post('cmbCandidateCategory');
		$languages = $this->input->post('cmbCandidateLanguages');

		if($this->input->post('txtCandidateDataExist') == "NEW"){
			$key = $this->ProfileModel->createCandidateProfile($data);
			if($key){
				$category['user_id'] = $User_Session['ID'];
				$category['profile_id'] = $key;

				for($i=0; $i<sizeof($categories); $i++){
					$category['category_name'] = $categories[$i];
					$this->ProfileModel->addCandidateCategory($category);
				}

				$language['user_id'] = $User_Session['ID'];
				$language['profile_id'] = $key;
				for($i=0; $i<sizeof($languages); $i++){
					$language['language_title'] = $languages[$i];
					$this->ProfileModel->addCandidateLanguage($language);
				}

				$response['status'] = 200;
				$response['message'] = 'Profile has created successfully.!';

				$this->updateSession($data['candidate_profile_image_url']);

			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later.!';
			}
		}else{
			$result = $this->ProfileModel->updateCandidateProfile($User_Session['ID'], $data);
			if($result){

				$deleteCategories = $this->ProfileModel->deleteCandidateCategories($User_Session['ID']);

				if($deleteCategories != 0){
					$category['user_id'] = $User_Session['ID'];
					$category['profile_id'] = $this->input->post('txtProfileID');

					for($i=0; $i<sizeof($categories); $i++){
						$category['category_name'] = $categories[$i];
						$this->ProfileModel->addCandidateCategory($category);
					}

				}else{
					$response['status'] = 500;
					$response['message'] = 'Something went wrong, Please try again later.!';
				}

				$deleteLanguages = $this->ProfileModel->deleteCandidateLanguages($User_Session['ID']);

				if($deleteLanguages != 0){
					$language['user_id'] = $User_Session['ID'];
					$language['profile_id'] = $this->input->post('txtProfileID');

					for($i=0; $i<sizeof($languages); $i++){
						$language['language_title'] = $languages[$i];
						$this->ProfileModel->addCandidateLanguage($language);
					}

				}else{
					$response['status'] = 500;
					$response['message'] = 'Something went wrong, Please try again later.!';
				}

				$response['status'] = 201;
				$response['message'] = 'Profile has updated successfully.!';

				$this->updateSession($data['candidate_profile_image_url']);

			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later.!';
			}
		}

		echo json_encode($response);
	}

	function updateSession($url){

		$User_Session = $this->session->userdata('User_Session');

		$Updated_User = array(
			'ID' => $User_Session['ID'],
			'Username' => $User_Session['Username'],
			'Email' => $User_Session['Email'],
			'Active_Status' => $User_Session['Active_Status'],
			'Blocked_Status' => $User_Session['Blocked_Status'],
			'Account_Type' => $User_Session['Account_Type'],
			'User_Job' => $User_Session['User_Job'],
			'Profile_Image' => $url,
		);

		$this->session->unset_userdata('User_Session');

		$this->session->set_userdata('User_Session', $Updated_User);
	}

	function genRandomString(){
		$length = 5;
		$characters = "0123456789ABCDEFGHIJKLMNOPQRSTUVWZYZ";

		$real_string_length = strlen($characters) ;
		$string="id";

		for ($p = 0; $p < $length; $p++)
		{
			$string .= $characters[mt_rand(0, $real_string_length-1)];
		}

		return strtolower($string);
	}
}
