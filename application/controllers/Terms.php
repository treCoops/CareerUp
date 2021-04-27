<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 12:46
 */

class Terms extends CI_Controller
{
	public function index()
	{
		$data['title'] = "Jobs | Terms & Conditions";
		$data['page'] = "Frontend/terms";
		$this->load->view('Frontend/Template/template', $data);
	}

}
