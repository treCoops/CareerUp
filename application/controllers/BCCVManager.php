<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:56
 */

class BCCVManager extends CI_Controller
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
		$this->load->model('CandidateDocumentModel');

	}

	public function index()
	{
		$data['title'] = "Candidate CV Manager | CareerUp";
		$data['page'] = "Backend/Candidate/cv_manager";
		$data['nav'] = "cv_manager_c";
		$this->load->view('Backend/Template/template', $data);
	}

	public function getDocuments(){

		$response = array();

		$result = $this->CandidateDocumentModel->getDocuments($this->input->post('ID'));

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

	public function getCLDetails(){
		header("Content-type:application/json");

		ini_set('max_execution_time', 0);
		ini_set('memory_limit','2048M');

		$User_Session = $this->session->userdata('User_Session');
		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$param['draw'] = $this->input->get('draw');
		$param['length'] = $this->input->get('length');
		$param['start'] = $this->input->get('start');
		$param['columns'] = $this->input->get('columns');
		$param['search'] = $this->input->get('search[value]');
		$param['order'] = $this->input->get('order');
		$param['user_id'] = $User_Session['ID'];
		$param['profile_id'] = $profile['candidate_profile_id'];

		echo json_encode($this->CandidateDocumentModel->getDocDetails($param, "CL"));
	}

	public function getCVDetails(){
		header("Content-type:application/json");

		ini_set('max_execution_time', 0);
		ini_set('memory_limit','2048M');

		$User_Session = $this->session->userdata('User_Session');
		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$param['draw'] = $this->input->get('draw');
		$param['length'] = $this->input->get('length');
		$param['start'] = $this->input->get('start');
		$param['columns'] = $this->input->get('columns');
		$param['search'] = $this->input->get('search[value]');
		$param['order'] = $this->input->get('order');
		$param['user_id'] = $User_Session['ID'];
		$param['profile_id'] = $profile['candidate_profile_id'];

		echo json_encode($this->CandidateDocumentModel->getDocDetails($param, "CV"));
	}

	public function addCL(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$config['upload_path'] = './assets/documents/candidate/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['max_size'] = 3000;
		$config['max_width'] = 2500;
		$config['max_height'] = 2500;
		$config['file_name'] = $profile['candidate_profile_id']."-".$profile['candidate_full_name']."-Cover letter";

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('txtCoverletter')) {
			$error = $this->upload->display_errors();
			$response['UploadError'] = $error;
		}else{
			$img = $this->upload->data();

			$data['document_name'] = $img["file_name"];
		}

		$data['user_id'] = $User_Session['ID'];
		$data['profile_id'] = $profile['candidate_profile_id'];
		$data['document_type'] = 'CL';

		if($this->CandidateDocumentModel->isExists($data, "CL")){
			if($this->CandidateDocumentModel->addDoc($data)){
				$response['status'] = 200;
				$response['message'] = 'Cover letter has been uploaded successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Cover letter has not been uploaded!';
			}
		}else{
			$old = $this->CandidateDocumentModel->getData($data, "CL");

			if($old){
				$currentCLDoc = $old[0]->document_name;
				if($currentCLDoc != null){
					unlink('assets/documents/candidate/'.$currentCLDoc);
				}
			}

			if($this->CandidateDocumentModel->updateDoc($data, "CL")){
				$response['status'] = 200;
				$response['message'] = 'Cover letter details have been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Cover letter details have not been updated!';
			}

		}

		echo json_encode($response);

	}

	public function addCV(){

		$User_Session = $this->session->userdata('User_Session');

		$response = array();
		$data = array();

		$profile = $this->ProfileModel->getCandidateProfile($User_Session['ID']);

		$config['upload_path'] = './assets/documents/candidate/';
		$config['allowed_types'] = 'pdf|doc|docx';
		$config['max_size'] = 3000;
		$config['max_width'] = 2500;
		$config['max_height'] = 2500;
		$config['file_name'] = $profile['candidate_profile_id']."-".$profile['candidate_full_name']."-CV";

		$this->load->library('upload', $config);


		if (!$this->upload->do_upload('txtCV')) {
			$error = $this->upload->display_errors();
			$response['UploadError'] = $error;
		}else{
			$img = $this->upload->data();

			$data['document_name'] = $img["file_name"];
		}

		$data['user_id'] = $User_Session['ID'];
		$data['profile_id'] = $profile['candidate_profile_id'];
		$data['document_type'] = 'CV';

		if($this->CandidateDocumentModel->isExists($data, "CV")){
			if($this->CandidateDocumentModel->addDoc($data)){
				$response['status'] = 200;
				$response['message'] = 'Cover letter has been uploaded successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Cover letter has not been uploaded!';
			}
		}else{
			$old = $this->CandidateDocumentModel->getData($data, "CV");

			if($old){
				$currentCLDoc = $old[0]->document_name;
				if($currentCLDoc != null){
					unlink('assets/documents/candidate/'.$currentCLDoc);
				}
			}

			if($this->CandidateDocumentModel->updateDoc($data, "CV")){
				$response['status'] = 200;
				$response['message'] = 'Cover letter details have been updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Cover letter details have not been updated!';
			}

		}

		echo json_encode($response);

	}
}
