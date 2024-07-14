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

//## for Administrator
//$route['admin/(:any)/(:any)'] = 'admin/$1/$2';
//$route['admin/(:any)'] = 'admin/$1';
//$route['admin'] = 'admin/home';

//## short url
$route['sh/(:any)'] = 'website/shorturl/get_link/$1';
$route['sh'] = 'website/shorturl';

//## for Teacher
$route['tis/(:any)/(:any)'] = 'tis/$1/$2';
$route['tis/(:any)'] = 'tis/$1';
$route['tis'] = 'tis/home';

//## for Students
$route['sis/(:any)/(:any)'] = 'sis/$1/$2';
$route['sis/(:any)'] = 'sis/$1';
$route['sis'] = 'sis/home';

$route['default_controller'] = 'website/home';
$route['contact'] = 'website/contact';
$route['check_register'] = 'website/register/check_register';
$route['check_register/(:any)'] = '3/$1';
$route['curriculum'] = 'website/curriculum';
$route['services'] = 'website/services';
$route['services/test'] = 'website/services/test';
$route['about'] = 'website/about';

//REGISTER
// $route['register'] = 'website/register';
// $route['register-step1'] = 'website/register/frm1';
// $route['register-step2'] = 'website/register/frm2';
// $route['register-step3'] = 'website/register/frm3';
// $route['register-pay'] = 'website/register/pay';
// $route['register-complete'] = 'website/register/complete';
// $route['register-reserve'] = 'website/register/reserve';

//PAYMENT
$route['payment'] = 'website/payment';
$route['payment-view'] = 'website/payment/payment_view';
$route['payment-pay'] = 'website/payment/pay';

//REGISTER-66
$route['register'] = 'website/register_66';
$route['register-step1'] = 'website/register_66/frm1';
$route['register-step2'] = 'website/register_66/frm2';
$route['register-step3'] = 'website/register_66/frm3';
$route['register-pay'] = 'website/register_66/pay';
$route['register-complete'] = 'website/register_66/complete';
$route['register-reserve'] = 'website/register_66/reserve';

//LINE
$route['line'] = 'website/line';

//PARTNER
$route['partner'] = 'website/partner';
$route['partner/cana'] = 'website/partner/cana';
$route['partner/triplej'] = 'website/partner/triplej';
$route['partner/thaigps'] = 'website/partner/thaigps';
$route['partner/smartf'] = 'website/partner/smartf';
$route['partner/worldgps'] = 'website/partner/worldgps';

//PLAN
$route['plan'] = 'website/plan';


//BLOG
$route['blog'] = 'website/blog';
$route['blog/article_1'] = 'website/blog/article_1';
$route['blog/article_2'] = 'website/blog/article_2';

//PAYMENT
$route['course'] = 'website/course';
$route['course/detail/(:any)'] = 'website/course/detail/$1';


$route['sitemap'] = 'website/sitemap';
$route['docs'] = 'website/documents';
$route['docs/detail/(:any)'] = 'website/documents/detail/$1';
$route['docs/detail/(:any)/(:any)/(:any)'] = 'website/documents/detail/$1/$2/$3';
$route['faqs'] = 'website/faqs';
$route['announce'] = 'website/announce';
$route['about'] = 'website/about';
$route['news'] = 'website/news';
$route['news/detail/(:any)'] = 'website/news/detail/$1';
$route['news/detail/(:any)/(:any)/(:any)'] = 'website/news/detail/$1/$2/$3';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
