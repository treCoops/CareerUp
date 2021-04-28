<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-28
 * Time: 16:02
 */

class SectorModel extends CI_Model
{
	function getAllSectors(){
		$this->db->select('sector_id, sector_name');
		$this->db->from('tbl_sectors');

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}
}
