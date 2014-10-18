<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_content_by_type($in_option_type, $in_rebuild_flag = 'n') {
		$sql = "select row_id, content_type, alias_name, content_header, content_body, content_media, active_flag ";
		$sql .= "from pm_contents ";
		$sql .= "where content_type = 'home' ";
		$sql .= "and active_flag = 'Y' ";
		$sql .= "order by row_id, alias_name;";
		$query = $this->db->query($sql, $in_option_type);
		if ($in_rebuild_flag === 'n') {
			return $query->result_array();
		} else {
			foreach ($query->result_array() as $row) {
				$result_array[$row['alias_name']] = $row;
			}
			return $result_array;
		}
	}
}

/* End of file content_model.php */
/* Location: ./application/models/content_model.php */