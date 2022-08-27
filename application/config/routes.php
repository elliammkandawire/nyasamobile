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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller'] = 'home';
$route['aboutUs'] = 'home/aboutUs';
$route['partnerships'] = 'partners';
$route['careers'] = 'Vacancies';
$route['news/(:any)'] = 'news/details/$1';
$route['careers/(:any)'] = 'Vacancies/details/$1';
$route['404_override'] = 'NotFound';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'user';
$route['auth'] = 'user/login';
$route['dashboard'] = 'home/dashboard';
$route['logout'] = 'user/logout';

$route['update_company'] = 'home/update_company';
$route['update_slider'] = 'slider/update_slider';

$route['admin_about'] = 'home/admin_about_us';
$route['services_admin'] = 'services/admin_dashboard';

$route['members_admin'] = 'members/admin_dashboard';

$route['partners_admin'] = 'Partners/admin_dashboard';
$route['admin_resources'] = 'publications/resources_admin';
$route['team_admin'] = 'team/admin_dashboard';
$route['news_admin'] = 'news/news_admin';
$route['events_admin'] = 'events/admin_dashboard';
$route['careers_admin'] = 'vacancies/admin_dashboard';

$route['edit_news'] = 'news/EditExisting';
$route['updateMember'] = 'Partners/updateMember';
$route['addMember'] = 'Partners/addMember';
$route['addNewVacancy'] = 'Vacancies/addNew';
$route['updateExistingVacancy'] = 'Vacancies/updateExisting';
$route['addNew'] = 'news/addNew';
$route['delete_news/(:any)'] = 'news/delete/$1';
