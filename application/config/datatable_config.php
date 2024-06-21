<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
if (!isset($config)) {
    $config = array();
}

$config['datatable_class'] = "dyntable table dt-responsive nowrap dataTable no-footer dtr-inline";



// $config['groups_listing_headers'] = array(
//     'group_name' => array(
//         'jsonField' => 'name',
//         'width' => '20%'
//     ),
//     'description' => array(
//         'jsonField' => 'email',
//         'width' => '20%'
//     ),
//     'edit' => array(
//         'isSortable' => false,
//         'systemDefaults' => true,
//         'type' => 'EDIT_ICON',
//         'isLink' => true,
//         'linkParams' => array('user_id'),
//         'linkTarget' => 'admin_adduser/',
//         'width' => '5%',
//         'align' => 'center'
//     ),
//     'delete' => array(
//                 'isSortable' => FALSE,
//                 'systemDefaults' => TRUE,
//                 'type' => 'DELETE_ICON',
//                 'confirmBox' => TRUE,
//                 'isLink' => TRUE,
//                 'linkParams' => array('user_id'),
//                 'linkTarget' => 'admin_deleteuser/',
//                 'width' => '5%',
//                 'align' => 'center'
//             )

//     // 'status' => array(
//     //     'jsonField' => 'user_id',
//     //     'isSortable' => false,
//     //     'callBack' => true,
//     //     'callBackType' => 'helper',
//     //     'callBackClass' => 'common_helper',
//     //     'callBackFunction' => 'userstatuschange',
//     //     'width' => '5%',
//     //     'align' => 'center'
//     // ),
//     // 'adjustbalance' => array(
//     //     'jsonField' => 'user_id',
//     //     'isSortable' => false,
//     //     'callBack' => true,
//     //     'callBackType' => 'helper',
//     //     'callBackClass' => 'common_helper',
//     //     'callBackFunction' => 'updateuserbalance',
//     //     'width' => '5%',
//     //     'align' => 'center'
//     // ),
// );

// $config['contact_us_listing_headers'] = array(
//     'contant_id' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'contant_id',
//         'width' => '10%'
//     ),
//     'Sender Name' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'sender_name',
//         'width' => '20%'
//     ),
//     'Sender Email' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'sender_email',
//         'width' => '20%'
//     ),
//     'Contact' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'contact',
//         'width' => '20%'
//     ),
//     'Subject' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'subject',
//         'width' => '20%'
//     ),
//     'Message' => array(
//         'isSortable' => TRUE,
//         'jsonField' => 'message',
//         'width' => '20%'
//     ),

//     'View' => array(
//         'isSortable' => FALSE,
//         'systemDefaults' => TRUE,
//         'type' => 'VIEW_ICON',
//         'isLink' => TRUE,
//         'linkParams' => array('contant_id'),
//         'linkTarget' => 'admin/User/contact_view/',
//         'width' => '5%',
//         'align' => 'center'
//     ),
    

// );