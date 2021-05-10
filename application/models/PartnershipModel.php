<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-10
 * Time: 10:46
 */

class PartnershipModel extends CI_Model
{

	function isEnabled($profile_id){

		$this->db->select('company_partnership');
		$this->db->from('tbl_company_profile');
		$this->db->where('company_profile_id', $profile_id);

		$result = $this->db->get()->result();

		if($result != null){
			if($result[0]->company_partnership == 0){
				return false;
			}else{
				return true;
			}
		}else{
			return null;
		}
	}

	function updateStatus($id, $status){
		$this->db->set('company_partnership', $status);
		$this->db->where('company_profile_id', $id);
		return $this->db->update('tbl_company_profile');
	}

	function getAllCompanies(){
		$this->db->select('tbl_company_profile.*, tbl_sectors.sector_name');
		$this->db->from('tbl_company_profile');
		$this->db->join('tbl_users', 'tbl_users.user_id = tbl_company_profile.user_id');
		$this->db->join('tbl_sectors', 'tbl_sectors.sector_id = tbl_users.user_job');
		$this->db->where('tbl_company_profile.company_partnership', 1);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllCompaniesByCities($name){
		$this->db->select('tbl_company_profile.*, tbl_sectors.sector_name');
		$this->db->from('tbl_company_profile');
		$this->db->join('tbl_users', 'tbl_users.user_id = tbl_company_profile.user_id');
		$this->db->join('tbl_sectors', 'tbl_sectors.sector_id = tbl_users.user_job');
		$this->db->where('tbl_company_profile.company_partnership', 1);
		$this->db->where('tbl_company_profile.company_city', $name);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllCompaniesByCategories($category){

		$this->db->select('tbl_company_profile.*, tbl_sectors.sector_name');
		$this->db->from('tbl_company_profile');
		$this->db->join('tbl_users', 'tbl_users.user_id = tbl_company_profile.user_id');
		$this->db->join('tbl_sectors', 'tbl_sectors.sector_id = tbl_users.user_job');
		$this->db->where('tbl_company_profile.company_partnership', 1);
		$this->db->where('tbl_sectors.sector_name', $category);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllCompaniesByKeyword($value){

		$this->db->select('tbl_company_profile.*, tbl_sectors.sector_name');
		$this->db->from('tbl_company_profile');
		$this->db->join('tbl_users', 'tbl_users.user_id = tbl_company_profile.user_id');
		$this->db->join('tbl_sectors', 'tbl_sectors.sector_id = tbl_users.user_job');
		$this->db->where('tbl_company_profile.company_partnership', 1);
		$this->db->where("(`tbl_company_profile.company_name` LIKE '%$value%'");
		$this->db->or_where("`tbl_company_profile.company_city` LIKE '%$value%'");
		$this->db->or_where("`tbl_sectors.sector_name` LIKE '%$value%')");

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}

	}

	function isRequestExist($profileID, $userID, $sender_user_id, $sender_profile_id){

		$this->db->select('*');
		$this->db->from('tbl_partnership_request');
		$this->db->where('company_id', $profileID);
		$this->db->where('campany_user_id', $userID);
		$this->db->where('sender_user_id', $sender_user_id);
		$this->db->where('sender_profile_id', $sender_profile_id);

		$result = $this->db->get()->num_rows();

		if($result==0){
			return true;
		}else{
			return false;
		}

	}

	function deleteRequest($id){
		$this->db->where('partnership_request_id', $id);
		$this->db->delete('tbl_partnership_request');

		return $this->db->affected_rows();
	}

	function saveRequest($data){

		$result = $this->db->insert('tbl_partnership_request', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function getUserID($id){
		$this->db->select('sender_user_id, profile_type');
		$this->db->from('tbl_partnership_request');
		$this->db->where('partnership_request_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			$this->updateReadStatus($id);
			return  $result;
		}else{
			return null;
		}


	}

	function updateReadStatus($id){
		$this->db->set('read_status', 1);
		$this->db->where('partnership_request_id', $id);
		$this->db->update('tbl_partnership_request');
	}

	function getAllPartnershipRequestsForTable($param){
		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_partnership_request');
		$this->db->where('company_id', $param['profile_id']);
		$this->db->where('campany_user_id', $param['user_id']);
		$this->db->where("(`partnership_request_id` LIKE '%$filter%'");
		$this->db->or_where("`sender_name` LIKE '%$filter%'");
		$this->db->or_where("`sender_email` LIKE '%$filter%'");
		$this->db->or_where("`sender_contact_no` LIKE '%$filter%'");
		$this->db->or_where("`sender_rating` LIKE '%$filter%')");
		$this->db->order_by("read_status", "asc");

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
		$this->db->from('tbl_partnership_request');
		$this->db->where('company_id', $profileID);
		$this->db->where('campany_user_id', $userID);
		$this->db->order_by("read_status", "asc");

		$query = $this->db->get();

		return $query->num_rows();
	}

}
