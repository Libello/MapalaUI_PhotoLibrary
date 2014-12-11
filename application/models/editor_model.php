<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class editor_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllEditor() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM editor');
      return $query->result_array();
    }
    public function getEditorById($id) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM editor WHERE id_editor = '.$this->db->escape($id).' LIMIT 1');
      return $query->row_array();
    }
    public function insertEditor($data) {
      $editor_name = $data['editor_name'];
      $editor_membership = $data['editor_membership'];
      if(!empty($data['no_m'])){
        $no_m = $data['no_m'];
      }
      else {
        $no_m = '-';
      }
      
      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`editor` (`name`, `membership`, `no.M`) 
        VALUES ('.$this->db->escape($data['editor_name']).','.$this->db->escape($data['editor_membership']).','.$this->db->escape($no_m).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function deleteEditor($id) {      
      $success = false;
      $this->load->database();
      $query = $this->db->query('DELETE FROM `mui_photo_library`.`editor` WHERE id_editor='.$this->db->escape($id).';');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function editEditor($data) {
      $this->load->database();
      $this->db->query('UPDATE editor
                        SET `name` = "'.$data['editor_name'].'",
                            `membership` = "'.$data['editor_membership'].'",
                            `no.M` = "'.$data['no_m'].'"
                        WHERE id_editor = "'.$data['id_editor'].'"');
      if($this->db->affected_rows() >= 0) {
        return true;
      }
      return false;
    }
  }
?>
