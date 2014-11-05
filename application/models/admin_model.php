<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class admin_model extends CI_Model {

  function __construct()
  {
    /* Call the Model constructor */
    parent::__construct();
  }

  public function doLogin($data) {
    $this->load->database();
    $success = true;
    $exist = true;

    //cek apa username ada. CASE INSENSITIVE.
    $query = $this->db->query('SELECT * FROM admin WHERE name = '.$this->db->escape($data['admin_name']).' LIMIT 1');
    $row = $query->row_array();
    if($row != null) {
      if (strcmp($row['password'],$data['admin_password'])!=0) {
        $success = false;
      } else {
        $id = 'admin';

        $cookiedata = array(
          'name' => 'Guest',
          'value' => $id,
          'expire' => 3600,
          'secure' => false
        );
        $this->session->set_userdata('idGuest',$id);
        $this->input->set_cookie($cookiedata);
      }
    } else {
      $success = false;
    }
    return $success;
  }  
}
?>
