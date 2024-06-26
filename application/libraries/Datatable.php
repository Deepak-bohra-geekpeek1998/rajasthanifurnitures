<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Datatable
{

    private $_CI;
    private $_systemOperations = array('VIEW', 'VIEW_ICON', 'EDIT', 'EDIT_ICON', 'RESTORE_ICON', 'DELETE', 'DELETE_ICON', 'PRINT', 'PRINT_ICON', 'OTHER_ICON', 'OTHER_TEXT', 'STATUS_ICON', 'SORT_ICON', 'REQUEST_VIEW_ICON', 'UPDATE', 'UPDATE_ICON', 'HISTORY', 'HISTORY_ICON', 'DOWNLOAD_ICON', 'COPY_ICON');

    public function __construct()
    {
        $this->_CI = &get_instance();
        $this->_CI->load->config('datatable_config');
    }

    public function make_table($configIndex, $table_config)
    {

        $arr = $this->_CI->config->config[$configIndex];
        $columns = array_keys($arr);
        
        $headings = array();
        $footers = array();
        
        
        foreach ($columns as $column) {
            

            $fieldtype = "";
            $fieldtype_attributes = array();
            if (isset($arr[$column]["fieldtype"])) {

                $fieldtype = $arr[$column]["fieldtype"];
            }
            if (isset($arr[$column]["fieldtype_attributes"])) {

                $fieldtype_attributes = $arr[$column]["fieldtype_attributes"];
            }

            $column_val = $this->_CI->lang->line($column);
            
            if (empty($column_val)) {
                
                $column_heading = $column;
            } else {
                
                $column_heading = $this->_CI->lang->line($column);
            }
            
            if (!empty($fieldtype_attributes)) {
                
                $name = '';
                $class = '';
                foreach ($fieldtype_attributes as $key => $value) {
                    
                    if ($key == 'name') {
                        
                        $name = $value;
                    }
                    if ($key == 'class') {
                        
                        $class = $value;
                    }
                }
            }
            
            
            $headings[] = $column_heading;
            $footers[] = "";
        }
        
        $arrayWidth = $this->get_column_widths($configIndex);
        $jsonSortable = $this->get_sortable_columns($configIndex);
        
        $this->_CI->load->library('Table');
        
        
        
        if (empty($table_config['datatable_class'])) {
            
            $css_class = 'class="dyntable"';
        } else {
            
            $css_class = 'class="dyntable table dt-responsive table-bordered dataTable table-hover"';
            // $css_class = 'class="dyntable table dataTable table-bordered table-inverse"';
        }
        
        if (empty($table_config['table_id'])) {
            
            $tableId = uniqid();
        } else {
            
            $tableId = $table_config['table_id'];
        }
        // p($table_config['source']);



        if (isset($table_config['source'])) {
            $open = "<table jsonInfo='$jsonSortable' id='$tableId' $css_class source='{$table_config['source']}' width='100%'>";
        } else {
            $open = '<table id="' . $tableId . '" class="dyntable" width="100%">';
        }

        $tmpl = array(
            "table_open" => $open,
            'thead_open' => '<thead>',
            'thead_close' => '</thead>',
            "tfoot_open" => "<tfoot>",
            "footer_row_start" => "<tr>",
            "footer_cell_start" => "<td>",
            "footer_cell_end" => "</td>",
            "footer_row_end" => "</tr>",
            "tfoot_close" => "</tfoot>"
        );

        $this->_CI->table->set_template($tmpl);

        if (!empty($arrayWidth) && is_array($arrayWidth)) {
            $this->_CI->table->widths = $arrayWidth;
        }

        //            $this->_CI->table->set_heading(array_keys($columns));
        $this->_CI->table->set_heading($headings);

        if (!empty($table_config['footer'])) {
            $this->_CI->table->set_footer($footers);
        }
        $return = $this->_CI->table->generate($tableId);
        // p($return);
        // exit;
        return $return;
    }

    /**
     * Get paging parameters from GET/config vars.
     *
     * Creates an array of four elements that we can use to send paging/sorting parameter to BL.
     *
     * @param array $sortColumns is an array of grid columns that can be used for sorting.
     *
     * @return array contaning the following elements.
     *
     * offset
     * records_per_page
     * order_by
     * order_direction
     *
     */
    public function get_paging_params(array $sortColumns)
    {
        $sortColumns = array_values($sortColumns);

        $sortColIndex = $this->_CI->input->get("order[0][column]");
        $sortColIndex = empty($sortColIndex) ? "0" : $sortColIndex;
        if (!empty($sortColumns[$sortColIndex])) {
            $sort = $sortColumns[$sortColIndex];
            $order = $this->_CI->input->get("order[0][dir]");
        }
        $pagingParams = array();
        $pagingParams['order_by'] = $sort;
        $pagingParams['order_direction'] = $order;

        // Get start counter of the records to be displayed.
        $offset = $this->_CI->input->get('start');
        $pagingParams['offset'] = intval($offset);

        $search = $this->_CI->input->get('search[value]');
        $pagingParams['search'] = $search;

        //$records_per_page = $this->config->item('records_per_page');
        $records_per_page = $this->_CI->input->get('length');
        $pagingParams['records_per_page'] = $records_per_page;
        return $pagingParams;
    }

    public function get_column_widths($reportName = null)
    {
        $reportColumns = $this->_CI->config->item($reportName);

        if (empty($reportColumns)) {
            throw new Exception();
        }

        $widthArr = array();

        foreach ($reportColumns as $key => $arr) {
            if (!empty($arr['width'])) {
                $widthArr[] = $arr['width'];
            }
        }

        return $widthArr;
    }

    public function get_sortable_columns($reportName = null)
    {
        $reportColumns = $this->_CI->config->item($reportName);

        if (empty($reportColumns)) {
            throw new Exception();
        }

        $sortableArr = array();

        foreach ($reportColumns as $key => $arr) {
            if (array_key_exists('isSortable', $arr)) {
                $flag = $arr['isSortable'] == TRUE ? TRUE : FALSE;
            } else {
                $flag = TRUE;
            }

            $arr_col = array('orderable' => $flag);
            if (isset($arr['td_class']) && !empty($arr['td_class'])) {
                $arr_col["class"] = $arr['td_class'];
            }

            array_push($sortableArr, $arr_col);
        }

        return json_encode($sortableArr);
    }

    public function get_report_columns($reportName = null)
    {
        $reportColumns = $this->_CI->config->item($reportName);

        if (empty($reportColumns)) {
            throw new Exception();
        } else {
            return $reportColumns;
        }
    }

    public function get_json_output(array $resultSetObject, $reportColumnsKey, $obj = null)
    {
        $dataArray = $resultSetObject['resultSet'];


        $tableResponse = array();
        $tableResponse['iTotalRecords'] = empty($resultSetObject['foundRows']) ? 0 : $resultSetObject['foundRows'];
        $tableResponse['iTotalDisplayRecords'] = empty($resultSetObject['foundRows']) ? 0 : $resultSetObject['foundRows'];
        $tableResponse['aaData'] = array();

        $reportColumns = $this->get_report_columns($reportColumnsKey);

        if (!empty($dataArray)) {
            if (count($dataArray) > 0 && count($reportColumns) > 0) {
                foreach ($dataArray as $data) {

                    $tmp = array();
                    foreach ($reportColumns as $key => $valueArr) {


                        $align_div_start = '';
                        $align_div_end = '';

                        if (array_key_exists('align', $valueArr) && !empty($valueArr['align'])) {

                            $align_div_start = '<div align="' . $valueArr['align'] . '">';
                            $align_div_end = '</div>';
                        }
                        $check_access = true;
                        // p($valueArr['checkAccess']);
                        if (!empty($valueArr['checkAccess']) && !empty($valueArr['accessModule']) && !empty($valueArr['accessType']) && !empty($valueArr['userData']['usertype_id'])) {
                            //  p("1");
                            // exit;
                            $check_access = check_access($valueArr['accessModule'], $valueArr['userData']['usertype_id'], $valueArr['accessType']);
                        }
                        if (empty($check_access)) {
                            //  p("11");
                            // exit;
                            $tmp[] = $align_div_start . "-" . $align_div_end;
                        } else {

                            $field = empty($valueArr['jsonField']) ? '' : $valueArr['jsonField'];
                            if (array_key_exists('isLink', $valueArr) == TRUE && $valueArr['isLink'] == TRUE) {

                                $paramString = '';
                                $propertyString = '';

                                if (array_key_exists('linkTarget', $valueArr) && !empty($valueArr['linkTarget'])) {
                                    // p($valueArr);
                                    // exit;
                                    if (!empty($valueArr['linkAtts'])) {
                                        // p($valueArr['linkAtts']);
                                        // exit;

                                        foreach ($valueArr['linkAtts'] as $property => $propertyValue) {
                                            if (!empty($propertyValue['type']) && $propertyValue['type'] = 'dynamic') {
                                                $tmpValue = $data->{$propertyValue['field']};
                                            } else {
                                                $tmpValue = $propertyValue['value'];
                                            }

                                            $propertyString .= "$property='$tmpValue' ";
                                        }
                                    }
                                    if (array_key_exists('linkParams', $valueArr) && !empty($valueArr['linkParams'])) {
                                        $tmpArray = array();

                                        foreach ($valueArr['linkParams'] as $varName => $varValueField) {
                                            $tmpArray[] = $data->$varValueField;
                                        }
                                        $paramString = implode('/', $tmpArray);
                                    }

                                    $additionalInlineJs = NULL;
                                    $class = NULL;
                                    //     if (array_key_exists('systemDefaults', $valueArr) && !empty($valueArr['systemDefaults']))
                                    //     {
                                    //         if (!empty($valueArr['type']) && in_array(strtoupper($valueArr['type']), $this->_systemOperations))
                                    //         {
                                    //             if ($valueArr['type'] == 'UPDATE' || $valueArr['type'] == 'UPDATE_ICON' && !empty($valueArr['confirmBox']))
                                    //             {
                                    //                 $additionalInlineJs = "onClick=\"javascript:return confirm('Are you sure you want to update the delivery?')\"";
                                    //             }
                                    //             $linkCaption = $this->_parse_link_caption($valueArr);                            
                                    //             if (isset($valueArr['class_name']))
                                    //             {
                                    //                 $class = "class='" . $valueArr['class_name'] . "'";
                                    //             }
                                    //         }
                                    //         else
                                    //         {
                                    //             Throw New Exception('Something weird happened.');
                                    //         }
                                    //     }
                                    //     else
                                    //     {
                                    //         $linkCaption = $align_div_start . $data->$field . $align_div_end;
                                    //     }
                                    if (array_key_exists('systemDefaults', $valueArr) && !empty($valueArr['systemDefaults'])) {
                                        if (!empty($valueArr['type']) && in_array(strtoupper($valueArr['type']), $this->_systemOperations)) {

                                            if ($valueArr['type'] == 'DELETE' || $valueArr['type'] == 'DELETE_ICON' && !empty($valueArr['confirmBox'])) {
                                                $additionalInlineJs = "onClick=\"javascript:return confirm('Are you sure you want to delete?')\"";
                                            }
                                            $linkCaption = $this->_parse_link_caption($valueArr);


                                            if (isset($valueArr['class_name'])) {
                                                $class = "class='" . $valueArr['class_name'] . "'";
                                            }
                                        } else {
                                            throw new Exception('Something weird happened.');
                                        }
                                    } else {
                                        $linkCaption = $align_div_start . $data->$field . $align_div_end;
                                    }

                                    $linkclasses = "";
                                    if (!empty($valueArr["linkClasses"])) {
                                        $linkclasses = ' class="' . $valueArr["linkClasses"] . '" ';
                                    }

                                    $tmp[] = $align_div_start . "<a $linkclasses $additionalInlineJs href=\"" . site_url($valueArr['linkTarget'] . $paramString) . "\" $propertyString $class>" . $linkCaption . "</a>" . $align_div_end;
                                } else {
                                    $tmp[] = $align_div_start . $data->$field . $align_div_end;
                                }
                            } elseif (array_key_exists('isCheckBox', $valueArr) == TRUE && $valueArr['isCheckBox'] == TRUE) {
                                $varValueField = $valueArr['CheckBoxParams'][0];
                                $tmpValue = $data->$varValueField;


                                $chk_name = $valueArr["CheckBoxName"] . "[]";
                                $chk_id = $valueArr["CheckBoxName"] . "_" . $tmpValue;

                                $tmp[] = $align_div_start . "<input type='checkbox' name='$chk_name' id='$chk_id' value='$tmpValue'>" . $align_div_end;
                            } else {
                                $tmp[] = $align_div_start . $this->_parse_field($valueArr, $data, $field) . $align_div_end;
                            }
                        }
                    }

                    $tableResponse['aaData'][] = $tmp;
                }
            }
        }
        // p($tableResponse);
        // exit;
        return $tableResponse;
    }

    private function _parse_field($configArr, $objectRow, $fieldName)
    {
        $fieldValue = $objectRow->$fieldName;
        $return = $fieldValue;

        if (!empty($configArr['callBack']) && !empty($configArr['callBackType']) && !empty($configArr['callBackClass']) && !empty($configArr['callBackFunction'])) {

            $triggerCallback = true;
            $class = strtolower($configArr['callBackClass']);
            $function = $configArr['callBackFunction'];

            switch ($configArr['callBackType']) {
                case 'library':
                case 'model':
                    $callBackType = $configArr['callBackType'];
                    $this->_CI->load->$callBackType($class);
                    $return = $this->_CI->$class->$function($fieldValue, $objectRow);
                    break;
                case 'helper':
                    $callBackType = $configArr['callBackType'];
                    $this->_CI->load->$callBackType($class);
                    if (!empty($configArr['callBackParam'])) {
                        $callBackParam = $configArr['callBackParam'];
                        $return = $function($fieldValue, $callBackParam, $objectRow);
                    } else {
                        $return = $function($fieldValue, $objectRow);
                    }

                    //                        $return = $function($fieldValue, $objectRow);
                default:
                    $triggerCallback = false;
            }

            //@TODO - Static methods ? is_callable implementation is to be done                
            //                $return = $triggerCallback === true ? $this->_CI->$class->$function($fieldValue, $objectRow) : $fieldValue;
        }
        return $return;
    }

    private function _parse_link_caption($valueArr)
    {
        $operation = $valueArr['type'];

        switch ($operation) {
            case 'VIEW':
                $return = 'VIEW'; // later we will get values from lang
                break;
            case 'VIEW_ICON':
                $return = '<i class="fa fa-eye action-icon"></i>';
                break;
            case 'EDIT':
                $return = 'EDIT'; // later we will get values from lang
                break;
            case 'EDIT_ICON':
                $return = '<i class="fas fa-eye"></i>';
                break;
            case 'RESTORE_ICON':
                $return = '<i class="fa fa-undo action-icon"></i>';
                break;
            case 'STATUS_ICON':
                $return = '<i class="fa fa-toggle-on  action-icon"></i>';
                break;
            case 'SORT_ICON':
                $return = '<i class="fa fa-sort" aria-hidden="true"></i>';
                break;
            case 'DELETE':
                $return = 'DELETE'; // later we will get values from lang
                break;
            case 'DELETE_ICON':
                $return = '<i class="fe-trash-2"></i>';
                break;
            case 'print':
                $return = 'PRINT'; // later we will get values from lang
                break;
            case 'PRINT_ICON':
                $return = '<i class="fa fa-print action-icon"></i>';
                break;
            case 'UPDATE':
                $return = 'UPDATE'; // later we will get values from lang
                break;
            case 'UPDATE_ICON':
                $return = '<i class="fa fa-refresh"></i>';
                break;
            case 'HISTORY':
                $return = 'UPDATE'; // later we will get values from lang
                break;
            case 'HISTORY_ICON':
                $return = '<i class="fa fa-history"></i>';
                break;
            case 'DOWNLOAD_ICON':
                $return = '<i class="fa fa-download"></i>';
                break;
            case 'COPY_ICON':
                $return = '<i class="fa fa-files-o"></i>';
                break;
            case 'OTHER_ICON':
                if (empty($valueArr['iconClass'])) {
                    throw new Exception('Icon Class was not found');
                }
                $return = '<i class="' . $valueArr['iconClass'] . ' action-icon"></i>';
                //                    $title = empty($valueArr['titleText']) ? '' : "title = '{$valueArr['titleText']}'";
                //                    $return = "<img src='" . base_url() . "{$valueArr['iconPath']}' $title>";
                break;
            case 'OTHER_TEXT':
                if (empty($valueArr['otherText'])) {
                    throw new Exception('Link text missing');
                }

                $return = $valueArr['otherText'];
                break;
            case 'REQUEST_VIEW_ICON':
                $return = '<i class="fa fa-eye action-icon request_view"></i>';
                break;
        }

        return $return;
    }
}
