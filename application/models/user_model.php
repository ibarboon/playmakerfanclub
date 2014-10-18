<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_Model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function user_authentication($in_user_login, $in_user_password) {
		$sql = "select u.row_id user_id, u.username, u.password, u.last_signin ";
		$sql .= "from pm_users u ";
		$sql .= "where u.username = ? ";
		$sql .= "and u.password = md5(?) ";
		$sql .= "limit 1";
		$query = $this->db->query($sql, array($in_user_login, $in_user_password));
		return $query->row_array();
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */