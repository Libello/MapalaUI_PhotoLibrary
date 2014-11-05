<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guest_controller extends CI_Controller {

	/**
	 * Berikut adalah fungsi-fungsi untuk memanggil view
	 */
	public function index() {
		show_404();
	}
	public function view_cover_contact() {
		$this->load->view('cover_contact');
	}
	public function view_cover_guest_login() {
		$this->load->view('cover_guest_login');
	}
	public function view_cover_welcome() {
		$this->load->view('cover_welcome',array());
	}
	public function view_404me() {
		$this->load->view('404me',array());
	}
	public function view_main_categories() {
		load_view('main_categories',array());
	}
	public function view_main_gallery() {
		load_view('main_gallery',array());
	}
	public function view_main_home() {
		load_view('main_home',array());
	}
	public function view_main_others() {
		load_view('main_others',array());
	}
	public function view_main_photo_detail() {
		load_view('main_photo_detail',array());
	}
	public function view_main_search() {
		load_view('main_search',array());
	}

	/**
	 * 
	 */
	public function doLogin() {
		if(!empty($_POST)){
			$data = $this->input->post();
		    $this->load->model('guest_model');
		    $success = $this->guest_model->registerGuest($data);
		    if($success) {
		      redirect(site_url('home'));
		    } else {
		      show_404();
		    }
	    } else {
	    	show_404();
	    }
	}
	public function view_gagal() {
		load_view('Gagal',array());
	}
	public function view_sukses() {
		load_view('Sukses',array());
	}

}