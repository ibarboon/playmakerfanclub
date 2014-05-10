<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$params['s_user_data'] = $this->session->userdata('user_data');
		//$params['active_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'dashboard';
		//$this->load->view('cms/header_view', $params);
		$this->load->view('cms/dashboard_view', $params);
		//$this->load->view('cms/footer_view', $params);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/cms/dashboard.php */