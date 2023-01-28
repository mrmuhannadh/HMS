<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//index area
$routes->get('home', 'Home::index');
$routes->get('gallery', 'Home::gallery');
$routes->get('login', 'Home::login');
$routes->get('logout', 'Home::logout');
$routes->get('forgot_password_view','Home::forgot_password_view');
$routes->get('reset_password','Home::reset_password_view');
$routes->post('forgot_password','Home::forgot_password');
$routes->post('reset_password','Home::reset_password');
$routes->get('contact_us','Home::contactUsView');
$routes->post('contact_us','Home::contactUs');

//warden area
$routes->get('Warden_dashboard', 'Warden_Dashboard::index');
$routes->get('dashboard', 'Warden_Dashboard::update_user');
$routes->get('dashboard', 'Warden_Dashboard::update_propic');
$routes->get('prof', 'Warden_Dashboard::prof');
$routes->get('rooms', 'Warden_Rooms::room');
$routes->get('chat', 'Warden_Dashboard::chat');
$routes->get('complaints', 'Warden_Complaints::index');
$routes->get('notices', 'Warden_Notices::index');
$routes->get('war_hos_fees', 'Warden_Fees_information::war_hos_fees');

//subwarden area
$routes->get('SubWarden_dashboard', 'Subwarden_Dashboard::index');
$routes->get('SubProf', 'Subwarden_Dashboard::prof');
$routes->get('SubRooms', 'SubWarden_Rooms::room');
$routes->get('SubChat', 'SubWarden_Dashboard::chat');
$routes->get('SubComplaints', 'SubWarden_Complaints::index');
$routes->get('SubNotices', 'SubWarden_Notice::index');
$routes->get('SubRequests', 'SubWarden_Request::index');
$routes->get('SubAttendance', 'SubWarden_Attendance::index');
$routes->get('SubFees', 'SubWarden_Fees::index');
$routes->get('SubExp', 'SubWarden_Exp::index');


//security area
$routes->get('Security_login', 'Security_Dashboard::index');
$routes->get('security_dashboardA', 'security_DashboardA::index');
$routes->get('dashboard', 'security_DashboardA::update_user');
$routes->get('dashboard', 'security_DashboardA::update_propic');
$routes->get('prof', 'security_DashboardA::prof');
$routes->get('Send_sms_student', 'Security_Dashboard::Send_sms_student');
$routes->add('Se_search', 'Security_Dashboard::Se_search');
$routes->add('security_send_Message', 'Security_Dashboard::se_send_Message'); 
$routes->get('log_atte', 'Security_DashboardA::log_atte');
$routes->post('logA', 'Security_DashboardA::log_A');
$routes->get('chat_s', 'Security_Dashboard::chat');
$routes->get('secprof', 'Security_Dashboard::prof');


 $routes->POST('logAA', 'Security_DashboardA::log_AAA');
$routes->get('logA', 'Security_DashboardA::log_A');

$routes->get('log_atteAA', 'Security_DashboardA::log_atte');
$routes->get('log_index', 'Security_DashboardA::log_index');

//dean area
$routes->get('dean_dashboard', 'Dean_Dashboard::index');
$routes->get('dashboard', 'Darden_Dashboard::update_user');
$routes->get('dashboard', 'Dean_Dashboard::update_propic');
$routes->get('pro_d', 'Dean_Dashboard::index');
$routes->get('chat_d', 'Dean_Dashboard::chat');
$routes->get('exp_d', 'Dean_Expenses::index');
$routes->get('not_d', 'Dean_Dashboard::notice');
$routes->get('comp_d', 'Dean_Dashboard::complaints');
$routes->get('dean_room', 'Dean_Dashboard::rooms');


//admin area
$routes->get('admin_login', 'admin_Dashboard::index');
$routes->get('dashboard', 'admin_Dashboard::update_propic');
$routes->get('dashboard', 'admin_Dashboard::update_user');
$routes->get('d_board', 'admin_Dashboard::d_board');
$routes->get('user', 'admin_Dashboard::user');
$routes->get('notice', 'admin_Dashboard::notice');
$routes->get('admin_gallery', 'admin_Dashboard::gallery');
$routes->get('products', 'admin_Dashboard::create');
$routes->post('product_store', 'admin_Dashboard::store');
$routes->get('gallery/edit/(:num)', 'admin_Dashboard::edit/$1');
$routes->get('gallery/delete/(:num)', 'admin_Dashboard::delete/$1');
$routes->get('view_notice', 'admin_Dashboard::view_notice');
$routes->get('admin_complaints', 'admin_Dashboard::complaints');
$routes->get('chatbot', 'admin_Dashboard::chatbot');
$routes->get('student', 'admin_Dashboard::student');
$routes->get('inserdata', 'admin_Dashboard::student');

//student area
/*
$routes->get('stu_dashboard', 'Student_Dashboard::index');
$routes->get('request', 'Student_Dashboard::req');
$routes->get('profile', 'Student_Dashboard::profile');
$routes->get('register', 'Student_register::index');
$routes->get('hom', 'Student_Dashboard::hom');
$routes->get('sam', 'Student_Dashboard::sam');
$routes->get('stu_leave', 'Student_leave_request::leave');
$routes->get('stu_notice', 'Student_Notices::index');
$routes->get('otp', 'Student_Otp::OTP_verify');
$routes->get('student_otp', 'Student_Otp::student_otp_index');
$routes->get('in', 'Student_Dashboard::in');
$routes->get('stu_attendance', 'Student_Leave_entry::index');
*/

//student area
$routes->get('stu_dashboard', 'Student_Dashboard::index');
$routes->get('request', 'Student_Dashboard::req');
$routes->get('profile', 'Student_Dashboard::profile');
$routes->get('register', 'Student_register::index');
//$routes->get('com', 'Student_Dashboard::com');
$routes->get('hom', 'Student_Dashboard::hom');
$routes->get('sam', 'Student_Dashboard::sam');
// $routes->get('register', 'Student_Complaint::complaint');
$routes->get('stu_leave', 'Student_leave_request::leave');
$routes->get('stu_notice', 'Student_Notices::index');
$routes->get('otp', 'Student_Otp::OTP_verify');
$routes->get('student_otp', 'Student_Otp::student_otp_index');
$routes->get('in', 'Student_Dashboard::in');
$routes->get('stu_attendance', 'Student_Leave_entry::index');
$routes->get('stu_chat', 'Student_chat::index');
$routes->get('stu_chat', 'Student_chat::index');
$routes->get('leave_request', 'Student_leave_request::leave');
$routes->get('stu_medical_request', 'Student_Medical_request::index');
$routes->get('stu_change_room_request', 'Student_Room_change_request::index');
$routes->get('stu_furniture', 'Student_Furniture_request::index');

$routes->get('stu_furniture_repair', 'Student_Furniture_request::index');
/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
