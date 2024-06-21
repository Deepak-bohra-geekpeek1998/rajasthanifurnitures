<?php
if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class User extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->library("Upload");
        $this->load->library('session');
        $this->load->model('admin/User_model');
        $this->load->library("Commonlibrary");
        $this->load->helper('form');
    }

    public function index()
    {
        // p("ilia");
        redirect('admin');
    }

    public function login()
    {
        $message = $this->session->flashdata('login_operation_message');
        $this->load->setTemplate('blank');
        $this->load->view('login-form', array("message" => $message));
    }

    public function signin()
    {
        // p($this->input->post());
        // exit;
        $this->load->setTemplate('blank');
        $dataArray[] = array();
        $registerData = $this->input->post();

        $this->form_validation->set_rules('email', 'email', 'required|trim'); //|min_length[4]|max_length[50]
        $this->form_validation->set_rules('password', 'Password', 'required|trim'); //|min_length[4]|max_length[50]

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('login_operation_message', $this->lang->line('error_login_auth'));
            $this->load->view('login-form', $dataArray);
        } else {

            $encrypted_password = $this->input->post('password');

            $userdata = $this->User_model->login($this->input->post('email'), $encrypted_password);

            if ($userdata->is_active == 'No') {
                $this->session->set_flashdata('login_error_message', 'Your Account is Not Active');
                redirect(current_url());
            } else if ($userdata->is_delete == 'Yes') {
                $this->session->set_flashdata('login_error_message', 'Your Account is Delete');
                redirect(current_url());
            } else {
                $this->session->set_userdata('admin', $userdata);
                redirect('admin/dashboard');
            }
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('admin/index');
    }

    public function home()
    {
        $this->load->view('home');
    }
    public function dashboard()
    {
        $this->load->view('dashboard');
    }
    public function client_list()
    {
        $dataArray['select'] = $this->User_model->getpackdata();
        // p($dataArray['select']);
        $this->load->view('admin/client-list', $dataArray);
    }

    public function client_delete($client_id)
    {
        $this->User_model->client_delete($client_id);
        redirect("client-list");
    }

    public function category_add()
    {
        $this->load->view('category-add');
    }
    public function category_form()
    {

        $category_id = $this->input->post('category_id');

        if (empty($category_id)) {

            if ($_FILES["category_image"]["name"]) {
                $config['upload_path'] = 'assets/admin/category_image/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 16000;
                $config['file_name'] = $_FILES['category_image']['name'];

                // print_r($config);
                // p($_FILES['category_image']['name']);
                // exit;
                // exit;
                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('category_image')) {

                    echo "Image not loaded. Error: " . $this->upload->display_errors();

                    // redirect(current_url());
                }
                // p("bohra");
                if (!empty($_FILES["category_image"]["name"])) {
                    // print_r($_FILES["prcphoto"]["name"]);
                    // exit;
                    $dataArray = array(
                        'category_image' => $this->upload->data('file_name'),
                        'category_name' => $this->input->post('category_name'),
                    );
                    // p($dataArray);
                    $this->User_model->category_upload($dataArray);
                    redirect(base_url('category-list'));
                    // $this->session->set_flashdata('type_msg', ' Item Type Add  Successfuly');
                }

            }
        } else {

            if (!empty($_FILES["category_image"]["name"])) {
                if ($_FILES["category_image"]["name"]) {
                    $config['upload_path'] = 'assets/admin/category_image/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 16000;
                    $config['file_name'] = $_FILES['category_image']['name'];
                    // p("adfs");
                    // exit;

                    $this->load->library('upload', $config);
                    // print_r($this->input->post());
                    // print_r($_FILES['prcphoto']['name']);
                    // exit;
                    if (!$this->upload->do_upload('category_image')) {
                        echo "Image not loaded. Error: " . $this->upload->display_errors();
                        // redirect(current_url());
                    }
                    $dataArray = array(
                        'category_id' => $this->input->post('category_id'),
                        'category_name' => $this->input->post('category_name'),
                        'category_image' => $this->upload->data('file_name'),
                    );
                    // p($dataArray);
                    // exit;
                    $this->User_model->update_category($dataArray);
                }
            } else {
                $dataArray = array(
                    'category_id' => $this->input->post('category_id'),
                    'category_name' => $this->input->post('category_name'),
                    // 'category_image' => $this->upload->data('file_name'),
                );
                $this->User_model->update_category($dataArray);
                // $this->session->set_flashdata('type_msg', ' Item Type Updates  Successfuly');
            }
            redirect(base_url('category-list'));
        }
    }
    public function category_list()
    {
        $categoryArray['select'] = $this->User_model->getcategorydata();
        $this->load->view('category-list', $categoryArray);
    }
    public function category_list_data()
    {
        $categoryArray['select'] = $this->User_model->fetchcategorydata();
        $this->load->view('add_product', $categoryArray);
    }


    public function update_category($category_id)
    {
        if (!empty($category_id)) {
            $dataArray['category_update'] = $this->User_model->get_category($category_id);
            $this->load->view('category-add', $dataArray);
            // p("package_update");
        }
    }
    public function delete_category($category_id)
    {
        $this->User_model->deleteCategory($category_id);
        redirect("category-list");
    }
    public function banner_add()
    {
        $this->load->view('banner-add');
    }

    public function banner_data()
    {

        $banner_id = $this->input->post('banner_id');

        if (empty($banner_id)) {
            $this->load->library('upload');
            if ($_FILES["banner_image"]["name"]) {
                $config['upload_path'] = 'assets/admin/banner_image/';
                $config['allowed_types'] = '*';
                $config['max_size'] = 16000;
                $config['file_name'] = $_FILES['banner_image']['name'];

                // print_r($config);
                // p($_FILES['category_image']['name']);
                // exit;
                // exit;
                $this->upload->initialize($config);
                // $this->load->library('upload', $config);

                if (!$this->upload->do_upload('banner_image')) {

                    echo "Image not loaded. Error: " . $this->upload->display_errors();

                    // redirect(current_url());
                }
                // p("bohra");
                if (!empty($_FILES["banner_image"]["name"])) {
                    // print_r($_FILES["prcphoto"]["name"]);
                    // exit;
                    $dataArray = array(
                        'banner_image' => $this->upload->data('file_name'),
                        'banner_name' => $this->input->post('banner_name'),
                        'banner_heading' => $this->input->post('banner_heading'),
                        'banner_description' => $this->input->post('banner_description'),
                        'banner_quotes' => $this->input->post('banner_quotes'),
                    );
                    // p($dataArray);
                    $this->User_model->banner_upload($dataArray);
                    $this->session->set_flashdata('success_msg', 'Banner added successfully.');

                    redirect(base_url('banner-list'));
                    // $this->session->set_flashdata('type_msg', ' Item Type Add  Successfuly');
                }

            }
        } else {

            if (!empty($_FILES["banner_image"]["name"])) {

                if ($_FILES["banner_image"]["name"]) {
                    $config['upload_path'] = 'assets/admin/banner_image/';
                    $config['allowed_types'] = '*';
                    $config['max_size'] = 16000;
                    $config['file_name'] = $_FILES['banner_image']['name'];
                    // p("adfs");
                    // p("Afds");
                    // exit;

                    $this->load->library('upload', $config);
                    // print_r($this->input->post());
                    // print_r($_FILES['prcphoto']['name']);
                    // exit;
                    if (!$this->upload->do_upload('banner_image')) {
                        echo "Image not loaded. Error: " . $this->upload->display_errors();

                        // redirect(current_url());
                    }
                    // p($this->input->post());
                    $dataArray = array(
                        'banner_id' => $this->input->post('banner_id'),
                        'banner_name' => $this->input->post('banner_names'),
                        'banner_image' => $this->upload->data('file_name'),
                        'banner_heading' => $this->input->post('banner_heading'),
                        'banner_description' => $this->input->post('banner_description'),
                        'banner_quotes' => $this->input->post('banner_quotes'),
                    );
                    // p($dataArray);
                    // exit;
                    $this->User_model->update_banner($dataArray);
                    
                }
            } else {
                // p("afds");
                $dataArray = array(
                    'banner_id' => $this->input->post('banner_id'),
                    'banner_name' => $this->input->post('banner_name'),
                    'banner_heading' => $this->input->post('banner_heading'),
                        'banner_description' => $this->input->post('banner_description'),
                        'banner_quotes' => $this->input->post('banner_quotes'),
                    // 'category_image' => $this->upload->data('file_name'),
                );
                $this->User_model->update_banner($dataArray);
                // $this->session->set_flashdata('type_msg', ' Item Type Updates  Successfuly');
                $this->session->set_flashdata('success_msg', 'Banner updated successfully.');

            }
            redirect(base_url('banner-list'));
        }
    }
    public function update_banner($banner_id = null)
    {
        if (!empty($banner_id)) {
            $dataArray['banner_update'] = $this->User_model->update_banner_data($banner_id);
            // p($dataArray['banner_update']);
            $this->load->view('banner-add', $dataArray);
        }
    }
    public function delete_banner($banner_id)
    {
        $this->User_model->deleteBanner($banner_id);
        redirect("banner-list");
    }
    public function banner_list()
    {
        $dataArray['banner_data'] = $this->User_model->get_banner_data();
        $this->load->view('banner-list', $dataArray);
    }

}