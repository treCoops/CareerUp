<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 14:13
 */

class BEChangePassword extends CI_Controller
{
	function __construct() {
		parent::__construct();

		$this->load->library('session');

		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['title'] = "Employer Change Password | CareerUp";
		$data['page'] = "Backend/Employer/change_password";
		$data['nav'] = "change_e";
		$this->load->view('Backend/Template/template', $data);
	}

	public function changePassword(){

		$response = array();
		$User_Session = $this->session->userdata('User_Session');

		$dbPassword = $this->UserModel->getCurrentPassword($User_Session['ID']);

		if($dbPassword[0]->user_password == $this->getHash($this->input->post('txtOldPassword'))){
			$result = $this->UserModel->changePassword($User_Session['ID'], $this->getHash($this->input->post('txtConfirmPassword')));
			if($result){
				$response['status'] = 200;
				$response['message'] = 'Password updated successfully!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Internal server error!';
			}
		}else{
			$response['status'] = 500;
			$response['message'] = 'Current password is incorrect!';
		}

		echo json_encode($response);

	}


	function getHash($password){
		return hash('sha256', $password);
	}
}
