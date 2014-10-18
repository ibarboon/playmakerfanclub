<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Backend extends CI_Controller {
	public function __construct() {
		parent::__construct();
	}
	
	public function index() {
		if ($this->session->userdata('user_data') === "") {
			redirect('backend/signin', 'refresh');
		} else {
			redirect('backend/dashboard', 'refresh');
		}
	}
	public function signin() {
		$params['signin_status'] = ($this->uri->segment(3))? $this->uri->segment(3): NULL;
		$this->load->view('backend/signin_view', $params);
	}
	
	public function do_signin() {
		$username = $this->input->post('input-username');
		$password = $this->input->post('input-password');
		$user = $this->user_model->user_authentication($username, $password);
		if (count($user) > 0) {
			$this->session->set_userdata('user_data', $user);
			redirect('backend', 'refresh');
		} else {
			redirect('backend/signin/failed', 'refresh');
		}
	}
	
	public function do_signout() {
		$this->session->sess_destroy();
		redirect('backend', 'refresh');
	}
	
	public function dashboard() {
		$params['user_data'] = $this->session->userdata('user_data');
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'dashboard';
		$params['menu_list'] = $this->utility_model->get_option_by_type('backend_menu');
		$this->load->view('backend/header_view', $params);
		$this->load->view('backend/dashboard_view', $params);
		$this->load->view('backend/footer_view', $params);
	}
	
	public function slider() {
		$params['user_data'] = $this->session->userdata('user_data');
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'dashboard';
		$params['add_photo_status'] = ($this->uri->segment(3))? $this->uri->segment(3): NULL;
		$params['menu_list'] = $this->utility_model->get_option_by_type('backend_menu');
		$params['super_sized_slider_list'] = $this->utility_model->get_option_by_type('super_sized_slider');
		$this->load->view('backend/header_view', $params);
		$this->load->view('backend/slider_view', $params);
		$this->load->view('backend/footer_view', $params);
	}
	
	public function do_insert_photo() {
		$params['user_data'] = $this->session->userdata('user_data');
		
		$config['upload_path'] = './assets/frontend/images/slider/super/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '1024';
		$config['overwrite'] = false;
		$config['encrypt_name'] = true;
		
		$this->load->library('upload', $config);
		foreach($_FILES['userfile'] as $o_k => $o_v) {
			foreach($o_v as $i_k => $i_v) {
				$_FILES['userfile'.$i_k][$o_k] = $i_v;
			}
		}
		unset($_FILES['userfile']);
		foreach($_FILES as $key => $value) {
			if ($this->upload->do_upload($key)) {
				$photo = $this->upload->data();
				$sql = 'insert into pm_options values (null, now(), lower(?), now(), lower(?), ?, ?, ?, ?, ?);';
				$data = array(
						$params['user_data']['username'],
						$params['user_data']['username'],
						'super_sized_slider',
						$photo['file_name'],
						'Photo Description',
						0,
						'Y'
				);
				$query = $this->db->query($sql, $data);
				$params['update_result'] = $query;
			} else {
				$params['update_result'] = FALSE;
			}
		}
		$display = ($params['update_result'])? 'succeed': 'failed';
		redirect('backend/slider/'.$display, 'refresh');
	}
	
	public function do_edit_photo() {
		if ($this->uri->segment(3)) {
			$params['user_data'] = $this->session->userdata('user_data');
			$photo_description = $this->input->post('input-photo-description');
			$sql = 'update pm_options ';
			$sql .= 'set last_updated = now(), last_updated_by = ?, option_value = ? ';
			$sql .= 'where option_type = ? ';
			$sql .= 'and option_key = ? ';
			$sql .= 'limit 1;';
			$data = array(
				$params['user_data']['username'],
				$photo_description,
				'super_sized_slider',
				$this->uri->segment(3)
			);
			$this->db->query($sql, $data);
			redirect('backend/slider', 'refresh');
		}
	}
	
	public function do_delete_photo() {
		if ($this->uri->segment(3)) {
			$sql = 'delete from pm_options where option_type = ? and option_key = ?;';
			$data = array('super_sized_slider', $this->uri->segment(3));
			if ($this->db->query($sql, $data)) {
				if (unlink('./assets/frontend/images/slider/super/'.$this->uri->segment(3))) {
					redirect('backend/slider', 'refresh');
				}
			}
		}
	}
	
	public function contents() {
		$params['user_data'] = $this->session->userdata('user_data');
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'contents';
		$params['menu_list'] = $this->utility_model->get_option_by_type('backend_menu');
		$this->load->view('backend/header_view', $params);
		$this->load->view('backend/contents_view', $params);
		$this->load->view('backend/footer_view', $params);
	}
	
	public function users() {
		$params['user_data'] = $this->session->userdata('user_data');
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'contents';
		$params['menu_list'] = $this->utility_model->get_option_by_type('backend_menu');
		$this->load->view('backend/header_view', $params);
		$this->load->view('backend/users_view', $params);
		$this->load->view('backend/footer_view', $params);
	}
	
	public function setting() {
		$params['user_data'] = $this->session->userdata('user_data');
		$params['current_page'] = ($this->uri->segment(2))? $this->uri->segment(2): 'contents';
		$params['menu_list'] = $this->utility_model->get_option_by_type('backend_menu');
		$this->load->view('backend/header_view', $params);
		$this->load->view('backend/setting_view', $params);
		$this->load->view('backend/footer_view', $params);
	}
}

/* End of file backend.php */
/* Location: ./application/controllers/backend.php */