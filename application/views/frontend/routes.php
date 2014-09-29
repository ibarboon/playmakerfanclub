<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['home'] = 'frontend/home';
$route['(playmaker-academy|rate-and-promotion)'] = 'frontend/home/content';
$route['(league-and-tournament|new-and-event)'] = 'frontend/home/list_content';
$route['contact-us'] = 'frontend/home/contact_us';
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */