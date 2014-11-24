<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class manager extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'manager';
        $title['title'] = 'คณะผู้บริหาร';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('personnel/manager');
        $this->load->view('_include/footer');
    }

}

/* End of file bachelor.php */
/* Location: ./application/controllers/bachelor.php */