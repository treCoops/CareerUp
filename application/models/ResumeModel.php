<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-02
 * Time: 16:11
 */

class ResumeModel extends CI_Model
{

	function isEducationExists($data)
	{
		$this->db->select('*');
		$this->db->from('tbl_education');
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('education_college_name', $data['education_college_name']);
		$this->db->where('education_qualification_name', $data['education_qualification_name']);

		$result = $this->db->get()->result();

		if ($result == null) {
			return true;
		} else {
			return false;
		}
	}

	function isWorkExists($data){
		$this->db->select('*');
		$this->db->from('tbl_work');
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('work_company_name', $data['work_company_name']);
		$this->db->where('work_position', $data['work_position']);

		$result = $this->db->get()->result();

		if ($result == null) {
			return true;
		} else {
			return false;
		}
	}

	function isAwardExists($data){
		$this->db->select('*');
		$this->db->from('tbl_award');
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('award_name', $data['award_name']);
		$this->db->where('award_date', $data['award_date']);

		$result = $this->db->get()->result();

		if ($result == null) {
			return true;
		} else {
			return false;
		}
	}

	function addEducation($data){
		$result = $this->db->insert('tbl_education', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function addAward($data){
		$result = $this->db->insert('tbl_award', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function addWork($data){
		$result = $this->db->insert('tbl_work', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function updateEducation($data, $id){

		$this->db->where('education_id', $id);
		$result = $this->db->update('tbl_education', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function editWork($data, $id){

		$this->db->where('work_id', $id);
		$result = $this->db->update('tbl_work', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function updateAward($data, $id){

		$this->db->where('award_id', $id);
		$result = $this->db->update('tbl_award', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function deleteEducation($id){
		$this->db->where('education_id', $id);
		$this->db->delete('tbl_education');

		return $this->db->affected_rows();
	}

	function deleteAward($id){
		$this->db->where('award_id', $id);
		$this->db->delete('tbl_award');

		return $this->db->affected_rows();
	}

	function deleteWork($id){
		$this->db->where('work_id', $id);
		$this->db->delete('tbl_work');

		return $this->db->affected_rows();
	}

	function getSelectedEducationDetail($id){
		$this->db->select('*');
		$this->db->from('tbl_education');
		$this->db->where('education_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getSelectedWorkDetail($id){
		$this->db->select('*');
		$this->db->from('tbl_work');
		$this->db->where('work_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getSelectedAwardDetail($id){
		$this->db->select('*');
		$this->db->from('tbl_award');
		$this->db->where('award_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllEducationDetails($id){
		$this->db->select('*');
		$this->db->from('tbl_education');
		$this->db->where('user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllAwardDetails($id){
		$this->db->select('*');
		$this->db->from('tbl_award');
		$this->db->where('user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getAllWorkDetails($id){
		$this->db->select('*');
		$this->db->from('tbl_work');
		$this->db->where('user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

}
