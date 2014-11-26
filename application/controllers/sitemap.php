<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class sitemap extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $page['page'] = 'sitemap';
        $title['title'] = 'แผนผังเว็บ';
        $this->load->view('_include/header',$title);
        $this->load->view('_include/navbar',$page);
        $this->load->view('sitemap');
        $this->load->view('_include/footer');
    }

}

/* End of file sitemap.php */
/* Location: ./application/controllers/sitemap.php */