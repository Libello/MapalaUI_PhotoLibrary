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

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`photo_record` (`id_photo`, `title`, `id_photographer`, `format`, `size`, `color`, `id_event`, `activity`, `taken_date`, `detail_location`, `description`, `notes`, `id_editor`, `repro_date`, `published_on`, `published_date`, `photo_upload`, `location_HDD_name`, `location_HDD_folder`, `location_sekret_album`, `id_owner`, `location_notes`, `tag`) 
        VALUES ('.$this->db->escape($photo_id).','.$this->db->escape($data['title']).','.$this->db->escape($data['photographer']).','.$this->db->escape($data['format']).','.$this->db->escape($data['size']).','.$this->db->escape($data['color']).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
  }
?>

