<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'MainController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Auth routes
$route['userlogin'] = 'AuthController';
$route['adminlogin'] = 'AuthController/admin_login';
$route['login-process'] = 'AuthController/adminloginProcess';
$route['loginprocess'] = 'AuthController/userloginProcess';

//Main routes
$route['emphome'] = 'MainController/emp_home';
$route['employee'] = 'MainController/employee';
$route['employee/(:num)'] = 'MainController/employee';
$route['leaverequests'] = 'MainController/leaverequests';
$route['workhours_list'] = 'MainController/workhours_list';
$route['query_workhours_list'] = 'MainController/query_workhours_list';
$route['leavepending'] = 'MainController/leavepending';
$route['leaveapproved'] = 'MainController/leaveapproved';
$route['leavehistory'] = 'MainController/leavehistory';
$route['leavecancelled'] = 'MainController/leavecancelled';
$route['add'] = 'MainController/add_employee';
$route['reg'] = 'AuthController/reg_employee';
$route['req_leave'] = 'MainController/request_leave';
$route['request_leave_Process/(:num)'] = 'MainController/request_leave_Process/$1';
$route['addProcess'] = 'MainController/add_employee_process';
$route['regProcess'] = 'AuthController/reg_employee_process';
$route['update/(:num)'] = 'MainController/update_employee/$1';
$route['updateProcess/(:num)'] = 'MainController/update_employee_process/$1';
$route['delete/(:num)'] = 'MainController/delete/$1';
$route['leavegrant/(:any)'] = 'MainController/leavegrant/$1';
$route['leavedeny/(:any)'] = 'MainController/leavedeny/$1';
$route['logout'] = 'MainController/logout';
$route['leave_reject/(:num)'] = 'MainController/leave_reject/$1';
$route['leave_grant/(:num)'] = 'MainController/leave_grant/$1';

