<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class photo_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllPhoto() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photo_record GROUP BY last_update DESC');
      return $query->result_array();
    }

    public function getPhotoById($id) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photo_record WHERE id_photo = '.$this->db->escape($id).' LIMIT 1');
      return $query->row_array();
    }

    public function getPhotoByCategory($category) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photo_record WHERE category = '.$this->db->escape($category).'');
      return $query->result_array();
    }

    public function searchBy($data) {
      $this->load->database();

      if($data['activity'] == 'all') {
        $this->db->query('CREATE OR REPLACE VIEW viewactivity AS SELECT * FROM photo_record');
      }
      else {
        $this->db->query('CREATE OR REPLACE VIEW viewactivity AS SELECT * FROM photo_record WHERE category='.$this->db->escape($data['activity']).'');
      }

      if($data['format'] == 'all') {
        $this->db->query('CREATE OR REPLACE VIEW viewformat AS SELECT * FROM viewactivity');
      }
      else {
        $this->db->query('CREATE OR REPLACE VIEW viewformat AS SELECT * FROM viewactivity WHERE INSTR(format, '.$this->db->escape($data['format']).') > 0');
      }

      if($data['field'] == 'all') {
        $query = $this->db->query('SELECT * FROM viewformat WHERE INSTR(title, '.$this->db->escape($data['inputtext']).') > 0
          OR INSTR(id_photo, '.$this->db->escape($data['inputtext']).') > 0
          OR INSTR(name_photographer, '.$this->db->escape($data['inputtext']).') > 0
          OR INSTR(name_event, '.$this->db->escape($data['inputtext']).') > 0
          OR INSTR(taken_date, '.$this->db->escape($data['inputtext']).') > 0
          OR INSTR(taken_location, '.$this->db->escape($data['inputtext']).') > 0
          ');
      }
      else {
        $query = $this->db->query('SELECT * FROM viewformat WHERE INSTR('.$data['field'].', '.$this->db->escape($data['inputtext']).') > 0');
      }

      return $query->result_array();
    }

    public function insertNewPhoto($data) {


      $photo_id = $data['photo_idKeg'].'_'.$data['photo_idThn'].'_'.$data['photo_idNo'];
      $taken_date = $data['taken_date'].'/'.$data['taken_month'].'/'.$data['taken_year'];
      $repro_date = $data['repro_date'].'/'.$data['repro_month'].'/'.$data['repro_year'];
      $published_date = $data['published_date'].'/'.$data['published_month'].'/'.$data['published_year'];
      $tag = $data['tag'];

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`photo_record` (`id_photo`, `title`, `id_photographer`, `format`, `size`, `color`, `id_event`, `category`, `taken_date`, `taken_location`, 
        `description`, `id_editor`, `repro_date`, `published_on`, `published_date`, `notes`, `tag`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `location_notes`, 
        `photo_upload`, `name_photographer`, `name_event`, `name_editor`, `name_owner`) 
        VALUES ('.$this->db->escape($photo_id).','.$this->db->escape($data['title']).','.$this->db->escape($data['photographer']).','.$this->db->escape($data['formatphoto']).','.$this->db->escape($data['size']).',
          '.$this->db->escape($data['color']).','.$this->db->escape($data['event']).','.$this->db->escape($data['category']).','.$this->db->escape($taken_date).','.$this->db->escape($data['taken_location']).',
          '.$this->db->escape($data['photo_description']).','.$this->db->escape($data['editor']).','.$this->db->escape($repro_date).','.$this->db->escape($data['published_on']).',
          '.$this->db->escape($published_date).','.$this->db->escape($data['notes']).','.$this->db->escape($data['tag']).','.$this->db->escape($data['HDD_name']).','.$this->db->escape($data['HDD_folder']).',
          '.$this->db->escape($data['sekretariat_album']).','.$this->db->escape($data['owner']).','.$this->db->escape($data['other_notes']).','.$this->db->escape($data['userfile']).',
          '.$this->db->escape($data['name_photographer']).','.$this->db->escape($data['name_event']).','.$this->db->escape($data['name_editor']).','.$this->db->escape($data['name_owner']).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
  }
?>

