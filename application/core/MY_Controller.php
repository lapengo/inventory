<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
    protected $halaman = '';

    public function __construct()
    {
        parent::__construct();

        date_default_timezone_set('Asia/Jakarta');

        $model = strtolower(get_class($this));
        if (file_exists(APPPATH . 'models/' . $model . '_model.php')) {
            $this->load->model($model . '_model', $model, true);
        }
    }
}
