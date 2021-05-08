<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-28
 * Time: 17:59
 */

class UserModel extends CI_Model
{

	function createUser($data){
		$result = $this->db->insert('tbl_users', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function changePassword($id, $password){
		$this->db->set('user_password', $password);
		$this->db->where('user_id', $id);
		return $this->db->update('tbl_users');

	}

	function getCurrentPassword($userid){
		$this->db->select('user_password');
		$this->db->from('tbl_users');
		$this->db->where('user_id', $userid);

		return $this->db->get()->result();
	}

	function isUserExist($data){
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('user_name', $data['user_name']);
		$this->db->where('user_email', $data['user_email']);
		$this->db->where('user_type', $data['user_type']);
		$this->db->where('user_job', $data['user_job']);

		$result = $this->db->get()->result();

		if($result == null){
			return true;
		}else{
			return false;
		}
	}

	function validateUser($email, $password)
	{
		$this->db->select('*');
		$this->db->from('tbl_users');
		$this->db->where('user_email', $email);
		$this->db->where('user_password', $password);

		$result = $this->db->get()->result();

		if ($result == null) {
			return false;
		} else {
			return $result;
		}
	}


	function validateEmail($email)
	{
		$this->db->select('user_password');
		$this->db->from('tbl_users');
		$this->db->where('user_email', $email);

		$result = $this->db->get()->result();

		if ($result == null) {
			return false;
		} else {
			return $result;
		}

	}

}
