<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_content_by_view($arg) {
		$sql = "select content_type, content_header, content_body, content_image ";
		$sql .= "from cms_contents ";
		$sql .= "where lower(content_view) = lower(?);";
		$query = $this->db->query($sql, $arg);
		$result_array = $query->result_array();
		$rows = array();
		foreach($result_array as $row):
			$rows[$row['content_type']][] = $row;
		endforeach;
		return $rows;
	}
}

/* End of file content_model.php */
/* Location: ./application/models/content_model.php */