<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta'] = $this->option_model->get_option_by_type('web_meta');
		$params['contact'] = $this->option_model->get_option_by_type('contact');
		$params['social_network'] = $this->option_model->get_option_by_type('social_network');
		$params['content'] = $this->content_model->get_content_by_view($params['current_view']);
		$params['content']['team_list'] = $this->team_model->get_team_list(array(0, 4));
		$this->load->view('header_view', $params);
		$this->load->view('home_view', $params);
		$this->load->view('footer_view', $params);
	}
	
	public function get_slider_list() {
		$sql = "select concat('assets/images/slider/', slider_image) as image, concat('<h1>',slider_caption,'</h1>') as title ";
		$sql .= "from cms_slider ";
		$sql .= "where usage_status = 'active';";
		$query = $this->db->query($sql);
		$slider_list = $query->result_array();
		echo json_encode($slider_list);
	}

}

/* End of file home.php */
/* Location: ./application/controllers/home.php */