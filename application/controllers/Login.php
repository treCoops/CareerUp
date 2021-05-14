<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:36
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$this->load->model('JobModel');
		$this->load->model('SectorModel');
		$this->load->model('UserModel');
		$this->load->model('ProfileModel');
	}

	public function index()
	{
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = '';
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$this->load->view('Frontend/Template/template', $data);
	}


	public function signUp(){

		$data = array();
		$response = array();

		$type = $this->input->post('txtType');

		if($type == "Candidate"){
			$data['user_name'] = $this->input->post('txtCandidateUserName');
			$data['user_email'] = $this->input->post('txtCandidateEmail');
			$data['user_contact_no'] = $this->input->post('txtCandidateContactNo');
			$data['user_job'] = $this->input->post('cmbCandidateJob');
			$data['user_password'] = $this->getHash($this->input->post('txtCandidatePassword'));
			$data['user_type'] = $this->input->post('txtType');
			$data['user_active'] = 1;
			$data['user_blocked'] = 0;
			$data['img_url'] = 'man.png';
		}

		if($type == "Employer"){
			$data['user_name'] = $this->input->post('txtEmployerUserName');
			$data['user_email'] = $this->input->post('txtEmployerEmail');
			$data['user_contact_no'] = $this->input->post('txtEmployerContactNo');
			$data['user_job'] = $this->input->post('cmbEmployerSector');
			$data['user_password'] = $this->getHash($this->input->post('txtEmployerPassword'));
			$data['user_type'] = $this->input->post('txtType');
			$data['user_active'] = 1;
			$data['user_blocked'] = 0;
			$data['img_url'] = 'man.png';
		}

		if($this->UserModel->isUserExist($data)){
			if($this->UserModel->createUser($data)){
				$response['status'] = 200;
				$response['message'] = 'User created successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later..';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'User already exists!';
		}

		$response['type'] = $type;

		echo json_encode($response);

	}

	public function signIn(){

		$email = $this->input->post('txtEmailForLogin');
		$password = $this->input->post('txtPasswordForLogin');

		$dbpassword1 = $this->UserModel->validateEmail($email);

		if ($dbpassword1) {

			$dbpassword = $dbpassword1[0]->user_password;

			if($this->isValidPassword($password, $dbpassword)) {

				$user = $this->UserModel->validateUser($email, $dbpassword);

				if($this->isBlocked($user[0]->user_blocked)) {

					if($this->isDeactive($user[0]->user_active)) {

						$imgUrl = '';

						if($user[0]->user_type == 'Candidate'){
							$url = $this->ProfileModel->getCandidateProfileImage($user[0]->user_id);
							if($url != null){
								$imgUrl = $url;
							}
						}else{

							$url = $this->ProfileModel->getEmployerProfileImage($user[0]->user_id);
							if($url != null){
								$imgUrl = $url;
							}
						}


						$Login_User = array(
							'ID' => $user[0]->user_id,
							'Username' => $user[0]->user_name,
							'Email' => $user[0]->user_email,
							'Active_Status' => $user[0]->user_active,
							'Blocked_Status' => $user[0]->user_blocked,
							'Account_Type' => $user[0]->user_job,
							'User_Job' => $user[0]->user_type,
							'Profile_Image' => $imgUrl,
						);

						$this->session->set_userdata('User_Session', $Login_User);
						redirect(base_url('Home'));

					}else{
						redirect(base_url('Login/deactive'));

					}

				}else{
					redirect(base_url('Login/blocked'));
				}

			} else {
				redirect(base_url('Login/invalid'));
			}
		} else {
			redirect(base_url('Login/invalid'));
		}
	}

	public function notLoggedIn()
	{
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$data['error_message'] = 'You are not logged in.!';
		$this->session->unset_userdata('User_Session');
		$this->load->view('Frontend/Template/template', $data);
	}

	public function noPermission()
	{
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = 'You have no permission.!';
		$this->load->view('Frontend/Template/template', $data);
	}

	public function blocked()
	{
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = 'Your account has been blocked, Please inform administrator.!';
		$this->load->view('Frontend/Template/template', $data);
	}

	public function deactive()
	{
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = 'Your account has been disabled. Please inform administrator.!';
		$this->load->view('Frontend/Template/template', $data);
	}

	public function invalid()
	{
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = 'Invalid username or password.!';
		$this->load->view('Frontend/Template/template', $data);
	}

	public function logOut()
	{
		$data['jobs'] = $this->JobModel->getAllJobs();
		$data['sectors'] = $this->SectorModel->getAllSectors();
		$this->session->unset_userdata('User_Session');
		$data['title'] = "Login | CareerUp";
		$data['page'] = "Frontend/login";
		$data['error_message'] = 'Please sign in to continue.!';
		$this->load->view('Frontend/Template/template', $data);
	}

	function isValidPassword($password, $dbpassword)
	{
		$hash = hash('sha256', $password);

		return $hash == $dbpassword;
	}

	function getHash($password){
		return hash('sha256', $password);
	}

	function isBlocked($blocked_status)
	{

		if($blocked_status == 1)
			return false;
		if($blocked_status == 0)
			return true;
	}

	function isDeactive($active_status)
	{
		if($active_status == 1)
			return true;
		if($active_status == 0)
			return false;
	}
}
