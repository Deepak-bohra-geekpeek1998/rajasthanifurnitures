<?php

defined('BASEPATH') or exit('No direct script access allowed');

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
    // $route['default_controller']                    =  'public/User/home';
    


/*     * **********************************Public Side*************************************** */

$route['default_controller']                    =  'public/User/home';
$route['client']                                =  'public/User/client';
$route['about-us']                              =  'public/User/about_us';
$route['contact-us']                            =  'public/User/contactus';
$route['product-category']                      =  'public/User/product_category';
$route['product-category/(:num)']               =  'public/User/product_category/$1';

$route['product-detail']                        =  'public/User/product_detail';
$route['product-detail/(:num)']                 =  'public/User/product_detail/$1';

/*     * **********************************Admin Side*************************************** */

$route['admins']                                =  'admin/User/index';
$route['signin']                                =  'admin/User/signin';
$route['logout']                                =  'admin/User/logout';
$route['admin/dashboard']                       =  'admin/User/dashboard';
$route['admin/home']                            =  'admin/User/home';
$route['client-list']                           =  'admin/User/client_list';
$route['client_delete/(:num)']                  =  'admin/User/client_delete/$1';
$route['category-add']                          =  'admin/User/category_add';
$route['category-form']                         =  'admin/User/category_form';
$route['category-list']                         =  'admin/User/category_list';
$route['update_category/(:num)']                =  'admin/User/update_category/$1';
$route['delete_category/(:num)']                =  'admin/User/delete_category/$1';
$route['category_list_data']                    =  'admin/User/category_list_data';
$route['banner-add']                            =  'admin/User/banner_add';
$route['banner-list']                           =  'admin/User/banner_list';
$route['banner-data']                           =  'admin/User/banner_data';
$route['update_banner/(:num)']                  =  'admin/User/update_banner/$1';
$route['delete_banner/(:num)']                  =  'admin/User/delete_banner/$1';

/*     * **********************************Package Side*************************************** */

$route['admin/add_product']                     =  'admin/Package/add_product';
$route['package_add']                           =  'admin/Package/package_add';
$route['admin/home']                            =  'admin/Package/packlist';
$route['update_package/(:num)']                 =  'admin/Package/update_package/$1';
$route['delete/(:num)']                         =  'admin/Package/delete/$1';

// $route['pack_update/(:num)']                    =  'admin/Package/pack_update/$1';


