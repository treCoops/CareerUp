<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-28
 * Time: 15:59
 */

class JobModel extends CI_Model
{

	function getAllJobs(){
		$this->db->select('job_id, job_name');
		$this->db->from('tbl_jobs');

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllJobRequestsForTable($param){

		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_job_apply_request');
		$this->db->join('tbl_job_post', 'tbl_job_post.job_post_id = tbl_job_apply_request.job_id');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_apply_request.company_profile_id');
		$this->db->where('tbl_job_apply_request.candidate_profile_id', $param['profile_id']);
		$this->db->where('tbl_job_apply_request.candidate_user_id', $param['user_id']);
		$this->db->where("(`tbl_job_apply_request.job_apply_id` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.job_post_title` LIKE '%$filter%'");
		$this->db->or_where("`tbl_company_profile.company_name` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_apply_request.read_status` LIKE '%$filter%')");
		$this->db->order_by("tbl_job_apply_request.read_status", "asc");

		$this->db->limit($param['length'],$param['start']);
		$query = $this->db->get();
		$result = $query->result();

		$returnData['data'] =  $result;
		$returnData['recordsTotal'] = $this->getRowCount($param['profile_id'], $param['user_id']);
		$returnData['draw'] = $param['draw'];

		if($filter == null)
			$returnData['recordsFiltered'] = $this->getRowCount($param['profile_id'], $param['user_id']);
		else
			$returnData['recordsFiltered'] = $query->num_rows();

		return $returnData;

	}

	function getRowCount($profileID, $userID){

		$this->db->select('*');
		$this->db->from('tbl_job_apply_request');
		$this->db->join('tbl_job_post', 'tbl_job_post.job_post_id = tbl_job_apply_request.job_id');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_apply_request.company_profile_id');
		$this->db->where('tbl_job_apply_request.candidate_profile_id', $profileID);
		$this->db->where('tbl_job_apply_request.candidate_user_id', $userID);
		$this->db->order_by("read_status", "asc");

		$query = $this->db->get();

		return $query->num_rows();
	}

	function getIDs($id){

		$this->db->select('company_user_id, job_id');
		$this->db->from('tbl_job_apply_request');
		$this->db->where('job_apply_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			$this->updateReadStatus($id);
			return $result;
		}else{
			return null;
		}

	}

	function getCandidateIDs($id){

		$this->db->select('candidate_user_id');
		$this->db->from('tbl_job_apply_company');
		$this->db->where('job_apply_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			$this->updateReadStatus($id);
			return $result;
		}else{
			return null;
		}

	}

	function updateReadStatus($id){
		$this->db->set('read_status', 1);
		$this->db->where('job_apply_id', $id);
		$this->db->update('tbl_job_apply_request');
	}

	function deleteRequest($id){
		$this->db->where('job_apply_id', $id);
		$this->db->delete('tbl_job_apply_request');

		return $this->db->affected_rows();
	}

	function deleteCandidateRequest($id){
		$this->db->where('job_apply_id', $id);
		$this->db->delete('tbl_job_apply_company');

		return $this->db->affected_rows();
	}

	function getAllJobApplicationForTable($param){

		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_job_apply_company');
		$this->db->join('tbl_job_post', 'tbl_job_post.job_post_id = tbl_job_apply_company.job_id');
		$this->db->join('tbl_candidate_profile', 'tbl_candidate_profile.candidate_profile_id = tbl_job_apply_company.candidate_profile_id');
		$this->db->where('tbl_job_apply_company.company_profile_id', $param['profile_id']);
		$this->db->where('tbl_job_apply_company.company_user_id', $param['user_id']);
		$this->db->where("(`tbl_job_apply_company.job_apply_id` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.job_post_title` LIKE '%$filter%'");
		$this->db->or_where("`tbl_candidate_profile.candidate_full_name` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_apply_company.read_status` LIKE '%$filter%')");
		$this->db->order_by("tbl_job_apply_company.read_status", "asc");

		$this->db->limit($param['length'],$param['start']);
		$query = $this->db->get();
		$result = $query->result();

		$returnData['data'] =  $result;
		$returnData['recordsTotal'] = $this->getRowCountEmployer($param['profile_id'], $param['user_id']);
		$returnData['draw'] = $param['draw'];

		if($filter == null)
			$returnData['recordsFiltered'] = $this->getRowCountEmployer($param['profile_id'], $param['user_id']);
		else
			$returnData['recordsFiltered'] = $query->num_rows();

		return $returnData;

	}

	function getRowCountEmployer($profileID, $userID){

		$this->db->select('*');
		$this->db->from('tbl_job_apply_company');
		$this->db->join('tbl_job_post', 'tbl_job_post.job_post_id = tbl_job_apply_company.job_id');
		$this->db->join('tbl_candidate_profile', 'tbl_candidate_profile.candidate_profile_id = tbl_job_apply_company.candidate_profile_id');
		$this->db->where('tbl_job_apply_company.company_profile_id', $profileID);
		$this->db->where('tbl_job_apply_company.company_user_id', $userID);
		$this->db->order_by("read_status", "asc");

		$query = $this->db->get();

		return $query->num_rows();
	}

}
