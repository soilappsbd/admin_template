<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';



$route['table']  = 'welcome/table';


//inventory Route

$route['additem'] = 'Inventory_controller/additem';
$route['category'] = 'Inventory_controller/category';
$route['vendor'] = 'Inventory_controller/vendor';
$route['product'] = 'Inventory_controller/product';
$route['warehouse'] = 'Inventory_controller/warehouse';



$route['order'] = 'Order_controller/order';





$route['edititem'] = 'Edited_controler/edititem';
$route['edititem/(:any)'] = 'Edited_controler/edititem/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;