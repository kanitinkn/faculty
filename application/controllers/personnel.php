<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class personnel extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'personnel';
        $title['title'] = 'ปริญญาโท';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('personnel/personnel');
        $this->load->view('_include/footer');
    }

}

/* End of file personnel.php */
/* Location: ./application/controllers/personnel.php */