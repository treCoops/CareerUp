<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-04
 * Time: 17:48
 */

class CandidateDocumentModel extends CI_Model
{
	function addDoc($data){
		$result = $this->db->insert('tbl_candidate_document', $data);

		if($result){
		 return true;
		}else{
		 return false;
		}
	}

	function getDocDetails($param, $type){
		$filter = $param['search'];

		$this->db->select('*');
		$this->db->from('tbl_candidate_document');
		$this->db->where('user_id', $param['user_id']);
		$this->db->where('profile_id', $param['profile_id']);
		$this->db->where('document_type', $type);

		$query = $this->db->get();
		$result =$query->result();

		$returnData['data'] =  $result;
		$returnData['recordsTotal'] = $this->getRowCountOfTable($param, $type);
		$returnData['draw'] = $param['draw'];

		if($filter == null)
			$returnData['recordsFiltered'] = $this->getRowCountOfTable($param, $type);
		else
			$returnData['recordsFiltered'] = $query->num_rows();

		return $returnData;
	}

	function getRowCountOfTable($param, $type){
		$this->db->select('*');
		$this->db->from('tbl_candidate_document');
		$this->db->where('user_id', $param['user_id']);
		$this->db->where('profile_id', $param['profile_id']);
		$this->db->where('document_type', $type);

		$query = $this->db->get();

		return $query->num_rows();
	}

	function isExists($data, $status){
		$this->db->select('*');
		$this->db->from('tbl_candidate_document');
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('document_type', $status);

		$result = $this->db->get()->result();

		if ($result == null) {
			return true;
		} else {
			return false;
		}
	}

	function getData($data, $type){
		$this->db->select('*');
		$this->db->from('tbl_candidate_document');
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('document_type', $type);

		return $this->db->get()->result();
	}

	function updateDoc($data, $type){
		$this->db->where('user_id', $data['user_id']);
		$this->db->where('profile_id', $data['profile_id']);
		$this->db->where('document_type', $type);
		$result = $this->db->update('tbl_candidate_document', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}


}
