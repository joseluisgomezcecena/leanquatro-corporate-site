<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
*/


//pages
$route['(:any)'] = 'pages/view/$1';
$route['default_controller'] = 'pages/view';
$route['emailforms/send'] = 'emailforms/send';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
