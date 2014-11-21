<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class doctorate extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'doctorate';
        $title['title'] = 'ปริญญาเอก';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('degree/doctorate');
        $this->load->view('_include/footer');
    }

}

/* End of file doctorate.php */
/* Location: ./application/controllers/doctorate.php */