<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Storage extends CI_Controller
{
    public $model;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('storage_model');
        $this->model = $this->storage_model;
    }
    public function index()
    {
        $rows = $this->model->get_data_stok();
        // var_dump($rows);
        // exit;
        $data = array('judul' => '<h1>Grafik Stok Barang</h1>',
            'rows' => $rows);

        $this->load->view('storage/dashboard', $data);
    }
}
