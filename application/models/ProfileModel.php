<?php
/**
 * Created & developed by treCoops
 * For: degree final
 * Campus ID: COBSCCOMP191P-032
 * Coventry ID: 9631605
 * Date: 2021-04-29
 * Time: 18:09
 */

class ProfileModel extends CI_Model
{

	function getProfile($id){
		$this->db->select('*');
		$this->db->from('tbl_company_profile');
		$this->db->where('tbl_company_profile.user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			$categories = $this->getCategories($result[0]->user_id);

			if($categories != null){
				$new = array();

				$new['company_about'] = $result[0]->company_about;
				$new['company_address'] = $result[0]->company_address;
				$new['company_allow_disability'] = $result[0]->company_allow_disability;
				$new['company_city'] = $result[0]->company_city;
				$new['company_country'] = $result[0]->company_country;
				$new['company_email'] = $result[0]->company_email;
				$new['company_location_lat'] = $result[0]->company_location_lat;
				$new['company_location_lng'] = $result[0]->company_location_lng;
				$new['company_location_zoom'] = $result[0]->company_location_zoom;
				$new['company_name'] = $result[0]->company_name;
				$new['company_partnership'] = $result[0]->company_partnership;
				$new['company_phone'] = $result[0]->company_phone;
				$new['company_profile_id'] = $result[0]->company_profile_id;
				$new['company_profile_image_url'] = $result[0]->company_profile_image_url;
				$new['company_start_date'] = $result[0]->company_start_date;
				$new['company_team_size'] = $result[0]->company_team_size;
				$new['company_website'] = $result[0]->company_website;
				$new['created_date'] = $result[0]->created_date;
				$new['user_id'] = $result[0]->user_id;
				$new['categories'] = $categories;
				$new['company_facebook'] = $result[0]->company_facebook;
				$new['company_linkedin'] = $result[0]->company_linkedin;
				$new['company_instagram'] = $result[0]->company_instagram;
				$new['company_twitter'] = $result[0]->company_twitter;

				return $new;

			}else{
				return $result;
			}
		}else{
			return null;
		}
	}

	function getCategories($id){
		$this->db->select('*');
		$this->db->from('tbl_company_categories');
		$this->db->where('tbl_company_categories.user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function createProfile($data){
		$this->db->insert('tbl_company_profile', $data);
		$insert_id = $this->db->insert_id();

		if($insert_id != null){
			return $insert_id;
		}else{
			return false;
		}
	}

	function addCategory($data){
		$this->db->insert('tbl_company_categories', $data);
	}

	function updateProfile($id, $data){

		$this->db->where('user_id', $id);
		$result = $this->db->update('tbl_company_profile', $data);
	}

}
