<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

  class guest_model extends CI_Model {

    function __construct()
    {
      /* Call the Model constructor */
      parent::__construct();
    }

    public function registerGuest($data) {
      $success = false;
      $this->load->database();
      $this->db->query('INSERT INTO guest_log (name, institution) VALUES ('.$this->db->escape($data['guest_name']).','.$this->db->escape($data['guest_institution']).')');
      if($this->db->affected_rows() == 1) {
        $success = true;
        $id = $this->db->count_all('guest_log');

        $cookiedata = array(
          'name' => 'Guest',
          'value' => $id,
          'expire' => 3600,
          'secure' => false
        );
        $this->session->set_userdata('idGuest',$id);
        $this->input->set_cookie($cookiedata);
      }
      return $success;
    }
    public function getGuestLog() {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM guest_log');
      return $query->result_array();
    }
    public function getGuestById($id) {
      $this->load->database();
      $query = $this->db->query('SELECT * FROM guest_log WHERE id = '.$this->db->escape($id).' LIMIT 1');
      return $query->row_array();
    }
  }
?>
