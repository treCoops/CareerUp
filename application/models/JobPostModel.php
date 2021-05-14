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

	function updateJobPost($id, $data){
		$this->db->where('job_post_id', $id);
		$result = $this->db->update('tbl_job_post', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function deletePost($id){
		$this->db->where('job_post_id', $id);
		$this->db->delete('tbl_job_post');

		return $this->db->affected_rows();
	}

	function getAllPostsForTable($param){
		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->where('tbl_job_post.job_post_profile_id', $param['id']);

		$this->db->where("(`tbl_job_post.job_post_id` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.job_post_title` LIKE '%$filter%'");
		$this->db->or_where("`tbl_job_post.job_post_deadline` LIKE '%$filter%')");
		$this->db->limit($param['length'],$param['start']);
		$query = $this->db->get();
		$result = $query->result();

		$returnData['data'] =  $result;
		$returnData['recordsTotal'] = $this->getRowCountGetAllPostsForTable($param['id']);
		$returnData['draw'] = $param['draw'];

		if($filter == null)
			$returnData['recordsFiltered'] = $this->getRowCountGetAllPostsForTable($param['id']);
		else
			$returnData['recordsFiltered'] = $query->num_rows();

		return $returnData;
	}

	function selectedPostDetails($id){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->where('tbl_job_post.job_post_id', $id);
		return $this->db->get()->result();
	}

	function getRowCountGetAllPostsForTable($id){

		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->where('tbl_job_post.job_post_profile_id', $id);
		$query = $this->db->get();

		return $query->num_rows();
	}

	function getAllJobs(){

		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}

	}

	function getAllJobsByCities($cityName){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');
		$this->db->where('tbl_company_profile.company_city', $cityName);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllJobsByExperience($ex){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');
		$this->db->where('tbl_job_post.job_post_experience_level', $ex);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}


	function getAllJobsByKnowledge($kw){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');
		$this->db->where('tbl_job_post.job_post_knowledge_level', $kw);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllJobsByGenderWise($kw){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');
		$this->db->where('tbl_job_post.job_post_gender', $kw);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllJobsByKeyword($value){
		$this->db->select('*');
		$this->db->from('tbl_job_post');
		$this->db->join('tbl_company_profile', 'tbl_company_profile.company_profile_id = tbl_job_post.job_post_profile_id');
		$this->db->where("(`tbl_company_profile.company_name` LIKE '%$value%'");
		$this->db->or_where("`tbl_job_post.job_post_title` LIKE '%$value%'");
		$this->db->or_where("`tbl_company_profile.company_city` LIKE '%$value%')");

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

}
