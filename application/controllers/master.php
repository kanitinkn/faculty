<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class master extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'master';
        $title['title'] = 'ปริญญาโท';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('degree/master');
        $this->load->view('_include/footer');
    }

}

/* End of file master.php */
/* Location: ./application/controllers/master.php */