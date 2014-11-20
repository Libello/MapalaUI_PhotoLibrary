<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	/**
	 * Berikut adalah fungsi-fungsi untuk memanggil view
	 */
	public function index() {
		show_404();
	}

	public function view_add_photo() {
		$this->load->model('photographer_model');
	    $data_photographer = $this->photographer_model->getAllPhotographer();
	    $photographerlist = array();
	    $count_photographer = 0;

	    $this->load->model('editor_model');
	    $data_editor = $this->editor_model->getAllEditor();
	    $editorlist = array();
	    $count_editor = 0;

	    $this->load->model('event_model');
	    $data_event = $this->event_model->getAllEvent();
	    $eventlist = array();
	    $count_event = 0;

	    $this->load->model('owner_model');
	    $data_owner = $this->owner_model->getAllOwner();
	    $ownerlist = array();
	    $count_owner = 0;

	    foreach ($data_photographer as $photographer) {
	    	$photographerlist[$count_photographer]['id'] = $photographer['id_photographer'];  
	    	$photographerlist[$count_photographer]['name'] = $photographer['name'];
	    	$photographerlist[$count_photographer]['membership'] = $photographer['membership'];
	    	$photographerlist[$count_photographer]['no_m'] = $photographer['no.M'];
	    	$count_photographer++;
	    }

		foreach ($data_editor as $editor) {
	    	$editorlist[$count_editor]['id'] = $editor['id_editor'];  
	    	$editorlist[$count_editor]['name'] = $editor['name'];
	    	$editorlist[$count_editor]['membership'] = $editor['membership'];
	    	$editorlist[$count_editor]['no_m'] = $editor['no.M'];
	    	$count_editor++;
	    }

	    foreach ($data_event as $event) {
	    	$eventlist[$count_event]['id'] = $event['id_event'];  
	    	$eventlist[$count_event]['name'] = $event['name'];
	    	$eventlist[$count_event]['location'] = $event['location'];
	    	$eventlist[$count_event]['start_year'] = $event['start_year'];
	    	$eventlist[$count_event]['end_year'] = $event['end_year'];
	    	$eventlist[$count_event]['category'] = $event['category'];
	    	$count_event++;
	    }

	    foreach ($data_owner as $owner) {
	    	$ownerlist[$count_owner]['id'] = $owner['id_owner'];  
	    	$ownerlist[$count_owner]['name'] = $owner['name'];
	    	$ownerlist[$count_owner]['phone'] = $owner['phone'];
	    	$ownerlist[$count_owner]['address'] = $owner['address'];
	    	$count_owner++;
	    }

		load_view_admin('admin_add_photo',array('photographerlist' => $photographerlist,'editorlist' => $editorlist,'eventlist' => $eventlist,'ownerlist' => $ownerlist));
	}

	public function view_edit($id) {
		$this->load->model('photo_model');
		$data_photo = $this->photo_model->getPhotoById($id);

		$this->load->model('photographer_model');
	    $data_photographer = $this->photographer_model->getAllPhotographer();
	    $photographerlist = array();
	    $count_photographer = 0;

	    $this->load->model('editor_model');
	    $data_editor = $this->editor_model->getAllEditor();
	    $editorlist = array();
	    $count_editor = 0;

	    $this->load->model('event_model');
	    $data_event = $this->event_model->getAllEvent();
	    $eventlist = array();
	    $count_event = 0;

	    $this->load->model('owner_model');
	    $data_owner = $this->owner_model->getAllOwner();
	    $ownerlist = array();
	    $count_owner = 0;

	    if($data_photo == null) {
			show_404();
		}
		
		else {
				foreach ($data_photographer as $photographer) {
		    	$photographerlist[$count_photographer]['id'] = $photographer['id_photographer'];  
		    	$photographerlist[$count_photographer]['name'] = $photographer['name'];
		    	$photographerlist[$count_photographer]['membership'] = $photographer['membership'];
		    	$photographerlist[$count_photographer]['no_m'] = $photographer['no.M'];
		    	$count_photographer++;
		    }

			foreach ($data_editor as $editor) {
		    	$editorlist[$count_editor]['id'] = $editor['id_editor'];  
		    	$editorlist[$count_editor]['name'] = $editor['name'];
		    	$editorlist[$count_editor]['membership'] = $editor['membership'];
		    	$editorlist[$count_editor]['no_m'] = $editor['no.M'];
		    	$count_editor++;
		    }

		    foreach ($data_event as $event) {
		    	$eventlist[$count_event]['id'] = $event['id_event'];  
		    	$eventlist[$count_event]['name'] = $event['name'];
		    	$eventlist[$count_event]['location'] = $event['location'];
		    	$eventlist[$count_event]['start_year'] = $event['start_year'];
		    	$eventlist[$count_event]['end_year'] = $event['end_year'];
		    	$eventlist[$count_event]['category'] = $event['category'];
		    	$count_event++;
		    }

		    foreach ($data_owner as $owner) {
		    	$ownerlist[$count_owner]['id'] = $owner['id_owner'];  
		    	$ownerlist[$count_owner]['name'] = $owner['name'];
		    	$ownerlist[$count_owner]['phone'] = $owner['phone'];
		    	$ownerlist[$count_owner]['address'] = $owner['address'];
		    	$count_owner++;
		    }

			load_view('admin_edit', $data_photo, array('photographerlist' => $photographerlist,'editorlist' => $editorlist,'eventlist' => $eventlist,'ownerlist' => $ownerlist));
		}
	}

	public function view_guest_log() {
	    $this->load->model('guest_model');
	    $guest_log = $this->guest_model->getGuestLog();
	    $guestlist = array();
	    $count = 0;

	    foreach ($guest_log as $guest) {
	    	$guestlist[$count]['login_time'] = $guest['login_time'];  
	    	$guestlist[$count]['name'] = $guest['name'];
	    	$guestlist[$count]['institution'] = $guest['institution'];
	    	$count++;
	    }

		load_view_admin('admin_guest_log',array('guestlist' => $guestlist));
	}

	public function view_master_data() {
		$this->load->model('photographer_model');
	    $data_photographer = $this->photographer_model->getAllPhotographer();
	    $photographerlist = array();
	    $count_photographer = 0;

	    $this->load->model('editor_model');
	    $data_editor = $this->editor_model->getAllEditor();
	    $editorlist = array();
	    $count_editor = 0;

	    $this->load->model('event_model');
	    $data_event = $this->event_model->getAllEvent();
	    $eventlist = array();
	    $count_event = 0;

	    $this->load->model('owner_model');
	    $data_owner = $this->owner_model->getAllOwner();
	    $ownerlist = array();
	    $count_owner = 0;

	    foreach ($data_photographer as $photographer) {
	    	$photographerlist[$count_photographer]['id'] = $photographer['id_photographer'];  
	    	$photographerlist[$count_photographer]['name'] = $photographer['name'];
	    	$photographerlist[$count_photographer]['membership'] = $photographer['membership'];
	    	$photographerlist[$count_photographer]['no_m'] = $photographer['no.M'];
	    	$count_photographer++;
	    }

		foreach ($data_editor as $editor) {
	    	$editorlist[$count_editor]['id'] = $editor['id_editor'];  
	    	$editorlist[$count_editor]['name'] = $editor['name'];
	    	$editorlist[$count_editor]['membership'] = $editor['membership'];
	    	$editorlist[$count_editor]['no_m'] = $editor['no.M'];
	    	$count_editor++;
	    }

	    foreach ($data_event as $event) {
	    	$eventlist[$count_event]['id'] = $event['id_event'];  
	    	$eventlist[$count_event]['name'] = $event['name'];
	    	$eventlist[$count_event]['location'] = $event['location'];
	    	$eventlist[$count_event]['start_year'] = $event['start_year'];
	    	$eventlist[$count_event]['end_year'] = $event['end_year'];
	    	$eventlist[$count_event]['category'] = $event['category'];
	    	$count_event++;
	    }

	    foreach ($data_owner as $owner) {
	    	$ownerlist[$count_owner]['id'] = $owner['id_owner'];  
	    	$ownerlist[$count_owner]['name'] = $owner['name'];
	    	$ownerlist[$count_owner]['phone'] = $owner['phone'];
	    	$ownerlist[$count_owner]['address'] = $owner['address'];
	    	$count_owner++;
	    }

		load_view_admin('admin_master_data',array('photographerlist' => $photographerlist,'editorlist' => $editorlist,'eventlist' => $eventlist,'ownerlist' => $ownerlist));
	}

	public function view_photo_list() {

		$this->load->model('photo_model');
		$data_photo = null;

		if(!empty($_POST)) {
			$data = $this->input->post();
			$data_photo = $this->photo_model->searchBy($data);
		}
		else {
			$data_photo = $this->photo_model->getAllPhoto();
		}
	    
	    $photolist = array();
	    $count = 0;

	    foreach ($data_photo as $photo) {
	    	$photolist[$count]['id'] = $photo['id_photo'];
			$photolist[$count]['photographer'] = $photo['name_photographer'];
	    	$photolist[$count]['image'] = $photo['photo_upload'];
	    	$photolist[$count]['title'] = $photo['title'];
	    	$photolist[$count]['format'] = $photo['format'];
	    	$photolist[$count]['last_update'] = $photo['last_update'];
	    	$count++;
	    }

		load_view_admin('admin_photo_list',array('photolist' => $photolist));
	}


	public function view_login() {
		$errmes['message'] = null;
		load_view('main_admin_login',$errmes);
	}

	/**
	*
	*/
	public function validate() {
		if(!empty($_POST)){
			$data = $this->input->post();

			$username = $data['admin_name'];
			$password = $data['admin_password'];
			$success = true;

			$this->load->model('admin_model');
			$success = $this->admin_model->doLogin($data);

			if($success) {
				redirect(site_url('photo_list'));
			} else {
				$errmes['message'] = "Nama atau password salah!";
				load_view('main_admin_login', $errmes);
			}
	    } else {
	    	show_404();
	    }
	}

	public function guestToAdmin() {
		$ci=& get_instance();
    	$userId = $ci->session->userdata('idGuest');
    	if($userId == 'admin') {
			redirect(site_url('/photo_list'));
		}
		elseif ($userId == false) {
		 	show_404();
		}
		else {
			redirect(site_url('/admin_login'));
		}
	}

	public function logout(){
		$ci=& get_instance();
	    delete_cookie("Guest");
	    $ci->session->unset_userdata('idGuest');
	    $ci->session->sess_destroy();
	    redirect(base_url());
	}

	public function addPhotographer() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('photographer_model');
			$success = $this->photographer_model->insertPhotographer($data);

			if($success) {
				redirect(site_url('master_data'));
			}
	    } else {
	    	show_404();
	    }
	}
	public function deletePhotographer($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('photographer_model');
		$success = $this->photographer_model->deletePhotographer($id);
		if($success) {
			redirect(site_url('master_data'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function addEditor() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('editor_model');
			$success = $this->editor_model->insertEditor($data);

			if($success) {
				redirect(site_url('master_data'));
			}
	    } else {
	    	show_404();
	    }
	}
	public function deleteEditor($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('editor_model');
		$success = $this->editor_model->deleteEditor($id);
		if($success) {
			redirect(site_url('master_data'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function addEvent() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('event_model');
			$data['eventcategory'] = implode(', ', $data['category']);
			$success = $this->event_model->insertEvent($data);

			if($success) {
				redirect(site_url('master_data'));
			}
	    } else {
	    	show_404();
	    }
	}
	public function deleteEvent($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('event_model');
		$success = $this->event_model->deleteEvent($id);
		if($success) {
			redirect(site_url('master_data'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function addOwner() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('owner_model');
			$success = $this->owner_model->insertOwner($data);

			if($success) {
				redirect(site_url('master_data'));
			}
	    } else {
	    	show_404();
	    }
	}
	public function deleteOwner($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('owner_model');
		$success = $this->owner_model->deleteOwner($id);
		if($success) {
			redirect(site_url('master_data'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function deletePhotoData($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('photo_model');
		$success = $this->photo_model->deletePhotoData($id);
		if($success) {
			redirect(site_url('photo_list'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function addNewPhoto() {
		if(!empty($_POST)){
			//Set Upload Photo
			$config['upload_path'] = './assets/foto';
			$config['allowed_types'] = 'gif|jpg|png';

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload())
			{
				$message['message'] = array('error' => $this->upload->display_errors());
				load_view('admin_addphoto_success',$message);
			}
			else
			{
				$datafoto = $this->upload->data();
				$data = $this->input->post();
				$this->load->model('photo_model');
				$this->load->model('photographer_model');
				$this->load->model('event_model');
				$this->load->model('editor_model');
				$this->load->model('owner_model');

				$data['name_photographer'] = null;
				$data['name_event'] = '-';
				$data['name_editor'] = '-';
				$data['name_owner'] = '-';
				$data['userfile'] = $datafoto['file_name'];
				$data['size'] = $datafoto['image_width'].' x '.$datafoto['image_height'];
				$data['formatphoto'] = implode(',', $data['format']);

				if($data['photographer'] != null) {
					$photographer = $this->photographer_model->getPhotographerById($data['photographer']);
					$data['name_photographer'] = $photographer['name'];
				}
				if($data['event'] != '-') {
					$event = $this->event_model->getEventById($data['event']);
					$data['name_event'] = $event['name'];					
				}
				if($data['editor'] != '-') {
					$editor = $this->editor_model->getEditorById($data['editor']);
					$data['name_editor'] = $editor['name'];					
				}
				if($data['owner'] != '-') {
					$owner = $this->owner_model->getOwnerById($data['owner']);
					$data['name_owner'] = $owner['name'];
				}
				
				$success = $this->photo_model->insertNewPhoto($data);
				if($success) {
					$errmes['message'] = 'Satu foto telah berhasil ditambahkan';
					load_view('admin_addphoto_success',$errmes);
				}
			}			
	    } else {
	    	show_404();
	    }
	}
	public function editPhoto() {
			
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('photo_model');
			$success = $this->photo_model->editPhoto($data);

			if($success) {
				$errmes['message'] = 'Satu foto telah berhasil diedit';
				load_view('admin_addphoto_success',$errmes);
			}
	    } else {
	    	show_404();
	    }
	}
}