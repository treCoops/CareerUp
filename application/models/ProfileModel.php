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
				$new['company_rating'] = $result[0]->company_rating;

				return $new;

			}else{
				return $result;
			}
		}else{
			return null;
		}
	}

	function getCandidateName($id){
		$this->db->select('*');
		$this->db->from('tbl_candidate_profile');
		$this->db->where('tbl_candidate_profile.user_id', $id);

		return $this->db->get()->result();
	}

	function getCandidateProfile($id){
		$this->db->select('*');
		$this->db->from('tbl_candidate_profile');
		$this->db->where('tbl_candidate_profile.user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			$categories = $this->getCandidateCategories($result[0]->user_id);
			$languages = $this->getCandidateLanguages($result[0]->user_id);

			if($categories != null){
				$new = array();

				$new['candidate_profile_id'] = $result[0]->candidate_profile_id;
				$new['user_id'] = $result[0]->user_id;
				$new['candidate_full_name'] = $result[0]->candidate_full_name;
				$new['candidate_job_title'] = $result[0]->candidate_job_title;
				$new['candidate_phone_no'] = $result[0]->candidate_phone_no;
				$new['candidate_email'] = $result[0]->candidate_email;
				$new['candidate_website'] = $result[0]->candidate_website;
				$new['candidate_experience'] = $result[0]->candidate_experience;
				$new['candidate_date_of_birth'] = $result[0]->candidate_date_of_birth;
				$new['candidate_age'] = $result[0]->candidate_age;
				$new['candidate_education_level'] = $result[0]->candidate_education_level;
				$new['candidate_disability'] = $result[0]->candidate_disability;
				$new['candidate_description'] = $result[0]->candidate_description;
				$new['candidate_facebook'] = $result[0]->candidate_facebook;
				$new['candidate_twitter'] = $result[0]->candidate_twitter;
				$new['candidate_linkedIn'] = $result[0]->candidate_linkedIn;
				$new['candidate_instagram'] = $result[0]->candidate_instagram;
				$new['candidate_country'] = $result[0]->candidate_country;
				$new['candidate_city'] = $result[0]->candidate_city;
				$new['categories'] = $categories;
				$new['languages'] = $languages;
				$new['candidate_location_latitude'] = $result[0]->candidate_location_latitude;
				$new['candidate_location_longitude'] = $result[0]->candidate_location_longitude;
				$new['candidate_location_zoom'] = $result[0]->candidate_location_zoom;
				$new['created_time'] = $result[0]->created_time;
				$new['candidate_address'] = $result[0]->candidate_address;
				$new['candidate_profile_image_url'] = $result[0]->candidate_profile_image_url;
				$new['candidate_rating'] = $result[0]->candidate_rating;

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

	function getCandidateCategories($id){
		$this->db->select('*');
		$this->db->from('tbl_candidate_categories');
		$this->db->where('tbl_candidate_categories.user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getCandidateLanguages($id){
		$this->db->select('*');
		$this->db->from('tbl_candidate_languages');
		$this->db->where('tbl_candidate_languages.user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function updateRatingValue($ratingValue, $userID, $profileID){
		$this->db->set('company_rating', $ratingValue);
		$this->db->where('user_id', $userID);
		$this->db->where('company_profile_id', $profileID);
		return $this->db->update('tbl_company_profile');
	}

	function updateRatingValueCandidate($ratingValue, $userID, $profileID){
			$this->db->set('candidate_rating', $ratingValue);
			$this->db->where('user_id', $userID);
			$this->db->where('candidate_profile_id', $profileID);
			return $this->db->update('tbl_candidate_profile');
	}


	function getProfileID($id){
		$this->db->select('company_profile_id');
		$this->db->from('tbl_company_profile');
		$this->db->where('user_id', $id);

		$result = $this->db->get()->result();

		if($result != null){
			return $result;
		}else{
			return null;
		}
	}

	function getCandidateProfileID($id){
		$this->db->select('candidate_profile_id');
		$this->db->from('tbl_candidate_profile');
		$this->db->where('user_id', $id);

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

	function createCandidateProfile($data){
		$this->db->insert('tbl_candidate_profile', $data);
		$insert_id = $this->db->insert_id();

		if($insert_id != null){
			return $insert_id;
		}else{
			return false;
		}
	}

	function addCategory($data){
		return $this->db->insert('tbl_company_categories', $data);
	}

	function addCandidateCategory($data){
		return $this->db->insert('tbl_candidate_categories', $data);
	}

	function addCandidateLanguage($data){
		return $this->db->insert('tbl_candidate_languages', $data);
	}

	function deleteCategories($id){
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_company_categories');

		return $this->db->affected_rows();
	}

	function deleteCandidateCategories($id){
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_candidate_categories');

		return $this->db->affected_rows();
	}

	function deleteCandidateLanguages($id){
		$this->db->where('user_id', $id);
		$this->db->delete('tbl_candidate_languages');

		return $this->db->affected_rows();
	}

	function updateProfile($id, $data){
		$this->db->where('user_id', $id);
		return $this->db->update('tbl_company_profile', $data);
	}

	function updateCandidateProfile($id, $data){
		$this->db->where('user_id', $id);
		return $this->db->update('tbl_candidate_profile', $data);
	}

}
