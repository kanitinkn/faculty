<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class contact extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'contact';
        $title['title'] = 'ติดต่อ';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('contact');
        $this->load->view('_include/footer');
    }

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */