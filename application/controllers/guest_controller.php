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
	public function view_main_gallery2() {
		load_view('main_gallery2',array());
	}
	public function view_main_home() {
		load_view('main_home',array());
	}
	public function view_main_others() {
		load_view('main_others',array());
	}
	public function view_main_photo_detail($id) {
		$this->load->model('photo_model');
		$data_photo = $this->photo_model->getPhotoById($id);
		if($data_photo == null) {
			show_404();
		}
		else {
			load_view('main_photo_detail', $data_photo);
		}
	
	}
	public function view_main_search() {

		$this->load->model('photo_model');

		if(!empty($_POST)) {
			$data = $this->input->post();
			$data['field'] = 'all';
			$data['inputtext'] = '';
			$data_photo = $this->photo_model->searchBy($data);
			$searchresult = array();
		    $count = 0;

		    foreach ($data_photo as $photo) {
		    	$searchresult[$count]['id'] = $photo['id_photo'];
				$searchresult[$count]['photographer'] = $photo['name_photographer'];
		    	$searchresult[$count]['image'] = $photo['photo_upload'];
		    	$searchresult[$count]['title'] = $photo['title'];
		    	$searchresult[$count]['event'] = $photo['name_event'];
		    	$searchresult[$count]['format'] = $photo['format'];
		    	$searchresult[$count]['category'] = $photo['category'];
		    	$searchresult[$count]['taken_date'] = $photo['taken_date'];
		    	$searchresult[$count]['taken_location'] = $photo['taken_location'];
		    	$count++;
		    }
		    $date['name'] = 'satria';
		    load_view('main_search',array('searchresult' => $searchresult, 'name' => $date));
		}
		else {
			load_view('main_search',array('searchresult' => null));
		}
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