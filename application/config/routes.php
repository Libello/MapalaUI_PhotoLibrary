<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/

//Cover view route
$route['404_override'] = "guest_controller/view_404me";
$route['default_controller'] = "guest_controller/view_cover_welcome";
$route['guest_login'] = "guest_controller/view_cover_guest_login";
$route['contact'] = "guest_controller/view_cover_contact";
//Main view route
$route['category_detail'] = "guest_controller/view_main_gallery";
$route['gallery'] = "guest_controller/view_main_categories";
$route['home'] = "guest_controller/view_main_home";
$route['others'] = "guest_controller/view_main_others";
$route['detail/(:any)'] = "guest_controller/view_main_photo_detail/$1";
$route['search'] = "guest_controller/view_main_search";
//Admin view route
$route['admin_login'] = "admin_controller/view_login";
$route['add_photo'] = "admin_controller/view_add_photo";
$route['photo_list'] = "admin_controller/view_photo_list";
$route['master_data'] = "admin_controller/view_master_data";
$route['guest_log'] = "admin_controller/view_guest_log";
$route['edit'] = "admin_controller/view_edit";
//Fungsi lain
$route['doAdminLogin'] = "admin_controller/validate";
$route['doGuestLogin'] = "guest_controller/doLogin";
$route['logout'] = "admin_controller/logout";
$route['guestToAdmin'] = "admin_controller/guestToAdmin";
$route['doSearch'] = "guest_controller/searchPhoto";
$route['addNewPhoto'] = "admin_controller/addNewPhoto";
//modal +add dalam halaman Master Data
$route['addPhotographer'] = "admin_controller/addPhotographer";
$route['deletePhotographer/(:any)'] = "admin_controller/deletePhotographer/$1";
$route['addEditor'] = "admin_controller/addEditor";
$route['deleteEditor/(:any)'] = "admin_controller/deleteEditor/$1";
$route['addEvent'] = "admin_controller/addEvent";
$route['deleteEvent/(:any)'] = "admin_controller/deleteEvent/$1";
$route['addOwner'] = "admin_controller/addOwner";
$route['deleteOwner/(:any)'] = "admin_controller/deleteOwner/$1";





/* End of file routes.php */
/* Location: ./application/config/routes.php */