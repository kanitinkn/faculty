<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class index extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'index';
        $title['title'] = 'หน้าหลัก';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('index');
        $this->load->view('_include/footer');
    }

}

/* End of file index.php */
/* Location: ./application/controllers/index.php */