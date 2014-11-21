<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class bachelor extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'bachelor';
        $title['title'] = 'ปริญญาตรี';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('degree/bachelor');
        $this->load->view('_include/footer');
    }

}

/* End of file bachelor.php */
/* Location: ./application/controllers/bachelor.php */