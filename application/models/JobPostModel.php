<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-30
 * Time: 15:29
 */

class JobPostModel extends CI_Model
{

	function createJobPost($data){
		$result = $this->db->insert('tbl_job_post', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function isJobPostExist($data){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->where('job_post_profile_id', $data['job_post_profile_id']);
		$this->db->where('job_post_title', $data['job_post_title']);
		$this->db->where('job_post_deadline', $data['job_post_deadline']);
		$this->db->where('job_post_visibility', 1);

		$result = $this->db->get()->result();

		if($result == null){
			return true;
		}else{
			return false;
		}
	}


}
