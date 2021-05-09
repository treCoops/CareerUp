<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-05-08
 * Time: 18:37
 */

class ReviewModel extends CI_Model
{

	function addReview($data){
		$result = $this->db->insert('tbl_reviews', $data);

		if($result){
			return true;
		}else{
			return false;
		}
	}

	function getAllReviews($user_id, $profile_id){
		$this->db->select('');
		$this->db->from('tbl_reviews');
		$this->db->where('user_id', $user_id);
		$this->db->where('profile_id', $profile_id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getCompanyReview($user_id, $profile_id){

		$response = array();

		$reviews = $this->getAllReviews($user_id, $profile_id);

		$count = 0;
		$total = 0 ;

		foreach ($reviews as $row){
			$total = $total + intval($row->review_rating);
			$count++;
		}
		$response['review_rating'] = round($total/$count,1,PHP_ROUND_HALF_UP);

		return $response;

	}

	function getCandidateReview($user_id, $profile_id){

		$response = array();

		$reviews = $this->getAllReviews($user_id, $profile_id);

		$count = 0;
		$total = 0 ;

		foreach ($reviews as $row){
			$total = $total + intval($row->review_rating);
			$count++;
		}
		$response['review_rating'] = round($total/$count,1,PHP_ROUND_HALF_UP);

		return $response;

	}

}
