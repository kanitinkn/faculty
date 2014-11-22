<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class download extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'download';
        $title['title'] = 'Download';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('download');
        $this->load->view('_include/footer');
    }

}

/* End of file download.php */
/* Location: ./application/controllers/download.php */