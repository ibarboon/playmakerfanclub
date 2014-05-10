<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_team_list($arg) {
		$sql = "select team_name, team_image ";
		$sql .= "from cms_teams ";
		$sql .= "limit ?, ?";
		$query = $this->db->query($sql, $arg);
		$result_array = $query->result_array();
// 		foreach($result_array as $row):
// 			if(strpos($row['option_value'], '|')) {
// 				$rows[$row['option_key']] = explode('|', $row['option_value']);
// 			} else {
// 				$rows[$row['option_key']] = $row['option_value'];
// 			}
// 		endforeach;
		return $result_array;
	}
}

/* End of file team_model.php */
/* Location: ./application/models/team_model.php */