<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class guest_controller extends CI_Controller {

	/**
	 * Berikut adalah fungsi-fungsi untuk memanggil view
	 */
	public function index() {
		$this->load->view('404me');
	}
	public function view_cover_contact() {
		$this->load->view('cover_contact');
	}
	public function view_cover_guest_login() {
		$this->load->view('cover_guest_login');
	}
	public function view_cover_welcome() {
		load_view('cover_welcome',array());
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
		    	$photoresult[$count]['category'] = $photo['category'];
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
		load_view('main_gallery',array('eventresult' => $eventresult, 'photoresult' => $photoresult, 'category' => $category));
	}
	
	public function view_main_gallery2($id_event) {
		$this->load->model('photo_model');
		$this->load->model('event_model');
		$data_event = $this->event_model->getEventById($id_event);
		if($data_event == null) {
			redirect(site_url('404_override'));
		}
		$data_photo = $this->photo_model->getPhotoByEvent($id_event);
		$data = $this->input->get();
		$category = $data['category'];

		$photolist = array();
		$count = 0;

		foreach ($data_photo as $photo) {
	    	$photolist[$count]['id'] = $photo['id_photo'];
			$photolist[$count]['photographer'] = $photo['name_photographer'];
	    	$photolist[$count]['image'] = $photo['photo_upload'];
	    	$photolist[$count]['title'] = $photo['title'];
	    	$photolist[$count]['id_event'] = $photo['id_event'];
	    	$photolist[$count]['event'] = $photo['name_event'];
	    	$photolist[$count]['format'] = $photo['format'];
	    	$photolist[$count]['category'] = $photo['category'];
	    	$photolist[$count]['taken_date'] = $photo['taken_date'];
	    	$photolist[$count]['taken_location'] = $photo['taken_location'];
	    	$count++;
	    }

		load_view('main_gallery2',array('photolist' => $photolist, 'data_event' => $data_event, 'category' => $category));
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
		$searchby = array();

		if(!empty($_POST)) {
			$searchby['post'] = true;
			$data = $this->input->post();
			$data['flag'] = 'guest';
			$fieldarray = array();
			if($data['searchbox'] == 'true') {
				$data['field'] = 'all';
				$data['activity'] = 'all';
				$data['format'] = 'all';
				$data['color'] = 'all';
				$searchby['fieldarr'] = array('Kata kunci');
				$searchby['inputtextarr'] = array($data['inputtext']);
				$searchby['operatearr'] = '';
				$searchby['searchbyCount'] = 1;
				$data_photo = $this->photo_model->searchBy($data);
			}
			else {
				$data['count'] = 0;
				foreach ($data['fieldarr'] as $field) {
					$data['field'.$data['count'].''] = $field;
					$data['count']++;
				}
				$searchby['searchbyCount'] = $data['count'];
				$data['count'] = 0;
				foreach ($data['inputtextarr'] as $inputtext) {
					$data['inputtext'.$data['count'].''] = $inputtext;
					$data['count']++;
				}
				$data['count'] = 0;
				foreach ($data['operatearr'] as $operate) {
					$data['operate'.$data['count'].''] = $operate;
					$data['count']++;
				}
				$searchby['fieldarr'] = $data['fieldarr'];
				$searchby['inputtextarr'] = $data['inputtextarr'];
				$searchby['operatearr'] = $data['operatearr'];
				$data_photo = $this->photo_model->searchAdvanced($data);
			}
			$searchby['activity'] = $data['activity'];
			$searchby['format'] = $data['format'];
			$searchby['color'] = $data['color'];
		}
		else {
			$searchby['post'] = false;
			$data_photo = $this->photo_model->getAllPhoto();
		}

		$searchresult = array();
		$count = 0;

		foreach ($data_photo as $photo) {
	    	$searchresult[$count]['id'] = $photo['id_photo'];
			$searchresult[$count]['photographer'] = $photo['name_photographer'];
	    	$searchresult[$count]['image'] = $photo['photo_upload'];
	    	$searchresult[$count]['title'] = $photo['title'];
	    	$searchresult[$count]['id_event'] = $photo['id_event'];
	    	$searchresult[$count]['event'] = $photo['name_event'];
	    	$searchresult[$count]['category'] = $photo['category'];
	    	$count++;
	    }

		load_view('main_search',array('searchresult' => $searchresult, 'searchby' => $searchby));
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
}