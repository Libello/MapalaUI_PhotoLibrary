<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class photographer_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllPhotographer() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photographer');
      return $query->result_array();
    }
    public function getPhotographerById($id) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM photographer WHERE id_photographer = '.$this->db->escape($id).' LIMIT 1');
      return $query->row_array();
    }
    public function insertPhotographer($data) {
      $photographer_name = $data['photographer_name'];
      $photographer_membership = $data['photographer_membership'];
      if(!empty($data['no_m'])){
        $no_m = $data['no_m'];
      }
      else {
        $no_m = '-';
      }

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`photographer` (`name`, `membership`, `no.M`) 
        VALUES ('.$this->db->escape($data['photographer_name']).','.$this->db->escape($data['photographer_membership']).','.$this->db->escape($no_m).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function deletePhotographer($id) {      
      $success = false;
      $this->load->database();
      $query = $this->db->query('DELETE FROM `mui_photo_library`.`photographer` WHERE id_photographer='.$this->db->escape($id).';');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function editPhotographer($data) {
      $this->load->database();
      $this->db->query('UPDATE photographer
                        SET `name` = "'.$data['photographer_name'].'",
                            `membership` = "'.$data['photographer_membership'].'",
                            `no.M` = "'.$data['no_m'].'"
                        WHERE id_photographer = "'.$data['id_photographer'].'"');
      if($this->db->affected_rows() >= 0) {
        return true;
      }
      return false;
    }
  }
?>
