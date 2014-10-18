<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta_list'] = $this->utility_model->get_option_by_type('web_meta', 'y');
		$params['contact_us_list'] = $this->utility_model->get_option_by_type('contact_us', 'y');
		$params['social_network_list'] = $this->utility_model->get_option_by_type('social_network');
		$params['menu_list'] = $this->utility_model->get_option_by_type('menu');
		$params['super_sized_slider_list'] = $this->utility_model->get_option_by_type('super_sized_slider');
		$params['content_list'] = $this->content_model->get_content_by_type('super_sized_slider', 'y');
// 		echo '<pre>';
// 		print_r($params);
// 		echo '</pre>';
		$this->load->view('frontend/header_view', $params);
		$this->load->view('frontend/home_view', $params);
		$this->load->view('frontend/footer_view', $params);
	}
	
	public function content() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta_list'] = $this->utility_model->get_option_by_type('web_meta', 'y');
		$params['contact_us_list'] = $this->utility_model->get_option_by_type('contact_us', 'y');
		$params['social_network_list'] = $this->utility_model->get_option_by_type('social_network');
		$params['menu_list'] = $this->utility_model->get_option_by_type('menu');
		$this->load->view('frontend/header_view', $params);
		$this->load->view('frontend/content_view', $params);
		$this->load->view('frontend/footer_view', $params);
	}
	
	public function list_content() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta_list'] = $this->utility_model->get_option_by_type('web_meta', 'y');
		$params['contact_us_list'] = $this->utility_model->get_option_by_type('contact_us', 'y');
		$params['social_network_list'] = $this->utility_model->get_option_by_type('social_network');
		$params['menu_list'] = $this->utility_model->get_option_by_type('menu');
		$this->load->view('frontend/header_view', $params);
		$this->load->view('frontend/list_content_view', $params);
		$this->load->view('frontend/footer_view', $params);
	}
	
	public function contact_us() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta_list'] = $this->utility_model->get_option_by_type('web_meta', 'y');
		$params['contact_us_list'] = $this->utility_model->get_option_by_type('contact_us', 'y');
		$params['social_network_list'] = $this->utility_model->get_option_by_type('social_network');
		$params['menu_list'] = $this->utility_model->get_option_by_type('menu');
		$this->load->view('frontend/header_view', $params);
		$this->load->view('frontend/contact_us_view', $params);
		$this->load->view('frontend/footer_view', $params);
	}
}

/* End of file frontend.php */
/* Location: ./application/controllers/frontend.php */