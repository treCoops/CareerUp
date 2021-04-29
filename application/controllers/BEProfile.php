<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 13:40
 */

class BEProfile extends CI_Controller
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

		$User_Session = $this->session->userdata('User_Session');

		if ($User_Session == null) {
			redirect(base_url('Login/notLoggedIn'));
		}else{
			$data['title'] = "Employer Profile | CareerUp";
			$data['page'] = "Backend/Employer/profile";
			$data['profile'] = $this->ProfileModel->getProfile($User_Session['ID']);
			$data['nav'] = "profile";
			$this->load->view('Backend/Template/template', $data);
		}
	}

	public function getProfile(){
		$User_Session = $this->session->userdata('User_Session');

		$result = $this->ProfileModel->getProfile($User_Session['ID']);

		echo json_encode($result);

	}

	public function manageProfile(){

		$User_Session = $this->session->userdata('User_Session');

		$rand_name = $this->genRandomString()."_".session_id()."_".time();

		$config['upload_path'] = './assets/images/profile/company/';
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
			$response['error'] = $error;
			$data['company_profile_image_url'] = null;

		}else{
			$img = $this->upload->data();
			$data['company_profile_image_url'] = $img["file_name"];
		}
		$data['user_id'] = $User_Session['ID'];
		$data['company_name'] = $this->input->post('txtCompanyName');
		$data['company_email'] = $this->input->post('txtCompanyEmail');
		$data['company_phone'] = $this->input->post('txtCompanyPhone');
		$data['company_website'] = $this->input->post('txtCompanyWebSite');
		$data['company_start_date'] = $this->input->post('txtCompanyStartDate');
		$data['company_team_size'] = $this->input->post('cmbCompanyTeamSize');
		$data['company_allow_disability'] = $this->input->post('cmbCompanyAllowDisability');
		$data['company_about'] = $this->input->post('txtCompanyAbout');
		$data['company_country'] = $this->input->post('cmbCompanyCountry');
		$data['company_city'] = $this->input->post('cmbCompanyCity');
		$data['company_address'] = $this->input->post('txtCompanyAddress');
		$data['company_location_lat'] = $this->input->post('txtCompanyLocationLatitude');
		$data['company_location_lng'] = $this->input->post('txtCompanyLocationLongitude');
		$data['company_location_zoom'] = $this->input->post('txtCompanyLocationZoom');
		$data['company_facebook'] = $this->input->post('txtCompanyFacebook');
		$data['company_linkedin'] = $this->input->post('txtCompanyLinkedin');
		$data['company_instagram'] = $this->input->post('txtCompanyInstagram');
		$data['company_twitter'] = $this->input->post('txtCompanyTwitter');

		$data['company_partnership'] = 0;

		$categories = $this->input->post('cmbCompanyCategories');

		if($this->input->post('txtCompanyDataExist') == "NEW"){
			$key = $this->ProfileModel->createProfile($data);
			if($key){

				$category['user_id'] = $User_Session['ID'];
				$category['profile_id'] = $key;

				for($i=0; $i<sizeof($categories); $i++){
					$category['category_name'] = $categories[$i];
					$this->ProfileModel->addCategory($category);
				}

				$response['status'] = 200;
				$response['message'] = 'Profile has created successfully.!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later.!';
			}
		}else{
			$result = $this->ProfileModel->updateProfile($User_Session['ID'], $data);
			if($result){
				$response['status'] = 200;
				$response['message'] = 'Profile has updated successfully.!';
			}else{
				$response['status'] = 500;
				$response['message'] = 'Something went wrong, Please try again later.!';
			}
		}

		echo json_encode($response);


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
