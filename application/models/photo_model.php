<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class photo_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllPhoto() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photo_record');
      return $query->result_array();
    }

    public function insertNewPhoto($data) {
      $photo_id = $data['photo_idKeg'].'/'.$data['photo_idThn'].'/'.$data['photo_idNo'];
      $title = $data['title'];
      $photographer = $data['photographer'];
      $format = $data['format'];
      $size = $data['size'];
      $color = $data['color'];
      $event = $data['event'];
      $category = $data['category'];
      $taken_date = $data['taken_date'].'/'.$data['taken_month'].'/'.$data['taken_year'];
      $taken_location = $data['taken_location'];
      $photo_description = $data['photo_description'];
      //insert photo
      //other format location
      $editor = $data['editor'];
      $repro_date = $data['repro_date'].'/'.$data['repro_month'].'/'.$data['repro_year'];
      $published_on = $data['published_on'];
      $published_date = $data['published_date'].'/'.$data['published_month'].'/'.$data['published_year'];
      $notes = $data['notes'];
      $tag = $data['tag'];

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`photo_record` (`id_photo`, `title`, `id_photographer`, `format`, `size`, `color`, `id_event`, `category`, `taken_date`, `taken_location`, `description`, `id_editor`, `repro_date`, `published_on`, `published_date`, `notes`, `tag`) 
        VALUES ('.$this->db->escape($photo_id).','.$this->db->escape($data['title']).','.$this->db->escape($data['photographer']).','.$this->db->escape($data['format']).','.$this->db->escape($data['size']).','.$this->db->escape($data['color']).','.$this->db->escape($data['event']).','.$this->db->escape($data['category']).','.$this->db->escape($taken_date).','.$this->db->escape($data['taken_location']).','.$this->db->escape($data['photo_description']).','.$this->db->escape($data['editor']).','.$this->db->escape($repro_date).','.$this->db->escape($data['published_on']).','.$this->db->escape($published_date).','.$this->db->escape($data['notes']).','.$this->db->escape($data['tag']).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;

      //`photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `location_notes`,
    }
  }
?>

