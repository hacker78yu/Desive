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
$route['default_controller'] = 'Home';
$route['gudang/master_barang/tambah'] = 'gudang/crud_master_barang/tambah';
$route['gudang/master_barang/tambah_simpan'] = 'gudang/crud_master_barang/tambah_simpan';
$route['gudang/master_barang/edit/(:num)'] = 'gudang/crud_master_barang/edit/$1';
$route['gudang/master_barang/edit/simpan'] = 'gudang/crud_master_barang/edit_simpan';
$route['gudang/master_barang/delete/(:num)'] = 'gudang/crud_master_barang/delete/$1';

$route['gudang/master_supplier/tambah'] = 'gudang/crud_master_supplier/tambah';
$route['gudang/master_supplier/tambah_simpan'] = 'gudang/crud_master_supplier/tambah_simpan';
$route['gudang/master_supplier/edit/(:num)'] = 'gudang/crud_master_supplier/edit/$1';
$route['gudang/master_supplier/edit/simpan'] = 'gudang/crud_master_supplier/edit_simpan';
$route['gudang/master_supplier/delete/(:num)'] = 'gudang/crud_master_supplier/delete/$1';

$route['gudang/masuk_barang/tambah'] = 'gudang/crud_masuk_barang/tambah';
$route['gudang/masuk_barang/tambah_simpan'] = 'gudang/crud_masuk_barang/tambah_simpan';
$route['gudang/masuk_barang/edit/(:num)'] = 'gudang/crud_masuk_barang/edit/$1';
$route['gudang/masuk_barang/edit/simpan'] = 'gudang/crud_masuk_barang/edit_simpan';
$route['gudang/masuk_barang/delete/(:num)'] = 'gudang/crud_masuk_barang/delete/$1';


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
