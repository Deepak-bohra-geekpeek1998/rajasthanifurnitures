<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends My_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('admin_login');
        // p($query);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            // p($row);
            return $row;
        } else {
            $this->db->where('email', $email)
                ->where('password', $password);
            $query = $this->db->get('admin_login');

            if ($query->num_rows() > 0) {
                return 'disabled';
            } else {
                return FALSE;
            }
            return FALSE;
        }
    }
    public function getpackdata()
    {
        $productArray = $this->db->get('client_detail');
        // p($productArray);
        return $productArray->result_array();
    }
    public function getcategorydata()
    {
        $productArray = $this->db->get('category_add');
        // p($productArray);
        return $productArray->result_array();
    }
    public function fetchcategorydata()
    {
        $productArray = $this->db->get('category_add');
        // p($productArray);
        return $productArray->result_array();
    }



    public function category_upload($dataValue)
    {
        $this->db->insert('category_add', $dataValue);
    }
    public function update_category($dataValue)
    {
        $this->db->where('category_id', $dataValue['category_id']);
        $this->db->Update('category_add', $dataValue);
        // print_r("28");
        // exit;
    }
    public function get_category($category_id)
    {
        $this->db->select('*');
        $this->db->from('category_add');
        $this->db->where('category_id', $category_id);
        $productArray = $this->db->get()->row_array();
        // p($productArray);

        return $productArray;
    }
    public function deleteCategory($category_id)
    {
        $this->db->where('category_id', $category_id);
        $this->db->delete('category_add');
    }


    public function banner_upload($dataValue)
    {
        $this->db->insert('banner_data', $dataValue);
    }
    public function get_banner_data()
    {
        $bannerArray = $this->db->get('banner_data');
        // p($productArray);
        return $bannerArray->result_array();
    }

    public function update_banner($dataValue)
    {
        $this->db->where('banner_id', $dataValue['banner_id']);
        $this->db->Update('banner_data', $dataValue);
    }
    public function update_banner_data($banner_id)
    {
        $this->db->select('*');
        $this->db->from('banner_data');
        $this->db->where('banner_id', $banner_id);
        $bannerArray = $this->db->get()->row_array();
        // p($productArray);
        return $bannerArray;
    }

    public function deleteBanner($banner_id)
    {
        $this->db->where('banner_id', $banner_id);
        $this->db->delete('banner_data');
    }
    public function client_delete($client_id)
    {
        $this->db->where('client_id', $client_id);
        $this->db->delete('client_detail');
    }

}
