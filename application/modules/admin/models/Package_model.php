<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Package_model extends My_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function upload_package($dataValue)
    {
        $this->db->insert('add_product', $dataValue);
    }

    public function update_data($dataValue)
    {
        $this->db->where('product_id', $dataValue['product_id']);
        $this->db->Update('add_product', $dataValue);
        // print_r("28");
        // exit;
    }
    public function getpackdata()
    {
        $productArray = $this->db->get('add_product');
        // p($productArray);
        return $productArray->result_array();
    }
    public function get_package($dataid)
    {
        $this->db->select('*');
        $this->db->from('add_product');
        $this->db->where('product_id', $dataid);
        $productArray = $this->db->get()->row_array();
        // p($productArray);

        return $productArray;
    }
    public function deleteProduct($id)
    {
        $this->db->where('product_id', $id);
        $this->db->delete('add_product');
    }
    public function get_product_image_by_id($product_id)
    {
        // Retrieve the existing image filename based on the product ID
        $this->db->select('*');
        $this->db->where('product_id', $product_id);
        $query = $this->db->get('add_product'); // Assuming 'packages' is the table name
        // p($query);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            return $row->product_images;
        } else {
            return NULL;
        }
    }
}