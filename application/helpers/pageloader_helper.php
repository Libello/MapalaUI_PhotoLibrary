<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('load_view'))
{
  // Fungsi untuk menampilkan halaman umum untuk guest
  function load_view($viewname,$data)
  {
    $ci=& get_instance();
    $userId = $ci->session->userdata('idGuest');
    // Jika $userId == false (belum login sebagai guest/admin) maka akses
    // ke semua halaman kecuali admin login page di tolak dan redirect ke cover welcome
    if($userId == false){
      if($viewname == 'main_admin_login') {
        $ci->load->vars($data);
        $ci->load->view($viewname);
      }
      else {
        redirect(base_url());
      }
    } 
    else {
      // Jika login sebagai admin, set username dan institution sebagai 'admin' dan 'Mapala UI'
  		if($userId == 'admin') {
        if($viewname == 'cover_welcome') {
          redirect(site_url('/photo_list'));
        }
        else {
          $data['name'] = 'admin';
          $data['institution'] = 'Mapala UI';
        }
  		} 
      // Jika login sebagai guest, set username dan institution sesuai dengan isian saat login
  		else {
        if($viewname == 'cover_welcome') {
          $viewname = 'main_home';
        }
  			$ci->load->model('guest_model');
    		$arr = $ci->guest_model->getGuestById($userId);
    		$data['name'] = $arr['name'];
        $data['institution'] = $arr['institution'];
  		}
  		$ci->load->vars($data);
  		$ci->load->view($viewname);
    }
  }

  // Fungsi untuk menampilkan halaman khusus admin
  function load_view_admin($viewname,$data) {
    $ci=& get_instance();
    $userId = $ci->session->userdata('idGuest');
    // Jika $userId == false (belum login sebagai guest/admin) maka akses
    // ke semua halaman kecuali admin login page di tolak dan redirect ke cover welcome
    if($userId == false){
      redirect(base_url());
    } 
    else {
      // Jika login bukan sebagai admin maka tampilkan pesan 404 'Halaman tidak ada'
      if($userId != 'admin') {
        show_404();
      } 
      // Jika login sebagai admin, tampilkan halaman yang dituju
      else {
        $ci->load->vars($data);
        $ci->load->view($viewname);
      }
    }
  }

  // Fungsi untuk mendapatkan/return id dari session yang sedang berlaku
  function get_userId(){
    $ci =& get_instance();
    return $ci->session->userdata('idGuest');
  }
}
