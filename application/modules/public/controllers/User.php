<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User extends MY_Controller
{

    private $_users_listing_headers = 'users_listing_headers';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('public/User_model');
        $this->load->setTemplate('public');
    }

    public function home()
    {
        $categoryArray['select'] = $this->User_model->getcategorydata();
        $categoryArray['banner'] = $this->User_model->fetch_banner_data();
        // p($bannerArray['banner']);
        $this->load->view('index', $categoryArray);

        // $this->load->view('index');
    }
    public function about_us()
    {
        // p("Adsf");
        $this->load->view('about-us');
    }

    public function product_category($product_data_id = null)
    {
        if (!empty($product_data_id)) {
            $categoryArray['category_data'] = $this->User_model->get_productdata($product_data_id);
        }
        $categoryArray['category'] = $this->User_model->getcategorydata();
        $this->load->view('product-category', $categoryArray);
    }
    
    public function product_detail($product_detail_id = null)
    {
        if (!empty($product_detail_id)) {

            // p("asfdg");
            $detailArray['detail_data'] = $this->User_model->get_detail_data($product_detail_id);

            $this->load->view('product-detail', $detailArray);
        }
    }
    // public function preview()
    // {
    //     $this->load->view('preview');
    // }
    public function client()
    {
        // p("afsd");
        $id = $this->input->post('client_id');
        $dataArray = array(
            'client_name' => $this->input->post('client_name'),
            'client_email' => $this->input->post('client_email'),
            'client_subject' => $this->input->post('client_subject'),
            'client_message' => $this->input->post('client_message'),
        );
        $this->User_model->client_data($dataArray);
        redirect(base_url(''));
        // p($dataArray);
        // $this->load->view('index');
    }
    public function contactus()
    {
        $this->load->view('contact-us');
    }

    // public function beds_images()
    // {
    //     $this->load->view('beds');
    // }
    // public function book_shelves()
    // {
    //     $this->load->view('bookshelves');
    // }
    // public function wine_Rack()
    // {
    //     // $categoryArray['select'] = $this->User_model->get_product_data();
    //     $this->load->view('wineRack');
    // }
    // public function centre_Table()
    // {
    //     $this->load->view('centre-Table');
    // }

    // public function dining_set()
    // {
    //     $this->load->view('dining-set');
    // }
    // public function dressing_table()
    // {
    //     $this->load->view('dressing-table');
    // }
    // public function shoe_rack()
    // {
    //     $this->load->view('shoe-rack');
    // }
    // public function sofa_set()
    // {
    //     $this->load->view('sofa-set');
    // }
    // public function study_table()
    // {
    //     $this->load->view('study-table');
    // }
    // public function tv_set()
    // {
    //     $this->load->view('tv-set');
    // }
}
