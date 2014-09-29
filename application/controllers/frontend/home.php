<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
// 		$arg['default_language'] = $this->utility_model->get_default_language($this->uri->segment(1));
		$arg['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
// 		$arg['menu_list'] = $this->utility_model->get_menu_list('menu_'.$arg['default_language']);
// 		$arg['contact_list'] = $this->utility_model->get_option_by_type('contact_'.$arg['default_language'], 'nomal');
// 		$this->load->view('header_view', $arg);
// 		$this->load->view('home_view');
// 		$this->load->view('footer_view', $arg);
		$this->load->view('frontend/header_view', $arg);
		$this->load->view('frontend/home_view');
		$this->load->view('frontend/footer_view');
	}
	
	public function content() {
		$arg['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$this->load->view('frontend/header_view', $arg);
		$this->load->view('frontend/content_view', $arg);
		$this->load->view('frontend/footer_view');
	}
	
	public function list_content() {
		$arg['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$this->load->view('frontend/header_view', $arg);
		$this->load->view('frontend/list_content_view', $arg);
		$this->load->view('frontend/footer_view');
	}
	
	public function contact_us() {
		$arg['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$this->load->view('frontend/header_view', $arg);
		$this->load->view('frontend/contact_us_view');
		$this->load->view('frontend/footer_view');
	}
}

/* End of file home.php */
/* Location: ./application/controllers/frontend/home.php */