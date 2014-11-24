<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class workin extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'workin';
        $title['title'] = 'หน่วยงาน';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('degree/workin');
        $this->load->view('_include/footer');
    }

}

/* End of file bachelor.php */
/* Location: ./application/controllers/bachelor.php */