<?php

class Cronjob extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $date = date('Y-m-d');

        import_nifty_index_data('nifty_index', $date);
        import_script_data('index', $date);
    }

}
