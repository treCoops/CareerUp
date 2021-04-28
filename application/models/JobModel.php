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

}
