<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function check_access($module, $user_type, $permission_type, $redirect_status = false, $redirect_to = "admin/dashboard")
{
    $CI = &get_instance();

    $return = false;

    if (!empty($module) && !empty($user_type) && !empty($permission_type)) {
        if ($user_type == "1") {
            $return = true;
        } else {
            $CI->load->model("Usertype_model");
            $return = $CI->Usertype_model->get_user_permission($module, $user_type, $permission_type);
        }
    }
    if (empty($return) && !empty($redirect_status)) {
        redirect($redirect_to);
    } else
        return $return;
}

function get_loggedin_admin_user_data()
{
    $CI = &get_instance();
    $userdata = (array) $CI->session->userdata;
    return $userdata;
}

function get_date($date)
{
    $return = '';
    if (!empty($date)) {
        $return = date('Y-m-d', strtotime($date));
    }
    return $return;
}

function get_site_logo()
{
    $ci = &get_instance();
    $ci->load->library("commonlibrary");
    $site_data = ''; // get_site_details();
    $return_logo = '';
    if (!empty($site_data)) {
        $logo = $site_data['logo'];
        $site_logo_config = get_custom_config_item('site_logo');
        $return_logo = base_url() . $site_logo_config['upload_path'] . $site_logo_config['default'];
        if (!empty($logo)) {
            $file = $site_logo_config['upload_path'] . $logo;
            $is_logo_valid = $ci->commonlibrary->is_file_exists($file);
            if (!empty($is_logo_valid)) {
                $return_logo = base_url() . $file;
            }
        }
    }
    return $return_logo;
}

function check_loggedin_user($key)
{
    $CI = &get_instance();

    if (!empty($CI->session->userdata[$key])) {
        $return = TRUE;
    } else {
        $return = FALSE;
    }

    return $return;
}

function check_loggedin_userdata($key)
{
    $CI = &get_instance();

    if (!empty($CI->session->userdata[$key])) {
        $return = $CI->session->userdata[$key];
    } else {
        $return = array();
    }

    return $return;
}

function check_email_exist($user)
{
    $ci = &get_instance();

    $ci->load->model('admin/user_model');
    $return = $ci->User_model->check_email_exist($user);
    if ($return > 0) {
        echo json_encode(FALSE);
    } else {
        echo json_encode(TRUE);
    }
}

function check_phone($number)
{

    $result = preg_match('/^[0-9\-\(\)\ ]+$/', $number);
    if ($result == '0') {
        echo json_encode(FALSE);
    } else {
        echo json_encode(TRUE);
    }
}

function check_all_email($user)
{
    $ci = &get_instance();

    $ci->load->model('admin/member_model');
    $return = $ci->member_model->check_email_exist($user);
    if ($return > 0) {
        echo json_encode(true);
    } else {
        echo json_encode(false);
    }
    //return $return;
}

function get_preview_link($image, $config = '', $base_url = '')
{
    $image_custom = get_custom_config_item($config);
    $system_path = '';
    $preview_link = '';
    $tmp_base_url = '';
    if (!isset($base_url) || $base_url == '') {
        $tmp_base_url = base_url();
    } else {
        $tmp_base_url = $base_url;
    }
    if (!empty($image)) {
        $system_path = set_realpath($image_custom["upload_path"]);
        $image_path = $system_path . $image;
        $img_url = base_url() . $image_custom['upload_path'] . $image;
        if (file_exists($image_path)) {
            $preview_link = '<a rel="' . $tmp_base_url . $image . '" href="' . $img_url . '" class="preview preview_link_show">Click here to preview <i class="action-icon fa fa-image"></i></a>';
        }
    }

    return $preview_link;
}

function price_format($price)
{
    $result = number_format($price);
    return '&pound;' . $result;
}

function get_base_url_for_email()
{
    $url = base_url();
    $arr_url = explode('//', $url);
    $base_url = $arr_url[1];
    return $base_url;
}

function is_password_valid($password = '')
{
    $ci = &get_instance();
    $password = trim($password);

    $regex_uppercase = '/[A-Z]/';
    $regex_number = '/[0-9]/';

    if (empty($password)) {
        $ci->form_validation->set_message('valid_password', 'The Password field is required.');
        return FALSE;
    } else if (preg_match_all($regex_uppercase, $password) < 1) {
        $ci->form_validation->set_message('valid_password', 'The Password field must be at least one uppercase letter.');
        return FALSE;
    } else if (preg_match_all($regex_number, $password) < 1) {
        $ci->form_validation->set_message('valid_password', 'The Password field must have at least one number.');
        return FALSE;
    } else {
        return TRUE;
    }
}

function is_super_admin()
{
    $CI = &get_instance();
    $userdata = (array) $CI->session->userdata;

    if (!isset($userdata['user_type'])) {
        return false;
    } else {
        if ($userdata['user_type'] == 'Super Admin') {
            return true;
        } else {
            return false;
        }
    }
}

function get_login_name()
{
    $CI = &get_instance();
    $userdata = (array) $CI->session->userdata;
    if (empty($userdata)) {
        $login_name = '';
    } else {
        $login_name = $userdata['user_name'];
    }

    return $login_name;
}

function get_date_d_m_y($date)
{
    $return = '';
    if (!empty($date)) {
        $return = date('d-m-Y', strtotime($date));
    }
    return $return;
}

//    function get_sigth_date_F_d_Y($date)
//    {
//        $return = '';
//        if (!empty($date))
//        {
//            $return = date('F-d-Y', strtotime($date));
//        }
//        return $return;
//    }

function get_date_d_m_y_time($date)
{
    $return = '';
    if (!empty($date)) {
        $return = date('d-m-Y H:i:s', strtotime($date));
    }
    return $return;
}

function get_ip_address()
{
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if (getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if (getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if (getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if (getenv('HTTP_FORWARDED'))
        $ipaddress = getenv('HTTP_FORWARDED');
    else if (getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function get_attachments($epc)
{
    $property_epc_config = get_custom_config_item('attachment');
    $epc_url = '';
    if (!empty($epc)) {
        $property_epc_config = get_custom_config_item('attachment');
        $file = $property_epc_config['upload_path'] . $epc;

        if (is_file($file)) {
            $epc_url = base_url() . $property_epc_config['upload_path'] . $epc;
        }
    }
    return $epc_url;
}

function import_script_data($type, $date)
{
    $CI = &get_instance();
    $data = array();

    $from_date = $date['from_date'];
    $to_date = $date['to_date'];

    $datediff = strtotime($from_date) - strtotime($to_date);
    $totalDays = abs(round($datediff / (60 * 60 * 24)));

    for ($i = 0; $i <= $totalDays; $i++) {
        $date =   date('Y-m-d', strtotime("+" . $i . " day", strtotime($from_date)));

        $arr_downloaded_file_data = download_script_data($type, $date);
        $download_date = $arr_downloaded_file_data["date"];
        $filename = $arr_downloaded_file_data["filename"];

        $check = $CI->NiftyFifty_model->check_already_exist($type, array('from_date' => $download_date, 'to_date' => $download_date));

        if (empty($check)) {
            $CI->load->library("excel");

            $objPHPExcel = PHPExcel_IOFactory::load($filename);

            $worksheet = $objPHPExcel->setActiveSheetIndex(0);
            $highestRow = $worksheet->getHighestDataRow();

            for ($row = 2; $row <= $highestRow; ++$row) {
                $symbol = trim($worksheet->getCellByColumnAndRow(0, $row)->getValue());

                if (!empty($symbol)) {
                    $series = trim($worksheet->getCellByColumnAndRow(1, $row)->getValue());

                    if ($series == "EQ") {
                        $open = trim($worksheet->getCellByColumnAndRow(2, $row)->getValue());
                        $high = trim($worksheet->getCellByColumnAndRow(3, $row)->getValue());
                        $low = trim($worksheet->getCellByColumnAndRow(4, $row)->getValue());
                        $close = trim($worksheet->getCellByColumnAndRow(5, $row)->getValue());
                        $trade_qty = trim($worksheet->getCellByColumnAndRow(8, $row)->getValue());
                        $trade_value = trim($worksheet->getCellByColumnAndRow(9, $row)->getValue());

                        $dataArray = array(
                            'symbol' => $symbol,
                            'open' => str_replace(",", "", $open),
                            'high' => str_replace(",", "", $high),
                            'low' => str_replace(",", "", $low),
                            'close' => str_replace(",", "", $close),
                            'trade_qty' => str_replace(",", "", $trade_qty),
                            'trade_value' => str_replace(",", "", $trade_value),
                            'date' => $download_date,
                            'created_at' => date('Y-m-d H:i:s')
                        );

                        $data[] = $dataArray;
                        //                        $CI->NiftyFifty_model->saverates($dataArray);
                    }
                }
            }

            $CI->db->insert_batch('scrip_rates', $data);
        }
    }


    return array('from_date' => $from_date, 'to_date' => $to_date);
}

function import_nifty_index_data($type, $date)
{
    $CI = &get_instance();

    $data = array();

    $arr_downloaded_file_data = download_script_data($type, $date['from_date']);

    $download_date = $arr_downloaded_file_data["date"];
    $filename = $arr_downloaded_file_data["filename"];

    $check = $CI->NiftyFifty_model->check_already_exist($type, array('from_date' => $download_date, 'to_date' => $download_date));

    if (empty($check)) {
        $CI->load->library("excel");

        $objPHPExcel = PHPExcel_IOFactory::load($filename);
        $worksheet = $objPHPExcel->setActiveSheetIndex(0);
        $highestRow = $worksheet->getHighestDataRow();
        for ($row = 2; $row <= $highestRow; ++$row) {
            $symbol = trim($worksheet->getCellByColumnAndRow(1, $row)->getValue());
            // p($symbol);

            if (empty($symbol)) {
                break;
            }


            if (!empty($symbol)) {
                //                $series = trim($worksheet->getCellByColumnAndRow(1, $row)->getValue());
                // if ($series == "EQ") {
                $prev_closing = trim($worksheet->getCellByColumnAndRow(2, $row)->getValue());
                $open = trim($worksheet->getCellByColumnAndRow(3, $row)->getValue());
                $high = trim($worksheet->getCellByColumnAndRow(4, $row)->getValue());
                $low = trim($worksheet->getCellByColumnAndRow(5, $row)->getValue());
                $close = trim($worksheet->getCellByColumnAndRow(6, $row)->getValue());
                $trade_value = trim($worksheet->getCellByColumnAndRow(7, $row)->getValue());
                $trade_qty = trim($worksheet->getCellByColumnAndRow(8, $row)->getValue());
                $trades = trim($worksheet->getCellByColumnAndRow(11, $row)->getValue());
                $high_52_week = trim($worksheet->getCellByColumnAndRow(12, $row)->getValue());
                $low_52_week = trim($worksheet->getCellByColumnAndRow(13, $row)->getValue());

                $dataArray = array(
                    'symbol' => $symbol,
                    'prev_closing' => str_replace(",", "", $prev_closing),
                    'open' => str_replace(",", "", $open),
                    'high' => str_replace(",", "", $high),
                    'low' => str_replace(",", "", $low),
                    'close' => str_replace(",", "", $close),
                    'trade_value' => str_replace(",", "", $trade_value),
                    'trade_qty' => str_replace(",", "", $trade_qty),
                    'trades' => str_replace(",", "", $trades),
                    'high_52_week' => str_replace(",", "", $high_52_week),
                    'low_52_week' => str_replace(",", "", $low_52_week),
                    'date' => $download_date,
                    'created_at' => date('Y-m-d H:i:s')
                );

                //                p($dataArray);

                $data[] = $dataArray;
                //                        $CI->NiftyFifty_model->saverates($dataArray);
                // }
            }
            //            }
        }

        if (!empty($data)) {
            $CI->db->insert_batch('nifty_index', $data);
        }
    }

    return array('from_date' => $download_date, 'to_date' => $download_date);
}

function download_script_data($type, $date)
{
    $arr_fileDetails = get_download_file_details($type, $date);
    //        $arr_fileDetails = Array
    //        (
    //            "date" => "2020-07-10",
    //            "url" => "https://archives.nseindia.com/archives/equities/bhavcopy/pr/PR100720.zip",
    //            "filename" => "PR100720.zip"
    //        );

    $date = $arr_fileDetails['date'];
    $filename = $arr_fileDetails['filename'];
    $url = $arr_fileDetails['url'];

    $extractDir = get_custom_config_item('tmp_data_folder');
    $filepath = $extractDir . $filename;
    if ($type == "nifty_index") {
        $arr_fileinfo = pathinfo($filename);
        $base_folder = $arr_fileinfo["filename"];
        $extractDir = $extractDir . $base_folder;

        $csv_filename = $extractDir . "/" . ucwords(strtolower($base_folder)) . ".csv";
    } else {
        $csv_filename = str_replace(".zip", "", $filepath);
    }
    //        $csv_filename = str_replace(".zip", ".csv", str_replace("PR", 'Pr', $filepath));
    $zipResource = fopen($filepath, "w");

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_FILE, $zipResource);

    $page = curl_exec($ch);

    if (!$page) {
        echo "Error :- " . curl_error($ch);
    }

    curl_close($ch);

    $zip = new ZipArchive;
    $res = $zip->open($filepath);
    if ($res === TRUE) {
        $zip->extractTo($extractDir);
        $zip->close();
        //          echo 'woot!';
    } else {
        //          echo 'doh!';
    }

    $arr = array(
        'date' => $date,
        'filename' => $csv_filename
    );

    return $arr;
}

function get_download_file_details($type, $date)
{

    $arr = array();

    while (true) {
        $arr = get_file_detail($type, $date);
        $url = $arr['url'];
        $filename = $arr['filename'];

        $handle = @fopen($url, 'r');

        if (!$handle) {
            $date = date("Y-m-d", strtotime('-1 days', strtotime($date)));
        } else {
            break;
        }
    }

    return $arr;
}

function get_file_detail($type, $date)
{
    if ($type == 'nifty_index') {
        $replace = str_replace('/', '-', $date);
        $chng_format = date("y-m-d", strtotime($replace));
        $dateArray = explode("-", $chng_format);
        $year = $dateArray[0];
        $month = strtoupper($dateArray[1]);
        $day = $dateArray[2];
        $filename = 'PR' . $day . $month . $year . '.zip';

        $url = 'https://archives.nseindia.com/archives/equities/bhavcopy/pr/' . $filename;
    } else {
        $replace = str_replace('/', '-', $date);
        $chng_format = date("Y-M-d", strtotime($replace));
        $dateArray = explode("-", $chng_format);
        $year = $dateArray[0];
        $month = strtoupper($dateArray[1]);
        $day = $dateArray[2];

        $filename = 'cm' . $day . $month . $year . 'bhav.csv.zip';
        $url = 'https://archives.nseindia.com/content/historical/EQUITIES/' . $year . '/' . $month . '/' . $filename;
    }

    $dataArray = array(
        'date' => $date,
        'url' => $url,
        'filename' => $filename
    );

    return $dataArray;
}

function get_prediction($type, $prediction_date)
{
    $CI = &get_instance();

    $color_red = "FF0000";
    $color_green = "009600";

    $check = $CI->NiftyFifty_model->check_already_exist($type, $prediction_date);

    if (empty($check)) {
        if ($type == 'nse50' || $type == 'nse100') {
            $download_date = import_script_data($type, $prediction_date);
        } else {
            $download_date = import_nifty_index_data($type, $prediction_date);
        }
    } else {
        $download_date = $prediction_date;
    }


    if ($type == 'nse50' || $type == 'nse100') {
        $scriptRates = $CI->NiftyFifty_model->getScriptRates($type, $download_date);
    } else {
        $scriptRates = $CI->NiftyFifty_model->getNiftyIndex($download_date);
    }

    $percentArr = getCustomConfigItem('percent');
    $dataArray = array();
    $tmpDataArray = array();
    if (!empty($scriptRates)) {
        foreach ($scriptRates as $script) {
            $symbol = $script['symbol'];

            $open = $script['open'];
            $high = $script['high'];
            $low = $script['low'];
            $close = $script['close'];
            $diff = $high - $low;
            $dataArray[$symbol] = array();
            $tmpDataArray[$symbol]['open_rate'] = number_format($open, 2, ".", "");
            $tmpDataArray[$symbol]['high_rate'] = number_format($high, 2, ".", "");
            $tmpDataArray[$symbol]['low_rate'] = number_format($low, 2, ".", "");
            $tmpDataArray[$symbol]['close_rate'] = number_format($close, 2, ".", "");

            foreach ($percentArr as $percent) {
                $tmpDiff = $diff * ($percent / 100);
                if ($close >= $open) {
                    $dataArray[$symbol]['UP']['EXTENSION'][] = number_format(($high + $tmpDiff), 2, ".", "");
                    $dataArray[$symbol]['UP']['RETRACEMENT'][] = number_format(($high - $tmpDiff), 2, ".", "");
                }
                if ($close < $open) {
                    $dataArray[$symbol]['DOWN']['EXTENSION'][] = number_format(($low - $tmpDiff), 2, ".", "");
                    $dataArray[$symbol]['DOWN']['RETRACEMENT'][] = number_format(($low + $tmpDiff), 2, ".", "");
                }
            }
        }
    }


    $CI->load->library("excel");
    $object = new PHPExcel();

    $object->setActiveSheetIndex(0);

    $styleArray = array(
        'font' => array(
            'size' => 12
        )
    );

    $object->getDefaultStyle()->applyFromArray($styleArray);

    $excel_row = 2;
    $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, 'Date');
    $object->getActiveSheet()->getStyle('A' . $excel_row)->getFont()->setBold(true);
    $object->getActiveSheet()->getStyle('B' . $excel_row)->getFont()->setBold(true);

    if ($download_date['from_date'] == $download_date['to_date']) {
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, date("d/m/Y", strtotime($download_date['from_date'])));
    } else {
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, date("d/m/Y", strtotime($download_date['from_date'])) . ' - ' . date("d/m/Y", strtotime($download_date['to_date'])));
    }


    $excel_row = 4;
    $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, 'Symbol');
    $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, 'Open');
    $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, 'High');
    $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, 'Low');
    $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, 'Close');
    $object->getActiveSheet()->setCellValueByColumnAndRow(5, $excel_row, "TREND");
    $object->getActiveSheet()->setCellValueByColumnAndRow(6, $excel_row, "HEAD");

    $from = "A4"; // or any value
    $to = "T4"; // or any value
    $object->getActiveSheet()->getStyle("$from:$to")->getFont()->setBold(true);

    $object->getActiveSheet()->freezePane('A5');
    $pCol = 6;
    $style = array(
        'alignment' => array(
            'horizontal' => PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            'vertical' => PHPExcel_Style_Alignment::VERTICAL_CENTER,
        ),
    );

    foreach ($percentArr as $p) {
        $pCol++;
        $object->getActiveSheet()->setCellValueByColumnAndRow($pCol, $excel_row, $p);
    }

    $excel_row = $excel_row + 1;
    foreach ($dataArray as $symbol => $arr_prediction) {
        $open = $tmpDataArray[$symbol]['open_rate'];
        $close = $tmpDataArray[$symbol]['close_rate'];

        $object->getActiveSheet()->setCellValueByColumnAndRow(0, $excel_row, $symbol);
        $object->getActiveSheet()->setCellValueByColumnAndRow(1, $excel_row, $tmpDataArray[$symbol]['open_rate']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(2, $excel_row, $tmpDataArray[$symbol]['high_rate']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(3, $excel_row, $tmpDataArray[$symbol]['low_rate']);
        $object->getActiveSheet()->setCellValueByColumnAndRow(4, $excel_row, $tmpDataArray[$symbol]['close_rate']);

        foreach ($arr_prediction as $trend => $arr_head) {
            $extension_row = $excel_row;
            $retracement_row = $excel_row + 1;

            $mergeCel = 'F' . ($extension_row) . ':F' . ($retracement_row);

            $object->getActiveSheet()->setCellValueByColumnAndRow(5, $extension_row, $trend)->mergeCells($mergeCel);
            $object->getActiveSheet()->getStyle($mergeCel)->applyFromArray($style);

            foreach ($arr_head as $head => $arr_values) {
                if ($head == "EXTENSION") {
                    $tmprow = $extension_row;
                    if ($close >= $open) {
                        $color = $color_green;
                    } elseif ($close < $open) {
                        $color = $color_red;
                    }
                } elseif ($head == "RETRACEMENT") {
                    $tmprow = $retracement_row;
                    if ($close >= $open) {
                        $color = $color_red;
                    } elseif ($close < $open) {
                        $color = $color_green;
                    }
                }

                $styleArray = array(
                    'font' => array(
                        'bold' => true,
                        'color' => array('rgb' => $color),
                    )
                );

                $object->getActiveSheet()->getStyle('G' . $tmprow . ':S' . $tmprow)->applyFromArray(
                    $styleArray
                );

                $object->getActiveSheet()->setCellValueByColumnAndRow(6, $tmprow, $head);

                $column = 7;

                for ($idx_value = 0; $idx_value <= sizeof($arr_values) - 1; $idx_value++) {
                    $object->getActiveSheet()->setCellValueByColumnAndRow($column, $tmprow, $arr_values[$idx_value]);
                    $column = $column + 1;
                }

                $excel_row = $excel_row + 1;
            }
            $excel_row = $excel_row + 1;
        }
    }

    foreach (range('A', 'Z') as $columnID) {
        $object->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    }

    foreach ($object->getActiveSheet()->getRowDimensions() as $rd) {
        $rd->setRowHeight(-1);
    }

    $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    if ($download_date['from_date'] == $download_date['to_date']) {
        $file_date = $download_date['from_date'];
    } else {
        $file_date = $download_date['from_date'] . '-' . $download_date['to_date'];
    }


    $outputfilename = "NIFTY-50-" . $file_date . ".xls";
    if ($type == 'nse50') {
        $outputfilename = "NIFTY-50-" . $file_date . ".xls";
    } elseif ($type == 'nse100') {
        $outputfilename = "NIFTY-100-" . $file_date . ".xls";
    } elseif ($type == 'nifty_index') {
        $outputfilename = "INDEX-" . $file_date . ".xls";
    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="' . $outputfilename . '"');

    $object_writer->save('php://output');
}
