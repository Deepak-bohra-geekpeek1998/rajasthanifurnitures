<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Package extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library("Upload");
        $this->load->library('session');
        $this->load->model('admin/Package_model');
        $this->load->model('admin/User_model');
        $this->load->library("Commonlibrary");
        $this->load->helper('form');
    }
    public function add_product()
    {
        $categoryArray['select'] = $this->User_model->fetchcategorydata();
        // p($categoryArray);

        // $this->load->view('add_product');
        $this->load->view('add_product', $categoryArray);
    }
    public function package_add()
    {
        // p($this->input->post());
        // exit;
        $product_id = $this->input->post('id');
        // p("Adfs");
        if (empty($product_id)) {
            if ($_FILES["product_images"]["name"]) {
                $config['upload_path'] = 'assets/admin/product_images/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 16000;
                $config['file_name'] = $_FILES['product_images']['name'];

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('product_images')) {
                    echo "Image not loaded. Error: " . $this->upload->display_errors();

                    // redirect(current_url());
                }

                if (!empty($_FILES["product_images"]["name"])) {

                    $dataArray = array(
                        'product_images' => $this->upload->data('file_name'),
                        'product_name' => $this->input->post('product_name'),
                        'product_price' => $this->input->post('product_price'),
                        'product_description' => $this->input->post('product_description'),
                        'product_category' => $this->input->post('product_category'),

                    );

                    $this->Package_model->upload_package($dataArray);
                    $this->session->set_flashdata('blog_msg', 'Product Added Successfuly');
                    redirect(base_url('admin/add_product'));
                    // $this->session->set_flashdata('type_msg', ' Item Type Add  Successfuly');
                }

            }
        } else {
            if (!empty($_FILES["product_images"]["name"])) {
                if ($_FILES["product_images"]["name"]) {
                    $config['upload_path'] = 'assets/admin/product_images/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 16000;
                    $config['file_name'] = $_FILES['product_images']['name'];

                    $this->load->library('upload', $config);

                    if (!$this->upload->do_upload('product_images')) {
                        echo "Image not loaded: " . $this->upload->display_errors();
                    } else {
                        $existingImage = $this->Package_model->get_product_image_by_id($product_id);

                        $dataArray = array(
                            'product_id' => $product_id,
                            'product_name' => $this->input->post('product_name'),
                            'product_price' => $this->input->post('product_price'),
                            'product_description' => $this->input->post('product_description'),
                            'product_images' => $this->upload->data('file_name'),
                            'product_category' => $this->input->post('product_category'),
                        );

                        $this->Package_model->update_data($dataArray);

                        if (!empty($existingImage)) {
                            $oldImagePath = 'assets/admin/product_images/' . $existingImage;
                            if (file_exists($oldImagePath)) {
                                unlink($oldImagePath);
                            }
                        }

                        redirect(base_url('admin/home'));
                    }
                }
            } else {
                // p($this->input->post());
                $dataArray = array(
                    'product_id' => $this->input->post('id'),
                    'product_name' => $this->input->post('product_name'),
                    'product_price' => $this->input->post('product_price'),
                    'product_description' => $this->input->post('product_description'),
                    'product_category' => $this->input->post('product_category'),
                );
                $this->Package_model->update_data($dataArray);
                // $this->session->set_flashdata('type_msg', ' Item Type Updates  Successfuly');

            }
            redirect(base_url('admin/home'));
        }

    }

    public function packlist()
    {
        $dataArray['select'] = $this->Package_model->getpackdata();
        $this->load->view('home', $dataArray);
    }

    public function update_package($dataid = null)
    {
        if (!empty($dataid)) {
            $dataArray['package_update'] = $this->Package_model->get_package($dataid);
            $dataArray['select'] = $this->User_model->fetchcategorydata();
            // p($dataArray['select']);
            // p($dataArray);
            $this->load->view('add_product', $dataArray);
        }
    }
    public function delete($id)
    {
        $this->Package_model->deleteProduct($id);
        $this->session->set_flashdata('Item_msg', ' Item Deleted Successfuly');
        redirect("admin/home");
    }

}