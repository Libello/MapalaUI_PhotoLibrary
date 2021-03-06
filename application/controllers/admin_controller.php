<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_controller extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function index() {
		$this->load->view('404me');
	}

	// View Function
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

		load_view_admin('admin_add_photo',array('photographerlist' => $photographerlist
			,'editorlist' => $editorlist,'eventlist' => $eventlist,'ownerlist' => $ownerlist));
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


			load_view('admin_edit', array('photographerlist' => $photographerlist
				, 'data_photo' => $data_photo,'editorlist' => $editorlist,'eventlist' => $eventlist
				,'ownerlist' => $ownerlist));
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

	    $tabactive = 'photographer';
	    if($this->input->get()) {
	    	$tabactive = $this->input->get('tab');
	    }

		load_view_admin('admin_master_data', array('tabactive' => $tabactive,'photographerlist' => $photographerlist,'editorlist' => $editorlist,'eventlist' => $eventlist,'ownerlist' => $ownerlist));
	}
	public function view_photo_list() {

		$this->load->model('photo_model');
		$data_photo = null;
		$data_search = null;

		if(!empty($_POST)) {
			$data = $this->input->post();

			$data_search['activity'] = $data['activity'];
			$data_search['format'] = $data['format'];
			$data_search['field'] = $data['field'];
			$data_search['inputtext'] = $data['inputtext'];

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
	    	$photolist[$count]['id_event'] = $photo['id_event'];
	    	$photolist[$count]['event'] = $photo['name_event'];
	    	$photolist[$count]['format'] = $photo['format'];
	    	$photolist[$count]['category'] = $photo['category'];
	    	$photolist[$count]['last_update'] = $photo['last_update'];
	    	$count++;
	    }

		load_view_admin('admin_photo_list',array('photolist' => $photolist, 'data_search' => $data_search));
	}
	public function view_login() {
		$errmes['message'] = null;
		load_view('main_admin_login',$errmes);
	}

	// Access Function
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
	public function logout(){
		$ci=& get_instance();
	    delete_cookie("Guest");
	    $ci->session->unset_userdata('idGuest');
	    $ci->session->sess_destroy();
	    unset($ci->session->userdata); 
	    redirect(base_url());
	}

	// Add, Edit, dan Delete Photographer
	public function addPhotographer() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('photographer_model');
			$success = $this->photographer_model->insertPhotographer($data);

			if($success) {
				redirect(site_url('master_data?tab=photographer'));
			}
	    } else {
	    	show_404();
	    }
	}
	public function editPhotographer() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('photographer_model');
			$this->load->model('photo_model');
			$successphotographer = $this->photographer_model->editPhotographer($data);
			$successphoto = $this->photo_model->updateDataPhotographer($data);

			if($successphotographer == true) {
				if($successphoto == true) {
					redirect(site_url('master_data?tab=photographer'));
				}
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
			redirect(site_url('master_data?tab=photographer'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}

	// Add, Edit, dan Delete Editor
	public function addEditor() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('editor_model');
			$success = $this->editor_model->insertEditor($data);

			if($success) {
				redirect(site_url('master_data?tab=editor'));
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
			redirect(site_url('master_data?tab=editor'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function editEditor() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('editor_model');
			$this->load->model('photo_model');
			$successeditor = $this->editor_model->editEditor($data);
			$successphoto = $this->photo_model->updateDataEditor($data);

			if($successeditor) {
				if($successphoto) {
					redirect(site_url('master_data?tab=editor'));
				}
			}
	    } else {
	    	show_404();
	    }
	}

	// Add, Edit, dan Delete Event
	public function addEvent() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('event_model');
			if(!empty($data['category'])) {
				$data['eventcategory'] = implode(',', $data['category']);
			}
			else {
				$data['eventcategory'] = '-';
			}
			$success = $this->event_model->insertEvent($data);

			if($success) {
				redirect(site_url('master_data?tab=event'));
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
			redirect(site_url('master_data?tab=event'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function editEvent() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('event_model');
			$this->load->model('photo_model');
			if(!empty($data['category'])) {
				$data['eventcategory'] = implode(',', $data['category']);
			}
			else {
				$data['eventcategory'] = "-";
			}

			$successevent = $this->event_model->editEvent($data);
			$successphoto = $this->photo_model->updateDataEvent($data);

			if($successevent) {
				if($successphoto) {
					redirect(site_url('master_data?tab=event'));
				}
			}
			else {
		    	show_404();
		    }
	    } 
	    else {
	    	show_404();
	    }
	}

	// Add, Edit, dan Delete Owner
	public function addOwner() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('owner_model');
			$success = $this->owner_model->insertOwner($data);

			if($success) {
				redirect(site_url('master_data?tab=owner'));
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
			redirect(site_url('master_data?tab=owner'));
		} else {
			$errmes['message'] = $id;
			load_view('main_admin_login', $errmes);
		}
	}
	public function editOwner() {
		if(!empty($_POST)){
			$data = $this->input->post();
			$this->load->model('owner_model');
			$this->load->model('photo_model');
			$successowner = $this->owner_model->editOwner($data);
			$successphoto = $this->photo_model->updateDataOwner($data);

			if($successowner) {
				if($successphoto) {
					redirect(site_url('master_data?tab=owner'));
				}
			}
	    } else {
	    	show_404();
	    }
	}

	// Add, Edit, dan Delete Photo
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

				$data['name_photographer'] = "Tidak Diketahui";
				$data['name_event'] = '-';
				$data['location_event'] = '-';
				$data['name_editor'] = '-';
				$data['name_owner'] = '-';
				$data['userfile'] = $datafoto['file_name'];
				$data['size'] = $datafoto['image_width'].' x '.$datafoto['image_height'];
				$data['formatphoto'] = implode(',', $data['format']);

				if($data['photographer'] != "Tidak Diketahui") {
					$photographer = $this->photographer_model->getPhotographerById($data['photographer']);
					$data['name_photographer'] = $photographer['name'];
				}
				if($data['event'] != '-') {
					$event = $this->event_model->getEventById($data['event']);
					$data['name_event'] = $event['name'];
					$data['location_event'] = $event['location'];					
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
			$this->load->model('photographer_model');
			$this->load->model('event_model');
			$this->load->model('editor_model');
			$this->load->model('owner_model');

			$data['name_photographer'] = "Tidak Diketahui";
			$data['name_event'] = '-';
			$data['name_editor'] = '-';
			$data['name_owner'] = '-';
			$data['formatphoto'] = implode(',', $data['format']);

			if($data['photographer'] != "Tidak Diketahui") {
				$photographer = $this->photographer_model->getPhotographerById($data['photographer']);
				$data['name_photographer'] = $photographer['name'];
			}
			if($data['event'] != 0) {
				$event = $this->event_model->getEventById($data['event']);
				$data['name_event'] = $event['name'];					
			}
			if($data['editor'] != 0) {
				$editor = $this->editor_model->getEditorById($data['editor']);
				$data['name_editor'] = $editor['name'];					
			}
			if($data['owner'] != 0) {
				$owner = $this->owner_model->getOwnerById($data['owner']);
				$data['name_owner'] = $owner['name'];
			}

			$success = $this->photo_model->editPhoto($data);

			if($success) {
				$errmes['message'] = 'Satu foto telah berhasil diubah!';
				load_view('admin_addphoto_success',$errmes);
			}
	    } else {
	    	show_404();
	    }
	}
	public function deletePhotoData($id) {
		if($id == null) {
			redirect(site_url('photo_list'));
		}
		$this->load->model('photo_model');
		$data_photo = $this->photo_model->getPhotoById($id);
		$file_name = $data_photo['photo_upload'];
		$success = $this->photo_model->deletePhotoData($id);
		if($success) {
			unlink('./assets/foto/'.$file_name);
			redirect(site_url('photo_list'));
		} else {
			$errmes['message'] = $id.'; '.$file_name;
			load_view('main_admin_login', $errmes);
		}
	}

	// Download Exported CSV file
	public function toCSV() {
		$this->load->model('photo_model');
		$data = $this->input->post();
		if($data['flag'] == 'aaa') {
			$query = $this->photo_model->getAllPhotoCSV();
		}
		else {
			$query = $this->photo_model->searchBy($data);
		}
		$result = $query->result_array();
		$fp = fopen('php://output', 'w');

		$this->output->set_content_type('text/csv');
		$this->output->set_header('Content-Disposition: attachment; filename="Daftar_Foto_MapalaUI.csv"');
		$this->output->set_header('Expires: 0');
		$this->output->set_header('Pragma: no-cache');
		fputcsv($fp, $query->list_fields());

		if ($fp && $result) {			
		   foreach ($result as $row) {
		      fputcsv($fp, $row);
		   }
		}
		fclose($fp);
		$data = file_get_contents('php://output'); // Read the file's contents
		$name = 'photo_record.csv';

		force_download($name, $data);												
	}
}