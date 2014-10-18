<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['home'] = 'frontend/index';
$route['contact-us'] = 'frontend/contact_us';
$route['(playmaker-academy|rate-and-promotion)'] = 'frontend/content';
$route['(league-and-tournament|new-and-event)'] = 'frontend/list_content';
$route['default_controller'] = 'frontend';
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */