<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller']   = 'welcome';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'user/login';
$route['logout'] = 'user/logout';

$route['dashboard'] = 'dashboard';

$route["logs"] = "logs";

$route["jobs"] = "jobs";
$route["jobs/add"] = "jobs/add";
$route["jobs/(:num)/(:num)"] = "jobs/job/$1/$2";
$route["jobs/clone/(:num)/(:num)"] = "jobs/clone/$1/$2";
$route["jobs/(:num)/(:num)/deactivate"] = "jobs/deactivate/$1/$2";
$route["jobs/(:num)/(:num)/activate"] = "jobs/activate/$1/$2";
$route["jobs/(:num)/(:num)/leads"] = "jobs/leads/$1/$2";

$route["leads/(:num)"] = "leads/lead/$1";
$route["leads/add/(:num)/(:num)"] = "leads/add/$1/$2";

$route["users"] = "user";
$route["users/add"] = "user/add";
$route["users/delete/(:num)"] = "user/delete/$1";
$route["users/(:num)"] = "user/user/$1";

$route["api/lead/note/add"] = "ajax/add_lead_note";
$route["api/lead/stage/edit"] = "ajax/edit_lead_stage";
$route["api/lead/status/edit"] = "ajax/edit_lead_status";
$route["api/lead/sales/edit"] = "ajax/edit_lead_sales";
$route["api/lead/sales/amount"] = "ajax/get_lead_sales_amount";
$route["api/lead/ad/type/edit"] = "ajax/update_lead_ad_type";
$route["api/lead/sales/amount/edit"] = "ajax/update_lead_sales_amount";
$route["api/lead/transaction/new"] = "ajax/add_lead_transaction";
$route["api/lead/invoice/new"] = "ajax/add_lead_invoice";
$route["api/job/note/add"] = "ajax/add_job_note";
