<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:23
 */

class Contact extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Contact | CareerUp";
		$data['page'] = "Frontend/contact";
		$this->load->view('Frontend/Template/template', $data);
	}
}
