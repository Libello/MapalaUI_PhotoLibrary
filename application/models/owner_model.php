<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class owner_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllOwner() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM owner');
      return $query->result_array();
    }
    
    public function getOwnerById($id) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM owner WHERE id_owner = '.$this->db->escape($id).' LIMIT 1');
      return $query->row_array();
    }

    public function insertOwner($data) {
      $owner_name = $data['owner_name'];
      $owner_phone = $data['owner_phone'];
      $owner_address = $data['owner_address'];

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`owner` (`name`, `phone`, `address`) 
        VALUES ('.$this->db->escape($data['owner_name']).','.$this->db->escape($data['owner_phone']).','.$this->db->escape($data['owner_address']).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }

    public function deleteOwner($id) {      
      $success = false;
      $this->load->database();
      $query = $this->db->query('DELETE FROM `mui_photo_library`.`owner` WHERE id_owner='.$this->db->escape($id).'');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function editOwner($data) {
      $this->load->database();
      $this->db->query('UPDATE owner
                        SET `name` = "'.$data['owner_name'].'",
                            `phone` = "'.$data['owner_phone'].'",
                            `address` = "'.$data['owner_address'].'"
                        WHERE id_owner = "'.$data['id_owner'].'"');
      if($this->db->affected_rows() >= 0) {
        return true;
      }
      return false;
    }
  }
?>
