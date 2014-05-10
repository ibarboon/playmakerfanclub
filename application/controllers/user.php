<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function register() {
		$params['current_view'] = ($this->uri->segment(1))? $this->uri->segment(1): 'home';
		$params['web_meta'] = $this->option_model->get_option_by_type('web_meta');
		$params['contact'] = $this->option_model->get_option_by_type('contact');
		$params['social_network'] = $this->option_model->get_option_by_type('social_network');
		$this->load->view('header_view', $params);
		$this->load->view('register_view', $params);
		$this->load->view('footer_view', $params);
	}
	
	public function do_register() {
		if(!is_null($this->input->post('input-email')) AND !is_null($this->input->post('input-phone')) AND !is_null($this->input->post('input-password'))) {
			$sql = "insert into cms_users values (null, 'webadm', now(), 'webadm', now(), ?, ?, md5(?), 'member');";
			$query = $this->db->query($sql, array($this->input->post('input-email'), $this->input->post('input-phone'), $this->input->post('input-password')));
			if($query) {
				redirect('/user/sign-in', 'refresh');
			}
		}
	}
	
	public function signin() {
		$params['signin_status'] = ($this->uri->segment(3))? $this->uri->segment(3): NULL;
		$this->load->view('signin_view', $params);
	}

	public function do_signin() {
		if(!is_null($this->input->post('input-email')) AND !is_null($this->input->post('input-password'))) {
			$sql = "select row_id, user_email, user_password ";
			$sql .= "from cms_users ";
			$sql .= "where user_email = trim(?) ";
			$sql .= "and user_password = md5(trim(?));";
			$query = $this->db->query($sql, array($this->input->post('input-email'), $this->input->post('input-password')));
			if($query->num_rows()) {
				$this->session->set_userdata('user_data', $query->row_array());
				redirect('/cms/dashboard', 'refresh');
			}
			redirect('/user/sign-in/fail','refresh');
		}
	}
	
	public function signout() {
		$this->session->sess_destroy();
		redirect('/user/sign-in','refresh');
	}
}

/* End of file user.php */
/* Location: ./application/controllers/user.php */