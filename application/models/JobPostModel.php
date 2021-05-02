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

	function getAllPostsForTable($param){
		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->where("(`tbl_job_post.partner_id` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.partner_name` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.partner_description` LIKE '%$filter%')");
		$this->db->limit($param['length'],$param['start']);
		$query = $this->db->get();
		$result = $query->result();

		$returnData['data'] =  $result;
		$returnData['recordsTotal'] = $this->getRowCountGetAllPostsForTable();
		$returnData['draw'] = $param['draw'];

		if($filter == null)
			$returnData['recordsFiltered'] = $this->getRowCountGetAllPostsForTable();
		else
			$returnData['recordsFiltered'] = $query->num_rows();

		return $returnData;
	}

	function getRowCountGetAllPostsForTable(){

		$this->db->select('*');
		$this->db->from('tbl_partner');
		$query = $this->db->get();

		return $query->num_rows();
	}


}
