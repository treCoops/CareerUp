<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-27
 * Time: 11:23
 */

class NotFound extends CI_Controller
{
	public function index()
	{
		$this->load->view('404');
	}
}
