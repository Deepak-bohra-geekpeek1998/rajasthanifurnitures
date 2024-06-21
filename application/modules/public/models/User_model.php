<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class User_model extends My_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function client_data($dataValue)
    {
        $this->db->insert('client_detail', $dataValue);
    }
    public function getcategorydata()
    {
        $productArray = $this->db->get('category_add');
        // p($productArray);
        return $productArray->result_array();
    }
    public function get_product_data()
    {
        $productArray = $this->db->get('add_product');
        // p($productArray);
        return $productArray->result_array();
    }
    public function get_productdata($product_data_id)
    {
        $this->db->where('product_category', $product_data_id);
        return $this->db->get('add_product')->result_array();
        // p($productArray);
        // return $productArray->result_array();
    }
    public function get_detail_data($product_detail_id)
    {
        // p("productArray");
        $this->db->where('product_id', $product_detail_id);
        return $this->db->get('add_product')->result_array();
        // return $productArray->result_array();
    }
    public function get_product()
    {
        return $this->db->get('add_product')->result_array();
    }

    public function get_product_by_id($id_by_product)
    {
        $this->db->where('product_id', $id_by_product);
        return $this->db->get('add_product')->row_array();
    }
    public function getpackdata()
    {
        $productArray = $this->db->get('add_product');
        // p($productArray);
        return $productArray->result_array();
    }
    public function fetch_banner_data()
    {
        $productArray = $this->db->get('banner_data');
        // p($productArray);
        return $productArray->result_array();
    }

}
