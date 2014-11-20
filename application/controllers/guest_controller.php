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
	public function view_main_gallery($category) {
		$this->load->model('photo_model');
		$this->load->model('event_model');
		$category = str_replace("_", " ", $category);
		$data_photo = $this->photo_model->getPhotoByCategory($category);
		$data_event = $this->event_model->getEventByCategory($category);

		if($data_photo == null) {
			$photoresult = null;
		}
		else {		
			$photoresult = array();
		    $count = 0;

		    foreach ($data_photo as $photo) {
		    	$photoresult[$count]['id'] = $photo['id_photo'];
		    	$photoresult[$count]['image'] = $photo['photo_upload'];
		    	$count++;
		    }
		}
		if($data_event == null) {
			$eventresult = null;
		}
		else {		
			$eventresult = array();
		    $count = 0;

		    foreach ($data_event as $event) {
		    	$eventresult[$count]['id_event'] = $event['id_event'];
		    	$eventresult[$count]['name'] = $event['name'];
		    	$eventresult[$count]['location'] = $event['location'];
		    	$eventresult[$count]['start_year'] = $event['start_year'];
		    	$eventresult[$count]['end_year'] = $event['end_year'];
		    	$eventresult[$count]['category'] = $event['category'];
		    	$count++;
		    }
		}
		load_view('main_gallery',array('eventresult' => $eventresult, 'photoresult' => $photoresult));
	}
	
	public function view_main_gallery2($id) {
		$this->load->model('event_model');
		$data_event = $this->event_model->getEventById($id);

		if($data_event == null) {
			show_404();
		}
		else {
			$data_event['name_event'] = $data_event['name'];
			load_view('main_gallery2', $data_event);
		}
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
			if($data['searchbox'] == 'true') {
				$data['field'] = 'all';
				$data['activity'] = 'all';
				$data['format'] = 'all';
			}
			else {
				// for(var i=0; i<count($data['fieldarr']); i++) {
				$data['field'] = 'all';
				$data['inputtext'] = '';
			}
			$data_photo = $this->photo_model->searchBy($data);
		}
		else {
			$data_photo = $this->photo_model->getAllPhoto();
		}

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

		load_view('main_search',array('searchresult' => $searchresult));
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