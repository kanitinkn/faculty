<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class department extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'department';
        $title['title'] = 'ภาควิชา';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('degree/department');
        $this->load->view('_include/footer');
    }

}

/* End of file bachelor.php */
/* Location: ./application/controllers/bachelor.php */