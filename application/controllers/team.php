<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Team extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta'] = $this->option_model->get_option_by_type('web_meta');
		$params['contact'] = $this->option_model->get_option_by_type('contact');
		$params['social_network'] = $this->option_model->get_option_by_type('social_network');
		$this->load->view('header_view', $params);
		$this->load->view('team_list_view', $params);
		$this->load->view('footer_view', $params);
	}

}

/* End of file team.php */
/* Location: ./application/controllers/team.php */