<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class event_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function getAllEvent() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM event');
      return $query->result_array();
    }
    public function getEventById($id_event) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM event WHERE id_event = '.$this->db->escape($id_event).' LIMIT 1');
      return $query->row_array();
    }
    public function getEventByCategory($category) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM event WHERE INSTR(category, '.$this->db->escape($category).') > 0');
      return $query->result_array();
    }
    public function insertEvent($data) {
      $event_name = $data['event_name'];
      $location = $data['location'];
      $start_year = $data['start_year'];
      $end_year = $data['end_year'];
      $category = $data['category'];

      $success = false;
      $this->load->database();
      $query = $this->db->query('INSERT INTO `mui_photo_library`.`event` (`name`, `location`, `start_year`, `end_year`, `category`) 
        VALUES ('.$this->db->escape($data['event_name']).','.$this->db->escape($data['location']).','.$this->db->escape($data['start_year']).','.$this->db->escape($data['end_year']).','.$this->db->escape($data['eventcategory']).');');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function deleteEvent($id) {      
      $success = false;
      $this->load->database();
      $query = $this->db->query('DELETE FROM `mui_photo_library`.`event` WHERE id_event='.$this->db->escape($id).';');
      if($this->db->affected_rows() == 1) {
        $success = true;
      }
      return $success;
    }
    public function editEvent($data) {
      $this->load->database();
      $this->db->query('UPDATE event
                        SET `name` = "'.$data['event_name'].'",
                            `location` = "'.$data['location'].'",
                            `start_year` = "'.$data['start_year'].'",
                            `end_year` = "'.$data['end_year'].'",
                            `category` = "'.$data['eventcategory'].'"
                        WHERE id_event = "'.$data['event_id'].'"');
      if($this->db->affected_rows() >= 0) {
        return true;
      }
      return false;
    }
  }
?>
