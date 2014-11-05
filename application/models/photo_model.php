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
  }
?>
