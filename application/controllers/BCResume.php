<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:34
 */

class BCResume extends CI_Controller
{
	function __construct() {

		parent::__construct();

		$this->load->library('session');

		$User_Session = $this->session->userdata('User_Session');

		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}

		$this->load->model('ProfileModel');
		$this->load->model('ResumeModel');

	}


	public function index()
	{
		$data['title'] = "Candidate Resume | CareerUp";
		$data['page'] = "Backend/Candidate/resume";
		$data['nav'] = "resume_c";
		$this->load->view('Backend/Template/template', $data);
	}

	public function addEducation(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$data['user_id'] = $User_Session['ID'];

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);


		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['education_college_name'] = $this->input->post('cmbEducationCollageName');
		$data['education_qualification_name'] = $this->input->post('txtEducationQualificationName');
		$data['education_field_of_study'] = $this->input->post('txtEducationFieldOfStudy');
		$data['education_start_date'] = $this->input->post('txtEducationStartDate');
		$data['education_end_date'] = $this->input->post('txtEducationEndDate');
		$data['education_grade'] = $this->input->post('txtEducationGrade');
		$data['education_description'] = $this->input->post('txtEducationDescription');

		if($this->ResumeModel->isEducationExists($data)){
			if($this->ResumeModel->addEducation($data)){
				$response['status'] = 200;
				$response['message'] = 'Education record has been added successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Education record has not been added!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'This education record already exist!';
		}

		echo json_encode($response);
	}

	public function addAward(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$data['user_id'] = $User_Session['ID'];

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);


		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['award_name'] = $this->input->post('txtAwardName');
		$data['award_date'] = $this->input->post('txtAwardDate');
		$data['award_description'] = $this->input->post('txtAwardDescription');

		if($this->ResumeModel->isAwardExists($data)){
			if($this->ResumeModel->addAward($data)){
				$response['status'] = 200;
				$response['message'] = 'Award record has been added successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Award record has not been added!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'This award record already exist!';
		}

		echo json_encode($response);
	}

	public function addSkill(){
		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$data['user_id'] = $User_Session['ID'];

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);


		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['skill_name'] = $this->input->post('cmbSkillName');
		$data['skill_level'] = $this->input->post('rngSkillLevel');
		$data['skill_description'] = $this->input->post('txtSkillDescription');

		if($this->ResumeModel->isSkillExists($data)){
			if($this->ResumeModel->addSkill($data)){
				$response['status'] = 200;
				$response['message'] = 'Skill record has been added successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Skill record has not been added!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'This skill record already exist!';
		}

		echo json_encode($response);
	}

	public function updateAward(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$data['user_id'] = $User_Session['ID'];

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);


		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['award_name'] = $this->input->post('txtAwardUName');
		$data['award_date'] = $this->input->post('txtAwardUDate');
		$data['award_description'] = $this->input->post('txtAwardUDescription');

		if($this->ResumeModel->isAwardExists($data)){
			if($this->ResumeModel->updateAward($data, $this->input->post('txtAwardUID'))){
				$response['status'] = 200;
				$response['message'] = 'Award record has been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Award record has not been updated!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'No change found!';
		}

		echo json_encode($response);
	}

	public function updateSkill(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$data['user_id'] = $User_Session['ID'];

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);


		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['skill_name'] = $this->input->post('cmbSkillUName');
		$data['skill_level'] = $this->input->post('rngSkillULevel');
		$data['skill_description'] = $this->input->post('txtSkillUDescription');

		if($this->ResumeModel->isSkillExists($data)){
			if($this->ResumeModel->updateSkill($data, $this->input->post('txtSkillID'))){
				$response['status'] = 200;
				$response['message'] = 'Skill record has been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Skill record has not been updated!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'No change found!';
		}

		echo json_encode($response);
	}

	public function addWork(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$data['user_id'] = $User_Session['ID'];
		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['work_company_name'] = $this->input->post('txtWorkCompanyName');
		$data['work_position'] = $this->input->post('cmbWorkPosition');
		$data['work_location'] = $this->input->post('cmbWorkLocation');
		$data['work_start_date'] = $this->input->post('txtWorkStartDate');


		if($this->input->post('chkCurrentlyWorking') == null){
			$data['work_currently'] = 0;
			$data['work_end_date'] = $this->input->post('txtWorkEndDate');
		}else{
			$data['work_currently'] = 1;
      		$data['work_end_date'] = date('Y-m-d');
		}

		$data['experience_time'] = $this->calculateTime($this->input->post('txtWorkStartDate'), $data['work_end_date']);
		$data['work_description'] = $this->input->post('txtWorkDescription');

		if($this->ResumeModel->isWorkExists($data)){
			if($this->ResumeModel->addWork($data)){
				$response['status'] = 200;
				$response['message'] = 'Work record has been added successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Work record has not been added!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'This work record already exist!';
		}

		echo json_encode($response);
	}

	public function getAllEducationDetails(){

		$response = array();

		$result = $this->ResumeModel->getAllEducationDetails($this->input->post('ID'));
		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Data exists';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No sata exists';
		}

		echo json_encode($response);
	}

	public function getAllWorkDetails(){

		$response = array();

		$result = $this->ResumeModel->getAllWorkDetails($this->input->post('ID'));
		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Data exists';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No sata exists';
		}

		echo json_encode($response);
	}

	public function getAllAwardDetails(){

		$response = array();

		$result = $this->ResumeModel->getAllAwardDetails($this->input->post('ID'));
		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Data exists';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No sata exists';
		}

		echo json_encode($response);
	}

	public function getAllSkillDetails(){

		$response = array();

		$result = $this->ResumeModel->getAllSkillDetails($this->input->post('ID'));
		if($result != null){
			$response['status'] = 200;
			$response['message'] = 'Data exists';
			$response['data'] = $result;
		}else{
			$response['status'] = 500;
			$response['message'] = 'No sata exists';
		}

		echo json_encode($response);
	}

	public function selectedEducationDetails(){
		$response = array();
		$result = $this->ResumeModel->getSelectedEducationDetail($this->input->post('ID'));
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

	public function selectedWorkDetails(){
		$response = array();
		$result = $this->ResumeModel->getSelectedWorkDetail($this->input->post('ID'));
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

	public function selectedAwardDetails(){
		$response = array();
		$result = $this->ResumeModel->getSelectedAwardDetail($this->input->post('ID'));
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

	public function selectedSkillDetails(){
		$response = array();
		$result = $this->ResumeModel->selectedSkillDetails($this->input->post('ID'));
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

	public function editEducation(){
		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$check['user_id'] = $User_Session['ID'];
		$check['profile_id'] = $profile['candidate_profile_id'];
		$check['education_college_name'] = $this->input->post('cmbEducationUCollageName');
		$check['education_qualification_name'] = $this->input->post('txtEducationUQualificationName');

		$data['education_college_name'] = $this->input->post('cmbEducationUCollageName');
		$data['education_qualification_name'] = $this->input->post('txtEducationUQualificationName');
		$data['education_field_of_study'] = $this->input->post('txtEducationUFieldOfStudy');
		$data['education_start_date'] = $this->input->post('txtEducationUStartDate');
		$data['education_end_date'] = $this->input->post('txtEducationUEndDate');
		$data['education_grade'] = $this->input->post('txtEducationUGrade');
		$data['education_description'] = $this->input->post('txtEducationUDescription');

		if($this->ResumeModel->isEducationExists($check)){
			if($this->ResumeModel->updateEducation($data, $this->input->post('txtEducationUID'))){
				$response['status'] = 200;
				$response['message'] = 'Education record has been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Education record has not been updated!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'No change found!';
		}

		echo json_encode($response);
	}

	public function updateWork(){
		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$data['user_id'] = $User_Session['ID'];
		$data['profile_id'] = $profile['candidate_profile_id'];

		$data['work_company_name'] = $this->input->post('txtWorkUCompanyName');
		$data['work_position'] = $this->input->post('cmbWorkUPosition');
		$data['work_location'] = $this->input->post('cmbWorkULocation');
		$data['work_start_date'] = $this->input->post('txtWorkUStartDate');


		if($this->input->post('chkUCurrentlyWorking') == null){
			$data['work_currently'] = 0;
			$data['work_end_date'] = $this->input->post('txtWorkUEndDate');
		}else{
			$data['work_currently'] = 1;
			$data['work_end_date'] = date('Y-m-d');
		}

		$data['experience_time'] = $this->calculateTime($this->input->post('txtWorkUStartDate'), $data['work_end_date']);
		$data['work_description'] = $this->input->post('txtWorkUDescription');

		if($this->ResumeModel->isWorkExists($data)){
			if($this->ResumeModel->editWork($data, $this->input->post('txtWorkUID'))){
				$response['status'] = 200;
				$response['message'] = 'Work record has been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Work record has not been updated!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'No change found!';
		}

		echo json_encode($response);
	}

	public function deleteEducation(){
		$response = array();
		$response['result'] = $this->ResumeModel->deleteEducation($this->input->post('ID'));

		echo json_encode($response);
	}

	public function deleteAward(){
		$response = array();
		$response['result'] = $this->ResumeModel->deleteAward($this->input->post('ID'));

		echo json_encode($response);
	}

	public function deleteWork(){
		$response = array();
		$response['result'] = $this->ResumeModel->deleteWork($this->input->post('ID'));

		echo json_encode($response);
	}

	public function deleteSkill(){
		$response = array();
		$response['result'] = $this->ResumeModel->deleteSkill($this->input->post('ID'));

		echo json_encode($response);
	}

	public function calculateTime($startDate, $endDate){

		$diff = abs(strtotime($endDate) - strtotime($startDate));

		$years = floor($diff / (365*60*60*24));
		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));

		$yearString = '';
		$monthString = '';

		if($years > 0){
			if($years == 1){
				$yearString = $years.' Year';
			}else if($years > 1){
				$yearString = $years.' Years';
			}
		}

		if($months > 0){
			if($months == 1){
				$monthString = $months.' Month';
			}else if($months > 1){
				$monthString = $months.' Months';
			}
		}

		if($yearString != '' && $monthString != ''){
			return $yearString.' & '. $monthString;
		}else if($yearString == '' && $monthString != ''){
			return $monthString;
		}else if($yearString != '' && $monthString == ''){
			return $yearString;
		}else{
			return 'No experience';
		}
	}
}
