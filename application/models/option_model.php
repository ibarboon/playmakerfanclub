<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Option_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_option_by_type($arg) {
		$sql = "select option_key, option_value ";
		$sql .= "from cms_options ";
		$sql .= "where lower(option_type) = lower(?) ";
		$sql .= "and usage_status = 'active'";
		$query = $this->db->query($sql, $arg);
		$result_array = $query->result_array();
		foreach($result_array as $row):
			if(strpos($row['option_value'], '|')) {
				$rows[$row['option_key']] = explode('|', $row['option_value']);
			} else {
				$rows[$row['option_key']] = $row['option_value'];
			}
		endforeach;
		return $rows;
	}

	public function get_subject_list($arg) {
		$sql = "select * from ct_workloads where department_id = ? and year_no = ? order by row_id;";
		$query = $this->db->query($sql, $arg);
		return $query->result_array();
	}
}

/* End of file option_model.php */
/* Location: ./application/models/option_model.php */