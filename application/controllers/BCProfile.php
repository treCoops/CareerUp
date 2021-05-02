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

		$data = array();
		$response = array();

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

			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later.!';
			}
		}

		echo json_encode($response);
	}
}
