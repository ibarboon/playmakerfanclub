<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_option_by_type($in_option_type, $in_rebuild_flag = 'n') {
		$sql = "select row_id, option_key, option_value ";
		$sql .= "from pm_options ";
		$sql .= "where option_type = lower(?) ";
		$sql .= "order by option_sequence, option_key";
		$query = $this->db->query($sql, $in_option_type);
		if ($in_rebuild_flag === 'n') {
			return $query->result_array();
		} else {
			foreach ($query->result_array() as $row) {
				$result_array[$row['option_key']] = $row['option_value'];
			}
			return $result_array;
		}
	}
	
	public function get_default_language($arg) {
		if ($arg === FALSE) {
			$default_language = $this->get_option_by_type('default_language', 'customize');
			return $default_language['language'];
		} else {
			return $arg;
		}
	}
}

/* End of file utility_model.php */
/* Location: ./application/models/utility_model.php */